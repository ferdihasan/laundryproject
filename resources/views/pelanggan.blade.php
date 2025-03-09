{{-- @dd($pelanggan) --}}
@extends('layouts.administrator')

@section('alert')
    @if (session()->has('updateSuccess'))
    <div class="alert alert-success alert-dismissible fade show alert-centered" role="alert">
        <i class="bi bi-check-circle-fill"> </i>{{ session('updateSuccess') }}
        <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="Close"></button>
    </div>
    @endif
    @if (session()->has('Success'))
    <div class="alert alert-success alert-dismissible fade show alert-centered" role="alert">
        <i class="bi bi-check-circle-fill"> </i>{{ session('Success') }}
        <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="Close"></button>
    </div>
    @endif
    @if (session()->has('hapusPelanggan'))
    <div class="alert alert-success alert-dismissible fade show alert-centered" role="alert">
        <i class="bi bi-check-circle-fill"> </i>{{ session('hapusPelanggan') }}
        <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="Close"></button>
    </div>
    @endif
@endsection

@section('administrator')
    <div class="d-flex flex-row bg-body-tertiary p-3 m-1 rounded-3 shadow" style="width:100%; height: 88vh">
        <div class="overflow-x-scroll" style="height: 80vh">
            <table class="table table-striped ">
                <thead class="align-center">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">No Hp</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pelanggan as $pel)
                        <tr>
                            <td>{{ $angka }}</td>
                            <td>{{ $pel->name }}</td>
                            <td>{{ $pel->no_hp }}</td>
                            <td>{{ $pel->alamat }}</td>
                            <td>
                                {{-- <a href="tambah-karyawan" data-bs-toggle="tooltip" data-bs-title="tambah" data-bs-placement="top"><i class="bi bi-plus-square"></i></a>  --}}
                                <div class="d-flex flex-row">
                                    <form action="pelanggan/edit/{{ $pel->id }}" method="get">
                                        @csrf
                                        <button class="btn" type="submit">
                                            <i class="bi bi-pencil" style="color: green"></i>
                                        </button>
                                    </form>
                                    <form action="pelanggan/hapus/{{ $pel->id }}" method="post" onsubmit="return confirm(`Apakah ingin menghapus karyawan {{ $pel->name }} `)">
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