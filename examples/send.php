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
require_once('bmm.class.php');
$send = new BMMS_MAIL(array(
    'api_key' => 'enter your api key',
    'secret' => 'enter your secret',
    'email' => 'add your email address',
    'server' => 'add bmms installed url http://www.website.com/bmms/ <= add backslash , without backslash not accepted',
));
echo $send->send_email(array(
     'to' => $_POST['to'],
     'message' => $_POST['message'],
     'subject' => $_POST['subject']
));
