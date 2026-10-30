JELAJAH WISATA INDONESIA

IDENTITAS MAHASISWA

Nama Lengkap: Desi Nuryani
NIM: C2483207006
Kelas: PT15A
Program Studi: Pendidikan Teknologi Informasi
Universitas: Universitas Muhammadiyah Tasikmalaya
Judul Proyek: Jelajah Wisata Indonesia

DESKRIPSI APLIKASI

Jelajah Wisata Indonesia merupakan website sederhana yang saya buat menggunakan framework Laravel. Website ini berisi informasi mengenai berbagai destinasi wisata yang ada di Indonesia.

Saya membuat website ini agar pengunjung bisa mengenal berbagai tempat wisata, mulai dari nama tempat, lokasi, kategori, hingga deskripsi singkat mengenai destinasi tersebut.

Website ini memiliki beberapa halaman, yaitu Beranda, Tentang, Destinasi, Kategori, dan Detail Wisata. Setiap halaman memiliki fungsi yang berbeda dan saling terhubung melalui menu navigasi.

Dalam pembuatan aplikasi ini, saya menggunakan array PHP untuk menyimpan data wisata. Jadi, website ini tidak menggunakan database. Data yang sudah disiapkan di Controller kemudian dikirim dan ditampilkan melalui halaman Blade.

TEKNOLOGI YANG DIGUNAKAN

1. PHP, sebagai bahasa pemrograman untuk mengolah data dan menjalankan aplikasi.
2. Laravel, sebagai framework yang digunakan untuk membangun website.
3. HTML, untuk membuat struktur halaman website.
4. CSS, untuk mengatur tampilan dan desain website.
5. Blade Template, untuk menampilkan data dan mengatur tampilan halaman pada Laravel.

PENJELASAN KONSEP MVC

1. Routing

Routing merupakan bagian yang mengatur alamat URL pada website dan menentukan halaman atau proses yang akan dijalankan ketika pengunjung membuka alamat tertentu.

Pada aplikasi ini, routing diatur melalui file routes/web.php.

Beberapa route yang digunakan antara lain:
- / untuk halaman Beranda.
- /tentang untuk halaman Tentang.
- /destinasi untuk menampilkan daftar destinasi wisata.
- /kategori untuk menampilkan kategori wisata.
- /destinasi/{id} untuk menampilkan detail wisata berdasarkan ID destinasi.

Dengan adanya routing, setiap halaman dapat diakses melalui URL yang sesuai.

2. Controller

Controller merupakan bagian yang mengatur proses aplikasi dan menyiapkan data sebelum ditampilkan ke halaman website.

Pada aplikasi ini, terdapat dua Controller, yaitu HomeController.php dan WisataController.php.

HomeController.php digunakan untuk mengatur halaman Beranda dan Tentang, sedangkan WisataController.php digunakan untuk mengatur daftar destinasi wisata, kategori, dan detail wisata.

Data destinasi wisata disimpan dalam bentuk array PHP di dalam Controller. Data tersebut kemudian dikirim ke View untuk ditampilkan kepada pengunjung.

3. View

View merupakan bagian yang menampilkan informasi kepada pengunjung dalam bentuk halaman website.

Pada aplikasi ini, halaman dibuat menggunakan Blade Template Laravel dan disimpan di dalam folder resources/views.

Halaman yang tersedia meliputi:
- home.blade.php untuk halaman Beranda.
- tentang.blade.php untuk halaman Tentang.
- wisata/index.blade.php untuk daftar destinasi wisata.
- wisata/kategori.blade.php untuk kategori wisata.
- wisata/detail.blade.php untuk detail wisata.
- layouts/app.blade.php untuk layout utama yang digunakan bersama oleh halaman lain.

Saya menggunakan @extends, @section, dan @yield untuk mengatur layout agar beberapa halaman dapat menggunakan struktur tampilan yang sama. Dengan begitu, bagian seperti navigasi dan struktur halaman bisa dibuat lebih konsisten.

Selain itu, saya menggunakan @foreach untuk menampilkan data wisata dari array secara berulang sehingga tidak perlu menuliskan setiap data secara manual di halaman.

SCREENSHOT APLIKASI

1. Halaman Beranda
<img width="1892" height="971" alt="Screenshot 2026-10-30 180935" src="https://github.com/user-attachments/assets/25c31b27-3c89-44c8-aa38-4ff6b125c455" />


2. Halaman Daftar Destinasi Wisata
<img width="1911" height="976" alt="Screenshot 2026-10-30 181006" src="https://github.com/user-attachments/assets/d18c25b4-46c6-4211-b7fd-a0334fe5cbff" />


3. Halaman Detail Wisata
<img width="1916" height="971" alt="Screenshot 2026-10-30 181044" src="https://github.com/user-attachments/assets/4237d357-7ada-4298-8f0e-064a6517128b" />


CARA MENJALANKAN APLIKASI

Untuk menjalankan aplikasi ini, berikut langkah-langkah yang perlu dilakukan:

1. Pastikan PHP dan Composer sudah terpasang di komputer.
2. Unduh atau clone source code dari repository GitHub.
3. Buka terminal dan masuk ke folder proyek.
4. Jalankan perintah composer install untuk memasang dependensi yang dibutuhkan Laravel.
5. Salin file .env.example menjadi .env. Pada Windows, file tersebut juga bisa disalin secara manual.
6. Jalankan perintah php artisan key:generate untuk membuat application key.
7. Jalankan perintah php artisan serve untuk menjalankan server Laravel.
8. Buka browser dan akses http://127.0.0.1:8000.

Setelah itu, website Jelajah Wisata Indonesia dapat dibuka melalui browser.

PENUTUP

Melalui pembuatan website Jelajah Wisata Indonesia ini, saya belajar bagaimana membangun website menggunakan framework Laravel dengan menerapkan konsep Routing, Controller, dan View.

Saya juga belajar menggunakan array PHP untuk menyimpan data, mengirimkan data dari Controller ke View, serta memanfaatkan Blade Template untuk menampilkan informasi pada halaman website.

Walaupun aplikasi ini tidak menggunakan database, proyek ini membantu saya memahami alur dasar kerja Laravel, mulai dari pengaturan URL, pengolahan data di Controller, hingga menampilkan informasi kepada pengunjung melalui View.

Saya berharap proyek ini bisa menjadi pengalaman dan latihan untuk meningkatkan pemahaman saya dalam mengembangkan website menggunakan Laravel.
