<?php

/*
 * Contao check
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */

return array(
	'Composer package manager' => 'Composerパッケージ管理',
	'PHP %s or greater' => 'PHP %s以降',
	'You have PHP version %s.' => 'インストールしてあるPHPはバージョン%sです。',
	'Composer requires at least PHP version %s.' => '少なくともPHPバージョン%sがComposerに必要です。',
	'PHP Phar extension' => 'PHPのPhar拡張',
	'The PHP Phar extension is enabled.' => 'PHP Phar拡張は有効です。',
	'The PHP Phar extension is not enabled.' => 'PHP Phar拡張は有効ではありません。',
	'The PHP Phar extension is part of the PHP core since PHP 5.3 and has to be explicitly disabled using the --disable-phar flag. Recompile PHP without the flag.' => 'PHPのPhar拡張はPHP 5.3からPHP本体の一部で、無効とするには明示的に--disable-pharフラッグを使用しなければなりません。このフラグを指定しないでPHPを再コンパイルしてください。',
	'PHP cURL extension' => 'PHPのcURL拡張',
	'The PHP cURL extension is available.' => 'PHP cURL拡張を利用できます。',
	'The PHP cURL extension is not available.' => 'PHP cURL拡張を利用できません。',
	'The PHP cURL extension is required to communicate with the package server. You can enable it by compiling PHP with the --enable-curl flag.' => 'PHP cURL拡張がパッケージサーバーと通信するために必要です。--enable-curlフラッグでPHPをコンパイルすると有効にできます。',
	'PHP APC extension' => 'PHPのAPC拡張',
	'The PHP APC extension is not installed.' => 'PHP APC拡張をインストールしてありません。',
	'The PHP APC extension is installed.' => 'PHP APC拡張をインストールしてあります。',
	'Using the PHP APC extension with Composer can lead to unexpected "cannot redeclare class" errors.' => 'Composerと一緒にPHP APC拡張を使用すると予期しない"cannot redeclare class"というエラーを起こすことがあります。',
	'Suhosin extension' => 'Suhosin拡張',
	'The Suhosin extension is not installed or correctly configured for .phar files.' => 'Suhosin拡張をインストールしていないか、.pharファイルに対して正しく構成してあります。',
	'The Suhosin extension does not allow to run .phar files.' => 'Suhosin拡張が.pharファイルの実行を許可していません。',
	'You have to add "phar" to the list of allowed streams in your php.ini: <code>suhosin.executor.include.whitelist = phar</code>' => 'php.iniで許可するストリームのリストに"phar"を加えなければなりません: <code>suhosin.executor.include.whitelist = phar</code>',
	'allow_url_fopen' => 'allow_url_fopen',
	'The PHP flag "allow_url_fopen" is set.' => 'PHPの設定オプションの"allow_url_fopen"が設定してあります。',
	'The PHP flag "allow_url_fopen" is not set.' => 'PHPの設定オプションの"allow_url_fopen"は設定してありません。',
	'To download the installation files, Composer requires the "allow_url_fopen" flag to be set in the php.ini.' => 'Composerがインストールするファイルをダウンロードするためには、設定オプションの"allow_url_fopen"をphp.iniで設定されている必要があります。',
	'File permissions' => 'ファイルの権限',
	'The "posix_getpwuid" function is not available.' => 'PHPの"posix_getpwuid"関数を利用できません。',
	'File permissions cannot be tested, because the <code>posix_getpwuid</code> function has been disabled. Please contact your server administrator.' => '<code>posix_getpwuid</code>関数を利用できないため、ファイルの権限をテストできません。サーバー管理者に連絡してください。',
	'The PHP process is allowed to create files.' => 'PHPのプロセスにファイルの作成を許可しています。',
	'The PHP process is not allowed to create files.' => 'PHPのプロセスにファイルの作成を許可していません。',
	'The PHP process is not allowed to create or manipulate files. Please adjust your server configuration accordingly.' => 'PHPのプロセスにファイルの作成や操作を許可していません。サーバーの構成を適切に調整してください。',
	'shell_exec (optional)' => 'shell_exec (任意)',
	'The PHP function "shell_exec" is available.' => 'PHPの"shell_exec"関数を利用できます。',
	'The PHP function "shell_exec" is not available.' => 'PHPの"shell_exec"関数を利用できません。',
	'The "shell_exec" function is optionally required to run the Composer process in the background.' => '"shell_exec"関数は必須ではありませんが、Composerのプロセスをバックグラウンドで実行するために必要です。',
	'proc_open (optional)' => 'proc_open (任意)',
	'The PHP function "proc_open" is available.' => 'PHPの"proc_open"関数を利用できます。',
	'The PHP function "proc_open" is not available.' => 'PHPの"proc_open"関数を利用できません。',
	'The "proc_open" function is optionally required to run the package manager in dev mode.' => '"proc_open"関数は必須ではありませんが、パッケージ管理を開発モードで実行するために必要です。',
	'You can use the Composer package manager on this server.' => 'このサーバーでComposerパッケージ管理を使用できます。',
	'You cannot use the Composer package manager on this server.' => 'このサーバーではComposerパッケージ管理を使用できません。',
	'Go back' => '戻る',
	'php.ini settings' => 'php.iniの設定',
	'The PHP safe_mode is not enabled.' => 'PHPのsafe_modeは有効ではありません。',
	'The PHP safe_mode is enabled.' => 'PHPのsafe_modeは有効です。',
	'It is recommended to disable the safe_mode in your php.ini or server control panel, otherwise the PHP process it not allowed to create or manipulate files and Contao cannot work properly.' => 'php.iniまたはサーバーのコントロールパネルでsafe_modeを無効にするようにお勧めします。そうしないと、PHPのプロセスにファイルの作成や操作を許可しないこととなり、Contaoはきちんと動作しません。',
	'Creating a test folder' => 'テストフォルダーの作成',
	'The test folder could be created (owner: %s, chmod: %s).' => 'テストフォルダーを(所有者: %s、モード: %sで)作成できました。',
	'The test folder could not be created.' => 'テストフォルダーを作成できませんでした。',
	'It seems that the PHP process does not have enough permissions to create folders on your server.' => 'サーバーでPHPのプロセスがフォルダーを作成するのに十分な権限がないようです。',
	'The test folder does not have the correct owner or chmod settings.' => 'テストフォルダーが正しい所有者と権限の設定ではありません。',
	'The test folder is owned by %s (should be %s) and has the chmod settings %s (should be %s).' => 'テストフォルダーの所有者は%s(本来は%s)で、アクセス権限は%s(本来は%s)です。',
	'775, 755, 770, 750 or 705' => '775、755、770、750、705',
	'Creating a test file' => 'テストファイルの作成',
	'The test file could be created (owner: %s, chmod: %s).' => 'テストファイルを(所有者: %s、モード: %sで)作成できました。',
	'The test file could not be created.' => 'テストファイルを作成できませんでした。',
	'It seems that the PHP process does not have enough permissions to create files on your server.' => 'サーバーでPHPのプロセスがファイルを作成するのに十分な権限がないようです。',
	'The test file does not have the correct owner or chmod settings.' => 'テストファイルが正しい所有者と権限の設定ではありません。',
	'The test file is owned by %s (should be %s) and has the chmod settings %s (should be %s).' => 'テストファイルの所有者は%s(本来は%s)で、アクセス権限は%s(本来は%s)です。',
	'664, 644, 660, 640 or 604' => '664、644、660、640、604',
	'The PHP process is allowed to create files on this server.' => 'このサーバーではPHPのプロセスにファイルの作成を許可しています。',
	'The PHP process is not allowed to create files on this server.' => 'このサーバーではPHPのプロセスにファイルの作成を許可していません。',
	'Overview' => '概要',
	'You can install Contao 2.x' => 'Contao 2.xをインストールできます。',
	'You cannot install Contao 2.x (requires PHP %s+)' => 'Contao 2.xをインストールできません(PHP %s以降が必要)。',
	'You can install Contao 3.x' => 'Contao 3.xをインストールできます。',
	'You cannot install Contao 3.x (requires PHP %s+)' => 'Contao 3.xをインストールできません(PHP %s以降が必要)。',
	'You can install Contao 4.x' => 'Contao 4.xをインストールできます',
	'You cannot install Contao 4.x (requires PHP %s+)' => 'Contao 4.xをインストールできません(PHP %s以降が必要)',
	'The file permissions cannot be checked.' => 'ファイルの権限を検査できません。',
	'More information …' => 'さらに詳しい情報 ...',
	'Additional services' => '補足的なサービス',
	'You can use the Live Update.' => 'ライブアップデートを使用できます。',
	'You cannot use the Live Update.' => 'ライブアップデートを使用できません。',
	'The Composer package manager requirements cannot be checked.' => 'Composerパッケージ管理の要件を検査できません。',
	'You can use the Composer package manager.' => 'Composerパッケージ管理を使用できます。',
	'You cannot use the Composer package manager.' => 'Composerパッケージ管理を使用できません。',
	'You can use the Extension Repository.' => '機能拡張リポジトリを使用できます。',
	'You cannot use the Extension Repository.' => '機能拡張リポジトリを使用できません。',
	'Install Contao' => 'Contaoをインストール',
	'Validate an existing installation' => 'インストールしているContaoを検証',
	'Installation' => 'インストール',
	'Web installer' => 'ウェブインストーラー',
	'There is a Contao installation already. Are you looking for the %s?' => '既にContaoをインストールしてあります。%sをお探してですか?',
	'The automatic installation is not possible on your server due to safe_mode or file permission restrictions.' => 'セーフモード対処またはファイルの権限の制限のため、自動的なインストールは不可能です。',
	'The automatic installation is possible on your server.' => 'このサーバーでは自動的なインストールが可能です。',
	'The automatic installation is not possible on your server.' => 'このサーバーでは自動的なインストールは不可能です。',
	'Your PHP installation either cannot connect to download.contao.org or is missing the PHP extension cURL or Zip.' => 'インストールしてあるPHPではdownload.contao.orgに接続できないか、PHPのcURLやZipの拡張が欠けています。',
	'Manual installation' => '手作業によるインストール',
	'Go to %s and download the latest Contao version.' => '%sをアクセスして最新のバージョンのContaoをダウンロードしてください。',
	'Extract the download archive and upload the files to your server using an (S)FTP client.' => 'Contaoのアーカイブのファイルをダウンロードして展開し、(S)FTPクライアントを使用して使用するサーバーにアップロードしてください。',
	'Open the Contao install tool by adding "/contao/install.php" to the URL of your installation.' => 'インストールするURLに"/contao/install.php"を追加して、Contaoのインストールツールにアクセスしてください。',
	'Target version' => '目的のバージョン',
	'Start the installation' => 'インストールを開始',
	'Installation failed' => 'インストールできませんでした',
	'Installation complete' => 'インストールを完了',
	'Contao %s has been installed in %s.' => 'Contao %sを%sにインストールしました。',
	'Open the Contao install tool' => 'Contaoのインストールツールを実行',
	'Live Update' => 'ライブアップデート',
	'Phar has been added to the PHP core in version 5.3, so you require at least PHP version %s to use .phar files. If you have PHP 5.2, you might be able to use .phar files by installing the PECL phar extension (see %s).' => 'PHPはバージョン5.3でPharを中心部分に追加していますので、少なくともPHP バージョン%sが.pharファイルを使用するために必要です。PHP 5.2の場合は、PECLのphar格調(%sを参照)をインストールすると.pharファイルを使用できるかもしれません。',
	'PHP OpenSSL extension' => 'PHPのOpenSSL拡張',
	'The PHP OpenSSL extension is enabled.' => 'PHPのOpenSSL拡張は有効です。',
	'The PHP OpenSSL extension is not enabled.' => 'PHPのOpenSSL拡張は有効ではありません。',
	'The PHP OpenSSL extension is required to set up a secure connection to the Live Update server. Enable it in your php.ini.' => 'PHPのOpenSSL拡張は、ライブアップデートサーバーに安全な接続を確立するために必要です。php.iniで有効にしてください。',
	'The ionCube Loader is not enabled or at least at version 4.0.9.' => 'ionCubeローダーが有効ではないか、バージョン4.0.9以降ではありません。',
	'An old version of the ionCube Loader prior to version 4.0.9 is installed.' => 'バージョン4.0.9より前の古いionCubeローダーがインストールしてあります。',
	'Before version 4.0.9, the ionCube Loader was incompatible with Phar archives. Either upgrade to the latest version or disable the module. More information is available here: %s' => 'バージョン4.0.9より前では、ionCubeローダーはPharアーカイブと互換性がありません。<最新のバージョンに更新するか、モジュールを無効にしてください。さらに詳しい情報はこちらを参照してください: %s',
	'Detect Unicode' => 'Unicodeの検出',
	'The --enable-zend-multibyte flag is not set or detect_unicode is disabled.' => '--enable-zend-multibyteフラッグを設定していないか、detect_unicodeが無効です。',
	'The detect_unicode settings on your server are not correct.' => 'サーバーのdetect_unicodeの設定が正しくありません。',
	'If PHP is compiled with the --enable-zend-multibyte flag, you have to explicitly disable detect_unicode in your php.ini: <code>detect_unicode = Off</code>. This is a PHP bug which might be fixed in the future. More information is available here: %s' => 'PHPが--enable-zend-multibyteフラッグでコンパイルしてある場合は、php.iniで明示的にdetect_unicodeを無効にしなければなりません: <code>detect_unicode = "
"Off</code>  これはPHPに将来修正されるかもしれないバグがあるためです。さらに詳しい情報はこちらを参照してください: %s',
	'You are not using FastCGI and eAccelerator.' => 'FastCGIとeAcceleratorを使用していません。',
	'You are using FastCGI and eAccelerator.' => 'FastCGIとeAcceleratorを使用しています。',
	'It seems that FastCGI in combination with the eAccelerator extension is buggy when it comes to Phar archives. You can either disable the eAccelerator extension or use a different PHP cache instead (e.g. FastCGI+APC).' => 'FastCGIをeAccelerator拡張と組み合わせて使用していると、Pharアーカイブを使用するときにバグがあるようです。eAccelerator拡張を無効にするか、異なるPHPのキャッシュ(例えば、FastCGIとAPC)を使用してください。',
	'Connection test' => '接続テスト',
	'A connection to update.contao.org could be established.' => 'update.contao.orgに接続できそうです。',
	'A connection to update.contao.org could not be established.' => 'update.contao.orgに接続できませんでした。',
	'Maybe the request has been blocked by a firewall. Please contact your server administrator.' => 'おそらくリクエストはファイアーウォールで遮断されています。サーバー管理者に連絡してください。',
	'You can use the Live Update on this server.' => 'このサーバーでライブアップデートを使用できます。',
	'You cannot use the Live Update on this server.' => 'このサーバーでライブアップデートは使用できません。',
	'Extension Repository' => '機能拡張リポジトリ',
	'PHP SOAP extension' => 'PHPのSOAP拡張',
	'The PHP SOAP extension is available.' => 'PHPのSOAP拡張を利用できます。',
	'The PHP SOAP extension is not available.' => 'PHPのSOAP拡張を利用できません。',
	'The PHP SOAP extension is required to communicate with the Extension Repository server. You can enable it by compiling PHP with the --enable-soap flag. Depending on your Contao version, you might also be able to use the %s extension.' => '機能拡張リポジトリのサーバーとのやりとりにPHPのSOAP拡張が必要です。PHPを--enable-soapフラッグでコンパイルすると有効にできます。Contaoのバージョンによっては、%s機能拡張も使用できるかもしれません。',
	'A connection to contao.org could be established.' => 'contao.orgに接続できました。',
	'A connection to contao.org could not be established.' => 'contao.orgに接続できませんでした。',
	'You can use the Extension Repository on this server.' => 'このサーバーで機能拡張リポジトリを使用できます。',
	'You cannot use the Extension Repository on this server.' => 'このサーバーで機能拡張リポジトリは使用できません。',
	'Validate an installation' => 'インストールしているContaoを検証',
	'Could not find a Contao installation.' => 'インストールしてあるContaoを見つけられません。',
	'To validate an existing installation, please upload the "check" folder to your installation directory.' => '既にインストールしたContaoを検証するには、インストールしているディレクトリに"check"のフォルダーをアップロードしてください。',
	'Unknown version' => '不明なバージョン',
	'The installed version %s is not (yet) supported.' => 'インストールしているContaoバージョン%sは(まだ)サポートしていません。',
	'There is no version file for your Contao installation. Are you using a stable Contao version and do you have the latest version of the Contao Check?' => 'インストールしているContaoにバージョンのファイルがありません。安定版のContaoを使用して、最新のバージョンのContaoチェックを使用していますか?',
	'Version' => 'バージョン',
	'Found a Contao %s installation.' => 'インストールしてあるContao %sを検出しました。',
	'Missing files' => '欠けているファイル',
	'Corrupt files' => '破損したファイル',
	'Missing optional files' => '見当たらないオプションのファイル',
	'Your installation is up to date.' => 'インストールしているContaoは最新の状態です。',
	'Your installation is not up to date.' => 'インストールしているContaoは最新の状態ではありません。',
);
