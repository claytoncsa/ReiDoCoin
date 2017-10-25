<!-- Navigation Bar-->
<header id="topnav">
    <div class="topbar-main">
        <div class="container">

            <!-- Logo container-->
            <div class="logo">
                <!-- Text Logo -->
                <!--<a href="index.html" class="logo">-->
                <!--Zircos-->
                <!--</a>-->
                <!-- Image Logo -->
                <a href="index.html" class="logo">Rei do Coin</a>

            </div>
            <!-- End Logo container-->


            <div class="menu-extras">

                <ul class="nav navbar-nav navbar-right pull-right">




                    <li class=" navbar-c-items">
                        <a href="{{url('/quemsomos')}}" class=" waves-effect waves-light profile" aria-expanded="true">Quem somos?</a>

                    </li>
                    <li class="navbar-c-items">
                        <form role="search" class="navbar-left app-search pull-left hidden-xs">
                            <input type="text" placeholder="Sua carteira    " class="form-control">
                            <a href=""><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                </ul>
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>
            <!-- end menu-extras -->

        </div> <!-- end container -->
    </div>
    <!-- end topbar-main -->

    <div class="navbar-custom">
        <div class="container">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">

                    <li class="has-submenu">
                        <a href="{{url('/dashboard')}}"><i class="mdi mdi-view-dashboard"></i>Dashboard</a>
                    </li>
                    <li class="has-submenu">
                        <a href="#"><i class="mdi mdi-diamond"></i>Nossas Pools</a>
                        <ul class="submenu">
                            <li>
                                <a href="https://etc.reidocoin.com.br/">Ethereum Classic</a>
                            </li>

                            <li>
                                <a href="https://music.reidocoin.com.br/">Musicoin</a>
                            </li>

                            <li>
                                <a href="https://xmr.reidocoin.com.br/">Monero</a>
                            </li>

                            <li>
                                <a href="https://sumo.reidocoin.com.br/">Sumokoin</a>
                            </li>

                            <li>
                                <a href="https://ubq.reidocoin.com.br/">Ubiq</a>
                            </li>

                            <li>
                                <a href="https://exp.reidocoin.com.br/">Expanse</a>
                            </li>

                            <li>
                                <a href="https://soil.reidocoin.com.br/">Soil</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="http://www.reidocoin.com"><i class="mdi mdi-comment-text"></i>Blog</a>
                    </li>
                    <li class="has-submenu">
                        <a href="{{url('/contato')}}"><i class="mdi mdi-phone-in-talk"></i>Contato</a>
                    </li>
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                @endguest
                    </ul>
                </ul>


                <!-- End navigation menu -->
            </div> <!-- end #navigation -->
        </div> <!-- end container -->
    </div> <!-- end navbar-custom -->
</header>
<!-- End Navigation Bar-->