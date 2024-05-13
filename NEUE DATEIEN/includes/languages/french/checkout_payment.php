<?php
/**
 * Zen Cart German Specific
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * translation 2021 by klartexter
 
 * @version $Id: checkout_payment.php 2022-01-14 18:05:14Z webchills $
 */

define('NAVBAR_TITLE_1', 'Commande - Étape 2');
define('NAVBAR_TITLE_2', ' Etape 2 - Sélectionner le mode de paiement');

define('HEADING_TITLE', 'Étape 2 de 3 : Renseignements sur le paiement');

define('TABLE_HEADING_BILLING_ADDRESS', 'Adresse de facturation');
define('TEXT_SELECTED_BILLING_DESTINATION', 'Votre adresse de facturation se trouve à gauche. Vous pouvez changer votre adresse de facturation en cliquant sur <em>Changer adresse</em>.');
define('TITLE_BILLING_ADDRESS', 'Adresse de facturation:');

define('TABLE_HEADING_PAYMENT_METHOD', 'Mode de paiement');
define('TEXT_SELECT_PAYMENT_METHOD', 'Veuillez sélectionner un mode de paiement pour cette commande.');
define('TITLE_PLEASE_SELECT', 'Veuillez sélectionner');

define('TABLE_HEADING_COMMENTS', 'Commentaires ou remarques');


define('TEXT_NO_PAYMENT_OPTIONS_AVAILABLE','<span class="alert">Désolé, mais nous n\'acceptons pas les paiements de votre région.</span><br>N\'hésitez pas à nous contacter pour trouver des alternatives. ');

define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', '<strong>Aller à l\'étape 3</strong>');
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '- pour continuer votre commande ...');

define('TABLE_HEADING_CONDITIONS', '<span class="termsconditions">Conditions générales de vente</span>');
define('TEXT_CONDITIONS_DESCRIPTION', '<span class="termsdescription">Veuillez confirmer nos conditions générales en cliquant sur la case à cocher. Nos termes et conditions vous pouvez <a href="' . zen_href_link(FILENAME_CONDITIONS, '', 'SSL') . '"><span class="pseudolink">ici</span></a> lecture.</span>');
define('TEXT_CONDITIONS_CONFIRM', '<span class="termsiagree">J\'ai lu et accepté les termes et conditions. La note à mon  <a href="' . zen_href_link(FILENAME_WIDERRUFSRECHT, '', 'SSL') . '"><span class="pseudolink">Retrait droit</span></a>  J\'ai compris.</span>');

define('TEXT_YOUR_TOTAL', 'Montant total');