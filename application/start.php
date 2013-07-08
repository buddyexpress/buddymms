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

require_once(dirname(dirname(__FILE__)).'/bframework/buddyexpress.php'); 

$boot = new bframework_path;
require_once($boot->getAppRoot('boot.php'));
bframework_register_css('css/bmms.php');

