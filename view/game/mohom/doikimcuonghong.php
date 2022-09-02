<?php

//lấy tỷ lệ vòng quay bingo





if(isset($_POST['update'])) {


$kimcuonghong = $user['kimcuonghong'];
$luotghep = $user['luotghep'];
$kimcuong = rand(20,120);
$kimcuongthieu = 1000 - $user['kimcuonghong'];

if(!$_SESSION['token']) {
    die("<script>swal('Lỗi', 'Bạn Cần Đăng Nhập', 'error');setTimeout(function(){location.href='/login.html';}, 1500);</script>");
}

    if( $kimcuonghong >= 1000 ){
        if($luotghep >= 1){

    
    
$cmd = "UPDATE `users` SET
   
   `luotghep` = luotghep - 1, `kimcuonghong` = kimcuonghong - 1000, `kimcuong` = kimcuong + $kimcuong Where `username` = '".$user['username']."'
   ";

    mysqli_query($kun->connect_db(), $cmd);


    echo "<script>swal('Thông Báo!', 'Bạn Ghép Được ".$kimcuong." Kim Cương!', 'success');</script>";
    echo '<meta http-equiv=refresh content="1; URL=">';
 }else{
     echo "<script>swal('Thông Báo!', 'Bạn Còn Thiếu 1 Lượt Ghép Vui Lòng Mua Thêm!', 'error');</script>";
  }


    }else{
        echo "<script>swal('Thông Báo!', 'Bạn Còn Thiếu $kimcuongthieu Kim Cương Hồng Vui Lòng Mua Thêm!', 'error');</script>";
    }
}
?>
<?php

