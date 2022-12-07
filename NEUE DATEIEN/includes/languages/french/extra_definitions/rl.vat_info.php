<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * translation 2021 by klartexter
 * @version $Id: rl.vat_info.php 2014-04-12 15:45:57Z webchills $

 */

define('VAT_SHOW_TEXT_VERSANDKOSTENFREI','<br><span class="taxAddon">incl. %s TVA</span>');

if(DISPLAY_PRICE_WITH_TAX=='true')
define('VAT_SHOW_TEXT','<br><span class="taxAddon">incl. %s TVA<br> plus <a href="' . zen_href_link(FILENAME_SHIPPING) . '">frais de port</a></span>');
else
define('VAT_SHOW_TEXT','<b/><span class="taxAddon">plus %s TVA.<br> plus <a href="' . zen_href_link(FILENAME_SHIPPING) . '">frais de port</a></span>');