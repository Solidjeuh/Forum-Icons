<?php
/**
*
* @package phpBB Extension - Forum Icons
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* Nederlandse vertaling @ Solidjeuh <https://www.muziekpromo.net>
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
	'AVAILABLE_FORUM_IMAGE'			=> '<strong>Klik op een afbeelding om te selecteren</strong>',
	'AVAILABLE_FORUM_IMAGE_EXPLAIN'	=> 'Afbeeldingen worden 50% kleiner weergegeven.',
	'SELECTED_FORUM_IMAGE'			=> '<strong>Geselecteerde forum afbeelding</strong>',
	'CLEAR_BUTTON'					=> 'Ledig forum afbeelding veld',
));