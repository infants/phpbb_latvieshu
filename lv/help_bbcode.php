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
*/
if (!defined('IN_PHPBB'))
{
	exit;
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

$help = array(
	array(
		0 => '--',
		1 => 'Ievads'
	),
	array(
		0 => 'Kas ir BBCode?',
		1 => 'To, vai jūs varēsiet vai nevarēsiet izmantot BBCode jūsu ziņās, nosaka forumu administrācija. Bez tam, jūs varat atslēgt BBCode izmantošanu konkrētās ziņās pie to ievietošanas. Pats BBCode pēc stila atgādina HTML, kura tegi tiek ieslēgti kvadrātiekavās [ un ] nevis  &lt; un &gt; tas dod papildu iespējas datu ievadīšanā. Izmantojot dažus šablonus, jūs varēsiet pievienot BBCode savām ziņām, izmantojot vienkāršu interfeisu, kurš atrodas virs teksta ievades lauciņa. '
	),
	array(
		0 => '--',
		1 => 'Teksta Formatēšana'
	),
	array(
		0 => 'Kā izveidot treknrakstu, slīprakstu un pasvītrotu tekstu',
		1 => 'BBCode satur tegus, kuri ļauj izmainīt teksta izskatu, un to var izdarīt sekojoši: <ul><li>Lai izceltu tekstu treknrakstā, ieslēdziet to <strong>[b][/b]</strong>, piemēram:<br /><br /><strong>[b]</strong>Sveicināti<strong>[/b]</strong><br /><br />kļūs <strong>Sveicināti</strong></li><li>Lai pasvītrotu tekstu <strong>[u][/u]</strong>, piemēram:<br /><br /><strong>[u]</strong>Labrīt<strong>[/u]</strong><br /><br />kļūs <span style="text-decoration: underline">Labrīt</span></li><li>Slīprakstu var izveidot ar tegiem <strong>[i][/i]</strong>, piemēram:<br /><br />Tas ir <strong>[i]</strong>Lieliski!<strong>[/i]</strong><br /><br />dos Tas ir <i>Lieliski!</i></li></ul>'
	),
	array(
		0 => 'Kā mainīt teksta krāsu vai izmēru',
		1 => 'Lai nomainītu šrifta krāsu vai izmēru  var tikt izmantoti sekojošie tegi (galējais izskats būs atkarīgs no lietotāja sistēmas un interneta pārlūka): <ul><li>Teksta krāsu var nomanīt, ieslēdzot to <strong>[color=][/color]</strong>. Jūs varat norādīt zināmu krāsas nosaukumu (red, blue, yellow u.t.t.), vai norādīt krāsas kodu, piemēram #FFFFFF, #000000. Tādā veidā, lai piešķirtu tekstam sarkano krāsu, jūs varat izmantot:<br /><br /><strong>[color=red]</strong>Hello!<strong>[/color]</strong><br /><br />vai<br /><br /><strong>[color=#FF0000]</strong>Hello!<strong>[/color]</strong><br /><br />Abos gadījumos rezultāts būs <span style="color:red">Hello!</span></li><li>Burtu izmēra maiņa notiek analoģiski izmantojot <strong>[size=][/size]</strong>. Šis tegs ir atkarīgs no izmantotajiem šabloniem, rekomendējamais formāts - skaitlis, kurš norāda teksta izmēru procentos, no 20% (ļoti mazs) līdz 200% (ļoti liels) no izmēra pēc noklusējuma. Piemēram:<br /><br /><strong>[size=30]</strong>MAZS<strong>[/size]</strong><br /><br />rezultātā būs <span style="font-size:30%;">MAZS</span><br /><br />kamēr:<br /><br /><strong>[size=200]</strong>LIELS!<strong>[/size]</strong><br /><br />būs <span style="font-size:200%;">LIELS!</span></li></ul>'
	),
	array(
		0 => 'Vai ir iespējams kombinēt tegus?',
		1 => 'Jā, protams. PiemērAM, lai pievērstu kāda uzmanību jūs varat uzrakstīt:<br /><br /><strong>[size=200][color=red][b]</strong>PASKATATIES UZ MANI!<strong>[/b][/color][/size]</strong><br /><br />rezultātā sanāks <span style="color:red;font-size:200%;"><strong>PASKATATIES UZ MANI!</strong></span><br /><br />Mēs neiesakām formatēt garus tekstus tādā veidā! Ņemiet vērā, ka jums, kā ziņas autoram ir jāseko lai tegi būtu pareizi izvietoti. Šis BBcode, piemēram, ir nepareizs:<br /><br /><strong>[b][u]</strong>Šādi ir nepareizi<strong>[/b][/u]</strong>'
	),
	array(
		0 => '--',
		1 => 'Citēšana un formatēta teksta izvade'
	),
	array(
		0 => 'Citēšana atbildēs',
		1 => 'Ir divi veidi kā citēt tekstu - ar atsauci un bez.<ul><li>Kad jūs izmantojat pogu Citēt lai atbildētu uz ziņu, tad teksts tiek iekļauts starp tegiem  <strong>[quote=&quot;&quot;][/quote]</strong>. Tas ļauj citēt jums ar atsauci uz citējamā teksta autoru, vai arī uz ko citu, ko jūs ierakstīsiet pēdiņās. Piemēram, lai citētu teksta fragmentu, kuru uzrakstījis Mr.Blobby, jums jāieraksta:<br /><br /><strong>[quote=&quot;Mr. Blobby&quot;]</strong>Šeit Mr. Blobby rakstītais teksts<strong>[/quote]</strong><br /><br />Rezultātā, pirms teksta būs redzams &quot;Mr. Blobby rakstīja:&quot;. Atceraties, ka citāta autora vārdam <strong>jābūt</strong> iekļautam pēdiņās &quot;&quot; obligāti.</li><li>Otrā metode ļauj jums vienkārši citēt bez atsauces uz autoru. Lai to izdarītu, nepieciešams tekstu iekļaut tegos <strong>[quote][/quote]</strong>. Kad jūs skatīsieties ziņu, citētais teksts tiks parādīts citātu blokā.</li></ul>'
	),
	array(
		0 => 'Koda vai formatēta teksta izvade',
		1 => 'Ja jums ir nepieciešams iekļaut ziņa koda fragmentu, vai kaut ko kas būtu fiksēta platuma (Courier), jums tas jāiekļauj tegos <strong>[code][/code]</strong>, piemēram<br /><br /><strong>[code]</strong>echo &quot;This is some code&quot;;<strong>[/code]</strong><br /><br />Formatēts teksts, kurš atrodas starp tegiem <strong>[code][/code]</strong> saglabās visu formatējumu. Lai saglabātu PHP sintaksi, tas var tikt iekļauts tagos <strong>[code=php][/code]</strong> un tas tiek ieteikts ērtākai PHP koda skatīšanai.'
	),
	array(
		0 => '--',
		1 => 'Sarakstu izveidošana'
	),
	array(
		0 => 'Marķētu sarakstu izveide',
		1 => 'BBcode atbalsta divu veidu sarakstu izveidošanu: marķētu un numurētu. Tie ir praktiski identiski saviem HTML ekvivalentiem. Marķētajos sarakstos visi elementi tiek izvadīti secībā, un katrs tiek atzīmēts ar simbolu-marķeri. Lai izveidotu marķēu sarakstu izmantojiet <strong>[list][/list]</strong> un nosakiet katru elementu ar simbolu <strong>[*]</strong>. Piemēram, lai norādītu savas mīļākās krāsas, izmantojiet:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Sarkans<br /><strong>[*]</strong>Zils<br /><strong>[*]</strong>Dzeltens<br /><strong>[/list]</strong><br /><br />Tas izveidos šādu sarakstu:<ul><li>Sarkans</li><li>Zils</li><li>Dzeltens</li></ul>'
	),
	array(
		0 => 'Numurēta saraksta izveide',
		1 => 'Numurēta saraksta tips, ļauj noteikt, kas tiks likts pirms katra elementa. Lai izveidotu sanumurētu sarakstu, izmantojiet <strong>[list=1][/list]</strong> vai <strong>[list=a][/list]</strong> lai izveidotu alfabēta sarakstu. Tāpat kā ar marķētajiem sarakstiem, elementi tiek noteikti ar <strong>[*]</strong> palīdzību. Piemēram:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Doties uz veikalu<br /><strong>[*]</strong>Nopirkt jaunu datoru<br /><strong>[*]</strong>Nolamāt datoru, kad notikusi kļūda<br /><strong>[/list]</strong><br /><br />dos sekojošo sarakstu:<ol style="list-style-type: decimal;"><li>Doties uz veikalu</li><li>Nopirkt jaunu datoru</li><li>Nolamāt datoru, kad notikusi kļūda</li></ol>Lai izveidotu alfabēta sarakstu izmantojiet:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Pirmais iespējamais variants<br /><strong>[*]</strong>Otrais iespējamais variants<br /><strong>[*]</strong>Trešais iespējamais variants<br /><strong>[/list]</strong><br /><br />kas dos:<ol style="list-style-type: lower-alpha"><li>Pirmais iespējamais variants</li><li>Otrais iespējamais variants</li><li>Trešais iespējamais variants</li></ol>'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Linku izveidošana'
	),
	array(
		0 => 'Linki uz citiem saitiem',
		1 => 'BBCode atbalsata vairākus linku izveidošanas veidus.<ul><li>Pirmais no tiem izmanto tegu <strong>[url=][/url]</strong>, kur pēc = ir jānorāda vajadzīgā URL. Piemēram, lai norādītu linku uz phpBB.com, jums jāievada:<br /><br /><strong>[url=http://www.phpbb.com/]</strong>Apmeklējiet phpBB!<strong>[/url]</strong><br /><br />Tas izveidos sekojošo linku, <a href="http://www.phpbb.com/">Apmeklējiet phpBB!</a> Ņemiet vērā, ka links atvērsies tajā pašā vai jaunā logā, atkarībā no lietotāja interneta pārlūka uzstādījumiem.</li><li>Ja vēlaties, lai teksta vietā būtu izvietota pats URL, jūs varat veikt sekojošo:<br /><br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br /><br />Tas dos sekojošo linku, <a href="http://www.phpbb.com/">http://www.phpbb.com/</a></li><li>Bez tā, pphpBB atbalsta tā teiksim <i>Automātisko Linko</i>, iespēju, kas noved pie tā, ka visas sintaksiski pareizās URL automātiski tiek pārveidotas linkos bez nepieciešamības iekļaut tegos, un pat bez prefiksa http://. Piemēram, ievadot www.phpbb.com jūsu ziņā, tas tiks automātiski attainots kā <a href="http://www.phpbb.com/">www.phpbb.com</a> apskatot ziņu.</li><li>Tas pats attiecās arī uz e-pasta adresēm, jūs varat iekļaut adresi tagos:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />kas dos <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> vai vienkārši ievadīt e-pasta adresi un tā tiks automātiski pārveidota.</li></ul>Tāpat kā ar visiem pārējiem BBCode tagiem, jūs varat iekļaut URL citos tagos, piemēram <strong>[img][/img]</strong> (sk. nākamo punktu), <strong>[b][/b]</strong>, u.t.t. Tāpat kā ar formatēšanas tagiem, tagu pareizā kārtība ir atkarīga no jums, piemēram:<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/url][/img]</strong><br /><br />ir <span style="text-decoration: underline">nepareizi</span> un tas var novest pie ziņas dzēšanas, tā kā esat akurāti.'
	),
	array(
		0 => '--',
		1 => 'Attēlu atainošana ziņojumos'
	),
	array(
		0 => 'Attēlu ievietošana ziņojumos',
		1 => 'BBCode iekļauj sevī tegus kas ļauj pievienot ziņojumiem attēlus. Pie tam ir jāiegaumē divas būtiskas lietas: pirmkārt, bieži lietotājiem nepatīk liels attēlu daudzums ziņās, un otrkārt, jūsu attēlam jau jābut izvietotam internetā (tas ir, tas nevar atrasties tikai uz jūsu datora, ja jūs protams neizmantojiet savu datoru kā web serveri!). Šobrīd nav iespējams glabāt attēlus lokāli uz phpBB (gaidāms, ka šī iespēja būs pieejama nākamajā phpBB versijā). Lai ievietotu attēlu, jums jāiekļauj attēla URL <strong>[img][/img]</strong> tegos. Piemēram:<br /><br /><strong>[img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img]</strong><br /><br />Kā norādīts iepriekējā punktā, jūs varat iekļaut attēlus tegos <strong>[url][/url]</strong>, tas būtu<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img][/url]</strong><br /><br />dos rezultātā:<br /><br /><a href="http://www.google.com/"><img src="http://www.google.com/intl/en_ALL/images/logo.gif" alt="" /></a>'
	),
	array(
		0 => 'Pielikumu pievienošana zinojumos',
		1 => 'Tagad pievienotie faili var tikt izvietoti jebkurā ziņas vietā izmantojot jaunos BBCode tegus <strong>[attachment=][/attachment]</strong>, ja konferences administrācija ir atļāvusi pielikumu pievienošanu, un ja jums ir nepieciešamās piekļuves tiesības. Ziņas pievienošanas lapā atrodas izkrītošais saraksts (taustiņš) lai ievietotu pielikumus ziņojumos.'
	),
	array(
		0 => '--',
		1 => 'Pārējais'
	),
	array(
		0 => 'Vai es varu pievienot savus tegus?',
		1 => 'Ja jūs esat šā foruma administrators un jums ir pietiekamas privilēģijas, jūs varat pievienot jaunus BBCode administrācijas sadaļā.'
	)
);