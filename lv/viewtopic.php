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
	'APPROVE'								=> 'Apstiprināt',
	'ATTACHMENT'						=> 'Pielikums',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Pielikuma funkcionalitāte atspējota.',

	'BOOKMARK_ADDED'		=> 'Tēma pievienota grāmatzīmei.',
	'BOOKMARK_ERR'			=> 'Neizdevās tēmu pievienota grāmatzīmei. Lūdzu, mēģiniet vēlreiz.',
	'BOOKMARK_REMOVED'		=> 'Iegrāmatotā tēma veiksmīgi noņemta.',
	'BOOKMARK_TOPIC'		=> 'Iegrāmatot tēmu',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Izņemt no grāmatzīmēm',
	'BUMPED_BY'				=> 'Last bumped by %1$s on %2$s.',
	//Last bumped by = Pēdjais saskāries vai labāk pēdējais sadūries
	//http://www.thefreedictionary.com/bumped
	'BUMP_TOPIC'			=> 'Bump topic',

	'CODE'					=> 'Kods',

	'DELETE_TOPIC'			=> 'Dzēst tēmu',
	'DELETED_INFORMATION'	=> 'Dzēsis %1$s - %2$s',
	'DISAPPROVE'					=> 'Neatļaut',
	'DOWNLOAD_NOTICE'		=> 'Jums nav nepieciešamās tiesības, lai redzētu šim rakstam pievienotos failus.',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> 'Pēdējais laboja %2$s - %3$s, laboja %1$d kopējais laiks.',
		2	=> 'Pēdējais laboja %2$s - %3$s, laboja %1$d kopējais laiks.',
	),
	'EMAIL_TOPIC'			=> 'E-pasta tēma',
	'ERROR_NO_ATTACHMENT'	=> 'Izvēlētais pielikums vairs neeksistē.',

	'FILE_NOT_FOUND_404'	=> 'Fails <strong>%s</strong> nav atrasts.',
	'FORK_TOPIC'			=> 'Kopēt tēmu',
	'FULL_EDITOR'			=> 'Pilnekrāna redaktors &amp; Priekšskatīt',

	'LINKAGE_FORBIDDEN'		=> 'Jums nav atļauju, lai skatītu, lejupielādētu vai pievienot saiti no/ uz šo vietni.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Jūs esat saņēmis paziņojumu par jaunu atbildi tēmā. Ielogojieties lai to apskatītu.',
	'LOGIN_VIEWTOPIC'		=> 'Jums ir nepieciešams ielogoties lai aspkatītu šo tēmu.',

	'MAKE_ANNOUNCE'				=> 'Mainīt uz “Paziņojums”',
	'MAKE_GLOBAL'				=> 'Mainīt uz “Svarīgs paziņojums”',
	'MAKE_NORMAL'				=> 'Mainīt uz “Parasta tēma”',
	'MAKE_STICKY'				=> 'Mainīt uz “Piestiprināts”',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> 'Var izvēlēties līdz <strong>%d</strong> atbilžu variantiem',
		2	=> 'Var izvēlēties līdz <strong>%d</strong> atbilžu variantiem',
	),
	'MISSING_INLINE_ATTACHMENT'	=> 'Pielikums <strong>%s</strong> vairs nav pieejams',
	'MOVE_TOPIC'				=> 'Pārvietot tēmu',

	'NO_ATTACHMENT_SELECTED'=> 'Nav izvēlēts neviens pielikums apskatei vai lejuplādei.',
	'NO_NEWER_TOPICS'		=> 'Šajā forumā nav jaunāku tēmu.',
	'NO_OLDER_TOPICS'		=> 'Šajā forumā nav vecāku tēmu.',
	'NO_UNREAD_POSTS'		=> 'Šajā tēmā nav jaunu neizlasītu ziņu.',
	'NO_VOTE_OPTION'		=> 'Balsojot nepieciešams izvēlēties atbildes variantu.',
	'NO_VOTES'				=> 'Nav balsots',

	'POLL_ENDED_AT'			=> 'Aptauja beidzās %s',
	'POLL_RUN_TILL'			=> 'Aptauja notiek līdz %s',
	'POLL_VOTED_OPTION'		=> 'Jūs balsojāt par ',
	'POST_DELETED_RESTORE'	=> 'This post has been deleted. It can be restored.',
	'PRINT_TOPIC'			=> 'Versija printēšanai',

	'QUICK_MOD'				=> 'Ātrā darbība',
	'QUICKREPLY'			=> 'Ātrā atbilde',
	'QUOTE'					=> 'Citāts',

	'REPLY_TO_TOPIC'		=> 'Atbildēt uz tēmu',
	'RESTORE'				=> 'Atjaunot',
	'RESTORE_TOPIC'			=> 'Atjaunot tēmu',
	'RETURN_POST'			=> '%sAtgriezties pie tēmas%s',

	'SUBMIT_VOTE'			=> 'Balsot',

	'TOPIC_TOOLS'			=> 'Tēmu rīki',
	'TOTAL_VOTES'			=> 'Kopā balsis',

	'UNLOCK_TOPIC'			=> 'Atvērt tēmu',

	'VIEW_INFO'				=> 'Ziņojuma detaļas',
	'VIEW_NEXT_TOPIC'		=> 'Nākošā tēma',
	'VIEW_PREVIOUS_TOPIC'	=> 'Iepriekšējā tēma',
	'VIEW_RESULTS'			=> 'Skatīt rezultātus',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '%d ziņas',
		2	=> '%d ziņas',
	),
	'VIEW_UNREAD_POST'		=> 'Pirmā neizlasītā ziņa',
	'VOTE_SUBMITTED'		=> 'Jūsu balss pieskaitīta.',
	'VOTE_CONVERTED'		=> 'Balsojuma mainīšana aptaujās nav atļauta.',

));
