<?php
// Šito nevajag tulkot!!!
// Šis te ir atlikums no vecā čata.
//
if (!defined('IN_PHPBB')) exit;
if (empty($lang) || !is_array($lang)) $lang = array();

$lang = array_merge($lang, array(
	'CHAT'					=> 'Chat',
	'COLOR'					=> 'Color',
	'UPDATING'				=> 'Updating',
	'SENDING'				=> 'Sending',
	'SERVER_ERROR'			=> 'Server error',
	'SOUND'					=> 'Sound',
	'SAY'					=> 'Say',
	'PRIVATE'				=> 'Private message',
	'LOGIN_EXPLAIN_CHAT'	=> 'You should login before entering chat.',
	'CHAT_BANNED'			=> 'Chat access is denied for you.',
	'CHAT_BLOCKED'			=> 'You are blocked for flooding and can not post. Blocking will last for %1$s sec.',
	'USER_JOINED'			=> 'Joined:',
	'USER_LEFT'				=> 'Left:',
	'SECONDS'				=> 'sec.',
	'NOW_IN_CHAT'			=> 'Online',
	'N_MESSAGES'			=> 'messages',
	'N_UPDATES'				=> 'updates',
	// Please do not remove the copyright!
	'POWERED_BY'			=> 'Powered by <a target="_blank" href="http://phpbbex.com/forum/viewtopic.php?t=41">phpBB Simple Chat</a> © 2013 <a target="_blank" href="http://veg.by/">Evgeny Vrublevsky</a>',
));
