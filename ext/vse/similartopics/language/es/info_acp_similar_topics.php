<?php
/**
*
* Precise Similar Topics [Spanish]
*
* @copyright (c) 2013 Matt Friedman
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'PST_TITLE_ACP'		=> 'Hilos Parecidos Precisos',
	'PST_SETTINGS'		=> 'Hilos parecidos configuración',
	'PST_LOG_FULLTEXT'	=> '<strong>Base de datos de Alteración de Hilos Parecidos compatibilidad</strong><br />» Cambiado la tabla “%s” para el motor de almacenamiento MyISAM y añadió un índice FULLTEXT de la “topic_title”',
	'PST_LOG_MSG'		=> '<strong>Se modificó la configuración de hilos parecidos</strong>',
));
