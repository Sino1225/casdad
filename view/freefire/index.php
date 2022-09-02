<?php
defined('KUNKEYPR') or exit('Restricted Access');
$kmess = 16; // Số phim hiện trong mỗi page
$page = isset($_REQUEST['page']) && $_REQUEST['page'] > 0 ? intval($_REQUEST['page']) : 1;
$start = isset($_REQUEST['page']) ? $page * $kmess - $kmess : (isset($_GET['start']) ? abs(intval($_GET['start'])) : 0);

$condition = "";
if(isset($_POST['loc'])) {



	if($_POST['maso']) {
		$condition .= " AND `id`='".$_POST['maso']."'";
	}

	if($_POST['price']) {

		switch ($_POST['price']) {
			case 'duoi-50k':
				$condition .= " AND `giatien`<= 50000";
				break;
			case 'tu-50k-200k':
				$condition .= " AND `giatien` >= 50000 AND `giatien` <= 200000 ";
				break;
			case 'tu-500k-1-trieu':
				$condition .= " AND `giatien` >= 500000 AND `giatien` <= 1000000";
				break;
			case 'tren-1-trieu':
				$condition .= " AND `giatien` >= 1000000";
				break;
			case 'tren-5-trieu':
				$condition .= " AND `giatien` >= 5000000";
				break;
			case 'tren-10-trieu':
				$condition .= " AND `giatien`>= 1000000";
				break;
		}

	}

	if($_POST['rank']) {
		$condition .= " AND `rank`='".$_POST['rank']."'";
	}

	if($_POST['nhanvat']) {
		$condition .= " AND `nhanvat`='".$_POST['nhanvat']."'";
	}

	if($_POST['pet']) {
		$condition .= " AND `pet`='".$_POST['pet']."'";
	}

}


$sql = "SELECT * FROM `nickff` WHERE `status`='1' AND `nguoimua`='null' ".$condition." ORDER BY time DESC LIMIT $start, $kmess";

 $result = mysqli_query($kun->connect_db(), $sql);
 $tong = mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `nickff` WHERE `status`='1' AND `nguoimua`='null' ".$condition));

?>




