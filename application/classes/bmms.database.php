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
 
class BMMS_DATABASE {

public function __construct(){
          $this->config = bmms_database();
}
public function getAPI($email){
return generate_api($email);
}
public function getSecret($email){
return generate_secret($email);
}

public function checkEmail($email){
$query_check = "SELECT * FROM bmms_apis  WHERE email ='$email'"; 

if(!empty($email)){
$bmmsquery = new mysqli($this->config['host'], $this->config['username'], $this->config['password'], $this->config['dbname']);
     $result = $bmmsquery->query($query_check);
	 $email = $result->fetch_assoc();
             if(empty($email['api'])){
               return true;
             }	 
     $bmmsquery->close();
}
return false;
}
public function getData($email, $api = ''){
if(empty($api)){
$query_data = "SELECT * FROM bmms_apis  WHERE email ='$email'"; 
}
else { 
$query_data = "SELECT * FROM bmms_apis  WHERE api ='$api'"; 
     }
if(!empty($email) || !empty($api)){
$bmmsquery = new mysqli($this->config['host'], $this->config['username'], $this->config['password'], $this->config['dbname']);
     $result = $bmmsquery->query($query_data);
	 $data = $result->fetch_assoc();
             if(empty($email['api'])){
               return $data;
             }	 
     $bmmsquery->close();
}
return false;
}

public function apiAdd($array = array()){
$email = $array['email'];
$owner = $array['owner'];

$secret = $this->getSecret($email);
$api_gen = $this->getAPI($email);

$query_check = "SELECT * FROM bmms_apis  WHERE email ='$email'"; 
$query_insert =  "INSERT INTO `bmms_apis` (`api`,`email`,`owner`, `secret`) VALUES ('$api_gen', '$email', '$owner', '$secret')";

if(!empty($owner) && !empty($email) && $this->checkEmail($email)){
     $bmmsquery = new mysqli($this->config['host'], $this->config['username'], $this->config['password'], $this->config['dbname']);
     $result = $bmmsquery->query($query_insert);
     $bmmsquery->close();
} 
else {
     echo 'Email Exsist';
     }

}

public function bmms_query($query = array()){
    $bmmsquery = new mysqli($this->config['host'], $this->config['username'], $this->config['password'], $this->config['dbname']);
    if ($bmmsquery->multi_query(implode(';', $query))) {
    return true;
    }  
    $bmmsquery->close();
    return false;
}

public function get_settings($username){
$query_data = "SELECT * FROM bmms_users  WHERE username='$username'"; 
if(!empty($username)){
$bmmsquery = new mysqli($this->config['host'], $this->config['username'], $this->config['password'], $this->config['dbname']);
     $result = $bmmsquery->query($query_data);
	 $data = $result->fetch_assoc();
             if(empty($email['email'])){
               return $data;
             }	 
     $bmmsquery->close();
}
return false;
}

}