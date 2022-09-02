<?php
defined('KUNKEYPR') or exit('Restricted Access');
$row = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `vongquay_kimcuong` WHERE `id`='".$_GET['id']."' AND `status`='true'"));
if(!$row['id']) die("<center><h1> Tìm Thấy Vòng Quay!</center>");


?>

<?php //echo $kun->compact_string('kun', 5, '***');?>
<div class="container content-black">
<div class="c-layout-page">
<style>
    .ui-autocomplete {
            max-height: 500px;
            overflow-y: auto;
            overflow-x: hidden;
        }

        .input-group-addon {
            background-color: #FAFAFA;
        }

        .input-group .input-group-btn > .btn, .input-group .input-group-addon {
            background-color: #FAFAFA;
        }

        .modal {
            text-align: center;
        }

        @media        screen and (min-width: 768px) {
            .modal:before {
                display: inline-block;
                vertical-align: middle;
                content: " ";
                height: 100%;
            }
        }

        @media (min-width: 992px) and (max-width: 1200px) {
            .c-layout-header-fixed.c-layout-header-topbar .c-layout-page {
                margin-top: 245px;
            }
        }

        @media        screen and (max-width: 767px) {
            .modal-dialog:before {
                margin-top: 75px;
                display: inline-block;
                vertical-align: middle;
                content: " ";
                height: 100%;
            }

            .modal-dialog {
                width: 100%;

            }

            .modal-content {
                margin-right: 20px;
            }
        }

        .modal-dialog {
            display: inline-block;
            text-align: left;


        }

        .mfp-wrap {
            z-index: 20000 !important;
        }

        .c-content-overlay .c-overlay-wrapper {
            z-index: 6;
        }

        .z7 {
            z-index: 7 !important;
        }





    .nickdaquay{position:fixed;
    z-index:9999;
    bottom:170px;
    right:0px;
    max-width: 15%;
    min-width: 120px;
    min-height: 120px;}
    .anhbymanh{position:fixed;
    z-index:9999;
    bottom:80px;
    left:0px;
    max-width: 29%;
    min-height: 20px;}
    .napthebymanh{position:fixed;
    z-index:9999;
    bottom:100px;
    right:0px;
    max-width: 15%;
    min-height: 40px;
    min-width: 100px;
    }
    .flex-list .item {
        width: 50%;
        padding: 0 30px;
    }
        .rotation {
        text-align: center;
    }
    section {
        padding: 30px 0;
    }
        .rotation .play-spin {
        width: 100%;
        position: relative;
        margin: 0 auto;
    }
    .rotation .play-spin .ani-zoom {
        position: absolute;
        display: block;
        width: 110px;
        z-index: 5;
        top: calc(50% - 70px);
        left: calc(50% - 55px);
    }
    .ani-zoom {
        -webkit-transition: all .2s linear;
        -moz-transition: all .2s linear;
        -ms-transition: all .2s linear;
        -o-transition: all .2s linear;
        transition: all .2s linear;
    }
    img {
        max-width: 100%;
    }
    img {
        vertical-align: middle;
    }
    img {
        border: 0;
    }
    .text-center {
        text-align: center;
    }
    li{
        list-style: none;
    }

    .form-notication-bottom {
    position: fixed;
    bottom: 20px;
    left: 10px;
    width: 330px;
    height: auto;
    background-color: #fff;
    border-radius: 40px;
    z-index: 1;
    box-shadow: 2px 2px 10px 2px hsla(0,0%,60%,.2);
    animation: example 8s infinite;
    max-width: calc(90% - 10px);
    overflow: hidden;
}


@keyframes    example{0%{bottom: -100px;}25%{bottom: 20px;} 50%{bottom: 20px;}100%{bottom: -100px;}}

