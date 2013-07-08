<?php 
/**
 * Bframework Application start file
 *
 * @package   Bframework
 * @subpackage my application 
 * @author    Buddyexpress Core Team <admin@buddyexpress.net
 * @copyright 2012 BUDDYEXPRESS.
 * @ApplicationCopyright < Your Copyright's >
 * @license   Buddyexpress Public License http://www.buddyexpress.net/Licences/bpl/ 
 * @ApplicationLicense < Your License >
 * @link      http://www.buddyexpress.net
 */

echo bframework_view_page(array(
'body' => bframework_view(bframework_get_approot_path().'template/index'),
'title' => bframework_print('welcome:home')
));
