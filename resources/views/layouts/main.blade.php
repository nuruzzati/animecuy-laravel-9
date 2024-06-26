<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
  <title>Animecuy</title>

  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>
  body {
    font-family: 'Poppins', sans-serif !important;
  }
  

    #top {
        width: 100%;
        height: 40px;
        margin: 0 auto;
        border-bottom: 4px solid #ddd;
    }

    #header {
        width: 980px;
        text-align: center;
        height: 110px;
        margin: 0 auto;
    }

    #logo,
    #ad {
        float: left;
        width: 400px;
        height: 110px;
    }

    #ad {
        width: 580px;
    }

    #nav {
        width: 100%;
        height: 44px;
        position: sticky;
        margin: 0 auto;
        background: #ce1717;
        display: flex !important;
        justify-content: space-evenly;
        gap: 100px !important;
    }



    #sub-nav {
        width: 100%;
        justify-content: center;
        text-align: center;
        height: 45px;
        display: flex;
        margin: 0 auto 10px auto;
    }

    .nav-a:hover {
      color: #f7f0f0 !important;

    }
</style>
</head>

<body>
  <div id="top"></div>
  <div id="header">
      <div class="brand">
      <p class="fw-bold fs-1 mt-3 mb-0"><i class="bi bi-alarm"></i>ANIME<span style="color: #ce1717;">C</span>UY</p>
      <p class="mb-0">Artikel Anime,Movie, Terbaru Dan Populer</p>
      

    </div>
  </div>
  <div id="nav" style="font-weight: 600">
    <ul class="d-flex align-items-center justify-content center" style="gap: 40px;margin-bottom: -1px;list-style: none">
      <li><a class="nav-a text-white text-decoration-none"  href="/dashboard"> {{ Request::is('dashboard') ? '•' : '' }}<i class="fas fa-home"></i> DASHBOARD</a></li>
      <li><a class="nav-a text-white text-decoration-none"  href="/dashboard/animes"> {{ Request::is('dashboard/animes*') ? '•' : '' }}<i class="fas fa-tv"></i> ANIME</a></li>

      <li><a class="nav-a text-white text-decoration-none"  href="/dashboard/categories"> {{ Request::is('dashboard/categories*') ? '•' : '' }} <i class="fas fa-tags"></i> KATEGORI</a></li>
      
      {{-- <form action="/logout" method="post">
      <button type="submit" class="dropdown-item">
        <i class="bi bi-box-arrow-in-right"></i> Logout
      </button>
    </form> --}}
    
         <li class="nav-item dropdown text-white" >
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     <i class="fas fa-user"></i> Halo, {{ auth()->user()->name }} </i>
                  </a>
                      <ul class="dropdown-menu">
<li><a class="dropdown-item" href="/animes"><i class="fas fa-users"></i> Halaman user</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                          <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                 <i class="fas fa-sign-out-alt"></i> Logout
                            </button>
                          </form>
                        </li>
                      </ul>
                    </li>


      
    </ul>
  </div>

  <div class="container mb-5">
        @yield('content')
    </div>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>   
</html>
