@extends('layouts.administrator')

@section('alert')
    @if (session()->has('loginSuccess'))
    <div class="alert alert-success alert-dismissible fade show alert-centered" role="alert">
        <i class="bi bi-check-circle-fill"> </i>{{ session('loginSuccess') }}
        <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="Close"></button>
    </div>
    @endif
@endsection
@section('administrator')
    <div class="d-flex flex-row bg-body-tertiary p-3 m-1 rounded-3 shadow" style="width:100%; height: 88vh">
        <div class="card text-bg-primary m-3 shadow" style="width: 18rem; height: 15rem">
            <div class="card-header text-center">Aktif Laundry</div>
            <div class="card-body text-center">
            <h1 class="card-title">{{$laundry_aktif->count()}}</h1>
            <p class="card-text">Data laundry yang aktif.</p>
            <p class="card-text">Total Rp. {{$total_aktif}}</p>
            </div>
            <a href="/laundry/aktif" class="text-decoration-none text-reset">
                <div class="card-footer ">Click for details</div>
            </a>
        </div>
        <div class="card text-bg-warning m-3 shadow" style="width: 18rem; height: 15rem">
            <div class="card-header text-center">Siap Diambil</div>
            <div class="card-body text-center">
            <h1 class="card-title">{{$laundry_siap->count()}}</h1>
            <p class="card-text">Data laundry yang siap diambil.</p>
            <p class="card-text">Total Rp. {{$total_siap}}</p>
            </div>
            <a href="/laundry/siap" class="text-decoration-none text-reset">
                <div class="card-footer ">Click for details</div>
            </a>
        </div>
        <div class="card text-bg-danger m-3 shadow" style="width: 18rem; height: 15rem">
            <div class="card-header text-center">Selesai Laundry</div>
            <div class="card-body text-center">
            <h1 class="card-title">{{$laundry_selesai->count()}}</h1>
            <p class="card-text">Data laundry yang selesai.</p>
            <p class="card-text">Total Rp. {{$total_selesai}}</p>
            </div>
            <a href="/laundry/selesai" class="text-decoration-none text-reset">
                <div class="card-footer ">Click for details</div>
            </a>
        </div> 
    </div>
@endsection