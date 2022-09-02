 <style type="text/css">
    #bonus{
        position: fixed;
        bottom: 15px;
        left: 15px;
        width: 13%;
        z-index: 1000;
        cursor: pointer;
    }
    #bonus img{
        width: 100%;
    }
    #bonus_login{
        display:block;
        position: fixed;
        bottom: 15px;
        left: 15px;
        width: 13%;
        z-index: 1000;
        cursor: pointer;
    }
    #bonus_login img{
        width: 100%;
    }
    .mobile{
        width: 30%!important;
    }
    @media  only screen and (max-width: 640px) {
        #bonus_login{width: 50%!important;!important;}
        #bonus{width: 50%!important;!important;}
    }
    #bonusModal .modal-body p,#bonusModal .modal-body b{display:inline;color:#000}
</style>
<script>
$(document).ready(function() {
    $(".dropdown-toggle").dropdown();
});
</script>

                <style type="text/css">
    #bonus{
        position: fixed;
        bottom: 12px;
        left: 12px;
        width: 12%;
        z-index: 800;
        cursor: pointer;
    }
    #bonus img{
        width: 70%;
    }
    #bonus_login{
        display:block;
        position: fixed;
        bottom: 12px;
        left: 12px;
        width: 12%;
        z-index: 800;
        cursor: pointer;
    }
    #bonus_login img{
        width: 70%;
    }
    .mobile{
        width: 20%!important;
    }
    @media  only screen and (max-width: 640px) {
        #bonus_login{width: 35%!important;!important;}
        #bonus{width: 35%!important;!important;}
    }
    #bonusModal .modal-body p,#bonusModal .modal-body b{display:inline;color:#000}
</style>
<?php
if(!$_SESSION['token']) {
        ?>
        <a id="bonus_login" href="/dang-nhap" title="Click để nhận thưởng!" class="">
        <img src="https://i.upanh.org/2021/06/22/570935nhE1BAADn-quC3A0-garena-2.gif">
</a> 
<?php
    }else {
        if($kun->check_user_nhan_qua() == true) {
           
?>
<?php
        
        }else {

            ?>
</a>
<div id="modal_register_gift"></div>
<script type="text/javascript">
        
    $(document).ready(function() {
        $('#bonus_login').click(function() {
            $('#bonus_login').hide();

            $("#modal_register_gift").load("/model/nhanqua.php");

        });
    });


</script>

<?php
  }
    }

            ?>
            
			<!-- END: PAGE CONTENT -->
			

<div class="modal fade" id="noticeModal" role="dialog" style="display: none;" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="loader" style="text-align: center"><img src="/assets/frontend/images/loader.gif" style="width: 50px;height: 50px;display: none"></div>
		<div class="modal-content">
			&lt;p style=&quot;text-align:center&quot;&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;u&gt;&lt;a href=&quot;https://discord.gg/QMSzZuMEcp&quot; target=&quot;_blank&quot;&gt;&lt;span style=&quot;color:#2ecc71&quot;&gt;Nhanh Tay Tham Dự Nào Link DIscord Đ&amp;ecirc;̉ Nh&amp;acirc;̣n Th&amp;acirc;̣t Nhi&amp;ecirc;̀u Qu&amp;agrave;&amp;nbsp;:&lt;/span&gt;&lt;/a&gt;&lt;/u&gt;&lt;/span&gt;&lt;/strong&gt;&lt;br /&gt;
&lt;strong&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;color:#f1c40f&quot;&gt;&lt;img src=&quot;/upload/userfiles/images/hot(6).gif&quot; /&gt;&amp;nbsp;Hot Hot&amp;nbsp;&lt;img src=&quot;/upload/userfiles/images/hot(6)(1).gif&quot; /&gt;&lt;/span&gt;&lt;br /&gt;
&lt;span style=&quot;color:#f1c40f&quot;&gt;Tính Năng Cực Hot Đang Di&amp;ecirc;̃n Ra&lt;br /&gt;
Giảm Giá Cực S&amp;ocirc;́c Với Các Trò Chơi Tr&amp;ecirc;n Shop&lt;/span&gt;&lt;br /&gt;
&lt;span style=&quot;color:#ff0000&quot;&gt;Giảm Giá Cực S&amp;ocirc;́c L&amp;ecirc;n Tới 70%&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/strong&gt;&lt;br /&gt;
&lt;span style=&quot;color:#ff0000&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;strong&gt;Đăng Nh&amp;acirc;̣n Nh&amp;acirc;̣n Qùa Trở Lại Với Cơ H&amp;ocirc;̣i Nh&amp;acirc;̣n 9999 Kim Cương&lt;/strong&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;
&lt;img src=&quot;/upload/userfiles/images/16%20(1).jpg&quot; style=&quot;height:197px; width:350px&quot; /&gt;&lt;/p&gt;
		</div>
	</div>
	</div>
