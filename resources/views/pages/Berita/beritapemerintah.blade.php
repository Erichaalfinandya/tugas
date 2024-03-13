<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>PPID Kota Surakarta</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        @include('include.style')

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        @include('include.navbar')

            <!-- Carousel Start -->
            <div class="carousel-header">
                <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="img/carousel-2.jpg" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 1000px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 2px;">SELAMAT DATANG DI PORTAL</h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4">PPID PEMERINTAH KOTA SURAKARTA</h1>
                                    <p class="mb-5 fs-5">Kompleks Balaikota Surakarta Jl. Jend Sudirman, Kedung Lumbu, Kec. Ps. Kliwon, Kota Surakarta, Jawa Tengah,57133
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/carousel-1.jpg" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 1000px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 2px;">SELAMAT DATANG DI PORTAL</h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4">PPID PEMERINTAH KOTA SURAKARTA</h1>
                                    <p class="mb-5 fs-5">Kompleks Balaikota Surakarta Jl. Jend Sudirman, Kedung Lumbu, Kec. Ps. Kliwon, Kota Surakarta, Jawa Tengah,57133
                                    </p>>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/carousel-3.jpg" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 1000px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 2px;">SELAMAT DATANG DI PORTAL</h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4">PPID PEMERINTAH KOTA SURAKARTA</h1>
                                    <p class="mb-5 fs-5">Kompleks Balaikota Surakarta Jl. Jend Sudirman, Kedung Lumbu, Kec. Ps. Kliwon, Kota Surakarta, Jawa Tengah,57133
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="false"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icon btn bg-primary" aria-hidden="false"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">Profil</h2>
                <h1 class="display-4 text-uppercase">Profile Pimpinan Kota Surakarta</h1>
            </div>
        </div>
    </div>
    <!-- Team End -->

    @include('include.footer')  

    @include('include.script')

    </body>

</html>