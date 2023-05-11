<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            
        </div>
        <div class="sidebar-brand-text mx-3"> WELCOME </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
  
    <li class="nav-item">
        <a class="nav-link" href="{{ route('produk-index')}}">
            <span>Produk</span></a>
    </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('transaksi-index')}}">
            <span>Transaksi</span></a>
    </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('pesanan-index')}}">
            <span>Pesanan</span></a>
    </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <span>Info</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Info</h6>
                {{-- <a class="collapse-item" href="{{ route('pelanggan-index')}}">Pelanggan</a> --}}
                <a class="collapse-item" href="{{ route('kurir-index')}}">Kurir</a>
            </div>
        </div>
    </li>

     <!-- Nav Item - Dashboard -->
     {{-- <li class="nav-item">
        <a class="nav-link" href="{{ route('laporan-index')}}">
            
            <span>Laporan</span></a>
    </li> --}}

 
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->