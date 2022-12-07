<?php
/**
 * Zen Cart German Specific
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * translation 2021 by klartexter
 * @version $Id: create_account.php 2022-02-04 18:51:14Z webchills $
 */

define('NAVBAR_TITLE', 'Créer un nouveau compte');

define('HEADING_TITLE', 'Mes informations de compte');

define('TEXT_ORIGIN_LOGIN', '<strong class="note">Attention:</strong> Si vous êtes déjà inscrit chez nous, veuillez vous connecter <a href="%s">ici</a>.');

define('ERROR_CREATE_ACCOUNT_SPAM_DETECTED', 'Merci, votre demande d\'inscription a été soumise pour examen.');

// greeting salutation
define('EMAIL_SUBJECT', 'Bienvenue chez ' . STORE_NAME . '!');
define('EMAIL_GREET_MR', 'Cher Monsieur %s,' . "\n\n");
define('EMAIL_GREET_MS', 'Chère Madame %s,' . "\n\n");
define('EMAIL_GREET_NONE', 'Bonjour %s' . "\n\n");

// First line of the greeting
define('EMAIL_WELCOME', 'Bienvenue chez <strong>' . STORE_NAME . '</strong>.');
define('EMAIL_SEPARATOR', '--------------------');
define('EMAIL_COUPON_INCENTIVE_HEADER', 'Félicitations! Pour récompenser votre prochaine visite sur notre boutique en ligne, nous vous avons réservé un coupon promotionnel !' . "\n\n");
// your Discount Coupon Description will be inserted before this next define
define('EMAIL_COUPON_REDEEM', 'Vous pouvez échanger ce coupon promotionnel contre votre prochain achat. Entrer le ' . TEXT_GV_REDEEM . ':<br /> %s pendant le processus de commande' . "\n\n");
define('TEXT_COUPON_HELP_DATE', '<p>Le bon est valable entre %s et %s</p>');

define('EMAIL_GV_INCENTIVE_HEADER', 'Si vous achetez chez nous aujourd\'hui, vous recevrez le ' . TEXT_GV_NAME . '  pour %s!' . "\n\n");
define('EMAIL_GV_REDEEM', 'Vous ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' dans la valeur de : %s  ' . "\n\n" . 'Veuillez entrer le ' . TEXT_GV_REDEEM . ' Pendant le processus de commande après avoir sélectionné vos articles.' . "\n\n");
define('EMAIL_GV_LINK', 'Ou utilisez le bon d\'échange en utilisant le lien suivant: ' . "\n\n");
// GV link will automatically be included before this line

define('EMAIL_GV_LINK_OTHER', 'Une fois spécifié, vous pouvez utiliser les touches ' . TEXT_GV_NAME . ' peut être utilisé. Ou utilisez les touches ' . TEXT_GV_NAME . ' Mais donnez du plaisir aux autres et transmettez-le à vos amis!' . "\n\n");

define('EMAIL_TEXT', 'A partir de maintenant, vous pouvez faire appel à nos nombreux services que nous avons mis à votre disposition.' . "\n\n" . '
Quelques-uns de nos points forts:' . "\n\n" . '
<strong>Votre panier permanent:' . "\n" . '</strong>Les articles que vous avez placés dans votre panier y resteront tant qu\'ils y sont,' . "\n" . 'jusqu\'à ce que vous les achetiez ou les retiriez de votre panier.' . "\n\n" . '
<strong>Votre carnet d\'adresses personnel:</strong>' . "\n" . 'Avec votre carnet d\'adresses personnel, vous pouvez immédiatement et facilement envoyer vos achats à une autre personne.' . "\n" . 'Idéal pour offrir un cadeau d\'anniversaire à vos amis !' . "\n\n" . '
<strong>Votre historique de commande personnel:</strong>' . "\n" . 'Jetez un coup d\'oeil à tous vos processus de commande, que vous avez fait ici dans notre boutique !' . "\n" . 'Idéal pour imprimer des copies de factures, par exemple, ou simplement pour avoir une vue d\'ensemble !' . "\n\n" . '
<strong>Évaluations:</strong>' . "\n" . 'Partagez vos expériences avec nos services et articles avec nous et d\'autres clients!' . "\n\n\n" . '
');
define('EMAIL_CONTACT', 'Si vous avez besoin d\'aide avec nos services et nos articles, n\'hésitez pas à nous contacter au: <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">' . STORE_OWNER_EMAIL_ADDRESS . '</a>' . "\n\n\n" . '');
define('EMAIL_GV_CLOSURE', 'Sincèrement vôtre,' . "\n\n" . STORE_OWNER . "\nPropriétaire du magasin\n\n" . '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">' . HTTP_SERVER . DIR_WS_CATALOG . "</a>\n\n");

// email disclaimer - this disclaimer is separate from all other email disclaimers
define('EMAIL_DISCLAIMER_NEW_CUSTOMER', 'Nous avons reçu cette adresse e-mail de votre part ou de la part d\'un de nos clients. Si vous avez reçu ce message incorrectement, veuillez nous contacter à l\'adresse suivanter %s');