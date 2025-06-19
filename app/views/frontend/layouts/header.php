<!doctype html>
<html>

<head>
  <!-- Mengatur charset untuk memastikan teks ditampilkan dengan benar -->
  <meta charset="UTF-8">

  <!-- Mengatur viewport untuk responsivitas pada perangkat mobile -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Icons -->
  <link rel="icon" type="image/png" href="<?= baseUrl('img/iconlogo.png') ?>">

  <!-- Title -->
  <title>WargaLapor!</title>

  <!-- Mengimpor Tailwind CSS dengan beberapa plugin tambahan -->
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>

  <!-- Link ke stylesheet Flowbite untuk komponen UI tambahan -->
  <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />

  <!-- Link ke Font Awesome untuk ikon tambahan -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Link ke Google Fonts untuk menggunakan font Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Link Aos -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Link Choices JS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />

  <link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css" rel="stylesheet">



  <!-- Link Custom CSS -->
  <link rel="stylesheet" href="<?= baseUrl('css/style.css') ?>">


  <!-- Konfigurasi Tailwind CSS -->
  <script>
    tailwind.config = {
      content: [
        './src/**/*.{html,js}', // Menyertakan jalur file HTML dan JS untuk Tailwind
      ],
      darkMode: 'class', // Mengaktifkan mode gelap dengan menggunakan kelas
      theme: {
        extend: {
          fontFamily: {
            sans: ['Poppins', 'sans-serif'], // Mengatur Poppins sebagai font sans default
          },
          colors: {
            primary: {
              "50": "#FDF2F2",
              "100": "#FDE8E8",
              "200": "#FBD5D5",
              "300": "#F8B4B4",
              "400": "#F98080",
              "500": "#F05252",
              "600": "#E02424",
              "700": "#C81E1E ",
              "800": "#9B1C1C",
              "900": "#771D1D"
            }
          },
          inset: {
            '13': '52px',
          },
        },
      },
      plugins: [], // Tidak ada plugin tambahan
    }
  </script>
</head>

<body class="">
  <!-- Konten halaman akan dimuat di sini -->