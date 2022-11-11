<?php
require_once("includes/initialize.php");
$content='home.php';
$view = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
switch ($view) {
	case '1' :
        $title="หน้าหลัก";	
		$content='home.php';		
		break;
	case '2' :
	    $title="รูปภาพ";	
		$content ='gallery.php';
		break;
	case '3' :
	    $title="เกี่ยวกับเรา";	
		$content = 'about.php';		
		break;

	case '4' :
	    $title="ติดต่อ";	
 		$content ='contact.php';		
		break;
				
     case '5' :
	    $title="ราคาห้อง";	
		$content='rates.php';
		break;	

	case '7' :
	    $title="ที่อยู่";	
		$content ='sitemap.php';
		break;
	default :
	    $title="หน้าหลัก";	
		$content ='home.php';		
}

require_once 'theme/template.php';
?>
