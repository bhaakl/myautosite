<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'mywp' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'mugen' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'xn$Y<<RPM>whHxx.;8^rcvu$:Am}5T)N;Jq7;~yS4cd-@&Ki[hw&RGBx&p^}X1I7' );
define( 'SECURE_AUTH_KEY',  'IdMv|PEPZ<(nc(L^m)NcL7xM`|/!;EVf/T=`1 %R} xFMFsVk8OE9pEF%Bia.^zC' );
define( 'LOGGED_IN_KEY',    'U]8yf&0Ny3lF;$98T+pN<%tFx8Wc|4S0zxD^sD~a@/?PR6pH~MCv.yjXwoz*X6$z' );
define( 'NONCE_KEY',        'B?k6TPz;,cwL&}wZ={t~T94rgkE[|[0x*dbS44Q1irtA.MhN&>!.^<NSBhf^l1-<' );
define( 'AUTH_SALT',        'm1HZ2ZFOPz65@Xqb&&<7zb$5:}wCGAf<S0^7f[LBad1LvJO~Y,qS4F@`W!ATiGbq' );
define( 'SECURE_AUTH_SALT', 'DiM3Pn<{)y`}<{KL(CDNO=C(jLPHS>WTQ56pi|So(}`q%rme?Y<j#Bw!O*0@[/zt' );
define( 'LOGGED_IN_SALT',   '<W&0m8eMnzIVc1S/OjQ{|upm<p6NfSG`T%&`p`b(QkHAw4[}~T.b*FZ3hd+P$f@2' );
define( 'NONCE_SALT',       ',2P8%_,?#sEZ460VtVZy9DUfLmlvvB~?`CqIRJi#*kFrhk^nvqp|G1c`m+m#CWej' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
