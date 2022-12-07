<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * translation 2021 by klartexter 
 * @version $Id: password_forgotten.php 2018-04-01 10:05:14Z webchills $

 */

define('NAVBAR_TITLE_1','Se connecter');
define('NAVBAR_TITLE_2','Mot de passe oublié');
define('HEADING_TITLE','Mot de passe oublié');
define('TEXT_MAIN','Entrez votre adresse e-mail pour recevoir un nouveau mot de passe.');

define('EMAIL_PASSWORD_REMINDER_SUBJECT',STORE_NAME . ' - Nouveau mot de passe');
define('EMAIL_PASSWORD_REMINDER_BODY','Un nouveau mot de passe a été demandé par ' . $_SERVER['REMOTE_ADDR']  . '.' . "\n\n" . 'Votre nouveau mot de passe pour \'' . STORE_NAME . '\' est:' . "\n\n" . '   %s' . "\n\nAprès vous être connecté avec le nouveau mot de passe, veuillez changer le mot de passe à l\'un de vos choix dans la section\'Mon compte\'.");
define('SUCCESS_PASSWORD_SENT', 'Si votre adresse email est liée à un compte client dans notre boutique, un nouveau mot de passe vient d\'être envoyé à votre adresse email.');
