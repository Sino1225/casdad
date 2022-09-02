<?php
defined('KUNKEYPR') or exit('Restricted Access');
$ros = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `setting_bingo`"));
?>
<div class="c-layout-page">

<style>

    .btn + .btn{
        margin-left: 0!important;
    }

    .btn-right .btn{
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

    .btn-right .btn:hover{
        background-color: #ff8db2;
        border: 2px solid #ff8db2;
    }
    .square{
        width: 100%;
    }
    #squaredesktop .box{
        min-width: 40px;
        min-height: 40px;
        /*background-color: #ccc;*/
        padding: 10px;
    }
    #squaremobile .box{
        padding: 5px;
    }
    .box img.active{

          box-shadow:
            0 0  5px #fff, 
            0 0  10px #fff, 
            0 0  15px #fff, 
            0 0  20px #49fff7, 
            0 0  35px #49fff7
    }
    .outer-btn{
        width: 100%
    }
    .outer-btn:hover{
        opacity: 0.7
    }
    #squaremobile .outer-btn{
        margin-bottom: -50px;
    }
    .nopadding{
        padding: 0;
    }
</style>
<style>
@import  url('https://fonts.googleapis.com/css?family=Roboto');
@import  url('https://fonts.googleapis.com/css?family=Roboto+Mono');
a{
    color: #283593;
    text-decoration: none;
}
h3{
    margin-top: 12px;
}
*{
    margin:0px;
}
.game-list{
    width: 580px;
    margin: 0 auto;
}
@media  screen and (max-width: 580px) {
    .game-list{
        width: 320px;
    }
    #slot1, #slot2, #slot3{
        margin-left: 68px!important;
    }
}

main{
    border-radius: 5px;
    background-color: #EF5350;
    margin-top: 30px;
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 15px;
    padding-right: 15px;
    /*margin-left: calc((100% - 580px) / 2);*/  
    width: 100%;
}
section#Slots{
    border-radius: 15px;
    background-color: #FAFAFA;
}
section#Gira{
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
section#Gira:hover{
    background-color: #fff57a;
}
section#info{
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
#slot1, #slot2, #slot3{
    display: inline-block;
    margin-top: 5px;
    margin-left: 15px;
    margin-right: 15px;
    background-size: 150px 150px;
    width: 150px;
    height: 150px;
}
        .a1{
    }
        .a2{
        background-image: url("https://shopnamlay.com/upload-usr/images/zwrut1xahs_1599651501.gif");
    }
        .a3{
        background-image: url("https://shopnamlay.com/upload-usr/images/csz4poknpq_1599651513.gif");
    }
        .a4{
        background-image: url("https://shopnamlay.com/upload-usr/images/uesttmtysc_1599651527.gif");
    }
        .a5{
        background-image: url("https://shopnamlay.com/upload-usr/images/isbcukqwnj_1599651537.gif");
    }
        .a6{
        background-image: url("https://shopnamlay.com/upload-usr/images/7kehdvq7td_1599649364.gif");
    }
