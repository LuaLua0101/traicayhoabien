@extends('frontend.layout')

@section('content')

<div id="slider">
    <link href="{{asset('public/js/engine1/style.css')}}" type="text/css" rel="stylesheet" />
    <div class="w_slider">
        <div id="wowslider-container1">
            <div class="ws_images">
                <ul>
                    <li>
                        <a href="#">
                            <img src="{{asset('public/thumb/1366x490x1x100/upload/hinhanh/banner1.jpg')}}" alt="https://traicayhoabien.com/" title="" style="height:100%;" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{asset('public/thumb/1366x490x1x100/upload/hinhanh/banner2.jpg')}}" alt="https://traicayhoabien.com/" title="" style="height:100%;" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{asset('public/thumb/1366x490x1x100/upload/hinhanh/banner3.jpg')}}" alt="https://traicayhoabien.com/" title="" style="height:100%;" />
                        </a>
                    </li>
                </ul>
            </div>
            <div class="ws_bullets">
                <div>
                    <a href="#" title="hinhc"><span>6</span></a>
                    <a href="#" title="hinhc"><span>6</span></a>
                    <a href="#" title="hinhc"><span>6</span></a>
                </div>
            </div>
            <div class="ws_shadow"></div>
        </div>
    </div>
</div>
<!---END #slider-->
<div id="main_content">

    @include('frontend.index-danhmuc')
    <div class="wap_quangcao text-center">
        <a href="#">
            <img class="lazy" data-src="{{asset('public/img/banner4-9482.jpg')}}" alt="Trái cây Hoa Biển" />
        </a>
    </div>

    <div class="wap_gioithieu">
        <div class="wapper">
            <div class="title_gioithieu text-center">Giới thiệu trái cây Hoa Biển</div>
            <div class="mota_gioithieu">
                <div><span style="box-sizing: border-box; font-size: 14px; font-family: sans-serif, arial, verdana, " trebuchet="">      1.   Bạn đang cần tìm một địa chỉ uy tín bán trái cây sạch và an toàn
                        ?</span>
                    <br font-size:="" helvetica="" style="box-sizing: border-box; font-family: " />
                    <span style="box-sizing: border-box; font-size: 14px; font-family: sans-serif, arial, verdana, " trebuchet="">      2.   Bạn ngại phải ra đường giữa trưa nắng hay trời mưa  để lựa chọn những
                        trái Cherry Úc, Táo New Zealand, Nho Mỹ, Kiwi Ý ... ngon nhất về cho gia đình hoặc cả văn phòng
                        cùng ăn ?</span>
                    <br font-size:="" helvetica="" style="box-sizing: border-box; font-family: " />
                    <span style="box-sizing: border-box; font-size: 14px; font-family: sans-serif, arial, verdana, " trebuchet="">      3.   Bạn phân vân không biết lựa chọn thế nào là đúng để tránh chọn nhầm trái
                        cây bẩn, tẩm hóa chất ?</span>
                    <br font-size:="" helvetica="" style="box-sizing: border-box; font-family: " />
                    <span style="box-sizing: border-box; font-size: 14px; font-family: sans-serif, arial, verdana, " trebuchet="">      4.   Bạn luôn lo lắng về vấn đề nguồn gốc xuất xứ của trái cây ?</span>
                    <br font-size:="" helvetica="" style="box-sizing: border-box; font-family: " />
                    <span style="box-sizing: border-box; font-size: 14px; font-family: sans-serif, arial, verdana, " trebuchet="">      5.   Bạn đã biết gì về </span><a href="#"><strong font-size:="" helvetica="" style="box-sizing: border-box; font-family: "><em style="box-sizing: border-box;">TRÁI CÂY
                                NHẬP KHẨU</em></strong></a><span style="box-sizing: border-box; font-size: 14px; font-family: sans-serif, arial, verdana, " trebuchet=""> chưa ?</span>
                    <br font-size:="" helvetica="" style="box-sizing: border-box; font-family: " />
                    <span style="box-sizing: border-box; font-size: 14px; font-family: sans-serif, arial, verdana, " trebuchet="">      6.   Ở TP.HCM bạn không biết nơi nào bán </span><strong font-size:="" helvetica="" style="box-sizing: border-box; font-family: "><em style="box-sizing: border-box;"><a href="#">TRÁI CÂY NHẬP KHẨU</a> </em></strong><span style="box-sizing: border-box; font-size: 14px; font-family: sans-serif, arial, verdana, " trebuchet="">với giá cả hợp lý và chất lượng hết ?</span>
                    <br font-size:="" helvetica="" style="box-sizing: border-box; font-family: " />
                    <span style="box-sizing: border-box; font-size: 14px; font-family: sans-serif, arial, verdana, " trebuchet="">      7.   Bạn có thật sự quan tâm đến sức khỏe của gia đình và chính bản thân mình
                        chưa ?</span>
                    <br font-size:="" helvetica="" style="box-sizing: border-box; font-family: " />
                    <br font-size:="" helvetica="" style="box-sizing: border-box; font-family: " />
                    <span font-size:="" style="box-sizing: border-box; font-family: sans-serif, arial, verdana, " trebuchet=""><strong style="box-sizing: border-box;">=> HÃY ĐỂ <span style="box-sizing: border-box; color: rgb(0, 128, 0);">TRÁI CÂY HOA
                                BIỂN</span> GIẢI QUYẾT TẤT CẢ CÁC VẤN ĐỀ NÀY CHO BẠN.</strong>
                    </span>
                </div>
            </div>
            <div class="fiedx">
                <div class="img_visao">
                    <img class="lazy" data-src="{{asset('public/img/logo-hoabien.png')}}" alt="Vì sao chọn chúng tôi" />
                </div>
                <div class="wap_visao">
                    <div class="bx_vs text-center">
                        <a href="vi-sao-chon-chung-toi/uy-tin-chat-luong.html">
                            <img class="lazy" data-src="{{asset('public/img/quality-and-reputation-8379.jpg')}}" alt="Uy Tín Chất Lượng" />
                        </a>
                        <p><a href="vi-sao-chon-chung-toi/uy-tin-chat-luong.html">Uy Tín Chất Lượng</a></p>
                        <div>Để chiếm được trái tim khách hàng cần có chữ tín. Thương hiệu mạnh nhờ chữ tín và cũng
                            chính chữ tín làm nên thương hiệu.</div>
                    </div>
                    <div class="bx_vs text-center">
                        <a href="vi-sao-chon-chung-toi/gia-ca-hop-ly.html">
                            <img class="lazy" data-src="{{asset('public/img/best-price200-2050.jpg')}}" alt="Giá Cả Hợp Lý" />
                        </a>
                        <p><a href="vi-sao-chon-chung-toi/gia-ca-hop-ly.html">Giá Cả Hợp Lý</a></p>
                        <div>Giá có thể không tốt nhất nhưng Trái cây Hoa Biển cam kết chất lượng luôn tương xứng với
                            giá cả.</div>
                    </div>
                </div>
                <div class="wap_visao">
                    <div class="bx_vs text-center">
                        <a href="vi-sao-chon-chung-toi/an-toan-thuc-pham.html">
                            <img class="lazy" data-src="{{asset('public/img/30349398-la-seguridad-alimentaria-grunge-sello-de-goma-en-blanco200-4902.jpg')}}" alt="An Toàn Thực Phẩm" />
                        </a>
                        <p><a href="vi-sao-chon-chung-toi/an-toan-thuc-pham.html">An Toàn Thực Phẩm</a></p>
                        <div>Tất cả sản phẩm tại Trái cây Hoa Biển đều có nguồn gốc xuất xứ rỏ ràng + kiểm dịch thực vật
                            đầy đủ ( Vietgap, Globalgap, USDA ...) </div>
                    </div>
                    <div class="bx_vs text-center">
                        <a href="vi-sao-chon-chung-toi/nhanh-chong-chinh-xac.html">
                            <img class="lazy" data-src="{{asset('public/img/giao-hang-mien-phi250-3095.jpg')}}" alt="Nhanh Chóng Chính Xác" />
                        </a>
                        <p><a href="vi-sao-chon-chung-toi/nhanh-chong-chinh-xac.html">Nhanh Chóng Chính Xác</a></p>
                        <div>Dù nắng hay mưa, Trái cây Hoa Biển cam kết giao hàng tận tay cực nhanh trong vòng 2h kể từ
                            lúc nhận order cho các đơn hàng nội thành.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wap_nhantin lazy" data-src="{{asset('public/img/bg_nhantin.png')}}" style="height:400px">
        <!-- <div class="wapper">
            <div class="row">
                <div class="col-md-7 col-md-9 col-xs-12 pull-right col-nhantin">
                    <div class="khungnhantin">
                        <div class="tt_nhantin text-center">
                            <p>Đăng Ký Nhận Tin</p>
                            <span>Vui lòng nhập thông tin vào form bên dưới để chúng tôi liên hệ với bạn!</span>
                        </div>
                        <form action="http://traicayhoabien.com/index.php" method="post" class="nhantin">
                            <input type='hidden' name='form_key' id='form_key'
                                value='751158109d3a4703bc9b39be06bd1416' />
                            <div class="clearfix">
                                <input type="text" name="hoten" placeholder="Họ Tên" />
                                <input type="text" name="dienthoai" placeholder="Điện thoại" />
                                <input type="text" name="email" placeholder="Email" />
                            </div>
                            <div class="clearfix">
                                <textarea name="noidung" placeholder="Nội dung"></textarea>
                                <button type="button" class="dknhantin">Gửi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->
    </div>

    @include('frontend.index-tintuc')

    <div id="doitac">
        <div class="wapper">
            <div class="title_danhmuc">
                <p>Đối tác - Khách hàng</p>
                <div></div>
            </div>
            <div class="marquee" id="mycrawler2">
                <div>
                    <p>
                        <a href="#" title="https://traicayhoabien.com/" target="_blank"><img class="lazy" data-src="{{asset('public/img/juliet-8682.jpg')}}" alt="Táo Juliet Organic Pháp" /></a>
                    </p>
                </div>
                <div>
                    <p>
                        <a href="#" title="https://traicayhoabien.com/" target="_blank"><img class="lazy" data-src="{{asset('public/img/a-con-0196.jpg')}}" alt="Đu Đủ Hữu Cơ A Cón Vũng Tàu" /></a>
                    </p>
                </div>
                <div>
                    <p>
                        <a href="#" title="https://traicayhoabien.com/" target="_blank"><img class="lazy" data-src="{{asset('public/img/laba-king-9946.jpg')}}" alt="Chuối Laba King Đà Lạt" /></a>
                    </p>
                </div>
                <div>
                    <p>
                        <a href="#" title="https://traicayhoabien.com/" target="_blank"><img class="lazy" data-src="{{asset('public/img/untitled-3-4972.jpg')}}" alt="Xoài Cát Chu Chú 9" /></a>
                    </p>
                </div>
                <div>
                    <p>
                        <a href="#" title="https://traicayhoabien.com/" target="_blank"><img class="lazy" data-src="{{asset('public/img/4bx8n_qw_400x400-3219.png')}}" alt="The chia co" /></a>
                    </p>
                </div>
                <div>
                    <p>
                        <a href="#" title="https://traicayhoabien.com/" target="_blank"><img class="lazy" data-src="{{asset('public/img/tai-xuong-3941.png')}}" alt="CMI Orchard" /></a>
                    </p>
                </div>
                <div>
                    <p>
                        <a href="#" title="https://traicayhoabien.com/" target="_blank"><img class="lazy" data-src="{{asset('public/img/original-45-117-kiku-round-logo-01-0467.png')}}" alt="KIKU Apple" /></a>
                    </p>
                </div>
                <div>
                    <p>
                        <a href="#" title="" target="_blank"><img class="lazy" data-src="{{asset('public/img/unnamed170-3171.jpg')}}" alt="Juliet apple organic" /></a>
                    </p>
                </div>
                <div>
                    <p>
                        <a href="#" title="" target="_blank"><img class="lazy" data-src="{{asset('public/img/tai-xuong-(5)-1802.jpg')}}" alt="Hansen" /></a>
                    </p>
                </div>
                <div>
                    <p>
                        <a href="#" title="" target="_blank"><img class="lazy" data-src="{{asset('public/img/tai-xuong-6494.png')}}" alt="Envy Apple" /></a>
                    </p>
                </div>
                <div>
                    <p>
                        <a href="#" title="" target="_blank"><img class="lazy" data-src="{{asset('public/img/tai-xuong-(2)-2987.jpg')}}" alt="Jealous Fruit" /></a>
                    </p>
                </div>
                <div>
                    <p>
                        <a href="#" title="" target="_blank"><img class="lazy" data-src="{{asset('public/img/enza-1156.png')}}" alt="Enza" /></a>
                    </p>
                </div>
                <div>
                    <p>
                        <a href="#" title="" target="_blank"><img class="lazy" data-src="{{asset('public/img/images-0883.png')}}" alt="Sunkist" /></a>
                    </p>
                </div>
                <div>
                    <p>
                        <a href="#" title="" target="_blank"><img class="lazy" data-src="{{asset('public/img/bshvd8if_400x400-5409.jpg')}}" alt="Stemilt" /></a>
                    </p>
                </div>
                <div>
                    <p>
                        <a href="#" title="" target="_blank"><img class="lazy" data-src="{{asset('public/img/logo_rockit_square-9043.png')}}" alt="Rockit" /></a>
                    </p>
                </div>
                <div>
                    <p>
                        <a href="#" title="" target="_blank"><img class="lazy" data-src="{{asset('public/img/1494924925.522_3_o-6467.jpg')}}" alt="Mr Apple" /></a>
                    </p>
                </div>
                <div>
                    <p>
                        <a href="#" title="" target="_blank"><img class="lazy" data-src="{{asset('public/img/tai-xuong-(4)-8847.jpg')}}" alt="Cherry Hill Orchards" /></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<!---END #main_content-->

@endsection
