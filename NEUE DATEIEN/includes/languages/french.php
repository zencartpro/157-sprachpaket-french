<?php
/**
 * Zen Cart German Specific 
 * translations 2021 by klartexter
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: french.php 2022-12-07 11:20:57Z webchills $
 */

// FOLLOWING WERE moved to meta_tags.php
//define('TITLE', 'Zen Cart!');
//define('SITE_TAGLINE', 'The Art of E-commerce');
//define('CUSTOM_KEYWORDS', 'ecommerce, open source, shop, online shopping');
// END: moved to meta_tags.php

  define('FOOTER_TEXT_BODY', 'Copyright &copy; ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '">' . STORE_NAME . '</a>. Powered by <a href="https://www.zen-cart-pro.at" rel="noopener noreferrer" target="_blank">Zen Cart</a>');

// look in your $PATH_LOCALE/locale directory for available locales..
 $locales = [fr_FR.UTF8', 'fr.UTF8', 'fr_FR.UTF-8', 'fr.UTF-8','fr_FR@euro', 'fr_FR', 'fr', 'fr', 'fra.fra'];
  @setlocale(LC_TIME, $locales);

define('DATE_FORMAT_LONG', '%A, %d. %B %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd.m.Y'); // this is used for date()


////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
  if (!function_exists('zen_date_raw')) {
function zen_date_raw($date, $reverse = false){
     if ($reverse){
         return substr($date, 3, 2) . substr($date, 0, 2) . substr($date, 6, 4);
         }else{
        // edit by cyaneo for german Date support - thx to hugo13
        // return substr($date, 6, 4) . substr($date, 0, 2) . substr($date, 3, 2);
        return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
         }
    }
  }

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
define('LANGUAGE_CURRENCY', 'EUR');

// Global entries for the <html> tag

if (FACEBOOK_OPEN_GRAPH_STATUS == "true") {
define('HTML_PARAMS','dir="ltr" lang="fr" prefix="og: http://ogp.me/ns# fb: http://www.facebook.com/2008/fbml"');

} else {
define('HTML_PARAMS', 'dir="ltr" lang="fr"');
}

// charset for web pages and emails
define('CHARSET', 'utf-8');


// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
define('TEXT_GV_NAME', 'Bon-cadeau');
define('TEXT_GV_NAMES', 'Bons-cadeaux');

// used for redeem code, redemption code, or redemption id
define('TEXT_GV_REDEEM', 'Numéro de bon');


// text for gender
define('MALE', 'Monsieur');
define('FEMALE', 'Madame');
define('DIVERS', 'Divers/pas de titre');


// text for date of birth example
define('DOB_FORMAT_STRING', 'dd.mm.yyyy');

//text for sidebox heading links
define('BOX_HEADING_LINKS', ' [plus]');

// categories box text in sideboxes/categories.php
define('BOX_HEADING_CATEGORIES', 'Catégories');

// manufacturers box text in sideboxes/manufacturers.php
define('BOX_HEADING_MANUFACTURERS', 'Fabricant');

// whats_new box text in sideboxes/whats_new.php
define('BOX_HEADING_WHATS_NEW', 'Nouveaux articles');
define('CATEGORIES_BOX_HEADING_WHATS_NEW', 'Nouveaux articles ...');


define('BOX_HEADING_FEATURED_PRODUCTS', 'Articles recommandés');
define('CATEGORIES_BOX_HEADING_FEATURED_PRODUCTS', 'Articles recommandés ...');
define('TEXT_NO_FEATURED_PRODUCTS', 'D\'autres articles recommandés seront publiés prochainement. Nous vous invitons à visiter régulièrement notre boutique.');

define('TEXT_NO_ALL_PRODUCTS', 'D\'autres articles seront publiés prochainement. Nous vous invitons à visiter régulièrement notre boutique.');
define('CATEGORIES_BOX_HEADING_PRODUCTS_ALL', 'Tous les articles ...');

// quick_find box text in sideboxes/quick_find.php
define('BOX_HEADING_SEARCH', 'Rechercher');
define('BOX_SEARCH_ADVANCED_SEARCH', 'Recherche avancée');


// specials box text in sideboxes/specials.php
define('BOX_HEADING_SPECIALS', 'Offres spéciales');
define('CATEGORIES_BOX_HEADING_SPECIALS', 'Offres spéciales ...');

// reviews box text in sideboxes/reviews.php
define('BOX_HEADING_REVIEWS', 'Évaluations');
define('BOX_REVIEWS_WRITE_REVIEW', 'Rédigez un Évaluation.');
define('BOX_REVIEWS_NO_REVIEWS', 'Il n\'y a pas encore de évaluations.');
define('BOX_REVIEWS_TEXT_OF_5_STARS', '%s de 5 étoiles!');

// shopping_cart box text in sideboxes/shopping_cart.php
define('BOX_HEADING_SHOPPING_CART', 'Panier d\'achat');
define('BOX_SHOPPING_CART_EMPTY', 'Votre panier est vide');
define('BOX_SHOPPING_CART_DIVIDER', '&nbsp;x&nbsp;');

// order_history box text in sideboxes/order_history.php
define('BOX_HEADING_CUSTOMER_ORDERS', 'Articles commandés');

// best_sellers box text in sideboxes/best_sellers.php
define('BOX_HEADING_BESTSELLERS', 'Meilleurs articles');


// notifications box text in sideboxes/products_notifications.php
define('BOX_HEADING_NOTIFICATIONS', 'Notifications');
define('BOX_NOTIFICATIONS_NOTIFY', 'Me prévenir des mises à jour de <strong>%s</strong>');
define('BOX_NOTIFICATIONS_NOTIFY_REMOVE', 'Ne m\'informez plus des mises à jour de <strong>%s</strong>');

// manufacturer box text
define('BOX_HEADING_MANUFACTURER_INFO', 'Information du fabricant');
define('BOX_MANUFACTURER_INFO_HOMEPAGE', '%s Site internet');
define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', 'Plus d\'articles');

// languages box text in sideboxes/languages.php
define('BOX_HEADING_LANGUAGES', 'Langues');

// currencies box text in sideboxes/currencies.php
define('BOX_HEADING_CURRENCIES', 'Monnaies');

// information box text in sideboxes/information.php
define('BOX_HEADING_INFORMATION', 'Information');
define('BOX_INFORMATION_PRIVACY', 'Protection des données');
define('BOX_INFORMATION_CONDITIONS', 'Conditions générales');
define('BOX_INFORMATION_SHIPPING', 'Prix et frais de port');
define('BOX_INFORMATION_WIDERRUFSRECHT', 'Droit de rétractation');
define('BOX_INFORMATION_ZAHLUNGSARTEN', 'Modes de paiement');
define('BOX_INFORMATION_IMPRESSUM', 'Mentions légales');
define('BOX_INFORMATION_CONTACT', 'Nous contacter');

define('BOX_INFORMATION_UNSUBSCRIBE', 'Se désabonner du bulletin d\'information');

define('BOX_INFORMATION_SITE_MAP', 'Plan du site');

// information box text in sideboxes/more_information.php - were TUTORIAL_
define('BOX_HEADING_MORE_INFORMATION', 'Weitere Informationen');
define('BOX_INFORMATION_PAGE_2', 'Page 2');
define('BOX_INFORMATION_PAGE_3', 'Page 3');
define('BOX_INFORMATION_PAGE_4', 'Page 4');


//New billing address text
define('SET_AS_PRIMARY', 'Utiliser comme adresse par défaut');


// javascript messages
define('JS_ERROR', 'Des erreurs se sont produites.\n\n Veuillez modifier ce qui suit:\n\n');

define('JS_REVIEW_TEXT', '* Votre saisie de texte dans la classification de l\'article doit être d\'au moins ' . REVIEW_TEXT_MIN_LENGTH . ' caractères.');
define('JS_REVIEW_RATING', '* Veuillez choisir une évaluation pour cet article.');

define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Veuillez sélectionner un mode de paiement.');

define('JS_ERROR_SUBMITTED', 'La page a déjà été transférée. Cliquez \"OK\" et attendez la fin du processus.');

define('ERROR_NO_PAYMENT_MODULE_SELECTED', 'Veuillez sélectionner un mode de paiement.');
define('ERROR_CONDITIONS_NOT_ACCEPTED', 'Veuillez confirmer nos conditions générales de vente!');
define('ERROR_PRIVACY_STATEMENT_NOT_ACCEPTED', 'Veuillez confirmer notre politique de confidentialité!');

define('CATEGORY_COMPANY', 'Société');
define('CATEGORY_PERSONAL', 'Vos données personnelles');
define('PULL_DOWN_DEFAULT', 'Veuillez sélectionner votre pays');
define('PLEASE_SELECT', 'Veuillez sélectionner ...');
define('TYPE_BELOW', 'Veuillez sélectionner ci-dessous ...');

define('ENTRY_COMPANY', 'Société:');
define('ENTRY_COMPANY_ERROR', 'Veuillez entrer le nom d\'une société.');
define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_GENDER', 'Salutation:');
define('ENTRY_GENDER_ERROR', 'Veuillez sélectionner votre formule de politesse.');
define('ENTRY_GENDER_TEXT', '*');
define('ENTRY_FIRST_NAME', 'Prénom:');
define('ENTRY_FIRST_NAME_ERROR', 'Votre prénom doit être au moins ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caractères.');
define('ENTRY_FIRST_NAME_TEXT', '*');
define('ENTRY_LAST_NAME', 'Nachname:');
define('ENTRY_LAST_NAME_ERROR', 'Votre nom de famille doit être au moins ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caractères.');
define('ENTRY_LAST_NAME_TEXT', '*');
define('ENTRY_DATE_OF_BIRTH', 'Date de naissance:');
define('ENTRY_DATE_OF_BIRTH_ERROR', 'Votre date de naissance doit avoir la forme suivante: JJ.MM.AAAA (par ex. 21.02.1970)');
define('ENTRY_DATE_OF_BIRTH_TEXT', '* (par ex. 21.02.1970)');
define('ENTRY_EMAIL_ADDRESS', 'Adresse e-mail:');
define('ENTRY_EMAIL_ADDRESS_ERROR', 'Votre adresse e-mail doit être au moins ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caractères.');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'Votre adresse e-mail ne semble pas correcte. S\'il vous plaît, changez ceci.');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'Votre adresse email est déjà enregistrée. Veuillez vous connecter ou vous inscrire avec une autre adresse e-mail.');
define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
define('ENTRY_EMAIL_ADDRESS_CONFIRM', 'Confirmer l\'e-mail:');
define('ENTRY_EMAIL_ADDRESS_CONFIRM_NOT_MATCHING', 'Les adresses e-mail que vous fournissez ne correspondent pas.');
define('ENTRY_NICK', 'Forum Nick Nom:');
define('ENTRY_NICK_TEXT', '*');   // note to display beside nickname input field
define('ENTRY_NICK_DUPLICATE_ERROR', 'Le surnom existe déjà.');

