<?php
/**
 * Constants used by the zen_update_orders_history function.
 *

 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * translation 2021 by klartexter
 * @version $Id: orders_status_updates.php 2022-01-16 08:39:16Z webchills $
 */
define('OSH_EMAIL_SEPARATOR', '------------------------------------------------------');
define('OSH_EMAIL_TEXT_SUBJECT', 'Actualisation de la commande');
define('OSH_EMAIL_TEXT_ORDER_NUMBER', 'Numéro de commande:');
define('OSH_EMAIL_TEXT_INVOICE_URL', 'Facture détaillée:');
define('OSH_EMAIL_TEXT_DATE_ORDERED', 'Date de commande:');
define('OSH_EMAIL_TEXT_COMMENTS_UPDATE', '<em>Commentaires sur votre commande: </em>');
define('OSH_EMAIL_TEXT_STATUS_UPDATED', 'L\'état de votre commande a été mis à jour:' . "\n");
define('OSH_EMAIL_TEXT_STATUS_NO_CHANGE', 'L\'état de votre commande n\'a pas changé:' . "\n");
define('OSH_EMAIL_TEXT_STATUS_LABEL', '<strong>Statut actuel: </strong> %s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_CHANGE', '<strong>Ancien statut:</strong> %1$s, <strong>Nouveau statut:</strong> %2$s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_PLEASE_REPLY', 'Si vous avez des questions, veuillez répondre à ce courriel.' . "\n");

define('SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_SUBJECT', '[BESTELLSTATUS]');