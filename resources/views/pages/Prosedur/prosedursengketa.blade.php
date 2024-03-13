<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>PPID Kota Surakarta</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        @include('include.style')
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        @include('include.navbar')

        <!-- About Start -->
        <div class="container-fluid pt-5">
            <div class="container">
                <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                    <h1 class="display-15 text-Capitalize">Prosedur Permohonan Penyelesaian Sengketa</h1>
                </div>
                <div class="row gx-5">
                    <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100" src="img/sengketa.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6 pb-5">
                        <h4 class="mb-4">Mekanisme Permohonan Penyelesaian Sengketa Informasi</h4>
                        <p class="mb-5">Terdapat dua cara yaitu sebagai berikut :</p>
                        <div class="row g-5">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center justify-content-center bg-primary border-inner mb-4" style="width: 90px; height: 90px;">
                                    <i class="fa fa-heartbeat fa-2x text-white"></i>
                                </div>
                                <h4 class="text-uppercase">LANGSUNG</h4>
                                <p class="mb-0">Permohonan penyelesaian sengketa informasi diajukan secara langsung (datang langsung).</p>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center justify-content-center bg-primary border-inner mb-4" style="width: 90px; height: 90px;">
                                    <i class="fa fa-award fa-2x text-white"></i>
                                </div>
                                <h4 class="text-uppercase">TERTULIS</h4>
                                <p class="mb-0">Permohonan penyelesaian sengketa informasi diajukan secara tertulis (surat) dikirim melalui email atau surat tercatat dan secara online.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

       <!-- Features Start -->
       <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="mb-0">Prosedur Permohonan Penyelesaian Sengketa Secara <span class="text-primary">Langsung</span></h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <p class="mb-0">1. Pemohon mengisi Form Permohonan Penyelesaian Sengketa Informasi yang telah disediakan petugas.</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <p class="mb-0">2. Membawa bukti surat permohonan informasi kepada Badan Publik dan tanda terimanya.</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <p class="mb-0">3. Membawa bukti jawaban permohonan informasi dari Badan Publik beserta tanda terimanya (jika ada).</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/business.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <p class="mb-0">4. Membawa bukti pengajuan keberatan kepada Badan Publik dan tanda terimanya.</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <p class="mb-0">5. Membawa bukti jawaban keberatan kepada Badan Publik dan tanda terimanya (jika ada).</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <p class="mb-0">6. Membawa bukti identitas (jika individu maka dibuktikan dengan Kartu Tanda Penduduk dan jika Badan Hukum dibuktikan dengan Anggaran Dasar yang telah mendapat pengesahan sebagai Badan Hukum dan bila dikuasakan dibuktikan dengan surat kuasa).</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Tata Cara Permohonan Layanan Informasi Start -->
    <div class="untree_co-section py-5">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h1 class="mb-0">Prosedur Permohonan Penyelesaian Sengketa Secara <span class="text-primary">Tertulis</span></h1>
                </div>
            </div>
            <div class="row align-items-stretch">

                <div class="col-8 col-sm-8 col-lg-6 feature-1-wrap d-md-flex flex-md-column order-lg-1 py-4 " >

                    <div class="feature-1 d-md-flex">
                        <div class="align-self-center">
                            <span class="flaticon-restaurant display-4 text-primary"></span>
                            <h3>Langkah 1</h3>
                            <p class="mb-0">Mengirim Surat Permohonan Penyelesaian Sengketa Informasi yang ditujukan ke Ketua Komisi Informasi Pusat dengan melampirkan bukti surat permohonan informasi kepada Badan Publik dan tanda terimanya.</p>
                        </div>
                    </div>

                    <div class="feature-1 ">
                        <div class="align-self-center">
                            <span class="flaticon-restaurant display-4 text-primary"></span>
                            <h3>Langkah 3</h3>
                            <p class="mb-0">Bukti pengajuan Keberatan kepada Badan Publik dan tanda terimanya.</p>
                        </div>
                    </div>
                </div>

                <div class="col-8 col-sm-8 col-lg-6 feature-1-wrap d-md-flex flex-md-column order-lg-1 py-4" >

                    <div class="feature-1 d-md-flex">
                        <div class="align-self-center">
                            <span class="flaticon-mail display-4 text-primary"></span>
                            <h3>Langkah 2</h3>
                            <p class="mb-0">Bukti jawaban permohonan informasi dari Badan Publik beserta tanda terimanya (jika ada).</p>
                        </div>
                    </div>


                    <div class="feature-1 d-md-flex">
                        <div class="align-self-center">
                            <span class="flaticon-phone-call display-4 text-primary"></span>
                            <h3>Langkah 4</h3>
                            <p class="mb-0">Bukti jawaban Keberatan kepada Badan Publik dan tanda terimanya (jika ada).</p>
                        </div>
                    </div>
                </div>

                <div class="col-8 col-sm-8 col-lg-6 feature-1-wrap d-md-flex flex-md-column order-lg-1 py-2" >

                    <div class="feature-1 d-md-flex">
                        <div class="align-self-center">
                            <span class="flaticon-mail display-4 text-primary"></span>
                            <h3>Langkah 5</h3>
                            <p class="mb-0">Bukti identitas (jika individu maka dibuktikan dengan Kartu Tanda Penduduk dan jika Badan Hukum dibuktikan dengan Anggaran Dasar yang telah mendapat pengesahan sebagai Badan Hukum dan bila dikuasakan dibuktikan dengan surat kuasa).</p>
                        </div>
                    </div>

            </div>
        </div>
    </div>
    <!-- Tata Cara Permohonan Layanan Informasi End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>

    @include('include.footer')

    @include('include.script')

    </body>

</html>