define('ENTRY_STREET_ADDRESS', 'Rue:');
define('ENTRY_STREET_ADDRESS_ERROR', 'La route doit comprendre au moins ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caractères.');
define('ENTRY_STREET_ADDRESS_TEXT', '*');
define('ENTRY_SUBURB', 'Adresse ligne 2:');

define('ENTRY_SUBURB_TEXT', '');
define('ENTRY_POST_CODE', 'Code postal:');
define('ENTRY_POST_CODE_ERROR', 'Le code postal doit comprendre au moins ' . ENTRY_POSTCODE_MIN_LENGTH . ' caractères.');
define('ENTRY_POST_CODE_TEXT', '*');
define('ENTRY_CITY', 'Ville:');
define('ENTRY_CUSTOMERS_REFERRAL', 'Comment avez-vous entendu parler de nous ');

define('ENTRY_CITY_ERROR', 'La ville doit comprendre au moins ' . ENTRY_CITY_MIN_LENGTH . ' caractères.');
define('ENTRY_CITY_TEXT', '*');
define('ENTRY_STATE', 'État fédéral:');
define('ENTRY_STATE_ERROR', 'L\'État fédéral doit être composé d\'au moins ' . ENTRY_STATE_MIN_LENGTH . ' caractères.');
define('ENTRY_STATE_ERROR_SELECT', 'Veuillez sélectionner un état fédéral dans le menu déroulant.');
define('ENTRY_STATE_TEXT', '*');

