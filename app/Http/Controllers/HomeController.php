<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\Laundry;
use Illuminate\Support\Facades\Session;


class HomeController extends Controller
{
    public function index (){

        $laundry = null;

        if (request('search')) {
            // dd(request('search'));
            $redirect = request('search');
            // $laundry = Laundry::find(request('search'));
            // Session::flash('id_search', $laundry);
            return redirect('/' . $redirect);
        }

        return view('home', [
            "title" => "Home",
            'subtitle' => 'Ferdi Laundry',
            'laundry' => $laundry,
        ]);
    }

    public function laundry(Request $request) {
        $req_id = $request->id;

        return view('laundry', [
            'title' => 'Home',
            'subtitle' => 'Ferdi Laundry',
            'laundry' => Laundry::find($req_id),
        ]);
    }

    // public function search() {

    // }
}
