<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SIMPEL</title>
    <link rel="icon" href="{{asset('../img/icon.png')}}">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    {{-- js --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top" style="font-weight: bolder">SIMPEL</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#page-top">Masuk</a></li>
                    <li class="nav-item"><a class="nav-link" href="#layanan">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Dokumentasi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#masukan">Masukan</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h4 data-aos="fade-up" style="color:orange">Halo, Selamat Datang!</h4>
                    <h2 data-aos="fade-up" style="color: white; font-weight: bolder">Semua data penelitian ada dalam
                        satu aplikasi</h2>
                    <p class="text-white-75 mb-5">Simpel adalah sebuah sistem informasi
                        penelitian yang memuat seluruh data
                        penelitian yang dilakukan oleh civitas
                        akademika Politeknik Elektronika Negeri
                        Surabaya. Simpel bertujuan untuk
                        mempercepat proses pengolahan data
                        oleh dosen dan juga P3M.</p>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="col-lg-8 align-self-baseline">
                            <a class="btn btn-primary btn-xl" style="width: 49%; background-color:#FF8A00"
                                href="/login">login</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="../img/pens.jpg" class="img-thumbnail"
                        style="background-color: rgb(5, 67, 94); border: none; padding:20px;" alt="">
                </div>
            </div>
        </div>
    </header>
    <!-- Call to action-->
    <section class="page-section text-white"
        style="background: linear-gradient(to bottom, rgba(5, 67, 94, 0.83), rgb(5, 67, 94)),url(../img/bg.png)">
        <div class="container px-4 px-lg-5 text-center">
            <h4 class="mb-4">Website pengelola data-data penelitian Politeknik Elektronika Negeri Surabaya</h4>
            <a class="btn btn-light btn-xl" href="#layanan">layanan kami</a>
        </div>
    </section>
    <!-- Layanan-->
    <section class="page-section" id="layanan">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">Fitur Website</h2>
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-graph-up fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Grafik Penelitian</h3>
                        <p class="text-muted mb-0">Website ini menyajikan grafik penelitian yang ada di PENS mulai tahun
                            2019 hingga saat ini</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-folder-check fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Update Data</h3>
                        <p class="text-muted mb-0">Selain menyajikan data penelitian secara lengkap, website ini juga
                            mempermudah anda dalam mencari dan menyaring data-data yang anda butuhkan</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-chat-square-text fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Update Pengumuman</h3>
                        <p class="text-muted mb-0">Segala macam pengumuman terbaru terkait penelitian yang ada di PENS
                            akan diupdate pada website ini</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-shield-lock fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Kulitas dan keamanan</h3>
                        <p class="text-muted mb-0">Website ini dapat diakses seutuhnya bagi dosen dan P3M di PENS,
                            sehingga keamanan dan kuliatas data akan terjamin</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Dokumentasi-->
    <div id="portfolio">
        {{-- Portfolio --}}
        <div class="container-fluid p-0">
            <div class="col g-0">
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="https://api.jatimnet.com/jinet/assets/media/news/news/image_front/JATIMNET.COM_PENS.jpg" title="5 peneliti PENS raih juara 1 di Penelitian Terapan Tingkat Nasional 2021">
                        <img class="img" width="100%" height="300px"src="https://api.jatimnet.com/jinet/assets/media/news/news/image_front/JATIMNET.COM_PENS.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Agenda</div>
                            <div class="project-name">5 peneliti PENS raih juara 1 Penelitian Terapan Tingkat Nasional 2021</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="https://lppm.ub.ac.id/wp-content/uploads/DSC01168-400x267.jpg" title="P3M PENS melakukan studi banding ke LPPM UB">
                        <img class="img" width="100%" height="300px" src="https://lppm.ub.ac.id/wp-content/uploads/DSC01168-400x267.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Agenda</div>
                            <div class="project-name">P3M PENS melakukan studi banding ke LPPM UB</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="https://www.pens.ac.id/wp-content/uploads/2020/02/WEB.jpg" title="Pelatihan POC (Proof of Concept) IoT oleh P3M PENS">
                        <img class="img" width="100%" height="300px" src="https://www.pens.ac.id/wp-content/uploads/2020/02/WEB.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Agenda</div>
                            <div class="project-name">Pelatihan POC (Proof of Concept) IoT oleh P3M PENS</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="https://www.pens.ac.id/wp-content/uploads/2018/10/web-1080x675.jpg" title="P3M PENS menyelenggarakan Monev Penlok">
                        <img class="img" width="100%" height="300px" src="https://www.pens.ac.id/wp-content/uploads/2018/10/web-1080x675.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Agenda</div>
                            <div class="project-name">P3M PENS menyelenggarakan Monev Penlok</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="https://cdn.timesmedia.co.id/images/2021/12/16/PENS.jpg" title="PENS raih juara 1 Penelitian Terapan Tingkat Nasional 2021">
                        <img class="img" width="100%" height="300px" src="https://cdn.timesmedia.co.id/images/2021/12/16/PENS.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Agenda</div>
                            <div class="project-name">PENS raih juara 1 Penelitian Terapan Tingkat Nasional 2021</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="../img/pens.jpg" title="Politeknik Elektronika Negeri Surabaya">
                        <img class="img" width="100%" height="300px" src="../img/pens.jpg" alt="..." />
                        <div class="portfolio-box-caption p-3">
                            <div class="project-category text-white-50">Agenda</div>
                            <div class="project-name">Politeknik Elektronika Negeri Surabaya</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        {{-- End Portfolio --}}
    </div>
    <!-- Masukan-->
    <section class="page-section" id="masukan">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h2 class="mt-0">Kirim Masukan</h2>
                    <hr class="divider" />
                    <p class="text-muted mb-5">Silahkan berikan masukan berupa kritik dan saran anda terhadap aplikasi
                        kami.</p>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                <div class="col-lg-6">
                    <form id="masukanForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..."
                                data-sb-validations="required" />
                            <label for="name">Nama Lengkap</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">Nama anda harus diisi</div>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com"
                                data-sb-validations="required,email" />
                            <label for="email">Alamat Email</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">Email anda harus diisi</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email anda tidak valid</div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890"
                                data-sb-validations="required" />
                            <label for="phone">Nomor Telepon</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">Nomor telepon anda harus
                                diisi</div>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text"
                                placeholder="Enter your message here..." style="height: 10rem"
                                data-sb-validations="required"></textarea>
                            <label for="message">Pesan</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">Masukkan pesan anda</div>
                        </div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Pesan berhasil terkirim!</div>
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Gagal mengirim pesan!</div>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-primary btn-xl disabled" id="submitButton"
                                type="submit">Kirim</button></div>
                    </form>
                </div>
            </div>

        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-muted">Copyright &copy; 2022 - Sistem Penelitian Pens</div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>