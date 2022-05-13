<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title Page-->
  <title>SIMPEL | REGISTER</title>

  <!-- Font special for pages-->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <!-- Main CSS-->
  <link href="style_register.css" rel="stylesheet" media="all">


  <style>
    /* ==========================================================================
     #GRID
     ========================================================================== */
    .row {
      display: -webkit-box;
      display: -webkit-flex;
      display: -moz-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
    }

    .row .col-2:last-child .input-group-desc {
      margin-bottom: 0;
    }

    .row-space {
      -webkit-box-pack: justify;
      -webkit-justify-content: space-between;
      -moz-box-pack: justify;
      -ms-flex-pack: justify;
      justify-content: space-between;
    }

    .row-refine {
      margin: 0 -15px;
    }

    .row-refine .col-3 .input-group-desc,
    .row-refine .col-9 .input-group-desc {
      margin-bottom: 0;
    }

    @media (max-width: 767px) {
      .col-2 {
        width: 100%;
      }
    }

    .form-row {
      display: -webkit-box;
      display: -webkit-flex;
      display: -moz-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -moz-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      margin-bottom: 25px;
    }

    .form-row .name {
      width: 125px;
      color: #555;
      font-size: 40px !important;
      font-weight: bold;
    }

    .form-row .value {
      width: -webkit-calc(100% - 125px);
      width: -moz-calc(100% - 125px);
      width: calc(100% - 125px);
    }

    @media (max-width: 767px) {
      .form-row {
        display: block;
      }

      .form-row .name,
      .form-row .value {
        display: block;
        width: 100%;
      }

      .form-row .name {
        margin-bottom: 7px;
      }
    }

    /* ==========================================================================
     #BOX-SIZING
     ========================================================================== */
    html {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    }

    * {
      padding: 0;
      margin: 0;
    }

    *,
    *:before,
    *:after {
      -webkit-box-sizing: inherit;
      -moz-box-sizing: inherit;
      box-sizing: inherit;
    }

    /* ==========================================================================
     #RESET
     ========================================================================== */
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    blockquote,
    p,
    pre,
    dl,
    dd,
    ol,
    ul,
    figure,
    hr,
    fieldset,
    legend {
      margin: ;
      padding: 0;
    }

    /**
   * Remove trailing margins from nested lists.
   */
    li>ol,
    li>ul {
      margin-bottom: 0;
    }

    /**
   * Remove default table spacing.
   */
    table {
      border-collapse: collapse;
      border-spacing: 0;
    }

    fieldset {
      min-width: 0;
      border: 0;
    }

    button {
      outline: none;
      background: none;
      border: none;
    }

    /* ==========================================================================
     #PAGE WRAPPER
     ========================================================================== */
    .page-wrapper {
      min-height: 100vh;
    }

    body {
      font-family: "Open Sans", "Arial", "Helvetica Neue", sans-serif;
      font-weight: bold;
      font-size: 25px;
      background-color: #05445E;
    }

    /* ==========================================================================
     #SPACING
     ========================================================================== */
    .p-t-45 {
      padding-top: 45px;
    }

    .p-t-20 {
      padding-top: 20px;
    }

    .p-b-50 {
      padding-bottom: 50px;
    }

    /* ==========================================================================
     #WRAPPER
     ========================================================================== */
    .wrapper {
      margin: 0 auto;
    }

    .wrapper--w790 {
      max-width: 790px;
    }

    /* ==========================================================================
     #BUTTON
     ========================================================================== */
    .btn {
      display: inline-block;
      line-height: 50px;
      padding: 0 50px;
      -webkit-transition: all 0.4s ease;
      -o-transition: all 0.4s ease;
      -moz-transition: all 0.4s ease;
      transition: all 0.4s ease;
      cursor: pointer;
      font-size: 15px;
      text-transform: uppercase;
      font-weight: 700;
      color: rgb(255, 255, 255);
      font-family: inherit;
    }

    .btn--radius-2 {
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
      margin: auto;
    }

    .btn--red {
      background: #05445E;
    }

    /* ==========================================================================
     #FORM
     ========================================================================== */
    input {
      outline: none;
      margin: 0;
      border: none;
      -webkit-box-shadow: none;
      -moz-box-shadow: none;
      box-shadow: none;
      width: 100%;
      font-size: 14px;
      font-family: inherit;
    }

    .input--style-5 {
      background: #ffffff;
      line-height: 50px;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
      padding: 0 22px;
      font-size: 16px;
      color: #555;
    }

    .input-group-desc {
      position: relative;
    }

    @media (max-width: 767px) {
      .input-group-desc {
        margin-bottom: 40px;
      }
    }

    .input-group {
      position: relative;
      margin: 0;
    }

    .label {
      color: rgb(224, 224, 224);
      font-size: 15px;
      font-weight: normal;
    }

    /* ==========================================================================
     #TITLE
     ========================================================================== */
    .title {
      font-size: 24px;
      text-transform: uppercase;
      font-weight: bold;
      text-align: center;
      color: rgb(255, 255, 255);
    }

    /* ==========================================================================
     #CARD
     ========================================================================== */
    .card {
      -webkit-border-radius: 3px;
      -moz-border-radius: 3px;
      border-radius: 3px;
      background: #fff;
    }

    .card-5 {
      background: #396A7E;
      -webkit-border-radius: 10px;
      -moz-border-radius: 10px;
      border-radius: 10px;
      -webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
      -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
      box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
    }

    .card-5 .card-heading {
      padding: 30px 0;
      background: #396A7E;
      -webkit-border-top-left-radius: 10px;
      -moz-border-radius-topleft: 10px;
      border-top-left-radius: 10px;
      -webkit-border-top-right-radius: 10px;
      -moz-border-radius-topright: 10px;
      border-top-right-radius: 10px;
    }

    .card-5 .card-body {
      padding: 30px 85px;
      padding-bottom: 40px;
    }

    @media (max-width: 767px) {
      .card-5 .card-body {
        padding: 40px 30px;
        padding-bottom: 50px;
      }
    }


    /* Dropdown */
    .select-menu{
    width: 500px;
    margin: 30px 300px 20px auto;
}
.select-menu .select-btn{
    display: flex;
    height: 55px;
    background: #fff;
    padding: 20px;
    font-size: 18px;
    font-weight: 400;
    border-radius: 8px;
    align-items: center;
    cursor: pointer;
    justify-content: space-between;
    box-shadow: 0 0 5px rgba(0,0,0,0.1);
}
.select-btn i{
    font-size: 25px;
    transition: 0.3s;
}
.select-menu.active .select-btn i{
    transform: rotate(-180deg);
}
.select-menu .options{
    position: relative;
    padding: 20px;
    margin-top: 10px;
    border-radius: 8px;
    background: #fff;
    box-shadow: 0 0 3px rgba(0,0,0,0.1);
    display: none;
}
.select-menu.active .options{
    display: block;
}
.options .option{
    display: flex;
    height: 55px;
    cursor: pointer;
    padding: 0 16px;
    border-radius: 8px;
    align-items: center;
    background: #fff;
}
.options .option:hover{
    background: #F2F2F2;
}
.option i{
    font-size: 25px;
    margin-right: 12px;
}
.option .option-text{
    font-size: 18px;
    color: #333;
}

  </style>
