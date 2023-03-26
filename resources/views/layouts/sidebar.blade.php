<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ url('home') }}">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">{{ config('app.name', 'Laravel') }}</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                        class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                        class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                        data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item @yield('dashboard')"><a class="d-flex align-items-center" href="{{ url('dashboard') }}"><i
                        data-feather='home'></i><span class="menu-title">Dashboard</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i data-feather='grid'></i><span class="menu-title">Kelola Data</span></a>
                <ul class="menu-content">
                  <li class="nav-item @yield('karyawan')">
                    <a href=""><i data-feather='circle'></i><span class="menu-item" data-i18n="View">Karyawan</span></a>
                  </li>
                  <li class="nav-item @yield('paket')">
                    <a href=""><i data-feather='circle'></i><span class="menu-item" data-i18n="List">Paket</span></a>
                  </li>
                  <li class="nav-item @yield('outlet')">
                    <a href=""><i data-feather='circle'></i><span class="menu-item" data-i18n="List">Outlet</span></a>
                  </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i data-feather='server'></i><span class="menu-title">Layanan</span></a>
                <ul class="menu-content">
                  <li class="nav-item @yield('register_customer')">
                    <a href=""><i data-feather='circle'></i><span class="menu-item" data-i18n="View">Register Customer</span></a>
                  </li>
                  <li class="nav-item @yield('customer')">
                    <a href=""><i data-feather='circle'></i><span class="menu-item" data-i18n="List">Kelola Customer</span></a>
                  </li>
                  <li class="nav-item @yield('transaksi')">
                    <a href=""><i data-feather='circle'></i><span class="menu-item" data-i18n="List">Transaksi</span></a>
                  </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i data-feather='file-text'></i><span class="menu-title">Laporan</span></a>
                <ul class="menu-content">
                  <li class="nav-item @yield('laporan_karyawan')">
                    <a href=""><i data-feather='circle'></i><span class="menu-item" data-i18n="View">Laporan Karyawan</span></a>
                  </li>
                  <li class="nav-item @yield('laporan_transaksi')">
                    <a href=""><i data-feather='circle'></i><span class="menu-item" data-i18n="List">Laporan Transaksi</span></a>
                  </li>
                </ul>
            </li>

        </ul>
    </div>
</div>
