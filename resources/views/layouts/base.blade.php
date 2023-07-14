<!-- xong -->
@include('sweetalert::alert')
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from azim.commonsupport.com/Realshed/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Jun 2023 14:53:29 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield("title","Untiled")</title>

    <!-- Fav Icon -->
    <link rel="icon" href="{{asset('images/Layer 3.png')}}" type="image/x-icon">

    <!-- Google Fonts -->
    <!-- Stylesheets -->

    <link href="{{asset('css/button.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome-all.css')}}" rel="stylesheet">
    <link href="{{asset('css/flaticon.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/jquery.fancybox.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/jquery-ui.css')}}" rel="stylesheet">
    <link href="{{asset('css/nice-select.css')}}" rel="stylesheet">
    <link href="{{asset('css/color/theme-color.css')}}" id="jssDefault" rel="stylesheet">
    <link href="{{asset('css/switcher-style.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.7.1/nouislider.min.css" integrity="sha512-qveKnGrvOChbSzAdtSs8p69eoLegyh+1hwOMbmpCViIwj7rn4oJjdmMvWOuyQlTOZgTlZA0N2PXA7iA8/2TUYA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/6495a97894cf5d49dc5f72c0/1h3k9s036';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

<!-- Messenger Plugin chat Code -->
<div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "112733918531786");
    chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v17.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
</script>

<script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>


</div>
    @yield("content")
    @extends('client.footer')
<!-- jequery plugins -->
<script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.js')}}"></script>
    <script src="{{asset('js/wow.js')}}"></script>
    <script src="{{asset('js/validation.js')}}"></script>
    <script src="{{asset('js/jquery.fancybox.js')}}"></script>
    <script src="{{asset('js/appear.js')}}"></script>
    <script src="{{asset('js/scrollbar.js')}}"></script>
    <script src="{{asset('js/isotope.js')}}"></script>
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('js/jQuery.style.switcher.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.js')}}"></script>
    <script src="{{asset('js/nav-tool.js')}}"></script>
    <script src="{{asset('js/product-filter.js')}}"></script>

<!-- main-js -->
<script src="{{asset('js/script.js')}}"></script>


<!-- Code hien thi icon Face Zalo -->
<style>
    .photheme-mobile-contact-bar{
        display:none
    }
    .photheme-pc-contact-bar{
        left: 30px;
        bottom: 30px;
        position: fixed;
        z-index: 998;
        margin-bottom:0
    }
    .photheme-pc-contact-bar li{
        width: 44px;
        height: 46px;
        overflow: hidden;
        margin-bottom: 0;
        list-style: none;
    }
    .photheme-pc-contact-bar li.facebook{
        margin-bottom: 8px;
        background: url(https://1.bp.blogspot.com/-VbN-gi1xiYQ/YBJy3pC7v2I/AAAAAAAAJl0/uBZq95iIwsQpg3Bo_8yb4NMTs6j0GJ12ACLcBGAsYHQ/s44/fb.png);
        background-repeat: no-repeat;
    }
    .photheme-pc-contact-bar li.zalo{
        background: url(https://1.bp.blogspot.com/-sEGByHlRYxU/YBJy3qQDnjI/AAAAAAAAJl4/ofjocpfb57EGfCEm1-U6_Yp8jhQSP7LcwCLcBGAsYHQ/s0/zl.png);    background-repeat: no-repeat;
    }
    .photheme-pc-contact-bar li a{
        display: block;
        width: 44px;
        height: 44px;
    }

    @media only screen and (max-width: 499px) {
        .photheme-pc-contact-bar{
            display:none
        }
        .photheme-mobile-contact-bar{
            left: 10px;
            bottom: 10px;
            position: fixed;
            z-index: 998;
            margin-bottom:0;
            display:block !Important
        }
        .photheme-mobile-contact-bar li{
            display:inline-block;
            float:left;
            margin-right:7px;
            list-style:none
        }
        .photheme-mobile-contact-bar li.facebook{
            margin-bottom: 8px;
            background: url(https://1.bp.blogspot.com/-VbN-gi1xiYQ/YBJy3pC7v2I/AAAAAAAAJl0/uBZq95iIwsQpg3Bo_8yb4NMTs6j0GJ12ACLcBGAsYHQ/s44/fb.png);
            background-repeat: no-repeat;
        }
        .photheme-mobile-contact-bar li.zalo{
            background: url(https://1.bp.blogspot.com/-sEGByHlRYxU/YBJy3qQDnjI/AAAAAAAAJl4/ofjocpfb57EGfCEm1-U6_Yp8jhQSP7LcwCLcBGAsYHQ/s0/zl.png);    background-repeat: no-repeat;
        }
        .photheme-mobile-contact-bar li a{
            display: block;
            width: 44px;
            height: 44px;}
        .photheme-mobile-contact-bar li.hotline {
            background: url(https://1.bp.blogspot.com/-D4cWxxDWjZY/YBJy3qUVuuI/AAAAAAAAJl8/0qw0rdQmDKYz-oPl81-jEHwJgHtlocOEwCLcBGAsYHQ/s250/p2.gif);
            background-repeat: no-repeat;
            background-size: 44px;
        }
    }

</style>
<ul class='photheme-pc-contact-bar'>
    <li class='facebook'>
        <a href='https://m.me/ChipHomeeee/' rel='nofollow' target='_blank'/>
    </li>
    <li class='zalo'>
        <a href='https://zalo.me/0904534464' rel='nofollow' target='_blank'/>
    </li>
</ul>
<ul class='photheme-pc-contact-bar'>
    <li class='zalo'>
        <a href='https://zalo.me/0904534464' rel='nofollow' target='_blank'/>
    </li>
</ul>
<ul class='photheme-mobile-contact-bar'>
    <li class='facebook'>
        <a href='https://m.me/ChipHomeeee/' rel='nofollow' target='_blank'/>
    </li>
    <li class='zalo'>
        <a href='https://zalo.me/0858862720' rel='nofollow' target='_blank'/>
    </li>
    <li class='hotline'>
        <a href='tel:0858862720' rel='nofollow' target='_blank'/>
    </li>
</ul>
<!-- Messenger Plugin chat Code -->
<!-- Messenger Plugin chat Code -->
<div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "109815912161364");
    chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v17.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<!-- Ket thuc doan code hien thi icon Zalo, facebook -->
</body><!-- End of .page_wrapper -->

<!-- Mirrored from azim.commonsupport.com/Realshed/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Jun 2023 14:55:16 GMT -->
</html>
