
<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            @auth
            <li class="dropdown active">
              <a href="/admin" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
              <a href="/permohonanadmin" class="nav-link"><i class="far fa-file-alt"></i> <span>Data Permohonan</span></a>
            </li>
            <li class="dropdown">
              <a href="/daftarkerjasama" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Kerjasama</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="/daftarkerjasama">Data Kerjasama</a></li>
                <li><a class="nav-link" href="/daftarriwayat">Riwayat Kerjasama</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="/kalenderadmin" class="nav-link"><i class="fas fa-th"></i> <span>Kalender</span></a>
            </li>
            <li class="dropdown">
              <a href="/dokument" class="nav-link"><i class="far fa-file"></i> <span>Dokument</span></a>
            </li>
            @endauth
          </aside>
      </div>
      @yield('content2')