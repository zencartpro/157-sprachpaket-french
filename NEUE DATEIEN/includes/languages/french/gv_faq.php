<?php
/** 
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * translation 2021 by klartexter
 * @version $Id: gv_faq.php 2022-04-09 12:28:14Z webchills $
 */

define('NAVBAR_TITLE', TEXT_GV_NAME . ' FAQ');
define('HEADING_TITLE', TEXT_GV_NAME . ' FAQ');
define('TEXT_INFORMATION', '<a id="Top"></a>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=1').'">Comment commander ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=2').'">Comment puis-je expédier ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=3').'">Faire du shopping avec ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=4').'">Échanger de ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=5').'">En cas de problèmes</a><br />
');

define('SUB_HEADING_TITLE_1','Comment commander ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT_1', 'Vous pouvez commander des ' . TEXT_GV_NAMES . ' comme n\'importe quel autre article de notre boutique. Vous pouvez payer avec les méthodes de paiement traditionnelles. Une fois le ' . TEXT_GV_NAME . ' commandé, sa valeur sera créditée sur votre compte ' . TEXT_GV_NAME . ' personnel. Votre panier d\'achat personnel affichera le montant échangé sur votre compte de Chèque cadeau. De plus, un lien vers votre ' . TEXT_GV_NAME . ' apparaîtra, que vous pourrez ensuite envoyer par courriel à vos amis et connaissances');


define('SUB_HEADING_TITLE_2','Comment puis-je expédier ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT_2','Pour envoyer un ' . TEXT_GV_NAME . ', il vous suffit de vous rendre sur notre page d\'expédition de ' . TEXT_GV_NAME . '. Vous trouverez le lien dans votre panier personnel. Lors de l\'envoi d\'un ' . TEXT_GV_NAME . ', vous devez fournir les informations suivantes :
<strong>Le nom</strong> de la personne à qui vous souhaitez envoyer le ' . TEXT_GV_NAME . '.
<strong>L\'adresse e-mail</strong> de la personne à qui vous souhaitez envoyer le ' . TEXT_GV_NAME . '.
<strong>Le montant</strong> que vous voulez envoyer.
(REMARQUE : Vous n\'avez pas besoin d\'utiliser le montant total du Compte ' . TEXT_GV_NAME . '.)
Vous recevrez également une brève notification par courriel. Afin d\'éviter toute erreur, veuillez vous assurer que vous avez entré toutes les informations correctement. Vous aurez également la possibilité de vérifier vos détails plus tard avant d\'envoyer le bon d\'achat.');


define('SUB_HEADING_TITLE_3','Faire du shopping avec ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT_3','Si votre compte de ' . TEXT_GV_NAME . ' a un solde, vous pouvez l\'utiliser pour acheter d\'autres articles dans notre boutique. Un champ de saisie supplémentaire apparaîtra pendant le processus de paiement.<br />
Veuillez saisir le montant que vous souhaitez retirer de votre compte de ' . TEXT_GV_NAME . '. Si la valeur de la commande dépasse le solde de votre compte ' . TEXT_GV_NAME . ', vous pouvez choisir le mode de paiement souhaité pour la différence. Si la valeur de votre commande est inférieure au solde de votre compte de ' . TEXT_GV_NAME . ', le solde de votre compte de ' . TEXT_GV_NAME . ' sera bien entendu conservé pour vos prochains achats.');


define('SUB_HEADING_TITLE_4','Échanger de ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT_4','Lorsque vous recevez un ' . TEXT_GV_NAME . ' par email, vous serez informé de l\'expéditeur, de la valeur du ' . TEXT_GV_NAME . ' et d\'un court message de l\'expéditeur. L\'e-mail contient également le ' . TEXT_GV_NAME . ' avec le ' . TEXT_GV_REDEEM . ' d\'achat. Nous vous recommandons d\'imprimer votre ' . TEXT_GV_NAME . ' pour une utilisation ultérieure.
<br /><br /><u>Il y a deux façons d\'échanger votre ' . TEXT_GV_NAME . ' :</u><br /><br />
1. en cliquant sur le lien envoyé avec le courriel qui vous mènera directement à la page du ' . TEXT_GV_NAME . '. Pour que ce ' . TEXT_GV_NAME . ' soit valide, vous devrez créer un compte dans notre boutique si vous n\'en avez pas déjà un. Une fois l\'enregistrement réussi, le crédit de ce bon sera crédité sur votre compte.
<br /><br /><center><strong>compte de certificat-cadeau personnel</strong></center><br />
a été crédité sur votre compte. A partir de maintenant, vous pouvez utiliser ce crédit pour vos besoins.<br /><br />
2. Pendant le processus de commande, vous pouvez également entrer le ' . TEXT_GV_REDEEM . ' d\'achat sur la page où vous indiquez votre mode de paiement. Entrez votre numéro de bon personnel et cliquez sur "Échanger". Après une brève vérification de la validité du ' . TEXT_GV_NAME . ' à échanger, les fonds seront crédités sur votre compte ' . TEXT_GV_NAME . ' personnel.
A partir de maintenant, vous pouvez utiliser le montant pour vos besoins.');


define('SUB_HEADING_TITLE_5','En cas de problèmes.');
define('SUB_HEADING_TEXT_5','Pour tout renseignement concernant notre système de ' . TEXT_GV_NAME . ', veuillez prendre contact par E-mail avec  <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS .'">' . STORE_OWNER_EMAIL_ADDRESS . '</a> Veuillez vous assurer de donner autant d\'informations que possible dans le courriel.');


define('SUB_HEADING_TITLE_0','');
define('SUB_HEADING_TEXT_0','Veuillez sélectionner votre sujet, vous avez aussi des questions.');



define('TEXT_GV_REDEEM_INFO', 'S\'il vous plaît entrez votre '. TEXT_GV_NAME. ' Code: ');
define('TEXT_GV_REDEEM_ID', 'Code promo:');