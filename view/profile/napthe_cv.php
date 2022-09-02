 <div class="c-layout-sidebar-content ">
                    <!-- BEGIN: PAGE CONTENT -->
                    <!-- BEGIN: CONTENT/SHOPS/SHOP-CUSTOMER-DASHBOARD-1 -->
                    <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-font-bold">Nạp thẻ</h3>
                        <div class="c-line-left"></div>
                    </div>

					<p style="text-align: center;color: #fff">ID của bạn: <strong>336821</strong></p>
                    <p style="text-align: center;color: red">*Chú ý: Nạp thẻ sai mệnh giá mất 100% giá trị thẻ</p>

                    <form accept-charset="UTF-8" class="form-horizontal form-charge">

   <o id="result"></o>
                    
                    

                    <div class="form-group">
                        <label class="col-md-3 control-label">Tài khoản:</label>
                        <div class="col-md-6">
                            <input class="form-control  c-square c-theme" type="text"
                                   value="<?php echo $user['id']; ?>+22223" readonly>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-3 control-label">Loại thẻ:</label>
                        <div class="col-md-6">
                            <select class="form-control  c-square c-theme" name="type" id="type">
                                                                                                            <option value="VIETTEL">VIETTEL</option>

                                                                            <option value="MOBIFONE">MOBIFONE</option>

                                                                            <option value="VINAPHONE">VINAPHONE</option>

                                                                            <!---<option value="VIETNAMMOBILE">VIETNAMMOBILE</option>

                                                                            <option value="ZING">ZING</option>-->

                                                                                                </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Mệnh giá:</label>
                        <div class="col-md-6">
                            <select class="form-control  c-square c-theme" name="amount" id="amount">
                    <option value="10000">10,000</option>
                    <option value="20000">20,000</option>
                    <option value="50000">50,000</option>
                    <option value="100000">100,000</option>
                    <option value="200000">200,000</option>
                    <option value="500000">500,000</option>
                    <option value="1000000">1,000,000</option>

							</select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Mã số thẻ:</label>
                        <div class="col-md-6">
                            <input class="form-control  c-square c-theme " name="pin" type="text" maxlength="16"
                                   required placeholder=""
                                   required="" autofocus="">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-3 control-label">Số serial:</label>
                        <div class="col-md-6">
                            <input class="form-control c-square c-theme " name="serial" type="text" maxlength="16"
                                   required placeholder=""
                                   required="">
                        </div>
                    </div>
                    <!---<div class="form-group">
                        <label class="col-md-3 control-label">Mã bảo vệ (*):</label>
                        <div class="col-md-6">
                            <div class="input-group">

                                <input type="text" class="form-control c-square" id="captcha" name="captcha" placeholder="Mã bảo vệ" maxlength="3" autocomplete="off" required="">
                                <span class="input-group-addon" style="padding: 1px;">
                                    <img src="http://shoptoantay.com/captcha/flat?XPIxgGC8" height="30px" id="imgcaptcha" onclick="document.getElementById('imgcaptcha').src ='http://shoptoantay.com/captcha/flat?YhZ9qPcZ'+Math.random();document.getElementById('captcha').focus();">
                                </span>
                            </div>
                        </div>
                    </div>-->



                    <div class="form-group c-margin-t-40">
                        <div class="col-md-offset-3 col-md-6">
                            <button type="submit" name="submit" class="btn btn-submit c-theme-btn c-btn-square c-btn-uppercase c-btn-bold btn-block" data-loading-text="<i class='fa fa-spinner fa-spin '></i>">Nạp
                                thẻ
                            </button>
                        </div>
                    </div>
                    </form>
                    <div class="alert alert-info">
                        
                    </div>
                    <!-- END: PAGE CONTENT -->


                    <table id="hand_card_recent" class="table table-striped">
                        <thead>
                        <tr>
                            <th>Thời gian</th>
                            <th>Nhà mạng</th>
                            <th>Mã thẻ</th>
                            <th>Serial</th>
                            <th>Kiểu nạp</th>
                            <th>Mệnh giá</th>
                            <th>Kết quả</th>
                        </tr>
                        </thead>
                        <tbody>
                                                    <tr>
                                <td colspan="7">Không có dữ liệu</td>
                            </tr>
                                                </tbody>
                    </table>
                </div>
            </div>
        </div>
    <!-- END: PAGE CONTENT -->



<script type="text/javascript">
    $("form").submit(function(e) {
        e.preventDefault();
        var form = this;
        var cont = $('#result');

        var type = $('select[name=type]').val();
        var amount = $('select[name=amount]').val();
        var serial = $('input[name=serial]').val();
        var pin = $('input[name=pin]').val();

        if (!type) {
            cont.html('<div class="alert alert-danger"> Lỗi hệ thống!</div>');
        } else if (!amount) {
            cont.html('<div class="alert alert-danger"> Lỗi hệ thống!</div>');
        } else if (!serial) {
            cont.html('<div class="alert alert-danger"> Bạn chưa nhập mã Seri!</div>');
        } else if (!pin) {
            cont.html('<div class="alert alert-danger"> Bạn chưa nhập mã Pin!</div>');
        } else {
            cont.html('');
            $('button[name=submit]').attr("disabled", true);
            //$('button[name=submit]').removeAttr("disabled");
            $('button[name=submit]').html('<i class="fa fa-spinner fa-spin"></i> Đang xử lý');


            $.ajax({
                type: 'post',
                dataType: "JSON",
                url: '/check/napthe',
                data: {
                    type: type,
                    amount: amount,
                    serial: serial,
                    pin: pin,
                    token: '<?php echo $user['token']; ?>'
                },
                success: function(json) {
                    if (json.status == false) {
                        swal("Lỗi!", json.msg, "error");
                        cont.html('<div class="alert alert-danger">Lỗi: ' + json.msg + '</div>');
                    } else if (json.status == true) {
                        swal("Thành Công!", json.msg, "success");
                        cont.html('<div class="alert alert-success">Thành Công: ' + json.msg + '</div>');
                    } else {
                        swal("Lỗi!", "Lỗi hệ thống!", "error");
                    }
                    $('button[name=submit]').html('NẠP THẺ');
                    $('button[name=submit]').removeAttr("disabled");
                }
            });

        }

    });
</script>

<!-- END: PAGE CONTENT -->
</div>