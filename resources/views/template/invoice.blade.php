@extends("main")
 
@section("content")

@include('../navbar')
<style>
 .css-scrciq {
   border: 1px solid rgba(203, 203, 203, 0.5);
    background: linear-gradient(163.42deg, rgb(90 90 90) -107%, rgba(255, 255, 255, 0) 105.46%);
 }
 
@media (min-width: 1024px)
.lg\:gap-0 {
     gp: 0;
}
@media (min-width: 1024px)
.lg\ :lex-row {
    flex-direction: row;
}
@med i (min-width: 768px)
.md\:gap-0 {
    gap: 0;
} 
@media (min-width: 768px)
.md\:flex-row {
     fex-direction: ow;
}

@med i only screen ad (min-width: 1001px)
div {
    display: block;
}      

.shadow-sm, .shadow-xl {
     b
  x-shadow: var(
    --tw-ring-offset-shadow,
     0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow);
}
    
  
.shadow-sm {
    --tw-shadow: 0 1px 2px 0 rgba(0,0,0,.05);
     -
  tw-shadow-colo
    red: 0 1px 2px 0 var(--t
    -shadow-color);
}
    
  


.font-bold {

    font-weight: 700;
}
.text-4xl {

    font-size: 2.25rem;
    line-height: 2.5rem;
} 
  

.order-1 {
    order: 1;
} 
  
  .bg-red-800	{
    background-color: rgb(153 27 27);
}

.bg-yellow-500	{
    background-color: rgb(234 179 8);
    
}

.bg-sky-600	{
    background-color: rgb(2 132 199);
    
}

.bg-red-600	{
    background-color: rgb(220 38 38);
}

#hours, #minutes, #seconds, .total {
   background: linear-gradient(to right,rgb(249, 45, 45), rgb(245, 121, 30));-webkit-background-clip: text;-webkit-text-fill-color: transparent;
} 
  
  
  @media (min-width: 1024px)
.lg\:w-80 {
    width: 20rem;
}
.pt-6 {
    padding-top: 1.5rem;
}
.h-full {
    height: 100%;
}
@media only screen and (min-width: 1001px)
div {
    display: block;
}

</style>


<div class="pt-3 md:pt-16">
<main class="my-4 min-h-[60vh]">
    <div class="mx-auto max-w-7xl px-4 pb-14 sm:px-6 lg:px-14">
        <div class="grow gap-8 pt-4 lg:flex">
             <div>
                <div class="h-full pt-3 lg:w-80">
                    <div class="text-center pb-2 flex flex-col gap-2 justify-between rounded-2xl p-6 shadow-sm css-scrciq">
                        @if($data->status_pembelian == "Pending")
                         <h3 class="text-lg font-bold">Belum Bayar</h3>
                        @elseif($data->status_pembelian == "Batal")
                         <h3 class="text-lg font-bold">Dibatalkan</h3>
                         @elseif($data->status_pembelian == "Process")
                         <h3 class="text-lg font-bold">Process</h3>
                        @elseif($data->status_pembelian == "Success")
                          <h3 class="text-lg font-bold">Pembelian Anda Berhasil</h3>
                        @endif
                        @if($data->status_pembelian == "Pending")
                        <p class="text-[0.92rem]">Selesaikan Pembayaran Sebelum Waktu Habis</p>
                        <span class="h6 rounded-md bg-red-600 px-4 py-2 text-center text-white"><b>Tanggal expired:</b><br>{{ $expired }}</span>
                        @elseif($data->status_pembelian == "Process")
                         <p class="text-[0.92rem]">Pesanan Anda Sedang Kami Proses</p>
                        @elseif($data->status_pembelian == "Batal")
                         <p class="text-[0.92rem]">Pembayaran Dibatalkan</p>
                        @elseif($data->status_pembelian == "Success")
                        <p class="text-[0.92rem]">TerimaKasih Telah Melakukan Pembelian Layanan Kami.</p>
                        <div id="rating" class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content text-dark">
                              
    <form id="myForm" action="{{ route('pembelian', ['order' => $data->id_pembelian]) }}" method="POST">
    @csrf
    <div class="modal-header">
        <h5 class="modal-title">Testimoni</h5>
    </div>
    <div class="modal-body">
        <style>
            .star-rating {
                line-height: 32px;
                font-size: 1.25em;
            }

            .star-rating .fa-star {
                color: yellow;
            }
        </style>
      <label>Nilai</label>
        <div class="row">
            <div class="col-lg-12">
                <div class="star-rating">
                    <span class="fa fa-star-o" data-rating="1"></span>
                    <span class="fa fa-star-o" data-rating="2"></span>
                    <span class="fa fa-star-o" data-rating="3"></span>
                    <span class="fa fa-star-o" data-rating="4"></span>
                    <span class="fa fa-star-o" data-rating="5"></span>
                    <input type="hidden" name="bintang" class="rating-value" value="0" />
                </div>
            </div>
        </div>
        <label>Pesan</label>
        <div class="form-floating">
            <textarea class="form-control" name="comment" placeholder="Pesan" id="floatingTextarea2" style="height: 100px;"></textarea>
        </div>
    </div>

    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Kirim</button>
    </div>