.num-play-try {
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
/*.a1{
    background-image: url("/res/tiles/seven.png");
}
.a2{
    background-image: url("/res/tiles/cherries.png");
}
.a3{
    background-image: url("/res/tiles/club.png");
}
.a4{
    background-image: url("/res/tiles/diamond.png");
}
.a5{
    background-image: url("/res/tiles/heart.png");
}
.a6{
    background-image: url("/res/tiles/spade.png");
}
.a7{
    background-image: url("/res/tiles/joker.png");
}*/
</style>
<meta name="csrf-token" content="ukzEkN9kXqbUFz4UWIc8UqvyOe4JsLlF4lNOlOEk">
<div class="c-content-title-1 pd50">
    <h3 class="c-center c-font-uppercase c-font-bold" style="color:white">Vòng Quay Bingo Tết Trung thu 20k</h3>
    <div class="c-line-center c-theme-bg"></div>
</div>
<div class="col-lg-1 col-md-hidden"></div>
<div id="boxfull" class="col-lg-6 col-md-12">
    <div class="c-content-client-logos-slider-1  c-bordered" data-slider="owl">

        <div class="row-flex-safari game-list" style="margin-bottom: 40px">
            <main>
                <section id="status"></section>
                <section id="Slots">
                    <div id="slot1" class="a1"><img id="role_1" style="width: 100%;" src="/assets/img/bingo4/6.gif"></div>
                    <div id="slot2" class="a1"><img id="role_2" style="width: 100%;" src="/assets/img/bingo4/6.gif"></div>
                    <div id="slot3" class="a1"><img id="role_3" style="width: 100%;" src="/assets/img/bingo4/6.gif"></div>
                    </section>

                  <section id="Gira">

                    <img src="https://shopchinhthuc.vn/bingo/KrXulXHcdj_1593765231.gif" id="quay">

                </section>

   


            </main>
        </div>
    </div>
</div>
            
<div class="col-lg-2 col-md-hidden"></div>
<div class="col-lg-3 col-md-12 col-sm-12 btn-right">
    <!-- <div class="btn-top"> -->
    <div class="text-center">           
        <h3 class="num-play" style="" >còn <span><?php echo number_format($user['kimcuong']);?> Kim Cương</h3>

    </a>
    </div>

    <a href="#" class="col-xs-12 thele btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill">
        <span>
            <i class="la la-cloud-upload"></i>
            <span>Thể Lệ</span>
        </span>
    </a>

        <a href="/html/kimcuong" class="col-xs-12 btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill">
        <span></span>
            <i class="la la-cloud-upload"></i>
            <span>Rút kim cương</span>
        </span>
    </a>
        <a href="/html/lichsuquay" class="col-xs-12 btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill">
        <span>
            <i class="la la-cloud-upload"></i>
            <span>Lịch sử quay</span>
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

            <div class="modal-body" style="font-family: helvetica, arial, sans-serif;color:black">
                <p>KHI BẠN CÓ ĐỦ <?php echo $kun->compact_number($ros['giatien']);?> BẠN CHỈ CẦN NHẤP QUAY LÀ NÓ QUAY

Khi 3 ô quà trùng nhau là bạn sẽ trúng giải , 
Khi 3 ô quà lệnh nhau bạn sẽ ngẫu nhiên nhận được mức kim cương nhất định



</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
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
<div class="modal fade" id="uytinModal" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Uy Tín</h4>
            </div>

            <div class="modal-body" style="font-family: helvetica, arial, sans-serif;">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
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
        for($i=1; $i <= 6; $i++) { 
echo '<img style="display: none;" src="/assets/img/bingo4/'.$i.'.gif">';            
        }
?>


<script type="text/javascript">
$( document ).ready(function() {
});




    $('#quay').click(function (){

    document.getElementById("quay").disabled = true;
    document.getElementById("quay").innerHTML = "Đang Kiểm Tra!";

  $.ajax({ 
        type: 'post', 
        dataType: "JSON",
        url: '/system/bingo4', 
        data: {}, 
        success: function (json) {

            if(json.status == 3) {
     swal("Lỗi!", "Vui lòng đăng nhập để quay!", "error");   
         document.getElementById("quay").disabled = false;
         document.getElementById("quay").innerHTML = "Quay";    
            }else if(json.status == 4) {
     swal("Lỗi!", "Bạn Không Đủ Tiền Trong Tài Khoản Vui Lòng Nạp Thêm!", "error");  
         document.getElementById("quay").disabled = false;
         document.getElementById("quay").innerHTML = "Quay!";
            }else if(json.status == 1) {

         document.getElementById("quay").disabled = true;
         document.getElementById("quay").innerHTML = "Đang Quay";

                var data = json.data;

                console.log("OK");

                 loop_wait(data.role_1, data.role_2, data.role_3, json.msg);

            }else {
     swal("Lỗi!", "Lỗi hệ thống!", "error");                
            }

    }
});

    });


function loop_wait(role_1, role_2, role_3, msg) {

    var items = [1,2,3,4,5,6];  // name of img random images

    var stop_bingo_1 = 50; // 10s
    var stop_bingo_2 = 55; // 13s
    var stop_bingo_3 = 60; // 16s


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


setTimeout( function show_ketqua(){
     swal("Thành Công!", msg, "success"); 
         document.getElementById("quay").disabled = false;
         document.getElementById("quay").innerHTML = "Quay";   
         reload_money();
 }, 3200 );



}

function change_img(id, img_name) {
        roll = document.getElementById(id);
        roll.src = "";
        roll.src = '/assets/img/bingo4/'+img_name+'.gif';
}



</script>