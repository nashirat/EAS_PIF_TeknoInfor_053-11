![image][logo]

[logo]: https://github.com/nashirat/EAS_PIF_TeknoInfor_053-11/blob/master/img/markdown.png

# Website EAS Pemrograman Interaktif

### Muhammad Sulthon Nashir 05311840000011
### Teknologi Informasi
### ELECTICS

___
- [Description](#Description)
- [Setup](#Setup)
- [Components](#Components)
- [Features](#Features)
- [Issues](#Issues)
___

### Description

  Website ini adalah website untuk menyalurkan barang dari penyumbang ke tenaga medis dan korban COVID-19.


### Setup
  * Susunan direktori adalah `/htdocs/eas/...`
  * Gunakan database `donate.sql` yang ada di dalam file `donate.rar`
  * Username dan password database ada di `app/config/config.php`

### Components

#### Controller

  Controller yang digunakan adalah :
  * `Home`
  * `Barang`
  * `Uang`

  `Home` berfungsi untuk menampilkan halaman Home.

  `Barang` berfungsi untuk menampilkan halaman list donasi barang, filter berdasarkan kategori, dan menambahkan barang ke database.

  `Uang` berfungsi untuk menampilkan list donasi uang.

#### Models

  Models yang digunakan adalah :
  * `Barang_model`
  * `Uang_model`

  `Barang_model` berfungsi untuk koneksi ke database, letak fungsi `getAllDonate` untuk mendapatkan semua data donasi barang jika kolom `barang` di database tidak kosong, `tambahDonasi` untuk insert data ke database, `cariDataDonate` untuk melakukan filter.

  `Uang_model` mempunyai fungsi `getAllDonate` yang akan mengambil data pendonasi uang jika kolom `nominal` di database tidak kosong.

#### Views

  Views yang digunakan adalah :
  * `barang/index.php`
  * `home/index.php`
  * `uang/index.php`
  * `templates/header.php`
  * `templates/footer.php`

  `templates` disini berfungsi untuk merapikan views yang lainnya, sehingga mempermudah perubahan front-end di views lainnya.

#### Features

###### Homepage
![image][home]

[home]: https://github.com/nashirat/EAS_PIF_TeknoInfor_053-11/blob/master/img/home.png




###### Form untuk mengisi donasi
![image][donasi]

[donasi]: https://github.com/nashirat/EAS_PIF_TeknoInfor_053-11/blob/master/img/donate.png

###### Page untuk melihat daftar donasi barang

![image][barang]

[barang]: https://github.com/nashirat/EAS_PIF_TeknoInfor_053-11/blob/master/img/barang.png

###### Page untuk melihat daftar donasi uang

![image][uang]

[uang]: https://github.com/nashirat/EAS_PIF_TeknoInfor_053-11/blob/master/img/uang.png

###### Pilihan dropdown barang dan Uang

![image][pilihan]

[pilihan]: https://github.com/nashirat/EAS_PIF_TeknoInfor_053-11/blob/master/img/pilihan.png

###### Filter berdasarkan kategori untuk donasi barang

![image][kategori]

[kategori]: https://github.com/nashirat/EAS_PIF_TeknoInfor_053-11/blob/master/img/kategori.png

###### Input Form

![image][pendonasi]

[pendonasi]: https://github.com/nashirat/EAS_PIF_TeknoInfor_053-11/blob/master/img/pendonasi.png

###### Donasi Berhasil

![image][berhasil]

[berhasil]: https://github.com/nashirat/EAS_PIF_TeknoInfor_053-11/blob/master/img/berhasil.png


#### Issues

* Jika user ingin melakukan donasi barang berbeda kategori secara bersamaan masih belum bisa dilakukan, karena harus merombak ulang aplikasi dan menggunakan ajax. Mungkin akan diimplementasikan kedepannya.
