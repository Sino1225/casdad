<?php
defined('KUNKEYPR') or exit('Restricted Access');
$ros = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `setting_bingo`"));
?>
<div class="c-layout-page">
<style>
    .btn+.btn {
        margin-left: 0 !important;
    }

    .btn-right .btn {
        float: left;
        width: 100%;
        background: #fb236a;
        font-size: 13px;
        color: #ffffff;
        text-align: center;
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
        -ms-border-radius: 8px;
        -o-border-radius: 8px;
        border-radius: 8px;
        border: 2px solid #fb236a;
        padding: 11px 0;
        margin-top: 10px;
        font-size: 20px;
        font-weight: bold;
    }

    .btn-right .btn:hover {
        background-color: #ff8db2;
        border: 2px solid #ff8db2;
    }

    .square {
        width: 100%;
    }

    #squaredesktop .box {
        min-width: 40px;
        min-height: 40px;
        /*background-color: #ccc;*/

        padding: 10px;
    }

    #squaremobile .box {
        padding: 5px;
    }

    .box img.active {
        box-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #fff, 0 0 20px #49fff7, 0 0 35px #49fff7
    }

    .outer-btn {
        width: 100%
    }

    .outer-btn:hover {
        opacity: 0.7
    }

    .list-roll-inner {
        width: 105%;
        margin-top: 30px;
        max-height: 500px;
        overflow-y: scroll;
        margin: 0 auto;
    }

    #squaremobile .outer-btn {
        margin-bottom: -50px;
    }

    .nopadding {
        padding: 0;
    }

    a {
        color: #283593;
        text-decoration: none;
    }

    h3 {
        margin-top: 12px;
    }

    * {
        margin: 0px;
    }

    .game-list {
        width: 580px;
        margin: 0 auto;
    }

