    @extends('layouts.app')

    @section('title', 'Beranda - Gunung Merbabu')

    @section('content')
        <!-- Enhanced Hero Section with Parallax -->
        <section class="hero relative overflow-hidden min-h-screen flex items-center pt-2">
            <!-- pt-16 = padding top sebesar tinggi navbar -->
            <!-- Background with Parallax Effect -->
            <div class="absolute inset-0 parallax-bg -z-10"> <!-- pastikan z-index di belakang konten -->
                <img src="{{ asset('images/merbabusabana.jpg') }}" alt="Gunung Merbabu"
                    class="w-full h-full object-cover scale-110 transition-transform duration-1000 ease-out">
                <div class="absolute inset-0 bg-gradient-to-br from-black/40 via-transparent to-black/60"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
            </div>

            <!-- Floating Particles -->
            <div class="absolute inset-0">
                <div class="particle absolute top-20 left-20 w-2 h-2 bg-white/30 rounded-full animate-pulse"></div>
                <div class="particle absolute top-40 right-32 w-1 h-1 bg-green-400/50 rounded-full animate-ping"></div>
                <div class="particle absolute bottom-40 left-40 w-3 h-3 bg-blue-400/40 rounded-full animate-bounce"></div>
                <div class="particle absolute top-60 right-20 w-1.5 h-1.5 bg-white/40 rounded-full animate-pulse"></div>
            </div>

            <!-- Main Hero Content -->
            <div class="relative z-10 w-full">
                <div class="max-w-6xl mx-auto px-4 text-center">
                    <!-- Animated Title -->
                    <div class="mb-8">
                        <h1 class="text-4xl md:text-6xl lg:text-7xl font-black text-white leading-tight animate-fade-in-up">
                            Keajaiban
                            <span
                                class="block text-transparent bg-clip-text bg-gradient-to-r from-green-400 via-emerald-300 to-blue-400 animate-gradient">
                                Gunung Merbabu
                            </span>
                        </h1>

                        <div class="w-24 h-1 bg-gradient-to-r from-green-400 to-blue-400 mx-auto mt-6 rounded-full"></div>
                    </div>

                    <!-- Enhanced Quote -->
                    <p class="text-xl md:text-2xl text-white font-light italic leading-relaxed">
                        "Setiap keberanian memulai perjalanan menuju kisah yang tak terlupakan" </p>
                    <div class="flex items-center justify-center mt-4 space-x-2">
                        <div class="w-8 h-0.5 bg-green-400"></div>
                        <svg class="w-6 h-6 text-green-400" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                        <div class="w-8 h-0.5 bg-blue-400"></div>
                    </div>

                    <!-- Enhanced CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                        <a href="#about"
                            class="group bg-gradient-to-r from-green-600 via-green-500 to-emerald-500 hover:from-green-700 hover:via-green-600 hover:to-emerald-600 text-white px-10 py-4 rounded-full font-bold text-lg transition-all duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center space-x-3">
                            <span>Jelajahi Keindahan</span>
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                        <a href="{{ route('panduan') }}"
                            class="group border-2 border-white/80 text-white hover:bg-white hover:text-gray-800 px-10 py-4 rounded-full font-bold text-lg transition-all duration-300 backdrop-blur-sm flex items-center space-x-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                            <span>Panduan Lengkap</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>



        <!-- Enhanced About Section with Interactive Elements -->
        <section id="about"
            class="py-24 bg-gradient-to-br from-slate-900 via-gray-900 to-slate-800 text-white relative overflow-hidden">
            <!-- Animated Background -->
            <div class="absolute inset-0">
                <div class="absolute top-20 left-20 w-96 h-96 bg-green-600/10 rounded-full blur-3xl animate-pulse"></div>
                <div
                    class="absolute bottom-20 right-20 w-80 h-80 bg-blue-600/10 rounded-full blur-3xl animate-pulse delay-1000">
                </div>
            </div>

            <div class="max-w-7xl mx-auto px-4 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <!-- Content Side -->
                    <div class="space-y-8">
                        <div>
                            <h2 class="text-5xl md:text-6xl font-black mb-6">
                                <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-400">
                                    Tentang
                                </span>
                                <br>Gunung Merbabu
                            </h2>
                            <div class="w-20 h-1 bg-gradient-to-r from-green-400 to-blue-400 rounded-full"></div>
                        </div>

                        <div class="space-y-6 text-lg leading-relaxed text-gray-300">
                            <p>
                                Gunung Merbabu adalah <strong class="text-white">gunung berapi</strong> yang terletak di
                                perbatasan Kabupaten Magelang dan Kabupaten Boyolali, Jawa Tengah. Dengan ketinggian <strong
                                    class="text-green-400">3.145 meter</strong> di atas permukaan laut, Merbabu menawarkan
                                keindahan padang sabana yang memukau dan sunrise yang tak terlupakan.
                            </p>
                            <p>
                                Dikenal dengan julukan <strong class="text-blue-400">"Gunung Sabana"</strong>, Merbabu
                                memiliki
                                5 jalur pendakian utama yang masing-masing menawarkan pengalaman berbeda. Jalur paling
                                populer
                                adalah via Selo, Wekas, dan Suwanting.
                            </p>
                        </div>

                        <!-- Interactive Info Cards -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div
                                class="glass-effect p-6 rounded-2xl border border-white/10 hover:border-green-400/50 transition-all duration-300">
                                <div class="flex items-center space-x-3 mb-3">
                                    <div class="w-10 h-10 bg-green-500 rounded-lg flex items-center justify-center">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7" />
                                        </svg>
                                    </div>
                                    <h4 class="font-bold text-white text-lg">Jalur Populer</h4>
                                </div>
                                <p class="text-gray-300">Selo, Wekas, Suwanting</p>
                            </div>

                            <div
                                class="glass-effect p-6 rounded-2xl border border-white/10 hover:border-blue-400/50 transition-all duration-300">
                                <div class="flex items-center space-x-3 mb-3">
                                    <div class="w-10 h-10 bg-blue-500 rounded-lg flex items-center justify-center">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <h4 class="font-bold text-white text-lg">Waktu Terbaik</h4>
                                </div>
                                <p class="text-gray-300">April - Oktober</p>
                            </div>
                        </div>
                    </div>

                    <!-- Image Side with Enhanced Design -->
                    <div class="relative">
                        <div
                            class="relative rounded-3xl overflow-hidden shadow-2xl transform hover:scale-105 transition-transform duration-500">
                            <img src="{{ asset('images/merbabubu.jpg') }}" alt="Sabana Merbabu"
                                class="w-full h-96 lg:h-[500px] object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent">
                            </div>
                        </div>

                        <!-- Decorative Elements -->
                        <div class="absolute -top-4 -right-4 w-24 h-24 border-2 border-green-400/30 rounded-full"></div>
                        <div class="absolute -bottom-4 -right-4 w-16 h-16 bg-blue-400/20 rounded-full blur-sm"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Enhanced Hiking Routes with Interactive Cards -->
        <section class="py-24 bg-gradient-to-br from-gray-50 via-white to-blue-50 relative overflow-hidden">
            <!-- Background Pattern -->
            <div class="absolute inset-0 opacity-5">
                <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <pattern id="grid" width="32" height="32" patternUnits="userSpaceOnUse">
                            <path d="M 32 0 L 0 0 0 32" fill="none" stroke="#059669" stroke-width="1" />
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#grid)" />
                </svg>
            </div>


            <div class="max-w-7xl mx-auto px-4 relative z-10">
                <!-- Section Header -->

                <div class="text-center mb-20">
                    <div
                        class="inline-flex items-center space-x-2 bg-green-100 text-green-800 px-4 py-2 rounded-full text-sm font-medium mb-6">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                        <span>Pilihan Jalur Pendakian</span>
                    </div>
                    <h3 class="text-5xl md:text-6xl font-black text-gray-800 mb-6">
                        <span class="gradient-text">Jalur Pendakian</span>
                    </h3>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Pilih jalur yang sesuai dengan pengalaman dan
                        kemampuan
                        Anda untuk petualangan yang tak terlupakan</p>
                </div>

                <!-- Route Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Route 1: Via Selo -->
                    <div
                        class="group bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4 overflow-hidden border border-gray-100">
                        <div class="relative">
                            <div
                                class="h-48 bg-gradient-to-br from-green-400 via-green-500 to-emerald-600 flex items-center justify-center">
                                <div class="text-center text-white">
                                    <div
                                        class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                                        <span class="text-3xl font-black">1</span>
                                    </div>
                                    <h4 class="text-2xl font-bold">Via Selo</h4>
                                </div>
                            </div>
                            <div class="absolute top-4 right-4">
                                <span
                                    class="bg-white/20 backdrop-blur-sm text-white px-3 py-1 rounded-full text-sm font-medium">
                                    Populer
                                </span>
                            </div>
                        </div>

                        <div class="p-8">
                            <p class="text-gray-600 mb-6 leading-relaxed">Jalur paling populer dengan pemandangan terbaik.
                                Cocok untuk pendaki pemula hingga menengah dengan sabana yang memukau.</p>
                            <div class="space-y-4 mb-6">
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center">
                                        <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <span class="text-gray-700">Waktu tempuh: <strong>4-5 jam</strong></span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center">
                                        <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                                        </svg>
                                    </div>
                                    <span class="text-gray-700">Tingkat: <strong>Sedang</strong></span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center">
                                        <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>
                                    <span class="text-gray-700">View: <strong>Sabana luas</strong></span>
                                </div>
                            </div>

                            <button
                                class="w-full bg-gradient-to-r from-green-500 to-emerald-500 hover:from-green-600 hover:to-emerald-600 text-white py-3 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105">
                                Pilih Jalur Ini
                            </button>
                        </div>
                    </div>

                    <!-- Route 2: Via Wekas -->
                    <div
                        class="group bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4 overflow-hidden border border-gray-100">
                        <div class="relative">
                            <div
                                class="h-48 bg-gradient-to-br from-blue-400 via-blue-500 to-indigo-600 flex items-center justify-center">
                                <div class="text-center text-white">
                                    <div
                                        class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                                        <span class="text-3xl font-black">2</span>
                                    </div>
                                    <h4 class="text-2xl font-bold">Via Wekas</h4>
                                </div>
                            </div>
                            <div class="absolute top-4 right-4">
                                <span
                                    class="bg-white/20 backdrop-blur-sm text-white px-3 py-1 rounded-full text-sm font-medium">
                                    Menantang
                                </span>
                            </div>
                        </div>

                        <div class="p-8">
                            <p class="text-gray-600 mb-6 leading-relaxed">Jalur dengan tantangan lebih tinggi. Melewati
                                hutan
                                pinus dan padang rumput yang menawan serta medan yang beragam.</p>

                            <div class="space-y-4 mb-6">
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center">
                                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <span class="text-gray-700">Waktu tempuh: <strong>5-6 jam</strong></span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center">
                                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                                        </svg>
                                    </div>
                                    <span class="text-gray-700">Tingkat: <strong>Sulit</strong></span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center">
                                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>
                                    <span class="text-gray-700">View: <strong>Hutan Pinus</strong></span>
                                </div>
                            </div>

                            <button
                                class="w-full bg-gradient-to-r from-blue-500 to-indigo-500 hover:from-blue-600 hover:to-indigo-600 text-white py-3 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105">
                                Pilih Jalur Ini
                            </button>
                        </div>
                    </div>

                    <!-- Route 3: Via Suwanting -->
                    <div
                        class="group bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4 overflow-hidden border border-gray-100">
                        <div class="relative">
                            <div
                                class="h-48 bg-gradient-to-br from-purple-400 via-purple-500 to-pink-600 flex items-center justify-center">
                                <div class="text-center text-white">
                                    <div
                                        class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                                        <span class="text-3xl font-black">3</span>
                                    </div>
                                    <h4 class="text-2xl font-bold">Via Suwanting</h4>
                                </div>
                            </div>
                            <div class="absolute top-4 right-4">
                                <span
                                    class="bg-white/20 backdrop-blur-sm text-white px-3 py-1 rounded-full text-sm font-medium">
                                    Strategis
                                </span>
                            </div>
                        </div>

                        <div class="p-8">
                            <p class="text-gray-600 mb-6 leading-relaxed">Jalur alternatif dengan pemandangan yang tidak
                                kalah
                                indah. Cocok untuk yang ingin menghindari keramaian.</p>

                            <div class="space-y-4 mb-6">
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center">
                                        <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <span class="text-gray-700">Waktu tempuh: <strong>4-5 jam</strong></span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center">
                                        <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                                        </svg>
                                    </div>
                                    <span class="text-gray-700">Tingkat: <strong>Sedang</strong></span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center">
                                        <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>
                                    <span class="text-gray-700">View: <strong>Valley View</strong></span>
                                </div>
                            </div>

                            <button
                                class="w-full bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 text-white py-3 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105">
                                Pilih Jalur Ini
                            </button>
                        </div>
                    </div>
                </div>

                <!-- All Routes CTA -->
                <div class="text-center mt-16">
                    <div
                        class="bg-white/80 backdrop-blur-sm rounded-3xl p-12 max-w-4xl mx-auto shadow-xl border border-white/50">
                        <h4 class="text-3xl font-black text-gray-800 mb-6">Butuh Panduan Lengkap?</h4>
                        <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">Dapatkan informasi detail tentang semua
                            jalur
                            pendakian, tips persiapan, dan panduan lengkap untuk petualangan Anda.</p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="{{ route('panduan') }}"
                                class="bg-gradient-to-r from-green-600 to-blue-600 hover:from-green-700 hover:to-blue-700 text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 transform hover:scale-105 flex items-center justify-center space-x-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                                <span>Panduan Lengkap</span>
                            </a>
                            <a href="{{ route('gallery') }}"
                                class="border-2 border-gray-300 hover:border-gray-400 text-gray-700 hover:bg-gray-50 px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 flex items-center justify-center space-x-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span>Lihat Galeri</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Enhanced Gallery Preview with Masonry Layout -->
        <section
            class="py-24 bg-gradient-to-br from-slate-900 via-gray-900 to-slate-800 text-white relative overflow-hidden">
            <!-- Animated Background Elements -->
            <div class="absolute inset-0">
                <div
                    class="absolute top-10 left-10 w-72 h-72 bg-gradient-to-r from-green-500/10 to-blue-500/10 rounded-full blur-3xl animate-pulse">
                </div>
                <div
                    class="absolute bottom-10 right-10 w-96 h-96 bg-gradient-to-r from-purple-500/10 to-pink-500/10 rounded-full blur-3xl animate-pulse delay-1000">
                </div>
            </div>

            <section id="gallery">
                <div class="max-w-7xl mx-auto px-4 relative z-10">
                    <!-- Section Header -->
                    <div class="text-center mb-20">
                        <div
                            class="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-sm text-white px-4 py-2 rounded-full text-sm font-medium mb-6">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span>Dokumentasi Visual</span>
                        </div>
                        <h3 class="text-5xl md:text-6xl font-black mb-6">
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-400">
                                Galeri Keindahan
                            </span>
                        </h3>
                        <p class="text-xl text-gray-300 max-w-3xl mx-auto">Saksikan keajaiban Gunung Merbabu melalui
                            koleksi
                            foto
                            spektakuler dari para pendaki</p>
                    </div>

                    <!-- Masonry Gallery Grid -->
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mb-16">
                        <!-- Gallery Item 1 -->
                        <div
                            class="group relative overflow-hidden rounded-2xl bg-gray-800 hover:scale-105 transition-all duration-500">
                            <div class="aspect-[3/4] overflow-hidden">
                                <img src="{{ asset('images/sunrise.jpg') }}" alt="Deskripsi Gambar"
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                            </div>
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="absolute bottom-4 left-4 right-4">
                                    <h4 class="text-white font-bold mb-1">Sunrise di Puncak</h4>
                                    <p class="text-white/80 text-sm">Via Selo</p>
                                </div>
                            </div>
                        </div>

                        <!-- Gallery Item 2 -->
                        <div
                            class="group relative overflow-hidden rounded-2xl bg-gray-800 hover:scale-105 transition-all duration-500">
                            <div class="aspect-[3/4] overflow-hidden">
                                <img src="{{ asset('images/sabana.jpg') }}" alt="Deskripsi Gambar"
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                            </div>

                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="absolute bottom-4 left-4 right-4">
                                    <h4 class="text-white font-bold mb-1">Sabana Luas</h4>
                                    <p class="text-white/80 text-sm">Via Suwanting</p>
                                </div>
                            </div>
                        </div>

                        <!-- Gallery Item 3 -->
                        <div
                            class="group relative overflow-hidden rounded-2xl bg-gray-800 hover:scale-105 transition-all duration-500">
                            <div class="aspect-[3/4] overflow-hidden">
                                <img src="{{ asset('images/lautanawan.jpg') }}" alt="Lautan Awan"
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                            </div>

                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="absolute bottom-4 left-4 right-4">
                                    <h4 class="text-white font-bold mb-1">Lautan Awan</h4>
                                    <p class="text-white/80 text-sm">Dini Hari</p>
                                </div>
                            </div>
                        </div>

                        <!-- Gallery Item 4 -->
                        <div
                            class="group relative overflow-hidden rounded-2xl bg-gray-800 hover:scale-105 transition-all duration-500">
                            <div class="aspect-[3/4] overflow-hidden">
                                <img src="{{ asset('images/campingground.jpg') }}" alt="Camping Ground"
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                            </div>
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="absolute bottom-4 left-4 right-4">
                                    <h4 class="text-white font-bold mb-1">Camping Ground</h4>
                                    <p class="text-white/80 text-sm">Base Camp</p>
                                </div>
                            </div>
                        </div>

                        <!-- Gallery Item 5 -->
                        <div
                            class="group relative overflow-hidden rounded-2xl bg-gray-800 hover:scale-105 transition-all duration-500 md:col-span-2">
                            <div
                                class="aspect-[3/2] overflow-hidden rounded-2xl shadow-lg group hover:shadow-xl transition-shadow duration-500">
                                <img src="{{ asset('images/panorama.jpg') }}" alt="Trek Merbabu"
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110 align-middle" />
                            </div>


                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="absolute bottom-4 left-4 right-4">
                                    <h4 class="text-white font-bold mb-1">Panorama 360°</h4>
                                    <p class="text-white/80 text-sm">View dari Puncak</p>
                                </div>
                            </div>
                        </div>

                        <!-- Gallery Item 6 -->
                        <div
                            class="group relative w-full max-w-sm mx-auto overflow-hidden rounded-2xl bg-gray-800 transition-transform duration-500 hover:scale-105">
                            <div class="aspect-[3/4] w-full overflow-hidden">
                                <img src="{{ asset('images/trek2.jpg') }}" alt="trek-merbabu"
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                            </div>

                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="absolute bottom-4 left-4 right-4">
                                    <h4 class="text-white font-bold mb-1 text-lg">Jalur Pendakian</h4>
                                    <p class="text-white/80 text-sm">Via Wekas</p>
                                </div>
                            </div>
                        </div>



                        <!-- Gallery Item 7 -->
                        <div
                            class="group relative overflow-hidden rounded-2xl bg-gray-800 hover:scale-105 transition-all duration-500">
                            <div class="aspect-[3/4] overflow-hidden">
                                <img src="{{ asset('images/pohon.jpg') }}" alt="sabana-merbabu"
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                            </div>
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="absolute bottom-4 left-4 right-4">
                                    <h4 class="text-white font-bold mb-1">Sabana Luas</h4>
                                    <p class="text-white/80 text-sm">Puncak Merbabu</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>

            <!-- Gallery CTA -->
            <div class="text-center">
                <div class="rounded-3xl p-10 max-w-4xl mx-auto bg-white/10 backdrop-blur-md border border-white/10">
                    <h4 class="text-3xl font-bold text-white mb-4">Lihat Koleksi Lengkap</h4>
                    <p class="text-lg text-gray-200 mb-6">
                        Jelajahi ratusan foto menakjubkan dari berbagai sudut Gunung Merbabu yang diabadikan oleh para
                        pendaki.
                    </p>
                    <a href="{{ route('gallery') }}"
                        class="inline-flex items-center gap-2 bg-gradient-to-r from-green-600 to-blue-600 hover:from-green-700 hover:to-blue-700 text-white px-8 py-3 rounded-full font-semibold text-base transition-all duration-300 transform hover:scale-105">
                        <span>Jelajahi Galeri Lengkap</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>

            </div>
        </section>


        <!-- Article Cards -->
        <section id="artikel" class="py-12 bg-gray-50">
            <div class="px-4 mb-10 text-center max-w-2xl mx-auto">
                <h2 class="text-3xl font-bold text-gray-800 mb-2">Baca Artikel Pilihan</h2>
                <p class="text-gray-600">
                    Dapatkan informasi, tips, dan panduan seru seputar pendakian Gunung Merbabu. Cocok untuk
                    pemula maupun pendaki berpengalaman!
                </p>
            </div>

            <!-- Scroll Horizontal Wrapper -->
            <div class="relative px-4">
                <div class="mx-auto max-w-7xl overflow-x-auto scrollbar-hide">
                    <div class="flex space-x-6 w-max">
                        <!-- Card 1 -->
                        <div
                            class="w-72 flex-shrink-0 group bg-white rounded-2xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-105">
                            <div class="overflow-hidden h-48">
                                <img src="{{ asset('images/tips2.jpg') }}"
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                                    alt="Panduan Mendaki Merbabu untuk Pemula" />
                            </div>
                            <div class="p-6">
                                <h4 class="text-xl font-semibold mb-2 text-gray-800">Panduan Mendaki Merbabu untuk Pemula
                                </h4>
                                <p class="text-gray-600 mb-4">Tips lengkap bagi pendaki pemula agar perjalanan aman dan
                                    menyenangkan.</p>
                                <a href="{{ route('panduan') }}" class="text-green-600 font-medium hover:underline">Baca
                                    Selengkapnya →</a>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div
                            class="w-72 flex-shrink-0 group bg-white rounded-2xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-105">
                            <div class="overflow-hidden h-48">
                                <img src="{{ asset('images/peralatan.jpg') }}"
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                                    alt="Peralatan Wajib saat Mendaki Merbabu" />
                            </div>
                            <div class="p-6">
                                <h4 class="text-xl font-semibold mb-2 text-gray-800">Peralatan Wajib saat Mendaki Merbabu
                                </h4>
                                <p class="text-gray-600 mb-4">Checklist perlengkapan penting agar pendakian lebih aman dan
                                    nyaman.</p>
                                <a href="{{ route('peralatan') }}"
                                    class="text-green-600 font-medium hover:underline">Baca Selengkapnya →</a>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div
                            class="w-72 flex-shrink-0 group bg-white rounded-2xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-105">
                            <div class="overflow-hidden h-48">
                                <img src="{{ asset('images/spot.jpg') }}"
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                                    alt="5 Spot Sunrise Terbaik di Gunung Merbabu" />
                            </div>
                            <div class="p-6">
                                <h4 class="text-xl font-semibold mb-2 text-gray-800">5 Spot Sunrise Terbaik di Gunung
                                    Merbabu</h4>
                                <p class="text-gray-600 mb-4">Temukan titik terbaik untuk menyaksikan keindahan matahari
                                    terbit di Merbabu.</p>
                                <a href="{{ route('spot') }}" class="text-green-600 font-medium hover:underline">Baca
                                    Selengkapnya →</a>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div
                            class="w-72 flex-shrink-0 group bg-white rounded-2xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-105">
                            <div class="overflow-hidden h-48">
                                <img src="{{ asset('images/tips2.jpg') }}"
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                                    alt="Panduan Mendaki Merbabu untuk Pemula" />
                            </div>
                            <div class="p-6">
                                <h4 class="text-xl font-semibold mb-2 text-gray-800">Panduan Mendaki Merbabu untuk Pemula
                                </h4>
                                <p class="text-gray-600 mb-4">Tips lengkap bagi pendaki pemula agar perjalanan aman dan
                                    menyenangkan.</p>
                                <a href="{{ route('panduan') }}" class="text-green-600 font-medium hover:underline">Baca
                                    Selengkapnya →</a>
                            </div>
                        </div>

                        <!-- Card 5-->
                        <div
                            class="w-72 flex-shrink-0 group bg-white rounded-2xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-105">
                            <div class="overflow-hidden h-48">
                                <img src="{{ asset('images/peralatan.jpg') }}"
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                                    alt="Peralatan Wajib saat Mendaki Merbabu" />
                            </div>
                            <div class="p-6">
                                <h4 class="text-xl font-semibold mb-2 text-gray-800">Peralatan Wajib saat Mendaki Merbabu
                                </h4>
                                <p class="text-gray-600 mb-4">Checklist perlengkapan penting agar pendakian lebih aman dan
                                    nyaman.</p>
                                <a href="{{ route('peralatan') }}"
                                    class="text-green-600 font-medium hover:underline">Baca Selengkapnya →</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    @endsection
