<?php
/**
* Zen Cart German Specific
* @copyright Copyright 2003-2022 Zen Cart Development Team
* Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * translation 2021 by klartexter
* @version $Id: paypalwpp.php 2022-04-17 08:57:24Z webchills $

 */

define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_EC', 'PayPal Express');

define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PRO20', 'PayPal Express (Pro 2.0 Payflow Edition) (UK)');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PF_EC', 'PayPal Payflow Pro - Gateway');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PF_GATEWAY', 'PayPal Express via Payflow Pro');

if (IS_ADMIN_FLAG === true) {
    if (!defined('MODULE_PAYMENT_PAYPALWPP_MODULE_MODE')) define('MODULE_PAYMENT_PAYPALWPP_MODULE_MODE', 'undefined');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_DESCRIPTION', '<strong>PayPal Express Checkout</strong>%s<br/><br/><img src="images/checkout-logo-large-de.png" alt="PayPal Express"/><br/><br>Ce module est une intégration <b>NVP/SOAP API </b>.<br/>Info pour créer les identifiants API (<b>API permission with signature </b>) vous trouverez <a href="https://www.paypal.com/at/smarthelp/article/wie-fordere-ich-eine-api-berechtigung-mit-signatur-oder-zertifikat-an-faq3196" target=":blank">ici</a>.<br/><br/>' . (substr(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE,0,7) == 'Payflow' ? '<a href="https://manager.paypal.com/loginPage.do?partner=ZenCart" target="_blank">Gérer votre compte PayPal.</a>' : '<a href="https://www.paypal.com/de/webapps/mpp/merchant" target="_blank">Gérer votre compte PayPal.</a>') . '<br><br><font color="green">Guide de configuration:</font><br><span class="alert">1. </span><a href="https://www.paypal.com/de/webapps/mpp/merchant" target="_blank">Créez un compte PayPal.</a><br>' . 
  (defined('MODULE_PAYMENT_PAYPALWPP_STATUS') ? '' : '... et appuyez sur le bouton "Installer" pour activer PayPal Express Checkout.</br>') . 
  (MODULE_PAYMENT_PAYPALWPP_MODULE_MODE == 'PayPal' && (!defined('MODULE_PAYMENT_PAYPALWPP_APISIGNATURE') || MODULE_PAYMENT_PAYPALWPP_APISIGNATURE == '') ? '<span class="alert">2. </span><strong>Données d\'accès API manquantes!</strong> Ce module utilise l\'option <strong>signature API </strong> -- Veuillez entrer votre nom d\'utilisateur, mot de passe et signature dans les champs ci-dessous.' : (substr(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE,0,7) == 'Payflow' && (!defined('MODULE_PAYMENT_PAYPALWPP_PFUSER') || MODULE_PAYMENT_PAYPALWPP_PFUSER == '') ? '<span class="alert">2. </span><strong>PAYFLOW Credentials</strong> Ce module nécessite vos données partenaires <strong>PAYFLOW </strong>. Veuillez les saisir dans les champs ci-dessous. Ces données sont nécessaires au bon déroulement du processus de transaction.' : '<span class="alert">2. </span>Veuillez vous assurer que vous avez bien saisi les données nécessaires pour ce module.') ) . 
  (MODULE_PAYMENT_PAYPALWPP_MODULE_MODE == 'PayPal' ? '<br><span class="alert">3. </span>Activer dans votre compte Paypal <strong>Avis de paiement immédiat</strong>:<br>sous mon profil, choisissez <em> Paramètres de notification de paiement immédiate</em><ul style="margin-top: 0.5;"><li>et mettez un crochet dans la case correspondante.</li><li>Si une URL n\'est pas déjà spécifiée, veuillez entrer l\'URL suivante:<br>'.str_replace('index.php?main_page=index','ipn_main_handler.php',zen_catalog_href_link(FILENAME_DEFAULT, '', 'SSL')) . '</li></ul>' : '') . 
  '<hr/><font color="green"><strong>Conditions préalables:</strong></font><br>*<strong>CURL</strong> est utilisé pour la communication avec la passerelle et doit donc être disponible et activé sur votre espace web. Si vous utilisez un proxy CURL (NON recommandé!), veuillez le configurer sous Configuration -> Ma boutique<hr />');
}

