@extends('layouts.app')

@section('title', 'Galeri - Gunung Merbabu')

@section('content')
    <!-- Hero Section Gallery -->

    <!-- Filter Section -->
    <section class="py-8 bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-wrap justify-center gap-4">
                <button
                    class="filter-btn active bg-gradient-to-r from-green-600 to-blue-600 text-white px-6 py-3 rounded-full font-semibold transition-all duration-300 hover:shadow-lg"
                    data-filter="all">
                    Semua Foto
                </button>
                <button
                    class="filter-btn bg-gray-100 hover:bg-gray-200 text-gray-700 px-6 py-3 rounded-full font-semibold transition-all duration-300"
                    data-filter="sunrise">
                    Sunrise
                </button>
                <button
                    class="filter-btn bg-gray-100 hover:bg-gray-200 text-gray-700 px-6 py-3 rounded-full font-semibold transition-all duration-300"
                    data-filter="sabana">
                    Sabana
                </button>
                <button
                    class="filter-btn bg-gray-100 hover:bg-gray-200 text-gray-700 px-6 py-3 rounded-full font-semibold transition-all duration-300"
                    data-filter="trek">
                    Jalur Pendakian
                </button>
                <button
                    class="filter-btn bg-gray-100 hover:bg-gray-200 text-gray-700 px-6 py-3 rounded-full font-semibold transition-all duration-300"
                    data-filter="camping">
                    Camping
                </button>
                <button
                    class="filter-btn bg-gray-100 hover:bg-gray-200 text-gray-700 px-6 py-3 rounded-full font-semibold transition-all duration-300"
                    data-filter="panorama">
                    Panorama
                </button>
            </div>
        </div>
    </section>

    <!-- Main Gallery Section -->
    <section class="py-16 bg-gradient-to-br from-gray-50 via-white to-blue-50">
        <div class="max-w-7xl mx-auto px-4">
            <!-- Gallery Grid -->
            <div id="gallery-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

                <!-- Sunrise Photos -->
                <div class="gallery-item group relative overflow-hidden rounded-2xl bg-gray-800 hover:scale-105 transition-all duration-500 cursor-pointer"
                    data-category="sunrise">
                    <div class="aspect-[3/4] overflow-hidden">
                        <img src="{{ asset('images/sunrise.jpg') }}" alt="Sunrise di Puncak Merbabu"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 right-4">
                            <h4 class="text-white font-bold mb-1">Sunrise Spektakuler</h4>
                            <p class="text-white/80 text-sm">Puncak Merbabu - Via Selo</p>
                            <div class="flex items-center mt-2 text-yellow-400">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                </svg>
                                <span class="text-sm">Golden Hour</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gallery-item group relative overflow-hidden rounded-2xl bg-gray-800 hover:scale-105 transition-all duration-500 cursor-pointer"
                    data-category="sunrise">
                    <div class="aspect-[/1] overflow-hidden">
                        <img src="{{ asset('images/sunrise2.jpg') }}" alt="Matahari Terbit Merbabu"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 right-4">
                            <h4 class="text-white font-bold mb-1">Cahaya Fajar</h4>
                            <p class="text-white/80 text-sm">Puncak Kenteng Songo</p>
                        </div>
                    </div>
                </div>

                <!-- Sabana Photos -->
                <div class="gallery-item group relative overflow-hidden rounded-2xl bg-gray-800 hover:scale-105 transition-all duration-500 cursor-pointer"
                    data-category="sabana">
                    <div class="aspect-[3/4] overflow-hidden">
                        <img src="{{ asset('images/sabana.jpg') }}" alt="Sabana Luas Merbabu"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 right-4">
                            <h4 class="text-white font-bold mb-1">Sabana Hijau</h4>
                            <p class="text-white/80 text-sm">Padang Rumput Luas</p>
                        </div>
                    </div>
                </div>

                <div class="gallery-item group relative overflow-hidden rounded-2xl bg-gray-800 hover:scale-105 transition-all duration-500 cursor-pointer"
                    data-category="sabana">
                    <div class="aspect-[1/1] w-full overflow-hidden">
                        <img src="{{ asset('images/pohon.jpg') }}" alt="Pohon di Sabana Merbabu"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 right-4">
                            <h4 class="text-white font-bold mb-1">Pohon Ikonik</h4>
                            <p class="text-white/80 text-sm">Sabana Merbabu</p>
                        </div>
                    </div>
                </div>


                <!-- Trek Photos -->
                <div class="gallery-item group relative overflow-hidden rounded-2xl bg-gray-800 hover:scale-105 transition-all duration-500 cursor-pointer"
                    data-category="trek">
                    <div class="aspect-[3/4] overflow-hidden">
                        <img src="{{ asset('images/trek2.jpg') }}" alt="Jalur Pendakian Merbabu"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 right-4">
                            <h4 class="text-white font-bold mb-1">Jalur Pendakian</h4>
                            <p class="text-white/80 text-sm">Via Wekas</p>
                        </div>
                    </div>
                </div>

                <div class="gallery-item group relative overflow-hidden rounded-2xl bg-gray-800 hover:scale-105 transition-all duration-500 cursor-pointer"
                    data-category="trek">
                    <div class="aspect-[1/1] overflow-hidden">
                        <img src="{{ asset('images/pohonpinus.jpg') }}" alt="Trek Hutan Pinus"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 right-4">
                            <h4 class="text-white font-bold mb-1">Hutan Pinus</h4>
                            <p class="text-white/80 text-sm">Jalur Via Selo</p>
                        </div>
                    </div>
                </div>

                <!-- Camping Photos -->
                <div class="gallery-item group relative overflow-hidden rounded-2xl bg-gray-800 hover:scale-105 transition-all duration-500 cursor-pointer"
                    data-category="camping">
                    <div class="aspect-[/2] overflow-hidden">
                        <img src="{{ asset('images/campingground.jpg') }}" alt="Camping Ground Merbabu"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 right-4">
                            <h4 class="text-white font-bold mb-1">Base Camp</h4>
                            <p class="text-white/80 text-sm">Area Camping</p>
                        </div>
                    </div>
                </div>

                <div class="gallery-item group relative overflow-hidden rounded-2xl bg-gray-800 hover:scale-105 transition-all duration-500 cursor-pointer"
                    data-category="camping">
                    <div class="aspect-[3/4] overflow-hidden">
                        <img src="{{ asset('images/camping2.jpg') }}" alt="Tenda di Merbabu"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 right-4">
                            <h4 class="text-white font-bold mb-1">Camping di Puncak</h4>
                            <p class="text-white/80 text-sm">Malam Berbintang</p>
                        </div>
                    </div>
                </div>

                <!-- Panorama Photos -->
                <div class="gallery-item group relative overflow-hidden rounded-2xl bg-gray-800 hover:scale-105 transition-all duration-500 cursor-pointer lg:col-span-2"
                    data-category="panorama">
                    <div class="aspect-[3/2] overflow-hidden">
                        <img src="{{ asset('images/panorama.jpg') }}" alt="Panorama 360 Merbabu"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 right-4">
                            <h4 class="text-white font-bold mb-1 text-xl">Panorama 360°</h4>
                            <p class="text-white/80">View Spektakuler dari Puncak</p>
                        </div>
                    </div>
                </div>

                <div class="gallery-item group relative overflow-hidden rounded-2xl bg-gray-800 hover:scale-105 transition-all duration-500 cursor-pointer"
                    data-category="panorama">
                    <div class="aspect-[3/4] overflow-hidden">
                        <img src="{{ asset('images/lautanawan.jpg') }}" alt="Lautan Awan Merbabu"
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

                <!-- Additional Photos -->
                <div class="gallery-item group relative overflow-hidden rounded-2xl bg-gray-800 hover:scale-105 transition-all duration-500 cursor-pointer"
                    data-category="sabana">
                    <div class="aspect-[/3] overflow-hidden">
                        <img src="{{ asset('images/merbabusabana.jpg') }}" alt="Sabana Merbabu"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 right-4">
                            <h4 class="text-white font-bold mb-1">Hamparan Sabana</h4>
                            <p class="text-white/80 text-sm">Keindahan Alam</p>
                        </div>
                    </div>
                </div>

                <div class="gallery-item group relative overflow-hidden rounded-2xl bg-gray-800 hover:scale-105 transition-all duration-500 cursor-pointer"
                    data-category="sunrise">
                    <div class="aspect-[3/4] overflow-hidden">
                        <img src="{{ asset('images/sunrise3.jpg') }}" alt="Golden Sunrise Merbabu"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 right-4">
                            <h4 class="text-white font-bold mb-1">Golden Sunrise</h4>
                            <p class="text-white/80 text-sm">Puncak Syarif</p>
                        </div>
                    </div>
                </div>

                <div class="gallery-item group relative overflow-hidden rounded-2xl bg-gray-800 hover:scale-105 transition-all duration-500 cursor-pointer"
                    data-category="trek">
                    <div class="aspect-[/3] overflow-hidden">
                        <img src="{{ asset('images/merbabubu.jpg') }}" alt="Pendakian Merbabu"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 right-4">
                            <h4 class="text-white font-bold mb-1">Menuju Puncak</h4>
                            <p class="text-white/80 text-sm">Perjalanan Mendaki</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Call to Action -->

    <!-- Modal for Image Viewing -->
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-90 z-50 hidden items-center justify-center p-4">
        <div class="relative max-w-4xl max-h-full">
            <button id="closeModal" class="absolute -top-12 right-0 text-white hover:text-gray-300 text-2xl">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <img id="modalImage" src="" alt="" class="max-w-full max-h-full object-contain rounded-lg">
            <div id="modalInfo"
                class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-6 text-white rounded-b-lg">
                <h4 id="modalTitle" class="text-xl font-bold mb-2"></h4>
                <p id="modalDescription" class="text-gray-300"></p>
            </div>
        </div>
    </div>

    <style>
        .glass-effect {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.1);
        }

        .gradient-text {
            background: linear-gradient(135deg, #10b981, #3b82f6);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .animate-gradient {
            background-size: 200% 200%;
            animation: gradient 3s ease infinite;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 1s ease-out;
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
    </style>

    <script>
        // Filter functionality
        const filterButtons = document.querySelectorAll('.filter-btn');
        const galleryItems = document.querySelectorAll('.gallery-item');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                filterButtons.forEach(btn => {
                    btn.classList.remove('active', 'bg-gradient-to-r', 'from-green-600',
                        'to-blue-600', 'text-white');
                    btn.classList.add('bg-gray-100', 'hover:bg-gray-200', 'text-gray-700');
                });

                // Add active class to clicked button
                button.classList.add('active', 'bg-gradient-to-r', 'from-green-600', 'to-blue-600',
                    'text-white');
                button.classList.remove('bg-gray-100', 'hover:bg-gray-200', 'text-gray-700');

                const filter = button.getAttribute('data-filter');

                galleryItems.forEach(item => {
                    if (filter === 'all' || item.getAttribute('data-category') === filter) {
                        item.style.display = 'block';
                        item.classList.add('animate-fade-in-up');
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });

        // Modal functionality
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        const modalTitle = document.getElementById('modalTitle');
        const modalDescription = document.getElementById('modalDescription');
        const closeModal = document.getElementById('closeModal');

        galleryItems.forEach(item => {
            item.addEventListener('click', () => {
                const img = item.querySelector('img');
                const title = item.querySelector('h4').textContent;
                const description = item.querySelector('p').textContent;

                modalImage.src = img.src;
                modalImage.alt = img.alt;
                modalTitle.textContent = title;
                modalDescription.textContent = description;

                modal.classList.remove('hidden');
                modal.classList.add('flex');
                document.body.style.overflow = 'hidden';
            });
        });

        closeModal.addEventListener('click', () => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = 'auto';
        });

        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                document.body.style.overflow = 'auto';
            }
        });
    </script>
@endsection
