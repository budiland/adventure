![logo-light](https://user-images.githubusercontent.com/70278182/177314640-9fd0e4ec-1ced-4953-b4e3-c211f888956f.png)

## Langkah-langkah menjalankan aplikasi
* Pastikan anda sudah memiliki aplikasi Laragon/XAMPP dengan Apache, MySQL, Tomcat dan phpMyAdmin terpasang
* Pastikan anda sudah composer laravel jika belum, berikut adalah [tutorialnya](https://www.niagahoster.co.id/blog/cara-install-composer/)
* Download adventure.zip ini dan mondrian.zip [disini](https://drive.google.com/drive/folders/1QrBOgrpBVdoJx6fI6jiZOH6jmMUhWba2?usp=sharing)
* Extract adventure.zip pada folder htdocs XAMPP (xampp/htdocs) atau www Laragon (laragon/www)
* Jalankan Laragon/Xampp control panel
* Start apache dan mysql server dan tomcat
* Buka phpMyAdmin (localhost/phpmyadmin)
* Buat database dengan nama adventure
* Extract adventure.rar dan import file adventure.sql yang telah didownload ke dalam database adventure.
* Masukan folder mondiran ke dalam server Tomcat bawaan dari XAMPP (xampp/tomcat/webapps)
* Jalankan aplikasi dengan mengakses http://adventure.test/dashboard
* Apabila masih gagal, buka cmd dan arahkan cmd ke xampp/htdocs/adventure (Untuk cara normalnya inputkan "cd.." 2 kali sehigga cmd mengarah hanya ke "C:\>" saja, kemudian inputkan "cd xampp/htdocs/adventure" menjadi "C:\xampp\htdocs\adventure>") (Pastikan composer telah dipasang) Kemudian imputkan "php artisan serve"
* Jika berhasil akan muncul seperti ini "Starting Laravel development server: http://127.0.0.1:8000". Kemudian bisa dilanjutkan dengan register terlebih dahulu
* Setelah berhasil regiter copy dan paste link berikut http://127.0.0.1:8000/dashboard

## Preview 
Model database yang telah diimport akan tampak seperti ini
![Preview DB](https://user-images.githubusercontent.com/70278182/177504208-9d96f27b-82c9-4f5b-a71f-1a9cc3cdb6c0.jpeg)
Untuk dashboardnya memiliki dua tema utama yang tampak seperti gambar dibawah
![White](https://user-images.githubusercontent.com/70278182/177508383-de17c3a6-c355-439a-a548-0aaa6e8bf9f9.jpeg)
![Black](https://user-images.githubusercontent.com/70278182/177508395-e26593dd-fb05-48c9-9230-6b686a081b94.jpeg)

## License

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
