@extends('layouts.app')

@section('content')
    <div class="bg-white">
        <header class="bg-green-600 text-white text-center py-12 mt-0">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Kontak Saya</h1>
        </header>
        <section class="text-center py-12 px-4">
            <h2 class="text-2xl font-bold">Hubungi Kontak di Bawah Ini</h2>
            <p class="mt-4 text-gray-700 max-w-2xl mx-auto">Hubungi saya melalui salah satu metode berikut untuk membeli.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 mt-8 animate-fadeIn">
                <div class="p-4 shadow-lg rounded-lg bg-green-100 hover:bg-green-200 transition-colors">
                    <h3 class="text-xl font-bold">Call Us</h3>
                    <p class="text-gray-700 mt-2">+1 123 456 7890</p>
                </div>
                <div class="p-4 shadow-lg rounded-lg bg-green-100 hover:bg-green-200 transition-colors">
                    <h3 class="text-xl font-bold">Email Us</h3>
                    <p class="text-gray-700 mt-2">contact@wisedoctors.com</p>
                </div>
                <div class="p-4 shadow-lg rounded-lg bg-green-100 hover:bg-green-200 transition-colors">
                    <h3 class="text-xl font-bold">Visit Us</h3>
                    <p class="text-gray-700 mt-2">123 Health St, Wellness City</p>
                </div>
            </div>
        </section>
        <section class="bg-gray-100 py-12 px-4">
            <h2 class="text-2xl font-bold text-center">Send Us A Message</h2>
            <div class="max-w-6xl mx-auto mt-8 grid grid-cols-1 md:grid-cols-2 gap-8">
                {{-- Form --}}
                <form class="space-y-6">
                    <div>
                        <label for="name" class="block text-gray-700 font-bold">Name</label>
                        <input type="text" id="name"
                            class="w-full mt-2 p-3 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 transition" />
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700 font-bold">Email</label>
                        <input type="email" id="email"
                            class="w-full mt-2 p-3 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 transition" />
                    </div>
                    <div>
                        <label for="message" class="block text-gray-700 font-bold">Message</label>
                        <textarea id="message" rows="5"
                            class="w-full mt-2 p-3 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 transition"></textarea>
                    </div>
                    <button type="submit"
                        class="w-full bg-green-700 text-white py-3 rounded-lg shadow-lg hover:bg-green-600 transition-colors">Send
                        Message</button>
                </form>

                {{-- Map --}}
                <div class="w-full h-full">
                    <iframe src="https://www.google.com/maps?q=-7.6472642,111.5284371&hl=id&z=18&output=embed"
                        width="100%" height="100%" style="min-height: 400px;" allowfullscreen="" loading="lazy"
                        class="rounded-lg shadow-md">
                    </iframe>
                </div>
            </div>
        </section>
    </div>
@endsection
