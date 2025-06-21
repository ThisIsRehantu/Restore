@extends("main")

@section("content")

@include('../navbar')

<style>
.css-16pvxfk {
    background: linear-gradient(270deg, rgb(211 211 211) -1.95%, rgb(110 7 7) 50.95%) !important;
}

  .css-6qw8qz {
    border: 1px solid rgba(203, 203, 203, 0.5);
    background: linear-gradient(163.42deg, rgb(90 90 90) -107%, rgba(255, 255, 255, 0) 105.46%);
}

  .css-6qw8qzz {
    border: 1px solid rgba(203, 203, 203, 0.5);
    background-color:#282828;
}




.css-138rpjn {
    background: linear-gradient(500deg, rgb(210 4 1) 0%, rgba(112, 127, 235, 0) 100%);
    color:white;
}

.css-138rpjnn:hover {
    background: linear-gradient(500deg, rgb(210 4 1) 0%, rgba(112, 127, 235, 0) 100%);
    color:white;
}
.font-medium {
    font-weight: 500;
}
.text-sm {
    font-size: .875rem;
    line-height: 1.25rem;
}
.py-2 {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
}
.px-3 {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
}
.rounded-3xl {
    border-radius: 1.5rem;
}
.gap-3 {
    gap: 0.75rem;
}
.items-center {
    align-items: center;
}
.flex {
    display: flex;
}
a {
    color: inherit;
    text-decoration: inherit;
}

