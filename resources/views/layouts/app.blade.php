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
                    <a href="{{ route('contact') }}" class="">CONTACT</a><br>
                    @else
                    <a href="{{ route('index') }}#member" class="">MEMBER</a><br>
                    <a href="{{ route('index') }}#company" class="">COMPANY</a><br>
                    <a href="{{ route('index') }}#work" class="">CREATIVE WORK</a><br>
                    <a href="{{ route('contact') }}" class="">CONTACT</a><br>
                    @endif
                    <a href="https://www.instagram.com/_usagicoffee/?igshid=YmMyMTA2M2Y%3D" class="" target="_blank">SNS　<img src="{{ asset('img/yazi.png') }}"></a><br>
                </div>
            </header>
            @else
            <div class="hamburger-menu">
                <input type="checkbox" id="menu-btn-check">
                <label for="menu-btn-check" class="menu-btn"><span></span></label>
                <div class="menu-content_work">
                    <ul>
                        <li>
                            <a href="#coffee" class="menu_content">兎珈琲とは</a>
                        </li>
                        <li>
                            <a href="#wall" class="menu_content">兎珈琲の壁</a>
                        </li>
                        <li>
                            <a href="#stair" class="menu_content">箪笥階段</a>
                        </li>
                        <li>
                            <a href="#glass" class="menu_content">昭和ガラス</a>
                        </li>
                        <li>
                            <a href="#bunny" class="menu_content">バニーカステラ</a>
                        </li>
                        <li>
                            <a href="#detail" class="menu_content">店舗情報</a>
                        </li>
                        <a href="https://www.instagram.com/_usagicoffee/?igshid=YmMyMTA2M2Y%3D" class="" target="_blank"><img src="{{ asset('img/insta.png') }}" class="header_icon_sp"></a>
                    </ul>
                </div>
            </div>
            @endif

            @yield('content')

            <footer @if (\Route::currentRouteName() == 'work') style="background: #011E40;" @endif >
                <div class="footer_menu_flex">
                    <div class=""><a href="{{ route('contact') }}"><img src="{{ asset('img/yazi.png') }}" style="width: 15px;">　Contact Form</a></div>
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
                        <a href="https://www.instagram.com/_usagicoffee/?igshid=YmMyMTA2M2Y%3D" class="" target="_blank">SNS</a>
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
            @if (\Route::currentRouteName() != 'work')  
            <header style="padding: 20px; margin-top: 0px; border-top: none; position: fixed; width: 100%; z-index: 9999;">
                <a href="{{ route('index') }}" class="logo_sp">OTAKU</a>
                <div class="hamburger-menu">
                    <input type="checkbox" id="menu-btn-check">
                    <label for="menu-btn-check" class="menu-btn" style="top: 0px;right: 2%;"><span></span></label>
                    <div class="menu-content">
                        <ul>
                            @if (\Route::currentRouteName() == 'index')
                            <li>
                                <a href ="#member_jump" class="menu_content_sp">MEMBER</a>
                            </li>
                            <li>
                                <a href ="#profile_jump" class="menu_content_sp">COMPANY</a>
                            </li>
                            <li>
                                <a href ="#work_jump" class="menu_content_sp">CREATIVE WORK</a>
                            </li>
                            @else
                            <li>
                                <a href ="{{ route('index') }}#member_jump" class="menu_content_sp">MEMBER</a>
                            </li>
                            <li>
                                <a href ="{{ route('index') }}#profile_jump" class="menu_content_sp">COMPANY</a>
                            </li>
                            <li>
                                <a href ="{{ route('index') }}#work_jump" class="menu_content_sp">CREATIVE WORK</a>
                            </li>
                            @endif
                            <li>
                                <a href ="{{ route('contact') }}" class="menu_content_sp">CONTACT</a>
                            </li>
                            <a href="https://www.instagram.com/_usagicoffee/?igshid=YmMyMTA2M2Y%3D" class="" target="_blank"><img src="{{ asset('img/insta.png') }}" class="header_icon_sp"></a>
                        </ul>
                    </div>
                </div>
            </header>
            @else
            <div class="hamburger-menu">
                <input type="checkbox" id="menu-btn-check">
                <label for="menu-btn-check" class="menu-btn"><span></span></label>
                <div class="menu-content">
                    <ul>
                        <li>
                            <a href="#coffee_sp" class="menu_content_sp">兎珈琲とは</a>
                        </li>
                        <li>
                            <a href="#wall_sp" class="menu_content_sp">兎珈琲の壁</a>
                        </li>
                        <li>
                            <a href="#stair_sp" class="menu_content_sp">箪笥階段</a>
                        </li>
                        <li>
                            <a href="#glass_sp" class="menu_content_sp">昭和ガラス</a>
                        </li>
                        <li>
                            <a href="#bunny_sp" class="menu_content_sp">バニーカステラ</a>
                        </li>
                        <li>
                            <a href="#detail_sp" class="menu_content_sp">店舗情報</a>
                        </li>
                        <a href="https://www.instagram.com/_usagicoffee/?igshid=YmMyMTA2M2Y%3D" class="" target="_blank"><img src="{{ asset('img/insta.png') }}" class="header_icon_sp"></a>
                    </ul>
                </div>
            </div>
            @endif

            @yield('content_sp')

            <footer class="footer_sp" style="margin-top: 30px; padding: 40px 20px;">
                <a href="{{ route('contact') }}"><img src="{{ asset('img/yazi.png') }}" style="width: 16px;">　Contact Form</a>
                <div class="footer_text_sp">THOSE WHO KNOW<br>ONLY ONE<br>COUNTRY KNOW<br>NO COUNTRY</div>
            </footer>
        </body>
    </div>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
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