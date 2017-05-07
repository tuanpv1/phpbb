<?php
/**
 * acp_permissions (phpBB Permission Set) [Vietnamese]
 *
 * @package language
 * @version $Id: permissions_phpbb.php,v 1.23 2010/08/26 03:06:00
 * @copyright (c) 2006, 2007 phpBBVietNam Group, (c) 2009 - 2010 ytuongsangtaovn.com
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB')) {
    exit;
}

if (empty($lang) || !is_array($lang)) {
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

/**
 *    MODDERS PLEASE NOTE
 *
 *    You are able to put your permission sets into a seperate file too by
 *    prefixing the new file with permissions_ and putting it into the ACP
 *    language folder.
 *
 *    An example of how the file could look like:
 *
 *    <code>
 *
 *    if (empty($lang) || !is_array($lang))
 *    {
 *        $lang = array();
 *    }
 *
 *    // Adding new category
 *    $lang['permission_cat']['bugs'] = 'Bugs';
 *
 *    // Adding new permission set
 *    $lang['permission_type']['bug_'] = 'Bug Permissions';
 *
 *    // Adding the permissions
 *    $lang = array_merge($lang, array(
 *        'acl_bug_view'        => array('lang' => 'Can view bug reports', 'cat' => 'bugs'),
 *        'acl_bug_post'        => array('lang' => 'Can post bugs', 'cat' => 'post'), // Using a phpBB category here
 *    ));
 *
 *    </code>
 */

// Define categories and permission types
$lang = array_merge($lang, array(
    'ACL_CAT_ACTIONS' => 'Thao tác',
    'ACL_CAT_CONTENT' => 'Nội dung',
    'ACL_CAT_FORUMS' => 'Chuyên mục',
    'ACL_CAT_MISC' => 'Linh tinh',
    'ACL_CAT_PERMISSIONS' => 'Cấp phép',
    'ACL_CAT_PM' => 'Tin nhắn',
    'ACL_CAT_POLLS' => 'Bình chọn',
    'ACL_CAT_POST' => 'Bài viết',
    'ACL_CAT_POST_ACTIONS' => 'Thao tác bài viết',
    'ACL_CAT_POSTING' => 'Gửi bài',
    'ACL_CAT_PROFILE' => 'Thông tin cá nhân',
    'ACL_CAT_SETTINGS' => 'Thiết lập',
    'ACL_CAT_TOPIC_ACTIONS' => 'Thao tác chủ đề',
    'ACL_CAT_USER_GROUP' => 'Thành viên &amp; nhóm',
));


$lang = array_merge($lang, array(
    // With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
    'permission_type' => array(
        'u_' => 'Cấp phép thành viên',
        'a_' => 'Cấp phép quản trị viên',
        'm_' => 'Cấp phép điều hành viên',
        'f_' => 'Cấp phép chuyên mục',
        'global' => array(
            'm_' => 'Cấp phép điều hành viên chính',
        ),
    ),
));

// User Permissions
$lang = array_merge($lang, array(
    strtoupper('acl_u_viewprofile') => 'Có thể xem thông tin cá nhân, danh sách thành viên và những người đang trực tuyến',
    strtoupper('acl_u_chgname') => 'Có thể thay đổi tên thành viên',
    strtoupper('acl_u_chgpasswd') => 'Có thể thay đổi mật khẩu',
    strtoupper('acl_u_chgemail') => 'Có thể thay đổi địa chỉ Email',
    strtoupper('acl_u_chgavatar') => 'Có thể thay đổi hình đại diện',
    strtoupper('acl_u_chggrp') => 'Có thể thay đổi nhóm mặc định',
    strtoupper('ACL_U_ATTACH') => 'Có thể đính kèm tập tin',
    strtoupper('ACL_U_CHGCENSORS') => 'Có thể lưu bản nháp',
    strtoupper('acl_u_chgcensors') => 'Có thể tắt chế độ kiểm duyệt từ',
    strtoupper('acl_u_sig') => 'Có thể sử dụng chữ ký cá nhân',

    strtoupper('acl_u_sendpm') => 'Có thể gửi tin nhắn',
    strtoupper('acl_u_masspm') => 'Có thể gửi tin nhắn đến nhiều thành viên và nhóm',
    strtoupper('acl_u_masspm_group') => 'Có thể gửi tin nhắn đến nhóm',
    strtoupper('acl_u_readpm') => 'Có thể xem tin nhắn',
    strtoupper('acl_u_pm_edit') => 'Có thể sửa tin nhắn của mình',
    strtoupper('acl_u_pm_delete') => 'Có thể gỡ bỏ tin nhắn từ thư mục của mình',
    strtoupper('acl_u_pm_forward') => 'Có thể chuyển tiếp tin nhắn',
    strtoupper('acl_u_pm_emailpm') => 'Có thể gửi Email tin nhắn',
    strtoupper('acl_u_pm_printpm') => 'Có thể in tin nhắn',
    strtoupper('acl_u_pm_attach') => 'Có thể đính kèm tập tin trong tin nhắn',
    strtoupper('acl_u_pm_download') => 'Có thể tải về tập tin trong tin nhắn',
    strtoupper('acl_u_pm_bbcode') => 'Có thể sử dụng BBCode trong tin nhắn',
    strtoupper('acl_u_pm_smilies') => 'Có thể sử dụng biểu tượng vui trong tin nhắn',
    strtoupper('acl_u_pm_img') => 'Có thể sử dụng hình ảnh trong tin nhắn',
    strtoupper('acl_u_pm_flash') => 'Có thể sử dụng tập tin Flash trong tin nhắn',
    'ACL_U_DOWNLOAD' => 'Có thể tải về',
    'ACL_U_SAVEDRAFTS' => 'Có thể lưu trạng thái nháp',
    'ACL_U_CHGPROFILEINFO'=>'Có thể thay đổi thông tin cá nhân',

    strtoupper('acl_u_sendemail') => 'Có thể gửi Email',
    strtoupper('acl_u_sendim') => 'Có thể gửi tin nhắn nhanh',
    strtoupper('acl_u_ignoreflood') => 'Không bị giới hạn thời gian gửi bài giữa hai bài viết',
    strtoupper('acl_u_hideonline') => 'Có thể ẩn trạng thái trực tuyến',
    strtoupper('acl_u_viewonline') => 'Có thể xem các thành viên ẩn đang trực tuyến',
    strtoupper('acl_u_search') => 'Có thể tìm kiếm',
));

