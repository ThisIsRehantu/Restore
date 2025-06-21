function err(text) {
	return '<div class="modal-content"><div class="modal-body">' + text + '</div></div>';
}

function getModal(link) {
	$.ajax({
		type: "GET",
		url: link,
		dataType: "html",
		beforeSend: function () {
			$("#myModal-content").html(
				err('Loading....')
			);
		},
		success: function (result) {
			setTimeout(function () {
				$("#myModal-content").html(result);
			}, 1000);
		},
		error: function () {
			$("#myModal-content").html(
				err('Failed to get contents....')
			);
		},
	});
	$("#myModal").modal("show");
}

function postModal(link, form) {
	$.ajax({
		type: "POST",
		url: link,
		data: $(form).serialize(),
		dataType: "html",
		beforeSend: function () {
			$("#myModal-content").html(
				err('Loading....')
			);
		},
		success: function (result) {
			setTimeout(function () {
				$("#myModal-content").html(result);
			}, 1000);
		},
		error: function () {
			$("#myModal-content").html(
				err('Failed to get contents....')
			);
		},
	});
	$("#myModal").modal("show");
}

function deleteSwal(link) {
	Swal.fire({
		title: "Apakah anda yakin?",
		text: "Data yang terhapus tidak dapat dikembalikan!",
		icon: "warning",
		showCancelButton: !0,
		confirmButtonText: "Ya, hapus!",
		customClass: {
			confirmButton: "btn btn-primary",
			cancelButton: "btn btn-outline-danger ms-1"
		},
		buttonsStyling: !1
	}).then((result) => {
		if (result.isConfirmed) {
            $.ajax({
                type: "GET",
                url: link,
                dataType: "JSON",
                beforeSend: function () {
                    let timerInterval
                    Swal.fire({
                        timer: 1000,
                        timerProgressBar: true,
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading()
                        },
                        willClose: () => {
                            clearInterval(timerInterval)
                        }
                    })
                },
                success: function (result) {
                    setTimeout(function () {
                        if (result.error == false) Swal.fire({
							icon: "success",
							title: "Data Berhasil Dihapus!",
							text: result.message,
							customClass: {
								confirmButton: "btn btn-success"
							}
						}).then((res) => {
							if(res) {
								location.reload()
							}
						})
                        else Swal.fire({
							icon: "warning",
							title: "Gagal!",
							text: result.message,
							customClass: {
								confirmButton: "btn btn-success"
							}
						})
                    }, 750)
                },
                error: function () {
                    Swal.fire({
						icon: "warning",
						title: "Error!",
						text: 'Failed to get contents....',
						customClass: {
							confirmButton: "btn btn-success"
						}
					})
                },
            })
        }
	})
}


function scrollToTargetAdjusted(myId) {
	window.scrollTo({
		top: document.getElementById(myId).getBoundingClientRect().top + window.pageYOffset - 50,
		behavior: 'smooth'
	})
}

function formatNumber(number) {
	return number.toString().split('').reverse().join('').match(/\d{1,3}/g).join('.').split('').reverse().join('')
}

/*==================== ACCORDION PAYMENT ====================*/
const paymentContent = document.getElementsByClassName('payment__content'),
      paymentHeader = document.querySelectorAll('.payment__header'),
      paymentFooter = document.querySelectorAll('.payment__footer')

function togglePaymentHeader() {
    let itemClass = this.parentNode.className

    for(i = 0; i < paymentContent.length; i++) {
        paymentContent[i].className = 'payment__content payment__close'
    }
    if(itemClass === 'payment__content payment__close') {
        this.parentNode.className = 'payment__content payment__open'
        this.nextElementSibling.style.maxHeight = this.nextElementSibling.scrollHeight + "px"
    } else {
        this.nextElementSibling.style.maxHeight = "0"
    }
}

