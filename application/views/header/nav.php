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
$url = bframework_get_url();
$nav = '<div class="container">';
$nav .= '<ul class="bmms-nav">';
$nav .= "<li><a href=\"{$url}page/mails\" >".bframework_print('nav:home')."</a></li>";
$nav .= "<li><a href=\"{$url}page/mails\" >".bframework_print('nav:mails')."</a></li>";
$nav .= "<li><a href=\"{$url}page/apis\" >".bframework_print('nav:apis')."</a></li>";
$nav .= "<li><a href=\"{$url}page/addapi\" >".bframework_print('nav:api:add')."</a></li>";
$nav .= "<li><a href=\"{$url}page/settings\" >".bframework_print('nav:settings')."</a></li>";
$nav .= '</ul></div>';

echo $nav;
		
