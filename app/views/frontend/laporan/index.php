<main class="bg-gray-100 rounded-md lg:py-20 lg:px-20 ">
    <section class="">
        <div class="p-5 lg:p-0" data-aos="zoom-in-up">
            <!-- Breadcrumbs -->
            <div class="mb-6">
                <nav aria-label="Breadcrumb">
                    <ol class="flex space-x-2 text-gray-600">
                        <li><a href="#" class="text-sm text-red-600 hover:text-red-700 lg:text-base">WargaLapor</a></li>
                        <li><span class="text-sm text-gray-400 lg:text-base"> &gt; </span></li>
                        <li><span class="text-sm text-gray-500 lg:text-base">Ajukan Laporan</span></li>
                    </ol>
                </nav>
            </div>
            <div class="mb-8">
                <h1 class="text-xl font-extrabold text-red-600 lg:text-2xl">Ajukan Laporan</h1>
            </div>
        </div>
        <div class="pb-20 lg:px-40 lg:pb-0">
            <!-- Page Header -->

            <div class="" data-aos="zoom-in-down" data-aos-offset="-100">
                <!-- Header dengan judul dan deskripsi -->
                <div class="mb-10 text-center lg:mb-16">
                    <!-- Judul -->
                    <h2 class="text-xl font-extrabold leading-none tracking-tight text-red-600 md:text-2xl lg:text-3xl">
                        Layanan Pelaporan Online
                    </h2>
                    <!-- Deskripsi -->
                    <p class="text-lg lg:text-base">Portal Layanan Pelaporan Online Kota Tangerang Selatan</p>
                </div>
                <!-- Formulir pencarian laporan -->
                <div class="flex flex-col px-5 mb-10 lg:px-0">
                    <!-- Instruksi pencarian laporan -->
                    <p class="mb-2">Sudah pernah melaporkan? Cek kode laporan di sini.</p>
                    <form class="flex items-center gap-x-5">
                        <!-- Label untuk input pencarian (tersembunyi) -->
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Cari Laporan!</label>
                        <!-- Input pencarian -->
                        <input type="search" id="default-search" class="flex-grow p-4 text-xs font-semibold text-gray-900 uppercase border border-gray-300 rounded-lg bg-gray-50 focus:ring-red-500 focus:border-red-500 lg:text-sm" placeholder="CONTOH : TGSL12345" required />
                        <!-- Tombol pencarian -->
                        <button type="submit" class="inline-flex items-center p-4 text-xs font-medium text-white bg-red-700 border border-red-700 rounded-lg lg:text-sm hover:bg-red-800 ">
                            <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            Cari Laporan!
                        </button>
                    </form>
                </div>
                <!-- Formulir untuk mengirim laporan -->
                <form class="p-4 mx-5 bg-white rounded-md shadow-md lg:mx-0">
                    <h2 class="text-xl text-center text-red-600 font-semibold my-5">Formulir Laporan</h2>
                    <!-- Label untuk lampiran laporan -->
                    <label class="block mb-2 font-medium text-gray-900 " for="file_input">Lampiran Laporan <span class="text-red-600">*</span></label>
                    <div class="mb-5 bg-white rounded">
                        <!-- Dropzone untuk lampiran file -->
                        <div x-data="dataFileDnD()" class="relative flex flex-col p-4 text-gray-400 border border-gray-200 rounded shadow">
                            <!-- Area dropzone -->
                            <div x-ref="dnd"
                                class="relative flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer hover:border-red-300 bg-gray-50 hover:bg-gray-100 ">
                                <!-- Input file -->
                                <input accept="image/jpeg, image/jpg, image/png" type="file" multiple
                                    class="absolute inset-0 z-50 w-full h-full p-0 m-0 outline-none opacity-0 cursor-pointer"
                                    @change="addFiles($event)"
                                    @dragover="$refs.dnd.classList.add('border-red-300'); $refs.dnd.classList.add('ring-4'); $refs.dnd.classList.add('ring-inset');"
                                    @dragleave="$refs.dnd.classList.remove('border-red-300'); $refs.dnd.classList.remove('ring-4'); $refs.dnd.classList.remove('ring-inset');"
                                    @drop="$refs.dnd.classList.remove('border-red-300'); $refs.dnd.classList.remove('ring-4'); $refs.dnd.classList.remove('ring-inset');"
                                    title="" />
                                <!-- Konten dropzone -->
                                <div class="flex flex-col items-center justify-center pt-5 pb-6 text-center">
                                    <svg class="w-12 h-12 mb-5 text-gray-500 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                    </svg>
                                    <p class="mb-2 text-xs text-gray-500 lg:text-sm "><span class="font-semibold">Klik untuk unggah</span> atau seret dan lepas</p>
                                    <p class="text-xs text-gray-500 ">JPEG, JPG, atau PNG (5 MB, Maksimal 3 Gambar)</p>
                                </div>
                                <!-- Pesan error (jika ada) -->
                                <div x-show="errorMessage" class="absolute top-0 left-0 w-full py-2 text-center text-red-700 bg-red-100">
                                    <span x-text="errorMessage"></span>
                                </div>
                            </div>
                            <!-- Tampilan file yang di-upload -->
                            <template x-if="files.length > 0">
                                <div class="grid grid-cols-2 gap-4 mt-4 md:grid-cols-6 " @drop.prevent="drop($event)"
                                    @dragover.prevent="$event.dataTransfer.dropEffect = 'move'">
                                    <template x-for="(_, index) in Array.from({ length: files.length })">
                                        <!-- Thumbnail file -->
                                        <div class="relative flex flex-col items-center overflow-hidden text-center bg-gray-100 border rounded cursor-move select-none"
                                            style="padding-top: 100%;" @dragstart="dragstart($event)" @dragend="fileDragging = null"
                                            :class="{'border-red-600': fileDragging == index}" draggable="true" :data-index="index">
                                            <!-- Tombol hapus file -->
                                            <button class="absolute top-0 right-0 z-50 p-1 bg-white rounded-bl focus:outline-none" type="button" @click="remove(index)">
                                                <svg class="w-4 h-4 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                            <!-- Tampilkan tipe file yang sesuai -->
                                            <template x-if="files[index].type.includes('audio/')">
                                                <svg class="absolute w-12 h-12 text-gray-400 transform top-1/2 -translate-y-2/3"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                                                </svg>
                                            </template>
                                            <!-- Menampilkan ikon untuk file aplikasi atau file dengan tipe yang tidak teridentifikasi -->
                                            <template x-if="files[index].type.includes('application/') || files[index].type === ''">
                                                <svg class="absolute w-12 h-12 text-gray-400 transform top-1/2 -translate-y-2/3"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                                </svg>
                                            </template>
                                            <!-- Menampilkan gambar yang di-upload -->
                                            <template x-if="files[index].type.includes('image/')">
                                                <img class="absolute inset-0 z-0 object-cover w-full h-full border-4 border-white preview"
                                                    x-bind:src="loadFile(files[index])" />
                                            </template>
                                            <!-- Menampilkan video yang di-upload -->
                                            <template x-if="files[index].type.includes('video/')">
                                                <video
                                                    class="absolute inset-0 object-cover w-full h-full border-4 border-white pointer-events-none preview">
                                                    <fileDragging x-bind:src="loadFile(files[index])" type="video/mp4">
                                                </video>
                                            </template>
                                            <!-- Menampilkan nama file dan ukuran file -->
                                            <div class="absolute bottom-0 left-0 right-0 flex flex-col p-2 text-xs bg-white bg-opacity-50">
                                                <span class="w-full font-bold text-gray-900 truncate"
                                                    x-text="files[index].name">Loading</span>
                                                <span class="text-xs text-gray-900" x-text="humanFileSize(files[index].size)">...</span>
                                            </div>
                                            <!-- Menampilkan area yang berubah warna saat file di-drag masuk ke area ini -->
                                            <div class="absolute inset-0 z-40 transition-colors duration-300" @dragenter="dragenter($event)"
                                                @dragleave="fileDropping = null"
                                                :class="{'bg-red-200 bg-opacity-80': fileDropping == index && fileDragging != index}">
                                            </div>
                                        </div>
                                    </template>
                                </div>
                            </template>
                        </div>
                    </div>
                    <!-- Bagian untuk memasukkan isi laporan -->
                    <div class="mb-5" style="height: auto;">
                        <!-- Label untuk textarea yang menjelaskan bahwa input ini wajib diisi -->
                        <label for="message" class="block mb-2 font-medium text-gray-900 ">Isi Laporan <span class="text-red-600">*</span></label>
                        <!-- Textarea untuk menulis laporan dengan deskripsi yang harus jelas dan lengkap -->
                        <textarea id="message" rows="4" style="height: 105px; resize: none;" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-red-500 focus:border-red-500 placeholder:text-xs placeholder:lg:text-sm" placeholder="Tolong berikan deskripsi yang jelas dan lengkap tentang masalah atau keluhan Anda, termasuk lokasi atau alamat yang ingin dilaporkan. Informasi ini akan membantu kami memahami situasi Anda dengan lebih baik."></textarea>
                    </div>
                    <!-- Bagian untuk memilih lokasi laporan -->
                    <div class="mb-5">
                        <!-- Label untuk dropdown lokasi laporan yang menjelaskan bahwa input ini wajib diisi -->
                        <!-- Dropdown pertama untuk memilih kecamatan -->
                        <label for="kecamatan" class="block mb-2 font-medium text-gray-900">Lokasi Laporan <span class="text-red-600">*</span></label>
                        <select id="kecamatan" name="kecamatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 mb-5 cursor-pointer">
                            <option value="Ciputat">Ciputat</option>
                            <option value="Ciputat Timur">Ciputat Timur</option>
                            <option value="Pondok Aren">Pondok Aren</option>
                            <option value="Serpong">Serpong</option>
                            <option value="Serpong Utara">Serpong Utara</option>
                            <option value="Setu">Setu</option>
                        </select>
                        <!-- Dropdown kedua untuk memilih kelurahan -->
                        <select id="kelurahan" name="kelurahan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 cursor-pointer">
                        </select>
                    </div>
                    <!-- Bagian untuk memilih opsi privasi dan tombol kirim -->
                    <div class="flex items-center justify-end mb-5 gap-x-5">
                        <!-- Bagian untuk opsi privasi -->
                        <div class="flex items-center gap-x-5">
                            <div class="flex items-center gap-x-5">


                                <div class="flex items-center">

                                </div>

                                <!-- Opsi untuk laporan anonim -->
                                <div class="group">
                                        <button class="group-hover:cursor-pointer" data-tooltip-target="tooltip-anonim" type="button">
                                            <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 focus:ring-transparent ">
                                            <label for="default-radio-1" class=" text-sm font-medium text-gray-900 dark:text-gray-300">Anonim</label>
                                        </button>
                                    <!-- Tooltip untuk opsi anonim -->
                                    <div id="tooltip-anonim" role="tooltip" class="absolute z-10 invisible inline-block w-1/3 px-3 py-2 text-sm font-medium text-center text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                        Nama Anda tidak akan tercantum di laporan
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </div>
                                <!-- Opsi untuk laporan rahasia -->
                                <div class="group">
                                    <button class="group:hover:cursor-pointer" data-tooltip-target="tooltip-rahasia" type="button">
                                        <input id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 focus:ring-transparent ">
                                        <label for="default-radio-2" class=" text-sm font-medium text-gray-900 dark:text-gray-300">Rahasia</label>
                                    </button>
                                    <!-- Tooltip untuk opsi rahasia -->
                                    <div id="tooltip-rahasia" role="tooltip" class="absolute z-10 invisible inline-block w-1/3 px-3 py-2 text-sm font-medium text-center text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                        Laporan Anda hanya terlihat oleh pihak berwenang, tidak dipublikasikan
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tombol kirim -->
                        <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