function togglePaymentFooter() {
    let itemClass = this.parentNode.className

    for(i = 0; i < paymentContent.length; i++) {
        paymentContent[i].className = 'payment__content payment__close'
    }
    if(itemClass === 'payment__content payment__close') {
        this.parentNode.className = 'payment__content payment__open'
        this.previousElementSibling.style.maxHeight = this.previousElementSibling.scrollHeight + "px"
    } else {
        this.previousElementSibling.style.maxHeight = "0"
    }
}

paymentHeader.forEach((el) => {
    el.addEventListener('click', togglePaymentHeader)
})
paymentFooter.forEach((el) => {
    el.addEventListener('click', togglePaymentFooter)
})

function ExpClan() {
	PangkatAwal 		= $('select[name="PangkatAwal"]').eq(1).val()
	PangkatTujuan 		= $('select[name="PangkatTujuan"]').eq(1).val()
	PersenAwal 			= parseFloat($('select[name="PersenAwal"]').eq(1).val())
	PersenTujuan 		= parseFloat($('select[name="PersenTujuan"]').eq(1).val())

	DefaultExpAwal 		= 0.0;
	DefaultPersenAwal 	= 0.0;
	NeedExpAwal 		= 0.0;
	TotalAwal 			= 0.0;
	DefaultExpTujuan 	= 0.0;
	DefaultPersenTujuan = 0.0;
	NeedExpTujuan 		= 0.0;
	TotalTujuan 		= 0.0;
	Hasil 				= 0.0;

	DefaultExpAwal		= gradeClan(PangkatAwal).Exp
	NeedExpAwal			= gradeClan(PangkatAwal).NeedExp

	DefaultPersenAwal 	= NeedExpAwal * PersenAwal;
	DefaultPersenAwal 	= DefaultPersenAwal / 100;
	TotalAwal 			= DefaultExpAwal + DefaultPersenAwal;

	DefaultExpTujuan	= gradeClan(PangkatTujuan).Exp
	NeedExpTujuan		= gradeClan(PangkatTujuan).NeedExp

	DefaultPersenTujuan = NeedExpTujuan * PersenTujuan;
	DefaultPersenTujuan = DefaultPersenTujuan / 100;
	TotalTujuan 		= DefaultExpTujuan + DefaultPersenTujuan;

	Hasil = TotalTujuan - TotalAwal;
	Match = Hasil / 2000;
	Match = Math.round(Match);

	$('input[name="Match"]').eq(1).val('Â± ' + formatNumber(Match))
	$('input[name="Hasil"]').eq(1).val(formatNumber(Hasil) + ' Exp')
}

function ExpChar() {
	PangkatAwal 		= $('select[name="PangkatAwal"]').eq(0).val()
	PangkatTujuan 		= $('select[name="PangkatTujuan"]').eq(0).val()
	PersenAwal 			= parseFloat($('select[name="PersenAwal"]').eq(0).val())
	PersenTujuan 		= parseFloat($('select[name="PersenTujuan"]').eq(0).val())

	DefaultExpAwal 		= 0.0;
	DefaultPersenAwal 	= 0.0;
	NeedExpAwal 		= 0.0;
	TotalAwal 			= 0.0;
	DefaultExpTujuan 	= 0.0;
	DefaultPersenTujuan = 0.0;
	NeedExpTujuan 		= 0.0;
	TotalTujuan 		= 0.0;
	Hasil 				= 0.0;
	Point 				= 0.0;

	DefaultExpAwal		= gradeChar(PangkatAwal).Exp
	NeedExpAwal			= gradeChar(PangkatAwal).NeedExp
	DefaultPersenAwal 	= NeedExpAwal * PersenAwal;
	DefaultPersenAwal 	= DefaultPersenAwal / 100;
	TotalAwal 			= DefaultExpAwal + DefaultPersenAwal;

	DefaultExpTujuan	= gradeChar(PangkatTujuan).Exp
	NeedExpTujuan		= gradeChar(PangkatTujuan).NeedExp
	DefaultPersenTujuan = NeedExpTujuan * PersenTujuan;
	DefaultPersenTujuan = DefaultPersenTujuan / 100;
	TotalTujuan 		= DefaultExpTujuan + DefaultPersenTujuan;

	Hasil = TotalTujuan - TotalAwal;
	Point = Hasil * 0.65;
	Match = Hasil / 350;
	Match = Math.round(Match);
	Death = Hasil / 350;
	Death = Math.round(Death);

	$('input[name="Match"]').eq(0).val('Â± ' + formatNumber(Match))
	$('input[name="Hasil"]').eq(0).val(formatNumber(Hasil) + ' Exp')
	$('input[name="Point"]').eq(0).val(formatNumber(Point) + ' Point')
}

