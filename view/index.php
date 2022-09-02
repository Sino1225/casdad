<?php 
if($kun->is_mobile()) $h = '514'; else $h = '460';
$kimcuong = $kun->settings('kimcuong');
?>
<style>
    
</style>

		     <div class="sa-banner">
    <div class="container" style="padding: 0">
        <div class="sa-bntab clearfix">
            <div class="sa-bncol2">
                <div class="swiper-container sabner">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="" title="ok">
			    
                
                
                  <div class="embed-container"><img src="<?php echo $_banner['url'];?>" alt="ok">

                  </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-button-prev swiper-button-white"></div>
                    <div class="swiper-button-next swiper-button-white"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>


              
  <div class="sa-bncol1">
                <div class="sa-bntbox">
                    <ul class="sa-bnnav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#topnap" role="tab" data-toggle="tab">Nạp
                                thẻ</a>
                        </li>
                        <li role="presentation" class=""><a href="#thuong" role="tab" data-toggle="tab">Top nạp thẻ
                                tháng <?php echo date('m');?></a>
                        </li>
                    </ul>
                    <div class="sa-bntcbox tab-content">
                        <div role="tabpanel" class="tab-pane" id="thuong">
                            <div class="sa-bntabbox">
                                <ul class="sa-topthe">
                                          <?php 