<!-- Script Upload IMG -->
<script>
    // Fungsi untuk menangani file drag and drop
    function dataFileDnD() {
        return {
            files: [], // Daftar file yang diunggah
            fileDragging: null, // Indeks file yang sedang di-drag
            fileDropping: null, // Indeks file yang sedang di-drop
            errorMessage: '', // Pesan kesalahan
            humanFileSize(size) {
                // Menghitung ukuran file dalam format yang dapat dibaca manusia
                const i = Math.floor(Math.log(size) / Math.log(1024));
                return (
                    (size / Math.pow(1024, i)).toFixed(2) * 1 +
                    " " + ["B", "kB", "MB", "GB", "TB"][i]
                );
            },
            remove(index) {
                // Menghapus file dari daftar
                let files = [...this.files];
                files.splice(index, 1);

                this.files = createFileList(files);
                this.errorMessage = '';
            },
            drop(e) {
                // Menyusun ulang file setelah drop
                let removed, add;
                let files = [...this.files];

                removed = files.splice(this.fileDragging, 1);
                files.splice(this.fileDropping, 0, ...removed);

                this.files = createFileList(files);

                this.fileDropping = null;
                this.fileDragging = null;
            },
            dragenter(e) {
                // Menyimpan indeks file yang sedang di-drop
                let targetElem = e.target.closest("[draggable]");

                this.fileDropping = targetElem.getAttribute("data-index");
            },
            dragstart(e) {
                // Menyimpan indeks file yang sedang di-drag
                this.fileDragging = e.target
                    .closest("[draggable]")
                    .getAttribute("data-index");
                e.dataTransfer.effectAllowed = "move";
            },
            loadFile(file) {
                // Membuat URL blob untuk file
                const preview = document.querySelectorAll(".preview");
                const blobUrl = URL.createObjectURL(file);

                preview.forEach(elem => {
                    elem.onload = () => {
                        URL.revokeObjectURL(elem.src);
                    };
                });

                return blobUrl;
            },
            addFiles(e) {
                // Menambahkan file baru dan menangani kesalahan
                const newFiles = [...e.target.files];
                const totalFiles = this.files.length + newFiles.length;
                let errorMessage = '';

                if (totalFiles > 3) {
                    errorMessage = 'Maksimal 3 gambar.';
                } else {
                    const oversizedFiles = newFiles.filter(file => file.size > 5 * 1024 * 1024);
                    if (oversizedFiles.length > 0) {
                        errorMessage = 'Ukuran file maksimal 5 MB.';
                    }
                }

                if (errorMessage) {
                    this.errorMessage = errorMessage;
                } else {
                    this.errorMessage = '';
                    const files = createFileList([...this.files], newFiles);
                    this.files = files;
                }
            }
        };
    }