function gradeChar(Pangkat) {
	switch (Pangkat) {
		case "Tengkorak":
			dExp = 0;
			nExp = 2000;
			break;
		case "Strip 1":
			dExp = 2000;
			nExp = 3000;
			break;
		case "Strip 2":
			dExp = 5000;
			nExp = 4000;
			break;
		case "Strip 3":
			dExp = 9000;
			nExp = 5000;
			break;
		case "Strip 4":
			dExp = 14000;
			nExp = 7000;
			break;
		case "V1 Kutip 1":
			dExp = 21000;
			nExp = 9000;
			break;
		case "V1 Kutip 2":
			dExp = 30000;
			nExp = 11000;
			break;
		case "V1 Emas":
			dExp = 41000;
			nExp = 13000;
			break;
		case "V2 Kutip 1":
			dExp = 54500;
			nExp = 16000;
			break;
		case "V2 Kutip 2":
			dExp = 70500;
			nExp = 19000;
			break;
		case "V2 Kutip 3":
			dExp = 89000;
			nExp = 21000;
			break;
		case "V2 Emas":
			dExp = 110000;
			nExp = 24000;
			break;
		case "V3 Kutip 1":
			dExp = 134000;
			nExp = 27000;
			break;
		case "V3 Kutip 2":
			dExp = 161000;
			nExp = 30000;
			break;
		case "V3 Kutip 3":
			dExp = 191000;
			nExp = 33000;
			break;
		case "V3 Kutip 4":
			dExp = 224000;
			nExp = 36000;
			break;
		case "V3 Emas":
			dExp = 260000;
			nExp = 41000;
			break;
		case "Diamond 1 Kutip 1":
			dExp = 301000;
			nExp = 46000;
			break;
		case "Diamond 1 Kutip 2":
			dExp = 347000;
			nExp = 51000;
			break;
		case "Diamond 1 Kutip 3":
			dExp = 398000;
			nExp = 56000;
			break;
		case "Diamond 1 Emas":
			dExp = 454000;
			nExp = 62000;
			break;
		case "Diamond 2 Kutip 1":
			dExp = 516000;
			nExp = 68000;
			break;
		case "Diamond 2 Kutip 2":
			dExp = 584000;
			nExp = 74000;
			break;
		case "Diamond 2 Kutip 3":
			dExp = 658000;
			nExp = 80000;
			break;
		case "Diamond 2 Kutip 4":
			dExp = 738000;
			nExp = 86000;
			break;
		case "Diamond 2 Emas":
			dExp = 824000;
			nExp = 93000;
			break;
		case "Diamond 3 Kutip 1":
			dExp = 917000;
			nExp = 100000;
			break;
		case "Diamond 3 Kutip 2":
			dExp = 1017000;
			nExp = 107000;
			break;
		case "Diamond 3 Kutip 3":
			dExp = 1124000;
			nExp = 114000;
			break;
		case "Diamond 3 Kutip 4":
			dExp = 1238000;
			nExp = 121000;
			break;
		case "Diamond 3 Emas":
			dExp = 1359000;
			nExp = 151000;
			break;
		case "Major Kutip 1":
			dExp = 1510000;
			nExp = 181000;
			break;
		case "Major Kutip 2":
			dExp = 1691000;
			nExp = 211000;
			break;
		case "Major Kutip 3":
			dExp = 1902000;
			nExp = 241000;
			break;
		case "Major Kutip 4":
			dExp = 2143000;
			nExp = 271000;
			break;
		case "Major Emas":
			dExp = 2414000;
			nExp = 311000;
			break;
		case "Letkol Kutip 1":
			dExp = 2725000;
			nExp = 351000;
			break;
		case "Letkol Kutip 2":
			dExp = 3076000;
			nExp = 391000;
			break;
		case "Letkol Kutip 3":
			dExp = 3467000;
			nExp = 431000;
			break;
		case "Letkol Kutip 4":
			dExp = 3898000;
			nExp = 471000;
			break;
		case "Letkol Emas":
			dExp = 4369000;
			nExp = 521000;
			break;
		case "Kolonel Kutip 1":
			dExp = 4890000;
			nExp = 571000;
			break;
		case "Kolonel Kutip 2":
			dExp = 5461000;
			nExp = 621000;
			break;
		case "Kolonel Kutip 3":
			dExp = 6082000;
			nExp = 671000;
			break;
		case "Kolonel Kutip 4":
			dExp = 6753000;
			nExp = 721000;
			break;
		case "Kolonel Emas":
			dExp = 7474000;
			nExp = 781000;
			break;
		case "B1":
			dExp = 8255000;
			nExp = 33745000;
			break;
		case "B2":
			dExp = 42000000;
			nExp = 21000000;
			break;
		case "B3":
			dExp = 63000000;
			nExp = 29000000;
			break;
		case "B4":
			dExp = 92000000;
			nExp = 8000000;
			break;
		case "B5":
			dExp = 100000000;
			nExp = 0;
	}

	return {Exp : dExp, NeedExp : nExp}
}

