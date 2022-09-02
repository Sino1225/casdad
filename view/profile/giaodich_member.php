<?php
defined('KUNKEYPR') or exit('Restricted Access');
$kun->login_required();
$kmess = 8; // Số phim hiện trong mỗi page
$page = isset($_REQUEST['page']) && $_REQUEST['page'] > 0 ? intval($_REQUEST['page']) : 1;
$start = isset($_REQUEST['page']) ? $page * $kmess - $kmess : (isset($_GET['start']) ? abs(intval($_GET['start'])) : 0);

 $result = mysqli_query($kun->connect_db(), "SELECT * FROM `user_history_system` WHERE `username`='".$user['username']."' ORDER BY time DESC LIMIT $start, $kmess");
 $tong = mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `user_history_system` WHERE `username`='".$user['username']."'"));
?>


<div class="c-layout-sidebar-content ">
				<!-- BEGIN: PAGE CONTENT -->
				<!-- BEGIN: CONTENT/SHOPS/SHOP-CUSTOMER-DASHBOARD-1 -->
				<div class="c-content-title-1">
					<h3 class="c-font-uppercase c-font-bold">Lịch sử giao dịch</h3>
					<div class="c-line-left"></div>
				</div>
<!---<form class="form-horizontal form-find m-b-20" role="form" method="get">

					<div class="row">

						<div class="col-md-4">
							<div class="input-group m-b-10 c-square">
								<span class="input-group-addon" id="basic-addon1">Giao dịch</span>

								<select id="group_id" name="trade_type" class="form-control c-square c-theme">
									<option value="">-- Tất cả --</option>
																			<option value="1"  >Nạp thẻ tự động</option>
																			<option value="2"  >Nạp thẻ chậm</option>
																			<option value="3"  >Chuyển tiền</option>
																			<option value="4"  >Nhận tiền</option>
																			<option value="5"  >Rút tiền</option>
																			<option value="6"  >Cộng tiền</option>
																			<option value="7"  >Trừ tiền</option>
																			<option value="8"  >Tiền thưởng</option>
																			<option value="9"  >Thanh toán bán nick</option>
																			<option value="10"  >Đặt cọc (Trả góp)</option>
																			<option value="11"  >Hoàn tiền</option>
																			<option value="12"  >Thanh toán dịch vụ</option>
																			<option value="13"  >Hoàn tất dịch vụ</option>
																			<option value="14"  >Thanh toán mua thẻ</option>
																			<option value="15"  >Thanh toán mua phụ kiện</option>
																			<option value="101"  >Tăng số dư</option>
																			<option value="102"  >Giảm số dư</option>
																			<option value="103"  >Chuyển nhận tiền</option>
																			<option value="104"  >Cộng trừ tiền</option>
																			<option value="105"  >Mua tài khoản game</option>
																			<option value="106"  >Mua kim cương</option>
																			<option value="107"  >Vòng quay may mắn</option>
																			<option value="108"  >Vòng quay vật phẩm</option>
																			<option value="109"  >Lật hình vật phẩm</option>
																			<option value="110"  >Lật hình trúng nick</option>
																			<option value="111"  >Quay hình trúng vp</option>
																			<option value="112"  >Quay hình trúng nick</option>
																			<option value="113"  >Quay hình trúng tiền</option>
																												<option value="113"  >Quay hình trúng tiền</option>
																			<option value="114"  >Vòng quay trúng tiền</option>
																			<option value="115"  >Lật hình trúng tiền</option>
																			<option value="116"  >Quay xèng trúng vp</option>
																			<option value="117"  >Quay xèng trúng nick</option>
																			<option value="118"  >Quay xèng trúng tiền</option>
																			<option value="119"  >Vòng quay trúng nick</option>
																	</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="input-group m-b-10 c-square">
								<div class="input-group date date-picker" data-date-format="dd/mm/yyyy"
									 data-rtl="false">
                                    <span class="input-group-btn">
                                    <button class="btn default c-btn-square p-l-10 p-r-10" type="button"><i
												class="fa fa-calendar"></i></button>
                                    </span>
									<input type="text" class="form-control c-square c-theme" name="started_at"
										   autocomplete="off"  placeholder="Từ ngày" value="">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="input-group m-b-10 c-square">
								<div class="input-group date date-picker" data-date-format="dd/mm/yyyy"
									 data-rtl="false">
                                    <span class="input-group-btn">
                                    <button class="btn default c-btn-square p-l-10 p-r-10" type="button"><i
												class="fa fa-calendar"></i></button>
                                    </span>
									<input type="text" class="form-control c-square c-theme" name="ended_at"
										   autocomplete="off"  placeholder="Đến ngày" value="">
								</div>
							</div>

						</div>
					</div>

					<div class="row">
						<div class="col-md-4">
							<input type="submit" class="btn c-theme-btn c-btn-square m-b-10" value="Tìm kiếm">
							<a class="btn c-btn-square m-b-10 btn-danger" href="http://shoptoantay.com/user/tran-log">Tất cả</a>
						</div>
					</div>


				</form>--->
				<table class="table table-hover table-custom-res">
					<tbody>
					<tr>
						<th>Thời gian</th>
						<th>ID</th>
						<th>Tài khoản</th>
						<th>Giao dịch</th>
						<th>Số tiền</th>
						<th>Nội dung</th>
					</tr>



					</tbody>
					<tbody>
					    <?php 
	while($row = mysqli_fetch_array($result)) {
		?>
                                    <tr>
                                        <td><?php echo date('d/m H:i', $row['time']);?></td>
                                        <td>#<?php echo $row['id'];?></td>
                                        <td><?php echo $row['username'];?></td>
                                        <td><?php echo $row['action'];?></td>
                                        <td><span class="c-font-bold text-danger"><?php echo $row['sotien'];?></span></td>
                                        <td><?php echo $row['mota'];?></td>
                                    </tr>


		<?php
	}
?>
															</tbody>
				</table>
				<!-- END: PAGE CONTENT -->
				<div class="data_paginate paging_bootstrap paginations_custom" style="text-align: center">
<?php
if ($tong > $kmess){
echo '<center>' . $kun->phantrang('/user/tran-log/', $start, $tong, $kmess) . '</center>';
}
?>
				</div>
			</div>
		</div>
		<!-- END: PAGE CONTENT -->


<!-- END: PAGE CONTENT -->
</div>
