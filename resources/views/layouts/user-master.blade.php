<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Kolay-Epin / Epin almanın kolay yolu.</title>

    <!-- Favicons -->
    <link href="{{asset('img/anasayfalogo.png')}}" rel="icon">
    <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/zabuto_calendar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('lib/gritter/css/jquery.gritter.css')}}" />
    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet">
    <script src="{{asset('lib/chart-master/Chart.js')}}"></script>

    <!-- =======================================================
      Template Name: Dashio
      Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
      Author: TemplateMag.com
      License: https://templatemag.com/license/
    ======================================================= -->
</head>

<body>
<section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="/" style="color: #880000" class="logo"> <img src="{{asset('img/logoo.webp')}}" width="40"></a>

        <!--logo end-->
        <div class="nav notify-row" id="top_menu">

            <ul class="nav top-menu">

            </ul>

        </div>
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
                <!-- settings start -->

                <!-- settings end -->
                <!-- inbox dropdown start-->

                <!-- inbox dropdown end -->
                <!-- notification dropdown start-->

                <!-- notification dropdown end -->
            </ul>
            <!--  notification end -->
        </div>
        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <div id="app">
                    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                        <div class="container">
                            <div class="nav pull-right top-menu"  id="navbarSupportedContent">
                                <!-- Left Side Of Navbar -->
                                <ul class="navbar-nav mr-auto">

                                </ul>

                                <!-- Right Side Of Navbar -->
                                <div class="btn-group" style="width:50px;right: 40px"></div>
                                    <button type="button" class="btn btn-theme04 dropdown-toggle" data-toggle="dropdown">
                                        <img src="/uploads/avatars/{{Auth::user()->avatar}}" style="width:30px;" class="img-circle"> &nbsp; {{ Auth::user()->name }} <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="/profile">Profil</a></li>
                                        <li><a href="/change-password">Şifre Değiştir</a></li>
                                        <li class="divider"></li>
                                        <li><a class="dropdown-item" href="/login"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Çıkış Yap') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                    </nav>
                </div>
            </ul>
        </div>
    </header>

    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->

    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
                <p class="centered"><a href='/'><img src="{{asset('img/anasayfalogoo.webp')}}" class="img-rounded" style="margin-top: 25px;" width="180"></a></p>

                @if(Auth::user()->is_manager == false)
                <li class="mt" >
                    <a class="active" href="/" style="background-color: transparent;">
                        <i class="fa fa-dashboard"></i>
                        <span>Anasayfa</span>
                    </a>
                </li>
                    <li class="sub-menu">
                        <a href="javascript:;" style="background-color: transparent">
                            <img src="{{asset('img/kologo.webp')}}" width="23" class="img-circle"> &nbsp;
                            <span>Knight Online</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{ URL::to('/game/knight-online-cash') }}" style="background-color:#2f323a"> Knight Cash & Npoints</a></li>
                            <li><a href="{{ URL::to('/game/knight-online-goldbar') }}" style="background-color:#2f323a">  Knight Online GB</a></li>
                            <li><a href="{{ URL::to('/game/knight-online-pre') }}" style="background-color:#2f323a">Knight Premium</a></li>
                            <li><a href="{{ URL::to('/game/steam-ko-cash') }}" style="background-color:#2f323a"> Steam Ko Npoints</a></li>

                        </ul>
                    </li>
                <li class="sub-menu">
                    <a href="javascript:;" style="background-color: transparent">
                        <img src="{{asset('img/m2logo.webp')}}" width="30" class="img-circle">
                        <span>Metin 2</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ URL::to('/game/m2-ep') }}" style="background-color:#2f323a">Metin2 Ejderha Parası</a></li>
                        <li><a href="{{ URL::to('/game/m2-won') }}" style="background-color:#2f323a">Metin2 Won</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" style="background-color: transparent">
                        <img src="{{asset('img/bdologo.webp')}}" width="25" class="img-circle">
                        <span>Black Desert Online</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ URL::to('/game/blackdesertpaket') }}"style="background-color:#2f323a">Black Desert Online Paketler</a></li>
                        <li><a href="{{ URL::to('/game/blackdesertacoin') }}"style="background-color:#2f323a">Black Desert Online Acoin</a></li>
                    </ul>
                </li>


                <li class="sub-menu">
                    <a href="javascript:;" style="background-color: transparent">
                        <img src="{{asset('img/lollogo.webp')}}" width="25" class="img-circle">
                        <span>League Of Legends</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ URL::to('/game/eunordrp') }}"style="background-color:#2f323a">League of Legends Eu Nordic </a></li>
                        <li><a href="{{ URL::to('/game/trrp') }}"style="background-color:#2f323a">Riot Points - LOL RP Turkey</a></li>
                        <li><a href="{{ URL::to('/game/euwestrp') }}"style="background-color:#2f323a">Riot Points Eu West</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" style="background-color: transparent">
                        <img src="{{asset('img/pblogo.webp')}}" width="27" class="img-circle">
                        <span>Point Blank</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ URL::to('/game/pointblanktg') }}" style="background-color:#2f323a">Point Blank TG</a></li>

                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" style="background-color: transparent">
                        <img src="{{asset('img/zulalogo.webp')}}" width="35" class="img-circle">
                        <span>Zula</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ URL::to('/game/zulaaltin') }}"style="background-color:#2f323a">Zula Altın</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" style="background-color: transparent">
                        <img src="{{asset('img/steamlogo.webp')}}" width="30" class="img-circle">
                        <span>Steam</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ URL::to('/game/steamtrkod') }}"style="background-color:#2f323a">Steam Cüzdan Kodu TL</a></li>
                        <li><a href="{{ URL::to('/game/steameukod') }}"style="background-color:#2f323a">Steam Wallet Code EU</a></li>
                        <li><a href="{{ URL::to('/game/steamuskod') }}"style="background-color:#2f323a">Steam Wallet Code USD</a></li>
                        <li><a href="{{ URL::to('/game/steamrandomkod') }}"style="background-color:#2f323a">Steam Random Key </a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" style="background-color: transparent">
                        <img src="{{asset('img/spotifylogo.webp')}}" width="30" class="img-circle">
                        <span>Spotify</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ URL::to('/game/spotifytl') }}"style="background-color:#2f323a">Steam Premium TL </a></li>
                        <li><a href="{{ URL::to('/game/spotifyus') }}"style="background-color:#2f323a">Steam Premium US </a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" style="background-color: transparent">
                        <img src="{{asset('img/eglogo.webp')}}" width="27" class="img-circle">
                        <span>Epic Games</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ URL::to('/game/fortnitevpapel') }}"style="background-color:#2f323a">Fortnite V Papel </a></li>
                        <li><a href="{{ URL::to('/game/maneater') }} "style="background-color:#2f323a">Maneater Epic Store Key </a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" style="background-color: transparent">
                        <img src="{{asset('img/gplogo.webp')}}" width="30" class="img-circle">
                        <span>Google Play Store</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ URL::to('/game/google-play-kodu') }}"style="background-color:#2f323a">Google Play Kodu </a></li>

                    </ul>
                </li>
                @endif
                @if(Auth::user()->is_manager == true)
                    <li class="sub">
                        <a class="sub" href="/home"  style="background-color: transparent">
                            <i class="fa fa-dashboard"></i>
                            <span>Anasayfa</span>
                        </a>
                    </li>
                    <li class="sub">
                        <a class="sub" href="/users"  style="background-color: transparent">
                            <span>Kullanıcılar</span>
                        </a>

                    </li>
                    <li class="sub">
                        <a class="sub" href="/urun-ekle" style="background-color: transparent">
                            <span>Ürün Ekle</span>
                        </a>

                    </li>
                    <li class="sub">
                        <a class="sub" href="/user-import" style="background-color: transparent">
                            <span>Kullanıcı İmport</span>
                        </a>

                    </li>
                    <li class="sub">
                        <a class="sub" href="/product-import" style="background-color: transparent">
                            <span>Ürün İmport</span>
                        </a>

                    </li>
                    <li class="sub">
                        <a class="sub" href="/product-list" style="background-color: transparent">
                            <span>Ürünleri Listele</span>
                        </a>

                    </li>
                    <li class="sub">
                        <a class="sub" href="/siparis" style="background-color: transparent">
                            <span>Siparişler</span>
                        </a>

                    </li>
                    @endif
            </ul>

            <ul>

            </ul>
            <!-- sidebar menu end-->

        </div>

    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <br><br>
        @include('layouts.alert')
        @yield('content')
        <!-- Ana İçerik gelecek -->
        </section>
    </section>

    <!--footer end-->
