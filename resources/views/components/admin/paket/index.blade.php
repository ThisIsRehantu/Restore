@extends('main-admin')



@section('content')
    <!-- start page title -->

    <div class="row">

        <div class="col-12">

            <div class="page-title-box">

                <h4 class="page-title">Setelan Paket</h4>

                <div class="page-title-right">

                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item active">/paket</li>

                    </ol>

                </div>

            </div>

        </div>

    </div>

    @if (session('success'))
        <div class="alert alert-success">

            {{ session('success') }}

        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">

            {{ session('error') }}

        </div>
    @endif

    <div class="row row-cols-1">
        <div class="col">
            <div class="card">

                <div class="card-body">

                    <h4 class="mb-3 header-title mt-0">Buat Nama Paket</h4>

                    <form action="{{ route('paket.store') }}" method="POST">

                        @csrf
                        <div class="mb-3 row">

                            <label class="col-lg-2 col-form-label">Nama</label>

                            <div class="col-lg-10">
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    name="nama" placeholder="Masukkan Nama Paket" value="{{ old('nama') }}">
                                @error('nama')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror

                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>

                </div>

            </div>
        </div>
        <div class="col">
            <div class="card">

                <div class="card-body">

                    <h4 class="mb-3 header-title mt-0">Tambah Layanan Paket</h4>

                    <form action="{{ route('paket-layanan.store') }}" method="POST">

                        @csrf



                        <div class="mb-3 row">

                            <label class="col-lg-2 col-form-label" for="example-fileinput">Paket</label>

                            <div class="col-lg-10">

                                <select class="form-control @error('paket_id') is-invalid @enderror" name="paket_id">
                                    <option value="" selected disabled>--Pilih Paket--</option>
                                    @foreach ($pakets as $paket)
                                        <option value="{{ $paket->id }}"
                                            {{ old('paket_id') == $paket->id ? 'selected' : '' }}>
                                            {{ $paket->nama }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('paket_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </select>

                                @error('nama')
                                    <div class="text-danger">

                                        {{ $message }}

                                    </div>
                                @enderror

                            </div>

                        </div>



                        <div class="mb-3 row">

                            <label class="col-lg-2 col-form-label">Kategori</label>

                            <div class="col-lg-10">

                                <select class="form-select" onchange="get_layanan(this.value)">
                                    <option value="" disabled selected>--Pilih Kategori--</option>
                                    @foreach ($kategoris as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>

                            </div>

                        </div>
                        <div class="mb-3 row">

                            <label class="col-lg-2 col-form-label">Layanan</label>

                            <div class="col-lg-10">

                                <select class="form-select @error('layanan_id') is-invalid @enderror" name="layanan_id[]"
                                    id="layanan" size="10" multiple>
                                <option value="" selected disabled>Pilih Kategori Terlebih Dahulu</option>
                                </select>
                                <small>Jika buka web admin di pc silahkan tekan <strong>CTRL</strong> dan klik 1 per 1 layanan/produknya</small>
                                @error('layanan_id')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-lg-12">

            <div class="card">

                <div class="card-body">

                    <h4 class="header-title mt-0 mb-1">Semua Paket</h4>

                    <div class="table-responsive">

                        <table class="table m-0">

                            <thead>

                                <tr>

                                    <th style="width:50px">#</th>

                                    <th>Paket</th>

                                    <th>Layanan</th>

                                    <th style="width: 200px">Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pakets as $paket)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $paket->nama }}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#kategoriModal{{ $paket->id }}">{{ $paket->layanan->count() }} Layanan</button>
                                        </td>
                                        <td class="d-flex gap-2">
                                            <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#editModal{{ $paket->id }}">Edit</a>
                                            <form action="{{ route('paket.destroy', $paket->id) }}" method="POST"
                                                id="deleteForm{{ $paket->id }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-danger"
                                                    onclick="confirmDelete({{ $paket->id }})">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>

                        </table>

                    </div>

                </div>

                <div class="d-flex justify-content-center">
                    {{ $pakets->links('vendor.pagination.simple-tailwind') }}
                </div>

            </div>



        </div>

    </div>

    @foreach ($pakets as $paket)
        <div class="modal fade" id="editModal{{ $paket->id }}" tabindex="-1"
            aria-labelledby="editModalLabel{{ $paket->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel{{ $paket->id }}">Edit
                            Paket</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Form Edit -->
                        <form action="{{ route('paket.update', $paket->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="editNama{{ $paket->id }}" class="form-label">Nama Paket</label>
                                <input type="text" class="form-control" id="editNama{{ $paket->id }}"
                                    name="nama" value="{{ $paket->nama }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="kategoriModal{{ $paket->id }}" tabindex="-1"
            aria-labelledby="kategoriModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="kategoriModalLabel">{{ $paket->nama }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Kategori</th>
                                    <th>Layanan Diamond</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($paket->layanan->groupBy('kategori_id') as $k => $l)
                                    <tr>
                                    <td class="border-end">{{ $l->first()->kategori->nama }}</td>
                                    <td class="border-end">
                                        <ul>
                                            @foreach ($l as $item)
                                            <li class="d-flex justify-content-between">
                                                <span>{{ $item->layanan }}</span>
                                                <form action="{{ route('paket-layanan.destroy',$item->id) }}" method="post" id="mitsuki{{ $item->id }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="#" onclick="$('#mitsuki{{ $item->id }}').submit()">Hapus</a>
                                                </form>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <script type="text/javascript">
        $(document).ready(function() {

            $('.table').DataTable({

                "paging": false,

                "info": false

            });

        });

        function get_layanan(kategori_id) {
            let layanan = $('#layanan')
            $.ajax({
                url: "{{ route('paket-layanan.get-layanan') }}",
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                data: {
                    kategori_id: kategori_id
                },
                beforeSend: function() {
                    layanan.html('<option value="">Mengambil Layanan...</option>');
                },
                success: function(response) {
                    var data = response.data;
                    layanan.empty();
                    $.each(data, function(index, item) {
                        layanan.append('<option value="' + item.id + '">' + item.layanan +
                            '</option>');
                    });
                },
                error: function(response) {
                    let res = JSON.parse(response.responseText)
                    layanan.html('<option value="">' + res.message + '</option>');
                }
            });
        }

        function confirmDelete(id) {
            if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                document.getElementById('deleteForm' + id).submit();
            }
        }
    </script>
@endsection
