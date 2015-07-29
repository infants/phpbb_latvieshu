<?php
/**
*
* help_faq [Latvian]
*
* @package language
* @version $Id: help_faq.php 8479 2008-03-29 00:22:48Z naderman $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
		1 => 'Ielogošanās / Reģistrēšanās'
	),
	array(
		0 => 'Kāpēc es nevaru ielogoties?',
		1 => 'Iespējami vairāki iemesli. Pirmkārt, pārliecinaties vai Jūs pareizi ievadiet lietotājvārdu un paroli. Ja lietotājvārds un parole ir pareizi, tad iespējams, ja Jūsu konts ir bloķēts. Neskaidrību gadījumā, sazinieties ar foruma administrāciju.'
	),
	array(
		0 => 'Kāpēc man vajag reģistrēties?',
		1 => 'Jūs to varat nedarīt. Tomēr reģistrētiem lietotājiem ir vairāk priekšrocību foruma izmantošanas ziņā. Reģistrēšanās aizņem ļoti maz laika, tāpēc tomēr mēs ieteiktu Jums to izdarīt..'
	),
	array(
		0 => 'Kāpēc man periodiski nākas atkārtoti ievadīt savu lietotājvārdu un paroli?',
		1 => 'Ja neesat atzīmējuši <em>Atcerēties mani</em> tad pēc noteikta laika Jus tiekat atslēgts no sava konta. Tas tiek darīts ar nolūku, lai neviens cits nevarētu izmantotu Jūsu profilu forumā. Ja vēlaties, lai Jūsu visu laiku būtu ielogojies, tad ieliciet ķeksīti pie Atcerēties mani. Tomēr neiesakām izmantot šo funkciju publiski pieejamiem datoriem, vai datoriem kuri atrodas publiskās vietās (internet kafejnīcās, bibliotēkas u.c.).'
	),
	array(
		0 => 'Ko darīt, ja nevēlos lai mans vārds būtu redzams aktīvo lietotāju sarakstā?',
		1 => 'Lietotāja kontrol panelī, Jūsu var atrast uzstādījumus kas ļauj slēpt Jūsu atrašanos forumā. Jā izvēlēsieties ieslēgt šo iespēju, tad Jūsu atrašanos forumā, būs redzama tikai administrācijai un moderatoriem. Visiem pārējiem lietotājiem Jūs būsiet slēpts lietotājs.'
	),
	array(
		0 => 'Esmu aizmirsis paroli!',
		1 => 'Tikai mieru! Lai gan paroli nevar atjaunot, tomēr to var viegli nomainīt uz citu. Dodaties uz Ielogošanās sadaļu un spiediet <em>Aizmirsāt paroli?</em>. Tālāk sekojiet instrukcijām un drīzumā varēsiet no jauna izmantot forumu.'
	),
	array(
		0 => 'Esmu tikko reģistrējies, bet nevaru ielogoties!',
		1 => 'No sākuma pārbaudiet savu lietotājvārdu un paroli. Ja tie ir pareizi, tad ir iespējami divi varianti. Ja ir ieslēgta opcija COPPA un reģistrējoties, Jūs norādījāt, ka esat jaunāki par 13 gadiem, tad sekojiet norādītajām instrukcijām. Iespējams, ka ir aktivizēta reģistrācijas apstiprināšanas funkcija. Ja esat saņēmuši vēstuli uz norādīto e-pasta adresi, tad lūgums sekot norādēm. Ja e-pastu neesat saņēmuši, tad iespējams esat norādījuši nepareizu adresi, vai arī šī adrese iz bloķēta ar spam filtru. Ja esat pārliecināti, ka visu esat izdarījuši pareizi, tad lūgums sazināties ar administratoru.'
	),
	array(
		0 => 'Esmu sen reģistrējies, bet nevaru vairs ielogoties!',
		1 => 'Pamēģiniet atrast e-pastu, kurš tika saņemts reģistrējoties, pārbaudiet lietotājvārdu un paroli un mēģiniet ileogoties vēlreiz. Iespējams, administrators ir deaktivējis vai dzēsis Jūsu kontu kādu iemeslu dēļ. Iespējams konts ticis dzēsts, ja neesat ilgu laiku apmeklējuši vai piedalījušies forumā, lai samazinātu datu bāzes izmērus. Ja tas ir noticis, mēģiniet izveidot savu kontu no jauna un aktīvāk piedalīties forumā dzīvē.'
	),
	array(
		0 => 'Kas ir COPPA?',
		1 => 'COPPA (Child Online Privacy and Protection Act), jeb 1998. gada Akts par bērnu tiesību aizsardzību internetā — tas ir ASV likums, kurš pieprasa ka saitiem, kuri var vākt informāciju par nepilngadīgajiem jaunākiem par 13 gadiem, ir jābūt uz to vecāku parakstītai atļaujai.',
	),
	array(
		0 => 'Kāpēc es nevaru piereģistrēties?',
		1 => 'Iespējams ka ir bloķēta Jūsu IP-adrese vai vārds, ar kuru vēlaties reģistrēties, nav atļauts. Iespējams ir atslēgta jaunu lietotāju reģistrēšanās. Griezieties pēc palīdzibas pie foruma administrātora.',
	),
	array(
		0 => 'Ko dara funkcija "Dzēst foruma sīkdatnes"?',
		1 => 'Šī funkcija dzēš visus cookies, kuri palīdz Jums būt online forumā, un kuri veicas arī citas funkcijas. Ja Jums ir radušas grūtības ar ielogošanos vai iziešanu no foruma vai kādas citas kļūdas, iespējams, ka sīkdatņu dzēšana var Jums palīdzēt.',
	),
	array(
		0 => '--',
		1 => 'Lietotāja uzstādījumi'
	),
	array(
		0 => 'Kā es varu mainīt savus uzstādījumus?',
		1 => 'Ja jūs esat reģistrējies, visi Jūsu uzstādījumi glabās foruma datu bāzē. Lai tos mainītu, Jums ir jādodas uz Lietotāja paneli; links uz to parasti atrodas foruma augšdaļā. Tur Jūs varat nomainīt visus lietotāja uzstādījumus.'
	),
	array(
		0 => 'Forumā ir nepareizs laiks!',
		1 => 'Iespējams, ka tiek rādīts citas laika joslas laiks. Tad, Jūs varato to nomainīt Lietotāja uzstādījumos, pret laika zonu kurā atrodaties Jūs: Rīga, ... u.t.t. Izvēlēties un nomanīt laika zonu var tikai reģistrētie lietotāji.'
	),
	array(
		0 => 'Nomainīju laika joslu, bet laiks vienalga tiek rādīts nepariezi!',
		1 => 'Ja esat pārliecināts, ka esat pareizi uzstādījuši laika joslu un pāreju uz ziemas/vasaras laiku, bet laiks vienalga tiek rādīts nepareizi, tātad, ir uzstādīts neparizs laiks uz servera. Lūgums paziņot par to administratoram lai varēto šo kļūmi novērst.'
	),
	array(
		0 => 'Sarakstā nav manas valodas!',
		1 => 'Administrātors nav uzstādījis forumā Jūsu valodas atbalstu. Jus varat mēģināt uzzināt no administrātora, vai nav iespējams uzstādīt forumā Jūsu valodas atbalstu.'
	),
	array(
		0 => 'Kā es varu pievienot attēlu pie sava vārda?',
		1 => 'Kopā ar vārdu var tikt atspoguļoti divi attēli. Viens no viņiem var attiekties uz rangu, parasti tās ir zvaigznītes, kvadrātiņi vai punktiņi, kuri norāda uz to, cik esat pievienojuši ziņas forumā vai kāds ir Jūsu statuss. Otra, parasti lielāka bilde, ir «avatars» un parasti ir unikāla katram lietotājam. Atkarīgs no administratora, vai ir ieslēgta avataru pievienošans iespēja, un kādi avatari ir atļauti. Ja Jūs nevarat izmantot avatarus, griežaties pie administratora lai noskaidrotu iemeslus.'
	),
	array(
		0 => 'Kas ir rangs un kā es varu to nomainīt?',
		1 => 'Rangs, tiek attainots zem Jūsu lietotājvārda, un norāda uz pievienoto zinu skaitu, vai identificē atsevišķus lietotājus, piemēram: moderatori un administrātori. Parasti lietotājs nevar pats uzstādīt rangu, to nosaka administrātors. Lūgums, nepiesārņot forumu ar liekām ziņām, tikai tāpēc lai paaugstinātu savu Rangu.'
	),
	array(
		0 => 'Kad es spiežu uz linku (pogu) e-mail, man liek ielogoties forumā!',
		1 => 'Tikai reģistrēties lietotāji var nosūtīt e-pastu izmantojot forumu, un tikai tajos gadījumos, ja administrātors ir uzstādījis šādu atļauju. Tas darīts ar nolūku, lai novērstu ļaunprātīgu lietotāju e-pastu adrešu izmantošanu.'
	),
	array(
		0 => '--',
		1 => 'Tēmu un atbilžu/ziņu izveidošana'
	),
	array(
		0 => 'Kā izveidot tēmu forumā?',
		1 => 'Lai izveidotu jaunu tēmu forumā nospiediet uz atbilstošo pogu foruma vai tēma logā. Iespējams, Jums vajadzēs reģistrēties, lai varētu nosūtīt ziņojumu. Jūsu iespējas ir uzskaitītas foruma vai tēmas lapas lejā. Piemēram: «Jūs varat izveidot jaunu tēmu», «Jūs varat balsot aptaujās» u.t.t.'
	),
	array(
		0 => 'Kā es varu labot vai dzēst savus ziņojumus?',
		1 => 'Ja Jūs neesat moderators vai administrators, tad Jūs varat labot un dzest tikai savus ziņojumus. Jūs varat pāriet pie labošanas, uzspiežot labošanas pogu atbilstošajā ziņā. Dažreiz tas ir iespējams, tikai noteiktu laiku pēc ziņojuma izveidošanas. Ja kāds jau ir atbildējis uz ziņojumu, tad zem tā parādīsies neliels uzraksts, labojumu skaitu un pēdējā labojuma laiku un datumu. Šis uzraksts neparādās, ja ziņu ir labojis administrators vai moderators, kuri var izvelēties, vai pievienot piezīmi par labošanu vai nē. Ņemiet vērā, ka lietotājs nevar dzēst savu ziņu, ja kāds jau ir uz to atbildējis.'
	),
	array(
		0 => 'Kā man pievienotu parakstu savam ziņojumam?',
		1 => 'Lai pievienotu parakstu saviem ziņojumiem, Jums tas ir jāizveido Lietotāja panelī. Pēc tam Jūs varat atzīmēt punktu Pievienot parakstu ziņojuma nosūtīšanas logā, paraksts tiktu pievienots. Tāpat Jūs varat uzstādīt pēc noklusējuma, lai paraksts tiktu pievienots automātiski visiem Jūsu ziņojumiem, veicot atbilstošu izvēli sadaļā «Ziņojumu pievienošana» sadaļā «Personīgie uzstādījumi» Lietotāju panelī. Neskatoties uz to, Jūs varēsiet atcelt paraksta pievienošanu dažādos ziņojumos, noņemot atzīmi Pievienot parakstu ziņas pievienošans logā.'
	),
	array(
		0 => 'Kā izveidot aptauju?',
		1 => 'Izveidojot vai labojot pirmo ziņojumu, pārejiet uz Aptaujas izveidošana zem ziņojuma pievinošanas loga. Ja Jūs nevar atrast šādu iespēju, tad visticamāk administrators ir liedzis iespēju izveidot aptaujas. Izveidojiet aptaujas tēmu un kā minimums divus atbilžu variantus atbilstošās ailēs. Pārliecinaties, ka katrs variants atrodas atsevišķā teksta lauciņā. Tāpat Jūs varat izvēlēties atbilžu variantu skaitu, cik var izvelēties lietotājs balsojot, ar opcijas «Atbilžu varianti» palīdzību, un cik dienas ilgs aptauja (0 nozīmē, ka aptaujai nav beigu termiņa) un iespēju lietotājiem mainīt vai nemainīt savu balsojumu.'
	),
	array(
		0 => 'Kāpēc es nevaru pievienot vairāk atbilžu variantus?',
		1 => 'Maksimālo atbilžu variantu skaitu nosaka administrators. Ja Jums ir nepieciešams pievienot vairāk atbilžu variantus, nekā tik cik ir atļauts, sazinieties ar foruma administratoru.'
	),
	array(
		0 => 'Kā es varu labot vai dzēst aptauju?',
		1 => 'Tāpat kā ziņojumus, aptaujas var labot tikai to izveidotājs, moderators vai administrators. Lai labotu aptauju pārejiet pie pirmās ziņas labošanas tēmā; aptauja vienmēr ir saistīta ar to. Ja neviens nav paspējis nobalsot, tad Jūs varat dzēst aptauju vai labot jebkuru no atbilžu variantiem. Savukārt, ja kāds jau ir paspējis nobalsot, tad tikai administrators vai moderators var labot vai dzēst aptauju. Tas izdarīts ar nolūku, lai aptaujas gaitā nebūtu iespējams mainīt atbildes.'
	),
	array(
		0 => 'Kāpēc man nav pieejami daži forumi?',
		1 => 'Daži forumi var būt pieejami tikai noteiktiem lietotājiem vai grupām. Lai apmeklētu šādus forumus, izveidotu tur tēmas un atstātu ziņas, Jums varētu būt nepieciešama atļauja. Sazinieties ar moderatoru vai administratoru lai šādu atļauju iegūtu.'
	),
	array(
		0 => 'Kāpēc es nevaru pievienot pielikumus?',
		1 => 'Pielikumu pievienošanas tiesības var būt pieejams foruma ietvaros noteiktiem lietotājiem vai grupām. Administrators var liegt pievienot pielikumus noteiktos forumos. Tāpat iespējams, ka pievienot pielikumus ir atļauts noteiktai grupai. Ja Jūs nezināt kāpēc nevarat pievienot pielikumus, sazinaties ar administratoru.'
	),
	array(
		0 => 'Kāpēc es saņēmu brīdinājumu?',
		1 => 'Ja Jūs esat saņēmusi brīdinājumi, tad iespējams Jūs esat pārkāpis kādu no noteikumiem. Ja jūs nezināt brīdinājuma iemeslu, sazinieties ar administratoru.'
	),
	array(
		0 => 'Kā es varu paziņot par ziņojumu moderatoram?',
		1 => 'Pie katra ziņojuma ir poga, kura ir paredzēta lai nosūtītu sūdzību moderatoram par ziņojumu, ja foruma administrators ir aktivizējis šādu iespēju. Nospiežot šo pogu, Jums būs jāveic pāris darbības lai nosūtītu sūdzību.'
	),
	array(
		0 => 'Ko nozīmē poga «Saglabāt» izveidojot ziņojumu?',
		1 => 'Šī poga ļauj Jums saglabāt ziņojumu lai pabeigtu un nosūtītu to vēlāk. Lai ielādētu un pabeigtu ziņojumu pārējiet uz "Melnraksti" lietotāju panelī.'
	),
	array(
		0 => 'Kāpēc maniem ziņojumiem vajag apstiprinājumu?',
		1 => 'Administrators var izlemt, ka pirms pievienot ziņojums, tos ir nepieciešams pārbaudīt. Iespējams, ka administrators ir iekļāvis Jūs lietotāju grupā, kuru zinojumi ir jāpārbauda pirms publicēšanas. Lai saņemtu sīkāku informāciju, sazinieties ar administratoru.'
	),
	array(
		0 => 'Kā var pacelt manu tēmu?',
		1 => 'Uzspiežot uz linku "Pacelt tēmu" apskatot tēmu, Jūs varat "pacelt" to uz augšējo rindu tēmu sarakstā. Ja tas nenotiek, tas tas nozimē, ka iespēja pacelt tēmu iespējams ir tikusi atslēgta, vai arī ir laiks, kad varēs to izdarīt, vēl nav pienācis. Tāpat pacelt tēmu var tajā atbildot, vienīgi pārliecinaties, ka tādā veidā Jūs nepārkāpjat foruma noteikumus.'
	),
	array(
		0 => '--',
		1 => 'Ziņojumu formatēšana un tēmu veidi'
	),
	array(
		0 => 'Kas ir BBCode?',
		1 => 'BBCode ir īpaša HTML realizācija, kura piedāvā ziņojumu atsevišķu daļu formatēšanu. BBCode izmantošanas nosacījumus nosaka administrators, un ir iespejams, ka BBCode var tikt būt atslēgts atsevišķos ziņojumos. BBCode ir ļoti līdzīgs HTML, taču tā tegi tiek ieslēgti kvadrātiekavās [ un ], un nevis < un >. Lai saņemtu sīkāku BBCode aprakstu, izmantojiet linku blakus ziņas pievienošanas logam.'
	),
	array(
		0 => 'Vai es varu izmantot HTML?',
		1 => 'Nē. Šajā forumā nav iespējama HTML nosūtīšana un apstrāde ziņojumos. Liela daļa no HTML formatēšanas iespējām, var tik izmantota lietojot BBcode.'
	),
	array(
		0 => 'Kas ir smaidiņi?',
		1 => 'Smaidiņi, vai  emocijikonas — mazas bildītes, kuras var tikt izmantotas emociju attainošanai, piemēram :) nozīmē prieku, bet :( nozīmē skumjas. Pilnu smaidiņu sarakstu var atrast ziņojumu pievienošanas logā. Tiekai nepārcenšaties ar to izmantošanu: Jūs viegli varat padarīt zinojumu nelasāmu, un moderātors var izmainīt Jūsu zinojumu, vai dzēst to pilnībā. Foruma administrators var ierobežot smaidiņu skaitu ziņojumos.'
	),
	array(
		0 => 'Vai es varu pievienot attēlus ziņojumos?',
		1 => 'Jā, Jūs varat pievienot attēlus Jūsu ziņojumos. Ja administrators ir atļāvis pielikumu pievienošanu, Jūs varat augšuplādēt attēlus. Ja nav, Jums jānorāda links uz attēlu, kurš ir saglabāts uz kāda publiski pieejama web-servera. Linka paraugs: http://www.example.com/my-picture.gif. Jūs nevarat norādīt linku uz attēlu, kurš atrodas uz Jūsu datora, (ja vien Jūsu dators nav publiski pieejams serveris), ne arī uz attēliem, kuru apskatei nepieciešama autentifikācija, kā, piemēram, e-pastam hotmail vai yahoo, ar parolem aizsargātiem saitiem u.t.t. Lai attainotu attēlus izmantojiet attēla linkam BBCode tagus [img].'
	),
	array(
		0 => 'Ko nozīmē Svarīgs paziņojums?',
		1 => 'Šie paziņojumi satur svarīgu informāciju, un Jums pēc iespējas tos vajadzētu izlasīt. Tie ir redzami forumu augšējā daļā un jūsu personīgajā sadaļā. Tiesības piešķirt svarīgu paziņojumu atļauju ir administratoram.'
	),
	array(
		0 => 'Kas ir Paziņojums?',
		1 => 'Šie paziņojumi satur svarīgu informāciju, un Jums pēc iespējas tos vajadzētu izlasīt. Tie atrodas forumu augšdaļā, forumos kuros tie tika izveidoti. Tāpat kā ar svarīgu paziņojumu tiesībām, tiesības piešķirt paziņojumu atļauju ir administratoram.'
	),
	array(
		0 => 'Kas ir Piestiprinātās tēmas?',
		1 => 'Piestiprinātās tēmas atrodas zemāk par visiem paziņojumiem forumos, kurās tās tika izveidotas un atrodas tikai pirmajās lapās. Tās bieži satur svarīgu informāciju, tāpēc pēc iespējas, šādās tēmas vajadzētu izlasīt. Tāpat kā ar svarīgu paziņojumu tiesībām, tiesības pieškirt ,piestiprināt tēmas atļauju, ir administratoram.'
	),
	array(
		0 => 'Kas ir Slēgtās tēmas?',
		1 => 'Tās ir tēmas, kurās lietotāji vairāk nevar pievienot atbildes, un visas esošās aptaujas šajā tēmā, tiek noslēgtas. Tēmas var tikt slēgtas dažādu iemeslu dēļ, un to veic moderators vai administrators. Pastāv iespēja, ka Jus pats varat slēgt savad tēmas, ja administratos ir atļāvis šādu iespēju.'
	),
	array(
		0 => 'Kas ir tēmu ikonas?',
		1 => 'Tēmu ikonas — tās ir autora izvēlētas tēmas bildītes, kuras ir saistītas ar tēmu un atspoguļo to saturu. Iespēju izmantot tēmu ikonas nosaka administrators.'
	),
	array(
		0 => '--',
		1 => 'Lietotāju līmeņi un grupas'
	),
	array(
		0 => 'Kas ir administratori?',
		1 => 'Administratori — tie ir lietotāji, kuriem ir visaugstākās tiesības forumā. Tie var vadīt visu foruma darbību, ieskaitot piekļūšanas tiesības, lietotāju atslēgšanu, lietotāju grupu izveidošanu, moderatoru norīkošanu u.t.t., atkarībā no tiesībām, kuras tiem piešķīris foruma izveidotājs. Atkarībā no konferences izveidotāja piešķirtajām tiesībām, tiem tāpat var būt piešķirtas visas moderatoru iespējas visos forumos.'
	),
	array(
		0 => 'Kas ir moderatori?',
		1 => 'Moderatori — tie ir lietotāji(vai lietotāju grupa), kuri seko līdzi forumam katru dienu. Tiem ir tiesības labot vai dzēst ziņas, slēgt, atvērt, pārvietot, dzēst un apvienot tēmas forumā, par kuru tie atbild. Galvenie modoretoru uzdevumi — nepieļaut neatbilstoša satura ziņas apspriežamajās tēmās (offtops), apvainojumus.'
	),
	array(
		0 => 'Kas ir lietotāju grupas?',
		1 => 'Lietotāju grupas sadala kopienu pa struktūrdaļām, kuras pārvalda konferences administrators. Katrs lietotājs var sastāvēt vairākās grupās, un katrai grupai var būt noteiktas individuālas piekļuves tiesības. Tas atvieglo administratoram noteikt piekļuves tiesības lielai cilveku grupai vienlaicīgi, piemēram, mainot moderatoru tiesības vai piešķirot lietotājiem piekļuves tiesības forumos.'
	),
	array(
		0 => 'Kur atrodas grupas un kā es varu tajās iestāties?',
		1 => 'Jūs varat atrast visu informāciju par esošajām grupām, sadaļā "Grupas" Lietotāju panelī. Ja Jūs vēlaties iestāties kādā no tām, nospiediet attiecīgo pogu. Taču, ne visas grupas ir brīvi pieejams. Dažās grupas ir jāsaņem apstirpinājums lai tajās iestātos, var būt slēgtas vai pat slēptas. Ja grupa ir pieejama, Jūs varat kļūt par tās biedru uzklikšķinot uz atbilstošās pogas. Ja ir nepieciešama apstiprināšana, Jūs varat nosūtīt iestāšanās pieprasījumu, nospiežot uz attiecīgās pogas. Grupas līderim būs šis pieprasījums jāapstiprina un viņs var pajautāt, kādēļ Jūs vēlaties iestāties šajā grupā. Lūgums, neatraucējiet grupas līderi, ja viņš Jūsu pieprasījumu ir noraidījis - uz to var būtu savi iemesli.'
	),
	array(
		0 => 'Kā es varu kļūt par grupas līderi?',
		1 => 'Grupas līderus parasti nozīmē administrators, izveidojot grupu. Ja Jūs esat ieinteresēts grupas izveidē, sākumā sazinieties ar administratoru, mēģiniet nosūtīt viņam privātu ziņu.',
	),
	array(
		0 => 'Kāpēc dažām grupām ir dažādas krāsas?',
		1 => 'Konferences administrators var piešķirt dažādas krāsas grupām, lai tās varētu vieglāk atšķirt vienu no otras.'
	),
	array(
		0 => 'Kas ir "Grupa pēc noklusējuma"?',
		1 => 'Ja Jūs esat dalībnieks vairāk kā vienā grupā, Jūsu grupa pēc noklusējuma ir vajadzīga, lai noteiktu, kuras grupas krāsa nu nosaukums tiktu atainots. Konferences administrators var dot tiesības pašam izvēlēties grupu pēc noklusējuma.'
	),
	array(
		0 => 'Ko nozīmē links "Mūsu komanda"?',
		1 => 'Šajā lapā Jūs atradīsiet administratoru un moderatoru sarakstu un citu informāciju, tādu kā, informāciju par forumiem, kurus tie moderē.'
	),
	array(
		0 => '--',
		1 => 'Personiskie ziņojumi'
	),
	array(
		0 => 'Es nevaru nosūtīt personisko ziņojumu!',
		1 => 'Tam varētu būt trīs iemesli; Jūs neesat reģistrējies vai/un neesat ielogojušies, vai arī administrators liedzis iespēju izsūtīt personiskos ziņojumus konferencē, vai arī administrators to liedzis tieši Jums. Sazinieties ar administratoru lai noskaidrotu iemeslus.'
	),
	array(
		0 => 'Es regulāri saņemu nevēlamus personiskos ziņojumus!',
		1 => 'Jūs varat liegt sūtīt Jums personiskos ziņojumus, izmantojot noteikumus ziņojumu sūtīšanai lietotāja panelī. Ja Jūs saņemat aizvainojošus privātos ziņojumus no konkrēta lietotāja, dariet zināmu to konferences administratoram; viņš var liegt iespēju šim lietotājam sūtīt personiskos ziņojumus.'
	),
	array(
		0 => 'Esmu saņēmis spam vai aizvainojošu email no kāda šīs konferences lietotāja!',
		1 => 'Mēs atvainojamies par to. E-mail nosūtīšanas forma šajā konferencē iekļauj sevī piesardzības mērus un ļauj noteikt lietotājus, kuri veic šādu vēstuļu sūtīšanu. Nosūtiet email-vēstuli konferences administratoram ar pilnu vēstules kopiju. Ļoti svarīgi ir iekļaut visus virsrkastus un tekstus, kuros ir iekļauta informācija par sūtītāju. Šādā gadijumā administrators varēs pieņemt mērus.'
	),
	array(
		0 => '--',
		1 => 'Draugi un nedraugi'
	),
	array(
		0 => 'Ko nozīmē draugu un nedraugu saraksts?',
		1 => 'Šajā sarakastā Jūs varat iekļaut citus konferences lietotājus. Lietotāji, kuri iekļauti draugu sarakstā, tiks attainoti Jūsu personiskajā sadaļā lai būtu iespējama ātra piekļuve, gan informācijai vai lietotāji šobrīd ir online un lai atvieglotu personisko ziņu sūtīšanu. Ziņojumi no šiem lietotājiem arī var atšķirties, ja to atļauj konferences stils. Ja esat pievienojis lietotāju nedraugiem, tad jebkura šī lietotāja sūtītā ziņa, tiks slēpta pēc noklusējuma.'
	),
	array(
		0 => 'Kā es varu pievienot / dzēst lietotājus savā draugu un nedraugu sarakstā?',
		1 => 'Jūs varat pievienot lietotājus divos veidos. Katra lietotāja profilā ir links lai pievienotu to draugu vai nedraugu sarakstam. Bez tam, Jūs to varat izdarīt no lietotāja paneļa, ievadot lietotāja vārdu. Turpat Jūs varat dzēst lietotājus no attiecīgā saraksta.'
	),
	array(
		0 => '--',
		1 => 'Meklēšana forumos'
	),
	array(
		0 => 'Kā es varu meklēt forumā vai forumos?',
		1 => 'Attiecīgā ailē norādiet meklēšanas nosacījumus, foruma vai tēmas apskates lapās. Jūs varat veikt paplašināto meklēšanu, uzspiežot uz linka "Paplašinātā meklēšana", kurš ir pieejams visās konferences lapās. Meklētāja pieejamība var būt atkarīga arī no pielietojamā stila.'
	),
	array(
		0 => 'Kāpēc mana meklēšana nedod rezultātus?',
		1 => 'Iespējams, ka Jūsu mēklēšanas kritēriji ir bijuši pārāk neskaidri un ir saturējuši pārāk daudz vispārēju nosacījumu, pēc kuriem meklēšana phpBB3 netiek veikta. Sīkākai meklēšanai izmantojiet Paplašināto meklēšanu.'
	),
	array(
		0 => 'Meklēšanas rezultātā esmu saņemis tukšu lapu!?',
		1 => 'Jūsu meklēšana ir devusi pārak daudz rezultātu, kurus webserveris nav spējis apstrādāt. Izmantojiet "Paplašināto meklēšanu", nosakiet precizākus meklēšanas kritērijus un forumus, uz kā pamata veikt meklēšanu.'
	),
	array(
		0 => 'Kā es varu atrast lietotāju?',
		1 => 'Pārejiet uz lapu "Lietotāji" un izelaties linku "Atrast lietotāju".'
	),
	array(
		0 => 'Kā es varu atrast savus ziņojumus un savas izveidotās tēmas?',
		1 => 'Jūs varat atrast savus ziņojumus, uzklikšķinot uz linka "Jūsu ziņojumi" galvenajā lapā, vai arī uz linka "atrast lietotāja ziņojumus" lietotāja panelī. Lai atrastu Jūsu izveidotās tēmas, izmantojiet paplašinātās meklēšanas lapu, aizpildot atbilsotošos meklēšanas nosacījumus.'
	),
	array(
		0 => '--',
		1 => 'Grāmatzīmes un parakstīšanās uz tēmām'
	),
	array(
		0 => 'Ar ko atšķiras grāmatzīmes no parakstīšanās?',
		1 => 'Grāmatzīmes phpBB3 vairāk atgādina grāmatzīmes Jūsu web-brauzerī. Jūs netiksiet informēti par notikušajām izmaiņām, tažu varēsiet atgriezties pie tēmas vēlāk. Savukārt, parakstoties, Jūs saņemsiet paziņojumus par izmaiņām tēmā vai forumā veidā, kādam dodat priekšroku.'
	),
	array(
		0 => 'Kā es varu parasktīties uz noteiktu tēmu vai forumu?',
		1 => 'Lai parakstītos uz noteiktu forumu, dodaties uz to un uzklikšķiniet uz linka "Parakstīties uz forumu". Lai parakstītos uz tēmu, atzīmējiet atbilstoši ar ķeksīti pie atbildes nosūtīšanas, vai arī tēmas apskates lapā nospiežiet linku "Parakstīties uz tēmu".'
	),
	array(
		0 => 'Kā es varu atteikties no parakstīšanās?',
		1 => 'Lai atteiktos no parakstīšanās, pārējiet uz lietotāja paneli un uzklikšķiniet uz linka "Parakstīšanās".'
	),
	array(
		0 => '--',
		1 => 'Pielikumi'
	),
	array(
		0 => 'Kādi pielikumi ir atļauti šajā konferencē?',
		1 => 'Katras konferences administrators nosaka atļaut vai aizliegt konkrētu failu tipu pielikumus. Ja Jūs nezinat, kādi pielikumu tipi ir atļauti, Jūs varat sazināties ar konferences administratoru un to noskaidrot.'
	),
	array(
		0 => 'Kā es varu atrast savu pielikumus?',
		1 => 'Lai atrastu sarakstu ar saviem pielikumiem, pārejiet uz lietotāju paneli, un izvēlaties linku "Pielikumi".'
	),
	array(
		0 => '--',
		1 => 'Informācija par phpBB 3'
	),
	array(
		0 => 'kurš ir uzrakstījis šo konferenci?',
		1 => 'Šo programm nodrošinājumu (tā pamatformā) ir izveidojis un izplata <a href="http://www.phpbb.com/">phpBB Group</a>. Tā pieejama uz GNU General Public Licence pamata un var tikt brīvi izplatīta. Lai saņēmtu izsmeļošāku informāciju, apmeklējiet norādīto linku.'
	),
	array(
		0 => 'Kāpēc šeit nav tādu vai citādu funkciju?',
		1 => 'Šis programm nodrošinājums tika radīts un licenzēts phpBB Group. Ja Jūs uzskatat, kā kādai funkcijai būtu jābūt iekļautai, apmeklejiet phpbb.com saitu un uzziniet, ko šajā sakrā domā phpBB Group. Neatstājiet funkciju pieprasījumus phpbb.com konferencē, grupa izmanto SourceForge jaunu funkciju radīšanai. Sākumā apmeklējiet un apskatiet forumu, lai noskaidrotu, kāds ir mūsu viedoklis sakarā ar šo funkciju (ja tāds viedoklis mums ir) un tikai pēc tam sekojiet procedūrai, kura tur būs aprakstīta.'
	),
	array(
		0 => 'Ar ko var kontaktēties jautājumos par nekorektu izmantošanu un/vai juridiskiem jautājumiem, sakarā ar šo konferenci?',
		1 => 'Jūs varat szināties ar jebkuru no adminsitratoriem, kuri ir uzskaitīti sadaļā "Mūsu komanda. Ja Jūs nesaņēmāt atbildi, sazinaties ar domēna īpašnieku (veiciet <a href="http://www.google.com/search?q=whois">whois lookup</a>) vai, ja konference atrodas uz bezmaksas domēna (piemēram Yahoo!, free.fr, f2s.com u.t.t.), tā vadību vai tehnisko atbalstu. Ņemiet vērā, ka phpBB Group nav nekādas varas pār šo konferenci, un nevar nest nekādu atbildību par to, kas un kā izmanto šo konferenci. Nevēršieties pie phpBB Group juridiskos jautājumos (par konferences darbības apturēšanu, atbildību par to u.t.t.), kas neattiecas pat tiešo uz phpBB.com saita darbību, vai arī kas daļēji attiecas phpBB Group programm nodrošinājumu. Ja jūs tomēr sūtīsiet email uz phpBB Group par šās konferences izmantošanu, tad negaidiet atbildi.'
	)
);

?>