if(isset($_POST['muangay'])) {


    $luotghep = $_POST["luotghep"];
    $tien = 20000 * $luotghep;
    
    $tienuser = $user['money'];

    
    
    if($luotghep){
        if( $tienuser >= $tien ){
    
        
        
    $cmd = "UPDATE `users` SET
       
       `luotghep` = luotghep + $luotghep, `money` = money - $tien Where `username` = '".$user['username']."'
       ";
    
        mysqli_query($kun->connect_db(), $cmd);
    
    
        echo "<script>swal('Thông Báo!', 'Bạn Đã Mua Thành Công $luotghep Lượt Ghép!', 'success');</script>";
        echo '<meta http-equiv=refresh content="1; URL=">';
        }else{
            echo "<script>swal('Thông Báo!', 'Bạn Không Đủ Tiền Để Mua $luotghep Lượt Ghép', 'error');</script>";
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



	<div class="container">

	
		<div class="c-content-product-1 c-opt-1">
			<div class="c-content-title-1">
				<h3 class="c-center c-font-uppercase c-font-bold c-font-white">KẾT HỢP MẢNH GHÉP</h3>
				<div class="c-line-center"></div>
			</div>
			<div class="row">
				<div class="col-md-8 wow animate slideInUp text-center" style="opacity: 1; visibility: visible; animation-name: slideInUp;">
					<div class="c-body" style="padding: 0px 0 20px 20px;">
					<div class="c-media" style="border-radius: 15px; overflow: hidden;">
						<img src="https://i.imgur.com/c4NQr0Y.png" alt="" style="width: auto;max-width: 80%;">
					</div>
					<br/>
                    <h4>Bạn Có <?php echo number_format($user['luotghep']); ?> Lượt Ghép - <?php echo number_format($user['kimcuonghong']); ?> Kim Cương Hồng</h4>
                    <form method="POST">
					<button type="submit" class="btn c-btn-yellow c-btn-circle c-btn-uppercase c-btn-bold btn-lg" name="update"> Ghép Kim Cương Hồng Ngay</button>
					</div>
                    </form>
				</div>
				<div class="col-md-4">
					<div class="c-body" style="padding: 0px 0 20px 20px;">
						<div class="row">
							<div class="col-md-12 col-xs-12 wow animate fadeInUp text-center" style="opacity: 1; visibility: visible; animation-name: fadeInUp;">
								<h4 class="btn c-btn-green c-font-uppercase c-font-bold c-btn-circle" style="margin-bottom:10px">PHẦN THƯỞNG 1</h4>
								<p class="alert" style="color: #fff; background: rgb(0 0 0 / 68%);"> Cơ Hội Trúng 10.000 Kim Cương Xanh</p>
							</div>
							<div class="col-md-12 col-xs-12 wow animate fadeInUp text-center" style="opacity: 1; visibility: visible; animation-name: fadeInUp;">
								<h4 class="btn c-btn-dark c-font-uppercase c-font-bold c-btn-circle" style="margin-bottom:10px">PHẦN THƯỞNG 2</h4>
								<p class="alert" style="color: #fff; background: rgb(0 0 0 / 68%);"> Cơ Hội Nhận Được 1 Món Quà Đặc Biệt</p>
							</div>
							<div class="col-md-12 col-xs-12 wow animate fadeInUp text-center" style="opacity: 1; visibility: visible; animation-name: fadeInUp;">
								<h4 class="btn btn-warning c-font-uppercase c-font-bold c-btn-circle" style="margin-bottom:10px">PHẦN THƯỞNG 3</h4>
								<p class="alert" style="color: #fff; background: rgb(0 0 0 / 68%);"> Cơ Hội Nhận Kim Cương Xanh Ngẫu Nhiên</p>
							</div>
							<div class="col-md-12 col-xs-12 wow animate fadeInUp text-center" style="opacity: 1; visibility: visible; animation-name: fadeInUp;">
								<h4 class="btn c-btn-red c-font-uppercase c-font-bold c-btn-circle" style="margin-bottom:10px">ĐIỀU KIỆN</h4>
								<p class="alert" style="color: #fff; background: rgb(0 0 0 / 68%);"> Hệ thống sẽ cho bạn 1 phần quà.. để có thể kết hợp kim cương hồng nhận kim cương xanh free fire bạn cần chuẩn bị đủ 1.000 kim cương hồng trong tài khoản. Cơ hội nhận được phần thưởng từ Ghép Kim Cương Hồng là 100%
								</p>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div> 
</div>
<br>

	<div class="container">
	<div class="text-center" style="margin: 15px; font-weight: bold; font-size: 20px;">Mua Lượt </div>
			<table class="table table-responsive">
				<tbody>
					<tr>
						<th class="text-center">Mua Lượt Ghép Kim Cương Hồng</th>
						<th class="text-center">Mua Kim Cương Hồng</th>
					
					</tr>
					<tr>
						<td class="text-center"> Số Lượt Ghép Muốn Mua:
                        <br>
                        
                <form method="POST">        
<input type="number" class="alert" style="color: #fff; background: rgb(0 0 0 / 68%);" name="luotghep" id="thanhtoan" onchange="thanhtoanUpdate()" maxlength="16"  placeholder="Lượt Ghép Muốn Mua" >

<br>
<button class="alert" style="color: #fff; background: rgb(0 0 0 / 68%);"  >Mua <span id="thanhtoansx"></span> Lượt Với Giá <span id="tongtiensx"></span> VNĐ</button><br>
<button type="submit" class="btn c-btn-yellow c-btn-circle c-btn-uppercase c-btn-bold btn-lg" name="muangay"> Mua Ngay</button>
                </form>
                <script>
            setInterval(function(){

                

              var thanhtoan = $("#thanhtoan").val();
              let tongtien = 20000 * thanhtoan;

              $("#tongtiensx").html(tongtien);
              $("#thanhtoansx").html(thanhtoan);
            }, 10);
          </script>
                        
						<td class="text-center">1,000 Kim Cương Hồng = 20,000VNĐ<br>
                        <form method="POST">
<button type="submit" class="btn c-btn-yellow c-btn-circle c-btn-uppercase c-btn-bold btn-lg" data-toggle="modal" name="muakchong" > Mua Ngay</button>
   

                <!-- Modal -->
          <!--<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="xacnhanorder" aria-hidden="true">-->
          <!--  <div class="modal-dialog modal-dialog-centered" role="document">-->
          <!--    <div class="modal-content">-->
          <!--      <div class="modal-header">-->
          <!--        <h5 class="modal-title" id="xacnhanorder"><font color="red">XÁC NHẬN GIAO DỊCH</font></h5>-->
          <!--        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
          <!--      </div>-->
          <!--      <div class="modal-body">-->
          <!--      <h3 ><font color="Black"> Muốn Mua 1,000 Kim Cương Hồng Với Giá 20,000 VNĐ Không?</font></h3>-->
          <!--      </div>-->
          <!--      <div class="modal-footer">-->
          <!--        <button type="button" class="btn c-btn-white c-btn-circle c-btn-uppercase c-btn-bold btn-lg" data-dismiss="modal">HỦY</button>-->
          <!--        <button type="submit" name="muakchong" class="btn c-btn-yellow c-btn-circle c-btn-uppercase c-btn-bold btn-lg">XÁC NHẬN</button>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
                </form></td>
						
					</tr>
				</tbody>
			</table>
	</div>





<Br/>
	</div>
</div>	
</div>


