<?php
/**
 * Zen Cart German Specific (158 code in 157)
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * translation 2021 by klartexter
 
 * @version $Id: time_out.php 2024-05-13 16:05:14Z webchills $

 */

define('NAVBAR_TITLE','Temps de connexion dépassé');
define('HEADING_TITLE','Oups ! Votre session a expiré.');
define('HEADING_TITLE_LOGGED_IN', 'Excusez-moi, mais vous n\'êtes pas autorisé à faire ce travail. ');
define('TEXT_INFORMATION','Nous sommes désolés, mais pour des raisons de sécurité, nous avons dû couper votre connexion,
pour empêcher les personnes non autorisées d\'accéder à vos données d\'accès.
  <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '">Connexion</a>
  Votre panier d\'achat sera restauré'.
  (DOWNLOAD_ENABLED == 'true' ? ', Vous avez téléchargé des articles et souhaitez les recevoir' : '') . ',
  Allez à <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">Mon compte</a> pour visualiser votre commande.');
define('TEXT_INFORMATION_LOGGED_IN', 'Vous êtes connecté à votre compte et vous pouvez maintenant continuer vos achats. Sélectionnez un élément de menu.');
define('HEADING_RETURNING_CUSTOMER', 'Se connecter');