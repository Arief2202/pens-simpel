<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/fonts/icomoon/style.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Style -->
  <link rel="stylesheet" href="style_login.css">


  <title>SIMPEL | LOGIN</title>
  <style>
    body {
      font-family: "Roboto", sans-serif;
      background-color: #05445E;
    }

    p {
      color: #ffffff;
      font-weight: 300;
      font-weight: bold;
      font-size: 22px;

    }

    h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4,.h5,.h6 {
      font-family: "Roboto", sans-serif;
      font-weight: bold;
      font-size: 24px;
      color: white;
    }


    a {
      -webkit-transition: .3s all ease;
      -o-transition: .3s all ease;
      transition: .3s all ease;
    }

    a:hover {
      text-decoration: none !important;
    }

    .content {
      padding: 7rem 0;
    }

    h2 {
      font-size: 20px;
    }

    .half,
    .half .container>.row {
      height: 100vh;
      min-height: 700px;
    }

    .half .contents {
      background: #f6f7fc;
    }

    .half .bg {
      width: 25%;
    }

    @media (max-width: 767.98px) {
      .half .bg {
        width: 100%;
        height: 200px;
      }
    }

    .half .contents {
      width: 75%;
    }

    @media (max-width: 767.98px) {
      .half .contents {
        width: 100%;
      }
    }

    .half .contents .form-control,
    .half .bg .form-control {
      border: none;
      border-radius: 4px;
      height: 54px;
      background: #efefef;
    }

    .half .contents .form-control:active,
    .half .contents .form-control:focus,
    .half .bg .form-control:active,
    .half .bg .form-control:focus {
      outline: none;
      -webkit-box-shadow: none;
      box-shadow: none;
    }

    .half .bg {
      background-size: cover;
      background-position: center;
    }

    .half a {
      color: #888;
      text-decoration: underline;
    }

    .half .btn {
      padding-left: 30px;
      padding-right: 30px;
    }

    .half .forgot-pass {
      position: relative;
      top: 2px;
      font-size: 14px;
    }

    .form-block {
      margin: 100px auto;
      background: #396A7E;
      padding: 40px;
      max-width: 500px;
      -webkit-box-shadow: 0 15px 30px 0 rgba(0, 0, 0, 0.2);
      box-shadow: 0 15px 30px 0 rgba(0, 0, 0, 0.2);
    }

    @media (max-width: 767.98px) {
      .form-block {
        padding: 25px;
      }
    }

    .control {
      display: block;
      position: relative;
      padding-left: 30px;
      margin-bottom: 15px;
      cursor: pointer;
      font-size: 14px;
    }

    .control .caption {
      position: relative;
      top: .2rem;
      color: #888;
    }

    .btn {
      text-decoration: none !important;
    }

    .btn.btn-google {
      display: block;
      background: #000000;
      color: #FFFFFF;
    }

    .btn.btn-masuk {
      display: block;
      /* background: #05445E; */
      color: #00FF29;
      border: 1px solid #00FF29;
    }
  </style>
</head>

<body>


  <title>SIMPEL | LOGIN</title>
  </head>

  <body>
    <div class="d-md ">
      <div class="contents">



        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-12">
              <div class="form-block mx-auto">
                {{-- Menampilkan alert jika berhasil Membuat akun --}}
                @if (session()->has('success'))
                <div class="alert alert-success " role="alert">
                  {{ session('success') }}
                </div>
                @endif

                {{-- Menampilkan alert jika Gagal login --}}
                @if (session()->has('loginError'))
                <div class="alert alert-danger " role="alert">
                  {{ session('loginError') }}
                </div>
                @endif

                <div class="text-center mb-5">
                  <h3>Masuk</h3>
                  <p>Masukkan Email dan Kata Sandi Anda</p>
                </div>

                <form action="/login" method="post">
                  @csrf
                  <div class="form-group first">
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                      placeholder="Masukkan Email" id="username" value="{{ old('email') }}" required>
                    @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-group last mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Masukkan Kata Sandi"
                      id="password" required>
                  </div>

                  {{-- <div class="d-sm-flex mb-4 align-items-center">
                    <span class="ml-auto"><a href="#" class="forgot-pass"><i>Lupa Kata Sandi?</i></a></span>
                  </div> --}}
                  <button type="submit" class="btn btn-block py-2 btn-masuk mb-4">Masuk</button>
                  {{-- <input type="submit" value="Masuk" class="btn btn-block py-2 btn-masuk mb-4"> --}}
                  {{-- <div class="">
                    <a href="#" class="btn btn-block py-2 btn-google">
                      <span class="icon-google mr-3"></span> Masuk dengan Akun Google
                    </a>
                  </div> --}}
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
  </body>

</html>