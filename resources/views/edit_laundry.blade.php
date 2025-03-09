@extends('layouts.administrator')
@section('administrator')
    <div class="d-flex flex-column bg-body-tertiary p-3 m-1 rounded-3 shadow" style="width:100%; height: 88vh">
        <h1>Edit Laundry</h1>
        <hr>
        <form action="/laundry/edit/simpan/{{ $laundry->id }}" method="post" onsubmit="return confirm('Apakah anda yakin data yang anda masukan sudah benar?')">
            @csrf
            <div class="d-flex flex-row row">
                <div class="d-flex flex-column col-3">
                    <div class="mb-3">
                        <label class="form-label" for="name">Name</label>
                        <select name="name" id="name" class="form-select" aria-label="Default select example">
                            <option value="{{$laundry->pelanggan->name}}" selected>{{$laundry->pelanggan->name}}</option>
                            @foreach ($pelanggan as $pel)
                                <option value="{{ $pel->name }}">{{ $pel->name }} - {{$pel->no_hp}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="weight" class="form-label">Weight sataun Kg</label>
                        <input type="text"  name="weight" class="form-control" id="weight" required value="{{ $laundry->weight }}">
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Tanggal Masuk</label>
                        <input type="datetime-local"  name="date" class="form-control" id="date" required value="{{ $laundry->date }}">
                    </div>
                </div>
                <div class="d-flex flex-column col-3">
                    <div class="mb-3">
                        <label class="form-label" for="name">Status</label>
                        <select name="status" id="status" class="form-select" aria-label="Default select example" onchange="onChangeStatus()">
                            <option value="{{$laundry->status}}">Abaikan jika tidak dirubah</option>
                            <option value="aktif">aktif</option>
                            <option value="siap">siap</option>
                            <option value="selesai">selesai</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="date" id="label_take_date" class="form-label" <?= $laundry->status !== 'selesai' ? 'hidden' : '' ?>>Tanggal Ambil</label>
                        <input rows="3" type="datetime-local" name="take_date" class="form-control" id="take_date" <?= $laundry->status !== 'selesai' ? 'hidden' : 'required' ?> value="{{$laundry->take_date}}">
                    </div>
                </div>
            </div>
            <br>
            <button class="btn btn-primary" type="submit" style="width: 20%">Simpan Perubahan</button>
        </form>
    </div>
    <script defer src="../../dist/js/main.js"></script>
@endsection