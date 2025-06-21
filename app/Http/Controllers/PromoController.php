<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo;

class PromoController extends Controller
{
    public function create()
    {
        return view('components.admin.promo', ['data' => Promo::orderBy('id', 'asc')->get()]);
    }

    public function store(Request $request)
    {
        
        
        $request->validate([
            'thumbnail' => 'required|image|mimes:jpg,png,webp,jpeg',
            'nama' => 'required',
            'url' => 'required',
            'harga_normal' => 'required',
            'harga_promo' => 'required'
        ]);

        $file = $request->file('thumbnail');
        $folder = 'assets/promo';
        $file->move($folder, $file->getClientOriginalName());    
                
        $promo = new Promo();
        $promo->nama = $request->nama;
        $promo->url = $request->url;
        $promo->harga_normal = $request->harga_normal;
        $promo->harga_promo = $request->harga_promo;
        $promo->thumbnail = "/".$folder."/".$file->getClientOriginalName();
        $promo->save();

        return back()->with('success', 'Berhasil menambahkan Flashsale');
    }

    public function delete($id)
    {
        try{
            $data = Promo::where('id', $id)->select('thumbnail')->first();
            unlink(public_path($data->thumbnail));
            Promo::where('id', $id)->delete();
            return back()->with('success', 'Berhasil hapus!');
        }catch(\Exception $e){
            Promo::where('id', $id)->delete();
            return back()->with('success', 'Berhasil hapus!');
        }
    }

public function detail($id)
    {
        $data = Promo::where('id', $id)->first();
        
        $send = "
                <form action='".route("promo.detail.update", [$id])."' method='POST' enctype='multipart/form-data'>
                    <input type='hidden' name='_token' value='".csrf_token()."'>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Nama Flashsale</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->nama. "' name='nama'>
                        </div>
                    </div>    
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Url</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->url. "' name='url'>
                        </div>
                    </div>    
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Harga Normal</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='" . $data->harga_normal. "' name='harga_normal'>
                        </div>
                    </div> 
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Harga Flashsale</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='" . $data->harga_promo. "' name='harga_promo'>
                        </div>
                    </div> 
                    
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Thumbnail</label>
                        <div class='col-lg-10'>
                            <input type='file' class='form-control' value='" . $data->thumbnail. "' name='thumbnail'>
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
            $folder = 'assets/promo';
            $file->move($folder, $file->getClientOriginalName());      
            Promo::where('id', $id)->update([
                'thumbnail' => "/".$folder."/".$file->getClientOriginalName()
            ]);
        }
        
        $promo = Promo::where('id', $id)->update([
            'nama' => $request->nama,
            'url' => $request->url,
            'harga_normal' => $request->harga_normal,
            'harga_promo' => $request->harga_promo
        ]);
           
        return back()->with('success', 'Berhasil update Flashsale');        
    }        
}