</form>

    </div>
                        </div>
</div>

                       @push('js')
                      <script>
                           var $star_rating = $('.star-rating .fa');
                    
                    var SetRatingStar = function() {
                      return $star_rating.each(function() {
                        if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
                          return $(this).removeClass('fa-star-o').addClass('fa-star');
                        } else {
                          return $(this).removeClass('fa-star').addClass('fa-star-o');
                        }
                      });
                    };
                    
                    $star_rating.on('click', function() {
                      $star_rating.siblings('input.rating-value').val($(this).data('rating'));
                      return SetRatingStar();
                    });
                    
                    SetRatingStar();
                    $(document).ready(function() {
                    
                    });
                    
                    $('#rating').modal('show')
                       </script>
                                            
                    @endpush
                    
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                        <script>
                            const myForm = document.getElementById('myForm');
                            myForm.addEventListener('submit', function(e) {
                                e.preventDefault();
                                myForm.style.display = 'none';
                                const formData = new FormData(myForm);
                                fetch(myForm.action, {
                                    method: 'POST',
                                    body: formData
                                }).then(function(response) {
                                    if (response.ok) {
                                        Swal.fire({
                                            icon: 'success',
                                            text: 'Terima kasih telah memberikan testimoni!',
                                        }).then(function() {
                                            window.location.reload();
                                        });
                                    } else {
                                        Swal.fire({
                                            icon: 'error',
                                            text: 'Gagal menyimpan testimoni',
                                        });
                                    }
                                }).catch(function(error) {
                                    Swal.fire({
                                        icon: 'error',
                                        text: 'Gagal menyimpan testimoni',
                                    });
                                });
                            });
                        </script>
                        @endif
                    </div>
                    
                    @if($data->status_pembelian == "Pending")
                    <div class="col-12">
                                
                    </div>
                    
                    
                     @if($data->status_pembelian == "Pending")
                    
                         @elseif($data->status_pembelian == "Batal")
                          <div class="h-full pt-6 lg:w-80">
                            <img src="/assets/image/transaction-failed.gif" alt="" />
                            <div class="text-center"><h5 class="text-xl font-bold">Lakukan transaksi kembali dengan promo menarik!</h5></div>
                        </div>
                        @elseif($data->status_pembelian == "Success")
                        
                        @endif
                    


                    <div class="py-4">
                        <div class="mt-4 mb-4 flex justify-center rounded-lg  py-4 qrCode">
                            <h6>Kode Bayar / Nomor VA / QRIS:<br><br>
                            @if(Str::upper($data->metode_pembayaran) == "QRIS" || Str::upper($data->metode_pembayaran) == "QRISC" || Str::upper($data->metode_pembayaran) == "QRIS2" || Str::upper($data->metode_pembayaran) == "QRISOP" || Str::upper($data->metode_pembayaran) == "QRISCOP" )
                             <div class="col-lg-7 d-print-none">
                             <a href="{{ $data->no_pembayaran }}" download="">
                             <img src="{{ $data->no_pembayaran }}" alt="qrcode" class="relative items-center justify-center overflow-hidden rounded-lg bg-white sm:h-56 sm:w-56" >
                             </a>
                            @elseif(Str::upper($data->metode_pembayaran) == "SHOPEEPAY")
                            <kbd class="bg-dark" data-toggle="tooltip" data-placement="bottom" id="paycode">
                                <td class="col-bjinv2"><a href="{{ $data->no_pembayaran }}" target="blank" class="btn btn-primary m-1">KLIK UNTUK BAYAR VIA SHOPEEPAY</a></td>
                            </kbd>
                            @else
                             <kbd class="bg-dark" data-toggle="tooltip" data-placement="bottom" id="paycode" title="Click to copy" style="margin-left: 50px;">{{ $data->no_pembayaran }}
                            </kbd>
                            @endif
                         </h6><br>
                        </div>
                        @if(Str::upper($data->metode_pembayaran) == "QRIS" || Str::upper($data->metode_pembayaran) == "QRISC" || Str::upper($data->metode_pembayaran) == "QRIS2" || Str::upper($data->metode_pembayaran) == "QRISOP" || Str::upper($data->metode_pembayaran) == "QRISCOP" )
                        <div class="mb-4 flex justify-center">
                            <button type="button" class="inline-flex items-center rounded-full border border-transparent px-6 py-3 text-sm font-semibold leading-4 shadow-sm focus:outline-none" onclick="window.location.href='{{ $data->no_pembayaran }}'">Unduh kode QR</button>
                        </div>
                        @elseif(Str::upper($data->metode_pembayaran) == "OVO" || Str::upper($data->metode_pembayaran) == "GOPAY")
                        <div class="mb-4 flex justify-center">
                           <button type="button" class="inline-flex items-center rounded-full border border-transparent px-6 py-3 text-sm font-semibold leading-4 shadow-sm focus:outline-none" title="Click to copy" id="paycode" onclick="copyToClipboard()">Click To Copy</button>
                        </div>
                        @endif
                    </div>
                     @endif
                </div>
            </div>
            
            <div class="min-w-0 flex-1 xl:flex">
                <div class="lg:min-w-0 lg:flex-1">
                    <div class="h-full py-6">
                        <div class="flex flex-col lg:flex-row md:flex-row gap-3 lg:gap-0 md:gap-0 justify-between rounded-2xl p-6 shadow-sm css-scrciq">
                            <div>
                                <h5 class="font-medium">Tanggal Pembelian</h5>
                                <h5 class="font-bold text-sm">{{ $data->created_at }}</h5>
                            </div>
                            <div>
                                <h5 class="font-medium">Nomor Pesanan</h5>
                                <h5 class="font-bold text-sm">{{ $data->id_pembelian }}</h5>
                            </div>
                            <div>
                                <h5 class="font-medium">Metode Pembayaran</h5>
                                <h5 class="font-bold text-sm">{{ $data->metode_pembayaran }}</h5>
                            </div>
                            <div>
                                <h5 class="font-medium">Status Pesanan</h5>
                                <h5 class="font-bold text-sm pt-1">
                            <b>
                                @if($data->status_pembelian == "Pending")
                                <span class="text-white/70 rounded-md px-2 py-1 text-sm bg-yellow-500">PENDING</span>
                                @elseif($data->status_pembelian == "Process")
                                <span class="text-white/70 rounded-md px-2 py-1 text-sm bg-sky-600">PROCESS</span>
                                @elseif($data->status_pembelian == "Batal")
                                <span class="text-white/70 rounded-md px-2 py-1 text-sm text-danger">CANCELED</span>
                                @elseif($data->status_pembelian == "Success")
                                <span class="text-white/70 rounded-md px-2 py-1 text-sm bg-red-800">SUCCESS</span>
                                @endif
                            </b>
                                </h5>
                            </div>
                        </div>
                        <div class="mt-4 overflow-hidden rounded-2xl shadow-sm css-scrciq">
                            <div class="flex items-center gap-2 px-4 py-5 sm:px-6">
                            <div class="text-center font-extrabold tracking-tight text-white text-xl ">
                                <h1>Detail Pesanan</h1>
                            </div>
                            
                                <h3 class="text-lg font-bold leading-6"></h3></h3>
                            </div>
                            <div class="border-t border-[#626274]">
                                <dl class="border-b border-[#626274] p-4 pb-8">
                                    <div class="pb-0 sm:grid sm:grid-cols-3 sm:gap-3 sm:py-4"><h5 class="font-bold">Detail</h5></div>
                                    <div class="py-2 sm:grid sm:grid-cols-3 sm:gap-3 sm:py-2">
                                        <dt class="text-sm font-medium">Item</dt>
                                        <dd class="mt-1 text-sm font-bold sm:col-span-2 sm:mt-0">{{ $data->layanan }}</dd>
                                    </div>
                                    @if($data->tipe_transaksi == "joki")
                                    <div class="py-2 sm:grid sm:grid-cols-3 sm:gap-3 sm:py-2">
                                        <dt class="text-sm font-medium">Email Joki</dt>
                                        <dd class="mt-1 text-sm font-bold sm:col-span-2 sm:mt-">{{ $data_joki->email_joki }}</dd>
                                    </div>
                                    <div class="py-2 sm:grid sm:grid-cols-3 sm:gap-3 sm:py-2">
                                        <dt class="text-sm font-medium">Password Joki</dt>
                                        <dd class="mt-1 text-sm font-bold sm:col-span-2 sm:mt-">{{ $data_joki->password_joki }}</dd>
                                    </div>
                                    <div class="py-2 sm:grid sm:grid-cols-3 sm:gap-3 sm:py-2">
                                        <dt class="text-sm font-medium">Via Login Joki</dt>
                                        <dd class="mt-1 text-sm font-bold sm:col-span-2 sm:mt-">{{ $data_joki->loginvia_joki }}</dd>
                                    </div>
                                    <div class="py-2 sm:grid sm:grid-cols-3 sm:gap-3 sm:py-2">
                                        <dt class="text-sm font-medium">Catatan Joki</dt>
                                        <dd class="mt-1 text-sm font-bold sm:col-span-2 sm:mt-">{{ $data_joki->catatan_joki }}</dd>
                                    </div>
                                    <div class="py-2 sm:grid sm:grid-cols-3 sm:gap-3 sm:py-2">
                                        <dt class="text-sm font-medium">Request Joki</dt>
                                        <dd class="mt-1 text-sm font-bold sm:col-span-2 sm:mt-">{{ $data_joki->request_joki }}</dd>
                                    </div>
                                    <div class="py-2 sm:grid sm:grid-cols-3 sm:gap-3 sm:py-2">
                                        <dt class="text-sm font-medium">Jumlah Joki</dt>
                                        <dd class="mt-1 text-sm font-bold sm:col-span-2 sm:mt-">{{ $data_joki->jumlah_joki }}</dd>
                                    </div>
                                    @else
                                    <div class="py-2 sm:grid sm:grid-cols-3 sm:gap-3 sm:py-2">
                                        <dt class="text-sm font-medium">ID User</dt>
                                        <dd class="mt-1 text-sm font-bold sm:col-span-2 sm:mt-">{{ $data->user_id }}</dd>
                                    </div>
                                    <div class="py-2 sm:grid sm:grid-cols-3 sm:gap-3 sm:py-2">
                                        <dt class="text-sm font-medium">ID Zone</dt>
                                        <dd class="mt-1 text-sm font-bold sm:col-span-2 sm:mt-">{{ $data->zone != null ?"(".$data->zone.")" : '' }}</dd>
                                    </div>
                                    <div class="py-2 sm:grid sm:grid-cols-3 sm:gap-3 sm:py-2">
                                        <dt class="text-sm font-medium">SN/Keterangan</dt>
                                        <dd class="mt-1 text-sm font-bold sm:col-span-2 sm:mt-">{{ $data->keterangan }}</dd>
                                    </div>
                                    
                                    @endif
                                    <div class="py-2 sm:grid sm:grid-cols-3 sm:gap-3 sm:py-2">
                                        <dt class="text-sm font-medium">Harga</dt>
                                        <dd class="mt-1 text-sm font-bold sm:col-span-2 sm:mt-0">Rp.<span type="button" title="Click to copy"
                                            id="totPriceBayar" onclick="copyToClipboard2(this)">
                                            {{ number_format($data->harga_pembayaran, 0,
                                            ',','.') }}
                                        </span></dd>
                                    </div>
                                </dl>
                                <div class="flex justify-between p-4">
                                    <h5 class="font-bold">Total Pembayaran</h5>
                                    <div class="flex items-center space-x-2">
                                        <h5 class="font-extrabold ">
                                            <td class="right text-right">
                                                <strong class="total">
                                                    Rp.
                                                    <span type="button" title="Click to copy" id="paycode"
                                                        onclick="copyToClipboard()">
                                                        {{ number_format($data->harga_pembayaran, 0,
                                                        ',','.') }}
                                                    </span>
                                                    <i class="fas fa-copy" type="button" title="Click to copy" id="paycode"
                                                        onclick="copyToClipboard()"></i>
                                                </strong>
                                            </td>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(Str::upper($data->metode_pembayaran) == "QRIS" || Str::upper($data->metode_pembayaran) == "QRISC" || Str::upper($data->metode_pembayaran) == "QRIS2" || Str::upper($data->metode_pembayaran) == "QRISOP" || Str::upper($data->metode_pembayaran) == "QRISCOP" )
                  <h3 class="text-lg font-medium mt-5">Cara Melakukan Pembayaran Dengan Upload Gambar QRIS Di Semua E-wallet</h3>
                    <div class="mt-3 overflow-hidden rounded-lg">
                      <div class="null bg-gradient-black">
                        <button class="flex w-full justify-between rounded-lg px-4 py-3 text-left text-md font-semibold !border-b border-[#626274] rounded-[1rem]" data-bs-toggle="collapse" data-bs-target="#meltih" aria-expanded="false" aria-controls="CollapseThreee">
                          <span>Melalui Semua E-wallet</span>
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="rotate-180 transform h-5 w-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5"></path>
                          </svg>
                        </button>
                        <div class="px-3 pt-3 pb-3 text-sm collapse" id="meltih" class="collapse" aria-labelledby="HeadingThreee" data-bs-parent="#Accordione">
                          <ul>
                            <li class="whitespace-pre-line">
                              1. Masuk ke aplikasi E-wallet Yang Anda Gunakan, kemudian klik tombol Scanner atau Bayar.
                              2. Setelah itu, klik ikon Upload QR dari Galeri yang terdapat di kanan atas tampilan.
                              3. Pilih gambar QRIS yang Kamu Download Atau Screenshot Di {{ config('app.name') }} Yang telah disimpan di galeri.
                              4. Klik OK untuk melanjutkan ke proses berikutnya.
                              5. Klik Bayar Sekarang untuk menyelesaikan proses transaksi.
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>

                        @endif
                        <div class="mt-8 text-center">
                       
                            <p class="mx-auto max-w-xl text-sm">
                                Jika Kamu Mengalami Kendala Pembayaran Atau Adanya Keluhan Terkait Pembayaran Anda Dapat Menghubungi Kami Melalui&nbsp;
                                <a href="#" class="capitalize text-info" target="_blank" rel="noreferrer">instagram</a> /
                                <a href="#" class="capitalize text-info" target="_blank" rel="noreferrer">WhatsApp</a>
                            </p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<!--// <script>-->
