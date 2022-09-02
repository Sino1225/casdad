<?
 // Require Hàm hệ thống
require $_SERVER['DOCUMENT_ROOT'].'/Core.php';
$kun = new System;
$user = $kun->user(); 
?>


<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
    <h4 class="modal-title">Nạp tiền từ ATM hoặc Ví điện tử</h4>
</div>

<div class="modal-body">
    <div class="c-content-tab-4 c-opt-3" role="tabpanel">
        <div class="text-center" style="text-transform: uppercase;margin: 20px 0;"><a href='/huong-dan-mua-nick-bang-atm-tai-nickvn' style="color: #f31700 !important;font-size: 15px">Hướng dẫn chi tiết nạp tiền từ ATM - VÍ Tại đây</a></div>
        <ul class="nav nav-justified" role="tablist">
            <li role="presentation" class="active">
                <a href="#bank" role="tab" data-toggle="tab" class="c-font-16"  aria-expanded="true">ATM</a>
            </li>
            <li role="presentation" class="">
                <a href="#wallet" role="tab" data-toggle="tab" class="c-font-16" aria-expanded="false">Ví điện tử</a>
            </li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade active in" id="bank">
                <ul class="c-tab-items p-t-0 p-b-0 p-l-5 p-r-5">
                    <li class="c-font-dark">
                        <!-- <table class="table table-striped">
                            <tbody><tr>
                                <th colspan="3">Thông tin tài khoản ngân hàng</th>
                            </tr>
                            </tbody><tbody>
                            <tr>
                                <th colspan="2">Tên chủ khoản: Phùng Thị Mai Tuyến</th>
                                <th>Chi nhánh</th>
                            </tr>
                            <tr>
                                <td>Vietcombank</td>
                                <th>0951004196926</th>
                                <th>Lào Cai</th>
                            </tr>
                            <tr>
                                <td>Techcombank</td>
                                <th>19033189515010</th>
                                <th>Lào Cai</th>
                            </tr>
                            <tr>
                                <td>Viettinbank</td>
                                <th>107869023923</th>
                                <th>Lào Cai</th>
                            </tr>
                            <tr>
                                <td>BIDV</td>
                                <th>37510000380421</th>
                                <th>Lào Cai</th>
                            </tr>
                            <tr>
                                <td>Agribank</td>
                                <th>8810205105207</th>
                                <th>Lào Cai</th>
                            </tr>
                            <tr>
                                <td>MB Bank	</td>
                                <th>7370176662888</th>
                                <th>Lào Cai</th>
                            </tr>


                            </tbody>
                        </table> -->
                        <table cellpadding="10">
	<tbody>
		<tr>
			<th colspan="2"><strong>T&ecirc;n chủ khoản: &nbsp;Pham Thi He&nbsp;&nbsp;</strong></th>
			<th><strong></strong></th>
		</tr>
		<tr>
			<td><strong>Số Tài Khoản</strong></td>
			<th>2508205291021</th>
		
		</tr>
		<tr>
			<td><strong>Chi Nhánh</strong></td>
			<th>Bắc Giang</th>
		
		</tr>
			<tr>
			<td><strong>Tên Ngân Hàng&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
			<th>Agribank</th>
		
		</tr>
	
	</tbody>
</table>
                    </li>
                </ul>

                <div class="tut-charge" style="background-color: #ffffff;padding-top: 15px">
                   <b color="red">Nội Dung:</b> shophungff <?php echo $user['username'];?><br>
                    <strong>Lưu Ý:</strong><font color="red">Sau Khi Chuyển Tiền Thành Công Bạn Chụp Ảnh Giao Dịch Thành Công Liên Hệ Fanpage : Chăm Sóc Khách Hàng Hỗ Trợ Shop Nick ShopCuaBao Bên Góc Phải Màn Hình Hoặc Hotline Để Được Xử Lý.</font>
                    <br>
                    <font color="green">Nếu Chuyển Sai Nội Dung Hoặc Không Ghi Nội Dung Liên Hệ Đến Fanpage Hỗ Trợ Sẽ Được Hoàn Tiền Sau 1 - 7 Ngày</font>
                </div>


            </div>
            <div role="tabpanel" class="tab-pane fade" id="wallet">
                <ul class="c-tab-items p-t-0 p-b-0 p-l-5 p-r-5">
                    <li class="c-font-dark">
                        <!-- <table class="table table-striped">
                            <tbody><tr>
                                <th colspan="2">Thông tin tài khoản ví điện tử</th>
                            </tr>
                            </tbody><tbody>
                            <tr>
                                <td>Tcsr(thecaosieure.com):</td>
                                <th>nickvn</th>
                            </tr>
                            <tr>
                                <td>Tsr(thesieure.com:</td>
                                <th>nickvn</th>
                            </tr>
                            <tr>
                                <td>Tkcr(tkcr.vn):</td>
                                <th>nickvn</th>
                            </tr>
                            <tr>
                                <td>Azpro(azpro.vn):</td>
                                <th>nickvn</th>
                            </tr>
                            <tr>
                                <td>Momo :</td>
                                <th>0869693000</th>
                            </tr>

                            </tbody>
                        </table> -->
                        <table border="1" cellpadding="1" cellspacing="1" class="table table-bordered table-striped">
	<tbody>
		<tr>
			<td style="text-align:center"><strong><span style="color:#ffffff">V&iacute; điện tử</span></strong></td>
			<td style="text-align:center"><strong><span style="color:#ffffff">T&agrave;i khoản v&iacute;</span></strong></td>
		</tr>
		<tr>
			<td style="text-align:center"><strong><span style="color:#ffffff">Momo</span></strong></td>
			<td style="text-align:center"><strong><span style="color:#ffffff">0868015573</span></strong></td>
		</tr>
		<tr>
			<td style="text-align:center"><strong><span style="color:#ffffff">TheSieuRe</span></strong></td>
			<td style="text-align:center"><strong><span style="color:#ffffff">pawff10</span></strong></td>
		</tr>
	</tbody>
</table>
                    </li>
                </ul>
                   <div class="tut-charge" style="background-color: #ffffff;padding-top: 15px">
                    <p><em><strong>Nội Dung: shopcuabao <?php echo $user['username'];?></strong></em></p>


                </div>
                


            </div>
        </div>
    </div>

    
    
</div>
<div class="modal-footer">
    <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>

</div>
</form>

