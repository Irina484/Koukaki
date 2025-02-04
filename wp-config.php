<?php
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
define( 'DB_NAME', 'Koukaki' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'marie' );

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
define( 'AUTH_KEY',         'SFB?rQ*N6K_sl%rX4d+;6,Xb5GYPmp8i~32R`%?d}/pp{,xo92E=3h4_W*L5[N31' );
define( 'SECURE_AUTH_KEY',  '$4NS */ kSc2|Ez(#]n5;5m@K6Q:x<{UV*E$7`:QEdZRm%V/`9k<g7F8g~~}3PV^' );
define( 'LOGGED_IN_KEY',    'oFY5HI!eQSl&wOtk5T F/W|i!m^~Ruu|VW;=G_Wwm]{qlS1 T>zl[J,`L}{[8E^=' );
define( 'NONCE_KEY',        'P(6w]dJ-Gy|dH8WS&Uv!, <;DDO2`u(-U9UOx!2%|X`G,<-&;@3YHQ@:EN m_EZ}' );
define( 'AUTH_SALT',        '0WFLR5(8PurC(UmL@th1q+nIU<|lMEf6v+$;Bi/fe!B@]<r~vI/:9>}@?o7EnBa+' );
define( 'SECURE_AUTH_SALT', '0BxEmt)PF*kS5-h0BM%9ihPi!>ix23&_Icxh7~3w7HqIME9JllY<M>u4@`p}6dus' );
define( 'LOGGED_IN_SALT',   'j7E{7@vxg`Rj ej[S**IYn0c2;]UP$+rs%{j<;mRX]H%D<?gF_2shnT}{N!?^3s@' );
define( 'NONCE_SALT',       'ZJ0t-)95RDZMN(1-z}Lh(23_Q  b736P1g{iB]taeFZuIbW~ST[iBN_iz|{pA[f:' );
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