</div>

<div class="modal fade" id="LoadModal" role="dialog" style="display: none;" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="loader" style="text-align: center"><img src="/assets/frontend/images/loader.gif" style="width: 50px;height: 50px;display: none"></div>
		<div class="modal-content">
		</div>
	</div>
</div>


<style type="text/css">
    .sl-footer span{
        font-weight: inherit;
    }
</style>

  <!-- END: PAGE CONTAINER -->
<div class="clearfix"></div>
<div class="sl-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 colLeft">
                <p style="text-align:justify"><img src="http://farm66.staticflickr.com/65535/51347420134_34d2597168_o.gif" style="height:50px; width:150px" /></p>

<p style="text-align:justify"><span style="font-size:14px"><span style="color:#f1c40f"><strong>* Shop Ch&iacute;nh Thức Của NamCT Gaming</strong></span></span><br />
<span style="color:#f1c40f"><span style="font-size:14px"><strong>* Ch&uacute;ng T&ocirc;i Lu&ocirc;n Đặt Ni&ecirc;̀m Tin Kh&aacute;ch H&agrave;ng L&ecirc;n H&agrave;ng Đầu<br />
* C&aacute;c Chương Tr&igrave;nh Khuyến Mại Giảm Gi&aacute; Diễn Ra H&agrave;ng Tuần<br />
* Đ&atilde; Giao Dịch Tr&ecirc;n 200.000 T&agrave;i Khoản Game<br />
* Khuyến Mại Khung Giờ V&agrave;ng Xuất Hiện Bất K&igrave; Trong Ng&agrave;y&nbsp;<br />
* Hỗ Trợ Nick Lỗi 1 Đổi 1 ở Danh Mục Được Hỗ Trợ</strong></span></span><br />
&nbsp;</p>
            </div>
            <div class="col-md-5 colRight">
                <table align="left" border="0" cellpadding="0" cellspacing="1">
	<tbody>
	<tr>
			<td>
			<p style="text-align:center"><span style="color:#2ecc71"><span style="font-size:14px"><strong><img src="https://shopalice.vn/upload/userfiles/images/1.png" style="height:60px; width:60px" /></strong></span></span></p>
			</td>
			<td>
			<p style="text-align:center"><span style="color:#2ecc71"><span style="font-size:14px"><strong>1 năm</strong></span></span><br />
			<span style="color:#f1c40f"><span style="font-size:14px"><strong>Hoạt Động</strong></span></span></p>

			<p style="text-align:center">&nbsp;</p>
			</td>
			<td>
			<p style="text-align:center"><span style="color:#2ecc71"><span style="font-size:14px"><strong><img src="https://shopalice.vn/upload/userfiles/images/7.png" style="height:60px; width:60px" /></strong></span></span></p>
			</td>
			<td>
			<p style="text-align:center"><span style="color:#2ecc71"><span style="font-size:14px"><strong>&nbsp;20.565</strong></span></span><br />
			<span style="color:#f1c40f"><span style="font-size:14px"><strong>Th&agrave;nh Vi&ecirc;n</strong></span></span></p>

			<p style="text-align:center">&nbsp;</p>
			</td>
			<td>
			<p style="text-align:center"><span style="color:#2ecc71"><span style="font-size:14px"><strong><img src="https://shopalice.vn/upload/userfiles/images/3(2).png" style="height:60px; width:60px" /></strong></span></span></p>
			</td>
			<td>
			<p style="text-align:center"><span style="color:#2ecc71"><span style="font-size:14px"><strong>50.969</strong></span></span><br />
			<span style="color:#f1c40f"><span style="font-size:14px"><strong>Lượt V&agrave;o Shop</strong></span></span></p>

			<p style="text-align:center">&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td>
			<p style="text-align:center"><span style="color:#2ecc71"><span style="font-size:14px"><strong><img src="https://shopalice.vn/upload/userfiles/images/4(1).png" style="height:60px; width:60px" /></strong></span></span></p>
			</td>
			<td>
			<p style="text-align:center"><span style="color:#2ecc71"><span style="font-size:14px"><strong>1.468</strong></span></span><br />
			<span style="color:#f1c40f"><span style="font-size:14px"><strong>Acc Đ&atilde; B&aacute;n</strong></span></span></p>

			<p style="text-align:center">&nbsp;</p>
			</td>
			<td>
			<p style="text-align:center"><span style="color:#2ecc71"><span style="font-size:14px"><strong><img src="https://shopalice.vn/upload/userfiles/images/18.png" style="height:60px; width:60px" /></strong></span></span></p>
			</td>
			<td>
			<p style="text-align:center"><span style="color:#2ecc71"><span style="font-size:14px"><strong>2.259</strong></span></span><br />
			<span style="color:#f1c40f"><span style="font-size:14px"><strong>Lượt Tr&uacute;ng Lớn</strong></span></span></p>

			<p style="text-align:center">&nbsp;</p>
			</td>
			<td>
			<p style="text-align:center"><span style="color:#2ecc71"><span style="font-size:14px"><strong><img src="https://shopalice.vn/upload/userfiles/images/2(3).png" style="height:60px; width:60px" /></strong></span></span></p>
			</td>
			<td>
			<p style="text-align:center"><span style="color:#2ecc71"><span style="font-size:14px"><strong>C&oacute; 1&nbsp;</strong></span></span><br />
			<span style="color:#f1c40f"><span style="font-size:14px"><strong>Trụ Sở</strong></span></span></p>

			<p style="text-align:center">&nbsp;</p>
			</td>
		</tr>
	</tbody>
