<div id="header">
    <div class="nav_header" style="background-color: #68bd45;
    background-image: linear-gradient(141deg, #e1f2da 0%, #68bd45 51%, #68bd45 75%);">
        <div class="wapper clearfix">
            <p class="p_diachi">
                <marquee>CHUYÊN CUNG CẤP SỈ VÀ LẼ CÁC LOẠI TRÁI CÂY TƯƠI NHẬP KHẨU TỪ CÁC NƯỚC ÚC, MỸ, CANADA, PHÁP, HÀ
                    LAN, BA LAN, CHILÊ, NAM PHI, NEW ZEALAND, TÂY BAN NHA, ĐÀI LOAN, HÀN QUỐC, NHẬT BẢN ...</marquee>
            </p>
            <div class="nav_r text-right">
                <p class="p_dienthoai">094.124.3377 – 0912.779.188</p>
                <p class="p_xahoi">
                    <span>Social:</span>
                    <a href="https://www.facebook.com/Traicaynhapkhauhoabien/">
                        <img src="{{asset('public/img/120-facebook-1-8959.png')}}" style="width:50px"
                            alt="https://www.facebook.com/Traicaynhapkhauhoabien/" />
                    </a>
                    <!-- <a href="https://www.youtube.com/channel/UC-__H5Pb_4ddsgOJ0cexnMQ?view_as=subscriber">
                        <img src="{{asset('public/img/youtube-nho-1656.png')}}"
                            alt="https://www.youtube.com/channel/UC-__H5Pb_4ddsgOJ0cexnMQ?view_as=subscriber" />
                    </a> -->
                    <a href="https://m.me/Traicaynhapkhauhoabien">
                        <img src="{{asset('public/img/120-9913.png')}}" style="width:50px"
                            alt="https://m.me/Traicaynhapkhauhoabien" />
                    </a>
                    <a href="https://www.facebook.com/Traicaynhapkhauhoabien/">
                        <img src="{{asset('public/img/zalo-icon.png')}}" style="width:50px"
                            alt="https://zalo.me/0834701155" />
                    </a>
                    <a href="https://www.facebook.com/Traicaynhapkhauhoabien/">
                        <img src="{{asset('public/img/viber.png')}}" style="width:50px"
                            alt="https://zalo.me/0834701155" />
                    </a>
                </p>
            </div>
        </div>
    </div>
    <div class="head">
        <div class="wapper clearfix">
            <div class="logo">
                <a href="{{route('getHome')}}">
                    <img src="{{asset('public/img/logo-hoabien.png')}}" alt="Trái cây Hoa Biển" />
                </a>
            </div>
            <div id="menu">

                <ul class="clearfix">
                    <li><a class="home active" href="{{route('getHome')}}"><i class="fa fa-home"
                                aria-hidden="true"></i></a></li>

                    <li><a href="{{route('getIntro')}}" style="font-weight: bold">Giới thiệu</a></li>

                    <li><a href="{{route('getAllProduct')}}" style="font-weight: bold">Sản phẩm <i
                                class="fa fa-angle-down" aria-hidden="true" style="font-weight: bold"></i></a>
                        <ul>
                            @foreach(config('config.cate') as $key => $cate)
                            <li>
                                <a style="font-weight: bold"
                                    href="{{route('getCate', ['cate' => $cate])}}">{{config('config.cate_name')[$key][0]}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{route('getAllNews')}}" style="font-weight: bold">Bạn có biết?</a>
                    </li>

                    <li><a href="{{route('getAllStore')}}" style="font-weight: bold">Hệ thống phân phối</a></li>

                    <li><a href="{{route('getContact')}}" style="font-weight: bold">Liên hệ</a></li>

                </ul>
            </div>
            <div class="show_giohang">
                <!-- <a href="{{route('getCart')}}">
                    <span class="num-cart">0</span>
                    <img src="{{asset('public/img/icon_giohang.png')}}" alt="Gio hàng" />
                    <span>Giỏ hàng</span>
                </a> -->
            </div>
            <div class="g1-drop">
                <a class="g1-drop-toggle" href="javascript:void"> <i class="fa fa-search"></i>Tìm kiếm <span
                        class="g1-drop-toggle-arrow"></span> </a>
                <div class="v_Search">
                    <div class="w_timk">
                    <form action="{{route('getSearchProduct')}}" method="GET" id="create-new" enctype='multipart/form-data' >
                        <input type="text" name="query" id="query" onkeypress="doEnter(event,'query');"
                            placeholder="Nhập từ khóa tìm kiếm...">
                      <input type="submit" value="Tìm kiếm"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="menu_mobi">

    <link type="text/css" rel="stylesheet" href="{{asset('public/css/jquery.mmenu.all.css')}}" />

    <div class="header"><a href="#menu_mobi" class="hien_menu" style="font-weight: bold">Menu</a>
        <a href="{{route('getHome')}}" class="logo-mobi">
            <img src="{{asset('public/img/logo-hoabien.png')}}" alt="Trái cây Hoa Biển" />
        </a>
        <div class="nav_r text-right">
            <p class="p_dienthoai">094.124.3377 – 0912.779.188</p>
        </div>
        <!-- <div class="cart_icon">
            <p><a href="{{route('getCart')}}"> Giỏ hàng: <span class="num-cart">0</span></a></p>
        </div> -->
    </div>

    <nav id="menu_mobi" style="height:0; overflow:hidden;">
        <ul>
            <div id="search_mobi">
            <form action="{{route('getSearchProduct')}}" method="GET" id="create-new" enctype='multipart/form-data' >
                        <input type="text" name="query" id="query" onkeypress="doEnter(event,'query');"
                            placeholder="Nhập từ khóa tìm kiếm...">
                      <input type="submit" value="Tìm kiếm"/>
                        </form>
            </div>

            <li><a class="home active" href="{{route('getHome')}}"><i class="fa fa-home" aria-hidden="true"></i><b>Trang
                        chủ</b></a>
            </li>

            <li><a href="{{route('getIntro')}}" style="font-weight: bold">Giới thiệu</a></li>

            <li><a href="{{route('getAllProduct')}}" style="font-weight: bold">Sản phẩm <i class="fa fa-angle-down"
                        aria-hidden="true"></i></a>
                <ul>
                    @foreach(config('config.cate') as $key => $cate)
                    <li><a href="{{route('getCate', ['cate' => $cate])}}">{{config('config.cate_name')[$key][0]}}</a>
                    </li>
                    @endforeach
                </ul>
            </li>
            <li><a href="{{route('getAllNews')}}" style="font-weight: bold">Tin tức</a>
            </li>

            <li><a href="{{route('getAllStore')}}" style="font-weight: bold">Hệ thống phân phối</a></li>

            <li><a href="{{route('getContact')}}" style="font-weight: bold">Liên hệ</a></li>
        </ul>
    </nav>
</div>
