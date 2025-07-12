<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IwingFood - Olahan Berbagai Makanan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-white text-gray-800">
    @include('partials.navbar')

    <section
        class="relative overflow-hidden pt-28 pb-20 bg-gradient-to-br from-sky-300 via-sky-500 to-sky-600 text-white">
        <div class="absolute -top-20 -right-20 w-96 h-96 bg-white/10 rounded-full blur-3xl animate-ping"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="text-center lg:text-left">
                    <h1 class="text-5xl font-extrabold mb-5 leading-tight drop-shadow-md">Frozen & Siap Makan Lezat</h1>
                    <p class="text-lg md:text-xl mb-8 max-w-xl drop-shadow">Nikmati kelezatan praktis dengan pilihan
                        frozen food dan makanan siap saji, cocok untuk segala suasana.</p>
                       
                    <a href="{{ route('listmenu') }}"
                        class="inline-block bg-white text-sky-700 font-semibold py-3 px-6 rounded-xl shadow hover:shadow-xl hover:bg-sky-100 transition-transform transform hover:-translate-y-1 hover:scale-105">
                        Lihat Menu
                    </a>
                </div>
                <div class="relative group">
                    <div class="absolute inset-0 bg-white/10 rounded-2xl backdrop-blur-sm"></div>
                    <img src="{{ asset('asset/Label.png') }}" alt="Frozen Food"
                        class="relative z-10 w-full object-contain rounded-2xl shadow-2xl transition-transform duration-500 ease-in-out group-hover:scale-105 group-hover:rotate-1">
                    <div class="absolute -top-5 -right-5 w-24 h-24 bg-sky-200 rounded-full opacity-30 animate-pulse">
                    </div>
                    <div
                        class="absolute -bottom-5 -left-5 w-20 h-20 bg-lime-200 rounded-full opacity-30 animate-pulse delay-1000">
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-6 mt-10">
                <div
                    class="bg-white text-sky-700 rounded-xl p-6 text-center shadow-lg hover:shadow-xl transition transform hover:scale-105">
                    <div class="text-4xl mb-3 animate-bounce">🍽️</div>
                    <p class="text-lg font-semibold">Siap Makan</p>
                </div>
                <div
                    class="bg-white text-sky-700 rounded-xl p-6 text-center shadow-lg hover:shadow-xl transition transform hover:scale-105">
                    <div class="text-4xl mb-3 animate-bounce delay-150">❄️</div>
                    <p class="text-lg font-semibold">Frozen Food</p>
                </div>
            </div>
        </div>
    </section>


    <section class="py-16 container mx-auto px-4">
        <h2 class="text-4xl font-bold mb-10 text-center text-sky-600">🌟 Best Seller</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            <!-- Product Card Template -->
            <div
                class="bg-white rounded-2xl shadow hover:shadow-2xl transition-transform transform hover:-translate-y-1">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1518977676601-b53f82aba655?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                        alt="Organic Tomatoes" class="w-full h-52 object-cover rounded-t-2xl">
                    <span
                        class="absolute top-3 left-3 bg-green-500 text-white text-xs px-3 py-1 rounded-full shadow">Organic</span>
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-semibold mb-1">Fresh Organic Tomatoes</h3>
                    <p class="text-gray-500 text-sm mb-3">Homegrown, pesticide-free</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sky-600 font-bold">$2.50/lb</span>
                        <button
                            class="bg-sky-500 text-white px-4 py-1.5 rounded-lg hover:bg-sky-600 text-sm">Trade</button>
                    </div>
                </div>
            </div>

            <!-- Repeat Cards with variation -->
            <div
                class="bg-white rounded-2xl shadow hover:shadow-2xl transition-transform transform hover:-translate-y-1">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1568702846914-96b305d2aaeb?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                        alt="Sourdough Bread" class="w-full h-52 object-cover rounded-t-2xl">
                    <span
                        class="absolute top-3 left-3 bg-yellow-500 text-white text-xs px-3 py-1 rounded-full shadow">Baked</span>
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-semibold mb-1">Sourdough Bread</h3>
                    <p class="text-gray-500 text-sm mb-3">Freshly baked today</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sky-600 font-bold">$5.00/loaf</span>
                        <button
                            class="bg-sky-500 text-white px-4 py-1.5 rounded-lg hover:bg-sky-600 text-sm">Trade</button>
                    </div>
                </div>
            </div>

            <div
                class="bg-white rounded-2xl shadow hover:shadow-2xl transition-transform transform hover:-translate-y-1">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1550583724-b2692b85b150?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                        alt="Farm Eggs" class="w-full h-52 object-cover rounded-t-2xl">
                    <span
                        class="absolute top-3 left-3 bg-blue-500 text-white text-xs px-3 py-1 rounded-full shadow">Farm
                        Fresh</span>
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-semibold mb-1">Free-range Eggs</h3>
                    <p class="text-gray-500 text-sm mb-3">Dozen, collected yesterday</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sky-600 font-bold">$3.50/dozen</span>
                        <button
                            class="bg-sky-500 text-white px-4 py-1.5 rounded-lg hover:bg-sky-600 text-sm">Trade</button>
                    </div>
                </div>
            </div>

            <div
                class="bg-white rounded-2xl shadow hover:shadow-2xl transition-transform transform hover:-translate-y-1">
                <div class="relative">
                    <img src="https://www.thecountrycook.net/wp-content/uploads/2023/04/thumbnail-Homemade-Strawberry-Jam-scaled.jpg"
                        alt="Strawberry Jam" class="w-full h-52 object-cover rounded-t-2xl">
                    <span
                        class="absolute top-3 left-3 bg-red-500 text-white text-xs px-3 py-1 rounded-full shadow">Homemade</span>
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-semibold mb-1">Strawberry Jam</h3>
                    <p class="text-gray-500 text-sm mb-3">Small batch, no preservatives</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sky-600 font-bold">$4.00/jar</span>
                        <button
                            class="bg-sky-500 text-white px-4 py-1.5 rounded-lg hover:bg-sky-600 text-sm">Trade</button>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold mb-10 text-center text-sky-600">🥘 Telusuri Jenis Olahan</h2>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">
                <a href="#" class="bg-white rounded-xl shadow-md p-5 text-center hover:shadow-xl transition">
                    <div class="text-sky-500 mb-3">
                        <i class="fa-solid fa-fish text-4xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-700">Ikan</h3>
                </a>

                <a href="#" class="bg-white rounded-xl shadow-md p-5 text-center hover:shadow-xl transition">
                    <div class="text-yellow-500 mb-3">
                        <i class="fa-solid fa-drumstick-bite text-4xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-700">Ayam</h3>
                </a>

                <a href="#" class="bg-white rounded-xl shadow-md p-5 text-center hover:shadow-xl transition">
                    <div class="text-orange-500 mb-3">
                        <i class="fa-solid fa-carrot text-4xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-700">Sayur</h3>
                </a>

                <a href="#" class="bg-white rounded-xl shadow-md p-5 text-center hover:shadow-xl transition">
                    <div class="text-blue-500 mb-3">
                        <i class="fas fa-bread-slice text-4xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-700">Tempe</h3>
                </a>

                <a href="#" class="bg-white rounded-xl shadow-md p-5 text-center hover:shadow-xl transition">
                    <div class="text-pink-500 mb-3">
                        <i class="fa-solid fa-heart text-4xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-700">Hati & Ampela</h3>
                </a>

                <a href="#" class="bg-white rounded-xl shadow-md p-5 text-center hover:shadow-xl transition">
                    <div class="text-red-500 mb-3">
                        <i class="fa-solid fa-pepper-hot text-4xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-700">Sambal</h3>
                </a>
            </div>
        </div>
    </section>


    {{-- <main class="mt-20">
        @yield('content')
    </main> --}}

    @include('partials.footer')


    <div class="fixed inset-0 bg-black bg-opacity-75 z-50 hidden" id="mobileMenu">
        <div class="bg-green-600 h-full w-3/4 max-w-sm p-4">
            <div class="flex justify-between items-center mb-8">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-utensils text-2xl"></i>
                    <span class="text-xl font-bold">FoodSwap</span>
                </div>
                <button id="closeMenu" class="text-2xl">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <nav class="space-y-4">
                <a href="#" class="block py-2 px-4 bg-green-700 rounded">Home</a>
                <a href="#" class="block py-2 px-4 hover:bg-green-700 rounded">Browse</a>
                <a href="#" class="block py-2 px-4 hover:bg-green-700 rounded">Sell/Trade</a>
                <a href="#" class="block py-2 px-4 hover:bg-green-700 rounded">About</a>
                <a href="#" class="block py-2 px-4 hover:bg-green-700 rounded">Contact</a>
                <a href="#" class="block py-2 px-4 hover:bg-green-700 rounded">My Account</a>
            </nav>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenu = document.getElementById('mobileMenu');
            const menuButton = document.getElementById('menuButton');
            const closeButton = document.getElementById('closeMenu');

            menuButton?.addEventListener('click', function() {
                mobileMenu.classList.remove('hidden');
            });

            closeButton?.addEventListener('click', function() {
                mobileMenu.classList.add('hidden');
            });
        });
    </script>
</body>

</html>
