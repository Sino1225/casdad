<?php
defined('KUNKEYPR') or exit('Restricted Access');
$banaccff = $kun->hinhanh_game('banaccff');
$lienquan = $kun->hinhanh_game('lienquan');
$bingonoel = $kun->hinhanh_game('bingonoel');
$bingosieucap = $kun->hinhanh_game('bingosieucap');
$mayxeng = $kun->hinhanh_game('mayxeng');
$homkimcuong = $kun->hinhanh_game('homkimcuong');
$homthinhff = $kun->hinhanh_game('homthinhff');
$lattheff = $kun->hinhanh_game('lattheff');
$gametrungthu = $kun->hinhanh_game('gametrungthu');
$giaicuu = $kun->hinhanh_game('giaicuu');


if(isset($_POST['submit'])) {

    $data = array(
        'banaccff' => $_POST['banaccff'],
        'lienquan' => $_POST['lienquan'],
        'bingonoel' => $_POST['bingonoel'],
        'bingosieucap' => $_POST['bingosieucap'],
        'mayxeng' => $_POST['mayxeng'],
        'homkimcuong' => $_POST['homkimcuong'],
        'homthinhff' => $_POST['homthinhff'],
        'lattheff' => $_POST['lattheff'],
        'gametrungthu' => $_POST['gametrungthu'],
        'giaicuu' => $_POST['giaicuu'],
    );

    mysqli_query($kun->connect_db(), "UPDATE `settings` SET `value`='".mysqli_escape_string($kun->connect_db(), json_encode($data))."' WHERE `key`='hinhanh_game'"); 
    echo '<div class="alert alert-success"><strong>Update Hình Ảnh Thành Công!</strong></div>';
    echo '<meta http-equiv=refresh content="1; URL=">';
}
?>


    

                <div class="row">
                    <div class="col-12">

                        <form action="" method="post">


                        <!-- Row -->
                        <div class="row">


                            <!-- column -->
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="<?php echo $banaccff;?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Bán Acc Free Fire</h4>

                                                <div class="form-group">
                                                    <input type="text" name="banaccff" class="form-control" value="<?php echo $banaccff;?>">
                                                </div>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->

      <!-- column -->
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="<?php echo $lienquan;?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Bán Acc Liên Quân</h4>

                                                <div class="form-group">
                                                    <input type="text" name="lienquan" class="form-control" value="<?php echo $lienquan;?>">
                                                </div>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->

                            <!-- column -->
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="<?php echo $bingonoel;?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">BINGO NOEL</h4>

                                                <div class="form-group">
                                                    <input type="text" name="bingonoel" class="form-control" value="<?php echo $bingonoel;?>">
                                                </div>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->

                      <!-- column -->
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="<?php echo $bingosieucap;?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">BINGO SIÊU CẤP</h4>

                                                <div class="form-group">
                                                    <input type="text" name="bingosieucap" class="form-control" value="<?php echo $bingosieucap;?>">
                                                </div>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->

                            <!-- column -->
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="<?php echo $mayxeng;?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">MÁY XÈNG</h4>

                                                <div class="form-group">
                                                    <input type="text" name="mayxeng" class="form-control" value="<?php echo $mayxeng;?>">
                                                </div>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->
                  

                            <!-- column -->
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="<?php echo $homthinhff;?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">HÒM THÍNH FREE FRIRE</h4>

                                                <div class="form-group">
                                                    <input type="text" name="homthinhff" class="form-control" value="<?php echo $homthinhff;?>">
                                                </div>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->

                            <!-- column -->
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="<?php echo $homkimcuong;?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">HÒM KIM CƯƠNG</h4>

                                                <div class="form-group">
                                                    <input type="text" name="homkimcuong" class="form-control" value="<?php echo $homkimcuong;?>">
                                                </div>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->

                            <!-- column -->
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="<?php echo $lattheff;?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">LẬT THẺ MAY MẮN</h4>

                                                <div class="form-group">
                                                    <input type="text" name="lattheff" class="form-control" value="<?php echo $lattheff;?>">
                                                </div>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->
                             <!-- column -->
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="<?php echo $gametrungthu;?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">BINGO TRUNG THU</h4>

                                                <div class="form-group">
                                                    <input type="text" name="gametrungthu" class="form-control" value="<?php echo $gametrungthu;?>">
                                                </div>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->
                             <!-- column -->
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="<?php echo $giaicuu;?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">BINGO TRUNG THU</h4>

                                                <div class="form-group">
                                                    <input type="text" name="giaicuu" class="form-control" value="<?php echo $giaicuu;?>">
                                                </div>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->
                         


                            <div class="col-md-12"> 
                                        <center><button type="submit" name="submit" class="btn waves-effect waves-light btn-lg btn-rounded btn-primary">CẬP NHẬT ẢNH</button></center>
                            </div>



                            </form>


                        </div>
                        <!-- Row -->
                    </div>
                </div>





