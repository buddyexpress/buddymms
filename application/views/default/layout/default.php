<?php
/**
 * Buddyexpress Framework Core
 *
 * @package   Bframework
 * @author    Buddyexpress Core Team <admin@buddyexpress.net
 * @copyright 2012 BUDDYEXPRESS.
 * @license   Buddyexpress Public License http://www.buddyexpress.net/Licences/bpl/ 
 * @link      http://bserver.buddyexpress.net
 * @Contributors http://www.buddyexpress.net/bframework/contributors.b
 */
/*
* BFramework default page
*/ 
$css = bframework_css_link('all');
if (empty($page['title'])) {
$title = bframework_get_app('name');
} else {
$title = bframework_get_app('name') . " : " . $page['title'];
}
$files = new bframework_path;
$meta_attr = array(
'BframeworkVersion' => bframework_get_version(),
'BframeworkRelease' => bframework_get_release(),
'ApplicationVersion' => bframework_get_app_version(),
'ApplicationRelease' => bframework_get_app_release(),
);
$page['head'] = bframework_view(bframework_get_approot_path().'views/head'); 

header("Content-type: text/html; charset=UTF-8");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php echo bframework_meta(array('attr' => array('http-equiv' => "Content-Type", 'content' => "text/html; charset=utf-8"))); 
foreach($meta_attr as $s => $v){
echo bframework_meta(array('attr' => array('name' => $s, 'content' => $v)));
}
?>
<title><?php echo $title; ?></title>
<?php echo bframework_inc_css($css);?>
<?php echo $page['head']; ?>
</head>
<body> 

<?php echo bframework_view($files->getAppRoot('views/header/info')); ?>
<?php echo bframework_view($files->getAppRoot('views/header/nav')); ?>

<div class="bmms-mainb">
<?php 
echo "<h1>{$title}</h1>";
echo '<hr>';
?>
		 
		 <?php echo $page['body'];?>
	
	   <?php echo $page['footer'];?>


</div>		

<!--footer --> 
<div class="bmms-footer bmms-append-footer">
  <hr />
  <table width="845" border="0">
    <tr>
      <td width="414"> Buddexpress Mail Managment System. &copy; 2013 <a href="http://www.buddyexpress.net">Buddyexpress Network</a> <br />
        BMMS: <?php echo bframework_get_app_version();?><br />
      <br /></td>
      <td width="10">&nbsp;</td>
      <td width="407"><div align="right"><a href="http://ask.buddyexpress.net">Support</a> | <a href="https://github.com/buddyexpress/buddymms">Source code </a> </div></td>
    </tr>
  </table>
</div>
</body>

</html>