<?php
/**
* Zen Cart German Specific
* @copyright Copyright 2003-2022 Zen Cart Development Team
* Zen Cart German Version - www.zen-cart-pro.at
* @copyright Portions Copyright 2003 osCommerce
* @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
* translation 2021 by klartexter
* @version $Id: index.php 2020-03-01 08:05:14Z webchills $
*/

define('TEXT_MAIN','Définissez ici votre texte personnel. Vous pouvez éditer ce texte dans <strong>/includes/ languages/french/index.php</strong>.');

// Showcase vs Store
if (STORE_STATUS == '0') {
define('TEXT_GREETING_GUEST', 'Bienvenue <span class = "greetUser"> visiteur! </ span> Souhaitez-vous  <a href="%s"> vous inscrire</a>?');
} else {
define('TEXT_GREETING_GUEST', 'Bienvenue sur notre site Internet ! Profitez de notre salle d\'exposition.');
}

define('TEXT_GREETING_PERSONAL', 'Bienvenue <span class="greetUser">%s</span> ! Aimeriez-vous voir ce que nous avons <a href="%s">nouveau</a>?');
define('TEXT_INFORMATION', 'Définissez ici votre texte personnel. Vous pouvez éditer ce texte dans <strong>/includes/ languages/french/index.php</strong>.');

//moved to english
//define('TABLE_HEADING_FEATURED_PRODUCTS','Featured Products');

//define('TABLE_HEADING_NEW_PRODUCTS', 'New Products For %s');
//define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Upcoming Products');
//define('TABLE_HEADING_DATE_EXPECTED', 'Date Expected');

if ( ($category_depth == 'products') || (zen_check_url_get_terms()) ) {
// This section deals with product-listing page contents
define('HEADING_TITLE','Catégories');
define('TABLE_HEADING_IMAGE','Image de l\'article');

define('TABLE_HEADING_PRODUCTS','Nom de l\'article');
define('TABLE_HEADING_MANUFACTURER','Fabricant');

define('TABLE_HEADING_PRICE','Prix');
define('TABLE_HEADING_WEIGHT','Poids');
define('TABLE_HEADING_BUY_NOW','Acheter maintenant');
define('TEXT_NO_PRODUCTS','Il n\'y a actuellement aucun article dans cette catégorie.');
define('TEXT_NO_PRODUCTS2','Il n\'y a pas d\'article disponible chez ce fabricant.');
define('TEXT_NUMBER_OF_PRODUCTS','Nombre d\'articles:');
define('TEXT_SHOW','<strong>Filtres:</strong>');
define('TEXT_BUY','Achat 1 ');
define('TEXT_NOW',' maintenant');
define('TEXT_ALL_CATEGORIES','Toutes les catégories');
define('TEXT_ALL_MANUFACTURERS','Tous les fabricants');
} elseif ($category_depth == 'top') {
// This section deals with the "home" page at the top level with no options/products selected
/*Replace this text with the headline you would like for your shop. For example: 'Welcome to My SHOP!'*/
define('HEADING_TITLE', 'Bienvenue dans notre boutique en ligne!');
} elseif ($category_depth == 'nested') {
// This section deals with displaying a subcategory
/*Replace this line with the headline you would like for your shop. For example: 'Welcome to My SHOP!'*/
define('HEADING_TITLE', 'Bienvenue dans notre boutique en ligne!');
}
