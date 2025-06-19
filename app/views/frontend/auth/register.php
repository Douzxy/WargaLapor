<section class="py-20 bg-gray-100">
    <div class="flex flex-col items-center justify-center">
        <!-- Logo dan nama aplikasi -->
        <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900">
            <img class="w-8 h-8 mr-2" src="<?= baseUrl('img/iconlogo.png') ?>" alt="logo">
            WargaLapor
        </a>
        <!-- Kontainer untuk form pendaftaran -->
        <div class="w-full bg-white border rounded-lg shadow md:mt-0 lg:max-w-md xl:p-0">
            <div class="p-6 space-y-4 md:space-y-6 lg:p-8">
                <!-- Judul form -->
                <h1 class="text-xl font-bold text-center text-gray-900 md:text-2xl">
                    Pendaftaran Akun
                </h1>
                <!-- Form pendaftaran -->
                <form class="space-y-4 md:space-y-6" action="#">
                    <div>
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama <span class="text-red-600">*</span></label>
                        <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5" placeholder="nama" required="">
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email <span class="text-red-600">*</span></label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5" placeholder="nama@gmail.com" required="">
                    </div>
                    <div>
                        <label for="noTlp" class="block mb-2 text-sm font-medium text-gray-900">Nomor Telepon <span class="text-gray-500">(Opsional)</span></label>
                        <input type="text" name="noTlp" id="noTlp" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5" placeholder="08123456789">
                    </div>
                    <!-- Input Kata Sandi -->
                    <div class="relative">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Kata Sandi <span class="text-red-600">*</span></label>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 pr-10"
                            required>
                        <!-- Eye Icon -->
                        <i id="togglePassword" class="absolute right-0 flex items-center pr-3 text-gray-500 cursor-pointer inset-y-13 fas fa-eye-slash">
                        </i>
                    </div>
                    <!-- Tombol submit -->
                    <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Daftar</button>
                    <!-- Tautan ke halaman login -->
                    <p class="text-sm font-light text-gray-500">
                        Sudah memiliki akun?<a href="login" class="font-medium text-primary-600 hover:underline"> Masuk Sekarang!</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Script untuk tombol tampilkan password -->
<script>
    document.getElementById('togglePassword').addEventListener('click', function() {
        const passwordField = document.getElementById('password');
        const icon = this;

        // Toggle password visibility
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        } else {
            passwordField.type = 'password';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        }
    });
</script>