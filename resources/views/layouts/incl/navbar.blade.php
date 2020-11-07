<nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav elegant-color-dark">
    <div class="float-left">
        <a href="" data-activates="slide-out" class="button-collapse white-text"><i class="fas fa-bars"></i></a>
    </div>
    <div class="breadcrumb-dn ml-3 mr-auto">
        <img src="https://termosin.store/images/logo2.png" class="img-fluid flex-center">
    </div>
    <ul class="nav navbar-nav nav-flex-icons ml-auto">
        <li class="nav-item clearfix d-none d-sm-inline-block">
            <a class="nav-link text-light">
                <i class="fas fa-user"></i>
                {{ Auth::user()->username }}
            </a>
        </li>
        <li class="nav-item border rounded border-light">
            <a class="nav-link text-light" href="/logout" onclick="return confirm('Log Out Sekarang?')">
                <i class="fa fa-sign-out-alt"></i>
                <span class="clearfix d-none d-sm-inline-block">
                    Log Out
                </span>
            </a>
        </li>
    </ul>
</nav>