define('ENTRY_COUNTRY', 'Pays:');
define('ENTRY_COUNTRY_ERROR', 'Veuillez sélectionner un pays dans le menu déroulant.');
define('ENTRY_COUNTRY_TEXT', '*');
define('ENTRY_TELEPHONE_NUMBER', 'Téléphone:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Le numéro de téléphone doit être composé d\'au moins ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caractères.');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
define('ENTRY_FAX_NUMBER', 'Fax:');

define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER', 'S\'abonner à la bulletin d\'information.');
define('ENTRY_NEWSLETTER_TEXT', '');

define('ENTRY_PASSWORD', 'Mot de passe:');
define('ENTRY_PASSWORD_ERROR', 'Le mot de passe doit être composé d\'au moins ' . ENTRY_PASSWORD_MIN_LENGTH . ' caractères.');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'La confirmation du mot de passe ne correspond pas au mot de passe saisi.');
define('ENTRY_PASSWORD_TEXT', '* (pas moins que ' . ENTRY_PASSWORD_MIN_LENGTH . ' caractères)');
define('ENTRY_PASSWORD_CONFIRMATION', 'Confirmation du mot de passe:');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT', 'Mot de passe actuel:');
define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_ERROR', 'Le mot de passe doit être composé d\'au moins ' . ENTRY_PASSWORD_MIN_LENGTH . ' caractères.');
define('ENTRY_PASSWORD_NEW', 'Nouveau mot de passe:');
define('ENTRY_PASSWORD_NEW_TEXT', '*');
define('ENTRY_PASSWORD_NEW_ERROR', 'Le nouveau mot de passe doit être composé d\'au moins ' . ENTRY_PASSWORD_MIN_LENGTH . ' caractères.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'La confirmation du mot de passe ne correspond pas au nouveau mot de passe saisi.');
define('PASSWORD_HIDDEN', '--CACHÉ--');

define('FORM_REQUIRED_INFORMATION', '* = Champ obligatoire');
define('ENTRY_REQUIRED_SYMBOL', '*');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="alert">*</span>');

  // constants for use in zen_prev_next_display function
define('TEXT_RESULT_PAGE', '');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Montrer <strong>%d</strong> à <strong>%d</strong> (de <strong>%d</strong> Articles)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Montrer <strong>%d</strong> à <strong>%d</strong> (de <strong>%d</strong> Ordres)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Afficher les <strong>% d </ strong> à <strong>% d </ strong> (à partir des <strong>% d </ strong> avis)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Montrer <strong>%d</strong> à <strong>%d</strong> (de <strong>%d</strong> nouveaux produits)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Afficher <strong>%d</strong> à <strong>%d</strong> (de <strong>%d</strong> offres spéciales)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_FEATURED_PRODUCTS', 'Montrer <strong>%d</strong> à <strong>%d</strong> (de <strong>%d</strong> articles recommandés)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_ALL', 'Montrer <strong>%d</strong> à <strong>%d</strong> (de <strong>%d</strong> Articles)');


define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'Page précédente');
define('PREVNEXT_TITLE_NEXT_PAGE', 'Page suivante');

define('PREVNEXT_TITLE_PAGE_NO', 'Page %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Pages %d précédentes');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Pages suivantes %d');

