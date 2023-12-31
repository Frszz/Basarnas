<?php
  require_once "../config/config.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- CDNS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/CSS/styleProfil.css" />

    <!-- favicon -->
    <link rel="shortcut icon" href="../assets/img/sar.ico" type="image/x-icon">

    <title>Profil | Basarnas</title>
  </head>
  <body>
    <!-- Start Navbar -->
      <header>
      <a href="" class="logo"><img src="../assets/img/sar nasional.jpeg" alt="Logo" width="40" height="40" class="d-inline-block rounded-circle" /> <img src="../assets/img/basarnas.png" alt="Logo" width="40" height="42" class="d-inline-block" /> Basarnas</a>
        <div class="navigation">
          <ul class="menu">
            <div class="close-btn"></div>
            <li class="menu-item"><a href="Beranda.php">Beranda</a></li>
            <li class="menu-item">
              <a class="sub-btn">Profil <i class="fas fa-angle-down"></i></a>
                <ul class="sub-menu">
                  <li class="sub-item"><a href="profil.php#">Visi & Misi</a></li>
                  <li class="sub-item"><a href="profil.php#page">Tugas Pokok dan Fungsi</a></li>
                  <li class="sub-item"><a href="profil.php#tree">Struktur Organisasi</a></li>
                  <li class="sub-item"><a href="profil.php#info">Profil Pengolah</a></li>
                </ul>
            </li>
            <li class="menu-item">
              <a class="sub-btn">Publikasi <i class="fas fa-angle-down"></i></a>
                <ul class="sub-menu">
                  <li class="sub-item"><a href="AK.php">Akuntabilitas Kinerja</a></li>
                  <li class="sub-item"><a href="Galeri.php">Galeri</a></li>
                </ul>
            </li>
            <li class="menu-item">
              <a class="sub-btn">Layanan <i class="fas fa-angle-down"></i></a>
                <ul class="sub-menu">
                  <li class="sub-item"><a href="P-Arsip.php">Peminjaman Arsip</a></li>
                  <li class="sub-item"><a href="D-Arsip.php">Daftar Arsip</a></li>
                </ul>
            </li>
            <li class="menu-item"><a href="Peraturan.php">Peraturan</a></li>
            <li class="menu-item"><a href="Hubungi-kami.php">Hubungi Kami</a></li>
          </ul>
        </div>
        <div class="menu-btn"></div>
      </header>
    <!-- End Navbar -->

    <!-- Start ViMi -->
      <section id="visi">
      <i class="bi bi-bookmark"></i>
        <div class="kolom">
            <h1 class="deskripsi">Visi</h1>
            <p><em>"Menjadikan Arsip Sebagai Simpul Pemersatu Bangsa Dalam Kerangka Negara Kesatuan Republik Indonesia."</em></p>
        </div>
      </section>
      <section id="misi">
        <div class="kolom">
            <h1 class="deskripsi">Misi</h1>
            <p> 
              <ol align="justify">
                <li>Memberdayakan arsip sebagai tulang punggung manajemen pemerintahan dan pembangunan. </li>
                <li>Memberdayakan arsip sebagai bukti akuntabilitas kinerja organisasi.</li>
                <li>Memberdayaan arsip sebagai alat bukti yang sah </li>
                <li>Melestarikan arsip sebagai memori kolektif dan jati diri bangsa dalam kerangka Negara Kesatuan Republik Indonesia</li>
                <li>Memberikan akses arsip kepada publik untuk kepentingan pemerintahan, pembangunan, penelitian, dan ilmu pengetahuan untuk kesejahteraan rakyat sesuai perauran perundang-undangan dan kaidah-kaidah kearsipan demi kemaslahatan bangsa.</li>
              </ol>  
            </p>
        </div>
      </section>
    <!-- End ViMi -->

    <!-- Start Page 2 -->
      <section id="page">
        <div class="kolom">
            <h1 class="deskripsi">Tugas Pokok dan Fungsi</h1>
            <div></div>
            <h3>Tugas Pokok</h3>
            <p align="justify"> &nbsp;&nbsp;Melaksanakan tugas pemerintahan di bidang kearsipan sesuai dengan ketentuan dan peraturan perundang-undangan</p>
            <div><br></div>
            <h3>Fungsi</h3>
            <p> 
              <ol align="justify">
                <li>Memberdayakan arsip sebagai tulang punggung manajemen pemerintahan dan pembangunan.</li> 
                <li>Memberdayakan arsip sebagai bukti akuntabilitas kinerja organisasi.</li> 
                <li>Memberdayaan arsip sebagai alat bukti yang sah.</li> 
                <li>Melestarikan arsip sebagai memori kolektif dan jati diri bangsa dalam kerangka Negara Kesatuan Republik Indonesia. </li>
                <li>Memberikan akses arsip kepada publik untuk kepentingan pemerintahan, pembangunan, penelitian, dan ilmu pengetahuan untuk kesejahteraan rakyat sesuai peraturan perundang-undangan dan kaidah-kaidah kearsipan demi kemaslahatan bangsa.</li>
              </ol>
            </p>
        </div>
      </section>
    <!-- End Page 2 -->

    <!-- Start Tree -->
      <section id="tree">
        <div class="kolom">
            <h1 class="deskripsi">Struktur Organisasi</h1>
            <div><img src="../assets/img/SO.jpeg" alt=""></div>
            <div><br></div>
            <p align="justify">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Organisasi Kearsipan Badan Nasional Pencarian dan Pertolongan diatur dalam Peraturan Kepala Badan Nasional 
              Pencarian dan Pertolongan Nomor 5 Tahun 2022 tentang Pedoman Pemeliharaan Arsip Dinamis di Lingkungan Badan 
              Nasional Pencarian dan Pertolongan.
            </p>
            <p>Berikut merupakan organisasi kearsipan Badan Nasional Pencarian dan Pertolongan :</p>
            <h3>A. Unit Pengolah</h3>
            <p> 
              <ol align="justify">
                <li>Biro Hukum dan Kepegawaian;</li>
                <li>Biro Perencanaan;</li>
                <li>Biro Umum;</li>
                <li>Pusat Data dan Informasi;</li>
                <li>Inspektorat;</li>
                <li>Direktorat Operasi;</li>
                <li>Direktorat Kesiapsiagaan;</li>
                <li>Direktorat Bina Tenaga;</li>
                <li>Direktorat Bina Potensi;</li>
                <li>Direktorat Sistem Komunikasi;</li>
                <li>Direktorat Sarana dan Prasarana;</li>
                <li>Kantor Pencarian dan Pertolongan di lingkungan Badan Nasional Pencarian dan Pertolongan; dan</li>
                <li>Balai Pendidikan dan Pelatihan Badan Nasional Pencarian dan Pertolongan.</li>
              </ol>
            <div><br></div>
            <h3>B. Unit Kearsipan I Biro Umum</h3>
            <p align="justify">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Unit Kearsipan adalah satuan kerja pada pencipta arsip yang mempunyai tugas dan tanggung jawab dalam penyelenggaraan 
              kearsipan. Unit Kearsipan I adalah Unit Kerja di bawah Sekretariat Utama yang mempunyai tugas dan tanggung jawab dalam 
              penyelenggaraan kearsipan, pengendalian dan pengarahan arsip dinamis aktif, pengelolaan arsip dinamis inaktif yang berasal 
              dari Unit Pengolah, pengarahan program arsip vital, akuisisi arsip, penyelenggaraan sistem informasi kearsipan, pembinaan,
              bimbingan, dan pengawasan terhadap pengelolaan kearsipan pada seluruh Unit Kerja di lingkungan Badan Nasional Pencarian dan
              Pertolongan. Unit Kearsipan II adalah unit organisasi Jabatan Pengawas yang salah satu kegiatan pokoknya melakukan pengelolaan
              arsip dinamis di Unit Kerja masing-masing. Unit Pengolah adalah satuan kerja pada pencipta arsip yang mempunyai tugas dan 
              tanggung jawab mengolah semua arsip yang berkaitan dengan kegiatan penciptaan arsip di lingkungannya.
            </p>
        </div>
      </section>
      </section>
    <!-- End Tree -->

    <!-- Start Info -->
      <section id="info">
      <h1 class="deskripsi">Profil Pengolah</h1>
        <div class="flex">
          <div class="content-section">
            <div class="card">
              <img src="../assets/img/card1.jpeg" alt="">
              <h2>Ofi Aufia Andini, A.Md</h2>
                <table border="5">
                  <tbody> 
                    <tr><td>NIP</td><td>:</td><td> &nbsp;199604072019022001</td></tr>
                    <tr><td>Tempat, Tanggal Lahir</td><td>:</td><td> &nbsp;Tebing Tinggi, 07 April 1996</td></tr>
                    <tr><td>Pendidikan</td><td>:</td><td> &nbsp;D3 Akuntansi USU 2016</td></tr>
                    <tr><td>Jabatan</td><td>:</td><td> &nbsp;Calon Arsiparis</td></tr>
                    <tr><td>Email</td><td>:</td><td> &nbsp;andiniofiaufia@gmail.com</td></tr>
                  </tbody>
                </table>
            </div>
            <div class="card">
              <img src="../assets/img/card2.jpeg" alt="">
              <h2>Marselina Tampubolon, A.Md.</h2>
              <table border="5">
                  <tbody> 
                    <tr><td>NIP</td><td>:</td><td> &nbsp;199409122019022002</td></tr>
                    <tr><td>Tempat, Tanggal Lahir</td><td>:</td><td> &nbsp;Medan, 12 September 1994</td></tr>
                    <tr><td>Pendidikan</td><td>:</td><td> &nbsp;Diploma III</td></tr>
                    <tr><td>Jabatan</td><td>:</td><td> &nbsp;Arsiparis Pelaksana</td></tr>
                    <tr><td>Email</td><td>:</td><td> &nbsp;-</td></tr>
                  </tbody>
                </table>
            </div>
          </div>
        </div>
      </section>
    <!-- End Info -->

    <!-- Start Footer -->
    <footer class="footer-distributed">
        <div class="footer-left">
            <h3>ARSIPARIS KANSAR<span> MEDAN</span></h3>
            <p class="footer-links">
                <a href="Beranda.php">Beranda</a>
                |
                <a href="Profil.php">Profil</a>
                |
                <a href="Hubungi-Kami.php">Hubungi Kami</a>
                |
                <a href="P-Arsip.php">Layanan</a>
            </p>
            <p class="footer-company-name">Copyright © 2021 <strong>Basarnas Medan</strong> All rights reserved</p>
        </div>
        <div class="footer-center">
            <div>
                <i class="bi bi-geo-alt-fill"></i>
                <p><span>Jl. Letjen Jamin Ginting No. 99 Kelurahan Sidomulyo, <br>Kecamatan Medan Tuntungan, Kota Medan</span>
                Sumatera Utara</p>
            </div>
            <div>
                <i class="bi bi-envelope-fill"></i>
                <p><a href="mailto:arsipariskansarmedan@gmail.com">arsipariskansarmedan@gmail.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>Tentang Kami</span>
                  Basarnas merupakan leading sektor resmi milik Indonesia pada operasi Search and Rescue (SAR). 
                  Dengan posisi tersebut, perannya begitu besar pada level nasional, bahkan internasional. 
                  Tujuan utama kehadiran Basarnas adalah menyediakan layanan pencarian dan pertolongan (SAR)
                  bagi seluruh warga dalam berbagai musibah.
            </p>
        </div>
      </footer>
    <!-- End Footer -->

    <!-- Bootstrap -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- CDNS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Toggle -->
      <script type="text/javascript">
        $(document).ready(function(){
          // toggle sub-menus
          $(".sub-btn").click(function(){
            $(this).next(".sub-menu").slideToggle();
          });
        });

        // Responsive Nav Menu
        var menu = document.querySelector(".menu");
        var menuBtn = document.querySelector(".menu-btn");
        var closeBtn = document.querySelector(".close-btn");

        menuBtn.addEventListener("click", () => {
          menu.classList.add("active")
        })
        closeBtn.addEventListener("click", () => {
          menu.classList.remove("active")
        })
      </script>
  </body>
</html>