@media    screen and (max-width: 580px) {
	.fct{bottom: 35px!important;padding:0!important}
	.saleoff{height: 25px!important;left: -15px!important;}
	.saleoff input{padding: 6px 10px!important;font-size:14px!important;}
	.progress{bottom: -35px!important;height: 29px!important;width: 140px!important;right: -0px!important;}
	.persion_ppt{line-height: 25px!important;}
	.btn-right{margin-top:100px}
	.pltry{position:relative;z-index:100;position: absolute;bottom: -135px;left: 90px;}
	.dropdownlist{position: absolute;left: -16px;bottom: -53px;width: 100%;padding: 0!important;text-align: center;}
	#numrolllop{width:80%!important}
    .game-list{
        width: 320px;
    }
    #slot1, #slot2, #slot3{
        margin-left: 68px!important;
    }
	main{
			background: unset!important;
			border-radius: 5px!important;
			margin-top: 50px!important;
			padding-top: 0!important;
			padding-bottom: 0px!important;
			padding-left: unset!important;
			width: 100%!important;
		}
	section#Slots{background:unset!important;position: relative;top: 118px;margin-left: 54px !important;margin-right: 50px !important;}
	.game-list {
		width: 320px !important;
		height: 320px !important;
        background: url(/img/trochoi/bingo_baibien/khung.png) no-repeat;
		position: relative !important;
		background-size: contain !important;
	}
	.wheeling{
		
	}
	#slot1, #slot2, #slot3{
			margin-top: -1px!important;
			margin-bottom:10px!important;
			margin-left: 0px!important;
			margin-right: 8px!important;
			background-size: 62px 60px!important;
			width: 62px!important;
			height: 60px!important;position: relative;border-radius: 3px;}
			#slot1{top:1px}
			#slot2{top:1px}
			#slot3{top:1px;margin-right:0!important}
	section#Gira{
	    position: relative;
	    top: 111px;
	}
	#Gira {
			position: absolute;
			width: 170px;
			height: 70px;
			background: url(/assets/frontend/play.png) no-repeat;
				background-color: rgba(0, 0, 0, 0);
				background-size: auto;
			background-size: 170px 70px;
			margin:auto
		}
}
    @media  screen and (max-width: 580px){
        section#Slots {
            top: 130px;
        }
    }
    main {
        background: transparent;
        border-radius: 5px;
        margin-top: 50px;
        padding-top: 324px;
        padding-bottom: 20px;
        padding-left: 185px;
        width: 100%;
    }

    section#Slots {
        border-radius: 15px;
        background-color: #FAFAFA;
    }

    section#Gira {
        margin-top: 25px;
        padding-top: 25px;
        padding-bottom: 25px;
        border-radius: 5px;
        text-align: center;
        background-color: #FFFFFF;
        color: #ef5350;
        font-size: 25px;
        cursor: pointer;
    }
    #try{
        cursor: pointer;
    }

    section#Gira:hover {
        background-color: #fff57a;
    }

    .noticeModal .modal-body {
        color: #000
    }

    section#info {
        background-color: #616161;
        padding-left: 12px;
        padding-bottom: 12px;
        border-radius: 5px;
        overflow: hidden;
        animation-duration: 1s;
        color: #BDBDBD;
        margin-top: 50px;
        margin-left: 30%;
        margin-right: 30%;
        display: none;
    }

    #slot1,
    #slot2,
    #slot3 {
        display: inline-block;
        margin-top: 5px;
        margin-left: 15px;
        margin-right: 15px;
        background-size: 150px 150px;
        width: 150px;
        height: 150px;
    }
        .a1 {
    }
        .a2 {
        background-image: url("/img/trochoi/bingo_baibien/99.png");
    }
        .a3 {
        background-image: url("/img/trochoi/bingo_baibien/999.png");
    }
        .a4 {
        background-image: url("/img/trochoi/bingo_baibien/6999.png");
    }
        .a5 {
        background-image: url("/img/trochoi/bingo_baibien/6999.png");
    }
        .a6 {
        background-image: url("/img/trochoi/bingo_baibien/14999.png");
    }
        .a7 {
        background-image: url("/img/trochoi/bingo_baibien/19999.png");
    }
      

    @media  screen and (min-width: 580px) {
        .game-list {
            width: 659px;
            height: 568px;
            background: url(/img/trochoi/bingo_baibien/khung.png) no-repeat;
            background-size: 659px 405px;
            position: relative;
        }

        main {
            background: transparent;
            border-radius: 5px;
            margin-top: 30px;
            padding-top: 246px;
            padding-bottom: 20px;
            padding-left: 111px;
            width: 100%;
        }

        #Slots {
            background: transparent !important;
        }

        #Gira {
            position: absolute;
            width: 170px;
            height: 70px;
            background: url(/assets/frontend/play.png) no-repeat;
            background-size: 170px 70px;
            left: 240px;
            bottom: 70px;
        }

        #slot1,
        #slot2,
        #slot3 {
            display: inline-block;
            margin-top: 10px;
            margin-left: 0px;
            margin-right: 19px;
            background-size: 129px 118px;
            width: 130px;
            height: 118px;
            border-radius: 6px;
        }

        .scrollauto {
            overflow: auto !important
        }

        .dropdownlist {
            position: absolute;
            left: 0;
            bottom: 120px;
            width: 100%;
            padding: 0 70px;
            text-align: center;
        }

        .pltry {
            position: relative;
            z-index: 100;
            position: absolute;
            bottom: -20px;
            left: 290px
        }
    }
</style>
<div class="container content-black">
<meta name="csrf-token" content="ukzEkN9kXqbUFz4UWIc8UqvyOe4JsLlF4lNOlOEk">
<div class="c-content-title-1 pd50">
    <h3 class="c-center c-font-uppercase c-font-bold" style="color:white">Bingo Tiệc Bãi Biển</h3>
    <div class="c-line-center c-theme-bg"></div>
</div>
<div class="col-lg-1 col-md-hidden"></div>

