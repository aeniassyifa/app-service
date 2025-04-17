<?php

namespace App\Http\Controllers;

use App\Models\jnsService;
use Illuminate\Http\Request;

class jnsServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = jnsService::all();
        // dd($data);
        return view('jnsService.tampilJnsService', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jnsService.tambahJnsService');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nm_jns_service' => 'required|string|max:255',
            'keterangan'  => 'nullable|string',
        ]);

        try {
            jnsService::create([
                'nm_jns_service' => $request->nm_jns_service,
                'keterangan'     => $request->keterangan ?? '-',
            ]);            
            return redirect()->route('/jnsservice')->with('success', 'Jenis Service berhasil ditambahkan!');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menambahkan Jenis Service: ' . $e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = jnsService::where('id_jns_service', '=', $id)->first();

        if (!$data) {
            return redirect('/jnsService')->with('error', 'Data tidak ditemukan!');
        }

        return view('jnsService.updateJnsService', compact('data', 'id'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = jnsService::where('id_jns_service', '=', $id)->first();

        if (!$data) {
            return redirect('/jnsservice')->with('error', 'Data tidak ditemukan!');
        }

        $data->nm_jns_service = $request->nm_jns_service;
        $data->save();

        return redirect('/jnsservice')->with('success', 'Data berhasil diperbarui!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $data = jnsService::findOrFail($id);
            $data->delete();
            return redirect()->route('jnsService.index')->with('success', 'Data berhasil dihapus!');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menghapus data: ' . $e->getMessage());
        }
    }
}
