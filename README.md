# Template Login by Eggie A.B
Repo ini adalah Sebuah Template Login dari saya yang Menggunakan Laravel 10, kalau kalian menggunakan versi Laravel yang berbeda coba saja dulu.

## Daftar Isi :
- Penjelasan Fitur
- File yang digunakan
- Penutup

## Penjelasan Fitur :
- Login dan Register yang responsive
- Bisa Logout Juga
- Hasing Password
- Controller Login, Register dan Logout jadi satu
- Bisa di Kembangkan Lebih Lanjut

## Folder yang digunakan
Beberapa Folder yang digunakan dalam Template Ini Yaitu

- app/Http/Controllers/LoginController.php


  file ini untuk logika login
- public/js/script.js

  
  file javascriptnya
- public/style.css

  
  file cssnya
- resources/views/login (satu folder)


  
  satu folder ini untuk file htmlnya
- resources/views/button.blade.php

  ini sebenarnya opsional untuk tombol di atas login, kalau kalian tidak mau, kalian tetap tambahkan saja filenya, tapi isinya kosong
- routes/web.php

  ini untuk routenya kalau tidak kalian salin kode ini, dan tempel di web.php kalian :
  ``` Web.php
    use App\Http\Controllers\LoginController;
    Route::get('/login', [LoginController::class, 'index_l'])->name('login')->middleware('guest');
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/register', [LoginController::class, 'index_r'])->name('register');
    Route::post('/register', [LoginController::class, 'store']);

## Penutup

Oke Mungkin sejauh ini Itu dulu ya, Terimakasih sudah Membaca sampai Akhir.
Jangan Malu Bertanya kepada saya apabila ada Kesusahan dalam memasang Template, Silahkan Kunjungi Website Ini untuk Melihat Beberapa Akun Media Sosial Saya di [3ggie.free.nf](https://3ggie.free.nf/public/kontak).
