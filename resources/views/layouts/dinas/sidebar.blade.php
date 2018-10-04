<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{{ asset('/admin/images/icon/logo.png') }}" alt="Sepengki" />
        </a>
    </div>
    <div class="menu-sidebar__content">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li>
                    <a class="js-arrow" href="{{ route('dinas_dashboard.index') }}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('dinas_evaluasi.index') }}">
                        <i class="fas fa-chart-bar"></i>Evaluasi</a>
                </li>
                <li>
                    <a href="{{ route('dinas_dokumen.index') }}">
                        <i class="fas fa-file"></i>Dokumen</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