define('MODULE_PAYMENT_PAYPALWPP_TEXT_DESCRIPTION', '<strong>PayPal</strong>');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_TITLE', 'Carte de crédit');
define('MODULE_PAYMENT_PAYPALWPP_EC_TEXT_TITLE', 'PayPal');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_EC_HEADER', 'Schneller, sicherer Checkout mit PayPal:');
define('MODULE_PAYMENT_PAYPALWPP_EC_TEXT_TYPE', 'PayPal Express Checkout');
define('MODULE_PAYMENT_PAYPALWPP_DP_TEXT_TYPE', 'PayPal Direct Payment');
define('MODULE_PAYMENT_PAYPALWPP_PF_TEXT_TYPE', 'Carte de crédit');  //(used for payflow transactions)
define('MODULE_PAYMENT_PAYPALWPP_ERROR_HEADING', 'Il ne nous a malheureusement pas été possible de traiter votre carte de crédit.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CARD_ERROR', 'Les informations de carte de crédit fournies contiennent une erreur, veuillez vérifier vos coordonnées et réessayer.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_FIRSTNAME', 'Titulaire de la carte de crédit Prénom:');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_LASTNAME', 'Nom de famille du titulaire de la carte de crédit');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_OWNER', 'Détenteur de carte de crédit:');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_TYPE', 'Carte de crédit:');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_NUMBER', 'Numéro de carte de crédit:');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_EXPIRES', 'Valable jusqu\'au:');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_ISSUE', 'Date d\'émission du carte de crédit:');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_CHECKNUMBER', 'Chiffre de contrôle:');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_CHECKNUMBER_LOCATION', '(au dos de votre carte de crédit)');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_DECLINED', 'Votre carte de crédit a été refusée. Veuillez réessayer une autre carte de crédit ou contacter votre banque pour plus d\'informations.');
define('MODULE_PAYMENT_PAYPALWPP_INVALID_RESPONSE', 'Nous sommes désolés de ne pas avoir pu exécuter votre ordre. N\'hésitez pas à nous contacter pour rechercher des alternatives possibles.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_GEN_ERROR', 'Une erreur s\'est produite lors de la prise de contact avec le bureau de la carte de crédit. Veuillez réessayer plus tard ou nous contacter.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_EMAIL_ERROR_MESSAGE', 'Cher propriétaire de magasin,' . "\n" . 'Une erreur s\'est produite lors du lancement d\'une transaction PayPal Express Checkout. Seule l\'erreur "Numéro" était affichée à votre client.  Voici les détails exacts de l\'erreur.' . "\n\n");
define('MODULE_PAYMENT_PAYPALWPP_TEXT_EMAIL_ERROR_SUBJECT', 'ALARME : Erreur de paiement PayPal Express');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADDR_ERROR', 'L\'adresse donnée semble être invalide ou ne correspond pas à celle déposée sur Paypal. Veuillez choisir une autre adresse et réessayer.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CONFIRMEDADDR_ERROR', 'L\'adresse sélectionnée sur Paypal n\'est pas une adresse confirmée. Veuillez en sélectionner un autre et réessayer.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_INSUFFICIENT_FUNDS_ERROR', 'PayPal n\'a pas pu mener à bien cette transaction. Veuillez choisir un autre mode de paiement ou vérifier vos options de paiement dans votre compte PayPal avant de continuer.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_PAYPAL_DECLINED', 'Excusez-moi. PayPal a refusé la transaction et nous a dit que vous devriez communiquer avec le service à la clientèle de PayPal pour de plus amples renseignements. Pour compléter votre achat, veuillez choisir un autre mode de paiement.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_ERROR', 'Une erreur s\'est produite lors du traitement des informations de votre carte de crédit. Veuillez réessayer ou nous contacter.');
define('MODULE_PAYMENT_PAYPALWPP_FUNDING_ERROR','Problème avec la source de financement ; veuillez aller sur Paypal.com et payer directement à ' . STORE_OWNER_EMAIL_ADDRESS); 
define('MODULE_PAYMENT_PAYPALWPP_TEXT_BAD_CARD', 'Nous sommes désolés, mais nous n\'acceptons pas votre carte de crédit. Veuillez en choisir un autre ou contactez-nous.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_BAD_LOGIN', 'Il y a eu un problème lors de la vérification de votre compte Paypal, veuillez réessayer.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_JS_CC_OWNER', '* Le titulaire de la carte de crédit doit avoir une longueur minimale de' . CC_OWNER_MIN_LENGTH . ' caractères.\n');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_JS_CC_NUMBER', '* Le numéro de carte de crédit doit avoir au moins une longueur de ' . CC_NUMBER_MIN_LENGTH . ' caractères.\n');
define('MODULE_PAYMENT_PAYPALWPP_ERROR_AVS_FAILURE_TEXT', 'ALARME : Erreur de vérification d\'adresse. ');
define('MODULE_PAYMENT_PAYPALWPP_ERROR_CVV_FAILURE_TEXT', 'ALARME : Erreur de vérification du code CVV. ');
define('MODULE_PAYMENT_PAYPALWPP_ERROR_AVSCVV_PROBLEM_TEXT', ' Bestellung wird erst vom Shopinhaber überprüft.La commande n\'est vérifiée que par le propriétaire du magasin.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_UNILATERAL', ' - Vous devez saisir vos identifiants API PayPal avant de pouvoir utiliser le traitement avancé des transactions.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_STATE_ERROR', 'Le statut attribué à votre compte Paypal n\'est pas valide, veuillez modifier vos paramètres.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_NOT_WPP_ACCOUNT_ERROR', 'Désolé, nous n\'avons pas pu accepter votre méthode de paiement Paypal Express Checkout. Soit les paramètres de la boutique sont incorrects, soit le mode de paiement n\'a pas encore été activé par Paypal pour cette boutique en ligne. Veuillez prendre contact avec nous');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_SANDBOX_VS_LIVE_ERROR', 'Désolé, nous n\'avons pas pu compléter la transaction. Le compte Paypal de cette boutique en ligne n\'est pas configuré correctement (bac à sable et statut live activé). Veuillez contacter le propriétaire du magasin et l\'informer de cette erreur.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_WPP_BAD_COUNTRY_ERROR', 'Nous sommes désolés, le compte Paypal du propriétaire de la boutique est situé dans un pays qui n\'est pas encore supporté par Paypal Express Checkout. Veuillez choisir un autre mode de paiement.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_NOT_CONFIGURED', '<span class="alert">&nbsp;(REMARQUE : Le module n\'a pas encore été configuré.)</span>');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_GETDETAILS_ERROR', 'Correction d\'un problème de réception des détails de la transaction. ');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_TRANSSEARCH_ERROR', 'Il y a eu un problème pour trouver des transactions correspondant à vos informations. ');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_ERROR', 'Un problème a empêché l\'exécution de la transaction. ');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_ERROR', 'Il y a eu un problème avec le remboursement du paiement. ');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_ERROR', 'Il y a eu un problème pour autoriser la transaction. ');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPT_ERROR', 'Un problème a empêché l\'exécution de la transaction. ');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUNDFULL_ERROR', 'Votre demande de remboursement a été rejetée par Paypal.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_REFUND_AMOUNT', 'Vous avez demandé un remboursement partiel, mais vous n\'avez pas saisi de montant.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_FULL_CONFIRM_ERROR', 'Vous avez demandé le remboursement complet mais n\'avez pas coché la case Confirmer.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_AUTH_AMOUNT', 'Vous avez demandé l\'autorisation, mais vous n\'avez pas spécifié de montant.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_CAPTURE_AMOUNT', 'Vous avez demandé une capture, mais vous n\'avez pas spécifié de montant.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_CONFIRM_CHECK', 'Confirmer');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_CONFIRM_ERROR', 'Vous vouliez annuler une transaction, mais vous n\'avez pas coché la case Confirmer.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_FULL_CONFIRM_CHECK', 'Confirmer');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_CONFIRM_ERROR', 'Vous avez demandé une autorisation, mais vous n\'avez pas coché la case Confirmer.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPTURE_FULL_CONFIRM_ERROR', 'Vous avez demandé une saisie de fonds, mais vous n\'avez pas coché la case Confirmer.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_INITIATED', 'Remboursement PayPal pour les % commencés. ID de transaction : %s. Rafraîchir la page (F5) pour voir l\'état actuel.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_INITIATED', 'L\'autorisation PayPal pour les %s démarrés. Rafraîchir la page (F5) pour voir l\'état actuel.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPT_INITIATED', 'PayPal Capture pour les %s démarrés. ID de réception : %s. Rafraîchir la page (F5) pour voir l\'état actuel.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_INITIATED', 'La demande d\'annulation de PayPal a commencé. ID de transaction : %s. Rafraîchir la page (F5) pour voir l\'état actuel.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_GEN_API_ERROR', 'Il y a eu une erreur dans la transaction à exécuter. Veuillez consulter le guide de l\'API ou les journaux de transactions pour plus d\'informations.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_ZONE_ERROR', 'Nous sommes désolés, mais pour le moment il ne nous est pas possible d\'utiliser le mode de paiement Paypal pour votre région géographique. Veuillez choisir un autre mode de paiement.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_ORDER_ALREADY_PLACED_ERROR', 'Vous semblez avoir envoyé votre commande deux fois. Veuillez vérifier les détails de votre commande sous Mon compte. Si votre commande n\'y figure pas, mais a été payée via PayPal, veuillez nous contacter pour que nous puissions clarifier cela avec vous.');


