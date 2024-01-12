-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2023 at 06:38 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsdpjma`
--
CREATE DATABASE IF NOT EXISTS `dbsdpjma` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dbsdpjma`;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang` (
  `id_barang` int(10) NOT NULL,
  `id_merek` int(10) NOT NULL,
  `id_jenis` int(10) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `deskripsi_barang` text NOT NULL,
  `harga_modal` varchar(10) NOT NULL,
  `harga_jual` varchar(10) NOT NULL,
  `stok_barang` int(10) NOT NULL,
  `foto_barang` text NOT NULL,
  `status_barang` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `id_merek`, `id_jenis`, `nama_barang`, `deskripsi_barang`, `harga_modal`, `harga_jual`, `stok_barang`, `foto_barang`, `status_barang`) VALUES
(1, 1, 1, 'Mesin Bor Baterai Cordless Drill Makita DF 331 DF331', 'Mesin Baru Dari Makita br/ Dapet Baterai Lithium 12V 2pc br/ Charge 1 br/ Garansi 2tahun br/ br/ Besi 10mm br/ Kayu 20mm br/ 450-1700rpm br/ Torsi 24Nm(Maximum)', '1100000', '1245000', 41, 'mesinbor.jpg', 1),
(2, 2, 2, 'Avian 25CC Super Black', 'Avian Synthetic High Gloss Enamel kemasan 100 cc  Cat besi dan kayu memiliki kelebihan : - Sangat mengkilap - Daya tutup sangat baik - Bahan dasar alkyd - Berkualitas sangat tinggi - Melindungi permukaan terhadap cuaca, karat, jamur & rayap  Sangat cocok digunakan untuk pengecatan pagar, teralis, pintu, jendela, kusen, rolling door dan permukaan lainnya.  Tersedia dalam berbagai warna pilihan yang menarik dan variatif.  Cara pemakaian : - Bersihkan permukaan yang akan di cat dari debu, minyak dan kotoran - Permukaan yang akan di cat harus kering dan bersih - Lubang kecil atau retakan sebaiknya dibersihkan dulu sebelum di cat - Gunakan amplas untuk menghaluskan dan menambah daya rekat cat pada permukaan - Aduk hingga rata sebelum digunakan - Pemakaian cukup dengan 2 lapisan pengecatan - Warna Warna cerah tertentu memerlukan lebih dari 2 lapis untuk mendapatkan daya tutup yang sempurna  Gunakan thinner enamel (thinner B) dengan komposisi 5% - 10% sebagai pengencer cat sebelum digunakan.  Penjelasan Lain : - Masa pengeringan : 2-3 jam (kering sentuh) 12 jam (kering total) - Daya sebar teoritis : 13 - 15m²/liter/lapis - Daya tutup : 2 - 3 lapis - Cara aplikasi : Kuas, Spray', '5000', '6000', 22, 'f6d960c2-6b17-455d-bf58-e9bbb293a014.jpg', 1),
(3, 2, 2, 'Avian 50CC Super Black', 'Avian Synthetic High Gloss Enamel kemasan 100 cc  Cat besi dan kayu memiliki kelebihan : - Sangat mengkilap - Daya tutup sangat baik - Bahan dasar alkyd - Berkualitas sangat tinggi - Melindungi permukaan terhadap cuaca, karat, jamur & rayap  Sangat cocok digunakan untuk pengecatan pagar, teralis, pintu, jendela, kusen, rolling door dan permukaan lainnya.  Tersedia dalam berbagai warna pilihan yang menarik dan variatif.  Cara pemakaian : - Bersihkan permukaan yang akan di cat dari debu, minyak dan kotoran - Permukaan yang akan di cat harus kering dan bersih - Lubang kecil atau retakan sebaiknya dibersihkan dulu sebelum di cat - Gunakan amplas untuk menghaluskan dan menambah daya rekat cat pada permukaan - Aduk hingga rata sebelum digunakan - Pemakaian cukup dengan 2 lapisan pengecatan - Warna Warna cerah tertentu memerlukan lebih dari 2 lapis untuk mendapatkan daya tutup yang sempurna  Gunakan thinner enamel (thinner B) dengan komposisi 5% - 10% sebagai pengencer cat sebelum digunakan.  Penjelasan Lain : - Masa pengeringan : 2-3 jam (kering sentuh) 12 jam (kering total) - Daya sebar teoritis : 13 - 15m²/liter/lapis - Daya tutup : 2 - 3 lapis - Cara aplikasi : Kuas, Spray', '7500', '8500', 67, 'f6d960c2-6b17-455d-bf58-e9bbb293a014.jpg', 1),
(4, 2, 2, 'Avian 100CC Super Black', 'Avian Synthetic High Gloss Enamel kemasan 100 cc  Cat besi dan kayu memiliki kelebihan : - Sangat mengkilap - Daya tutup sangat baik - Bahan dasar alkyd - Berkualitas sangat tinggi - Melindungi permukaan terhadap cuaca, karat, jamur & rayap  Sangat cocok digunakan untuk pengecatan pagar, teralis, pintu, jendela, kusen, rolling door dan permukaan lainnya.  Tersedia dalam berbagai warna pilihan yang menarik dan variatif.  Cara pemakaian : - Bersihkan permukaan yang akan di cat dari debu, minyak dan kotoran - Permukaan yang akan di cat harus kering dan bersih - Lubang kecil atau retakan sebaiknya dibersihkan dulu sebelum di cat - Gunakan amplas untuk menghaluskan dan menambah daya rekat cat pada permukaan - Aduk hingga rata sebelum digunakan - Pemakaian cukup dengan 2 lapisan pengecatan - Warna Warna cerah tertentu memerlukan lebih dari 2 lapis untuk mendapatkan daya tutup yang sempurna  Gunakan thinner enamel (thinner B) dengan komposisi 5% - 10% sebagai pengencer cat sebelum digunakan.  Penjelasan Lain : - Masa pengeringan : 2-3 jam (kering sentuh) 12 jam (kering total) - Daya sebar teoritis : 13 - 15m²/liter/lapis - Daya tutup : 2 - 3 lapis - Cara aplikasi : Kuas, Spray', '12000', '14000', 55, 'f6d960c2-6b17-455d-bf58-e9bbb293a014.jpg', 1),
(5, 3, 3, 'Emco 250CC Diamond Blue', 'Mohon untuk menanyakan ketersediaan stok sebelum melakukan pembelian, terima kasih.  !!! Warna yang ditampilkan bisa berbeda pada setiap perangkat, Tidak ada jaminan bahwa warna yang ditampilkan di layar akan sama 100% dengan hasil akhir !!!  Emco Lux - Cat Kayu dan Besi - 96 Diamond Blue  EMCO LUX adalah cat kayu dan besi terbaik di kelasnya, yang telah teruji selama puluhan tahun. Diformulasi khusus dengan menggunakan resin dan pigmen warna berkualitas tinggi, EMCO LUX menghadirkan warna-warna mengkilap yang tahan terhadap segala cuaca. EMCO LUX mempunyai daya tutup dan daya sebar yang luar biasa sehingga pemakaiannya sangat hemat.  Persiapan Permukaan: Pastikan permukaan bersih dari bahan limbah lemak, debu dan lainnya.  Persiapan Pengecetan: Thinner: EMCO THINNER (EMCO Thinner B untuk metode pengecatan dengan kuas roll, EMCO Thinner A Special Super High Gloss untuk metode pengecatan dengan spray).  Pengenceran: 10% untuk kuas/rol & 25% untuk spray.  Finishing: Terapkan 2 lapis EMCO.', '24000', '25000', 2, '5ce2d4e2-b07a-47ce-b6f5-4bfbd4a2d9a9.png', 1),
(6, 6, 4, 'Aquaproof 1KG Abu-Abu', 'AQUAPROOF merupakan campuran polimer thixotropic yang dirancang untuk melapisi berbagai tempat seperti atap dan dinding bagian luar yang membutuhkan pelapisan anti bocor handal. Aquaproof cocok antara lain untuk atap genting, atap beton/seng/asbes, wuwungan, talang dan tampak muka/façade.  PERSIAPAN APLIKASI Permukaan harus bersih, bebas dari debu, karat, minyak, jamur dan kotoran lain. Daerah yang berjamur harus disikat keras-keras, lalu disemprot dengan cairan anti jamur, dan kembali disikat untuk menghilangkan segala kotoran. Logam yang berkarat harus dibersihkan lalu dilapisi dengan anti karat. Atap yang menggelembung harus dibuka dan ditata kembali. Lapisan bitumen/cat yang lunak dan rapuh harus dibersihkan menggunakan sikat, air dan air sabun. Agar memperoleh hasil yang maksimal, lapiskan Super Cement sebagai primer atau campuran semen : Super Cement = 1,5 : 1  CARA PEMAKAIAN : Tempat yang hendak dilapisi Aquaproof harus benar-benar kering. • Dengan Kuas atau Roll: Sapukan Aquaproof secara merata hingga diperoleh daya sebar 1 kg/m2 untuk 2x pelapisan dan pastikan seluruh permukaan terutama yang kasar dan tidak rata telah terlapisi secara sempurna.  SEBARAN RATA-RATA AQUAPROOF • Permukaan rata dan halus: 2x pelapisan untuk 2m2/kg • Permukaan kasar dan berlubang: 2x pelapisan 1,5 m2/kg  DATA TEKNIS : • Bahan Dasar : Polimer elastomeric sintesis • Berat Jenis : - Aquaproof Warna 1,1 ± 0,1 kg/lt - Aquaproof Transparan 1 ± 0,1 kg/lt • Kekentalan : 110.000 – 180.000 Cps • Pengeceran : Tidak perlu diencerkan • Waktu Kering : - Sentuh: 60 menit (tergantung sirkulasi, suhu serta kelembaban udara) - Sempurna: 24 Jam', '59000', '59500', 4, '7170a92e-695a-44c1-b023-511240c43d7c.jpg', 1),
(7, 5, 3, 'Dulux Catylac 5KG Venice Blue', 'Toko Cat Dulux Decorative dapat mengeluarkan Faktur Pajak Untuk request Faktur Pajak, diperlukan KTP Pemesan dan NPWP Perusahaan Whatsapp Team Sales: +62 813 1523 1436  Dulux Catylac Interior dengan formulai Chroma Brite Technology untuk warna dinding cerah menakjubkan lebih lama.  Hasil Akhir : Matt Daya Tutup : 8-10 m/kg Waktu Pengeringan : 1-2 jam Lapisan : 1', '154000', '155000', 3, 'f2632554-f548-40ed-8c7e-92ecfe3d03bf.jpg', 1),
(8, 5, 3, 'Dulux Catylac 25KG White', 'PENGGUNAAN Dulux Catylac Emulsion adalah cat emulsi mempunyai daya tahan tinggi dengan hasil lapisan akhir yang halus. Cat ini cocok untuk digunakan untuk semua permukaan tembok dalam normal termasuk pasangan bata, semen, plaster, papan gypsum.. UKURAN KEMASAN 5 Kg & 25 Kg WARNA CSS Sesuai Katalog / *** WARNA TINGTING **** SIFAT LAPISAN Daya Tahan terhadap Air: Mempunyai toleransi pada tingkat kelembaban udara normal untuk permukaan dalam, dan akan tahan terhadap pencucian secara normal. Tidak direkomendasikan untuk ruangan dengan kondensasi uap yang tinggi seperti kamar mandi atau dapur. KOMPOSISI Pewarna: Pewarna Non timbal, light fastness Bahan pengikat: Acrylic Copolymer emulsion. Pelarut: Air VOLUME PADATAN Putih sekitar 35% (nominal), warna lain bisa bervariasi POT LIFE/UMUR CAMPURAN WAKTU PENGERINGAN Lapisan tunggal pada ketebalan standar: KERING SENTUH Bergantung pada suhu dan kelembaban. WAKTU PENGERINGAN UNTUK LAPIS ULANG 1-2 Jam, bergantung pada kondisi cuaca PELAPISAN ULANG PADA 30°C KERING SEMPURNA KETEBALAN LAPISAN DAYA SEBAR TEORITIS Daya sebar teoritis pada kondisi normal adalah 7-10 m²/Kg.', '748000', '750000', 33, '4c510a52-5c22-44e7-823f-3509051c8ff8.jpg', 1),
(9, 2, 2, 'Avian 450CC Dark Grey', 'Avian High Gloss Enamel adalah cat kayu dan besi yg sangat mengkilap, cepat kering, daya tutup maksimal, berkualitas tinggi dan terbuat dari bahan alkydι Cat kayu dan besi Avian mempunyai sifat melindungi terhadap cuaca, karat, jamur dan rayapι Sangat cocok digunakan pada pagar, pintu, jendela, kusen, rolling door, dll.ιKoleksi warna-warna cat kayu dan besi Avian membawa semangat baru pada hunian anda. Tidak terbatas dengan warna yg pernah ada, tapi berani menciptakan varian warna terbaik untuk anda.  KEGUNAAN & KEISTIMEWAAN : Sebagai cat akhir yg memberi perlindungan dan memperindah permukaan kayu dan besi baik digunakan untuk interior maupun exterior. Menghasilkan film cat yg mengkilap, halus dan mempunyai daya tutup yg bagus. Cat cepat kering. Tahan cuaca, flexible tak mudah retak.  PERSIAPAN PERMUKAAN : Bersihkan debu, kotoran, minyak dan cat yg terkelupas dari permukaan substrate. Perbaiki kerusakan pada permukaan substrate kemudian amplas sampai rata dan bersihkan.  Untuk Kayu : 1. Aplikasi Avian Loodmenie sebagai anti rayap. 2. Tutup lubang bekas paku, retakan dll dengan Avian Plamir / Wood Filler. 3. Bila perlu aplikasi Avian Dasar Putih untuk menutup pori-pori kayu supaya permukaan lebih halus dan sebagai warna dasar. 4. Substrate siap diaplikasi top coat Avian.  Untuk Metal / Besi : 1. Bersihkan karat dari permukaan dengan Avian Rust X (lihat aturan pakai). 2. Beri primer Avian Yzermenie / Avian Zinc Chromate sebagai anti karat.', '40500', '41500', 2, '105131053_b6d8715f-bf19-493c-b37a-ca1dc28fabd2_2048_2048.jpg', 1),
(10, 7, 6, 'Kuas Eterna 3/4 Dim', '- Barang DIJAMIN ASLI ORIGINAL ETERNA - Kuas cat bahan bagus - tidak mudah rontok - mudah dipakai - Eterna Tools adalah produsen asli Indonesia yang fokus bergerak di bidang perkakas kebutuhan pengecatan kayu, besi & tembok.', '4000', '5000', 12, 'kuas eterna.jpg', 1),
(11, 7, 6, 'Kuas Eterna 1 Dim', '- Barang DIJAMIN ASLI ORIGINAL ETERNA - Kuas cat bahan bagus - tidak mudah rontok - mudah dipakai - Eterna Tools adalah produsen asli Indonesia yang fokus bergerak di bidang perkakas kebutuhan pengecatan kayu, besi & tembok.', '4000', '5000', 11, 'kuas eterna.jpg', 1),
(12, 7, 6, 'Kuas Eterna 1,5 Dim', '- Barang DIJAMIN ASLI ORIGINAL ETERNA - Kuas cat bahan bagus - tidak mudah rontok - mudah dipakai - Eterna Tools adalah produsen asli Indonesia yang fokus bergerak di bidang perkakas kebutuhan pengecatan kayu, besi & tembok.', '6000', '8000', 33, 'kuas eterna.jpg', 1),
(13, 2, 3, 'CAT NIPPON', 'CAT NIPPON 1KG', '120000', '140000', 12, 'CAT.jpg', 1),
(14, 7, 6, 'Kuas Eterna 4 dim', '- Barang DIJAMIN ASLI ORIGINAL ETERNA - Kuas cat bahan bagus - tidak mudah rontok - mudah dipakai - Eterna Tools adalah produsen asli Indonesia yang fokus bergerak di bidang perkakas kebutuhan pengecatan kayu, besi & tembok.', '18000', '20000', 12, 'kuas eterna.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cabang`
--

