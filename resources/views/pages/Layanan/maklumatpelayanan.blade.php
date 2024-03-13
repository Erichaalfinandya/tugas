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
        
        <!-- about section -->
        <section class="about_section layout_padding py-5">
            <div class="container">
            <div class="row">
                <div class="col-md-6 px-0">
                <div class="img_container">
                    <div class="img-box">
                    <img src="img/maklumat.jpg" alt="" />
                    </div>
                </div>
                </div>
                <div class="col-md-6 px-0">
                <div class="detail-box">
                    <div class="heading_container ">
                    <h2>
                        Bagaimakah Maklumat Pelayanan Informasi?
                    </h2>
                    </div>
                    <p1>Nomor : 12.05.03/756/2022, Berdasarkan Peraturan Komisi Informasi Nomor 1 Tahun 2021 Tentang Standar Pelayanan Informasi Publik. Pemerintah Kota Surakarta Berkomitmen Untuk:</p1>
                    <li> Memberikan Pelayanan Informasi dan Dokumentasi Publik yang cepat, tepat waktu, akurat serta benar sesuai peraturan yang berlaku;</li>
                    <li> Menyediakan Daftar Informasi Publik yang wajib disediakan dan diumumkan dengan memanfaatkan Teknologi Informasi;</li>
                    <li> Memberikan pelayanan secara ramah, santun, dan transparan serta tanpa biaya;</li>
                    <li> Merespon dengan cepat Permintaan Informasi dan Keberatan Informasi Publik yang disampaikan baik langsung atau secara elektronik;</li>
                    <li> Menyediakan aksesbilitas informasi bagi penyandang disabilitas;</li>
                    <li> Melakukan pengawasan internal dan evaluasi kinerja pelaksanaan informasi publik.</li>
                    <p>Untuk melihat dokumen klik dibawah ini.</p>
                    <div class="btn">
                    <a href="https://drive.google.com/file/d/1EfBLtD2rjKGxUpI_ff8dqiWRbLdXnsmR/view">
                        LIHAT
                    </a>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>
        <!-- end about section -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>

        @include('include.footer')
        
        @include('include.script')

    </body>

</html>