<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * translation 2021 by klartexter 
 * @version $Id: invoice.php 2022-01-29 08:40:14Z webchills $

 */
 
if (IS_ADMIN_FLAG === true) {
if (!defined('MODULE_PAYMENT_INVOICE_STATUS')) define('MODULE_PAYMENT_INVOICE_STATUS', 'False');
if (!defined('MODULE_PAYMENT_INVOICE_BANKNAM')) define('MODULE_PAYMENT_INVOICE_BANKNAM', '');
if (!defined('MODULE_PAYMENT_INVOICE_ACCNAM')) define('MODULE_PAYMENT_INVOICE_ACCNAM', '');
if (!defined('MODULE_PAYMENT_INVOICE_ACCIBAN')) define('MODULE_PAYMENT_INVOICE_ACCIBAN', '');
if (!defined('MODULE_PAYMENT_INVOICE_BANKBIC')) define('MODULE_PAYMENT_INVOICE_BANKBIC', '');
}
 
// bof Berechnung Zahlungsziel
$tag = '';
if (MODULE_PAYMENT_INVOICE_STATUS === 'True'){
$tstamp = mktime(0, 0, 0, date('m'), date('d') + MODULE_PAYMENT_INVOICE_PAYDAY, date('Y'));
$tag = date('d.m.Y', $tstamp);
}
// eof Berechnung Zahlungsziel

define('MODULE_PAYMENT_INVOICE_TEXT_TITLE', 'Facture (payable jusqu\'au '. $tag . ')');
define('MODULE_PAYMENT_INVOICE_TEXT_DESCRIPTION', '');

define('MODULE_PAYMENT_INVOICE_TEXT_EMAIL_FOOTER', 
"Veuillez utiliser les données suivantes pour le transfert du montant total:\n" .
"\nNom de la banque:  " . MODULE_PAYMENT_INVOICE_BANKNAM .
"\nTitulaire du compte: " . MODULE_PAYMENT_INVOICE_ACCNAM . 
"\nIBAN:    " . MODULE_PAYMENT_INVOICE_ACCIBAN .
"\nBIC/SWIFT:   " . MODULE_PAYMENT_INVOICE_BANKBIC . 
"\n");