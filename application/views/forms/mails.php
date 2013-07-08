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
$bmmslists = new BMMS_LISTS();
$list = $bmmslists->bmms_lists_mails(array(
'offset' => 15,
'pageurl' => bframework_get_url().'page/mails',
));
$list .= "<input type='submit' class='first paginate_button paginate_button_disabled' value='Delete Selected' title='".bframework_print('del:selc')."' />";

echo $list;


