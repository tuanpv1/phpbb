<?php
//------------------------------------------------------------------------------
// phpBB BBCode installer v0.1 [22.05.2012]
// (C) 2012 Evgeny Vrublevsky <veg@tut.by>
//------------------------------------------------------------------------------
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/acp/acp_bbcodes.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('install');
$user->add_lang('acp/posting');

function bbcode_exists($bbcode_match)
{
	global $db, $user, $cache;
	$acp_bbcodes = new acp_bbcodes();
	$data = $acp_bbcodes->build_regexp($bbcode_match, $bbcode_tpl);

	$sql = 'SELECT bbcode_id
		FROM ' . BBCODES_TABLE . "
		WHERE LOWER(bbcode_tag) = '" . $db->sql_escape(strtolower($data['bbcode_tag'])) . "'";
	$result = $db->sql_query($sql);
	$bbcode_id = $db->sql_fetchrow($result);
	$db->sql_freeresult($result);
	return isset($bbcode_id['bbcode_id']) ? $bbcode_id['bbcode_id'] : false;
}

function set_bbcode($bbcode_match, $bbcode_tpl, $bbcode_helpline, $display_on_posting = false, $bbcode_replace = false)
{
	global $db, $user, $cache;
	$acp_bbcodes = new acp_bbcodes();
	$data = $acp_bbcodes->build_regexp($bbcode_match, $bbcode_tpl);

	$sql = 'SELECT bbcode_id
		FROM ' . BBCODES_TABLE . "
		WHERE LOWER(bbcode_tag) = '" . $db->sql_escape(strtolower($data['bbcode_tag'])) . "'";
	$result = $db->sql_query($sql);
	$bbcode_id = $db->sql_fetchrow($result);
	$db->sql_freeresult($result);
	$bbcode_id = isset($bbcode_id['bbcode_id']) ? $bbcode_id['bbcode_id'] : false;

	// Make sure the user didn't pick a "bad" name for the BBCode tag.
	$hard_coded = array('code', 'quote', 'quote=', 'attachment', 'attachment=', 'b', 'i', 'url', 'url=', 'img', 'size', 'size=', 'color', 'color=', 'u', 'list', 'list=', 'email', 'email=', 'flash', 'flash=');
	if (($bbcode_id && !$bbcode_replace) || in_array(strtolower($data['bbcode_tag']), $hard_coded) || (preg_match('#\[/([^[]*)]$#', $bbcode_match, $regs) && in_array(strtolower($regs[1]), $hard_coded)))
	{
		trigger_error($user->lang['BBCODE_INVALID_TAG_NAME'], E_USER_WARNING);
	}

	if (substr($data['bbcode_tag'], -1) === '=')
	{
		$test = substr($data['bbcode_tag'], 0, -1);
	}
	else
	{
		$test = $data['bbcode_tag'];
	}

	if (!preg_match('%\\[' . $test . '[^]]*].*?\\[/' . $test . ']%s', $bbcode_match))
	{
		trigger_error($user->lang['BBCODE_OPEN_ENDED_TAG'], E_USER_WARNING);
	}

	if (strlen($data['bbcode_tag']) > 16)
	{
		trigger_error($user->lang['BBCODE_TAG_TOO_LONG'], E_USER_WARNING);
	}

	if (strlen($bbcode_match) > 4000)
	{
		trigger_error($user->lang['BBCODE_TAG_DEF_TOO_LONG'], E_USER_WARNING);
	}


	if (strlen($bbcode_helpline) > 255)
	{
		trigger_error($user->lang['BBCODE_HELPLINE_TOO_LONG'], E_USER_WARNING);
	}

	$sql_ary = array(
		'bbcode_tag'				=> $data['bbcode_tag'],
		'bbcode_match'				=> $bbcode_match,
		'bbcode_tpl'				=> $bbcode_tpl,
		'display_on_posting'		=> $display_on_posting,
		'bbcode_helpline'			=> $bbcode_helpline,
		'first_pass_match'			=> $data['first_pass_match'],
		'first_pass_replace'		=> $data['first_pass_replace'],
		'second_pass_match'			=> $data['second_pass_match'],
		'second_pass_replace'		=> $data['second_pass_replace']
	);

	if (!$bbcode_id)
	{
		$sql = 'SELECT MAX(bbcode_id) as max_bbcode_id
			FROM ' . BBCODES_TABLE;
		$result = $db->sql_query($sql);
		$row = $db->sql_fetchrow($result);
		$db->sql_freeresult($result);

		if ($row)
		{
			$bbcode_id = $row['max_bbcode_id'] + 1;

			// Make sure it is greater than the core bbcode ids...
			if ($bbcode_id <= NUM_CORE_BBCODES)
			{
				$bbcode_id = NUM_CORE_BBCODES + 1;
			}
		}
		else
		{
			$bbcode_id = NUM_CORE_BBCODES + 1;
		}

		if ($bbcode_id > BBCODE_LIMIT)
		{
			trigger_error($user->lang['TOO_MANY_BBCODES'], E_USER_WARNING);
		}

		$sql_ary['bbcode_id'] = (int) $bbcode_id;

		$db->sql_query('INSERT INTO ' . BBCODES_TABLE . $db->sql_build_array('INSERT', $sql_ary));
		$cache->destroy('sql', BBCODES_TABLE);

		$lang = 'BBCODE_ADDED';
		$log_action = 'LOG_BBCODE_ADD';
	}
	else
	{
		$sql = 'UPDATE ' . BBCODES_TABLE . '
			SET ' . $db->sql_build_array('UPDATE', $sql_ary) . '
			WHERE bbcode_id = ' . $bbcode_id;
		$db->sql_query($sql);
		$cache->destroy('sql', BBCODES_TABLE);

		$lang = 'BBCODE_EDITED';
		$log_action = 'LOG_BBCODE_EDIT';
	}

	add_log('admin', $log_action, $data['bbcode_tag']);
	// trigger_error($user->lang[$lang]);
}