define('PREVNEXT_BUTTON_PREV', '[<< Précédent]');
define('PREVNEXT_BUTTON_NEXT', '[Suivant >>]');
define('ARIA_PAGINATION_ROLE_LABEL_GENERAL','Seitenumbruch');
define('ARIA_PAGINATION_ROLE_LABEL_FOR','%s Seitenumbruch'); // eg: "Search results Pagination"
define('ARIA_PAGINATION_PREVIOUS_PAGE','Gehe zur vorherigen Seite');
define('ARIA_PAGINATION_NEXT_PAGE','Gehe zur nächsten Seite');
define('ARIA_PAGINATION_CURRENT_PAGE','Aktuelle Seitee');
define('ARIA_PAGINATION_CURRENTLY_ON',', jetzt auf Seite %s');
define('ARIA_PAGINATION_GOTO','Gehe zu ');
define('ARIA_PAGINATION_PAGE_NUM','Seite %s');
define('ARIA_PAGINATION_ELLIPSIS_PREVIOUS','Gehe zur vorherigen Seitengruppe');
define('ARIA_PAGINATION_ELLIPSIS_NEXT','Gehe zur nächsten Seitengruppe');
define('ARIA_PAGINATION_','');

define('TEXT_BASE_PRICE', 'de ');

define('TEXT_CLICK_TO_ENLARGE', 'Agrandir l\'image');
define('TEXT_CLOSE_WINDOW_IMAGE', 'Cliquer sur l\'image pour la fermer');

define('TEXT_SORT_PRODUCTS', 'Trier articles ');
define('TEXT_DESCENDINGLY', 'ascendant');
define('TEXT_ASCENDINGLY', 'descendant');
define('TEXT_BY', ' de ');

define('TEXT_REVIEW_BY', 'de %s');

define('TEXT_REVIEW_DATE_ADDED', 'enregistrés: %s');
define('TEXT_NO_REVIEWS', 'Il n\'y a pas d\'avis pour le moment.');

define('TEXT_NO_NEW_PRODUCTS', 'D\'autres nouveaux articles seront publiés prochainement. Nous vous invitons à visiter régulièrement notre boutique.');

define('TEXT_UNKNOWN_TAX_RATE', 'Taux d\'imposition inconnu');

define('WARNING_COULD_NOT_LOCATE_LANG_FILE', 'AVERTISSEMENT : Le fichier langue n\'a pas pu être trouvé: ');

define('TEXT_CCVAL_ERROR_INVALID_DATE', 'La date d\'expiration de la carte de crédit que vous avez indiquée n\'est pas valide. Veuillez vérifier à nouveau vos données et répéter le processus.');
define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'Le numéro de carte de crédit que vous avez fourni n\'est pas valide. Veuillez vérifier à nouveau vos données et répéter le processus.');
define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'Les 4 premiers chiffres du numéro de carte de crédit que vous avez fourni sont les suivants: %s. Si ce numéro est correct, nous ne pouvons pas accepter cette carte de crédit. Veuillez corriger le numéro entré si nécessaire ou contacter votre banque.');
define('BOX_INFORMATION_DISCOUNT_COUPONS', 'Coupon action');
define('BOX_INFORMATION_GV', TEXT_GV_NAME . ' FAQ');
define('VOUCHER_BALANCE', TEXT_GV_NAME . ' Compte: ');
define('BOX_HEADING_GIFT_VOUCHER', TEXT_GV_NAME . ' Compte');
define('GV_FAQ', TEXT_GV_NAME . ' FAQ');
define('ERROR_REDEEMED_AMOUNT', 'Félicitations!<br />Vous avez utilisé avec succès votre bon d\'achat.<br />Montant: ');
define('ERROR_NO_REDEEM_CODE', 'Ils n\'ont pas de ' . TEXT_GV_REDEEM . '  est entré.');
define('ERROR_NO_INVALID_REDEEM_GV', 'Non valable ' . TEXT_GV_NAME . ' ou ' . TEXT_GV_REDEEM);
define('TABLE_HEADING_CREDIT', 'Crédit disponible');
define('TEXT_SEND_OR_SPEND','Vous avez du crédit sur votre ' . TEXT_GV_NAME . 'compte. Si vous souhaitez <br />vous pouvez envoyer ce crédit à une autre personne en cliquant sur le bouton ci-dessous.');
define('TEXT_BALANCE_IS', 'Votre solde est: ');
define('TEXT_AVAILABLE_BALANCE', 'Vous ' . TEXT_GV_NAME . ' Compte');

// payment method is GV/Discount
define('PAYMENT_METHOD_GV', 'Chèque-cadeau / bon d\'action');
define('PAYMENT_MODULE_GV', 'CC/BA');

define('TABLE_HEADING_CREDIT_PAYMENT', 'Crédit disponible');

//coupon redeem error messages (checkout payment)
define('TEXT_COUPON_LINK_TITLE', 'Bedingungen für diesen Gutscheincode ansehen');
define('TEXT_INVALID_REDEEM_COUPON', 'Code d\'action invalide');
define('TEXT_INVALID_REDEEM_COUPON_MINIMUM', 'La valeur minimale de commande pour ce coupon promotionnel est la suivante %s');
define('TEXT_INVALID_COUPON_PRODUCT', 'Der Gutscheincode "%1$s" ist für die Artikel in Ihrem Warenkorb nicht gültig.');
define('TEXT_INVALID_COUPON_ORDER_LIMIT', 'Sie haben die maximal erlaubte Anzahl von Bestellungen (%2$u) überschritten, zum Einlösen dieses Gutscheincode "%1$s".');
define('TEXT_INVALID_STARTDATE_COUPON', 'Ce coupon promotionnel n\'est actuellement pas disponible');
define('TEXT_INVALID_FINISHDATE_COUPON', 'Ce coupon action a expiré.');
define('TEXT_INVALID_USES_COUPON', 'Ce coupon action ne peut être que');
define('TEXT_INVALID_USES_USER_COUPON', 'Vous avez utilisé le coupon action %s. Ce coupon promotionnel a atteint le nombre maximum d\'échange par client.');
define('TEXT_REMOVE_REDEEM_COUPON_ZONE', 'Der Gutscheincode "%s" ist für die ausgewählte Adresse nicht gültig.');
define('TEXT_ERROR', 'Une erreur s\'est produite.');

