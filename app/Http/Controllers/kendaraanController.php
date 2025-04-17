<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kendaraan::get();
        return view('kendaraan.tampilKendaraan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kendaraan = new kendaraan(); // objek kosong
        return view('kendaraan.tambahKendaraan', compact('kendaraan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Cek apakah no_mesin sudah ada di database
        if (Kendaraan::where('no_mesin', $request->no_mesin)->exists()) {
            return back()->with('error', 'Nomor Mesin sudah ada! Masukkan yang lain.');
        }

        // Cek apakah no_rangka sudah ada di database
        if (Kendaraan::where('no_rangka', $request->no_rangka)->exists()) {
            return back()->with('error', 'Nomor Rangka sudah ada! Masukkan yang lain.');
        }
        $data = new Kendaraan();
        $data->no_pol = $request->no_pol;
        $data->tahun_kendaraan = $request->tahun_kendaraan;
        $data->no_mesin = $request->no_mesin;
        $data->no_rangka = $request->no_rangka;
        $data->kapasitas_mesin = $request->kapasitas;
        $data->transmisi = $request->transmisi;
        $data->id_jenis_kendaraan = $request->id_jenis_kendaraan;
        $data->id_pemilik = $request->id_pemilik;
        $data->save();
        return redirect('kendaraan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Kendaraan::where('id_kendaraan', '=', $id)->first();

        if (!$data) { // Kalo datanya kosong
            return redirect('kendaraan')->with('error', 'Data kendaraan gak ketemu!');
        }

        return view('kendaraan.updateKendaraan', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Kendaraan::find($id);

        if (!$data) {
            return redirect('kendaraan')->back()->with('error','Data tidak ditemukan');
        }
        $data->update([
            'no_pol' => $request->no_pol,
            'tahun_kendaraan' => $request->tahun_kendaraan,
            'no_mesin' => $request->no_mesin,
            'no_rangka' => $request->no_rangka,
            'kapasitas_mesin' => $request->kapasitas_mesin,
            'transmisi' => $request->transmisi,
            'id_jenis_kendaraan' => $request->id_jenis_kendaraan,
            'id_pemilik' => $request->id_pemilik,
        ]);
        return redirect()->route('kendaraan.index')->with('success', 'Data kendaraan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Kendaraan::find($id);

        if (!$data) {
            return redirect('kendaraan')->with('error', 'Data tidak ditemukan!');
        }

        $data->delete();

        return redirect('kendaraan')->with('success', 'Data kendaraan berhasil dihapus');
    }

}
