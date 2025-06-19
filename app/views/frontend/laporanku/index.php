<main class="bg-gray-100 rounded-md lg:py-20 lg:px-20">
    <section class="container">
        <div class="p-5 lg:p-0" data-aos="zoom-in-up">
            <!-- Breadcrumbs -->
            <div class="mb-6">
                <nav aria-label="Breadcrumb">
                    <ol class="flex space-x-2 text-gray-600">
                        <li><a href="#" class="text-sm text-red-600 hover:text-red-700 lg:text-base">WargaLapor</a></li>
                        <li><span class="text-sm text-gray-400 lg:text-base"> &gt; </span></li>
                        <li><span class="text-sm text-gray-500 lg:text-base">LaporanKu</span></li>
                    </ol>
                </nav>
            </div>
            <!-- Page Header -->
            <div class="mb-8">
                <h1 class="text-xl font-extrabold text-red-600 lg:text-2xl">LaporanKu</h1>
            </div>
        </div>

        <div class="pb-20 lg:pb-0" data-aos="zoom-in-up" data-aos-offset="-100">

            <!-- Section Detail Aduan -->
            <div class="p-6 mx-5 bg-white rounded-lg shadow-lg lg:mx-0 lg:col-span-3">
                <div class="flex flex-wrap items-center justify-between pb-4 mb-6 border-b border-gray-300 lg:flex-nowrap">
                    <!-- Container untuk daftar menu -->
                    <div class="w-full overflow-x-auto lg:w-auto lg:overflow-x-visible">
                        <ul class="flex space-x-4 text-gray-600 flex-nowrap">
                            <li><a href="#" class="pb-2 text-red-600 border-b-2 border-red-600">Semua</a></li>
                            <li><a href="#" class="hover:text-red-600">Menunggu</a></li>
                            <li><a href="#" class="hover:text-red-600">Diverifikasi</a></li>
                            <li><a href="#" class="hover:text-red-600">Dalam Tindakan</a></li>
                            <li><a href="#" class="hover:text-red-600">Tuntas</a></li>
                            <li><a href="#" class="hover:text-red-600">Tidak Layak</a></li>
                        </ul>
                    </div>

                    <!-- Tombol untuk tambah laporan -->
                    <a href="laporan" class="px-4 py-2 mt-4 text-white bg-red-700 rounded-md lg:mt-0 hover:bg-red-700">Tambah Laporan</a>
                </div>


                <div id="myTabContent">
                    <!-- Tab Content Aduanku -->
                    <div class="space-y-6">
                        <p class="text-xs text-gray-500">Menampilkan <span id="aduanku-length">1</span> dari <span id="aduanku-total">1</span> aduan</p>
                        <div id="aduanku" class="space-y-4">
                            <div id="aduan-list" class="relative flex flex-col transition duration-300 bg-white border rounded-lg shadow cursor-pointer lg:flex-row hover:bg-gray-50" onclick="goToDetail('LGWP14376928')">
                                <div class="flex-none w-full lg:w-36">
                                    <a href="https://laporgub.jatengprov.go.id/detail/LGWP14376928">
                                        <img src="/storage/complaint/2024-08-28/2408281550275.png" class="object-cover w-full rounded-t-lg h-36 lg:rounded-none" alt="image card">
                                    </a>
                                </div>
                                <div class="flex-1 p-4">
                                    <a href="https://laporgub.jatengprov.go.id/detail/LGWP14376928">
                                        <p class="text-sm font-semibold text-red-600">LGWP14376928</p>
                                        <p class="text-sm text-gray-500">Kecamatan Serpong, 28 Agustus 2024</p>
                                        <p class="mt-2 text-sm text-gray-700">nyoba apakah aplikasi ini masih berfungsi atau tidak</p>
                                    </a>
                                    <div class="flex flex-wrap gap-2 mt-3">
                                        <span class="px-2 py-1 text-sm text-red-600 bg-red-100 rounded-full">Tidak Layak</span>
                                        <span class="px-2 py-1 text-sm text-gray-600 bg-gray-100 rounded-full">Anonim</span>
                                        <span class="px-2 py-1 text-sm text-gray-600 bg-gray-100 rounded-full">Rahasia</span>
                                    </div>
                                </div>

                                <!-- Dropdown button -->
                                <button id="dropdownButton" data-dropdown-toggle="dropdown" class="absolute top-5 right-5 text-white bg-red-700 rounded-lg text-sm p-1.5 shadow-md" type="button">
                                    <span class="sr-only">Open dropdown</span>
                                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                        <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                    </svg>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdown" class="absolute hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow top-10 right-2 w-fit">
                                    <ul class="py-2" aria-labelledby="dropdownButton">
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Ubah Laporan</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Publish Laporan</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Hapus Laporan</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div id="aduan-list" class="relative flex flex-col transition duration-300 bg-white border rounded-lg shadow cursor-pointer lg:flex-row hover:bg-gray-50" onclick="goToDetail('LGWP14376928')">
                                <div class="flex-none w-full lg:w-36">
                                    <a href="https://laporgub.jatengprov.go.id/detail/LGWP14376928">
                                        <img src="/storage/complaint/2024-08-28/2408281550275.png" class="object-cover w-full rounded-t-lg h-36 lg:rounded-none" alt="image card">
                                    </a>
                                </div>
                                <div class="flex-1 p-4">
                                    <a href="https://laporgub.jatengprov.go.id/detail/LGWP14376928">
                                        <p class="text-sm font-semibold text-red-600">LGWP14376928</p>
                                        <p class="text-sm text-gray-500">Kecamatan Serpong, 28 Agustus 2024</p>
                                        <p class="mt-2 text-sm text-gray-700">nyoba apakah aplikasi ini masih berfungsi atau tidak</p>
                                    </a>
                                    <div class="flex flex-wrap gap-2 mt-3">
                                        <span class="px-2 py-1 text-sm text-red-600 bg-red-100 rounded-full">Tidak Layak</span>
                                        <span class="px-2 py-1 text-sm text-gray-600 bg-gray-100 rounded-full">Anonim</span>
                                        <span class="px-2 py-1 text-sm text-gray-600 bg-gray-100 rounded-full">Rahasia</span>
                                    </div>
                                </div>

                                <!-- Dropdown button -->
                                <button id="dropdownButton" data-dropdown-toggle="dropdown" class="absolute top-5 right-5 text-white bg-red-700 rounded-lg text-sm p-1.5 shadow-md" type="button">
                                    <span class="sr-only">Open dropdown</span>
                                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                        <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                    </svg>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdown" class="absolute hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow top-10 right-2 w-fit">
                                    <ul class="py-2" aria-labelledby="dropdownButton">
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Ubah Laporan</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Publish Laporan</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Hapus Laporan</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div id="aduan-list" class="relative flex flex-col transition duration-300 bg-white border rounded-lg shadow cursor-pointer lg:flex-row hover:bg-gray-50" onclick="goToDetail('LGWP14376928')">
                                <div class="flex-none w-full lg:w-36">
                                    <a href="https://laporgub.jatengprov.go.id/detail/LGWP14376928">
                                        <img src="/storage/complaint/2024-08-28/2408281550275.png" class="object-cover w-full rounded-t-lg h-36 lg:rounded-none" alt="image card">
                                    </a>
                                </div>
                                <div class="flex-1 p-4">
                                    <a href="https://laporgub.jatengprov.go.id/detail/LGWP14376928">
                                        <p class="text-sm font-semibold text-red-600">LGWP14376928</p>
                                        <p class="text-sm text-gray-500">Kecamatan Serpong, 28 Agustus 2024</p>
                                        <p class="mt-2 text-sm text-gray-700">nyoba apakah aplikasi ini masih berfungsi atau tidak</p>
                                    </a>
                                    <div class="flex flex-wrap gap-2 mt-3">
                                        <span class="px-2 py-1 text-sm text-red-600 bg-red-100 rounded-full">Tidak Layak</span>
                                        <span class="px-2 py-1 text-sm text-gray-600 bg-gray-100 rounded-full">Anonim</span>
                                        <span class="px-2 py-1 text-sm text-gray-600 bg-gray-100 rounded-full">Rahasia</span>
                                    </div>
                                </div>

                                <!-- Dropdown button -->
                                <button id="dropdownButton" data-dropdown-toggle="dropdown" class="absolute top-5 right-5 text-white bg-red-700 rounded-lg text-sm p-1.5 shadow-md" type="button">
                                    <span class="sr-only">Open dropdown</span>
                                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                        <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                    </svg>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdown" class="absolute hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow top-10 right-2 w-fit">
                                    <ul class="py-2" aria-labelledby="dropdownButton">
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Ubah Laporan</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Publish Laporan</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Hapus Laporan</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab Content Aduan Ditandai -->
                    <div class="hidden" id="diskusi" role="tabpanel" aria-labelledby="diskusi-tab">
                        <p class="text-xs text-gray-500">Menampilkan <span id="aduan-ditandai-length">0</span> dari <span id="aduan-ditandai-total">0</span> aduan</p>
                        <div id="aduan-ditandai"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>