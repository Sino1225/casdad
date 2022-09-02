<?php
defined('KUNKEYPR') or exit('Restricted Access');



?>




<?php

if(isset($_POST['muangay'])) {


    $luotghep = $_POST["luotghep"];
    $tien = 1000 * $luotghep;
    
    $tienuser = $user['money'];

    
    
    if($luotghep){
        if( $tienuser >= $tien ){
    
        
        
    $cmd = "UPDATE `users` SET
       
       `luotquay` = luotquay + $luotghep, `money` = money - $tien Where `username` = '".$user['username']."'
       ";
    
        mysqli_query($kun->connect_db(), $cmd);
    
    
        echo "<script>swal('Thông Báo!', 'Bạn Đã Mua Thành Công $luotghep Lượt Mở Quà!', 'success');</script>";
        echo '<meta http-equiv=refresh content="1; URL=">';
        }else{
            echo "<script>swal('Thông Báo!', 'Bạn Không Đủ Tiền Để Mua $luotghep Lượt Mở Quà', 'error');</script>";
        }
     }else{
         echo "<script>swal('Thông Báo!', 'Vui Lòng Nhập Đầy Đủ Thông Tin', 'error');</script>";
     
     }
    
    
}

?>
<?php

if(isset($_POST['muakchong'])) {


   

    $tienuser = $user['money'];
    $kimcuonghong = 1000;
    
    
        if( $tienuser >= 20000 ){
    
        
        
    $cmd = "UPDATE `users` SET
       
       `kimcuonghong` = kimcuonghong + $kimcuonghong, `money` = money - 20000 Where `username` = '".$user['username']."'
       ";
    
        mysqli_query($kun->connect_db(), $cmd);
    
    
        ?>
        <script>
    swal({
  title: "Thông Báo?",
  text: "Bạn Có Muốn Mua 1,000 Kim Cương Hồng Với Giá 20,000 VNĐ Hay Không?",
  icon: "warning",
  buttons: true,
  
})
.then((willDelete) => {
  if (willDelete) {
    swal("Thông Báo","Bạn Đã Mua 1,000 Kim Cương Hồng Thành Công!", {
      icon: "success",
    });
  } 
});
</script>
<?php
        
        }else{
            ?>
            <script>
    swal({
  title: "Thông Báo?",
  text: "Bạn Có Muốn Mua 1,000 Kim Cương Hồng Với Giá 20,000 VNĐ Hay Không?",
  icon: "warning",
  buttons: true,
  
})
.then((willDelete) => {
  if (willDelete) {
    swal("Thông Báo","Bạn Không Đủ Tiền Để Mua Kim Cương Hồng", {
      icon: "error",
    });
  } 
});
</script>

<?php
        }
    
    
}

?>
<?php //echo $kun->compact_string('kun', 5, '***');?>

<div class="c-layout-page">
	<!-- BEGIN: PAGE CONTENT -->
	    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all" rel="stylesheet" type="text/css">
        <link href="/assets/vongquay/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/vongquay/css/style.css" rel="stylesheet" type="text/css">
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
    <h3 class="c-center c-font-uppercase c-font-bold" style="color:white">Hộp Quà Kim Cương Miễn Phí ( Live )</h3>
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
                          
                           <p> <img style="margin-top: -15%; " src="https://i.upanh.org/2021/06/22/204405024_1870213879809584_6780714706657052188_n.gif_nc_cat109fallback1ccb1-3_nc_sid041f46_nc_ohcXqJUcKFWKaUAX--rzCr_nc_htcdn.fbsbx.gif" style="heig
                           </p>
                        </div>"

                        <div class="text-center">
                            <h3 class="num-play" style="color:white">Bạn còn <span><?php echo $user['luotquay']; ?></span> lượt mở.</h3>

                           <o id="result"></o>
				    
                <input type="hidden" name="_token" value="7XaPFC8y9azw47tITjOrrdCQk2u6QL0ATFV0Eizj">    
                            <div style="position:relative;z-index:100;margin:auto;margin-top:20px"><button class="btn c-btn-yellow c-btn-circle c-btn-uppercase c-btn-bold btn-lg" type="submit" id="submit">Mở Ngay</div>
                            
                            


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
<div class="col-lg-6 col-md-12 list-roll">
    <div class="btn-top">
        <a href="#" class="thele btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill">
            <span>
                <i class="la la-cloud-upload"></i>
                <span>Thể Lệ</span>
            </span>
        </a>
        <a href="#" class="uytin btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill">
            <span>
                <i class="la la-cloud-upload"></i>
                <span>Uy Tín</span>
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
                <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thể Lệ</h4>
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


        <div class="c-content-title-1" style="margin: 0 auto">
        <h3 class="c-center c-font-uppercase c-font-bold">LƯỢT QUAY GẦN ĐÂY</h3>
    </div>
    <div class="list-roll-inner">

        <table cellpadding="10" class="table table-striped">
            <tbody>
                <tr>
                    <th>Tài khoản</th>
                    <th>Giải thưởng</th>
                    <th>Thời gian</th>
                </tr>
            </tbody>
            <tbody>
            <?php 