<!--//     setTimeout(function() {-->
<!--//         var statusPembelian = "{{ $data->status_pembelian }}";-->
<!--//         if (statusPembelian !== "Success") {-->
<!--//             location.reload();-->
<!--//         }-->
<!--//     }, 3000);-->
<!--// </script>-->
<!--SC click to copy-->

<!--SC Toogle-->
<script>
function toggleList() {
  var list = document.getElementById("headlessui-menu-items-:r0:");
  var button = document.getElementById("headlessui-menu-button-:R1qd6:");
  var expanded = button.getAttribute("aria-expanded") === "true";

  if (expanded) {
    list.style.display = "none";
    button.setAttribute("aria-expanded", "false");
    button.setAttribute("aria-controls", "");
  } else {
    list.style.display = "block";
    button.setAttribute("aria-expanded", "true");
    button.setAttribute("aria-controls", "headlessui-disclosure-panel-:r15:");
  }
}

</script>

<!-- End SC Toogle-->
<script>
    function copyToClipboard() {
        var paycodeElement = document.getElementById("paycode");
        var textToCopy = paycodeElement.innerText;

        navigator.clipboard.writeText(textToCopy).then(function() {
            alert("Text has been copied: " + textToCopy);
        }, function(error) {
            console.error("Failed to copy text: ", error);
        });
    }