$meow = mysqli_query($kun->connect_db(), "SELECT * FROM `users` ORDER BY `money_nap` DESC LIMIT 0,5");
$i = 1;
while ($eow = mysqli_fetch_array($meow)) { ?>
                                                                     
                                    <li>
                                        <i><?php echo $i;?></i>
                                        <span><?php echo $eow['username'];?></span>
                                        <label><?php echo number_format($eow['money_nap']);?><sup>đ</sup>
                                        </label>
                                    </li>
                                    <?php
$i++;
 } ?>
                                    
                                                                        
                                    
                                    
                                                                                                        </ul>
                            </div>
                        </div>
                         <div role="tabpanel" class="tab-pane active" id="topnap">
                            <div class="c-layout-sidebar-content ">
        <style type="text/css">
    .sa-bntbox .form-control {
            height: 41px;
            color: #ffffff;
            background: #1f2228;
            border: 1px solid #30343c;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
        }

        .sa-bntbox input[type="text"]{
            color: #fff !important;
        }

        .sa-bntbox .btn-submit{
            border-color: none!important;
            outline: !important;
            width: 100%!important;
            text-align: center;
            font-weight: 700!important;
            font-size: 18px!important;
            color: #000000!important;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
            background: linear-gradient(to top, #FFE900 0%, #F2AC00 100%)!important;
            background: -moz-linear-gradient(to top, #FFE900 0%, #F2AC00 100%)!important;
            background: -o-linear-gradient(to top, #FFE900 0%, #F2AC00 100%)!important;
            background: -ms-linear-gradient(to top, #FFE900 0%, #F2AC00 100%)!important;
            background: -webkit-linear-gradient(bottom, #FFE900 0%, #F2AC00 100%)!important;
        }
        .sa-bntbox .btn-submit:hover{
            color: #000;
        }
        .sa-bntbox .alert{
            margin-bottom: 5px;
        }

        .sa-bntbox .alert-dismissable, .alert-dismissible{
            padding-top: 0px;
            padding-bottom: 0px;
        }
    </style>

<form method="POST" action="" accept-charset="UTF-8">
<div class="form-group">
<select class="form-control"  name="type" id="type1">
<option value="">Chọn Loại Thẻ</option>
                        <option value="VIETTEL">Viettel</option>
                        <option value="MOBIFONE">Mobifone</option>
                        <option value="VINAPHONE">Vinaphone</option>
<option value="VIETNAMOBILE">Vietnamobile</option>
<option value="ZING">Zing</option>

</select>
</div>
<div class="form-group">
<select name="amount" id="amount1" class="form-control">
<option value="">-- Chọn đúng mệnh giá. Sai mất thẻ --</option>
<option value="10000">10,000 VND</option>
<option value="20000">20,000 VND</option>
<option value="30000">30,000 VND</option>

<option value="50000">50,000 VND</option>
<option value="100000">100,000 VND </option>
<option value="200000">200,000 VND </option>
<option value="300000">300,000 VND </option>
<option value="500000">500,000 VND </option>
<option value="1000000">1,000,000 VND </option>

</select>
</div>
<div class="form-group">
<input type="text" class="form-control" name="pin" maxlength="16" required="" placeholder="Mã số thẻ" >
</div>
<div class="form-group">
<input type="text" class="form-control" name="serial" maxlength="16" required="" placeholder="Mã serial" >
</div>
<button type="submit" name="submit" class="btn btn-submit c-theme-btn c-btn-square c-btn-uppercase c-btn-bold btn-block"  style="display:inline-block; width: 100%;" data-loading-text="<i class='fa fa-spinner fa-spin '></i>">NẠP THẺ
            </button>
    <div class="clearfix"></div>
    <!-- END: PAGE CONTENT -->
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
        $('button[name=submit]').html('Đang xử lý');
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




                </div>
<div role="tabpanel" class="tab-pane " id="thuong">
                    <div class="sa-bntabbox">
    <ul class="sa-topthe">

			</ul>
</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



	</header>
    <input type="hidden" id="time_popup" value="">
		<style>

		@import url('https://fonts.googleapis.com/css?family=Oswald');

		    .box-title-menu-game {
		    text-align: center;
		    font-size: 22px;
		    margin-bottom: 18px;
		    color: #f6bd00;
		    font-family: 'Oswald', sans-serif !important;
		}





		</style>

 <div class="modal fade" id="noticeModal" role="dialog" style="display: none;" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thông báo</h4>
                    </div>

                    <div class="modal-body" style="font-family: helvetica, arial, sans-serif;">
                      <?php echo nl2br($_thongbao['thongbao']);?>
                    </div>
                    <div class="modal-footer">
						<button type="button" class="btn-turnoff-noti btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Tắt trong 24h</button>
                        <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>

        <script>

            $(document).ready(function(){

                if ($.cookie('noticeModal') != '1') {

                    $('#noticeModal').modal('show')
                    //show popup here
                }
                $('.btn-turnoff-noti').click(function (e) {
                    var date = new Date();
                    var minutes = 60*12;
                    date.setTime(date.getTime() + (minutes * 60 * 1000));
                    $.cookie('noticeModal', '1', { expires: date});
                });


            });
        </script>
       
	<div class="container" style="      background-color: rgba(0,0,0,0.8);     margin-bottom: 15px;       margin-bottom: 15px;">

<div class="sa-logmain sa-themain">

<div class="box-title-menu-game">
           <font color="red"> DANH MỤC VÒNG QUAY</font>    
                    <br>
            </div>


                
  
                
<div class="sl-produl clearfix">
   
                        
                        <div  class="sl-prodli">
                            <div class="sl-prodbox">
                                <div class="hungplayvn"></div>
                                <a class="sl-prlinks" href="/html/dragon" title="Triệu Hồi Rồng Thần">
                                    <h3 class="sl-prcode text-center"><span>Triệu Hồi Rồng Thần</span></h3>
                                    <p class="sl-primg"><img src="/img/index/1621009410902875.gif" alt=""></p>
                                </a>
                               <div class="sl-prifs">
                                <div class="sl-prifbot">
                                    <ul>
                                          
                                        <li>Thử Vận May Quay Tay Cực VIP</li>
                                    </ul>
                                <span class="outPrice">
                                   
                                    <span class="oldPrice">39,000đ</span>
                                    <span class="newPrice">18,000đ</span>
                                </span>
                                </div>
                                    <p class="sl-prbot"><a style="background: url(/assets/choi2.png); background-size: 136px 36px;" class="sl-btnod" href="/html/dragon" title="Triệu Hồi Rồng Thần"></a>
                                </p></div>
                            </div>
                        </div>
                        
                         
   

                        
    <?php 
	$res = mysqli_query($kun->connect_db(), "SELECT * FROM `vongquay_kimcuong` ORDER BY `id` DESC");
	while ($row = mysqli_fetch_array($res)) {
		if($row['status'] == 'true') {
	 ?>
<div id="880" class="sl-prodli">
                            <div class="sl-prodbox">
                                <div class="hungplayvn"></div>
                                <a class="sl-prlinks" href="/wheel/<?php echo $kun->rewrite($row['name'])?>-<?php echo $row['id'];?>.html" title="<?php echo $row['name'];?>">
                                    <h3 class="sl-prcode text-center"><span><?php echo $row['name'];?></span></h3>
                                    <p class="sl-primg"><img src="<?php echo $kun->vongquaykimcuong_image($row['id'], 'thumb');?>" alt="Vòng Quay Bingo Tết Thiếu Nhi 20k"></p>
                                </a>
                               <div class="sl-prifs">
                                <div class="sl-prifbot">
                                    <ul>
                                        <li>Đã Quay: <?php echo number_format($row['sudung'])?></li>   
                                        </li>
                                    </ul>
                                <span class="outPrice">
                                     <span class="oldPrice"><?php echo number_format($row['giatien']*2);?>đ</span>
                                </span>
                                   
                                    <span class="newPrice"><?php echo number_format($row['giatien']);?>đ</span>
                                </span>
                                </div>
                                    <p class="sl-prbot"><a class="sl-btnod" style="background: url(/assets/choi2.png); background-size: 136px 36px;" href="/wheel/<?php echo $kun->rewrite($row['name'])?>-<?php echo $row['id'];?>.html" title="<?php echo $row['name'];?>"></a>
                                </p></div>
                            </div>
                        </div>

	<?php } } ?>
<?php if($kun->hienthi_game('vanmayff') == 1) {
$ross = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `setting_bingo`"));
 ?>
              <div class="sl-prodli">
                                  <div class="sl-prodbox">
                                      <div class="hungplayvn"></div>
                                    <a class="sl-prlinks" href="/html/quay11" title="Bingo Tiệc Bãi Biển">
                                        <h3 class="sl-prcode text-center"><span>Bingo Tiệc Bãi Biển</span></h3>
                                        <p class="sl-primg"><img src="<?php echo $kun->hinhanh_game('bingonoel');?>" alt="Bingo Tiệc Bãi Biển"></p>
                                    </a>
                                    <div class="sl-prifs">
                                <div class="sl-prifbot">
                                    <ul>
                                        <li>100% Nhận Kim Cương Khủng
                                        </li>
                                    </ul>
                                    <span class="outPrice">
                                        <span class="oldPrice">25,000đ</span>
                                    <span class="newPrice">18,000đ</span>
                                </span>
                                </div>
<p class="sl-prbot">
                                                                            <a class="sl-btnod background-btn-home hover-btn" style="background: url(/assets/choi2.png); background-size: 136px 36px;" href="/html/quay11" title=""></a>
                                                                        
                                
                                    </div>
                                </div>
                            </div>

                                          <div class="sl-prodli">
                                  <div class="sl-prodbox">
                                      <div class="hungplayvn"></div>
                                    <a class="sl-prlinks" href="/html/quay12" title="VÒNG QUAY BINGO SIÊU CẤP">
                                        <h3 class="sl-prcode text-center"><span>VÒNG QUAY BINGO SIÊU CẤP</span></h3>
                                        <p class="sl-primg"><img src="<?php echo $kun->hinhanh_game('bingosieucap');?>" alt="VÒNG QUAY BINGO SIÊU CẤP"></p>
                                    </a>
                                    <div class="sl-prifs">
                                <div class="sl-prifbot">
                                    <ul>
                                        <li>100% Nhận Kim Cương Khủng
                                        </li>
                                    </ul>
                                    <span class="outPrice">
                                         <span class="oldPrice">30,000đ</span>
                                    <span class="newPrice">18,000đ</span>
                                </span>
                                </div>

                                        <p class="sl-prbot"><a style="background: url(/assets/choi2.png); background-size: 136px 36px;" href="/html/quay12" title="" class="sl-btnod"></a></p>
                                    </div>
                                </div>
                            </div>
                            

<?php } ?>
                        
	<?php if($kun->hienthi_game('lattheff') == 1) { ?>
<?php 
$ros = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `setting_latthe`"));
?>              <div class="sl-prodli">
                                  <div class="sl-prodbox">
                                      <div class="hungplayvn"></div>
                                    <a class="sl-prlinks" href="/html/latbai" title="">
                                        <h3 class="sl-prcode text-center"><span>LẬT BÀI JOKER</span></h3>
                                        <p class="sl-primg"><img src="<?php echo $kun->hinhanh_game('lattheff');?>" alt="LẬT BÀI JOKER"></p>
                                    </a>
                                    <div class="sl-prifs">
                                <div class="sl-prifbot">
                                    <ul>
                                        <li>100% Nhận Kim Cương Khủng
                                        </li>
                                    </ul>
                                     <span class="outPrice">
                                    <span class="oldPrice">31,000đ</span>
                                    <span class="newPrice">18,000đ</span>
                                </span>
                                </div>

                                        <p class="sl-prbot"><a style="background: url(/assets/choi2.png); background-size: 136px 36px;" href="/html/latbai" title="" class="sl-btnod"></a></p>
                                    </div>
                                </div>
                            </div>
                            
        <!-- -->
         <div class="sl-prodli">
                                  <div class="sl-prodbox">
                                      <div class="hungplayvn"></div>
                                    <a class="sl-prlinks" href="/html/latbai2" title="">
                                        <h3 class="sl-prcode text-center"><span>LẬT THẺ HOA PHƯỢNG</span></h3>
                                        <p class="sl-primg"><img src="/img/index/latthe_hoaphuong.gif" alt="Lật bài siêu nhân gao 18k"></p>
                                    </a>
                                    <div class="sl-prifs">
                                <div class="sl-prifbot">
                                    <ul>
                                        <li>100% Nhận Kim Cương Khủng
                                        </li>
                                    </ul>
                                     <span class="outPrice">
                                    <span class="oldPrice">31,000đ</span>
                                    <span class="newPrice">18,000đ</span>
                                </span>
                                </div>

                                        <p class="sl-prbot"><a style="background: url(/assets/choi2.png); background-size: 136px 36px;" href="/html/latbai2" title="" class="sl-btnod"></a></p>
                                    </div>
                                </div>
                            </div>
                             <?php } ?>
<?php if($kun->hienthi_game('vanmayff') == 1) {
$ross = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `setting_bingo`"));
 ?>
                            <div id="880" class="sl-prodli">
                            <div class="sl-prodbox">
                                <div class="hungplayvn"></div>
                                <a class="sl-prlinks" href="/html/quayso3" title="Vòng Quay Bingo Tết Thiếu Nhi 20k">
                                    <h3 class="sl-prcode text-center"><span>Vòng Quay Quái Vật Đại Dương</span></h3>
                                    <p class="sl-primg"><img src="<?php echo $kun->hinhanh_game('mayxeng');?>" alt="Vòng Quay Bingo Tết Thiếu Nhi 20k"></p>
                                </a>
                                 <div class="sl-prifs">
                                <div class="sl-prifbot">
                                    <ul>
                                        <li>100% Nhận Kim Cương Khủng
                                        </li>
                                    </ul>
                                      <span class="outPrice">
                                    <span class="oldPrice">29,000đ</span>
                                    <span class="newPrice">19,000đ</span>
                                </span>
                                </div>

                                    <p class="sl-prbot"><a style="background: url(/assets/choi2.png); background-size: 136px 36px;" class="sl-btnod" href="/html/quayso3" title="/Vòng Quay Bingo Tết Thiếu Nhi 20k"></a>
                                </p></div>
                            </div>
                        </div>
<?php } ?>


	<?php if($kun->hienthi_game('homthinhff') == 1) { ?>
<?php 
?>     
<div class="sl-prodli">
                          <div class="sl-prodbox">
                              <div class="hungplayvn"></div>
                            <a class="sl-prlinks" href="/body/random/KC2" title="Thử vận may 25.000đ">
                                <h3 class="sl-prcode text-center"><span>Hòm Thính Bí Ẩn 25k</span></h3>
                                <p class="sl-primg"><img data-src="<?php echo $kun->hinhanh_game('homthinhff');?>" class="lazyload" alt="Thử vận may 25.000đ"></p>
                            </a>
                            <div class="sl-prifs">
                                <div class="sl-prifbot">
                                    <ul>
                                        <li>Chỉ 25K Nhận Ngay 9999 Kim Cương</li>

 

                                    </ul>
                                     <span class="outPrice">
                                        <span class="newPrice">
                                                                                           25,000đ
                                                                                    </span>
                                    </span>

                                </div>

                                <p class="sl-prbot"><a style="background: url(/assets/choi2.png); background-size: 136px 36px;" href="/body/random/KC2" title="" class="sl-btnod"></a></p>
                            </div>
                        </div>
                    </div>
<?php } ?>

	<?php if($kun->hienthi_game('homkimcuong') == 1) { ?>
<?php 
?>     
<div class="sl-prodli">
                          <div class="sl-prodbox">
                              <div class="hungplayvn"></div>
                            <a class="sl-prlinks" href="/body/random/KC1" title="Thử vận may 25.000đ">
                                <h3 class="sl-prcode text-center"><span>Hòm Kim Cương</span></h3>
                                <p class="sl-primg"><img data-src="<?php echo $kun->hinhanh_game('homkimcuong');?>" class="lazyload" alt="Thử vận may 25.000đ"></p>
                            </a>
                            <div class="sl-prifs">
                                <div class="sl-prifbot">
                                    <ul>
                                        <li>Chỉ 50K Nhận Ngay 9999 Kim Cương</li>



                                    </ul>
                                      <span class="outPrice">
                                        <span class="newPrice">
                                                                                           50,000đ
                                                                                    </span>
                                    </span>

                                </div>

                                <p class="sl-prbot"><a style="background: url(/assets/choi2.png); background-size: 136px 36px;" href="/body/random/KC1" title="" class="sl-btnod"></a></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                        </div>

        </div>
    </div>
	<div class="container" style="      background-color: rgba(0,0,0,0.8);     margin-bottom: 15px;       margin-bottom: 15px;">


            <div class="sa-logmain sa-themain">

<div class="box-title-menu-game">
           <font color="red"> DANH MỤC FREE FIRE</font>    
                    <br>
            </div>
            <div class="sl-produl clearfix">
	<?php if($kun->hienthi_game('banaccff') == 1) { ?>
<?php 
?>     
<div class="sl-prodli">
                          <div class="sl-prodbox">
                              <div class="hungplayvn"></div>
                            <a class="sl-prlinks" href="/body/random/FREEFIRE" title="Thử vận may 25.000đ">
                                <h3 class="sl-prcode text-center"><span>Acc Free Fire Chơi Được Giá Rẻ</span></h3>
                                <p class="sl-primg"><img data-src="<?php echo $kun->hinhanh_game('banaccff');?>" class="lazyload" alt="Thử vận may 25.000đ"></p>
                            </a>
                            <div class="sl-prifs">
                                <div class="sl-prifbot">
                                    <ul>
                                        <li>Số Tài Khoản Hiện Có: 3730</li>



                                    </ul>
                                    <span class="outPrice">
                                        <span class="newPrice">
                                                                                            Giảm 50%
                                                                                    </span>
                                    </span>

                                </div>

                                <p class="sl-prbot"><a style="background: url(/assets/choi2.png); background-size: 136px 36px;" href="/body/random/FREEFIRE" title="" class="sl-btnod"></a></p>
                            </div>
                        </div>
                    </div>

<?php } ?>


<?php 
	$res = mysqli_query($kun->connect_db(), "SELECT * FROM `random_freefire` ORDER BY `id` DESC");
	while ($row = mysqli_fetch_array($res)) {
		if($row['status'] == 'true') {
			$count = mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `random_freefire_nick` WHERE `status`='true' AND `cname`='".$row['cname']."'"));
	 ?>

                  
<div class="sl-prodli">
                        <div class="sl-prodbox">
                            <div class="hungplayvn"></div>
                            <a class="sl-prlinks" href="/random/freefire/<?php echo $row['cname'];?>" title="<?php echo $row['name'];?>">
                                <h3 class="sl-prcode text-center"><span><?php echo $row['name'];?></span></h3>
                                <p class="sl-primg"><img data-src="<?php echo $row['thumb'];?>" class="lazyload" alt="<?php echo $row['name'];?>"></p>
                            </a>
                            <div class="sl-prifs">
                                <div class="sl-prifbot">
                                    <ul>
                                        <li>Số Tài Khoản Hiện Có: <?php echo number_format($count)?></li>


                                    </ul>
                                     <span class="outPrice">
                                           <span class="oldPrice"><?php echo number_format($row['giatien'])?>đ</span>
                                        <span class="newPrice"><?php echo number_format($row['giatien'])?>đ</span>
                                    </span>

                                </div>

                                <p class="sl-prbot"><a style="background: url(/assets/choi2.png); background-size: 136px 36px;" href="/random/freefire/<?php echo $row['cname'];?>" title="" class="sl-btnod"></a></p>
                            </div>
                        </div>
                    </div>

	<?php } } ?>










            </div>

        </div>
    </div>


	<div class="container" style="      background-color: rgba(0,0,0,0.8);     margin-bottom: 15px;       margin-bottom: 15px;">


            <div class="sa-logmain sa-themain">

<div class="box-title-menu-game">
           <font color="red"> DANH MỤC LIÊN QUÂN</font>    
                    <br>
            </div>
            <div class="sl-produl clearfix">




	<?php if($kun->hienthi_game('lienquan') == 1) { ?>
<?php 
?>     


<div class="sl-prodli">
                        <div class="sl-prodbox">
                            <div class="hungplayvn"></div>
                            <a class="sl-prlinks" href="/body/lienquan" title="Thử vận may 25.000đ">
                                <h3 class="sl-prcode text-center"><span>Acc Liên Quân Trắng Thông Tin</span></h3>
                                <p class="sl-primg"><img data-src="<?php echo $kun->hinhanh_game('lienquan');?>" class="lazyload" alt="Thử vận may 25.000đ"></p>
                            </a>
                            <div class="sl-prifs">
                                <div class="sl-prifbot">
                                    <ul>
                                        <li>Số Tài Khoản Hiện Có: 16</li>


                                    </ul>
                                    <span class="outPrice">
                                        <span class="newPrice">
                                                                                            Giảm 50%
                                                                                    </span>
                                    </span>

                                </div>

                                <p class="sl-prbot"><a style="background: url(/assets/choi2.png); background-size: 136px 36px;" href="/body/lienquan" title="" class="sl-btnod"></a></p>
                            </div>
                        </div>
                    </div>

<?php } ?>


<?php 
	$res = mysqli_query($kun->connect_db(), "SELECT * FROM `random_lienquan` ORDER BY `id` DESC");
	while ($row = mysqli_fetch_array($res)) {
		if($row['status'] == 'true') {
			$count = mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `random_lienquan_nick` WHERE `status`='true' AND `cname`='".$row['cname']."'"));
	 ?>

                  
<div class="sl-prodli">
                        <div class="sl-prodbox">
                            <div class="hungplayvn"></div>
                            <a class="sl-prlinks" href="/random/lienquan/<?php echo $row['cname'];?>" title="<?php echo $row['name'];?>">
                                <h3 class="sl-prcode text-center"><span><?php echo $row['name'];?></span></h3>
                                <p class="sl-primg"><img data-src="<?php echo $row['thumb'];?>" class="lazyload" alt="<?php echo $row['name'];?>"></p>
                            </a>
                            <div class="sl-prifs">
                                <div class="sl-prifbot">
                                    <ul>
                                        <li>Số Tài Khoản Hiện Có: <?php echo number_format($count)?></li>


                                    </ul>
                                     <span class="outPrice">
                                        <span class="newPrice">
                                                                                            Giảm 50%
                                                                                    </span>
                                    </span>
                                </div>
                                

                                <p class="sl-prbot"><a style="background: url(/assets/choi2.png); background-size: 136px 36px;" href="/random/lienquan/<?php echo $row['cname'];?>" title="" class="sl-btnod"></a></p>
                            </div>
                        </div>
                    </div>

	<?php } } ?>

                


            </div>

        </div>
    </div>
    <style>
.ttln{padding-left: 16px;
width: 114px;
height: 30px;
line-height: 30px;
text-transform: uppercase;
display: inline-block;
background: url(https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/fb1088de81e42c4e538967ec12cb5caa.png) 50% no-repeat;
    background-size: auto;
background-size: contain;
position: relative;
z-index: 1;
top: 12px;
margin-right: 10px
}
.counttime{width: 100%;padding: 5px 15px;font-size: 12px;display:block!important;min-height: 40px;position: relative;top: -15px;}
.dateTime,.hourTime,.minuteTime,.secondTime{padding:5px 10px;background: #000;border-radius: 5px;margin-right: 5px;display: inline-block;font-weight: bold;font-size:13px}
@media  only screen and (max-width: 640px) {
    .ttln{margin:auto;margin-bottom:10px;display: block !important;}
    .counttime{padding: 5px !important;font-size: 14px;;min-height: 60px!important;display:block!important;}
    .dateTime,.hourTime,.minuteTime,.secondTime{padding: 3px!important;font-size:14px!important;margin-right: 5px!important}
    .sl-prodbox{height:auto!important}
    .ttln{display:block}
    .counttime{text-align:center}
    .sl-prifbot ul li::before{background: unset;}
    .sl-prifbot ul li{text-align:center}
}
@media  only screen and (max-width: 365px) {
    .counttime{width: 100%!important;;padding: 5px 15px !important;;font-size: 13px!important;display:block!important;min-height: 40px!important;}
    .dateTime,.hourTime,.minuteTime,.secondTime{padding:5px 10px;background: #000!important;border-radius: 5px;margin-right: 5px!important;display: inline-block!important;font-weight: bold!important;;font-size:14px!important;}
    .sl-prodbox{height:auto!important}
    .ttln{display:inline-block}
}
.sl-prodbox{overflow:unset!important}
.sl-prifs{z-index:20!important}
.srlink {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 50%;
    z-index: 1000;
}
.verSell{
display: block;
position: absolute;
top: 0;
left: 0;
height: 100%;
background: rgba(236, 3, 14, 0.3);}
.processCount{text-align: center;
border: 0px solid #e89d9d;
padding: 5px;
color: red;
text-transform: uppercase;
font-size: 15px;
display: block;
height: 30px;
border-radius: 30px;
background: #e89d9d;
color: #fff;
position: relative;
z-index: 1;
overflow: hidden;}
.hungplayvn{
    position: absolute;
    top: -3px;
    z-index: 10;
    left: -8px;
    width: calc(100% + 20px);
    background: url("//shoprikaki.vn/storage/images/ecg0Mp3kn6_1608658909.gif") center center;
    background-size: 100% 100%;
    height: calc(100% + 6px);
    padding: 12px;}
.game-list .classWithPad {position: relative;
z-index: 1;
    border: none!important;
    padding: 2px!important;
    text-align: center!important;
    border-radius: 4px!important;
    padding: 6px 6px 6px 6px !important;
}
.game-list .classWithPad1 .hungplayvn{background: url("//shoprikaki.vn/storage/images/ecg0Mp3kn6_1608658909.gif") no-repeat center center;background-size: 100% 100%;}
.game-list .classWithPad:hover{box-shadow: none !important;}
.game-list .news_title{position: relative;z-index: 2;}
.game-list img{width: auto!important;;max-height: 180px!important;;width: 100%!important;;}
.a-more {position:relative;z-index:2}
@media  only screen and (max-width: 320px) {
    .row-flex-safari .classWithPad{height: 300px!important;padding:20px 10px!important}
    .game-list img{max-height: 120px !important;}
}
</style>
