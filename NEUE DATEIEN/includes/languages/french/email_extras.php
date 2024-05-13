<?php
/**
* Zen Cart German Specific (158 code in 157)

* @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
* @copyright Portions Copyright 2003 osCommerce
* @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * translation 2021 by klartexter
* @version $Id: email_extras.php 2024-05-13 16:32:14Z webchills $
*/

define ('EMAIL_LOGO_ALT_TITLE_TEXT', 'Zen Cart - deutsche Version');
define ('EMAIL_LOGO_FILENAME', 'header.jpg');
define ('EMAIL_LOGO_WIDTH', '600');
define ('EMAIL_LOGO_HEIGHT', '70');


define ('EMAIL_EXTRA_HEADER_INFO', '');


define('OFFICE_FROM', '<strong>Expéditeur:</strong>');
define('OFFICE_EMAIL', '<strong>Courriel:</strong>');


define('OFFICE_USE', '<strong>Pour usage interne uniquement:</strong>');
define('OFFICE_LOGIN_NAME', '<strong>Dénomination du compte:</strong>');
define('OFFICE_LOGIN_EMAIL', '<strong>Adresse de courriel</strong>:');
define('OFFICE_LOGIN_PHONE', '<strong>Téléphone:</strong>');
define('OFFICE_LOGIN_FAX','<strong>Fax:</strong>');
define('OFFICE_IP_ADDRESS', '<strong>Adresse IP:</strong>');
define('OFFICE_HOST_ADDRESS', '<strong>Nom d\'hôte:</strong>');
define('OFFICE_DATE_TIME', '<strong>Date et heure:</strong>');


define('EMAIL_TEXT_TELEPHONE', 'Téléphone: ');


define('EMAIL_DISCLAIMER', '');
define('EMAIL_SPAM_DISCLAIMER', '-');

define('EMAIL_ORDER_MESSAGE',''); 
define('EMAIL_FOOTER_COPYRIGHT','Copyright (c) ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '" target="_blank">' . STORE_NAME . '</a>');
define('TEXT_UNSUBSCRIBE', "\n\n" . 'Pour vous désabonner de ce bulletin, veuillez cliquer sur le lien suivant: ' . "\n");

define('EMAIL_ADVISORY', '-----' . "\n" . '<strong>Attention:</strong> Pour des raisons de sécurité, tous les e-mails envoyés sont mis en cache.<br>Si vous avez des questions à ce sujet, veuillez contacter: ' . STORE_OWNER_EMAIL_ADDRESS);


define('EMAIL_ADVISORY_INCLUDED_WARNING', '<strong>Ce message est inclu dans tous les courriels sur cette page:</strong>');



define('SEND_EXTRA_CREATE_ACCOUNT_EMAILS_TO_SUBJECT', '[NEUES KUNDENKONTO]');

define('SEND_EXTRA_GV_CUSTOMER_EMAILS_TO_SUBJECT', '[GUTSCHEIN]');
define('SEND_EXTRA_NEW_ORDERS_EMAILS_TO_SUBJECT', '[NEUE BESTELLUNG]');


define('EMAIL_TEXT_SUBJECT_LOWSTOCK', 'WARNUNG: Lagermindestbestand unterschritten');
define('SEND_EXTRA_LOW_STOCK_EMAIL_TITLE', 'Lagerbestandsbericht: ');