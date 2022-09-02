<?php
require $_SERVER['DOCUMENT_ROOT'].'/Core.php';
$kun = new System;


switch ($_POST['type']) {
	case 'login':
		$kun->check_login();

$u = addslashes($_POST['username']);
$p = addslashes($_POST['password']);

if(!$u || !$p) {
	die ('<div class="alert alert-danger" role="alert">Vui Lòng Nhập Đầy Đủ Thông Tin</div>'); //DatLight :33
}

if($kun->check_user($u,$p) == true) {

$token = $kun->Creat_Token(30);

 
    $res = mysqli_query($kun->connect_db(), "UPDATE users SET token = '".$token."', ip = '".$_SERVER['REMOTE_ADDR']."' WHERE `username`='".$u."'");

    $_SESSION['token'] = $token;
 
	echo '<div class="alert alert-success" role="alert">Đăng nhập thành công!</div>';
	echo '<meta http-equiv="refresh" content="0;URL=/" />';

}else {
	echo '<div class="alert alert-danger" role="alert">Đăng nhập thất bại</div>';
}



		break;

	case 'register':
	$kun->check_login();

	

$u = $_POST['username'];
$e = $_POST['email'];

$p = $_POST['password'];
$rp = $_POST['repassword'];


if(!$e || !$u  || !$p || !$rp) {
	die('<div class="alert alert-danger" role="alert">Hãy điền đầy đủ thông tin!</div>');
}


$syntax = array('<' , '>' , '"' , "'" , '$'  , ',' , '*' , '!' , '(' , ')' , ';' , ':' , '?' , '+' , '=' , '#' , '/','-');


foreach ($syntax as $key) {
	if($kun->tim_chuoi($n,$key) == true) {
	die('<div class="alert alert-danger" role="alert">Tên của bạn không được có kí tự lạ!</div>');
	}

	if($kun->tim_chuoi($u,$key) == true) {
	die('<div class="alert alert-danger" role="alert">Tên của bạn không được có kí tự lạ!</div>');
	}
	if($kun->tim_chuoi($e,$key) == true) {
	die('<div class="alert alert-danger" role="alert">Email Không đúng định dạng!</div>');
	}


	if($kun->tim_chuoi($p,$key) == true) {
	die('<div class="alert alert-danger" role="alert">Mật khẩu không được có kí tự lạ!</div>');
	}

}

	if($kun->tim_chuoi($n,'.') == true) {
	die('<div class="alert alert-danger" role="alert">Tên của bạn không được có kí tự lạ!</div>');
	}

	if($kun->tim_chuoi($u,'.') == true) {
	die('<div class="alert alert-danger" role="alert">Tên tài khoản của bạn không được có kí tự lạ!</div>');
	}
	if($kun->tim_chuoi($e) == true) {
	die('<div class="alert alert-danger" role="alert">Email của bạn không được có kí tự lạ!</div>');
	}

	if($kun->dectect_tiengviet($u) == true) {
	die('<div class="alert alert-danger" role="alert">Tên của bạn phài có tiếng việt không dấu!</div>');
	}




if(strlen($u) > 30) {
	die('<div class="alert alert-danger" role="alert">Tên của bạn không được quá 30 kí tự</div>');
}

if(strlen($u) < 6) {
	die('<div class="alert alert-danger" role="alert">Tên tài khoản của bạn phải trên 6 ký tự</div>');
}

if(strlen($e) > 30) {
	die('<div class="alert alert-danger" role="alert">Email của bạn không được quá 30 kí tự</div>');
}

if(strlen($e) < 6) {
	die('<div class="alert alert-danger" role="alert">Email tài khoản của bạn phải trên 6 ký tự</div>');
}

if(strlen($p) > 30) {
	die('<div class="alert alert-danger" role="alert">Mật Khẩu của bạn không được quá 30 kí tự</div>');
}

if(strlen($p) < 6) {
	die('<div class="alert alert-danger" role="alert">Mật Khẩu tài khoản của bạn phải trên 6 ký tự</div>');
}







$u = $kun->rewrite($u);


if($kun->check_user_register($u) == false) {

$token = $kun->Creat_Token(30);
$auth =  $kun->Creat_Token(30);

$time = time();
  
  
$verify_code = rand(10000, 99999);
 
 $cmd = "INSERT INTO users (fbid, admin, name, username,  money, password, email, token, auth, ip, verify_code, verify, time) VALUES ('0', 0, '".$n."', '".$u."', 6000, '".md5($p)."', '".$e."', '".$token."','".$auth."', '".$_SERVER['REMOTE_ADDR']."', '".$verify_code."', 'true', '".$time."')";

    $res = mysqli_query($kun->connect_db(), $cmd);

    $_SESSION['token'] = $token;


	echo '<div class="alert alert-success" role="alert">Đăng Ký Tài Khoản Thành Công</div>';
	echo '<meta http-equiv="refresh" content="0;URL=/" />';

}else {

	echo '<div class="alert alert-danger" role="alert">Thêm Tài Khoản Đã Có Người Sử Dụng</div>';


}

		break;
		

	
	case 'get-money':
		if($_SESSION['token']) {
			$user = $kun->user();
			die(json_encode(array('status'=>true, 'code'=> 200, 'money'=> number_format($user['money']), 'msg'=>'success')));
		}else {
			die(json_encode(array('status'=>false, 'code'=> 500, 'money'=> '', 'msg'=>'disconnect to server!')));
		}

		break;
	
	
	default:
		echo '<div class="alert alert-danger" role="alert">Lỗi Hệ Thống Vui Lòng GỬi Lại Sau</div>';
		break;
}

?>
