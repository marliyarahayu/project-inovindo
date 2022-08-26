
<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"> Institusi</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            @auth
            <li class="dropdown active">
              <a href="/institusi" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
              <a href="/permohonan" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Permohonan</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="/permohonan">Form Permohonan</a></li>
                <li><a class="nav-link" href="/datapermohonan">Daftar Permohonan</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="/kerjasama" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Kerjasama</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="/kerjasama">Daftar Kerjasama</a></li>
                <li><a class="nav-link" href="/riwayat">Riwayat Kerjasama</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="/kalender" class="nav-link"><i class="fas fa-th"></i> <span>Kalender</span></a>
            </li>
            @endauth
          </aside>
      </div>
      @yield('content')