<style>
    .mt-stand {
        transform: rotate(90deg);
        -webkit-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
    }

    .mt-element-ribbon {
        position: relative;
        margin-bottom: 30px;
    }

        .mt-element-ribbon .ribbon-content {
            margin: 0;
            padding: 25px;
            clear: both;
        }

            .mt-element-ribbon .ribbon-content.no-padding {
                padding-top: 0;
            }

        .mt-element-ribbon .ribbon {
            padding: 6px 15px;
            z-index: 5;
            float: left;
            margin: 10px 0 0 -2px;
            clear: left;
            position: relative;
            background-color: #bac3d0;
            color: #384353;
            opacity: 0.9;
        }

            .mt-element-ribbon .ribbon.ribbon-right {
                float: right;
                clear: right;
                margin: 10px -2px 0 0;
            }

            .mt-element-ribbon .ribbon.ribbon-vertical-left {
                clear: none;
                margin: -2px 0 0 10px;
                padding: 14px;
                width: 41px;
                text-align: center;
            }

            .mt-element-ribbon .ribbon.ribbon-vertical-right {
                clear: none;
                float: right;
                margin: -2px 10px 0 0;
                padding: 14px;
                width: 41px;
                text-align: center;
            }

            .mt-element-ribbon .ribbon.ribbon-shadow {
                box-shadow: 2px 2px 7px rgba(0, 0, 0, 0.4);
            }

                .mt-element-ribbon .ribbon.ribbon-shadow.ribbon-right, .mt-element-ribbon .ribbon.ribbon-shadow.ribbon-vertical-right {
                    box-shadow: -2px 2px 7px rgba(0, 0, 0, 0.4);
                }

            .mt-element-ribbon .ribbon.ribbon-round {
                border-top-right-radius: 5px !important;
                border-bottom-right-radius: 5px !important;
            }

                .mt-element-ribbon .ribbon.ribbon-round.ribbon-right {
                    border-top-right-radius: 0px !important;
                    border-bottom-right-radius: 0px !important;
                    border-top-left-radius: 5px !important;
                    border-bottom-left-radius: 5px !important;
                }

                .mt-element-ribbon .ribbon.ribbon-round.ribbon-vertical-right, .mt-element-ribbon .ribbon.ribbon-round.ribbon-vertical-left {
                    border-top-right-radius: 0px !important;
                    border-bottom-right-radius: 5px !important;
                    border-top-left-radius: 0px !important;
                    border-bottom-left-radius: 5px !important;
                }

            .mt-element-ribbon .ribbon.ribbon-border:after {
                border: 1px solid;
                content: '';
                position: absolute;
                top: 5px;
                bottom: 5px;
                left: 5px;
                right: 5px;
            }

            .mt-element-ribbon .ribbon.ribbon-border-vert:after {
                border-top: none;
                border-bottom: none;
                border-left: 1px solid;
                border-right: 1px solid;
                content: '';
                position: absolute;
                top: 0;
                bottom: 0;
                left: 5px;
                right: 5px;
            }

            .mt-element-ribbon .ribbon.ribbon-border-hor:after {
                border-top: 1px solid;
                border-bottom: 1px solid;
                border-left: none;
                border-right: none;
                content: '';
                position: absolute;
                top: 5px;
                bottom: 5px;
                left: 0;
                right: 0;
            }

            .mt-element-ribbon .ribbon.ribbon-border-dash:after {
                border: 1px solid;
                border-style: dashed;
                content: '';
                position: absolute;
                top: 5px;
                bottom: 5px;
                left: 5px;
                right: 5px;
            }

            .mt-element-ribbon .ribbon.ribbon-border-dash-vert:after {
                border-top: none;
                border-bottom: none;
                border-left: 1px solid;
                border-right: 1px solid;
                border-left-style: dashed;
                border-right-style: dashed;
                content: '';
                position: absolute;
                top: 0;
                bottom: 0;
                left: 5px;
                right: 5px;
            }

            .mt-element-ribbon .ribbon.ribbon-border-dash-hor:after {
                border-top: 1px solid;
                border-bottom: 1px solid;
                border-left: none;
                border-right: none;
                border-top-style: dashed;
                border-bottom-style: dashed;
                content: '';
                position: absolute;
                top: 5px;
                bottom: 5px;
                left: 0;
                right: 0;
            }

            .mt-element-ribbon .ribbon.ribbon-clip {
                left: -10px;
                margin-left: 0;
            }

                .mt-element-ribbon .ribbon.ribbon-clip.ribbon-right {
                    left: auto;
                    right: -10px;
                    margin-right: 0;
                }

            .mt-element-ribbon .ribbon > .ribbon-sub {
                z-index: -1;
                position: absolute;
                padding: 0;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
            }

                .mt-element-ribbon .ribbon > .ribbon-sub.ribbon-clip:before, .mt-element-ribbon .ribbon > .ribbon-sub.ribbon-clip:after {
                    content: '';
                    position: absolute;
                    border-style: solid;
                    border-color: transparent !important;
                    bottom: -10px;
                }

                .mt-element-ribbon .ribbon > .ribbon-sub.ribbon-clip:before {
                    border-width: 0 10px 10px 0;
                    border-right-color: #222 !important;
                    left: 0;
                }

                .mt-element-ribbon .ribbon > .ribbon-sub.ribbon-clip.ribbon-right:before, .mt-element-ribbon .ribbon > .ribbon-sub.ribbon-clip.ribbon-right:after {
                    content: '';
                    position: absolute;
                    border-style: solid;
                    border-color: transparent;
                    bottom: -10px;
                }

                .mt-element-ribbon .ribbon > .ribbon-sub.ribbon-clip.ribbon-right:before {
                    border-right-color: transparent !important;
                }

                .mt-element-ribbon .ribbon > .ribbon-sub.ribbon-clip.ribbon-right:after {
                    border-width: 0 0 10px 10px;
                    border-left-color: #222 !important;
                    right: 0;
                }

                .mt-element-ribbon .ribbon > .ribbon-sub.ribbon-bookmark:after {
                    border-left: 21px solid;
                    border-right: 20px solid;
                    border-bottom: 1em solid transparent !important;
                    bottom: -1em;
                    content: '';
                    height: 0;
                    left: 0;
                    position: absolute;
                    width: 0;
                }

            .mt-element-ribbon .ribbon:after {
                border-color: #62748f;
            }

            .mt-element-ribbon .ribbon > .ribbon-sub {
                background-color: #bac3d0;
                color: #384353;
            }

                .mt-element-ribbon .ribbon > .ribbon-sub:after {
                    border-color: #62748f;
                    border-left-color: #bac3d0;
                    border-right-color: #bac3d0;
                }

            .mt-element-ribbon .ribbon.ribbon-color-default {
                background-color: #bac3d0;
                color: #384353;
            }

                .mt-element-ribbon .ribbon.ribbon-color-default:after {
                    border-color: #9ca8bb;
                }

                .mt-element-ribbon .ribbon.ribbon-color-default > .ribbon-sub {
                    background-color: #bac3d0;
                    color: #384353;
                }

                    .mt-element-ribbon .ribbon.ribbon-color-default > .ribbon-sub:after {
                        border-color: #62748f;
                        border-left-color: #bac3d0;
                        border-right-color: #bac3d0;
                    }

            .mt-element-ribbon .ribbon.ribbon-color-primary {
                background-color: #337ab7;
                color: #fff;
            }

                .mt-element-ribbon .ribbon.ribbon-color-primary:after {
                    border-color: #286090;
                }

                .mt-element-ribbon .ribbon.ribbon-color-primary > .ribbon-sub {
                    background-color: #337ab7;
                    color: black;
                }

                    .mt-element-ribbon .ribbon.ribbon-color-primary > .ribbon-sub:after {
                        border-color: #122b40;
                        border-left-color: #337ab7;
                        border-right-color: #337ab7;
                    }

            .mt-element-ribbon .ribbon.ribbon-color-info {
                background-color: #659be0;
                color: #fff;
            }

                .mt-element-ribbon .ribbon.ribbon-color-info:after {
                    border-color: #3a80d7;
                }

                .mt-element-ribbon .ribbon.ribbon-color-info > .ribbon-sub {
                    background-color: #659be0;
                    color: #0c203a;
                }

                    .mt-element-ribbon .ribbon.ribbon-color-info > .ribbon-sub:after {
                        border-color: #1d4f8e;
                        border-left-color: #659be0;
                        border-right-color: #659be0;
                    }

            .mt-element-ribbon .ribbon.ribbon-color-success {
                background-color: #36c6d3;
                color: #fff;
            }

                .mt-element-ribbon .ribbon.ribbon-color-success:after {
                    border-color: #27a4b0;
                }

                .mt-element-ribbon .ribbon.ribbon-color-success > .ribbon-sub {
                    background-color: #36c6d3;
                    color: #020808;
                }

                    .mt-element-ribbon .ribbon.ribbon-color-success > .ribbon-sub:after {
                        border-color: #14565c;
                        border-left-color: #36c6d3;
                        border-right-color: #36c6d3;
                    }

            .mt-element-ribbon .ribbon.ribbon-color-danger {
                background-color: #ed6b75;
                color: #fff;
            }

                .mt-element-ribbon .ribbon.ribbon-color-danger:after {
                    border-color: #e73d4a;
                }

                .mt-element-ribbon .ribbon.ribbon-color-danger > .ribbon-sub {
                    background-color: #ed6b75;
                    color: #4f0a0f;
                }

                    .mt-element-ribbon .ribbon.ribbon-color-danger > .ribbon-sub:after {
                        border-color: #a91520;
                        border-left-color: #ed6b75;
                        border-right-color: #ed6b75;
                    }

            .mt-element-ribbon .ribbon.ribbon-color-warning {
                background-color: #F1C40F;
                color: #010100;
            }

                .mt-element-ribbon .ribbon.ribbon-color-warning:after {
                    border-color: #c29d0b;
                }

                .mt-element-ribbon .ribbon.ribbon-color-warning > .ribbon-sub {
                    background-color: #F1C40F;
                    color: #010100;
                }

                    .mt-element-ribbon .ribbon.ribbon-color-warning > .ribbon-sub:after {
                        border-color: #614f06;
                        border-left-color: #F1C40F;
                        border-right-color: #F1C40F;
                    }

    .img-rank {
        width: 80px;
        height: 80px;
        z-index: 5;
        top: 240px;
        right: 25px;
        position: absolute;
    }

    .img-rank2 {
        width: 128px;
        height: 128px;
        z-index: 5;
        top: 180px;
        right: -15px;
        position: absolute;
        -ms-transform: rotate(15deg);
        -webkit-transform: rotate(15deg);
        transform: rotate(15deg);
    }

    .img-khung {
        width: 72px;
        height: 72px;
        z-index: 4;
        top: 200px;
        right: 45px;
        position: absolute;
        -ms-transform: rotate(-10deg);
        -webkit-transform: rotate(-10deg);
        transform: rotate(-10deg);
    }

    .img-item {
        width: 50px;
        height: 50px;
        z-index: 4;
        top: 225px;
        right: 85px;
        position: absolute;
        -ms-transform: rotate(-25deg);
        -webkit-transform: rotate(-25deg);
        transform: rotate(-25deg);
    }
