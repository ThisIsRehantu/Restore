@extends('../main')
@section('content')
@include('../navbar')


<style>
    .rounded-2xl {
    border-radius: 1rem;
}
.rounded-2xl {
    border-radius: 1rem;
}

.css-scrciq {
    border: 1px solid rgba(203, 203, 203, 0.5);
    background: linear-gradient(163.42deg, rgb(50, 50, 62) -50%, rgba(255, 255, 255, 0) 105.46%);
}

@media (min-width: 768px)
.md\:text-xl {
    font-size: 1.25rem;
    line-height: 1.75rem;
}
.tracking-\[0\.2em\] {
    letter-spacing: .2em;
}
.leading-\[26px\] {
    line-height: 26px;
}
.font-semibold {
    font-weight: 600;
}
.text-lg {
    font-size: 1.125rem;
    line-height: 1.75rem;
}
.mb-8 {
    margin-bottom: 2rem;
}
blockquote, dd, dl, figure, h1, h2, h3, h4, h5, h6, hr, p, pre {
    margin: 0;
}
h1, h2, h3, h4, h5, h6 {
    font-size: inherit;
    font-weight: inherit;
}
</style>

<main class="pt-3 min-h-[50vh]">
    <div class="relative">
        <div class="absolute inset-0 max-h-[9rem] sm:max-h-[11.5rem] md:max-h-[11.5rem] lg:max-h-[14rem]">
            <div class="relative h-full w-full">
                <img
                    alt=""
                    sizes="100vw"
                    srcset="
                       /assets/image/footer.png
                    "
                    src="/assets/image/footer.png"
                    decoding="async"
                    data-nimg="fill"
                    class="object-cover"
                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"
                />
                <div class="absolute inset-0 bg-gray-300 mix-blend-multiply" aria-hidden="true"></div>
                <div class="absolute left-0 top-0 w-full h-full flex items-center justify-center"><h1 class="text-[24px] lg:text-[30px] font-semibold leading-[26px] tracking-[0.2em] text-center">TENTANG KAMI</h1></div>
            </div>
        </div>
        <div class="relative mx-auto max-w-7xl py-[5.5rem] lg:py-24 px-4 sm:py-24 sm:px-6 lg:px-8"></div>
    </div>
    <div class="mx-auto max-w-7xl px-4 md:px-8 lg:px-10 pt-2 md:pt-8 lg:pt-10 pb-16 flex flex-col gap-12 md:gap-16 lg:gap-20">
        <div class="flex flex-col">
            <h2 class="text-lg md:text-xl lg:text-2xl font-semibold leading-[26px] tracking-[0.2em] mb-8 text-center mt-4">Sejarah {{ config('app.name') }}</h2>
            <div class="rounded-2xl css-scrciq">
                <div class="flex flex-col">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-3 md:gap-8 lg:gap-10 p-6 border-b border-[#626274]">
                        <p class="text-justify leading-7">
                            Seorang pengusaha muda memiliki passion dalam dunia gaming dan melihat banyak pemain game kesulitan dalam melakukan top up atau pembelian item game. Oleh karena itu, ia memutuskan untuk memulai bisnis baru yang
                            dikenal sebagai {{ config('app.name') }} pada tahun 2019. {{ config('app.name') }} adalah Platform website top up game termurah, tercepat, dan terpercaya di Indonesia. Proses cepat membuat Anda nyaman Top Up disini. Dengan Menyediakan berbagai macam pembayaran Transfer Bank, E-Wallet, Scan QR, Alfamart, & Indomart dan pasti memudahkan anda untuk Top Up akun games kalian.
                        </p>
                        <p class="text-justify leading-7">
                            {{ config('app.name') }} memiliki jaringan kerja sama dengan berbagai publisher game, memudahkan pemain game untuk melakukan top up untuk game-game tersebut. Bisnis ini terus berkembang dan memperluas jangkauannya, dan pada
                            tahun 2021 menjadi salah satu website top up game terkemuka di Indonesia. Pelanggan dapat melakukan top up game dengan mudah dan aman. Bisnis ini terus berupaya untuk meningkatkan layanannya dengan menambah fitur
                            baru seperti top up melalui aplikasi mobile dan integrasi dengan beberapa publisher game terkemuka.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2">
                        <div class="p-6 flex lg:flex-row md:flex-row flex-col border-b lg:border-b-0 md:border-b-0 md:border-r lg:border-r border-[#626274] gap-3 items-start">
                            <img src="/assets/icons/visi.svg" alt="icon-visi" width="60" height="60" />
                            <div class="flex flex-col gap-3">
                                <h3 class="text-[20px] font-semibold">Visi</h3>
                                <p class="leading-7">Menjadi layanan top up game terkemuka dan terpercaya bagi pemain game di seluruh dunia.</p>
                            </div>
                        </div>
                        <div class="p-6 flex lg:flex-row md:flex-row flex-col gap-3 items-start">
                            <img src="/assets/icons/misi.svg" alt="icon-misi" width="60" height="60" />
                            <div class="flex flex-col gap-3">
                                <h3 class="text-[20px] font-semibold">Misi</h3>
                                <p class="leading-7">Memberikan layanan top up game yang cepat, mudah, dan aman bagi pemain game dengan layanan pelanggan yang responsif dan memuaskan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col">
            <h2 class="text-lg md:text-xl lg:text-2xl font-semibold leading-[26px] tracking-[0.2em] mb-8">CEO &amp; CO-FOUNDER</h2>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-3 lg:grid-cols-3 lg:gap-20">
                <div class="relative h-[460px] md:h-[480px] lg:h-[500px] w-full bg-gray-700 rounded-xl">
                    <img
                        alt="ceo-image"
                        sizes="100vw"
                        srcset="/assets/banner/pemilik.jpg"
                        src="/assets/banner/pemilik.png"
                        decoding="async"
                        data-nimg="fill"
                        class="object-cover object-center rounded-[15px]"
                        loading="lazy"
                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"
                    />
                    <div
                        class="absolute bottom-0 w-full bg-opacity-0 backdrop-blur-xl backdrop-filter transition-colors duration-1000 bg-transparent border-l-1 min-h-1/3 rounded-bl-[15px] rounded-t-[20px] rounded-br-[15px] grid px-[18px] py-4 gap-4"
                    >
                        <div>
                            <p class="text-[20px] md:text-[20px] lg:text-[20px] font-bold">{{ config('app.name') }} </p>
                            <p class="text-[15px] md:text-[15px] lg:text-[15px] font-medium">CEO</p>
                        </div>
                        <p class="text-[14px] md:text-[14px] lg:text-[14px] text-justify">Mengawasi strategi dan pelaksanaan {{ config('app.name') }} agar perusahaan mencapai tujuan bisnisnya.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col">
            <h2 class="text-lg md:text-xl lg:text-2xl font-semibold leading-[26px] tracking-[0.2em] mb-8">KONTAK KAMI</h2>
            <div class="flex lg:flex-row md:flex-row flex-col gap-4 md:items-start lg:items-start">
                <img alt="icon-misi" srcset="/assets/icons/alamat.svg 1x, /assets/icons/alamat.svg 2x" src="/assets/icons/alamat.svg" width="60" height="60" decoding="async" data-nimg="1" loading="lazy" style="color: transparent;" />
                <p class="leading-7">
                    <strong>{{ config('app.name') }}</strong> <br />
                    @foreach($web_seting as $p)
                    <i class="fas fa-envelope " aria-hidden="true"></i> : {{$p->email_admin}}<br>
                    <i class="fab fa-whatsapp"></i> : {{$p->wa_admin}}<br>
                </p>
            </div>
        </div>@endforeach
    </div>
</main>


@include('../footer')
  @endsection