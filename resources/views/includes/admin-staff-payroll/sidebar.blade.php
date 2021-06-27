  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        
        <div class="sidebar-brand-text mx-3">Administrator Staff Payroll</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    
    <li class="nav-item {{ request()->is('/') ? 'active' : ''}}">                                         
        {{-- {{ route('dashboard')}}    --}}
        <a class="nav-link" href="/" >
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item {{ request()->is('divisi') ? 'active' : ''}}">
        <a class="nav-link" href="/divisi">
            <i class="fas fa-fw fa-briefcase"></i>
            <span>Divisi</span></a>
    </li>

    <li class="nav-item {{ request()->is('jabatan') ? 'active' : ''}}">
        <a class="nav-link" href="/jabatan">
            <i class="fas fa-fw fa-user-plus"></i>
            <span>Jabatan</span></a>
    </li>

    
    <li class="nav-item {{ request()->is('karyawan') ? 'active' : ''}} ">
        <a class="nav-link" href="/karyawan">
            <i class="fas fa-fw fa-user-circle"></i>
            <span>Karyawan</span></a>
    </li>

    <li class="nav-item {{ request()->is('absensi') ? 'active' : ''}}">
        <a class="nav-link" href="/absensi">
            <i class="fas fa-fw fa-fingerprint"></i>
            <span>Absensi</span></a>
    </li>

    <li class="nav-item {{ request()->is('payroll') ? 'active' : ''}}">
        <a class="nav-link" href="/payroll">
            <i class="fas fa-fw fa-dollar-sign"></i>
            <span>Payroll</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->