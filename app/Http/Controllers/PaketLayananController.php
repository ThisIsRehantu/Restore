<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\PaketLayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;


class PaketLayananController extends Controller
{
    

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'paket_id' => 'required',
            'layanan_id' => 'required|unique:paket_layanans',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput($request->all());
        }

        try {
            $formFields = $request->validate([
                'paket_id' => 'required',
                'layanan_id' => 'required|unique:paket_layanans'
            ]);
            
            DB::beginTransaction();
            
            $services = $formFields['layanan_id'];
            foreach ($services as $service) {
               $formFields['layanan_id'] = $service;
               PaketLayanan::create($formFields);
            }
            
            DB::commit();
            return redirect()->back()->with('success', 'Paket Layanan berhasil ditambahkan');
        } catch (\Exception $e) {
            DB::rollback();
            Log::error('Terjadi kesalahan saat menyimpan data paket layanan: ' . $e->getMessage());

            return redirect()->back()->with('error', $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan data paket layanan');
        }
    }

    public function destroy($layanan_id)
    {
        try {
            DB::beginTransaction();
            // Hapus data paket layanan
            $paketLayanan = PaketLayanan::firstWhere('layanan_id',$layanan_id);
            $paketLayanan->delete();

            DB::commit();

            return redirect()->back()->with('success', 'Paket Layanan berhasil dihapus');
        } catch (\Exception $e) {
            DB::rollback();
            Log::error('Terjadi kesalahan saat menghapus data paket layanan: ' . $e->getMessage());

            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus data paket layanan');
        }
    }

    public function get_layanan(Request $request)
    {
        try {
            $layanan = Layanan::join('kategoris', 'layanans.kategori_id', 'kategoris.id')
                ->orderBy('harga', 'asc')
                ->select('layanans.*', 'kategoris.nama AS nama_kategori')
                ->where('layanans.kategori_id', $request->kategori_id)
                ->where('layanans.status', 'available');

            if ($layanan->count() == 0) {
                return response()->json([
                    'status' => false,
                    'message' => 'Layanan Tidak Ditemukan !',
                    'data' => null
                ], 404);
            }
            $layanan = $layanan->get();

            return response()->json([
                'status' => true,
                'message' => 'berhasil',
                'data' => $layanan
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => true,
                'message' => 'Terjadi Masalah !',
                'data' => null
            ], 500);
        }
    }
}