define('TEXT_VALID_COUPON', 'Action coupon remboursé avec succès');


// more info in place of buy now
define('MORE_INFO_TEXT', '... plus d\'informations');

// IP Address
define('TEXT_YOUR_IP_ADDRESS', 'Votre adresse IP est:');

//Generic Address Heading
define('HEADING_ADDRESS_INFORMATION', 'Informations sur l\'adresse');

// cart contents
define('PRODUCTS_ORDER_QTY_TEXT_IN_CART', 'Pièces dans le panier d\'achat: ');
define('PRODUCTS_ORDER_QTY_TEXT', 'Numéro: ');
define('ARIA_QTY_ADD_TO_CART','Menge eingeben, die in den Warenkorb gelegt werden soll');
define('ARIA_EDIT_QTY_IN_CART','Menge im Warenkorb ändern');
define('ARIA_DELETE_ITEM_FROM_CART', 'Artikel aus Warenkorb löschen');

// success messages for added to cart when display cart is off
// set to blank for no messages
// for all pages except where multiple add to cart is used:
define('SUCCESS_ADDED_TO_CART_PRODUCT', 'L\'article a été ajouté au panier d\'achat ...');
// only for where multiple add to cart is used:
define('SUCCESS_ADDED_TO_CART_PRODUCTS', 'Les articles sélectionnés ont été placés dans le panier. ...');

define('TEXT_PRODUCT_WEIGHT_UNIT','kg');

// Shipping
define('TEXT_SHIPPING_WEIGHT','kg');
define('TEXT_SHIPPING_BOXES', 'Colis');

// Cross Sell
define('TEXT_XSELL_PRODUCTS', 'Pour ce produit, nous recommandons...');
// Discount Savings
define('PRODUCT_PRICE_DISCOUNT_PREFIX', 'Vous économisez ');
define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE', '% !');
define('PRODUCT_PRICE_DISCOUNT_AMOUNT', ' moins');

// Sale Maker Sale Price
define('PRODUCT_PRICE_SALE', 'Maintenant seulement ');

//universal symbols
define('TEXT_NUMBER_SYMBOL', '#');

// banner_box
define('BOX_HEADING_BANNER_BOX', 'Partenaire');
define('TEXT_BANNER_BOX', 'Visitez aussi nos partenaires ...');

// banner box 2
define('BOX_HEADING_BANNER_BOX2', 'Vous l\'avez vu? ...');
define('TEXT_BANNER_BOX2', 'Visitez-nous dès aujourd\'hui !');

// banner_box - all
define('BOX_HEADING_BANNER_BOX_ALL', 'Partenaire');
define('TEXT_BANNER_BOX_ALL', 'Visitez aussi nos partenaires ...');

// boxes defines
define('PULL_DOWN_ALL', 'Veuillez sélectionner');
define('PULL_DOWN_MANUFACTURERS', '- Remise à zéro -');
// shipping estimator
define('PULL_DOWN_SHIPPING_ESTIMATOR_SELECT', 'Veuillez sélectionner');

// general Sort By
define('TEXT_INFO_SORT_BY', 'Trié par: ');

// close window image popups
define('TEXT_CLOSE_WINDOW', ' - cliquez dans l\'image pour fermer');
// close popups
define('TEXT_CURRENT_CLOSE_WINDOW', '[ Fermer la fenêtre ]');

// iii 031104 added:  File upload error strings
define('ERROR_FILETYPE_NOT_ALLOWED', 'ERREUR : Le type de fichier n\'est pas autorisé.');
define('WARNING_NO_FILE_UPLOADED', 'AVERTISSEMENT : Aucun fichier téléchargé');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Le fichier a été enregistré avec succès.');
define('ERROR_FILE_NOT_SAVED', 'ERREUR : Fichier non sauvegardé.');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'ERREUR : La cible n\'a pas pu être écrite dessus.');
define('ERROR_DESTINATION_DOES_NOT_EXIST', 'ERREUR : La cible n\'existe pas.');
define('ERROR_FILE_TOO_BIG', 'ATTENTION : Le fichier est trop gros pour être téléchargé!<br />La commande peut être passée, veuillez nous contacter pour compléter le téléchargement avec succès.');
// End iii added

define('TEXT_BEFORE_DOWN_FOR_MAINTENANCE', 'NOTE : Notre boutique est fermée en raison de travaux d\'entretien jusqu\'à ce que (dd/mm/yy) (hh-hh): ');
define('TEXT_ADMIN_DOWN_FOR_MAINTENANCE', 'NOTE : Notre boutique est fermée pour maintenance.');

define('PRODUCTS_PRICE_IS_FREE_TEXT', 'Gratuitement!');
define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT', 'Demande de prix');
define('TEXT_CALL_FOR_PRICE', 'Demande de prix');

