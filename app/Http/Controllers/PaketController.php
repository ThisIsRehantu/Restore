<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Layanan;
use App\Models\Kategori;
use App\Models\PaketLayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['kategoris'] = Kategori::get();
        $data['pakets'] = Paket::paginate(100);
        return view('components.admin.paket.index', $data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * meltih
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'nama' => 'required|string|unique:pakets',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator->errors())->withInput($request->all());
            }

            $data = $validator->validated();

            DB::beginTransaction();

            Paket::create($data);

            DB::commit();

            return redirect()->back()->with('success', 'Data berhasil disimpan');
        } catch (\Exception $e) {
            DB::rollback();
            Log::error('Terjadi kesalahan saat menyimpan data: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan data');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function show(Paket $paket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function edit(Paket $paket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paket $paket)
    {
        try {
            $unique = '';
            if ($request->nama != $paket->nama) {
                $unique = '|unique:pakets';
            }
            $validator = Validator::make($request->all(), [
                'nama' => 'required|string' . $unique,
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('error', 'input tidak valid');
            }

            $data = $validator->validated();

            DB::beginTransaction();
            $paket->update($data);

            DB::commit();

            return redirect()->back()->with('success', 'Data berhasil diupdate');
        } catch (\Exception $e) {
            DB::rollback();
            Log::error('Terjadi kesalahan saat mengupdate data: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengupdate data');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paket $paket)
    {
        try {
            DB::beginTransaction();
            if(PaketLayanan::firstWhere('paket_id',$paket->id)){
            PaketLayanan::firstWhere('paket_id',$paket->id)->delete();
            }
            $paket->delete();
            DB::commit();
    
            return redirect()->back()->with('success', 'Data berhasil dihapus');
        } catch (\Exception $e) {
            DB::rollback();
            Log::error('Terjadi kesalahan saat menghapus data: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus data');
        }
    }
}
