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
 
class BMMS_LISTS {

public function __construct(){
                $this->config = bmms_database();
				$this->bmmsquery_a = "SELECT COUNT(*) FROM bmms_mails";
				$this->bmmsquery_b = "SELECT * FROM bmms_mails";
								
				$this->bmmsquery_c = "SELECT * FROM bmms_apis";
                $this->bmmsquery_d = "SELECT COUNT(*) FROM bmms_apis";


}	
	
public function bmms_lists_mails($params = array()){
    $bmmsquery = new mysqli($this->config['host'], $this->config['username'], $this->config['password'], $this->config['dbname']);
    $result = $bmmsquery->query($this->bmmsquery_a);
    $r = $result->fetch_row();

    $numrows = $r[0];

    if(empty($params['offset'])){
    $rpp = 10;  //dataper page
    } 
    else {
    $rpp = $params['offset'];
    }

    $rowsperpage = $rpp;
    $totalpages = ceil($numrows / $rowsperpage);

    if (isset($_GET['offset']) && is_numeric($_GET['offset'])) {
        $currentpage = (int)$_GET['offset'];
    }
    else {
       $currentpage = 1;
    }
	
    if ($currentpage > $totalpages) {
       $currentpage = $totalpages;
    }
	
	  
    if ($currentpage < 1) {
       $currentpage = 1;
    }
	 
    $offset = ($currentpage - 1) * $rowsperpage;

    $bmmsquery_combine = "{$this->bmmsquery_b} LIMIT $offset, $rowsperpage";
    $result = $bmmsquery->query($bmmsquery_combine);

   
   $results[] = '<table class="bmms-table" border="0">
	<tr>
		<th><h3>'.bframework_print('mail:id').'</h3></th>
		<th><h3>'.bframework_print('api:api').'</h3></th>
		<th><h3>'.bframework_print('message:message').'</h3></th>
	    <th><h3>'.bframework_print('date:date').'</h3></th>
	    <th><h3>'.bframework_print('message:to').'</h3></th>

	</tr>';
   $alt = '';
   while ($list = $result->fetch_assoc()) {
   $results[] .= '<tr '.$alt.'>
   <td>'.$list['email_id'] .'   <input type="checkbox" name="bmms_mails[]" value="'.$list['email_id'] . '"  />
</td> 
<script type="text/javascript">
		$(document).ready(function() {
			$("#messageview_'.$list['email_id'].'").fancybox();
});
</script>
   <td><a href="page/apistat?api='. $list['api'] . '">'.$list['api'].'</a></td>
   <td><a id="messageview_'.$list['email_id'].'" href="'.bframework_get_url().'page/message?message='. $list['email_id'] . '">'.$list['message'].'</a></td>
   <td>' . $list['date'] .'</td>
   <td>' . $list['to'] .'</td>

   </tr>';
   	$alt = $alt ? '' : 'class="alt"';
   } 
$results[] .= "</table><br />";
   $range = 3;
   $elements = '';
   
   if ($currentpage > 1) {
      $elements .= " <a class='first paginate_button paginate_button_disabled' href='{$params['pageurl']}?offset=1'>".bframework_print('page:first')."</a> ";
      $prevpage = $currentpage - 1;
      $elements .= " <a  class='first paginate_button paginate_button_disabled' href='{$params['pageurl']}?offset=$prevpage'>".bframework_print('page:previous')."</a> ";
   } 

for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
     if (($x > 0) && ($x <= $totalpages)) {
        if ($x == $currentpage) {
           $cpages[] = "<span class='paginate_button paginate_active'>$x</span> ";
           } else {
           $cpages[] = " <a class='paginate_button paginate_button_disabled' href='{$params['pageurl']}?offset=$x'>$x</a> ";
        } 
     } 
}  

   $elements .= '<span>'.implode('',$cpages).'</span>';
   if ($currentpage != $totalpages) {
      $nextpage = $currentpage + 1;
      $elements .= " <a class='last paginate_button paginate_button_disabled' href='{$params['pageurl']}?offset=$nextpage'>".bframework_print('page:next')."</a> ";
      $elements .= " <a class='last paginate_button paginate_button_disabled' href='{$params['pageurl']}?offsete=$totalpages'>".bframework_print('page:last')."</a> ";
    } 
    
