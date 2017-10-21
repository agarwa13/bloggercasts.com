<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <!-- Collapsed Hamburger -->
            <div class="hamburger">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#spark-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Branding Image -->
            @include('spark::nav.brand')
        </div>

        <div class="collapse navbar-collapse" id="spark-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">

                <!-- Right Side Of Navbar -->
                <li class="dropdown">
                    <!-- User Photo / Name -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Services
                        {{--<img :src="user.photo_url" class="spark-nav-profile-photo m-r-xs">--}}
                        {{--<span class="caret"></span>--}}
                    </a>

                    <!-- Google Analytics Related Services-->
                    <ul class="dropdown-menu" role="menu">

                        {{--<li class="dropdown-header">Google Analytics</li>--}}

                        {{--<!-- Eliminate Spam -->--}}
                        {{--<li>--}}
                            {{--<a href="/services/eliminate-analytics-spam">--}}
                                {{--<i class="fa fa-fw fa-btn fa-user-secret"></i>Eliminate Spam--}}
                            {{--</a>--}}
                        {{--</li>--}}

                        <!-- WordPress Related Services-->
                        <li class="dropdown-header">WordPress</li>

                        <!-- Eliminate Spam -->
                        <li>
                            <a href="/services/free-wordpress-setup">
                                <i class="fa fa-fw fa-btn fa-wordpress"></i>Blog Setup
                            </a>
                        </li>

                    </ul>
                </li>

                <li><a href="/login" class="navbar-link">Login</a></li>
                <li><a href="/register" class="navbar-link">Register</a></li>
            </ul>
        </div>
    </div>
</nav>
