	<?php
defined('KUNKEYPR') or exit('Restricted Access');
$kun->login_required();
?>

<?php
if($kun->is_admin()) {
    $level = 'Administartor'; 
}else { 
    $level = 'Thành Viên';
}

if($user['fbid'] != 0) {
    $avatar = 'https://graph.facebook.com/'.$user['username'].'/picture?width=1000&height=1000';
}else {
    $avatar = 'https://nick.vn/assets/frontend/images/unknown-avatar.jpg';
}
?>
<!-- BEGIN: PAGE CONTAINER -->

	<!-- BEGIN: PAGE CONTENT -->
		<div class="c-layout-page">
		<!-- BEGIN: PAGE CONTENT -->
		<div class="m-t-20 visible-sm visible-xs"></div>
<div class="container c-size-md ">
	<div class="col-md-12">
		<div class="text-center">
			<center>
			<img class="img-responsive img-thumbnail hidden-xs" width="256" height="256" src="<?php echo $avatar;?>" alt=""> 
				<h2 style="color:#fff" class="c-font-bold c-font-28">ID: <?php echo $user['id'];?></h2>
				<h2 style="color:#fff" class="c-font-bold c-font-28"><?php echo $user['username'];?><?php echo $user['name'];?></h2>
				<h2 style="color:#fff" class="c-font-22"><?php echo $level;?></h2>
				<h2 style="color:#fff" class="c-font-22"></h2>
				<h2 style="color:#fff" class="c-font-22 c-font-red"><?php echo number_format($user['money']);?>đ</h2>
			</center>

		</div>

	</div>
</div>

<?php require $root.'/view/profile/right_menu.php';?>

<?php 
if($_GET['cmd']) {
    require $root.'/view/profile/'.$_GET['cmd'].'.php';
}else {
?>

404 : )

<?php
}
?>