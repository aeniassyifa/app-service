<?php

namespace App\Http\Controllers;

use App\Models\Pemilik;
use Illuminate\Http\Request;

class PemilikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = pemilik::get();
        //dd($data);
        return view('pemilik.tampilPemilik', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pemilik.tambahPemilik');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Pemilik();
        $data->nm_pemilik = $request->nm_pemilik;
        $data->alamat = $request->alamat;
        $data->nik = $request->nik;
        $data->no_hp = $request->no_hp;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->save();

        return redirect('pemilik');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Pemilik::where('id_pemilik', '=', $id)->get();
        return view('pemilik.updatePemilik', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Pemilik::where('id_pemilik', '=', $id);
        $data->update([
            'nm_pemilik' => $request->nm_pemilik,
            'alamat' => $request->alamat,
            'nik' => $request->nik,
            'no_hp' => $request->no_hp,
        ]);

        return redirect('pemilik');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Pemilik::where('id_pemilik', '=', $id);
        $data->delete();

        return redirect('pemilik');
    }
}