li {
    list-style-type: none
}
.history {
    width: 40% !important;
}
@media    only screen and (max-width: 800px) {
    .c-content-client-logos-slider-1 .item {
        width: 90%;
    }

    #rotate-play {
        width: 100% !important;
        max-width: 100% !important;
    }
    .rotation .play-spin .ani-zoom img {
        width: 85% !important;
    }
    .history {
        width: 100% !important;
    }
}
.c-content-box.c-size-md{
    padding: 0
}
.pd50{
    padding-top: 50px;
}
.list-roll{
    margin-top: 30px;
    margin-bottom: 30px;
}

@media    screen and (min-width: 800px) {
    .list-roll-inner{
        width: 85%;
        margin-top: 30px;
        max-height: 400px;
        overflow-y: scroll;
        margin:0 auto;
    }
}

@media    screen and (min-width: 1600px) {
    .list-roll-inner{
        width: 85%;
        margin-top: 30px;
        max-height: 600px;
        overflow-y: scroll;
        margin:0 auto;
    }
}
.btn-top{
    display: flex;
    justify-content: center;
    margin-bottom: 30px
}
.btn-top .btn{
    margin-left: 15px;
    margin-right: 15px;
    padding: 6px 20px;
}
.btn-top span{
    font-size: 25px;
}
@media    screen and (max-width: 640px) {
    .btn-top span{
        font-size: 17px;
    }
}
</style>

<div class="c-content-title-1 pd50">
    <h3 class="c-center c-font-uppercase c-font-bold" style="color:white"><?php echo $row['name'];?></h3>
    <div class="c-line-center c-theme-bg"></div>
</div>
<input type="hidden" id="document" value="<?php echo $_GET['id'];?>">
<form id="form"></form>
<div class="col-lg-6 col-md-12">
    <div class="c-content-box c-size-md ">
        <!-- <div class="container"> -->
            <div class="c-content-client-logos-slider-1  c-bordered" data-slider="owl">

                <div class="row row-flex-safari game-list" style="display: flex; flex-wrap: wrap">
                    <div class=" item-left">

                      <section class="rotation">
                        <div class="play-spin">
                            <a class="ani-zoom" id="start"><img src="https://quanlyshop.vip/upload/doanhmuc/1620764882367636.png" alt="Play Center"></a>
                            <img style="width: 70%;max-width: 70%;opacity: 1;" src="<?php echo $kun->vongquaykimcuong_image($_GET['id'], 'image');?>" id="rotate">
                        </div>
                        <div class="text-center">

                            
				<div style="position:relative;z-index:100;margin:auto;margin-top:20px"><a class="num-play-try btn btn-primary" id="starttest">Chơi thử</a></div>


                          </div>
                      </section>
                    </div>
                </div>
  <div class="table-body scrollbar-inner">
                  <table class="table table-bordered">
                     <tbody></tbody>
                  </table>
                </div>
            </div>
        <!-- </div> -->
    </div>
</div>
<div class="col-sm-12 col-md-5">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <img class="gold" src="https://i.upanh.org/2021/06/22/204405024_1870213879809584_6780714706657052188_n.gif_nc_cat109fallback1ccb1-3_nc_sid041f46_nc_ohcXqJUcKFWKaUAX--rzCr_nc_htcdn.fbsbx.gif">
                                <h3 class="gold-count">Trong Rương Kho Báu Đang Có <span>19,999 Kim Cương</span></h3>
                            </div>
