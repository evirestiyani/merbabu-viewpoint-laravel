@extends('layouts.app')

@section('title', 'Panduan Mendaki Merbabu untuk Pemula - Gunung Merbabu')

@section('content')
    <!-- Hero Section with Breadcrumb -->
    <section class="hero relative overflow-hidden min-h-[70vh] flex items-center pt-16">
        <!-- Background with Parallax Effect -->
        <div class="absolute inset-0 parallax-bg -z-10">
            <img src="{{ asset('images/tips2.jpg') }}" alt="Peralatan Mendaki"
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
                        <li><a href="{{ route('home') }}"
                                class="text-gray-300 hover:text-white transition-colors">Beranda</a>
                        </li>
                        <li><svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg></li>
                        <a href="{{ route('home') }}#artikel"
                            class="text-gray-300 hover:text-white transition-colors">Artikel</a>
                        <li><svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg></li>
                        <li><span class="text-yellow-400 font-medium">Panduan Mendaki</span></li>
                    </ol>
                </nav>

                <!-- Animated Title -->
                <div class="mb-8">
                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-black text-white leading-tight animate-fade-in-up">
                        <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 via-yellow-300 to-red-400 animate-gradient">
                            Panduan Mendaki
                        </span>
                        <span class="block"> Merbabu untuk Pemula
                        </span>
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
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4">
            <!-- Introduction -->
            <div class="prose prose-lg max-w-none mb-12">
                <div class="bg-gradient-to-r from-green-50 to-blue-50 p-8 rounded-3xl border border-green-100 mb-8">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-green-500 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Mengapa Memilih Gunung Merbabu?</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Gunung Merbabu adalah pilihan sempurna untuk pendaki pemula karena medan yang relatif mudah,
                                pemandangan sabana yang menakjubkan, dan jalur yang sudah tertata dengan baik. Dengan
                                ketinggian
                                3.145 mdpl, Merbabu menawarkan pengalaman mendaki yang tak terlupakan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Navigation -->
            <div class="bg-gray-50 rounded-2xl p-6 mb-12">
                <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                    Daftar Isi
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                    <a href="#persiapan-fisik"
                        class="flex items-center space-x-2 text-gray-600 hover:text-green-600 transition-colors">
                        <span class="w-2 h-2 bg-green-400 rounded-full"></span>
                        <span>1. Persiapan Fisik</span>
                    </a>
                    <a href="#perlengkapan"
                        class="flex items-center space-x-2 text-gray-600 hover:text-green-600 transition-colors">
                        <span class="w-2 h-2 bg-green-400 rounded-full"></span>
                        <span>2. Perlengkapan Wajib</span>
                    </a>
                    <a href="#rute-jalur"
                        class="flex items-center space-x-2 text-gray-600 hover:text-green-600 transition-colors">
                        <span class="w-2 h-2 bg-green-400 rounded-full"></span>
                        <span>3. Pemilihan Rute</span>
                    </a>
                    <a href="#tips-keamanan"
                        class="flex items-center space-x-2 text-gray-600 hover:text-green-600 transition-colors">
                        <span class="w-2 h-2 bg-green-400 rounded-full"></span>
                        <span>4. Tips Keamanan</span>
                    </a>
                    <a href="#cuaca"
                        class="flex items-center space-x-2 text-gray-600 hover:text-green-600 transition-colors">
                        <span class="w-2 h-2 bg-green-400 rounded-full"></span>
                        <span>5. Memahami Cuaca</span>
                    </a>
                    <a href="#etika"
                        class="flex items-center space-x-2 text-gray-600 hover:text-green-600 transition-colors">
                        <span class="w-2 h-2 bg-green-400 rounded-full"></span>
                        <span>6. Etika Mendaki</span>
                    </a>
                </div>
            </div>

            <!-- Section 1: Persiapan Fisik -->
            <div id="persiapan-fisik" class="mb-16">
                <div class="flex items-center space-x-3 mb-6">
                    <div
                        class="w-10 h-10 bg-gradient-to-r from-green-500 to-emerald-500 rounded-xl flex items-center justify-center">
                        <span class="text-white font-bold text-lg">1</span>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-800">Persiapan Fisik</h2>
                </div>

                <div class="bg-white border border-gray-200 rounded-2xl p-8 shadow-sm">
                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        Persiapan fisik adalah kunci sukses pendakian Anda. Meskipun Merbabu tergolong ramah untuk pemula,
                        kondisi fisik yang prima akan membuat perjalanan lebih menyenangkan.
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Latihan Cardio -->
                        <div class="bg-green-50 p-6 rounded-xl border border-green-100">
                            <div class="flex items-center space-x-3 mb-4">
                                <div class="w-8 h-8 bg-green-500 rounded-lg flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                                <h4 class="font-bold text-gray-800">Latihan Cardio</h4>
                            </div>
                            <ul class="space-y-2 text-gray-600">
                                <li>• Jogging 3-4x seminggu, minimal 30 menit</li>
                                <li>• Naik turun tangga untuk kekuatan kaki</li>
                                <li>• Bersepeda atau berenang</li>
                                <li>• Mulai latihan 4-6 minggu sebelum pendakian</li>
                            </ul>
                        </div>

                        <!-- Latihan Kekuatan -->
                        <div class="bg-blue-50 p-6 rounded-xl border border-blue-100">
                            <div class="flex items-center space-x-3 mb-4">
                                <div class="w-8 h-8 bg-blue-500 rounded-lg flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <h4 class="font-bold text-gray-800">Latihan Kekuatan</h4>
                            </div>
                            <ul class="space-y-2 text-gray-600">
                                <li>• Squat dan lunges untuk kaki</li>
                                <li>• Push-up untuk kekuatan lengan</li>
                                <li>• Plank untuk core stability</li>
                                <li>• Latihan dengan beban ransel</li>
                            </ul>
                        </div>
                    </div>

                    <div class="mt-6 p-4 bg-yellow-50 border-l-4 border-yellow-400 rounded-r-xl">
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-yellow-600 mt-0.5 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.998-.833-2.768 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z" />
                            </svg>
                            <div>
                                <p class="text-yellow-800 font-medium">Tips Penting:</p>
                                <p class="text-yellow-700 text-sm mt-1">
                                    Jangan memaksakan diri jika merasa tidak fit. Istirahat yang cukup dan hidrasi yang baik
                                    sama pentingnya dengan latihan fisik.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 2: Perlengkapan Wajib -->
            <div id="perlengkapan" class="mb-16">
                <div class="flex items-center space-x-3 mb-6">
                    <div
                        class="w-10 h-10 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-xl flex items-center justify-center">
                        <span class="text-white font-bold text-lg">2</span>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-800">Perlengkapan Wajib</h2>
                </div>

                <div class="bg-white border border-gray-200 rounded-2xl p-8 shadow-sm">
                    <p class="text-gray-600 text-lg leading-relaxed mb-8">
                        Membawa perlengkapan yang tepat sangat penting untuk keamanan dan kenyamanan selama pendakian.
                        Berikut daftar lengkap yang perlu Anda siapkan:
                    </p>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <!-- Pakaian & Alas Kaki -->
                        <div class="space-y-6">
                            <div
                                class="bg-gradient-to-r from-purple-50 to-pink-50 p-6 rounded-xl border border-purple-100">
                                <h4 class="font-bold text-gray-800 mb-4 flex items-center">
                                    <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                    Pakaian & Alas Kaki
                                </h4>
                                <div class="space-y-3">
                                    <div class="flex items-start space-x-3">
                                        <div class="w-2 h-2 bg-purple-400 rounded-full mt-2 flex-shrink-0"></div>
                                        <div>
                                            <p class="font-medium text-gray-800">Sepatu Gunung</p>
                                            <p class="text-sm text-gray-600">High cut, anti slip, waterproof</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start space-x-3">
                                        <div class="w-2 h-2 bg-purple-400 rounded-full mt-2 flex-shrink-0"></div>
                                        <div>
                                            <p class="font-medium text-gray-800">Jaket Gunung</p>
                                            <p class="text-sm text-gray-600">Windproof, breathable</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start space-x-3">
                                        <div class="w-2 h-2 bg-purple-400 rounded-full mt-2 flex-shrink-0"></div>
                                        <div>
                                            <p class="font-medium text-gray-800">Celana Panjang</p>
                                            <p class="text-sm text-gray-600">Quick dry, tidak jeans</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start space-x-3">
                                        <div class="w-2 h-2 bg-purple-400 rounded-full mt-2 flex-shrink-0"></div>
                                        <div>
                                            <p class="font-medium text-gray-808">Kaos Kaki Gunung</p>
                                            <p class="text-sm text-gray-600">Wool atau synthetic, 2-3 pasang</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Perlengkapan Tidur -->
                            <div
                                class="bg-gradient-to-r from-green-50 to-emerald-50 p-6 rounded-xl border border-green-100">
                                <h4 class="font-bold text-gray-800 mb-4 flex items-center">
                                    <svg class="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Perlengkapan Tidur
                                </h4>
                                <div class="space-y-3">
                                    <div class="flex items-start space-x-3">
                                        <div class="w-2 h-2 bg-green-400 rounded-full mt-2 flex-shrink-0"></div>
                                        <div>
                                            <p class="font-medium text-gray-800">Sleeping Bag</p>
                                            <p class="text-sm text-gray-600">Suhu rating -5°C hingga 0°C</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start space-x-3">
                                        <div class="w-2 h-2 bg-green-400 rounded-full mt-2 flex-shrink-0"></div>
                                        <div>
                                            <p class="font-medium text-gray-800">Matras/Sleeping Pad</p>
                                            <p class="text-sm text-gray-600">Foam atau inflatable</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start space-x-3">
                                        <div class="w-2 h-2 bg-green-400 rounded-full mt-2 flex-shrink-0"></div>
                                        <div>
                                            <p class="font-medium text-gray-800">Tenda</p>
                                            <p class="text-sm text-gray-600">3-4 season, kapasitas sesuai tim</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Perlengkapan Lainnya -->
                        <div class="space-y-6">
                            <!-- Navigasi & Keamanan -->
                            <div class="bg-gradient-to-r from-orange-50 to-red-50 p-6 rounded-xl border border-orange-100">
                                <h4 class="font-bold text-gray-800 mb-4 flex items-center">
                                    <svg class="w-5 h-5 mr-2 text-orange-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                    Navigasi & Keamanan
                                </h4>
                                <div class="space-y-3">
                                    <div class="flex items-start space-x-3">
                                        <div class="w-2 h-2 bg-orange-400 rounded-full mt-2 flex-shrink-0"></div>
                                        <div>
                                            <p class="font-medium text-gray-800">Headlamp + Senter</p>
                                            <p class="text-sm text-gray-600">Dengan baterai cadangan</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start space-x-3">
                                        <div class="w-2 h-2 bg-orange-400 rounded-full mt-2 flex-shrink-0"></div>
                                        <div>
                                            <p class="font-medium text-gray-800">Power Bank</p>
                                            <p class="text-sm text-gray-600">Kapasitas minimal 10.000 mAh</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start space-x-3">
                                        <div class="w-2 h-2 bg-orange-400 rounded-full mt-2 flex-shrink-0"></div>
                                        <div>
                                            <p class="font-medium text-gray-800">Aplikasi GPS</p>
                                            <p class="text-sm text-gray-600">Download peta offline</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start space-x-3">
                                        <div class="w-2 h-2 bg-orange-400 rounded-full mt-2 flex-shrink-0"></div>
                                        <div>
                                            <p class="font-medium text-gray-800">Kotak P3K</p>
                                            <p class="text-sm text-gray-600">Obat pribadi + first aid</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Makan & Minum -->
                            <div class="bg-gradient-to-r from-blue-50 to-cyan-50 p-6 rounded-xl border border-blue-100">
                                <h4 class="font-bold text-gray-800 mb-4 flex items-center">
                                    <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                    Makan & Minum
                                </h4>
                                <div class="space-y-3">
                                    <div class="flex items-start space-x-3">
                                        <div class="w-2 h-2 bg-blue-400 rounded-full mt-2 flex-shrink-0"></div>
                                        <div>
                                            <p class="font-medium text-gray-800">Air Minum</p>
                                            <p class="text-sm text-gray-600">3-4 liter per orang</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start space-x-3">
                                        <div class="w-2 h-2 bg-blue-400 rounded-full mt-2 flex-shrink-0"></div>
                                        <div>
                                            <p class="font-medium text-gray-800">Makanan Ringan</p>
                                            <p class="text-sm text-gray-600">Trail mix, coklat, biskuit</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start space-x-3">
                                        <div class="w-2 h-2 bg-blue-400 rounded-full mt-2 flex-shrink-0"></div>
                                        <div>
                                            <p class="font-medium text-gray-800">Kompor Portable</p>
                                            <p class="text-sm text-gray-600">+ gas dan peralatan masak</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 3: Pemilihan Rute -->
            <div id="rute-jalur" class="mb-16">
                <div class="flex items-center space-x-3 mb-6">
                    <div
                        class="w-10 h-10 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-xl flex items-center justify-center">
                        <span class="text-white font-bold text-lg">3</span>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-800">Pemilihan Rute Terbaik untuk Pemula</h2>
                </div>

                <div class="bg-white border border-gray-200 rounded-2xl p-8 shadow-sm">
                    <p class="text-gray-600 text-lg leading-relaxed mb-8">
                        Gunung Merbabu memiliki 5 jalur utama, namun untuk pemula sangat disarankan memilih jalur yang mudah
                        dan aman.
                    </p>
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                        <!-- Jalur Selo -->
                        <div
                            class="bg-gradient-to-br from-green-50 to-emerald-50 p-6 rounded-2xl border-2 border-green-200">
                            <div class="flex items-center justify-between mb-4">
                                <h4 class="text-xl font-bold text-gray-800">Jalur Selo</h4>
                                <span
                                    class="bg-green-500 text-white px-3 py-1 rounded-full text-sm font-medium">Direkomendasikan</span>
                            </div>
                            <div class="space-y-3">
                                <div class="flex items-center space-x-3">
                                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-gray-700">Waktu tempuh: 4-5 jam</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                    </svg>
                                    <span class="text-gray-700">Tingkat kesulitan: Mudah-Sedang</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <span class="text-gray-700">Pemandangan sabana terbuka</span>
                                </div>
                                <p class="text-gray-600 text-sm mt-3">
                                    Jalur paling populer dan ramah pemula. Medan relatif landai dengan pemandangan sabana
                                    yang menakjubkan.
                                </p>
                            </div>
                        </div>

                        <!-- Jalur Wekas -->
                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 p-6 rounded-2xl border border-blue-200">
                            <div class="flex items-center justify-between mb-4">
                                <h4 class="text-xl font-bold text-gray-800">Jalur Wekas</h4>
                                <span
                                    class="bg-blue-500 text-white px-3 py-1 rounded-full text-sm font-medium">Alternatif</span>
                            </div>
                            <div class="space-y-3">
                                <div class="flex items-center space-x-3">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-gray-700">Waktu tempuh: 5-6 jam</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                    </svg>
                                    <span class="text-gray-700">Tingkat kesulitan: Sedang</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <span class="text-gray-700">Hutan pinus dan telaga</span>
                                </div>
                                <p class="text-gray-600 text-sm mt-3">
                                    Jalur alternatif dengan pemandangan hutan pinus. Sedikit lebih menantang tapi tetap
                                    cocok untuk pemula berpengalaman.
                                </p>
                            </div>
                        </div>

                        <!-- Jalur Suwanting -->
                        <div
                            class="bg-gradient-to-br from-yellow-50 to-yellow-100 p-6 rounded-2xl border border-yellow-300">
                            <div class="flex items-center justify-between mb-4">
                                <h4 class="text-xl font-bold text-gray-800">Jalur Suwanting</h4>
                                <span
                                    class="bg-yellow-500 text-white px-3 py-1 rounded-full text-sm font-medium">Hati-hati</span>
                            </div>
                            <div class="space-y-3">
                                <div class="flex items-center space-x-3">
                                    <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-gray-700">Waktu tempuh: 6-7 jam</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                    </svg>
                                    <span class="text-gray-700">Tingkat kesulitan: Sulit</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <span class="text-gray-700">Medan terjal dan akses sulit</span>
                                </div>
                                <p class="text-gray-600 text-sm mt-3">
                                    Jalur yang harus dihindari pemula karena medan yang berat dan kurang terawat.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-red-50 border-l-4 border-red-400 p-6 rounded-r-2xl">
                        <div class="flex items-start space-x-3">
                            <svg class="w-6 h-6 text-red-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.998-.833-2.768 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z" />
                            </svg>
                            <div>
                                <h4 class="font-bold text-red-800 mb-2">Hindari Jalur Berikut untuk Pemula:</h4>
                                <ul class="text-red-700 space-y-1">
                                    <li>• <strong>Jalur Chuntel:</strong> Medan terjal dan berbatu</li>
                                    <li>• <strong>Jalur Thekelan:</strong> Jalur panjang dan melelahkan</li>
                                    <li>• <strong>Jalur Suwanting:</strong> Akses sulit dan kurang terawat</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 4: Tips Keamanan -->
            <div id="tips-keamanan" class="mb-16">
                <div class="flex items-center space-x-3 mb-6">
                    <div
                        class="w-10 h-10 bg-gradient-to-r from-red-500 to-pink-500 rounded-xl flex items-center justify-center">
                        <span class="text-white font-bold text-lg">4</span>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-800">Tips Keamanan Prioritas Utama</h2>
                </div>

                <div class="bg-white border border-gray-200 rounded-2xl p-8 shadow-sm">
                    <p class="text-gray-600 text-lg leading-relaxed mb-8">
                        Keselamatan adalah prioritas utama dalam setiap pendakian. Ikuti tips berikut untuk memastikan
                        perjalanan yang aman dan menyenangkan.
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Sebelum Pendakian -->
                        <div class="space-y-6">
                            <div
                                class="bg-gradient-to-r from-orange-50 to-yellow-50 p-6 rounded-xl border border-orange-100">
                                <h4 class="font-bold text-gray-800 mb-4 flex items-center">
                                    <svg class="w-5 h-5 mr-2 text-orange-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Sebelum Berangkat
                                </h4>
                                <ul class="space-y-3 text-gray-700">
                                    <li class="flex items-start space-x-2">
                                        <span class="w-2 h-2 bg-orange-400 rounded-full mt-2 flex-shrink-0"></span>
                                        <span>Cek kondisi cuaca dan prakiraan 3-5 hari ke depan</span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <span class="w-2 h-2 bg-orange-400 rounded-full mt-2 flex-shrink-0"></span>
                                        <span>Beri tahu keluarga tentang rencana dan jadwal pendakian</span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <span class="w-2 h-2 bg-orange-400 rounded-full mt-2 flex-shrink-0"></span>
                                        <span>Pastikan kondisi fisik dan mental prima</span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <span class="w-2 h-2 bg-orange-400 rounded-full mt-2 flex-shrink-0"></span>
                                        <span>Registrasi di pos pendakian dan bayar tiket masuk</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Selama Pendakian -->
                        <div class="space-y-6">
                            <div
                                class="bg-gradient-to-r from-green-50 to-emerald-50 p-6 rounded-xl border border-green-100">
                                <h4 class="font-bold text-gray-800 mb-4 flex items-center">
                                    <svg class="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                    Selama Mendaki
                                </h4>
                                <ul class="space-y-3 text-gray-700">
                                    <li class="flex items-start space-x-2">
                                        <span class="w-2 h-2 bg-green-400 rounded-full mt-2 flex-shrink-0"></span>
                                        <span>Jangan pernah mendaki sendirian, minimal tim 3 orang</span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <span class="w-2 h-2 bg-green-400 rounded-full mt-2 flex-shrink-0"></span>
                                        <span>Selalu ikuti jalur resmi dan jangan shortcuts</span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <span class="w-2 h-2 bg-green-400 rounded-full mt-2 flex-shrink-0"></span>
                                        <span>Istirahat teratur setiap 45-60 menit</span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <span class="w-2 h-2 bg-green-400 rounded-full mt-2 flex-shrink-0"></span>
                                        <span>Monitor kondisi anggota tim secara berkala</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Emergency Contacts -->
                    <div class="mt-8 bg-red-50 p-6 rounded-xl border border-red-200">
                        <h4 class="font-bold text-gray-800 mb-4 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-red-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            Kontak Darurat
                        </h4>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="text-center">
                                <p class="font-medium text-gray-800">Basarnas</p>
                                <p class="text-red-600 font-bold">115</p>
                            </div>
                            <div class="text-center">
                                <p class="font-medium text-gray-800">Polres Magelang</p>
                                <p class="text-red-600 font-bold">(0293) 362988</p>
                            </div>
                            <div class="text-center">
                                <p class="font-medium text-gray-800">Puskesmas Selo</p>
                                <p class="text-red-600 font-bold">(0272) 2461415</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 5: Memahami Cuaca -->
            <div id="cuaca" class="mb-16">
                <div class="flex items-center space-x-3 mb-6">
                    <div
                        class="w-10 h-10 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-xl flex items-center justify-center">
                        <span class="text-white font-bold text-lg">5</span>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-800">Memahami Cuaca dan Kondisi Gunung</h2>
                </div>

                <div class="bg-white border border-gray-200 rounded-2xl p-8 shadow-sm">
                    <p class="text-gray-600 text-lg leading-relaxed mb-8">
                        Cuaca di Gunung Merbabu dapat berubah dengan cepat. Memahami pola cuaca akan membantu Anda
                        merencanakan pendakian yang lebih aman.
                    </p>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <!-- Musim Terbaik -->
                        <div class="bg-gradient-to-br from-green-50 to-blue-50 p-6 rounded-xl border border-green-100">
                            <h4 class="font-bold text-gray-800 mb-6 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                Waktu Terbaik Mendaki
                            </h4>

                            <div class="space-y-4">
                                <div class="bg-white p-4 rounded-lg border border-green-200">
                                    <h5 class="font-semibold text-green-700 mb-2">Musim Kemarau (April - Oktober)</h5>
                                    <ul class="text-sm text-gray-600 space-y-1">
                                        <li>• Cuaca cerah dan kering</li>
                                        <li>• Visibilitas terbaik untuk sunrise</li>
                                        <li>• Jalur tidak licin dan mudah dilalui</li>
                                        <li>• Ideal untuk pemula</li>
                                    </ul>
                                </div>

                                <div class="bg-yellow-50 p-4 rounded-lg border border-yellow-200">
                                    <h5 class="font-semibold text-yellow-700 mb-2">Musim Peralihan (Maret, November)</h5>
                                    <ul class="text-sm text-gray-600 space-y-1">
                                        <li>• Cuaca tidak terlalu prediktabel</li>
                                        <li>• Kemungkinan hujan ringan</li>
                                        <li>• Perlu persiapan ekstra</li>
                                        <li>• Masih bisa untuk pendakian</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Kondisi Cuaca Harian -->
                        <div class="bg-gradient-to-br from-orange-50 to-red-50 p-6 rounded-xl border border-orange-100">
                            <h4 class="font-bold text-gray-800 mb-6 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-orange-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                                Pola Cuaca Harian
                            </h4>

                            <div class="space-y-4">
                                <div class="bg-white p-4 rounded-lg border border-orange-200">
                                    <h5 class="font-semibold text-blue-700 mb-2">Dini Hari (00:00 - 06:00)</h5>
                                    <p class="text-sm text-gray-600">Suhu: 5-10°C, udara jernih, angin tenang</p>
                                </div>

                                <div class="bg-white p-4 rounded-lg border border-orange-200">
                                    <h5 class="font-semibold text-yellow-700 mb-2">Pagi-Siang (06:00 - 14:00)</h5>
                                    <p class="text-sm text-gray-600">Suhu: 15-20°C, cerah, visibilitas bagus</p>
                                </div>

                                <div class="bg-white p-4 rounded-lg border border-orange-200">
                                    <h5 class="font-semibold text-red-700 mb-2">Sore-Malam (14:00 - 24:00)</h5>
                                    <p class="text-sm text-gray-600">Suhu: 8-15°C, kemungkinan kabut, angin kencang</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Weather Warning -->
                    <div class="mt-8 bg-red-50 border-l-4 border-red-400 p-6 rounded-r-xl">
                        <div class="flex items-start space-x-3">
                            <svg class="w-6 h-6 text-red-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.998-.833-2.768 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z" />
                            </svg>
                            <div>
                                <h4 class="font-bold text-red-800 mb-2">Hindari Mendaki Saat:</h4>
                                <ul class="text-red-700 space-y-1">
                                    <li>• Prakiraan hujan lebat atau badai</li>
                                    <li>• Kabut tebal yang mengganggu visibilitas</li>
                                    <li>• Angin kencang di atas 40 km/jam</li>
                                    <li>• Peringatan cuaca ekstrem dari BMKG</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 6: Etika Mendaki -->
            <div id="etika" class="mb-16">
                <div class="flex items-center space-x-3 mb-6">
                    <div
                        class="w-10 h-10 bg-gradient-to-r from-purple-500 to-pink-500 rounded-xl flex items-center justify-center">
                        <span class="text-white font-bold text-lg">6</span>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-800">Etika dan Tanggung Jawab Pendaki</h2>
                </div>

                <div class="bg-white border border-gray-200 rounded-2xl p-8 shadow-sm">
                    <p class="text-gray-600 text-lg leading-relaxed mb-8">
                        Sebagai pendaki yang bertanggung jawab, kita harus menjaga kelestarian alam dan menghormati
                        lingkungan sekitar.
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Leave No Trace -->
                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 p-6 rounded-xl border border-green-100">
                            <h4 class="font-bold text-gray-800 mb-6 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                                Leave No Trace
                            </h4>
                            <ul class="space-y-3 text-gray-700">
                                <li class="flex items-start space-x-2">
                                    <span class="w-2 h-2 bg-green-400 rounded-full mt-2 flex-shrink-0"></span>
                                    <span>Bawa turun semua sampah, termasuk puntung rokok</span>
                                </li>
                                <li class="flex items-start space-x-2">
                                    <span class="w-2 h-2 bg-green-400 rounded-full mt-2 flex-shrink-0"></span>
                                    <span>Jangan mengotori sumber air</span>
                                </li>
                                <li class="flex items-start space-x-2">
                                    <span class="w-2 h-2 bg-green-400 rounded-full mt-2 flex-shrink-0"></span>
                                    <span>Buang air kecil/besar min. 60m dari sumber air</span>
                                </li>
                                <li class="flex items-start space-x-2">
                                    <span class="w-2 h-2 bg-green-400 rounded-full mt-2 flex-shrink-0"></span>
                                    <span>Gunakan produk sabun biodegradable</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Respect Nature -->
                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 p-6 rounded-xl border border-blue-100">
                            <h4 class="font-bold text-gray-800 mb-6 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                                Hormati Alam
                            </h4>
                            <ul class="space-y-3 text-gray-700">
                                <li class="flex items-start space-x-2">
                                    <span class="w-2 h-2 bg-blue-400 rounded-full mt-2 flex-shrink-0"></span>
                                    <span>Jangan memetik bunga atau merusak tanaman</span>
                                </li>
                                <li class="flex items-start space-x-2">
                                    <span class="w-2 h-2 bg-blue-400 rounded-full mt-2 flex-shrink-0"></span>
                                    <span>Tidak mengganggu satwa liar</span>
                                </li>
                                <li class="flex items-start space-x-2">
                                    <span class="w-2 h-2 bg-blue-400 rounded-full mt-2 flex-shrink-0"></span>
                                    <span>Berkemah hanya di area yang ditentukan</span>
                                </li>
                                <li class="flex items-start space-x-2">
                                    <span class="w-2 h-2 bg-blue-400 rounded-full mt-2 flex-shrink-0"></span>
                                    <span>Gunakan kompor, hindari api unggun</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
