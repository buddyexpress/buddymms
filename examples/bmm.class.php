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

/**
* BMMS Email Send Standalone class 
* @Version: 1.0
*/
class BMMS_MAIL {
/**
* Construct a public function, get api key , secret, email 
* @Uses: 
  $params['api_key'] = <api key obtianed from BMMS>
  $params['secret'] = <secret obtianed from BMMS> 
  $params['email'] = <email obtianed from BMMS>
  $params['server'] = <full url path to bmms installed directory> // http://www.mywebsite.com/bmms/
*/
public function __construct($params = array()){
          $this->api = $params['api_key'];
		  $this->secret = $params['secret'];
		  $this->email = $params['email'];
		  $this->server = $params['server'];

}
/**
* Get BMMS Server
* @Uses: BMMS_MAIL::server()
*/
private function server(){
   if(isset($this->server) && !empty($this->server)){
   return $this->server;
   }
}
/**
* Get BMMS secret
* @Uses: BMMS_MAIL::secret()
*/
private function secret(){
   if(isset($this->secret) && !empty($this->secret)){
   return $this->secret;
   }
}
/**
* Get BMMS email
* @Uses: BMMS_MAIL::email()
*/
private function email(){
   if(isset($this->email) && !empty($this->email)){
   return $this->email;
   }
}
/**
* Get BMMS api
* @Uses: BMMS_MAIL::api()
*/
private function api(){
   if(isset($this->api) && !empty($this->api)){
   return $this->api;
   }
}
/**
* Send email, get recipent email, message, subject
*/
public function send_email($params = array()){
$email = $this->email(); $api = $this->api();
if(!empty($email) && !empty($api)){
       $ch = curl_init();
       curl_setopt($ch, CURLOPT_URL, $this->server().'action/sendmail');
       curl_setopt($ch, CURLOPT_POST, 1);
       curl_setopt($ch, CURLOPT_POSTFIELDS,
            http_build_query(array(
			'api' => $this->api(),
			'secret' => $this->secret(),
            'email' => $this->email(),
			'to' => $params['to'],
			'message' => base64_encode($params['message']),
			'subject' => base64_encode($params['subject']),		
			)));

      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      return curl_exec ($ch);
  }
  return false; 
}

}
