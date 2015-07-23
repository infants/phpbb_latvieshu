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
	'ALL_AVAILABLE'			=> 'Visi esošie',
	'ALL_RESULTS'			=> 'Visu laiku',

	'DISPLAY_RESULTS'		=> 'Rādīt rezultātus kā',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> 'Meklēšanas rezultāts: %d',
		2	=> 'Meklēšanas rezultāti: %d sakritības',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> 'Atrasta %d sakritība',
		2	=> 'Atrastas %d sakritības',
	),

	'GLOBAL'				=> 'Svarīgs paziņojums',

	'IGNORED_TERMS'			=> 'ignorēts',
	'IGNORED_TERMS_EXPLAIN'	=> 'Sekojošie vārdi jūsu meklēšanā tika ignorēti, jo ir pārāk izplatīti: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Pāriet pie ziņas',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Jums jābūt reģistrētam un jāielogojas lai apskatītu savas ziņas.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Jums jābūt reģistrētam un jāielogojas lai apskatītu neizlasītās ziņas.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Jums jābūt reģistrētam un jāielogojas lai apskatītu jaunākās ziņas ziņas.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> 'Ir norādīti pārāk daudz meklējamie vārdi. Lūdzu, ievadiet ne vairāk nekā %1$d vārdu.',
		2	=> 'Ir norādīti pārāk daudz meklējamie vārdi. Lūdzu, ievadiet ne vairāk nekā %1$d vārdus.',
	),

	'NO_KEYWORDS'			=> 'Jums jāievada vismaz viens meklējamais vārds. Katram vārdam jāsatur vismaz %d zīmes, un nedrīkst pārsniegt %d zīmes, izslēdzot šablona simbolu*.',
	'NO_RECENT_SEARCHES'	=> 'Pēdējā laikā meklāšanas nav veiktas.',
	'NO_SEARCH'				=> 'Atvainojiet, bet jums ir liegta meklēšanas izmantošana.',
	'NO_SEARCH_RESULTS'		=> 'Atbilstošu rezultātu netika atrasts.',
	'NO_SEARCH_TIME'		=> array(
		1	=> 'Atvainojiet, pašlaik meklēšana nav pieejama. Lūdzu mēģiniet velreiz pēc %d sekundes.',
		2	=> 'Atvainojiet, pašlaik meklēšana nav pieejama. Lūdzu mēģiniet velreiz pēc %d sekundēm.',
	),
	'NO_SEARCH_UNREADS'		=> 'Atvainojiet, bet iespēja meklēt nelasītas ziņas ir atslēgta.',
	'WORD_IN_NO_POST'		=> 'Nekas netika atrasts, jo vārds <strong>%s</strong> nav sastopams nevienā ziņā.',
	'WORDS_IN_NO_POST'		=> 'Nekas netika atrasts, jo vārdi <strong>%s</strong> nav sastopami nevienā ziņā.',

	'POST_CHARACTERS'		=> 'ziņu zīmes',
	'PHRASE_SEARCH_DISABLED'	=> 'Meklēšana pēc precīzas frāzes netiek atbalstīta šajā forumā.',

	'RECENT_SEARCHES'		=> 'Jaunākie meklējumi',
	'RESULT_DAYS'			=> 'Meklēt ziņojumus par',
	'RESULT_SORT'			=> 'Kārtot ziņojumus',
	'RETURN_FIRST'			=> 'Rādīt pirmos',
	'GO_TO_SEARCH_ADV'	=> 'Atgriezties pie Izvērstās meklēšanas',

	'SEARCHED_FOR'				=> 'Meklēšanas pieprasījums',
	'SEARCHED_TOPIC'			=> 'Meklēt tēmā',
	'SEARCHED_FOG'				=> 'Meklēt Tvaika Miglā',
	'SEARCHED_QUERY'			=> 'Meklēšanas vaicājums',
	'SEARCH_ALL_TERMS'			=> 'Meklēt visus vārdus',
	'SEARCH_ANY_TERMS'			=> 'Meklēt jebkuru no vārdiem',
	'SEARCH_AUTHOR'				=> 'Meklēt autoru',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Izmantojiet * kā meklēšanas šablonu.',
	'SEARCH_FIRST_POST'			=> 'Tēmas pirmājā ziņā',
	'SEARCH_FORUMS'				=> 'Meklēt forumos',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Izvēlaties forumu vai forumus, kuros veikt meklēšanu. Meklēšana apakšforumos notiek automātiski, ja jūs neesat zemāk atslēguši šo iespēju.',
	'SEARCH_IN_RESULTS'			=> 'Meklēt rezultātos',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Pievienojiet <strong>+</strong> pirms vārda lai iekļautu to meklēšanā, un <strong>-</strong> pirms vārdiem, kurus izslēgt no meklēšanas rezultātiem. Lai meklētu vienu vārdu no vārdu saraksta, atdaliet tos ar <strong>|</strong>. Izmantojiet * kā daļējas sakritības simbolu.',
	'SEARCH_MSG_ONLY'			=> 'Tikai ziņu tekstos',
	'SEARCH_OPTIONS'			=> 'Meklēšanas parametri',
	'SEARCH_QUERY'				=> 'Pieprasījums',
	'SEARCH_SUBFORUMS'			=> 'Meklēt apakšforumos',
	'SEARCH_TITLE_MSG'			=> 'Tēmu nosaukumos un ziņu tekstos',
	'SEARCH_TITLE_ONLY'			=> 'Tikai tēmu nosaukumos',
	'SEARCH_WITHIN'				=> 'Meklēt',
	'SORT_ASCENDING'			=> 'Augoša',
	'SORT_AUTHOR'				=> 'Autors',
	'SORT_DESCENDING'			=> 'Dilstoša',
	'SORT_FORUM'				=> 'Forums',
	'SORT_POST_SUBJECT'			=> 'Ziņas virsraksts',
	'SORT_TIME'					=> 'Pievienošanas datums',
	'SPHINX_SEARCH_FAILED'		=> 'Meklēšana neizdevās: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> 'Diemžēl meklēšanu nevar veikt. Papildinformāciju par šo kļūdu ir reģistrēta kļūdu žurnālā.',

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> 'Jums jāievada vismaz %d zīme no autora vārda.',
		2	=> 'Jums jāievada vismaz %d zīmes no autora vārda.',
	),
));
