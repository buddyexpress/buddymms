<?php 
/**
 * Buddyexpress Mail Managment System
 *
 * @package   Bframework
 * @subpackage BMMS
 * @author    Buddyexpress Core Team <admin@buddyexpress.net
 * @copyright 2013 BUDDYEXPRESS.
 * @license   Buddyexpress Public License http://www.buddyexpress.net/Licences/bpl/ 
 * @link      http://www.buddyexpress.net
 */

$save = new BMMS_ADMIN;

$params = array(
'name' => $_POST['name'],
'password' => $_POST['password'],
"email" =>  $_POST['email'],
);

$save->settings_update($params);
redirect('page/settings');
