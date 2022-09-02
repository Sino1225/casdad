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
                <!-- BEGIN: CONTENT/SHOPS/SHOP-ORDER-HISTORY-2 -->
                <div class="c-content-title-1">
                    <h3 class="c-font-uppercase c-font-bold">Thẻ cào đã nạp</h3>
                    <div class="c-line-left"></div>
                </div>
            <!---    <form class="form-horizontal form-find m-b-20" role="form" method="get">

                    <div class="row">

                        <div class="col-md-4">
                            <div class="input-group m-b-10 c-square ">
                                <span class="input-group-addon" id="basic-addon1">Thẻ cào</span>
                                <input type="text" class="form-control c-square c-theme" name="find"
                                       value=""
                                       autofocus placeholder="Mã thẻ,Serial...">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group m-b-10 c-square">
                                <span class="input-group-addon" id="basic-addon1">Loại thẻ</span>
                                <select name="key" class="form-control c-square c-theme">.
                                    <option value=""> Tất cả loại thẻ</option>
                                                                                                                        <option value="GARENA" >
                                                GARENA
                                            </option>
                                                                                    <option value="GATE" >
                                                GATE
                                            </option>
                                                                                    <option value="MOBIFONE" >
                                                MOBIFONE
                                            </option>
                                                                                    <option value="SCOIN" >
                                                SCOIN
                                            </option>
                                                                                    <option value="VCOIN" >
                                                VCOIN
                                            </option>
                                                                                    <option value="VIETNAMMOBILE" >
                                                VIETNAMMOBILE
                                            </option>
                                                                                    <option value="VIETTEL" >
                                                VIETTEL
                                            </option>
                                                                                    <option value="VINAPHONE" >
                                                VINAPHONE
                                            </option>
                                                                                    <option value="ZING" >
                                                ZING
                                            </option>
                                                                            
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group m-b-10 c-square">
                                <span class="input-group-addon" id="basic-addon1">Kiểu nạp </span>
                                <select name="type_charge" id="type_charge" class="form-control c-square c-theme"
                                        onchange="get_list_status();" onblur="get_list_status();">

                                    <option value="0" selected>
                                        Nạp tự động
                                    </option>
                                    <option value="1" >
                                        Nạp chậm
                                    </option>
                                </select>
                            </div>
                        </div>


                    </div>

                    <div class="row">


                        <div class="col-md-4">
                            <div class="input-group m-b-10 c-square">
                                <span class="input-group-addon" id="basic-addon1">Trạng thái</span>
                                <select name="status" id="status" class="form-control c-square c-theme">.

                                </select>

                                <select class="form-control  c-square c-theme" id="vsvsd" style="display: none">
                                    <option class="stt_all" value=""> Tất cả</option>
                                    
                                        <option class="stt_1"
                                                value="1" >
                                            Chờ xử lý
                                        </option>
                                    
                                        <option class="stt_1"
                                                value="2" >
                                            Thẻ sai
                                        </option>
                                    
                                        <option class="stt_1"
                                                value="3" >
                                            Thẻ đúng
                                        </option>
                                    
                                        <option class="stt_1"
                                                value="4" >
                                            Thẻ trễ
                                        </option>
                                    
                                        <option class="stt_1"
                                                value="5" >
                                            Thẻ sai mệnh giá
                                        </option>
                                    
                                        <option class="stt_1"
                                                value="10000" >
                                            10,000đ
                                        </option>
                                    
                                        <option class="stt_1"
                                                value="20000" >
                                            20,000đ
                                        </option>
                                    
                                        <option class="stt_1"
                                                value="30000" >
                                            30,000đ
                                        </option>
                                    
                                        <option class="stt_1"
                                                value="50000" >
                                            50,000đ
                                        </option>
                                    
                                        <option class="stt_1"
                                                value="100000" >
                                            100,000đ
                                        </option>
                                    
                                        <option class="stt_1"
                                                value="200000" >
                                            200,000đ
                                        </option>
                                    
                                        <option class="stt_1"
                                                value="300000" >
                                            300,000đ
                                        </option>
                                    
                                        <option class="stt_1"
                                                value="500000" >
                                            500,000đ
                                        </option>
                                    
                                        <option class="stt_1"
                                                value="1000000" >
                                            1,000,000đ
                                        </option>
                                    
                                        <option class="stt_1"
                                                value="5000000" >
                                            5,000,000đ
                                        </option>
                                                                        
                                        <option class="stt_0"
                                                value="1" >
                                            Thẻ đúng
                                        </option>
                                    
                                        <option class="stt_0"
                                                value="0" >
                                            Thẻ sai
                                        </option>
                                    
                                        <option class="stt_0"
                                                value="2" >
                                            Chờ xử lý
                                        </option>
                                    
                                        <option class="stt_0"
                                                value="3" >
                                            Sai mệnh giá
                                        </option>
                                    
                                        <option class="stt_0"
                                                value="999" >
                                            Lỗi nạp thẻ
                                        </option>
                                    
                                        <option class="stt_0"
                                                value="-999" >
                                            Lỗi nạp thẻ
                                        </option>
                                    
                                        <option class="stt_0"
                                                value="-1" >
                                            Phát sinh lỗi nạp thẻ
                                        </option>
                                    

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
                                           autocomplete="off" autofocus placeholder="Từ ngày"
                                           value="">
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
                                           autocomplete="off" placeholder="Đến ngày" value="">
                                </div>
                            </div>

                        </div>


                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <button type="submit" class="btn c-theme-btn c-btn-square m-b-10" style="margin-left: 0px"><i class="glyphicon glyphicon-search"></i> Tìm kiếm</button>
                        </div>
                    </div>



                </form>---->

