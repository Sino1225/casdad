<?php
require $_SERVER['DOCUMENT_ROOT'].'/Core.php';
$kun = new System;
$user = $kun->user();
$luot = [
								'1' => 1,
								'2' => 2,
								'3' => 5,
								'4' => 10,
								
							];
							$x = addslashes($_POST['x']);
							$thanhtoan = $luot[$x];


$row = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `setting_dragon`"));
if(!$_SESSION['token']){
	$status = 3; // false
	$msg = 'Ops! Bạn Chưa Đăng Nhập!';
}else if($user['money'] < $row['giatien'] * $thanhtoan){
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
                       ->add( new Element('6', $row['item_6'])) 
                       ->add( new Element('7', $row['item_7'])) 
                       ->add( new Element('8', $row['item_8'])) 
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
    case '6':
    $vongquay = 6;
    $location = array('role_1' => $vongquay, 'role_2' => $vongquay, 'role_3' => $vongquay, 'role_4' => $vongquay, 'role_5' => $vongquay); 
        break;
    case '7':
    $vongquay = 7;
    $location = array('role_1' => $vongquay, 'role_2' => $vongquay, 'role_3' => $vongquay, 'role_4' => $vongquay, 'role_5' => $vongquay);  
        break;
    case '8':
    $vongquay = "8";
    $role_1=rand(1,7);$role_2=rand(1,7);$role_3=rand(1,7);$role_4=rand(1,7);$role_5=rand(1,7);
    $location = array('role_1' => $role_1, 'role_2' => $role_2, 'role_3' => $role_3, 'role_4' => $role_4, 'role_5' => $role_5); 
        break;    
}



if($vongquay == 1){
    	$status = 1; // true
    	$img = '/img/trochoi/dragon/19.png';
    $kctrung = 19 * $thanhtoan;
	$msg = "Bạn Đã Nhận Được 19 x $thanhtoan = $kc Kim Cương !";
	$kc = 19 * $thanhtoan;
}else if($vongquay == 2){
    	$status = 1; // true
    	
    	$img = '/img/trochoi/dragon/99.png';
    	$kctrung = 99 * $thanhtoan;
	$msg = "Bạn Đã Nhận Được 99 x $thanhtoan = ".number_format($kctrung)." Kim Cương !";
	$kc = 99 * $thanhtoan;
}else if($vongquay == 3){
    	$status = 1; // true
    	$img = '/img/trochoi/dragon/399.png';
    	$kctrung = 399 * $thanhtoan;
	$msg = "Bạn Đã Nhận Được 399 x $thanhtoan = ".number_format($kctrung)." Kim Cương !";
	$kc = 399 * $thanhtoan;
}else if($vongquay == 4){
    	$status = 1; // true
    	$img = '/img/trochoi/dragon/999.png';
    	$kctrung = 999 * $thanhtoan;
	$msg = "Bạn Đã Nhận Được 999 x $thanhtoan = ".number_format($kctrung)." Kim Cương !";
	$kc = 999 * $thanhtoan;
}else if($vongquay == 5){
    	$status = 1; // true
    	$img = '/img/trochoi/dragon/2999.png';
    	$kctrung = 2999 * $thanhtoan;
	$msg = "Bạn Đã Nhận Được 2,999 x $thanhtoan = ".number_format($kctrung)." Kim Cương !";
	$kc = 2999 * $thanhtoan;
}else if($vongquay == 6){
    	$img = '/img/trochoi/dragon/6999.png';
    	$kctrung = 6999 * $thanhtoan;
    	$status = 1; // true
	$msg = "Bạn Đã Nhận Được 6,999 x $thanhtoan = ".number_format($kctrung)." Kim Cương !";
	$kc = 6999 * $thanhtoan;
}else if($vongquay == 7){
    	$img = '/img/trochoi/dragon/14999.png';
    	$kctrung = 14999 * $thanhtoan;
    	$status = 1; // true
	$msg = "Bạn Đã Nhận Được 14,999 x $thanhtoan = ".number_format($kctrung)." Kim Cương !";
	$kc = 14999 * $thanhtoan;
}else if($vongquay == 8){
    	$img = '/img/trochoi/dragon/19999.png';
    	$kctrung = 19999 * $thanhtoan;
    	$status = 1; // true
	$msg = "Bạn Đã Nhận Được 19,999 x $thanhtoan = ".number_format($kctrung)." Kim Cương !";
	$kc = 19999 * $thanhtoan;
}

$tienphaitra = ($row['giatien'] * $thanhtoan);

/*** UPDATE KIM CƯƠNG ***/

mysqli_query($kun->connect_db(),"UPDATE `users` SET `kimcuong` = `kimcuong` + '".$kc."' WHERE `username` = '".$user["username"]."'");

/*** TRỪ TIỀN ***/

    mysqli_query($kun->connect_db(),"UPDATE `users` SET `money` = `money` - '".$tienphaitra."' WHERE `username` = '".$user["username"]."'"); 
    
/*** UPDATE LỊCH SỬ ***/


mysqli_query($kun->connect_db(), "INSERT INTO `user_history_system` (`username`, `action`, `action_name`, `sotien`, `mota`, `time`, `history`) VALUES ('".$user['username']."', 'TRIỆU HỒI RỒNG THẦN', 'TRIỆU HỒI RỒNG THẦN', '-".number_format($tienphaitra)."đ', 'Nhận Được ".$gift."', '".time()."', '10')");

// xuất json
}
echo json_encode(array('status' => $status, 'item' => $kundeptrai,'location' => $location, 'msg' =>$msg, 'img' => $img));