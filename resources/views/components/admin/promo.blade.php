@extends('main-admin')

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Flashsale</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">Admin/Flashsale</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<div class="card">
    <div class="card-body">
        <h4 class="mb-3 header-title mt-0">Tambah Flashsale</h4>
        <form action="{{ route('promo.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 row">
                <label class="col-lg-2 col-form-label" for="example-fileinput">Nama Flashsale</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" name="nama">
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-lg-2 col-form-label" for="example-fileinput">Url</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control @error('url') is-invalid @enderror" value="{{ old('url') }}" name="url">
                    @error('url')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-lg-2 col-form-label" for="example-fileinput">Harga Normal</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control @error('harga_normal') is-invalid @enderror" value="{{ old('harga_normal') }}" name="harga_normal">
                    @error('harga_normal')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-lg-2 col-form-label" for="example-fileinput">Harga Flashsale</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control @error('harga_promo') is-invalid @enderror" value="{{ old('harga_promo') }}" name="harga_promo">
                    @error('harga_promo')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-lg-2 col-form-label" for="example-fileinput">Thumbnail</label>
                <div class="col-lg-10">
                    <input type="file" class="form-control" name="thumbnail">
                    @error('thumbnail')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Semua Flashsale</h4>
                <div class="table-responsive">
                    <table class="table m-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Url</th>
                                <th>Harga Normal</th>
                                <th>Harga Flashsale</th>
                                <th>Thumbnail</th>
                                <th>Aksi</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1;?>
                            @foreach( $data as $datas )
                            @php
                            $label_pesanan = '';
                            if($datas->status == "active"){
                            $label_pesanan = 'info';
                            }else if($datas->status == "unactive"){
                            $label_pesanan = 'warning';
                            }
                            
                            @endphp
                            
                            <tr>
                                <th scope="row">{{ $no }}</th>
                                <td>{{ $datas->nama }}</td>
                                <td>{{ $datas->url }}</td>
                                <td>{{ $datas->harga_normal }}</td>
                                <td>{{ $datas->harga_promo }}</td>
                                <td>{{ $datas->thumbnail }}</td>
                                <td>
                                    <a href="javascript:;" onclick="modal('{{ $datas->nama }}', '{{ route('promo.detail', [$datas->id]) }}')" class="btn-sm btn-info mb-3">Edit</a>
                                    <br>
                                     <br>
                                    <a class="btn-sm btn-danger mt-2" href="/promo/hapus/{{ $datas->id }}">Hapus</a>
                                </td>
                                <td>{{ $datas->created_at }}</td>
                            </tr>
                            <?php $no++ ;?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
               
        </div>

    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('.table').DataTable({
        });
    });
    
    function modal(name, link) {
        var myModal = new bootstrap.Modal($('#modal-detail'))
        $.ajax({
            type: "GET",
            url: link,
            beforeSend: function() {
                $('#modal-detail-title').html(name);
                $('#modal-detail-body').html('Loading...');
            },
            success: function(result) {
                $('#modal-detail-title').html(name);
                $('#modal-detail-body').html(result);
            },
            error: function() {
                $('#modal-detail-title').html(name);
                $('#modal-detail-body').html('There is an error...');
            }
        });
        myModal.show();
    }
</script>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="modal-detail" style="border-radius:7%">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-detail-title"></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modal-detail-body"></div>
        </div>
    </div>
</div>

@endsection