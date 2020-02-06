<?php
require_once("../../../private/initialize.php");

$page = isset($_GET['page']) ? $_GET['page'] : 1;

$id = $_GET['id'];
echo h($id);

?>
