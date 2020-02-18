<?php

function url_for($script_path) {
  // add the leading '/' if not present
  if($script_path[0] != '/') {
    $script_path = "/" . $script_path;
  }
  return WWW_ROOT . $script_path;
}

function u($string="") {
  return urlencode($string);
}

function raw_u($string="") {
  return rawurlencode($string);
}

function h($string="") {
  return htmlspecialchars($string);
}

function error_404() {
  header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
  exit();
}

function error_500() {
  header($_SERVER["SERVER_PROTOCOL"] . " 500 Internal Server Error");
  exit();
}

function redirect_to($location) {
  header("Location: " . $location);
  exit;
}

function is_post_request() {
  return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function is_get_request() {
  return $_SERVER['REQUEST_METHOD'] == 'GET';
}

function db_connect(){
  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  // confirm_db_connect();
  return $connection;
}

function db_disconnect($connection){
  if(isset($connection))
    mysqli_close($connection);
}

// function confirm_db_connect(){
//   if(mysqli_connect_errorno()){
//     $error_msg = "database connection failed: ".mysqli_connect_error()." (".mysqli_connect_errorno().")";
//     exit($error_msg); 
//   }
// }

function confirm_result_set($result_set){
  if(!$result_set)
    exit("Database query failed");
}

function get_all_subjects(){
  global $db;
  $query = "SELECT * FROM subjects ORDER BY position ASC";
  $result = mysqli_query($db, $query);
  confirm_result_set($result);
  return $result;
}

function get_all_pages(){
  global $db;
  $query = "SELECT pages.id, pages.position, pages.visible, subjects.subject_name, menu_name FROM subjects,pages WHERE subjects.id = pages.subject_id ORDER BY pages.id";
  $result = mysqli_query($db, $query);
  confirm_result_set($result);
  return $result;
}


?>