</head>

<body>
  <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
    <div class="wrapper wrapper--w790">
      <div class="card card-5">
        <div class="card-heading">
          <h2 class="title">Daftar Akun Simpel</h2>
        </div>
        <div class="card-body">
          <form method="post" action="/register">
            @csrf

            <div class="form-row">
              <div class="value">
                <div class="input-group">
                  <input class="input--style-5" type="name" name="nama" placeholder="Nama Lengkap">
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="value">
                <div class="input-group">
                  <input class="input--style-5" type="text" name="NIP" placeholder="Masukkan NIP Pegawai">
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="value">
                <div class="input-group">
                  <input class="input--style-5" type="email" name="email" placeholder="Nama Pengguna / email">
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="value">
                <div class="input-group">
                  <input class="input--style-5" type="text" name="no_telp" placeholder="No Telepon">
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="value">
                <div class="input-group">
                  <input class="input--style-5" type="text" name="alamat" placeholder="Alamat Lengkap">
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="value">
                <div class="input-group">
                  <input class="input--style-5" type="password" name="password" placeholder="Kata Sandi">
                </div>
              </div>
            </div>
            {{-- Jangan dihapus ya gais dibawah ini wkwk --}}
            <input class="input--style-5" hidden type="text" name="prodi_id" placeholder="Kata Sandi" value="2">
            
            <div class="select-menu">
              <div class="select-btn">
                  <span class="sBtn-text">Pilih Prodi</span>
                  <i class="bx bx-chevron-down"></i>
              </div>
              <ul class="options">
                  <li class="option">
                      <span class="option-text">Prodi Informatika & Komputer</span>
                  </li>
                  <li class="option">
                      <span class="option-text">Prodi Elektro</span>
                  </li>
                  <li class="option">
                      <span class="option-text">ProdI</span>
                  </li>
                  <li class="option">
                      <span class="option-text">Facebook</span>
                  </li>
                  <li class="option">
                      <span class="option-text">Twitter</span>
                  </li>
              </ul>
          </div>

            <div class="form-row p-t-20  ">
              <label class="label label--block">Dengan mengklik Daftar, Anda menyetujui <a href="">Ketentuan,
                  Kebijakan Data</a> dan <a href="">Kebijakan Cookie</a> kami. Anda akan menerima
                Notifikasi SMS dari Simple dan dapat menolaknya kapan saja.</label>
            </div>

            <div>
              <button class="btn btn--radius-2 btn--red align-center" type="submit">Daftar</button>
            </div>
          </form>
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

<script src="js/script.js"></script>

</body>

</html>