<nav class="navbar navbar-expand-lg navbar-dark blackss">
    <div class="container menu-mobile">
        <a class="navbar-brand" href="<?php echo e(BASE_URL); ?>"><img width="100px" src="<?php echo e(PUBLIC_PATH); ?>img/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto col-md-6">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Tin tức 24h <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tin tức coin
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">ETH</a>
                        <a class="dropdown-item" href="#">BTC</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">SOL</a>
                    </div>
                </li>
                <?php if(!isset($_SESSION['auth'])): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(BASE_URL.'login'); ?>">Đăng nhập</a>
                </li>
                <?php endif; ?>
                
            </ul>
                <i class="iconsearch ti-search"></i>
            <form action="<?php echo e(BASE_URL.'search'); ?>" class="form-search" action="" method="get">
                <input name="q" type="text" placeholder="Nhập từ khóa tìm kiếm">
            </form>
        </div>
    </div>
    <?php if(isset($_SESSION['auth'])): ?>
    <div class="user_information">
        <img class="user_information_image" src="<?php if(!empty($_SESSION['auth']['avatar'])): ?><?php echo e(PUBLIC_PATH.$_SESSION['auth']['avatar']); ?> <?php else: ?> <?php echo e(PUBLIC_PATH); ?>assets\images\users\user-1.jpg <?php endif; ?>" alt="">
        <div class="user_information_sm">
            <h6 class="user_information_sm_hi">Welcome ! <?php echo e($_SESSION['auth']['name']); ?></h6>
            <ul class="user_information_sm_cp">
                <li><a href="<?php echo e(BASE_URL.'cpanel/information/'.$_SESSION['auth']['id']); ?>"> <i class="ti-user"></i> Information</a></li>
                <li><a href="<?php echo e(BASE_URL.'cpanel'); ?>"> <i class="ti-settings"></i> Cpanel Page</a></li>
                <li><a href="<?php echo e(BASE_URL.'logout'); ?>"> <i class="ti-export"></i> Logout</a></li>
            </ul>
        </div>
    </div>
    <?php endif; ?>
</nav><?php /**PATH D:\TAIXAM\htdocs\PHP2\ASM2\app\views/layout/header.blade.php ENDPATH**/ ?>