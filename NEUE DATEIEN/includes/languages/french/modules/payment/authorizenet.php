<?php
/**
 * Authorize.net SIM Payment Module
 *
 
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * translation 2021 by klartexter
 * @version $Id: authorizenet.php 2022-01-14 19:05:14Z webchills $

 */

  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ADMIN_TITLE', 'Authorize.net (SIM)');
define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CATALOG_TITLE', 'Carte de crédit');  // Payment option title as displayed to the customer


  if (defined('MODULE_PAYMENT_AUTHORIZENET_STATUS') && MODULE_PAYMENT_AUTHORIZENET_STATUS == 'True') {
    define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION', '<a target="_blank" href="https://account.authorize.net/">Authorize.net Merchant Login</a>' . (MODULE_PAYMENT_AUTHORIZENET_TESTMODE != 'Production' ? '<br /><br />Testing Info:<br /><b>Automatic Approval Credit Card Numbers:</b><br />Visa#: 4007000000027<br />MC#: 5424000000000015<br />Discover#: 6011000000000012<br />AMEX#: 370000000000002<br /><br /><b>Note:</b> These credit card numbers will return a decline in live mode, and an approval in test mode.  Any future date can be used for the expiration date and any 3 or 4 (AMEX) digit number can be used for the CVV Code.<br /><br /><b>Automatic Decline Credit Card Number:</b><br /><br />Card #: 4222222222222<br /><br />This card number can be used to receive decline notices for testing purposes.' : '') . '<br /><br /><strong>SETTINGS</strong><br />Your "response" and "receipt" and "relay" URL settings in your Authorize.net Merchant Profile can be left BLANK, or if necessary you can set the "relay URL" to point to https://your_domain.com/foldername/index.php?main_page=checkout_process<br><br>If you are having problems with this, see <a href="http://www.zen-cart.com/content.php?303-how-to-set-up-the-authorizenet-sim-payment-module" target="_blank">the SIM Setup FAQ article</a> for detailed setup instructions.');
  } else {
    define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION', '<a target="_blank" href="http://reseller.authorize.net/application.asp?id=131345">Click Here to Sign Up for an Account</a><br /><br /><a target="_blank" href="https://account.authorize.net/">Cliquez pour vous connecter à l\'espace marchand Authorize.net</a><br /><br /><strong>Requirements:</strong><br /><hr />*<strong>Authorize.net Account</strong> (see link above to signup)<br />*<strong>Authorize.net username and transaction key</strong> available from your Merchant Area<br><br>See <a href="http://www.zen-cart.com/content.php?303-how-to-set-up-the-authorizenet-sim-payment-module" target="_blank">the SIM Setup FAQ article</a> for detailed setup instructions.');
  }


define('MODULE_PAYMENT_AUTHORIZENET_TEXT_TYPE','Type de carte de crédit:');
define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_OWNER','Titulaire de carte:');
define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_NUMBER','Numéro de carte:');
define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_EXPIRES','Valable jusqu\'au:');
define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CVV', 'Chiffre de contrôle de carte de crédit:');
define('MODULE_PAYMENT_AUTHORIZENET_TEXT_POPUP_CVV_LINK', 'Qu\'est-ce que c\'est?');
define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_OWNER','* Le nom du titulaire de la carte doit être au moins ' . CC_OWNER_MIN_LENGTH . ' caractères!');
define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_NUMBER','* Le numéro de carte doit être au moins ' . CC_NUMBER_MIN_LENGTH . ' caractères!');
define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_CVV', '* Le chiffre à trois ou quatre chiffres figurant au verso de la carte de crédit doit être entré.\n');
define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR_MESSAGE','Une erreur s\'est produite lors de la vérification de la carte de crédit. Veuillez réessayer.');
define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DECLINED_MESSAGE','Votre carte de crédit a été refusée. Pour de plus amples informations, veuillez contacter votre banque');
define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR','Erreur de carte de crédit!');
