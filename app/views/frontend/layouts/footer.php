<footer class="p-4 bg-white sm:px-14 sm:pt-14 sm:pb-10 ">
    <!-- Kontainer Utama Footer -->
    <div class="flex flex-col items-center max-w-screen-xl mx-auto gap-y-2 sm:gap-y-5">

        <!-- Bagian Logo dan Informasi Pengelola -->
        <div class="flex flex-col w-full md:flex-row md:justify-between">
            <!-- Bagian Logo -->
            <div class="flex items-center mb-6 md:mb-0">
                <a href="" class="flex items-center">
                    <img src="<?= baseUrl('img/iconlogo.png') ?>" class="h-10 mr-3" alt="Logo" />
                    <span class="self-center text-lg font-semibold text-gray-600 sm:text-2xl whitespace-nowrap">Warga<span class='text-primary-600'>Lapor!</span></span>
                </a>
            </div>

            <!-- Bagian Informasi Pengelola -->
            <div class="">
                <div class="px-4 sm:flex sm:justify-between">
                    <div class="flex-col text-gray-500 ">
                        <p class="flex items-center justify-center mb-2 text-sm sm:text-base">Dikelola oleh</p>
                        <div class="flex justify-center gap-6">
                            <!-- Logo Tangerang Selatan -->
                            <div class="Tangerang-Selatan">
                                <button data-tooltip-target="Tangerang-Selatan" type="button" class="text-sm font-medium text-center text-white">
                                    <a href="#" class="text-gray-500 hover:text-gray-900 ">
                                        <img src="<?= baseUrl('img/icontangsel.svg') ?>" alt="Tangerang Selatan" class="h-14 hover:text-gray-900 " viewBox="0 0 125 35" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <span class="sr-only">Tangerang Selatan</span>
                                    </a>
                                </button>
                                <!-- Tooltip untuk Tangerang Selatan -->
                                <div id="Tangerang-Selatan" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-500 rounded-lg shadow-sm opacity-0 tooltip ">
                                    Tangerang Selatan
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </div>
                            <!-- Logo Al-Amanah -->
                            <div class="Al-Amanah">
                                <button data-tooltip-target="Al-Amanah" type="button" class="text-sm font-medium text-center text-white">
                                    <a href="#" class="text-gray-500 hover:text-gray-900 ">
                                        <img src="<?= baseUrl('img/iconalamanah.png') ?>" alt="Al-Amanah" class="h-14 hover:text-gray-900 " viewBox="0 0 125 35" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <span class="sr-only">Al-Amanah</span>
                                    </a>
                                </button>
                                <!-- Tooltip untuk Al-Amanah -->
                                <div id="Al-Amanah" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-500 rounded-lg shadow-sm opacity-0 tooltip ">
                                    Al-Amanah
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bagian Media Sosial -->
            <div class="flex-col mt-4 text-gray-500 sm:justify-center sm:mt-0 ">
                <p class="flex items-center justify-center mb-2 text-sm sm:text-base">Lebih dekat dengan kami</p>
                <div class="flex justify-center gap-4">
                    <!-- Facebook -->
                    <div class="facebook">
                        <button data-tooltip-target="facebook" type="button" class="text-sm font-medium text-center text-white">
                            <a href="#" class="text-gray-500 hover:text-gray-900 ">
                                <img src="<?= baseUrl('img/facebook.png') ?>" alt="Facebook" class="w-10 h-10">
                                <span class="sr-only">Facebook</span>
                            </a>
                        </button>
                        <!-- Tooltip untuk Facebook -->
                        <div id="facebook" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-500 rounded-lg shadow-sm opacity-0 tooltip ">
                            WargaLapor
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>
                    <!-- Twitter -->
                    <div class="twitter">
                        <button data-tooltip-target="twitter" type="button" class="text-sm font-medium text-center text-white">
                            <a href="#" class="text-gray-500 hover:text-gray-900 ">
                                <img src="<?= baseUrl('img/icontwitter.png') ?>" alt="Twitter" class="w-10 h-10">
                                <span class="sr-only">Twitter</span>
                            </a>
                        </button>
                        <!-- Tooltip untuk Twitter -->
                        <div id="twitter" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-500 rounded-lg shadow-sm opacity-0 tooltip ">
                            @WargaLapor
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>
                    <!-- Instagram -->
                    <div class="instagram">
                        <button data-tooltip-target="instagram" type="button" class="text-sm font-medium text-center text-white">
                            <a href="#" class="text-gray-500 hover:text-gray-900 ">
                                <img src="<?= baseUrl('img/instagram.png') ?>" alt="Instagram" class="w-10 h-10">
                                <span class="sr-only">Instagram</span>
                            </a>
                        </button>
                        <!-- Tooltip untuk Instagram -->
                        <div id="instagram" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-500 rounded-lg shadow-sm opacity-0 tooltip ">
                            @WargaLapor
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bagian Link Aplikasi dan Link Navigasi -->
        <div class="flex flex-col w-full h-full md:flex-row md:justify-between">
            <!-- Link Aplikasi -->
            <div class="">
                <div class="flex justify-center">
                    <div class="flex gap-4 text-gray-500 ">
                        <!-- Google Play -->
                        <div class="Al-Amanah">
                            <button type="button" class="text-sm font-medium text-center text-white">
                                <a href="#" class="text-gray-500 hover:text-gray-900 ">
                                    <img src="<?= baseUrl('img/icongetongoogleplay.png') ?>" alt="Google Play" class="h-10 hover:text-gray-900 " viewBox="0 0 125 35" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <span class="sr-only">playstore</span>
                                </a>
                            </button>
                        </div>
                        <!-- App Store -->
                        <div class="Tangerang-Selatan">
                            <button type="button" class="text-sm font-medium text-center text-white">
                                <a href="#" class="text-gray-500 hover:text-gray-900 ">
                                    <img src="<?= baseUrl('img/appstore.svg') ?>" alt="App Store" class="h-10 hover:text-gray-900 " viewBox="0 0 125 35" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <span class="sr-only">appstore</span>
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Link Navigasi -->
            <div class="flex items-center justify-center">
                <ul class="flex flex-wrap items-center mb-6 text-xs font-medium text-gray-600 gap-x-3 sm:text-base">
                    <li>
                        <a href="#" class="hover:underline">Beranda</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Ajukan Laporan</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">LaporanKu</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Jelajah Laporan</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Hak Cipta -->
        <div class="flex items-center justify-center w-full mt-4">
            <span class="text-sm text-gray-600 sm:text-center">Hak Cipta © 2024 <a href="https://flowbite.com" class="hover:underline">Smk Al-Amanah</a>.</span>
        </div>
    </div>
</footer>