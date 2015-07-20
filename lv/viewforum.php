<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
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
	'ACTIVE_TOPICS'			=> 'Aktīvās tēmas',
	'ANNOUNCEMENTS'			=> 'Paziņojumi',

	'FORUM_PERMISSIONS'		=> 'Foruma tiesības',

	'ICON_ANNOUNCEMENT'		=> 'Paziņojums',
	'ICON_STICKY'			=> 'Piestiprināts',

	'LOGIN_NOTIFY_FORUM'	=> 'Jūs esat saņēmuši paziņojumu par jaunumiem šajā forumā. Lūdzu ielogojieties, lai tos apskatītu..',

	'MARK_TOPICS_READ'		=> 'Atzīmēt tēmas kā izlasītas',

	'NEW_POSTS_HOT'			=> 'Jauni ieraksti [ Populāri ]',	// Not used anymore
	'NEW_POSTS_LOCKED'		=> 'Jauni ieraksti [ Slēgti ]',	// Not used anymore
	'NO_NEW_POSTS_HOT'		=> 'Nav jaunu ierakstu [ Populāri ]',	// Not used anymore
	'NO_NEW_POSTS_LOCKED'	=> 'Nav jaunu ierakstu [ Slēgti ]',	// Not used anymore
	'NO_READ_ACCESS'		=> 'Jums nav tiesības, lai lasītu ziņas šajā forumā.',
	'NO_UNREAD_POSTS_HOT'		=> 'Nav nelasītu ziņu [ Populāri ]',
	'NO_UNREAD_POSTS_LOCKED'	=> 'Nav nelasītu ziņu [ Slēgti ]]',

	'POST_FORUM_LOCKED'		=> 'Forums ir slēgts',

	'TOPICS_MARKED'			=> 'Šī foruma tēmas Jums tagad ir atzīmētas kā izlasītas.',

	'UNREAD_POSTS_HOT'		=> 'Nelasītās ziņas [ Populāri ]',
	'UNREAD_POSTS_LOCKED'	=> 'Nelasītās ziņas [ Slēgti ]',

	'VIEW_FORUM'			=> 'Lasīt forumu',
	'VIEW_FORUM_TOPICS'		=> array(
		1	=> '%d tēma',
		2	=> '%d tēmas',
	),
));
