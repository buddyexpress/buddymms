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

$form = '<div class="bmms-forms">';

$form .= bframework_view_label(array(
	             'attributes' => array('for' => 'username'),
				 'name' => bframework_print('login:username')
				 ));
				 
$form .= bframework_view_input(array(
	                         'name' => 'username',
		                     'type' => 'text',
							 'placeholder' => bframework_print('login:username'),
		)).'<br />';
		
$form .= bframework_view_label(array(
	             'attributes' => array('for' => 'password'),
				 'name' => bframework_print('login:username')
		));
		
$form .= bframework_view_input(array(
	                         'name' => 'password',
		                     'type' => 'password',
							 'placeholder' => bframework_print('login:password'),
		)).'<br />';
		
$form .= bframework_view_input(array(
		                     'type' => 'submit',
							 'class' => 'submit'
		)).'<br />';


$form .= '</div>';

echo $form;
