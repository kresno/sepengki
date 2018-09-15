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
                    <a class="js-arrow" href="{{ route('admin_dashboard.index') }}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('admin_evaluasi.index') }}">
                        <i class="fas fa-chart-bar"></i>Evaluasi</a>
                </li>
                <li>
                    <a href="{{ route('admin_dokumen.index') }}">
                        <i class="fas fa-file"></i>Dokumen</a>
                </li>
                <li>
                    <a href="{{ route('admin_user.index') }}">
                        <i class="fas fa-user"></i>User</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-cog"></i>Settings</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="button.html">Urusan</a>
                        </li>
                        <li>
                            <a href="badge.html">Bidang</a>
                        </li>
                        <li>
                            <a href="tab.html">Program</a>
                        </li>
                        <li>
                            <a href="card.html">Indikator</a>
                        </li>
                        <li>
                            <a href="alert.html">Kegiatan</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