    if(!empty($results)){
	$rslt = $results;
	}
    return implode('',$rslt).$elements;
}
public function bmms_lists_apis($params = array()){
    $bmmsquery = new mysqli($this->config['host'], $this->config['username'], $this->config['password'], $this->config['dbname']);
    $result = $bmmsquery->query($this->bmmsquery_d);
    $r = $result->fetch_row();

    $numrows = $r[0];

    if(empty($params['offset'])){
    $rpp = 10;  //dataper page
    } 
    else {
    $rpp = $params['offset'];
    }

    $rowsperpage = $rpp;
    $totalpages = ceil($numrows / $rowsperpage);

    if (isset($_GET['offset']) && is_numeric($_GET['offset'])) {
        $currentpage = (int)$_GET['offset'];
    }
    else {
       $currentpage = 1;
    }
	
    if ($currentpage > $totalpages) {
       $currentpage = $totalpages;
    }
	
	  
    if ($currentpage < 1) {
       $currentpage = 1;
    }
	 
    $offset = ($currentpage - 1) * $rowsperpage;

    $bmmsquery_combine = "{$this->bmmsquery_c} LIMIT $offset, $rowsperpage";
    $result = $bmmsquery->query($bmmsquery_combine);

   
   $results[] = '<table class="bmms-table" border="0">
	<tr>
		<th><h3>'.bframework_print('api:id').'</h3></th>
		<th><h3>'.bframework_print('api:api').'</h3></th>
		<th><h3>'.bframework_print('api:secret').'</h3></th>
		<th><h3>'.bframework_print('api:email').'</h3></th>
		<th><h3>'.bframework_print('api:owner').'</h3></th>

	</tr>';
   $alt = '';
   while ($list = $result->fetch_assoc()) {
   $results[] .= '<tr '.$alt.'>
   <td>'.$list['api_id'] .'   <input type="checkbox" name="bmms_apis[]" value="'.$list['api_id'] . '"  />
</td> 
   <td><a href="page/apistat?api='. $list['api'] . '">'.$list['api'].'</a></td>
   <td>' . $list['secret'] .'</td>
   <td>' . $list['email'] .'</td>
   <td>' . $list['owner'] .'</td>
   </tr>';
   	$alt = $alt ? '' : 'class="alt"';
   } 
$results[] .= "</table><br />";
   $range = 3;
   $elements = '';
   
   if ($currentpage > 1) {
      $elements .= " <a class='first paginate_button paginate_button_disabled' href='{$params['pageurl']}?offset=1'>".bframework_print('page:first')."</a> ";
      $prevpage = $currentpage - 1;
      $elements .= " <a  class='first paginate_button paginate_button_disabled' href='{$params['pageurl']}?offset=$prevpage'>".bframework_print('page:previous')."</a> ";
   } 

for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
     if (($x > 0) && ($x <= $totalpages)) {
        if ($x == $currentpage) {
           $cpages[] = "<span class='paginate_button paginate_active'>$x</span> ";
           } else {
           $cpages[] = " <a class='paginate_button paginate_button_disabled' href='{$params['pageurl']}?offset=$x'>$x</a> ";
        } 
     } 
}  

   $elements .= '<span>'.implode('',$cpages).'</span>';
   if ($currentpage != $totalpages) {
      $nextpage = $currentpage + 1;
      $elements .= " <a class='last paginate_button paginate_button_disabled' href='{$params['pageurl']}?offset=$nextpage'>".bframework_print('page:next')."</a> ";
      $elements .= " <a class='last paginate_button paginate_button_disabled' href='{$params['pageurl']}?offsete=$totalpages'>".bframework_print('page:last')."</a> ";
    } 

	if(!empty($results)){
	$rslt = $results;
	}
    return implode('',$rslt).$elements;
}
	
} //class end
