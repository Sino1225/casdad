<?php
defined('KUNKEYPR') or exit('Restricted Access');
$kun->login_required();
$kmess = 8; // Số phim hiện trong mỗi page
$page = isset($_REQUEST['page']) && $_REQUEST['page'] > 0 ? intval($_REQUEST['page']) : 1;
$start = isset($_REQUEST['page']) ? $page * $kmess - $kmess : (isset($_GET['start']) ? abs(intval($_GET['start'])) : 0);

 $result = mysqli_query($kun->connect_db(), "SELECT * FROM `user_history_system` WHERE `action`='Mua Nick' AND `username`='".$user['username']."' ORDER BY time DESC LIMIT $start, $kmess");
 $tong = mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `user_history_system` WHERE `action`='Mua Nick' AND `username`='".$user['username']."'"));
?>




 <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-font-bold">Tài khoản đã mua</h3>
                        <div class="c-line-left"></div>
                    </div>


				<table class="table table-hover table-custom-res">
					<tbody>
					<tr>
						<th>ID</th>
						<th>Giao dịch</th>
						<th>Số tiền</th>
						<th>Thời gian</th>
						<th>Hành động</th>
					</tr>



					</tbody>
					<tbody>
<?php 

	while($row = mysqli_fetch_array($result)) {
		$id_acc = $row['action_name'];
		?>
                                    <tr>
                                        <td>#<?php echo $row['id'];?></td>
                                        <td><?php echo $row['mota'];?></td>
                                        <td><span class="c-font-bold text-danger"><?php echo $row['sotien'];?></span></td>
                                        <td><?php echo date('d/m H:i', $row['time']);?></td>
                          <?php
                           if($row['hisnick'] == 1){
                                        ?>
                                        <td class="action_area_2"><button onclick="check_thong_tin('<?php echo $id_acc;?>')" type="button" class="btn c-bg-dark c-font-white c-btn-square btn-xs  load-modal" rel="/tran/acc/check-login?id=<?php echo $id_acc;?>">Thông Tin</button></td>
                                    </tr>
                                    <?php
}
?>
                                    
  <?php
if($row['hisnick'] == 2){
?>
                                        <td class="action_area_2"><button onclick="check_thong_tin_lq('<?php echo $id_acc;?>')" type="button" class="btn c-bg-dark c-font-white c-btn-square btn-xs  load-modal" rel="/tran/acc/check-login?id=<?php echo $id_acc;?>">Thông Tin</button></td>
                                    </tr>
                                        
<?php
}
?>
		<?php
	}
?>

                        </tbody>
                    </table>
                    <!-- END: PAGE CONTENT -->        

                  <div class="text-center">	<center>
<?php
if ($tong > $kmess){
echo '<center>' . $kun->phantrang('/user/accfreefire/', $start, $tong, $kmess) . '</center>';
}
?></div>



                    </div>
              </div>
          </div>


<style type="text/css">
  .modal-dialog {
    top: 180;
}
</style>


<div class="modal fade" id="LoadModal" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            </div>
        </div>
    </div>

<script type="text/javascript">
  function check_thong_tin_lq(id) {
    var curModal = $('#LoadModal');
    curModal.find('.modal-content').html("<div class=\"loader\" style=\"text-align: center\"><img src=\"/assets/frontend/images/loader.gif\" style=\"width: 50px;height: 50px;\"></div>");


      $.ajax({
                method: "POST",
                url: "/model/lienquan/lienquandamua.php",
                data: {
                    id: id
                },
                success : function(response){
          curModal.modal('show').find('.modal-content').html(response);
                }
            });

  }
</script>

<script type="text/javascript">
  function check_thong_tin(id) {
    var curModal = $('#LoadModal');
    curModal.find('.modal-content').html("<div class=\"loader\" style=\"text-align: center\"><img src=\"/assets/frontend/images/loader.gif\" style=\"width: 50px;height: 50px;\"></div>");


      $.ajax({
                method: "POST",
                url: "/model/freefire/nickffdamua.php",
                data: {
                    id: id
                },
                success : function(response){
          curModal.modal('show').find('.modal-content').html(response);
                }
            });

  }
</script>
