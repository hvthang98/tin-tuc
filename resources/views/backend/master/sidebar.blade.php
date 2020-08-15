<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Quản lý User</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ route('getCreateUser') }}">Tạo user</a></li>
                        <li><a href="{{ route('listUser') }}">Danh sách user</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Quản lý tin tức</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('add-new')}}">Tạo tin tức mới</a></li>
                        <li><a href="{{route('all-news')}}">Danh sách tin tức</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="{{ route('listCategory') }}">
                        <i class="fa fa-book"></i>
                        <span>Quản lý danh mục</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
