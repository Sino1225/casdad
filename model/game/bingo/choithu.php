<?php
require $_SERVER['DOCUMENT_ROOT'].'/Core.php';
$kun = new System;
$user = $kun->user();

// check session
if(!$_SESSION['token']) {
		die(json_encode(array('status' => 3,'data' => 'Bạn Cần Đăng Nhập!','msg' => 'lỗi!')));
}

$row = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `setting_try`"));

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
    $gift = "Bạn Trúng 19 Kim Cương"; 
    $kimcuong = 19;
}elseif($vongquay == 2){
    $gift = "Bạn Trúng 99 Kim Cương";
    $kimcuong = 99;
}elseif($vongquay == 3){
    $gift = "Bạn Trúng 999 Kim Cương";
    $kimcuong = 999;
}elseif($vongquay == 4){
    $gift = "Bạn Trúng 6.999 Kim Cương";
    $kimcuong = 6999;
}elseif($vongquay == 5){
    $gift = "Bạn Trúng 9.999 Kim Cương";
    $kimcuong = 9999;
}elseif($vongquay == 6){
    $gift = "Bạn Trúng 14.999 Kim Cương";
    $kimcuong = 14999;
}elseif($vongquay == 7){
    $gift = "Bạn Trúng 19.999 Kim Cương";
    $kimcuong = 19999;
}else if($vongquay == 8){
    $gift = "Thật Tiết ! Bạn Không được gì!";
    $kimcuong = 0;
}

// xuất json
	die(json_encode(array('status' => 1,'data' => $location,'msg' => $gift)));

