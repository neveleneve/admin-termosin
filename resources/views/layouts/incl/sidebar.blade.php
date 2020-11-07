<div id="slide-out" class="side-nav sn-bg-1 fixed">
    <ul class="custom-scrollbar">
        <li>
            <div class="logo-wrapper waves-light">
                <a class="text-center text-dark text-decoration-none" href="#">
                    <h4 class="mt-3">
                        <img src="https://termosin.store/images/logo2.png" class="img-fluid flex-center">
                    </h4>
                </a>
            </div>
        </li>
        <li>
            <ul class="collapsible collapsible-accordion">
                <li>
                    <a class="waves-effect" href="/">Dashboard</a>
                </li>
                <li>
                    <a class="collapsible-header waves-effect arrow-r">
                        Item
                        <i class="fas fa-angle-down rotate-icon"></i>
                    </a>
                    <div class="collapsible-body">
                        <ul class="list-unstyled">
                            <li>
                                <a href="{{Auth::user()->level == 1 ? '/superadmin/item-list' : '/admin/item-list'}}" class="waves-effect">Daftar Item</a>
                            </li>
                            <li>
                                <a href="#" class="waves-effect">Tambah Item</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="collapsible-header waves-effect arrow-r">
                        Transaksi
                        <i class="fas fa-angle-down rotate-icon"></i>
                    </a>
                    <div class="collapsible-body">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#" class="waves-effect">Daftar Transaksi</a>
                            </li>
                            <li>
                                <a href="#" class="waves-effect">Konfirmasi</a>
                            </li>
                        </ul>
                    </div>
                </li>
                @auth('superadmin')
                <li>
                    <a class="collapsible-header waves-effect arrow-r">
                        Administrator
                        <i class="fas fa-angle-down rotate-icon"></i>
                    </a>
                    <div class="collapsible-body">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#" class="waves-effect">Daftar Administrator</a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endauth
            </ul>
        </li>
    </ul>
    <div class="sidenav-bg rgba-black-strong"></div>
</div>