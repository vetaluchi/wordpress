<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'wordpress');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '12345');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'v#Z3tIob<g0*&_n5*?PnWSs/z+r[jXl>w`{=5(NOBt=zLRR2x&PUl$A~`(}7|M>6');
define('SECURE_AUTH_KEY',  '1Cm|$%HCm&*ain^@yB=i>1C3hS)o[//c5KA$q?7GJV|[:1^g.W/7F{$iC~C#qVUs');
define('LOGGED_IN_KEY',    '~7oLtF&R$<k&;Uh!t!``VSi8<|i(]#h!YuDwIg54T;`eH;goo{RNDPpQ6U$sw^8p');
define('NONCE_KEY',        'g7{s8KRN_5*%~g1x!E 9)}%aNx*3:8Zs+8A7;j!STE_9lk{vv~o=9OQ3,9dg^jzO');
define('AUTH_SALT',        'q45`:T5K)>#v Q91T_h4;liKy`~5#auu)L#0xyubRbX[G!h,w:T+<m;8OIWs]/FS');
define('SECURE_AUTH_SALT', 'HHXvrUc-Xns8FzV0EXFZSV~63a4ZZg)Nc,f1LSDNr<@l=|7R7 $r4gA%:YRO;Q7n');
define('LOGGED_IN_SALT',   '9P4F5qHt)nH]eg+KvtP2#<5<3t[<a9)3Q>I{{*Av]r{dBEp*O]z9pg_I.Pn1[qE@');
define('NONCE_SALT',       'Et$<NQt{;aE8zc*9sZM5d<.kv*]+&kLkRPC$>R*J*e24fENU1-)jrL0/~])1tfmR');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