</section>
<!-- js placed at the end of the document so the pages load faster -->
<script src="{{asset('lib/jquery/jquery.min.js')}}"></script>

<script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script class="include" type="text/javascript" src="{{asset('lib/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('lib/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
<script src="{{asset('lib/jquery.sparkline.js')}}"></script>
<!--common script for all pages-->
<script src="{{asset('lib/common-scripts.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/gritter/js/jquery.gritter.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/gritter-conf.js')}}"></script>
<!--script for this page-->
<script src="{{asset('lib/sparkline-chart.js')}}"></script>
<script src="{{asset('lib/zabuto_calendar.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Kolay Epine Hoşgeldiniz!',
            // (string | mandatory) the text inside the notification
            text: 'Hızlı ve güvenilir alışverişin tek adresi. KOLAY-EPİN.',
            // (string | optional) the image to display on the left
            image: '{{asset('img/logoo.webp')}}',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: false,
            // (int | optional) the time you want it to be alive for before fading out
            time: 8000,
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
    });
</script>
<script type="application/javascript">
    $(document).ready(function() {
        $("#date-popover").popover({
            html: true,
            trigger: "manual"
        });
        $("#date-popover").hide();
        $("#date-popover").click(function(e) {
            $(this).hide();
        });

        $("#my-calendar").zabuto_calendar({
            action: function() {
                return myDateFunction(this.id, false);
            },
            action_nav: function() {
                return myNavFunction(this.id);
            },
            ajax: {
                url: "show_data.php?action=1",
                modal: true
            },
            legend: [{
                type: "text",
                label: "Special event",
                badge: "00"
            },
                {
                    type: "block",
                    label: "Regular event",
                }
            ]
        });
    });

    function myNavFunction(id) {
        $("#date-popover").hide();
        var nav = $("#" + id).data("navigation");
        var to = $("#" + id).data("to");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }

</script>
</body>

</html>
