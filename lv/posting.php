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
	'ADD_ATTACHMENT'			=> 'Pievienot pielikumu',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Šeit var pievienot vienu vai vairākus failus.',
	'ADD_FILE'					=> 'Pievienot failu',
	'ADD_POLL'					=> 'Izveidot aptauju',
	'ADD_POLL_EXPLAIN'			=> 'Ja jūs nevēlaties pievienot aptauju jūsu ziņai, atstājiet lauciņus tukšus.',
	'ALREADY_DELETED'			=> 'Šī ziņa jau ir dzēsta.',
	'ATTACH_DISK_FULL'			=> 'Nepietiek diska vietas, lai pievienotu pielikumu.',
	'ATTACH_QUOTA_REACHED'		=> 'Ir sasniegts pielikumu maksimālais limits.',
	'ATTACH_SIG'				=> 'Pievienot parakstu (parakstus var mainīt, izmantojot LKP)',

	'BBCODE_A_HELP'				=> 'Ievietot pielikumu ziņojuma tekstā: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Treknraksts: [b]text[/b]',
	'BBCODE_C_HELP'				=> 'Kods: [code]code[/code]',
	'BBCODE_E_HELP'				=> 'Saraksts: Pievienot saraksta elementu',
	'BBCODE_D_HELP'				=> 'Flash: [flash=width,height]http://url[/flash]',
	'BBCODE_F_HELP'				=> 'Šrifta izmērs: [size=85]small text[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s is <em>IZSLĒGTS</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s is <em>IESLĒGTS</em>',
	'BBCODE_I_HELP'				=> 'Slīpraksts: teksts: [i]teksts[/i]',
	'BBCODE_L_HELP'				=> 'Saraksts: [list][*]teksts[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'Saraksta elements: [*]tekstst',
	'BBCODE_O_HELP'				=> 'Numurēts saraksts: e.g. [list=1][*]Pirmais punkts[/list] vai [list=a][*]Apakšpunkts[/list]',
	
	'BBCODE_P_HELP'				=> 'Ievietot attēlu: [img]http://image_url[/img]',
	'BBCODE_Q_HELP'				=> 'Citāts: [quote]text[/quote]',
	'BBCODE_S_HELP'				=> 'Burtu krāsa: [color=red]teksts[/color] vai [color=#FF0000]teksts[/color]',
	'BBCODE_U_HELP'				=> 'Pasvītrots teksts: [u]teksts[/u]',
	'BBCODE_W_HELP'				=> 'Ievietot URL:  [url]http://url[/url] vai [url=http://url]URL teksts[/url]',
	'BBCODE_Y_HELP'				=> 'List: Add list element',
	'BUMP_ERROR'				=> 'Jūs nevarat pacelt tēmu uzreiz pēc pēdējās ziņas. Pamēģiniet vēlāk.',
	'CANNOT_DELETE_REPLIED'		=> 'Jūs varat dzēst vienīgi ziņas uz kurām nav atbildes.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Šī ziņa ir slēgta, jūs nevarat to labot.',
	'CANNOT_EDIT_TIME'			=> 'Jūs vairāk nevarat labot vai dzēst šo ziņu',
	'CANNOT_POST_ANNOUNCE'		=> 'Piedodiet, bet jūs nevarat pievienot paziņojumus.',
	'CANNOT_POST_STICKY'		=> 'Piedodiet, bet jūs nevarat pievienot piestiprinātās tēmas.',
	'CHANGE_TOPIC_TO'			=> 'Mainīt tēmas tipu uz',
	'CHARS_POST_CONTAINS'		=> array(
		1	=> 'Jūsu ziņojums satur %1$d rakstzīmi.',
		2	=> 'Jūsu ziņojums satur %1$d rakstzīmes.',
	),
	'CHARS_SIG_CONTAINS'		=> array(
		1	=> 'Paraksts satur %1$d rakstzīmi.',
		2	=> 'Paraksts satur %1$d rakstzīmes.',
	),
	'CLOSE_TAGS'				=> 'Aizvērt tagus', //Aizvērt birkas?
	'CURRENT_TOPIC'				=> 'Esošā tēma',

	'DELETE_FILE'				=> 'Dzēst failu',
	'DELETE_MESSAGE'			=> 'Dzēst ziņu',
	'DELETE_MESSAGE_CONFIRM'	=> 'Jūs tiešām vēlaties dzēst šo ziņu?',
	'DELETE_OWN_POSTS'			=> 'Jūs varat dzēst vienīgi savas ziņas.',
	'DELETE_PERMANENTLY'		=> 'Neatgriezeniski dzēst',
	'DELETE_POST_CONFIRM'		=> 'Vaitiešām vēlaties dzēst šo rakstu?',
	'DELETE_POST_PERMANENTLY_CONFIRM'	=> 'Vai tiešām vēlaties neatgriezeniski <strong>dzēst</strong> šo rakstu?',
	'DELETE_POST_PERMANENTLY'	=> 'Neatgriezeniski dzēstu rakstu nebūs iespēja atjaunot',
	'DELETE_POSTS_CONFIRM'		=> 'Vai tiešām vēlaties dzēst šos rakstus?',
	'DELETE_POSTS_PERMANENTLY_CONFIRM'	=> 'Vai tiešām vēlaties neatgriezeniski <strong>dzēst</strong> šos rakstus?',
	'DELETE_REASON'				=> 'Dzēšanas iemesls',
	'DELETE_REASON_EXPLAIN'		=> 'Norādītais dzēšanas iemesls būs redzams moderatoriem.',
	'DELETE_POST_WARN'			=> 'Izdzēsto rakstu nebūs iespējams atjaunot',
	'DELETE_TOPIC_CONFIRM'		=> 'Vai tiešām vēlaties dzēst šo tēmu?',
	'DELETE_TOPIC_PERMANENTLY'	=> 'Neatgriezeniski dzēstu tēmu nebūs iespēja atjaunot',
	'DELETE_TOPIC_PERMANENTLY_CONFIRM'	=> 'Vai tiešām vēlaties neatgriezeniski <strong>dzēst</strong> šo tēmu?',
	'DELETE_TOPICS_CONFIRM'		=> 'Vai tiešām vēlaties dzēst šīs tēmas?',
	'DELETE_TOPICS_PERMANENTLY_CONFIRM'	=> 'Vai tiešām vēlaties neatgriezeniski <strong>dzēst</strong> šīs tēmas?',
	'DISABLE_BBCODE'			=> 'Atslēgt BBCode',
	'DISABLE_MAGIC_URL'			=> 'epārveidot URL adreses linkos',
	'DISABLE_SMILIES'			=> 'Atslēgt smaidiņus',
	'DISABLE_FOG'				=> 'Atslēgt tvaiku',
	'DISALLOWED_CONTENT'		=> 'Augšupielāde tika atcelta, jo pielikums tika identificēts kā iespējams uzbrukums.',
	'DISALLOWED_EXTENSION'		=> 'Paplašinājums %s nav atļauts.',
	'DRAFT_LOADED'				=> 'Melnraksts ir ielādēts, jūs varat pabeigt ziņas labošanu tagad.<br />Pēc šīs ziņas nosūtīšanas melnraksts tiks izdzēsts.',
	'DRAFT_LOADED_PM'			=> 'Melnraksts ir ielādēts, jūs varat pabeigt privātās ziņas labošanu tagad.<br />Pēc šīs privātās ziņas nosūtīšanas melnraksts tiks izdzēsts.',
	'DRAFT_SAVED'				=> 'Melnraksts veiksmīgi saglabāts',
	'DRAFT_TITLE'				=> 'Melnraksta nosaukums',

	'EDIT_REASON'				=> 'Raksta labošanas iemesls',
	'EMPTY_FILEUPLOAD'			=> 'Ielādētais fails ir tukšs.',
	'EMPTY_MESSAGE'				=> 'Jums jāievada ziņas teksts.',
	'EMPTY_REMOTE_DATA'			=> 'Neizdevās pievienot failu, lūdzu, mēģiniet to augšupielādēt manuāli.',

	'FLASH_IS_OFF'				=> '[flash] ir <em>IZSLĒGTS</em>',
	'FLASH_IS_ON'				=> '[flash] ir <em>IESLĒGTS</em>',
	'FLOOD_ERROR'				=> 'Mazliet uzgaidiet, lai varētu veidot jaunu ierakstu.',
	'FONT_COLOR'				=> 'Burtu krāsa',
	'FONT_COLOR_HIDE'			=> 'Paslēpt burtu krāsu',
	'FONT_HUGE'					=> 'Milzīgs',
	'FONT_LARGE'				=> 'Liels',
	'FONT_NORMAL'				=> 'Normāls',
	'FONT_SIZE'					=> 'Burtu izmērs',
	'FONT_SMALL'				=> 'Mazs',
	'FONT_TINY'					=> 'Sīks',

	'GENERAL_UPLOAD_ERROR'		=> 'Neizdevās ielādēt pielikumu %s.',

	'IMAGES_ARE_OFF'			=> '[img] <em>IZSLĒGT</em>',
	'IMAGES_ARE_ON'				=> '[img] <em>IESLĒGTS</em>',
	'INVALID_FILENAME'			=> '%s ir nepareizs faila nosaukums.',

	'LOAD'						=> 'Ielādēt',
	'LOAD_DRAFT'				=> 'Ielādēt melnrakstu',
	'LOAD_DRAFT_EXPLAIN'		=> 'Jūs varat izvēlēties melnrakstu lai turpinātu ziņas labošanu. Jūsu esošā ziņa tiks dzēsta un tās saturs tiks zaudēts. Apskatīt, labot un dzēst melnrakstus jūs varat lietotāja panelī.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Jums nepieciešams ielogoties lai paceltu tēmu šajā forumā.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Jums nepieciešams ielogoties lai dzēstu ziņas šajā forumā.',
	'LOGIN_EXPLAIN_POST'		=> 'Jums nepieciešams ielogoties lai pievienotu ziņas šajā forumā.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Jums nepieciešams ielogoties lai citētu ziņas šajā forumā.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Jums nepieciešams ielogoties lai atbildētu tēmās šajā forumā.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Jūs nevarat izmantot burtu lielumu kurš pārsniedz %1$d.',
	
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Flash fails nevar pārsniegt %d pikseļu augstumu.',
		2	=> 'Flash fails nevar pārsniegt %d pikseļu augstumu.',
	),
	'MAX_FLASH_WIDTH_EXCEEDED'	=> array(
		1	=> 'Flash fails nevar pārsniegt %d pikseļu platumu.',
		2	=> 'Flash faili nevar pārsniegt %d pikseļu platumu.',
	),
	'MAX_IMG_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Attēls nevar pārsniegt %1$d pikseļu augstumu.',
		2	=> 'Attēli nevar pārsniegt %1$d pikseļu augstumu.',
	),
	'MAX_IMG_WIDTH_EXCEEDED'	=> array(
		1	=> 'Attēls nevar pārsniegt %d pikseļu platumu.',
		2	=> 'Attēli nevar pārsniegt %d pikseļu platumu.',
	),

	'MESSAGE_BODY_EXPLAIN'		=> array(
		0	=> '', // zero means no limit, so we don't view a message here.
		1	=> 'Ievadiet ziņas tekstu. Ziņas garums nevar būt garāks par <strong>%d</strong> rakstzīmi.',
		2	=> 'Ievadiet ziņas tekstu. Ziņas garums nevar būt garāks par <strong>%d</strong> rakstzīmēm.',
	),
	'MESSAGE_DELETED'			=> 'Ziņa veiksmīgi dzēsta.',
	'MORE_SMILIES'				=> 'Vairāk smaidiņu',

	'NOTIFY_REPLY'				=> 'Paziņot man par atbildi',
	'NOT_UPLOADED'				=> 'Failu nevar augšupielādēt.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Nevarat dzēst esošus atbilžu variantus..',
	'NO_PM_ICON'				=> 'Nav PZ ikonas',
	'NO_POLL_TITLE'				=> 'Jāievada aptaujas nosaukums.',
	'NO_POST'					=> 'Raksts neeksistē',
	'NO_POST_MODE'				=> 'Nav norādīts raksta veids',

	'PARTIAL_UPLOAD'			=> 'Fails augšupielādēts tikai daļēji.',
	'PHP_SIZE_NA'				=> 'Pielikums ir pārāk liels.<br />Nevarēja noteikt maksimālo faila lielumu PHP php.ini failā.',
	'PHP_SIZE_OVERRUN'			=> 'Pielikuma fails ir pārāk liels, maksimālais augšupielādes lielums ir %1$d %2$s.<br />Lūdzu, ņemiet vērā, ka lielums ir iestatīts php.ini.',
	'PLACE_INLINE'				=> 'Ievietot tekstā',
	'POLL_DELETE'				=> 'Dzēst aptauju',
	'POLL_FOR'					=> 'Aptauja notiks līdz',
	'POLL_FOR_EXPLAIN'			=> 'Ievadiet 0, lai nekad nebeigtos aptauja.',
	'POLL_MAX_OPTIONS'			=> 'Katra lietotāja iespējas',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Šis ir variantu skaitu ko katrs lietotājs var izvēlēties balsojot.',
	'POLL_OPTIONS'				=> 'Atbildes varianti',
	'POLL_OPTIONS_EXPLAIN'		=> array(
		1	=> 'Katru atbildes variantu ierakstiet jaunā rindā. Maksimums <strong>%d</strong> iespēja.',
		2	=> 'Katru atbildes variantu ierakstiet jaunā rindā. Maksimums <strong>%d</strong> iespēju.',
	),
	'POLL_OPTIONS_EDIT_EXPLAIN'		=> array(
		1	=> 'Katru variantu ierakstiet jaunā rindā. Maksimums <strong>%d</strong> iespēja. Ja dzēsīsiet vai pievienosiet kādu atbilžu variantu, iepriekšējais rezultāts tiks anulēts.',
		2	=> 'Katru variantu ierakstiet jaunā rindā. Maksimums <strong>%d</strong> iespēju. Ja dzēsīsiet vai pievienosiet kādu atbilžu variantu, iepriekšējie rezultāti tiks anulēti.',
	),
	'POLL_QUESTION'				=> 'Jautājums',
	'POLL_TITLE_TOO_LONG'		=> 'Aptaujas nosaukumam jābūt īsākam par 100 zīmēm.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'Aptaujas nosaukums ir pārāk garšs, pamēģiniet samazināt BBCode vai smaidiņus.',
	'POLL_VOTE_CHANGE'			=> 'Atļaut mainīt balsi',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Ja atļauts, tad lietotājs varēs mainīt savu atbilžu variantu.',
	'POSTED_ATTACHMENTS'		=> 'Pievienotie pielikumi',
	'POST_APPROVAL_NOTIFY'		=> 'Jums tiks paziņots par ziņas apstiprināšanu.',
	'POST_CONFIRMATION'			=> 'Ziņas apstiprinājums',
	'POST_CONFIRM_EXPLAIN'		=> 'Lai novērstu automātisku ziņu ievietošanu, ir nepieciešams ievadīt apstiprinājuma kodu. Kods ir redzams uz attēla zemāk. Ja kādu iemeslu dēļ nav iespējams nolasīt kodu, lūgums sazināties ar %sForuma Administratoru%s.',
	'POST_DELETED'				=> 'Ieraksts veiksmīgi dzēsts.',
	'POST_EDITED'				=> 'Ieraksts veiksmīgi labots.',
	'POST_EDITED_MOD'			=> 'Raksts ir veiksmīgi izlabots, taču pirms tā tiks publicēšanas ir jāsaņem moderatora apstiprinājums.',
	'POST_GLOBAL'				=> 'Svarīga',
	'POST_ICON'					=> 'Ikona',
	'POST_NORMAL'				=> 'Parasta',
	'POST_REVIEW'				=> 'Priekšapskate',
	'POST_REVIEW_EDIT'			=> 'Priekšapskate',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'Ieraksts tika izmainīts kamēr jūs to labojāt. Vai vēlaties apskatīt jauno rakstu un veikt vēlamos labojumus?',
	'POST_REVIEW_EXPLAIN'		=> 'Ir tikusi pievienota vismaz viena jauns ieraksts šajā tēmā. Varbūt jūs vēlaties mainīt savas raksta saturu.',
	'POST_STORED'				=> 'Raksts veiksmīgi pievienots.',
	'POST_STORED_MOD'			=> 'Ieraksts ir veiksmīgi pievienots, taču pirms to publicēt ir jāsaņem moderatora apstiprinājums.',
	'POST_TOPIC_AS'				=> 'Pievienot tēmu kā',
	'PROGRESS_BAR'				=> 'Ielādes indikators',

	'QUOTE_DEPTH_EXCEEDED'		=> array(
		1	=> 'Maksimālais iekļautu citātu skaits ir %d.',
		2	=> 'Maksimālais iekļautu citātu skaits ir %d.',
	),
	'QUOTE_NO_NESTING'			=> 'Nav tiesību iekļaut citātus.',

	'REMOTE_UPLOAD_TIMEOUT'		=> 'Norādīto failu nevarēja augšupielādēt, jo iestājās pieprasījuma taimauts.',
	'SAVE'						=> 'Saglabāt',
	'SAVE_DATE'					=> 'Saglabāts',
	'SAVE_DRAFT'				=> 'Saglabāt melnrakstu',
	'SAVE_DRAFT_CONFIRM'		=> 'Lūdzu, ņemiet vērā, ka saglabājas tikai ziņas virsraksts un teksts. Jebkuri citi elementi tiek dzēsti. Vai vēlaties saglabāt melnrakstu tagad?',
	'SMILIES'					=> 'Smaidiņi',
	'SMILIES_ARE_OFF'			=> 'Smaidiņi ir <em>IZSLĒGTI</em>',
	'SMILIES_ARE_ON'			=> 'Smaidiņi ir <em>IESLĒGTI</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Piestiprināti/Paziņojumi laika limits',
	'STICK_TOPIC_FOR'			=> 'Piestiprināt tēmu pie',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Ievadiet 0 vai atstājiet lauciņu tukšu, lai tēma būtu vienmēr Paziņojums/Piestiprināta. Ņemiet vērā, ka šis cipars ir nosacīts attiecībā uz publicēšanas datumu.',
	'STYLES_TIP'				=> 'Padoms: var ātri piemērot stilus iezīmētam tekstam.',

	'TOO_FEW_CHARS'				=> 'Ziņa ir pārāk īsa.',
	'TOO_FEW_CHARS_LIMIT'		=> array(
		1	=> 'Jūsu ziņa satur %1$d rakstzīmi.',
		2	=> 'Jūsu ziņa satur %1$d rakstzīmes.',
	),
	'TOO_FEW_POLL_OPTIONS'		=> 'Jāievada vismaz divi atbilžu varianti.',
	'TOO_MANY_ATTACHMENTS'		=> 'Nevar pievienot vairāk failu, %d ir maksimālais pielikumu skaits.',
	'TOO_MANY_CHARS'			=> 'Jūsu ziņa ir pārak gara.',
	'TOO_MANY_CHARS_LIMIT'		=> array(
		2	=> 'Maksimālais atļauto rakstzīmju skaits ir %1$d.',
	),
	'TOO_MANY_POLL_OPTIONS'		=> 'Jūs izvēlējāties pārāk daudz atbildžu variantus.',
	'TOO_MANY_SMILIES'			=> 'Jūsu ziņa satur pārāk daudz smaidiņus. Maksimālais atļauto smaidiņu skaits ir %d.',
	'TOO_MANY_URLS'				=> 'Jūsu ziņa satur pārāk daudz URL. Maksimālais atļauto URL skaits ir %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'Pārāk daudz atbilžu variantu.',
	'TOPIC_BUMPED'				=> 'Tēma veiksmīgi pacelta.',

	'UNAUTHORISED_BBCODE'		=> 'Jūs nevarat izmantot dažus BBCodes: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'Lai nomainītu tēmu no svarīgas un parastu, jums jāizvēlas sadaļa, kurā tā tiks publicēta.',
	'UNSUPPORTED_CHARACTERS_MESSAGE'	=> 'Jūsu ziņa ir šādas neatbalstītas rakstzīmes:<br />%s',
	'UNSUPPORTED_CHARACTERS_SUBJECT'	=> 'Jūsu virsraksts satur neatbalstītas rakstzīmes:<br />%s',
	'UPDATE_COMMENT'			=> 'Atjaunot komentāru',
	'URL_INVALID'				=> 'Norādītā URL ir nepareiza.',
	'URL_NOT_FOUND'				=> 'Norādītais fails nav atrasts.',
	'URL_IS_OFF'				=> '[url] ir <em>IZSLĒGTS</em>',
	'URL_IS_ON'					=> '[url] ir <em>IESLĒGTS</em>',
	'USER_CANNOT_BUMP'			=> 'Jūs nevarat pacelt tēmas šajā sadaļā.',
	'USER_CANNOT_DELETE'		=> 'Jūs nevarat dzēst ziņas šajā sadaļā.',
	'USER_CANNOT_EDIT'			=> 'Jūs nevarat labot ziņas šajā sadaļā.',
	'USER_CANNOT_REPLY'			=> 'Jūs nevarat atbildēt šajā sadaļā.',
	'USER_CANNOT_FORUM_POST'	=> 'Jūs nevarat pievienot ziņas, jo šīs sadaļās tips to neatļauj.',

	'VIEW_MESSAGE'				=> '%sApskatīt jūsu ziņu%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sApskatīt jūsu nosūtītās privātās ziņas%s',

	'WRONG_FILESIZE'			=> 'Pārāk liels faila izmērs. Maksimāli atļauts %1$d %2$s.',
	'WRONG_SIZE'				=> 'Attēlam jābūt vismaz %1$d pikseļu platam un %2$d pikseļu augstam, bet ne lielākam par %3$d pikseļiem platumā un %4$d pikseļiem augstumā. Jūs attēls ir %5$d pikseļu plats un %6$d pikseļu augsts.',
));
