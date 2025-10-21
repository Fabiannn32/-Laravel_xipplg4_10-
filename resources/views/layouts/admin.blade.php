<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'AdminLTE - Dilesin')</title>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
 <!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<!-- Custom Theme -->
<style>
    body {
        background-color: #f4f8f4;
        font-family: 'Poppins', sans-serif;
    }

    .bg-gradient-green {
        background: linear-gradient(135deg, #22c55e, #16a34a);
    }
    .bg-gradient-blue {
        background: linear-gradient(135deg, #0ea5e9, #0284c7);
    }
    .bg-gradient-yellow {
        background: linear-gradient(135deg, #facc15, #eab308);
    }
    .bg-gradient-teal {
        background: linear-gradient(135deg, #14b8a6, #0d9488);
    }

    .card {
        transition: transform 0.2s ease, box-shadow 0.3s ease;
    }
    .card:hover {
        transform: translateY(-4px);
        box-shadow: 0 6px 16px rgba(0,0,0,0.1);
    }
</style>


</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button">
          <i class="fas fa-bars"></i>
        </a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Beranda</a>
      </li>
    </ul>
  </nav>

  <!-- Sidebar -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
      <img src="{{ asset('images/logo.png') }}" alt="Dilesin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Dilesin Admin</span>
    </a>

    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column">
          <li class="nav-item">
            <a href="{{ url('/admin/dashboard') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <!-- Content Wrapper -->
  <div class="content-wrapper p-3">
    @yield('content')
  </div>

</div>
</body>
</html>

