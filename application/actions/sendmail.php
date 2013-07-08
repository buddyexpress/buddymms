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
$api = $_POST['api'];

$secret = $_POST['secret'];
$email = $_POST['email'];

$message = base64_decode($_POST['message']);
$subject = base64_decode($_POST['subject']);

$to = $_POST['to'];

$validate = new BMMS_APIVALIDATE($email, $api, $secret);
if($validate->validate()){
$send = new BMMS_SEND($api, $email, $to , $message,  $subject);
$send->send();
}
else {
   echo 'Wrong API KEY';
}