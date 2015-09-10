<?php
/**
*
* @package phpBB Extension - Forum Icons
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Translated By : Bassel Taha Alhitary - www.alhitary.net
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'AVAILABLE_FORUM_IMAGE'			=> '<strong>انقر على صورة المنتدى </strong>',
	'AVAILABLE_FORUM_IMAGE_EXPLAIN'	=> 'الصورة هنا مُصغرة بنسبة ~50% عن الحجم الحقيقي.',
	'SELECTED_FORUM_IMAGE'			=> '<strong>صورة المنتدى التي حددتها </strong>',
	'CLEAR_BUTTON'					=> 'احذف صورة المنتدى',
));
