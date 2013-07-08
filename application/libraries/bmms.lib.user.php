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
 
function validate_email($email = NULL){
if(!empty($email)){
 if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email)) {
 return true;
     }
    }
}  
function santisize_email_address($address) {
	return filter_var($address, FILTER_VALIDATE_EMAIL) === $address;
}
function santisize_username($username){
	$blacklist = '/[' .
		'\x{0080}-\x{009f}' . // iso-8859-1 control chars
		'\x{00a0}' .          // non-breaking space
		'\x{2000}-\x{200f}' . // various whitespace
		'\x{2028}-\x{202f}' . // breaks and control chars
		'\x{3000}' .          // ideographic space
		'\x{e000}-\x{f8ff}' . // private use
		']/u';

	if(preg_match($blacklist, $username)){
     $return = false;
	}
	$blacklist2 = '\'/\\"*& ?#%^(){}[]~?>>;|¬`@-+=';

	for ($n = 0; $n < strlen($blacklist2); $n++) {
		if (strpos($username, $blacklist2[$n]) !== false) {
   $return = false;
	     }
	}
	 if(!isset($return)){ $return = true; }
	if($return !== false){
	$finaluser = str_replace('.', '_', $username);
	return $finaluser;
	}
}
function user_login($params = array()){
$username = $params['username'];
$password = $params['password'];

$errors = array();

if(!empty($username)){   
      $username =santisize_username($username);
} 
else {
   $error[] = bframework_print('login:valid:username');
}

if(!empty($password)){   
    $password = md5($password);
} 
else {
   $error[] = bframework_print('login:valid:password');
}

if (empty($error)){
        $database = bmms_database();
        $connect =  mysqli_connect($database['host'], $database['username'], $database['password'], $database['dbname']);
        $query_check_credentials = "SELECT * FROM bmms_users WHERE (username='$username' AND password='$password')";
        $result_check_credentials = mysqli_query($connect, $query_check_credentials);
       
	    if(!$result_check_credentials){
       echo      bframework_print('loign:notvalid:user');
        }
		 
        if (@mysqli_num_rows($result_check_credentials) == 1) { 
        $_SESSION['bmmsusername']  = $username;
		redirect('page/mails');
		}
	    mysqli_close($connect);

}
    if(!empty($error)){
      foreach($error as $message){
	  echo "<li>($message)</li>";
	    }
   }	  
}

function user_entity($params = 'name'){
if(isset($_SESSION['bmmsusername']) && !empty($_SESSION['bmmsusername'])){
         $userentity = new BMMS_ADMIN;
		 $settings = $userentity->settings_get($_SESSION['bmmsusername']);
		 return $settings[$params];
}
return false;
}

function user_is($params = 'admin'){
if(isset($_SESSION['bmmsusername'])){
     if(user_entity('type') == $params){  
         return true;
		} 
}
return false;
}

