<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wiki');

/** Имя пользователя MySQL */
define('DB_USER', 'inconver');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '8Q0o9Z1v');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ']NaN}Z|E-)wTD!tH92t7:_gRs_MK`7d.9)-nfYnw`%d}&B=5+#=M+coQb>Dp$ztk');
define('SECURE_AUTH_KEY',  '5{QX3W22wL}5X+Bo[?]jH|}e@Cs3c7=sp;@Tcf2LH|;!Em.I_IzHDD1;c/P6uOC:');
define('LOGGED_IN_KEY',    'U$!=tE|hQC=VlDlsW(|Q;}`+.j@`wvy,BT(#YAFf7;9L+:k[3M[T,MFl#/0$~F-Z');
define('NONCE_KEY',        '|]uhJq/P<`5F_Wb{X:.i0s#p(~/E72=*koq?>{!`TJ2rdM=$1:{U`]&h-JuK^yJW');
define('AUTH_SALT',        '8*#St;uhU(;;5y/<<N3pQI AA{=7*^]@9T~a0MNBBJ^wz@/raG@Y}U4alN)4z1ok');
define('SECURE_AUTH_SALT', 'DpleAyyLGI_ehV,MXrqA#T>$r.m||:i/B{k@+Q?3Ie-*HmfD@>8Iw9O}S3l4#Tz/');
define('LOGGED_IN_SALT',   'pt^/RqOiuqg|pzvP5%#mVn9X-Ftl8&U3LI%^LVIJ4mN}_hr>P-/E/p3QeR<e=$%8');
define('NONCE_SALT',       'Q_sn1[-[0_Q0<3zkzI~/f(T^pT!|E,NOsRqSqk6&J@d^.Swo@ ~f/w&m+O>B_0xA');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
