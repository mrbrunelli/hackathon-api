<!DOCTYPE html>
<html lang="pt-BR">

<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Primary Meta Tags -->
<title>Painel Administrativo</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title" content="Volt - Free Bootstrap 5 Dashboard">
<meta name="author" content="Themesberg">
<meta name="description" content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
<meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard" />
<link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-premium-bootstrap-5-dashboard">

<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets_dash/img/favicon/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets_dash/img/favicon/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets_dash/img/favicon/favicon-16x16.png') }}">
<link rel="manifest" href="{{ asset('assets_dash/img/favicon/site.webmanifest') }}">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">

<!-- Sweet Alert -->
<link type="text/css" href="{{ asset('assets_dash/vendor/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">

<!-- Notyf -->
<link type="text/css" href="{{ asset('assets_dash/vendor/notyf/notyf.min.css') }}" rel="stylesheet">

<!-- Volt CSS -->
<link type="text/css" href="{{ asset('assets_dash/css/volt.css') }}" rel="stylesheet">

<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>
<style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  width: 100%;
  margin: 2em;
  
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
<body>

        <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
        

<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
    <a class="navbar-brand me-lg-5" href="">
        <img class="navbar-brand-dark" src="{{ asset('assets_dash/img/brand/light.svg') }}" alt="Volt logo" /> <img class="navbar-brand-light" src="{{ asset('assets_dash/img/brand/dark.svg') }}" alt="Volt logo" />
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
  <div class="sidebar-inner px-4 pt-3">
    <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
      <div class="d-flex align-items-center">
        <div class="avatar-lg me-4">
        </div>
        <div class="d-block">
          <h2 class="h5 mb-3">Bem-vindo!</h2>
          <a href="" class="btn btn-secondary btn-sm d-inline-flex align-items-center">
            <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>            
            Sair
          </a>
        </div>
      </div>
      <div class="collapse-close d-md-none">
        <a href="#sidebarMenu" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true"
            aria-label="Toggle navigation">
            <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </a>
      </div>
    </div>
    <ul class="nav flex-column pt-3 pt-md-0">
      <li class="nav-item">
        <a href="" class="nav-link d-flex align-items-center">
          <span class="sidebar-icon">
            
          </span>
          <span class="mt-1 ms-1 sidebar-text">Volt Overview</span>
        </a>
      </li>
      <li class="nav-item ">
        <a href="#" class="nav-link">
          <span class="sidebar-icon">
            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
          </span> 
          <span class="sidebar-text">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('colors') }}" class="nav-link d-flex justify-content-between">
          <span>
            <span class="sidebar-icon">
              <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
            </span>
            <span class="sidebar-text">Cores</span>
          </span>
        </a>
      </li>
      <li class="nav-item ">
        <a href="{{ route('brands') }}" class="nav-link">
          <span class="sidebar-icon">
            <svg class="icon icon-xs text-gray-500 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z" clip-rule="evenodd"></path></svg>
          </span>
          <span class="sidebar-text">Marcas</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('vehicles') }}" class="nav-link d-flex justify-content-between">
          <span>
            <span class="sidebar-icon">
            <img src="{{ asset('assets_dash/img/brand/light.svg') }}" height="20" width="20" alt="Volt Logo">
            </span>
            <span class="sidebar-text">Veículos</span>
          </span>
        </a>
      </li>
      <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>
      <li class="nav-item">
        <a href="{{route('logout')}}" class="nav-link d-flex justify-content-between">
          <span>
            <span class="sidebar-icon">
              <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
            </span>
            <span class="sidebar-text">Logout</span>
          </span>
        </a>
      </li>
    </ul>
  </div>
</nav>
    
<main class="content">

    <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
    <div class="container-fluid px-0">
        <div class="d-flex justify-content-around w-100" id="navbarSupportedContent">

        <!-- Navbar links -->
        <ul class="navbar-nav align-items-center">
            <li class="nav-item dropdown ms-lg-3">
            <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="media d-flex align-items-center">
                <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                    <span class="mb-0 font-small fw-bold text-gray-900">Bem vindo {{ session()->get('LoggedUserName')}}</span>
                </div>
                </div>
            </a>
            <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
                <a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}">
                <svg class="dropdown-icon text-danger me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>                
                Logout
                </a>
            </div>
            </li>
        </ul>
        </div>
    </div>
    </nav>
@yield('content')
          

        </main>
@yield('js')
    <!-- Core -->
<script src="{{ asset('assets_dash/vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('assets_dash/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- Vendor JS -->
<script src="{{ asset('assets_dash/vendor/onscreen/dist/on-screen.umd.min.js') }}"></script>

<!-- Slider -->
<script src="{{ asset('assets_dash/vendor/nouislider/distribute/nouislider.min.js') }}"></script>

<!-- Smooth scroll -->
<script src="{{ asset('assets_dash/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>


<!-- Sweet Alerts 2 -->
<script src="{{ asset('assets_dash/vendor/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>

<!-- Notyf -->
<script src="{{ asset('assets_dash/vendor/notyf/notyf.min.js') }}"></script>

<!-- Simplebar -->
<script src="{{ asset('assets_dash/vendor/simplebar/dist/simplebar.min.js') }}"></script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Volt JS -->
<script src="{{ asset('assets_dash/js/volt.js') }}"></script>

    
</body>

</html>
