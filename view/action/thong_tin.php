<?php
defined('KUNKEYPR') or exit('Restricted Access');
$kun->login_required();
?>

<?php $row = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `users` WHERE `username`='".$user['username']."'")) ?>

                    <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-font-bold">Thông tin tài khoản</h3>
                        <div class="c-line-left"></div>
                    </div>
                   <table class="table table-striped">
                <tbody><tr>
                    <th scope="row">UID của bạn:</th>
                <th><span class="c-font-uppercase" data-toggle="tooltip" data-placement="top" title="" data-original-title="Đây là ID tài khoản của bạn không phải mã giới thiệu"><?php echo $row['id'];?></span></th>
                </tr>
                <tr>
                    <th scope="row">Tên tài khoản:</th>
                <th><?php echo $row['name'];?></th>
                </tr>
                <tr>
                    <th scope="row">Số dư tài khoản:</th>
                <td><b class="text-danger"><?php echo number_format($row['money']);?>đ</b></td>
                </tr>
              <tr>
                    <th scope="row">Số dư kim cương:</th>
                    <td><b class="text-danger"><?php echo number_format($row['kimcuong']);?> Kim Cương</b></td>
                </tr>
                
                <tr>
                    <th scope="row">Kim Cương Hồng Hiện Có:</th>
                    <td><b class="text-danger"><?php echo number_format($row['kimcuonghong']);?> Kim Cương Hồng</b></td>
                </tr>
                
              <tr>
                    <th scope="row">Số dư quân huy:</th>
                    <td><b class="text-danger"><?php echo number_format($row['quanhuy']);?></b></td>
                </tr>
                <tr>
                    <th scope="row">Ngày tham gia:</th>
                    <td><?php echo date('d/m/y', $row['time']);?></td>
                </tr>
            </tbody></table>
                </div>
            </div>
        </div>


        <!-- END: PAGE CONTENT -->
    </div>


            <!-- END: PAGE CONTENT -->
</div>
