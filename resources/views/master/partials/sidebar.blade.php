<div id="sidebar" class='active'>
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <h2 style="color:cornflowerblue"><strong>Tropisianimal</strong></h4>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class='sidebar-title'>Main Menu</li>
                <li class="sidebar-item {{ request()->is('master') ? ' active' : '' }}">
                    <a href="{{ route('dashboard') }}" class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item{{ request()->is('master/tentang') || request()->is('master/tentang/create') || request()->is('master/tentang/edit')  ? ' active' : '' }}">
                    <a href="{{ route('tentang.index') }}" class='sidebar-link'>
                        <i data-feather="user" width="20"></i>
                        <span>Tentang</span>
                    </a>
                </li>
                <li class="sidebar-item{{ request()->is('master/berita') || request()->is('master/berita/create') || request()->is('master/berita/edit')  ? ' active' : '' }}">
                    <a href="{{ route('berita.index') }}" class='sidebar-link'>
                        <i data-feather="layout" width="20"></i>
                        <span>Berita</span>
                    </a>
                </li>
                <li class="sidebar-item{{ request()->is('master/galeri') || request()->is('master/galeri/create') || request()->is('master/galeri/{galeri:id}/edit')  ? ' active' : '' }}">
                    <a href="{{ route('galeri.index')}}" class='sidebar-link'>
                        <i data-feather="image" width="20"></i>
                        <span>Galeri</span>
                    </a>
                </li>
                <li class="sidebar-item{{ request()->is('master/kontak') || request()->is('master/kontak/create') || request()->is('master/kontak/{kontak:id}/edit')  ? ' active' : '' }}">
                    <a href="{{ route('kontak.index') }}" class='sidebar-link'>
                        <i data-feather="phone" width="20"></i>
                        <span>Kontak</span>
                    </a>
                </li>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
