<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <p class="centered"><a href="profile.html"><img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="img-circle" width="60" height="60"></a></p>
            <h5 class="centered"> {{ Auth::user()->name }}</h5>

            <li class="mt">
                <a class="active" href="/">
                    <i class="fa fa-dashboard"></i>
                    <span>Trang Chủ</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-cogs"></i>
                    <span>Người Dùng</span>
                </a>
                <ul class="sub">
                    <li><a href="/admin/users">Danh Sách</a></li>
                </ul>
            </li>


            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-book"></i>
                    <!-- <i class="fa fa-desktop"></i> -->
                    <span>Bài Viết</span>
                </a>
                <ul class="sub">
                    <li><a href="/admin/blogs">Danh Sách</a></li>
                    <li><a href="/admin/blogs/create">Thêm Mới</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-th"></i>
                    <span>Khoa</span>
                </a>
                <ul class="sub">
                    <li><a href="/admin/department/list">Danh Sách Khoa</a></li>
                    <li><a href="/admin/department/add/page">Thêm Mới Khoa</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-th"></i>
                    <span>Khóa Học</span>
                </a>
                <ul class="sub">
                    <li><a href="/admin/courses">Danh Sách Khóa Học</a></li>
                    <li><a href="/admin/courses/create">Thêm Mới Khóa Học</a></li>

                </ul>
            </li>


            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-book"></i>
                    <span>Extra Pages</span>
                </a>
                <ul class="sub">
                    <li><a href="blank.html">Blank Page</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="lock_screen.html">Lock Screen</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-tasks"></i>
                    <span>Forms</span>
                </a>
                <ul class="sub">
                    <li><a href="form_component.html">Form Components</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;">
                    <i class=" fa fa-bar-chart-o"></i>
                    <span>Charts</span>
                </a>
                <ul class="sub">
                    <li><a href="morris.html">Morris</a></li>
                    <li><a href="chartjs.html">Chartjs</a></li>
                </ul>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
