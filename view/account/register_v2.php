<?php
if($_SESSION['token']) {
    die('<meta http-equiv="refresh" content="0;URL=/home"/>');
}
?>
<link rel="stylesheet" href="/assets/Scripts/toastr/toastr.min.css"/>
 <div class="content-black">
    <div class="login-box container">

        <!-- /.login-logo -->
        <div class="login-box-body box-custom">
            <p class="login-box-msg">Đăng ký thành viên</p>

            <span class="help-block" style="text-align: center;color: #dd4b39">
                       <strong></strong>
                </span>

                     <o id="result"></o>

                <div class="form-group has-feedback  ">
                    <input type="text" class="form-control" id="username" value="" placeholder="Username">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
					                </div>

                <div class="form-group has-feedback">
                    <input type="text" class="form-control" id="email" value="" placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                    </div>

   

                <div class="form-group has-feedback">
                    <input type="password" class="form-control" id="password"  placeholder="Mật khẩu">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                    
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" id="repassword" placeholder="Xác nhận mật khẩu">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                        
                </div>


                <div class="row">

                    <!-- /.col -->
                    <div class="col-xs-12">
                        <button type="submit" id="submit"  class="btn btn-primary btn-block btn-flat" style="margin: 0 auto;">Đăng ký</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
             <div class="social-auth-links text-center">
                <p style="margin-top: 5px">- HOẶC -</p>
               
                <a href="/dang-nhap" class="btn  btn-social btn-google"><i class="icon-key icons"></i>Đăng Nhập</a>
            </div>

            <!-- /.social-auth-links -->
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

   <style>
        .login-box,
        .register-box {
            border: 1px solid #cccccc;
            color: #666;
            margin-bottom: 20px;
        }
        
        .login-box .login-box-body,
        .register-box .login-box-body {
   
            margin: 2% auto;
        }
        
        @media (min-width: 767px) {
            .login-box,
            .register-box {
                width: 35%;
            }
        }
        
        .login-box-msg,
        .register-box-msg {
            margin: 0;
            text-align: center;
            padding: 0 20px 20px 20px;
            text-align: center;
            font-size: 20px;
            ;
            font-weight: bold;
        }
    </style>

<script src="/assets/Scripts/toastr/toastr.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

    $('#submit').click(function() {
        document.getElementById("submit").disabled = true;
        document.getElementById('submit').innerHTML = "Đang kiểm tra";

    $.ajax({
        type: "POST",
        url: 'system/user',
        data: {
            type : 'register',
            username: $("#username").val(),   
            email: $("#email").val(),         
            password: $("#password").val(),
            repassword: $("#repassword").val()
        },
        success: function(result)
        {
                    document.getElementById("submit").disabled = false;
            document.getElementById('submit').innerHTML = "Đăng kí";

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


<script>
    $(document).ready(function () {

        toastr.options = {
            "debug": false,
            "newestOnTop": false,
            "positionClass": "toast-top-right",
            "closeButton": true,
            "progressBar": true
        };

    });
</script>


   
</body>
</html>
