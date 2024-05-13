<?php
/**
 * Zen Cart German Specific (158 code in 157 /zencartpro adaptations)
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * translation 2021 by klartexter 
 * @version $Id: checkout_confirmation.php 2022-04-24 14:53:14Z webchills $
 */

define('NAVBAR_TITLE_1','Commande');
define('NAVBAR_TITLE_2','Confirmez votre commande');

define('HEADING_TITLE','Etape 3 de 3 : Commande avec paiement');
define('TEXT_ZUSATZ_SCHRITT3','Vérifiez votre commande et cliquez sur le bouton "ACHETER" au bas de cette page.');
define('BRAINTREE_MESSAGE_PLEASE_CONFIRM_ORDER', '<b>Votre carte de crédit a été vérifiée avec succès, mais aucun paiement n\'a encore été effectué. Veuillez maintenant confirmer votre commande en cliquant sur le bouton ci-dessous. Ce n\'est qu\'à ce moment-là que le paiement et la commande seront effectués.');
define('HEADING_PRODUCTS','Contenu du panier');

define('NO_COMMENTS_TEXT','Aucun');
define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', 'Dernière étape');
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '- continuer pour confirmer votre commande.');
// buttonloesung
define('TABLE_HEADING_SINGLEPRICE','Prix à l\'unité');
define('TABLE_HEADING_PRODUCTIMAGE','Image de l\'article');
define('TEXT_CONDITIONS_ACCEPTED_IN_LAST_STEP','J\'ai  <a href="' . zen_href_link(FILENAME_CONDITIONS, '', 'SSL') . '" target="_blank"><u>Termes et conditions</u></a> et <a href="' . zen_href_link(FILENAME_WIDERRUFSRECHT, '', 'SSL') . '"><u>Droit de retrait</u></a>  lu et accepté.');
define('TEXT_NON_EU_COUNTRIES','Note:<br/>Votre commande sera expédiée dans un pays hors UE. En outre, d\'autres droits de douane, taxes ou frais peuvent être encourus en relation avec votre commande, qui ne seront pas payés par nous ou facturés par nous.');
