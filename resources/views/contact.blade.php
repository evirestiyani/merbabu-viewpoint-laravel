@extends('layouts.app')

@section('title', 'Kontak - Gunung Merbabu')

@section('content')
    <!-- Hero Section -->
    <section class="hero relative overflow-hidden min-h-[60vh] flex items-center pt-16">
        <!-- Background with Parallax Effect -->

        <!-- Floating Particles -->

        <!-- Hero Content -->
        <div class="relative z-10 w-full">
            <div class="max-w-6xl mx-auto px-4 text-center">
                <h1 class="text-4xl md:text-6xl font-black text-white leading-tight animate-fade-in-up mb-6">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 via-emerald-300 to-blue-400">
                        Hubungi Kami
                    </span>
                </h1>
                <div class="w-24 h-1 bg-gradient-to-r from-green-400 to-blue-400 mx-auto rounded-full mb-6"></div>
                <p class="text-xl md:text-2xl text-black font-light leading-relaxed max-w-3xl mx-auto">
                    Ada pertanyaan tentang pendakian? Tim kami siap membantu merencanakan petualangan terbaik Anda
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-24 bg-gradient-to-br from-gray-50 via-white to-green-50 relative overflow-hidden">
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
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <!-- Contact Form -->
                <div class="bg-white rounded-3xl shadow-xl p-8 lg:p-12 border border-gray-100">
                    <div class="mb-8">
                        <h2 class="text-3xl font-black text-gray-800 mb-4">Kirim Pesan</h2>
                        <p class="text-gray-600">Isi formulir di bawah ini dan kami akan segera menghubungi Anda kembali</p>
                    </div>

                    <form class="space-y-6">
                        <!-- Name Field -->
                        <div>
                            <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Nama
                                Lengkap</label>
                            <input type="text" id="name" name="name" required
                                class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all duration-300 outline-none"
                                placeholder="Masukkan nama lengkap Anda">
                        </div>

                        <!-- Email Field -->
                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all duration-300 outline-none"
                                placeholder="nama@email.com">
                        </div>

                        <!-- Phone Field -->
                        <div>
                            <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">Nomor
                                Telepon</label>
                            <input type="tel" id="phone" name="phone"
                                class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all duration-300 outline-none"
                                placeholder="08xxxxxxxxx">
                        </div>

                        <!-- Subject Field -->
                        <div>
                            <label for="subject" class="block text-sm font-semibold text-gray-700 mb-2">Subjek</label>
                            <select id="subject" name="subject" required
                                class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all duration-300 outline-none">
                                <option value="">Pilih subjek</option>
                                <option value="info-jalur">Informasi Jalur Pendakian</option>
                                <option value="booking">Pemesanan Guide</option>
                                <option value="peralatan">Konsultasi Peralatan</option>
                                <option value="cuaca">Informasi Cuaca</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>

                        <!-- Message Field -->
                        <div>
                            <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Pesan</label>
                            <textarea id="message" name="message" rows="5" required
                                class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all duration-300 outline-none resize-none"
                                placeholder="Tulis pesan Anda di sini..."></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit"
                            class="w-full bg-gradient-to-r from-green-600 to-emerald-600 hover:from-green-700 hover:to-emerald-700 text-white py-4 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center justify-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                            </svg>
                            <span>Kirim Pesan</span>
                        </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="space-y-8">
                    <!-- Contact Info Cards -->
                    <div class="space-y-6">
                        <!-- Location Card -->
                        <div
                            class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-500 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-800 mb-2">Lokasi Base Camp</h3>
                                    <p class="text-gray-600 leading-relaxed">
                                        <a href="https://www.google.com/maps?q=Desa+Selo,+Kecamatan+Selo,+Boyolali,+Jawa+Tengah,+Indonesia+57365"
                                            target="_blank" class="text-blue-600 hover:underline">
                                            Desa Selo, Kecamatan Selo<br>
                                            Kabupaten Boyolali, Jawa Tengah<br>
                                            Indonesia 57365
                                        </a>
                                    </p>
                                </div>

                            </div>
                        </div>

                        <!-- Phone Card -->
                        <div
                            class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-12 h-12 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-800 mb-2">Telepon & WhatsApp</h3>
                                    <div class="space-y-1">
                                        <p class="text-gray-600">+62 812-3456-7890</p>
                                        <p class="text-gray-600">+62 856-7890-1234</p>
                                        <p class="text-sm text-green-600 font-medium">24/7 Emergency Contact</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Email Card -->
                        <div
                            class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-800 mb-2">Email</h3>
                                    <div class="space-y-1">
                                        <p class="text-gray-600">info@merbabu.com</p>
                                        <p class="text-gray-600">guide@merbabu.com</p>
                                        <p class="text-sm text-blue-600 font-medium">Respon dalam 24 jam</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Social Media Card -->
                        <div
                            class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-12 h-12 bg-gradient-to-r from-orange-500 to-red-500 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2m-9 0h10m-9 0V2a1 1 0 011-1h8a1 1 0 011 1v2m0 0v12a2 2 0 01-2 2H9a2 2 0 01-2-2V4h10z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-800 mb-2">Media Sosial</h3>
                                    <div class="flex space-x-4 mt-3">
                                        <a href="#" class="text-blue-600 hover:text-blue-800 transition-colors">
                                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                            </svg>
                                        </a>
                                        <a href="#" class="text-blue-700 hover:text-blue-900 transition-colors">
                                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                            </svg>
                                        </a>
                                        <a href="#" class="text-pink-600 hover:text-pink-800 transition-colors">
                                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.404-5.957 1.404-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.758-1.378l-.749 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.55.535 6.624 0 11.99-5.367 11.99-11.989C24.007 5.367 18.641.001 12.017.001z" />
                                            </svg>
                                        </a>
                                        <a href="#" class="text-red-600 hover:text-red-800 transition-colors">
                                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Emergency Contact -->
                    <div class="bg-gradient-to-r from-red-500 to-orange-500 rounded-2xl p-6 text-white">
                        <div class="flex items-center space-x-3 mb-4">
                            <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.728-.833-2.464 0L4.34 16.5c-.77.833.192 2.5 1.732 2.5z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold">Kontak Darurat</h3>
                        </div>
                        <p class="mb-3">Untuk situasi darurat saat pendakian:</p>
                        <div class="space-y-2">
                            <p class="font-bold text-lg">+62 811-9999-8888</p>
                            <p class="text-sm opacity-90">SAR Boyolali - 24/7</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-16 bg-gradient-to-br from-slate-900 via-gray-900 to-slate-800">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <h3 class="text-4xl font-black text-white mb-4">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-400">
                        Lokasi Base Camp
                    </span>
                </h3>
                <p class="text-xl text-gray-300">Temukan kami di kaki Gunung Merbabu</p>
            </div>

            <!-- Map Container -->
            <div class="bg-white rounded-3xl p-4 shadow-2xl">
                <div class="rounded-xl overflow-hidden shadow-lg">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63358.96526170106!2d110.433199251!3d-7.4789906996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a914c80c5a75d%3A0x6e7ab2e3f1e8e321!2sBasecamp%20Merbabu%20Selo!5e0!3m2!1sen!2sid!4v1621664915029!5m2!1sen!2sid"
                        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-24 bg-gradient-to-br from-gray-50 via-white to-blue-50">
        <div class="max-w-4xl mx-auto px-4">
            <div class="text-center mb-16">
                <h3 class="text-4xl font-black text-gray-800 mb-6">
                    <span class="gradient-text">Pertanyaan Umum</span>
                </h3>
                <p class="text-xl text-gray-600">Jawaban untuk pertanyaan yang sering diajukan</p>
            </div>

            <div class="space-y-6">
                <!-- FAQ Item 1 -->
                <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
                    <div class="p-6 cursor-pointer hover:bg-gray-50 transition-colors" onclick="toggleFAQ(1)">
                        <div class="flex items-center justify-between">
                            <h4 class="text-lg font-bold text-gray-800">Berapa lama waktu pendakian ke puncak Merbabu?</h4>
                            <svg id="icon-1" class="w-5 h-5 text-gray-500 transform transition-transform"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </div>
                    <div id="faq-1" class="hidden px-6 pb-6">
                        <p class="text-gray-600 leading-relaxed">
                            Waktu pendakian bervariasi tergantung jalur yang dipilih. Via Selo membutuhkan 4-5 jam, Via
                            Wekas 5-6 jam, dan Via Suwanting 4-5 jam untuk mencapai puncak.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
                    <div class="p-6 cursor-pointer hover:bg-gray-50 transition-colors" onclick="toggleFAQ(2)">
                        <div class="flex items-center justify-between">
                            <h4 class="text-lg font-bold text-gray-800">Kapan waktu terbaik untuk mendaki Merbabu?</h4>
                            <svg id="icon-2" class="w-5 h-5 text-gray-500 transform transition-transform"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </div>
                    <div id="faq-2" class="hidden px-6 pb-6">
                        <p class="text-gray-600 leading-relaxed">
                            Waktu terbaik untuk mendaki adalah bulan April hingga Oktober saat musim kemarau. Hindari musim
                            hujan (November-Maret) karena jalur licin dan berkabut.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
                    <div class="p-6 cursor-pointer hover:bg-gray-50 transition-colors" onclick="toggleFAQ(3)">
                        <div class="flex items-center justify-between">
                            <h4 class="text-lg font-bold text-gray-800">Apakah perlu guide untuk mendaki Merbabu?</h4>
                            <svg id="icon-3" class="w-5 h-5 text-gray-500 transform transition-transform"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </div>
                    <div id="faq-3" class="hidden px-6 pb-6">
                        <p class="text-gray-600 leading-relaxed">
                            Untuk pemula sangat disarankan menggunakan guide lokal yang berpengalaman. Guide akan membantu
                            navigasi, memberikan informasi cuaca, dan memastikan keselamatan selama pendakian.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
                    <div class="p-6 cursor-pointer hover:bg-gray-50 transition-colors" onclick="toggleFAQ(4)">
                        <div class="flex items-center justify-between">
                            <h4 class="text-lg font-bold text-gray-800">Berapa biaya pendakian Gunung Merbabu?</h4>
                            <svg id="icon-4" class="w-5 h-5 text-gray-500 transform transition-transform"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </div>
                    <div id="faq-4" class="hidden px-6 pb-6">
                        <p class="text-gray-600 leading-relaxed">
                            Biaya pendakian bervariasi tergantung paket yang dipilih. Mulai dari Rp 150.000 untuk tiket
                            masuk, guide Rp 300.000-500.000 per hari, dan paket lengkap mulai dari Rp 800.000 per orang.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
                    <div class="p-6 cursor-pointer hover:bg-gray-50 transition-colors" onclick="toggleFAQ(5)">
                        <div class="flex items-center justify-between">
                            <h4 class="text-lg font-bold text-gray-800">Peralatan apa saja yang harus dibawa?</h4>
                            <svg id="icon-5" class="w-5 h-5 text-gray-500 transform transition-transform"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </div>
                    <div id="faq-5" class="hidden px-6 pb-6">
                        <p class="text-gray-600 leading-relaxed">
                            Peralatan wajib: sepatu gunung, jaket tebal, sleeping bag, tenda, headlamp, makanan & minuman,
                            obat-obatan pribadi, dan perlengkapan navigasi. Kami juga menyediakan layanan rental peralatan.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 6 -->
                <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
                    <div class="p-6 cursor-pointer hover:bg-gray-50 transition-colors" onclick="toggleFAQ(6)">
                        <div class="flex items-center justify-between">
                            <h4 class="text-lg font-bold text-gray-800">Bagaimana kondisi cuaca di Gunung Merbabu?</h4>
                            <svg id="icon-6" class="w-5 h-5 text-gray-500 transform transition-transform"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </div>
                    <div id="faq-6" class="hidden px-6 pb-6">
                        <p class="text-gray-600 leading-relaxed">
                            Suhu di puncak berkisar 5-15°C dengan angin kencang. Cuaca dapat berubah dengan cepat, kabut
                            tebal sering turun di sore dan malam hari. Selalu cek prakiraan cuaca sebelum mendaki.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <style>
        .gradient-text {
            background: linear-gradient(135deg, #059669, #3b82f6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .parallax-bg {
            transform: translateZ(0);
            will-change: transform;
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
            animation: fadeInUp 0.8s ease-out;
        }

        .particle {
            animation-duration: 3s;
            animation-iteration-count: infinite;
        }
    </style>

    <script>
        function toggleFAQ(num) {
            const faqElement = document.getElementById(`faq-${num}`);
            const iconElement = document.getElementById(`icon-${num}`);

            if (faqElement.classList.contains('hidden')) {
                faqElement.classList.remove('hidden');
                iconElement.style.transform = 'rotate(180deg)';
            } else {
                faqElement.classList.add('hidden');
                iconElement.style.transform = 'rotate(0deg)';
            }
        }

        // Form submission handler
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();

            // Get form data
            const formData = new FormData(this);
            const data = Object.fromEntries(formData);

            // Simple validation
            if (!data.name || !data.email || !data.subject || !data.message) {
                alert('Mohon lengkapi semua field yang wajib diisi');
                return;
            }

            // Simulate form submission
            const submitButton = this.querySelector('button[type="submit"]');
            const originalText = submitButton.innerHTML;

            submitButton.innerHTML = `
            <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            Mengirim...
        `;
            submitButton.disabled = true;

            // Simulate API call
            setTimeout(() => {
                alert('Pesan berhasil dikirim! Kami akan segera menghubungi Anda.');
                this.reset();
                submitButton.innerHTML = originalText;
                submitButton.disabled = false;
            }, 2000);
        });

        // Parallax effect
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallaxElements = document.querySelectorAll('.parallax-bg');

            parallaxElements.forEach(element => {
                const speed = 0.5;
                element.style.transform = `translateY(${scrolled * speed}px)`;
            });
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
@endsection
