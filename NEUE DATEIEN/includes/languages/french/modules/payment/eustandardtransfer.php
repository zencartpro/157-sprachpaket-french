<?php
/**
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * translation 2021 by klartexter
 * @version $Id: eustandardtransfer.php 2024-05-13 20:36:14 webchills $

*/
// do not remove the following lines
if (IS_ADMIN_FLAG === true) {
if (!defined('MODULE_PAYMENT_EUTRANSFER_BANKNAM')) define('MODULE_PAYMENT_EUTRANSFER_BANKNAM', '');
if (!defined('MODULE_PAYMENT_EUTRANSFER_ACCNAM')) define('MODULE_PAYMENT_EUTRANSFER_ACCNAM', '');
if (!defined('MODULE_PAYMENT_EUTRANSFER_ACCIBAN')) define('MODULE_PAYMENT_EUTRANSFER_ACCIBAN', '');
if (!defined('MODULE_PAYMENT_EUTRANSFER_BANKBIC')) define('MODULE_PAYMENT_EUTRANSFER_BANKBIC', '');
}
define('MODULE_PAYMENT_EUTRANSFER_TEXT_TITLE', 'Paiement d\'avance/virement bancaire');

define('MODULE_PAYMENT_EUTRANSFER_TEXT_DESCRIPTION', 
'<div class="eustandardtransferdescription">Veuillez utiliser les données suivantes pour le transfert du montant total:' .
'<br>Nom de la banque:  ' . nl2br(MODULE_PAYMENT_EUTRANSFER_BANKNAM) .
'<br>Titulaire du compte: ' . nl2br(MODULE_PAYMENT_EUTRANSFER_ACCNAM) . 
'<br>IBAN:    ' . nl2br(MODULE_PAYMENT_EUTRANSFER_ACCIBAN) .
'<br>BIC/SWIFT:   ' . nl2br(MODULE_PAYMENT_EUTRANSFER_BANKBIC) .
'<br/>Votre commande ne sera traitée qu\'une fois le montant crédité sur notre compte.</div>');

define('MODULE_PAYMENT_EUTRANSFER_TEXT_EMAIL_FOOTER', 
"Veuillez utiliser les données suivantes pour le transfert du montant total:\n" .
"\nNom de la banque:  " . MODULE_PAYMENT_EUTRANSFER_BANKNAM .
"\nTitulaire du compte: " . MODULE_PAYMENT_EUTRANSFER_ACCNAM . 
"\nIBAN:    " . MODULE_PAYMENT_EUTRANSFER_ACCIBAN .
"\nBIC/SWIFT:   " . MODULE_PAYMENT_EUTRANSFER_BANKBIC . 
"\n\nVotre commande ne sera traitée qu\'une fois le montant crédité sur notre compte.");