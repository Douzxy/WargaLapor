<main class="bg-gray-100 rounded-md lg:py-20 lg:px-20 ">
    <section class="overflow-x-hidden overflow-y-hidden">
        <div class="container max-w-screen-xl px-4 mx-auto">

            <!-- Judul Utama dan Deskripsi -->
            <div class="mt-10 mb-10 text-center lg:mt-0" data-aos="zoom-in-up" data-aos-offset="-100">
                <!-- Judul Utama -->
                <h1 class="mb-5 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl lg:text-5xl">
                    Warga<span class='text-primary-600'>Lapor!</span>
                </h1>
                <!-- Deskripsi -->
                <p id="" class="text-lg font-normal text-gray-900 lg:text-xl lg:px-16 xl:px-48">
                    WargaLapor adalah solusi digital terdepan untuk pelaporan online di Tangerang Selatan. Platform ini mempermudah warga dalam menyampaikan berbagai isu, sebagai bagian dari komitmen pemerintah untuk meningkatkan keterlibatan masyarakat dan transparansi dalam pelayanan publik.
                </p>
            </div>

            <!-- Kontainer Statistik -->
            <div class="flex flex-col items-center justify-center mb-20" data-aos="zoom-in-up">
                <!-- Judul Statistik -->
                <h2 class="flex justify-center mb-5 text-xl font-semibold text-red-600">
                    Jumlah Laporan dan Pengguna
                </h2>

                <!-- Kontainer Statistik -->
                <div class="rounded-lg " id="stats" role="tabpanel" aria-labelledby="stats-tab">
                    <dl class="flex flex-row text-gray-900">
                        <!-- Statistik Pelaporan -->
                        <div class="flex flex-col items-center justify-center px-10 border-r border-gray-400 gap-y-2">
                            <img src="<?= baseUrl('img/complain.png') ?>" alt="Ikon Pelaporan" class="h-16">
                            <dt class="text-3xl font-extrabold">42.659</dt>
                            <dd class="text-gray-500">Pelaporan</dd>
                        </div>

                        <!-- Statistik Pengguna -->
                        <div class="flex flex-col items-center justify-center px-10 gap-y-2">
                            <img src="<?= baseUrl('img/pengguna.png') ?>" alt="Ikon Pengguna" class="h-16">
                            <dt class="text-3xl font-extrabold">43.824</dt>
                            <dd class="text-gray-500">Pengguna</dd>
                        </div>
                    </dl>
                </div>
            </div>

            <!-- Tahapan Penanganan Laporan -->
            <div class="relative flex flex-col items-center justify-center mb-20 lg:mb-80" data-aos="fade-up">
                <!-- Judul Tahapan Penanganan Laporan -->
                <h2 class="flex justify-center mb-5 text-xl font-semibold text-red-600">
                    Tahapan Penanganan Laporan
                </h2>

                <!-- Daftar Tahapan -->
                <ol class="flex flex-col items-center justify-center w-full gap-10 px-24 lg:flex-row lg:gap-0">
                    <!-- Tahapan Pengisian Formulir Laporan -->
                    <li class="flex items-center w-full justify-center lg:after:content-[''] lg:after:w-full lg:after:h-1 lg:after:border-b lg:after:border-red-100 lg:after:border-4 after:inline-block">
                        <div class="relative flex flex-col items-center">
                            <span class="relative flex items-center justify-center w-16 h-16 bg-red-600 rounded-full lg:h-14 lg:w-14 shrink-0">
                                <i class="text-2xl text-white fa-solid fa-file-pen lg:text-xl"></i>
                            </span>
                            <div class="mt-1 text-center lg:absolute top-14 w-80">
                                <h3 class="mb-1 text-lg font-medium leading-tight">Pengisian Formulir Laporan</h3>
                                <p class="px-14">Lengkapi formulir dengan informasi yang detail dan akurat mengenai laporan Anda. Pastikan semua data yang relevan dimasukkan untuk memperlancar proses verifikasi.</p>
                            </div>
                        </div>
                    </li>

                    <!-- Tahapan Verifikasi Pengajuan -->
                    <li class="flex items-center w-full justify-center lg:after:content-[''] lg:after:w-full lg:after:h-1 lg:after:border-b lg:after:border-red-100 lg:after:border-4 after:inline-block">
                        <div class="relative flex flex-col items-center">
                            <span class="relative flex items-center justify-center w-16 h-16 bg-red-600 rounded-full lg:h-14 lg:w-14 shrink-0">
                                <i class="text-2xl text-white fa-solid fa-check lg:text-xl"></i>
                            </span>
                            <div class="mt-1 text-center lg:absolute top-14 w-80">
                                <h3 class="mb-1 text-lg font-medium leading-tight">Verifikasi Pengajuan</h3>
                                <p class=" px-14">Tim kami akan melakukan verifikasi terhadap formulir yang telah Anda kirimkan. Proses ini bertujuan untuk memastikan bahwa informasi yang disediakan valid dan memenuhi kriteria pengolahan.</p>
                            </div>
                        </div>
                    </li>

                    <!-- Tahapan Tindak Lanjut -->
                    <li class="flex items-center w-full justify-center lg:after:content-[''] lg:after:w-full lg:after:h-1 lg:after:border-b lg:after:border-red-100 lg:after:border-4 after:inline-block">
                        <div class="relative flex flex-col items-center">
                            <span class="relative flex items-center justify-center w-16 h-16 bg-red-600 rounded-full lg:h-14 lg:w-14 shrink-0">
                                <i class="text-2xl text-white fa-solid fa-gear lg:text-xl"></i>
                            </span>
                            <div class="mt-1 text-center lg:absolute top-14 w-80">
                                <h3 class="mb-1 text-lg font-medium leading-tight">Tindak Lanjut</h3>
                                <p class=" px-14">Setelah verifikasi selesai, laporan Anda akan ditindaklanjuti oleh tim kami. Kami akan melakukan investigasi dan mengambil langkah-langkah yang diperlukan untuk menyelesaikan masalah yang Anda laporkan.</p>
                            </div>
                        </div>
                    </li>

                    <!-- Tahapan Tuntas -->
                    <li class="flex items-center justify-center">
                        <div class="relative flex flex-col items-center">
                            <span class="relative flex items-center justify-center w-16 h-16 bg-red-600 rounded-full lg:h-14 lg:w-14 shrink-0">
                                <i class="text-2xl text-white fa-solid fa-flag-checkered lg:text-xl"></i>
                            </span>
                            <div class="mt-1 text-center lg:absolute top-14 w-80">
                                <h3 class="mb-1 text-lg font-medium leading-tight">Tuntas</h3>
                                <p class=" px-14">Setelah proses tindak lanjut selesai, kami akan menginformasikan hasil dan tindakan yang telah diambil. Anda akan menerima pembaruan melalui akun Anda.</p>
                            </div>
                        </div>
                    </li>
                </ol>

                <!-- Daftar Tahapan Mobile -->

            </div>

            <!-- Ajakan Bertindak -->
            <div class="mb-20 text-center" data-aos="fade-up">
                <!-- Judul -->
                <h2 class="flex justify-center mb-2 text-xl font-semibold text-red-600">
                    Sampaikan Masalah Anda, Kami Hadir untuk Menyelesaikannya
                </h2>

                <!-- Deskripsi -->
                <p class="mb-5 text-lg font-normal">
                    Tindakan Cepat, Respons Maksimal. <br>
                    Laporan Anda Akan Kami Tanggapi dalam 1x24 Jam
                </p>

                <!-- Tombol Aksi -->
                <a href="laporan">
                    <button type="button" class="text-white text-sm lg:text-base bg-red-700 hover:bg-red-800 font-medium rounded-lg  px-5 py-2.5 shadow-xl">
                        Laporkan Sekarang!
                    </button>
                </a>
            </div>

            <!-- Bagian FAQ -->
            <div class="flex flex-col items-center justify-center w-full mb-20" data-aos="fade-up">
                <!-- Container utama untuk FAQ -->
                <div class="w-5/6 border-transparent lg:w-2/3">
                    <!-- Judul FAQ -->
                    <h2 class="flex justify-center mb-5 text-xl font-semibold text-red-600">
                        Pertanyaan Yang Sering Ditanyakan
                    </h2>

                    <!-- Accordion untuk FAQ -->
                    <div id="accordion-collapse" class="bg-white shadow-md rounded-t-xl" data-accordion="collapse">
                        <!-- Pertanyaan 1 -->
                        <div class="answer-1">
                            <h2 id="accordion-collapse-heading-1">
                                <button type="button" class="flex items-center justify-between w-full gap-3 p-5 font-medium text-gray-500 border border-b-0 border-gray-200 rtl:text-right rounded-t-xl hover:bg-gray-100" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                                    <span>Bagaimana cara saya melapor?</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                                <div class="p-5 border border-b-0 border-gray-200">
                                    <p class="mb-2 text-gray-500">Anda dapat mengakses situs web "WargaLapor", masuk ke akun Anda, dan klik tombol "Ajukan Laporan".</p>
                                    <p class="mb-2 text-gray-500">Isi formulir yang disediakan dengan informasi yang lengkap dan akurat mengenai laporan Anda, lalu kirim. Tim kami akan segera menindaklanjuti laporan Anda.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Pertanyaan 2 -->
                        <div class="answer-2">
                            <h2 id="accordion-collapse-heading-2">
                                <button type="button" class="flex items-center justify-between w-full gap-3 p-5 font-medium text-gray-500 border border-b-0 border-gray-200 rtl:text-right hover:bg-gray-100" data-accordion-target="#accordion-collapse-body-2" aria-expanded="true" aria-controls="accordion-collapse-body-2">
                                    <span>Apakah saya bisa melaporkan laporan tanpa membuat akun?</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                                <div class="p-5 border border-b-0 border-gray-200">
                                    <p class="mb-2 text-gray-500">Demi keamanan dan keakuratan data, setiap laporan harus dilaporkan menggunakan akun terdaftar. Ini juga memudahkan kami untuk menghubungi Anda jika diperlukan informasi tambahan.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Pertanyaan 3 -->
                        <div class="answer-3">
                            <h2 id="accordion-collapse-heading-3">
                                <button type="button" class="flex items-center justify-between w-full gap-3 p-5 font-medium text-gray-500 border border-b-0 border-gray-200 rtl:text-right hover:bg-gray-100" data-accordion-target="#accordion-collapse-body-3" aria-expanded="true" aria-controls="accordion-collapse-body-3">
                                    <span>Bagaimana saya bisa mengetahui status laporan saya?</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                                <div class="p-5 border border-b-0 border-gray-200">
                                    <p class="mb-2 text-gray-500">Setelah melaporkan laporan, Anda dapat memantau statusnya dengan masuk ke akun Anda dan mengunjungi halaman "LaporanKu". Di sana, Anda akan melihat perkembangan terbaru dari laporan yang telah Anda kirimkan.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Pertanyaan 4 -->
                        <div class="answer-4">
                            <h2 id="accordion-collapse-heading-4">
                                <button type="button" class="flex items-center justify-between w-full gap-3 p-5 font-medium text-gray-500 border border-b-0 border-gray-200 rtl:text-right hover:bg-gray-100" data-accordion-target="#accordion-collapse-body-4" aria-expanded="true" aria-controls="accordion-collapse-body-4">
                                    <span>Berapa lama waktu yang diperlukan untuk menindaklanjuti laporan?</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                                <div class="p-5 border border-b-0 border-gray-200">
                                    <p class="mb-2 text-gray-500">Waktu penanganan laporan bervariasi tergantung pada kompleksitas masalah yang dilaporkan. Namun, kami berusaha untuk menanggapi setiap laporan dalam waktu 3-5 hari kerja.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Pertanyaan 5 -->
                        <div class="answer-5">
                            <h2 id="accordion-collapse-heading-5">
                                <button type="button" class="flex items-center justify-between w-full gap-3 p-5 font-medium text-gray-500 border border-b border-gray-200 rtl:text-right hover:bg-gray-100" data-accordion-target="#accordion-collapse-body-5" aria-expanded="true" aria-controls="accordion-collapse-body-5">
                                    <span>Apakah identitas saya aman jika saya melaporkan suatu hal yang sensitif?</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-5" class="hidden" aria-labelledby="accordion-collapse-heading-5">
                                <div class="p-5 border border-b border-gray-200">
                                    <p class="mb-2 text-gray-500">Identitas Anda akan selalu dijaga dengan sangat hati-hati. Anda memiliki fleksibilitas untuk melaporkan laporan secara anonim, publik, atau privat, sesuai dengan preferensi dan kebutuhan Anda. Kami memastikan bahwa laporan Anda diproses dengan penuh perhatian dan sesuai dengan pilihan yang Anda buat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</main>