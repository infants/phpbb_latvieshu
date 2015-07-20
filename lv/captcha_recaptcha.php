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
    'RECAPTCHA_LANG'				=> 'lv',
    'RECAPTCHA_NOT_AVAILABLE'		=> 'Lai izmantotu reCaptcha ir nepieciešams izveidot lietotāja kontu saitā <a href="http://recaptcha.net">reCaptcha.net</a>.',
    'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
    'RECAPTCHA_INCORRECT'			=> 'Ievadīts nepareizs vizuālā apstiprinājuma kods.',

    'RECAPTCHA_PUBLIC'				=> 'reCaptchas publiskā atslēga (Public Key)',
    'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Jūsu reCaptchas publiskā atslēga. Atslēgas var saņemt saitā <a href="http://recaptcha.net">reCaptcha.net</a>.',
    'RECAPTCHA_PRIVATE'				=> 'reCaptchas privātā atslēga (Private Key)',
    'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Jūsu reCaptchas privātā atslēga. Atslēgas var saņemt saitā <a href="http://recaptcha.net">reCaptcha.net</a>.',

    'RECAPTCHA_EXPLAIN'				=> 'Ievadiet abus vārdus kurus redzat attēlā. Tas nepieciešams lai izvairītos no automātiskās reģistrēšanās.',
	'RECAPTCHA_SOCKET_ERROR'		=> 'Problēma pievienoties RECAPTCHA servisam: nevar piekļūt soketam. Mēģiniet pēc brīža vēlreiz.',
));
