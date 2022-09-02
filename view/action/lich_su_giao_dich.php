<?php
defined('KUNKEYPR') or exit('Restricted Access');
$kun->login_required();
$kmess = 8; // Số phim hiện trong mỗi page
$page = isset($_REQUEST['page']) && $_REQUEST['page'] > 0 ? intval($_REQUEST['page']) : 1;
$start = isset($_REQUEST['page']) ? $page * $kmess - $kmess : (isset($_GET['start']) ? abs(intval($_GET['start'])) : 0);

 $result = mysqli_query($kun->connect_db(), "SELECT * FROM `user_history_system` WHERE `username`='".$user['username']."' AND `history`='0'  ORDER BY time DESC LIMIT $start, $kmess");
 $tong = mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `user_history_system` WHERE `username`='".$user['username']."' AND `history`='0' "));
?>



        
                    <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-font-bold">LỊCH SỬ GIAO DỊCH</h3>
                        <div class="c-line-left"></div>
                    </div>
				<table class="table table-hover table-custom-res">
					<tbody>
					<tr>
						<th>ID</th>
						<th>Giao dịch</th>
						<th>Số tiền</th>
						<th>Mô tả</th>
						<th>Thời gian</th>

					</tr>



					</tbody>
					<tbody>
<?php 
	while($row = mysqli_fetch_array($result)) {
		?>
                                    <tr>
                                        <td>#<?php echo $row['id'];?></td>
                                        <td><?php echo $row['action'];?></td>
                                        <td><span class="c-font-bold text-danger"><?php echo $row['sotien'];?></span></td>
                                        <td><?php echo $row['mota'];?></td>
                                        <td><?php echo date('d/m H:i', $row['time']);?></td>
                                    </tr>


		<?php
	}
?>

                        </tbody>
                    </table>
                    <!-- END: PAGE CONTENT -->        

                  <div class="text-center">	<center>
<?php
if ($tong > $kmess){
echo '<center>' . $kun->phantrang('/lich-su-giaodich.html/', $start, $tong, $kmess) . '</center>';
}
?></div>



                    </div>
              </div>
          </div>