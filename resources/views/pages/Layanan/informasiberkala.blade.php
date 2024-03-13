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

        <!-- Informasi Berkala Start-->
            <div class="container py-5">
                <div class="row mb-5 justify-content-center">
                    <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                        <h5 class="section-title px-3">Layanan</h5>
                        <h1 class="mb-0">Informasi Berkala</h1>
                    </div>
                </div>
                <section class="popular-categories">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="section-heading">
                            <h6>Our Categories</h6>
                            <h4>Check Out <em>Popular</em> Contest <em>Categories</em></h4>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="main-button">
                            <a href="categories.html">Discover All Categories</a>
                          </div>
                        </div>
                        <div class="col-lg-4 col-sm-4">
                          <div class="popular-item">
                            <div class="top-content">
                              <div class="icon">
                                <img src="img/icon-01.png" alt="">
                              </div>
                              <div class="right">
                                <h4>Tata cara memperoleh informasi publik dan pengajuan keberatan</h4>
                                <span><em>126</em> File</span>
                              </div>
                            </div>
                            <div class="thumb">
                              <img src="img/popular-01.png" alt="">
                            </div>
                            <div class="border-button">
                              <a href="contest-details.html">Lihat File</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-sm-4">
                          <div class="popular-item">
                            <div class="top-content">
                              <div class="icon">
                                <img src="img/icon-02.png" alt="">
                              </div>
                              <div class="right">
                                <h4>Informasi tentang regulasi badan publikt</h4>
                                <span><em>116</em>File</span>
                              </div>
                            </div>
                            <div class="thumb">
                              <img src="img/popular-02.png" alt="">
                            </div>
                            <div class="border-button">
                              <a href="contest-details.html">Lihat File</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-sm-4">
                          <div class="popular-item">
                            <div class="top-content">
                              <div class="icon">
                                <img src="img/icon-04.png" alt="">
                              </div>
                              <div class="right">
                                <h4>Informasi tentang profil badan publik</h4>
                                <span><em>164</em>File</span>
                              </div>
                            </div>
                            <div class="thumb">
                              <img src="img/popular-03.png">
                            </div>
                            <div class="border-button">
                              <a href="contest-details.html">Lihat File</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 py-3">
                          <div class="popular-item">
                            <div class="top-content">
                              <div class="icon">
                                <img src="img/icon-04.png" alt="">
                              </div>
                              <div class="right">
                                <h4>Ringkasan informasi tentang kinerja</h4>
                                <span><em>135</em>File</span>
                              </div>
                            </div>
                            <div class="thumb">
                              <img src="img/popular-04.png">
                            </div>
                            <div class="border-button">
                              <a href="contest-details.html">Lihat File</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 py-3">
                          <div class="popular-item">
                            <div class="top-content">
                              <div class="icon">
                                <img src="img/icon-04.png" alt="">
                              </div>
                              <div class="right">
                                <h4>Ringkasan program dan kegiatan yang sedang dijalankan</h4>
                                <span><em>135</em>File</span>
                              </div>
                            </div>
                            <div class="thumb">
                              <img src="img/popular-04.png">
                            </div>
                            <div class="border-button">
                              <a href="contest-details.html">Lihat File</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 py-3">
                          <div class="popular-item">
                            <div class="top-content">
                              <div class="icon">
                                <img src="img/icon-04.png" alt="">
                              </div>
                              <div class="right">
                                <h4>Raingkasan Laporan Keuangan</h4>
                                <span><em>135</em>File</span>
                              </div>
                            </div>
                            <div class="thumb">
                              <img src="img/popular-04.png">
                            </div>
                            <div class="border-button">
                              <a href="contest-details.html">Lihat File</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
            </div>
        </div>
        <!-- Informasi Berkala End -->

        @include('include.footer')

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        @include('include.script')

</html>