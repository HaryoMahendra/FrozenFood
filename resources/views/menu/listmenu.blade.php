@extends('layouts.app')

@section('content')
    <div class="bg-white">

        {{-- Hero Section --}}
        <header
            class="relative overflow-hidden pt-28 pb-20 bg-gradient-to-br from-sky-300 via-sky-500 to-sky-600 text-white text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Daftar Menu</h1>
            <p class="mt-4 max-w-2xl mx-auto text-lg font-light">Pilih jenis olahan yang kamu inginkan.</p>
        </header>

        {{-- Filter --}}
        <div class="bg-gradient-to-br from-sky-50 via-sky-100 to-white py-6 px-4">
            <div class="max-w-7xl mx-auto">
                <div class="flex flex-wrap gap-4 justify-center">
                    @foreach (['Semua', 'Ikan', 'Ayam', 'Ceker', 'Tempe', 'Hati/Ampela', 'Lainnya'] as $filter)
                        <button
                            class="px-4 py-2 bg-white border border-sky-500 text-sky-600 rounded-full font-medium hover:bg-sky-500 hover:text-white transition duration-300">
                            {{ $filter }}
                        </button>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Menu List --}}
        <div class="bg-gradient-to-br from-sky-50 via-sky-100 to-white py-10">
            <div class="max-w-7xl mx-auto px-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                    @foreach ([
                      ['title' => 'Lele Mangut', 'desc' => 'Ikan lele dengan bumbu kuning yang lezat', 'img' => asset('asset/mangutlele.jpg'), 'rating' => '4.9'],
                      ['title' => 'Rica-Rica Ceker', 'desc' => 'Ceker ayam dengan bumbu pedas dan gurih', 'img' => asset('asset/ricaceker.avif'), 'rating' => '4.8'],
                      ['title' => 'Rica-Rica Ayam', 'desc' => 'Daging ayam dengan bumbu pedas dan gurih', 'img' => asset('asset/ricadagingayam.jpg'), 'rating' => '5.0'],
                      ['title' => 'Kering Tempe', 'desc' => 'Tempe yang dikeringkan dengan bumbu yang gurih', 'img' => asset('asset/keringtempe.jpg'), 'rating' => '4.7'],
                      ['title' => 'Balado Teri dan Kacang', 'desc' => 'Balado teri dengan kacang renyah', 'img' => asset('asset/baladoteridankacang.jpg'), 'rating' => '4.6'],
                      ['title' => 'Panas Hati dan Ampela', 'desc' => 'Ampela pedas dengan sambal khas', 'img' => asset('asset/panashatiampela.webp'), 'rating' => '4.5'],
                      ['title' => 'Krengsengan Hati dan Ampela', 'desc' => 'Krengsengan pedas khas Jawa', 'img' => asset('asset/krengsenganhatiampela.jpg'), 'rating' => '4.4'],
                      ['title' => 'Rendang Ayam', 'desc' => 'Rendang ayam empuk khas Minang', 'img' => asset('asset/rendangayam.webp'), 'rating' => '4.3'],
                      ['title' => 'Garang Asem', 'desc' => 'Olahan ayam dengan kuah asam segar', 'img' => asset('asset/garangasem.jpg'), 'rating' => '4.2'],
                      ['title' => 'Aneka Olahan Lainnya', 'desc' => 'Kreasi menu lainnya siap disajikan', 'img' => asset('asset/'), 'rating' => '4.1'],
                    ] as $menu)
                        <div
                            class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                            <img class="w-full h-48 object-cover" src="{{ $menu['img'] }}" alt="{{ $menu['title'] }}" />
                            <div class="p-5">
                                <h3 class="text-xl font-semibold text-gray-800 mb-1">{{ $menu['title'] }}</h3>
                                <p class="text-gray-600 text-sm mb-3">{{ $menu['desc'] }}</p>
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex items-center text-yellow-500 font-medium text-sm">
                                        <i class="fas fa-star mr-1"></i>
                                        <span class="text-gray-800">{{ $menu['rating'] }}</span>
                                    </div>
                                </div>
                                <button
                                    class="w-full py-2 border border-sky-500 text-sky-600 rounded-full font-semibold transition duration-300 hover:bg-sky-500 hover:text-white">
                                    Pesan Sekarang
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
@endsection
