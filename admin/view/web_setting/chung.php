<?php 
defined('KUNKEYPR') or exit('Restricted Access');

$logo = $kun->settings('logo');
$banner = $kun->settings('banner');
$title = $kun->settings('title');
$admin = $kun->settings('admin');
$color = $kun->settings('color');
$thongbao = $kun->settings('thongbao');
$napthe = $kun->settings('napthe');
$web_brick = $kun->settings('brick');

if(isset($_POST['submit'])) {

    $_title = json_encode(array('title'=> $_POST['web_title'], 'name'=>$_POST['web_name']));
    $_logo = json_encode(array('url'=> $_POST['web_logo'], 'height'=>$_POST['web_logo_x'], 'width'=>$_POST['web_logo_y']));
    $_banner = json_encode(array('url'=> $_POST['web_banner']));
    $_color = json_encode(array('color'=> $_POST['web_color']));
    $_admin = json_encode(array('name'=> $_POST['admin_name'], 'phone'=>$_POST['admin_phone'], 'facebook'=>$_POST['admin_facebook'], 'youtube'=> $_POST['admin_youtube']));
    $_thongbao = json_encode(array('thongbao'=> $_POST['web_thongbao'], 'time'=> $_POST['web_thongbao_time']));

    $_napthe = json_encode(array('kieunap'=> $_POST['web_napthe']));
    $_web_brick = json_encode(array('site'=> $_POST['web_brick'], 'partner_id'=> $_POST['partner_id'], 'partner_key'=> $_POST['partner_key']));


    mysqli_query($kun->connect_db(), "UPDATE `settings` SET `value` = '".mysqli_escape_string($kun->connect_db(), $_title)."' WHERE `key` = 'web_title'");
    mysqli_query($kun->connect_db(), "UPDATE `settings` SET `value` = '".mysqli_escape_string($kun->connect_db(), $_logo)."' WHERE `key` = 'web_logo'");
    mysqli_query($kun->connect_db(), "UPDATE `settings` SET `value` = '".mysqli_escape_string($kun->connect_db(), $_banner)."' WHERE `key` = 'web_banner'");
    mysqli_query($kun->connect_db(), "UPDATE `settings` SET `value` = '".mysqli_escape_string($kun->connect_db(), $_color)."' WHERE `key` = 'web_color'");
    mysqli_query($kun->connect_db(), "UPDATE `settings` SET `value` = '".mysqli_escape_string($kun->connect_db(), $_admin)."' WHERE `key` = 'web_admin'");
    mysqli_query($kun->connect_db(), "UPDATE `settings` SET `value` = '".mysqli_escape_string($kun->connect_db(), $_thongbao)."' WHERE `key` = 'web_thongbao'");
    mysqli_query($kun->connect_db(), "UPDATE `settings` SET `value` = '".mysqli_escape_string($kun->connect_db(), $_napthe)."' WHERE `key` = 'web_napthe'");
    mysqli_query($kun->connect_db(), "UPDATE `settings` SET `value` = '".mysqli_escape_string($kun->connect_db(), $_web_brick)."' WHERE `key` = 'web_brick'");
    

        echo '<div class="alert alert-success fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Success!</strong> Chỉnh sửa thành công</div>';
        echo '<meta http-equiv="refresh" content="1;URL=" /> ';
}


?>




                            <form method="post" action="">
                <div class="row">

<div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tiêu đề WebSite</h4>
                                    <div class="form-group">
                                        <input name="web_title" type="text" class="form-control" value="<?php echo $title['title'];?>">
                                    </div>
                            </div>
                        </div>
</div>


<div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tên Website:</h4>
                                    <div class="form-group">
                                        <input name="web_name" type="text" class="form-control" value="<?php echo $title['name'];?>">
                                    </div>
                            </div>
                        </div>
</div>


<div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Url Logo:</h4>
                                    <div class="form-group">
                                        <input name="web_logo" type="text" class="form-control" value="<?php echo $logo['url'];?>">
                                    </div>
                            </div>
                        </div>
</div>



<div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Chiều Cao:</h4>
                                    <div class="form-group">
                                        <input name="web_logo_x" type="text" class="form-control" value="<?php echo $logo['height'];?>">
                                    </div>
                            </div>
                        </div>