function delete_bbcode($bbcode_match)
{
	global $db, $user, $cache;
	$acp_bbcodes = new acp_bbcodes();
	$data = $acp_bbcodes->build_regexp($bbcode_match, $bbcode_tpl);

	$sql = 'SELECT bbcode_id
		FROM ' . BBCODES_TABLE . "
		WHERE LOWER(bbcode_tag) = '" . $db->sql_escape(strtolower($data['bbcode_tag'])) . "'";
	$result = $db->sql_query($sql);
	$bbcode_id = $db->sql_fetchrow($result);
	$db->sql_freeresult($result);
	$bbcode_id = isset($bbcode_id['bbcode_id']) ? $bbcode_id['bbcode_id'] : false;
	if (!$bbcode_id) return;

	$db->sql_query('DELETE FROM ' . BBCODES_TABLE . " WHERE bbcode_id = $bbcode_id");
	$cache->destroy('sql', BBCODES_TABLE);
	add_log('admin', 'LOG_BBCODE_DELETE', $data['bbcode_tag']);

	trigger_error($user->lang['DONE']);
}

if (!$auth->acl_get('a_') || empty($user->data['is_registered']))
{
	trigger_error('Only for admins');
}

$user_lang = $user->lang['USER_LANG'];
if (strpos($user_lang, '-x-') !== false)
{
	$user_lang = substr($user_lang, 0, strpos($user_lang, '-x-'));
}

$title = '[media]';
$jsfile = str_replace('//', '/', $user->page['root_script_path'] . '/bbmedia.php');

$bbcode1 = '[media]{URL}[/media]';
$tpl1 = <<<HTML
<div class='bbmedia' data-url='{URL}' style='margin: 1px; display: inline-block; vertical-align: bottom;'><div style='width: 200px; height: 40px; border: 1px solid #999; display: table-cell; text-align: center; vertical-align: middle; font: 10px/10px Verdana; color: #555; opacity: 0.5;'><a style='color: #105289; text-decoration: none;' href='http://phpbbex.com/' target='_blank'>phpBB</a> &#91;media&#93;</div><script><!--
if (typeof bbmedia == 'undefined') { bbmedia = true; var e = document.createElement('script'); e.async = true; e.src = '$jsfile'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(e, s); }
//--></script></div>
HTML;
$help1 = ($user_lang == 'ru') ? 'Вставить аудио, видео, карту, панораму или другое мультимедиа: [media]http://youtube.com/url[/media]' : 'Insert audio, video, map, panorama or other multimedia: [media]http://youtube.com/url[/media]';

$bbcode2 = '[media={INTTEXT}]{URL}[/media]';
$tpl2 = <<<HTML
<div class='bbmedia' data-url='{URL}' data-args='{INTTEXT}' style='margin: 1px; display: inline-block; vertical-align: bottom;'><div style='width: 200px; height: 40px; border: 1px solid #999; display: table-cell; text-align: center; vertical-align: middle; font: 10px/10px Verdana; color: #555; opacity: 0.5;'><a style='color: #105289; text-decoration: none;' href='http://phpbbex.com/' target='_blank'>phpBB</a> &#91;media&#93;</div><script><!--
if (typeof bbmedia == 'undefined') { bbmedia = true; var e = document.createElement('script'); e.async = true; e.src = '$jsfile'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(e, s); }
//--></script></div>
HTML;
$help2 = ($user_lang == 'ru') ? 'Вставить аудио, видео, карту, панораму или другое мультимедиа: [media=ширина,высота]http://youtube.com/url[/media]' : 'Insert audio, video, map, panorama or other multimedia: [media=width,height]http://youtube.com/url[/media]';

if (confirm_box(true))
{
	set_bbcode($bbcode1, $tpl1, $help1, true, true);
	set_bbcode($bbcode2, $tpl2, $help2, false, true);
	trigger_error('Done!');
}
else
{
	if (bbcode_exists($bbcode1) || bbcode_exists($bbcode2))
	{
		$msg = 'BBCode '.$title.' is exists. Update?';
	}
	else
	{
		$msg = 'Install BBCode '.$title.'?';
	}
	confirm_box(false, $msg, build_hidden_fields(array()));
}
