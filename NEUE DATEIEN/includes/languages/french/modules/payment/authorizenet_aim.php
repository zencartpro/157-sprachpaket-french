<?php
/**
 * Authorize.net AIM Payment Module Language definitions
 *
 
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * translation 2021 by klartexter
 * @version $Id: authorizenet_aim.php 2019-05-09 10:10:40Z webchills $

 */


// Admin Configuration Items
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ADMIN_TITLE', 'Authorize.net (AIM)'); // Payment option title as displayed in the admin

  if (defined('MODULE_PAYMENT_AUTHORIZENET_AIM_STATUS') && MODULE_PAYMENT_AUTHORIZENET_AIM_STATUS == 'True') {
    define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DESCRIPTION', '<a target="_blank" href="https://account.authorize.net/">Authorize.net Merchant Login</a>' . (MODULE_PAYMENT_AUTHORIZENET_AIM_TESTMODE != 'Production' ? '<br><br>Testing Info:<br><b>Automatic Approval Credit Card Numbers:</b><br>Visa#: 4007000000027<br>MC#: 5424000000000015<br>Discover#: 6011000000000012<br>AMEX#: 370000000000002<br><br><b>Note:</b> These credit card numbers will return a decline in live mode, and an approval in test mode.  Any future date can be used for the expiration date and any 3 or 4 (AMEX) digit number can be used for the CVV Code.<br><br><b>Automatic Decline Credit Card Number:</b><br><br>Card #: 4222222222222<br><br>This card number can be used to receive decline notices for testing purposes.<br><br>' : '') . '<br><br>See <a href="http://www.zen-cart.com/content.php?291-how-to-set-up-the-authorizenet-aim-payment-module" target="_blank">the AIM Setup FAQ article</a> for detailed setup instructions.');
  } else {
    define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DESCRIPTION', '<a target="_blank" href="http://reseller.authorize.net/application.asp?id=131345">Click Here to Sign Up for an Account</a><br><br><a target="_blank" href="https://account.authorize.net/">Authorize.net Merchant Area</a><br><br><strong>Requirements:</strong><br><hr />*<strong>Authorize.net Account</strong> (see link above to signup)<br>*<strong>CURL is required </strong>and MUST be compiled with SSL support into PHP by your hosting company<br>*<strong>Authorize.net username and transaction key</strong> available from your Merchant Area<br><br>See <a href="http://www.zen-cart.com/content.php?291-how-to-set-up-the-authorizenet-aim-payment-module" target="_blank">the AIM Setup FAQ article</a> for detailed setup instructions.');
  }
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ERROR_CURL_NOT_FOUND', 'CURL fonctions introuvables - requises pour le module de paiement AIM Authorize.net');

// Catalog Items
define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CATALOG_TITLE', 'Carte de crédit');  // Payment option title as displayed to the customer
define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_TYPE', 'Carte de crédit:');
define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_OWNER', 'Titulaire de carte:');
define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_NUMBER', 'Numéro de carte:');
define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_EXPIRES', 'Carte valable jusqu\'au:');
define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CVV', 'Numéro CVV:');
define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_POPUP_CVV_LINK', 'Qu\'est-ce que c\'est que ça ??');
define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_OWNER', '* Le nom du titulaire de la carte doit être composé d\'au moins ' . CC_OWNER_MIN_LENGTH . ' caractères.\n');
define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_NUMBER', '* Le numéro de carte de crédit doit comporter au moins ' . CC_NUMBER_MIN_LENGTH . ' caractères.\n');
define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_CVV', '* Vous trouverez le code de sécurité à 3 ou 4 chiffres au dos de votre carte de crédit.\n');
define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DECLINED_MESSAGE', 'Cette carte de crédit a été refusée. Veuillez corriger vos entrées et réessayer ou contactez-nous pour plus d\'instructions.');
define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ERROR', 'Erreur de carte de crédit!');
define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_COMM_ERROR', 'Impossible de traiter le paiement en raison d\'une erreur de communication. Vous pouvez réessayer ou communiquer avec nous pour obtenir de l\'aide.');

