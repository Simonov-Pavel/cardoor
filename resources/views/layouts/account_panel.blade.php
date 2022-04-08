<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <title>@yield('panel') | @yield('title')</title>
  <meta name="description" content="@yield('description')">
  <meta name="keywords" content="@yield('keywords')">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @yield('meta')
  
  <link rel="canonical" href="@yield('canonical')">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  @yield('custom-css')
  <linl rel="stylesheet" href="{{ asset('css/my.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div>
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <h1>@yield('panel')</h1>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="logotip">
    <a href="{{ route('index') }}" class="brand-link">
      
      <picture>
        <source srcset="" type="image/webp">
        <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
      </picture>
      
      
    </a>
    </div>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <picture>
            <sourse srcset="{{ Storage::url('user/' . Auth::user()->img_webp_preview)}}" type="image/webp">
            <img src="{{ Storage::url('user/' . Auth::user()->img_preview)}}" alt="User Image - {{Auth::user()->name}}" style="width:45px; border-radius:50%">
          </picture>
        </div>
        <div class="info">
          <a href="{{route('account')}}" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false"> 
          @yield('user_menu')
        </ul>
      </nav>>
    </div>
  </aside>

  <div class="content-wrapper" style="min-height: 100px!important;">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('title')</h1>
          </div>
          
              @yield('breadcrumb')
            
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      <div>
    
      <section class="content">

        @yield('content')

      </section>
    
    </div>
</div>

<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script>
</script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('plugins/inputmask/jquery.inputmask.min.js') }}"></script>
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<script src="https://use.fontawesome.com/68a4632e2a.js"></script>
@yield('custom-js')
<script>
  $('[data-mask]').inputmask()
</script>
</body>
</html>