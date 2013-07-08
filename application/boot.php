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
session_start();
$app_classes = array(
'bmms.database.php','bmms.actions.php','bmms.pages.php', 'bmms.apivalidate.php','bmms.adminpanel.php','bmms.send.php','bmms.apistats.php','bmms.lists.php'
);
$app_libs = array(
'bmms.lib.config.php','bmms.lib.api.php','bmms.lib.user.php'
);
foreach($app_classes as $class){
if(!include_once($boot->getAppRoot('classes/'.$class))){ 
           throw
			  new ClassNotFoundException("Can not include {$class}");
			  
   }
 
} foreach($app_libs as $lib){
if(!include_once($boot->getAppRoot('libraries/'.$lib))){ 
           throw
			  new AppException("Can not include {$lib}");
			  
   }
 
}  

    $pages = new BMMS_PAGES;
    $pages->CONSTRUCT();
	$actions = new BMMS_ACTIONS;
    $actions->REGISTER();