<?php
defined('KUNKEYPR') or exit('Restricted Access');
$kmess = 8; // Số phim hiện trong mỗi page
$page = isset($_REQUEST['page']) && $_REQUEST['page'] > 0 ? intval($_REQUEST['page']) : 1;
$start = isset($_REQUEST['page']) ? $page * $kmess - $kmess : (isset($_GET['start']) ? abs(intval($_GET['start'])) : 0);

 $sql = mysqli_query($kun->connect_db(), "SELECT * FROM `rut_kim_cuong` WHERE `status`='2' ORDER BY `time` DESC LIMIT $start, $kmess");
 $sql2 = mysqli_query($kun->connect_db(), "SELECT * FROM `rut_kim_cuong` WHERE `status`='1' ORDER BY `time` DESC LIMIT $start, $kmess");
 $tong1 = mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `rut_kim_cuong` WHERE `status`='2'"));
 $tong2 = mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `rut_kim_cuong` WHERE `status`='0"));
?>



<?php 

if(isset($_POST['accept_all'])) {
        mysqli_query($kun->connect_db(), "UPDATE `rut_kim_cuong` SET `status` = '1' WHERE `status` = '2'");

echo '<div class="alert alert-success"> Hoàn Thành!<meta http-equiv="refresh" content="2"></div>';

    }

if(isset($_POST['accept'])) {
        mysqli_query($kun->connect_db(), "UPDATE `rut_kim_cuong` SET `status` = '1' WHERE `id` = '".$_POST['id']."'");

echo '<div class="alert alert-success"> Duyệt Kim Cương Thành công!
    <meta http-equiv="refresh" content="2">
</div>';

    }

if(isset($_POST['not_accept'])) {

        $get_info = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `rut_kim_cuong` WHERE `id`='".$_POST['id']."'"));
            // update kimcuong user
        mysqli_query($kun->connect_db(), "UPDATE `users` SET `kimcuong` = `kimcuong` + '".$get_info['kimcuong']."' WHERE `username` = '".$get_info['username']."' ");
            // Update vào lịch sử user
        mysqli_query($kun->connect_db(), "INSERT INTO `user_history_system` (`username`, `action`, `action_name`, `sotien`, `mota`, `time`) VALUES ('".$user['username']."', 'Rút Kim Cương Freefire', 'Rút Kim Cương Freefire', '+".number_format($get_info['kimcuong'])." kc', 'Hoàn Lại ".number_format($get_info['kimcuong'])." kim cương cho đơn hàng #".$_POST['id']."', '".time()."')");

        mysqli_query($kun->connect_db(), "UPDATE `rut_kim_cuong` SET `status` = '0' WHERE `id` = '".$_POST['id']."'");

echo '<div class="alert alert-danger">
    <strong>Error !</strong> Đơn hàng này thất bại hoàn kim cương !
    <meta http-equiv="refresh" content="2"> 
</div>';

    }

?>






<div class="row">


      <div class="col-md-12 col-lg-12 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <b>TỔNG SỐ ĐƠN RÚT KIM CƯƠNG CẦN DUYỆT</b>
                            </div>
                              <center>
                              <form action="" method="post" id="accept_all">
                                <button type="submit" name="accept_all" class="btn btn-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
  <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"/>
</svg>
                                    <span>Hoàn Thành Tất Cả</span>
                                </button>
                              </form>                                
                            </center>
                        <script type="text/javascript">
                          $("#accept_all").submit(function(e) {
                                if(confirm('Bạn Có Muốn Xóa Tất Cả Đơn Rút Kim Cương không? Lần cuối?') == true){
                                  $("#accept_all").submit();
                                }
                              }
                            }
                          });
                        </script>


                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-light">
                                       <tr>
                                         <th>STT</th>
                                         <th>Người rút</th>
                                         <th>ID GAME</th>
                                         <th>Kim Cương</th>
                                         <th>Thời gian</th>
                                         <th>Tình Trạng</th>
                                         <th>Thao tác</th>
                                       </tr>
                                    </thead>
                                    <tbody>

  <?php

    while ($row = mysqli_fetch_array($sql)) {
          if($row['status'] == 0) {
            $status = '<p style="color: red;">Thất Bại</p>';
          }else if($row['status'] == 1) {
            $status = '<p style="color: green;">Thành Công</p>';
          }else if($row['status'] == 2) {
            $status = '<p style="color: black;">Chờ Duyệt</p>';
          }
      ?>
<tr>
   <th scope="row">#<?php echo $row['id'];?></th>
   <td><?php echo $row['username'];?></td>
   <td><?php echo $row['idgame'];?></td>
   <td><?php echo $row['kimcuong'];?></td>
   <td><?php echo date('d/m G:i', $row['time']);?></td>
   <td><?php echo $status;?></td>
   <td>
    <div class="col-md-1 col-sm-1">
    <form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
      <button type="submit" name="accept" data-toggle="tooltip" data-placement="top" title="" data-original-title="Duyệt thẻ" class="btn btn-info btn-outline btn-xs m-r-5 tooltip-info"><i class="fa fa-check"></i></button>
    </form>
   </div>
    <div class="col-md-1 col-sm-1">
    <form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
      <button type="submit" name="not_accept" data-toggle="tooltip" data-placement="top" title="" data-original-title="Xóa yêu cầu" class="btn btn-danger btn-outline btn-xs m-r-5 tooltip-danger"><i class="fa fa-times"></i></button>
    </form>
       </div>
   </td>
</tr> 
    <?php
    }
    ?>

                                    </tbody>
                                </table>
                            </div>

<?php
if ($tong1 > $kmess){
echo '<center>' . $kun->phantrang('/admin/rutkimcuong/', $start, $tong1, $kmess) . '</center>';
}
?>

                        </div>
                    </div>




</div>