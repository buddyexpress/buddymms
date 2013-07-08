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

$params = array(
'attributes' => array(
                       'action' => bframework_get_url().'action/settings',
                        'method' => 'POST',
                         ),
'body' => bframework_view_form('settings'));
						 
echo bframework_form($params);
