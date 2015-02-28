<?php
/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Ten plik zawiera konfiguracje: ustawie� MySQL-a, prefiksu tabel
 * w bazie danych, tajnych kluczy i ABSPATH. Wi�cej informacji
 * znajduje si� na stronie
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Kodeksu. Ustawienia MySQL-a mo�esz zdoby�
 * od administratora Twojego serwera.
 *
 * Ten plik jest u�ywany przez skrypt automatycznie tworz�cy plik
 * wp-config.php podczas instalacji. Nie musisz korzysta� z tego
 * skryptu, mo�esz po prostu skopiowa� ten plik, nazwa� go
 * "wp-config.php" i wprowadzi� do niego odpowiednie warto�ci.
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - mo�esz uzyska� je od administratora Twojego serwera ** //
/** Nazwa bazy danych, kt�rej u�ywa� ma WordPress */
define('DB_NAME', 'cms_01');

/** Nazwa u�ytkownika bazy danych MySQL */
define('DB_USER', 'Kotek');

/** Has�o u�ytkownika bazy danych MySQL */
define('DB_PASSWORD', 'kotek123');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'localhost');

/** Kodowanie bazy danych u�ywane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8');

/** Typ por�wna� w bazie danych. Nie zmieniaj tego ustawienia, je�li masz jakie� w�tpliwo�ci. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmie� ka�dy klucz tak, aby by� inn�, unikatow� fraz�!
 * Mo�esz wygenerowa� klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generuj�cego tajne klucze witryny WordPress.org}
 * Klucze te mog� zosta� zmienione w dowolnej chwili, aby uczyni� niewa�nymi wszelkie istniej�ce ciasteczka. Uczynienie tego zmusi wszystkich u�ytkownik�w do ponownego zalogowania si�.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6[0,!T)0_1Rp1W1*D|o,1ZbT34H ~sbCAChi$D.^U+$kEaqD{C|F@MxlGiylm(-/');
define('SECURE_AUTH_KEY',  '~F,@HA2f8(+mq6RN}VDA*ncH2PB3du3jiXO#BnAE5Eo2KXHz`GB@Ml$vAE~xCb+K');
define('LOGGED_IN_KEY',    '.UJ:j+.d%z.-WsCt`se@_v$=+9v[3!LfS3X2|kzBI|%zZv(P*@UL=&wwTB9Yy>-A');
define('NONCE_KEY',        '1l#f=$8$a6]2z9G^Be(lc_&>c=Oyc?gqhL;wZ2l^VlqSzy38*.s<mXx)7lNK0Kmv');
define('AUTH_SALT',        'qyip:qx rf1F{{t{tM?/izr;V`>i|B@E0l=yL!|G$Lo(: 5=OK|u[9]yx.W^Au77');
define('SECURE_AUTH_SALT', '5i@BFyg0/!Y~$m?qTa)iJ)|OZQh+&J~x=?4dEc4U>h-l6!{0O7,lB 9t+^hH_Aif');
define('LOGGED_IN_SALT',   '@{am&m&q(|;k_0d?:h1-Zb7Tg}!mGjux~9yGW3+!}~8Wa8`WlbnU,jM:xV!#)J{)');
define('NONCE_SALT',       '{~*NEYxYo:=d{Zo boL.6;Zy8.~B;fNi1Awf76?K{!yy}GE 3g9w6_65X&WJTTYz');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Mo�esz posiada� kilka instalacji WordPressa w jednej bazie danych,
 * je�eli nadasz ka�dej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkre�lenia, prosz�!
 */
$table_prefix  = 'wp_';

/**
 * Dla programist�w: tryb debugowania WordPressa.
 *
 * Zmie� warto�� tej sta�ej na true, aby w��czy� wy�wietlanie ostrze�e�
 * podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby tw�rcy wtyczek oraz motyw�w u�ywali
 * WP_DEBUG w miejscach pracy nad nimi.
 */
define('WP_DEBUG', false);

/* To wszystko, zako�cz edycj� w tym miejscu! Mi�ego blogowania! */

/** Absolutna �cie�ka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i do��czane pliki. */
require_once(ABSPATH . 'wp-settings.php');
