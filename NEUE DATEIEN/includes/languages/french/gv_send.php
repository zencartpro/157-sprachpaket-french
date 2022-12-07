<?php
/**
 * Zen Cart German Specific
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * translation 2021 by klartexter
 
 * @version $Id: gv_send.php 2022-02-04 18:52:14Z webchills $
 */

define('HEADING_TITLE', 'Envoyer un bon cadeau');
define('HEADING_TITLE_CONFIRM_SEND', 'Envoyer la confirmation de votre Chèque Cadeau');
define('HEADING_TITLE_COMPLETED', 'Chèque cadeau envoyé');
define('NAVBAR_TITLE', 'Envoyer un bon cadeau');
define('EMAIL_SUBJECT', 'Message de ' . STORE_NAME);
define('HEADING_TEXT','<br />Veuillez entrer les détails ci-dessous pour le certificat cadeau que vous souhaitez envoyer. Pour plus d\'informations sur les chèques-cadeaux, veuillez consulter la section <a href="' . zen_href_link(FILENAME_GV_FAQ, '', 'NONSSL').'">' . GV_FAQ . '</a>.<br />');
define('ENTRY_NAME','Nom du bénéficiaire:');
define('ENTRY_EMAIL','Adresse électronique du destinataire:');
define('ENTRY_MESSAGE','Votre message au destinataire:');
define('ENTRY_AMOUNT','Montant du chèque cadeau:');
define('ERROR_ENTRY_TO_NAME_CHECK', 'Le nom du destinataire n\'a pas été rempli.  Veuillez le remplir ci-dessous. ');
define('ERROR_ENTRY_AMOUNT_CHECK','<span class="errorText">Montant non valide ou excessif</span>');
define('ERROR_ENTRY_EMAIL_ADDRESS_CHECK','<span class="errorText">Adresse électronique invalide</span>');
define('MAIN_MESSAGE','<br />Vous avez décidé d\'envoyer un chèque-cadeau d\'une valeur de <strong>%s</strong><br />to <strong>%s</strong>, avec l\'adresse email <strong>%s</strong>.<br /><br /><br /><br />>Le message est composé comme suit:<br />');
define('SECONDARY_MESSAGE', 'Cher %s,<br /><br />' . 'Vous avez reçu un bon cadeau d\'une valeur de %s de %s');
define('PERSONAL_MESSAGE','%s écrit:');
define('TEXT_SUCCESS','Félicitations, le chèque cadeau a été envoyé avec succès.');
define('TEXT_SEND_ANOTHER', 'Souhaitez-vous envoyer un autre bon cadeau?');

define('TEXT_AVAILABLE_BALANCE','Votre solde actuel est de ');
define('EMAIL_GV_TEXT_SUBJECT','Un cadeau de %s');
define('EMAIL_SEPARATOR','');
define('EMAIL_GV_TEXT_HEADER','Félicitations, vous avez reçu un chèque-cadeau d\'une valeur de <strong>%s</strong>.');
define('EMAIL_GV_FROM','Ce chèque-cadeau vous a été offert par <strong>%s</strong>.' . "\n\n");
define('EMAIL_GV_MESSAGE','<br />Avec le message suivant:<br />');
define('EMAIL_GV_SEND_TO','Bonjour %s,');
define('EMAIL_GV_REDEEM','Vous pouvez échanger votre bon cadeau immédiatement. Veuillez noter ce numéro de bon d\'achat: <strong>%s</strong> ' . "\n");
define('EMAIL_GV_LINK','Pour utiliser votre bon d\'échange, veuillez cliquer sur le lien suivant. ');


define('EMAIL_GV_FIXED_FOOTER','Si vous rencontrez des difficultés pour échanger votre Chèque cadeau en utilisant ce lien, vous pouvez entrer le numéro du Chèque cadeau de votre Chèque cadeau lors du processus de commande.<br /><br />');
define('EMAIL_GV_SHOP_FOOTER', 'Je vous remercie beaucoup!'. "\n" .'
Sincèrement vôtre' . "\n".'
Vous ' . STORE_NAME . ' L\'équipe');
