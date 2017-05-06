<?php
/** 
*
* search [Vietnamese]
*
* @package language
* @version $Id: search.php,v 1.19 2010/08/25 11:18:00
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
	'ALL_AVAILABLE'			=> 'Tất cả',
	'ALL_RESULTS'			=> 'Tất cả kết quả',

	'DISPLAY_RESULTS'		=> 'Xem kết quả tìm kiếm dưới dạng',

	'FOUND_SEARCH_MATCH'		=> 'Chỉ tìm thấy <strong>%d</strong> kết quả',
	'FOUND_SEARCH_MATCHES'		=> 'Đã tìm thấy <strong>%d</strong> kết quả',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'Đã tìm thấy nhiều hơn <strong>%d</strong> kết quả',

	'GLOBAL'				=> 'Thông báo chung',

	'IGNORED_TERMS'			=> 'không được phép sử dụng',
	'IGNORED_TERMS_EXPLAIN'	=> 'Những từ khoá tìm kiếm của bạn dưới đây không được phép sử dụng bởi vì chúng là những từ phổ biến: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Chuyển đến bài viết',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Hệ thống yêu cầu bạn phải đăng ký làm thành viên và đăng nhập vào hệ thống để xem những bài viết của chính mình.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Hệ thống yêu cầu bạn phải đăng ký làm thành viên và đăng nhập vào hệ thống để xem các bài viết chưa xem.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Hệ thống yêu cầu bạn phải đăng ký làm thành viên và đăng nhập vào hệ thống để xem các bài viết chưa xem kể từ lần ghé thăm trước.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> 'Bạn yêu cầu quá nhiều ký tự để tìm. Xin đừng nhập trên %1$d từ.',

	'NO_KEYWORDS'			=> 'Bạn phải xác định ít nhất một từ khoá để thực hiện tìm kiếm. Mỗi từ khoá phải có ít nhất là <strong>%d</strong> ký tự và không được nhiều quá <strong>%d</strong> ký tự loại trừ dấu đại diện.',
	'NO_RECENT_SEARCHES'	=> 'Không có tìm kiếm nào được thực hiện gần đây.',
	'NO_SEARCH'				=> 'Xin lỗi, bạn không được phép sử dụng công cụ tìm kiếm trong hệ thống.',
	'NO_SEARCH_RESULTS'		=> 'Không tìm thấy kết quả nào.',
	'NO_SEARCH_TIME'		=> 'Xin lỗi, bạn không thể tiếp tục sử dụng công cụ tìm kiếm ngay lúc này. Hãy thử lại sau vài phút nữa.',
	'NO_SEARCH_UNREADS'		=> 'Xin lỗi, chức năng tìm kiếm bài viết chưa xem đã bị vô hiệu.',
	'WORD_IN_NO_POST'		=> 'Không tìm thấy kết quả bởi vì từ khoá <strong>%s</strong> không có trong bất cứ bài viết nào.',
	'WORDS_IN_NO_POST'		=> 'Không tìm thấy kết quả bởi vì những từ khoá <strong>%s</strong> không có trong bất cứ bài viết nào.',

	'POST_CHARACTERS'		=> 'ký tự của bài viết',

	'RECENT_SEARCHES'		=> 'Những tìm kiếm gần đây',
	'RESULT_DAYS'			=> 'Giới hạn kết quả tìm kiếm cách đây',
	'RESULT_SORT'			=> 'Sắp xếp kết quả tìm kiếm theo',
	'RETURN_FIRST'			=> 'Xem trước nội dung trong khoảng',
	'RETURN_TO_SEARCH_ADV'	=> 'Quay về tìm kiếm nâng cao',

	'SEARCHED_FOR'				=> 'Điều kiện tìm kiếm đã sử dụng',
	'SEARCHED_TOPIC'			=> 'Chủ đề đã tìm kiếm',
	'SEARCH_ALL_TERMS'			=> 'Tìm kiếm theo tất cả điều kiện hoặc sử dụng truy vấn tìm kiếm đã nhập',
	'SEARCH_ANY_TERMS'			=> 'Tìm kiếm theo bất kỳ điều kiện nào',
	'SEARCH_AUTHOR'				=> 'Tìm kiếm theo tên tác giả',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Sử dụng dấu đại diện <strong>*</strong> để tìm kiếm những thông tin giống nhau theo một số ký tự.',
	'SEARCH_FIRST_POST'			=> 'Chỉ tìm kiếm bài viết đầu tiên trong các chủ đề',
	'SEARCH_FORUMS'				=> 'Tìm kiếm trong các chuyên mục',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Chọn một hoặc nhiều chuyên mục mà bạn muốn thực hiện tìm kiếm trong phạm vi đó. Các chuyên mục con sẽ được thực hiện tìm kiếm tự động nếu bạn không vô hiệu trong tùy chọn “Tìm kiếm trong các chuyên mục con” bên dưới.',
	'SEARCH_IN_RESULTS'			=> 'Tìm kiếm trong những kết quả này',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Đặt dấu <strong>+</strong> trước từ khoá mà bạn thực sự muốn tìm kiếm và dấu <strong>-</strong> trước từ khoá mà bạn không muốn hiển thị trong kết quả tìm kiếm. Đặt một danh sách từ khoá tìm kiếm ngăn cách nhau bởi dấu <strong>|</strong> trong dấu ngoặc đơn nếu bạn muốn mỗi kết quả tìm thấy chứa ít nhất một trong những từ khoá này. Sử dụng dấu đại diện <strong>*</strong> để tìm kiếm những thông tin giống nhau theo một số ký tự.',
	'SEARCH_MSG_ONLY'			=> 'Chỉ tìm kiếm theo nội dung bài viết',
	'SEARCH_OPTIONS'			=> 'Tuỳ chọn tìm kiếm',
	'SEARCH_QUERY'				=> 'Truy vấn tìm kiếm',
	'SEARCH_SUBFORUMS'			=> 'Tìm kiếm trong các chuyên mục con',
	'SEARCH_TITLE_MSG'			=> 'Tìm kiếm theo tiêu đề và nội dung bài viết',
	'SEARCH_TITLE_ONLY'			=> 'Chỉ tìm kiếm theo tiêu đề bài viết',
	'SEARCH_WITHIN'				=> 'Tìm kiếm trong',
	'SORT_ASCENDING'			=> 'Tăng dần',
	'SORT_AUTHOR'				=> 'Tác giả',
	'SORT_DESCENDING'			=> 'Giảm dần',
	'SORT_FORUM'				=> 'Chuyên mục',
	'SORT_POST_SUBJECT'			=> 'Tiêu đề bài viết',
	'SORT_TIME'					=> 'Ngày gửi bài',

	'TOO_FEW_AUTHOR_CHARS'	=> 'Bạn phải xác định ít nhất là <strong>%d</strong> ký tự trong phần tên tác giả.',
));

?>