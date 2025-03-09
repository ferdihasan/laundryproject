@extends('layouts.main')
@include('components.navbar')
@section('head')
    
@endsection
@section('alert')
    @if (session()->has('logout'))
    <div class="alert alert-success alert-dismissible fade show alert-centered" role="alert">
        <i class="bi bi-check-circle-fill"> </i>{{ session('logout') }}
        <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="Close"></button>
    </div>
@endif
    @if (session()->has('email'))
    <div class="alert alert-danger alert-dismissible fade show alert-centered" role="alert">
        <i class="bi bi-x-circle-fill"> </i>{{ session('email') }}
        <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="Close"></button>
    </div>
@endif
    @if (session()->has('id_search'))
    
@endif
@endsection
@section('home')
<div class="d-flex row mt-5" style="height: 65%">
    <div class="col">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner rounded-5" style="position:absolute; y-index: -1">
                <div class="carousel-item active">
                    <img src="dist/pics/laundry1.jpg" class="d-block w-100" alt="img/img1">
                </div>
                <div class="carousel-item">
                    <img src="dist/pics/laundry2.jpeg" class="d-block w-100" alt="img/img2">
                </div>
                <div class="carousel-item">
                    <img src="dist/pics/laundry3.webp" class="d-block w-100" alt="img/img3">
                </div>
                <div class="carousel-item">
                    <img src="dist/pics/laundry4.png" class="d-block w-100" alt="img/img4">
                </div>
                <div class="carousel-item">
                    <img src="dist/pics/laundry5.jpg" class="d-block w-100" alt="img/img5">
                </div>
                <div class="carousel-item">
                    <img src="dist/pics/laundry6.jpeg" class="d-block w-100" alt="img/img6">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="col p-4 ">
        <div class="d-flex justify-content-center">
            <h3>About Us</h3>
        </div>
        <div class="row">
            <table>
                <tr>
                    <th>Alamat Lengkap:</th>
                    <td style="text-align: justify">Dsn Krajan RT 01 RW 01 Ds Jetaksari Kec Pulokulon Kab Grobogan.</td>
                </tr>
                <tr>
                    <th>About:</th>
                    <td style="text-align: justify">Ferdi Laundry, layanan laundry terpercaya yang hadir untuk memudahkan Anda dalam merawat pakaian dan kebutuhan kebersihan lainnya. Kami hadir dengan konsep layanan laundry yang efisien, ramah lingkungan, dan terjangkau untuk Anda yang memiliki jadwal padat.</td>
                </tr>
                <tr>
                    <th>Visi:</th>
                    <td style="text-align: justify">Menjadi penyedia layanan laundry terbaik di Indonesia dengan fokus pada kualitas, kepuasan pelanggan, serta keberlanjutan lingkungan.</td>
                </tr>
                <tr>
                    <th>Misi:</th>
                    <td style="text-align: justify">Memberikan layanan laundry yang cepat, bersih, dan berkualitas dengan mengutamakan kenyamanan pelanggan.</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
@section('footer')
<footer class="shadow-lg" style="position: absolute; button: 0; width: 100%; height: 170px">
    <div class="container">
        <div class="row mb-3">
            <div class="col-3">
                <div style="height: 100%; text-align: center; margin: auto">
                    <br><br>
                    <h2>Ferdi Laundry</h2>
                </div>
            </div>
            <div class="col">
                <div class="d-flex justify-content-center">
                    <h3>Contact</h3>
                </div>
                <div class="d-flex row">
                    <div class="col">
                        <table>
                            <tr>
                                <th><i class="bi bi-envelope"></i> Email: </th>
                                <td>support@ferdilaundry.com</td>
                            </tr>
                            <tr>
                                <th><i class="bi bi-telephone"></i> Nomor: </th>
                                <td>029212345</td>
                            </tr>
                            <tr>
                                <th><i class="bi bi-facebook"></i> Facebook: </th>
                                <td>https://www.facebook.com/ferdilaundry</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col">
                        <table>
                            <tr>
                                <th><i class="bi bi-twitter"></i> Twitter: </th>
                                <td>https://www.twitter.com/ferdilaundry</td>
                            </tr>
                            <tr>
                                <th><i class="bi bi-instagram"></i> instagram: </th>
                                <td>https://www.instagram.com/ferdilaundry</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <hr>
            <p>Powered By &copy; Ferdi Laundry</p>
        </div>
    </div>
</footer>
@endsection