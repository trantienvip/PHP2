<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    @if (isset($posts))
                        <a href="javascript: void(0);">
                            <i class="la la-dashboard"></i>
                            <span class="badge badge-info badge-pill float-right">{{count($posts)}}</span>
                            <span> Tổng số bài viết </span>
                        </a>
                    @elseif(isset($topics))
                        <a href="javascript: void(0);">
                            <i class="la la-dashboard"></i>
                            <span class="badge badge-info badge-pill float-right">{{count($topics)}}</span>
                            <span> Tổng số topic </span>
                        </a>
                    @endif
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="la la-cube"></i>
                        <span> Quản lý bài viết </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{BASE_URL. 'cpanel'}}">Danh sách bài viêt</a>
                        </li>
                        <li>
                            <a href="{{BASE_URL. 'cpanel/add'}}">Thêm bài viêt</a>
                        </li>
                        <li>
                            <a href="#">Thùng rác</a>
                        </li>
                    </ul>
                </li>

                <li class="menu-title mt-2">Components</li>

                

                <li>
                    <a href="javascript: void(0);">
                        <i class="la la-map"></i>
                        <span> Quản lý chủ đề </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{BASE_URL.'cpanel-topic'}}">Xem danh sách</a>
                        </li>
                        <li>
                            <a href="{{BASE_URL. 'cpanel-topic/add'}}">Thêm topic</a>
                        </li>
                        <li>
                            <a href="#">Thùng rác</a>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>