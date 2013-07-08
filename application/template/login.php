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
                       'action' => bframework_get_url().'action/login',
                        'method' => 'POST',
                         ),
'body' => bframework_view_form('login'));
						 
echo bframework_form($params);