<?php
require $_SERVER['DOCUMENT_ROOT'].'/Core.php';
$kun = new System;
$user = $kun->user();

// check session
if(!$_SESSION['token']){
	$status = 3; // false
	$msg = 'Ops! Bạn Chưa Đăng Nhập!';
}else if($user['money'] < 18000){
	$status = 4; // false
	$msg = 'Bạn không đủ tiền trong tài khoản, vui lòng nạp thêm để mở!';
}else{
    	$status = 1; // false
	$msg = 'Bạn Đã Mở Được 2,999 Kim Cương !';
	$kc = '2999';




//UPDATE Kimcuong vào acc
    mysqli_query($kun->connect_db(),"UPDATE `users` SET `kimcuong` = `kimcuong` + '".$kc."' WHERE `username` = '".$user["username"]."'");
// update tiền  
    mysqli_query($kun->connect_db(),"UPDATE `users` SET `money` = `money` - '18000' WHERE `username` = '".$user["username"]."'"); 
// update lich su
    mysqli_query($kun->connect_db(), "INSERT INTO `user_history_system` (`username`, `action`, `action_name`, `sotien`, `mota`, `time`, `history`) VALUES ('".$user['username']."', 'VÒNG QUAY GIẢI CỨU', 'VÒNG QUAY GIẢI CỨU', '-".number_format(18000)."đ', 'Nhận Được ".$gift."', '".time()."', '10')");
// xuất json
}
echo json_encode(array('status' => $status, 'item' => $kundeptrai,'location' => $location, 'msg' =>$msg));