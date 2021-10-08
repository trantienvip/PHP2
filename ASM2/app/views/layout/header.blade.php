<nav class="navbar navbar-expand-lg navbar-dark blackss">
    <div class="container menu-mobile">
        <a class="navbar-brand" href="{{BASE_URL}}"><img width="100px" src="{{PUBLIC_PATH}}img/logo.png" alt=""></a>
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
                <li class="nav-item">
                    <a class="nav-link" href="#">Nổi bật</a>
                </li>
                <li class="nav-item name_ss_all">
                    @if(isset($_SESSION['auth']))
                    <a class="nav-link name_ss" href="{{BASE_URL.'cpanel'}}">Hi! {{$_SESSION['auth']['name']}}</a>
                    <a class="nav-link name_ss" href="{{BASE_URL.'logout'}}"> <i class="ti-export"></i></a>
                    @endif
                </li>
            </ul>
                <i class="iconsearch ti-search"></i>
            <form action="{{BASE_URL.'search'}}" class="form-search" action="" method="get">
                <input name="q" type="text" placeholder="Nhập từ khóa tìm kiếm">
            </form>
        </div>
    </div>
</nav>