</style>

	<div class="container" >

<div class="row" style="margin-bottom: 15px">
<div class="m-l-10 m-r-10">
<form class="form-inline m-b-10" role="form" method="post" action="">

<div class="col-md-3 col-sm-4 p-5 field-search">
<div class="input-group c-square">
<span class="input-group-addon">Mã số</span>
<input type="text" class="form-control c-square" placeholder="Mã số" name="maso" style="height: 43px;">
</div>
</div>

<div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
<div class="input-group c-square">
<span class="input-group-addon">Giá tiền</span>
<select style="" class="form-control c-square" name="price">
<option value="">Không Chọn</option>
<option value="duoi-50k">Dưới 50K</option>
<option value="tu-50k-200k">Từ 50K - 200K</option>
<option value="tu-200k-500k">Từ 200K - 500K</option>
<option value="tu-500k-1-trieu">Từ 500K - 1 Triệu</option>
<option value="tren-1-trieu">Trên 1 Triệu</option>
<option value="tren-5-trieu">Trên 5 Triệu</option>
<option value="tren-10-trieu">Trên 10 Triệu</option>
</select>
</div>
</div>


<div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
<div class="input-group c-square">
<span class="input-group-addon">Rank</span>
<select name="rank" class="form-control c-square">
	   									<option value="">Không Chọn</option>
   										<option value="1">Rank Đồng</option>
                                        <option value="2">Rank Bạc</option>
                                        <option value="3">Rank Vàng</option>
                                        <option value="4">Rank Bạch Kim</option>
                                        <option value="5">Rank Kim Cương</option>
                                        <option value="6">Rank Huyền Thoại</option>
                                        <option value="7">Rank Thách Đấu</option>
