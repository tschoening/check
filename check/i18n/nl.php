<?php

/*
 * Contao check
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */

return array(
	'Composer package manager' => 'Composer pakket manager',
	'PHP %s or greater' => 'PHP %s of hoger',
	'You have PHP version %s.' => 'U beschikt over PHP versie %s.',
	'Composer requires at least PHP version %s.' => 'Composer vereist minstens PHP versie %s.',
	'PHP Phar extension' => 'PHP Phar extensie',
	'The PHP Phar extension is enabled.' => 'De PHP Phar extensie is ingeschakeld.',
	'The PHP Phar extension is not enabled.' => 'De PHP Phar extensie is niet ingeschakeld.',
	'The PHP Phar extension is part of the PHP core since PHP 5.3 and has to be explicitly disabled using the --disable-phar flag. Recompile PHP without the flag.' => 'De PHP Phar extensie maakt deel uit van de kern van PHP sinds PHP 5.3 en moet expliciet worden uitgeschakeld met behulp van de --disable-phar flag. Hercompileer PHP zonder de flag.',
	'PHP cURL extension' => 'PHP cURL extensie',
	'The PHP cURL extension is available.' => 'De PHP cURL extensie is beschikbaar.',
	'The PHP cURL extension is not available.' => 'De PHP cURL extensie is niet beschikbaar.',
	'The PHP cURL extension is required to communicate with the package server. You can enable it by compiling PHP with the --enable-curl flag.' => 'De PHP cURL extensie is nodig om de communicatie met de pakket server tot stand te brengen. U kunt dit activeren door het compileren van PHP met de --enable-curl flag.',
	'PHP APC extension' => 'PHP APC extensie',
	'The PHP APC extension is not installed.' => 'De PHP APC extensie is niet geïnstalleerd.',
	'The PHP APC extension is installed.' => 'De PHP APC extensie is geïnstalleerd.',
	'Using the PHP APC extension with Composer can lead to unexpected "cannot redeclare class" errors.' => 'Gebruik van de PHP APC extensie met Composer kan leiden tot onverwachte "cannot redeclare class" fouten.',
	'Suhosin extension' => 'Suhosin extensie',
	'The Suhosin extension is not installed or correctly configured for .phar files.' => 'De Suhosin extensie is niet geïnstalleerd of correct geconfigureerd voor .phar bestanden.',
	'The Suhosin extension does not allow to run .phar files.' => 'De Suhosin extensie staat niet toe om .phar files uit te voeren.',
	'You have to add "phar" to the list of allowed streams in your php.ini: <code>suhosin.executor.include.whitelist = phar</code>' => 'U dient "phar" toe te voegen aan de lijst van toegestane streams in uw php.ini: <code>suhosin.executor.include.whitelist = phar</code>',
	'allow_url_fopen' => 'allow_url_fopen',
	'The PHP flag "allow_url_fopen" is set.' => 'De PHP flag "allow_url_fopen" is ingesteld.',
	'The PHP flag "allow_url_fopen" is not set.' => 'De PHP flag "allow_url_fopen" is niet ingesteld.',
	'To download the installation files, Composer requires the "allow_url_fopen" flag to be set in the php.ini.' => 'Om de installatiebestanden te downloaden, vereist Composer dat de "allow_url_fopen" flag is ingesteld in php.ini.',
	'File permissions' => 'Bestand permissies',
	'The "posix_getpwuid" function is not available.' => 'De "posix_getpwuid" functie is niet beschikbaar.',
	'File permissions cannot be tested, because the <code>posix_getpwuid</code> function has been disabled. Please contact your server administrator.' => 'Bestandsrechten kunnen niet worden getest, omdat de <code>posix_getpwuid</ code> functie is uitgeschakeld. Neem contact op met uw serverbeheerder.',
	'The PHP process is allowed to create files.' => 'Het is het PHP-proces toegestaan om bestanden aan te maken.',
	'The PHP process is not allowed to create files.' => 'Het is het PHP-proces niet toegestaan om bestanden aan te maken.',
	'The PHP process is not allowed to create or manipulate files. Please adjust your server configuration accordingly.' => 'Het is het PHP-proces niet toegestaan ​​om bestanden aan te maken of te bewerken. Gelieve uw server configuratie aan te passen.',
	'shell_exec (optional)' => 'shell_exec (optioneel)',
	'The PHP function "shell_exec" is available.' => 'De PHP functie "shell_exec" is beschikbaar.',
	'The PHP function "shell_exec" is not available.' => 'De PHP functie "shell_exec" is niet beschikbaar. ',
	'The "shell_exec" function is optionally required to run the Composer process in the background.' => 'De "shell_exec" functie is eventueel nodig om het Composer proces op de achtergrond uit te voeren.',
	'proc_open (optional)' => 'proc_open (optioneel)',
	'The PHP function "proc_open" is available.' => 'De PHP functie "proc_open" is beschikbaar.',
	'The PHP function "proc_open" is not available.' => 'De PHP functie "proc_open" is niet beschikbaar.',
	'The "proc_open" function is optionally required to run the package manager in dev mode.' => 'De "proc_open" functie is eventueel nodig om de pakket manager in developer mode te draaien.',
	'You can use the Composer package manager on this server.' => 'U kunt gebruik maken van Composer pakketbeheer op deze server. ',
	'You cannot use the Composer package manager on this server.' => 'U kunt geen gebruik maken van Composer pakketbeheer op deze server. ',
	'Go back' => 'Ga terug',
	'php.ini settings' => 'php.ini instellingen',
	'The PHP safe_mode is not enabled.' => 'PHP safe_mode is uitgeschakeld.',
	'The PHP safe_mode is enabled.' => 'PHP safe_mode is ingeschakeld.',
	'It is recommended to disable the safe_mode in your php.ini or server control panel, otherwise the PHP process it not allowed to create or manipulate files and Contao cannot work properly.' => 'Het wordt aanbevolen om de safe_mode in uw php.ini of server bedieningspaneel uit te schakelen, daar anders het PHP-proces niet toegestaan wordt om bestanden aan te maken of te bewerken en Contao zal niet naar behoren werken.',
	'Creating a test folder' => 'Aanmaken van een testmap',
	'The test folder could be created (owner: %s, chmod: %s).' => 'De testmap kon niet worden aangemaakt (eigenaar: %s, chmod: %s).',
	'The test folder could not be created.' => 'De testmap kon niet worden aangemaakt.',
	'It seems that the PHP process does not have enough permissions to create folders on your server.' => 'Het lijkt erop dat het PHP-proces over onvoldoende rechten beschikt om mappen aan te maken op uw server.',
	'The test folder does not have the correct owner or chmod settings.' => 'De testmap heeft niet de juiste eigenaar of chmod instellingen.',
	'The test folder is owned by %s (should be %s) and has the chmod settings %s (should be %s).' => 'De testmap is van %s (moet zijn %s) en heeft de chmod instellingen %s (moet zijn %s).',
	'775, 755, 770, 750 or 705' => '775, 755, 770, 750 of 705',
	'Creating a test file' => 'Aanmaken van een test-bestand',
	'The test file could be created (owner: %s, chmod: %s).' => 'Het test bestand kon niet worden aangemaakt (eigenaar: %s, chmod: %s).',
	'The test file could not be created.' => 'Het test-bestand kon niet worden aangemaakt.',
	'It seems that the PHP process does not have enough permissions to create files on your server.' => 'Het lijkt erop dat het PHP-proces over onvoldoende rechten beschikt om bestanden aan te maken op uw server.',
	'The test file does not have the correct owner or chmod settings.' => 'Het test-bestand heeft niet de juiste eigenaar of chmod instellingen.',
	'The test file is owned by %s (should be %s) and has the chmod settings %s (should be %s).' => 'Het test-bestand is van %s (moet zijn %s) en heeft de chmod instellingen %s (moet zijn %s).',
	'664, 644, 660, 640 or 604' => '664, 644, 660, 640 of 604',
	'The PHP process is allowed to create files on this server.' => 'Het is het PHP-proces toegestaan om bestanden aan te maken op deze server.',
	'The PHP process is not allowed to create files on this server.' => 'Het is het PHP-proces niet toegestaan om bestanden aan te maken op deze server.',
	'Overview' => 'Overzicht',
	'You can install Contao 2.x' => 'U kunt Contao 2.x installeren',
	'You cannot install Contao 2.x (requires PHP %s+)' => 'U kunt Contao 2.x  niet installeren (vereist PHP %s+)',
	'You can install Contao 3.x' => 'U kunt Contao 3.x installeren',
	'You cannot install Contao 3.x (requires PHP %s+)' => 'U kunt Contao 3.x  niet installeren (vereist PHP %s+)',
	'You can install Contao 4.x' => 'U kunt Contao 4.x installeren',
	'You cannot install Contao 4.x (requires PHP %s+)' => 'U kunt Contao 4.x  niet installeren (vereist PHP %s+)',
	'The file permissions cannot be checked.' => 'Bestandsrechten kunnen niet worden gecontroleerd.',
	'More information …' => 'Meer informatie ...',
	'Additional services' => 'Aanvullende diensten',
	'You can use the Live Update.' => 'U kunt gebruik maken van Live Update.',
	'You cannot use the Live Update.' => 'U kunt geen gebruik maken van Live Update.',
	'The Composer package manager requirements cannot be checked.' => 'Vereisten voor Composer pakketbeheer kunnen niet worden gecontroleerd. ',
	'You can use the Composer package manager.' => 'U kunt gebruik maken van Composer pakketbeheer.',
	'You cannot use the Composer package manager.' => 'U kunt geen gebruik maken van Composer pakketbeheer.',
	'You can use the Extension Repository.' => 'U kunt gebruik maken van de Extensie Repository.',
	'You cannot use the Extension Repository.' => 'U kunt geen gebruik maken van de Extensie Repository.',
	'Install Contao' => 'Installeer Contao',
	'Validate an existing installation' => 'Valideer een bestaande installatie',
	'Installation' => 'Installatie',
	'Web installer' => 'Web installer',
	'There is a Contao installation already. Are you looking for the %s?' => 'Er is reeds een Contao installatie aanwezig. Zoekt u het %s?',
	'The automatic installation is not possible on your server due to safe_mode or file permission restrictions.' => 'Automatische installatie is niet mogelijk op uw server vanwege safe_mode of beperkingen van bestand permissie.',
	'The automatic installation is possible on your server.' => 'Automatische installatie is mogelijk op uw server.',
	'The automatic installation is not possible on your server.' => 'Automatische installatie is niet mogelijk op uw server.',
	'Your PHP installation either cannot connect to download.contao.org or is missing the PHP extension cURL or Zip.' => 'Uw PHP installatie kan ofwel geen verbinding maken met download.contao.org of mist de PHP extensie cURL of Zip.',
	'Manual installation' => 'Handmatige installatie',
	'Go to %s and download the latest Contao version.' => 'Ga naar %s en  download de meest recente Contao versie.',
	'Extract the download archive and upload the files to your server using an (S)FTP client.' => 'Pak het download archief uit en upload dit naar uw server met een (S)FTP client.',
	'Open the Contao install tool by adding "/contao/install.php" to the URL of your installation.' => 'Open het  Contao installatie tool door "/contao/install.php" achter de URL van uw  installatie te typen.',
	'Target version' => 'Doel versie',
	'Start the installation' => 'Begin met de installatie',
	'Installation failed' => 'Installatie mislukt',
	'Installation complete' => 'Installatie compleet',
	'Contao %s has been installed in %s.' => 'Contao %s is geïnstalleerd in %s.',
	'Open the Contao install tool' => 'Open het Contao installatie tool',
	'Live Update' => 'Live Update',
	'Phar has been added to the PHP core in version 5.3, so you require at least PHP version %s to use .phar files. If you have PHP 5.2, you might be able to use .phar files by installing the PECL phar extension (see %s).' => 'Phar is toegevoegd aan de kern van PHP in versie 5.3, dus u heeft tenminste PHP versie %s nodig om .phar bestanden te kunnen gebruiken. Als u PHP 5.2, heeft kunt u wellicht .phar bestanden gebruiken door de PECL phar extensie te installeren (zie %s).',
	'PHP OpenSSL extension' => 'PHP OpenSSL extensie',
	'The PHP OpenSSL extension is enabled.' => 'De PHP OpenSSL extensie is ingeschakeld.',
	'The PHP OpenSSL extension is not enabled.' => 'De PHP OpenSSL extensie is niet ingeschakeld.',
	'The PHP OpenSSL extension is required to set up a secure connection to the Live Update server. Enable it in your php.ini.' => 'De PHP OpenSSL extensie is benodigd om een beveiligde verbinding op te zetten naar de Live Update Server. Schakel dit in in uw php.ini.',
	'The ionCube Loader is not enabled or at least at version 4.0.9.' => 'De ionCube Loader is niet ingeschakeld of nog niet bij (tenminste) versie 4.0.9.',
	'An old version of the ionCube Loader prior to version 4.0.9 is installed.' => 'Een oudere versie van de ionCube Loader voorafgaand aan versie 4.0.9 is geïnstalleerd.',
	'Before version 4.0.9, the ionCube Loader was incompatible with Phar archives. Either upgrade to the latest version or disable the module. More information is available here: %s' => 'Vóór versie 4.0.9, was de ionCube Loader incompatibel met Phar archieven. Upgrade ofwel naar de laatste versie of schakel de module uit. Meer informatie is hier beschikbaar: %s',
	'Detect Unicode' => 'Detecteer Unicode',
	'The --enable-zend-multibyte flag is not set or detect_unicode is disabled.' => 'De --enable-zend-multibyte flag is niet ingesteld of detect_unicode is uitgeschakeld.',
	'The detect_unicode settings on your server are not correct.' => 'De detect_unicode instellingen op uw server zijn niet correct.',
	'If PHP is compiled with the --enable-zend-multibyte flag, you have to explicitly disable detect_unicode in your php.ini: <code>detect_unicode = Off</code>. This is a PHP bug which might be fixed in the future. More information is available here: %s' => 'Als PHP gecompileerd is met de - enable-zend-multibyte flag, moet u detect_unicode expliciet uitschakelen in uw php.ini: <code>detect_unicode = Off </ code>. Dit is een PHP-bug welke in de toekomst wellicht wordt opgelost. Meer informatie is hier beschikbaar: %s',
	'You are not using FastCGI and eAccelerator.' => 'U maakt geen gebruik van FastCGI en eAccelerator.',
	'You are using FastCGI and eAccelerator.' => 'U maakt gebruik van FastCGI en eAccelerator.',
	'It seems that FastCGI in combination with the eAccelerator extension is buggy when it comes to Phar archives. You can either disable the eAccelerator extension or use a different PHP cache instead (e.g. FastCGI+APC).' => 'Het lijkt erop dat FastCGI in combinatie met de eAccelerator extensie buggy is als het gaat om Phar archieven. U kunt de eAccelerator extensie ofwel uitschakelen of gebruik maken van een andere PHP-cache (bv. FastCGI + APC).',
	'Connection test' => 'Testen verbinding',
	'A connection to update.contao.org could be established.' => 'Om te kunnen updaten is er een verbinding met contao.org tot stand gebracht.',
	'A connection to update.contao.org could not be established.' => 'Er kon geen verbinding met contao.org tot stand worden gebracht om te kunnen updaten.',
	'Maybe the request has been blocked by a firewall. Please contact your server administrator.' => 'Wellicht is het verzoek is geblokkeerd door een firewall. Neem contact op met uw serverbeheerder.',
	'You can use the Live Update on this server.' => 'U kunt gebruik maken van Live Update op deze server.',
	'You cannot use the Live Update on this server.' => 'U kunt geen gebruik maken van Live Update op deze server.',
	'Extension Repository' => 'Extensie Repository',
	'PHP SOAP extension' => 'PHP SOAP extensie',
	'The PHP SOAP extension is available.' => 'De PHP SOAP extensie is beschikbaar.',
	'The PHP SOAP extension is not available.' => 'De PHP SOAP extensie is niet beschikbaar.',
	'The PHP SOAP extension is required to communicate with the Extension Repository server. You can enable it by compiling PHP with the --enable-soap flag. Depending on your Contao version, you might also be able to use the %s extension.' => 'De PHP SOAP extensie is nodig om communicatie met de Extension Repository server tot stand te brengen. U kunt dit activeren door het compileren van PHP met de --enable-soap flag. Afhankelijk van uw Contao versie, bent u in staat om de %s extensie te gebruiken.',
	'A connection to contao.org could be established.' => 'Er is een verbinding met contao.org tot stand gebracht.',
	'A connection to contao.org could not be established.' => 'Er kon geen verbinding met contao.org tot stand worden gebracht.',
	'You can use the Extension Repository on this server.' => 'U kunt gebruik maken van de Extensie Repository op deze server.',
	'You cannot use the Extension Repository on this server.' => 'U kunt geen gebruik maken van de Extensie Repository op deze server.',
	'Validate an installation' => 'Valideer een installatie',
	'Could not find a Contao installation.' => 'Geen Contao installatie aanwezig.',
	'To validate an existing installation, please upload the "check" folder to your installation directory.' => 'Om een bestaande installatie te valideren, upload de "check" map naar uw installatie map.',
	'Unknown version' => 'Onbekende versie',
	'The installed version %s is not (yet) supported.' => 'De geïnstalleerde versie %s wordt (nog) niet ondersteund.',
	'There is no version file for your Contao installation. Are you using a stable Contao version and do you have the latest version of the Contao Check?' => 'Er is geen versie-bestand voor uw Contao installatie. Gebruikt u een stabiele Contao versie en beschikt u over de laatste versie van Contao Check?',
	'Version' => 'Versie',
	'Found a Contao %s installation.' => 'Contao installatie %s aanwezig.',
	'Missing files' => 'Ontbrekende bestanden',
	'Corrupt files' => 'Beschadigde bestanden',
	'Missing optional files' => 'Ontbrekende optionele bestanden',
	'Your installation is up to date.' => 'Uw installatie is up to date.',
	'Your installation is not up to date.' => 'Uw installatie is niet up to date.',
);