DROP TABLE IF EXISTS `cabang`;
CREATE TABLE `cabang` (
  `id_cabang` int(10) NOT NULL,
  `nama_cabang` varchar(100) NOT NULL,
  `alamat_cabang` varchar(100) NOT NULL,
  `nomor_cabang` varchar(20) NOT NULL,
  `status_cabang` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cabang`
--

INSERT INTO `cabang` (`id_cabang`, `nama_cabang`, `alamat_cabang`, `nomor_cabang`, `status_cabang`) VALUES
(1, 'Mulyosari', 'Raya Mulyosari 108', '0815932580', 1),
(2, 'Kalisari', 'Kalisari Dharma V P4 no 22', '081773418', 1),
(3, 'Kenjeran', 'Kenjeran no 145', '0814665800', 1);

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

DROP TABLE IF EXISTS `detail_transaksi`;
CREATE TABLE `detail_transaksi` (
  `id_detail` int(10) NOT NULL,
  `id_transaksi` int(10) NOT NULL,
  `id_barang` int(10) NOT NULL,
  `qty_barang` int(10) NOT NULL,
  `harga_barang` int(11) NOT NULL DEFAULT 0,
  `subtotal` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail`, `id_transaksi`, `id_barang`, `qty_barang`, `harga_barang`, `subtotal`) VALUES
