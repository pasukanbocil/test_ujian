<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="/">SIMAK</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="/">SK</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="dropdown {{ Request::is('dashboard') ? 'active' : '' }}">
            <a href="/" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
        </li>
        <li class="menu-header">Master Data</li>
        <li class="dropdown {{ Request::is('dashboard/*') ? 'active' : '' }}">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                <span>Master Data</span></a>
            <ul class="dropdown-menu">
                <li class="{{ url()->current() == url('/dashboard/mahasiswa') ? 'active' : '' }}">
                    <a href="/dashboard/mahasiswa" class="nav-link">Mahasiswa</a>
                </li>
                <li class="{{ url()->current() == url('/dashboard/prodi') ? 'active' : '' }}">
                    <a href="/dashboard/prodi" class="nav-link">Prodi</a>
                </li>
                <li class="{{ url()->current() == url('/dashboard/matkul') ? 'active' : '' }}">
                    <a href="/dashboard/matkul" class="nav-link">Mata Kuliah</a>
                </li>
                <li class="{{ url()->current() == url('/dashboard/dosen') ? 'active' : '' }}">
                    <a href="/dashboard/dosen" class="nav-link">Dosen</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
