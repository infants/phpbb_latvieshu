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
    'ABOUT_USER'			=> 'Profils',
    'ACTIVE_IN_FORUM'		=> 'Aktīvākais forumā',
    'ACTIVE_IN_TOPIC'		=> 'Aktīvākais tēmā',
    'ADD_FOE'				=> 'Pievienot nedraugiem',
    'ADD_FRIEND'			=> 'Pievienot draugiem',
    'AFTER'					=> 'Pēc',

    'ALL'					=> 'Visi',

    'BEFORE'				=> 'Pirms',

    'CC_EMAIL'				=> 'Nosūtīt man šīs ziņas kopiju.',
	'CONTACT_ADMIN'			=> 'Kontaktēties ar foruma Administratoru',

    'DEST_LANG'				=> 'Valoda',
    'DEST_LANG_EXPLAIN'		=> 'Izvēlaties ziņas saņēmēja valoda (ja pieejams).',

	'EDIT_PROFILE'			=> 'Labot profilu',

    'EMAIL_BODY_EXPLAIN'	=> 'Ziņa tiks nosūtīta parasta teksta veidā, neiekļaujiet šajā ziņojumā HTML vai BBCode. Kā atpakaļ adrese tiks norādīta jūsu e-pasta adrese.',
    'EMAIL_DISABLED'		=> 'Piedodiet, bet visas ar e-mail saistītās funkcijas ir atslēgtas.',
    'EMAIL_SENT'			=> 'Vēstule tika nosūtīta.',
    'EMAIL_TOPIC_EXPLAIN'	=> 'Ziņa tiks nosūtīta parasta teksta veidā, neiekļaujiet šajā ziņojumā HTML vai BBCode. Informācija par tēmu jau ir iekļauta ziņā. Kā atpakaļ adrese tiks norādīta jūsu e-pasta adrese.',
    'EMPTY_ADDRESS_EMAIL'	=> 'Jums jānorāda saņēmēja pareiza e-pasta adrese.',
    'EMPTY_MESSAGE_EMAIL'	=> 'Jums jāievada ziņas teksts lai nosūtītu.',
    'EMPTY_MESSAGE_IM'		=> 'Jums jāievada ziņas teksts lai nosūtītu.',
    'EMPTY_NAME_EMAIL'		=> 'Jums jānorāda īsts saņēmēja vārds.',
	'EMPTY_SENDER_EMAIL'	=> 'Jums jānorāda pareiza e-pasta adrese.',
	'EMPTY_SENDER_NAME'		=> 'Jums jānorāda vārds.',
    'EMPTY_SUBJECT_EMAIL'	=> 'Jūms jānorāda ziņas tēma.',
    'EQUAL_TO'				=> 'Vienāds',

    'FIND_USERNAME_EXPLAIN'	=> 'Šeit jūs varat veikt konkrēta lietotāja meklēšanu. Visi lauciņi nav obilgāti jāaizpilda. Lai veiktu meklēšanu pēc šablona izmantojiet *. Lai ievadītu datumus, izmantojiet formātu <kbd>GGGG-MM-DD</kbd>, piemēram, <samp>2004-02-29</samp>. Atzīmējiet ar ķeksīti vienu vai vairākus lietotājus (ja iepriekšējā forma pieļauj vairāku lietotāju meklēšanu) un nospiediet pogu "Izvēlēties atzīmētos", lai atgrieztos atpakaļ.',
    'FLOOD_EMAIL_LIMIT'		=> 'Jūs nevarat nosūtīt uzreiz vēl vienu e-mail. Lūdzu pamēģiniet drusku vēlāk.',

    'GROUP_LEADER'			=> 'Grupas izveidotājs',

    'HIDE_MEMBER_SEARCH'	=> 'Slēpt lietotāju meklēšanu',

    'IM_ADD_CONTACT'		=> 'Pievienot kontaktu sarakstam',
    'IM_DOWNLOAD_APP'		=> 'Lejuplādēt pielikumu',
    'IM_JABBER'				=> 'Ņemiet vērā, ka lietotājs var būt atslēdzis tūlītēju ziņu saņemšanu no nezināmiem kontaktiem.',
    'IM_JABBER_SUBJECT'		=> 'Šī ir automātiski ģenerēta ziņa un uz to nav jāatbild! Ziņa no lietotāja %1$s no %2$s.',
    'IM_MESSAGE'			=> 'Jūsu ziņa',
    'IM_NAME'				=> 'Jūsu vārds',
    'IM_NO_DATA'			=> 'Šim lietotājam nav kontakt informācijas.',
    'IM_NO_JABBER'			=> 'SPiedodiet, bet tiešu ziņu sūtīšanu Jabber šī konference natbalsta. Lai sazinātos ar šo lietotāju, jums jāizmanto Jabber klients.',
    'IM_RECIPIENT'			=> 'Saņēmējs',
    'IM_SEND'				=> 'Sūtīt ziņu',
    'IM_SEND_MESSAGE'		=> 'Sūtīt ziņu',
    'IM_SENT_JABBER'		=> 'Jūsu ziņa %1$s veiksmīgi nosūtīta.',
    'IM_USER'				=> 'Sūtīt tiešu ziņu',

    'LAST_ACTIVE'				=> 'Pēdējais apmeklējums',
    'LESS_THAN'					=> 'mazāk kā',
	'LIST_USERS'				=> array(
		1	=> '%d lietotājs',
		2	=> '%d lietotāji',
	),
	'LOGIN_EXPLAIN_TEAM'		=> 'Lai apskatītu to komandas sarakstu ir nepieciešama autorizācija.',
    'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Lai apskatītu lietotāju sarakastu, jums nepieciešams ielogoties.',
    'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Lai meklētu lietotājus, jums nepieciešams reģistrēties un ielogoties.',
    'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Lai apskatītu profilus, jums nepieciešams reģistrēties un ielogoties.',

    'MORE_THAN'				=> 'Vairāk kā',

	'NO_CONTACT_FORM'		=> 'Foruma administrators aizliedzis izmantot kontakta forumu.',
	'NO_CONTACT_PAGE'		=> 'Foruma administrators aizliedzis izmantot kontakta lapu.',
    'NO_EMAIL'				=> 'Jūs nevarat sūtīt e-pastu šim lietotājam.',
    'NO_VIEW_USERS'			=> 'Jūs nevarat apskatīt profilus un lietotāju sarakstus.',

    'ORDER'					=> 'Kārtot',
    'OTHER'					=> 'Cits',

    'POST_IP'				=> 'IP/domain',

    'REAL_NAME'				=> 'Saņēmēja vārds',
    'RECIPIENT'				=> 'Saņēmējs',
    'REMOVE_FOE'			=> 'Dzēst no nedraugiem',
    'REMOVE_FRIEND'			=> 'Dzēst no draugiem',

    'SELECT_MARKED'			=> 'Izvēlēties atzīmētās',
    'SELECT_SORT_METHOD'	=> 'Šķirošanas veids',
	'SENDER_EMAIL_ADDRESS'	=> 'Jūsu e-pasta adrese',
	'SENDER_NAME'			=> 'Jūsu vārds',
	'SEND_ICQ_MESSAGE'		=> 'Sūtīt ICQ ziņu',
	'SEND_IM'				=> 'Tieša ziņa',
	'SEND_JABBER_MESSAGE'	=> 'Sūtīt Jabber ziņu',
	'SEND_MESSAGE'			=> 'Ziņa',
	'SEND_YIM_MESSAGE'		=> 'Sūtīt YIM ziņu',
	'SORT_EMAIL'			=> 'E-pasts',
    'SORT_LAST_ACTIVE'		=> 'Pēdējais apmeklējums',
    'SORT_POST_COUNT'		=> 'Ziņu skaits',

    'USERNAME_BEGINS_WITH'	=> 'Lietotājvārds sākas ar',
    'USER_ADMIN'			=> 'Administrēt',
    'USER_BAN'				=> 'Banošana',
    'USER_FORUM'			=> 'Lietotāja statistika',
	'USER_LAST_REMINDED'	=> array(
        0		=> 'Nav atgadinājumi nosūtīti šai laikā',
        1		=> '%1$d nosūtīts atgādinajums<br />» %2$s',
        2		=> '%1$d nosūtīti atgādinajumi<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Tiešsaistē',
    'USER_PRESENCE'			=> 'Atrašanās forumā',
	'USERS_PER_PAGE'		=> 'Lietotāji lapā',

    'VIEWING_PROFILE'		=> 'Lietotāja profils - %s',
	'VIEW_FACEBOOK_PROFILE'	=> 'Skatīt Facebook Profilu',
	'VIEW_SKYPE_PROFILE'	=> 'Skatīt Skype Profilu',
	'VIEW_TWITTER_PROFILE'	=> 'Skatīt Twitter Profilu',
	'VIEW_YOUTUBE_CHANNEL'	=> 'Skatīt YouTube Channel',
	'VIEW_GOOGLEPLUS_PROFILE' => 'Skatīt Google+ Profilu',
));
