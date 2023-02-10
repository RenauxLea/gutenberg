<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'cms' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ' :Q38p7+KFM|nFcg19a3|:{84fb)70z-0};U?%i5aLyz=jlxVvjw ]b]0_zp[ <w' );
define( 'SECURE_AUTH_KEY',  'sY?qJZ*5r:nY=}_h_${I*t9>:s07T#sHkm6hujJ:uy!W=g=;9m0k*y[W~2WQl4Q;' );
define( 'LOGGED_IN_KEY',    'adS?c(-}T0/1v_>N8i+>@pM(7 e)F@7o,&[*p_Q$X|ycNo@9N}-VRoU.[>QH|+qP' );
define( 'NONCE_KEY',        '-z47Kouof!nx)E|L]R3U3BL$g0=k/=N~XC]^ad-m|GQ%5.(ZgB?F%XyNH|sN#0ys' );
define( 'AUTH_SALT',        'b(]Zs|i./Fp_4BEGRIYv[Eq<Xr,^)~4G1P{3Ggglm9CF/DaBQbsNM|1JwAC $Ycb' );
define( 'SECURE_AUTH_SALT', '(6~{c]@d4:?~J5V_)H5jDW(6Dzk( 8M@u4FJ*z!tJ^N}qj^!}G2,QvkTo{(`q{39' );
define( 'LOGGED_IN_SALT',   '@TviU!V,4LDynv!(42.O5nGib+Uh_`B?<ri,zWXb0AOw;yGcpY/PS{`t@w=}$!_+' );
define( 'NONCE_SALT',       'O7H1xYw!S;+52cn|&Sbs,AipW%ajt&cW`!]#c_LF]}:9H(8f((y9#6oozVRK_]@V' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