define('TEXT_INVALID_SELECTION',' vous avez effectué une sélection non valable: ');
define('TEXT_ERROR_OPTION_FOR', 'Avec l\'option pour ');
define('TEXT_INVALID_USER_INPUT', 'Saisie par l\'utilisateur requise<br />');

// product_listing
define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING', 'Minimum:');
define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING', 'Pièce:');


define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING', 'Maximum:');
define('TEXT_PRODUCT_MODEL', 'Artikelnummer: ');
define('TABLE_HEADING_MODEL', 'Artikelnummer');

define('TEXT_PRODUCTS_MIX_OFF', '*mixte: OFF');
define('TEXT_PRODUCTS_MIX_ON', '*mixte: ON');
define('TEXT_PRODUCTS_MIX_OFF_SHOPPING_CART', '*caractéristiques d\'attributs mixtes: OFF');
define('TEXT_PRODUCTS_MIX_ON_SHOPPING_CART', '*caractéristiques d\'attributs mixtes: ON');
define('ERROR_MAXIMUM_QTY', 'Nombre de pièces ajusté - nombre maximum de pièces ajoutées au panier d\'achat ');

define('ERROR_CORRECTIONS_HEADING', 'Veuillez corriger ce qui suit: <br />');
define('ERROR_QUANTITY_ADJUSTED', 'Erreur dans la quantité sélectionnée<br />');
define('ERROR_QUANTITY_CHANGED_FROM', ', a été modifié de: ');
define('ERROR_QUANTITY_CHANGED_TO', ' en ');

// Downloads Controller
define('DOWNLOADS_CONTROLLER_ON_HOLD_MSG', 'Note : Les téléchargements ne seront activés qu\'après confirmation du paiement..');
define('TEXT_FILESIZE_BYTES', ' bytes');
define('TEXT_FILESIZE_KBS', ' KB');
define('TEXT_FILESIZE_MEGS', ' MB');
define('TEXT_FILESIZE_UNKNOWN', 'Inconnu');

// shopping cart errors
define('ERROR_PRODUCT', '<br/>L\'article: ');
define('ERROR_PRODUCT_STATUS_SHOPPING_CART','<br />Désolé, ce produit n\'est actuellement pas dans notre stock. <br />Le produit a été retiré du panier.');
define('ERROR_PRODUCT_ATTRIBUTES','<br />L\'article: ');
define('ERROR_PRODUCT_STATUS_SHOPPING_CART_ATTRIBUTES','<br />Désolé, mais les options sélectionnées pour cet article ont changé et ne sont plus disponibles dans notre assortiment. <br />Cet article a été supprimé de votre panier.');
define('ERROR_PRODUCT_QUANTITY_MIN', '... quantité minimale ci-dessous -');
define('ERROR_PRODUCT_QUANTITY_UNITS', '... quantité invalide -');
define('ERROR_PRODUCT_OPTION_SELECTION', '... Caractéristiques d\'attribut non valides sélectionnées -');
define('ERROR_PRODUCT_QUANTITY_ORDERED', 'Le montant de votre commande:');
define('ERROR_PRODUCT_QUANTITY_MAX', '... Nombre maximum de pièces dépassé -');
define('ERROR_PRODUCT_QUANTITY_MIN_SHOPPING_CART', '... quantité minimale ci-dessous -');
define('ERROR_PRODUCT_QUANTITY_UNITS_SHOPPING_CART', '... quantité invalide -');
define('ERROR_PRODUCT_QUANTITY_MAX_SHOPPING_CART', '... Nombre maximum de pièces dépassé -');
define('WARNING_SHOPPING_CART_COMBINED', 'Attention : Votre panier actuel a été fusionné avec celui de votre dernière visite. Veuillez vérifier le contenu de votre panier avant de compléter votre commande.');
define('WARNING_PRODUCT_QUANTITY_ADJUSTED', 'La quantité a été automatiquement adaptée au stock magasin disponible. ');
define('OUT_OF_STOCK_CANT_CHECKOUT', 'Avec ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' les articles marqués d\'un \' ne sont actuellement pas en stock en quantité suffisante. <br />Veuillez modifier la quantité des articles marqués d\'un (' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ') Je vous remercie.');
define('OUT_OF_STOCK_CAN_CHECKOUT', 'Avec ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' les articles marqués ne sont pas en stock. <br />Ces articles seront livrés plus tard.');

// error on checkout when $_SESSION['customers_id' does not exist in customers table
define('ERROR_CUSTOMERS_ID_INVALID', 'Les informations client n\'ont pas pu être vérifiées!<br />Veuillez vous connecter ou créer à nouveau votre compte client. ...');

define('TABLE_HEADING_FEATURED_PRODUCTS','Articles recommandés');

define('TABLE_HEADING_NEW_PRODUCTS', 'Nouveaux articles dans %s');
define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Annonces d\'articles');
define('TABLE_HEADING_DATE_EXPECTED', 'Date de parution');
define('TABLE_HEADING_SPECIALS_INDEX', 'Offres spéciales mensuelles dans le %s');
define('CAPTION_UPCOMING_PRODUCTS','Ces articles seront disponibles sous peu');
define('SUMMARY_TABLE_UPCOMING_PRODUCTS','Le tableau contient une liste d\'articles qui seront disponibles sous peu ainsi que la date de publication respective.');

