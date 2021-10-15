<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-right mb-0">

        <li class="d-none d-sm-block">
            <form class="app-search">
                <div class="app-search-box">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <div class="input-group-append">
                            <button class="btn" type="submit">
                                <i class="fe-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </li>

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="<?php if(!empty($_SESSION['auth']['avatar'])): ?><?php echo e(PUBLIC_PATH.$_SESSION['auth']['avatar']); ?> <?php else: ?> <?php echo e(PUBLIC_PATH); ?>assets\images\users\user-1.jpg <?php endif; ?>" alt="user-image" class="rounded-circle">
                <span class="pro-user-name ml-1">
                    <?php if(isset($_SESSION['auth'])): ?>
                    <?php echo e($_SESSION['auth']['name']); ?>

                    <?php endif; ?>
                    <i class="mdi mdi-chevron-down"></i> 
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                <!-- item-->
                <div class="dropdown-item noti-title">
                    <h5 class="m-0 text-white">
                        Welcome ! <?php if(isset($_SESSION['auth'])): ?>
                                    <?php echo e($_SESSION['auth']['name']); ?>

                                    <?php endif; ?>
                    </h5>
                </div>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-user"></i>
                    <span>My Account</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-settings"></i>
                    <span>Settings</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-lock"></i>
                    <span>Lock Screen</span>
                </a>

                <div class="dropdown-divider"></div>

                <!-- item-->
                <a href="<?php echo e(BASE_URL.'logout'); ?>" class="dropdown-item notify-item">
                    <i class="fe-log-out"></i>
                    <span>Logout</span>
                </a>

            </div>
        </li>


    </ul>

    <!-- LOGO -->
    <div class="logo-box">
        <a href="<?php echo e(BASE_URL); ?>" class="logo text-center">
            <span class="logo-lg">
                <img src="<?php echo e(PUBLIC_PATH.'img/logo.png'); ?>" alt="" height="50">
                <!-- <span class="logo-lg-text-light">Upvex</span> -->
            </span>
            <span class="logo-sm">
                <!-- <span class="logo-sm-text-dark">X</span> -->
                <img src="http://static.ybox.vn/2020/2/0/1582473564897-Poly.png" alt="" height="28">
            </span>
        </a>
    </div>

    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
        <li>
            <button class="button-menu-mobile waves-effect waves-light">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </li>
    </ul>
</div><?php /**PATH D:\TAIXAM\htdocs\PHP2\ASM2\app\views/admin/admin-layout/topbar.blade.php ENDPATH**/ ?>