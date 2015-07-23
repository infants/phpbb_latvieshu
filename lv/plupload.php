<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) 2010-2013 Moxiecode Systems AB
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
	'PLUPLOAD_ADD_FILES'		=> 'Pievienot failus',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'Pievienot failus augšupielādes rindai, un noklikšķiniet uz pogas Sākt.',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s jau eksistē rindā.',
	'PLUPLOAD_CLOSE'			=> 'Aizvērt',
	'PLUPLOAD_DRAG'				=> 'Velciet failus šeit.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'Dublikāta faila kļūda.',
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'Varat arī pievienot failus, velkot un iemetot tos ziņojuma logā.',
	'PLUPLOAD_ERR_INPUT'		=> 'Neizdevās atvērt augšupielādes plūsmu.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'Neizdevās pārvietot augšupielādēto failu.',
	'PLUPLOAD_ERR_OUTPUT'		=> 'Neizdevās atvērt izvades plūsmu.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'Pārāk liels fails:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'Failu skaita kļūda.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'Nederīgs faila paplašinājums:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'Izpildlaikam nepietika atmiņas.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'Augšupielādēt URL kļūdaina vai nepastāv.',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'Failu paplašinājums kļūda.',
	'PLUPLOAD_FILE'				=> 'Fails: %s',
	'PLUPLOAD_FILE_DETAILS'		=> 'Faila: %s, izmērs: %d, maksimālais faila izmērs: %d',
	'PLUPLOAD_FILENAME'			=> 'Faila nosaukums',
	'PLUPLOAD_FILES_QUEUED'		=> '%d faili rindā',
	'PLUPLOAD_GENERIC_ERROR'	=> 'Vispārīga kļūda.',
	'PLUPLOAD_HTTP_ERROR'		=> 'HTTP kļūda.',
	'PLUPLOAD_IMAGE_FORMAT'		=> 'Attēla formāts ir nepareizs, vai netiek atbalstīts.',
	'PLUPLOAD_INIT_ERROR'		=> 'Inicializācijas kļūda.',
	'PLUPLOAD_IO_ERROR'			=> 'Ievades/Izvades Kļūda.',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'NETIEK LIETOTS',
	'PLUPLOAD_SECURITY_ERROR'	=> 'Drošības kļūda.',
	'PLUPLOAD_SELECT_FILES'		=> 'Atlasīt failus',
	'PLUPLOAD_SIZE'				=> 'Izmērs',
	'PLUPLOAD_SIZE_ERROR'		=> 'Faila formāta kļūda.',
	'PLUPLOAD_STATUS'			=> 'Status',
	'PLUPLOAD_START_UPLOAD'		=> 'Sākt augšupielādi',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'Sākt rindas augšupielādi',
	'PLUPLOAD_STOP_UPLOAD'		=> 'Pārtraukt augšupielādi',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'Pārtraukt pašreizējo augšupielādi',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> 'Augšupielādēt %d/%d failus',
));