$res = mysqli_query($kun->connect_db(), "SELECT * FROM `lichsumohom` ORDER BY `time` DESC LIMIT 0, 50");
while ($row = mysqli_fetch_array($res)) {
    ?> 
                                <tr>
                    <td><?php echo $row['taikhoan']; ?></td>
                    <th><?php echo $row['kimcuong']; ?> Kim CƯơng Hồng</th>
                    <th><?php echo date('d/m H:i', $row['time']);?></th>
                </tr>
                <?php } ?>  
                            </tbody>
        </table>
      
    </div>
   
</div>
</div>
</div>
</div>
<div class="container">
	<div class="text-center" style="margin: 15px; font-weight: bold; font-size: 20px;">Mua Lượt </div>
			<table class="table table-responsive">
				<tbody>
					<tr>
						<th class="text-center">Mua Lượt Mở Quà</th>
						<th class="text-center">Mua Kim Cương Hồng</th>
					
					</tr>
					<tr>
						<td class="text-center"> Số Lượt Mở Quà Muốn Mua:
                        <br>
                        
                <form method="POST">        
<input type="number" class="alert" style="color: #fff; background: rgb(0 0 0 / 68%);" name="luotghep"  id="thanhtoan" onchange="thanhtoanUpdate()" maxlength="16"  placeholder="Lượt Ghép Muốn Mua" >

<br>
<button class="alert" style="color: #fff; background: rgb(0 0 0 / 68%);"  >Mua <span id="thanhtoansx"></span> Lượt Với Giá <span id="tongtiensx"></span> VNĐ</button><br></button><br>
<button type="submit" class="btn c-btn-yellow c-btn-circle c-btn-uppercase c-btn-bold btn-lg" name="muangay"> Mua Ngay</button>
                </form>
                        <script>
            setInterval(function(){

                

              var thanhtoan = $("#thanhtoan").val();
              let tongtien = 1000 * thanhtoan;

              $("#tongtiensx").html(tongtien);
              $("#thanhtoansx").html(thanhtoan);
            }, 10);
          </script>
						<td class="text-center">1,000 Kim Cương Hồng = 20,000VNĐ<br>
                        <form method="POST">
<button type="submit" class="btn c-btn-yellow c-btn-circle c-btn-uppercase c-btn-bold btn-lg" data-toggle="modal" name="muakchong"> Mua Ngay</button>
            
                </form></td>
						
					</tr>
				</tbody>
			</table>
	</div>
    <br>
    <br>

    <div class="modal fade" id="noticeModal" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thông báo</h4>
                </div>

                <div class="modal-body content-popup" style="font-family: helvetica, arial, sans-serif;">
                   àdsafdsafdsaf
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    
    <script src="/assets/Scripts/toastr/toastr.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

    $('#submit').click(function() {
        document.getElementById("submit").disabled = true;
        document.getElementById('submit').innerHTML = "Đang mở quà";

    $.ajax({
        type: "POST",
        url: '/system/mohom',
        data: {
            
        },
        success: function(result)
        {
                    document.getElementById("submit").disabled = false;
            document.getElementById('submit').innerHTML = "Mở Ngay";

           $("#result").html(result);
        }
    });

});

});

$(document).on('keypress',function(e) {
    if(e.which == 13) {
        $('#submit').click();
    }
});

</script>