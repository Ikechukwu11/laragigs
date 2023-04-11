<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#ef3b2d">
  <link rel="icon" href="/images/favicon.ico">
  <title>LARAGIGS</title>
  <!-- Fonts -->
  <link href="/fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="/fontawesome/css/solid.css" rel="stylesheet">

  <link rel="stylesheet" href="/css/mdb.min.css">

  <style>
    body {
      background-color: rgb(239 59 45 / 10%);
    }

    .bg-laragigs {
      background-color: #ef3b2d;
    }
    .navbar-brand {
      margin: -1rem 0 0 -0.8rem;
    }

    input[type=search],.form-control {
      border: 1px solid #f6f6f6;
    }
    input[type=search]:focus,.form-control:focus {
      border-color: #f17269!important;
      box-shadow: inset 0 0 0 1px #f17269!important;
    }
    .cursor-pointer {
      cursor: pointer;
    }

    @media (min-width: 991px) {
      .listing-card {
        min-height: 250px;
      }
    }

    .page-item.active .page-link {
      background-color: #ef3b2d!important;
    }
  </style>
</head>
<body class="antialiased">
  <header style="margin-top: 75px;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand navbar-light bg-light fixed-top">
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Toggle button -->
        <button
          class="navbar-toggler"
          type="button"
          data-mdb-toggle="collapse"
          data-mdb-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
          >
          <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Navbar brand -->
          <a class="navbar-brand" href="/">
            <img
            src="/images/logo.png"
            height="70"
            alt="MDB Logo"
            loading="lazy"
            />
        </a>
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-none">
          <li class="nav-item">
            <a class="nav-link" href="#">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Projects</a>
          </li>
        </ul>
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->

      <!-- Right elements -->
      <div class="d-flex align-items-center">
        <!-- Icon -->
        <a class="text-reset me-3" href="#">
          <i class="fas fa-user-plus"></i> Register
        </a>

        <a class="text-reset me-3" href="#">
          <i class="fas fa-user"></i> Login
        </a>

        <!-- Avatar -->
        <div class="dropdown d-none">
          <a
            class="dropdown-toggle d-flex align-items-center hidden-arrow"
            href="#"
            id="navbarDropdownMenuAvatar"
            role="button"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
            >
            <img
            src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
            class="rounded-circle"
            height="25"
            alt="Black and White Portrait of a Man"
            loading="lazy"
            />
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuAvatar"
          >
          <li>
            <a class="dropdown-item" href="#">My profile</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Settings</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Logout</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
@yield('hero')
</header>
<div class="container" style="margin-bottom: 150px">
<div class="row">
@yield('content')
</div>
</div>
<footer class="text-center text-white bg-laragigs fixed-bottom mt-5">
<!-- Grid container -->
<div class="container p-4 ">
<div class="row align-items-center">
<div class="col-10 mb-2 mx-auto col-sm-9 col-md-9">
<!-- Copyright -->
<div class="text-center">
Copyright © {{date('Y')}}, All Rights Reserved
</div>
</div>

<div class="col-9 mb-2 mx-auto col-sm-3 col-md-3">
<!-- Copyright -->
<div class="text-center">
<a href="/listings/create" class="w-100 btn bg-black text-white">Post GiG</a>
</div>
</div>
</div>
</div>
<!-- Copyright -->
</footer>
</body>
<script src="/js/mdb.min.js"></script>
</html>
