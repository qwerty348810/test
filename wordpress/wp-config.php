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
define('DB_NAME', 'test');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '>e[Y+:l.l^^y$4aWz5V=e+Q3V#7!H/A-,cJZJDxHT` |v[b`_I[@$IX7O$f`lf#T');
define('SECURE_AUTH_KEY',  'v/>jn.2VBYfB78sjYhl4(gLpukm03]lmQuXm-zV-5--h}F?^bN+OIY|1Y=4Z&,96');
define('LOGGED_IN_KEY',    '#1WiSj]AF|%q$GjoWy=Lxr=-z+$L;v|i) [i=q24K7-/.C_%Lpggap)eaw;VMn@f');
define('NONCE_KEY',        '2^Y)6q*Sc!v$qE1i9$oT.-*9v{goau=G*7+DZI<cP^9SaMr-_e^M^;/>ue9+:?33');
define('AUTH_SALT',        'XZd`fp,A1<Q<11?AUE=Z9xOK2.Kxw FuV._Kh6&:}b|3%oWD~8C{4qZ~WtLE4`B*');
define('SECURE_AUTH_SALT', 'sVH]%AS)veYgrB-rSCf T6{m}B0.1qUK)^zP:yj1DsI*l|mp_,)Sd1Blj&3:/Qq ');
define('LOGGED_IN_SALT',   '-u93t0t}|i<y-a/r_;)%Fjq]]0Z!qd!9EQe;iHZ-V+Rfd_-0M-0C3@mw3|s}0XF?');
define('NONCE_SALT',       '.C?zy/L}D6-Uv+=fe!Ow&<xgGj^frH9u!U$] |l;MR2oZwrS/|6D[aL8r4}oCQb`');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
