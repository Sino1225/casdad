<?php
error_reporting(1);
require $_SERVER['DOCUMENT_ROOT'].'/Core.php';
$kun = new System;
$user = $kun->user();
	if(!$kun->is_admin()) {
  		die('<center><h1>Access Denied!!!</h1></center>');
 	}	
 	if($_POST['id'] && $_POST['status']) {
 		mysqli_query($kun->connect_db(), "UPDATE `random_lienquan` SET `status`='".$_POST['status']."' WHERE `id`='".$_POST['id']."'");
 	}

