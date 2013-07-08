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
 
class BMMS_APIVALIDATE {

public function __construct($email = '', $api = NULL, $secret = NULL){
      $this->email = $email;
	  $this->api = $api;
	  $this->secret = $secret;
}

public function apidata(){
$data = new BMMS_DATABASE;
return $data->getData($this->email);
}
public function apionly(){
$data = new BMMS_DATABASE;
return $data->getData(NULL, $this->api);
}
public function validate(){
$this->data = $this->apidata();
if($this->data['api'] == $this->api && $this->data['secret'] == $this->secret && $this->data['email'] == $this->email){
   return true;
}
return false;
}

public function validate_onlyapi(){
$this->data = $this->apionly();
if($this->data['api'] == $this->api){
   return true;
}
return false;
}

}