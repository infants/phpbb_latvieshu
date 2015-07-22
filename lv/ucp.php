<?php
/**
*
* ucp [Latvian]
* Yanka
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

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	=> 'Ienākot konferencē "%1$s" (turpmāk "mēs", "mūsu", "%1$s", "%2$s"), jūs apstiprināt, ka piekrītat sekojošiem noteikumiem. Ja jūs tiem nepiekrītiet, lūgums, neienākat un nelietojat "%1$s". Mēs paturam sev tiesības mainīt šos noteikumus jebkurā laikā un darīsim visu iespējamo, lai jūs par to informētu, tomēr no jūsu puses būtu lietderīgi ik pa laikam apmaklēt šos noteikumus, lai pārliecinātos vai nav veiktas kādas izmaiņas, tā kā konferences «%1$s» izmantošana pēc noteikumu atjaunojumiem/labojumiem nozīmē jūsu automātisku piekrišanu.<br />
	<br />
	Mūsu forumi darbojas uz phpBB (turpmāk "viņi", "programm nodrošinājums phpBB", "www.phpbb.com", "phpBB Group", "phpBB Teams") programm nodoršinājuma bāzes, izlaistam uz “<a href="http://opensource.org/licenses/gpl-2.0.php">GNU General Public License v2</a>” (turpmāk  “GPL”) pamata. Lejuplādēt to, jūs varat <a href="https://www.phpbb.com/">www.phpbb.com</a>. Licenzes GPL ierobežojumi programm nodorošinājumam phpBB ir cieši saistīti ar organizāciju un atbalstu internet-konferencei, un phpBB Group neness atbildību par to, ko konferences administrācija nosaka par atļauto saturu vai/un pieļaujamo uzvedību tajā. Lai saņemtu sīkāku informāciju par  phpBB griezieties pēc adreses <a href="http://www.phpbb.com/">http://www.phpbb.com/</a>.<br />
	<br />
	Jūs piekrītat neievietot aizvainojošus, draudošus, melīgus ziņojumus, pornogrāfiskus ziņojumus, nacionālā naida kurinošus vai citus tamlīdzīgus tekstus, kuri var būt pretrunā ar jūsu valsts likumdošanu, valsts, kuras hostinga pakalpojumus izmanto "%1$s", vai starptautiskiem noteikumiem. Tādu ziņojumu ievietošanas mēģinājumi var novest pie tā, ka Jūs tiksiet atslēgts no konferences, kā arī tiks paziņots jūsu interneta provaideram, ja uzskatīsim to par vajadzīgu. Visu ziņojumu IP-adreses tiek saglabātas, lai varētu to īstenot nepieciešamības gadījumā. Jūs piekrītat tam, ka, "%1$s" forumu administratoram ir tiesības dzēst, labot, pārvietot vai slēgt jebkuru tēmu jebkurā laikā pēc saviem ieskatiem. Kā lietotājs jūs piekrītat tam, ka jūsu ievadītā informācija glabāsies datu bāzē. Kaut arī šī informācija netiks atklāta trešam personām, tomēr ne "%1$s" konferences administrācija, ne phpBB Group nevar būt atbaldīga par hakeru darbību, kuri nesankcionētas rīcības rezultātā var tai piekļūt.
	',
	
	
	'PRIVACY_POLICY'		=> 'Šī vienošanās izskaidro, kā «%1$s» un tā sadaļas (turpmāk "mēs", "mūsu", "%1$s", "%2$s"), un phpBB (turpmāk "viņi", "programm nodrošinājums phpBB", "www.phpbb.com", "phpBB Group", "phpBB Teams") izmanto informāciju, kura iegūta jebkurā jūsu apmeklējuma sesijā (turpmāk "jūsu informācija").<br />
	<br />

	
	Jūsu informācija tiek apkopota divos veidos. Pirmkārt, apmeklējot "%1$s" phpBB izveidos noteiktu skaitu "cookies" (nelieli teksta faili, kuri tiek uzglabāti jūsu brauzera pagaidu failu mapē). Pirmie divi "cookie" satur tikai lietotāja identifikātoru (turpmāk "user-id") un anonīmās sesijas identifikātoru (turpmāk "session-id"), kuri tiek jums automātiksi piešķirti ar phpBB programm nodrošinājumu. Trešie "cookie" tiks izveidoti pēc kādas no "%1$s" konferences tēmas apskates un tiks izmantoti lai saglabātu informāciju par jūsu izlasītajām tēmām, tādā veidā paaugstinot ērtību strādāšanā ar forumiem.<br />
	<br />

	
	Tāpat, "%1$s" konferences apskates laikā, jūs varat uzstādīt cookies, ārēji attiecībā pret phpBB, taču tas jau ir cits temats, un iziet ārpus šī apraksta, kura mērķis ir apskatīt lapas kuras ir izveidotas vienīgi ar phpBB programm nodrošinājumu. Otrs jūsu informācijas apkopošanas veids ir dati, kurus jūs sūtat uz forumu. Šie dati var būt piemēram: ziņas, pievienotas zem viesa statusa (turpmāk "anonīmās ziņas"), dati, kuri norādīti reģistrējoties un ziņas, kuras esat atstājis kā lietotājs.<br />
	<br />

	
	Jūsu lietotāja konts, kā minimums saturēs, lietotājvārdu, individualu paroli lai ielogotos un reālu e-pasta adresi. Jūsu informācija no jūsu "%1$s" forumu konta, tiek aizsargāta ar likumiem par kompjūter informācijas aizsardzību, kuri ir spēkā tai valstī, kuras hostinga pakalpojumi tiek izmantoti. Jebkura informācija, jebkura informācija, kura tiek pieprasīta reģistrējoties "%1$s", izņemot jūsu lietotājvārdu, jūsu paroli un jūsu e-pasta adresi, var būt gan nepieciešama, gan arī neobligāta ievadīšanai, tas atkarīgs no "%1$s" konferences administratora. Katrā gadījumā jums ir iespēja izvēlēties, kura informācija no jūsu konta būs publiski pieejama. Bez tam, jums ir iespēja piekrist/atteikties automātiski ģenērētu paziņojumu saņemšanas, kurus ģenerē phpBB programm nodrošinājums.<br />
	<br />

	
	Jūsu parole tiek tiek droši šifrēta. Tomēr nav ieteicams izmantot šo pašu paroli reģistrējotos citos saitos. Jūsu parole ir līdzeklis tikt pie jūsu konta "%1$s" forumos, tāpēc lūgums, glabājiet to noslēpumā, un nekādos gadījumos, ne "%1$s" pārstāvjiem, ne phpBB Group, ne trešām personām nav tiesību prasīt jums jūsu paroli. Gadījumā, ja jūs aizmirsīsiet jūsu konta paroli, jūs varat izmantot paroles atjaunošanas funkciju "Esmu aizmirsis paroli", no phpBB programm nodrošinājuma. Jums būs nepieciešams ievadīt savu lietotājvārdu un e-pasta adresi, pēc tam phpBB programm nodrošinājums noģenerēs jums jaunu paroli jūsu lietotāja kontam.<br />
	
	
	
	
	',
));
// Common language entries

$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'				=> 'Jūsu lietotāja konts tika aktivizēts. Pateicamies par reģistrēšanos.',
	'ACCOUNT_ACTIVE_ADMIN'			=> 'Jūsu lietotāja konts tika aktivizēts.',
	'ACCOUNT_ACTIVE_PROFILE'		=> 'Jūsu lietotāja konts tika veiksmīgi atkal aktivizēts.',
	'ACCOUNT_ADDED'					=> 'Pateicamies par reģistrēšanos, jūsu lietotāja konts tika izveidots. Jūs varat ielogoties izmantojot savu lietotājvārdu un paroli.',
	'ACCOUNT_COPPA'					=> 'Jūsu lietotāja konts tika izveidots, bet tam nepieciešams apstiprinājums. Sīkāka informācija nosūtīta uz jūsu e-pastu.',
	'ACCOUNT_EMAIL_CHANGED'			=> 'Jūsu lietotāja konts tika atjaunots. Bet ir nepieciešams atkārtoti aktivizēt lietotāja kontu pēc e-pasta adreses nomaiņas. Aktivizācijas informācija nosūtīta uz jūsu norādīto jauno e-pasta adresi.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> 'Jūsu lietotāja konts tika atjaunots. Bet ir nepieciešama atkārtots administratora apstiprināšana lai aktivizētu lietotāja kontu, pie e-pasta adreses nomaiņas. Paziņojums administratoram ir nosūtīts. Jums tiks paziņots, kad tiks atkārtoti aktivizēts jūsu lietotāja konts.',
	'ACCOUNT_INACTIVE'				=> 'Jūsu lietotāja konts tika izveidots. Bet ir nepieciešams to aktivizēt. Aktivizācijas informācija nosūtīta uz jūsu norādīto e-pasta adresi.',
	'ACCOUNT_INACTIVE_ADMIN'		=> 'Jūsu lietotāja konts tika izveidots. Bet ir nepieciešama administratora apstiprināšana. Paziņojums administratoram ir nosūtīts. Jums tiks paziņots, kad tiks aktivizēts jūsu lietotāja konts.',
	'ACTIVATION_EMAIL_SENT'			=> 'Aktivizēšanas e-pasts nosūtīts uz jūsu e-pasta adresi.',
	'ACTIVATION_EMAIL_SENT_ADMIN'	=> 'Aktivizēšanas e-pasts nosūtīts uz administratora e-pasta adresi.',
	
	
	
	
	'ADD'							=> 'Pievienot',
	'ADD_BCC'						=> 'Pievienot [BCC]',
	'ADD_FOES'						=> 'Pievienot jaunus nedraugus',
	'ADD_FOES_EXPLAIN'				=> 'ūs varat pievienot vairākus lietotājus, bet katru savu līnījā.',
	
	
	
	'ADD_FOLDER'					=> 'Pievienot mapi',
	'ADD_FRIENDS'					=> 'Pievienot jaunus draugus',
	'ADD_FRIENDS_EXPLAIN'			=> 'Jūs varat pievienot vairākus lietotājus, bet katru savu līnījā.',

	'ADD_NEW_RULE'					=> 'Pievienot jaunu noteikumu',
	'ADD_RULE'						=> 'Pievienot noteikumu',
	'ADD_TO'						=> 'Pievienot [Kam]',
	'ADD_USERS_UCP_EXPLAIN'			=> 'Šeit jūs varat pievienot jaunus lietotājus grupai. Jūs varat izvēlēties, vai šī grupa kļūs par grupu pēc noklusējuma pievienotajiem lietotājiem. Ievadiet katru lietotājvārdu atsevišķā līnijā.',
	'ADMIN_EMAIL'					=> 'Saņemt e-pastu no administrācijas',
	'AGREE'							=> 'Piekrītu noteikumiem',
	'ALLOW_PM'						=> 'Ļaut lietotajiem sūtīt jums privātas ziņas',
	'ALLOW_PM_EXPLAIN'				=> 'Atcerieties, ka moderatori un administratori var vienmēr jums sūtīt privātās ziņas.',
	'ALREADY_ACTIVATED'				=> 'Jūs jau esat aktivizējuši savu lietotāja kontu.',
	
	
	
	
	
	
	'ATTACHMENTS_EXPLAIN'			=> 'Šis ir jūsu pielikumu sarakstss.',
	'ATTACHMENTS_DELETED'			=> 'Pielikumi veiksmīgi dzēsti.',
	'ATTACHMENT_DELETED'			=> 'Pielikums veiksmīgi dzēsts.',
	'AUTOLOGIN_SESSION_KEYS_DELETED'=> 'Izvēlētā "Atcerēties Mani" pieteikšanās poga tika veiksmīgi dzēsta.',
	'AVATAR_CATEGORY'				=> 'Kategorija',
	'AVATAR_DRIVER_GRAVATAR_TITLE'	=> 'Gravatar - Globāli Atpazīstams Avatars',
	//http://aiz.miga.lv/2007/02/16/gravatar-atgriezas
	'AVATAR_DRIVER_GRAVATAR_EXPLAIN'=> 'Gravatar ir serviss, kas ļauj uzturēt vienu atveidu vairākās web vietnēs. Apmeklējiet <a href="http://www.gravatar.com/">Gravatar</a>, lai iegūtu vairāk informācijas.',
	
	
	
	
	
	
	
	'AVATAR_DRIVER_LOCAL_TITLE'		=> 'Avataru galerija',
	'AVATAR_DRIVER_LOCAL_EXPLAIN'	=> 'Varat izvēlēties savu avataru no lokāli pieejamiem avatāriem.',
	'AVATAR_DRIVER_REMOTE_TITLE'	=> 'Atālinātais Avatārs',
	'AVATAR_DRIVER_REMOTE_EXPLAIN'	=> 'Saite uz avatāra bildi not citas websaites.',
	'AVATAR_DRIVER_UPLOAD_TITLE'	=> 'Augšupielādēt avatāru',
	'AVATAR_DRIVER_UPLOAD_EXPLAIN'	=> 'Augšupielādēt jūsu avatāru.',
	'AVATAR_EXPLAIN'				=> 'Maksimālais izmērs; platums: %1$s, augstums: %2$s, faila izmērs: %3$.2f KiB.',
	'AVATAR_FEATURES_DISABLED'		=> 'Avatari pašlaik ir atslēgti.',
	'AVATAR_GALLERY'				=> 'Vietējā galerija',
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'Nevar augšuplādēt avataru %s.',
	'AVATAR_NOT_ALLOWED'			=> 'Avatāru nevar parādīt, jo avatāru funkcija ir atslēgta.',
	'AVATAR_PAGE'					=> 'Lapa',
	'AVATAR_SELECT'					=> 'Izvēlēties avatāru',
	'AVATAR_TYPE'					=> 'Avatāra tips',
	'AVATAR_TYPE_NOT_ALLOWED'		=> 'Jūsu pašreizējais avatars nevar tikt parādīts, jo avatara faila tips nav atļauts.',

	'BACK_TO_DRAFTS'			=> 'Atgriezties pie melnrakstiem',
	'BACK_TO_LOGIN'				=> 'Atgriezties pie Autorizācijas',
	'BIRTHDAY'					=> 'Dzimšanas diena',
	'BIRTHDAY_EXPLAIN'			=> 'Izvēloties dzimšanas gadu jūsu vecums tiks attainots forumā.',
	'BOARD_DATE_FORMAT'			=> 'Mans Datuma formāts',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'Sintakse ir identiska PHP <a href="http://www.php.net/date">date()</a> funkcijai.',
	'BOARD_LANGUAGE'			=> 'Mana valoda',
	'BOARD_STYLE'				=> 'Mans stils',
	'BOARD_TIMEZONE'			=> 'Mana laika zona',
	'BOOKMARKS'					=> 'Grāmatzīmes',
	'BOOKMARKS_EXPLAIN'			=> 'Jūs varat pievienot tēmas grāmatzīmēm lai vēlāk tās atrastu. Atzīmējiet grāmatzīmes kuras vēlaties dzēst, un pēc tam nospiediet pogu <em>Dzēst atzīmētās grāmatzīmes</em>.',
	
	
	
	'BOOKMARKS_DISABLED'		=> 'Grāmatzīmju funkcija atslēgta.',
	'BOOKMARKS_REMOVED'			=> 'Grāmatzīmes veiksmīgi dzēstas.',

	'CANNOT_EDIT_MESSAGE_TIME'	=> 'Jūs vairs nevarat labot vai dzēst šo ziņu.',
	'CANNOT_MOVE_TO_SAME_FOLDER'=> 'Ziņojumi nevar tikt pārvietoti uz mapi, kuru gribat dzēst.',
	'CANNOT_MOVE_FROM_SPECIAL'	=> 'Ziņas nevar tikt dzēstas no "Izejošie".',
	'CANNOT_RENAME_FOLDER'		=> 'Šai mapei nevar mainīt nosaukumu.',
	'CANNOT_REMOVE_FOLDER'		=> 'Šo mapi nevar dzēst.',
	'CHANGE_DEFAULT_GROUP'		=> 'Mainīt grupu pēc noklusējuma',
	'CHANGE_PASSWORD'			=> 'Mainīt paroli',
	'CLICK_GOTO_FOLDER'			=> '%1$sAtgriezties uz “%3$s” mapi%2$s',
	'CLICK_RETURN_FOLDER'		=> '%1$sAtgriezties uz “%3$s” mapi%2$s',
	'CONFIRMATION'				=> 'Reģistrācijas Apstiprinājums',
	'CONFIRM_CHANGES'			=> 'Apstiprināt izmaiņas',
	'CONFIRM_EXPLAIN'			=> 'Lai pasargātu forumu no automātiskās reģistrēšanās (spam boti u.t.t.), ir nepieciešams ievadīt drošības kodu. Kods ir norādīts atēlā, kurš atrodas zemāk. Ja jūs neredzat kodu uz atēla, lūgums vērsties pie %sForuma Administratora%s.',
	
	
	
	
	
	'VC_REFRESH'				=> 'Atjaunot drošības kodu',
	'VC_REFRESH_EXPLAIN'		=> 'Ja nevarat izlasīt kodu, jūs varat pieprasīt jaunu kodu nospiežot uz šīs pogas.',

	'CONFIRM_PASSWORD'			=> 'Apstiprināt paroli',
	'CONFIRM_PASSWORD_EXPLAIN'		=> 'Apstiprināt paroli nepieciešams vienīgi tad, ja esat to nomainījuši augstāk.',
	'COPPA_BIRTHDAY'			=> 'Lai turpinātu reģistrāciju, lūdzu norādiet savu dzimšanas datumu.',
	'COPPA_COMPLIANCE'			=> 'COPPA vienošanās', //Children's Online Privacy Protection Rule
	'COPPA_EXPLAIN'				=> 'Ņemiet verā, ka jūsu lietotāja konts tiks izveidots uzreiz pēc formas nosūtīšanas. Tomēr, tas netiks aktivizēts līdz brīdim, kamēr netiks saņemta jūsu vecāku vai aizbildņu piekrišana. Jums tiks nosūtīta e-pasta kopija ar nepieciešamo formu un norādījumiem, kur tā jāsūta.',
	
	
	
	'CREATE_FOLDER'				=> 'Pievienot mapi…',
	'CURRENT_IMAGE'				=> 'Esošā bilde',
	'CURRENT_PASSWORD'			=> 'Esošā parole',
	'CURRENT_PASSWORD_EXPLAIN'	=> 'Jums jāapstiprina esošā parole, ja vēlaties nomainīt lietotājvārdu, e-pasta adresi vai paroli.',
	'CURRENT_CHANGE_PASSWORD_EXPLAIN' => 'Lai nomainītu paroli, e-pasta adresi vai lietotāja vārdu, jums ir jāievada pašreizējā parole.',
	'CUR_PASSWORD_EMPTY'		=> 'Jūs neievadījāt pašreizējo paroli.',
	'CUR_PASSWORD_ERROR'		=> 'Jūsu ievadītā esošā parole nav pareiza.',
	'CUSTOM_DATEFORMAT'			=> 'Cits…',

	'DEFAULT_ACTION'			=> 'Noklusējuma darbība',
	'DEFAULT_ACTION_EXPLAIN'	=> 'Šī darbība tiks veikta, ja nav iespējams izpildīt nevienu no augstāk norādītajiem noteikumiem.',
		'DEFAULT_ADD_SIG'			=> 'Pievienot manu parakstu',
	'DEFAULT_BBCODE'			=> 'Atļaut BBcode',
	'DEFAULT_NOTIFY'			=> 'Paziņot man par atbildēm',
	'DEFAULT_SMILIES'			=> 'Atļaut smaidiņus',
	'DEFINED_RULES'				=> 'Definēt noteikumus',
	'DELETED_TOPIC'				=> 'Tēma dzēsta.',
	'DELETE_ATTACHMENT'			=> 'Dzēst pielikumu',
	'DELETE_ATTACHMENTS'		=> 'Dzēst pielikumus',
	'DELETE_ATTACHMENT_CONFIRM'	=> 'Esat pārliecināti, ka vēlaties dzēst šo pielikumu?',
	'DELETE_ATTACHMENTS_CONFIRM'=> 'Esat pārliecināti, ka vēlaties dzēst šo pielikumus?',
	'DELETE_AVATAR'				=> 'Dzēst bildi',
	'DELETE_COOKIES_CONFIRM'	=> 'Vai tiešām vēlaties dzēst visus šī foruma cookies?',
	'DELETE_MARKED_PM'			=> 'Dzēst atzīmētās ziņas',
	'DELETE_MARKED_PM_CONFIRM'	=> 'Vai tiešām vēlaties dzēst visas atzīmētās ziņas?',
	'DELETE_OLDEST_MESSAGES'	=> 'Dzēst vecākās ziņas',
	'DELETE_MESSAGE'			=> 'Dzēst ziņu',
	'DELETE_MESSAGE_CONFIRM'	=> 'Esat pārliecināti, ka vēlaties dzēst šo privāto ziņu?',
	'DELETE_MESSAGES_IN_FOLDER'	=> 'Dzēst visas ziņas, kuras atrodas dzēšamajā mapē',
	'DELETE_RULE'				=> 'Delete rule',
	'DELETE_RULE_CONFIRM'		=> 'Esat pārliecināti, ka vēlaties dzēst šo noteikumu?',
	'DEMOTE_SELECTED'			=> 'Atteikties no vadības',
	'DISABLE_CENSORS'			=> 'Ieslēgt vārdu cenzūru',
	'DISPLAY_GALLERY'			=> 'Rādīt galeriju',
	'DOMAIN_NO_MX_RECORD_EMAIL'	=> 'Ievadītais e-pasta domēns satur nekorektu DNS ierakstu (MX record).',
	
	'DOWNLOADS'					=> 'Lejuplāde',
	'DRAFTS_DELETED'			=> 'AVisi atzīmētie melnraksti veiksmīgi dzēsti.',
	'DRAFTS_EXPLAIN'			=> 'Šeit jūs varat apskatīt, labot un dzēst jūsu saglabātos melnrakstus.',
	'DRAFT_UPDATED'				=> 'Melnraksts veiksmīgi atjaunots.',

	
	
	'EDIT_DRAFT_EXPLAIN'		=> 'Šeit jūs varat labot melnrakstus. Melnraksti nesatur pielikumus un aptaujas.',
	'EMAIL_BANNED_EMAIL'		=> 'Šo e-pasta adresi nav atļauts izmantot.',
	'EMAIL_REMIND'				=> 'E-pasta adrese, kura saistīta ar jūsu lietotāju kontu. Ja jūs neesat to nomainījuši lietotāja panelī, tad šī ir e-pasta adrese, kuru jūs norādījāt reģistrējoties.',
	'EMAIL_TAKEN_EMAIL'			=> 'Norādītā e-pasta adrese jau ir aizņemta.',
	
	
	
	
	
	'EMPTY_DRAFT'				=> 'Jums jāievada ziņa, lai apstiprinātu izmaiņas.',
	'EMPTY_DRAFT_TITLE'			=> 'Jums jāievada melnraksta nosaukums.',
	'EXPORT_AS_XML'				=> 'Eksportēt kā XML',
	'EXPORT_AS_CSV'				=> 'Eksportēt kā CSV',
	'EXPORT_AS_CSV_EXCEL'		=> 'Eksportēt kā CSV (Excel)',
	'EXPORT_AS_TXT'				=> 'Eksportēt kā TXT',
	'EXPORT_AS_MSG'				=> 'Eksportēt kā MSG',
	'EXPORT_FOLDER'				=> 'Eksportēt šādā veidā',

	'FIELD_REQUIRED'					=> 'The field “%s” must be completed.',
	'FIELD_TOO_SHORT'					=> array(
		1	=> 'Lauks “%2$s” ir par īsu, nepieciešams minimums %1$d rakstu zīmes.',
		2	=> 'Lauks “%2$s” ir par īsu, nepieciešams minimums %1$d rakstu zīmes.',
	),
	'FIELD_TOO_LONG'					=> array(
		1	=> 'Lauks “%2$s” ir par garu, maksimāli atļauts %1$d rakstu zīmes.',
		2	=> 'Lauks “%2$s” ir par garu, maksimāli atļauts %1$d rakstu zīmes.',
	),
	'FIELD_TOO_SMALL'					=> '“%2$s” vērtība ir par mazu, nepieciešams vismaz %1$d rakstu zīmes.',
	'FIELD_TOO_LARGE'					=> '“%2$s” vērtība ir par lielu, maksimāli atļautais ir %1$d rakstu zīmes.',
	'FIELD_INVALID_CHARS_INVALID'		=> 'Lauks “%s” satur neatļautus simbolus.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'Lauks “%s” satur neatļautus simbolus, atļauti tikai cipari.',
	'FIELD_INVALID_CHARS_ALPHA_DOTS'	=> 'Lauks “%s” satur neatļautus simbolus, atļauti tikai burtcipari vai rakstu zīmes.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> 'Lauks “%s” satur neatļautus simbolus, atļauti tikai burtcipari.',
	'FIELD_INVALID_CHARS_ALPHA_PUNCTUATION'	=> 'Lauks “%s” satur neatļautus simbolus, tikai burtu un ciparu vai _,-. simboli atļauti un pirmajai rakstu zīmei ir jābut alfabētiskai.',
	'FIELD_INVALID_CHARS_ALPHA_SPACERS'	=> 'Lauks “%s” satur neatļautus simbolus, tikai burtcipari, atstarpe vai -+_[] rakstzīmes ir atļautas.',
	'FIELD_INVALID_CHARS_ALPHA_UNDERSCORE'	=> 'Lauks “%s” satur neatļautus simbolus, tikai burtcipari vai _ rakstzīmes ir atļautas.',
	'FIELD_INVALID_CHARS_LETTER_NUM_DOTS'	=> 'Lauks “%s” satur neatļautus simbolus, tikai burti, cipari vai . rakstzīmes ir atļautas.',
	'FIELD_INVALID_CHARS_LETTER_NUM_ONLY'	=> 'Lauks “%s” satur neatļautus simbolus, tikai burtu un ciparu rakstzīmes ir atļautas.',
	'FIELD_INVALID_CHARS_LETTER_NUM_PUNCTUATION'	=> 'Lauks “%s” satur neatļautus simbolus, tikai burti, cipari vai _,-. simboli atļauti un pirmajai rakstu zīmei ir jābut alfabētiskai.',
	'FIELD_INVALID_CHARS_LETTER_NUM_SPACERS'		=> 'Lauks “%s” satur neatļautus simbolus, tikai burti, cipari, atstarpe vai -+_[] rakstzīmes ir atļautas.',
	'FIELD_INVALID_CHARS_LETTER_NUM_UNDERSCORE'		=> 'Lauks “%s” satur neatļautus simbolus, tikai burti, cipari vai _ rakstzīmes ir atļautas.',
	'FIELD_INVALID_DATE'				=> 'Lauks “%s” satur nederīgu datumu.',
	'FIELD_INVALID_URL'					=> 'Lauks “%s” satur nederīgu url.',
	'FIELD_INVALID_VALUE'				=> 'Lauks “%s” satur nederīgu vērtību.',

	'FOE_MESSAGE'				=> 'Ziņa no nedrauga',
	'FOES_EXPLAIN'				=> 'Nedraugi - lietotāji, kuri tiks ignorēti. Šo lietotāju ziņas tiks slēptas. Savukārt personiskās ziņas no nedraugiem tiek saņemtas. Moderatorus vai administratorus ignorēt jūs nevarat.',
	'FOES_UPDATED'				=> 'Nedraugu saraksts veiksmīgi atjaunots.',
	'FOLDER_ADDED'				=> 'Mape veiksmīgi pievienota.',
	'FOLDER_MESSAGE_STATUS'		=> array(
		1	=> '%2$d no %1$s saglabāta',
		2	=> '%2$d no %1$s saglabātas',
	),
	'FOLDER_NAME_EMPTY'			=> 'Jums jānorāda vārds šai mapei.',
	'FOLDER_NAME_EXIST'			=> 'Mape <strong>%s</strong> jau eksistē.',
	'FOLDER_OPTIONS'			=> 'Mapes uzstādījumi',
	'FOLDER_RENAMED'			=> 'Mape veiksmīgi pārdēvēta.',
	'FOLDER_REMOVED'			=> 'Mape veiksmīgi dzēsta.',
	//Svētais tvaiks atkal neko nevar saprast ar daudzskaitļiem :(
	'FOLDER_STATUS_MSG'			=> array(
		1	=> 'Mape %3$d%% ir pilna (%2$d no %1$s saglabāta)',
		2	=> 'Mape %3$d%% ir pilna (%2$d no %1$s saglabātas)',
	),
	
	'FORWARD_PM'				=> 'Pārsūtīt PZ',
	'FORCE_PASSWORD_EXPLAIN'	=> 'Lai turpinātu apmeklēt forumu, jums nepieciešams nomainīt paroli.',
	'FRIEND_MESSAGE'			=> 'Tvaika Ziņa no drauga',
	'FRIENDS'					=> 'Draugi',
	'FRIENDS_EXPLAIN'			=> 'Draugu saraksts dod jums iespēju ātri sazināties ar tvaicētājiem, ar kuriem jūs bieži kontaktējaties. Pie atbilstoša foruma stila, pastāv iespēja, izcelt jūsu draugu ziņojumus.',
	//jociņš ;)
	'FRIENDS_OFFLINE'			=> 'Bezsaistē',
	'FRIENDS_ONLINE'			=> 'Tiešsaistē',
	'FRIENDS_UPDATED'			=> 'Jūsu draugu saraksts veiksmīgi atjaunots.',
	'FULL_FOLDER_OPTION_CHANGED'=> 'Darbība, kura tiks veikta ja mape būs pilna, ir nomainīta.',
	'FWD_ORIGINAL_MESSAGE'		=> '-------- Orģinālā Ziņa --------',
	'FWD_SUBJECT'				=> 'Tēma: %s',
	'FWD_DATE'					=> 'Datums: %s',
	'FWD_FROM'					=> 'No: %s',
	'FWD_TO'					=> 'Kam: %s',

	'GLOBAL_ANNOUNCEMENT'		=> 'Svarīgs paziņojums',

	'GRAVATAR_AVATAR_EMAIL'			=> 'Gravatar e-pasts',
	'GRAVATAR_AVATAR_EMAIL_EXPLAIN'	=> 'Ievadiet e-pasta adresi, kuru izmantojāt reģistrējot savu kontu <a href="http://www.gravatar.com/">Gravatar</a>.',
	'GRAVATAR_AVATAR_SIZE'			=> 'Avatar izmēri',
	'GRAVATAR_AVATAR_SIZE_EXPLAIN'	=> 'Norādiet platumu un augstumu avatāram, atstājiet tukšu, lai mēģinātu automātisko pārbaudi.',

	'HIDE_ONLINE'				=> 'Slēpt manu online statusu',
	'HIDE_ONLINE_EXPLAIN'		=> 'Uzstādījuma izmaiņa stāsies spēkā pie jūsu nākamās autorizācijas.',
	'HOLD_NEW_MESSAGES'			=> 'Nepieņemt jaunus privātos ziņojumus (jaunie ziņojumi tiks atlikti līdz parādīsies pietiekami daudz brīvas vietas)',
	'HOLD_NEW_MESSAGES_SHORT'	=> 'Jaunie ziņojumi tiks atlikti',

	'IF_FOLDER_FULL'			=> 'Ja mape ir pilna',
	'IMPORTANT_NEWS'			=> 'Svarīgi paziņojumi',
	'INVALID_USER_BIRTHDAY'			=> 'Ievadīts nepareizs dzimšanas datums.',
	'INVALID_CHARS_USERNAME'	=> 'Lietotājvārds satur neatļautas rakstzīmes.',
	'INVALID_CHARS_NEW_PASSWORD'=> 'Parole nesatur pieprasītās rakstzīmes.',
	'ITEMS_REQUIRED'			=> 'Lauki, kas atzīmēti ar * ir jāaizpilda obligāti.',

	'JOIN_SELECTED'				=> 'Pievienoties atzīmētajai',

	'LANGUAGE'					=> 'Valoda',
	'LINK_REMOTE_AVATAR'		=> 'Ārējais links',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> 'Ievadiet URL adresi, lai norādītu vietu, kur atrodas jūsu avatars.',
	'LINK_REMOTE_SIZE'			=> 'Avatara izmēri',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> 'Norādiet avatara augstumu un platumu vai atstājiet lauciņus tukšus automātiskai pārbaudei.',
	'LOGIN_EXPLAIN_UCP'			=> 'Lūdzu ielogojieties, lai piekļūtu lietotāja panelim.',
	'LOGIN_LINK'					=> 'Saite vai reģistrēt savu kontu uz ārēju pakalpojumu ar jūsu lietotāja kontu',
	'LOGIN_LINK_EXPLAIN'			=> 'Jūs esat mēģinājis pieteikties ar ārējo pakalpojumu, kas vēl nav pieslēgts šim forumam. Jums tagad ir vai nu jāsasaista šis konts ar esošo kontu vai jāizveido jauns konts.',
	// You have attempted to login with an external service that is not yet connected to an account on this board. You must now either link this account to an existing account or create a new account.
	'LOGIN_LINK_MISSING_DATA'		=> 'Dati nav pieejami, kas ir nepieciešami, lai savienotu savu kontu ar ārpakalpojumu. Lūdzu, atkārtojiet pieteikšanās procesu.',
	'LOGIN_LINK_NO_DATA_PROVIDED'	=> 'Dati nav pieejami, kas ir nepieciešami, lai savienotu savu ārpakalpojumu kontu ar foruma kontu. Sazinaties ar administrāciju, ja problēma atkārtosies.',
	'LOGIN_KEY'					=> 'Autorizācijas Atslēga',
	'LOGIN_TIME'				=> 'Autorizācijas Laiks',
	'LOGIN_REDIRECT'			=> 'Jūs esat veiksmīgi autorizējies.',
	'LOGOUT_FAILED'				=> 'Jūs neesat izlogojušies, jo pieprasījums neatbilda jūsu sesijas parametriem. Sazinaties ar administrāciju, ja problēma atkārtosies.',
	'LOGOUT_REDIRECT'			=> 'Jūs esat veiksmīgi izlogojušies.',

	'MARK_IMPORTANT'				=> 'Atzīmēt/Neatzīmēt kā svarīgu',
	'MARKED_MESSAGE'				=> 'Atzīmēts ziņojums',
	'MAX_FOLDER_REACHED'			=> 'Sasniegts maksimāli pieļaujamo mapīšu skaits.',
	'MESSAGE_BY_AUTHOR'				=> 'no',
	'MESSAGE_COLOURS'				=> 'Ziņojumu krāsa',
	'MESSAGE_DELETED'				=> 'Ziņa veiksmīgi dzēsta.',
	'MESSAGE_EDITED'				=> 'Ziņa veiksmīgi labota.',
	'MESSAGE_HISTORY'				=> 'Ziņojumu vēsture',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'Autors ir dzēsis šo ziņojumu pirms tas ticis izlasīts..',
	'MESSAGE_SENT_ON'				=> 'no',
	//MESSAGE_SENT_ON???
	'MESSAGE_STORED'				=> 'Ziņa veiksmīgi nosūtīta.',
	'MESSAGE_TO'					=> 'Kam',
	'MESSAGES_DELETED'				=> 'Ziņas veiksmīgi dzēstas',
	'MOVE_DELETED_MESSAGES_TO'		=> 'Pārvietot ziņas no dzēšamās mapes uz',
	'MOVE_DOWN'						=> 'Pārvietot uz leju',
	'MOVE_MARKED_TO_FOLDER'			=> 'Pārvietot atzīmētās uz %s',
	'MOVE_PM_ERROR'					=> array(
		1	=> 'Pārvietojot ziņu uz mapi notikusi kļūda, tikai %2$d no %1$s tika pārvietota.',
		2	=> 'Pārvietojot ziņas uz mapi notikusi kļūda, tikai %2$d no %1$s tika pārvietotas.',
	),
	'MOVE_TO_FOLDER'				=> 'Pārvietot uz mapi',
	'MOVE_UP'						=> 'Pārvietot uz augšu',

	'NEW_FOLDER_NAME'				=> 'Jauns mapes nosaukums',
	'NEW_PASSWORD'					=> 'Jauna parole',
	'NEW_PASSWORD_CONFIRM_EMPTY'	=> 'You did not enter a confirm password.',
	'NEW_PASSWORD_ERROR'			=> 'Jūs neievadījāt apstiprinājuma paroli.',

	'NOTIFICATIONS_MARK_ALL_READ'						=> 'Atzīmēt visus ziņojumus kā izlasītus',
	'NOTIFICATIONS_MARK_ALL_READ_CONFIRM'				=> 'Vai esat pārliecināts, ka vēlaties atzīmēt visus ziņojumus kā izlasītus?',
	'NOTIFICATIONS_MARK_ALL_READ_SUCCESS'				=> 'Visi ziņojumi atzīmēti kā izlasīti.',
	'NOTIFICATION_GROUP_MISCELLANEOUS'					=> 'Dažādi paziņojumi',
	'NOTIFICATION_GROUP_MODERATION'						=> 'Paziņojumu pārvalde',
	//Moderation Notifications 
	'NOTIFICATION_GROUP_ADMINISTRATION'					=> 'Administrācijas paziņojumi',
	'NOTIFICATION_GROUP_POSTING'						=> 'Ziņu Paziņojumi',
	//Posting Notifications - man liekas paziņojumi pie rakstu izveides paziņo
	'NOTIFICATION_METHOD_EMAIL'							=> 'E-pasts',
	'NOTIFICATION_METHOD_JABBER'						=> 'Jabber',
	'NOTIFICATION_TYPE'									=> 'Paziņojuma tips',
	'NOTIFICATION_TYPE_BOOKMARK'						=> 'Kāds atbild uz tēmu esat atzīmējis ar grāmatzīmi',
	'NOTIFICATION_TYPE_GROUP_REQUEST'					=> 'Kāds vēlas pievienoties jūsu vadītai grupai',
	'NOTIFICATION_TYPE_IN_MODERATION_QUEUE'				=> 'Ziņu vai tēmu nepieciešams apstiprināt',
	'NOTIFICATION_TYPE_MODERATION_QUEUE'				=> 'Jūsu tēma/ziņa būs moderātora apstiprināta vai neapstiprināta',
	'NOTIFICATION_TYPE_PM'								=> 'Kāds nosūtījis jums privātu ziņu',
	'NOTIFICATION_TYPE_POST'							=> 'Kāds ir atbildējis uz tēmu pie kuras esat pierakstījies',
	'NOTIFICATION_TYPE_QUOTE'							=> 'Kāds citējis jūsu ziņu',
	'NOTIFICATION_TYPE_REPORT'							=> 'Kāds nosūtījis ziņojumu par jūsu ziņu',
	'NOTIFICATION_TYPE_TOPIC'							=> 'Kāds ir tēmu forumā kurā esat pierakstījies',
	'NOTIFICATION_TYPE_ADMIN_ACTIVATE_USER'				=> 'Tikko reģistrētam lietotājam nepieciešama aktivizācija',

	'NOTIFY_METHOD'					=> 'Paziņošanas veids',
	'NOTIFY_METHOD_BOTH'			=> 'Abi',
	'NOTIFY_METHOD_EMAIL'			=> 'Tikai e-pasts',
	'NOTIFY_METHOD_EXPLAIN'			=> 'Veids, kādā forumi nosūta paziņojumus.',
	'NOTIFY_METHOD_IM'				=> 'Tikai Jabber',
	'NOTIFY_ON_PM'					=> 'Paziņot man par jauniem privātiem ziņojumiem',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'Jūs nevarat pievienot viesus draugu sarakstam.',
	'NOT_ADDED_FRIENDS_BOTS'		=> 'Jūs nevarat pievienot botus draugu sarakstam.',
	'NOT_ADDED_FRIENDS_FOES'		=> 'Jūs nevarat pievienot nedraugus draugu sarakstam.',
	'NOT_ADDED_FRIENDS_SELF'		=> 'Jūs nevarat pievienot pats sevi draugu sarakstam.',
	'NOT_ADDED_FOES_MOD_ADMIN'		=> 'Jūs nevarat pievienot administratorus un moderatorus nedraugu sarakstam.',
	'NOT_ADDED_FOES_ANONYMOUS'		=> 'Jūs nevarat pievienot anonīmus viesus nedraugu sarakstam.',
	'NOT_ADDED_FOES_BOTS'			=> 'Jūs nevarat pievienot botus nedraugu sarakstam.',
	'NOT_ADDED_FOES_FRIENDS'		=> 'Jūs nevarat pievienot draugus nedraugu sarakstam.',
	'NOT_ADDED_FOES_SELF'			=> 'Jūs nevarat pievienot pats sevi nedraugu sarakstam.',
	'NOT_AGREE'						=> 'Nepiekrītu noteikumiem',
	'NOT_ENOUGH_SPACE_FOLDER'		=> 'Mape “%s” ir pilna. Darbība netika veikta.',
	'NOT_MOVED_MESSAGES'			=> array(
		1	=> 'Jums ir %d atlikta privātā ziņa, jo mape ir pilna.',
		2	=> 'Jums ir %d atliktas privātās ziņas, jo mape ir pilna.',
	),
	'NO_ACTION_MODE'				=> 'Nav izvēlēta veicamā darbība.',
	'NO_AUTHOR'						=> 'Nav norādīts ziņas autors',
	'NO_AVATAR'						=> 'Nav atzīmēts avatar',
	'NO_AVATAR_CATEGORY'			=> 'Nav',

	'NO_AUTH_DELETE_MESSAGE'		=> 'Jūs neesat autorizējies lai dzēstu privātās ziņas.',
	'NO_AUTH_EDIT_MESSAGE'			=> 'Jūs neesat autorizējies lai labotu privātās ziņas.',
	'NO_AUTH_FORWARD_MESSAGE'		=> 'Jūs neesat autorizējies lai pārsūtītu privātās ziņas.',
	'NO_AUTH_GROUP_MESSAGE'			=> 'Jūs neesat autorizējies lai sūtītu privātās ziņas grupām.',
	'NO_AUTH_PASSWORD_REMINDER'		=> 'Jūs neesat autorizējies lai pieprasītu jaunu paroli.',
	'NO_AUTH_PROFILEINFO'			=> 'Jūs neesat autorizējies lai mainītu profila informāciju.',
	'NO_AUTH_READ_HOLD_MESSAGE'		=> 'Jūs neesat autorizējies lai lasītu atliktos privātos ziņojumus.',
	'NO_AUTH_READ_MESSAGE'			=> 'Jūs neesat autorizējies lai lasītu privātos ziņojumus.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> 'Jūs nevarat izlasīt šo ziņojumu, jo tā autors to ir dzēsis.',
	'NO_AUTH_SEND_MESSAGE'			=> 'Jūs neesat autorizējies lai sūtītu privātās ziņas.',
	'NO_AUTH_SIGNATURE'				=> 'Jūs neesat autorizējies lai labotu parakstu.',

	'NO_BCC_RECIPIENT'			=> 'Nav',
	'NO_BOOKMARKS'				=> 'Nav grāmatzīmju.',
	'NO_BOOKMARKS_SELECTED'		=> 'Jūs neesat atzīmējuši nevienu grāmatzīmi.',
	'NO_EDIT_READ_MESSAGE'		=> 'Nevar labot privāto ziņu jo tā jau ir izlasīta.',
	'NO_EMAIL_USER'				=> 'Ievadītā informācija par e-pastu/lietotāju netika atrasta.',
	'NO_FOES'					=> 'Nav neviena nedrauga',
	'NO_FRIENDS'				=> 'Nav neviena drauga',
	'NO_FRIENDS_OFFLINE'		=> 'Nav neviena drauga bezsaistē',
	'NO_FRIENDS_ONLINE'			=> 'Nav draugi tiešsaistē',
	'NO_GROUP_SELECTED'			=> 'Grupa nav izvēlēta.',
	'NO_IMPORTANT_NEWS'			=> 'Nav svarīgu paziņojumu.',
	'NO_MESSAGE'				=> 'Privātā ziņa nav atrasta.',
	'NO_NEW_FOLDER_NAME'		=> 'Jums jānorāda jauns mapes vārds.',
	'NO_NEWER_PM'				=> 'Nav jaunu ziņu.',
	'NO_OLDER_PM'				=> 'Nav vecu ziņu.',
	'NO_PASSWORD_SUPPLIED'		=> 'Jūs nevarat autorizēties bez paroles.',
	'NO_RECIPIENT'				=> 'Nav norādīts saņēmējs.',
	'NO_RULES_DEFINED'			=> 'Nav norādīts noteikums.',
	'NO_SAVED_DRAFTS'			=> 'Nav saglabātu melnrakstu.',
	'NO_TO_RECIPIENT'			=> 'Nav',
	'NO_WATCHED_FORUMS'			=> 'Jūs neesat parakstījušies ne uz vienu forumu.',
	'NO_WATCHED_SELECTED'		=> 'Jūs neesat izvēlējušies tēmas vai forumus uz kuriem esat parakstījušies.',
	'NO_WATCHED_TOPICS'			=> 'Jūs neesat parakstījušies ne uz vienu tēmu.',

	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'Parolei jābūt no %1$d līdz %2$d zīmēm garai, un jāsatur dažādu reģistru burtus un ciparus.',
	'PASS_TYPE_ANY_EXPLAIN'		=> 'Jābūt no %1$d līdz %2$d zīmēm.',
	'PASS_TYPE_CASE_EXPLAIN'	=> 'Parolei jābūt no %1$d līdz %2$d zīmēm garai, un jāsatur dažādu reģistru burtus.',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'Parolei jābūt no %1$d līdz %2$d zīmēm garai, un jāsatur dažādu reģistru burtus un ciparus un simbolus.',
	'PASSWORD'					=> 'Parole',
	'PASSWORD_ACTIVATED'		=> 'Jūsu jaunā parole ir aktivizēta.',
	'PASSWORD_UPDATED'			=> 'Jaunā parole nosūtīta uz jūsu norādīto reģistrēto e-pasta adresi.',
	'PERMISSIONS_RESTORED'		=> 'Jūsu tiesības atjaunotas.',
	'PERMISSIONS_TRANSFERRED'	=> 'Tiesību imitācija priekš <strong>%s</strong> veiksmīgi uzstādīta.<br />Atceraties, ka administratora tiesības šobrīd ir atslēgtas. Jūs varat pārtraukt tiesību imitāciju jebkurā laikā.',
	'PM_DISABLED'				=> 'Privātie ziņojumi šajā forumā ir atslēgti.',
	'PM_FROM'					=> 'No',
	'PM_FROM_REMOVED_AUTHOR'	=> 'Šī ziņa ir saņemta no lietotāja kurš vairs nav reģistrēts.',
	'PM_ICON'					=> 'PZ ikona',
	'PM_INBOX'					=> 'Ienākošās',
	'PM_MARK_ALL_READ'			=> 'Atzīmēt visas ziņas kā lasītas',
	'PM_MARK_ALL_READ_SUCCESS'	=> 'Visas privātās ziņas šajā mapē atzīmētas kā izlasītas',
	'PM_NO_USERS'				=> 'Pieprasītie lietotāji pievienošanai neeksistē.',
	'PM_OUTBOX'					=> 'Izejošās',
	'PM_SENTBOX'				=> 'Nosūtītās',
	'PM_SUBJECT'				=> 'Tēma',
	'PM_TO'						=> 'Kam',
	'PM_TOOLS'					=> 'Ziņu rīki',
	'PM_USERS_REMOVED_NO_PERMISSION'	=> 'Daži lietotāji nevar tikt pievienoti, jo ir jo viņiem privāto ziņu saņemšanas tiesību.',
	'PM_USERS_REMOVED_NO_PM'	=> 'Daži lietotāji nevar tikt pievienoti, jo ir atslēguši privāto ziņu saņemšanas iespēju.',
	'POST_EDIT_PM'				=> 'Labot ziņu',
	'POST_FORWARD_PM'			=> 'Pārsūtīt ziņu',
	'POST_NEW_PM'				=> 'Izveidot ziņu',
	'POST_PM_LOCKED'			=> 'Privātās ziņas ir slēgtas.',
	'POST_PM_POST'				=> 'Citēt rakstu',
	'POST_QUOTE_PM'				=> 'Citēt ziņu',
	'POST_REPLY_PM'				=> 'Atbildēt',
	'PRINT_PM'					=> 'Drukāšanai',
	'PREFERENCES_UPDATED'		=> 'Jūsu uzstādījumi ir atjaunoti.',
	'PROFILE_INFO_NOTICE'		=> 'Atceraties, ka šī informācija būs redzama citiem lietotājiem. Esiet uzmanīgi ar izvēlēto personisko datu publicēšanu. Ailes, kuras atzīmētas ar zvaigznīti (*) ir jāaizpilda obligāti.',
	'PROFILE_UPDATED'			=> 'Jūsu profils ir atjaunots.',
	'PROFILE_AUTOLOGIN_KEYS'	=> '"Atcerēties mani" autorizācijas atslēga automātiski veiks autorizāciju pie saites atkārtotas apmeklēšanu. Atmiņā paturētā autorizācijas atslēga strādās tikai uz datora uz kuru veicāt foruma autorizāciju.',
	'PROFILE_NO_AUTOLOGIN_KEYS'	=> 'Nav saglabātu "Atcerēties mani" autorizācijas atslēgu.',

	'RECIPIENT'							=> 'Saņēmējs',
	'RECIPIENTS'						=> 'Saņēmēji',
	'REGISTRATION'						=> 'Reģistrācija',
	'RELEASE_MESSAGES'					=> '%sPievienot visas atliktās ziņas%s… kuras tiks sašķirotas atbilstošās mapēm tiklīdz atbrīvosies vieta.',
	'REMOVE_ADDRESS'					=> 'Dzēst adresi',
	'REMOVE_SELECTED_BOOKMARKS'			=> 'Dzēst izvēlētās grāmatzīmes',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> 'Vai tiešām vēlaties dzēst visas izvēlētās grāmatzīmes?',
	'REMOVE_BOOKMARK_MARKED'			=> 'Dzēst atzīmētās grāmatzīmes',
	'REMOVE_FOLDER'						=> 'Dzēst mapi',
	'REMOVE_FOLDER_CONFIRM'				=> 'Vai tiešām vēlaties dzēst šo mapi?',
	'RENAME'							=> 'Pārdēvēt',
	'RENAME_FOLDER'						=> 'Pārdēvēt mapi',
	'REPLIED_MESSAGE'					=> 'Atbildēt uz ziņu',
	'REPLY_TO_ALL'						=> 'Atbildēt sūtītājam un saņēmējiem.',
	'REPORT_PM'							=> 'Pasūdzēties par privāto ziņu',
	'RESIGN_SELECTED'					=> 'Pamest izvēlēto',
	'RETURN_FOLDER'						=> '%1$sAtgriezties iepriekšējā mapē%2$s',
	'RETURN_UCP'						=> '%sAtgriezties lietotāja panelī%s',
	'RULE_ADDED'						=> 'Noteikums veiksmīgi pievienots.',
	'RULE_ALREADY_DEFINED'				=> 'Šāds noteikums jau ticis pievienots iepriekš.',
	'RULE_DELETED'						=> 'Noteikums veiksmīgi dzēsts.',
	'RULE_LIMIT_REACHED'				=> 'Jūs nevarat pievienot vairāk PZ noteikumus. Pārsniegts maksimālais noteikumu skaits.',
	'RULE_NOT_DEFINED'					=> 'Nekorekts noteikums.',
	'RULE_REMOVED_MESSAGES'				=> array(
		1	=> 'Privāto ziņu filtrs ir dzēsis %d privāto ziņu.',
		2	=> '%d ziņas dzēstas izmantojot privāto ziņu filtru.',
	),

	'SAME_PASSWORD_ERROR'		=> 'Jūs jaunā parole sakrīt ar pašreizējo.',
	'SEARCH_YOUR_POSTS'			=> 'Meklēt Tvaika Mākonī',
	//'SEARCH_YOUR_POSTS'			=> 'Show your posts',
	'SEND_PASSWORD'				=> 'Sūtīt paroli',
	'SENT_AT'					=> 'Nosūtīts',			// Used before dates in private messages
	'SHOW_EMAIL'				=> 'Rādīt manu e-pastu adresi',
	'SIGNATURE_EXPLAIN'			=> 'Šis teksts var tikt automātiski pievienots jūsu ziņojumiem. Maksimālais teksta garums ir %d zīmes.',
	'SIGNATURE_PREVIEW'			=> 'Jūsu paraksts ziņojumos izskatīsies šādi',
	'SIGNATURE_TOO_LONG'		=> 'Jūsu paraksts ir pārāk garš.',
	'SELECT_CURRENT_TIME'		=> 'Izvēlieties pašreizējo laiku',
	'SELECT_TIMEZONE'			=> 'Izvēlieties laika joslu',
	'SORT'						=> 'Kārtot',
	'SORT_COMMENT'				=> 'Komentāri',
	'SORT_DOWNLOADS'			=> 'Lejuplādes',
	'SORT_EXTENSION'			=> 'Paplašinājums',
	'SORT_FILENAME'				=> 'Faila nosaukums',
	'SORT_POST_TIME'			=> 'Pievienošanas laika',
	'SORT_SIZE'					=> 'Faila izmērs',

	'TIMEZONE'					=> 'Laika zona',
	'TIMEZONE_DATE_SUGGESTION'	=> 'Ieteikums: %s',
	'TIMEZONE_INVALID'			=> 'Nepareizi izvēlētā laika zona.',
	'TO'						=> 'Kam',
	'TO_MASS'					=> 'Adresāti',
	'TO_ADD'					=> 'Pievienot adresātu',
	'TO_ADD_MASS'				=> 'Pievienot adresātus',
	'TO_ADD_GROUPS'				=> 'Pievienot Grupas',
	'TOO_MANY_RECIPIENTS'		=> 'Jūs mēģinājāt nosūtīt privātos ziņojumus pārāk daudz adresātiem.',
	'TOO_MANY_REGISTERS'		=> 'Jūs esat sasnieguši reģistrācijas mēģinājumu limitu šajā sesijā. Mēģiniet vēlāk.',

	'UCP'						=> 'Lietotāja panelis',
	'UCP_ACTIVATE'				=> 'Aktivizēt kontu',
	'UCP_ADMIN_ACTIVATE'		=> 'Jums jānorāda reāla e-pasta adrese pirms aktivizācijas. Administrators pārbaudīs jūsu reģistrēto kontu un nosūtīs uz jūsu norādīto e-pasta adresi vēstuli ar aktivizācijas linku.',
	'UCP_ATTACHMENTS'			=> 'Pielikumi',
	'UCP_AUTH_LINK'				=> 'Ārējie konti',
	'UCP_AUTH_LINK_ASK'			=> 'Jūsu konts nav saistīts ar arējo pakalpojumu kontu. Noklikšķiniet uz zemāk redzamās pogas, lai sasaistītu jūsu foruma kontu ar šo ārējo pakalpojumu kontu.',
	'UCP_AUTH_LINK_ID'			=> 'Unikāls identifikators',
	'UCP_AUTH_LINK_LINK'		=> 'Saite',
	'UCP_AUTH_LINK_MANAGE'		=> 'Pārvaldīt ārējo kontu apvienības',
	'UCP_AUTH_LINK_NOT_SUPPORTED'	=> 'Patreizējais autorizācijas mehānisms neatbalsta sasaisti foruma kontam ar ārējo pakalpojuma kontu.',
	'UCP_AUTH_LINK_TITLE'		=> 'Ārējo kontu pārvalde',
	'UCP_AUTH_LINK_UNLINK'		=> 'Atsaistīt',
	'UCP_COPPA_BEFORE'			=> 'Līdz %s',
	'UCP_COPPA_ON_AFTER'		=> 'Pirms vai pēc %s',
	'UCP_EMAIL_ACTIVATE'		=> 'Jums jānorāda reāla e-pasta adrese pirms aktivizācijas. Uz jūsu norādīto e-pasta adresi tiks nosūtīta vēstule ar aktivizācijas linku.',
	'UCP_JABBER'				=> 'Jabber adrese',
	'UCP_LOGIN_LINK'			=> 'Iestatiet ārējo kontu saisti',
	'UCP_MAIN'					=> 'Pārskats',
	'UCP_MAIN_ATTACHMENTS'		=> 'Pielikumi',
	'UCP_MAIN_BOOKMARKS'		=> 'Grāmatzīmes',
	'UCP_MAIN_DRAFTS'			=> 'Melnraksti',
	'UCP_MAIN_FRONT'			=> 'Sākums',
	'UCP_MAIN_SUBSCRIBED'		=> 'Parakstīšanās',
	'UCP_NO_ATTACHMENTS'		=> 'Jums nav neviena pievienota faila.',
	'UCP_NOTIFICATION_LIST'				=> 'Pārvaldīt paziņojumus',
	'UCP_NOTIFICATION_LIST_EXPLAIN'		=> 'Vecie paziņojumi',
	'UCP_NOTIFICATION_OPTIONS'			=> 'Labot paziņojumu uzstādījumus',
	'UCP_NOTIFICATION_OPTIONS_EXPLAIN'	=> 'Šeit var iestatīt foruma paziņojuma metodes.',
	'UCP_PREFS'					=> 'Uzstādījumi',
	'UCP_PREFS_PERSONAL'		=> 'Kopējie uzstādījumi',
	'UCP_PREFS_POST'			=> 'Ziņojumu nosūtīšana',
	'UCP_PREFS_VIEW'			=> 'Izskata uzstādījumi',
	'UCP_PM'					=> 'Privātās ziņas',
	'UCP_PM_COMPOSE'			=> 'Rakstīt ziņu',
	'UCP_PM_DRAFTS'				=> 'PZ melnraksti',
	'UCP_PM_OPTIONS'			=> 'Noteikumi, mapes &amp; un uzstādījumi',
	'UCP_PM_UNREAD'				=> 'Neizlasītās ziņas',
	'UCP_PM_VIEW'				=> 'Skatīt ziņas',

	
	
	'UCP_PROFILE'				=> 'Profils',
	'UCP_PROFILE_AVATAR'		=> 'Labot Avatāru',
	'UCP_PROFILE_PROFILE_INFO'	=> 'Labot profilu',
	'UCP_PROFILE_REG_DETAILS'	=> 'Labot konta uzstādījums',
	'UCP_PROFILE_SIGNATURE'		=> 'Paraksts',
	'UCP_PROFILE_AUTOLOGIN_KEYS'=> '“Atcerēties mani” autorizācijas atslēgas',

	'UCP_USERGROUPS'			=> 'Grupas',
	'UCP_USERGROUPS_MEMBER'		=> 'Dalība grupās',
	'UCP_USERGROUPS_MANAGE'		=> 'Grupu vadība',

	'UCP_PASSWORD_RESET_DISABLED'	=> 'Paroles atiestatīšanas funkcionalitāte ir izslēgta. Ja jums ir nepieciešama palīdzība, lai piekļūtu savam kontam, lūdzu, sazinieties ar %s foruma Administratoru',
	'UCP_REGISTER_DISABLE'			=> 'Šobrīd nav iespējams izveidot jaunu lietotāja kontu.',
	'UCP_REMIND'					=> 'Nosūtīt paroli',
	'UCP_RESEND'					=> 'Nosūtīt aktivizācijas e-pastu',
	'UCP_WELCOME'					=> 'Sveicināti lietotāja panelī. Šeit Jūs varat apskatīt un veikt izmaiņas uzstādījumos, mainīt informāciju par sevi u.t.t. Tāpat, ja tas ir atļauts, jūs varat sūtīt personiskos ziņojumus (PM) citiem lietotājiem. Pirms turpināt, pārliecinaties, ka esat izlasījuši visus administrācijas paziņojumus.',
	'UCP_ZEBRA'						=> 'Draugi &amp; un nedraugi',
	'UCP_ZEBRA_FOES'				=> 'Nedraugi',
	'UCP_ZEBRA_FRIENDS'				=> 'Draugi',
	'UNDISCLOSED_RECIPIENT'			=> 'Nezināms saņēmējs',
	'UNKNOWN_FOLDER'				=> 'Nezināma mape',
	'UNWATCH_MARKED'				=> 'Atrakstīties no iezīmētā',
	'UPLOAD_AVATAR_FILE'			=> 'Augšupielādēt no datora',
	'UPLOAD_AVATAR_URL'				=> 'Augšupielādēt no URL',
	'UPLOAD_AVATAR_URL_EXPLAIN'		=> 'Ievadiet URL kur atrodas attēls. Attēls tiks pārkopēts uz šo saitu.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> 'Lietotājvārdam jābūt no %1$d līdz %2$d zīmēm, un tas drīkst saturēt tikai burtus.',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'=> 'Lietotājvārdam jābūt no %1$d līdz %2$d zīmēm, un tas drīkst saturēt tikai burtus, atstarpi vai -+_[] simbolus.',
	'USERNAME_ASCII_EXPLAIN'		=> 'Lietotājvārdam jābūt no %1$d līdz %2$d zīmēm, un tas drīkst saturēt tikai ASCII zīmes, un nevar saturēt speciālus simbolus.',
	'USERNAME_LETTER_NUM_EXPLAIN'	=> 'Lietotājvārdam jābūt no %1$d līdz %2$d zīmēm, un tas drīkst saturēt tikai burtus un ciparus.',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'=> 'Lietotājvārdam jābūt no %1$d līdz %2$d zīmēm, un tas drīkst saturēt tikai burtus un ciparus, atstarpi vai -+_[] simbolus.',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> 'Lietotājvārdam jābūt no %1$d līdz %2$d zīmēm',
	'USERNAME_TAKEN_USERNAME'		=> 'Lai tvaiks ir ar tevi, šāds lietotājs, jau eksistē. Lūdzu izvēlaties citu.',
	'USERNAME_DISALLOWED_USERNAME'	=> 'Lietotājvārds, kuru jūs ievadījāt, ir aizliegts vai satur neatļautus vārdus. Lūdzu izvēlaties citu.',
	'USER_NOT_FOUND_OR_INACTIVE'	=> 'Jūsu ievadītais lietotāja vārds nav atrasts, vai vēl nav aktivizēts.',

	'VIEW_AVATARS'				=> 'Rādīt avatarus',
	'VIEW_EDIT'					=> 'Skatīt/Labot',
	'VIEW_FLASH'				=> 'Rādīt Flash animāciju',
	'VIEW_FLASH'				=> 'Rādīt tvaiku',
	'VIEW_IMAGES'				=> 'Rādīt attēlus ziņojumos',
	'VIEW_NEXT_HISTORY'			=> 'Nākamais PZ arhīvā',
	'VIEW_NEXT_PM'				=> 'Nākamā PZ',
	'VIEW_PM'					=> 'Skatīt ziņu',
	'VIEW_PM_INFO'				=> 'Informācija',
	'VIEW_PM_MESSAGES'			=> array(
		1	=> '%d ziņa',
		2	=> '%d ziņas',
	),
	'VIEW_PREVIOUS_HISTORY'		=> 'Iepriekšējais PZ arhīvā',
	'VIEW_PREVIOUS_PM'			=> 'Iepriekšējais PM',
	'VIEW_PROFILE'				=> 'Skatīt profilu',
	'VIEW_SIGS'					=> 'Skatīt parakstus',
	'VIEW_SMILIES'				=> 'Rādīt smaidiņus',
	'VIEW_TOPICS_DAYS'			=> 'Rādīt tēmas par',
	'VIEW_TOPICS_DIR'			=> 'Tēmu kārtošanas secība',
	'VIEW_TOPICS_KEY'			=> 'Tēmu kārtošanas lauks',
	'VIEW_POSTS_DAYS'			=> 'Rādīt ziņas par',
	'VIEW_POSTS_DIR'			=> 'Ziņu kārtošanas secība',
	'VIEW_POSTS_KEY'			=> 'Ziņu kārtošanas lauks',

	'WATCHED_EXPLAIN'			=> 'Zemāk atrodas forumu un tēmu saraksts uz kuriem jūs esat parakstījušies. Jums tiks paziņots par jaunām ziņām tajos. Lai atrakstītos no jaunumu saņemšanas, izvēlieties forumu vai tēmu un nospiediet <em>Dzēst izvēlētos</em>.',
	'WATCHED_FORUMS'			=> 'Parakstītie forumi',
	'WATCHED_TOPICS'			=> 'Parakstītās tēmas',
	'WRONG_ACTIVATION'			=> 'Jūsu norādītā aktivizācijas atslēga nav atrodama datu bazē.',

	'YOUR_DETAILS'				=> 'Jūsu aktivitātes',
	'YOUR_FOES'					=> 'Jūsu nedraugi',
	'YOUR_FOES_EXPLAIN'			=> 'Lai dzēstu lietotājus no saraksta, iezīmējiet tos un nospiediet "Nosūtīt".',
	'YOUR_FRIENDS'				=> 'Jūsu draugi',
	'YOUR_FRIENDS_EXPLAIN'		=> 'Lai dzēstu lietotājus no saraksta, iezīmējiet tos un nospiediet "Nosūtīt".',
	'YOUR_WARNINGS'				=> 'Jūsu brīdinājumi',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> 'Ievietot mapē',
		'MARK_AS_READ'		=> 'Atzīmēt kā izlasītu',
		'MARK_AS_IMPORTANT'	=> 'Atzīmēt kā svarīgu',
		'DELETE_MESSAGE'	=> 'Dzēst ziņu',
	),
	'PM_CHECK' => array(
		'SUBJECT'	=> 'Tēma',
		'SENDER'	=> 'Sūtītājs',
		'MESSAGE'	=> 'Ziņa',
		'STATUS'	=> 'Ziņas statuss',
		'TO'		=> 'Saņēmējs',
	),
	'PM_RULE' => array(
		'IS_LIKE'		=> 'satur',
		'IS_NOT_LIKE'	=> 'nesatur',
		'IS'			=> 'atbilst',
		'IS_NOT'		=> 'neatbilst',
		'BEGINS_WITH'	=> 'sākas ar',
		'ENDS_WITH'		=> 'beidzas ar',
		'IS_FRIEND'		=> 'ir draugs',
		'IS_FOE'		=> 'ir nedraugs',
		'IS_USER'		=> 'ir lietotājs',
		'IS_GROUP'		=> 'ir grupā',
		'ANSWERED'		=> 'atbildētas',
		'FORWARDED'		=> 'pārsūtītas',
		'TO_GROUP'		=> 'uz manu grupu pēc noklusējuma',
		'TO_ME'			=> 'man',
	),

	'GROUPS_EXPLAIN'	=> 'Grupas dod konferences administratoram lielāku iespēju lietotāju vadīšanā. Pēc noklusējuma, jūs tiek pievienots noteiktai lietotāju grupai. Atkarībā no tā, kurā grupā jūs esat, jūs tiekat atspoguļots forumos: lietotājvārda krāsa, avatars, rangs u.t.t. Ja konferences administrācija to atļauj, jūs varat mainīt savu grupu pēc noklusējuma. Jūs varat tikt pārvietots, vai pats pievienoties citai grupai. Dalība dažās grupās var dot papildus privilēģijas forumu piekļūšanā un papildu iespējas forumos.',
	'GROUP_LEADER'		=> 'Grupas līderis',
	'GROUP_MEMBER'		=> 'Grupas biedrs',
	'GROUP_PENDING'		=> 'Kandidāts uz iestāšanos',
	'GROUP_NONMEMBER'	=> 'Nav nevienas grupas biedrs',
	'GROUP_DETAILS'		=> 'Grupas informācija',

	'NO_LEADER'		=> 'Nav grupu līderu',
	'NO_MEMBER'		=> 'Nav grupu biedru',
	'NO_PENDING'	=> 'Nav kandidātu',
	'NO_NONMEMBER'	=> 'Nav tukšu grupu',
));
