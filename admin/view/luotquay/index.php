<?php

if(isset($_POST['update'])) {


$luot = $_POST["luot"];


 if(
 
  $luot 
  
  
){
$cmd = "UPDATE `users` SET
   
   `luotquay` = luotquay + $luot 
   ";

    mysqli_query($kun->connect_db(), $cmd);


   echo '<div class="alert alert-primary alert-dismissible bg-primary text-white border-0 fade show" role="alert">Thêm Lượt Thành Công</div>';
   echo '<meta http-equiv=refresh content="1; URL=">';
}else{
   echo '<div class="alert alert-danger alert-dismissible bg-primary text-white border-0 fade show" role="alert">Vui lòng nhập đủ thông tin</div>';
}
}


if(isset($_POST['reset'])) {



$cmd = "UPDATE `users` SET
   
   `luotquay` = 0 
   ";

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
                           <h3 class="card-title"><b>Cộng Lượt Quay Cho Tất Cả User</b></h3>

<div class="row">

                                       
                                       <div class="col-md-2 col-lg-2 col-xs-12">
                                           <label>Số Lượt</label>
                                           <div class="form-group">
                                               <input type="number" name="luot" class="form-control" value="">
                                           </div>
                                       </div>

                                      



                       <div class="col-md-12"> 
                           <center><button type="submit" name="update" class="btn btn-info">Thêm Ngay   </button></center>
                       </div>
                       <br>
                       <br>
                      
                       <div class="col-md-12"> 
                           <center><button type="submit" name="reset" class="btn btn-info">Reset Lượt Quay</button></center>
                       </div>


</div>


                       </div>
                   </div>
               </div>
</div>



                       </form>


                       <?php

//lấy tỷ lệ vòng quay bingo





if(isset($_POST['update1'])) {


$luot = $_POST["luot"];


 if(
 
  $luot 
  
  
){
$cmd = "UPDATE `users` SET
   
   `luotghep` = luotghep + $luot 
   ";

    mysqli_query($kun->connect_db(), $cmd);


   echo '<div class="alert alert-primary alert-dismissible bg-primary text-white border-0 fade show" role="alert">Thêm Lượt Thành Công</div>';
   echo '<meta http-equiv=refresh content="1; URL=">';
}else{
   echo '<div class="alert alert-danger alert-dismissible bg-primary text-white border-0 fade show" role="alert">Vui lòng nhập đủ thông tin</div>';
}
}


if(isset($_POST['reset1'])) {



$cmd = "UPDATE `users` SET
   
   `luotghep` = 0 
   ";

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
                           <h3 class="card-title"><b>Cộng Lượt Ghép Cho Tất Cả User</b></h3>

<div class="row">

                                       
                                       <div class="col-md-2 col-lg-2 col-xs-12">
                                           <label>Số Lượt</label>
                                           <div class="form-group">
                                               <input type="number" name="luot" class="form-control" value="">
                                           </div>
                                       </div>

                                      



                       <div class="col-md-12"> 
                           <center><button type="submit" name="update1" class="btn btn-info">Thêm Ngay   </button></center>
                       </div>
                       <br>
                       <br>
                      
                       <div class="col-md-12"> 
                           <center><button type="submit" name="reset1" class="btn btn-info">Reset Lượt Ghép</button></center>
                       </div>


</div>


                       </div>
                   </div>
               </div>
</div>



                       </form>











