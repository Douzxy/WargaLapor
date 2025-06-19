<!-- Modal Image -->
<div id="imageModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black bg-opacity-75">
    <div class="relative">
        <button class="absolute top-0 right-0 m-4 text-3xl text-red-600" onclick="closeModal()">&times;</button>
        <img id="modalImage" src="" alt="Modal Image" class="max-w-full max-h-screen rounded-md">
    </div>
</div>

<main class="bg-gray-100 rounded-md lg:py-20 lg:px-20">
    <section class="container">
        <div class="p-5" data-aos="zoom-in-up">
            <!-- Breadcrumbs -->
            <div class="mb-6">
                <nav aria-label="Breadcrumb">
                    <ol class="flex space-x-2 text-gray-600">
                        <li><a href="#" class="text-sm text-red-600 hover:text-red-700 lg:text-base">WargaLapor</a></li>
                        <li><span class="text-sm text-gray-400 lg:text-base"> &gt; </span></li>
                        <li><span class="text-sm text-gray-500 lg:text-base">LaporanKu</span></li>
                        <li><span class="text-sm text-gray-400 lg:text-base"> &gt; </span></li>
                        <li><span class="text-sm text-gray-500 lg:text-base">Detail</span></li>
                    </ol>
                </nav>
            </div>
            <!-- Page Header -->
            <div class="mb-8">
                <h1 class="text-xl font-extrabold text-red-600 lg:text-2xl">Detail</h1>
            </div>
        </div>
        <!-- Card aduan -->
        <div class="px-5 lg:px-0" data-aos="zoom-in-up" data-aos-offset="-100">
            <div class="grid grid-cols-3 gap-5 lg:min-h-fit lg:space-y-0">
                <!-- Section Progress dan Diskusi -->
                <div class="col-span-3 mb-6 lg:col-span-1 lg:pl-2 ">
                    <div class="p-2 bg-white shadow lg:mb-6">
                        <ul class="flex py-2 font-semibold text-center text-gray-500 border-b dark:text-gray-400 border-slate-200" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                            <li class="w-full pr-1" role="presentation">
                                <a href="#" class="inline-block w-full px-4 py-3 text-red-600 border-red-600 rounded-lg hover:bg-red-50 hover:text-red-700 active bg-red-50 dark:text-red-500 dark:hover:text-red-500 dark:border-red-500 active:bg-red-50" id="progress-tab">PROSES</a>
                            </li>
                        </ul>

                        <div id="myTabContent pt-8">
                            <!-- Tab Content Progres -->
                            <div class="p-4 rounded-lg w-[100%] lg:w-5/5 lg:pt-2 overflow-y-auto" id="progress" role="tabpanel" aria-labelledby="progress-tab" style="height: 25.1rem;">
                                <div class="flex flex-row gap-2 my-2">
                                    <div class="pt-1 md:flex md:justify-center">
                                        <i class="text-gray-600 fas fa-dot-circle"></i>
                                    </div>
                                    <div class="">
                                        <p class="font-medium text-gray-600 status-disposisi">Menunggu</p>
                                        <p class="pb-1 text-sm text-gray-400">
                                            Rabu, 28 Agustus 2024 - 15:50 WIB
                                        </p>
                                        <p class="pb-1 text-xs font-semibold text-gray-400">
                                            Admin
                                        </p>
                                        <div class="pb-1 text-xs text-gray-400">
                                            Laporan telah diteruskan ke DINAS ENERGI DAN SUMBER DAYA MINERAL
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-row gap-2 my-2">
                                    <div class="pt-1 md:flex md:justify-center">
                                        <i class="fas fa-dot-circle text-cyan-600"></i>
                                    </div>
                                    <div class="">
                                        <p class="font-medium status-disposisi text-cyan-600">Diverifikasi</p>
                                        <p class="pb-1 text-sm text-gray-400">
                                            Rabu, 28 Agustus 2024 - 15:50 WIB
                                        </p>
                                        <p class="pb-1 text-xs font-semibold text-gray-400">
                                            Admin
                                        </p>
                                        <div class="pb-1 text-xs text-gray-400">
                                            Laporan telah diteruskan ke DINAS ENERGI DAN SUMBER DAYA MINERAL
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-row gap-2 my-2">
                                    <div class="pt-1 md:flex md:justify-center">
                                        <i class="text-yellow-600 fas fa-dot-circle"></i>
                                    </div>
                                    <div class="">
                                        <p class="font-medium text-yellow-600 status-disposisi">Dalam Tindakan</p>
                                        <p class="pb-1 text-sm text-gray-400">
                                            Rabu, 28 Agustus 2024 - 15:50 WIB
                                        </p>
                                        <p class="pb-1 text-xs font-semibold text-gray-400">
                                            Admin
                                        </p>
                                        <div class="pb-1 text-xs text-gray-400">
                                            Laporan telah diteruskan ke DINAS ENERGI DAN SUMBER DAYA MINERAL
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-row gap-2 my-2">
                                    <div class="pt-1 md:flex md:justify-center">
                                        <i class="text-green-600 fas fa-dot-circle"></i>
                                    </div>
                                    <div class="">
                                        <p class="font-medium text-green-600 status-disposisi">Tuntas</p>
                                        <p class="pb-1 text-sm text-gray-400">
                                            Rabu, 28 Agustus 2024 - 15:50 WIB
                                        </p>
                                        <p class="pb-1 text-xs font-semibold text-gray-400">
                                            Admin
                                        </p>
                                        <div class="pb-1 text-xs text-gray-400">
                                            Laporan telah diteruskan ke DINAS ENERGI DAN SUMBER DAYA MINERAL
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Section Detail Aduan -->
                <div class="col-span-3 mb-6 lg:col-span-2 lg:pr-2">
                    <div class="bg-white shadow">
                        <!-- header card -->
                        <div class="grid grid-cols-2 p-4 border-b border-slate-200">
                            <div class="col-span-1">
                                <p class="text-base font-semibold">Rincian Aduan : <span class="text-red-600">LGMB36114090</span></p>
                            </div>
                        </div>

                        <!-- Content Card -->
                        <div class="p-4 border-b border-slate-200">
                            <!-- Tampilan dekstop -->
                            <div class="hidden lg:block">
                                <div class="grid grid-cols-3 gap-4 images">
                                    <div class="items-center justify-center col-span-1">
                                        <a href="#">
                                            <img src="https://i.pinimg.com/474x/0e/2a/e2/0e2ae21aa010d78c7a27a0287748c093.jpg" class="object-cover w-full rounded h-52" alt="image card" onclick="openModal(this)">
                                        </a>
                                    </div>
                                    <div class="items-center justify-center col-span-1">
                                        <a href="#">
                                            <img src="https://i.pinimg.com/474x/2d/16/2c/2d162c7e97143e38ac32e0587e92f09e.jpg" class="object-cover w-full rounded h-52" alt="image card" onclick="openModal(this)">
                                        </a>
                                    </div>
                                    <div class="items-center justify-center col-span-1">
                                        <a href="#">
                                            <img src="https://i.pinimg.com/474x/8c/c4/8b/8cc48bd6aa94d83d6d43e90f2e40517d.jpg" class="object-cover w-full rounded h-52" alt="image card" onclick="openModal(this)">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Tampilan Mobile -->
                            <div class="relative w-full max-w-2xl mx-auto lg:hidden">
                                <!-- Carousel wrapper -->
                                <div class="relative h-64 overflow-hidden rounded-lg">
                                    <!-- Slide 1 -->
                                    <div class="absolute inset-0 transition-transform duration-500 transform translate-x-0 carousel-item">
                                        <img src="https://i.pinimg.com/474x/0e/2a/e2/0e2ae21aa010d78c7a27a0287748c093.jpg" class="block object-cover w-full h-full cursor-pointer" alt="Slide 1" onclick="openModal(this)">
                                    </div>
                                    <!-- Slide 2 -->
                                    <div class="absolute inset-0 transition-transform duration-500 transform translate-x-full carousel-item">
                                        <img src="https://i.pinimg.com/474x/2d/16/2c/2d162c7e97143e38ac32e0587e92f09e.jpg" class="block object-cover w-full h-full cursor-pointer" alt="Slide 2" onclick="openModal(this)">
                                    </div>
                                    <!-- Slide 3 -->
                                    <div class="absolute inset-0 transition-transform duration-500 transform translate-x-full carousel-item">
                                        <img src="https://i.pinimg.com/474x/8c/c4/8b/8cc48bd6aa94d83d6d43e90f2e40517d.jpg" class="block object-cover w-full h-full cursor-pointer" alt="Slide 3" onclick="openModal(this)">
                                    </div>
                                </div>

                                <!-- Slider controls -->
                                <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" onclick="prevSlide()">
                                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full shadow-md bg-white/30 group-hover:bg-white/50">
                                        <svg class="w-4 h-4 text-red-700 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                                        </svg>
                                        <span class="sr-only">Previous</span>
                                    </span>
                                </button>
                                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" onclick="nextSlide()">
                                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full shadow-md bg-white/30 group-hover:bg-white/50">
                                        <svg class="w-4 h-4 text-red-700 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                        </svg>
                                        <span class="sr-only">Next</span>
                                    </span>
                                </button>

                                <!-- Slide indicators -->
                                <div class="absolute left-0 right-0 flex justify-center space-x-3 bottom-4">
                                    <button class="w-3 h-3 bg-gray-300 rounded-full focus:outline-none" onclick="currentSlide(0)" aria-label="Slide 1"></button>
                                    <button class="w-3 h-3 bg-gray-300 rounded-full focus:outline-none" onclick="currentSlide(1)" aria-label="Slide 2"></button>
                                    <button class="w-3 h-3 bg-gray-300 rounded-full focus:outline-none" onclick="currentSlide(2)" aria-label="Slide 3"></button>
                                </div>
                            </div>
                            <div class="py-3 content-text">
                                <p class="text-sm font-light text-gray-500">Kecamatan Serpong, Kelurahan Buaran, 28 Aug 2024</p>
                                <p class="pt-2 overflow-hidden text-sm">izin melapor bahwa di tempat kami sedang terjadi kelangkaan gas elpiji 3kg..di karenakan banyak warga yang menyalahgunakan untuk mesin pengairan sawah..sehingga kebutuhan warga untuk memasak jadi terhalang..mohon segera di tindak lanjuti..tks</p>
                            </div>

                            <div class="col-span-1 justify-self-end">
                                <span class="px-2 py-1 text-sm rounded-full bg-gray-100 text-gray-600">Anonim</span>
                                <span class="px-2 py-1 text-sm text-gray-600 bg-gray-100 rounded-full">Publik</span>
                            </div>
                        </div>



                        <!-- footer card -->
                        <div class="grid grid-cols-2 p-4 border-b border-slate-200">
                            <div class="flex justify-between col-span-2 lg:col-span-1 lg:justify-start">
                                <button type="button" class=" text-white bg-red-700 hover:bg-red-800 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 ">Bagikan Link
                                    <i class="mr-1 fas fa-share-alt"></i>

                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Script Caraousel dan Modal Image -->
