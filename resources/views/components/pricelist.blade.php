@extends("main")

@section("content")

@include('../navbar') 

<style>
    .select-games {
    width: 100%;
    max-width: none;
    margin-bottom: 64px;
}

.select-games {
    max-width: 320px;
    margin-bottom: -20px;
    position: relative;
    z-index: 1;
}
</style>
<div class="wrapper pt-4">
    <div class="container mb-5">
        <div class="row mt-1">
            <div class="col-12">
                <div class="card bg-dark shadow ">
                    <div class="card-header">
                        <!--<div class="select-games">
                        <select class="form-select" name="kategori">
                        @foreach($kategoris as $kategori)
                        <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                        @endforeach
                        </select>
                        </div> -->
                        <h5 class="card-title text-white mt-2">Daftar Harga</h5>
                    </div>
                    <div class="card-body">
                      
                        <div class="table-responsive">
                            <table class="table table-striped table-dark table-bordered table-hover"  style="font-size: 12px !important; margin-top: 0px; text-align: left">
                                <thead>
                                    <tr>
                                        <th>&nbsp&nbsp&nbsp&nbsp Game</th>
                                        <th>&nbsp&nbsp&nbsp&nbsp Item</th>
                                        <th>&nbsp&nbsp&nbsp&nbsp Guest</th>
                                        <th>&nbsp&nbsp&nbsp&nbsp Platinum</th>
                                        <th>&nbsp&nbsp&nbsp&nbsp Gold</th>
                                        <th>&nbsp&nbsp&nbsp&nbsp Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($datas as $data)
                                        @php
                                            if($data->status == "available"){
                                                $label_pesanan = "success";
                                            }else{
                                                $label_pesanan = "danger";
                                            }
                                        @endphp
                                        <tr>
                                            <th value="{{ $kategori->id }}" scope="row">{{ $data->nama_kategori }}</th>
                                            <td>{{ $data->layanan }}</td>
                                            <td>Rp. {{ number_format($data->harga,0,',','.') }}</td>
                                            <td>Rp. {{ number_format($data->harga_platinum,0,',','.') }}</td>
                                            <td>Rp. {{ number_format($data->harga_gold,0,',','.') }}</td>
                                            <td>
                                                <span class="badge bg-{{ $label_pesanan }}">{{ $data->status }}</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('.table').DataTable();
    });
</script>

@include('../footer')
@endsection