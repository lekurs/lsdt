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
define( 'DB_NAME', 'lsdtv2' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'bidule' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'mg261181' );

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
define( 'AUTH_KEY',         '2P0h5x0DnYK%=l=l7p4@KK_x5jscMIk8? fvAGD30 5P>?@5c1L^KhQ>#y/~,hfQ' );
define( 'SECURE_AUTH_KEY',  'XGMi&S$=I{F0@Uvv;ac^W#E6a[P7R/ZNfs`}63tOB|jf+Q.!vVw*Ax9[7A!1XK6h' );
define( 'LOGGED_IN_KEY',    'zpnQe q{.Fe }^U{ilrQj u8+Sw&[}.~JQU!m,I$Z1[U)O$_45Lrv%-,Lxg|r%nE' );
define( 'NONCE_KEY',        '4$aEdp{qqAy`vt#=Yx,*Slg)Bk,y~uB9XN8Z&,<2+pg9l]Wp_9}D&`L=<7ZO0}y`' );
define( 'AUTH_SALT',        'y(ZGghq20k}]mBU54nbUBU4>yc%M)3&p=H]R;*J#YN1IFgjc$Yv_::P2SmTWBdfS' );
define( 'SECURE_AUTH_SALT', '640.ZO~DF#tyf8f45UJJk]7(~ypi/AmkM+<pZFM(6JAfD<.&B8n2?6(awGSVF?R.' );
define( 'LOGGED_IN_SALT',   'SwWIq%ZH=Y)Bru*qro!rSIF[-u(O4$)3VpQD[D,*TTFwq^9Vt,?I-Y`9#`k@%te%' );
define( 'NONCE_SALT',       ' ;`#NXm.!6/@O<Jr9=~/t;PP Ha$2yg6,}PX_<:7XN8uhdGyXX|$HlFbKsEkm3{q' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'ldst_';

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
