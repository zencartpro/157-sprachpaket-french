<?php
/**
 
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * translation 2021 by klartexter
 * @version $Id: discount_coupon.php 2022-01-14 19:05:14Z webchills $
 */

define('NAVBAR_TITLE', 'Coupon action');
define('HEADING_TITLE', 'Coupon action');
define('TEXT_INFORMATION', '');
define('TEXT_COUPON_FAILED', '<span class="alert important">%s</span> ne semble pas être un bon d\'action valide. Veuillez vérifier le numéro sur votre coupon d\'action et le saisir à nouveau.');

define('TEXT_CLOSE_WINDOW', 'Fermer fenêtre [x]');
define('TEXT_COUPON_HELP_HEADER', '<p class="bold">Le code entré appartient à ');
define('TEXT_COUPON_HELP_NAME', '\'%s\'. </p>');
define('TEXT_COUPON_HELP_FIXED', '');
define('TEXT_COUPON_HELP_MINORDER', '<p>Une valeur minimale de commande de %s pour les articles appropriés est requise pour utiliser ce coupon.</p>');
define('TEXT_COUPON_HELP_FREESHIP', '');
define('TEXT_COUPON_HELP_DESC', '<p><span class="bold">Offre de coupon promotionnel:</span> %s</p><p class="smallText">Les restrictions suivantes existent:</p>');
define('TEXT_COUPON_HELP_DATE', '<p>Le coupon action est valable du %s au %s.</p>');
define('TEXT_COUPON_HELP_RESTRICT', '<p class="biggerText bold">Restrictions relatives aux bons d\'action</p>');
define('TEXT_COUPON_HELP_CATEGORIES', '<p class="bold">Valable pour les catégories suivantes:</p>');
define('TEXT_COUPON_HELP_PRODUCTS', '<p class="bold">Valable pour les articles suivants:</p>');

define('TEXT_NO_CAT_TOP_ONLY_DENY', '<p>Ce coupon promotionnel n\'est valable que pour certains articles.');
define('TEXT_NO_CAT_RESTRICTIONS', '<p>Le coupon action est valable pour toutes les catégories.</p>');
define('TEXT_NO_PROD_RESTRICTIONS', '<p>Le coupon promotionnel est valable pour tous les articles.</p>');
define('TEXT_NO_PROD_SALES', '<p>Ce coupon promotionnel n\'est pas valable pour les articles en promotion.</p>');
define('TEXT_CAT_ALLOWED', ' (Valable pour cette catégorie)');
define('TEXT_CAT_DENIED', ' (Non valable pour cette catégorie)');
define('TEXT_PROD_ALLOWED', ' (Valable pour cet article)');
define('TEXT_PROD_DENIED', ' (Non valable pour cet article)');
// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION','<p class="smallText">Les coupons promotionnels ne peuvent pas être utilisés pour acheter des certificats-cadeaux. Limite : 1 coupon promotionnel par commande.</p>');
define('TEXT_DISCOUNT_COUPON_ID_INFO', 'Demander des informations sur les bons d\'action ... ');
define('TEXT_DISCOUNT_COUPON_ID', 'Votre code: ');
define('TEXT_COUPON_GV_RESTRICTION_ZONES', 'Aucun coupon promotionnel ne peut être utilisé avec cette adresse de facturation.');