<?php
// Kiểm tra trạng thái cài đặt website
if (!(file_exists('config/config.php'))) {   
header("Location: /install");            
}

 // Define Chống vào thẳng file
define("KUNKEYPR", true); // gán defined chống khách vào thẳng file

 // Require Hàm hệ thống
require $_SERVER['DOCUMENT_ROOT'].'/Core.php';
$kun = new System;
$user = $kun->user(); // gọi giá trị user đang login

	// web setting

$_logo = $kun->settings('logo');
$_banner = $kun->settings('banner');
$_title = $kun->settings('title');
$_admin = $kun->settings('admin');
$_color = $kun->settings('color');
$_thongbao = $kun->settings('thongbao');


	// Title

$exec_url = $_SERVER['REQUEST_URI'];
	
if($exec_url == '/' || $exec_url == '/home' || $exec_url == '/index.php' || $exec_url == '/index.html') {
		$title = $_title['title'].' - '.$_title['name'];
	}else if ($kun->tim_chuoi($exec_url, 'wheel/')) {
		$title = 'Vòng Quay Free Fire';
// 	}else if ($kun->tim_chuoi($exec_url, 'body/random/KC2')) {
// 		$title = 'Shop Bán Acc KC2 - Bán Acc KC2 Giá Rẻ, Uy Tín Hàng Đầu Việt Nam';
// 	}else if ($kun->tim_chuoi($exec_url, 'body/random/KC1')) {
// 		$title = 'Shop Bán Acc KC1 - Bán Acc KC1 Giá Rẻ, Uy Tín Hàng Đầu Việt Nam';		
// 	}else if ($kun->tim_chuoi($exec_url, 'html/quay11')) {
// 		$title = 'VÒNG QUAY BINGO TỐI THƯỢNG NOEL';
// 	}else if ($kun->tim_chuoi($exec_url, 'html/quay12')) {
// 		$title = 'VÒNG QUAY BINGO SIÊU CẤPOEL';
// 	}else if ($kun->tim_chuoi($exec_url, 'html/quay6')) {
// 		$title = 'MÁY XÈNG';	
// 	}else if ($kun->tim_chuoi($exec_url, 'html/quay9')) {
// 		$title = 'VÒNG QUAY BINGO TẾT TRUNG THU 20K';
// 	}else if ($kun->tim_chuoi($exec_url, 'html/quayso3')) {
// 		$title = 'Quay số trúng thưởng';			
// 	}else if ($kun->tim_chuoi($exec_url, 'body/random/FREEFIRE')) {
// 		$title = 'Shop Bán Acc FREEFIRE - Bán Acc FREEFIRE Giá Rẻ, Uy Tín Hàng Đầu Việt Nam ';
// 	}else if ($kun->tim_chuoi($exec_url, 'body/lienquan')) {
// 		$title = 'Shop Bán Acc Liên Quân - Bán Acc Liên Quân Giá Rẻ, Uy Tín Hàng Đầu Việt Nam ';		
// 	}else if ($kun->tim_chuoi($exec_url, 'nap-tien.html')) {
// 		$title = 'Nạp Thẻ';
// 	}else if ($kun->tim_chuoi($exec_url, 'doimatkhau')) {
// 		$title = 'Đổi Mật Khẩu';
// 	}else if ($kun->tim_chuoi($exec_url, 'lichsugiaodich')) {
// 		$title = 'Lịch Sử Giao Dịch';
// 	}else if ($kun->tim_chuoi($exec_url, 'html/lichsuquay')) {
// 		$title = 'Lịch Sử Quay';		
// 	}else if ($kun->tim_chuoi($exec_url, 'lichsunapthe')) {
// 		$title = 'Lịch Sử Nạp Thẻ';
// 	}else if ($kun->tim_chuoi($exec_url, '/html/kimcuong')) {
// 		$title = 'Rút Kim Cương';
// 	}else if ($kun->tim_chuoi($exec_url, '/html/quanhuy')) {
// 		$title = 'Rút Quân Huy';
// 	}else if ($kun->tim_chuoi($exec_url, 'lich-su-mua.html')) {
// 		$title = 'Lịch Sử Mua';
// 	}else if ($kun->tim_chuoi($exec_url, '/user.html')) {
// 		$title = 'Trang Cá Nhân';
// 	}else if ($kun->tim_chuoi($exec_url, 'login/doipass')) {
// 		$title = 'Đổi Mật Khẩu';
// 	}else if ($kun->tim_chuoi($exec_url, 'lich-su-giaodich.html')) {
// 		$title = 'Lịch Sử Giao Dịch';
// 	}else if ($kun->tim_chuoi($exec_url, '/user/napthe')) {
// 		$title = 'Nạp Thẻ';
// 	}else if ($kun->tim_chuoi($exec_url, '/lich-su-nap.html')) {
// 		$title = 'Lịch Sử Nạp Thẻ';
// 	}else if ($kun->tim_chuoi($exec_url, '/latbai')) {
// 		$title = 'Lật Bài Siêu Nhân Gao 18K';
// 	}else if ($kun->tim_chuoi($exec_url, '/sieucap')) {
// 		$title = 'Vòng Quay Siêu Cấp'; 
// 	}else if ($kun->tim_chuoi($exec_url, '/random/freefire/')) {
// 		$title = 'RANDOM FREE FIRE';
// 	}else if ($kun->tim_chuoi($exec_url, '/random/lienquan/')) {
// 		$title = 'RANDOM LIÊN QUÂN';		
// 	}else if ($kun->tim_chuoi($exec_url, 'lich-su-random.html')) {
// 		$title = 'LỊCH SỬ MUA RANDOM';
	}else if ($kun->tim_chuoi($exec_url, '/user/dang-nhap')) {
		$title = 'Đăng Nhập';
	}else if ($kun->tim_chuoi($exec_url, '/user/dang-ki')) {
		$title = 'Đăng Kí';
	}



 // một vài cái linh tinh
$token = $_SESSION['token'];
if($token) $btn_login = $user['username'].' - $ '.number_format($user['money']).''; else $btn_login = "Đăng Nhập";
if($token) $btn_fbid = ''.$user['name'].' - $ '.number_format($user['money']).''; else $btn_fbid = "Đăng nhập";
if($token) $btn_reg = "Đăng Xuất"; else $btn_reg = "Đăng Kí";
if($token) $href_login = '/user/profile'; else $href_login = "dang-nhap";
if($token) $href_reg = "/user/dang-xuat"; else $href_reg = "/dang-ki";
if($kun->is_admin()) $btn_admin = '<li class=" "><a  href="/admin" ><b>ADMIN CP</b></a></li>'; else $btn_admin = '';

    require $root.'/view/header.php';
		if(!$_GET['modun'] && !$_GET['act']) {
		    require $root.'/view/index.php';
		}else {
			$modun = $_GET['modun'];
			$act = $_GET['act'];

					if (file_exists($root.'/view/'.$modun.'/'.$act.'.php')){
		    			require $root.'/view/'.$modun.'/'.$act.'.php';
					}else{
					    echo "<center>404 - Not Found</center>";
					}

		}

    require $root.'/view/footer.php';
