@extends('../main')
@section('content')
@include('../navbar')

<style>
.css-6qw8qz {
    border: 1px solid rgba(203, 203, 203, 0.5);
    background: linear-gradient(163.42deg, rgb(50, 50, 62) -107%, rgba(255, 255, 255, 0) 105.46%);
}
.pt-3 {
    padding-top: 0.75rem;
}
.pb-4 {
    padding-bottom: 1rem;
}
.px-4 {
    padding-left: 1rem;
    padding-right: 1rem;
}
.rounded-2xl {
    border-radius: 1rem;
}
@media only screen and (min-width: 1001px)
div {
    display: block;
}
</style>

<main class="relative pt-3 min-h-[50vh]">
    <div class="relative">
        <div class="absolute inset-0 max-h-[9rem] sm:max-h-[11.5rem] md:max-h-[11.5rem] lg:max-h-[14rem]">
            <div class="relative h-full w-full">
                <img
                    alt=""
                    sizes="100vw"
                    srcset="/assets/image/footer.png"
                    src="/assets/image/footer.png"
                    decoding="async"
                    data-nimg="fill"
                    class="object-cover"
                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"
                />
                <div class="absolute inset-0 bg-gray-300 mix-blend-multiply" aria-hidden="true"></div>
                <div class="absolute left-0 top-0 w-full h-full flex items-center justify-center"><h1 class="text-[24px] lg:text-[30px] font-semibold leading-[26px] tracking-[0.2em] text-center">SYARAT &amp; KETENTUAN PENGGUNA</h1></div>
            </div>
        </div>
        <div class="relative mx-auto max-w-7xl py-[5.5rem] lg:py-24 px-4 sm:py-24 sm:px-6 lg:px-8"></div>
    </div>
    <div class="mx-auto max-w-7xl px-4 md:px-8 lg:px-10 pt-2 md:pt-8 lg:pt-10 pb-16 grid grid-cols-12 gap-3 lg:gap-x-[58px]">
        <div class="hidden lg:block lg:col-span-4 mr-5">
            <aside class="sticky top-20">
                <div class="px-4 pt-3 pb-4 rounded-2xl css-6qw8qz">
                    <ul class="flex flex-col gap-1">
                        <li class="font-medium cursor-pointer" style=""><p class="mt-1">1. Ketentuan Umum</p></li>
                        <li class="font-medium] cursor-pointer" style=""><p class="ml-3">1.1. Pendahuluan</p></li>
                        <li class="font-regular cursor-pointer" style=""><p class="ml-3">1.2. Layanan</p></li>
                        <li class="font-regular cursor-pointer" style=""><p class="ml-3">1.3. Pembayaran</p></li>
                        <li class="font-regular cursor-pointer" style=""><p class="ml-3">1.4. Pembatalan</p></li>
                        <li class="font-regular cursor-pointer"><p class="ml-3">1.5. Kembalian</p></li>
                        <li class="font-regular cursor-pointer" style=""><p class="ml-3">1.6. Batasan Tanggung Jawab</p></li>
                        <li class="font-regular cursor-pointer" style=""><p class="ml-3">1.7. Hukum Yang Berlaku</p></li>
                        <li class="font-medium cursor-pointer" style=""><p class="mt-1">2. Akun Pengguna {{ config('app.name') }}</p></li>
                        <li class="font-regular cursor-pointer" style=""><p class="ml-3">2.1. Pendahuluan</p></li>
                        <li class="font-regular cursor-pointer"><p class="ml-3">2.2. Pendaftaran Akun</p></li>
                        <li class="font-regular cursor-pointer" style=""><p class="ml-3">2.3. Keamanan Akun</p></li>
                        <li class="font-regular cursor-pointer" style=""><p class="ml-3">2.4. Penggunaan Akun</p></li>
                        <li class="font-regular cursor-pointer"><p class="ml-3">2.5. Pembatalan Akun</p></li>
                        <li class="font-regular cursor-pointer"><p class="ml-3">2.6. Batasan Tanggung Jawab</p></li>
                        <li class="font-regular cursor-pointer" style=""><p class="ml-3">2.7. Hukum Yang Berlaku</p></li>
                        <li class="font-medium cursor-pointer" style=""><p class="mt-1">3. Penggunaan dan Kepemilikan Kekayaan Intelektual</p></li>
                        <li class="font-regular cursor-pointer"><p class="ml-3">3.1. Pendahuluan</p></li>
                        <li class="font-regular cursor-pointer" style=""><p class="ml-3">3.2. Kepemilikan Kekayaan Intelektual</p></li>
                        <li class="font-regular cursor-pointer" style=""><p class="ml-3">3.3. Penggunaan Aset Intelektual</p></li>
                        <li class="font-regular cursor-pointer" style=""><p class="ml-3">3.4. Batasan Tanggung Jawab</p></li>
                        <li class="font-regular cursor-pointer"><p class="ml-3">3.5. Hukum Yang Berlaku</p></li>
                    </ul>
                </div>
            </aside>
        </div>
        <div id="contents" class="col-span-12 lg:col-span-8 break-words text-justify">
            <div class="flex flex-col gap-8">
                <div class="flex flex-col gap-6">
                    <h2 class="text-xl font-bold">1. Ketentuan Umum</h2>
                    <div class="flex flex-col gap-6">
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold italic">1.1. Pendahuluan</h3>
                            <div class="flex flex-col gap-3">
                                <p class="leading-7">{{ config('app.name') }} menyediakan layanan pembayaran online bagi pelanggannya. Dengan menggunakan layanan kami, pelanggan setuju untuk terikat oleh syarat dan ketentuan ini.</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold italic">1.2. Layanan</h3>
                            <div class="flex flex-col gap-3">
                                <p class="leading-7">
                                    {{ config('app.name') }} menyediakan layanan pembayaran untuk memfasilitasi transaksi ke pelanggan. Kami berhak untuk menolak atau membatalkan transaksi apa pun tanpa pemberitahuan sebelumnya dan tanpa memberikan alasan
                                    apa pun.
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold italic">1.3. Pembayaran</h3>
                            <div class="flex flex-col gap-3">
                                <p class="leading-7">
                                    Pelanggan setuju untuk membayar jumlah yang ditentukan untuk produk atau layanan yang dibeli melalui {{ config('app.name') }}. Kami berhak untuk mengubah harga kami kapan saja tanpa pemberitahuan sebelumnya.
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold italic">1.4. Pembatalan</h3>
                            <div class="flex flex-col gap-3">
                                <p class="leading-7">Pelanggan dapat membatalkan transaksi mereka kapan saja sebelum produk atau layanan diterima. Setelah produk atau layanan diterima, pembatalan tidak lagi dapat dilakukan.</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold italic">1.5. Kembalian</h3>
                            <div class="flex flex-col gap-3">
                                <p class="leading-7">
                                    Kembalian tidak diperbolehkan kecuali jika produk atau layanan yang diterima tidak sesuai dengan deskripsi yang diberikan. Dalam hal ini, pelanggan harus menghubungi {{ config('app.name') }} segera setelah menerima
                                    produk atau layanan untuk meminta pengembalian.
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold italic">1.6. Batasan Tanggung Jawab</h3>
                            <div class="flex flex-col gap-3"><p class="leading-7">{{ config('app.name') }} tidak bertanggung jawab atas kerugian atau kerusakan yang disebabkan oleh penggunaan layanannya.</p></div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold italic">1.7. Hukum Yang Berlaku</h3>
                            <div class="flex flex-col gap-3">
                                <p class="leading-7">
                                    Syarat dan ketentuan ini akan diatur dan diterapkan sesuai dengan hukum yang berlaku di Republik Indonesia. Dengan menggunakan layanan {{ config('app.name') }}, pelanggan setuju untuk terikat oleh syarat dan ketentuan
                                    ini.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-6">
                    <h2 class="text-xl font-bold">2. Akun Pengguna {{ config('app.name') }}</h2>
                    <div class="flex flex-col gap-6">
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold italic">2.1. Pendahuluan</h3>
                            <div class="flex flex-col gap-3">
                                <p class="leading-7">{{ config('app.name') }} menyediakan layanan pembayaran online bagi pelanggannya. Dengan membuka dan menggunakan akun {{ config('app.name') }}, pengguna setuju untuk terikat oleh syarat dan ketentuan ini.</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold italic">2.2. Pendaftaran Akun</h3>
                            <div class="flex flex-col gap-3">
                                <p class="leading-7">
                                    Untuk menggunakan layanan {{ config('app.name') }}, pengguna harus membuka akun dengan memberikan informasi pribadi yang benar dan akurat. {{ config('app.name') }} berhak untuk menolak atau membatalkan akun apa pun tanpa pemberitahuan
                                    sebelumnya dan tanpa memberikan alasan apa pun.
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold italic">2.3. Keamanan Akun</h3>
                            <div class="flex flex-col gap-3">
                                <p class="leading-7">
                                    Pengguna bertanggung jawab untuk menjaga kerahasiaan informasi akun mereka, termasuk kata sandi. {{ config('app.name') }} tidak bertanggung jawab atas kerugian atau kerusakan yang disebabkan oleh penggunaan informasi
                                    akun oleh pihak yang tidak berwenang.
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold italic">2.4. Penggunaan Akun</h3>
                            <div class="flex flex-col gap-3"><p class="leading-7">Pengguna setuju untuk hanya menggunakan akun mereka untuk tujuan yang legal dan tidak melakukan kegiatan yang merugikan {{ config('app.name') }} atau pihak lain.</p></div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold italic">2.5. Pembatalan Akun</h3>
                            <div class="flex flex-col gap-3"><p class="leading-7">{{ config('app.name') }} berhak untuk membatalkan akun apa pun tanpa pemberitahuan sebelumnya dan tanpa memberikan alasan apa pun.</p></div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold italic">2.6. Batasan Tanggung Jawab</h3>
                            <div class="flex flex-col gap-3"><p class="leading-7">{{ config('app.name') }} tidak bertanggung jawab atas kerugian atau kerusakan yang disebabkan oleh penggunaan akun oleh pengguna.</p></div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold italic">2.7. Hukum Yang Berlaku</h3>
                            <div class="flex flex-col gap-3">
                                <p class="leading-7">
                                    Syarat dan ketentuan ini akan diatur dan diterapkan sesuai dengan hukum yang berlaku di Republik Indonesia. Dengan membuka dan menggunakan akun {{ config('app.name') }}, pengguna setuju untuk terikat oleh syarat dan
                                    ketentuan ini.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-6">
                    <h2 class="text-xl font-bold">3. Penggunaan dan Kepemilikan Kekayaan Intelektual</h2>
                    <div class="flex flex-col gap-6">
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold italic">3.1. Pendahuluan</h3>
                            <div class="flex flex-col gap-3">
                                <p class="leading-7">
                                    {{ config('app.name') }} memiliki hak atas semua aset intelektual, termasuk namun tidak terbatas pada merek dagang, nama dagang, logo, dan konten. Pengguna setuju untuk tidak menggunakan aset intelektual {{ config('app.name') }} tanpa
                                    izin tertulis dari {{ config('app.name') }}.
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold italic">3.2. Kepemilikan Kekayaan Intelektual</h3>
                            <div class="flex flex-col gap-3"><p class="leading-7">Semua aset intelektual {{ config('app.name') }} adalah kekayaan intelektual {{ config('app.name') }} dan dilindungi oleh hukum kekayaan intelektual yang berlaku.</p></div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold italic">3.3. Penggunaan Aset Intelektual</h3>
                            <div class="flex flex-col gap-3">
                                <p class="leading-7">
                                    Pengguna setuju untuk tidak menggunakan aset intelektual {{ config('app.name') }} tanpa izin tertulis dari {{ config('app.name') }}. Pengguna juga setuju untuk tidak mengubah, memodifikasi, atau membuat turunan dari aset intelektual
                                    {{ config('app.name') }}.
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold italic">3.4. Batasan Tanggung Jawab</h3>
                            <div class="flex flex-col gap-3"><p class="leading-7">{{ config('app.name') }} tidak bertanggung jawab atas kerugian atau kerusakan yang disebabkan oleh penggunaan yang tidak sah dari aset intelektual {{ config('app.name') }}.</p></div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold italic">3.5. Hukum Yang Berlaku</h3>
                            <div class="flex flex-col gap-3">
                                <p class="leading-7">
                                    Syarat dan ketentuan ini akan diatur dan diterapkan sesuai dengan hukum yang berlaku di Republik Indonesia. Dengan menggunakan layanan {{ config('app.name') }}, pengguna setuju untuk terikat oleh syarat dan ketentuan
                                    ini.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


@include('../footer')
    @endsection