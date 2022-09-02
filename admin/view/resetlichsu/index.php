<?php
if(isset($_POST['reset'])) {



$cmd = "DELETE FROM `lichsumohom`";

    mysqli_query($kun->connect_db(), $cmd);


   echo '<div class="alert alert-primary alert-dismissible bg-primary text-white border-0 fade show" role="alert">Reset Lượt Thành Công</div>';
   echo '<meta http-equiv=refresh content="1; URL=">';
}

?>
<form method="POST">
<div class="row">
               <div class="col-12">
                   <div class="card">
                       <div class="card-body">
                           <h3 class="card-title"><b>Reset Lịch Sử Mở Quà</b></h3>

<div class="row">
<div class="col-md-12"> 
                           <center><button type="submit" name="reset" class="btn btn-info">Reset Ngay</button></center>
                       </div>
                       


</div>


                       </div>
                   </div>
               </div>
</div>



                       </form>