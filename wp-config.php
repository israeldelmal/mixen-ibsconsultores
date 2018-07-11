<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'ibs');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '0gM^~k.hcez[=/20x?|SqXNy,umaYU;6`Bk+w-}}gV^a5lmR4.?gxO$oYuW;Pg`5');
define('SECURE_AUTH_KEY', '+?kkUjx5y~8}MjVFWZ7_xguLr,Zi :eU+Y~z!_a+#wd1ZM,?bN*42|LY/X&_2!I;');
define('LOGGED_IN_KEY', '}KLXtN$dDXq1uAKW3hR(]f7KCBG9Ftt;?xYLhGf6q0(U-ON/fuM=vX2.)5Z+Bi{T');
define('NONCE_KEY', 'thYi8@SO^m=cQee.D*HX4Iwk-q()c0Bmh:xKStfr1$H|6+I{D[p2_)F^JQzvT<Ug');
define('AUTH_SALT', 'Ji<0-$$+v:14}{r]N9lKMa&O*a~nygLpr{Hn6o]]S])XzE~/&1WCYETAF5rgJ^{w');
define('SECURE_AUTH_SALT', ':*%wxjQUHvPD34#Cbd;I7x38xkfeo_}pc9B<#n;L&`yejTZFw!z@suQ:`lmrO$u6');
define('LOGGED_IN_SALT', '*ZX>X9za,fD.5XZSsH_#Hl=! H0mw1! O08lz#mt{t8<V+Z|bn23:9``+7pD[QIN');
define('NONCE_SALT', 'r)V.t*6c#({ZH(QN0pV6{]M^o*VfbEFhM+bc@8lAiev2~IVZ!5 Xu7|Z[(y&a%3+');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

