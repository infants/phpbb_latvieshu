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
	'ACTION'				=> 'Darbība',
	'ACTION_NOTE'			=> 'Darbība/Piezīme',
	'ADD_FEEDBACK'			=> 'Pievienot piezīmi par lietotāju',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Lai pievienotu piezīmi, lūdzu aizpildiet sekojošo formu. Izmantojiet tikai tekstu; HTML, BBCode u.t.t., nav atļauti.',
	'ADD_WARNING'			=> 'Pievienot brīdinājumu',
	'ADD_WARNING_EXPLAIN'	=> 'Lai nosūtītu brīdinājumu šim lietotājam, lūdzu aizpildiet sekojošo formu. Izmantojiet tikai tekstu; HTML, BBCode u.t.t., nav atļauti.',
	'ALL_ENTRIES'			=> 'Visi ieraksti',
	'ALL_NOTES_DELETED'		=> 'Visas piezīmes par lietotāju veiksmīgi dzēstas.',
	'ALL_REPORTS'			=> 'Visi paziņojumi',
	'ALREADY_REPORTED'		=> 'Par šo ziņu jau ir paziņots.',
	'ALREADY_REPORTED_PM'	=> 'Par šo privāto ziņu jau ir paziņots.',
	'ALREADY_WARNED'		=> 'Par šo ziņu brīdinājums jau ir izteikts.',
	'APPROVE'				=> 'Apstiprināt',
	'APPROVE_POST'			=> 'Apstiprināt ziņu',
	'APPROVE_POST_CONFIRM'	=> 'Jūs tiešām vēlaties apstiprināt šo ziņu?',
	'APPROVE_POSTS'			=> 'Apstiprināt ziņas',
	'APPROVE_POSTS_CONFIRM'	=> 'Jūs tiešām vēlaties apstiprināt izvēlētās ziņas?',

	'APPROVE_TOPIC'			=> 'Apstiprināt tēmu',
	'APPROVE_TOPIC_CONFIRM'	=> 'Jūs tiešām vēlaties apstiprināt šo tēmu?',
	'APPROVE_TOPICS'		=> 'Apstiprināt tēmas',
	'APPROVE_TOPICS_CONFIRM'=> 'Jūs tiešām vēlaties apstiprināt izvēlētās tēmas?',

	'CANNOT_MOVE_SAME_FORUM'=> 'Jūs nevarat pārvietot tēmu uz forumu kurā tā jau atrodas.',
	'CANNOT_WARN_ANONYMOUS'	=> 'Jūs nevarat brīdināt nereģistrētus lietotājus',
	'CANNOT_WARN_SELF'		=> 'Jūs nevarat brīdināt sevi.',
	'CAN_LEAVE_BLANK'		=> 'Šo lauku var atstāt tukšu.',
	'CHANGE_POSTER'			=> 'Mainīt autoru',
	'CLOSE_PM_REPORT'		=> 'Aizvērt sūdzību par privāto ziņu',
	'CLOSE_PM_REPORT_CONFIRM'	=> 'Jūs tiešām vēlaties aizvērt sūdzību par izvēlēto privāto ziņu?',
	'CLOSE_PM_REPORTS'		=> 'Aizvērt sūdzības par privātām ziņām',
	'CLOSE_PM_REPORTS_CONFIRM'	=> 'Jūs tiešām vēlaties aizvērt sūdzības par izvēlētajām privātajām ziņām?',
	'CLOSE_REPORT'			=> 'Aizvērt sūdzību',
	'CLOSE_REPORT_CONFIRM'	=> 'Jūs tiešām vēlaties aizvērt izvēlēto sūdzību?',
	'CLOSE_REPORTS'			=> 'Aizvērt sūdzības',
	'CLOSE_REPORTS_CONFIRM'	=> 'Jūs tiešām vēlaties aizvērt izvēlētās sūdzības?',

	'DELETE_PM_REPORT'			=> 'Dzēst sūdzību par privāto ziņu',
	'DELETE_PM_REPORT_CONFIRM'	=> 'Jūs tiešām vēlaties dzēst sūdzību par privāto ziņu?',
	'DELETE_PM_REPORTS'			=> 'Dzēst sūdzības par privātajām ziņām',
	'DELETE_PM_REPORTS_CONFIRM'	=> 'Jūs tiešām vēlaties dzēst sūdzības par privātajām ziņām?',
	'DELETE_POSTS'				=> 'Dzēst ziņas',
	'DELETE_REPORT'				=> 'Dzēst sūdzību',
	'DELETE_REPORT_CONFIRM'		=> 'Jūs tiešām vēlaties dzēst izvēlēto sūdzību?',
	'DELETE_REPORTS'			=> 'Dzēst sūdzības',
	'DELETE_REPORTS_CONFIRM'	=> 'Jūs tiešām vēlaties dzēst izvēlētaās sūdzības?',
	'DELETE_SHADOW_TOPIC'		=> 'Dzēst atsauci vecajā forumā',
	'DELETE_TOPICS'				=> 'Dzēst izvēlētās tēmas',
	'DISAPPROVE'				=> 'Atteikt',
	'DISAPPROVE_REASON'			=> 'Atteikšanas iemesls',
	'DISAPPROVE_POST'			=> 'Atteikt ziņu',
	'DISAPPROVE_POST_CONFIRM'	=> 'Jūs tiešām vēlaties atteikt šo ziņu?',
	'DISAPPROVE_POSTS'			=> 'Atteikt ziņas',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Jūs tiešām vēlaties atteikt izvēlētās ziņas?',
	'DISPLAY_LOG'				=> 'Parādīt ierakstus par',
	'DISPLAY_OPTIONS'			=> 'Atainošanas uzstādījumi',

	'EMPTY_REPORT'					=> 'Jums jāpamato šī sūdzība.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Lūdzu, pievērsiet uzmanību, ka viena vai vairākas tēmas ir dzēstas no datu bāzes, par cik nesaturēja vai pārstāja saturēt ziņas.',

	'FEEDBACK'				=> 'Ziņas par lietotāju',
	'FORK'					=> 'Kopēt',
	'FORK_TOPIC'			=> 'Kopēt tēmu',
	'FORK_TOPIC_CONFIRM'	=> 'Jūs tiešām vēlaties kopēt šo tēmu?',
	'FORK_TOPICS'			=> 'Kopēt izvēlētās tēmas',
	'FORK_TOPICS_CONFIRM'	=> 'Jūs tiešām vēlaties kopēt izvēlētās tēmas?',
	'FORUM_DESC'			=> 'Apraksts',
	'FORUM_NAME'			=> 'Foruma nosaukums',
	'FORUM_NOT_EXIST'		=> 'Jūsu izvēlētais forums neeksistē.',
	'FORUM_NOT_POSTABLE'	=> 'Jūsu izvēlētajā forumā nevar tikt pievienotas ziņas.',
	'FORUM_STATUS'			=> 'Foruma statuss',
	'FORUM_STYLE'			=> 'Foruma stils',

	'GLOBAL_ANNOUNCEMENT'	=> 'Globālais paziņojums',

	'IP_INFO'				=> 'Informācija par IP adresi',
	'IPS_POSTED_FROM'		=> 'IP adreses, no kurām lietotājs pievienojis ziņas',

	'LATEST_LOGS'				=> 'Pēdējās 5 darbības',
	'LATEST_REPORTED'			=> 'Pēdējās 5 sūdzības',
	'LATEST_REPORTED_PMS'		=> 'Pēdējās 5 sūdzības par privātām ziņām',
	'LATEST_UNAPPROVED'			=> 'Pēdējās 5 ziņas, kuras gaida apstiprināšanu',
	'LATEST_WARNING_TIME'		=> 'Pēdējie brīdinājumi',
	'LATEST_WARNINGS'			=> 'Pēdējie 5 brīdinājumi',
	'LEAVE_SHADOW'				=> 'Atstāt atsauci vecajā forumā',
	'LIST_REPORTS'				=> array(
		1	=> '%d sūdzība',
		2	=> '%d sūdzības',
	),
	'LOCK'						=> 'Slēgt',
	'LOCK_POST_POST'			=> 'Slēgt ziņu',
	'LOCK_POST_POST_CONFIRM'	=> 'Jūs tiešām vēlaties aizliegt šīs ziņas labošanu?',
	'LOCK_POST_POSTS'			=> 'Slēgt izvēlētās ziņas',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Jūs tiešām vēlaties aizliegt izvēlēto ziņu labošanu?',
	'LOCK_TOPIC_CONFIRM'		=> 'Jūs tiešām vēlaties slēgt šo tēmu?',
	'LOCK_TOPICS'				=> 'Slēgt izvēlētās tēmas',
	'LOCK_TOPICS_CONFIRM'		=> 'Jūs tiešām vēlaties slēgt izvēlētās tēmas?',
	'LOGS_CURRENT_TOPIC'		=> 'Logu apskate tēmai:',
	'LOGIN_EXPLAIN_MCP'			=> 'Jums jāielogojas lai moderētu šo forumu.',
	'LOGVIEW_VIEWTOPIC'			=> 'Skatīt tēmu',
	'LOGVIEW_VIEWLOGS'			=> 'Skatīt tēmas logus',
	'LOGVIEW_VIEWFORUM'			=> 'Skatīt forumu',
	'LOOKUP_ALL'				=> 'Apskatīt visu IP hostus',
	'LOOKUP_IP'					=> 'IP hosts',

	'MARKED_NOTES_DELETED'		=> 'Visas atzīmētās piezīmes par lietotāju ir dzēstas.',

	
	'MCP_ADD'						=> 'Pievienot brīdinājumu',

	'MCP_BAN'					=> 'Aizliegumi',
	'MCP_BAN_EMAILS'			=> 'Aizliegtās e-adreses',
	'MCP_BAN_IPS'				=> 'Aizliegtās IP',
	'MCP_BAN_USERNAMES'			=> 'Aizliegtie lietotājvārdi',

	'MCP_LOGS'						=> 'Moderatoru logi', //man gan liekas moderātoru žurnāli
	'MCP_LOGS_FRONT'				=> 'Sākumlapa',
	'MCP_LOGS_FORUM_VIEW'			=> 'Foruma logi',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Tēmas logi',

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	'MCP_MAIN'						=> 'Galvenā',
	'MCP_MAIN_FORUM_VIEW'			=> 'Skatīt forumu',
	'MCP_MAIN_FRONT'				=> 'Sākumlapa',
	'MCP_MAIN_POST_DETAILS'			=> 'Informācija par ziņu',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Skatīt tēmu',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Pārveidot tēmu par “Paziņojumu”',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Jūs tiešām vēlaties pārveidot šo tēmu par “Paziņojumu”?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Pārveidot par “Paziņojumiem”',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Jūs tiešām vēlaties pārveidot izvēlētās tēmas par “Paziņojumiem”?',
	'MCP_MAKE_GLOBAL'				=> 'Pārveidot par “Global announcement”',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Jūs tiešām vēlaties pārveidot šo tēmu par “Global announcement”?',
	'MCP_MAKE_GLOBALS'				=> 'Pārveidot par “Global announcements”',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Jūs tiešām vēlaties pārveidot izvēlētās tēmas par “Global announcements”?',
	'MCP_MAKE_STICKY'				=> 'Pārveidot par “Piestiprināts”',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Jūs tiešām vēlaties pārveidot šo tēmu par “Piestiprināts”?',
	'MCP_MAKE_STICKIES'				=> 'Pārveidot par “Piesitprinātiem”',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Jūs tiešām vēlaties pārveidot izvēlētās tēmas par “Piestiprinātām”?',
	'MCP_MAKE_NORMAL'				=> 'Pārveidot par “Parastu tēmu”',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Jūs tiešām vēlaties pārveidot šo tēmu par “Parastu tēmu”?',
	'MCP_MAKE_NORMALS'				=> 'Pārveidot par “Parastām tēmām”',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Jūs tiešām vēlaties pārveidot izvēlētās tēmas par “Parastām tēmām”?',

	'MCP_NOTES'						=> 'Piezīmes par lietotāju',
	'MCP_NOTES_FRONT'				=> 'Sākumlapa',
	'MCP_NOTES_USER'				=> 'Informācija',
	'MCP_POST_REPORTS'				=> 'Sūdzības par šo ziņu',

	'MCP_PM_REPORTS'				=> 'Sūdzības par privātajām ziņām',
	'MCP_PM_REPORT_DETAILS'			=> 'Sūdzības detaļas',
	'MCP_PM_REPORTS_CLOSED'			=> 'Slēgtās PM sūdzības',
	'MCP_PM_REPORTS_CLOSED_EXPLAIN'	=> 'Šis ir saraksts par visām izskatītām un slēgtām privāto ziņu sūdzībām.',
	'MCP_PM_REPORTS_OPEN'			=> 'Atvertās PM sūdzības',
	'MCP_PM_REPORTS_OPEN_EXPLAIN'	=> 'Šis ir saraksts par visām privāto ziņu sūdzībām, kuras vēl nav izskatītas.',

	'MCP_REPORTS'					=> 'Sūdzības par ziņām',
	'MCP_REPORT_DETAILS'			=> 'Sūdzības detaļas',
	'MCP_REPORTS_CLOSED'			=> 'Slēgtās sūdzības',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Šis ir izskatīto ziņu sūdzību saraksts.',
	'MCP_REPORTS_OPEN'				=> 'Atvertās sūdzības',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Šis ir neizskatīto ziņu sūdzību saraksts.',
