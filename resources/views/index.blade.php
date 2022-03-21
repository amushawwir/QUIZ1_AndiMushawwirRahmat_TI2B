@extends('layouts.main')
@section ('header')
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">ANDI MUSHAWWIR RAHMAT</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header - set the background image for the header in the line below-->
        <header class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/wfh8dDlNFOk/1600x900')">
            <div class="text-center my-5">
                <img class="img-fluid rounded-circle mb-4" img src="images/amushawwir.jpg" width="100" alt="..." />
                <h1 class="text-white fs-3 fw-bolder">ANDI MUSHAWWIR RAHMAT</h1>
                <p class="text-white-50 mb-0">Politeknik Negeri Malang</p>
            </div>
@endsection
@section('center_content')
        <!-- Content section-->
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2>Andi Mushawwir Rahmat</h2>
                        <p class="lead">Akrab disapa Awi asal Kota Makassar bertempat tanggal lahir di Bekasi, 7 April 2001.</p>
                        <p class="mb-0">Motto "Sekali layar terkembang, pantang biduk surut ke pantai" yang berarti "Lebih memilih tenggelam di lautan daripada harus kembali lagi ke pantai tanpa hasil".</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Image element - set the background image for the header in the line below-->
        <div class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/4ulffa6qoKA/1200x800')">
            <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
            <div style="height: 20rem"></div>
        </div>
        <!-- Content section-->
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2>Politeknik Negeri Malang</h2>
                        <p class="lead">adalah perguruan tinggi negeri yang terdapat di Kota Malang, Provinsi Jawa Timur, Indonesia.</p>
                        <p class="mb-0">Politeknik Universitas Brawijaya merupakan lembaga pendidikan profesional, pada awalnya dibantu oleh tenaga ahli dari Swiss yang tergabung dalam Swiss Contact dan bertindak sebagai technical assistant bersama dengan beberapa tenaga ahli dari Indonesia yang telah mendapat pendidikan khusus di Pusat Pengembangan Pendidikan Politeknik Bandung. Khusus untuk Jurusan Akuntansi dan Jurusan Administrasi Niaga mendapatkan bantuan dari The Australian Project.</p>
                    </div>
                </div>
            </div>
        </section>
@endsection
@section('footer')
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; amushawwir.com</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
@endsection