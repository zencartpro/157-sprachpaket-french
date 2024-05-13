<?php
/**
 * Zen Cart German Specific
 * @package languageDefines
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * translation 2021 by klartexter
 
 * @version $Id: login.php 2019-06-24 19:05:14Z webchills $
 */

define('NAVBAR_TITLE','Se connecter');
define('HEADING_TITLE','Bienvenue, veuillez vous connecter.');

define('HEADING_NEW_CUSTOMER','Vous êtes nouveau ici ? Alors créez un compte s\'il vous plaît');
define('HEADING_NEW_CUSTOMER_SPLIT', 'Nouveaux clients');

define('TEXT_NEW_CUSTOMER_INTRODUCTION','Un compte client chez ' . STORE_NAME . ' vous pouvez, par exemple, faire vos achats confortablement, consulter vos commandes en cours, vos commandes précédentes et bien plus encore.');
define('TEXT_NEW_CUSTOMER_INTRODUCTION_SPLIT', 'Avez-vous un compte PayPal ? Vous voulez payer rapidement avec une carte de crédit ? Cliquez sur le bouton PayPal ci-dessous pour utiliser l\'option "PayPal Express".');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_DIVIDER', '<span class="larger">ou</span><br>');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_SPLIT', 'Un compte client chez ' . STORE_NAME . ' vous pouvez, par exemple, faire vos achats confortablement, consulter vos commandes en cours et précédentes et profiter de tous les avantages réservés aux clients.');

define('HEADING_RETURNING_CUSTOMER','Des clients réguliers : Veuillez vous connecter');
define('HEADING_RETURNING_CUSTOMER_SPLIT', 'Des clients réguliers ');

define('TEXT_RETURNING_CUSTOMER_SPLIT', 'Pour continuer, veuillez vous connecter');

define('TEXT_PASSWORD_FORGOTTEN','Oublié votre mot de passe?');

define('TEXT_LOGIN_ERROR','Attention! L\'adresse e-mail ou le mot de passe n\'ont pas été trouvés.');
define('TEXT_VISITORS_CART','<strong class="note">Note:</strong> Le contenu de votre panier visiteur actuel sera ajouté à votre panier client après votre inscription. <a href="javascript:session_win();">[Aide]</a>');

define('TABLE_HEADING_PRIVACY_CONDITIONS','Protection des données');
define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION','Veuillez confirmer notre politique de confidentialité. Vous pouvez utiliser ce <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><u>ici</u></a>.');
define('TEXT_PRIVACY_CONDITIONS_CONFIRM','J\'ai lu et accepté la politique de confidentialité.');
define('ERROR_SECURITY_ERROR', 'Il y avait une faille de sécurité quand vous avez essayé de vous connecter.');
define('TEXT_LOGIN_BANNED', 'ERREUR : Accès refusé.');
define('HEADING_PAYPAL_CUSTOMER_SPLIT', 'Connectez-vous et payez avec PayPal');
define('TEXT_PAYPAL_CUSTOMER_SPLIT', 'Paiement express avec PayPal : Lorsque vous vous inscrivez avec PayPal via le bouton PayPal Express, vos coordonnées PayPal seront utilisées pour un compte client dans notre boutique en ligne. Vous n\'avez pas besoin de saisir vos données et de traiter le paiement via PayPal.');
