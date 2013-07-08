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
 

function bmms_database(){
    static $bmms_database_config;
	$config_file = new bframework_path;
	if (!isset($bmms_database_config)) {
			if (!include($config_file->getAppRoot('configuration.php'))) {
          throw
			  new InstallationException("Can not include configuration");		
			} 
	}
	return $bmms_database_config;
}  

function redirect($location = NULL){
   if(!empty($location)){
     $location_rel = bframework_get_url().$location;
	 header("Location: $location_rel");
   }
   if($location == 1){
     $location_rel = bframework_get_url();
	 header("Location: $location_rel");
   }
   
}