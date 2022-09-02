      <style>
@media (max-width:768px){.v-luckywheel .wheel-wrapper{width:300px;height:300px;position:relative}.v-luckywheel .wheel-pointer{width:80px;height:80px;background:url(https://thanhtv.vn/image/roll/IMG_3478.png);background-size: 85% 100%;background-repeat:no-repeat;background-position:50%;position:absolute;opacity:.9;left:50%;top:49.7%;transform:translate(-50%,-50%);text-align:center;line-height:60px;z-index:10;cursor:pointer}.v-luckywheel .wheel-pointer:hover{opacity:1}.v-luckywheel .wheel-bg{width:100%;height:100%;border-radius:1000px;overflow:hidden;transition:transform 4s ease-in-out;background-size:100% 100%!important}.v-luckywheel .wheel-bg.freeze{transition:none;background:red}.v-luckywheel .prize-list{width:100%;height:100%;position:relative;text-align:center}.v-luckywheel .prize-item-wrapper{position:absolute;top:0;left:50%;transform:translateX(-50%);width:150px;height:150px}.v-luckywheel .prize-item{width:100%;height:100%;transform-origin:bottom}.v-luckywheel .prize-item .prize-name{padding:14px 0;font-weight:700}}@media (min-width:769px){.v-luckywheel .wheel-wrapper{width:450px;height:450px;position:relative}.v-luckywheel .wheel-pointer{width:120px;height:120px;background:url(https://thanhtv.vn/image/roll/IMG_3478.png);background-size: 85% 100%;background-repeat:no-repeat;background-position:50%;position:absolute;opacity:.9;left:50%;top:49.7%;transform:translate(-50%,-50%);text-align:center;line-height:60px;z-index:10;cursor:pointer}.v-luckywheel .wheel-pointer:hover{opacity:1}.v-luckywheel .wheel-bg{width:100%;height:100%;border-radius:1000px;overflow:hidden;transition:transform 4s ease-in-out;background-size:100% 100%!important}.v-luckywheel .wheel-bg.freeze{transition:none;background:red}.v-luckywheel .prize-list{width:100%;height:100%;position:relative;text-align:center}.v-luckywheel .prize-item-wrapper{position:absolute;top:0;left:50%;transform:translateX(-50%);width:250px;height:250px}.v-luckywheel .prize-item{width:100%;height:100%;transform-origin:bottom}.v-luckywheel .prize-item .prize-name{padding:14px 0;font-weight:700}}</style>
</style>

<style>
    @media (min-width:768px){
        .henry-thongbao{
            width: 25rem;
        }
    }
.btn-hover.color-6 {
    background-image: linear-gradient(90deg,#ef4056,#00405d,#00a8c5,#d9e021);;
    box-shadow: 0 4px 15px 0 rgb(83 176 57 / 75%);
}
.bg-blue-600 {
    --tw-bg-opacity: 1;
    background-color: #006666;
}
.border-blue-600 {
    --tw-border-opacity: 1;
    border-color: #006666;
}
</style>


<?php
defined('KUNKEYPR') or exit('Restricted Access');
$row = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `vongquay_kimcuong` WHERE `id`='".$_GET['id']."' AND `status`='true'"));
if(!$row['id']) die("<center><h1>Vòng Quay Tồn Tại!</center>");


?>
 <style type="text/css">
         #noticeModal img{max-width: 100%}
    </style>
            <div class="modal fade" id="noticeModal" role="dialog" style="display: none;" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <center>
                        <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thông báo</h4>
                        </center>
                    </div>

                    <div class="modal-body" style="font-family: helvetica, arial, sans-serif;">
                       <p style="text-align:center"><a> <span style="font-size:14px"><strong><span style="color:#ff0000">Hot Hot</span> </strong></span></a><br />
        <span style="color:#003399"><span style="font-size:14px"><strong> Chương Trình Khuyến Mãi Dành Riêng Cho Bạn</strong></span></span><br />
        <span style="color:#001100"><span style="font-size:14px"><strong>Giảm Giá Vòng Quay Xuống Còn 15k<br />Đặc Biệt Giảm Giá Cực Sốc Cho Đối Với Lượt Quay x3,x5,x7,x10</strong></span></span><br />
        <span style="color:#003399"><span style="font-size:14px"><strong>Nhanh Tay Lên Chỉ Duy Nhất Hôm Nay  </strong></span></span><br /></span>                    </div>
                    <div class="modal-footer">
                       
                        <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>

        <script>

          //  $(document).ready(function(){

             //   if ($.cookie('noticeModal') != '1') {

          //          $('#noticeModal').modal('show')
                    //show popup here
              //  }
          //      $('.btn-turnoff-noti').click(function (e) {
         //           var date = new Date();
          //          var minutes = 60*12;
         //           date.setTime(date.getTime() + (minutes * 60 * 1000));
            //        $.cookie('noticeModal', '1', { expires: date});
           //     });


       //     });
        </script>

<div class="container-x mx-auto text-white px-3 md:p-0 mt-12">
    <div class="md:ml-0 mb-4 w-full text-center inline-block uppercase py-1 text-gray-800 md:text-3xl text-2xl font-extrabold">
<?php echo $row['name'];?>     </div>
    <div class="md:flex block items-center py-8 rounded">
        <div class="w-full px-0 md:px-3 md:w-1/2">
            <div class="flex justify-center items-center">
                <div class="w-full">
                    <div class="v-luckywheel relative" style="text-align: -webkit-center;">
                        <div class="wheel-wrapper">
                                                        <div class="wheel-pointer" id="start"></div>
                            <img src="<?php echo $kun->vongquaykimcuong_image($_GET['id'], 'image');?>" id="rotate-play" style="transform: rotate(110deg);">
                                                    </div>
                    </div>
                    <div class="text-center mt-2">
                     <!--   <p class="font-bold ">Bạn còn 0 lượt quay</p> 
                     <p class="font-bold">15,000 vnđ/ lượt quay</p> -->
<div class="items-center">
                            <div class="relative" >
                                <select class="border border-yellow-500 rounded bg-white text-gray-800 py-2 px-3 leading-tight focus:outline-none" id="numrolllop">
                                    <option value="1" data-price="<?=$row['giatien'];?>">Quay 1 lần - giá <?php echo number_format($row['giatien'])?> VNĐ  </option>
                                    
                                </select>                            </div>
                        </div>
                         <div class="my-2 flex justify-center items-center">
                                                         <button type="button" id="start-test" class="mr-2 rounded text-white block transition duration-200 hover:border-blue-700 hover:bg-blue-700 border-2 bg-blue-600 border-blue-600 focus:outline-none w-28 py-1 px-3 font-bold">
      Chơi thử
    </button>
    <button type="button" id="start-play" class="transition duration-200 btn-hover color-6 py-1 text-white block font-bold focus:outline-none w-36 rounded"><span class="relative" style="top: 1px;"><i class="relative bx bxs-meteor" style="top: 1px;"></i> Quay Ngay
      </span></button></div>
      </div>
                </div></div>
        </div>
                <div class="skew-5 block md:hidden" style="width: 100%; height: 1px; border-top: 1px solid #ffbe03"></div>
        <div class="w-full flex md:mt-0 md:w-1/2">
            <div class="col-md-12">
                <a href="/account" class="block mb-2 flex skew-5 items-center bg-gray-900 justify-start  pointer-cursor" style="height:3.3rem;">
                    <img src="https://thanhtv.vn/image/unknown-avatar.jpg" class="rounded-none border-2 border-transparent lazyLoad isLoaded" style="height:3.3em;width:3.3em;"> 
                    <div class="px-2">
                        <p class="text-gray-200 relative text-sm font-medium truncate" style="top:1px;">
                            Thành viên: <?=$user['name'];?>                        </p>
                        <p class="text-white font-bold text-sm">
                            <?php echo number_format($user['money'])?> VND
                        </p>
                    </div>
                    <button class="mr-2 rounded text-white block transition duration-200 hover:border-blue-700 hover:bg-blue-700  bg-blue-600 border-blue-600 focus:outline-none w-28 py-1 px-3 font-bold hidden-mobile" style="background:-webkit-linear-gradient(bottom,#ffe900,#f2ac00)!important">Nạp thẻ</button>
                </a>
<div class="row">
    <div class="col-xs-4 col-md-4">
        <a href="/account/card" class="mb-2 block btn-inner text-center ff-lalezar skew-5 focus:outline-none  text-lg  py-1 md:py-3 w-full font-bold rounded-none hidden-pc" >
            <span class="relative block" style="top: 1px;">
            
                    <path d="M14.83 4H20v6h-1v10H1V10H0V4h5.17A3 3 0 0 1 10 .76 3 3 0 0 1 14.83 4zM8 10H3v8h5v-8zm4 0v8h5v-8h-5zM8 6H2v2h6V6zm4 0v2h6V6h-6zM8 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm4 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path>
                </svg>
                NẠP THẺ
            </span>
        </a>
    </div>

    <div class="col-md-12">
        <div id="tap1" class="rank-modal-tab">
            <ul role="tablist" class="nav nav-tabs">
                <li class="">
                    <a href="#tap1-tab-1"><span>Tháng <?php date('month');?></span></a>
                </li>
                <li class="">
                    <a href="#tap1-tab-3"><span>Quà đua Top</span></a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="tap1-tab-1" class="tab-pane in">
                    <div>
                        <ul class="rank-list">
<?php 
 $i = '1';
$res = mysqli_query($kun->connect_db(), "SELECT * FROM `user_history_system` WHERE `action`='Vòng Quay FreeFire' AND `action_name`='".$row['name']."' ORDER BY `time` DESC LIMIT 0, 5");
while ($row = mysqli_fetch_array($res)) { 

     $result = mysqli_query($kun->connect_db(), "SELECT * FROM `user_history_system` WHERE  `action_name`='".$row['name']."' AND `username`='".$row['username']."' ");
        $rowcount = mysqli_num_rows($result);
       
    ?>
 
                            <li>
                                <div class="pull-left">
                                    <p class="pull-left" style="width: 25px;">#<?=$i;?></p>
                                    <div class="avt avt-xs"><img src="https://shopas.vn/assets/backend/images/icon-user.png" class="avt-img" alt="player duo" /></div>
                                    <p class="name-player-review hidden-over-name color-vip-1"><?=$row['username'];?></p>
                                </div>
                                <p class="pull-right" style="margin-right: 0px;"><?=$rowcount;?> lượt</p>
                                <div class="clearfix"></div>
                            </li>
                           <?php $i++; } ?>
                        </ul>
                    </div>
                </div>
                <div id="tap1-tab-3" class="tab-pane">
                    <div class="content-qdt">
                        <p>
                            <span style="font-size: 12px;">
                                <span style="color: #444444;">
                                    <strong>  Tri Ân Thành Viên Vừa Chơi Vừa Nhận Thưởng    </strong>
                                </span>
                            </span>
                        </p>
    
                        <p>
                            <span style="font-size: 12px;">
                                <span style="color: #006600;"><strong>TOP 1: 18.909 Kim Cương</strong></span>
                            </span>
                        </p>
    
                        <p>
                            <span style="font-size: 12px;">
                                <span style="color: #006600;"><strong>TOP 2: 8.808 Kim Cương</strong></span>
                            </span>
                        </p>
    
                        <p>
                            <span style="font-size: 12px;">
                                <span style="color: #006600;"><strong>TOP 3: 5.005 Kim Cương</strong></span>
                            </span>
                        </p>
    
                       
    
                        <p>
                            <span style="font-size: 12px;">
                                <span style="color: #006600;"><strong> NHANH TAY THAM GIA NGÀY THÔI AE</strong></span>
                            </span>
                        </p>
    
                        <p>
                            <span style="font-size: 12px;">
                                <span style="color: #006600;"><strong>PHẦN QUÀ ĐƯỢC TRAO THƯỞNG VÀO NGÀY CUỐI CỦA MỖI THÁNG</strong></span>
                            </span>
                        </p>
                    </div>                </div>
            </div>
        </div>
    </div>

</div>

        <div class="henry-thongbao">
            
        </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="rollModal" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="font-weight: bold; text-transform: uppercase; color: #ff0000; text-align: center;">Thông báo</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body content-popup" style="font-family: helvetica, arial, sans-serif;">
                
                                       HUY PLAY
                         </div>
                      <?php if(!$token) { ?> <div class="modal-footer">
                    <a href="/dang-nhap" class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--pill"><i class="bx bxs-user"></i> Đăng nhập</a>
                    <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
                                </div>
                            <?php } else { ?>
                                 <div class="modal-footer">
                    <a href="/account/card" class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--pill"><span class="bx bxs-badge-dollar"></span> Nạp thẻ</a>
                    <a rel="/rut/kimcuong" id="btnWithdraw" class="btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill load-modal">Rút Kim Cương </a>
                    <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
                                </div>
                            <?php } ?>
        </div>
    </div>
</div>





    <input type="hidden" id="numgift" value="8">
<script type="text/javascript">
$( document ).ready(function() {

    var bRotate = false;

   function rotateFn(angles, txt, type){
        bRotate = !bRotate;
        $('#rotate-play').stopRotate();
        $('#rotate-play').rotate({
            angle:0,
            animateTo:angles+1800,
            duration:1500, // tốc độ quay tay
            callback:function (){
               var awar = txt;

       $('.content-popup').text(awar);
                        $('#rollModal').modal('show');
            reload_money(); 
                bRotate = !bRotate;
            }
        })
    }



    $('#start-play').click(function (){

        if(bRotate)return;



  $.ajax({ 
        type: 'post', 
        dataType: "JSON",
        url: '/system/vongquaykimcuong', 
        data: {
            csrf: '<?=$row['id'];?>'
        }, 
        success: function (json) {

            if(json.status == 3) {
    $('.content-popup').text('Vui lòng đăng nhâp để chơi!');
                        $('#rollModal').modal('show');          
            }else if(json.status == 4) {
    $('.content-popup').text('Vui lòng nạp thêm tiền để chơi!');
                        $('#rollModal').modal('show');
            }else if(json.status == 1) {
                if(json.item > 0 && json.item < 9) {
   rotateFn(json.location, json.msg, "success");    
}else {
  $('.content-popup').text('Lỗi hệ thống!');
                        $('#rollModal').modal('show');
}

            }else {
   $('.content-popup').text('Lỗi hệ thống!');
                        $('#rollModal').modal('show');              
            }

    }
});

    });

});
</script>


<script type="text/javascript">
$( document ).ready(function() {

    var bRotate = false;

   function rotateFn(angles, txt, type){
        bRotate = !bRotate;
        $('#rotate-play').stopRotate();
        $('#rotate-play').rotate({
            angle:0,
            animateTo:angles+1800,
            duration:1500, // tốc độ quay tay
            callback:function (){
               var awar = txt;

       $('.content-popup').text(awar);
                        $('#rollModal').modal('show');
            reload_money(); 
                bRotate = !bRotate;
            }
        })
    }



    $('#start').click(function (){

        if(bRotate)return;



  $.ajax({ 
        type: 'post', 
        dataType: "JSON",
        url: '/system/vongquaykimcuong', 
        data: {
            csrf: '<?=$_GET['id'];?>'
        }, 
        success: function (json) {

            if(json.status == 3) {
    $('.content-popup').text('Vui lòng đăng nhâp để chơi!');
                        $('#rollModal').modal('show');          
            }else if(json.status == 4) {
    $('.content-popup').text('Vui lòng nạp thêm tiền để chơi!');
                        $('#rollModal').modal('show');
            }else if(json.status == 1) {
                if(json.item > 0 && json.item < 9) {
   rotateFn(json.location, json.msg, "success");    
}else {
  $('.content-popup').text('Lỗi hệ thống!');
                        $('#rollModal').modal('show');
}

            }else {
   $('.content-popup').text('Lỗi hệ thống!');
                        $('#rollModal').modal('show');              
            }

    }
});

    });

});
</script>

<script type="text/javascript">
$( document ).ready(function() {

    var bRotate = false;

   function rotateFn(angles, txt, type){
        bRotate = !bRotate;
        $('#rotate-play').stopRotate();
        $('#rotate-play').rotate({
            angle:0,
            animateTo:angles+1800,
            duration:1600, // tốc độ quay tay
            callback:function (){
               var awar = txt;

         $('.content-popup').text(awar);
                        $('#rollModal').modal('show');
            reload_money(); 
                bRotate = !bRotate;
            }
        })
    }



    $('#start-test').click(function (){

        if(bRotate)return;



  $.ajax({ 
        type: 'post', 
        dataType: "JSON",
        url: '/model/vongquaykimcuong/xulytest.php', 
        data: {
            csrf: '<?=$_GET['id'];?>'
        }, 
        success: function (json) {

            if(json.status == 3) {
     $('.content-popup').text('Hãy đăng nhập để chơi thử!');
     $('#rollModal').modal('show');          
            }else if(json.status == 4) {
     $('.content-popup').text('Vui lòng nạp thêm tiền để chơi!');
                        $('#rollModal').modal('show');
            }else if(json.status == 1) {
                if(json.item > 0 && json.item < 9) {
   rotateFn(json.location, json.msg, "success");    
}else {
   $('.content-popup').text('Lỗi hệ thống!');
                        $('#rollModal').modal('show');
}

            }else {
   $('.content-popup').text('Lỗi hệ thống!');
                        $('#rollModal').modal('show');        
            }

    }
});

    });

});
</script>