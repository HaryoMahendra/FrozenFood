@extends('layouts.app')

@section('content')
<div class="bg-white">

    {{-- Hero Section --}}
    <header class="relative overflow-hidden pt-28 pb-20 bg-gradient-to-br from-sky-300 via-sky-500 to-sky-600 text-white text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Tentang Kami</h1>
        <p class="mt-4 max-w-2xl mx-auto text-lg font-light">Kami menyajikan makanan olahan beku yang higienis, bernutrisi, dan praktis, siap disantap kapan saja oleh keluarga Anda.</p>
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none rotate-180">
        </div>
    </header>

    {{-- Misi dan Nilai --}}
    <section class="text-center py-16 px-6 bg-gradient-to-b from-sky-50 via-white to-white">
        <h2 class="text-3xl font-bold text-sky-700">Misi & Nilai Kami</h2>
        <p class="mt-4 text-gray-700 max-w-2xl mx-auto leading-relaxed">
            Memberikan kemudahan dalam menyajikan makanan sehat dengan bahan berkualitas, mengutamakan rasa dan kepuasan pelanggan.
        </p>
        <div class="flex flex-wrap justify-center gap-12 mt-10 text-sky-600">
            <div class="transition-transform transform hover:scale-110">
                <h3 class="text-5xl font-bold">100+</h3>
                <p class="text-gray-600 mt-1">Menu Variatif</p>
            </div>
            <div class="transition-transform transform hover:scale-110">
                <h3 class="text-5xl font-bold">10+</h3>
                <p class="text-gray-600 mt-1">Tahun Melayani</p>
            </div>
        </div>
    </section>

    {{-- Visi --}}
    <section class="bg-sky-600 text-white py-16 px-6">
        <h2 class="text-3xl font-bold text-center">Visi Kami</h2>
        <p class="mt-4 text-center max-w-2xl mx-auto leading-relaxed">
            Menjadi pilihan utama keluarga Indonesia dalam memenuhi kebutuhan makanan beku dan siap saji yang bernutrisi.
        </p>
    </section>

    {{-- Teknologi & Inovasi --}}
    <section class="bg-gray-100 py-16 px-6">
        <h2 class="text-3xl font-bold text-center text-sky-700">Teknologi & Inovasi</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-10 max-w-5xl mx-auto">
            @foreach ([
                ['Penyimpanan Dingin Modern', 'Produk kami disimpan dengan sistem cold storage yang menjaga kesegaran dan kualitas.'],
                ['Distribusi Cepat', 'Pengiriman cepat dan aman ke seluruh Indonesia dengan mitra logistik terpercaya.'],
                ['E-commerce Terintegrasi', 'Nikmati pengalaman belanja online yang mudah dan aman di website kami.'],
                ['Sertifikasi Keamanan Pangan', 'Kami mematuhi standar keamanan dan higienitas pangan yang ketat.'],
            ] as [$title, $desc])
                <div class="p-6 bg-white shadow-md rounded-lg hover:shadow-xl transition">
                    <h3 class="text-xl font-bold text-sky-700">{{ $title }}</h3>
                    <p class="mt-2 text-gray-700">{{ $desc }}</p>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Komitmen Pelayanan --}}
    <section class="text-center py-16 px-6 bg-white">
        <h2 class="text-3xl font-bold text-sky-700">Komitmen Kami</h2>
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-6 mt-10">
            @foreach (['Kepuasan Pelanggan', 'Dukungan 24/7', 'Harga Terjangkau', 'Kualitas Premium'] as $item)
                <div class="p-6 bg-sky-100 rounded-lg shadow hover:bg-sky-200 transition">
                    <h3 class="text-xl font-semibold text-sky-800">{{ $item }}</h3>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Testimoni --}}
    <section class="bg-sky-600 text-white py-16 px-6 text-center">
        <h2 class="text-3xl font-bold">Apa Kata Pelanggan Kami</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-10 max-w-6xl mx-auto">
            @foreach ([
                ['"Frozen food dari Iwing Food sangat praktis dan rasanya enak banget! Anak-anak juga suka."', 'Ibu Rina'],
                ['"Pelayanan cepat dan produk sampai dalam kondisi baik. Saya langganan terus."', 'Bapak Dedi'],
                ['"Cocok untuk bekal kerja dan hemat waktu masak di rumah. Terima kasih!"', 'Sari A.']
            ] as [$testimonial, $author])
                <div class="p-6 bg-sky-700 rounded-lg shadow-md">
                    <p class="italic">“{{ $testimonial }}”</p>
                    <h3 class="mt-4 font-semibold">- {{ $author }}</h3>
                </div>
            @endforeach
        </div>
    </section>

    {{-- FAQ --}}
    <section class="text-center py-16 px-6 bg-white">
        <h2 class="text-3xl font-bold text-sky-700">Pertanyaan yang Sering Diajukan</h2>
        <div class="mt-10 max-w-3xl mx-auto text-left space-y-6">
            @foreach ([
                ['Bagaimana cara memesan produk?', 'Anda dapat memesan langsung melalui website kami dengan proses yang cepat dan aman.'],
                ['Apakah produknya halal dan aman dikonsumsi?', 'Ya, semua produk kami telah bersertifikat halal dan lulus uji BPOM.'],
                ['Apakah ada layanan pengiriman ke luar kota?', 'Kami melayani pengiriman ke berbagai kota besar di Indonesia dengan sistem pengemasan dingin.']
            ] as [$question, $answer])
                <div class="p-4 border rounded-lg shadow-sm transition hover:shadow-md bg-white">
                    <h3 class="text-xl font-semibold text-sky-700">{{ $question }}</h3>
                    <p class="mt-2 text-gray-700">{{ $answer }}</p>
                </div>
            @endforeach
        </div>
    </section>

</div>
@endsection