<?php $__env->startSection('css'); ?>
<style>
    @import  url("https://fonts.googleapis.com/css?family=Open+Sans:400,700");
    @import  url("https://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css");

    .cus-accordion {
        transform: translateZ(0);
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        /* background: #fff; */
    }

    .bg-primary {
        cursor: pointer;
    }

    .cus-accordion>.accordion-toggle {
        position: absolute;
        opacity: 0;
        display: none;
    }

    .hayutopup-payment-img {
        height: 27px;
        /* width: 80px; */
        background: white;
        border-radius: 7px;
        padding: 3px;
    }

    .hayutopup-payment-imglogo {
        height: 27px;
        /* width: 80px; */
        /* background: white; */
        border-radius: 7px;
        padding: 0px;
    }

    .hayu-qris {
        padding: 5px;
        border-radius: 2px;
        background: white;
        align-items: center;
        width: 200px;
    }

    .cus-accordion>label {
        position: relative;
        display: block;
        height: 50px;
        line-height: 50px;
        padding: 0 20px;
        font-size: 14px;
        font-weight: 700;
        border-top: 1px solid #ddd;
        /* background: #fff; */
        cursor: pointer;
    }

    .cus-accordion>label:after {
        content: '\f078';
        position: absolute;
        top: 0px;
        right: 20px;
        font-family: fontawesome;
        transform: rotate(90deg);
        transition: .3s transform;
    }

    .cus-accordion>section {
        height: 0;
        transition: .3s all;
        overflow: hidden;
    }

    .cus-accordion>.accordion-toggle:checked~label:after {
        transform: rotate(0deg);
    }

    .cus-accordion>.accordion-toggle:checked~section {
        height: 200px;
    }

    .cus-accordion>section p {
        margin: 15px 0;
        padding: 0 20px;
        font-size: 12px;
        line-height: 1.5;
    }

    .hayutopup-petunjuk {
        font-size: 14px;
        font-style: italic;
    }
    .col-bjinv {
    flex: 0 0 auto;
    width: 50%;
    font-size: 14px;
    text-align: right;
    }
    .col-bjinv2 {
    flex: 0 0 auto;
    width: 50%;
    font-size: 14px;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="wrapper pt-4">
<br>
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <button class="btn btn-warning btn-sm mb-3" onclick="print_invoice()"><i class="fas fa-print"></i> Print</button>
                <div class="card bg-dark shadow" id="invoice">
                    <div class="card-header bg-gradient">
                        <span class="h4">Invoice Number <strong>#<?php echo e($data->id_pembelian); ?></strong>
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="text-center">
                                <blockquote class="blockquote border bg-gradient rounded shadow p-2">
                                This order will expire on : <br><span class="h4 text-danger"><b id="expired_time"><?php echo e($expired); ?></b></span>
                                </blockquote>
                            </div>
                        </div>
                        
                        <?php if(Str::upper($data->metode_pembayaran) == "QRIS" || Str::upper($data->metode_pembayaran) == "QRISC" || Str::upper($data->metode_pembayaran) == "QRIS2" || Str::upper($data->metode_pembayaran) == "QRISOP" || Str::upper($data->metode_pembayaran) == "QRISCOP" ): ?>
                        <div id="qris-payment">
                        <?php if($data->status_pembayaran == "Belum Lunas"): ?>
                            <center>
                                <img src="<?php echo e($data->no_pembayaran); ?>" width="300">
                             </center>
                             <center>
                                <span class="badge bg-danger text-center mt-3">Scan QR Code diatas ini</span>
                             </center>
                            <?php elseif($data->status_pembayaran == "PAID"): ?>
                            <div class="alert alert-success text-center">
        		                <b>Pembayaran Terkonfirmasi</b>
        		            </div>
        		            <?php elseif($data->status_pembayaran == "LUNAS"): ?>
                            <div class="alert alert-success text-center">
        		                <b>Pembayaran Terkonfirmasi</b>
        		            </div>
                        <?php endif; ?>
                            
                        </div>
                        <?php endif; ?>
                        
                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table table-clear text-white">
                                        <tbody>
                                            <tr>
                                                <td class="col-bjinv">
                                                Invoice No :
                                                </td>
                                                <td class="col-bjinv2">
                                                #<span><?php echo e($data->id_pembelian); ?></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-bjinv">
                                                Item :
                                                </td>
                                                <td class="col-bjinv2">
                                                <?php echo e($data->layanan); ?>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-bjinv">
                                                ID :
                                                </td>
                                                <td class="col-bjinv2">
                                                <?php echo e($data->user_id); ?>  <?php echo e($data->zone != null ? "(".$data->zone.")" : ''); ?>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-bjinv">
                                                Nickname :
                                                </td>
                                                <td class="col-bjinv2">
                                                <?php echo e($data->nickname); ?>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-bjinv">
                                                Payment :
                                                </td>
                                                 <td class="col-bjinv2">
                                                <?php echo e($data->metode_pembayaran); ?>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-bjinv">
                                                Kode Bayar / Nomor VA :
                                                </td>
                                                <td class="col-bjinv2">
                                                <span>
                                                <?php if(Str::upper($data->metode_pembayaran) == "QRIS" || Str::upper($data->metode_pembayaran) == "QRISC" 
                                                    || Str::upper($data->metode_pembayaran) == "QRIS2" || Str::upper($data->metode_pembayaran) == "QRISOP" 
                                                    || Str::upper($data->metode_pembayaran) == "QRISCOP" ): ?>
                                                        <a class="btn btn-primary btn-sm" href="#qris-payment">Lihat QRIS</a>
                                                    <?php elseif(Str::upper($data->metode_pembayaran) == "SHOPEEPAY"): ?>
                                                        <a class="btn btn-primary btn-sm" href="<?php echo e($data->no_pembayaran); ?>">KLIK UNTUK BAYAR VIA SHOPEEPAY</a>
                                                    <?php elseif(Str::upper($data->metode_pembayaran) == "OVO"): ?>
                                                    <a class="btn btn-primary btn-sm" href="<?php echo e($data->no_pembayaran); ?>">KLIK UNTUK BAYAR VIA OVO</a>
                                                    <?php elseif(Str::upper($data->metode_pembayaran) == "OVOADMIN" || Str::upper($data->metode_pembayaran) == "GOPAY" 
                                                    || Str::upper($data->metode_pembayaran) == "SHOPEE" || Str::upper($data->metode_pembayaran) == "DANA" 
                                                    || Str::upper($data->metode_pembayaran) == "LINKAJA" || Str::upper($data->metode_pembayaran) == "ISAKU"
                                                    || Str::upper($data->metode_pembayaran) == "BCA" || Str::upper($data->metode_pembayaran) == "BRI"
                                                    || Str::upper($data->metode_pembayaran) == "BNI" || Str::upper($data->metode_pembayaran) == "MANDIRI"
                                                    || Str::upper($data->metode_pembayaran) == "CIMB"): ?>
                                                        <b class="text-danger"><?php echo e($data->no_pembayaran); ?></b>
                                                    <?php else: ?>
                                                        <b class="text-danger"><?php echo e($data->no_pembayaran); ?></b>
                                                <?php endif; ?>
                                                </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-bjinv">
                                                Pay Status :
                                                </td>
                                                <td class="col-bjinv2">
                                                <?php if($data->status_pembayaran == "Belum Lunas"): ?>
                                                <span class="badge text-uppercase btn-danger">UNPAID</span>
                                                <?php elseif($data->status_pembayaran == "Batal"): ?>
                                                <span class="badge text-uppercase btn-danger">CANCELED</span>
                                                <?php elseif($data->status_pembayaran == "EXPIRED"): ?>
                                                <span class="badge text-uppercase btn-danger">EXPIRED</span>
                                                <?php elseif($data->status_pembayaran == "Lunas"): ?>
                                                <span class="badge text-uppercase btn-danger">PAID</span>
                                                <?php elseif($data->status_pembayaran == "PAID"): ?>
                                                <span class="badge text-uppercase btn-danger">PAID</span>
                                                <?php endif; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-bjinv">
                                                Trx Status :
                                                </td>
                                                <td class="col-bjinv2">
                                                <?php if($data->status_pembelian == "Pending"): ?>
                                                <span class="badge text-uppercase bg-warning text-dark">PENDING</span>
                                                <?php elseif($data->status_pembelian == "Processing"): ?>
                                                <span class="badge text-uppercase bg-info text-dark">PROCESSING</span>
                                                <?php elseif($data->status_pembelian == "Batal"): ?>
                                                <span class="badge text-uppercase bg-danger text-dark">CANCELED</span>
                                                <?php elseif($data->status_pembelian == "Success"): ?>
                                                <span class="badge text-uppercase bg-success text-dark">SUCCESS</span>
                                                <?php elseif($data->status_pembelian == "Sukses"): ?>
                                                <span class="badge text-uppercase bg-success text-dark">SUCCESS</span>
                                                <?php endif; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-bjinv">
                                                Pay Total :
                                                </td>
                                                <td class="col-bjinv3">
                                                Rp
                                                <span><?php echo e(number_format($data->harga_pembayaran, 0, ',','.')); ?></span>
                                                </td>
                                            </tr>
                                        </tbody>
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

<?php $__env->startSection('js'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
        $(document).ready(function() {
            $("#paycode").tooltip();
            $("#paycode").click(function() {
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
            window.onafterprint = function() {
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
    </script>
<script type="text/javascript">
            $(document).ready(function() {

                let expiredTime = new Date(`<?php echo e($expired); ?>`).getTime();
                let statusInvoice = `PENDING`;
                if (statusInvoice == 'PENDING'){
                    
                    var x = setInterval(() => {
                        let nowTime = new Date().getTime();
                        // Find the distance between now and the count down date
                        var distance = expiredTime - nowTime;

                        // Time calculations for days, hours, minutes and seconds
                        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                        // Display the result in the element with id="demo"
                        if(distance > 0){
                            // document.getElementById("expired_time").innerHTML = `${minutes} minutes ${seconds} seconds`
                            $("#expired_time").text(`${minutes} minutes ${seconds} seconds`)
                        }
                    }, 1000);
                }
                $("#paycode").tooltip();
                $("#paycode").click(function() {
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
                window.onafterprint = function() {
                    location.reload()
                }
            }

            function copyToClipboardinv(element) {
                var $temp = $("<input>");
                $("body").append($temp);
                $temp.val($(element).text().replace(".", "")).select();
                document.execCommand("copy");
                $temp.remove();
                toastr.info("No Invoice berhasil disalin!");
            }

            function copyToClipboardcodebayar(element) {
                var $temp = $("<input>");
                $("body").append($temp);
                $temp.val($(element).text().replace(".", "")).select();
                document.execCommand("copy");
                $temp.remove();
                toastr.info("Kode Pembayaran berhasil disalin!");
            }

            function copyToClipboard2(element) {
                var $temp = $("<input>");
                $("body").append($temp);
                $temp.val($(element).text().trim().replace(".", "").replace(".", "")).select();
                document.execCommand("copy");
                $temp.remove();
                toastr.info("Total Tagihan berhasil disalin!");
            }
            function copyVirtualAccount(element) {
                var $temp = $("<input>");
                $("body").append($temp);
                $temp.val($(element).text().trim().replace(".", "")).select();
                document.execCommand("copy");
                $temp.remove();
                toastr.info("Nomor Virtual Akun berhasil disalin!");
            }
            function copykodepembayaran(element) {
                var $temp = $("<input>");
                $("body").append($temp);
                $temp.val($(element).text().trim().replace(".", "")).select();
                document.execCommand("copy");
                $temp.remove();
                toastr.info("Kode Pembayaran berhasil disalin!");
            }
            function copyToNoRek(element) {
                var $temp = $("<input>");
                $("body").append($temp);
                $temp.val($(element).text().trim().replace(".", "")).select();
                document.execCommand("copy");
                $temp.remove();
                toastr.info("Nomor Rekening berhasil disalin!");
            }

            function copyToClipboard(text, el) {
                var copyTest = document.queryCommandSupported('copy');
                var elOriginalText = el.attr('data-bs-original-title');

                if (copyTest === true) {
                    var copyTextArea = document.createElement("textarea");
                    copyTextArea.value = text;
                    document.body.appendChild(copyTextArea);
                    copyTextArea.select();
                    try {
                        var successful = document.execCommand('copy');
                        var msg = successful ? 'Copied!' : 'Whoops, not copied!';
                        el.attr('data-bs-original-title', msg).tooltip('show');
                    } catch (err) {
                        console.log('Oops, unable to copy');
                    }
                    document.body.removeChild(copyTextArea);
                    el.attr('data-bs-original-title', elOriginalText);
                    console.log(elOriginalText);
                } else {
                    // Fallback if browser doesn't support .execCommand('copy')
                    window.prompt("Copy to clipboard: Ctrl+C or Command+C, Enter", text);
                }
            }
        </script>
<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('../main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nvdstor2/game.nvdstoreindonesia.com/system/resources/views/components/invoice.blade.php ENDPATH**/ ?>