<?php
require $_SERVER['DOCUMENT_ROOT'].'/Core.php';
$kun = new System;
$user = $kun->user();

// check session
if(!$_SESSION['token']) {
		die(json_encode(array('status' => 3,'data' => 'Bạn Cần Đăng Nhập!','msg' => 'lỗi!')));
}

$row = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `setting_latthe2`"));

// check tiền
if($row['giatien'] > $user['money']) {
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
                          ;
            $kundeptrai = $randomizer->get();       


// gán item và hình ảnh sau khi chạy tỷ lệ
switch ($kundeptrai) {
    case '1':
    $vongquay = 1;
    $img = '/assets/img/latthe2/1.png'; // chúc may mắn lần sau nữa
        break;
    case '2':
    $vongquay = 2;
    $img = '/assets/img/latthe2/2.png';      // 10 kc
        break;
    case '3':
    $vongquay = 3;
    $img = '/assets/img/latthe2/3.png';      // 5000 kc
        break;
    case '4':
    $vongquay = 4;
    $img = '/assets/img/latthe2/4.png';    // 50 kc
        break;
    case '5':
    $vongquay = 5;
    $img = '/assets/img/latthe2/5.png';   // 9999 kc
        break;
    case '6':
    $vongquay = 6;
    $img = '/assets/img/latthe2/6.png';    // 500 kc
        break;
    case '7':
    $vongquay = 7;
    $img = '/assets/img/latthe2/7.png';    // 500 kc
        break;
    case '8':
    $vongquay = 8;
    $img = '/assets/img/latthe2/8.png';    // 500 kc
        break;
    case '9':
    $vongquay = 9;
    $img = '/assets/img/latthe2/9.png';    // 500 kc
        break;
         
}

// gán giá trị theo tỷ lệ 
if($vongquay == 1){
    $gift = "Bạn Trúng 29 Kim Cương"; 
    $kimcuong = 29;
}elseif($vongquay == 2){
    $gift = "Bạn Trúng 110 Kim Cương";
    $kimcuong = 110;
}elseif($vongquay == 3){
    $gift = "Bạn Trúng 1.000 Kim Cương";
    $kimcuong = 1000;
}elseif($vongquay == 4){
    $gift = "Bạn Trúng 9.999 Kim Cương";
    $kimcuong = 1999;
}elseif($vongquay == 5){
    $gift = "Bạn Trúng 39 Kim Cương";
    $kimcuong = 39;
}elseif($vongquay == 6){
    $gift = "Bạn Trúng 5.000 Kim Cương";
    $kimcuong = 5000;
}elseif($vongquay == 7){
    $gift = "Bạn Trúng 5.000 Kim Cương";
    $kimcuong = 5000;
}elseif($vongquay == 8){
    $gift = "Bạn Trúng 5.000 Kim Cương";
    $kimcuong = 5000;
}elseif($vongquay == 9){
    $gift = "Bạn Trúng 5.000 Kim Cương";
    $kimcuong = 5000;
}




//UPDATE Kimcuong vào acc
    mysqli_query($kun->connect_db(),"UPDATE `users` SET `kimcuong` = `kimcuong` + '".$kimcuong."' WHERE `username` = '".$user["username"]."'");
// update tiền  
    mysqli_query($kun->connect_db(),"UPDATE `users` SET `money` = `money` - '".$row['giatien']."' WHERE `username` = '".$user["username"]."'"); 
// update lich su
    mysqli_query($kun->connect_db(), "INSERT INTO `user_history_system` (`username`, `action`, `action_name`, `sotien`, `mota`, `time`) VALUES ('".$user['username']."', 'Lật Bài Siêu Nhân Gao', 'Lật Bài Siêu Nhân Gao', '-".number_format($row['giatien'])."đ', '".$gift."', '".time()."')");
// xuất json
	die(json_encode(array('status' => 1,'img' => $img,'msg' => $gift)));

