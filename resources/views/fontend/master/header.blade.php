<header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="top-header-content d-flex align-items-center justify-content-between">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="{{ route('indexHome') }}"><img src="logo/logo3.png" alt="" style="width: 90%;height: 135px;"></a>
                        </div>

                        <!-- Login Search Area -->
                        <div class="login-search-area d-flex align-items-center">
                            <!-- Login -->
                           
                            <div class="login d-flex">
                                 @if(Auth::check())
                                    <div class="dropdown">
                                              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Xin chào {{Auth::user()->name}}
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" style="color:red;text-align: center;" href="#">Xem hồ sơ</a>
                                                <a class="dropdown-item" style="color:red;text-align: center;" href="#">Đăng xuất</a>
                                                
                                            </div>
                                    </div>
                                @else
                                <a href="{{route('login-user')}}">Đăng nhập</a>
                                <a href="{{route('signup-user')}}">Đăng ký</a>
                                @endif
                            </div>
                            <!-- Search Form -->
                            <div class="search-form">
                                <form action="{{route('search-new')}}" method="post">
                                    @csrf
                                    <input type="search" name="search" class="form-control" placeholder="Tìm kiếm">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Area -->
    <div class="newspaper-main-menu" id="stickyMenu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="newspaperNav">

                    <!-- Logo -->
                    <div class="logo">
                        <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                    </div>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li class="active"><a href="{{ route('indexHome') }}">Home</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="catagories-post.html">Catagories</a></li>
                                        <li><a href="single-post.html">Single Articles</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="#">Dropdown</a>
                                            <ul class="dropdown">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="catagories-post.html">Catagories</a></li>
                                                <li><a href="single-post.html">Single Articles</a></li>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Mega Menu</a>
                                    <div class="megamenu">
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Catagories</li>
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="catagories-post.html">Catagories</a></li>
                                            <li><a href="single-post.html">Single Articles</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Catagories</li>
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="catagories-post.html">Catagories</a></li>
                                            <li><a href="single-post.html">Single Articles</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Catagories</li>
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="catagories-post.html">Catagories</a></li>
                                            <li><a href="single-post.html">Single Articles</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                        <div class="single-mega cn-col-4">
                                            <!-- Single Featured Post -->
                                            <div class="single-blog-post small-featured-post d-flex">
                                                <div class="post-thumb">
                                                    <a href="#"><img src="img/bg-img/23.jpg" alt=""></a>
                                                </div>
                                                <div class="post-data">
                                                    <a href="#" class="post-catagory">Travel</a>
                                                    <div class="post-meta">
                                                        <a href="#" class="post-title">
                                                            <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                                        </a>
                                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Single Featured Post -->
                                            <div class="single-blog-post small-featured-post d-flex">
                                                <div class="post-thumb">
                                                    <a href="#"><img src="img/bg-img/24.jpg" alt=""></a>
                                                </div>
                                                <div class="post-data">
                                                    <a href="#" class="post-catagory">Politics</a>
                                                    <div class="post-meta">
                                                        <a href="#" class="post-title">
                                                            <h6>Augue semper congue sit amet ac sapien. Fusce consequat.</h6>
                                                        </a>
                                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#">Politics</a></li>
                                <li><a href="#">Breaking News</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Health</a></li>
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Sports</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>