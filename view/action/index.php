	<?php
defined('KUNKEYPR') or exit('Restricted Access');
$kun->login_required();
?>

<?php
if($kun->is_admin()) {
    $level = 'Administrator'; 
}else { 
    $level = 'Thành Viên';
}
//echo var_dump($user);


if($user['fbid'] != 0) {
    $avatar = 'https://graph.facebook.com/'.$user['username'].'/picture?width=1000&height=1000';
}else {
    $avatar = '/images/avatar.jpg';
}
?>
<div class="c-layout-page" style="    background-color: rgba(0,0,0,0.8);">
    <!-- BEGIN: PAGE CONTENT -->
        <div class="c-layout-page">
        <!-- BEGIN: PAGE CONTENT -->
        <div class="m-t-20 visible-sm visible-xs"></div>

        <!-- <center style="max-width:1140px; margin: 0 auto;" class="hidden-xs"><div class="c-layout-breadcrumbs-1 c-bgimage c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center" style="background-image: url('/assets/frontend/images/unknown-cover.jpg');background-position: center;width:100%;height: 350px;background-repeat: no-repeat;background-position: center;background-size: cover;">
        <div class="container">
            <div class="c-page-title c-pull-left">
                <h3 class="c-font-uppercase c-font-bold c-font-white c-font-20 c-font-slim">&nbsp;</h3>
            </div>
        </div>
    </div>
</center> -->
<?php require $root.'/view/action/right_menu.php';?>

<div class="c-layout-sidebar-content ">

    <div class="col-md-12">
        <div class="text-center" >
            <center>
                <!-- <img class="img-responsive img-thumbnail hidden-xs" width="256" height="256" src="<?php echo $avatar;?>" alt=""> -->
                <h2 class="c-font-bold c-font-28">UID: <?php echo $user['username'];?></h2>
                <h2 class="c-font-bold c-font-28"><?php echo $user['username'];?></h2>
                <h2 class="c-font-22"><?php echo $level;?></h2>
                <h2 class="c-font-22"></h2>
                <h2 class="c-font-22 c-font-red"><?php echo number_format($user['money']);?>đ</h2>
            </center>

        </div>

    </div>


<?php 
if($_GET['cmd']) {
    require $root.'/view/action/'.$_GET['cmd'].'.php';
}else {
?>
Chức Năng này không tồn tại!


<?php
}
?>