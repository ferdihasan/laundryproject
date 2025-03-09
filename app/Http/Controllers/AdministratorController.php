<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\Laundry;
use Illuminate\Support\Facades\Session;

class AdministratorController extends Controller
{
    public function index (){

        $laundry_aktif = Laundry::where('status', 'aktif')->get();
        $total_aktif = 0;
        $laundry_siap = Laundry::where('status', 'siap')->get();
        $total_siap = 0;
        $laundry_selesai = Laundry::where('status', 'selesai')->get();
        $total_selesai = 0;

        foreach ($laundry_aktif as $aktif) {
            $total_aktif += $aktif->weight * 7000;
        }
        foreach ($laundry_siap as $siap) {
            $total_siap += $siap->weight * 7000;
        }
        foreach ($laundry_selesai as $selesai) {
            $total_selesai += $selesai->weight * 7000;
        }

        return view ('administrator', [
            'title' => 'Administrator',
            'subtitle' => 'Ferdi Laundry',
            'laundry_aktif' => $laundry_aktif,
            'total_aktif' => $total_aktif,
            'laundry_siap' => $laundry_siap,
            'total_siap' => $total_siap,
            'laundry_selesai' => $laundry_selesai,
            'total_selesai' => $total_selesai,
        ]);
    }
    public function pelanggan () {
        return view ('pelanggan', [
            'title' => 'Daftar Pelanggan',
            'subtitle' => 'Ferdi Laundry',
            'angka' => 1,
            'pelanggan' => Pelanggan::All()
        ]);
    }

    public function edit_pelanggan (Request $request) {
        $req_id = $request->id;

        return view('edit_pelanggan', [
            'title' => 'Edit Pelanggan',
            'subtitle' => 'Ferdi Laundry',
            'pelanggan' => Pelanggan::find($req_id)
        ]);
    }
    // simpan edit pelanggan
    public function simpan_pelanggan(Request $request){
        $req_id = $request->id;
        $req_name = $request->name;
        $req_no_hp = $request->no_hp;
        $req_alamat = $request->alamat;

        $pelanggan = Pelanggan::find($req_id);
        $pelanggan->update([
            'name' => $req_name,
            'no_hp' => $req_no_hp,
            'alamat' => $req_alamat,
        ]);
        Session::flash('Success', 'Data Berhasil diubah!');
        return redirect('pelanggan');
    }
    //simpan tambah pelanggan
    public function simpan_tambah_pelanggan(Request $request){
        // $req_id = $request->id;
        $req_name = $request->name;
        $req_no_hp = $request->no_hp;
        $req_alamat = $request->alamat;

        Pelanggan::create([
            'name' => $req_name,
            'no_hp' => $req_no_hp,
            'alamat' => $req_alamat,
        ]);
        Session::flash('Success', 'Data Berhasil ditambah!');
        return redirect('pelanggan');
    }

    // hapus pelanggan
    public function hapus_pelanggan(Request $request){
        $req_id = $request->id;
        $pelanggan = Pelanggan::find($req_id);
        $pelanggan->delete();
        Session::flash('hapusPelanggan', 'Data Berhasil dihapus!');
        return redirect('pelanggan');
    }

    // laundry

    public function tambah_laundry(){
        return view('tambah_laundry', [
            'title' => 'Tambah Laundry',
            'subtitle' => 'Ferdi Laundry',
            'angka' => 1,
            'pelanggan' => Pelanggan::All()
        ]);
    }
    public function tambah_pelanggan(){
        return view('tambah_pelanggan', [
            'title' => 'Tambah Pelanggan',
            'subtitle' => 'Ferdi Laundry',
            'angka' => 1,
        ]);
    }
    public function aktif_laundry(){
        return view('aktif_laundry', [
            'title' => 'Aktif Laundry',
            'subtitle' => 'Ferdi Laundry',
            'angka' => 1,
            'laundry' => Laundry::where('status', 'aktif')->get()
        ]);
    }
    public function siap_laundry(){
        return view('siap_laundry', [
            'title' => 'Siap diambil',
            'subtitle' => 'Ferdi Laundry',
            'angka' => 1,
            'laundry' => Laundry::where('status', 'siap')->get()
        ]);
    }

    public function edit_laundry(Request $request){
        $req_id = $request->id;
        return view('edit_laundry', [
            'title' => 'Edit Laundry',
            'subtitle' => 'Ferdi Laundry',
            'laundry' => Laundry::find($req_id),
            'pelanggan' => Pelanggan::All()
        ]);
    }

    public function simpan_laundry(Request $request){
        // dd($request);
        $req_id = $request->id;
        $req_name = $request->name;
        $req_weight = $request->weight;
        $req_date = $request->date;
        $req_status = $request->status;
        $req_take_date = $request->take_date;

        $laundry = Laundry::find($req_id);
        $laundry->update([
            'name' => $req_name,
            'weight' => $req_weight,
            'date' => $req_date,
            'status' => $req_status,
            'take_date' => $req_take_date,
        ]);

        Session::flash('simpanLaundry', 'Data Berhasil disimpan!');
        return redirect('laundry/aktif');
    }
    public function simpan_tambah_laundry(Request $request){
        // dd($request);
        // $req_id = $request->id;
        $req_name = Pelanggan::find($request->name)->name;
        $req_pelanggan_id = $request->name;
        $req_weight = $request->weight;
        $req_date = $request->date;
        $req_status = $request->status;
        $req_take_date = $request->take_date;

        Laundry::create([
            'name' => $req_name,
            'pelanggan_id' => $req_pelanggan_id,
            'weight' => $req_weight,
            'date' => $req_date,
            'status' => $req_status,
            'take_date' => $req_take_date,
        ]);

        Session::flash('Success', 'Data Berhasil disimpan!');
        return redirect('laundry/aktif');
    }

    public function hapus_laundry(Request $request){
        $req_id = $request->id;
        $laundry = Laundry::find($req_id);
        $laundry->delete();
        Session::flash('hapusAktifLaundry', 'Data Berhasil dihapus!');
        return redirect('laundry/aktif');
    }
    
    public function selesai_laundry(){
        return view('selesai_laundry', [
            'title' => 'Selesai Laundry',
            'subtitle' => 'Ferdi Laundry',
            'angka' => 1,
            'laundry' => Laundry::where('status', 'selesai')->get()
        ]);
    }

}