// meta tags special defines
define('META_TAG_PRODUCTS_PRICE_IS_FREE_TEXT','Gratuitement!');
  define('ASK_A_QUESTION', 'Posez une question sur ce produit');

// customer login
define('TEXT_SHOWCASE_ONLY', 'Contact');
// set for login for prices
define('TEXT_LOGIN_FOR_PRICE_PRICE', 'Prix non disponible');
define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE', 'Veuillez vous enregistrer pour le prix');
// set for show room only
define('TEXT_LOGIN_FOR_PRICE_PRICE_SHOWROOM', '');// blank for prices or enter your own text
define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE_SHOWROOM', 'Salle d\'exposition seulement');

// authorization pending
define('TEXT_AUTHORIZATION_PENDING_PRICE', 'Prix non disponible');
define('TEXT_AUTHORIZATION_PENDING_BUTTON_REPLACE', 'VÉRIFICATION EN COURS');
define('TEXT_LOGIN_TO_SHOP_BUTTON_REPLACE','Se connecter à la boutique');
define('TEXT_AUTHORIZATION_PENDING_CHECKOUT', 'Commander n\'est pas possible - votre compte client n\'a pas encore été activé');

// text pricing
define('TEXT_CHARGES_WORD', 'Frais calculés:');
define('TEXT_PER_WORD', '<br />Prix au mot: ');
define('TEXT_WORDS_FREE', ' Mot(s) libre(s) ');
define('TEXT_CHARGES_LETTERS', 'Frais calculés:');
define('TEXT_PER_LETTER', '<br />Prix par lettre: ');
define('TEXT_LETTERS_FREE', ' Lettre(s) gratuite(s) ');
define('TEXT_ONETIME_CHARGES', '*redevance unique = ');
define('TEXT_ONETIME_CHARGES_EMAIL', "\t" . '*redevance unique = ');

define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'Option de remise sur quantité');
define('TABLE_ATTRIBUTES_QTY_PRICE_QTY', 'PIECE');
define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE', 'PRIX');
define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', 'Option de frais uniques pour les rabais de volume');

// textarea attribute input fields
define('TEXT_MAXIMUM_CHARACTERS_ALLOWED',' caractères maximum autorisés');


// Shipping Estimator
define('CART_SHIPPING_OPTIONS', 'Estimation des frais d\'expédition:');

define('CART_SHIPPING_METHOD_TEXT', 'Modes d\'expédition disponibles');
define('CART_SHIPPING_METHOD_RATES', 'Frais:');
define('CART_SHIPPING_METHOD_TO', 'Expédition à: ');

define('CART_SHIPPING_METHOD_FREE_TEXT', 'envoi gratuit');
define('CART_SHIPPING_METHOD_ALL_DOWNLOADS', '- Téléchargements');

define('CART_SHIPPING_METHOD_ZIP_REQUIRED', 'true');
define('CART_SHIPPING_METHOD_ADDRESS', 'Adresse:');

define('CART_ITEMS', 'dans le panier: ');

define('ERROR_CART_UPDATE', 'Veuillez mettre à jour votre commande ...<br />');

define('EMPTY_CART_TEXT_NO_QUOTE', 'Oups ! Votre session a expiré... Veuillez mettre à jour votre panier d\'achat pour les frais d\'expédition');
define('CART_SHIPPING_QUOTE_CRITERIA', 'Les frais d\'expédition seront calculés en fonction de l\'adresse sélectionnée.:');

// multiple product add to cart
define('TEXT_PRODUCT_LISTING_MULTIPLE_ADD_TO_CART', 'Numéro: ');
define('TEXT_PRODUCT_ALL_LISTING_MULTIPLE_ADD_TO_CART', 'Numéro: ');
define('TEXT_PRODUCT_FEATURED_LISTING_MULTIPLE_ADD_TO_CART', 'Numéro: ');
define('TEXT_PRODUCT_NEW_LISTING_MULTIPLE_ADD_TO_CART', 'Numéro: ');   
//moved SUBMIT_BUTTON_ADD_PRODUCTS_TO_CART to button_names.php as BUTTON_ADD_PRODUCTS_TO_CART_ALT

// discount qty table
define('TEXT_HEADER_DISCOUNT_PRICES_PERCENTAGE', 'Déduction pour remise sur quantité');
define('TEXT_HEADER_DISCOUNT_PRICES_ACTUAL_PRICE', 'Prix moins rabais de quantité');
define('TEXT_HEADER_DISCOUNT_PRICES_AMOUNT_OFF', 'Déduction pour remise sur quantité');
define('TEXT_FOOTER_DISCOUNT_QUANTITIES', '* Les rabais peuvent varier selon les options inférieures.');
define('TEXT_HEADER_DISCOUNTS_OFF', 'Aucun rabais possible ...');

// sort order titles for dropdowns
define('PULL_DOWN_ALL_RESET','- remise à zéro - ');
define('TEXT_INFO_SORT_BY_PRODUCTS_NAME', 'Nom de l\'article');
define('TEXT_INFO_SORT_BY_PRODUCTS_NAME_DESC', 'Nom de l\'article - descendant');
define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE', 'Prix - ascendant');
define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE_DESC', 'Prix - descendant');
define('TEXT_INFO_SORT_BY_PRODUCTS_MODEL', 'Numéro d\'article');
define('TEXT_INFO_SORT_BY_PRODUCTS_DATE_DESC', 'Date de création - ascendant');
define('TEXT_INFO_SORT_BY_PRODUCTS_DATE', 'Date de création - descendant');


