<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
window.fbAsyncInit = function() {
    FB.init({
        xfbml: true,
        version: 'v4.0'
    });
};

(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = '//connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<!-- Your customer chat code -->
<div class="fb-customerchat" attribution=setup_tool page_id="1505534699738152" theme_color="#50af00"
    logged_in_greeting="Chào Bạn ! Bạn cần tư vấn mua trái cây ? Trái cây Hoa Biển® có thể giúp gì cho Bạn ?"
    logged_out_greeting="Chào Bạn ! Bạn cần tư vấn mua trái cây ? Trái cây Hoa Biển® có thể giúp gì cho Bạn ?">
</div>
<script type="text/javascript" src="{{asset('public/js/jquery.min.js')}}"></script>
<script>
var tenct = 'Trái cây Hoa Biển';
var nhaptukhoatimkiem = 'Nhập từ khóa tìm kiếm...';
var chuanhaptukhoa = 'Bạn chưa nhập từ khóa tìm kiếm';
var nhapemailcuaban = 'Nhập email của bạn...';
var nhapemail = 'Nhập email';
var emailkhonghople = 'Email không hợp lệ';
var nhaphoten = 'Xin nhập Họ tên';
var nhapdiachi = 'Xin nhập Địa chỉ';
var nhapsodienthoai = 'Xin nhập Số điện thoại';
var emailkhonghople = 'Email không hợp lệ';
var nhapchude = 'Xin nhập Chủ đề';
var nhapnoidung = 'Xin nhập Nội dung';
</script>
<script type="text/javascript" src="{{asset('public/js/jquery-migrate-1.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/my_script.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/giohang.js')}}"></script>

<script src='//www.google.com/recaptcha/api.js' async></script>
<script type="text/javascript" src="{{asset('public/js/jquery.mmenu.min.all.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/engine1/wowslider.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/engine1/script.js')}}"></script>
<script src="{{asset('public/js/lazyload.min.js')}}" type="text/javascript"></script>
<script src="{{asset('public/js/lobibox.min.js')}}" type="text/javascript"></script>
<script src="{{asset('public/js/nprogress.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('public/js/slick.min.js')}}"></script>
<script src="{{asset('public/magiczoomplus/magiczoomplus.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('public/js/jquery.simplyscroll.min.js')}}"></script>

<script src="{{asset('public/js/main.js')}}" type="text/javascript"></script>

</script>
<script type="text/javascript">
$(document).ready(function(e) {});

function validEmail(obj) {
    var s = obj.value;
    for (var i = 0; i < s.length; i++)
        if (s.charAt(i) == " ") {
            return false;
        }
    var elem, elem1;
    elem = s.split("@");
    if (elem.length != 2) return false;
    if (elem[0].length == 0 || elem[1].length == 0) return false;
    if (elem[1].indexOf(".") == -1) return false;
    elem1 = elem[1].split(".");
    for (var i = 0; i < elem1.length; i++)
        if (elem1[i].length == 0) return false;
    return true;
} //Kiem tra dang email
function IsNumeric(sText) {
    var ValidChars = "0123456789";
    var IsNumber = true;
    var Char;
    for (i = 0; i < sText.length && IsNumber == true; i++) {
        Char = sText.charAt(i);
        if (ValidChars.indexOf(Char) == -1) {
            IsNumber = false;
        }
    }
    return IsNumber;
} //Kiem tra dang so

function check() {
    var frm = document.frm_order;
    if (frm.hoten.value == '') {
        alert("Xin nhập Họ tên.");
        frm.hoten.focus();
        return false;
    }
    if (frm.dienthoai.value == '') {
        alert("Xin nhập Số điện thoại.");
        frm.dienthoai.focus();
        return false;
    }

    sodienthoai = frm.dienthoai.value.length;

    if ((sodienthoai == 11 && (frm.dienthoai.value.substr(0, 2) == 01)) || (sodienthoai == 10 && (frm.dienthoai.value
            .substr(0, 2) == 09))) {

    } else {
        alert("Xin nhập Số điện thoại");
        frm.dienthoai.focus();
        return false;
    }

    if (frm.thanhpho.value == '') {
        alert("_chonthanhpho.");
        frm.thanhpho.focus();
        return false;
    }

    if (frm.quan.value == '') {
        alert("Chọn quận/huyện.");
        frm.quan.focus();
        return false;
    }

    if (frm.diachi.value == '') {
        alert("Xin nhập Địa chỉ.");
        frm.diachi.focus();
        return false;
    }
    if (isEmpty($('#email').val(), "Email không hợp lệ")) {
        $('#email').focus();
        return false;
    }
    if (isEmail($('#email').val(), "Email không hợp lệ")) {
        $('#email').focus();
        return false;
    }
    frm.submit();
}
</script>

<script type="text/javascript">
$(document).ready(function(e) {
    $('.slick_video p a').click(function() {
        var src = 'https://www.youtube.com/embed/' + $(this).attr('rel');
        $('.left_video iframe').attr('src', src);
    });
    $('div.slick_video').slick({
        lazyLoad: 'ondemand',
        infinite: true,
        accessibility: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: true,
        centerMode: false,
        dots: false,
        draggable: true,
        mobileFirst: true
    });
});
</script>