@extends('main-admin')

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Pengaturan Website</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">/Seting</li>
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
        <div class="row">
            <div class="col-lg-6">
                @foreach( $data as $datas )
                <h4 class="mb-3 header-title mt-0">Data Setting</h4>
                    @csrf
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">Nama Web</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{ $datas->web_title }}" name="web_title" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">Keywords</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{ $datas->web_keywords}}" name="web_keywords" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">Description</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{ $datas->web_description }}" name="web_description" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">WhatsApp</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{ $datas->wa_admin }}" name="wa_admin" disabled>
                            <small>*62xxxxx</small>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">Instagram</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{ $datas->ig_admin }}" name="ig_admin" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">Telegram</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{ $datas->tele_admin }}" name="tele_admin" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">Line</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{ $datas->line_admin }}" name="line_admin" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">Email Us</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{ $datas->email_admin }}" name="email_admin" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">Tiktok</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{ $datas->tiktok_admin }}" name="tiktok_admin" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">Youtube</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{ $datas->yt_admin }}" name="yt_admin" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">OVO Admin</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{ $datas->ovo_admin }}" name="ovo_admin" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">GoPay Admin</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{ $datas->gopay_admin }}" name="gopay_admin" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">Shopee Admin</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{ $datas->shopeepay_admin }}" name="shopeepay_admin" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">BCA Admin</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{ $datas->bca_admin }}" name="bca_admin" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">Captcha Secret</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{ $datas->captcha_secret }}" name="captcha_secret" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">Captcha Site Key</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{ $datas->captcha_sitekey }}" name="captcha_sitekey" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">Fonnte Key</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{ $datas->wa_key }}" name="wa_key" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">Profit Public</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{ $datas->profit_public }}" name="profit_public" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">Profit Member</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{ $datas->profit_member }}" name="profit_member" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">Profit Platinum</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{ $datas->profit_platinum }}" name="profit_platinum" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">Profit Gold</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{ $datas->profit_gold }}" name="profit_gold" disabled>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-lg-6">
                @foreach( $data as $datas )
                <h4 class="mb-3 header-title mt-0">&nbsp;</h4>
                    @csrf
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">Tripay Marchant Code</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{ $datas->tripay_marchant_code }}" name="tripay_marchant_code" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">Tripay Api</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{ $datas->tripay_api }}" name="tripay_api" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">Tripay Private Key</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{ $datas->tripay_private_key }}" name="tripay_private_key" disabled>
                        </div>
                    </div>
                   <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">Tokopay Merchant ID</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{ $datas->tokopay_merchantid }}" name="ipaymu_va" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">Tokopay Secret Key</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{ $datas->tokopay_secretkey }}" name="ipaymu_key" disabled>
                        </div>
                    </div>
                   <!-- <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">IPAYMU VA</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{ $datas->ipaymu_va }}" name="ipaymu_va" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">IPAYMU KEY</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{ $datas->ipaymu_key }}" name="ipaymu_key" disabled>
                        </div>
                    </div>-->
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">Digi Username</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{ $datas->digi_username }}" name="digi_username" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">Digi Api Key</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{ $datas->digi_apikey }}" name="digi_apikey" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">VIP ID</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{ $datas->vip_apiid }}" name="vip_apiid" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">VIP KEY</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{ $datas->vip_apikey }}" name="vip_apikey" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">APIGAMES Secret</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{ $datas->apigames_secret }}" name="apigames_secret" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">APIGAMES Merchant</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{ $datas->apigames_merchant }}" name="apigames_merchant" disabled>
                        </div>
                    </div>
                    <!--<div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">BangJeff KEY</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{ $datas->bangjeff_apikey }}" name="bangjeff_apikey" disabled>
                        </div>
                    </div>-->
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">CekID API ID</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{ $datas->mystic_id }}" name="mystic_id" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">CekID API KEY</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{ $datas->mystic_key }}" name="mystic_key" disabled>
                        </div>
                    </div>

                    <div class='mb-3 row'>
                        <label class='col-lg-3 col-form-label' for='example-fileinput'>Warna Web #1</label>
                        <div class='col-lg-9'>
                            <input type='text' class='form-control' value="{{ $datas->warna_1 }}" name='warna_1' disabled>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-3 col-form-label' for='example-fileinput'>Warna Web #2</label>
                        <div class='col-lg-9'>
                            <input type='text' class='form-control' value="{{ $datas->warna_2 }}" name='warna_2' disabled>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-3 col-form-label' for='example-fileinput'>Warna Web #3</label>
                        <div class='col-lg-9'>
                            <input type='text' class='form-control' value="{{ $datas->warna_3 }}" name='warna_3' disabled>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-3 col-form-label' for='example-fileinput'>Warna Web #4</label>
                        <div class='col-lg-9'>
                            <input type='text' class='form-control' value="{{ $datas->warna_4 }}" name='warna_4' disabled>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">Web Logo</label>
                        <div class="col-lg-9">
                            <img src="{{$datas->web_logo}}" alt="" style="width:auto;height:55px;">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-form-label" for="example-fileinput">Favicon</label>
                        <div class="col-lg-9">
                            <img src="{{$datas->fav_ico}}" alt="" style="width:auto;height:55px;">
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mb-3 row">
                <button href="javascript:;" onclick="modal('{{ $datas->id }}', '{{ route('seting.detail', [$datas->id]) }}')" class="btn btn-primary">Edit</button>
            </div>
        </div>
<script type="text/javascript">
$(document).ready(function(){
    $('.table').DataTable({
        "paging":   false,
        "info":     false
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