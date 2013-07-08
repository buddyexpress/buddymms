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
 
class BMMS_PAGES {

public function __construct(){
        $this->file = bframework_get_approot_path();
}

public  function CONSTRUCT(){

           bframework_page_handler(array(
                                 'handler' => 'index', 
		                         'file' => $this->file.'pages/index.php'
           ));
           bframework_page_handler(array(
                                 'handler' => 'login', 
		                         'file' => $this->file.'pages/login.php'
           ));
		   
		   if(user_is('admin')){
		   bframework_page_handler(array(
                                 'handler' => 'addapi', 
		                         'file' => $this->file.'pages/addapi.php'
           ));
		   
		   bframework_page_handler(array(
                                 'handler' => 'apistat', 
		                         'file' => $this->file.'pages/apistat.php'
           ));
           bframework_page_handler(array(
                                 'handler' => 'apis', 
		                         'file' => $this->file.'pages/apis.php'
           ));
		   bframework_page_handler(array(
                                 'handler' => 'settings', 
		                         'file' => $this->file.'pages/settings.php'
           ));
		   bframework_page_handler(array(
                                 'handler' => 'mails', 
		                         'file' => $this->file.'pages/mails.php'
           ));
		   bframework_page_handler(array(
                                 'handler' => 'message', 
		                         'file' => $this->file.'pages/message/message.php'
           ));

          }
 }

} 