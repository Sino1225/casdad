<?php
require $_SERVER['DOCUMENT_ROOT'].'/Core.php';
$kun = new System;
$user = $kun->user();
$row = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `setting_daplon`"));
// check session
if(!$_SESSION['token']){
	$status = 3; // false
	$msg = 'Ops! Bạn Chưa Đăng Nhập!';
}else if($user['money'] < 40000){
	$status = 4; // false
	$msg = 'Bạn không đủ tiền trong tài khoản, vui lòng nạp thêm để đập!';
}else{
// thư viện tỷ lệ
	require $_SERVER['DOCUMENT_ROOT'].'/lib/BiasedRandom/Element.php';
	require $_SERVER['DOCUMENT_ROOT'].'/lib/BiasedRandom/Randomizer.php';
// chạy tỷ lệ
  $randomizer = new Randomizer();
  
  $randomizer          ->add( new Element('1', $row['item_1'])) 
                       ->add( new Element('2', $row['item_2'])) 
                       ->add( new Element('3', $row['item_3']))
                       ->add( new Element('4', $row['item_4'])) 
                       ->add( new Element('5', $row['item_5']))
                       
                          ;
            $kundeptrai = $randomizer->get();       


// gán item và hình ảnh sau khi chạy tỷ lệ
switch ($kundeptrai) {
    case '1':
    $vongquay = 1;
    $location = array('role_1' => $vongquay, 'role_2' => $vongquay, 'role_3' => $vongquay, 'role_4' => $vongquay, 'role_5' => $vongquay);
        break;
    case '2':
    $vongquay = 2;
    $location = array('role_1' => $vongquay, 'role_2' => $vongquay, 'role_3' => $vongquay, 'role_4' => $vongquay, 'role_5' => $vongquay);       
        break;
    case '3':
    $vongquay = 3;
    $location = array('role_1' => $vongquay, 'role_2' => $vongquay, 'role_3' => $vongquay, 'role_4' => $vongquay, 'role_5' => $vongquay);     
        break;
    case '4':
    $vongquay = 4;
    $location = array('role_1' => $vongquay, 'role_2' => $vongquay, 'role_3' => $vongquay, 'role_4' => $vongquay, 'role_5' => $vongquay);   
        break;
    case '5':
    $vongquay = 5;
    $location = array('role_1' => $vongquay, 'role_2' => $vongquay, 'role_3' => $vongquay, 'role_4' => $vongquay, 'role_5' => $vongquay); 
        break;
       
}

if($vongquay == 1){
    
    	$status = 1; // false
    $img = '/assets/img/dapheo/1.png';
	$msg = 'Bạn Đã Đập Lơn Được 999 Kim Cương !';
	$kc = '999';
}else if($vongquay == 2){
    
    	$status = 1; // false
	$img = '/assets/img/dapheo/2.png';
	$msg = 'Bạn Đã Đập Lơn Được 5,999 Kim Cương !';
	$kc = '5999';
}else if($vongquay == 3){
    
    	$status = 1; // false
	$img = '/assets/img/dapheo/3.png';
	$msg = 'Bạn Đã Đập Lơn Được 9,999 Kim Cương !';
	$kc = '9999';
}else if($vongquay == 4){
    
    	$status = 1; // false
	$img = '/assets/img/dapheo/4.png';
	$msg = 'Bạn Đã Đập Lơn Được 99 Kim Cương !';
	$kc = '99';
}else if($vongquay == 5){
    
    	$status = 1; // false
	$img = '/assets/img/dapheo/5.png';
	$msg = 'Bạn Đã Đập Lơn Được 239 Kim Cương !';
	$kc = '239';

}



//UPDATE Kimcuong vào acc
    mysqli_query($kun->connect_db(),"UPDATE `users` SET `kimcuong` = `kimcuong` + '".$kc."' WHERE `username` = '".$user["username"]."'");
// update tiền  
    mysqli_query($kun->connect_db(),"UPDATE `users` SET `money` = `money` - '40000' WHERE `username` = '".$user["username"]."'"); 
// update lich su
    mysqli_query($kun->connect_db(), "INSERT INTO `user_history_system` (`username`, `action`, `action_name`, `sotien`, `mota`, `time`, `history`) VALUES ('".$user['username']."', 'VÒNG QUAY GIẢI CỨU', 'VÒNG QUAY GIẢI CỨU', '-".number_format(40000)."đ', 'Nhận Được ".$gift."', '".time()."', '10')");
// xuất json
}
echo json_encode(array('status' => $status, 'item' => $kundeptrai,'location' => $location, 'msg' =>$msg, 'img' => $img));