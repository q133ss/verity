<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css?_v=20221017195015" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer">
    @yield('meta')
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js?_v=20221017195015" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js?_v=20221017195015" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css?_v=20221017195015" integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
<script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.js?_v=20221017195015" integrity="sha512-RCgrAvvoLpP7KVgTkTctrUdv7C6t7Un3p1iaoPr1++3pybCyCsCZZN7QEHMZTcJTmcJ7jzexTO+eFpHk4OCFAg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.css?_v=20221017195015" integrity="sha512-YdYyWQf8AS4WSB0WWdc3FbQ3Ypdm0QCWD2k4hgfqbQbRCJBEgX0iAegkl2S1Evma5ImaVXLBeUkIlP6hQ1eYKQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js?_v=20221017195015" integrity="sha512-d4KkQohk+HswGs6A1d6Gak6Bb9rMWtxjOa0IiY49Q3TeFd5xAzjWXDCBW9RS7m86FQ4RzM2BdHmdJnnKRYknxw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.4/swiper-bundle.min.css?_v=20221017195015" integrity="sha512-V5B6OaBftIs7Kx8BBx7n2W42FpHP7MiXmDaKWTBdCsnStyS3gVYuA30kG6oABmh8uayFJDsfl2hCywak1eKE2w==" crossorigin="anonymous" referrerpolicy="no-referrer">
<script src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.4.1/jquery.twbsPagination.min.js?_v=20221017195015"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.4/swiper-bundle.min.js?_v=20221017195015" integrity="sha512-ztZ7m9gYJmuwemu0TmAp9QDuhFhOYbbIoN6iIKMi5ay88l8U5tkt5OOlA/fP8DI/p/OphEY7QIbuoDQKpVvf7w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="/assets/css/style.min.css?_v=20221017195015">
</html>
<body>
<header class="header">
    <div class="header__wrapper header__wrapper-black">
        <div class="containers"> <a class="header__logo" href="/"> <picture><source srcset="/assets/img/header/logo-black.webp" type="image/webp"><img src="/assets/img/header/logo-black.png"></picture></a>
            <div class="header__navs">
                <nav class="header__nav"><a href="/">??????????????</a></nav>
                <nav class="header__nav"> <a href="{{route('donate')}}">????????????????????????</a></nav>
                <nav class="header__nav"> <a href="{{route('volunteers')}}">??????????????????</a></nav>
                <nav class="header__nav"><a href="{{route('contributors')}}">????????????????????????</a></nav>
                <nav class="header__nav"><a href="{{route('verification')}}">???????????????? ??????????????????????</a></nav>
                <nav class="header__nav"> <a href="{{route('for.volunteers')}}">?????? ????????????????????</a></nav>
            </div>
            <div class="header__lang">
                <select class="clang_select" name="lang" style="display: none">
                    <option data-icon="/assets/svg/header/rus.svg" value="default" selected="">??????????????</option>
                    <option data-icon="/assets/svg/header/rus.svg" value="default" selected="">??????????????1</option>
                    <option data-icon="/assets/svg/header/rus.svg" value="default" selected="">??????????????2</option>
                </select>
            </div>
        </div>
    </div>
    <div class="header__banner">
        <div class="containers">
            <div class="header__banner-t">?????????????????? ?????? ???????????????????? ?????????? ?????????????????? ?????? ???? ??????????  ?????? ???? ?????? ?????? ???? ?????? ?????????????? ?????? ???????????????????? ?????????? ?????????????????? ?????? </div><a class="header__banner-b" href="{{route('verification')}}">??????????????????</a>
        </div>
    </div>
</header>
@yield('content')
<footer class="footer">
    <div class="footer__bg"> <img src="/assets/svg/bg.svg"></div>
    <div class="footer__over"><picture><source srcset="/assets/img/footer/banner.webp" type="image/webp"><img src="/assets/img/footer/banner.png"></picture></div>
    <div class="footer__banner">
        <div class="containers">
            <div class="footer__banner-t">
                ?????????????????? ?????????????????? ?? <br>??????????????</div><a class="footer__banner-b" href="{{route('donate')}}">????????????????????????</a>
        </div>
    </div>
    <div class="footer__line"> </div>
    <div class="footer__main">
        <div class="containers">
            <div class="footer__main-d"> <a class="footer__main-logo" href="/"> <picture><source srcset="/assets/img/footer/logo.webp" type="image/webp"><img src="/assets/img/footer/logo.png"></picture></a>
                <div class="footer__main-t">???? ?????????? ???????????????? ?? ?????????????????? ???????????????????????? ?????? ???? ??????, ???????? ???? ?????????????????????????????? ?????????? ???????????????? ???????????? ?? ???????????? ????????.</div>
            </div>
            <div class="footer__main-list">
                <div class="footer__main-title">??????????</div>
                <ul class="footer__main-l">
                    <li class="footer__main-i"> <a href="/">??????????</a></li>
                    <li class="footer__main-i"> <a href="/">??????????</a></li>
                    <li class="footer__main-i"> <a href="/">??????????</a></li>
                    <li class="footer__main-i"> <a href="/">??????????</a></li>
                    <li class="footer__main-i"> <a href="/">??????????</a></li>
                </ul>
            </div>
            <div class="footer__main-list">
                <div class="footer__main-title">??????????</div>
                <ul class="footer__main-l">
                    <li class="footer__main-i"> <a href="/">??????????</a></li>
                    <li class="footer__main-i"> <a href="/">??????????</a></li>
                    <li class="footer__main-i"> <a href="/">??????????</a></li>
                    <li class="footer__main-i"> <a href="/">??????????</a></li>
                    <li class="footer__main-i"> <a href="/">??????????</a></li>
                </ul>
            </div>
            <div class="footer__main-list">
                <div class="footer__main-title">??????????</div>
                <ul class="footer__main-l">
                    <li class="footer__main-i"> <a href="/">??????????</a></li>
                    <li class="footer__main-i"> <a href="/">??????????</a></li>
                    <li class="footer__main-i"> <a href="/">??????????</a></li>
                    <li class="footer__main-i"> <a href="/">??????????</a></li>
                    <li class="footer__main-i"> <a href="/">??????????</a></li>
                </ul>
            </div>
            <div class="footer__main-list">
                <div class="footer__main-title">??????????</div>
                <ul class="footer__main-l">
                    <li class="footer__main-i"> <a href="/">??????????</a></li>
                    <li class="footer__main-i"> <a href="/">??????????</a></li>
                    <li class="footer__main-i"> <a href="/">??????????</a></li>
                    <li class="footer__main-i"> <a href="/">??????????</a></li>
                    <li class="footer__main-i"> <a href="/">??????????</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer__line"> </div>
    <div class="footer__project">
        <div class="footer__project-name">?????? ..........................</div>
    </div>
</footer>
<script type="module" src="/assets/js/app.min.js?_v=20221017195015"></script>
<script>
    $(".header__navs .header__nav a").each(function () {
        var location2 = window.location.protocol + '//' + window.location.host + window.location.pathname;
        var link = this.href;
        if(link == location2){
            $(this).addClass('active');
            $(this).parent().addClass('header__nav-a');
        }
    })
</script>
@yield('scripts')
</body>
