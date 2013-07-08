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
 
class BMMS_ADMIN {
public function __construct(){
   $this->bmmssettingsupdate = "UPDATE bmms_users ";
}
public function settings_update($params = array()){
     $update = new BMMS_DATABASE;
	 $password = md5($params['password']);
	 
	 $name = $params['name'];
	 $email = $params['email'];
	 $password = md5($params['password']);
	 if(!empty($params['password'])){
	 $pwd = ", password='$password'";
	 }
	 $id_fetch = "{$this->bmmssettingsupdate} SET name='$name' , email='$email' $pwd WHERE(email='$email')";
     if($update->bmms_query(array($id_fetch))){
	 return true;
	 }
     return false; 
}

public function settings_get($username){
     $settings = new BMMS_DATABASE;
	$result =  $settings->get_settings($username);
	if(!empty($result)){ 
	    return $result;
	 }
return false;	   	
	 
}

}