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
    'CAPTCHA_QA'				=> 'J&amp;A CAPTCHA',
    'CONFIRM_QUESTION_EXPLAIN'	=> 'Šis ir drošības jautājums lai novērstu automātisko reģistrēšanos.',
    'CONFIRM_QUESTION_WRONG'	=> 'Jūs esat ievadījis nepareizu atbildi.',

    'QUESTION_ANSWERS'			=> 'Atbildes',
    'ANSWERS_EXPLAIN'			=> 'Lūdzu ievadiet pareizās atbildes uz jautājumiem, katru savā līnijā.',
    'CONFIRM_QUESTION'			=> 'Jautājums',

    'ANSWER'					=> 'Atbilde',
    'EDIT_QUESTION'				=> 'Labot jautājumu',
    'QUESTIONS'					=> 'Jautājumi',
    'QUESTIONS_EXPLAIN'			=> 'Reģistrējoties lietotājam tiks uzdots viens no šiem jautājumiem. Lai izmantotu šo moduli, ir jābūt uzstādītam vismaz vienam jautājumam valodā pēc noklusējuma. Šiem jautājumiem jābūt samērā vienkāršiem jūsu potenciālajai auditorijai, bet tai pat laikā, sarežģītiem priekš botiem, kuri var meklēt atbildes Google. Plašu un bieži maināmu jautājumu izmantošana dos vislabākos rezultātus. Ieslēdziet Pastiprināto pārbaudi, ja jūsu jautājums ir atkarīgs no pieturzīmēm vai reģistra jūtīgs.',
    'QUESTION_DELETED'			=> 'Jautājums dzēsts',
    'QUESTION_LANG'				=> 'Valoda',
    'QUESTION_LANG_EXPLAIN'		=> 'Valoda, kurā ir uzdots jautājums un kurā jāsniedz atbilde.',
    'QUESTION_STRICT'			=> 'Pastiprinātā pārbaude',
    'QUESTION_STRICT_EXPLAIN'	=> 'Ja ieslēgts, tad tiks ņemts verā burtu reģistrs (lielie, mazie burti) un atstarpes.',

    'QUESTION_TEXT'				=> 'Jautājums',
    'QUESTION_TEXT_EXPLAIN'		=> 'Jautājums, kurš tiks uzdots pie reģistrācijas.',

    'QA_ERROR_MSG'				=> 'Lūdzu aizpildiet visas ailes un ierakstiet vismaz vienu atbildi.',
    'QA_LAST_QUESTION'			=> 'Jūs nevarat dzēst jautājumus, kāmēr tiek izmantota J&amp;A kapča (šis modulis).',

));
