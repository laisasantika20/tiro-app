<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
    <div class="sidebar-brand-icon rotate-n-15">
    <img src="https://iili.io/J5kCpwv.png" style="width : 45px">
    </div>
    <div class="sidebar-brand-text mx-1">E-Tiket <sup>RoRo</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="{{route('dashboard')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Beranda</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- <div class="sidebar-heading">
    Master Data
</div> -->

<!-- Nav Item - Pages Collapse Menu -->
<!-- <li class="nav-item">
    <a class="nav-link" href="#"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Master</span>
    </a>
</li> -->

<!-- Divider -->

<!-- Heading -->
<div class="sidebar-heading">
    Addons
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link" href="{{route('data_tiket.add')}}">
        <i class="fas fa-pen-square"></i>
        <span>Input Tiket</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{route('data_tiket.view')}}">
        <i class="fas fa-fw fa-folder"></i>
        <span>Data Tiket</span>
    </a>
</li>

@if (auth()->user()->usertype=="admin")

<hr class="sidebar-divider">
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
{{-- KAPAL --}}
<hr class="sidebar-divider">
<div class="sidebar-heading">
    Kapal
</div>
<li class="nav-item">
    <a class="nav-link" href="{{route('kapal.index')}}">
        <i class="fas fa-fw fa-users"></i>
        <span>Data Kapal</span>
    </a>
</li>
<hr class="sidebar-divider">
<div class="sidebar-heading">
    Golongan
</div>
<li class="nav-item">
    <a class="nav-link" href="{{route('golongan.index')}}">
        <i class="fas fa-fw fa-users"></i>
        <span>Data Golongan</span>
    </a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">
@endif

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
</ul>