// admin tools:
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_BUTTON_TEXT', 'Remboursement');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_CONFIRM_ERROR', 'ERREUR : Vous avez demandé un remboursement mais n\'avez pas activé la case de confirmation.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_INVALID_REFUND_AMOUNT', 'ERREUR : Vous avez demandé un remboursement mais vous avez entré un montant invalide.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CC_NUM_REQUIRED_ERROR', 'ERREUR : Vous avez demandé un remboursement mais n\'avez pas entré les 4 derniers chiffres de votre numéro de carte de crédit.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_INITIATED', 'Remboursement initialisé. Transaction ID : %s - Code d\'authentification: %s');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPTURE_CONFIRM_ERROR', 'ERREUR : Vous avez essayé d\'accepter le remboursement mais n\'avez pas activé la case de confirmation.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_BUTTON_TEXT', 'Remboursements');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_INVALID_CAPTURE_AMOUNT', 'ERREUR : Vous avez demandé un remboursement mais vous n\'avez pas entré le montant.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_TRANS_ID_REQUIRED_ERROR', 'ERREUR : Veuillez entrer l\'ID de transaction.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPT_INITIATED', 'Nous avons commencé le processus de remboursement. Montant : %s.  Transaction ID : %s - Code d\'authentification: %s');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_BUTTON_TEXT', 'Annuler le paiement');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_CONFIRM_ERROR', 'ERREUR : Vous avez demandé une annulation mais n\'avez pas activé la case de confirmation.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_INITIATED', 'L\'annulation a commencé. Transaction ID : %s - Code d\'authentification: %s ');


  
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TITLE', '<strong>Transactions de remboursement</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND', 'Vous pouvez transférer l\'argent au payeur (carte de crédit) ici:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_CONFIRM_CHECK', 'Cochez la case avant de confirmer.: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_AMOUNT_TEXT', 'Entrez le montant du remboursement.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_CC_NUM_TEXT', 'Entrez les 4 derniers chiffres du numéro de compte..');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TRANS_ID', 'Saisissez l\'ID de transaction (facultatif).:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TEXT_COMMENTS', 'Remarque (n\'apparaît que dans l\'historique de la commande):');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_DEFAULT_MESSAGE', 'Remboursements effectués');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_SUFFIX', 'Vous pouvez exécuter un remboursement pour un ordre d\'un montant égal au montant initial. Vous devez spécifier les 4 derniers chiffres du numéro de compte sous lequel l\'ordre a été exécuté. <br>les remboursements peuvent être exécutés dans les 120 jours suivant la date de la transaction originale.');

  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TITLE', '<strong>Opérations de contre-passation</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE', 'Ici, vous pouvez annuler les paiements déjà autorisés:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_AMOUNT_TEXT', 'Entrez le montant: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPTURE_CONFIRM_CHECK', 'Activez la case à cocher pour confirmer: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TRANS_ID', 'Saisissez ici l\'ID de transaction d\'origine.: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TEXT_COMMENTS', 'Remarque (N\'apparaît que dans l\'historique des commandes):');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'Contre-passation de paiements.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_SUFFIX', 'Les paiements peuvent être effectués dans les 30 jours suivant la transaction. Le remboursement est UNIQUE.<br>Sûr Sir que le montant est correct.<br>Le montant original sera inversé si vous n\'entrez pas un montant.');

  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_TITLE', '<strong>Supprimer des transactions</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID', 'Vous pouvez supprimer les transactions qui n\'ont pas encore été payées.:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_CONFIRM_CHECK', 'Activez la case à cocher pour confirmer:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_TEXT_COMMENTS', 'Remarque (N\'apparaît que dans l\'historique des commandes):');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_DEFAULT_MESSAGE', 'Transaction supprimée');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_SUFFIX', 'Les suppressions ne peuvent être effectuées qu\'une fois par jour..');