function gradeClan(Pangkat) {
	switch (Pangkat) {
		case "Newbie":
			dExp = 0;
			nExp = 24000;
			break;
		case "Trainee Grade 1":
			dExp = 24000;
			nExp = 40000;
			break;
		case "Trainee Grade 2":
			dExp = 64000;
			nExp = 48000;
			break;
		case "Novice Grade 1":
			dExp = 112000;
			nExp = 56000;
			break;
		case "Novice Grade 2":
			dExp = 168000;
			nExp = 72000;
			break;
		case "Support Grade 1":
			dExp = 240000;
			nExp = 80000;
			break;
		case "Support Grade 2":
			dExp = 320000;
			nExp = 120000;
			break;
		case "Support Grade 3":
			dExp = 440000;
			nExp = 160000;
			break;
		case "Excellent Grade 1":
			dExp = 600000;
			nExp = 120000;
			break;
		case "Excellent Grade 2":
			dExp = 720000;
			nExp = 200000;
			break;
		case "Excellent Grade 3":
			dExp = 920000;
			nExp = 240000;
			break;
		case "Excellent Grade 4":
			dExp = 1160000;
			nExp = 280000;
			break;
		case "Blackfoot Grade 1":
			dExp = 1440000;
			nExp = 320000;
			break;
		case "Blackfoot Grade 2":
			dExp = 1760000;
			nExp = 360000;
			break;
		case "Blackfoot Grade 3":
			dExp = 2120000;
			nExp = 360000;
			break;
		case "Blackfoot Grade 4":
			dExp = 2480000;
			nExp = 400000;
			break;
		case "Spearhead Grade 1":
			dExp = 2880000;
			nExp = 480000;
			break;
		case "Spearhead Grade 2":
			dExp = 3360000;
			nExp = 560000;
			break;
		case "Spearhead Grade 3":
			dExp = 3920000;
			nExp = 640000;
			break;
		case "Spearhead Perak":
			dExp = 4560000;
			nExp = 720000;
			break;
		case "Spearhead Emas":
			dExp = 5280000;
			nExp = 560000;
			break;
		case "Assaulter Grade 1":
			dExp = 5840000;
			nExp = 640000;
			break;
		case "Assaulter Grade 2":
			dExp = 6480000;
			nExp = 720000;
			break;
		case "Assaulter Grade 3":
			dExp = 7200000;
			nExp = 800000;
			break;
		case "Assaulter Perak":
			dExp = 8000000;
			nExp = 880000;
			break;
		case "Assaulter Emas":
			dExp = 8880000;
			nExp = 960000;
			break;
		case "Battletank Grade 1":
			dExp = 9840000;
			nExp = 1840000;
			break;
		case "Battletank Grade 2":
			dExp = 11680000;
			nExp = 1120000;
			break;
		case "Battletank Grade 3":
			dExp = 12800000;
			nExp = 1200000;
			break;
		case "Battletank Perak":
			dExp = 14000000;
			nExp = 1280000;
			break;
		case "Battletank Emas":
			dExp = 15280000;
			nExp = 1600000;
			break;
		case "Headhunter Grade 1":
			dExp = 16880000;
			nExp = 1920000;
			break;
		case "Headhunter Grade 2":
			dExp = 18800000;
			nExp = 1440000;
			break;
		case "Headhunter Grade 3":
			dExp = 20240000;
			nExp = 2560000;
			break;
		case "Headhunter Perak":
			dExp = 22800000;
			nExp = 2880000;
			break;
		case "Headhunter Emas":
			dExp = 25680000;
			nExp = 3200000;
			break;
		case "Commando Grade 1":
			dExp = 28880000;
			nExp = 3520000;
			break;
		case "Commando Grade 2":
			dExp = 32400000;
			nExp = 3840000;
			break;
		case "Commando Grade 3":
			dExp = 36240000;
			nExp = 4160000;
			break;
		case "Commando Perak":
			dExp = 40400000;
			nExp = 4480000;
			break;
		case "Commando Emas":
			dExp = 44880000;
			nExp = 4800000;
			break;
		case "Special Grade 1":
			dExp = 49680000;
			nExp = 5120000;
			break;
		case "Special Grade 2":
			dExp = 54800000;
			nExp = 5440000;
			break;
		case "Special Grade 3":
			dExp = 60240000;
			nExp = 5760000;
			break;
		case "Special Perak":
			dExp = 66000000;
			nExp = 6080000;
			break;
		case "Special Emas":
			dExp = 72080000;
			nExp = 6800000;
			break;
		case "Gunnery Putih":
			dExp = 78880000;
			nExp = 7200000;
			break;
		case "Gunnery Merah":
			dExp = 86080000;
			nExp = 7600000;
			break;
		case "Gunnery Perunggu":
			dExp = 93680000;
			nExp = 800000;
			break;
		case "Gunnery Perak":
			dExp = 94480000;
			nExp = 920000;
			break;
		case "Gunnery Emas":
			dExp = 103680000;
			nExp = 0;
	}

	return {Exp : dExp, NeedExp : nExp}
}

function removeRow(input) {
	deletedI.push( input );
	$('[name=deleted_i]').val( deletedI.join(',') );
	$(`#input-${ input }`).remove();
}

function imageUpload(name) {
	var a = $(`#${ name }-upload-img`),
		b = $(`#${ name }-upload`),
		c = $(`.${ name }`),
		d = $(`#${ name }-reset`),
		e = $(`#${ name }-delete`),
		f = $(`[name="${ name }-delete"]`);
	if (c) {
		var ss = c.attr("src");
		b.on("change", (function(t) {
			var FR = new FileReader,
				c = t.target.files;
			FR.onload = function() {
                a.removeClass('d-none');
                a.addClass('me-2');
				a && a.attr("src", FR.result)
				f.val("false")
			}, FR.readAsDataURL(c[0])
		})), d.on("click", (function() {
			c.attr("src", ss)
			b.val("");
			f.val("false")
		})), e.on("click", (function() {
			c.attr("src", "")
			f.val("true")
		}))
	}
}