'MCP_QUEUE'								=> 'Rinda uz moderēšanu',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Apstiprinājuma detaļas',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Ziņas apstiprināšanai',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Šis ir ziņu saraksts, kuras gaida apstiprināšanu pirms kļūt redzamām lietotājiem.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Tēmas apstiprināšanai',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Šis ir tēmu saraksts, kuras gaida apstiprināšanu pirms kļūt redzamām lietotājiem.',
	'MCP_QUEUE_DELETED_POSTS'				=> 'Dzēstās ziņas',
	'MCP_QUEUE_DELETED_POSTS_EXPLAIN'		=> 'Šo sarakstu ar dzēstām ziņām var atjaunot vai neatgriezeniski dzēst no šī ekrāna.',
	'MCP_QUEUE_DELETED_TOPICS'				=> 'Dzēstās tēmas',
	'MCP_QUEUE_DELETED_TOPICS_EXPLAIN'		=> 'Šo sarakstu ar dzēstām tēmām var atjaunot vai neatgriezeniski dzēst no šī ekrāna.',
	'MCP_VIEW_USER'			=> 'Konkrētā lietotāja brīdinājumu apskats',
	'MCP_WARN'				=> 'Brīdinājumi',
	'MCP_WARN_FRONT'		=> 'Sākumlapa',
	'MCP_WARN_LIST'			=> 'Brīdinājumu saraksts',
	'MCP_WARN_POST'			=> 'Brīdinājumi par konkrētu ziņu',
	'MCP_WARN_USER'			=> 'Brīdināt lietotāju',


	'MERGE_POSTS'			=> 'Apvienot ziņas',
	'MERGE_POSTS_CONFIRM'	=> 'Jūs tiešām vēlaties apvienot izvēlētās ziņas?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Izmantojot zemāk esošo formu, jūs varat pārnest izvēlētās ziņas jau esošā tēmā. Ziņas tiks attainotas tēmā pēc to pievienošanas laika.<br />Lūdzu, ievadiet tēmas numuru (ID) vai nospiediet “Izvēlēties tēmu” priekš meklēšanas.',
	'MERGE_TOPIC_ID'		=> 'Mērķa tēmas identifikācijas numurs',
	'MERGE_TOPICS'			=> 'Apvienot tēmas',
	'MERGE_TOPICS_CONFIRM'	=> 'Jūs tiešām vēlaties apvienot izvēlētās tēmas?',
	'MODERATE_FORUM'		=> 'Moderēt forumu',
	'MODERATE_TOPIC'		=> 'Moderēt tēmu',
	'MODERATE_POST'			=> 'Moderēt ziņu',
	'MOD_OPTIONS'			=> 'Moderātora uzstādījumi',
	'MORE_INFO'				=> 'Papildus informācija',
	'MOST_WARNINGS'			=> 'Lietotāji, kuriem izteikts visvairāk brīdinājumu',
	'MOVE_TOPIC_CONFIRM'	=> 'Jūs tiešām vēlaties pārvietot tēmu uz jaunu forumu?',
	'MOVE_TOPICS'			=> 'Pārvietot izvēlētās tēmas',
	'MOVE_TOPICS_CONFIRM'	=> 'Jūs tiešām vēlaties pārvietot izvēlētās tēmas uz jaunu forumu?',

	'NOTIFY_POSTER_APPROVAL'		=> 'Paziņot autoram par ziņas apstiprināšanu?',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'Paziņot autoram par ziņas neapstiprināšanu?',
	'NOTIFY_USER_WARN'				=> 'Paziņot lietotājam par brīdinājumu?',
	'NOT_MODERATOR'					=> 'Jūs neesat šī foruma moderators.',
	'NO_DESTINATION_FORUM'			=> 'Lūdzu izvēlaties forumu.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Mērķa forums nav pieejams.',
	'NO_ENTRIES'					=> 'Par šo periodu nav logu.',
	'NO_FEEDBACK'					=> 'Par šo lietotāju nav piezīmju.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'Jums jāizvēlas tēma lai apvienotu ziņas.',
	'NO_MATCHES_FOUND'				=> 'Sakritības nav atrastas.',
	'NO_POST'						=> 'Jums jāizvēlas ziņa, lai varētu par to izteikt brīdinājumu lietotājam.',
	'NO_POST_REPORT'				=> 'Par šo ziņu sūdzības nav sūtītas.',
	'NO_POST_SELECTED'				=> 'Jums jāizvēlas vismaz viena ziņa, lai veiktu šo darbību.',
	'NO_REASON_DISAPPROVAL'			=> 'Lūdzu norādiet piemērotu iemeslu atteikumam.',
	'NO_REPORT'						=> 'Sūdzība nav atrasta',
	'NO_REPORTS'					=> 'Sūdzības nav atrastas',
	'NO_REPORT_SELECTED'			=> 'Jums jāizvēlas vismaz viena sūdzība, lai veiktu šo darbību.',
	'NO_TOPIC_ICON'					=> 'Nav',
	'NO_TOPIC_SELECTED'				=> 'Jums jāizvēlas vismaz viena tēma, lai veiktu šo darbību.',
	'NO_TOPICS_DELETED'				=> 'Šeit nav dzēstu tēmu.',
	'NO_TOPICS_QUEUE'				=> 'Nav tēmu kurām būtu nepieciešama apstiprināšana.',
	'ONLY_TOPIC'			=> 'Tikai tēma “%s”',
	'OTHER_USERS'			=> 'Citi lietotāji, kuri atstājuši ziņas no šīs IP',

	'QUICKMOD_ACTION_NOT_ALLOWED' => "%s nav atļauts kā quickmod",

	'PM_REPORT_CLOSED_SUCCESS'	=> 'Izvēlētā sūdzība par privāto ziņu veiksmīgi slēgta.',
	'PM_REPORT_DELETED_SUCCESS'	=> 'Izvēlētā sūdzība par privāto ziņu veiksmīgi dzēsta.',
	'PM_REPORTED_SUCCESS'		=> 'Sūdzība par privāto ziņu veiksmīgi nosūtīta.',
	'PM_REPORTS_CLOSED_SUCCESS'	=> 'Izvēlētās sūdzības par privātajām ziņām ir veiksmīgi slēgtas.',
	'PM_REPORTS_DELETED_SUCCESS'=> 'Izvēlētās sūdzības par privātajām ziņām ir veiksmīgi dzēstas.',
	'PM_REPORTS_TOTAL'			=> array(
		0	=> 'Nav nevienas PZ sūdzību.',
		1	=> 'Pavisam kopā ir <strong>1</strong> PZ sūdzība.',
		2	=> 'Pavisam kopā ir <strong>%d</strong> PZ sūdzības.',
	),
	'PM_REPORTS_TOTAL'			=> 'Pavisam kopā ir <strong>%d</strong> privāto ziņu sūdzības.',
	'PM_REPORT_DETAILS'			=> 'Sūdzības detaļas',
	'POSTER'					=> 'Autors',
	'POSTS_APPROVED_SUCCESS'	=> 'Izvēlētās ziņas ir apstiprinātas.',
	'POSTS_DELETED_SUCCESS'		=> 'Izvēlētās ziņas veiksmīgi dzēstas no datu bāzes.',
	
	'POSTS_DISAPPROVED_SUCCESS'	=> 'Izvēlētās ziņas ir noraidītas.',
	'POSTS_LOCKED_SUCCESS'		=> 'Izvēlētās ziņas veiksmīgi slēgtas.',
	'POSTS_MERGED_SUCCESS'		=> 'Izvēlētās ziņas veiksmīgi apvienotas.',
	'POSTS_PER_PAGE'			=> 'Ziņas lapā',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Uzstādiet 0 lai skatītu visas ziņas.)',

	'POSTS_UNLOCKED_SUCCESS'	=> 'Izvēlētās ziņas veiksmīgi atjaunotas.',	

	
	'POST_APPROVED_SUCCESS'		=> 'Izvēlētā ziņa ir apstiprināta.',
	'POST_DELETED_SUCCESS'		=> 'Izvēlētā ziņa veiksmīgi dzēsta no datu bāzes.',
	'POST_DISAPPROVED_SUCCESS'	=> 'Izvēlētā ziņa ir noraidīta.',
	'POST_LOCKED_SUCCESS'		=> 'Ziņa veiksmīgi slēgta.',
	'POST_NOT_EXIST'			=> 'Pieprasītā ziņa neeksistē.',
	'POST_REPORTED_SUCCESS'		=> 'Sūdzība par ziņu nosūtīta.',
	'POSTS_RESTORED_SUCCESS'	=> 'Izvēlētās ziņas veiksmīgi atjaunotas.',
	'POST_UNLOCKED_SUCCESS'		=> 'Ziņa veiksmīgi atjaunota.',

	'READ_USERNOTES'			=> 'Lietotāja piezīmes',
	'READ_WARNINGS'				=> 'Lietotāja brīdinājumi',
	'REPORTER'					=> 'Sūdzības autors',
	'REPORTED'					=> 'Sūdzība nosūtīta',
	'REPORTED_BY'				=> 'Sūdzību nosūtījis',
	'REPORTED_ON_DATE'			=> 'no',
	'REPORTS_CLOSED_SUCCESS'	=> 'Izvēlētās sūdzības veiksmīgi slēgtas.',
	'REPORTS_DELETED_SUCCESS'	=> 'Izvēlētās sūdzības veiksmīgi dzēstas.',
		'REPORTS_TOTAL'				=> array(
		0	=> 'Nav nevienas sūdzības.',
		1	=> 'Pavisam kopā ir <strong>1</strong> sūdzība.',
		2	=> 'Pavisam kopā ir <strong>%d</strong> sūdzības.',
	),
	'REPORT_CLOSED'				=> 'Šī sūdzība jau ir slēgta.',
	'REPORT_CLOSED_SUCCESS'		=> 'Izvēlētā sūdzība veiksmīgi slēgta.',
	'REPORT_DELETED_SUCCESS'	=> 'Izvēlētā sūdzība veiksmīgi dzēsta.',
	'REPORT_DETAILS'			=> 'Sūdzības detaļas',
	'REPORT_MESSAGE'			=> 'Pasūdzēties par šo ziņu',
	
	'REPORT_MESSAGE_EXPLAIN'	=> 'Izmantojiet šo formu lai nosūtītu sūdzību par privāto ziņu. Parasti, sūdzības tiek sūtītas gadījumos, kad ziņa pārkāpj kādu no forumu noteikumiem. <strong>Nosūtītā sūdzība padarīs redzamu privāto ziņu priekš moderatoriem.</strong>',
	'REPORT_NOTIFY'				=> 'Paziņot man',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Jums tiks paziņots par sūdzības izskatīšanu.',
	'REPORT_POST_EXPLAIN'		=> 'Izmantojiet šo formu, lai nosūtītu sūdzību par izvēlēto ziņu moderatoriem vai administrācijai. Parasti, sūdzības tiek sūtītas gadījumos, kad ziņa pārkāpj kādu no foruma noteikumiem.',
	'REPORT_REASON'				=> 'Sūdzības iemesls',
	'REPORT_TIME'				=> 'Sūdzības laiks',
	'REPORT_TOTAL'				=> 'Pavisam kopā ir <strong>1</strong> neizskatīta sūdzība.',
	
	'RESTORE'					=> 'Atjaunot',
	'RESTORE_POST'				=> 'Atjaunot ziņu',
	'RESTORE_POST_CONFIRM'		=> 'Vai vēlaties atjaunot šo ziņu?',
	'RESTORE_POSTS'				=> 'Atjaunot ziņas',
	'RESTORE_POSTS_CONFIRM'		=> 'Vai vēlaties atjaunot izvēlētās ziņuas?',
	'RESTORE_TOPIC'				=> 'Atjaunot tēmu',
	'RESTORE_TOPIC_CONFIRM'		=> 'Vai vēlaties atjaunot šo tēmu?',
	'RESTORE_TOPICS'			=> 'Atjaunot tēmas',
	'RESTORE_TOPICS_CONFIRM'	=> 'Vai vēlaties atjaunot izvēlētās tēmas?',
	'RESYNC'					=> 'Sinhronizēt',
	'RETURN_MESSAGE'			=> '%sAtgriezties pie ziņas%s',
	'RETURN_NEW_FORUM'			=> '%sPāriet uz jaunu forumu%s',
	'RETURN_NEW_TOPIC'			=> '%sPāriet uz jaunu tēmu%s',
	'RETURN_PM'					=> '%sAtgriezties pie privātās ziņas%s',
	'RETURN_POST'				=> '%sAtgriezties pie ziņas%s',
	'RETURN_QUEUE'				=> '%sAtgriezties pie rindas%s',
	'RETURN_REPORTS'			=> '%sAtgriezties pie sūdzībām%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sAtgriezties pie tēmas%s',

	'SEARCH_POSTS_BY_USER'				=> 'Meklēt ziņas pēc',
	'SELECT_ACTION'						=> 'Izvēlēties veicamo darbību',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Lūdzu, izvēlaties forumu, kurā tiks attainots šis svarīgais paziņojums.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Viena vai vairākas no izvēlētajām tēmām ir svarīgas. Norādiet forumu kurā tās tik attainotas.',
	'SELECT_MERGE'						=> 'Izvēlēties apvienošanai',
	'SELECT_TOPICS_FROM'				=> 'Izvēlēties tēmas no',
	'SELECT_TOPIC'						=> 'Izvēlēties tēmu',
	'SELECT_USER'						=> 'Izvēlēties lietotāju',
	'SORT_ACTION'						=> 'Darbības logs',
	'SORT_DATE'							=> 'Datums',
	'SORT_IP'							=> 'IP adrese',
	'SORT_WARNINGS'						=> 'Brīdinājumi',
	
	'SPLIT_AFTER'						=> 'Sadalīt tēmu sākot ar izvēlēto ziņu',
	'SPLIT_FORUM'						=> 'Forums jaunai tēmai',
	'SPLIT_POSTS'						=> 'Atdalīt izvēlētās ziņas',
	'SPLIT_SUBJECT'						=> 'Jaunās tēmas nosaukums',
	'SPLIT_TOPIC_ALL'					=> 'Sadalīt tēmu aiz izvēlētajām ziņām',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Jūs tiešam vēlaties sadalīt šo tēmu?',
	'SPLIT_TOPIC_BEYOND'				=> 'Sadalīt tēmu sākot ar izvēlēto ziņu',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Jūs tiešām vēlaties sadalīt šo tēmu sākot ar izvēlēto ziņu?',
	'SPLIT_TOPIC_EXPLAIN'				=> 'Izmantojot zemāk esošo formu, jūs varat sadalīt tēmu divās, vai nu izvēloties atsevišķas ziņas, vai atdalot tēmu pēc izvēlētas ziņas.',

	'THIS_PM_IP'				=> 'IP šai privātai ziņai',
	'THIS_POST_IP'				=> 'IP šai ziņai',
	'TOPICS_APPROVED_SUCCESS'	=> 'Izvēlētās tēmas tika apstiprinātas.',
	'TOPICS_DELETED_SUCCESS'	=> 'Izvēlētās tēmas veiksmīgi dzēstas no datu bāzes.',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'Izvēlētās tēmas tika noraidītas.',
	'TOPICS_FORKED_SUCCESS'		=> 'Izvēlētās tēmas veiksmīgi nokopētas.',
	'TOPICS_LOCKED_SUCCESS'		=> 'Izvēlētās tēmas slēgtas.',
	'TOPICS_MOVED_SUCCESS'		=> 'Izvēlētās tēmas veiksmīgi pārvietotas.',
	'TOPICS_RESTORED_SUCCESS'	=> 'Izvēlētās tēmas veiksmīgi atjaunotas.',
	'TOPICS_RESYNC_SUCCESS'		=> 'Izvēlētās tēmas sinhronizētas.',
	'TOPICS_TYPE_CHANGED'		=> 'Tēmas tipi veiksmīgi nomainīti..',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'Izvēlētās tēmas atjaunotas.',
	'TOPIC_APPROVED_SUCCESS'	=> 'Izvēlētā tēma apstiprināta.',
	'TOPIC_DELETED_SUCCESS'		=> 'Izvēlētā tēma veiksmīgi dzēsta no datu bāzes.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'Izvēlētā tēma tika noraidīta.',
	'TOPIC_FORKED_SUCCESS'		=> 'Izvēlētā tēma veiksmīgi nokopēta.',
	'TOPIC_LOCKED_SUCCESS'		=> 'Izvēlētā tēma slēgta.',
	'TOPIC_MOVED_SUCCESS'		=> 'Izvēlētā tēma veiksmīgi pārvietota.',
	'TOPIC_NOT_EXIST'			=> 'Izvēlētā tēma neeksistē.',
	'TOPIC_RESYNC_SUCCESS'		=> 'Izvēlētā tēma sinhronizēta.',
	'TOPIC_SPLIT_SUCCESS'		=> 'Izvēlētā tēma veiksmīgi sadalīta.',
	'TOPIC_TIME'				=> 'Tēmas izveidošanas laiks',
	'TOPIC_TYPE_CHANGED'		=> 'Tēmas tips veiksmīgi nomainīts.',
	
	'TOPIC_UNLOCKED_SUCCESS'	=> 'Izvēlētā tēma tika atjaunota.',
	'TOTAL_WARNINGS'			=> 'Kopā brīdinājumu',

	'UNAPPROVED_POSTS_TOTAL'		=> array(
		0	=> 'Nav nevienas ziņas apstiprināšanai.',
		1	=> 'Pavisam kopā ir  <strong>1</strong> ziņa apstiprināšanai.',
		2	=> 'Pavisam kopā ir <strong>%d</strong> ziņas apstiprināšanai.',
	),
	'UNLOCK'						=> 'Atslēgt',
	'UNLOCK_POST'					=> 'Atslēgt ziņu',
	'UNLOCK_POST_EXPLAIN'			=> 'Atļaut labošanu',
	'UNLOCK_POST_POST'				=> 'Atslēgt ziņu',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Jūs tiešām vēlaties atļaut labot šo ziņu?',
	'UNLOCK_POST_POSTS'				=> 'Atslēgt izvēlētās ziņas',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Jūs tiešām vēlaties atļaut labot izvēlētās ziņas?',
	'UNLOCK_TOPIC'					=> 'Atslēgt tēmu',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Jūs tiešām vēlaties atslēgt šo tēmu?',
	'UNLOCK_TOPICS'					=> 'Atslēgt izvēlētās tēmas',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Jūs tiešām vēlaties atslēgt visas izvēlētās tēmas?',
	'USER_CANNOT_POST'				=> 'Jūs nevarat pievienot šeit ziņas.',
	'USER_CANNOT_REPORT'			=> 'Jūs nevarat nosūtīt šeit sūdzību.',
	'USER_FEEDBACK_ADDED'			=> 'Piezīme veiksmīgi pievienota.',
	'USER_WARNING_ADDED'			=> 'Lietotājs brīdināts.',

	'VIEW_DETAILS'			=> 'Informācijas',
	'VIEW_PM'				=> 'Skatīt privātās ziņas',
	'VIEW_POST'				=> 'Skatīt ziņas',

	'WARNED_USERS'			=> 'Brīdinātie lietotāji',
	'WARNED_USERS_EXPLAIN'	=> 'Šis ir to lietotaju saraksts, kuriem vēl nav pagājis izteikto brīdinājumu termiņš.',
	'WARNING_PM_BODY'		=> 'Šis ir brīdinājums no šī saita administrācijas vai moderatoriem.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Jums izteikts brīdinājums',
	'WARNING_POST_DEFAULT'	=> 'Šis brīdinājums attiecas uz jūsu ziņu: %s .',
	'NO_WARNINGS'	=> 'Nav brīdinājumu.',

	'YOU_SELECTED_TOPIC'	=> 'Jūs izvēlējāties tēmu numur %d: %s.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Warez',
			'SPAM'		=> 'Spams',
			'OFF_TOPIC'	=> 'Off-topic',
			'OTHER'		=> 'Cits',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'Ziņa satur saiti uz nelikumīgām vai pirātiskām programmām.',
			'SPAM'		=> 'Ziņas vienīgais mērķis ir reklamēt saitus, programmas vai citu produktus, preces, pakalpojumus u.t.t.',
			'OFF_TOPIC'	=> 'Ziņa neattiecas uz apspriežamo tēmu.',
			'OTHER'		=> 'Iemesls neattiecas ne uz vienu no iepriekš minētajiem - izmantojiet papildus informācijas lauciņu.',
		),
	),
));
