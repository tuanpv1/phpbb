<?php

/**
 *
 * Post Love extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014 Lucifer <http://www.anavaro.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace anavaro\postlove\event;

/**
 * Event listener
 */
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class main_listener implements EventSubscriberInterface
{
    static public function getSubscribedEvents()
    {
        return array(
            'core.viewtopic_modify_post_row' => 'modify_post_row',
            'core.user_setup' => 'load_language_on_setup',
            'core.memberlist_view_profile' => 'user_profile_likes',
            'core.delete_posts_after' => 'clean_posts_after',
            'core.delete_user_after' => 'clean_users_after',
        );
    }

    /**
     * Constructor
     * NOTE: The parameters of this method must match in order and type with
     * the dependencies defined in the services.yml file for this service.
     *
     * @param \phpbb\auth $auth Auth object
     * @param \phpbb\cache\service $cache Cache object
     * @param \phpbb\config $config Config object
     * @param \phpbb\db\driver $db Database object
     * @param \phpbb\request $request Request object
     * @param \phpbb\template $template Template object
     * @param \phpbb\user $user User object
     * @param \phpbb\content_visibility $content_visibility Content visibility object
     * @param \phpbb\controller\helper $helper Controller helper object
     * @param string $root_path phpBB root path
     * @param string $php_ext phpEx
     */
    public function __construct(\phpbb\auth\auth $auth, \phpbb\config\config $config, \phpbb\db\driver\driver_interface $db, \phpbb\template\template $template, \phpbb\user $user,
                                \phpbb\controller\helper $helper,
                                $table_prefix)
    {
        $this->auth = $auth;
        $this->config = $config;
        $this->db = $db;
        $this->template = $template;
        $this->user = $user;
        $this->helper = $helper;
        $this->table_prefix = $table_prefix;
    }

    public function load_language_on_setup($event)
    {
        $this->user->add_lang_ext('anavaro/postlove', 'postlove');
    }

    public function modify_post_row($event)
    {
        $image = $likes = '';
        $isliked = false;
        $user_liked = FALSE;
        $others_liked = FALSE;
        $likers = array();
        $sql_array = array(
            'SELECT' => 'pl.user_id as user_id, u.username as username',
            'FROM' => array(
                USERS_TABLE => 'u',
                $this->table_prefix . 'posts_likes' => 'pl'
            ),
            'WHERE' => 'u.user_id = pl.user_id AND post_id = ' . $event['row']['post_id'],
            'ORDER_BY' => 'pl.timestamp ASC',
        );

        $sql = $this->db->sql_build_query('SELECT', $sql_array);
        $result = $this->db->sql_query($sql);
        $likes_count = 0;
        while ($row = $this->db->sql_fetchrow($result)) {
            $likers[$row['user_id']] = $row['username'];
            if ($row['user_id'] == $this->user->data['user_id']) {
                $user_liked = TRUE;
                $isliked = true;
            } else {
                $others_liked = TRUE;
                $likes_count += 1;
                $post_row["OTHER_LIKES_COUNT"] = $likes_count;
            }
        }
        $this->db->sql_freeresult($result);
        $post_row = $event['post_row'];
        if ($user_liked and $others_liked) {
            $post_row['EVERYBODY_LIKE'] = TRUE;
        } else if ($user_liked) {
            $post_row['ONLY_USER_LIKE'] = true;
            $post_row['USER_LIKE'] = true;
        } else if ($others_liked) {
            $post_row['ONLY_OTHERS_LIKE'] = TRUE;
        }
        if (!empty($likers)) {

            //let's take the list of peoples that liked this post
            $post_likers = implode(', ', $likers);
            $post_row['POST_LIKERS'] = $post_likers;

            //let's get the number
            $post_likers_number = count($likers);
            $post_row['POST_LIKERS_COUNT'] = $post_likers_number;

            //now the image
            $post_like_class = ($isliked ? 'liked' : 'like');
            $post_row['POST_LIKE_CLASS'] = $post_like_class;
            $post_row['POST_LIKE_URL'] = $this->helper->route('postlove_control', array('action' => 'toggle', 'post' => $event['row']['post_id']));

            $event['post_row'] = $post_row;
        } else {
            $post_row['POST_LIKERS_COUNT'] = '0';
            $post_row['POST_LIKE_CLASS'] = 'like';
            $post_row['POST_LIKE_URL'] = $this->helper->route('postlove_control', array('action' => 'toggle', 'post' => $event['row']['post_id']));
            $event['post_row'] = $post_row;
        }

        $this->template->assign_var('SHOW_USER_LIKES', $this->config['postlove_show_likes']);
        $this->template->assign_var('SHOW_USER_LIKED', $this->config['postlove_show_liked']);
        $this->template->assign_var('IS_POSTROW', '1');
        if (!$this->config['postlove_author_like'] && $event['poster_id'] == $this->user->data['user_id']) {
            $post_row = $event['post_row'];
            $post_row['DISABLE'] = 1;
            $event['post_row'] = $post_row;
        }
        if ($this->user->data['user_type'] == 1 || $this->user->data['user_type'] == 2) {
            $this->template->assign_var('DISABLE', '1');
        }

        //so should we display more info?
        //Test if we are shoung likes given!
        if ($this->config['postlove_show_likes']) {
            $sql = 'SELECT COUNT(post_id) as count FROM ' . $this->table_prefix . 'posts_likes WHERE user_id = ' . $event['row']['user_id'];
            $result = $this->db->sql_query($sql);
            $count = (int)$this->db->sql_fetchfield('count');
            $this->db->sql_freeresult($result);
            $post_row = $event['post_row'];
            $post_row['USER_LIKES'] = $count;
            $event['post_row'] = $post_row;
        }
        if ($this->config['postlove_show_liked']) {
            $sql_array = array(
                'SELECT' => 'COUNT(pl.post_id) as count',
                'FROM' => array(
                    $this->table_prefix . 'posts_likes' => 'pl',
                    POSTS_TABLE => 'p'
                ),
                'WHERE' => 'pl.post_id = p.post_id AND p.poster_id = ' . $event['row']['user_id'],
            );
            $sql = $this->db->sql_build_query('SELECT', $sql_array);
            $result = $this->db->sql_query($sql);
            $count = (int)$this->db->sql_fetchfield('count');
            $this->db->sql_freeresult($result);
            $post_row = $event['post_row'];
            $post_row['USER_LIKED'] = $count;
            $event['post_row'] = $post_row;
        }
    }

    public function user_profile_likes($event)
    {
        $this->template->assign_var('POSTLOVE_STATS', $this->helper->route('postlove_list', array('user_id' => $event['member']['user_id'])) . '?short=1');
    }

    /**
     * Delete post loves on post perm delete
     * No need to fill up the database, right?
     */
    public function clean_posts_after($event)
    {
        $sql = 'DELETE FROM ' . $this->table_prefix . 'posts_likes WHERE ' . $this->db->sql_in_set('post_id', $event['post_ids']);
        $this->db->sql_query($sql);
    }

    /**
     * Delete post loves on users perm delete
     * No need to fill up the database, right?
     */
    public function clean_users_after($event)
    {
        $sql = 'DELETE FROM ' . $this->table_prefix . 'posts_likes WHERE ' . $this->db->sql_in_set('user_id', $event['user_ids']);
        $this->db->sql_query($sql);
    }
}
