<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>OTAKU</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes" />

        <link rel="icon" type="image/png" href="{{ asset('img/favicon.ico') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Devanagari:wght@600&amp;display=swap">
        <link href="https://fonts.googleapis.com/css2?family=Devanagari:wght@400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    </head>

    @php
    $now_route = \Route::currentRouteName();
    @endphp

    @if(!$isMobile)
    <div id="registration_pc">
        <body>
            @if (\Route::currentRouteName() != 'work')
            <header>
                <div class="header_logo" id="header_logo"><a href="{{ route('index') }}">OTAKU</a></div>
                <div class="header_menu" id="header_menu">
                    @if (\Route::currentRouteName() == 'index')
                    <a href="#member" class="">MEMBER</a><br>
                    <a href="#company" class="">COMPANY</a><br>
                    <a href="#work" class="">CREATIVE WORK</a><br>
                    @else
                    <a href="{{ route('index') }}#member" class="">MEMBER</a><br>
                    <a href="{{ route('index') }}#company" class="">COMPANY</a><br>
                    <a href="{{ route('index') }}#work" class="">CREATIVE WORK</a><br>
                    @endif
                    <a href="https://www.instagram.com/_usagicoffee/?igshid=YmMyMTA2M2Y%3D" class="">SNS　<img src="{{ asset('img/yazi.png') }}"></a><br>
                </div>
            </header>
            @endif

            @yield('content')

            <footer @if (\Route::currentRouteName() == 'work') style="background: #011E40;" @endif >
                <div class="footer_menu_flex">
                    <div class=""><a href="{{ route('contact') }}"><img src="{{ asset('img/yazi.png') }}">　Contact Form</a></div>
                    <div class="footer_text">THOSE WHO KNOW ONLY ONE <br> COUNTRY KNOW NO COUNTRY</div>
                </div>

                <div class="footer_menu_flex">
                    <div></div>
                    <div class="footer_menu">
                        @if (\Route::currentRouteName() == 'index')
                        <a href="#member" class="">MEMBER</a>　
                        <a href="#company" class="">COMPANY</a>　
                        <a href="#work" class="">CREATIVE WORK</a>　
                        @else
                        <a href="{{ route('index') }}#member" class="">MEMBER</a>　
                        <a href="{{ route('index') }}#company" class="">COMPANY</a>　
                        <a href="{{ route('index') }}#work" class="">CREATIVE WORK</a>　
                        @endif
                        <a href="https://www.instagram.com/_usagicoffee/?igshid=YmMyMTA2M2Y%3D" class="">SNS</a>
                    </div>
                </div>

            </footer>
        </body>
    </div>

    @else
    <div id="registration_sp">
    @php
    $now_route = \Route::currentRouteName();
    @endphp
        <body>
            <header style="padding: 10px; margin-top: 0px; border-top: none;">
                <a class="logo_a_sp" href="/">
                    <img src="{{ asset('img/logo_white.png') }}" class="logo_img_sp" alt="">
                </a>
                <div class="hamburger-menu">
                    <input type="checkbox" id="menu-btn-check">
                    <label for="menu-btn-check" class="menu-btn"><span></span></label>
                    <div class="menu-content">
                        <ul>
                            <li>
                                <a href ="" class="menu_head_sp">MEMBER</a>
                            </li>
                            <li>
                                <a href ="" class="menu_content_sp">COMPANY</a>
                            </li>
                            <li>
                                <a href ="" class="menu_content_sp">CREATIVE WORK</a>
                            </li>
                            <li>
                                <a href ="" class="menu_content_sp">CONTACT</a>
                            </li>
                        </ul>
                        <div class="header_icon_list">
                            <a href=""><img src="{{ asset('img/instagram.png') }}" class="header_icon_sp"></a>
                        </div>
                    </div>
                </div>
            </header>
            <div style="margin-top:62px;"></div>
            @yield('content_sp')

            <footer class="footer_sp" style="margin-top: 30px;">

            </footer>
        </body>
    </div>
    @endif

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/app_sp.js') }}"></script>
    <script src="{{ asset('js/slick.js') }}"></script>
    <script src="{{ asset('js/recruit.js') }}"></script>
    <script type="text/javascript">
    if ((navigator.userAgent.indexOf('iPhone') > 0 && navigator.userAgent.indexOf('iPad') == -1) 
        || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0) {
        document.getElementById('registration_pc').style.display = "none";
        document.getElementById('registration_sp').style.visibility = "visible";
    } else {
        document.getElementById('registration_sp').style.display = "none";
    }
    </script>
</html>