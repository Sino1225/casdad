<?php
if(!$kun->is_admin()) {
	 die('<center><h1>Access Denied!!!</h1></center>');
}else {
	$row = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `random_lienquan` WHERE `id`='".$_GET['id']."'"));	
	mysqli_query($kun->connect_db(), "DELETE FROM `random_lienquan_nick` WHERE `cname`='".$row['cname']."' AND `status`='true'");	
	mysqli_query($kun->connect_db(), "DELETE FROM `random_lienquan` WHERE `id`='".$_GET['id']."'");


	//echo $row['cname'];

	echo '<script>location.href="/admin/?modun=random_lienquan&act=index";</script>';
}
?>