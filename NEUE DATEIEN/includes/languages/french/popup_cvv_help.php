<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * translation 2021 by klartexter
 * @version $Id: popup_cvv_help.php 2015-12-23 19:28:14Z webchills $

 */

define('HEADING_CVV','Qu\'est-ce qu\'un chiffre de vérification de carte de crédit (CVV) ?');
define('TEXT_CVV_HELP1','Visa, Mastercard et Discover utilisent un chiffre de contrôle à 3 chiffres<br><br>
                    Pour votre sécurité, nous exigeons l\'entrée de ce chiffre de contrôle à 3 chiffres.<br><br>
                    Ce chiffre de contrôle est un numéro à 3 chiffres au dos de votre carte de crédit.
                    et est sur la bande de signature en haut à droite.<br>' .
                    zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2visa.gif'));
define('TEXT_CVV_HELP2', 'American Express utilise un chiffre de contrôle à 4 chiffres<br><br>
                    Pour votre sécurité, nous devons entrer le chiffre de contrôle à 4 chiffres de votre carte American Express.<br><br>
                    Le numéro de chèque American Express est un numéro à 4 chiffres au recto de votre carte de crédit.
                    et se trouve à droite de votre numéro de carte de crédit.<br>' .
                    zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2amex.gif'));
define('TEXT_CLOSE_CVV_WINDOW', 'Fermer fenêtre [x]');