</style>
<main class="min-h-[50vh]">
    <div class="mx-auto max-w-7xl pb-24 grid grid-cols-12 gap-6 lg:gap-x-16 lg:py-8 lg:px-12 mb-10 md:px-4 px-4">
        <div class="hidden md:block lg:block xl:block col-span-1 lg:col-span-3">
            <aside class="py-6 lg:col-span-3 lg:p-0 sticky top-20">
                <nav class="h-full content-start lg:grid lg:content-between">
                    <div class="space-y-4">
                        <a class="group flex gap-3 items-center rounded-3xl px-3 py-2 text-sm font-medium css-138rpjn css-138rpjnn" aria-current="page" href="/user/dashboard">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"></path>
                            </svg>
                            <span class="truncate hidden lg:block xl:block">Akun</span>
                        </a>
                        <a class="group flex gap-3 items-center rounded-3xl px-3 py-2 text-sm font-medium css-138rpjnn" aria-current="page" href="/deposit">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M20 2H4c-1.11 0-2 .89-2 2v11c0 1.11.89 2 2 2h4v5l4-2 4 2v-5h4c1.11 0 2-.89 2-2V4c0-1.11-.89-2-2-2zm0 13H4v-2h16v2zm0-5H4V4h16v6z"></path>
                            </svg>
                            <span class="truncate hidden lg:block xl:block">Deposit</span>
                        </a>
                        
                    </div>
                    <div class="cursor-pointer content-end">
                    </div>
                </nav>
            </aside>
        </div>
        <div class="col-span-12 md:col-span-11 lg:col-span-9 mt-6 sm:mt-6 lg:mt-0 md:mt-6">
            <div class="flex flex-col gap-6">
                <div class="grid grid-cols-12 gap-6">
                    <div class="p-6 col-span-12 md:col-span-6 lg:col-span-8 xl:col-span-8 rounded-2xl css-6qw8qz">
                        <div class="flex justify-between items-center col-span-12 gap-4">
                            <div class="flex items-center gap-4">
                                <div class="relative h-12 w-12">
                                    <img
                                        alt="patih"
                                        sizes="100vw"
                                        srcset="/assets/logo/logo-user.png"
                                        src=""
                                        decoding="async"
                                        data-nimg="fill"
                                        class="rounded-full ring-1 ring-white"
                                        loading="lazy"
                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"
                                    />
                                </div>
                                <div class="flex flex-col gap-1">
                                    <h3 class="font-bold text-sm lg:text-lg text-white">Selamat Datang {{Auth()->user()->name}}</h3>
                                    <p class="text-white/70 text-[12px] lg:text-[14px] flex items-center gap-3">
                                        {{Str::upper(Auth()->user()->role)}}
                                        <span>
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                <path fill="none" d="M0 0h24v24H0z"></path>
                                                <path d="M20 2H4c-1.11 0-2 .89-2 2v11c0 1.11.89 2 2 2h4v5l4-2 4 2v-5h4c1.11 0 2-.89 2-2V4c0-1.11-.89-2-2-2zm0 13H4v-2h16v2zm0-5H4V4h16v6z"></path>
                                            </svg>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <hr class="my-6 border-white/30" />
                        <div class="flex justify-between items-center gap-3">
                           <div class="info-user" style="font-size: 12.5px">
                            <table>
                                <tr>
                                    <td style="font-weight: bold; ">Nama</td><td>:</td><td>{{Auth()->user()->name}}</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; ">Username</td><td>:</td><td>{{Auth()->user()->username}}</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; ">Total Order</td><td>:</td><td>
                                        <span class="badge bg-success">{{count($data)}}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; ">Total Outcome</td><td>:</td><td>
                                        <span class="badge bg-success">Rp {{ number_format(Auth::user()->balance, 0, ',', '.') }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; ">Account Type</td><td>:</td><td>
                                        <span class="badge bg-primary">{{Str::upper(Auth()->user()->role)}}</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        </div>
                        <div class="flex flex-row-reverse justify-end lg:flex-row md:flex-row gap-3 mt-3">
                         <a class="group flex items-center rounded-3xl px-3 py-2 text-sm font-medium btn-primary css-138rpjnn" aria-current="page" href="{{url('/user/edit/profile')}}">
                           <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                        <circle cx="10" cy="8" r="4"></circle>
                                        <path
                                            d="M10.67 13.02c-.22-.01-.44-.02-.67-.02-2.42 0-4.68.67-6.61 1.82-.88.52-1.39 1.5-1.39 2.53V20h9.26a6.963 6.963 0 01-.59-6.98zM20.75 16c0-.22-.03-.42-.06-.63l1.14-1.01-1-1.73-1.45.49c-.32-.27-.68-.48-1.08-.63L18 11h-2l-.3 1.49c-.4.15-.76.36-1.08.63l-1.45-.49-1 1.73 1.14 1.01c-.03.21-.06.41-.06.63s.03.42.06.63l-1.14 1.01 1 1.73 1.45-.49c.32.27.68.48 1.08.63L16 21h2l.3-1.49c.4-.15.76-.36 1.08-.63l1.45.49 1-1.73-1.14-1.01c.03-.21.06-.41.06-.63zM17 18c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"
                                        ></path>
                                    </svg>
                            <span class="truncate mt-1">Edit Profile</span>
                        </a>
                    </div>
                    </div>
                    
                    <div class="col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-4 flex justify-center rounded-2xl css-6qw8qz">
                        <div class="membership-banner flex">
                            <div class="p-6 flex flex-col justify-between items-center gap-6">
                                <p class="leading-normal">Dapatkan harga lebih murah dengan Upgrade Membership!</p>
                                <div class="relative w-full flex items-center justify-center">
                                    <button type="button" class="flex btn-primary gap-2 px-5 py-2 rounded-full btn-primary items-center font-medium justify-center items-center z-20 w-full css-eqxk5j">
                                        <span class="text-[12px]">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path fill="none" d="M0 0h24v24H0z"></path>
                                                <path d="M20 2H4c-1.11 0-2 .89-2 2v11c0 1.11.89 2 2 2h4v5l4-2 4 2v-5h4c1.11 0 2-.89 2-2V4c0-1.11-.89-2-2-2zm0 13H4v-2h16v2zm0-5H4V4h16v6z"></path>
                                            </svg>
                                        </span>
                                        <span class="undefined lg:text-[12px] text-[12px]">Upgrade Sekarang</span>
                                    </button>
                                    <div class="absolute top-0 bottom-0 left-0 right-0 z-10 px-20 lg:px-11 md:px-14 py-1">
                                        <div class="relative w-full h-full"><div class="absolute animate-ping rounded-full w-full h-full css-1h67hu5"></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-6">
                    <div class="p-6 col-span-12 md:col-span-6 lg:col-span-8 flex flex-col lg:flex-row lg:items-center justify-between gap-5 rounded-2xl css-6qw8qz">
                        <div>
                            <p class="text-md font-medium mb-4">Saldo {{ config('app.name') }} </p>
                            <h3 class="text-[24px] lg:text-[26px] font-bold css-m6e15a">Rp {{ number_format(Auth::user()->balance, 0, ',', '.') }},-</h3>
                        </div>
                        <div class="flex flex-row-reverse justify-end lg:flex-row md:flex-row gap-3">
                            <a class="group flex gap-3 items-center rounded-3xl px-3 py-2 text-sm font-medium btn-primary css-138rpjnn" aria-current="page" href="/deposit">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M20 2H4c-1.11 0-2 .89-2 2v11c0 1.11.89 2 2 2h4v5l4-2 4 2v-5h4c1.11 0 2-.89 2-2V4c0-1.11-.89-2-2-2zm0 13H4v-2h16v2zm0-5H4V4h16v6z"></path>
                            </svg>
                            <span class="truncate">Deposit</span>
                        </a>
                        </div>
                    </div>
                </div>
                <h3 class="mt-4 text-xl font-medium">Pesanan Saya</h3>
                <div class="p-3 border-none rounded-2xl css-6qw8qz">
                  <h4 class="mb-4">History</h4>
                        <div class="table-responsive">
                             <table class="table m-o table-bordered text-white">
                                <thead>
                                    <tr>
                                        <th>Invoice</th>
                                        <th>Layanan</th>
                                        <th>Target</th>
                                        <th>Harga</th>
                                        <th>Status</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($data as $pesanan)
                                    @php
                                    $zone = $pesanan->zone != null ? "-".$pesanan->zone : "";
                                    $label_pesanan = '';
                                    if($pesanan->status == "Pending" || $pesanan->status == "Menunggu Pembayaran" || $pesanan->status == "Waiting"){
                                    $label_pesanan = 'warning';
                                    }else if($pesanan->status == "Processing"){
                                    $label_pesanan = 'info';
                                    }else if($pesanan->status == "Success"){
                                    $label_pesanan = 'success';
                                    }else{
                                    $label_pesanan = 'danger';
                                    }
                                    @endphp
                                    <tr>
                                        <th scope="row">{{ $pesanan->order_id }}</th>
                                        <td>
                                            {{ $pesanan->layanan }}<br>
                                        </td>
                                        <td>{{ $pesanan->user_id.$zone }}</td>
                                        <td>Rp. {{ number_format($pesanan->harga, 0, ',', '.') }}</td>
                                        <td><span class="badge bg-{{ $label_pesanan }}">{{ $pesanan->status }}</span></td>
                                        <td><a href="javascript:;" onclick="modal('Order Details', '{{ route('riwayat.detail', [$pesanan->order_id]) }}')" class="btn btn-info"><i class="fa fa-qrcode"></i></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
</main>


<script type="text/javascript">
     $(document).ready(function(){
        $('.table').DataTable();
    });
    function modal(name, link) {
        // var myModal = new bootstrap.Modal($('#modal-detail'))
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
        $("#modal-detail").modal("show");
    }
</script>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="modal-detail" style="border-radius:7%">
    <div class="modal-dialog modal-lg">
                <div class="p-3 border-none rounded-2xl css-6qw8qzz">
        <div class="modal-content css-6qw8qzz">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-detail-title"></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modal-detail-body"></div>
        </div>
        </div>
    </div>
</div>

@include('../footer')
@endsection