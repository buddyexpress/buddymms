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
 
 
function generate_api($email = NULL){
$timedate = time().rand();
$email = $email;
if(!empty($email)){
   return sha1($timedate.$email);
  }
 return false; 
}

function generate_secret($email = NULL){
$timedate = microtime().rand();
$email = $email;
if(!empty($email)){
   return substr(md5($timedate.$email),0, 10);
  }
 return false; 
}
 