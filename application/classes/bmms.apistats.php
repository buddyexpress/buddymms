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
 
class BMMS_APISTATS {
public function __construct($api = NULL){
                $this->api = $api;
                $this->fetch = "SELECT * FROM bmms_mails  WHERE api='$this->api'"; 
				$this->bmmsapideletemessage = "DELETE FROM bmms_mails WHERE ";
			    $this->bmmsapidelete = "DELETE FROM bmms_apis WHERE ";
				$this->viewmessage = "SELECT message FROM bmms_mails WHERE ";
                $this->config = bmms_database();

}

public function mails(){
     $bmmsquery = new mysqli($this->config['host'], $this->config['username'], $this->config['password'], $this->config['dbname']);
     $result = $bmmsquery->query($this->fetch);
	 while($email = $result->fetch_assoc()){
	 $apiemails[] = $email;
	 }
	  
	 if(isset($apiemails)){
	 return $apiemails;
	 }
	 
     $bmmsquery->close();
     return false;
}

public function delete_mail($ids = NULL){
     $delete = new BMMS_DATABASE;
	 foreach($ids as $id){
	 $id_fetch[] = "{$this->bmmsapideletemessage} email_id=$id";
	 }
	 
     if($delete->bmms_query($id_fetch)){
	 return true;
	 }
     return false; 
}
public function delete_api($ids = NULL){
     $delete = new BMMS_DATABASE;
	 foreach($ids as $id){
	 $id_fetch[] = "{$this->bmmsapidelete} api_id=$id";
	 }
	 
     if($delete->bmms_query($id_fetch)){
	 return true;
	 }
     return false; 
}

public function message($id = NULL){
     $bmmsquery = new mysqli($this->config['host'], $this->config['username'], $this->config['password'], $this->config['dbname']);
     $bmmsquery_combine = "{$this->viewmessage} email_id=$id";
	 $result = $bmmsquery->query($bmmsquery_combine);
	 if($email = $result->fetch_assoc()){
	 $message[] = $email;
	 }
	  
	 if(isset($message)){
	 return $message;
	 }
	 
     $bmmsquery->close();
     return false;
}

} 
 
 