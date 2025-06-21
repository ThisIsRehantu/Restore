@extends("main")

@section("content")
@include('../navbar') 
<div class="wrapper pt-5"
<br>
    <br>
    <br>
      <div class="container">
    <div class="main-content">
        <section class="section">
            <h2 class="section-title">TOP 10 RANK</h2>

            <div class="section-body">
                <div class="row">

                    <div class="col-12">
                        
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card bg-dark shadow cekstore-rounded-sedang ">
                                            <div class="card-header cekstore-rounded-sedang  bg-cekstore">
                                                <h4 class="card-title text-white mt-2"><i class="fas fa-trophy"> </i> Top 10 Pesanan Bulan Ini</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-dark table-bordered table-responsive">
                                                <tr>
                                                    <th>Peringkat</th>
                                                    <th>Nama</th>
                                                    <th>Total</th>
                                                </tr>
                                                @foreach ($totalOrders as $key => $totalOrder)
                                                    @if ($key < 1)
                                                        @continue
                                                    @endif
                                                    <tr>
                                                        <td>{{ $loop->iteration - 1 }}</td>
                                                        <td>{{ $totalOrder->username }}</td>
                                                        <td>{{ $totalOrder->total_order }} Pesanan</td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="card bg-dark shadow cekstore-rounded-sedang">
                                        <div class="card-header cekstore-rounded-sedang  bg-cekstore">
                                                <h4 class="card-title text-white mt-2"><i class="fas fa-trophy"> </i> Top 10 Layanan Bulan Ini</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-dark  table-bordered table-responsive">
                                                        <tr>
                                                            <th>Peringkat</th>
                                                            <th>Nama</th>
                                                            <th>Total</th>
                                                        </tr>
                                                        @foreach ($toplayanans as $key => $toplayanan)
                                                        <tr>
                                                            <Td>{{ $loop->iteration }}</Td>
                                                            <Td>{{ $toplayanan->layanan }}</Td>
                                                            <Td>{{ $toplayanan->top_layanan }} Pesanan</Td>
                                                        </tr>
                                                        @endforeach
                                                    
                                                    </table>
                                                </div>
                                            
                                        </div>
                                    </div>

                                </div>

                            </div>


                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </div>
    </section>
    </div>
@include('../footer')
@endsection