(7, 8, 2, 2, 6000, 12000),
(8, 8, 1, 2, 1245000, 2490000),
(9, 9, 2, 2, 6000, 12000),
(10, 9, 1, 2, 1245000, 2490000),
(11, 10, 9, 2, 41500, 83000),
(12, 11, 4, 10, 14000, 140000);

-- --------------------------------------------------------

--
-- Table structure for table `header_transaksi`
--

DROP TABLE IF EXISTS `header_transaksi`;
CREATE TABLE `header_transaksi` (
  `id_transaksi` int(10) NOT NULL,
  `id_cabang` int(10) NOT NULL,
  `id_customer` int(10) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `id_pegawai` int(10) NOT NULL,
  `total_transaksi` varchar(10) NOT NULL,
  `nama_penerima` varchar(100) NOT NULL,
  `alamat_penerima` varchar(100) NOT NULL,
  `nomor_penerima` varchar(20) NOT NULL,
  `jenis_pembayaran` varchar(50) NOT NULL,
  `pengiriman` varchar(50) NOT NULL,
  `status_transaksi` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `header_transaksi`
--

INSERT INTO `header_transaksi` (`id_transaksi`, `id_cabang`, `id_customer`, `tanggal_transaksi`, `id_pegawai`, `total_transaksi`, `nama_penerima`, `alamat_penerima`, `nomor_penerima`, `jenis_pembayaran`, `pengiriman`, `status_transaksi`) VALUES
(8, 0, 3, '2023-12-05', 2, '2502000', '', '', '', 'Transfer Bank', 'Reguler', 0),
(9, 1, 3, '2023-12-05', 6, '2502000', '', '', '', 'Transfer Bank', 'Reguler', 3),
(10, 0, 3, '2023-12-11', 0, '83000', '', '', '', 'Transfer Bank', 'Reguler', 0),
(11, 1, 3, '2023-12-12', 2, '140000', 'Anthony A', 'Klampis Anom no 33', '087643225625', 'Transfer Bank', 'Reguler', 3);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_barang`
--

DROP TABLE IF EXISTS `jenis_barang`;
CREATE TABLE `jenis_barang` (
  `id_jenis` int(10) NOT NULL,
  `nama_jenis` varchar(100) NOT NULL,
  `status_jenis` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenis_barang`
--

INSERT INTO `jenis_barang` (`id_jenis`, `nama_jenis`, `status_jenis`) VALUES
(1, 'Bor Listrik', 1),
(2, 'Cat Besi', 1),
(3, 'Cat Tembok', 1),
(4, 'Cat Waterproofing', 1),
(5, 'Kuas Roll', 1),
(6, 'Kuas Tangan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `keranjang_belanja`
--

DROP TABLE IF EXISTS `keranjang_belanja`;
CREATE TABLE `keranjang_belanja` (
  `id_keranjang` int(10) NOT NULL,
  `id_users` int(10) NOT NULL,
  `id_barang` int(10) NOT NULL,
  `qty_barang` int(10) NOT NULL,
  `subtotal` int(10) NOT NULL,
  `status_keranjang` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laporan_stok`
--

DROP TABLE IF EXISTS `laporan_stok`;
CREATE TABLE `laporan_stok` (
  `id_laporan_stok` int(10) NOT NULL,
  `id_barang` int(10) NOT NULL,
  `tanggal_laporan` date DEFAULT NULL,
  `qty_stok` int(10) DEFAULT NULL,
  `status_stok` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `merek_barang`
--

DROP TABLE IF EXISTS `merek_barang`;
CREATE TABLE `merek_barang` (
  `id_merek` int(10) NOT NULL,
  `nama_merek` varchar(100) NOT NULL,
  `deskripsi_merek` text NOT NULL,
  `status_merek` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `merek_barang`
--

INSERT INTO `merek_barang` (`id_merek`, `nama_merek`, `deskripsi_merek`, `status_merek`) VALUES
(1, 'Makita', 'Makita Corporation (株式会社マキタ, kabushiki gaisha Makita) (TYO: 6586) adalah sebuah produsen perkakas listrik asal Jepang. Didirikan pada tanggal 21 Maret 1915, perusahaan ini berkantor pusat di Anjō, Jepang dan memiliki pabrik di Brazil, Tiongkok, Jepang, Meksiko, Rumania, Britania Raya, Jerman, Uni Emirat Arab, Thailand, dan Amerika Serikat. Penjualan perusahaan ini mencapai $2,9 milyar pada tahun 2012.', 1),
(2, 'Avian', 'PT Avia Avian Tbk., atau dikenal sebagai Avian Brands adalah sebuah perusahaan cat dan produk-produk kimia Indonesia yang berkantor pusat di Surabaya.\r\n\r\nPerusahaan ini didirikan pada tanggal 1 November 1978 di Kabupaten Sidoarjo oleh Tan Tek Swie (Soetikno Tanoko).[1] Pabrik kedua Avian Brands dibuka di Kota Serang, Banten pada tahun 1996, dan pabrik ketiga dibuka di Kota Medan, Sumatera Utara pada tahun 2007.', 1),
(3, 'Emco', 'EMCO diproduksi oleh PT Mataram Paint (MP) yang berdiri sejak tahun 1950. Perusahaan ini dirintis oleh Sumantri Sudirodarmodjo dan Chris Pangkey yang didukung oleh lima temannya. Pengalaman Chris yang pernah bekerja di perusahaan cat Belanda menjadi modal awal dalam mendirikan MP bersama rekannya.\n\nPada awalnya, di tahun 1950-1960-an, MP memproduksi beragam cat seperti cat kapal, cat tembok, cat duco, pernis, dan cat kayu besi. Pabriknya yang seluas 500 meter persegi berada di Jalan Dinoyo, Surabaya. Pabrik yang hanya mengoperasikan satu unit mesin ini berdiri di kawasan industri ringan di tepi sungai Brantas dan batas kota Surabaya.\n\nSekitar tahun 1965, dengan mengusung merek EMCO, MP melakukan efisiensi produksi dengan hanya berkonsentrasi memproduksi cat kayu & besi. Di tahun 1970, dengan diberlakukannya Rencana Pembangunan Lima Tahun (Repelita) oleh pemerintahan Orde Baru maka mulai booming industrialisasi. Sejalan dengan itu, produk-produk cat asing pun mulai merambah negeri ini.\n\nDi tahun 1973, saat terjadi krisis minyak di Timur Tengah yang berdampak pada sulitnya memperoleh bahan baku cat, yakni resin maka MP memutuskan untuk membuat resin sendiri dengan lisensi dari Belanda. Waktu itu, bahan baku resin sebagian impor dan sebagian lagi dari Petrokimia Gresik dan Pertamina. Dengan mengamankan dan memegang kontrol pada bahan baku, MP bisa mengamankan pasokan bahan utama cat.', 1),
(4, 'Paragon', 'PT Pabrik Cat Tunggal Djaja Indah (PT TDI) merupakan produsen cat terkemuka di Indonesia dengan pengalaman bertahun-tahun dibidang industri cat. Didirikan di tahun 1963, perusahaan yang semula hanya memproduksi Cat Damar dan Thinner ini, kini memproduksi beragam jenis cat, antara lain : Decorative Coating (water and solvent based), Automotive Coating, Industrial Coating dan Heavy Duty Coating.\r\n\r\nDengan motto \"Kami Setia Membangun Bersama Anda\", kami senantiasa berupaya menghasilkan produk berkualitas terbaik dan sesuai dengan standar internasional. ISO 9001 yang telah diperoleh menjadi bukti kesungguhan perusahaan menjaga konsistensi kualitas produk serta melakukan usaha berkesinambungan untuk meningkatkan kepuasan pelanggan.', 0),
(5, 'Dulux Catylac', 'PT ICI Paints Indonesia, saat ini adalah bagian dari bisnis AkzoNobel Decorative, diresmikan pada tanggal 11 Agustus 1971. Sejak memulai produksinya, dikenal sebagai produsen cat premium Dulux™ yang selalu menggunakan material kualitas tinggi dan ramah lingkungan. Dengan komitmennya dibawah HSE&S (Health, Safety, Environment & Security) dan pengembangan yang berkelanjutan. PT ICI Paints Indonesia memperoleh ISO 9001, ISO 14001 dan juga Green Label Singapore, serta merupakan anggota pendiri Green Building Council Indonesia. PT ICI Paints Indonesia banyak terlibat dalam komunitas pembangunan Indonesia dan telah turut berkontribusi di berbagai bangunan besar di Indonesia, diantaranya adalah The Ritz Carlton Hotel, Grand Kuta Leisure Apartment, Pondok Indah Mall, Istana Negara, Mesjid Baiturrahman di Aceh, dan juga berbagai gedung perkantoran dan perumahan di seluruh Indonesia.', 1),
(6, 'Aquaproof', 'Telah hadir selama lebih dari tiga dasawarsa tepatnya sejak tahun 1985, PT Adhi Cakra Utama Mulia merupakan perusahaan pemasok berbagai produk pelapis anti bocor (waterproofing coating) dan produk kimiawi bangunan lainnya.\r\n\r\nPengalaman PT Adhi Cakra Utama Mulia sebagai pemain lokal dan pemahaman terhadap kondisi Indonesia yang memiliki curah hujan tertinggi di dunia terwujud dalam produk-produk kimiawi berkualitas yang paling cocok untuk kebutuhan Indonesia. Berbagai merek waterproofing coating, waterproofing membrane, cement modifier & concrete additives, surface protection serta tile grout semakin mengokohkan posisi PT Adhi Cakra Utama Mulia sebagai pemimpin di pasar pelapis anti-bocor.\r\n\r\nMerek-merek yang dipasarkan PT Adhi Cakra Utama Mulia terdiri dari Aquaproof, Aquaproof Pro, Aquaproof Polyester Mesh, Aquagard, Heatgard, Hydrostop, Super Cement, Superfix, Betonmix, Supergrout, dan Hydroseal. Didukung oleh komitmen tinggi terhadap kualitas, produk-produk yang dipasarkan PT Adhi Cakra Mulia diproduksi melalui sistem manajemen bersertifikasi ISO 9001. Dengan senantiasa mengedepankan kualitas, Aquaproof berhasil meraih penghargaan Superbrands pada tahun 2005 dan Top Brands pada tahun 2009.', 1),
(7, 'Eterna', 'Kuas ETERNA mungkin menjadi salah satu kebutuhan wajib jika anda ingin mengecat berbagai barang dirumah anda. kuas eterna dapat diandalkan dengan kualitas bulu yang rapi dan kuat. kuas Eterna juga tidak mudah rusak atau copot sehingga dapat digunakan berkali - kali.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `request_stok`
--

DROP TABLE IF EXISTS `request_stok`;
CREATE TABLE `request_stok` (
  `id_request` int(10) NOT NULL,
  `id_users` int(10) NOT NULL,
  `id_barang` int(10) NOT NULL,
  `id_cabang` int(10) NOT NULL,
  `jumlah_ditambahkan` int(10) NOT NULL,
  `tanggal_request` date NOT NULL,
  `status_request` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_stok`
--

INSERT INTO `request_stok` (`id_request`, `id_users`, `id_barang`, `id_cabang`, `jumlah_ditambahkan`, `tanggal_request`, `status_request`) VALUES
(1, 2, 10, 1, 55, '2023-12-15', 1),
(2, 2, 6, 1, 25, '2023-12-15', 1),
(3, 6, 11, 2, 45, '2023-12-15', 2);

-- --------------------------------------------------------

--
-- Table structure for table `stokcabang`
--

DROP TABLE IF EXISTS `stokcabang`;
CREATE TABLE `stokcabang` (
  `id_stokcabang` int(10) NOT NULL,
  `id_cabang` int(10) NOT NULL,
  `id_barang` int(10) NOT NULL,
  `qty_stok` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stokcabang`
--

INSERT INTO `stokcabang` (`id_stokcabang`, `id_cabang`, `id_barang`, `qty_stok`) VALUES
(1, 1, 1, 112),
(2, 1, 2, 172),
(3, 1, 3, 117),
(4, 1, 4, 105),
(5, 1, 5, 52),
(6, 1, 6, 54),
(7, 1, 7, 53),
(8, 1, 8, 83),
(9, 1, 9, 52),
(10, 1, 10, 67),
(11, 1, 11, 66),
(12, 1, 12, 93),
(13, 1, 13, 72),
(14, 2, 1, 0),
(15, 2, 2, 0),
(16, 2, 3, 0),
(17, 2, 4, 0),
(18, 2, 5, 0),
(19, 2, 6, 0),
(20, 2, 7, 0),
(21, 2, 8, 0),
(22, 2, 9, 0),
(23, 2, 10, 0),
(24, 2, 11, 0),
(25, 2, 12, 0),
(26, 2, 13, 0),
(27, 3, 1, 0),
(28, 3, 2, 0),
(29, 3, 3, 0),
(30, 3, 4, 0),
(31, 3, 5, 0),
(32, 3, 6, 0),
(33, 3, 7, 0),
(34, 3, 8, 0),
(35, 3, 9, 0),
(36, 3, 10, 0),
(37, 3, 11, 0),
(38, 3, 12, 0),
(39, 3, 13, 0),
(40, 1, 14, 72),
(41, 2, 14, 0),
(42, 3, 14, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id_users` int(10) NOT NULL,
  `id_cabang` int(10) NOT NULL,
  `jenis_users` int(1) NOT NULL,
  `nama_users` varchar(100) NOT NULL,
  `alamat_users` varchar(100) NOT NULL,
  `nomer_users` varchar(20) NOT NULL,
  `username_users` varchar(50) NOT NULL,
  `password_users` varchar(50) NOT NULL,
  `status_users` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `id_cabang`, `jenis_users`, `nama_users`, `alamat_users`, `nomer_users`, `username_users`, `password_users`, `status_users`) VALUES
(1, 200000, 1, 'Sonny', 'Mulyosari 108', '0815932580', 'owner0815932580', 'owner0815932580', 1),
(2, 1, 2, 'Agus Wijaya', 'Jl. Embong Malang, Surabaya', '081546845000', 'agus0001', 'agus0001', 1),
(3, 100000, 3, 'Anthony A', 'Klampis Anom no 33', '087643225625', 'anthon9293', 'anthon9293', 1),
(4, 100000, 3, 'Ahmad Aldi Wirawan', 'Klampis Jaya no 33', '0974513281', 'wasalam111', 'op99089', 1),
(5, 100000, 3, 'Rudi Santoso', 'Kenjeran Raya no 193', '08794611145', 'Rdy2221', '44568852', 1),
(6, 1, 2, 'Murti Sriwijaya', 'Praban Wetan V no 6', '08746111221', 'murti999', 'murti999', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist_customer`
--

DROP TABLE IF EXISTS `wishlist_customer`;
CREATE TABLE `wishlist_customer` (
  `id_wishlist` int(10) NOT NULL,
  `id_users` int(10) NOT NULL,
  `id_barang` int(10) NOT NULL,
  `status_wishlist` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`id_cabang`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `header_transaksi`
--
ALTER TABLE `header_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `keranjang_belanja`
--
ALTER TABLE `keranjang_belanja`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `laporan_stok`
--
ALTER TABLE `laporan_stok`
  ADD PRIMARY KEY (`id_laporan_stok`);

--
-- Indexes for table `merek_barang`
--
ALTER TABLE `merek_barang`
  ADD PRIMARY KEY (`id_merek`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_stok`
--
ALTER TABLE `request_stok`
  ADD PRIMARY KEY (`id_request`);

--
-- Indexes for table `stokcabang`
--
ALTER TABLE `stokcabang`
  ADD PRIMARY KEY (`id_stokcabang`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- Indexes for table `wishlist_customer`
--
ALTER TABLE `wishlist_customer`
  ADD PRIMARY KEY (`id_wishlist`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cabang`
--
ALTER TABLE `cabang`
  MODIFY `id_cabang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `header_transaksi`
--
ALTER TABLE `header_transaksi`
  MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  MODIFY `id_jenis` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `keranjang_belanja`
--
ALTER TABLE `keranjang_belanja`
  MODIFY `id_keranjang` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporan_stok`
--
ALTER TABLE `laporan_stok`
  MODIFY `id_laporan_stok` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `merek_barang`
--
ALTER TABLE `merek_barang`
  MODIFY `id_merek` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request_stok`
--
ALTER TABLE `request_stok`
  MODIFY `id_request` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stokcabang`
--
ALTER TABLE `stokcabang`
  MODIFY `id_stokcabang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wishlist_customer`
--
ALTER TABLE `wishlist_customer`
  MODIFY `id_wishlist` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
