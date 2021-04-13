<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!--Style-->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />

    <!--Script-->
    <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/sidenav.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </head>
<body>
    <div id="mySidenav" class="sidenav">
        <div class="sidenav-content">
            <header>
                <h1 class="text-center">Aplikasi P2</h1>
            </header>
        </div>

        <div class="container">
            <ul class="list-group list-group-flush active">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  <b>Dashboard</b>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Perkawinan
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Perceraian
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Kontak kami
                  </li>
              </ul>
        </div>


    </div>

    <div id="main">
        <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
            <a class="navbar-brand" href="#"><h4 class="text-white">Selamat Datang Di</h4>
                <h3 class="text-white">Aplikasi Perkawinan dan Perceraian</h3>
            </a>
              <form id="top-right" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline my-2 my-sm-0" type="submit"><b>Search</b></button>
              </form>
        </nav>
        <div class="content">
            <div class="row">
                <div class="col-sm">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5>Data Statistik</h5><br>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">DD/MM/YY</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                <div class="input-group-append">
                                  <span class="input-group-text"><i class="fa fa-calendar-alt"></i></span>
                                </div>
                              </div>
                              <h3>Total --</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5>Data Perkawinan</h5><br>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">DD/MM/YY</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                <div class="input-group-append">
                                  <span class="input-group-text"><i class="fa fa-calendar-alt"></i></span>
                                </div>
                              </div>
                              <h3>Total --</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5>Data Perceraian</h5><br>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">DD/MM/YY</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                <div class="input-group-append">
                                  <span class="input-group-text"><i class="fa fa-calendar-alt"></i></span>
                                </div>
                              </div>
                              <h3>Total --</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="card text-center" style="height: 20%;" >
                <div class="card-body">
                    <img class="card-img-top" src="{{URL::asset('/images/chart-pie.png')}}" alt="Card image cap">
                </div>
            </div>
        </div>
    </div>
</body>
</html>