</div>


<div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Chiều Rộng:</h4>
                                    <div class="form-group">
                                        <input name="web_logo_y" type="text" class="form-control" value="<?php echo $logo['width'];?>">
                                    </div>
                            </div>
                        </div>
</div>



<div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Hình Ảnh Banner:</h4>
                                    <div class="form-group">
                                        <input name="web_banner" type="text" class="form-control" value="<?php echo $banner['url'];?>">
                                    </div>
                            </div>
                        </div>
</div>


<div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Màu Chủ Đề:</h4>
                                    <div class="form-group">
                                        <input id="color" type="color"  onchange="javascript:document.getElementById('chosen-color').value = document.getElementById('color').value;" class="form-control" value="<?php echo $color['color'];?>">
                                    </div>
                                        <span class="input-group-addon">
                                            <i style="background-color: rgb(121, 227, 237);"></i>
                                        </span>
                            </div>
                        </div>
</div>

<div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Màu Chủ Đề (Mã Màu):</h4>
                                    <div class="form-group">
                                        <input name="web_color" type="text" id="chosen-color" class="form-control" value="<?php echo $color['color'];?>">
                                    </div>
                            </div>
                        </div>
</div>




<div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Họ Tên Admin:</h4>
                                    <div class="form-group">
                                        <input name="admin_name" type="text" class="form-control" value="<?php echo $admin['name'];?>">
                                    </div>
                            </div>
                        </div>
</div>


<div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Hotline:</h4>
                                    <div class="form-group">
                                        <input name="admin_phone" type="number" class="form-control" value="<?php echo $admin['phone'];?>">
                                    </div>
                            </div>
                        </div>
</div>


<div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Link Facebook:</h4>
                                    <div class="form-group">
                                        <input name="admin_facebook" type="text" class="form-control"  value="<?php echo $admin['facebook'];?>">
                                    </div>
                            </div>
                        </div>
</div>


<div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Link YouTuBe:</h4>
                                    <div class="form-group">
                                        <input name="admin_youtube" type="text" class="form-control" value="<?php echo $admin['youtube'];?>">
                                    </div>
                            </div>
                        </div>
</div>



<div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Thông Báo:</h4>
                                    <div class="form-group">
                                        <textarea class="form-control" name="web_thongbao" rows="8"><?php echo htmlentities($thongbao['thongbao']);?></textarea>
                                    </div>
                            </div>
                        </div>
</div>


<input name="web_thongbao_time" type="hidden" class="form-control" value="<?php echo $thongbao['time'];?>">


<div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Kiểu Nạp Thẻ</h4>
                                    <div class="form-group">
                                        <select name="web_napthe" class="form-control">
                                            <option value="<?php echo $napthe['kieunap'];?>"><?php if($napthe['kieunap'] == 'napcham') echo 'Nạp Chậm'; else echo 'Nạp Tự Động';?></option>
                                            <option value="naptudong">Nạp Tự Động</option>
                                            <option value="napcham">Nạp Chậm</option>
                                        </select>
                                    </div>
                            </div>
                        </div>
</div>

<div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Bên Gạch Thẻ</h4>
                                    <div class="form-group">
                                        <select name="web_brick" class="form-control">
                                            <option value="<?php echo $web_brick['site'];?>"><?php if($web_brick['site'] == 'thesieure') echo 'TheSieuRe.Com'; else echo 'NapTuDong.Com';?></option>
                                            <option value="thesieure">TheSieuRe.Com</option>
                                            
                                        </select>
                                    </div>
                            </div>
                        </div>
</div>


<div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Partner ID:</h4>
                                    <div class="form-group">
                                        <input name="partner_id" type="text" class="form-control" value="<?php echo $web_brick['partner_id'];?>">
                                    </div>
                            </div>
                        </div>
</div>


<div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Partner Key:</h4>
                                    <div class="form-group">
                                        <input name="partner_key" type="text" class="form-control" value="<?php echo $web_brick['partner_key'];?>">
                                    </div>
                            </div>
                        </div>
</div>




                            <div class="col-md-12"> 
                                        <center><button type="submit" name="submit" class="btn waves-effect waves-light btn-lg btn-rounded btn-primary">CẬP NHẬT</button></center>
                            </div>


                            </form>
                </div>






