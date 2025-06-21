<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function create()
    {
        return view('components.admin.kategori', ['data' => Kategori::orderBy('nama', 'asc')->get()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'thumbnail' => 'required|file|mimes:jpg,png,webp',
            'bannerlayanan' => 'file|mimes:jpg,png,webp',
            'petunjuk' => 'file|mimes:jpg,png',
            'nama' => 'required', 
            'sub_nama' => 'required',
            'brand' => 'required',
            'ket_layanan' => '',
            'kode' => 'required|unique:kategoris,kode',
            'serverOption' => 'required',
            'tipe' => 'required'
        ]);

        $file = $request->file('thumbnail');
        $folder = 'assets/thumbnail';
        $file->move($folder, $file->getClientOriginalName());   
        
        $bannerlayanan = $request->file('bannerlayanan');
        $folderBannerlyn = 'assets/bannerlayanan';
        $bannerlayanan->move($folderBannerlyn, $bannerlayanan->getClientOriginalName());
        
        
        $petunjuk = $request->file('petunjuk');
        $folderPetunjuk = 'assets/petunjuk';
        $petunjuk->move($folderPetunjuk, $petunjuk->getClientOriginalName());    
        
        $kategori = new Kategori();
        $kategori->nama = $request->nama;
        $kategori->sub_nama = $request->sub_nama;
        $kategori->kode = $request->kode;
        $kategori->brand = $request->brand;
        $kategori->ket_layanan = $request->ket_layanan;
        $kategori->server_id = $request->serverOption == 'ya' ? 1 : 0;
        $kategori->tipe = $request->tipe;
        $kategori->thumbnail = "/".$folder."/".$file->getClientOriginalName();
        $kategori->petunjuk = "/".$folderPetunjuk."/".$petunjuk->getClientOriginalName();
        $kategori->bannerlayanan = "/".$folderBannerlyn."/".$bannerlayanan->getClientOriginalName();
        $kategori->save();

        return back()->with('success', 'Berhasil menambahkan kategori');
    }

    public function delete($id)
    {
        try{
            $data = Kategori::where('id', $id)->select('thumbnail')->first();
            unlink(public_path($data->thumbnail));
            unlink(public_path($data->bannerlayanan));
            unlink(public_path($data->petunjuk));
            Kategori::where('id', $id)->delete();
            return back()->with('success', 'Berhasil hapus!');
        }catch(\Exception $e){
            Kategori::where('id', $id)->delete();
            return back()->with('success', 'Berhasil hapus!');
        }
    }

    public function update($id, $status)
    {
        $data = Kategori::where('id', $id)->update([
            'status' => $status
        ]);

        return back()->with('success', 'Berhasil update!');
    }

public function detail($id)
    {
        $data = Kategori::where('id', $id)->first();
        if($data->server_id == 1) {
            $text = "2. Target ( User ID / Server ID )";
        } else {
            $text = "1. Target ( User ID )";
        }
        $send = "
                <form action='".route("kategori.detail.update", [$id])."' method='POST' enctype='multipart/form-data'>
                    <input type='hidden' name='_token' value='".csrf_token()."'>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Nama</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->nama. "' name='kategori'>
                        </div>
                    </div>    
                    
                <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Sub Nama</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='" . $data->sub_nama . "' name='sub_nama'>
                        </div>
                    </div> 
                         <div class='mb-3 row'>
                <label class='col-lg-2 col-form-label'>Tipe</label>
                <div class='col-lg-10'>
                    <select class='form-select' name='tipe'>
                        <option value='$data->tipe'>".ucwords($data->tipe)." (Selected)</option>
                        <option value='populer'>Populer</option>
                        <option value='game'>Game Mobile</option>
                        <option value='joki'>JOki MLBB</option>
                        <option value='pulsa'>Pulsa</option>
                        <option value='e-money'>E-Money</option>
                        <option value='voucher'>Voucher</option>
                        <option value='app'>Aplikasi Premium</option>
                    </select>
                </div>
            </div>    
           
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Kode</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='" . $data->kode . "' name='kode'>
                        </div>
                    </div>  
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Brand</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='" . $data->brand . "' name='brand'>
                        </div>
                    </div> 
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Ket Layanan</label>
                        <div class='col-lg-10'>
                            <textarea class='form-control' name='ket_layanan'>". $data->ket_layanan."</textarea>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Thumbnail</label>
                        <div class='col-lg-10'>
                            <input type='file' class='form-control' value='" . $data->thumbnail . "' name='thumbnail'>
                        </div>
                    </div>    
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Banner Layanan</label>
                        <div class='col-lg-10'>
                            <input type='file' class='form-control' value='" . $data->bannerlayanan . "' name='bannerlayanan'>
                        </div>
                    </div> 
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Petunjuk</label>
                        <div class='col-lg-10'>
                            <input type='file' class='form-control' value='" . $data->petunjuk . "' name='petunjuk'>
                        </div>
                    </div>                        
                         <div class='mb-3 row'>
                <label class='col-lg-2 col-form-label'>Sistem Target</label>
                <div class='col-lg-10'>
                    <select class='form-select' id='customRadio1' name='serverOption'>
                        <option value='$data->server_id'>".ucwords($text)." (Selected)</option>
                        <option value='tidak'>1. Target ( User ID )</option>
                        <option value='ya'>2. Target ( User ID / Server ID )</option>
                    </select>
                </div>
            </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Status</label>
                        <div class='col-lg-10'>
                            <select class='form-control' name='status'>
                                <option value='active'>Active</option>
                                <option value='unactive'>Unactive</option>
                            </select>
                        </div>
                    </div>                    
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Close</button>
                        <button type='submit' class='btn btn-primary'>Simpan</button>
                    </div>
                </form>
        ";

        return $send;        
    }  
    
    public function patch(Request $request, $id)
    {
        if($request->file('thumbnail')){
            $file = $request->file('thumbnail');
            $folder = 'assets/thumbnail';
            $file->move($folder, $file->getClientOriginalName());      
            Kategori::where('id', $id)->update([
                'thumbnail' => "/".$folder."/".$file->getClientOriginalName()
            ]);
        }
        
        if($request->file('bannerlayanan')){
            $file = $request->file('bannerlayanan');
            $folder = 'assets/bannerlayanan';
            $file->move($folder, $file->getClientOriginalName());      
            Kategori::where('id', $id)->update([
                'bannerlayanan' => "/".$folder."/".$file->getClientOriginalName()
            ]);
        }
        
        if($request->file('petunjuk')){
            $file = $request->file('petunjuk');
            $folder = 'assets/petunjuk';
            $file->move($folder, $file->getClientOriginalName());      
            Kategori::where('id', $id)->update([
                'petunjuk' => "/".$folder."/".$file->getClientOriginalName()
            ]);
        }
        $pembayaran = Kategori::where('id', $id)->update([
            'nama' => $request->kategori,
            'sub_nama' => $request->sub_nama,
            'kode' => $request->kode, 
            'brand' => $request->brand,
            'ket_layanan' => $request->ket_layanan,
            'tipe' => $request->tipe,
            'status' => $request->status,
            'server_id' => $request->serverOption == 'ya' ? 1 : 0,
        ]);
           
        return back()->with('success', 'Berhasil update kategori');        
    }        
}