<!---<div class="row">
                    <div class="col-md-12">
                        <a class="btn c-theme-btn c-btn-square m-b-10" style="margin-left: 0px" href="http://shoptoantay.com/deposit-history?started_at=29/01/2021&amp;ended_at=29/01/2021"><i class="glyphicon glyphicon-calendar"></i> Hôm nay</a>
                        <a class="btn c-theme-btn c-btn-square m-b-10" style="margin-left: 0px" href="http://shoptoantay.com/deposit-history?started_at=28/01/2021&amp;ended_at=28/01/2021"><i class="glyphicon glyphicon-calendar"></i> Hôm qua</a>
                        <a class="btn c-theme-btn c-btn-square m-b-10" style="margin-left: 0px" href="http://shoptoantay.com/deposit-history?started_at=01/01/2021&amp;ended_at=31/01/2021"><i class="glyphicon glyphicon-calendar"></i> Tháng này</a>
                        <a class="btn c-btn-square m-b-10 btn-danger" style="margin-left: 0px" href="http://shoptoantay.com/deposit-history"><i class="glyphicon glyphicon-calendar"></i> Tất cả</a>
                    </div>
                </div>--->

                <table class="table table-hover table-custom-res">
                    <thead>
                    <tr role="row">
                        <th>Thời gian</th>
                        <th>Nhà mạng</th>
                        <th>Mã thẻ/Serial</th>
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
                                        <td class="text-center"><?php echo $xss->xss_clean($row['pin']);?>/<?php echo $xss->xss_clean($row['serial']);?></td>
                                        <td><?php echo number_format($xss->xss_clean($row['amount']));?>đ</td>
                                        <td><?php echo $xss->xss_clean($status);?></td>
                                    </tr>

		<?php
	}
?>
	      
	
                  <!---  <tr class="" style="background-color: #abe7ed;">
                        <td colspan="2" class="row-date"><b>Tổng cộng các trang:</b></td>
                        <td class="row-date-sub">
                        </td>
                        <td><b> 0 thẻ </b></td>
                        <td class="row-date-sub">
                            <b> 0 </b></td>
                        <td class="row-date-sub">
                            <b> 0 </b></td>
<td class="row-date-sub">
                            <b> 0 </b>
                        </td>

                    </tr>--->

                                        

                    </tbody>
                </table>
                <!-- END: PAGE CONTENT -->

                <div class="data_paginate paging_bootstrap paginations_custom" style="text-align: center">
                    <?php
							if ($tong > $kmess){
							echo '<center>' . $kun->phantrang('/deposit-history/', $start, $tong, $kmess) . '</center>';
							}
							?>
                </div>

            </div>
        </div>
    </div>
