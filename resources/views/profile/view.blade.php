@extends('layouts.app')

@section('content')
<div class="bg-sky-50 min-h-screen py-12">
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-xl overflow-hidden animate-fade-in">
        {{-- Header --}}
        <div class="bg-sky-600 h-36 relative">
            <div class="absolute left-6 bottom-[-40px]">
                <img src="https://ui-avatars.com/api/?name=User+Name" class="w-24 h-24 rounded-full border-4 border-white shadow-md" alt="Avatar">
            </div>
        </div>

        {{-- Content --}}
        <div class="px-6 pt-16 pb-10">
            <h2 class="text-2xl font-semibold text-gray-800">Nama Pengguna</h2>
            <p class="text-gray-500">nama@email.com</p>
            <span class="text-sm mt-2 inline-block px-3 py-1 bg-sky-100 text-sky-700 rounded-full">
                Role: Pelanggan
            </span>

            {{-- Tabs --}}
            <div class="mt-8 border-b border-sky-200">
                <nav class="flex gap-6 text-sky-600 font-medium">
                    <button class="border-b-2 border-sky-600 pb-2">Profil</button>
                    <button class="hover:text-sky-800 transition">Ganti Password</button>
                    <button class="hover:text-sky-800 transition">Pesanan</button>
                </nav>
            </div>

            {{-- Profile Info --}}
            <div class="mt-8 space-y-5">
                <div class="flex justify-between items-center">
                    <span class="text-gray-600">Nama Lengkap</span>
                    <span class="text-gray-800 font-medium">Nama Pengguna</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-600">Email</span>
                    <span class="text-gray-800 font-medium">nama@email.com</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-600">Terdaftar Sejak</span>
                    <span class="text-gray-800 font-medium">12 Januari 2024</span>
                </div>
            </div>

            {{-- Action --}}
            <div class="mt-10">
                <a href="#"
                   class="inline-block bg-red-100 text-red-600 px-4 py-2 rounded-lg hover:bg-red-200 transition">
                    Logout
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
