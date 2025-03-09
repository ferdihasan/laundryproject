@extends('layouts.administrator')
@section('administrator')
    <div class="d-flex flex-column bg-body-tertiary p-3 m-1 rounded-3 shadow" style="width:100%; height: 88vh">
        <h1>Edit Pelanggan</h1>
        <hr>
        <form action="simpan/{{ $pelanggan->id }}" method="post" onsubmit="return confirm('Apakah anda yakin data yang anda masukan sudah benar?')">
            @csrf
            <div class="d-flex flex-row row">
                <div class="d-flex flex-column col-5">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" required value="{{ $pelanggan->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="no_hp" class="form-label">No Hp</label>
                        <input type="no_hp"  name="no_hp" class="form-control" id="no_hp" required value="{{ $pelanggan->no_hp }}">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea rows="3" type="text" name="alamat" class="form-control" id="alamat" required>{{ $pelanggan->alamat }}</textarea>
                    </div>
                </div>
            </div>
            <br>
            <button class="btn btn-primary" type="submit" style="width: 20%">Simpan Perubahan</button>
        </form>
    </div>
@endsection