<div id="boxfull" class="col-lg-7 col-md-12">
    <div class="c-content-client-logos-slider-1  c-bordered" data-slider="owl">

        <div class="row-flex-safari game-list" style="margin-bottom: 40px">
    <main>
                <section id="status"></section>
                <section id="Slots">
                    <div id="slot1" class="a1"><img id="role_1" src="/assets/img/bingo/7.jpg"></div>
                    <div id="slot2" class="a1"><img id="role_2" src="/assets/img/bingo/7.jpg"></div>
                    <div id="slot3" class="a1"><img id="role_3" src="/assets/img/bingo/7.jpg"></div>
                </section>
             
                  <section id="Gira"
                        style="background: url(/assets/choi2.png) no-repeat center center;background-size: 136px 36px;" class="hover-btn">
                    </section>
           <div class='clearfix'></div>
            <section class="dropdownlist">

                    <select  name="x" id="x" class="form-control" style="width:66%;margin: auto;padding:5px 10px;border: 1px solid #144ed7;">
                                                <option value="1">Mua X1 - <?php echo number_format($ros['giatien']);?> VNĐ/ 1 Lần Quay</option>
                                                <option value="2">Mua X2 - <?php echo number_format($ros['giatien'] * 2);?> VNĐ/ 1 Lần Quay</option>
                                                <option value="3">Mua X5 - <?php echo number_format($ros['giatien'] * 5);?> VNĐ/ 1 Lần Quay</option>
                                                <option value="4">Mua X10 - <?php echo number_format($ros['giatien'] * 10);?> VNĐ/ 1 Lần Quay</option>
                                               


                    </select>
                    </select>
               </main>
               
            </div>
        </div>
    </div>
<style type="text/css">
    .list-roll-inner {
    width: 85%;
    margin-top: 30px;
    max-height: 380px;
    overflow-y: scroll;
    margin: 0 auto;
}
</style>

<div class="col-lg-3 col-md-12 col-sm-12 btn-right">
    <!-- <div class="btn-top"> -->
    <div class="text-center">           
                            <h3 class="num-play" style="color:white">Bạn còn <span><?php echo number_format($user['kimcuong']);?></span> Kim Cương.</h3>
                                          <li><a style="" class="ani-zoom btn-img deposit-btn disabled" href="/nap-tien" ><img src="https://shopchinhthuc.vn/mualuot.png" alt=""></a></li>

                                                          </a>
    </div>
    <a href="#" class="col-xs-12 thele btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill">
        <span>
            <i class="la la-cloud-upload"></i>
            <span>Thể Lệ</span>
        </span>
    </a>
    <a href="/html/lichsuquay" class="col-xs-12 btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill">
        <span>
            <i class="la la-cloud-upload"></i>
            <span>Lịch sử quay trúng vật phẩm</span>
        </span>
    </a>
    <a href="/html/kimcuong" class="col-xs-12 btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill">
        <span>
            <i class="la la-cloud-upload"></i>
            <span>Rút vật phẩm</span>
        </span>
    </a>
    <div class="text-center"> &nbsp</div>
    <!-- </div> -->
</div>
<div class="col-lg-2 col-md-hidden"></div>
<div class="modal fade" id="theleModal" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thể Lệ</h4>
            </div>

            <div class="modal-body" style="font-family: helvetica, arial, sans-serif;">
                <b style="color:black">                         VÒNG QUAY BINGO <?php echo $kun->compact_number($ros['giatien']);?> <br>
Các bạn có thể mua lượt quay với số nhân giá rẻ<br>
Quay 1 Phát Với X1 Chỉ Tốn <?php echo $kun->compact_number($ros['giatien']);?> <br>

-----------------------------------------------------------------<br>
------------------------------------------------------------------<br>
Nếu Quay Trúng 5 Ô Giống Nhau Các Bạn Sẽ Được số kim cương đó<br>
Ví Dụ : Bạn Đang Mua X1 và Quay Trúng 5 Hình Giống Nhau Sẽ Được  <br>
Và Số Kim Cương Bạn Trúng Ở Thời Điểm Đó Là 500Kc Thì Sẽ Được 500 Kim Cương<br>
------------------------------------------------------------------<br>
------------------------------------------------------------------<br>
Nếu Quay các Không Giống Nhau Các Bạn Sẽ Không nhận được kim cương<br> <br>

