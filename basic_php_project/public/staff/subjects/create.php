<?php
require_once("../../../private/initialize.php");

if(is_post_request()){
	include(SHARED_PATH . '/staff_header.php');

	$menu_name = isset($_POST['menu_name']) ? $_POST['menu_name'] : '';
	$position = isset($_POST['position']) ? $_POST['position'] : '';
	$visible = isset($_POST['visible']) ? $_POST['visible'] : '';

	echo "Form Parameters : </br> Menu name : " . $menu_name . "</br>Position : " . $position . "</br>Visible : " . $visible;  


	include(SHARED_PATH . '/staff_footer.php');
}
else{
	redirect_to(url_for('/staff/subjects/new.php'));
}


?>