</script>

<!-- Script Live Search Choices JS / Select -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Inisialisasi Choices.js untuk kecamatan
        const kecamatanSelect = new Choices('#kecamatan', {
            searchEnabled: true,
            placeholderValue: 'Kecamatan',
            searchPlaceholderValue: 'Cari Kecamatan...'
        });

        // Inisialisasi Choices.js untuk kelurahan
        const kelurahanSelect = new Choices('#kelurahan', {
            searchEnabled: true,
            placeholderValue: 'Kelurahan',
            searchPlaceholderValue: 'Cari Kelurahan...'
        });

        // Data kelurahan berdasarkan kecamatan
        const kelurahanOptions = {
            Ciputat: [{
                    value: 'Cipayung',
                    label: 'Cipayung'
                },
                {
                    value: 'Ciputat',
                    label: 'Ciputat'
                },
                {
                    value: 'Jombang',
                    label: 'Jombang'
                },
                {
                    value: 'Sawah Baru',
                    label: 'Sawah Baru'
                },
                {
                    value: 'Sawah Lama',
                    label: 'Sawah Lama'
                },
                {
                    value: 'Serua',
                    label: 'Serua'
                },
                {
                    value: 'Serua Indah',
                    label: 'Serua Indah'
                }
            ],
            'Ciputat Timur': [{
                    value: 'Cempaka Putih',
                    label: 'Cempaka Putih'
                },
                {
                    value: 'Cireundeu',
                    label: 'Cireundeu'
                },
                {
                    value: 'Pisangan',
                    label: 'Pisangan'
                },
                {
                    value: 'Pondok Ranji',
                    label: 'Pondok Ranji'
                },
                {
                    value: 'Rempoa',
                    label: 'Rempoa'
                },
                {
                    value: 'Rengas',
                    label: 'Rengas'
                }
            ],
            'Pondok Aren': [{
                    value: 'Jurangmangu Barat',
                    label: 'Jurangmangu Barat'
                },
                {
                    value: 'Jurangmangu Timur',
                    label: 'Jurangmangu Timur'
                },
                {
                    value: 'Pondok Kacang Barat',
                    label: 'Pondok Kacang Barat'
                },
                {
                    value: 'Pondok Kacang Timur',
                    label: 'Pondok Kacang Timur'
                },
                {
                    value: 'Perigi Lama',
                    label: 'Perigi Lama'
                },
                {
                    value: 'Perigi Baru',
                    label: 'Perigi Baru'
                },
                {
                    value: 'Pondok Aren',
                    label: 'Pondok Aren'
                },
                {
                    value: 'Pondok Karya',
                    label: 'Pondok Karya'
                },
                {
                    value: 'Pondok Jaya',
                    label: 'Pondok Jaya'
                },
                {
                    value: 'Pondok Betung',
                    label: 'Pondok Betung'
                },
                {
                    value: 'Pondok Pucung',
                    label: 'Pondok Pucung'
                }
            ],
            Serpong: [{
                    value: 'Buaran',
                    label: 'Buaran'
                },
                {
                    value: 'Ciater',
                    label: 'Ciater'
                },
                {
                    value: 'Cilenggang',
                    label: 'Cilenggang'
                },
                {
                    value: 'Lengkong Gudang',
                    label: 'Lengkong Gudang'
                },
                {
                    value: 'Lengkong Gudang Timur',
                    label: 'Lengkong Gudang Timur'
                },
                {
                    value: 'Lengkong Wetan',
                    label: 'Lengkong Wetan'
                },
                {
                    value: 'Rawa Buntu',
                    label: 'Rawa Buntu'
                },
                {
                    value: 'Rawa Mekar Jaya',
                    label: 'Rawa Mekar Jaya'
                },
                {
                    value: 'Serpong',
                    label: 'Serpong'
                }
            ],
            'Serpong Utara': [{
                    value: 'Jelupang',
                    label: 'Jelupang'
                },
                {
                    value: 'Lengkong Karya',
                    label: 'Lengkong Karya'
                },
                {
                    value: 'Pakualam',
                    label: 'Pakualam'
                },
                {
                    value: 'Pakulonan',
                    label: 'Pakulonan'
                },
                {
                    value: 'Paku Jaya',
                    label: 'Paku Jaya'
                },
                {
                    value: 'Pondok Jagung',
                    label: 'Pondok Jagung'
                },
                {
                    value: 'Pondok Jagung Timur',
                    label: 'Pondok Jagung Timur'
                }
            ],
            Setu: [{
                    value: 'Babakan',
                    label: 'Babakan'
                },
                {
                    value: 'Bakti Jaya',
                    label: 'Bakti Jaya'
                },
                {
                    value: 'Kedemangan',
                    label: 'Kedemangan'
                },
                {
                    value: 'Keranggan',
                    label: 'Keranggan'
                },
                {
                    value: 'Muncul',
                    label: 'Muncul'
                },
                {
                    value: 'Setu',
                    label: 'Setu'
                }
            ]
        };

        // Update Kelurahan options berdasarkan kecamatan yang dipilih
        kecamatanSelect.passedElement.element.addEventListener('change', function(event) {
            const selectedKecamatan = event.detail.value;
            const kelurahanList = kelurahanOptions[selectedKecamatan] || [];
            kelurahanSelect.clearChoices();
            kelurahanSelect.setChoices(kelurahanList, 'value', 'label', true);
        });
    });
</script>