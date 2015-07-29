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
	'ALREADY_DEFAULT_GROUP'		=> 'Izvēlētā grupa jau ir jūsu grupa pēc noklusējuma.',
	'ALREADY_IN_GROUP'			=> 'Jūs jau esat izvēlētās grupas biedrs.',
	'ALREADY_IN_GROUP_PENDING'	=> 'Jūs jau nosūtījāt pieprasījumu izvēlētajai grupai.',
	'CANNOT_JOIN_GROUP'			=> 'Jūs nevarat kļūt par šīs grupas biedru. Patstāvīgi iestāties var tikai atvērtajās grupās vai brīvajās grupās.',
	'CANNOT_RESIGN_GROUP'		=> 'Jūs nevarat izstāties no šīs grupas. Patstāvīgi izstāties var tikai no atvērtajām grupām vai brīvajām grupām.',
	'CHANGED_DEFAULT_GROUP'		=> 'Grupa pēc noklusējuma veiksmīgi nomainīta.',

	
	
	

	'GROUP_AVATAR'						=> 'Grupas avatars',
	'GROUP_CHANGE_DEFAULT'				=> 'Jūs tiešām vēlaties nomainīt grupu pēc noklusējuma uz “%s”?',
	'GROUP_CLOSED'						=> 'Slēgta',
	'GROUP_DESC'						=> 'Grupas apraksts',
	'GROUP_HIDDEN'						=> 'Slēpta',
	'GROUP_INFORMATION'					=> 'Informācija par grupu',
	'GROUP_IS_CLOSED'					=> 'Šī ir slēgta grupa. Šajā grupā iestāties var tikai ar grupas izveidotāja uzaicinājumu.',
	'GROUP_IS_FREE'						=> 'Šī ir brīvi pieejama grupa. Jebkurš lietotājs var iestāties šajā grupā.',
	'GROUP_IS_HIDDEN'					=> 'Šī ir slēpta grupa, un tikai tās biedri var apskatīt grupas biedru sarakstu.',
	'GROUP_IS_OPEN'						=> 'Šī ir atvērta grupa. Jebkurš lietotājs var nosūtīt pieteikumu lai iestātos šajā grupā.',
	'GROUP_IS_SPECIAL'					=> 'Šī ir speciāla grupa, kuru pārvala administrācija.',
	'GROUP_JOIN'						=> 'Pievienoties grupai',
	'GROUP_JOIN_CONFIRM'				=> 'Jūs esat pārliecināti, ka vēlaties pievienoties izvēlētajai grupai?',
	'GROUP_JOIN_PENDING'				=> 'Pieprasījums iestāties grupā',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Jūs esat pārliecināti, ka vēlaties nosūtīt pieprasījumu izvēlētajai grupai?',
	'GROUP_JOINED'						=> 'Jūs esat veiksmīgi pievienojušies grupai.',
	'GROUP_JOINED_PENDING'				=> 'Pieprasījums veiksmīgi nosūtīts. Gaidiet, kad grupas izveidotājs to apstiprinās.',
	'GROUP_LIST'						=> 'Lietotāju vadība',
	'GROUP_MEMBERS'						=> 'Grupas dalībnieki',
	'GROUP_NAME'						=> 'grupas nosaukums',
	'GROUP_OPEN'						=> 'Atvērta',
	'GROUP_RANK'						=> 'Grupas rangs',
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Izstāties no grupas',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Jūs esat pārliecināti, ka vēlaties izstāties no izvēlētās grupas?',
	'GROUP_RESIGN_PENDING'				=> 'Atsaukt iestāšanās pieprasījumu grupā',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Jūs esat pārliecināti, ka vēlaties atsaukt iestāšanās pieprasījumu grupā?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Jūs esat veiksmīgi dzēsti no izvēlētās grupas.',
	'GROUP_RESIGNED_PENDING'			=> 'Jūsu pieprasījums veiksmīgi atsaukts.',
	'GROUP_TYPE'						=> 'Grupas tips',
	'GROUP_UNDISCLOSED'					=> 'Slēpta grupa',
	'FORUM_UNDISCLOSED'					=> 'Slēptā(o) foruma(u) moderēšana',

	
	
	
	
	
	
	'LOGIN_EXPLAIN_GROUP'	=> 'Jums jāielogojas lai apskatītu informāciju par grupu.',
	'NO_LEADERS'					=> 'Jūs neesat nevienas grupas izveidotājs.',
	'NOT_LEADER_OF_GROUP'			=> 'Pieprasītā darbība nevar tikt veikta, jo jūs neesat izvēlētās grupas izveidotājs.',
	'NOT_MEMBER_OF_GROUP'			=> 'Pieprasītā darbība nevar tikt veikta, jo jūs neesat izvēlētās grupas dalībnieks vai neesat apstiprināts.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Jūs nevarat tikt dzēsts no grupas pēc noklusējuma.',
	'PRIMARY_GROUP'		=> 'Primārā grupa',
	'REMOVE_SELECTED'		=> 'Dzēst atzīmēto',
	'USER_GROUP_CHANGE'			=> 'No “%1$s” grupas uz “%2$s”',
	'USER_GROUP_DEMOTE'			=> 'Atteikties no izveidotāja statusa',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Jūs esat pārliecināti, ka vēlaties atteikties no izveidotāja statusa izvēlētajā grupā?',
	'USER_GROUP_DEMOTED'		=> 'Jūs esat veiksmīgi dzēsts no grupas izveidotāja statusa.',
));
