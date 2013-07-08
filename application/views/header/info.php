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
$info = '<div class="container">
<div class="bmms-logo"></div>
<div class="bmms-top-contents"> 
'.bframework_print("hello").user_entity('name').' , <br />
'.bframework_print("ip").$_SERVER['REMOTE_ADDR'].'<br />
'.bframework_print("date").bframework_date_time().'<br />
<a href="'.bframework_get_url().'action/logout">'.bframework_print('logout').'</a></div>
</div>';

echo $info;