@extends('layouts.app')

@section('title', '5 Spot Sunrise Terbaik - Gunung Merbabu')

@section('content')
    <!-- Hero Section -->
    <section class="hero relative overflow-hidden min-h-[70vh] flex items-center pt-16">
        <!-- Background with Parallax Effect -->
        <div class="absolute inset-0 parallax-bg -z-10">
            <img src="{{ asset('images/spot.jpg') }}" alt="Sunrise di Gunung Merbabu"
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
                        <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-white transition-colors">Beranda</a></li>
                        <li><svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg></li>
                        <li><a href="{{ route('home') }}#artikel" class="text-gray-300 hover:text-white transition-colors">Artikel</a></li>
                        <li><svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg></li>
                        <li><span class="text-yellow-400 font-medium">Spot Sunrise</span></li>
                    </ol>
                </nav>

                <!-- Animated Title -->
                <div class="mb-8">
                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-black text-white leading-tight animate-fade-in-up">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 via-orange-300 to-red-400 animate-gradient">
                            5 Spot Sunrise
                        </span>
                        <span class="block">Terbaik Merbabu</span>
                    </h1>

                    <div class="w-24 h-1 bg-gradient-to-r from-yellow-400 to-orange-400 mx-auto mt-6 rounded-full"></div>
                </div>

                <!-- Enhanced Quote -->
                <p class="text-xl md:text-2xl text-white font-light italic leading-relaxed max-w-4xl mx-auto">
                    "Saksikan keajaiban matahari terbit dari ketinggian 3.145 meter di atas permukaan laut"
                </p>
                <div class="flex items-center justify-center mt-4 space-x-2">
                    <div class="w-8 h-0.5 bg-yellow-400"></div>
                    <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                    </svg>
                    <div class="w-8 h-0.5 bg-orange-400"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-20 bg-gradient-to-br from-gray-50 via-white to-yellow-50">
        <div class="max-w-6xl mx-auto px-4">
            <!-- Introduction -->
            <div class="text-center mb-16">
                <div class="inline-flex items-center space-x-2 bg-yellow-100 text-yellow-800 px-4 py-2 rounded-full text-sm font-medium mb-6">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                    </svg>
                    <span>Sunrise Points</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-black text-gray-800 mb-6">
                    <span class="gradient-text">Titik Sunrise Terbaik</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Nikmati keindahan matahari terbit yang spektakuler dari berbagai sudut terbaik di Gunung Merbabu
                </p>
            </div>

            <!-- Sunrise Spots -->
            <div class="space-y-12">
                <!-- Puncak Kenteng Songo -->
                <div class="glass-effect rounded-3xl p-8 border border-yellow-200/50">
                    <div class="flex items-center mb-8">
                        <div class="w-12 h-12 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-2xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3l14 9-14 9V3z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl md:text-3xl font-black text-gray-800">Puncak Kenteng Songo</h3>
                        <div class="ml-auto bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm font-medium">
                            Puncak Utama
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <div class="space-y-6">
                            <div class="bg-white rounded-2xl p-6 shadow-lg">
                                <h4 class="font-bold text-gray-800 mb-3 flex items-center">
                                    <svg class="w-5 h-5 text-yellow-600 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                    </svg>
                                    Keunggulan Utama
                                </h4>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Pemandangan 360 derajat yang memukau dengan view Gunung Merapi, Merbabu, dan deretan pegunungan Jawa Tengah. 
                                    Titik tertinggi dengan ketinggian 3.145 mdpl memberikan perspektif terbaik untuk sunrise.
                                </p>
                            </div>

                            <div class="bg-white rounded-2xl p-6 shadow-lg">
                                <h4 class="font-bold text-gray-800 mb-3 flex items-center">
                                    <svg class="w-5 h-5 text-blue-600 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                                    </svg>
                                    Lokasi & Akses
                                </h4>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Dapat dicapai melalui jalur Selo (Boyolali) atau Wekas (Magelang). 
                                    Waktu tempuh sekitar 4-5 jam pendakian untuk mencapai puncak utama ini.
                                </p>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <div class="bg-white rounded-2xl p-6 shadow-lg">
                                <h4 class="font-bold text-gray-800 mb-3 flex items-center">
                                    <svg class="w-5 h-5 text-orange-600 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                    </svg>
                                    Waktu Terbaik
                                </h4>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Sunrise dimulai pukul 05:30 - 06:00 WIB. Disarankan tiba di puncak minimal 30 menit sebelum sunrise 
                                    untuk mendapatkan spot terbaik dan menikmati golden hour.
                                </p>
                            </div>

                            <div class="bg-white rounded-2xl p-6 shadow-lg">
                                <h4 class="font-bold text-gray-800 mb-3 flex items-center">
                                    <svg class="w-5 h-5 text-green-600 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Tips Khusus
                                </h4>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Bawa jaket tebal karena suhu bisa mencapai 2-5°C. Pastikan headlamp dan kamera siap. 
                                    Area puncak cukup luas sehingga bisa menampung banyak pendaki.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sabana 1 -->
                <div class="glass-effect rounded-3xl p-8 border border-green-200/50">
                    <div class="flex items-center mb-8">
                        <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl md:text-3xl font-black text-gray-800">Sabana 1</h3>
                        <div class="ml-auto bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">
                            Populer
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <div class="space-y-6">
                            <div class="bg-white rounded-2xl p-6 shadow-lg">
                                <h4 class="font-bold text-gray-800 mb-3 flex items-center">
                                    <svg class="w-5 h-5 text-green-600 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                    </svg>
                                    Keunggulan Utama
                                </h4>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Hamparan savana luas dengan rumput hijau yang bergelombang. Spot favorit untuk camping dan foto sunrise 
                                    dengan latar belakang padang rumput yang indah. Suasana seperti di New Zealand.
                                </p>
                            </div>

                            <div class="bg-white rounded-2xl p-6 shadow-lg">
                                <h4 class="font-bold text-gray-800 mb-3 flex items-center">
                                    <svg class="w-5 h-5 text-blue-600 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                                    </svg>
                                    Lokasi & Akses
                                </h4>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Terletak di ketinggian 2.900 mdpl, sekitar 1 jam dari Pos 3 Selo. 
                                    Akses mudah dan cocok untuk pendaki pemula yang ingin menikmati sunrise tanpa ke puncak.
                                </p>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <div class="bg-white rounded-2xl p-6 shadow-lg">
                                <h4 class="font-bold text-gray-800 mb-3 flex items-center">
                                    <svg class="w-5 h-5 text-orange-600 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                    </svg>
                                    Waktu Terbaik
                                </h4>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Sunrise terlihat jelas mulai pukul 05:45 WIB. Area terbuka memberikan pandangan langsung 
                                    ke arah timur tanpa penghalang. Ideal untuk photography dan videography.
                                </p>
                            </div>

                            <div class="bg-white rounded-2xl p-6 shadow-lg">
                                <h4 class="font-bold text-gray-800 mb-3 flex items-center">
                                    <svg class="w-5 h-5 text-green-600 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Tips Khusus
                                </h4>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Spot camping terbaik di Merbabu. Bawa alas duduk untuk menikmati sunrise dengan nyaman. 
                                    Angin cukup kencang, jadi pastikan tenda terpasang dengan baik.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Triangulasi -->
                <div class="glass-effect rounded-3xl p-8 border border-blue-200/50">
                    <div class="flex items-center mb-8">
                        <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-2xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl md:text-3xl font-black text-gray-800">Triangulasi</h3>
                        <div class="ml-auto bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">
                            Strategis
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <div class="space-y-6">
                            <div class="bg-white rounded-2xl p-6 shadow-lg">
                                <h4 class="font-bold text-gray-800 mb-3 flex items-center">
                                    <svg class="w-5 h-5 text-blue-600 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                    </svg>
                                    Keunggulan Utama
                                </h4>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Titik pengukuran geodesi dengan pemandangan unik. Menawarkan view sunrise dengan latar belakang 
                                    Gunung Merapi yang ikonik. Spot eksklusif yang tidak terlalu ramai pengunjung.
                                </p>
                            </div>

                            <div class="bg-white rounded-2xl p-6 shadow-lg">
                                <h4 class="font-bold text-gray-800 mb-3 flex items-center">
                                    <svg class="w-5 h-5 text-blue-600 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                                    </svg>
                                    Lokasi & Akses
                                </h4>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Berada di ketinggian 3.000 mdpl, sekitar 30 menit dari Sabana 1 menuju puncak. 
                                    Jalur agak menantang dengan medan berbatu dan terjal.
                                </p>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <div class="bg-white rounded-2xl p-6 shadow-lg">
                                <h4 class="font-bold text-gray-800 mb-3 flex items-center">
                                    <svg class="w-5 h-5 text-orange-600 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                    </svg>
                                    Waktu Terbaik
                                </h4>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Sunrise terlihat mulai pukul 05:35 WIB dengan view Merapi yang menawan. 
                                    Posisi strategis untuk foto siluet dengan background gunung berapi aktif.
                                </p>
                            </div>

                            <div class="bg-white rounded-2xl p-6 shadow-lg">
                                <h4 class="font-bold text-gray-800 mb-3 flex items-center">
                                    <svg class="w-5 h-5 text-green-600 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Tips Khusus
                                </h4>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Cocok untuk pendaki yang mencari spot sunrise eksklusif. Bawa tripod untuk foto long exposure. 
                                    Area terbatas, jadi datang lebih awal untuk mendapatkan posisi terbaik.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pos 4 -->
                <div class="glass-effect rounded-3xl p-8 border border-purple-200/50">
                    <div class="flex items-center mb-8">
                        <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                            </svg>
                        </div>
                        <h3 class="text-2xl md:text-3xl font-black text-gray-800">Pos 4</h3>
                        <div class="ml-auto bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-medium">
                            Mudah Akses
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <div class="space-y-6">
                            <div class="bg-white rounded-2xl p-6 shadow-lg">
                                <h4 class="font-bold text-gray-800 mb-3 flex items-center">
                                    <svg class="w-5 h-5 text-purple-600 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                    </svg>
                                    Keunggulan Utama
                                </h4>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Pos peristirahatan terakhir sebelum puncak dengan fasilitas shelter dan area camping. 
                                    Cocok untuk pendaki yang ingin sunrise tanpa perlu naik ke puncak utama.
                                </p>
                            </div>

                            <div class="bg-white rounded-2xl p-6 shadow-lg">
                                <h4 class="font-bold text-gray-800 mb-3 flex items-center">
                                    <svg class="w-5 h-5 text-blue-600 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                                    </svg>
                                    Lokasi & Akses
                                </h4>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Ketinggian 2.700 mdpl, sekitar 3-4 jam dari basecamp. 
                                    Jalur relatif mudah dengan fasilitas pos peristirahatan yang memadai.
                                </p>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <div class="bg-white rounded-2xl p-6 shadow-lg">
                                <h4 class="font-bold text-gray-800 mb-3 flex items-center">
                                    <svg class="w-5 h-5 text-orange-600 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                    </svg>
                                    Waktu Terbaik
                                </h4>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Sunrise mulai terlihat pukul 06:00 WIB. View agak terbatas karena masih ada pepohonan, 
                                    tapi tetap indah untuk menikmati golden hour pertama.
                                </p>
                            </div>

                            <div class="bg-white rounded-2xl p-6 shadow-lg">
                                <h4 class="font-bold text-gray-800 mb-3 flex items-center">
                                    <svg class="w-5 h-5 text-green-600 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Tips Tambahan
                                </h4>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Bawa jaket tebal karena suhu bisa turun hingga 5°C. Disarankan membawa tenda ringan dan senter/headlamp jika ingin bermalam di sini.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