<div class="col-lg-6 col-md-12 list-roll">
        <div class="btn-top">
            <a class="thele btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill">
                <span>
                    <i class="la la-cloud-upload"></i>
                    <span>Thể Lệ</span>
                </span>
            </a>
             <a class="thele btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill">
                <span>
                    <i class="la la-cloud-upload"></i>
                    <span>Tỉ Lệ Vòng Quay</span>
                </span>
            </a>
            <a href="/user/withdrawruby/2" class="btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill">
                <span>
                    <i class="la la-cloud-upload"></i>
                    <span>Rút Kim Cương</span>
                </span>
            </a>
        </div>

        <div class="modal fade" id="theleModal" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title"
                            style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thể Lệ
                        </h4>
                    </div>

                    <div class="modal-body" style="font-family: helvetica, arial, sans-serif;">
                        
                        <p><span style="color:#000000"><strong><p><span style="color:#000000"><strong>1 Lần Quay <?php echo $row['giatien'];?>đ - KHI BẠN C&Oacute; ĐỦ <?php echo $row['giatien'];?>đ BẠN CHỈ CẦN NHẤP QUAY L&Agrave; N&Oacute; QUAY</strong></span></p></strong></span></p>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button"
                            class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="uytinModal" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title"
                            style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thể Lệ
                        </h4>
                    </div>

                    <div class="modal-body" style="font-family: helvetica, arial, sans-serif;">
                        
                        <p><span style="color:#000000"><strong><p><span style="color:#000000"><strong>1 Lần Quay <?php echo $row['giatien'];?>đ - KHI BẠN C&Oacute; ĐỦ <?php echo $row['giatien'];?>đ BẠN CHỈ CẦN NHẤP QUAY L&Agrave; N&Oacute; QUAY</strong></span></p></strong></span></p>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button"
                            class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function () {
                $(".thele").on("click", function () {
                    $("#theleModal").modal('show');
                })
                $(".uytin").on("click", function () {
                    $("#uytinModal").modal('show');
                })
            });
        </script>

    <style type="text/css">
        #start-played1{
            cursor: pointer;
        }
        .c-content-client-logos-slider-1 .item{
            width: 85%;
        }
    </style>
<script src="/assets/Scripts/client_0x2165x1.js"></script>

    <input type="hidden" id="numgift" value="8">
<script type="text/javascript">
$( document ).ready(function() {

    var bRotate = false;

   function rotateFn(angles, txt, type){
        bRotate = !bRotate;
        $('#rotate').stopRotate();
        $('#rotate').rotate({
            angle:0,
            animateTo:angles+1800,
            duration:11000, // tốc độ quay tay
            callback:function (){
               var awar = txt;

		swal("Kết Quả Chơi Thật", awar, type);
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
        url: '/system/quay', 
        data: {
        	csrf: $('#csrf').val()
        }, 
        success: function (json) {

        	if(json.status == 3) {
	 swal("Lỗi!", "Vui lòng đăng nhập để sử dụng dịch vụ!", "error");    		
        	}else if(json.status == 4) {
	 swal("Lỗi!", "Bạn Không Đủ Tiền!", "error");  
        	}else if(json.status == 1) {
        		if(json.item > 0 && json.item < 9) {
   rotateFn(json.location, json.msg, "success");    
}else {
	swal("Lỗi!", "Lỗi hệ thống!", "error"); 
}

        	}else {
	 swal("Lỗi!", "Lỗi hệ thống!", "error");         		
        	}

	}
});

    });

});
</script>


<!---Test--->
  <style type="text/css">
        #starttest-played1{
            cursor: pointer;
        }
        .c-content-client-logos-slider-1 .item{
            width: 85%;
        }
    </style>
<script type="text/javascript">
$( document ).ready(function() {

    var bRotate = false;

   function rotateFn(angles, txt, type){
        bRotate = !bRotate;
        $('#rotate').stopRotate();
        $('#rotate').rotate({
            angle:0,
            animateTo:angles+1800,
            duration:11000, // tốc độ quay tay
            callback:function (){
               var awar = txt;

		swal("Kết Quả Chơi Thử", awar, type);
            reload_money(); 
                bRotate = !bRotate;
            }
        })
    }



    $('#starttest').click(function (){

        if(bRotate)return;



  $.ajax({ 
        type: 'post', 
        dataType: "JSON",
        url: '/system/choithu', 
        data: {
        	csrf: $('#csrf').val()
        }, 
        success: function (json) {

        if(json.status == 1) {
        		if(json.item > 0 && json.item < 9) {
   rotateFn(json.location, json.msg, "success");    
}

        	}else {
	 swal("Lỗi!", "Lỗi hệ thống!", "error");         		
        	}

	}
});

    });

});
</script>
</div>
</div>
</div>
</div>