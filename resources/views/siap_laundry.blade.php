{{-- @dd($laundry) --}}
@extends('layouts.administrator')
@section('alert')
@if (session()->has('hapusAktifLaundry'))
<div class="alert alert-success alert-dismissible fade show alert-centered" role="alert">
    <i class="bi bi-check-circle-fill"> </i>{{ session('hapusAktifLaundry') }}
    <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="Close"></button>
</div>
@endif
@if (session()->has('simpanLaundry'))
<div class="alert alert-success alert-dismissible fade show alert-centered" role="alert">
    <i class="bi bi-check-circle-fill"> </i>{{ session('simpanLaundry') }}
    <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="Close"></button>
</div>
@endif
@endsection
@section('administrator')
<div class="d-flex flex-row bg-body-tertiary p-3 m-1 rounded-3 shadow" style="width:100%; height: 88vh">
    <div class="overflow-x-scroll" style="width:100%; height: 80vh">
        <table class="table table-striped ">
            <thead class="align-center">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Weight</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Status</th>
                    <th scope="col">Total</th>
                    {{-- <th scope="col">Tanggal Ambil</th> --}}
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($laundry as $l)
                    <tr>
                        <td>{{ $angka }}</td>
                        <td>{{ $l->id }}</td>
                        <td>{{ $l->pelanggan->name }}</td>
                        <td>{{ $l->weight }} Kg</td>
                        <td>{{ $l->date }}</td>
                        <td>{{ $l->status }}</td>
                        <td>Rp. {{ $l->weight * 7000 }}</td>
                        {{-- <td>{{ $l->take_date }}</td> --}}
                        <td>
                            {{-- <a href="tambah-karyawan" data-bs-toggle="tooltip" data-bs-title="tambah" data-bs-placement="top"><i class="bi bi-plus-square"></i></a>  --}}
                            <div class="d-flex flex-row">
                                <form action="/laundry/edit/{{ $l->id }}" method="get">
                                    @csrf
                                    <button class="btn" type="submit">
                                        <i class="bi bi-pencil" style="color: green"></i>
                                    </button>
                                </form>
                                <form action="/laundry/hapus/{{ $l->id }}" method="post" onsubmit="return confirm(`Apakah ingin menghapus karyawan {{ $l->pelanggan->name }} `)">
                                    @csrf
                                    <button class="btn" type="submit">
                                        <i class="bi bi-trash" style="color: red"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php $angka++ ?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection