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
 
class BMMS_SEND {
public function __construct($api, $email, $to, $message, $subject){
         $this->email = $email;
		 $this->api = $api;
		 $this->message = $message;
		 $this->to = $to;
		 $this->subject = $subject;
		 $this->date = bframework_date_time();
		 $this->config = bmms_database();

}

public function addentry(){
$query_insert =  "INSERT INTO `bmms_mails` (`api`,`message`,`date`, `to`) VALUES ('$this->api', '$this->message', '$this->date', '$this->to')";
return $query_insert;
}

public function send(){

$bmmsquery = new mysqli($this->config['host'], $this->config['username'], $this->config['password'], $this->config['dbname']);
$bmmsquery->query($this->addentry());
$bmmsquery->close();

bframework_send_mail(array(
               'to' => $this->to,
			   'email' =>  $this->email, 
			   'message' => $this->message, 
			   'subject' => $this->subject
));

}


}