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
// check session
if(!$_SESSION['token']) {
		die(json_encode(array('status' => 3,'data' => 'Bạn Cần Đăng Nhập!','msg' => 'lỗi!')));
}

$row = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `setting_bingo`"));

// check tiền
if($row['giatien'] * $thanhtoan > $user['money']) {
		die(json_encode(array('status' => 4,'data' => 'Bạn không đủ tiền để chơi!','msg' => 'lỗi!')));
}

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

// gán random giá trị nổ hũ 
$_rand = Rand($nohu_from, $nohu_to); 

// gán giá trị theo tỷ lệ 
if($vongquay == 1){
    $kimcuongtrung = 19 * $thanhtoan;
    $gift = "Bạn Trúng 19 * $thanhtoan = $kimcuongtrung Kim Cương"; 
    $kimcuong = 19 * $thanhtoan;
}elseif($vongquay == 2){
    $kimcuongtrung = 99 * $thanhtoan;
    $gift = "Bạn Trúng 99 * $thanhtoan = $kimcuongtrung Kim Cương";
    $kimcuong = 99 * $thanhtoan;
}elseif($vongquay == 3){
    $kimcuongtrung = 999 * $thanhtoan;
    $gift = "Bạn Trúng 999 * $thanhtoan = $kimcuongtrung Kim Cương";
    $kimcuong = 999 * $thanhtoan;
}elseif($vongquay == 4){
    $kimcuongtrung = 6999 * $thanhtoan;
    $gift = "Bạn Trúng 6999 * $thanhtoan = $kimcuongtrung Kim Cương";
    $kimcuong = 6999 * $thanhtoan;
}elseif($vongquay == 5){
    $kimcuongtrung = 9999 * $thanhtoan;
    $gift = "Bạn Trúng 9999 * $thanhtoan = $kimcuongtrung Kim Cương";
    $kimcuong = 9999 * $thanhtoan;
}elseif($vongquay == 6){
    $kimcuongtrung = 14999 * $thanhtoan;
    $gift = "Bạn Trúng 14999 * $thanhtoan = $kimcuongtrung Kim Cương";
    $kimcuong = 14999 * $thanhtoan;
}elseif($vongquay == 7){
    $kimcuongtrung = 19999 * $thanhtoan;
    $gift = "Bạn Trúng 19999 * $thanhtoan = $kimcuongtrung Kim Cương";
    $kimcuong = 19999 * $thanhtoan;
}else if($vongquay == 7){
    $gift = "Thật Tiết ! Bạn Không được gì!";
    $kimcuong = 0 * $thanhtoan;
}
$tienphaitra = ($row['giatien'] * $thanhtoan);
//UPDATE Kimcuong vào acc
    mysqli_query($kun->connect_db(),"UPDATE `users` SET `kimcuong` = `kimcuong` + '".$kimcuong."' WHERE `username` = '".$user["username"]."'");
// Update Lần sử dụng vòng quay
    mysqli_query($kun->connect_db(), "UPDATE `setting_bingo` SET `sudung` = `sudung` + 30");
// update tiền  
    mysqli_query($kun->connect_db(),"UPDATE `users` SET `money` = `money` - '".$tienphaitra."' WHERE `username` = '".$user["username"]."'"); 
// update lich su
    mysqli_query($kun->connect_db(), "INSERT INTO `user_history_system` (`username`, `action`, `action_name`, `sotien`, `mota`, `time`, `history`) VALUES ('".$user['username']."', 'BINGO',BINGO', '-".number_format($tienphaitra)."đ', '".$gift."', '".time()."', '10')");
// xuất json
	die(json_encode(array('status' => 1,'data' => $location,'msg' => $gift)));

