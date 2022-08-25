<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ route('dashboard') }}">
            <img src="{{ asset('assets/img/logo.png') }}" width="100" alt="{{ config('app.name') }}">
        </a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ route('dashboard') }}">
            <img src="{{ asset('assets/img/short_logo.png') }}" width="35" alt="{{ config('app.name') }}">
        </a>
    </div>
    <ul class="sidebar-menu">
        {{-- ***** Main Navigation ***** --}}
        <li class="menu-header">Main Navigation</li>
        <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fas fa-home"></i> <span>Dashboard</span>
            </a>
        </li>
        @can('pegawai-browse')
            <li class="{{ Request::is('pegawai*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('pegawai.index') }}">
                    <i class="fas fa-users"></i> <span>Pegawai</span>
                </a>
            </li>
        @endcan
        {{-- @can('laporan-absensi-read')
        <li class="{{ Request::is(['manajemen/laporan-absensi*', 'manajemen/absensi*']) ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('laporan-absensi.index') }}">
                <i class="fas fa-file"></i> <span>Laporan Absensi</span>
            </a>
        </li>
        @endcan --}}
        @if (auth()->user()->hasAnyPermission(['lokasi-browse', 'jam-kerja-browse']))
            {{-- ***** Superadmin Menu ***** --}}
            <li class="menu-header">Master Data</li>
            @can('lokasi-browse')
                <li class="{{ Request::is('lokasi*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('lokasi.index') }}">
                        <i class="fas fa-map"></i>
                        <span>Lokasi Absen</span>
                    </a>
                </li>
            @endcan
        @endif
        @if (auth()->user()->hasAnyPermission(['roles-browse', 'permissions-browse', 'users-browse']))
            {{-- ***** Superadmin Menu ***** --}}
            <li class="menu-header">Superadmin Menu</li>
            @can('permissions-browse')
                <li class="{{ Request::is('permissions*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('permissions.index') }}">
                        <i class="fas fa-key"></i>
                        <span>Permissions</span>
                    </a>
                </li>
            @endcan
            @can('roles-browse')
                <li class="{{ Request::is('roles*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('roles.index') }}">
                        <i class="fas fa-user-tag"></i> <span>Roles</span>
                    </a>
                </li>
            @endcan
            @can('users-browse')
                <li class="{{ Request::is('users*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('users.index') }}">
                        <i class="fas fa-users-cog"></i> <span>Users</span>
                    </a>
                </li>
            @endcan
        @endif
    </ul>
</aside>
