@extends('layouts.app')

@section('title', 'Peralatan Wajib - Gunung Merbabu')

@section('content')
    <!-- Hero Section -->
    <section class="hero relative overflow-hidden min-h-[70vh] flex items-center pt-16">
        <!-- Background with Parallax Effect -->
        <div class="absolute inset-0 parallax-bg -z-10">
            <img src="{{ asset('images/peralatan.jpg') }}" alt="Peralatan Mendaki"
                class="w-full h-full object-cover scale-110 transition-transform duration-1000 ease-out">
            <div class="absolute inset-0 bg-gradient-to-br from-black/60 via-transparent to-black/70"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
        </div>

        <!-- Floating Particles -->
        <div class="absolute inset-0">
            <div class="particle absolute top-20 left-20 w-2 h-2 bg-white/30 rounded-full animate-pulse"></div>
            <div class="particle absolute top-40 right-32 w-1 h-1 bg-orange-400/50 rounded-full animate-ping"></div>
            <div class="particle absolute bottom-40 left-40 w-3 h-3 bg-yellow-400/40 rounded-full animate-bounce"></div>
            <div class="particle absolute top-60 right-20 w-1.5 h-1.5 bg-white/40 rounded-full animate-pulse"></div>
        </div>

        <!-- Main Hero Content -->
        <div class="relative z-10 w-full">
            <div class="max-w-6xl mx-auto px-4 text-center">
                <!-- Breadcrumb -->
                <nav class="flex justify-center mb-8" aria-label="Breadcrumb">
                    <ol class="flex items-center space-x-2 text-sm">
                    <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-white transition-colors">Beranda</a>
                    </li>
                    <li><svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg></li>
                    <a href="{{ route('home') }}#artikel"
                        class="text-gray-300 hover:text-white transition-colors">Artikel</a>
                    <li><svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg></li>
                    <li><span class="text-yellow-400 font-medium">Peralatan Wajib</span></li>
                </ol>
                </nav>

                <!-- Animated Title -->
                <div class="mb-8">
                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-black text-white leading-tight animate-fade-in-up">
                        <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 via-yellow-300 to-red-400 animate-gradient">
                            Peralatan Wajib
                        </span>
                        <span class="block">Mendaki Merbabu</span>
                    </h1>

                    <div class="w-24 h-1 bg-gradient-to-r from-orange-400 to-red-400 mx-auto mt-6 rounded-full"></div>
                </div>

                <!-- Enhanced Quote -->
                <p class="text-xl md:text-2xl text-white font-light italic leading-relaxed max-w-4xl mx-auto">
                    "Persiapan yang matang adalah kunci kesuksesan setiap petualangan"
                </p>
                <div class="flex items-center justify-center mt-4 space-x-2">
                    <div class="w-8 h-0.5 bg-orange-400"></div>
                    <svg class="w-6 h-6 text-orange-400" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                    </svg>
                    <div class="w-8 h-0.5 bg-red-400"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-20 bg-gradient-to-br from-gray-50 via-white to-orange-50">
        <div class="max-w-6xl mx-auto px-4">
            <!-- Introduction -->
            <div class="text-center mb-16">
                <div
                    class="inline-flex items-center space-x-2 bg-orange-100 text-orange-800 px-4 py-2 rounded-full text-sm font-medium mb-6">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                    </svg>
                    <span>Checklist Lengkap</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-black text-gray-800 mb-6">
                    <span class="gradient-text">Daftar Peralatan</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Persiapkan peralatan berikut untuk memastikan pendakian Anda aman, nyaman, dan menyenangkan di Gunung
                    Merbabu
                </p>
            </div>

            <!-- Equipment Categories -->
            <div class="space-y-12">
                <!-- Pakaian & Perlengkapan Pribadi -->
                <div class="glass-effect rounded-3xl p-8 border border-orange-200/50">
                    <div class="flex items-center mb-8">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-orange-500 to-red-500 rounded-2xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl md:text-3xl font-black text-gray-800">Pakaian & Perlengkapan Pribadi</h3>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div
                            class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <span class="text-orange-600 font-bold">1</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-2">Jaket Tebal/Windbreaker</h4>
                                    <p class="text-gray-600 text-sm">Suhu di puncak bisa mencapai 5°C, jaket tebal wajib
                                        untuk menjaga kehangatan tubuh</p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <span class="text-orange-600 font-bold">2</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-2">Sepatu Gunung/Hiking</h4>
                                    <p class="text-gray-600 text-sm">Sepatu dengan grip yang baik untuk medan berbatu dan
                                        licin</p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <span class="text-orange-600 font-bold">3</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-2">Topi & Kacamata</h4>
                                    <p class="text-gray-600 text-sm">Melindungi dari sinar matahari dan debu selama
                                        perjalanan</p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <span class="text-orange-600 font-bold">4</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-2">Kaos Kaki Tebal</h4>
                                    <p class="text-gray-600 text-sm">Mencegah lecet dan menjaga kaki tetap hangat</p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <span class="text-orange-600 font-bold">5</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-2">Sarung Tangan</h4>
                                    <p class="text-gray-600 text-sm">Melindungi tangan dari dingin dan saat berpegangan pada
                                        bebatuan</p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <span class="text-orange-600 font-bold">6</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-2">Pakaian Ganti</h4>
                                    <p class="text-gray-600 text-sm">Minimal 1 set pakaian ganti untuk kenyamanan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Peralatan Navigasi & Keamanan -->
                <div class="glass-effect rounded-3xl p-8 border border-blue-200/50">
                    <div class="flex items-center mb-8">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-2xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl md:text-3xl font-black text-gray-800">Navigasi & Keamanan</h3>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div
                            class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <span class="text-blue-600 font-bold">1</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-2">Headlamp + Senter</h4>
                                    <p class="text-gray-600 text-sm">Wajib untuk pendakian malam dan antisipasi keadaan
                                        darurat</p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <span class="text-blue-600 font-bold">2</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-2">GPS/Kompas</h4>
                                    <p class="text-gray-600 text-sm">Untuk navigasi dan antisipasi jika tersesat</p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <span class="text-blue-600 font-bold">3</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-2">Peluit Darurat</h4>
                                    <p class="text-gray-600 text-sm">Untuk memberikan sinyal dalam keadaan darurat</p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <span class="text-blue-600 font-bold">4</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-2">Power Bank</h4>
                                    <p class="text-gray-600 text-sm">Untuk menjaga ponsel tetap menyala sebagai alat
                                        komunikasi</p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <span class="text-blue-600 font-bold">5</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-2">Tali Tambang</h4>
                                    <p class="text-gray-600 text-sm">Untuk keadaan darurat dan bantuan pendakian</p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <span class="text-blue-600 font-bold">6</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-2">P3K (First Aid Kit)</h4>
                                    <p class="text-gray-600 text-sm">Obat-obatan dasar untuk luka ringan dan penyakit umum
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Peralatan Camping -->
                <div class="glass-effect rounded-3xl p-8 border border-green-200/50">
                    <div class="flex items-center mb-8">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl md:text-3xl font-black text-gray-800">Peralatan Camping</h3>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div
                            class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <span class="text-green-600 font-bold">1</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-2">Tenda</h4>
                                    <p class="text-gray-600 text-sm">Tenda 3-4 season yang tahan angin kencang</p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <span class="text-green-600 font-bold">2</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-2">Sleeping Bag</h4>
                                    <p class="text-gray-600 text-sm">Rating suhu minimal 0°C untuk kehangatan di malam hari
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <span class="text-green-600 font-bold">3</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-2">Matras/Sleeping Pad</h4>
                                    <p class="text-gray-600 text-sm">Untuk kenyamanan tidur dan isolasi dari tanah dingin
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <span class="text-green-600 font-bold">4</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-2">Kompor Portable</h4>
                                    <p class="text-gray-600 text-sm">Untuk memasak air dan makanan di basecamp</p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <span class="text-green-600 font-bold">5</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-2">Peralatan Masak</h4>
                                    <p class="text-gray-600 text-sm">Nesting, sendok garpu, dan peralatan makan ringan</p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <span class="text-green-600 font-bold">6</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-2">Kantong Tidur</h4>
                                    <p class="text-gray-600 text-sm">Cadangan jika sleeping bag tidak cukup hangat</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Logistik & Konsumsi -->
                <div class="glass-effect rounded-3xl p-8 border border-purple-200/50">
                    <div class="flex items-center mb-8">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17M17 13v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6m8 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01" />
                            </svg>
                        </div>
                        <h3 class="text-2xl md:text-3xl font-black text-gray-800">Logistik & Konsumsi</h3>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Card 1: Air Minum -->
                        <div
                            class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <span class="text-purple-600 font-bold">1</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-2">Air Minum</h4>
                                    <p class="text-gray-600 text-sm">Minimal 3-4 liter per orang untuk perjalanan 2D1N</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2: Makanan Ringan -->
                        <div
                            class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <span class="text-purple-600 font-bold">2</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-2">Makanan Ringan</h4>
                                    <p class="text-gray-600 text-sm">Coklat, kacang, biskuit untuk energi tambahan</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3: Makanan Utama -->
                        <div
                            class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <span class="text-purple-600 font-bold">3</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-2">Makanan Utama</h4>
                                    <p class="text-gray-600 text-sm">Mie instan, nasi, atau makanan yang mudah dimasak</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 4: Minuman Hangat -->
                        <div
                            class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <span class="text-purple-600 font-bold">4</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-2">Minuman Hangat</h4>
                                    <p class="text-gray-600 text-sm">Teh, kopi, atau minuman hangat lain untuk
                                        menghangatkan tubuh</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 5: Peralatan Masak -->
                        <div
                            class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <span class="text-purple-600 font-bold">5</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-2">Peralatan Masak</h4>
                                    <p class="text-gray-600 text-sm">Kompor portable, gas kecil, dan alat masak seperti
                                        wajan atau panci</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 6: Alat Makan & Minum -->
                        <div
                            class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <span class="text-purple-600 font-bold">6</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-2">Alat Makan & Minum</h4>
                                    <p class="text-gray-600 text-sm">Bawa piring, sendok, gelas, dan tupperware agar lebih
                                        higienis</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
