 <?php
defined('KUNKEYPR') or exit('Restricted Access');
$kun->login_required();
require $_SERVER['DOCUMENT_ROOT'].'/lib/xss_anti/xss_anti.php';
$xss = new Xss_Anti; 

$kmess = 8; // Số phim hiện trong mỗi page
$page = isset($_REQUEST['page']) && $_REQUEST['page'] > 0 ? intval($_REQUEST['page']) : 1;
$start = isset($_REQUEST['page']) ? $page * $kmess - $kmess : (isset($_GET['start']) ? abs(intval($_GET['start'])) : 0);

 $result = mysqli_query($kun->connect_db(), "SELECT * FROM `napthe` WHERE `username`='".$user['username']."' ORDER BY time DESC LIMIT $start, $kmess");
 $tong = mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `napthe` WHERE `username`='".$user['username']."'"));
?>
 <div class="c-layout-sidebar-content ">
                    <!-- BEGIN: PAGE CONTENT -->
                    <!-- BEGIN: CONTENT/SHOPS/SHOP-CUSTOMER-DASHBOARD-1 -->
                    <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-font-bold">Nạp thẻ</h3>
                        <div class="c-line-left"></div>
                    </div>

					<p style="text-align: center;color: #fff">ID của bạn: <strong><?php echo $user['id'];?></strong></p>
                    <p style="text-align: center;color: red">*Chú ý: Nạp thẻ sai mệnh giá mất 100% giá trị thẻ</p>

                    <form accept-charset="UTF-8" class="form-horizontal form-charge">

   <o id="result"></o>
                    
                    

                    <div class="form-group">
                        <label class="col-md-3 control-label">Email:</label>
                        <div class="col-md-6">
                            <input class="form-control  c-square c-theme" type="text"
                                   value="<?php echo $user['email']; ?>" readonly>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-3 control-label">Loại thẻ:</label>
                        <div class="col-md-6">
                            <select class="form-control  c-square c-theme" name="type" id="type">
                                                                                                            <option value="VIETTEL">VIETTEL</option>

                                                                            <option value="MOBIFONE">MOBIFONE</option>

                                                                            <option value="VINAPHONE">VINAPHONE</option>

                                                                            <option value="VIETNAMMOBILE">VIETNAMMOBILE</option>

                                                                            <option value="ZING">ZING</option>

                                                                                                </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Mệnh giá:</label>
                        <div class="col-md-6">
                            <select class="form-control  c-square c-theme" name="amount" id="amount">
                    <option value="10000">10,000</option>
                    <option value="20000">20,000</option>
                    <option value="50000">50,000</option>
                    <option value="100000">100,000</option>
                    <option value="200000">200,000</option>
                    <option value="500000">500,000</option>
                    <option value="1000000">1,000,000</option>

							</select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Mã số thẻ:</label>
                        <div class="col-md-6">
                            <input class="form-control  c-square c-theme " name="pin" type="text" maxlength="16"
                                   required placeholder=""
                                   required="" autofocus="">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-3 control-label">Số serial:</label>
                        <div class="col-md-6">
                            <input class="form-control c-square c-theme " name="serial" type="text" maxlength="16"
                                   required placeholder=""
                                   required="">
                        </div>
                    </div>



                    <div class="form-group c-margin-t-40">
                        <div class="col-md-offset-3 col-md-6">
                            <button type="submit" name="submit" class="btn btn-submit c-theme-btn c-btn-square c-btn-uppercase c-btn-bold btn-block" data-loading-text="<i class='fa fa-spinner fa-spin '></i>">Nạp
                                thẻ
                            </button>
                        </div>
                    </div>
                    </form>
                    <div class="alert alert-info">
                        
                    </div>
                    <!-- END: PAGE CONTENT -->


                    <table id="hand_card_recent" class="table table-striped">
                        <thead>
                        <tr>
                            <th>Thời gian</th>
                            <th>Nhà mạng</th>
                            <th>Mã thẻ</th>
                            <th>Serial</th>
                            <th>Mệnh giá</th>
                            <th>Kết quả</th>
                        </tr>
                        </thead>
                        <tbody>
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
                                        <td><?php echo $xss->xss_clean($row['type']);?></td>
                                        <td class="text-center"><?php echo $xss->xss_clean($row['pin']);?></td>
                                        <td class="text-center"><?php echo $xss->xss_clean($row['serial']);?></td>
                                        <td><?php echo number_format($xss->xss_clean($row['amount']));?>đ</td>
                                        <td><?php echo $xss->xss_clean($status);?></td>
                                    </tr>


		<?php
	}
?>
	      	
                                                </tbody>
                    </table>
                </div>
            </div>
        </div>
    <!-- END: PAGE CONTENT -->

  <div class="text-center">	<center>
							<?php
							if ($tong > $kmess){
							echo '<center>' . $kun->phantrang('/nap-the/', $start, $tong, $kmess) . '</center>';
							}
							?>
					  </div>



<script type="text/javascript">
        $("form").submit(function(e) {
    e.preventDefault();
    var form = this;
    var cont = $('#result');

    var type = $('select[name=type]').val();
    var amount = $('select[name=amount]').val();
    var serial = $('input[name=serial]').val();
    var pin = $('input[name=pin]').val();

    if(!type) {
        cont.html('<div class="alert alert-danger"> Lỗi hệ thống!</div>');
    }else if(!amount) {
        cont.html('<div class="alert alert-danger"> Lỗi hệ thống!</div>');
    }else if(!serial) {
        cont.html('<div class="alert alert-danger"> Bạn chưa nhập mã Seri!</div>');
    }else if(!pin) {
        cont.html('<div class="alert alert-danger"> Bạn chưa nhập mã Pin!</div>');
    }else {
        cont.html('');
        $('button[name=submit]').attr("disabled", true);
        //$('button[name=submit]').removeAttr("disabled");
        $('button[name=submit]').html('<i class="fa fa-spinner fa-spin"></i> Đang xử lý');
                $.ajax({ 
                        type: 'post', 
                        dataType: "JSON",
                        url: '/check/napthe', 
                        data: {
                            type: type,
                            amount: amount,
                            serial: serial,
                            pin: pin,
                            token: '<?php echo $user['token'];?>'
                        }, 
                        success: function (json) {
                            if(json.status == false) {
                                swal("Lỗi!", json.msg, "error");
                                cont.html('<div class="alert alert-danger">Lỗi: '+json.msg+'</div>');
                            }else if(json.status == true) {
                                swal("Thành Công!", json.msg, "success");
                                cont.html('<div class="alert alert-success">Thành Công: '+json.msg+'</div>');
                            }else {
                                swal("Lỗi!", "Lỗi hệ thống!", "error");
                            }
                                $('button[name=submit]').html('NẠP THẺ');
                                $('button[name=submit]').removeAttr("disabled");
                    }
                });

    }

});
</script>

<!-- END: PAGE CONTENT -->
</div>