<script>
    let currentIndex = 0; // Index slide yang sedang ditampilkan
    const slides = document.querySelectorAll('.carousel-item'); // Semua slide dalam carousel
    const indicators = document.querySelectorAll('.absolute button'); // Tombol navigasi

    // Fungsi untuk menampilkan slide berdasarkan index
    function showSlide(index) {
        // Mengatur posisi slide
        slides.forEach((slide, i) => {
            slide.style.transform = `translateX(${(i - index) * 100}%)`;
        });
        // Mengatur tombol navigasi
        indicators.forEach((indicator, i) => {
            indicator.classList.toggle('bg-red-700', i === index);
            indicator.classList.toggle('bg-gray-300', i !== index);
        });
    }

    // Fungsi untuk menampilkan slide sebelumnya
    function prevSlide() {
        // Mengatur index slide
        currentIndex = (currentIndex > 0) ? currentIndex - 1 : slides.length - 1;
        showSlide(currentIndex);
    }

    // Fungsi untuk menampilkan slide berikutnya
    function nextSlide() {
        // Mengatur index slide
        currentIndex = (currentIndex < slides.length - 1) ? currentIndex + 1 : 0;
        showSlide(currentIndex);
    }

    // Fungsi untuk menampilkan slide berdasarkan index
    function currentSlide(index) {
        currentIndex = index;
        showSlide(currentIndex);
    }

    // Mengatur carousel pada saat awal
    showSlide(currentIndex);

    // Fungsi untuk membuka modal image
    function openModal(image) {
        const modal = document.getElementById("imageModal");
        const modalImg = document.getElementById("modalImage");
        modal.classList.remove('hidden');
        modalImg.src = image.src;
    }

    // Fungsi untuk menutup modal image
    function closeModal() {
        const modal = document.getElementById("imageModal");
        modal.classList.add('hidden');
    }
</script>