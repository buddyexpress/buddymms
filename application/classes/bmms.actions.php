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
 
class BMMS_ACTIONS {

public function __construct(){
    $actions = new bframework_path; 
	$this->path = $actions->getAppRoot('actions/');
 
}

public function REGISTER(){
  
    bframework_resgister_action('login', $this->path.'login.php');  
    bframework_resgister_action('sendmail', $this->path.'sendmail.php'); 
	bframework_resgister_action('logout', $this->path.'user/logout.php');  
      
 
    if(user_is('admin')){
    bframework_resgister_action('apiadd', $this->path.'apiadd.php');       
    bframework_resgister_action('maildelete', $this->path.'deletemail.php');       
    bframework_resgister_action('apidelete', $this->path.'deleteapi.php');       
    bframework_resgister_action('settings', $this->path.'user/settings.php');       
	}     

 }

} 