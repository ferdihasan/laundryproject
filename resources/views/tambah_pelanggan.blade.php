@extends('layouts.administrator')
@section('administrator')
    <div class="d-flex flex-column bg-body-tertiary p-3 m-1 rounded-3 shadow" style="width:100%; height: 88vh">
        <h1>Tambah Pelanggan</h1>
        <hr>
        <form action="/pelanggan/tambah/simpan" method="post" onsubmit="return confirm('Apakah anda yakin data yang anda masukan sudah benar?')">
            @csrf
            <div class="d-flex flex-row row">
                <div class="d-flex flex-column col-3">
                    <div class="mb-3">
                        <label class="form-label" for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" required >
                    </div>
                    <div class="mb-3">
                        <label for="no_hp" class="form-label">No Hp</label>
                        <input type="text"  name="no_hp" class="form-control" id="no_hp" required >
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea rows="3" type="text"  name="alamat" class="form-control" id="alamat" required></textarea>
                    </div>
                </div>
            </div>
            <br>
            <button class="btn btn-primary" type="submit" style="width: 20%">Simpan</button>
        </form>
    </div>
    {{-- <script defer src="../dist/js/main.js"></script> --}}
@endsection