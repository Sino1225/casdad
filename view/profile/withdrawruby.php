<?php
defined('KUNKEYPR') or exit('Restricted Access');
$kun->login_required();

$kmess = 8; // Số phim hiện trong mỗi page
$page = isset($_REQUEST['page']) && $_REQUEST['page'] > 0 ? intval($_REQUEST['page']) : 1;
$start = isset($_REQUEST['page']) ? $page * $kmess - $kmess : (isset($_GET['start']) ? abs(intval($_GET['start'])) : 0);

 $result = mysqli_query($kun->connect_db(), "SELECT * FROM `rut_kim_cuong` WHERE `username`='".$user['username']."' ORDER BY time DESC LIMIT $start, $kmess");
 $tong = mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `rut_kim_cuong` WHERE `username`='".$user['username']."'"));
?>
      <div class="c-layout-sidebar-content ">
                <div class="c-content-title-1">
                    <h3 class="c-font-uppercase c-font-bold">Rút Kim Cương FF</h3>
                    <div class="c-line-left"></div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Chọn loại vật phẩm khác:</label>
                    <div class="col-md-6">
                        <div class="input-group c-square" style="width: 100%">
                            <select  style="width: 100%" class="form-control  c-square c-theme" name="type_item" id="type_item">
                                                                                                                                                                                                                        <option selected value="/user/withdrawruby/2">Rút Kim Cương FF</option>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </select>
                            <span class="input-group-btn">
                        </span>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <script type="text/javascript">
                    if(2=='1'){
                        window.location.href = $( "select#type_item" ).val();
                    }
                    $("#type_item").change(function(){
                      window.location.href = $( "select#type_item" ).val();
                    });
                </script>
                <div class="text-center">
                    <center>
                        <h2 class="c-font-22 c-font-red">Số kim cương hiện có: <b><?php echo $user['kimcuong'];?></b></h2>
                    </center>

                </div>
                   <form class="form-horizontal" method="POST">


  <?php

    if(isset($_POST['rutkimcuong'])) {

      require $_SERVER['DOCUMENT_ROOT'].'/lib/xss_anti/xss_anti.php';

      $xss = new Xss_Anti;

      $idgame = mysqli_real_escape_string($kun->connect_db(), $xss->xss_clean($_POST['idgame']));
      $kimcuong = intval($xss->xss_clean($_POST['kimcuong']));
      $noidung = strip_tags(mysqli_real_escape_string($kun->connect_db(), $xss->xss_clean($_POST['noidung'])));
      $check = mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `rut_kim_cuong` WHERE `idgame`='".$idgame."' AND `status` = '2'"));


  if(empty($idgame) || empty($kimcuong)) {
    echo '<div class="alert alert-danger"> Xin vui lòng nhập đầy đủ thông tin!</div>';
  }else if($user['kimcuong'] < 9999){
    echo '<div class="alert alert-danger"> Bạn Không Đủ Kim Cương Để Rút !</div>';
  }else if($kimcuong > $user['kimcuong']){
    echo '<div class="alert alert-danger"> Kim Cương Bạn Cần Rút Phải Nhỏ Hơn Số Kim Cương Hiện Tại !</div>';
  }else if($check > 0){
    echo '<div class="alert alert-danger"> Đơn Rút Này Đã Tồn Tại Ở Hệ Thống. Vui Lòng Chờ Admin Xử Lý ! ( Trừ '.$kimcuong.' Kim Cương Tại Hệ Thống)</div>';
  } else {

    // update kimcuong user
  mysqli_query($kun->connect_db(), "UPDATE `users` SET `kimcuong` = `kimcuong` - '".$kimcuong."' WHERE `username` = '".$user['username']."' ");
   // update vào lịch sử rút
  mysqli_query($kun->connect_db(), "INSERT INTO `rut_kim_cuong` SET 
  `username` = '".$user['username']."',
  `idgame` = '".$idgame."',
  `kimcuong` = '".$kimcuong."',
  `noidung` = '".$noidung."',
  `status` = '2',
  `time` = '".time()."'");

        // Update vào lịch sử user
    mysqli_query($kun->connect_db(), "INSERT INTO `user_history_system` (`username`, `action`, `action_name`, `sotien`, `mota`, `time`) VALUES ('".$user['username']."', 'Rút Kim Cương Freefire', 'Rút Kim Cương Freefire', '-".number_format($kimcuong)." kc', 'Rút ".number_format($kimcuong)." kim cương vào ID ".$idgame."', '".time()."')");


    echo '<div class="alert alert-success"> Bạn rút kim cương thành công, xin chờ Admin duyệt! (Trừ '.$kimcuong.' Kim Cương Tại Hệ Thống )</div>';  
}


    }



  ?>
<div class="form-group">
                        <label class="col-md-3 control-label">Gói muốn rút:</label>
                        <div class="col-md-6">
                            <div class="input-group c-square" style="width: 100%">
                                <select  style="width: 100%" class="form-control  c-square c-theme" name="kimcuong">
                                    <option value="">Bảng quy đổi kim cương</option>
                                                                                                                        <option value="9999">Gói 9.999 Kim Cương</option>
                                                                                    <option value="19999">Gói 19.9999 Kim Cương</option>
                                                                                    <option value="29999">Gói 29.9999 Kim Cương</option>
                                                                                    <option value="50000">Gói 50.000 Kim
                                                                                    Cương</option>
                                                                                
                                                                                                            </select>
                                <span class="input-group-btn">
                            </span>
                            </div>
                        </div>
                </div>

  <div class="form-group">
                        <label class="col-md-3 control-label">ID trong game:</label>
                        <div class="col-md-6">
                            <div class="input-group c-square" style="width: 100%">
                                <input type="text" name="idgame"   style="width: 100%" class="form-control" />
                                </span>
                            </div>
                        </div>
                    </div>
                                           <div class="form-group">
                        <label class="col-md-3 control-label">Số điện thoại (nếu có):</label>
                        <div class="col-md-6">
                            <div class="input-group c-square" style="width: 100%">
                                <input type="text" name="noidung"   style="width: 100%" class="form-control" />
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="block-load-info">

                    </div>
        <div class="form-group c-margin-t-40">
            <div class="col-md-offset-3 col-md-6">
                <button type="submit" name="rutkimcuong" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold btn-block">THỰC HIỆN</button>
            </div>
        </div>
        <br>

    </form>






                <table id="charge_recent" class="table table-striped table-custom-res">

                    <tbody>
                    <tr>
                        <th>Thời gian</th>
                        <th>ID</th>
                        <th>Số kim cương</th>
                        <th>Trạng thái</th>
                        <th>Thao tác</th>
                    </tr>
                    </tbody>
<?php 
	while($row = mysqli_fetch_array($result)) {
		if($row['status'] == 0) {
			$status = '<p style="color: red;">Thất Bại</p>';
		}else if($row['status'] == 1) {
			$status = '<p style="color: green;">Thành Công</p>';
		}else if($row['status'] == 2) {
			$status = '<p style="color: yellow;">Chờ Duyệt</p>';
		}
		?>
                                    <tr>
                                       <td><?php echo date('d/m H:i', $row['time']);?></td>
                                        <td>#<?php echo $row['id'];?></td>
                                         <td><span class="c-font-bold text-danger"><?php echo number_format($row['kimcuong']);?> Kim Cương</span></td>
                                        <td><?php echo $row['idgame'];?></td>                                        
                                        <td><?php echo $status;?></td>
                                    </tr>

		<?php } ?>

                                        <tbody>

                    </tbody>
                </table>

                <div class="data_paginate paging_bootstrap paginations_custom" style="text-align: center">
                    
                </div>
            </div>
        </div>
    </div>
 <!-- END: PAGE CONTENT -->

    <div class="modal fade" id="LoadModal" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="loader" style="text-align: center"><img src="/assets/frontend/images/loader.gif" style="width: 50px;height: 50px;display: none"></div>
            <div class="modal-content">
            </div>
        </div>
    </div>

