<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Master</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('pockets*') ? 'active' : '' }}" aria-current="page" href="/pockets">
                    Dompet
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('categories*') ? 'active' : '' }}" href="/categories">
                    Kategori
                </a>
            </li>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Transaksi</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('transactions-in*') ? 'active' : '' }}" aria-current="page" href="/transactions-in">
                    Dompet Masuk
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('transactions-out*') ? 'active' : '' }}" href="/transactions-out">
                    Dompet Keluar
                </a>
            </li>
        </ul>


    </div>
</nav>
