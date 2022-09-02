<?php
	/*** YOUR WEBSITE CONFIG ***/

$config = array(
    /*** Database Config ***/
'LOCALHOST' => 'localhost', // mysql host service
'USERNAME' => 'btshxuct_test1', // username
'PASSWORD' => 'btshxuct_test1', // password
'DATABASE' => 'btshxuct_test1', // database name

'facebook_app_id' => 'null',
'facebook_app_key' => 'null',
'home' => 'https://khoakillall.xyz', // url website có ssl và không có / ở cuối

    /*** Gạch Thẻ Config ***/   
'CALLBACK_URL' => 'http://'.$_SERVER['SERVER_NAME'].'/model/card_callback.php', // Không thay đổi
'version' => '8.0.0', // Phiên bản mã nguồn hiện tại
'author' => 'BOP',
'contact' => 'https://facebook.com/huydeptrai2ka7'
);
?>