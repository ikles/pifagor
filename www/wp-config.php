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
define('DB_NAME', 'pifagor');

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
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'exVccC6*z%dU4L(T[d?qAeG,]QEsh4rKx;mlTH{4?8aVbb;4}::>,RB.mmz`R!RT');
define('SECURE_AUTH_KEY',  'T1<:qlm$_7tAFZXKQZ$=I$xjYLhWD@X]wlC:/FBG5L^t2H[*3&5mIaE* ~_X25H|');
define('LOGGED_IN_KEY',    '_E2v!7E$r8yJ9a{aCB67!.~!~zU6;T5hYRll-Tma0&T2!g)1nKsR,9b9R,0BfL>j');
define('NONCE_KEY',        '7q!}=nSt944t3{^O2% {~t.flKjKqIi)mg~>uRRw}MfcbLWA{#BWPEN^#U42}KQ<');
define('AUTH_SALT',        'Z[GwAfPh^vV=X~XUp(C2baYHBPUE(b0R?V|OnbZfd8:BkC-XV3vV6Gp[9/ 3jk2-');
define('SECURE_AUTH_SALT', 'w[-uIocYMvT8R(&^hkXF_5S]Hl?-8f>Lo=#KAovVyg:,t0905001}::a0@}AzuC]');
define('LOGGED_IN_SALT',   '%CC9~[U(0 YZ[E37Kp)WjH`yE?+tzJKY+A+TG%p|rR`&hxQTpRaHz*0mu.8$DJIF');
define('NONCE_SALT',       '}w7`;j*C#: Q/?v9f*g+N1J}1r&Q>uaNq3w`f437^[|~E$dj0?}!5V~X=fc42Nfn');

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