</table>
             



            </div>
             <div class="col-md-3 colRight pc">
                    <p><span style="color:#f1c40f"><span style="font-size:18px"><strong>MENU SHOP GAME</strong></span></span></p>

<p><strong><span style="font-size:14px"><span style="color:#2ecc71"><img src="https://rikaki.vn/upload/userfiles/images/NEW-2(4).gif"></span><a href="/vong-quay-li-xi-nam-moi" target="_blank"><span style="color:#2ecc71">Vòng Quay Lixi Năm Mới</span></a></span></strong></p>

<p><strong><span style="font-size:14px"><span style="color:#2ecc71"><img src="https://rikaki.vn/upload/userfiles/images/NEW-2(6).gif"></span><a href="/may-xeng-than-tai-go-cua" target="_blank"><span style="color:#2ecc71">Máy Xèng Thần Tài Gõ Cửa</span></a></span></strong></p>

<p><strong><span style="font-size:14px"><span style="color:#2ecc71"><img src="https://rikaki.vn/upload/userfiles/images/NEW-2(6).gif"></span><a href="/nhan-mien-phi-1-luot-quay"><span style="color:#2ecc71">Vòng Quay Kim Cương Free Fire&nbsp;Miễn Phí</span></a></span></strong></p>

<p><strong><span style="font-size:14px"><span style="color:#2ecc71"><img src="https://rikaki.vn/upload/userfiles/images/NEW-2(6).gif"></span><a href="/vong-quay-xuan-tan-suu" target="_blank"><span style="color:#2ecc71">Vòng Quay Xuân Tân Sửu</span></a></span></strong></p>

<p><strong><span style="font-size:14px"><span style="color:#2ecc71"><img src="https://rikaki.vn/upload/userfiles/images/NEW-2(6).gif"></span><a href="/vong-quay-may-man"><span style="color:#2ecc71">Vòng Quay May Mắn Nhận Ngàn Phần Thưởng</span></a></span></strong></p>

<p><strong><span style="font-size:14px"><span style="color:#2ecc71"><img src="https://rikaki.vn/upload/userfiles/images/NEW-2(6).gif"></span><a href="/mo-ruong-may-man"><span style="color:#2ecc71">Mở Rương Trúng Kim Cương Khủng</span></a></span></strong></p>

<p><strong><span style="font-size:14px"><span style="color:#2ecc71"><img src="https://rikaki.vn/upload/userfiles/images/NEW-2(6).gif"></span><a href="/garena/nick-free-fire-gia-re"><span style="color:#2ecc71">Nick Free Fire Giá Rẻ</span></a></span></strong></p>