// Forum Permissions
$lang = array_merge($lang, array(
    'ACL_F_LIST' => 'Có thể nhìn thấy chuyên mục',
    'ACL_F_READ' => 'Có thể xem chuyên mục',
    'ACL_F_POST' => 'Có thể tạo chủ đề mới',
    'ACL_F_SOFTDELETE' => 'Có thể xóa các bài viết của các mod có quyền phê duyệt bài đăng, có thể khôi phục bằng phần mềm xóa',
    'ACL_F_REPLY' => 'Có thể trả lời bài viết',
    'ACL_F_ICONS' => 'Có thể sử dụng biểu tượng cho chủ đề/bài viết',
    'ACL_F_ANNOUNCE' => 'Có thể tạo thông báo',
    'ACL_F_ANNOUNCE_GLOBAL' => 'Thông báo toàn bộ',
    'ACL_F_STICKY' => 'Có thể tạo chú ý',

    'ACL_F_POLL' => 'Có thể tạo bình chọn',
    'ACL_F_VOTE' => 'Có thể tham gia bình chọn',
    'ACL_F_VOTECHG' => 'Có thể thay đổi bình chọn đã tham gia',

    'ACL_F_ATTACH' => 'Có thể đính kèm tập tin',
    'ACL_F_DOWNLOAD' => 'Có thể tải về tập tin',
    'ACL_F_SIGS' => 'Có thể sử dụng chữ ký cá nhân',
    'ACL_F_BBCODE' => 'Có thể sử dụng BBCode',
    'ACL_F_SMILIES' => 'Có thể sử dụng biểu tượng vui',
    'ACL_F_IMG' => 'Có thể sử dụng hình ảnh trong bài viết',
    'ACL_F_FLASH' => 'Có thể sử dụng tập tin Flash trong bài viết',

    'ACL_F_EDIT' => 'Có thể sửa bài viết của mình',
    'ACL_F_DELETE' => 'Có thể xoá bài viết của mình',
    'ACL_F_USER_LOCK' => 'Có thể khoá chủ đề của mình',
    'ACL_F_BUMP' => 'Có thể đẩy chủ đề lên',
    'ACL_F_REPORT' => 'Có thể báo cáo bài viết',
    'ACL_F_SUBSCRIBE' => 'Có thể theo dõi chuyên mục',
    'ACL_F_PRINT' => 'Có thể in chủ đề',
    'ACL_F_EMAIL' => 'Có thể gửi Email chủ đề',
    'ACL_F_NOAPPROVE' => 'Không cần xác nhận bài viết',
    'ACL_F_SEARCH' => 'Có thể tìm kiếm chuyên mục',
    'ACL_F_IGNOREFLOOD' => 'Không bị giới hạn thời gian gửi bài giữa hai bài viết',
    'ACL_F_POSTCOUNT' => 'Đếm số bài viết<br /><em>Lưu ý rằng thiết lập này chỉ có tác dụng đối với những bài viết mới.</em>',
));