</select>
</div>
</div>



<div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
<div class="input-group c-square">
<span class="input-group-addon">Nhân Vật</span>
<select name="nhanvat" class="form-control c-square" title="-- Không chọn --">
	   									<option value="">Không Chọn</option>
                                        <option value="1">Nam</option>
                                        <option value="2">Nữ</option>
</select>
</div>
</div>


<div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
<div class="input-group c-square">
<span class="input-group-addon">Pet</span>
<select name="pet" class="form-control c-square" title="-- Không chọn --">
	   									<option value="">Không Chọn</option>
   										<option value="0">Không</option>
                                        <option value="1">Có</option>
</select>
</div>
</div>


<div class="col-md-3 col-sm-4 p-5 no-radius">
<button style="height: 42px;" type="submit" name="loc" class="btn c-square c-theme c-btn-green">Tìm kiếm</button>
</div>
</form>
</div>
</div>







            <div class="sc_prod_cate">
           

            <div class="m-l-10 m-r-10">

            <div class="list_prod_cate clearfix">



                    <div class="row row-flex  item-list">

<?php 
$getrank = array("K.Rank","Đồng", "Bạc", "Vàng", "B.Kim", "K.Cương", "H.Thoại", "T.Đấu");
$getnv = array("NULL", "Nam", "Nữ");
$getpet = array("Có", "Không");
$getdk = array("Facebook", "vkontakte");
while ($row = mysqli_fetch_array($result)) { ?>


<div class="col-sm-6 col-md-3">
    <div class="classWithPad">
        <div class="image">
            <img style="position: absolute;max-width: 50%;height: auto;top: -7px;left: -9px;z-index: 100;width:79px;height:75px" src="https://luongchinh.xyz/tep-tin/24850250.png" alt="png-image">

            <a href="/body/random/FREEFIRE/acc/<?php echo $row['id'];?>.html">
                <img src="<?php echo $kun->get_thumb_freefire($row['id']);?>">
                <span class="ms">MS: <?php echo $row['id'];?></span>
            </a>

        </div>
        <div class="description">

        </div>
        <div class="attribute_info">
            <div class="row">

                
                								<div class="col-xs-6 a_att">Rank <span class="c-font-red"><?=$getrank[$row['rank']]?> </div>
						
                        						<div class="col-xs-6 a_att">Đăng kí <span class="c-font-red"><?=$getdk[$row['dangky']]?></div>
						
                
            </div>
        </div>
        <div class="a-more">
            <div class="row">
                <div class="col-xs-6">
                    
                   <div class="price_item">
                                                                                                																																																																																		<span style="text-decoration: line-through;color: #666">                        <?php echo number_format($row['giatien']*2);?>đ</span>
																   
																														                        <?php echo number_format($row['giatien']);?>đ
                                                
                                                                                                

                                            </div>
                     
                </div>
                <div class="col-xs-6 ">
                    <div class="view">
                        				  


                        <a href="/body/random/FREEFIRE/acc/<?php echo $row['id'];?>.html">Chi tiết</a>
                        
                        
                                            </div>
                </div>

            </div>
        </div>
    </div>
</div>


<?php } ?>