define('MODULE_PAYMENT_PAYPALWPP_TEXT_BUTTON_ALTTEXT', 'Cliquez ici pour payer avec PayPal Express Checkout');
// EC buttons -- Do not change these values:
define('MODULE_PAYMENT_PAYPALWPP_EC_BUTTON_IMG', 'https://www.paypalobjects.com/webstatic/de_DE/i/de-btn-expresscheckout.gif');
define('MODULE_PAYMENT_PAYPALWPP_EC_BUTTON_IMG_MOBILE', 'https://www.paypalobjects.com/webstatic/de_DE/i/de-btn-expresscheckout.gif');
define('MODULE_PAYMENT_PAYPALWPP_EC_BUTTON_SM_IMG', 'https://www.paypalobjects.com/webstatic/de_DE/i/de-btn-expresscheckout.gif');
define('MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_IMG', 'https://www.paypalobjects.com/webstatic/de_DE/i/de-pp-logo-100px.png');
define('MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_TXT', 'Acheter avec PayPal');
define('MODULE_PAYMENT_PAYPALWPP_MARK_BUTTON_TXT', '');

////////////////////////////////////////
// Styling of the PayPal Payment Page. Uncomment to customize.
// A BETTER WAY, HOWEVER, is to simply create a Custom Page Style at PayPal and mark it as Primary or name it in your Zen Cart PayPal EC settings.
  //define('MODULE_PAYMENT_PAYPALWPP_HEADER_IMAGE', '');  // this should be an HTTPS URL to the image file
  //define('MODULE_PAYMENT_PAYPALWPP_PAGECOLOR', '');  // 6-digit hex value
 ////// Styling of pseudo cart contents display section
  //define('MODULE_PAYMENT_PAYPAL_LOGO_IMAGE', ''); // https path to your customized logo
  //define('MODULE_PAYMENT_PAYPAL_CART_BORDER_COLOR', ''); // 6-digit hex value
