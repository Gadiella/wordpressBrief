<?php
define( 'WP_CACHE', true );
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'ecommerce' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '-D~qV/Kz[JZM`gn>?Y2!{MxW5b8w5bvz=rnI5x~k?Il/}cItuP^SFjXQm./QY:Wo' );
define( 'SECURE_AUTH_KEY',  'eEdza5-`eHKC]&Dr)p[;u7Kk*i=w|j}lrSE?Q$}}tO,~7a91.7`yR`7$0@B(7Yk$' );
define( 'LOGGED_IN_KEY',    '=}Niryz#L hORP *^g@x25~Q*F)O_Yb/j_&_PG8O39q?XcQ}V#L?=zI=wV~+7v5z' );
define( 'NONCE_KEY',        'x[(7@V7fGuO7g@J;P0zqA!oF):<vg/PX1_B/a{XC7%ZA.{(1mZUrjZ:}Lu?IQN>(' );
define( 'AUTH_SALT',        '$Dl=+81U ,QmXm&4sXbMAeV5BP5K!~5yruQV+2N9c`zLcOj>>q%Ld)ZxW?Ub`7bV' );
define( 'SECURE_AUTH_SALT', 'g2IG7xL;P=oE$9r_fsu1cnMf$R)d@&H$WmI63SAJlu3)g.Y-XR)WxIt v /<ijz@' );
define( 'LOGGED_IN_SALT',   '@Q*J~{I=X67cA*9zxXvm)N1/Z1w;8.hP}8ei}=~LPqy<=g5[FS<Y+Y?[=A-)^NPh' );
define( 'NONCE_SALT',       'ZC ,i1#a2mF<,zYt[eUY1f;;Xin~[~RnHsXZ%Khh[pz>kcli4Eo_k][f+`ZS<fPY' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