Quay Ngay Để Trúng Các Phần Quà Hấp Dẫn Từ BQT <br>

------------CHÚC CÁC BẠN MAY MẮN------------<br> </b>            </div>
            <div class="modal-footer">
                <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $(".thele").on("click", function(){
            $("#theleModal").modal('show');
        })
        $(".uytin").on("click", function(){
            $("#uytinModal").modal('show');
        })
        $(".luotquay").on("click", function(){
            $("#luotquayModal").modal('show');
        })
    });
</script>
        <?php
        for($i=1; $i <= 7; $i++) { 
echo '<img style="display: none;" src="/assets/img/bingo/'.$i.'.jpg">';            
        }
?>


<script type="text/javascript">
$( document ).ready(function() {
});




    $('#Gira').click(function (){

    document.getElementById("Gira").disabled = true;
   

  $.ajax({ 
        type: 'post', 
        dataType: "JSON",
        url: '/system/bingo', 
        data: {
              x: $("#x").val()
        }, 
        success: function (json) {

            if(json.status == 3) {
     swal("Lỗi!", "Vui lòng đăng nhập để quay!", "error");   
         document.getElementById("Gira").disabled = false;
            }else if(json.status == 4) {
     swal("Lỗi!", "Bạn Không Đủ Tiền Trong Tài Khoản Vui Lòng Nạp Thêm!", "error");  
         document.getElementById("Gira").disabled = false;
            }else if(json.status == 1) {

         document.getElementById("Gira").disabled = true;

                var data = json.data;

                console.log("OK");

                 loop_wait(data.role_1, data.role_2, data.role_3, data.role_4, data.role_5, json.msg);

            }else {
     swal("Lỗi!", "Lỗi hệ thống!", "error");                
            }

    }
});

    });


function loop_wait(role_1, role_2, role_3, role_4, role_5, msg) {

    var items = [1,2,3,4,5,6,7];  // name of img random images

    var stop_bingo_1 = 50; // 5s
    var stop_bingo_2 = 55; // 5s
    var stop_bingo_3 = 60; // 5s
    var stop_bingo_4 = 65; // 5s
    var stop_bingo_5 = 70; // 6s


// Bingo 1
for (let i=1; i<=stop_bingo_1; i++) {setTimeout( function timer(){
 var item_1 = items[Math.floor(Math.random() * items.length)];
  change_img("role_1", item_1);
 if(i == stop_bingo_1) {
  change_img("role_1", role_1); 
  return
 }
 }, i*40 );}

// Bingo 2
for (let i=1; i<=stop_bingo_2; i++) {setTimeout( function timer(){
 var item_2 = items[Math.floor(Math.random() * items.length)];
 change_img("role_2", item_2);
  if(i == stop_bingo_2) {
  change_img("role_2", role_2); 
  return
 }
 }, i*40 );}

// Bingo 3
for (let i=1; i<=stop_bingo_3; i++) {setTimeout( function timer(){
 var item_3 = items[Math.floor(Math.random() * items.length)];
 change_img("role_3", item_3);
  if(i == stop_bingo_3) {
  change_img("role_3", role_3);
  return
 }
 }, i*40 );}

// Bingo 4
for (let i=1; i<=stop_bingo_4; i++) {setTimeout( function timer(){
 var item_4 = items[Math.floor(Math.random() * items.length)];
 change_img("role_4", item_4);
  if(i == stop_bingo_4) {
  change_img("role_4", role_4);
  return
 }
 }, i*40 );}

// Bingo 5
for (let i=1; i<=stop_bingo_5; i++) {setTimeout( function timer(){
 var item_5 = items[Math.floor(Math.random() * items.length)];
 change_img("role_5", item_5);
  if(i == stop_bingo_5) {
  change_img("role_5", role_5);
  return
 }
 }, i*40 );}


setTimeout( function show_ketqua(){
     swal("Chúc Mừng", msg, "success"); 
         document.getElementById("Gira").disabled = false;
         reload_money();
 }, 3200 );



}

function change_img(id, img_name) {
        roll = document.getElementById(id);
        roll.src = "";
        roll.src = '/assets/img/bingo/'+img_name+'.jpg';
}