<p><strong><span style="font-size:14px"><span style="color:#2ecc71"><img src="https://rikaki.vn/upload/userfiles/images/NEW-2(6).gif"></span><a href="/garena/nick-lien-quan-gia-re"><span style="color:#2ecc71">Nick Liên Quân Giá Rẻ</span></a></span></strong></p>
                </div>
            <style>
                .colLeft{padding: 15px;border: 1px solid #808080;background-color: #373535;border-radius: 5px;}
                .colRight{padding:15px}
                .colRight table{width:100%!important}
                .colRight table tr{background-color:unset!important;color:#fff}
                .colRight table tr td p{margin:0}
            </style>
        </div>
       
           
                   
           <font color="yellow">       <p class="sl-copyright">© 2022 Copyright</font>    <a href="https://tuanori.com" style="color: red"><b>tuanori.com</b></a> </p>    
                    </div>
                </div>
         
  
      
    </div>
</div>

    <script src="/assets/Style/jquery-migrate.min.js" type="text/javascript"></script>

    <script src="/assets/Style/bootstrap.min.js" type="text/javascript"></script>

    <script src="/assets/Style/jquery.easing.min.js" type="text/javascript"></script>

    <script src="/assets/Style/wow.js" type="text/javascript"></script>

    <script src="/assets/Style/reveal-animate.js" type="text/javascript"></script>
    <!-- END: CORE PLUGINS -->
    <!-- BEGIN: LAYOUT PLUGINS -->
    <script src="/assets/Style/magnific.js" type="text/javascript"></script>

    <script src="/assets/Style/jquery.cubeportfolio.min.js" type="text/javascript"></script>

    <script src="/assets/Style/owl.carousel.min.js" type="text/javascript"></script>

    <script src="/assets/Style/jquery.counterup.min.js" type="text/javascript"></script>

    <script src="/assets/Style/jquery.waypoints.min.js" type="text/javascript"></script>

    <script src="/assets/Style/jquery.fancybox.pack.js" type="text/javascript"></script>

    <script src="/assets/Style/jquery.smooth-scroll.js" type="text/javascript"></script>

    <script src="/assets/Style/bootstrap-slider.js" type="text/javascript"></script>

    <script src="/assets/Style/js.cookie.js" type="text/javascript"></script>
    <!-- END: LAYOUT PLUGINS --> <!-- BEGIN: THEME scriptS -->


    <SCRIPT src="/assets/Style/components-shop.js" type="text/javascript"></SCRIPT>

    <SCRIPT src="/assets/Style/app.js" type="text/javascript"></SCRIPT>
    <link rel="stylesheet" href="/assets/Style/jquery-ui.min.css">
    <script src="/assets/Style/jquery-ui.min.js"></script>


  

<div id="modal_bigin"></div>

    <script>
        $(document).ready(function () {

            $(".int").inputmask("integer", { radixPoint: ",", autoGroup: true, groupSeparator: ".", groupSize: 3 });
            $(".dec").inputmask("decimal", { radixPoint: ",", autoGroup: true, groupSeparator: ".", groupSize: 3 });

            function detectmob() {
                if (navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i)) {
                    return true;
                } else { return false; }
            }
            var t = { delay: 125, overlay: $(".fb-overlay"), widget: $(".fb-widget"), button: $(".fb-button") };
            setTimeout(function () { $("div.fb-livechat").fadeIn() }, 8 * t.delay);
            if (!detectmob()) {
                $(".ctrlq").on("click", function (e) { e.preventDefault(), t.overlay.is(":visible") ? (t.overlay.fadeOut(t.delay), t.widget.stop().animate({ bottom: 0, opacity: 0 }, 2 * t.delay, function () { $(this).hide("slow"), t.button.show() })) : t.button.fadeOut("medium", function () { t.widget.stop().show().animate({ bottom: "30px", opacity: 1 }, 2 * t.delay), t.overlay.fadeIn(t.delay) }) })
            }


        });

        function reload_money() {
                              $.ajax({ 
                        type: 'post', 
                        dataType: "JSON",
                        url: '/system/user', 
                        data: {
                            type: 'get-money',
                            token: '<?php if(isset($_SESSION['token'])) echo $_SESSION['token'];?>'
                        }, 
                        success: function (json) {
                            if(json.status == false) {
                     swal("Lỗi!", "Vui lòng đăng nhập lại!", "error");          
                            }else if(json.status == true) {
                            $("#head_money").numAnim({
                                endAt: json.money,
                                duration: 3
                            });
                              return json.money;
                            }else {
                     swal("Lỗi!", "Lỗi hệ thống!", "error");                
                            }
                    }
                });

        }


(function($){
    $.fn.extend({
        numAnim: function(options) {
            if ( ! this.length)
                return false;

            this.defaults = {
                endAt: 2560,
                numClass: 'autogen-num',
                duration: 5,   // seconds
                interval: 90  // ms
            };
            var settings = $.extend({}, this.defaults, options);

            var $num = $('<span/>', {
                'class': settings.numClass 
            });

            return this.each(function() {
                var $this = $(this);

                // Wrap each number in a tag.
                var frag = document.createDocumentFragment(),
                    numLen = settings.endAt.toString().length;
                for (x = 0; x < numLen; x++) {
                    var rand_num = Math.floor( Math.random() * 10 );
                    frag.appendChild( $num.clone().text(rand_num)[0] )
                }
                $this.empty().append(frag);

                var get_next_num = function(num) {
                    ++num;
                    if (num > 9) return 0;
                    return num;
                };

                // Iterate each number.
                $this.find('.' + settings.numClass).each(function() {
                    var $num = $(this),
                        num = parseInt( $num.text() );

                    var interval = setInterval( function() {
                        num = get_next_num(num);
                        $num.text(num);
                    }, settings.interval);

                    setTimeout( function() {
                        clearInterval(interval);
                    }, settings.duration * 1000 - settings.interval);
                });

                setTimeout( function() {
                    $this.text( settings.endAt.toString() );
                }, settings.duration * 1000);
            });
        }
    });
})(jQuery);

    </script>


<script src="/assets/Style/js.js" async=""></script>
</body>
     <style>
            .c-theme-btn{
                color:black;
            }
            .c-theme-btn:hover{
                opacity: 0.7;
            }
            .hover-btn:hover{
                opacity: 0.7;
            }
            body{
                background-image: url(https://thuthuatnhanh.com/wp-content/uploads/2020/01/anh-trai-tim-dep.jpg);
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-position: center;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            } 
            input[type=number]::-webkit-inner-spin-button,
            input[type=number]::-webkit-outer-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }

            .embed-container {
                position: relative;
                padding-bottom: 45.25%;
                height: 0;
                overflow: hidden;
                max-width: 100%;
            }

            .embed-container iframe,
            .embed-container object,
            .embed-container embed {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
        </style>
    <style>
        @media  only screen and (max-width: 640px) {
            #bonus {
                width: 50% !important;
                 !important;
            }
        }

        #bonus {
            position: fixed;
            bottom: 15px;
            left: 15px;
            width: 13%;
            z-index: 1000;
            cursor: pointer;
        }
    </style>
    <style type="text/css">
        .sa-bntbox .form-control {
            height: 41px;
            color: #ffffff;
            background: #1f2228;
            border: 1px solid #30343c;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
        }

        .sa-bntbox input[type="text"] {
            color: #fff !important;
        }

        .sa-bntbox .btn-submit {
            border-color: none !important;
            outline:  !important;
            width: 100% !important;
            text-align: center;
            font-weight: 700 !important;
            font-size: 18px !important;
            color: #ffffff !important;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
            background: linear-gradient(to top, #ff2233 0%, #ff515e 100%) !important;
            background: -moz-linear-gradient(to top, #ff2233 0%, #ff515e 100%) !important;
            background: -o-linear-gradient(to top, #ff2233 0%, #ff515e 100%) !important;
            background: -ms-linear-gradient(to top, #ff2233 0%, #ff515e 100%) !important;
            background: -webkit-linear-gradient(bottom, #ff2233 0%, #ff515e 100%) !important;
        }

        .sa-bntbox .btn-submit:hover {
            color: #000;
        }

        .sa-bntbox .alert {
            margin-bottom: 5px;
        }

        .sa-bntbox .alert-dismissable,
        .alert-dismissible {
            padding-top: 0px;
            padding-bottom: 0px;
        }
    </style>
    <style type="text/css">
        h3 {
            color: #ffffff;
            font-size: 18px;
        }
    </style>
    <style>
        .ui-autocomplete {
            max-height: 500px;
            overflow-y: auto;
            overflow-x: hidden;
        }

        .input-group-addon {
            background-color: #FAFAFA;
        }

        .input-group .input-group-btn>.btn,
        .input-group .input-group-addon {
            background-color: #FAFAFA;
        }

        .modal {
            text-align: center;
        }

        @media  screen and (min-width: 768px) {
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

        @media  screen and (max-width: 767px) {
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

        .sa-header {
            position: relative;
        }

        .c-content-title-1>h3 {
            color: #fff !important
        }
    </style>
</html>