<!doctype html>
<html lang="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <link rel="shortcut icon" type="{{ asset('/assets/image/png')}}" href="{{ asset('/assets/images/favicon.png')}}" />
  <link rel="stylesheet" href="{{ asset('/assets/css/styles.min.css')}}" />
</head>

<body>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <aside class="left-sidebar">
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            @role('admin')
            <a href="{{ route('vendors.index') }}" class="text-nowrap logo-img">
                <img src="{{ asset('/assets/images/logo.svg')}}" width="120" alt="" >
            </a>
            @endrole
            @role('vendor')
            <a href="{{ route('information.index') }}" class="text-nowrap logo-img">
                <img src="{{ asset('/assets/images/logo.svg')}}" width="120" alt="" >
            </a>
            @endrole
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        @role('admin')
        @include('Web.Components.admin-dashbord')
        @endrole

        @role('vendor')
        @include('Web.Components.vendor-dashbord')
        @endrole
      </div>
    </aside>

    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
          <nav class="navbar navbar-expand-lg navbar-light">
              @yield('filter')
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                @yield('search')
                @include('Web.Components.language')
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src={{session()->get('user')}} alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                    <div class="message-body">
                        @role('admin')
                        <a href="{{ route('profile.index') }}" class="d-flex align-items-center gap-2 dropdown-item">
                        <i class="ti ti-user fs-6"></i>
                        <p class="mb-0 fs-3">{{ __('locale.MyProfile') }}</p>
                        </a>
                        @endrole
                        @role('vendor')
                        <a href="{{ route('information.index') }}" class="d-flex align-items-center gap-2 dropdown-item">
                            <i class="ti ti-user fs-6"></i>
                        <p class="mb-0 fs-3">{{ __('locale.MyProfile') }}</p>
                        </a>
                        @endrole
                        <a href="{{ route('getlogout') }}" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                    </div>
                </div>

              </li>
            </ul>
          </div>
        </nav>
      </header>

      @yield('content')

    </div>
  </div>
  <script src="..{{ asset('/assets/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="..{{ asset('/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="..{{ asset('/assets/js/sidebarmenu.js')}}"></script>
  <script src="..{{ asset('/assets/js/app.min.js')}}"></script>
  <script src="..{{ asset('/assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
  <script src="..{{ asset('/assets/libs/simplebar/dist/simplebar.js')}}"></script>
  <script src="..{{ asset('/assets/js/dashboard.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>

</html>
