<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gunung Merbabu - Keindahan Alam Jawa Tengah')</title>
    <meta name="description" content="@yield('description', 'Jelajahi keindahan Gunung Merbabu dengan panduan lengkap jalur pendakian, tips, dan galeri foto menakjubkan.')">
    <meta name="keywords" content="Gunung Merbabu, Pendakian, Sabana, Jawa Tengah, Selo, Wekas, Suwanting">
    <meta name="author" content="Gunung Merbabu">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="@yield('title', 'Gunung Merbabu - Keindahan Alam Jawa Tengah')">
    <meta property="og:description" content="@yield('description', 'Jelajahi keindahan Gunung Merbabu dengan panduan lengkap jalur pendakian, tips, dan galeri foto menakjubkan.')">
    <meta property="og:image" content="{{ asset('images/merbabu-og.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Custom Styles -->
    <style>
        .navbar-glass {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.95);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .navbar-scrolled {
            background: rgba(255, 255, 255, 0.98);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .gradient-text {
            background: linear-gradient(135deg, #059669, #2563eb);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .btn-floating {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 1000;
            transition: all 0.3s ease;
            transform: translateY(100px);
            opacity: 0;
        }

        .btn-floating.show {
            transform: translateY(0);
            opacity: 1;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.6s ease forwards;
        }
    </style>
</head>

<body class="bg-gray-50 font-inter">
    <!-- Navigation -->
    <nav id="navbar" class="fixed w-full top-0 z-50 transition-all duration-300 navbar-glass">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="bg-gradient-to-r from-green-600 to-blue-600 p-2 rounded-xl">

                    </div>
                    <div>
                        <h1 class="text-2xl font-bold gradient-text">Gunung Merbabu</h1>
                        <p class="text-xs text-gray-500 hidden sm:block">Keajaiban Sabana Jawa Tengah</p>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="{{ route('home') }}#beranda"
                        class="nav-link text-gray-700 hover:text-green-600 font-medium transition-colors duration-200">
                        Beranda
                    </a>
                    <a href="{{ route('home') }}#about"
                        class="nav-link text-gray-700 hover:text-green-600 font-medium transition-colors duration-200">
                        Tentang
                    </a>
                    <a href="{{ route('home') }}#gallery"
                        class="nav-link text-gray-700 hover:text-green-600 font-medium transition-colors duration-200">
                        Galeri
                    </a>
                    <a href="{{ route('home') }}#artikel"
                        class="nav-link text-gray-700 hover:text-green-600 font-medium transition-colors duration-200">
                        Artikel
                    </a>

                    <a href="{{ route('contact') }}"
                        class="bg-gradient-to-r from-green-600 to-blue-600 text-white px-6 py-2 rounded-full font-medium hover:shadow-lg transition-all duration-300 transform hover:scale-105">
                        Kontak
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="lg:hidden">
                    <button id="mobile-menu-button"
                        class="text-gray-700 hover:text-green-600 transition-colors duration-200">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile menu -->
            <div id="mobile-menu" class="hidden lg:hidden pb-4 border-t border-gray-200 mt-4">
                <div class="space-y-3 pt-4">
                    <a href="{{ route('home') }}"
                        class="block text-gray-700 hover:text-green-600 font-medium py-2 px-3 rounded-lg hover:bg-green-50 transition-all duration-200 {{ Request::routeIs('home') ? 'text-green-600 bg-green-50' : '' }}">
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                            <span>Beranda</span>
                        </div>
                    </a>
                    <a href="{{ route('about') }}"
                        class="block text-gray-700 hover:text-green-600 font-medium py-2 px-3 rounded-lg hover:bg-green-50 transition-all duration-200 {{ Request::routeIs('about') ? 'text-green-600 bg-green-50' : '' }}">
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>Tentang</span>
                        </div>
                    </a>
                    <a href="#artikel"
                        class="block text-gray-700 hover:text-green-600 font-medium py-2 px-3 rounded-lg hover:bg-green-50 transition-all duration-200 {{ Request::routeIs('posts.*') ? 'text-green-600 bg-green-50' : '' }}">
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z">
                                </path>
                            </svg>
                            <span>Artikel</span>
                        </div>
                    </a>
                    <a href="{{ route('gallery') }}"
                        class="block text-gray-700 hover:text-green-600 font-medium py-2 px-3 rounded-lg hover:bg-green-50 transition-all duration-200 {{ Request::routeIs('gallery') ? 'text-green-600 bg-green-50' : '' }}">
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                            <span>Galeri</span>
                        </div>
                    </a>
                    <a href="{{ route('contact') }}"
                        class="block text-gray-700 hover:text-green-600 font-medium py-2 px-3 rounded-lg hover:bg-green-50 transition-all duration-200 {{ Request::routeIs('contact') ? 'text-green-600 bg-green-50' : '' }}">
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                </path>
                            </svg>
                            <span>Kontak</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-20">
        @yield('content')
    </main>

    <!-- Back to Top Button -->
    <button id="back-to-top"
        class="btn-floating bg-gradient-to-r from-green-600 to-blue-600 text-white p-3 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-110">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18">
            </path>
        </svg>
    </button>

    <!-- Footer -->
    <footer class="bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white mt-20 relative overflow-hidden">
        <!-- Decorative background -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-10 left-10 w-40 h-40 border border-white rounded-full"></div>
            <div class="absolute bottom-20 right-20 w-60 h-60 border border-white rounded-full"></div>
            <div class="absolute top-1/2 left-1/3 w-20 h-20 border border-white rounded-full"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                <!-- Brand Section -->
                <div class="lg:col-span-2">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="bg-gradient-to-r from-green-600 to-blue-600 p-3 rounded-xl">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold gradient-text">Gunung Merbabu</h3>
                            <p class="text-gray-400 text-sm">Keajaiban Sabana Jawa Tengah</p>
                        </div>
                    </div>
                    <p class="text-gray-300 leading-relaxed mb-6 max-w-md">
                        Jelajahi keindahan alam Gunung Merbabu dengan panduan lengkap dan informasi terkini.
                        Temukan pengalaman pendakian yang tak terlupakan di sabana terindah Jawa Tengah.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#"
                            class="bg-gray-800 hover:bg-gray-700 p-3 rounded-lg transition-all duration-300 transform hover:scale-110">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="bg-gray-800 hover:bg-gray-700 p-3 rounded-lg transition-all duration-300 transform hover:scale-110">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.174.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.744-1.378l-.743 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.55.535 6.624 0 11.99-5.367 11.99-11.99C24.007 5.367 18.641.001.012.001z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="bg-gradient-to-r from-pink-500 to-purple-600 hover:from-pink-600 hover:to-purple-700 p-3 rounded-lg transition-all duration-300 transform hover:scale-110">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-bold mb-6 text-white">Menu Utama</h4>
                    <ul class="space-y-3">
                        <li>
                            <a href="{{ route('home') }}"
                                class="text-gray-300 hover:text-white transition-colors duration-200 flex items-center space-x-2 group">
                                <span
                                    class="w-1 h-1 bg-green-600 rounded-full group-hover:w-2 transition-all duration-200"></span>
                                <span>Beranda</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}#about"
                                class="text-gray-300 hover:text-white transition-colors duration-200 flex items-center space-x-2 group">
                                <span
                                    class="w-1 h-1 bg-green-600 rounded-full group-hover:w-2 transition-all duration-200"></span>
                                <span>Tentang Merbabu</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}#gallery"
                                class="text-gray-300 hover:text-white transition-colors duration-200 flex items-center space-x-2 group">
                                <span
                                    class="w-1 h-1 bg-green-600 rounded-full group-hover:w-2 transition-all duration-200"></span>
                                <span>Galeri Foto</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}#artikel"
                                class="text-gray-300 hover:text-white transition-colors duration-200 flex items-center space-x-2 group">
                                <span
                                    class="w-1 h-1 bg-green-600 rounded-full group-hover:w-2 transition-all duration-200"></span>
                                <span>Artikel & Tips</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-bold mb-6 text-white">Informasi</h4>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-600 mt-1 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <div>
                                <p class="text-gray-300 text-sm">Jawa Tengah, Indonesia</p>
                                <p class="text-gray-400 text-xs">Perbatasan Magelang - Boyolali</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-600 mt-1 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                            </svg>
                            <div>
                                <p class="text-gray-300 text-sm">Ketinggian 3.145 MDPL</p>
                                <p class="text-gray-400 text-xs">Gunung Berapi Tertinggi ke-5 di Jawa</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-600 mt-1 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 100 20 10 10 0 000-20z"></path>
                            </svg>
                            <div>
                                <p class="text-gray-300 text-sm">Status Aktif</p>
                                <p class="text-gray-400 text-xs">Gunung ini masih termasuk gunung berapi aktif</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
