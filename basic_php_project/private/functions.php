<?php

function url_for($script_path) {
  // add the leading '/' if not present
  if($script_path[0] != '/') {
    $script_path = "/" . $script_path;
  }
  return WWW_ROOT . $script_path;
}


function u($string=""){

return urlencode($string);
}

function raw_u($string=""){

return rawurlencode($string);
}

function h($string=""){
	return htmlspecialchars($string);
}

function error_404(){
	header($_SERVER["SERVER PROTOCOL"] . "404 NOT FOUND");
	exit();
}

function error_500(){
	header($_SERVER["SERVER PROTOCOL"] . "500 INTERNAL SERVER ERROR");
	exit();
}

function redirect(){
	header("Location: index.php");
	exit();
}

function redirect_to($location){
	header("Location: " . $location);
	exit();
}

function is_post_request(){
	return $_SERVER['REQUEST_METHOD']=='POST';
}

function is_get_request(){
	return $_SERVER['REQUEST_METHOD']=='GET';
}
?>