</script>

<script>
    function copyToClipboard2() {
        var paycodeElement = document.getElementById("totpricee");
        var textToCopy = paycodeElement.innerText;

        navigator.clipboard.writeText(textToCopy).then(function() {
            alert("Text has been copied: " + textToCopy);
        }, function(error) {
            console.error("Failed to copy text: ", error);
        });
    }
</script>
<!--end SC click to copy-->
<script>
    $(document).ready(function () {
            $("#paycode").tooltip();
            $("#paycode").click(function () {
                copyToClipboard($(this).text().trim().replace(".", ""), $(this));
            })
            $("#paycode").css('cursor', 'pointer');
        })

        function print_invoice() {
            var printContents = document.getElementById('invoice').innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
            window.onafterprint = function () {
                location.reload()
            }
        }

        function copyToClipboard2(element) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).text().trim().replace(".", "")).select();
            document.execCommand("copy");
            $temp.remove();

        }
        
var timer;
var compareDate;

// Cek apakah waktu awal sudah disimpan di localStorage
if (localStorage.getItem("startTime")) {
  // Jika sudah ada, ambil waktu awal dari localStorage
  compareDate = new Date(localStorage.getItem("startTime"));
} else {
  // Jika belum ada, atur waktu awal baru
  compareDate = new Date();
  compareDate.setTime(compareDate.getTime() + (3 * 60 * 60 * 1000)); // 3 jam dari sekarang
  localStorage.setItem("startTime", compareDate); // Simpan waktu awal di localStorage
}

timer = setInterval(function() {
  timeBetweenDates(compareDate);
}, 1000);

function timeBetweenDates(toDate) {
  var dateEntered = toDate;
  var now = new Date();
  var difference = dateEntered.getTime() - now.getTime();

  if (difference <= 0) {
    // Timer selesai
    clearInterval(timer);
    localStorage.removeItem("startTime"); // Hapus waktu awal dari localStorage
  } else {
    var seconds = Math.floor(difference / 1000);
    var minutes = Math.floor(seconds / 60);
    var hours = Math.floor(minutes / 60);
    var days = Math.floor(hours / 24);

    hours %= 4;
    minutes = minutes % 60; // Menghitung sisa menit setelah dikurangi jam
    seconds = seconds % 60; // Menghitung sisa detik setelah dikurangi menit

    $("#days").text(days);
    $("#hours").text(hours);
    $("#minutes").text(minutes);
    $("#seconds").text(seconds);
  }
}



</script>

@include('../footer')
@endsection
