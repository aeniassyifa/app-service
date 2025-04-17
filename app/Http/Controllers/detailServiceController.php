<?php

namespace App\Http\Controllers;

use App\Models\detailService;
use Illuminate\Http\Request;

class detailServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = \App\Models\detailService::all(); // Ambil semua data dari tabel detail_service
        return view('detailService.tampilDetailService', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //untuk menampilkan form
        return view('detailService.tambahDetailService');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all()); // Debugging, cek data yang dikirim dari form
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = detailService::where('id_detail_service', '=', $id)->get();
        return view('detailService.updateDetailService', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = detailService::where('id_detail_service', '=', $id);
        $data->update([
            'sparepart' => $request->sparepart,
            'harga' => $request->harga,
        ]);
        return redirect('detailservice');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = detailService::where('id_detail_service', '=', $id);
        $data->delete();
        return redirect('detailservice');
    }
}