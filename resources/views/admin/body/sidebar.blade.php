<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
        <!-- <img src="https://iili.io/JRz4Kf2.png"> -->
    </div>
    <div class="sidebar-brand-text mx-3">E-Tiket <sup>RoRo</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="{{route('dashboard')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Master Data
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link" href="#"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Master</span>
    </a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Addons
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link" href="/inputtiket">
        <i class="fas fa-pen-square"></i>
        <span>Tiket</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{route('data_tiket.view')}}">
        <i class="fas fa-fw fa-folder"></i>
        <span>Data Tiket</span>
    </a>
</li>

<div class="sidebar-heading">
    User
</div>

<li class="nav-item">
    <a class="nav-link" href="{{route('user.add')}}">
        <i class="fas fa-fw fa-user-plus"></i>
        <span>Tambah User</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{route('user.view')}}">
        <i class="fas fa-fw fa-users"></i>
        <span>Data User</span>
    </a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
</ul>