<div class="col-xs-12 col-md-12 col-lg-12 col-sm-12">
	<center>
<?php
if ($tong > $kmess){
echo '<center>' . $kun->phantrang('/body/random/FREEFIRE/', $start, $tong, $kmess) . '</center>';
}
?>
	</center>
</div>
</div>




                </div>

             <div id="loading" style="display: none; text-align: center; margin-bottom: 30px;">
                    <div class="loader loader--style7" title="6">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                        <rect x="0" y="0" width="4" height="20" fill="#333">
                          <animate attributeName="opacity" attributeType="XML"
                            values="1; .2; 1"
                            begin="0s" dur="0.6s" repeatCount="indefinite" />
                        </rect>
                        <rect x="7" y="0" width="4" height="20" fill="#333">
                          <animate attributeName="opacity" attributeType="XML"
                            values="1; .2; 1"
                            begin="0.2s" dur="0.6s" repeatCount="indefinite" />
                        </rect>
                        <rect x="14" y="0" width="4" height="20" fill="#333">
                          <animate attributeName="opacity" attributeType="XML"
                            values="1; .2; 1"
                            begin="0.4s" dur="0.6s" repeatCount="indefinite" />
                        </rect>
                      </svg>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="pull-right">
                  <div id="phantrang">
                        <ul id="pagination-demo" class="pagination-sm demo3" style="float:right"></ul>
                  </div>

                </div>
                </div>


        </div>
    </div>




<div class="modal fade" id="noticeModal" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thông báo</h4>
                </div>

                <div class="modal-body" style="font-family: helvetica, arial, sans-serif; color:black">

                    <p>Nick Free Fire Giá Rẻ</p>
<p><span style="color: rgb(226, 80, 65);"><strong>CHÚ Ý KHÁCH HÀNG KHÔNG ĐƯỢC TẮT MÃ ĐĂNG NHẬP</strong></span><br>100% Nick Đúng Mật Khẩu Trắng Thông Tin Chú ý gỡ bỏ tất cả tài khoản trên ứng dụng Facebook sau đó đăng nhập nick bằng mạng 3G 4G để hạn chế bị xác minh danh tính Khi bị xác minh danh tính vui lòng liên hộ FACEBOOK shop để được hỗ trợ k được tự ý xác minh</p>
<p><a href="https://www.youtube.com/watch?v=P4lH4AEtcj4&t=1s" target="_blank" title="Click để xem video hướng dẫn đăng nhập nick bảo mật 100%"></a></p>
<p><a href="https://www.youtube.com/watch?v=P4lH4AEtcj4&t=1s" target="_blank" title="Click để xem video hướng dẫn đăng nhập nick bảo mật 100%"><span style="color: #ff0000;"><strong>ẤN VÀO ĐÂY ĐỂ XEM VIDEO HƯỚNG DẪN ĐĂNG NHẬP NICK</strong></span><br><strong> </strong></a></p>                </div>

                <div class="modal-footer">
                    <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
</div>

<script>
    $(function(){
                        $('#noticeModal').modal('show')



    });
</script>
