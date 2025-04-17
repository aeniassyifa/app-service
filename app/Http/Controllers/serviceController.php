<?php

namespace App\Http\Controllers;

use App\Models\jnsService;
use App\Models\kendaraan;
use App\Models\mekanik;
use App\Models\service;
use Illuminate\Http\Request;

class serviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = service::with(['jns_service', 'kendaraan', 'mekanik'])->get();
        return view('service.tampilService', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() 
    {
        $kendaraan = kendaraan::all(); // Ambil data kendaraan
        $mekanik = mekanik::all(); // Ambil data mekanik
        $jnsService = jnsService::all(); // Ambil data jenis service
        return view('service.tambahService', compact('kendaraan', 'mekanik', 'jnsService'));
    }
    
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_kendaraan' => 'required|exists:kendaraan,id_kendaraan',
            'id_jns_service' => 'required|exists:jns_service,id_jns_service',
            'keluhan' => 'required|string',
            'tgl_masuk' => 'required|date',
            'tgl_keluar' => 'nullable|date',
        ]);

        $data = new service();
        $data->id_kendaraan = $request->id_kendaraan;
        $data->id_jns_service = $request->id_jns_service;
        $data->keluhan = $request->keluhan;
        $data->tgl_masuk = $request->tgl_masuk;
        $data->tgl_keluar = $request->tgl_keluar;
        $data->save();

        return redirect('service');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = service::find($id);
        $mekanik = mekanik::all();
        $jenis_service = jnsService::all();
        $kendaraan = Kendaraan::all(); // Ambil daftar kendaraan

        if (!$data) {
            return redirect()->route('service.index')->with('error', 'Data tidak ditemukan.');
        }

        return view('service.updateService', compact('data', 'mekanik', 'jenis_service', 'kendaraan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'keluhan' => 'required|string',
            'tgl_masuk' => 'required|date',
            'tgl_keluar' => 'nullable|date',
            'id_mekanik' => 'required|exists:mekanik,id_mekanik',
            'id_jns_service' => 'required|exists:jns_service,id_jns_service',
            'id_kendaraan' => 'required|exists:kendaraan,id_kendaraan',
        ]);

        Service::where('id_service', $id)->update([
            'keluhan' => $request->keluhan,
            'tgl_masuk' => $request->tgl_masuk,
            'tgl_keluar' => $request->tgl_keluar,
            'id_jns_service' => $request->id_jns_service,
            'id_kendaraan' => $request->id_kendaraan,
        ]);

        return redirect()->route('service.index')->with('success', 'Service berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = service::find($id);
        
        if (!$data) {
            return redirect()->route('service.index')->with('error', 'Data tidak ditemukan.');
        }

        $data->delete();
        return redirect()->route('service.index')->with('success', 'Data berhasil dihapus.');
    }

}
