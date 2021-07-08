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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'brain_source' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&3y|3)j#:RLx[b!M8RtQMo!k#yW+^3|,1hw~tG4fLd&S<,SI=yz>.(jE8DQq2X?j' );
define( 'SECURE_AUTH_KEY',  'cnJo6YY$|jgq#c5z{kAT]nZNfZHF2ASO?+[m8[q89W8xL6Oitk/YjRq(%zbJNad-' );
define( 'LOGGED_IN_KEY',    'P8KydZ=z88`$4A+gB~/+o=7j%|q_h5@x?~_.ab;hBQ4[hk`$!VCv^S3OB,UgZY[9' );
define( 'NONCE_KEY',        '*_7Q=NObTuV+mmLvb2z-3G$,@o4qQP{YSGn60>qsks4Sc8,.o#(qv=VX3Qnikv=j' );
define( 'AUTH_SALT',        '+@HPo`3C}~+*A1`?_FJcJ4NRQCYYZ@{Ox7k}.IB*EZ<Z%A.*O-,_uATUMEE2B|Is' );
define( 'SECURE_AUTH_SALT', ':Cb}%$!53|S0sw$El8krI[>K}^I&@0S!qCYs8umB^g8*<)gGn[iX)=^_+z4`e.1n' );
define( 'LOGGED_IN_SALT',   'd40]24P=iFu3y?(n~MQk;OgHKxu)v4rlH*+)J3mRq#S0w/8.71X>LGRcfsm~Wm7l' );
define( 'NONCE_SALT',       'o|BHkxAvVQ}Y~r5|+w War{6mX%KIou.3y|.A~RZ)EIlB.JSQ3Lw,UNJf5gc#4M)' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