</script>

<!-- TRY -->

<script type="text/javascript">
    $(document).ready(function(){
        $(".thele").on("click", function(){
            $("#theleModal").modal('show');
        })
        $(".uytin").on("click", function(){
            $("#uytinModal").modal('show');
        })
        $(".luotquay").on("click", function(){
            $("#luotquayModal").modal('show');
        })
    });
</script>
        <?php
        for($i=1; $i <= 7; $i++) { 
echo '<img style="display: none;" src="/assets/img/bingo/'.$i.'.jpg">';            
        }
?>


<script type="text/javascript">
$( document ).ready(function() {
});




    $('#try').click(function (){

    document.getElementById("try").disabled = true;
   

  $.ajax({ 
        type: 'post', 
        dataType: "JSON",
        url: '/system/bingochoithu', 
        data: {}, 
        success: function (json) {

            if(json.status == 3) {
     swal("Lỗi!", "Vui lòng đăng nhập để quay!", "error");   
         document.getElementById("try").disabled = false;
            }else if(json.status == 4) {
     swal("Lỗi!", "Bạn Không Đủ Tiền Trong Tài Khoản Vui Lòng Nạp Thêm!", "error");  
         document.getElementById("try").disabled = false;
            }else if(json.status == 1) {

         document.getElementById("try").disabled = true;

                var data = json.data;

                console.log("OK");

                 loop_wait(data.role_1, data.role_2, data.role_3, data.role_4, data.role_5, json.msg);

            }else {
     swal("Lỗi!", "Lỗi hệ thống!", "error");                
            }

    }
});

    });


function loop_wait(role_1, role_2, role_3, role_4, role_5, msg) {

    var items = [1,2,3,4,5,6,7];  // name of img random images

    var stop_bingo_1 = 50; // 5s
    var stop_bingo_2 = 55; // 5s
    var stop_bingo_3 = 60; // 5s
    var stop_bingo_4 = 65; // 5s
    var stop_bingo_5 = 70; // 6s


// Bingo 1
for (let i=1; i<=stop_bingo_1; i++) {setTimeout( function timer(){
 var item_1 = items[Math.floor(Math.random() * items.length)];
  change_img("role_1", item_1);
 if(i == stop_bingo_1) {
  change_img("role_1", role_1); 
  return
 }
 }, i*40 );}

// Bingo 2
for (let i=1; i<=stop_bingo_2; i++) {setTimeout( function timer(){
 var item_2 = items[Math.floor(Math.random() * items.length)];
 change_img("role_2", item_2);
  if(i == stop_bingo_2) {
  change_img("role_2", role_2); 
  return
 }
 }, i*40 );}

// Bingo 3
for (let i=1; i<=stop_bingo_3; i++) {setTimeout( function timer(){
 var item_3 = items[Math.floor(Math.random() * items.length)];
 change_img("role_3", item_3);
  if(i == stop_bingo_3) {
  change_img("role_3", role_3);
  return
 }
 }, i*40 );}

// Bingo 4
for (let i=1; i<=stop_bingo_4; i++) {setTimeout( function timer(){
 var item_4 = items[Math.floor(Math.random() * items.length)];
 change_img("role_4", item_4);
  if(i == stop_bingo_4) {
  change_img("role_4", role_4);
  return
 }
 }, i*40 );}

// Bingo 5
for (let i=1; i<=stop_bingo_5; i++) {setTimeout( function timer(){
 var item_5 = items[Math.floor(Math.random() * items.length)];
 change_img("role_5", item_5);
  if(i == stop_bingo_5) {
  change_img("role_5", role_5);
  return
 }
 }, i*40 );}


setTimeout( function show_ketqua(){
     swal("Chúc Mừng", msg, "success"); 
         document.getElementById("try").disabled = false;
         reload_money();
 }, 3200 );



}

function change_img(id, img_name) {
        roll = document.getElementById(id);
        roll.src = "";
        roll.src = '/assets/img/bingo/'+img_name+'.jpg';
}



</script>