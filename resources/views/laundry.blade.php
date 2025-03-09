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
    {{-- {{dd($laundry)}} --}}
    <div class="d-flex flex-row bg-body-tertiary p-3 m-1 justify-content-center rounded-3 shadow" style=" height: 68%">
        @if ($laundry !== null)
            <div class="card p-3 text-center shadow" style="width: 30%">
                {{-- {{dd($laundry)}} --}}
                <div class="card-title card-header text-center mb-3"><h2>Ferdi Laundry</h2></div><hr>
                <div class="mb-5">
                    <table>
                        <tr>
                            <th>Nama:</th>
                            <td>{{$laundry->pelanggan->name}}</td>
                        </tr>
                        <tr>
                            <th>ID Laundry:</th>
                            <td>{{$laundry->id}}</td>
                        </tr>
                        <tr>
                            <th>Bobot:</th>
                            <td>{{$laundry->weight}} Kg</td>
                        </tr>
                        <tr>
                            <th>Tanggal:</th>
                            <td>{{$laundry->date}}</td>
                        </tr>
                        <tr>
                            <th>Status:</th>
                            @if ($laundry->status === 'aktif')
                                <td>Proses pencucian</td>
                            @elseif ($laundry->status === 'siap')
                                <td>Siap diambil</td>
                            @else
                                <td>Sudah diambil</td>
                            @endif
                        </tr>
                        <tr>
                            <th>Total:</th>
                            <td>Rp. {{$laundry->weight * 7000}}</td>
                        </tr>
                        @if ( $laundry->status === 'selesai')
                            <tr>
                                <th>Tanggal diambil:</th>
                                <td>{{$laundry->take_date}}</td>
                            </tr>
                        @endif
                    </table><hr>
                </div>
                <div class="card-footer text-center">
                    <p>Terima kasih telah menggunakan jasa dari Ferdi Laundry </p>
                </div>
            </div>
        @else
            <h4 class="text-center">Data tidak ditemukan.</h4>
        @endif
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