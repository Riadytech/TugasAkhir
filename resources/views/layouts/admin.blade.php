<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'Admin Panel')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f6f9;
      margin: 0;
    }

    .navbar {
      background-color: #2c3e50;
      color: white;
      padding: 1rem 2rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .navbar .toggle-btn {
      font-size: 20px;
      cursor: pointer;
      background: none;
      border: none;
      color: white;
      margin-right: 1rem;
    }

  .navbar a {
    color: white !important;
    text-decoration: none;
  }

  .navbar a:hover {
    color: #ffc107 !important; /* Warna hover (misal: kuning) */
    text-decoration: underline;
  }

    .sidebar {
      width: 220px;
      background-color: #343a40;
      color: white;
      position: fixed;
      top: 56px;
      left: 0;
      bottom: 0;
      padding-top: 1rem;
      transition: transform 0.3s ease;
    }

    .sidebar a {
      color: white;
      display: block;
      padding: 12px 20px;
      text-decoration: none;
    }

    .sidebar a:hover {
      background-color: #495057;
    }

    .sidebar.closed {
      transform: translateX(-100%);
    }

    .main {
      margin-left: 220px;
      padding: 2rem;
      transition: margin-left 0.3s ease;
    }

    .main.shifted {
      margin-left: 0;
    }

    .footer {
      text-align: center;
      padding: 1rem;
      font-size: 13px;
      color: #999;
      margin-top: 3rem;
    }

    @media (max-width: 768px) {
      .sidebar {
        top: 56px;
        z-index: 999;
      }
      .main {
        margin-left: 0;
      }
    }
  </style>
</head>
<body>

<!-- Navbar -->
<div class="navbar">
  <div class="d-flex align-items-center">
    <button class="toggle-btn" onclick="toggleSidebar()">☰</button>
    <h1 style="margin: 0; font-size: 20px;">Admin Panel</h1>
  </div>
  <div>
    <a href="{{ route('admin.about.edit') }}">About</a>
    <a href="{{ route('admin.wcu.edit') }}">WCU</a>
    <a href="{{ route('admin.keunggulan.index') }}">Keunggulan</a>
    <a href="{{ route('admin.destinasi.index') }}">Destinasi</a>
    <form method="POST" action="{{ route('logout') }}" style="display:inline;">
      @csrf
      <button type="submit" class="btn btn-sm btn-outline-light">Logout</button>
    </form>
  </div>
</div>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
  <a href="{{ route('admin.dashboard') }}">🏠 Dashboard</a>
  <a href="{{ route('admin.about.edit') }}">📘 About</a>
  <a href="{{ route('admin.wcu.edit') }}">✅ Why Choose Us</a>
  <a href="{{ route('admin.keunggulan.index') }}">🌟 Keunggulan</a>
  <a href="{{ route('admin.destinasi.index') }}">🗺️ Destinasi</a>
</div>

<!-- Main Content -->
<div class="main" id="main">
  <h2>@yield('page-title')</h2>
  @yield('content')
</div>

<div class="footer">
  &copy; {{ date('Y') }} Wisata360. All rights reserved.
</div>

<!-- Toggle Script -->
<script>
  function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    const main = document.getElementById('main');
    sidebar.classList.toggle('closed');
    main.classList.toggle('shifted');
  }
</script>

</body>
</html>
