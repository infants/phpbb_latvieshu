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
	'AVATAR_FEATURES_DISABLED'		=> 'The avatar functionality is currently disabled.',
	'AVATAR_GALLERY'				=> 'Local gallery',
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'Could not upload avatar to %s.',
	'AVATAR_NOT_ALLOWED'			=> 'Your avatar cannot be displayed because avatars have been disallowed.',
	'AVATAR_PAGE'					=> 'Page',
	'AVATAR_SELECT'					=> 'Select your avatar',
	'AVATAR_TYPE'					=> 'Avatar type',
	'AVATAR_TYPE_NOT_ALLOWED'		=> 'Your current avatar cannot be displayed because its type has been disallowed.',

	'BACK_TO_DRAFTS'			=> 'Back to saved drafts',
	'BACK_TO_LOGIN'				=> 'Back to login screen',
	'BIRTHDAY'					=> 'Birthday',
	'BIRTHDAY_EXPLAIN'			=> 'Setting a year will list your age when it is your birthday.',
	'BOARD_DATE_FORMAT'			=> 'My date format',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'The syntax used is identical to the PHP <a href="http://www.php.net/date">date()</a> function.',
	'BOARD_LANGUAGE'			=> 'My language',
	'BOARD_STYLE'				=> 'My board style',
	'BOARD_TIMEZONE'			=> 'My timezone',
	'BOOKMARKS'					=> 'Bookmarks',
	'BOOKMARKS_EXPLAIN'			=> 'You can bookmark topics for future reference. Select the checkbox for any bookmark you wish to delete, then press the <em>Remove marked bookmarks</em> button.',
	'BOOKMARKS_DISABLED'		=> 'Bookmarks are disabled on this board.',
	'BOOKMARKS_REMOVED'			=> 'Bookmarks removed successfully.',

	'CANNOT_EDIT_MESSAGE_TIME'	=> 'You can no longer edit or delete that message.',
	'CANNOT_MOVE_TO_SAME_FOLDER'=> 'Messages cannot be moved to the folder you want to remove.',
	'CANNOT_MOVE_FROM_SPECIAL'	=> 'Messages cannot be moved from the outbox.',
	'CANNOT_RENAME_FOLDER'		=> 'This folder cannot be renamed.',
	'CANNOT_REMOVE_FOLDER'		=> 'This folder cannot be removed.',
	'CHANGE_DEFAULT_GROUP'		=> 'Change default group',
	'CHANGE_PASSWORD'			=> 'Change password',
	'CLICK_GOTO_FOLDER'			=> '%1$sGo to your “%3$s” folder%2$s',
	'CLICK_RETURN_FOLDER'		=> '%1$sReturn to your “%3$s” folder%2$s',
	'CONFIRMATION'				=> 'Confirmation of registration',
	'CONFIRM_CHANGES'			=> 'Confirm changes',
	'CONFIRM_EXPLAIN'			=> 'To prevent automated registrations the board requires you to enter a confirmation code. The code is displayed in the image you should see below. If you are visually impaired or cannot otherwise read this code please contact the %sBoard Administrator%s.',
	'VC_REFRESH'				=> 'Refresh confirmation code',
	'VC_REFRESH_EXPLAIN'		=> 'If you cannot read the code you can request a new one by clicking the button.',

	'CONFIRM_PASSWORD'			=> 'Confirm password',
	'CONFIRM_PASSWORD_EXPLAIN'	=> 'You only need to confirm your password if you changed it above.',
	'COPPA_BIRTHDAY'			=> 'To continue with the registration procedure please tell us when you were born.',
	'COPPA_COMPLIANCE'			=> 'COPPA compliance',
	'COPPA_EXPLAIN'				=> 'Please note that clicking submit will create your account. However it cannot be activated until a parent or guardian approves your registration. You will be emailed a copy of the necessary form with details of where to send it.',
	'CREATE_FOLDER'				=> 'Add folder…',
	'CURRENT_IMAGE'				=> 'Current image',
	'CURRENT_PASSWORD'			=> 'Current password',
	'CURRENT_PASSWORD_EXPLAIN'	=> 'You must enter your current password if you wish to alter your email address or username.',
	'CURRENT_CHANGE_PASSWORD_EXPLAIN' => 'To change your password, your email address, or your username, you must enter your current password.',
	'CUR_PASSWORD_EMPTY'		=> 'You did not enter your current password.',
	'CUR_PASSWORD_ERROR'		=> 'The current password you entered is incorrect.',
	'CUSTOM_DATEFORMAT'			=> 'Custom…',

	'DEFAULT_ACTION'			=> 'Default action',
	'DEFAULT_ACTION_EXPLAIN'	=> 'This action will be triggered if none of the above is applicable.',
	'DEFAULT_ADD_SIG'			=> 'Attach my signature by default',
	'DEFAULT_BBCODE'			=> 'Enable BBCode by default',
	'DEFAULT_NOTIFY'			=> 'Notify me upon replies by default',
	'DEFAULT_SMILIES'			=> 'Enable smilies by default',
	'DEFINED_RULES'				=> 'Defined rules',
	'DELETED_TOPIC'				=> 'Topic has been removed.',
	'DELETE_ATTACHMENT'			=> 'Delete attachment',
	'DELETE_ATTACHMENTS'		=> 'Delete attachments',
	'DELETE_ATTACHMENT_CONFIRM'	=> 'Are you sure you want to delete this attachment?',
	'DELETE_ATTACHMENTS_CONFIRM'=> 'Are you sure you want to delete these attachments?',
	'DELETE_AVATAR'				=> 'Delete image',
	'DELETE_COOKIES_CONFIRM'	=> 'Are you sure you want to delete all cookies set by this board?',
	'DELETE_MARKED_PM'			=> 'Delete marked messages',
	'DELETE_MARKED_PM_CONFIRM'	=> 'Are you sure you want to delete all marked messages?',
	'DELETE_OLDEST_MESSAGES'	=> 'Delete oldest messages',
	'DELETE_MESSAGE'			=> 'Delete message',
	'DELETE_MESSAGE_CONFIRM'	=> 'Are you sure you want to delete this private message?',
	'DELETE_MESSAGES_IN_FOLDER'	=> 'Delete all messages within removed folder',
	'DELETE_RULE'				=> 'Delete rule',
	'DELETE_RULE_CONFIRM'		=> 'Are you sure you want to delete this rule?',
	'DEMOTE_SELECTED'			=> 'Demote selected',
	'DISABLE_CENSORS'			=> 'Enable word censoring',
	'DISPLAY_GALLERY'			=> 'Display gallery',
	'DOMAIN_NO_MX_RECORD_EMAIL'	=> 'The entered email domain has no valid MX record.',
	'DOWNLOADS'					=> 'Downloads',
	'DRAFTS_DELETED'			=> 'All selected drafts were successfully deleted.',
	'DRAFTS_EXPLAIN'			=> 'Here you can view, edit and delete your saved drafts.',
	'DRAFT_UPDATED'				=> 'Draft successfully updated.',

	'EDIT_DRAFT_EXPLAIN'		=> 'Here you are able to edit your draft. Drafts do not contain attachment and poll information.',
	'EMAIL_BANNED_EMAIL'		=> 'The email address you entered is not allowed to be used.',
	'EMAIL_REMIND'				=> 'This must be the email address associated with your account. If you have not changed this via your user control panel then it is the email address you registered your account with.',
	'EMAIL_TAKEN_EMAIL'			=> 'The entered email address is already in use.',
	'EMPTY_DRAFT'				=> 'You must enter a message to submit your changes.',
	'EMPTY_DRAFT_TITLE'			=> 'You must enter a draft title.',
	'EXPORT_AS_XML'				=> 'Export as XML',
	'EXPORT_AS_CSV'				=> 'Export as CSV',
	'EXPORT_AS_CSV_EXCEL'		=> 'Export as CSV (Excel)',
	'EXPORT_AS_TXT'				=> 'Export as TXT',
	'EXPORT_AS_MSG'				=> 'Export as MSG',
	'EXPORT_FOLDER'				=> 'Export this view',

	'FIELD_REQUIRED'					=> 'The field “%s” must be completed.',
	'FIELD_TOO_SHORT'					=> array(
		1	=> 'The field “%2$s” is too short, a minimum of %1$d character is required.',
		2	=> 'The field “%2$s” is too short, a minimum of %1$d characters is required.',
	),
	'FIELD_TOO_LONG'					=> array(
		1	=> 'The field “%2$s” is too long, a maximum of %1$d character is allowed.',
		2	=> 'The field “%2$s” is too long, a maximum of %1$d characters is allowed.',
	),
	'FIELD_TOO_SMALL'					=> 'The value of “%2$s” is too small, a minimum value of %1$d is required.',
	'FIELD_TOO_LARGE'					=> 'The value of “%2$s” is too large, a maximum value of %1$d is allowed.',
	'FIELD_INVALID_CHARS_INVALID'		=> 'The field “%s” has invalid characters.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'The field “%s” has invalid characters, only numbers are allowed.',
	'FIELD_INVALID_CHARS_ALPHA_DOTS'	=> 'The field “%s” has invalid characters, only alphanumeric or . characters are allowed.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> 'The field “%s” has invalid characters, only alphanumeric characters are allowed.',
	'FIELD_INVALID_CHARS_ALPHA_PUNCTUATION'	=> 'The field “%s” has invalid characters, only alphanumeric or _,-. characters are allowed and the first character must be alphabetic.',
	'FIELD_INVALID_CHARS_ALPHA_SPACERS'	=> 'The field “%s” has invalid characters, only alphanumeric, space or -+_[] characters are allowed.',
	'FIELD_INVALID_CHARS_ALPHA_UNDERSCORE'	=> 'The field “%s” has invalid characters, only alphanumeric or _ characters are allowed.',
	'FIELD_INVALID_CHARS_LETTER_NUM_DOTS'	=> 'The field “%s” has invalid characters, only letter, number or . characters are allowed.',
	'FIELD_INVALID_CHARS_LETTER_NUM_ONLY'	=> 'The field “%s” has invalid characters, only letter and number characters are allowed.',
	'FIELD_INVALID_CHARS_LETTER_NUM_PUNCTUATION'	=> 'The field “%s” has invalid characters, only letter, number or _,-. characters are allowed and the first character must be alphabetic.',
	'FIELD_INVALID_CHARS_LETTER_NUM_SPACERS'		=> 'The field “%s” has invalid characters, only letter, number, space or -+_[] characters are allowed.',
	'FIELD_INVALID_CHARS_LETTER_NUM_UNDERSCORE'		=> 'The field “%s” has invalid characters, only letter, number or _ characters are allowed.',
	'FIELD_INVALID_DATE'				=> 'The field “%s” has an invalid date.',
	'FIELD_INVALID_URL'					=> 'The field “%s” has an invalid url.',
	'FIELD_INVALID_VALUE'				=> 'The field “%s” has an invalid value.',

	'FOE_MESSAGE'				=> 'Message from foe',
	'FOES_EXPLAIN'				=> 'Foes are users which will be ignored by default. Posts by these users will not be fully visible. Personal messages from foes are still permitted. Please note that you cannot ignore moderators or administrators.',
	'FOES_UPDATED'				=> 'Your foes list has been updated successfully.',
	'FOLDER_ADDED'				=> 'Folder successfully added.',
	'FOLDER_MESSAGE_STATUS'		=> array(
		1	=> '%2$d out of %1$s stored',
		2	=> '%2$d out of %1$s stored',
	),
	'FOLDER_NAME_EMPTY'			=> 'You must enter a name for this folder.',
	'FOLDER_NAME_EXIST'			=> 'Folder <strong>%s</strong> already exists.',
	'FOLDER_OPTIONS'			=> 'Folder options',
	'FOLDER_RENAMED'			=> 'Folder successfully renamed.',
	'FOLDER_REMOVED'			=> 'Folder successfully removed.',
	'FOLDER_STATUS_MSG'			=> array(
		1	=> 'Folder is %3$d%% full (%2$d out of %1$s stored)',
		2	=> 'Folder is %3$d%% full (%2$d out of %1$s stored)',
	),
	'FORWARD_PM'				=> 'Forward PM',
	'FORCE_PASSWORD_EXPLAIN'	=> 'Before you may continue browsing the board you are required to change your password.',
	'FRIEND_MESSAGE'			=> 'Message from friend',
	'FRIENDS'					=> 'Friends',
	'FRIENDS_EXPLAIN'			=> 'Friends enable you quick access to members you communicate with frequently. If the template has relevant support any posts made by a friend may be highlighted.',
	'FRIENDS_OFFLINE'			=> 'Offline',
	'FRIENDS_ONLINE'			=> 'Online',
	'FRIENDS_UPDATED'			=> 'Your friends list has been updated successfully.',
	'FULL_FOLDER_OPTION_CHANGED'=> 'The action to take when a folder is full has been changed successfully.',
	'FWD_ORIGINAL_MESSAGE'		=> '-------- Original Message --------',
	'FWD_SUBJECT'				=> 'Subject: %s',
	'FWD_DATE'					=> 'Date: %s',
	'FWD_FROM'					=> 'From: %s',
	'FWD_TO'					=> 'To: %s',

	'GLOBAL_ANNOUNCEMENT'		=> 'Global announcement',

	'GRAVATAR_AVATAR_EMAIL'			=> 'Gravatar email',
	'GRAVATAR_AVATAR_EMAIL_EXPLAIN'	=> 'Enter the email address you used for registering your account on <a href="http://www.gravatar.com/">Gravatar</a>.',
	'GRAVATAR_AVATAR_SIZE'			=> 'Avatar dimensions',
	'GRAVATAR_AVATAR_SIZE_EXPLAIN'	=> 'Specify the width and height of the avatar, leave blank to attempt automatic verification.',

	'HIDE_ONLINE'				=> 'Hide my online status',
	'HIDE_ONLINE_EXPLAIN'		=> 'Changing this setting won’t become effective until your next visit to the board.',
	'HOLD_NEW_MESSAGES'			=> 'Do not accept new messages (New messages will be held back until enough space is available)',
	'HOLD_NEW_MESSAGES_SHORT'	=> 'New messages will be held back',

	'IF_FOLDER_FULL'			=> 'If folder is full',
	'IMPORTANT_NEWS'			=> 'Important announcements',
	'INVALID_USER_BIRTHDAY'			=> 'The entered birthday is not a valid date.',
	'INVALID_CHARS_USERNAME'	=> 'The username contains forbidden characters.',
	'INVALID_CHARS_NEW_PASSWORD'=> 'The password does not contain the required characters.',
	'ITEMS_REQUIRED'			=> 'The items marked with * are required profile fields and need to be filled out.',

	'JOIN_SELECTED'				=> 'Join selected',

	'LANGUAGE'					=> 'Language',
	'LINK_REMOTE_AVATAR'		=> 'Link off-site',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> 'Enter the URL of the location containing the avatar image you wish to link to.',
	'LINK_REMOTE_SIZE'			=> 'Avatar dimensions',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> 'Specify the width and height of the avatar, leave blank to attempt automatic verification.',
	'LOGIN_EXPLAIN_UCP'			=> 'Please login in order to access the User Control Panel.',
	'LOGIN_LINK'					=> 'Link or register your account on an external service with your board account',
	'LOGIN_LINK_EXPLAIN'			=> 'You have attempted to login with an external service that is not yet connected to an account on this board. You must now either link this account to an existing account or create a new account.',
	'LOGIN_LINK_MISSING_DATA'		=> 'Data that is necessary to link your account with an external service is not available. Please restart the login process.',
	'LOGIN_LINK_NO_DATA_PROVIDED'	=> 'No data has been provided to this page to link an external account to a forum account. Please contact the board administrator if you continue to experience problems.',
	'LOGIN_KEY'					=> 'Login Key',
	'LOGIN_TIME'				=> 'Login Time',
	'LOGIN_REDIRECT'			=> 'You have been successfully logged in.',
	'LOGOUT_FAILED'				=> 'You were not logged out, as the request did not match your session. Please contact the board administrator if you continue to experience problems.',
	'LOGOUT_REDIRECT'			=> 'You have been successfully logged out.',

	'MARK_IMPORTANT'				=> 'Mark/Unmark as important',
	'MARKED_MESSAGE'				=> 'Marked message',
	'MAX_FOLDER_REACHED'			=> 'Maximum number of allowed user defined folders reached.',
	'MESSAGE_BY_AUTHOR'				=> 'by',
	'MESSAGE_COLOURS'				=> 'Message colours',
	'MESSAGE_DELETED'				=> 'Message successfully deleted.',
	'MESSAGE_EDITED'				=> 'Message successfully edited.',
	'MESSAGE_HISTORY'				=> 'Message history',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'This message was deleted by its author.',
	'MESSAGE_SENT_ON'				=> 'on',
	'MESSAGE_STORED'				=> 'This message has been sent successfully.',
	'MESSAGE_TO'					=> 'To',
	'MESSAGES_DELETED'				=> 'Messages successfully deleted',
	'MOVE_DELETED_MESSAGES_TO'		=> 'Move messages from removed folder to',
	'MOVE_DOWN'						=> 'Move down',
	'MOVE_MARKED_TO_FOLDER'			=> 'Move marked to %s',
	'MOVE_PM_ERROR'					=> array(
		1	=> 'An error occurred while moving the messages to the new folder, only %2$d out of %1$s was moved.',
		2	=> 'An error occurred while moving the messages to the new folder, only %2$d out of %1$s were moved.',
	),
	'MOVE_TO_FOLDER'				=> 'Move to folder',
	'MOVE_UP'						=> 'Move up',

	'NEW_FOLDER_NAME'				=> 'New folder name',
	'NEW_PASSWORD'					=> 'New password',
	'NEW_PASSWORD_CONFIRM_EMPTY'	=> 'You did not enter a confirm password.',
	'NEW_PASSWORD_ERROR'			=> 'The passwords you entered do not match.',

	'NOTIFICATIONS_MARK_ALL_READ'						=> 'Mark all notifications read',
	'NOTIFICATIONS_MARK_ALL_READ_CONFIRM'				=> 'Are you sure you want to mark all notifications read?',
	'NOTIFICATIONS_MARK_ALL_READ_SUCCESS'				=> 'All notifications have been marked read.',
	'NOTIFICATION_GROUP_MISCELLANEOUS'					=> 'Miscellaneous Notifications',
	'NOTIFICATION_GROUP_MODERATION'						=> 'Moderation Notifications',
	'NOTIFICATION_GROUP_ADMINISTRATION'					=> 'Administration Notifications',
	'NOTIFICATION_GROUP_POSTING'						=> 'Posting Notifications',
	'NOTIFICATION_METHOD_EMAIL'							=> 'Email',
	'NOTIFICATION_METHOD_JABBER'						=> 'Jabber',
	'NOTIFICATION_TYPE'									=> 'Notification type',
	'NOTIFICATION_TYPE_BOOKMARK'						=> 'Someone replies to a topic you have bookmarked',
	'NOTIFICATION_TYPE_GROUP_REQUEST'					=> 'Someone requests to join a group you lead',
	'NOTIFICATION_TYPE_IN_MODERATION_QUEUE'				=> 'A post or topic needs approval',
	'NOTIFICATION_TYPE_MODERATION_QUEUE'				=> 'Your topics/posts are approved or disapproved by a moderator',
	'NOTIFICATION_TYPE_PM'								=> 'Someone sends you a private message',
	'NOTIFICATION_TYPE_POST'							=> 'Someone replies to a topic to which you are subscribed',
	'NOTIFICATION_TYPE_QUOTE'							=> 'Someone quotes you in a post',
	'NOTIFICATION_TYPE_REPORT'							=> 'Someone reports a post',
	'NOTIFICATION_TYPE_TOPIC'							=> 'Someone creates a topic in a forum to which you are subscribed',
	'NOTIFICATION_TYPE_ADMIN_ACTIVATE_USER'				=> 'Newly registered user requiring activation',

	'NOTIFY_METHOD'					=> 'Notification method',
	'NOTIFY_METHOD_BOTH'			=> 'Both',
	'NOTIFY_METHOD_EMAIL'			=> 'Email only',
	'NOTIFY_METHOD_EXPLAIN'			=> 'Method for sending messages sent via this board.',
	'NOTIFY_METHOD_IM'				=> 'Jabber only',
	'NOTIFY_ON_PM'					=> 'Notify me on new private messages',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'You cannot add the anonymous user to your friends list.',
	'NOT_ADDED_FRIENDS_BOTS'		=> 'You cannot add bots to your friends list.',
	'NOT_ADDED_FRIENDS_FOES'		=> 'You cannot add users to your friends list who are on your foes list.',
	'NOT_ADDED_FRIENDS_SELF'		=> 'You cannot add yourself to the friends list.',
	'NOT_ADDED_FOES_MOD_ADMIN'		=> 'You cannot add administrators and moderators to your foes list.',
	'NOT_ADDED_FOES_ANONYMOUS'		=> 'You cannot add the anonymous user to your foes list.',
	'NOT_ADDED_FOES_BOTS'			=> 'You cannot add bots to your foes list.',
	'NOT_ADDED_FOES_FRIENDS'		=> 'You cannot add users to your foes list who are on your friends list.',
	'NOT_ADDED_FOES_SELF'			=> 'You cannot add yourself to the foes list.',
	'NOT_AGREE'						=> 'I do not agree to these terms',
	'NOT_ENOUGH_SPACE_FOLDER'		=> 'The destination folder “%s” seems to be full. The requested action has not been taken.',
	'NOT_MOVED_MESSAGES'			=> array(
		1	=> 'You have %d private message currently on hold because of full folder.',
		2	=> 'You have %d private messages currently on hold because of full folder.',
	),
	'NO_ACTION_MODE'				=> 'No message action specified.',
	'NO_AUTHOR'						=> 'No author defined for this message',
	'NO_AVATAR'						=> 'No avatar selected',
	'NO_AVATAR_CATEGORY'			=> 'None',

	'NO_AUTH_DELETE_MESSAGE'		=> 'You are not authorised to delete private messages.',
	'NO_AUTH_EDIT_MESSAGE'			=> 'You are not authorised to edit private messages.',
	'NO_AUTH_FORWARD_MESSAGE'		=> 'You are not authorised to forward private messages.',
	'NO_AUTH_GROUP_MESSAGE'			=> 'You are not authorised to send private messages to groups.',
	'NO_AUTH_PASSWORD_REMINDER'		=> 'You are not authorised to request a new password.',
	'NO_AUTH_PROFILEINFO'			=> 'You are not authorised to change your profile information.',
	'NO_AUTH_READ_HOLD_MESSAGE'		=> 'You are not authorised to read private messages that are on hold.',
	'NO_AUTH_READ_MESSAGE'			=> 'You are not authorised to read private messages.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> 'You are not able to read this message because it was removed by the author.',
	'NO_AUTH_SEND_MESSAGE'			=> 'You are not authorised to send private messages.',
	'NO_AUTH_SIGNATURE'				=> 'You are not authorised to define a signature.',

	'NO_BCC_RECIPIENT'			=> 'None',
	'NO_BOOKMARKS'				=> 'You have no bookmarks.',
	'NO_BOOKMARKS_SELECTED'		=> 'You have selected no bookmarks.',
	'NO_EDIT_READ_MESSAGE'		=> 'Private message cannot be edited because it has already been read.',
	'NO_EMAIL_USER'				=> 'The email/username information submitted could not be found.',
	'NO_FOES'					=> 'No foes currently defined',
	'NO_FRIENDS'				=> 'No friends currently defined',
	'NO_FRIENDS_OFFLINE'		=> 'No friends offline',
	'NO_FRIENDS_ONLINE'			=> 'No friends online',
	'NO_GROUP_SELECTED'			=> 'No group specified.',
	'NO_IMPORTANT_NEWS'			=> 'No important announcements present.',
	'NO_MESSAGE'				=> 'Private message could not be found.',
	'NO_NEW_FOLDER_NAME'		=> 'You have to specify a new folder name.',
	'NO_NEWER_PM'				=> 'No newer messages.',
	'NO_OLDER_PM'				=> 'No older messages.',
	'NO_PASSWORD_SUPPLIED'		=> 'You cannot login without a password.',
	'NO_RECIPIENT'				=> 'No recipient defined.',
	'NO_RULES_DEFINED'			=> 'No rules defined.',
	'NO_SAVED_DRAFTS'			=> 'No drafts saved.',
	'NO_TO_RECIPIENT'			=> 'None',
	'NO_WATCHED_FORUMS'			=> 'You are not subscribed to any forums.',
	'NO_WATCHED_SELECTED'		=> 'You have not selected any subscribed topics or forums.',
	'NO_WATCHED_TOPICS'			=> 'You are not subscribed to any topics.',

	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'Password must be between %1$s and %2$s long, must contain letters in mixed case and must contain numbers.',
	'PASS_TYPE_ANY_EXPLAIN'		=> 'Must be between %1$s and %2$s.',
	'PASS_TYPE_CASE_EXPLAIN'	=> 'Password must be between %1$s and %2$s long and must contain letters in mixed case.',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'Password must be between %1$s and %2$s long, must contain letters in mixed case, must contain numbers and must contain symbols.',
	'PASSWORD'					=> 'Password',
	'PASSWORD_ACTIVATED'		=> 'Your new password has been activated.',
	'PASSWORD_UPDATED'			=> 'A new password was sent to your registered email address.',
	'PERMISSIONS_RESTORED'		=> 'Successfully restored original permissions.',
	'PERMISSIONS_TRANSFERRED'	=> 'Successfully transferred permissions from <strong>%s</strong>, you are now able to browse the board with this user’s permissions.<br />Please note that admin permissions were not transferred. You are able to revert to your permission set at any time.',
	'PM_DISABLED'				=> 'Private messaging has been disabled on this board.',
	'PM_FROM'					=> 'From',
	'PM_FROM_REMOVED_AUTHOR'	=> 'This message was sent by a user no longer registered.',
	'PM_ICON'					=> 'PM icon',
	'PM_INBOX'					=> 'Inbox',
	'PM_MARK_ALL_READ'			=> 'Mark all messages read',
	'PM_MARK_ALL_READ_SUCCESS'	=> 'All private messages in this folder have been marked read',
	'PM_NO_USERS'				=> 'The requested users to be added do not exist.',
	'PM_OUTBOX'					=> 'Outbox',
	'PM_SENTBOX'				=> 'Sent messages',
	'PM_SUBJECT'				=> 'Message subject',
	'PM_TO'						=> 'Send to',
	'PM_TOOLS'					=> 'Message tools',
	'PM_USERS_REMOVED_NO_PERMISSION'	=> 'Some users couldn’t be added as they do not have permission to read private messages.',
	'PM_USERS_REMOVED_NO_PM'	=> 'Some users couldn’t be added as they have disabled private message receipt.',
	'POST_EDIT_PM'				=> 'Edit message',
	'POST_FORWARD_PM'			=> 'Forward message',
	'POST_NEW_PM'				=> 'Compose message',
	'POST_PM_LOCKED'			=> 'Private messaging is locked.',
	'POST_PM_POST'				=> 'Quote post',
	'POST_QUOTE_PM'				=> 'Quote message',
	'POST_REPLY_PM'				=> 'Reply to message',
	'PRINT_PM'					=> 'Print view',
	'PREFERENCES_UPDATED'		=> 'Your preferences have been updated.',
	'PROFILE_INFO_NOTICE'		=> 'Please note that this information may be viewable to other members. Be careful when including any personal details. Any fields marked with a * must be completed.',
	'PROFILE_UPDATED'			=> 'Your profile has been updated.',
	'PROFILE_AUTOLOGIN_KEYS'	=> 'The "Remember Me" login keys automatically log you in when you visit the board. If you logout, the remember me login key is deleted only on the computer you are using to logout. Here you can see remember login keys created on other computers you used to access this site.',
	'PROFILE_NO_AUTOLOGIN_KEYS'	=> 'There are no saved "Remember Me" login keys.',

	'RECIPIENT'							=> 'Recipient',
	'RECIPIENTS'						=> 'Recipients',
	'REGISTRATION'						=> 'Registration',
	'RELEASE_MESSAGES'					=> '%sRelease all on-hold messages%s… they will be re-sorted into the appropriate folder if enough space is made available.',
	'REMOVE_ADDRESS'					=> 'Remove address',
	'REMOVE_SELECTED_BOOKMARKS'			=> 'Remove selected bookmarks',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> 'Are you sure you want to delete all selected bookmarks?',
	'REMOVE_BOOKMARK_MARKED'			=> 'Remove marked bookmarks',
	'REMOVE_FOLDER'						=> 'Remove folder',
	'REMOVE_FOLDER_CONFIRM'				=> 'Are you sure you want to remove this folder?',
	'RENAME'							=> 'Rename',
	'RENAME_FOLDER'						=> 'Rename folder',
	'REPLIED_MESSAGE'					=> 'Replied to message',
	'REPLY_TO_ALL'						=> 'Reply to sender and all recipients.',
	'REPORT_PM'							=> 'Report private message',
	'RESIGN_SELECTED'					=> 'Resign selected',
	'RETURN_FOLDER'						=> '%1$sReturn to previous folder%2$s',
	'RETURN_UCP'						=> '%sReturn to the User Control Panel%s',
	'RULE_ADDED'						=> 'Rule successfully added.',
	'RULE_ALREADY_DEFINED'				=> 'This rule was defined previously.',
	'RULE_DELETED'						=> 'Rule successfully removed.',
	'RULE_LIMIT_REACHED'				=> 'You cannot add more PM rules. You have reached the maximum number of rules.',
	'RULE_NOT_DEFINED'					=> 'Rule not correctly specified.',
	'RULE_REMOVED_MESSAGES'				=> array(
		1	=> '%d private message was removed due to private message filters.',
		2	=> '%d private messages were removed due to private message filters.',
	),

	'SAME_PASSWORD_ERROR'		=> 'The new password you entered is the same as your current password.',
	'SEARCH_YOUR_POSTS'			=> 'Show your posts',
	'SEND_PASSWORD'				=> 'Send password',
	'SENT_AT'					=> 'Sent',			// Used before dates in private messages
	'SHOW_EMAIL'				=> 'Users can contact me by email',
	'SIGNATURE_EXPLAIN'			=> 'This is a block of text that can be added to posts you make. There is a %d character limit.',
	'SIGNATURE_PREVIEW'			=> 'Your signature will appear like this in posts',
	'SIGNATURE_TOO_LONG'		=> 'Your signature is too long.',
	'SELECT_CURRENT_TIME'		=> 'Select current time',
	'SELECT_TIMEZONE'			=> 'Select timezone',
	'SORT'						=> 'Sort',
	'SORT_COMMENT'				=> 'File comment',
	'SORT_DOWNLOADS'			=> 'Downloads',
	'SORT_EXTENSION'			=> 'Extension',
	'SORT_FILENAME'				=> 'Filename',
	'SORT_POST_TIME'			=> 'Post time',
	'SORT_SIZE'					=> 'File size',

	'TIMEZONE'					=> 'Timezone',
	'TIMEZONE_DATE_SUGGESTION'	=> 'Suggestion: %s',
	'TIMEZONE_INVALID'			=> 'The timezone you selected is invalid.',
	'TO'						=> 'Recipient',
	'TO_MASS'					=> 'Recipients',
	'TO_ADD'					=> 'Add recipient',
	'TO_ADD_MASS'				=> 'Add recipients',
	'TO_ADD_GROUPS'				=> 'Add groups',
	'TOO_MANY_RECIPIENTS'		=> 'You tried to send a private message to too many recipients.',
	'TOO_MANY_REGISTERS'		=> 'You have exceeded the maximum number of registration attempts for this session. Please try again later.',

	'UCP'						=> 'User Control Panel',
	'UCP_ACTIVATE'				=> 'Activate account',
	'UCP_ADMIN_ACTIVATE'		=> 'Please note that you will need to enter a valid email address before your account is activated. The administrator will review your account and if approved you will receive an email at the address you specified.',
	'UCP_ATTACHMENTS'			=> 'Attachments',
	'UCP_AUTH_LINK'				=> 'External accounts',
	'UCP_AUTH_LINK_ASK'			=> 'You currently have no account associated with this external service. Click the button below to link your board account to an account with this external service.',
	'UCP_AUTH_LINK_ID'			=> 'Unique identifier',
	'UCP_AUTH_LINK_LINK'		=> 'Link',
	'UCP_AUTH_LINK_MANAGE'		=> 'Manage external account associations',
	'UCP_AUTH_LINK_NOT_SUPPORTED'	=> 'Linking board accounts to external services is not supported by this board’s current authentication method.',
	'UCP_AUTH_LINK_TITLE'		=> 'Manage your external account associations',
	'UCP_AUTH_LINK_UNLINK'		=> 'Unlink',
	'UCP_COPPA_BEFORE'			=> 'Before %s',
	'UCP_COPPA_ON_AFTER'		=> 'On or after %s',
	'UCP_EMAIL_ACTIVATE'		=> 'Please note that you will need to enter a valid email address before your account is activated. You will receive an email at the address you provide that contains an account activation link.',
	'UCP_JABBER'				=> 'Jabber address',
	'UCP_LOGIN_LINK'			=> 'Set up an external account association',

	'UCP_MAIN'					=> 'Overview',
	'UCP_MAIN_ATTACHMENTS'		=> 'Manage attachments',
	'UCP_MAIN_BOOKMARKS'		=> 'Manage bookmarks',
	'UCP_MAIN_DRAFTS'			=> 'Manage drafts',
	'UCP_MAIN_FRONT'			=> 'Front page',
	'UCP_MAIN_SUBSCRIBED'		=> 'Manage subscriptions',

	'UCP_NO_ATTACHMENTS'		=> 'You have posted no files.',

	'UCP_NOTIFICATION_LIST'				=> 'Manage notifications',
	'UCP_NOTIFICATION_LIST_EXPLAIN'		=> 'Here you may view all past notifications.',
	'UCP_NOTIFICATION_OPTIONS'			=> 'Edit notification options',
	'UCP_NOTIFICATION_OPTIONS_EXPLAIN'	=> 'Here you can set your preferred notification methods for the board.',

	'UCP_PREFS'					=> 'Board preferences',
	'UCP_PREFS_PERSONAL'		=> 'Edit global settings',
	'UCP_PREFS_POST'			=> 'Edit posting defaults',
	'UCP_PREFS_VIEW'			=> 'Edit display options',

	'UCP_PM'					=> 'Private messages',
	'UCP_PM_COMPOSE'			=> 'Compose message',
	'UCP_PM_DRAFTS'				=> 'Manage PM drafts',
	'UCP_PM_OPTIONS'			=> 'Rules, folders &amp; settings',
	'UCP_PM_UNREAD'				=> 'Unread messages',
	'UCP_PM_VIEW'				=> 'View messages',

	'UCP_PROFILE'				=> 'Profile',
	'UCP_PROFILE_AVATAR'		=> 'Edit avatar',
	'UCP_PROFILE_PROFILE_INFO'	=> 'Edit profile',
	'UCP_PROFILE_REG_DETAILS'	=> 'Edit account settings',
	'UCP_PROFILE_SIGNATURE'		=> 'Edit signature',
	'UCP_PROFILE_AUTOLOGIN_KEYS'=> 'Manage “Remember Me” login keys',

	'UCP_USERGROUPS'			=> 'Usergroups',
	'UCP_USERGROUPS_MEMBER'		=> 'Edit memberships',
	'UCP_USERGROUPS_MANAGE'		=> 'Manage groups',

	'UCP_PASSWORD_RESET_DISABLED'	=> 'The password reset functionality has been disabled. If you need help accessing your account, please contact the %sBoard Administrator%s',
	'UCP_REGISTER_DISABLE'			=> 'Creating a new account is currently not possible.',
	'UCP_REMIND'					=> 'Send password',
	'UCP_RESEND'					=> 'Send activation email',
	'UCP_WELCOME'					=> 'Welcome to the User Control Panel. From here you can monitor, view and update your profile, preferences, subscribed forums and topics. You can also send messages to other users (if permitted). Please ensure you read any announcements before continuing.',
	'UCP_ZEBRA'						=> 'Friends &amp; Foes',
	'UCP_ZEBRA_FOES'				=> 'Manage foes',
	'UCP_ZEBRA_FRIENDS'				=> 'Manage friends',
	'UNDISCLOSED_RECIPIENT'			=> 'Undisclosed Recipient',
	'UNKNOWN_FOLDER'				=> 'Unknown folder',
	'UNWATCH_MARKED'				=> 'Unwatch marked',
	'UPLOAD_AVATAR_FILE'			=> 'Upload from your machine',
	'UPLOAD_AVATAR_URL'				=> 'Upload from a URL',
	'UPLOAD_AVATAR_URL_EXPLAIN'		=> 'Enter the URL of the location containing the image. The image will be copied to this site.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> 'Username must be between %1$s and %2$s long and use only alphanumeric characters.',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'=> 'Username must be between %1$s and %2$s long and use alphanumeric, space or -+_[] characters.',
	'USERNAME_ASCII_EXPLAIN'		=> 'Username must be between %1$s and %2$s long and use only ASCII characters, so no special symbols.',
	'USERNAME_LETTER_NUM_EXPLAIN'	=> 'Username must be between %1$s and %2$s long and use only letter or number characters.',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'=> 'Username must be between %1$s and %2$s long and use letter, number, space or -+_[] characters.',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> 'Length must be between %1$s and %2$s.',
	'USERNAME_TAKEN_USERNAME'		=> 'The username you entered is already in use, please select an alternative.',
	'USERNAME_DISALLOWED_USERNAME'	=> 'The username you entered has been disallowed or contains a disallowed word. Please choose a different name.',
	'USER_NOT_FOUND_OR_INACTIVE'	=> 'The usernames you specified could either not be found or are not activated users.',

	'VIEW_AVATARS'				=> 'Display avatars',
	'VIEW_EDIT'					=> 'View/Edit',
	'VIEW_FLASH'				=> 'Display Flash animations',
	'VIEW_IMAGES'				=> 'Display images within posts',
	'VIEW_NEXT_HISTORY'			=> 'Next PM in history',
	'VIEW_NEXT_PM'				=> 'Next PM',
	'VIEW_PM'					=> 'View message',
	'VIEW_PM_INFO'				=> 'Message details',
	'VIEW_PM_MESSAGES'			=> array(
		1	=> '%d message',
		2	=> '%d messages',
	),
	'VIEW_PREVIOUS_HISTORY'		=> 'Previous PM in history',
	'VIEW_PREVIOUS_PM'			=> 'Previous PM',
	'VIEW_PROFILE'				=> 'View profile',
	'VIEW_SIGS'					=> 'Display signatures',
	'VIEW_SMILIES'				=> 'Display smilies as images',
	'VIEW_TOPICS_DAYS'			=> 'Display topics from previous days',
	'VIEW_TOPICS_DIR'			=> 'Display topic order direction',
	'VIEW_TOPICS_KEY'			=> 'Display topics ordering by',
	'VIEW_POSTS_DAYS'			=> 'Display posts from previous days',
	'VIEW_POSTS_DIR'			=> 'Display post order direction',
	'VIEW_POSTS_KEY'			=> 'Display posts ordering by',

	'WATCHED_EXPLAIN'			=> 'Below is a list of forums and topics you are subscribed to. You will be notified of new posts in either. To unsubscribe mark the forum or topic and then press the <em>Unwatch marked</em> button.',
	'WATCHED_FORUMS'			=> 'Watched forums',
	'WATCHED_TOPICS'			=> 'Watched topics',
	'WRONG_ACTIVATION'			=> 'The activation key you supplied does not match any in the database.',

	'YOUR_DETAILS'				=> 'Your activity',
	'YOUR_FOES'					=> 'Your foes',
	'YOUR_FOES_EXPLAIN'			=> 'To remove usernames select them and click submit.',
	'YOUR_FRIENDS'				=> 'Your friends',
	'YOUR_FRIENDS_EXPLAIN'		=> 'To remove usernames select them and click submit.',
	'YOUR_WARNINGS'				=> 'Your warning level',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> 'Place into folder',
		'MARK_AS_READ'		=> 'Mark as read',
		'MARK_AS_IMPORTANT'	=> 'Mark message',
		'DELETE_MESSAGE'	=> 'Delete message',
	),
	'PM_CHECK' => array(
		'SUBJECT'	=> 'Subject',
		'SENDER'	=> 'Sender',
		'MESSAGE'	=> 'Message',
		'STATUS'	=> 'Message status',
		'TO'		=> 'Sent To',
	),
	'PM_RULE' => array(
		'IS_LIKE'		=> 'is like',
		'IS_NOT_LIKE'	=> 'is not like',
		'IS'			=> 'is',
		'IS_NOT'		=> 'is not',
		'BEGINS_WITH'	=> 'begins with',
		'ENDS_WITH'		=> 'ends with',
		'IS_FRIEND'		=> 'is friend',
		'IS_FOE'		=> 'is foe',
		'IS_USER'		=> 'is user',
		'IS_GROUP'		=> 'is in usergroup',
		'ANSWERED'		=> 'answered',
		'FORWARDED'		=> 'forwarded',
		'TO_GROUP'		=> 'to my default usergroup',
		'TO_ME'			=> 'to me',
	),

	'GROUPS_EXPLAIN'	=> 'Usergroups enable board admins to better administer users. By default you will be placed in a specific group, this is your default group. This group defines how you may appear to other users, for example your username colouration, avatar, rank, etc. Depending on whether the administrator allows it you may be allowed to change your default group. You may also be placed in or allowed to join other groups. Some groups may give you additional permissions to view content or increase your capabilities in other areas.',
	'GROUP_LEADER'		=> 'Leaderships',
	'GROUP_MEMBER'		=> 'Memberships',
	'GROUP_PENDING'		=> 'Pending memberships',
	'GROUP_NONMEMBER'	=> 'Non-memberships',
	'GROUP_DETAILS'		=> 'Group details',

	'NO_LEADER'		=> 'No group leaderships',
	'NO_MEMBER'		=> 'No group memberships',
	'NO_PENDING'	=> 'No pending memberships',
	'NO_NONMEMBER'	=> 'No non-member groups',
));