// Moderator Permissions
$lang = array_merge($lang, array(

    'ACL_M_EDIT' => 'Có thể sửa bài viết',
    'ACL_M_DELETE' => 'Có thể xoá bài viết',
    'ACL_M_APPROVE' => 'Có thể chấp nhận bài viết',
    'ACL_M_REPORT' => 'Có thể kết thúc và xoá báo cáo',
    'ACL_M_CHGPOSTER' => 'Có thể thay đổi tác giả bài viết',
    'ACL_M_SOFTDELETE' => 'Có thể xóa các bài viết của các mod có quyền phê duyệt bài đăng, có thể khôi phục bằng phần mềm xóa',
    'ACL_M_MOVE' => 'Có thể di chuyển chủ đề',
    'ACL_M_LOCK' => 'Có thể khoá chủ đề',
    'ACL_M_SPLIT' => 'Có thể chia nhỏ chủ đề',
    'ACL_M_MERGE' => 'Có thể nhập chung chủ đề',
    'ACL_M_PM_REPORT' => 'Báo cáo',
    'ACL_M_INFO' => 'Có thể xem thông tin về bài viết',
    'ACL_M_WARN' => 'Có thể cảnh cáo thành viên<br /><em>Thiết lập này chỉ được chọn toàn bộ và nó không phụ thuộc vào chuyên mục.</em>',  // This moderator setting is only global (and not local)
    'ACL_M_BAN' => 'Có thể quản lý danh sách cấm<br /><em>Thiết lập này chỉ được chọn toàn bộ và nó không phụ thuộc vào chuyên mục.</em>',  // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(

    'ACL_A_BOARD' => 'Có thể thay đổi thiết lập hệ thống/kiểm tra cập nhật',
    'ACL_A_SERVER' => 'Có thể thay đổi thiết lập máy chủ',
    'ACL_A_JABBER' => 'Có thể thay đổi thiết lập Jabber',
    'ACL_A_PHPINFO' => 'Có thể xem thông tin PHP',

    'ACL_A_FORUM' => 'Có thể quản lý chuyên mục',
    'ACL_A_FORUMADD' => 'Có thể tạo chuyên mục mới',
    'ACL_A_FORUMDEL' => 'Có thể xoá chuyên mục',
    'ACL_A_PRUNE' => 'Có thể dọn dẹp chuyên mục',

    'ACL_A_ICONS' => 'Có thể thay đổi biểu tượng của chủ đề/bài viết và biểu tượng vui',
    'ACL_A_WORDS' => 'Có thể thay đổi từ kiểm duyệt',
    'ACL_A_BBCODE' => 'Có thể xác định thẻ BBCode',
    'ACL_A_ATTACH' => 'Có thể thay đổi thiết lập tập tin đính kèm',

    'ACL_A_USER' => 'Có thể quản lý thành viên<br /><em>Thiết lập này cũng bao gồm việc cho phép xem chữ ký trình duyệt của thành viên trong danh sách những ai đang trực tuyến.</em>',
    'ACL_A_USERDEL' => 'Có thể xoá/dọn dẹp thành viên',
    'ACL_A_GROUP' => 'Có thể quản lý nhóm',
    'ACL_A_GROUPADD' => 'Có thể tạo nhóm mới',
    'ACL_A_GROUPDEL' => 'Có thể xoá nhóm',
    'ACL_A_RANKS' => 'Có thể quản lý xếp hạng',
    'ACL_A_PROFILE' => 'Có thể quản lý mục thông tin cá nhân tuỳ biến',
    'ACL_A_NAMES' => 'Có thể quản lý tên thành viên cấm',
    'ACL_A_BAN' => 'Có thể quản lý danh sách cấm',

    'ACL_A_VIEWAUTH' => 'Có thể xem thiết lập cấp phép',
    'ACL_A_AUTHGROUPS' => 'Có thể thay đổi thiết lập cấp phép cho những nhóm riêng lẻ',
    'ACL_A_AUTHUSERS' => 'Có thể thay đổi thiết lập cấp phép cho những thành viên riêng lẻ',
    'ACL_A_FAUTH' => 'Có thể thay đổi thiết lập cấp phép của chuyên mục',
    'ACL_A_MAUTH' => 'Có thể thay đổi thiết lập cấp phép của điều hành viên',
    'ACL_A_AAUTH' => 'Có thể thay đổi thiết lập cấp phép của quản trị viên',
    'ACL_A_UAUTH' => 'Có thể thay đổi thiết lập cấp phép của thành viên',
    'ACL_A_ROLES' => 'Có thể quản lý nhiệm vụ',
    'ACL_A_SWITCHPERM' => 'Có thể chuyển đổi thiết lập cấp phép khác',

    'ACL_A_STYLES' => 'Có thể quản lý giao diện',
    'ACL_A_VIEWLOGS' => 'Có thể xem ghi nhận',
    'ACL_A_CLEARLOGS' => 'Có thể xoá ghi nhận',
    'ACL_A_MODULES' => 'Có thể quản lý gói thành phần chức năng',
    'ACL_A_LANGUAGE' => 'Có thể quản lý gói ngôn ngữ',
    'ACL_A_EMAIL' => 'Có thể gửi Email thành viên',
    'ACL_A_BOTS' => 'Có thể quản lý máy tìm kiếm',
    'ACL_A_REASONS' => 'Có thể quản lý báo cáo/nguyên nhân từ chối',
    'ACL_A_BACKUP' => 'Có thể sao lưu/phục hồi cơ sở dữ liệu',
    'ACL_A_SEARCH' => 'Có thể quản lý thiết lập tìm kiếm',
    'ACL_A_EXTENSIONS' => 'Có thể thêm mở rộng',
));

?>