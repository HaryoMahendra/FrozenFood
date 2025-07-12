 <nav class="fixed top-0 left-0 w-full z-50 bg-white/90 backdrop-blur-md text-gray-800 shadow-md">
     <div class="container mx-auto px-6 py-4 flex justify-between items-center">
         <div class="flex items-center space-x-3">
             <img src="{{ asset('asset/Logo.png') }}" alt="Logo" class="h-10 w-10 object-contain">
             <span class="text-2xl font-extrabold tracking-tight">Iwing Food</span>
         </div>

         <div class="hidden md:flex space-x-8 font-medium">
             <a href="{{ url('/') }}" class="hover:text-sky-500 transition">Home</a>
             <a href="{{ route('tentang') }}" class="hover:text-sky-500 transition">Tentang</a>
             <a href="{{ route('kontak') }}" class="hover:text-sky-500 transition">Kontak</a>
         </div>

         <div class="flex items-center space-x-4">
             <!-- Language -->
             {{-- <div class="relative group">
                 <button id="langBtn"
                     class="flex items-center space-x-2 px-2 py-1 rounded-md bg-gray-100 hover:bg-gray-200 transition">
                     <img src="https://flagcdn.com/w40/id.png" alt="ID" class="h-4 w-6 object-cover rounded-sm">
                     <span class="text-sm font-medium">ID</span>
                     <i class="fas fa-chevron-down text-xs"></i>
                 </button>
                 <div id="langDropdown"
                     class="hidden absolute right-0 mt-2 w-40 bg-white rounded-md shadow-lg border border-gray-100 py-2 z-50">
                     <button class="w-full flex items-center px-4 py-2 text-sm hover:bg-gray-100 transition">
                         <img src="https://flagcdn.com/w40/id.png" alt="ID" class="h-4 w-6 mr-2"> Bahasa Indonesia
                     </button>
                     <button class="w-full flex items-center px-4 py-2 text-sm hover:bg-gray-100 transition">
                         <img src="https://flagcdn.com/w40/gb.png" alt="EN" class="h-4 w-6 mr-2"> English
                     </button>
                 </div>
             </div> --}}

             <!-- Theme Toggle -->
             <div class="flex items-center space-x-2">
                 <i class="fas fa-sun text-yellow-500"></i>
                 <label class="relative inline-flex items-center cursor-pointer">
                     <input type="checkbox" value="" class="sr-only peer" id="themeToggleSwitch">
                     <div
                         class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:bg-sky-600 transition duration-300">
                     </div>
                     <div
                         class="absolute left-0.5 top-0.5 bg-white w-5 h-5 rounded-full transition peer-checked:translate-x-full">
                     </div>
                 </label>
                 <i class="fas fa-moon text-gray-700"></i>
             </div>
             <!-- User Profile -->
             <a href="#" class="hover:text-sky-500 transition">
                 <i class="fas fa-user text-lg"></i>
             </a>
             <button class="md:hidden focus:outline-none" id="menuButton">
                 <i class="fas fa-bars text-2xl"></i>
             </button>
         </div>
     </div>
 </nav>

 <script>
     document.addEventListener('DOMContentLoaded', () => {
         // Toggle language dropdown
         const langBtn = document.getElementById('langBtn');
         const langDropdown = document.getElementById('langDropdown');
         langBtn?.addEventListener('click', () => {
             langDropdown.classList.toggle('hidden');
         });

         // Toggle theme (light/dark)
         const themeSwitch = document.getElementById('themeToggleSwitch');
         const body = document.body;
         themeSwitch?.addEventListener('change', () => {
             body.classList.toggle('bg-white');
             body.classList.toggle('bg-gray-900');
             body.classList.toggle('text-gray-800');
             body.classList.toggle('text-white');
         });

         // Close dropdown when clicking outside
         document.addEventListener('click', (e) => {
             if (!langBtn.contains(e.target) && !langDropdown.contains(e.target)) {
                 langDropdown.classList.add('hidden');
             }
         });
     });
 </script>
