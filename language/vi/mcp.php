<?php
/** 
*
* mcp [Vietnamese]
*
* @package language
* @version $Id: mcp.php,v 1.38 2010/08/31 11:35:00
* @copyright (c) 2006, 2007 phpBBVietNam Group, (c) 2009 - 2010 ytuongsangtaovn.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

$lang = array_merge($lang, array(
	'ACTION'				=> 'Thao tác',
	'ACTION_NOTE'			=> 'Thao tác/Ghi chú',
	'ADD_FEEDBACK'			=> 'Thêm phản hồi',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Nếu bạn muốn thêm vào một báo cáo trong trang này thì hãy điền đầy đủ thông tin cho các mục trong bảng bên dưới. Chỉ sử dụng văn bản thuần tuý, các thẻ lệnh HTML, BBCode… đều không được phép sử dụng.',
	'ADD_WARNING'			=> 'Thêm cảnh cáo',
	'ADD_WARNING_EXPLAIN'	=> 'Để gửi một cảnh cáo đến thành viên này, bạn hãy điền đầy đủ thông tin cho các mục trong bảng bên dưới. Chỉ sử dụng văn bản thuần tuý, các thẻ lệnh HTML, BBCode… đều không được phép sử dụng.',
	'ALL_ENTRIES'			=> 'Tất cả các mục',
	'ALL_NOTES_DELETED'		=> 'Đã gỡ bỏ thành công tất cả ghi chú của thành viên/',	
	'ALL_REPORTS'			=> 'Tất cả báo cáo',
	'ALREADY_REPORTED'		=> 'Bài viết này đã được báo cáo rồi.',
	'ALREADY_REPORTED_PM'	=> 'Tin nhắn riêng này vừa được gửi báo cáo.',
	'ALREADY_WARNED'		=> 'Một cảnh cáo đã được đưa ra cho bài viết này.',
	'APPROVE'				=> 'Chấp nhận',
	'APPROVE_POST'			=> 'Chấp nhận bài viết',
	'APPROVE_POST_CONFIRM'	=> 'Bạn có chắc chắn muốn chấp nhận bài viết này?',
	'APPROVE_POSTS'			=> 'Chấp nhận bài viết',
	'APPROVE_POSTS_CONFIRM'	=> 'Bạn có chắc chắn muốn chấp nhận những bài viết đã chọn?',

	'CANNOT_MOVE_SAME_FORUM'=> 'Bạn không thể di chuyển một chủ đề đến chuyên mục đang chứa chủ đề đó.',
	'CANNOT_WARN_ANONYMOUS'		=> 'Bạn không thể cảnh cáo khách chưa đăng ký thành viên.',
	'CANNOT_WARN_SELF'			=> 'Bạn không thể cảnh cáo chính mình.',	
	'CAN_LEAVE_BLANK'			=> 'Mục thông tin này không được phép để trống.',
	'CHANGE_POSTER'				=> 'Thay đổi người gửi',
	'CLOSE_PM_REPORT'		=> 'Kết thúc báo cáo Tin nhắn riêng',
	'CLOSE_PM_REPORT_CONFIRM'	=> 'Bạn có chắc muốn kết thúc báo cáo Tin nhắn riêng?',
	'CLOSE_PM_REPORTS'		=> 'Kết thúc tất cả các báo cáo Tin nhắn riêng',
	'CLOSE_PM_REPORTS_CONFIRM'	=> 'Bạn có chắc muốn kết thúc tất cả các báo cáo Tin nhắn riêng?',
	'CLOSE_REPORT'				=> 'Kết thúc báo cáo',
	'CLOSE_REPORT_CONFIRM'		=> 'Bạn có chắc chắn muốn kết thúc báo cáo đã chọn?',
	'CLOSE_REPORTS'				=> 'Kết thúc các báo cáo',
	'CLOSE_REPORTS_CONFIRM'		=> 'Bạn có chắc chắn muốn kết thúc những báo cáo đã chọn?',

	'DELETE_PM_REPORT'			=> 'Xóa báo cáo Tin nhắn riêng',
	'DELETE_PM_REPORT_CONFIRM'	=> 'Bạn có chắc muốn xóa báo cáo Tin nhắn riêng?',
	'DELETE_PM_REPORTS'			=> 'Xóa tất cả các báo cáo Tin nhắn riêng',
	'DELETE_PM_REPORTS_CONFIRM'	=> 'Bạn có chắc muốn xóa tất cả các báo cáo Tin nhắn riêng?',
	'DELETE_POSTS'				=> 'Xoá bài viết',
	'DELETE_POSTS_CONFIRM'		=> 'Bạn có chắc chắn muốn xoá những bài viết này?',
	'DELETE_POST_CONFIRM'		=> 'Bạn có chắc chắn muốn xoá bài viết này?',
	'DELETE_REPORT'				=> 'Xoá báo cáo này',
	'DELETE_REPORT_CONFIRM'		=> 'Bạn có chắc chắn muốn xoá báo cáo đã chọn?',
	'DELETE_REPORTS'			=> 'Xoá những báo cáo này',
	'DELETE_REPORTS_CONFIRM'	=> 'Bạn có chắc chắn muốn xoá những báo cáo đã chọn?',
	'DELETE_SHADOW_TOPIC'		=> 'Xóa liên kết đến chủ đề trong chuyên mục cũ',
	'DELETE_TOPICS'				=> 'Xoá những chủ đề đã chọn',
	'DELETE_TOPICS_CONFIRM'		=> 'Bạn có chắc chắn muốn xoá những chủ đề này?',
	'DELETE_TOPIC_CONFIRM'		=> 'Bạn có chắc chắn muốn xoá chủ đề này?',
	'DISAPPROVE'				=> 'Từ chối',
	'DISAPPROVE_REASON'			=> 'Lý do từ chối',
	'DISAPPROVE_POST'			=> 'Từ chối bài viết này',
	'DISAPPROVE_POST_CONFIRM'	=> 'Bạn có chắc chắn muốn từ chối bài viết này?',
	'DISAPPROVE_POSTS'			=> 'Từ chối những bài viết này',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Bạn có chắc chắn muốn từ chối những bài viết đã chọn?',
	'DISPLAY_LOG'				=> 'Hiển thị các mục cách đây',
	'DISPLAY_OPTIONS'			=> 'Tuỳ chọn hiển thị',

	'EMPTY_REPORT'					=> 'Bạn phải nhập nội dung cho báo cáo của mình.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Cần lưu ý rằng một hay nhiều chủ đề sẽ được gỡ bỏ khỏi cơ sở dữ liệu của hệ thống một khi không còn bài viết nào nữa.',

	'FEEDBACK'				=> 'Phản hồi',
	'FORK'					=> 'Sao chép',
	'FORK_TOPIC'			=> 'Sao chép chủ đề',
	'FORK_TOPIC_CONFIRM'	=> 'Bạn có chắc chắn muốn sao chép chủ đề này?',
	'FORK_TOPICS'			=> 'Sao chép những chủ đề đã chọn',
	'FORK_TOPICS_CONFIRM'	=> 'Bạn có chắc chắn muốn sao chép những chủ đề đã chọn?',
	'FORUM_DESC'			=> 'Giới thiệu chuyên mục',
	'FORUM_NAME'			=> 'Tên chuyên mục',
	'FORUM_NOT_EXIST'		=> 'Chuyên mục bạn vừa chọn không tồn tại.',
	'FORUM_NOT_POSTABLE'	=> 'Chuyên mục bạn vừa chọn không thể gửi bài.',
	'FORUM_STATUS'			=> 'Trạng thái chuyên mục',
	'FORUM_STYLE'			=> 'Kiểu dáng chuyên mục',

	'GLOBAL_ANNOUNCEMENT'	=> 'Thông báo chung',

	'IP_INFO'				=> 'Thông tin về địa chỉ IP',
	'IPS_POSTED_FROM'		=> 'Những địa chỉ IP mà thành viên này đã sử dụng để gửi bài',
	
	'LATEST_LOGS'				=> '5 thao tác được ghi nhận mới nhất',
	'LATEST_REPORTED'			=> '5 báo cáo mới nhất',
	'LATEST_REPORTED_PMS'		=> '5 tin nhắn riêng mới nhất',
	'LATEST_UNAPPROVED'			=> '5 bài viết mới nhất đang chờ chấp nhận',
	'LATEST_WARNING_TIME'		=> 'Cảnh cáo mới nhất được đưa ra',
	'LATEST_WARNINGS'			=> '5 cảnh cáo mới nhất',
	'LEAVE_SHADOW'				=> 'Để lại liên kết đến chủ đề trong chuyên mục cũ',
	'LIST_REPORT'				=> 'Chỉ có <strong>1</strong> báo cáo',
	'LIST_REPORTS'				=> 'Có <strong>%d</strong> báo cáo',
	'LOCK'						=> 'Khoá',
	'LOCK_POST_POST'			=> 'Khoá bài viết',
	'LOCK_POST_POST_CONFIRM'	=> 'Bạn có chắc chắn muốn khoá bài viết này?',
	'LOCK_POST_POSTS'			=> 'Khoá những bài viết đã chọn',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Bạn có chắc chắn muốn khoá những bài viết đã chọn?',
	'LOCK_TOPIC_CONFIRM'		=> 'Bạn có chắc chắn muốn khoá chủ đề này?',
	'LOCK_TOPICS'				=> 'Khoá những chủ đề đã chọn',
	'LOCK_TOPICS_CONFIRM'		=> 'Bạn có chắc chắn muốn khoá tất cả chủ đề đã chọn?',
	'LOGS_CURRENT_TOPIC'		=> 'Hiện tại đang xem những ghi nhận của:',
	'LOGIN_EXPLAIN_MCP'			=> 'Bạn phải đăng nhập để quản lý chuyên mục này.',
	'LOGVIEW_VIEWTOPIC'			=> 'Xem chủ đề',
	'LOGVIEW_VIEWLOGS'			=> 'Xem ghi nhận chủ đề',
	'LOGVIEW_VIEWFORUM'			=> 'Xem chuyên mục',
	'LOOKUP_ALL'				=> 'Tra cứu tất cả địa chỉ IP',
	'LOOKUP_IP'					=> 'Tra cứu địa chỉ IP',

	'MARKED_NOTES_DELETED'		=> 'Đã gỡ bỏ thành công tất cả ghi chú của thành viên được đánh dấu.',

	'MCP_ADD'	=> 'Thêm cảnh cáo',

	'MCP_BAN'				=> 'Bảng cấm',
	'MCP_BAN_EMAILS'		=> 'Cấm Email',
	'MCP_BAN_IPS'			=> 'Cấm địa chỉ IP',
	'MCP_BAN_USERNAMES'		=> 'Cấm tên thành viên',

	'MCP_LOGS'				=> 'Ghi nhận về điều hành viên',
	'MCP_LOGS_FRONT'		=> 'Trang chính',
	'MCP_LOGS_FORUM_VIEW'	=> 'Ghi nhận về chuyên mục',
	'MCP_LOGS_TOPIC_VIEW'	=> 'Ghi nhận về chủ đề',

	'MCP_MAIN'						=> 'Trang chính',
	'MCP_MAIN_FORUM_VIEW'			=> 'Xem chuyên mục',
	'MCP_MAIN_FRONT'				=> 'Trang chính',
	'MCP_MAIN_POST_DETAILS'			=> 'Chi tiết bài viết',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Xem chủ đề',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Thay đổi thành “Thông báo”',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Bạn có chắc chắn muốn thay đổi chủ đề đã chọn trở thành một “Thông báo”?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Thay đổi thành “Các thông báo”',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Bạn có chắc chắn muốn thay đổi những chủ đề đã chọn trở thành “Các thông báo”?',
	'MCP_MAKE_GLOBAL'				=> 'Thay đổi thành “Thông báo chung”',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Bạn có chắc chắn muốn thay đổi chủ đề đã chọn trở thành một “Thông báo chung”?',
	'MCP_MAKE_GLOBALS'				=> 'Thay đổi thành “Các thông báo chung”',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Bạn có chắc chắn muốn thay đổi những chủ đề đã chọn trở thành “Các thông báo chung”?',
	'MCP_MAKE_STICKY'				=> 'Thay đổi thành “Chú ý”',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Bạn có chắc chắn muốn thay đổi chủ đề đã chọn trở thành một “Chú ý”?',
	'MCP_MAKE_STICKIES'				=> 'Thay đổi thành “Các chú ý”',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Bạn có chắc chắn muốn thay đổi những chủ đề đã chọn trở thành “Các chú ý”?',
	'MCP_MAKE_NORMAL'				=> 'Thay đổi thành “Chủ đề bình thường”',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Bạn có chắc chắn muốn thay đổi chủ đề đã chọn trở thành một “Chủ đề bình thường”?',
	'MCP_MAKE_NORMALS'				=> 'Thay đổi thành “Các chủ đề bình thường”',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Bạn có chắc chắn muốn thay đổi những chủ đề đã chọn trở thành “Các chủ đề bình thường”?',

	'MCP_NOTES'						=> 'Ghi chú thành viên',
	'MCP_NOTES_FRONT'				=> 'Trang chính',
	'MCP_NOTES_USER'				=> 'Chi tiết về thành viên',

	'MCP_POST_REPORTS'				=> 'Những báo cáo được chỉ định cho bài viết này',

	'MCP_PM_REPORTS'				=> 'Báo cáo tin nhắn riêng',
	'MCP_PM_REPORT_DETAILS'			=> 'Chi tiết Báo cáo tin nhắn riêng',
	'MCP_PM_REPORTS_CLOSED'			=> 'Đóng tất cả Báo cáo tin nhắn riêng',
	'MCP_PM_REPORTS_CLOSED_EXPLAIN'	=> 'Đây là danh sách các báo cáo về tin nhắn riêng đã được giải quyết.',
	'MCP_PM_REPORTS_OPEN'			=> 'Báo cáo tin nhắn riêng mới',
	'MCP_PM_REPORTS_OPEN_EXPLAIN'	=> 'Đây là danh sách các báo cáo về tin nhắn riêng cần được xử lý.',

	'MCP_REPORTS'					=> 'Bài viết đã báo cáo',
	'MCP_REPORT_DETAILS'			=> 'Thông tin chi tiết về báo cáo',
	'MCP_REPORTS_CLOSED'			=> 'Báo cáo đã kết thúc',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Đây là danh sách của tất cả các báo cáo về bài viết đã được giải quyết trước đây.',
	'MCP_REPORTS_OPEN'				=> 'Báo cáo chờ xử lý',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Đây là danh sách của tất cả các báo cáo về bài viết vẫn chưa giải quyết xong.',

	'MCP_QUEUE'								=> 'Công việc chờ xử lý',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Thông tin chi tiết về việc chấp nhận',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Những bài viết đang chờ được chấp nhận',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Đây là danh sách của tất cả các bài viết đòi hỏi phải được chấp nhận trước khi hiển thị cho mọi người xem.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Những chủ đề đang chờ được chấp nhận',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Đây là danh sách của tất cả các chủ đề đòi hỏi phải được chấp nhận trước khi hiển thị cho mọi người xem.',

	'MCP_VIEW_USER'			=> 'Xem cảnh cáo đối với một thành viên xác định',

	'MCP_WARN'				=> 'Cảnh cáo',
	'MCP_WARN_FRONT'		=> 'Trang chính',
	'MCP_WARN_LIST'			=> 'Danh sách cảnh cáo',
	'MCP_WARN_POST'			=> 'Cảnh cáo bài viết xác định',
	'MCP_WARN_USER'			=> 'Cảnh cáo thành viên',

	'MERGE_POSTS'			=> 'Nhập chung bài viết',
	'MERGE_POSTS_CONFIRM'	=> 'Bạn có chắc chắn muốn nhập chung những bài viết đã chọn?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Sử dụng bảng điều khiển bên dưới, bạn có thể nhập chung những bài viết đã chọn tạo thành chủ đề khác. Những bài viết này sẽ không thể sắp xếp trở lại như cũ và sẽ hiển thị như khi thành viên tạo chủ đề mới.<br />Bạn hãy nhập vào số ID của chủ đề muốn thực hiện hoặc bấm vào “Chọn chủ đề” để tìm kiếm trong danh sách.',
	'MERGE_TOPIC_ID'		=> 'Số ID của chủ đề muốn nhập chung',
	'MERGE_TOPICS'			=> 'Nhập chung chủ đề',
	'MERGE_TOPICS_CONFIRM'	=> 'Bạn có chắc chắn muốn nhập chung những chủ đề đã chọn?',
	'MODERATE_FORUM'		=> 'Điều hành chuyên mục',	
	'MODERATE_TOPIC'		=> 'Điều hành chủ đề',
	'MODERATE_POST'			=> 'Điều hành bài viết',
	'MOD_OPTIONS'			=> 'Tuỳ chọn cho điều hành viên',
	'MORE_INFO'				=> 'Thông tin thêm',
	'MOST_WARNINGS'			=> 'Thành viên có nhiều cảnh cáo',
	'MOVE_TOPIC_CONFIRM'	=> 'Bạn có chắc chắn muốn di chuyển chủ đề đã chọn sang một chuyên mục mới?',
	'MOVE_TOPICS'			=> 'Di chuyển những chủ đề đã chọn',
	'MOVE_TOPICS_CONFIRM'	=> 'Bạn có chắc chắn muốn di chuyển những chủ đề đã chọn sang một chuyên mục mới',

	'NOTIFY_POSTER_APPROVAL'		=> 'Thông báo cho người gửi biết về việc chấp nhận?',
	'NOTIFY_POSTER_DISAPPROVAL' 	=> 'Thông báo cho người gửi biết về việc từ chối?',
	'NOTIFY_USER_WARN'				=> 'Thông báo cho thành viên biết về việc cảnh cáo?',
	'NOT_MODERATOR'					=> 'Bạn không phải là người điều hành của chuyên mục này.',
	'NO_DESTINATION_FORUM'			=> 'Hãy chọn một chuyên mục để tiếp tục.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Không có chuyên mục nào có sẵn để chọn.',
	'NO_ENTRIES'					=> 'Không có mục ghi nhận nào trong thời điểm này.',
	'NO_FEEDBACK'					=> 'Không có phản hồi nào về thành viên này.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'Bạn phải chọn một chủ đề để thực hiện nhập chung những bài viết.',
	'NO_MATCHES_FOUND'				=> 'Không tìm thấy kết quả.',
	'NO_POST'						=> 'Bạn phải chọn một bài viết để cảnh cáo thành viên về bài viết đó.',	
	'NO_POST_REPORT'				=> 'Bài viết này đã không được báo cáo',
	'NO_POST_SELECTED'				=> 'Bạn phải chọn ít nhất một bài viết để thực hiện yêu cầu này.',
	'NO_REASON_DISAPPROVAL'			=> 'Hãy đưa ra một nguyên nhân thích hợp về việc từ chối.',	
	'NO_REPORT'						=> 'Không có báo cáo nào được tìm thấy.',
	'NO_REPORTS'					=> 'Không có báo cáo nào được tìm thấy.',
	'NO_REPORT_SELECTED'			=> 'Bạn phải chọn ít nhất một báo cáo để thực hiện yêu cầu này.',
	'NO_TOPIC_ICON'					=> 'Không dùng biểu tượng',
	'NO_TOPIC_SELECTED'				=> 'Bạn phải chọn ít nhất một chủ đề để thực hiện yêu cầu này.',
	'NO_TOPICS_QUEUE'				=> 'Không có chủ đề nào chờ được chấp nhận.',

	'ONLY_TOPIC'		=> 'Chỉ trong chủ đề “%s”',	
	'OTHER_USERS'		=> 'Những thành viên khác gửi bài từ địa chỉ IP này',

	'PM_REPORT_CLOSED_SUCCESS'	=> 'Báo cáo tin nhắn riêng được đóng lại thành công.',
	'PM_REPORT_DELETED_SUCCESS'	=> 'Báo cáo tin nhắn riêng vừa được xóa thành công.',
	'PM_REPORTED_SUCCESS'		=> 'Tin nhắn riêng này vừa được gửi báo cáo thành công.',
	'PM_REPORT_TOTAL'			=> 'Có <strong>1</strong> báo cáo tin nhắn riêng cần xem xét.',
	'PM_REPORTS_CLOSED_SUCCESS'	=> 'Các báo cáo tin nhắn riêng vừa được đóng lại thành công.',
	'PM_REPORTS_DELETED_SUCCESS'=> 'Các báo cáo tin nhắn riêng vừa được xóa thành công.',
	'PM_REPORTS_TOTAL'			=> 'Có <strong>%d</strong> báo cáo tin nhắn riêng cần xem xét.',
	'PM_REPORTS_ZERO_TOTAL'		=> 'Không có báo cáo tin nhắn riêng nào cần xem xét.',
	'PM_REPORT_DETAILS'			=> 'Chi tiết báo cáo tin nhắn riêng',
	'POSTER'					=> 'Người gửi',
	'POSTS_APPROVED_SUCCESS'	=> 'Những bài viết vừa chọn đã được chấp nhận thành công.',
	'POSTS_DELETED_SUCCESS'		=> 'Những bài viết vừa chọn đã được xoá thành công.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'Những bài viết vừa chọn đã được từ chối thành công.',
	'POSTS_LOCKED_SUCCESS'		=> 'Những bài viết vừa chọn đã được khoá thành công.',
	'POSTS_MERGED_SUCCESS'		=> 'Những bài viết vừa chọn đã được nhập chung thành công.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'Những bài viết vừa chọn đã được mở khoá thành công.',
	'POSTS_PER_PAGE'			=> 'Bài viết mỗi trang',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Nhập vào số <strong>0</strong> để xem tất cả báo cáo)',
	'POST_APPROVED_SUCCESS'		=> 'Bài viết vừa chọn đã được chấp nhận thành công.',
	'POST_DELETED_SUCCESS'		=> 'Bài viết vừa chọn đã được xoá thành công.',
	'POST_DISAPPROVED_SUCCESS'	=> 'Bài viết bạn vừa chọn đã được từ chối thành công.',
	'POST_LOCKED_SUCCESS'		=> 'Bài viết đã được khoá thành công.',
	'POST_NOT_EXIST'			=> 'Bài viết bạn vừa yêu cầu không tồn tại.',
	'POST_REPORTED_SUCCESS'		=> 'Bài viết đã được báo cáo thành công.',
	'POST_UNLOCKED_SUCCESS'		=> 'Bài viết đã được mở khoá thành công.',

	'READ_USERNOTES'			=> 'Ghi chú thành viên',
	'READ_WARNINGS'				=> 'Cảnh cáo thành viên',
	'REPORTER'					=> 'Người báo cáo',
	'REPORTED'					=> 'Đã báo cáo',
	'REPORTED_BY'				=> 'Được báo cáo bởi',
	'REPORTED_ON_DATE'			=> 'vào ngày',
	'REPORTS_CLOSED_SUCCESS'	=> 'Những báo cáo bạn vừa chọn đã được kết thúc thành công.',
	'REPORTS_DELETED_SUCCESS'	=> 'Những báo cáo bạn vừa chọn đã được xoá thành công.',
	'REPORTS_TOTAL'				=> 'Có tất cả <strong>%d</strong> báo cáo để xem lại.',
	'REPORTS_ZERO_TOTAL'		=> 'Không có báo cáo nào để xem lại.',
	'REPORT_CLOSED'				=> 'Báo cáo này đã được kết thúc.',
	'REPORT_CLOSED_SUCCESS'		=> 'Báo cáo bạn vừa chọn đã được kết thúc thành công.',
	'REPORT_DELETED_SUCCESS'	=> 'Báo cáo bạn vừa chọn đã được xoá thành công.',
	'REPORT_DETAILS'			=> 'Chi tiết báo cáo',
	'REPORT_MESSAGE'			=> 'Báo cáo bài viết này',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Sử dụng công cụ này để báo cáo bài viết đã chọn. Bạn chỉ nên tiến hành báo cáo nếu bài viết thực sự vi phạm nội quy chuyên mục.',
	'REPORT_NOTIFY'				=> 'Thông báo cho tôi',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Bạn sẽ được thông báo khi báo cáo của mình được giải quyết.',
	'REPORT_POST_EXPLAIN'		=> 'Sử dụng bảng điều khiển này để báo cáo bài viết đã chọn đến các điều hành viên của chuyên mục này và quản trị viên. Bạn chỉ nên tiến hành báo cáo nếu bài viết thực sự vi phạm nội quy chuyên mục.',
	'REPORT_REASON'				=> 'Lý do báo cáo',
	'REPORT_TIME'				=> 'Ngày báo cáo',
	'REPORT_TOTAL'				=> 'Chỉ có <strong>1</strong> báo cáo để xem lại.',
	'RESYNC'					=> 'Đồng bộ',
	'RETURN_MESSAGE'			=> '%sQuay về nội dung vừa xem%s',
	'RETURN_NEW_FORUM'			=> '%sQuay về chuyên mục mới vừa xem%s',
	'RETURN_NEW_TOPIC'			=> '%sQuay về chủ đề mới vừa xem%s',
	'RETURN_PM'					=> '%sQuya về tin nhắn riêng%s',
	'RETURN_POST'				=> '%sQuay về bài viết vừa xem%s',
	'RETURN_QUEUE'				=> '%sQuay về hàng vừa xem%s',
	'RETURN_REPORTS'			=> '%sQuay về báo cáo vừa xem%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sQuay về chủ đề vừa xem%s',

	'SEARCH_POSTS_BY_USER'				=> 'Tìm tất cả bài viết của',
	'SELECT_ACTION'						=> 'Chọn thao tác yêu cầu',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Bạn hãy vui lòng chọn chuyên mục chứa thông báo chung này.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Một hay nhiều chủ đề mà bạn vừa chọn là các thông báo chung. Bạn hãy vui lòng chọn chuyên mục chứa các thông báo chung này.',
	'SELECT_MERGE'						=> 'Chọn nhập chung',
	'SELECT_TOPICS_FROM'				=> 'Chọn những chủ đề từ',
	'SELECT_TOPIC'						=> 'Chọn chủ đề',
	'SELECT_USER'						=> 'Chọn thành viên',
	'SORT_ACTION'						=> 'Thao tác ghi nhận',
	'SORT_DATE'							=> 'Ngày tháng',
	'SORT_IP'							=> 'Địa chỉ IP',
	'SORT_WARNINGS'						=> 'Cảnh cáo',
	'SPLIT_AFTER'						=> 'Chia nhỏ từ bài viết đã chọn',
	'SPLIT_FORUM'						=> 'Chuyên mục đặt chủ đề mới',
	'SPLIT_POSTS'						=> 'Chia nhỏ những bài viết đã chọn',
	'SPLIT_SUBJECT'						=> 'Tên chủ đề mới',
	'SPLIT_TOPIC_ALL'					=> 'Chia nhỏ chủ đề từ những bài viết đã chọn',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Bạn có chắc chắn muốn chia nhỏ chủ đề này?',
	'SPLIT_TOPIC_BEYOND'				=> 'Chia nhỏ chủ đề từ bài viết đã chọn',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Bạn có chắc chắn muốn chia nhỏ chủ đề này từ bài viết đã chọn?',
	'SPLIT_TOPIC_EXPLAIN'				=> 'Sử dụng bảng điều khiển bên dưới, bạn có thể chia nhỏ một chủ đề thành hai chủ đề khác bằng cách chọn những bài viết riêng lẻ hoặc bằng cách chia nhỏ một bài viết đã chọn.',

	'THIS_PM_IP'				=> 'Địa chỉ IP của tin nhắn riêng này',
	'THIS_POST_IP'				=> 'Địa chỉ IP đã gửi bài viết này',
	'TOPICS_APPROVED_SUCCESS'	=> 'Những chủ đề bạn vừa chọn đã được chấp nhận thành công.',
	'TOPICS_DELETED_SUCCESS'	=> 'Những chủ đề bạn vừa chọn đã được xoá thành công.',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'Những chủ đề bạn vừa chọn đã được từ chối thành công.',
	'TOPICS_FORKED_SUCCESS'		=> 'Những chủ đề bạn vừa chọn đã được sao chép thành công.',
	'TOPICS_LOCKED_SUCCESS'		=> 'Những chủ đề bạn vừa chọn đã được khoá thành công.',
	'TOPICS_MOVED_SUCCESS'		=> 'Những chủ đề bạn vừa chọn đã được di chuyển thành công.',
	'TOPICS_RESYNC_SUCCESS'		=> 'Những chủ đề bạn vừa chọn đã được đồng bộ thành công.',
	'TOPICS_TYPE_CHANGED'		=> 'Những loại chủ đề đã được thay đổi thành công.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'Những chủ đề bạn vừa chọn đã được mở khoá thành công.',
	'TOPIC_APPROVED_SUCCESS'	=> 'Chủ đề bạn vừa chọn đã được chấp nhận thành công.',
	'TOPIC_DELETED_SUCCESS'		=> 'Chủ đề bạn vừa chọn đã được xoá thành công.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'Chủ đề bạn vừa chọn đã được từ chối thành công.',
	'TOPIC_FORKED_SUCCESS'		=> 'Chủ đề bạn vừa chọn đã được sao chép thành công.',
	'TOPIC_LOCKED_SUCCESS'		=> 'Chủ đề bạn vừa chọn đã được khoá thành công.',
	'TOPIC_MOVED_SUCCESS'		=> 'Chủ đề bạn vừa chọn đã được di chuyển thành công.',
	'TOPIC_NOT_EXIST'			=> 'Chủ đề bạn vừa chọn không tồn tại.',
	'TOPIC_RESYNC_SUCCESS'		=> 'Chủ đề bạn vừa chọn đã được đồng bộ thành công.',
	'TOPIC_SPLIT_SUCCESS'		=> 'Chủ đề bạn vừa chọn đã được chia nhỏ thành công.',
	'TOPIC_TIME'				=> 'Ngày tạo chủ đề',
	'TOPIC_TYPE_CHANGED'		=> 'Loại chủ đề đã được thay đổi thành công.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'Chủ đề bạn vừa chọn đã được mở khoá thành công.',
	'TOTAL_WARNINGS'			=> 'Tổng số lần cảnh cáo',

	'UNAPPROVED_POSTS_TOTAL'		=> 'Có tất cả <strong>%d</strong> bài viết đang chờ đợi được chấp nhận.',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'Không có bài viết nào đang chờ đợi được chấp nhận.',
	'UNAPPROVED_POST_TOTAL'			=> 'Chỉ có <strong>1</strong> bài viết đang chờ đợi được chấp nhận.',
	'UNLOCK'						=> 'Mở khoá',
	'UNLOCK_POST'					=> 'Mở khoá bài viết',
	'UNLOCK_POST_EXPLAIN'			=> 'Cho phép sửa bài viết',
	'UNLOCK_POST_POST'				=> 'Mở khoá bài viết này',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Bạn có chắc chắn muốn mở khoá bài viết này?',
	'UNLOCK_POST_POSTS'				=> 'Mở khoá những bài viết này',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Bạn có chắc chắn muốn mở khoá những bài viết đã chọn?',
	'UNLOCK_TOPIC'					=> 'Mở khoá chủ đề này',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Bạn có chắc chắn muốn mở khoá chủ đề này?',
	'UNLOCK_TOPICS'					=> 'Mở khoá những chủ đề này',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Bạn có chắc chắn muốn mở khoá những chủ đề đã chọn?',
	'USER_CANNOT_POST'				=> 'Bạn không thể gửi bài trong chuyên mục này.',
	'USER_CANNOT_REPORT'			=> 'Bạn không thể báo cáo bài viết trong chuyên mục này.',
	'USER_FEEDBACK_ADDED'			=> 'Đã thêm phản hồi của thành viên thành công.',
	'USER_WARNING_ADDED'			=> 'Đã cảnh cáo thành viên thành công.',

	'VIEW_DETAILS'			=> 'Xem chi tiết',
	'VIEW_PM'				=> 'Xem tin nhắn riêng',
	'VIEW_POST'				=> 'Xem bài viết',

	'WARNED_USERS'			=> 'Những thành viên đã cảnh cáo',
	'WARNED_USERS_EXPLAIN'	=> 'Đây là danh sách tất cả các thành viên vẫn chưa hết thời gian bị cảnh cáo.',	
	'WARNING_PM_BODY'		=> 'Dưới đây là cảnh cáo dành cho bạn bởi các điều hành viên hay quản trị viên của website. [quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Cảnh cáo từ ban điều hành diễn đàn',
	'WARNING_POST_DEFAULT'	=> 'Đây là cảnh cáo về việc gửi bài của bạn: “%s”.',
	'WARNINGS_ZERO_TOTAL'	=> 'Không có cảnh cáo nào.',

	'YOU_SELECTED_TOPIC'	=> 'Bạn đã chọn chủ đề số <strong>%d</strong>: “%s”.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Vi phạm bản quyền',
			'SPAM'		=> 'Nhảm nhí',
			'OFF_TOPIC'	=> 'Không phù hợp',
			'OTHER'		=> 'Nguyên nhân khác',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'Bài viết có chứa các liên kết liên quan đến những phần mềm sao chép trái pháp luật.',
			'SPAM'		=> 'Bài viết chỉ nhằm mục đích quảng cáo cho một website hay các sản phẩm khác.',
			'OFF_TOPIC'	=> 'Bài viết có nội dung không phù hợp.',
			'OTHER'		=> 'Bài viết đã báo cáo không phải vì các nguyên nhân đã liệt kê ở trên, bạn hãy tự nhập vào thông tin giới thiệu chi tiết.',
		)
	),
));

?>