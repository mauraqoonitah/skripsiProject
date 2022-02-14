<h2 align="center">Sistem Informasi Survei Kepuasan Pengguna Layanan Berbasis Web untuk Penjaminan Mutu Internal di FMIPA UNJ</h2>

<p align="center">
<strong> Aplikasi ini dibuat sebagai alat bantu pengukuran sekaligus peningkatan kualitas mutu layanan di FMIPA UNJ dengan mengetahui kepuasan responden melalui survei, dan mempermudah proses analisis tingkat kepuasan.</strong>
   </p>

<p align="center">
<sub> Project dibuat sebagai syarat untuk memperoleh gelar Sarjana Komputer dari<br> Program Studi Ilmu Komputer Universitas Negeri Jakarta</sub> <br>
<sub>- Februari 2022 - </sub>
</p>

_This site was built using [Codeigniter 4](http://codeigniter.com/)_

<a href="#tada-php-support" title="PHP Versions Supported"><img alt="PHP Versions Supported" src="https://img.shields.io/badge/php-5.3%20to%208.1-777bb3.svg?logo=php&logoColor=white&labelColor=555555"></a>

<br>

# Fitur

**1. GPjM**

- mengelola data instrumen berupa kuesioner yang akan diisi oleh responden.
- melihat hasil tanggapan survei.
- mengelola data responden beserta tanggapannya.
- mengelola laporan hasil analisis kepuasan.
- melihat hasil analisis kepuasan dari setiap instrumen dan setiap butir pernyataannya.
- melihat kategori responden.
- mengelola pertanyaan untuk data diri kategori responden.
- membuat akun GPjM yang lainnya dan akun Kontributor agar mendapat akses ke halaman dashboard.
- mengelola akun dosen untuk akses instrumen tertentu beserta mengelola akun GPjM lainnya dan akun kontributor.
- menampilkan atau menyembunyikan hasil survei kepuasan pada instrumen tertentu ke website.

**2. Kontributor**

- melakukan Login dengan akun SIAKAD yang untuk masuk ke sistem.
- melihat data instrumen.
- melihat hasil tanggapan survei .
- melihat data responden.
- melihat laporan hasil analisis kepuasan.
- melihat grafik tingkat kepuasan dari setiap instrumen dan setiap butir pernyataannya.
- melihat kategori responden.
- melihat pertanyaan untuk data diri kategori responden.

**3. Responden**

- mengisi survei dengan menjawab butir pernyataan pada instrumen yang dipilih, berupa skala tingkat kepuasan dari Sangat Puas hingga Sangat Tidak Puas. Instrumen tertentu hanya dapat diisi oleh responden tertentu saja.
- melihat Riwayat pengisian survei yang sudah pernah diisi oleh responden tersebut.
- mengubah profil data diri.

**4. Pengunjung Website**

- Pengunjung dapat melihat hasil survei kepuasan pada instrumen tertentu pada website tanpa melakukan Login.

# Screenshot

<h2 align="center">Landing Page</h2>

|                                     |                                     |
| :---------------------------------: | :---------------------------------: |
| ![](docs/assets/landing-page-1.png) | ![](docs/assets/landing-page-2.png) |
|                                     |                                     |
| ![](docs/assets/landing-page-3.png) |                                     |

<br>
<h2 align="center">Authentication</h2>

|                                      |                                             |
| :----------------------------------: | :-----------------------------------------: |
|               Register               |               Cek Akun SIAKAD               |
| ![](docs/assets/auth/b-register.png) |    ![](docs/assets/auth/b-checkAkun.png)    |
|                Login                 | Register untuk Responden dengan akun SIAKAD |
|  ![](docs/assets/auth/b-login.png)   |   ![](docs/assets/auth/b-register-2.png)    |

<br>
<h2 align="center">Halaman Responden</h2>

|                                                     |                                                     |
| :-------------------------------------------------: | :-------------------------------------------------: |
|                   Form Data Diri                    |                   Pilih Instrumen                   |
| ![](docs/assets/responden/1-lengkapi-data-diri.png) |      ![](docs/assets/responden/2-beranda.png)       |
|                     Isi Survei                      |                                                     |
|   ![](docs/assets/responden/3-isi%20survei-1.png)   |    ![](docs/assets/responden/4-isi-survei-2.png)    |
|                                                     |                                                     |
|    ![](docs/assets/responden/5-isi-survei-3.png)    | ![](docs/assets/responden//6-isi%20survei-done.png) |
|              Riwayat Pengisian Survei               |                                                     |
|   ![](docs/assets/responden/7-riwayat-survei.png)   |                                                     |

<br>
<h2 align="center">Halaman GPjM - Kelola Survei</h2>

|                                                            |                                                              |
| :--------------------------------------------------------: | :----------------------------------------------------------: |
|                         Dashboard                          |                  Kelola Kategori Instrumen                   |
|        ![](docs/assets/admin/c-dashboard-admin.png)        |  ![](docs/assets/admin/kelolasurvei/1-kelola-kategori.png)   |
|                  Edit Kategori Instrumen                   |                  Tambah Kategori Instrumen                   |
|  ![](docs/assets/admin/kelolasurvei/2-edit-kategori.png)   |  ![](docs/assets/admin/kelolasurvei/3-tambah-kategori.png)   |
|                      Kelola Instrumen                      |                   Kelola Butir Pernyataan                    |
| ![](docs/assets/admin/kelolasurvei/4-kelola-instrumen.png) | ![](docs/assets/admin/kelolasurvei/5-petunjuk-pengisian.png) |
|                  Kelola Butir Pernyataan                   |                 Form Tambah Butir Pernyataan                 |
|  ![](docs/assets/admin/kelolasurvei/6-kelola%20butir.png)  | ![](docs/assets/admin/kelolasurvei/7-form-tambah-butir.png)  |

<br>
<h2 align="center">Halaman GPjM - Kelola Jenis Responden</h2>

|                                                                  |                                                                    |
| :--------------------------------------------------------------: | :----------------------------------------------------------------: |
|                      Kelola Jenis Responden                      |            Kelola Pertanyaan untuk Data Diri Responden             |
|       ![](docs/assets/admin/kategoriResponden/1-home.png)        | ![](docs/assets/admin/kategoriResponden/2-pertanyaan-datadiri.png) |
|                 Form Tambah Pertanyaan Data Diri                 |                                                                    |
| ![](docs/assets/admin/kategoriResponden/3-tambah-pertanyaan.png) |                                                                    |

<br>
<h2 align="center">Halaman GPjM - Kelola Hasil Survei</h2>

|                                                              |                                                                |
| :----------------------------------------------------------: | :------------------------------------------------------------: |
|                  Hasil Survei per-Responden                  |                      Data Diri Responden                       |
|      ![](docs/assets/admin/hasilsurvei/1-responden.png)      |  ![](docs/assets/admin/hasilsurvei/2-responden-datadiri.png)   |
|                  Tanggapan Survei Responden                  |                   Hasil Survei per-Instrumen                   |
| ![](docs/assets/admin/hasilsurvei/3-responden-response.png)  |       ![](docs/assets/admin/hasilsurvei/4-instrumen.png)       |
|                  Hasil Survei per-Instrumen                  |                   Hasil Survei per-Instrumen                   |
| ![](docs/assets/admin/hasilsurvei/5-instrumen-response1.png) | ![](docs/assets/admin/hasilsurvei/6-instrumen-hide-grafik.png) |
|                  Hasil Survei per-Instrumen                  |                                                                |
| ![](docs/assets/admin/hasilsurvei/7-instrumen-response2.png) |                                                                |

<br>
<h2 align="center">Halaman GPjM - Laporan</h2>

|                                                        |                                                          |
| :----------------------------------------------------: | :------------------------------------------------------: |
|             Kelola Laporan Hasil Analisis              |            Pilih Instrumen untuk Lihat Hasil             |
|       ![](docs/assets/admin/laporan/1-home.png)        |   ![](docs/assets/admin/laporan/2-pilih-instrumen.png)   |
|             Hasil Analisis pada Instrumen              |              Hasil Analisis pada Instrumen               |
| ![](docs/assets/admin/laporan/3-laporan-instrumen.png) | ![](docs/assets/admin/laporan/4-laporan-instrumen-2.png) |

<br>
<h2 align="center">Halaman GPjM - Kelola Akses Akun</h2>

|                                                                     |                                                          |
| :-----------------------------------------------------------------: | :------------------------------------------------------: |
|                        List Responden Dosen                         |         Kelola Akses Instrumen - Responden Dosen         |
|          ![](docs/assets/admin/aksesAkun/1-tab-dosen1.png)          |    ![](docs/assets/admin/aksesAkun/2-tab-dosen2.png)     |
|                 Membuat Akses Instrumen untuk Dosen                 |              Kelola Akses Akun Kontributor               |
| ![](docs/assets/admin/aksesAkun/3-tab-dosen2-tambah-akses-akun.png) | ![](docs/assets/admin/aksesAkun/4-tab%20kontributor.png) |
|                    GPjM membuat Akun Kontributor                    |                                                          |
| ![](docs/assets/admin/aksesAkun/5-tab-kontributor-tambah-akun.png)  |                                                          |

## Contact

- **Maura Qoonitah Putri** - _Initial work_ - [mauraqoonitah](https://github.com/mauraqoonitah)