// downloads module defines
define('TABLE_HEADING_DOWNLOAD_DATE', 'Lien valable jusqu\'au');
define('TABLE_HEADING_DOWNLOAD_COUNT', 'Restant');
define('HEADING_DOWNLOAD', 'Pour télécharger vos fichiers, cliquez sur le bouton Télécharger et sélectionnez "Enregistrer la cible sous".');
define('TABLE_HEADING_DOWNLOAD_FILENAME','Nom de fichier');
define('TABLE_HEADING_PRODUCT_NAME','Articles');
define('TABLE_HEADING_BYTE_SIZE','Volume du fichier');
define('TEXT_DOWNLOADS_UNLIMITED', 'Illimité');
define('TEXT_DOWNLOADS_UNLIMITED_COUNT', '--- *** ---');

// misc

define('PAYMENT_JAVASCRIPT_DISABLED', 'La commande n\'a pas pu être poursuivie car Javascript est désactivé. Veuillez activer Javascript pour continuer.');

// table headings for cart display and upcoming products
define('TABLE_HEADING_QUANTITY', 'Piece');
define('TABLE_HEADING_PRODUCTS', 'Nom de l\'article');
define('TABLE_HEADING_TOTAL', 'Somme');

// create account - login shared
define('TABLE_HEADING_PRIVACY_CONDITIONS', 'Dispositions relatives à la protection des données');
define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', 'Veuillez confirmer votre accord avec notre politique de confidentialité en cochant la case correspondante. Vous pouvez lire la politique de confidentialité <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">lire ici</span></a>.');
define('TEXT_PRIVACY_CONDITIONS_CONFIRM', 'J\'ai lu et accepté la politique de confidentialité.');
define('TABLE_HEADING_ADDRESS_DETAILS', 'Veuillez remplir votre adresse s.v.p.');
define('TABLE_HEADING_PHONE_FAX_DETAILS', 'Comment vous joindre?');
define('TABLE_HEADING_DATE_OF_BIRTH', 'Veuillez entrer votre date de naissance');
define('TABLE_HEADING_LOGIN_DETAILS', 'Veuillez entrer vos données d\'accès ici');
define('TABLE_HEADING_REFERRAL_DETAILS', 'Comment avez-vous connu notre boutique?');
define('ERROR_TEXT_COUNTRY_DISABLED_PLEASE_CHANGE', 'Malheureusement, nous n\'acceptons plus les adresses de facturation ou de livraison en "%s".  Veuillez changer cette adresse pour continuer.');
define('ENTRY_EMAIL_PREFERENCE','Bulletin d\'information et courriel');
define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
define('ENTRY_EMAIL_TEXT_DISPLAY','TEXTE seulement');
define('EMAIL_SEND_FAILED','ERREUR : Le courriel n\'a pas été envoyé à : "%s" <%s>. Sujet: "%s"');

define('DB_ERROR_NOT_CONNECTED', 'ERREUR : Aucune connexion n\'a pu être établie avec la base de données.');
define('ERROR_DATABASE_MAINTENANCE_NEEDED', '<a href="http://www.zen-cart.com/content.php?334-ERROR-0071-There-appears-to-be-a-problem-with-the-database-Maintenance-is-required" target="_blank">ERROR 0071: Il semble y avoir un problème avec la base de données. Maintenance de la base de données requise.</a>');

// EZ-PAGES Alerts
define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'AVERTISSEMENT : EZ-PAGES HEADER - Ne peut être ouvert que par l\'Admin. ');
define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'AVERTISSEMENT : EZ-PAGES FOOTER - Ne peut être ouvert que par l\'Admin. ');
define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'AVERTISSEMENT : EZ-PAGES SIDEBOX - Ne peut être ouvert que par l\'Admin. ');

// extra product listing sorter
define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER', '');
define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES', 'Nom de l\'article, commençant par...');
define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES_RESET', '-- remise à zéro --');
// The following message, with the associated severity, is displayed in the storefront header when an admin has logged into
// a customer's account.

// -----
// init_customer_auth.php substitutes the customer's name (%$1s) and customer's email address (%$2s)
// into this message.
//
define('EMP_SHOPPING_FOR_MESSAGE', 'Derzeit eingeloggt als %1$s (%2$s).');

// -----
// Identify the messageStack "severity" to be applied to the above message, one of 'success',
// 'warning', 'caution', 'error' (defaults to 'success').
//
define('EMP_SHOPPING_FOR_MESSAGE_SEVERITY', 'success');
// Constants shared between multiple pages
define('TEXT_OPTION_DIVIDER', '&nbsp;-&nbsp;');
///////////////////////////////////////////////////////////

  $file_list = [FILENAME_EMAIL_EXTRAS, FILENAME_HEADER, FILENAME_BUTTON_NAMES, FILENAME_ICON_NAMES, FILENAME_OTHER_IMAGES_NAMES, FILENAME_CREDIT_CARDS, FILENAME_WHOS_ONLINE, FILENAME_META_TAGS];
  foreach ($file_list as $file) { 
    $file = str_replace(".php","",$file); 
    require_once(zen_get_file_directory(DIR_FS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . "/", $file . '.php', 'false'));
  }

// END OF EXTERNAL LANGUAGE LINKS