////////////////////////////////////////


  // These are used for displaying raw transaction details in the Admin area:
define('MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME', 'Prénom:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME', 'Nom:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME', 'Nom de société:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME', 'Adresses Nom:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET', 'Rue:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY', 'Ville:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE', 'État/Code postal:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP', 'Code postal:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY', 'Pays:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS', 'Courriel:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID', 'ID Ebay:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID', 'ID payé:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS', 'Statut de paiement:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS', 'Adresses Statut:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE', 'Type de paiement:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS', 'Type de paiement Statut:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON', 'Attente en raison de:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE', 'Facture:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE', 'Date de paiement:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY', 'Devise:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT', 'Somme:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE', 'Coûts Mode de paiement:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE', 'Cours de change:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS', 'Contenu du panier d\'achat:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE', 'Trans. Typ:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID', 'Trans. ID:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID', 'Associated Trans. IDENTIFIANT:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TITLE', '<strong>Remboursement</strong>');
define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_FULL', 'Si vous souhaitez un remboursement complet de cette commande, veuillez cliquer ici.:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_FULL', 'Remboursement complet');
define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_PARTIAL', 'Remboursement partiel');
define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_FULL_OR', '<br>... ou préciser le montant partiel ');
define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PAYFLOW_TEXT', 'Entrez le ');
define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PARTIAL_TEXT', 'pour remboursement partiel');
define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_SUFFIX', '*Un remboursement complet n\'est pas possible après un remboursement partiel.<br/>>*Plusieurs remboursements partiels sont possibles, mais seulement jusqu\'à l\'utilisation complète du montant restant.');
define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_COMMENTS', '<strong>Note pour le client:</strong>');
define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_DEFAULT_MESSAGE', 'Remboursé par le propriétaire du magasin.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_FULL_CONFIRM_CHECK','Confirmation: ');
define('MODULE_PAYMENT_PAYPAL_ENTRY_COMMENTS', 'Messages système: ');
define('MODULE_PAYMENT_PAYPALWPP_ENTRY_PROTECTIONELIG', 'Autorisation de protection:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_TITLE', '<strong>Autorisation de commande</strong>');
define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_PARTIAL_TEXT', 'Si vous souhaitez autoriser une partie de ces commandes, saisissez le montant ici:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_BUTTON_TEXT_PARTIAL', 'Autoriser');
define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_SUFFIX', '');
define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_COMMENTS', '<strong>Note pour le client:</strong>');
define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_DEFAULT_MESSAGE', 'Remboursé par le propriétaire du magasin.');
define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TITLE', '<strong>Autorisations Interception</strong>');
define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FULL', 'Si vous souhaitez intercepter tout ou partie des autorisations en cours pour cette commande, veuillez saisir le montant souhaité. Veuillez également cocher la case Confirmation avant de cliquer sur le bouton Intercepter...<br>');
define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_BUTTON_TEXT_FULL', 'Interception');
define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_AMOUNT_TEXT', 'Montant:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FINAL_TEXT', 'C\'est le dernier test d\'interception?');
define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_SUFFIX', '');
define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TEXT_COMMENTS', '<strong>Note pour le client:</strong>');
define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'Merci beaucoup pour votre commande.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPTURE_FULL_CONFIRM_CHECK','Confirmation: ');
define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TITLE', '<strong>Annuler les autorisations de commande</strong>');
define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID', 'Si vous souhaitez annuler une autorisation, veuillez saisir ici l\'ID correspondant et cliquer sur Annuler.');
define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TEXT_COMMENTS', '<strong>Note pour le client:</strong>');
define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_DEFAULT_MESSAGE', 'Merci d\'être l\'un de nos clients, revenez nous voir bientôt.');
define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_BUTTON_TEXT_FULL', 'faire avorter');
define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_SUFFIX', '');
define('MODULE_PAYMENT_PAYPAL_ENTRY_TRANSSTATE', 'Trans. State:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTHCODE', 'Auth. Code:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_AVSADDR', 'Correspondance d\'adresse AVS:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_AVSZIP', 'AVS ZIP match:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_CVV2MATCH', 'CVV2 match:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_DAYSTOSETTLE', 'Jours à régler:');
// this text is used to announce the username/password when the module creates the customer account and emails data to them:
define('EMAIL_EC_ACCOUNT_INFORMATION', 'Lorsque vous avez payé avec PayPal Express, un compte client a été automatiquement créé dans notre boutique afin que vous puissiez vous reconnecter et vérifier l\'état de votre commande. Vous pouvez vous connecter à votre compte client avec les données d\'accès suivantes:');
define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_ONETIME_CHARGES_PREFIX', 'Charges non récurrentes liées à ');
define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_SHORT', 'Surtaxes');
define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_LONG', 'Frais de manutention et autres frais');
define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_SHORT', 'Rabais');
define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_LONG', 'Rabais appliqués, rabais, codes promo, bons d\'achat, chèques-cadeaux, etc.');
define('MODULES_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_SUBJECT', 'Paiement en cas de chèque frauduleux État d\'avancement: ');
define('MODULES_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_INTRO', 'Il s\'agit d\'une notification automatisée pour vous informer que PayPal a signalé le paiement d\'une nouvelle commande comme devant faire l\'objet d\'un examen de paiement par son équipe de lutte contre la fraude. Normalement, l\'examen est terminé dans les 36 heures. Il est FORTEMENT CONSEILLE DE NE PAS ENVOYER la commande tant que le paiement n\'a pas été revu et corrigé. Vous pouvez voir l\'état actuel de la commande en vous connectant à votre compte PayPal et en consultant les transactions récentes.');
  define('MODULES_PAYMENT_PAYPALWPP_TEXT_BLANK_ADDRESS', 'PROBLÈME : Désolé. PayPal a renvoyé inopinément une adresse vide. <br/>Pour compléter votre commande, veuillez entrer votre adresse en cliquant sur le bouton Créer un compte et en créant un compte dans notre boutique. Ensuite, retournez à la caisse et sélectionnez à nouveau PayPal comme mode de paiement. Désolé pour le dérangement. Si vous avez des difficultés avec votre commande, veuillez utiliser le formulaire de contact et nous dire ce qui ne fonctionne pas. Nous nous ferons un plaisir de vous aider.');
  define('MODULES_PAYMENT_PAYPALWPP_AGGREGATE_CART_CONTENTS', 'Tous les articles dans votre panier (vous trouverez les détails dans la boutique sous Mon compte et dans votre confirmation de commande)');
define('MODULES_PAYMENT_PAYPALWPP_MESSAGE_STACK_CHECKOUT_SHIPPING', 'Vous payez avec PayPal et utilisez une adresse de livraison déposée PayPal.<br/>Nous voulons nous assurer que cette adresse de livraison est correcte, nous vous avons donc redirigé vers cette page.<br/>Veuillez vérifier l\'adresse de livraison et la modifier si nécessaire.');