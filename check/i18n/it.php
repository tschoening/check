<?php

/*
 * Contao check
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */

return array(
	'Composer package manager' => 'Composer package manager',
	'PHP %s or greater' => 'PHP %s o superiore',
	'You have PHP version %s.' => 'Hai la version PHP %s.',
	'Composer requires at least PHP version %s.' => 'Composer richiede la versione %s di PHP.',
	'PHP Phar extension' => 'Estensione PHP Phar',
	'The PHP Phar extension is enabled.' => 'L\'estensione PHP Phar è abilitata.',
	'The PHP Phar extension is not enabled.' => 'L\'estensione PHP Phar non è abilitata.',
	'The PHP Phar extension is part of the PHP core since PHP 5.3 and has to be explicitly disabled using the --disable-phar flag. Recompile PHP without the flag.' => 'L\'estensione PHP Phar fa parte del core di PHP a partire da PHP 5.3 e deve essere disattivata in modo esplicito utilizzando l\'opzione --disable-phar. Ricompila PHP senza questa opzione.',
	'PHP cURL extension' => 'Estensione PHP cURL',
	'The PHP cURL extension is available.' => 'L\'estensione PHP cURL è disponibile.',
	'The PHP cURL extension is not available.' => 'L\'estensione PHP cURL non è disponibile.',
	'The PHP cURL extension is required to communicate with the package server. You can enable it by compiling PHP with the --enable-curl flag.' => 'L\'estensione PHP cURL è richiesta per comunicare con il package server. E\' possibile abilitare questa estensione compilando il PHP con l\'opzione --enable-curl, oppure rivolgiti al tuo fornitore del servizio.',
	'PHP APC extension' => 'Estensione PHP APC',
	'The PHP APC extension is not installed.' => 'Estensione PHP APC non è abilitata.',
	'The PHP APC extension is installed.' => 'Estensione PHP APC è abilitata.',
	'Using the PHP APC extension with Composer can lead to unexpected "cannot redeclare class" errors.' => 'Utilizzando l\'estensione PHO APC, il Composer  potrebbe segnalare errori non previsti di "cannot redeclare class".',
	'Suhosin extension' => 'Estensione Suhosin',
	'The Suhosin extension is not installed or correctly configured for .phar files.' => 'L\'estensione Suhosin non è installata o configurata correttamente per i file .phar.',
	'The Suhosin extension does not allow to run .phar files.' => 'L\'estensione Suhosin non permette di eseguire i file .phar.',
	'You have to add "phar" to the list of allowed streams in your php.ini: <code>suhosin.executor.include.whitelist = phar</code>' => 'È necessario aggiungere "phar" alla lista dei stream consentiti nel tuo php.ini: <code>suhosin.executor.include.whitelist = phar</code>.',
	'allow_url_fopen' => 'allow_url_fopen',
	'The PHP flag "allow_url_fopen" is set.' => 'L\'opzione PHP "allow_url_fopen" è abilitata.',
	'The PHP flag "allow_url_fopen" is not set.' => 'L\'opzione PHP "allow_url_fopen" non è abilitata.',
	'To download the installation files, Composer requires the "allow_url_fopen" flag to be set in the php.ini.' => 'Per scaricare i file di installazione, Composer richiede l\'opzione "allow_url_fopen" attiva. Questa opzione deve essere impostata nel php.ini.',
	'File permissions' => 'Permessi file',
	'The "posix_getpwuid" function is not available.' => 'La funzione "posix_getpwuid" non è disponibile.',
	'File permissions cannot be tested, because the <code>posix_getpwuid</code> function has been disabled. Please contact your server administrator.' => 'I permessi sui file non possono essere testati.
La funzione <code>posix_getpwuid</code> è disabilitata. Si prega di contattare l\'amministratore del server.',
	'The PHP process is allowed to create files.' => 'PHP ha i permessi per la creazione di file.',
	'The PHP process is not allowed to create files.' => 'PHP non ha i permessi per la creazione di file.',
	'The PHP process is not allowed to create or manipulate files. Please adjust your server configuration accordingly.' => 'PHP non ha i permessi per creare o modificare file.
Si prega di variare la configurazione del server.',
	'shell_exec (optional)' => 'shell_exec (optionale)',
	'The PHP function "shell_exec" is available.' => 'La funzione PHP  "shell_exec" è disponibile.',
	'The PHP function "shell_exec" is not available.' => 'La funzione PHP  "shell_exec" non è disponibile.',
	'The "shell_exec" function is optionally required to run the Composer process in the background.' => 'La funzione "shell_exec" è opzionale per eseguire il processo Composer in background.',
	'proc_open (optional)' => 'proc_open (opzionale)',
	'The PHP function "proc_open" is available.' => 'La funzione PHP  "proc_open" è disponibile.',
	'The PHP function "proc_open" is not available.' => 'La funzione PHP  "proc_open" non è disponibile.',
	'The "proc_open" function is optionally required to run the package manager in dev mode.' => 'La funzione "proc_open" è opzionale per eseguire il package manager  in modalità sviluppatore.',
	'You can use the Composer package manager on this server.' => 'È possibile utilizzare il Composer package manager su questo server.',
	'You cannot use the Composer package manager on this server.' => 'Non è possibile utilizzare il Composer package manager su questo server.',
	'Go back' => 'Torna indietro',
	'php.ini settings' => 'Impostazioni php.ini',
	'The PHP safe_mode is not enabled.' => 'Il PHP safe_mode non è abilitato.',
	'The PHP safe_mode is enabled.' => 'Il PHP safe_mode è abilitato.',
	'It is recommended to disable the safe_mode in your php.ini or server control panel, otherwise the PHP process it not allowed to create or manipulate files and Contao cannot work properly.' => 'Si consiglia di disattivare il safe_mode nel tuo php.ini o dal pannello di controllo del server, altrimenti ​​PHP non ha il permesso di creare o modificare file e Contao non può funzionare correttamente.',
	'Creating a test folder' => 'Crea una cartella di prova',
	'The test folder could be created (owner: %s, chmod: %s).' => 'La cartella di prova può essere creata (proprietario: %s, diritti di accesso: %s).',
	'The test folder could not be created.' => 'La cartella di prova non può essere creata.',
	'It seems that the PHP process does not have enough permissions to create folders on your server.' => 'Sembra che il processo PHP non disponga di autorizzazioni sufficienti per creare cartelle sul server.',
	'The test folder does not have the correct owner or chmod settings.' => 'Non risultano corrette le impostazioni del proprietario o dei diritti di accesso per la cartella di prova.',
	'The test folder is owned by %s (should be %s) and has the chmod settings %s (should be %s).' => 'La cartella di prova è di proprietà di %s (dovrebbe essere %s) e ha i diritti di accesso %s (dovrebbe essere %s).',
	'775, 755, 770, 750 or 705' => '775, 755, 770, 750 oppure 705',
	'Creating a test file' => 'Crea un file di prova',
	'The test file could be created (owner: %s, chmod: %s).' => 'Il file di prova può essere creato (proprietario: %s, diritti di accesso: %s).',
	'The test file could not be created.' => 'Il file di prova non può essere creato.',
	'It seems that the PHP process does not have enough permissions to create files on your server.' => 'Sembra che il processo PHP non disponga di autorizzazioni sufficienti per creare i file sul server.',
	'The test file does not have the correct owner or chmod settings.' => 'Non risultano corrette le impostazioni del proprietario o dei diritti di accesso per il file di prova.',
	'The test file is owned by %s (should be %s) and has the chmod settings %s (should be %s).' => 'Il file di prova è di proprietà di %s (dovrebbe essere %s) e ha i diritti di accesso %s (dovrebbe essere %s).',
	'664, 644, 660, 640 or 604' => '664, 644, 660, 640 oppure 604',
	'The PHP process is allowed to create files on this server.' => 'PHP è in grado di creare file sul server.',
	'The PHP process is not allowed to create files on this server.' => 'PHP non è in grado di creare file sul server.',
	'Overview' => 'Panoramica',
	'You can install Contao 2.x' => 'È possibile installare Contao 2.x',
	'You cannot install Contao 2.x (requires PHP %s+)' => 'Non è possibile installare Contao 2.x (richiede PHP %s+)',
	'You can install Contao 3.x' => 'È possibile installare Contao 3.x',
	'You cannot install Contao 3.x (requires PHP %s+)' => 'Non è possibile installare Contao 3.x (richiede PHP %s+)',
	'You can install Contao 4.x' => 'E\' possibile installare Contao 4.x',
	'You cannot install Contao 4.x (requires PHP %s+)' => 'Non è possibile installare Contao 4.x  (richiede PHP %s+)',
	'The file permissions cannot be checked.' => 'I permessi dei file non possono essere testati.',
	'More information …' => 'Ulteriori informazioni …',
	'Additional services' => 'Servizi addizionali',
	'You can use the Live Update.' => 'È possibile utilizzare il Live Update.',
	'You cannot use the Live Update.' => 'Non è possibile utilizzare il Live Update.',
	'The Composer package manager requirements cannot be checked.' => 'I requisiti del Composer package manager  non possono essere controllati.',
	'You can use the Composer package manager.' => 'È possibile utilizzare il Composer package manager.',
	'You cannot use the Composer package manager.' => 'Non è possibile utilizzare il Composer package manager.',
	'You can use the Extension Repository.' => 'È possibile utilizzare il catalogo estensioni.',
	'You cannot use the Extension Repository.' => 'Non è possibile utilizzare il catalogo estensioni.',
	'Install Contao' => 'Installazione Contao',
	'Validate an existing installation' => 'Convalida l\'installazione esistente',
	'Installation' => 'Strumento di installazione di Contao',
	'Web installer' => 'Web installer',
	'There is a Contao installation already. Are you looking for the %s?' => 'È presente già un\'installazione Contao. Stai cercando il %s?',
	'The automatic installation is not possible on your server due to safe_mode or file permission restrictions.' => 'L\'installazione automatica non è possibile sul tuo server a causa di restrizioni safe_mode o permessi su file.',
	'The automatic installation is possible on your server.' => 'L\'installazione automatica è possibile sul tuo server.',
	'The automatic installation is not possible on your server.' => 'L\'installazione automatica non è possibile sul tuo server.',
	'Your PHP installation either cannot connect to download.contao.org or is missing the PHP extension cURL or Zip.' => 'L\'installazione di PHP non può collegarsi a download.contao.org oppure mancano le estensioni cURL o Zip di PHP.',
	'Manual installation' => 'Installazione manuale',
	'Go to %s and download the latest Contao version.' => 'Vai su %s per scaricare la versione Contao più recente.',
	'Extract the download archive and upload the files to your server using an (S)FTP client.' => 'Estrai l\'archivio appena scaricato e carica i file sul tuo server utilizzando un client (S)FTP.',
	'Open the Contao install tool by adding "/contao/install.php" to the URL of your installation.' => 'Apri lo strumento di installazione Contao aggiungendo "/contao/install.php" all\'URL della tua installazione.',
	'Target version' => 'Aggiorna alla versione',
	'Start the installation' => 'Avvia l\'installazione',
	'Installation failed' => 'Installazione fallita',
	'Installation complete' => 'Installazione completa',
	'Contao %s has been installed in %s.' => 'Contao %s è stato installato in %s.',
	'Open the Contao install tool' => 'Avvia lo strumento di installazione Contao',
	'Live Update' => 'Live Update (aggiornamento automatico)',
	'Phar has been added to the PHP core in version 5.3, so you require at least PHP version %s to use .phar files. If you have PHP 5.2, you might be able to use .phar files by installing the PECL phar extension (see %s).' => 'Phar è stato aggiunto al core di PHP nella versione 5.3, quindi è necessario almeno la versione %s di PHP per utilizzare i file .phar.
Se si sta utilizzando una versione 5.2 di PHP, per utilizzare i file .phar occorre installare l\'estensione PECL phar (vedi  %s).',
	'PHP OpenSSL extension' => 'Estensione PHP OpenSSL',
	'The PHP OpenSSL extension is enabled.' => 'L\'estensione PHP OpenSSL è abilitata.',
	'The PHP OpenSSL extension is not enabled.' => 'L\'estensione PHP OpenSSL non è abilitata.',
	'The PHP OpenSSL extension is required to set up a secure connection to the Live Update server. Enable it in your php.ini.' => 'L\'estensione PHP OpenSSL è necessario per stabilire una connessione sicura con il server Live Update. Attivala nel tuo php.ini.',
	'The ionCube Loader is not enabled or at least at version 4.0.9.' => 'Non è abilitato il ionCube Loader o non è aggiornato alla versione 4.0.9.',
	'An old version of the ionCube Loader prior to version 4.0.9 is installed.' => 'È installata una versione non recente di ionCube Loader, precedente alla versione 4.0.9.',
	'Before version 4.0.9, the ionCube Loader was incompatible with Phar archives. Either upgrade to the latest version or disable the module. More information is available here: %s' => 'Prima della versione 4.0.9 ionCube Loader era incompatibile con gli archivi Phar. Aggiorna alla versione più recente o disabilita il modulo. Ulteriori informazioni sono disponibili qui: %s',
	'Detect Unicode' => 'Rileva Unicode',
	'The --enable-zend-multibyte flag is not set or detect_unicode is disabled.' => 'L\'opzione --enable-zend-multibyte non è impostata o il detect_unicode è disabilitato.',
	'The detect_unicode settings on your server are not correct.' => 'Le impostazioni del detect_unicode sul tuo server non sembrano corrette.',
	'If PHP is compiled with the --enable-zend-multibyte flag, you have to explicitly disable detect_unicode in your php.ini: <code>detect_unicode = Off</code>. This is a PHP bug which might be fixed in the future. More information is available here: %s' => 'Se PHP è stato compilato con l\'opzione --enable-zend-multibyte è necessario disattivare in modo esplicito il detect_unicode nel file php.ini: <code>detect_unicode = Off</code>. Questo è un bug di PHP che potrebbe essere risolto in futuro. Ulteriori informazioni sono disponibili qui: %s',
	'You are not using FastCGI and eAccelerator.' => 'Non verrà utilizzato FastCGI e eAccelerator.',
	'You are using FastCGI and eAccelerator.' => 'Verrà utilizzato FastCGI e eAccelerator.',
	'It seems that FastCGI in combination with the eAccelerator extension is buggy when it comes to Phar archives. You can either disable the eAccelerator extension or use a different PHP cache instead (e.g. FastCGI+APC).' => 'Sembra che FastCGI in combinazione con l\'estensione eAccelerator sia buggy quando si tratta di archivi Phar. È possibile disattivare l\'estensione eAccelerator o utilizzare una cache PHP diversa (es: FastCGI+APC).',
	'Connection test' => 'Test della connessione',
	'A connection to update.contao.org could be established.' => 'E\' possibile stabilire una connessione a update.contao.org',
	'A connection to update.contao.org could not be established.' => 'Non è possibile stabilire una connessione a update.contao.org',
	'Maybe the request has been blocked by a firewall. Please contact your server administrator.' => 'Forse la richiesta è stata bloccata da un firewall. Si prega di contattare l\'amministratore del server.',
	'You can use the Live Update on this server.' => 'È possibile utilizzare il Live Update su questo server.',
	'You cannot use the Live Update on this server.' => 'Non è possibile utilizzare il Live Update su questo server.',
	'Extension Repository' => 'Repertorio estensioni',
	'PHP SOAP extension' => 'Estensione PHP SOAP',
	'The PHP SOAP extension is available.' => 'L\'estensione PHP SOAP è disponibile.',
	'The PHP SOAP extension is not available.' => 'L\'estensione PHP SOAP non è disponibile.',
	'The PHP SOAP extension is required to communicate with the Extension Repository server. You can enable it by compiling PHP with the --enable-soap flag. Depending on your Contao version, you might also be able to use the %s extension.' => 'L\'estensione PHP SOAP è necessaria per comunicare con il server del reposcatalogo estensioni. È possibile attivarla compilando PHP con l\'opzione --enable-soap. A seconda della versione Contao si potrebbe utilizzare anche l\'estensione %s.',
	'A connection to contao.org could be established.' => 'È stato possibile stabilire una connessione con contao.org.',
	'A connection to contao.org could not be established.' => 'Non è stato possibile stabilire una connessione con contao.org.',
	'You can use the Extension Repository on this server.' => 'È possibile utilizzare il catalogo estensioni su questo server.',
	'You cannot use the Extension Repository on this server.' => 'Non è possibile utilizzare il catalogo estensioni su questo server.',
	'Validate an installation' => 'Convalida un\'installazione',
	'Could not find a Contao installation.' => 'Impossibile trovare un\'installazione di Contao.',
	'To validate an existing installation, please upload the "check" folder to your installation directory.' => 'Per convalidare un\'installazione esistente si prega di caricare la cartella "check" nella directory di installazione.',
	'Unknown version' => 'Versione sconosciuta',
	'The installed version %s is not (yet) supported.' => 'La versione installata, %s, non è (ancora) supportata.',
	'There is no version file for your Contao installation. Are you using a stable Contao version and do you have the latest version of the Contao Check?' => 'Non è presente nessun version file per la tua installazione di Contao. Stai utilizzando una versione Contao stabile e l\'ultima versione del check Contao?',
	'Version' => 'Versione',
	'Found a Contao %s installation.' => 'È stato trovato un\'installazione di Contao %s.',
	'Missing files' => 'File mancanti',
	'Corrupt files' => 'File corrotti',
	'Missing optional files' => 'Files opzionali mancanti',
	'Your installation is up to date.' => 'L\'installazione è aggiornata.',
	'Your installation is not up to date.' => 'L\'installazione non è non è aggiornata.',
);