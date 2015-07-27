<?php
/**
*
* @package phpBB Extension - Forum Icons
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
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
	'AVAILABLE_FORUM_IMAGE'			=> '<strong>Click on an image to select</strong>',
	'AVAILABLE_FORUM_IMAGE_EXPLAIN'	=> 'Images are shown ~50% of actual size.',
	'SELECTED_FORUM_IMAGE'			=> '<strong>Selected forum image</strong>',
	'CLEAR_BUTTON'					=> 'Clear forum image',
));