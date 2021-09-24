-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 21 Nov 2019 pada 06.56
-- Versi Server: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trubus_sari_alam`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(1) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `kontak` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`, `email`, `kontak`) VALUES
(1, 'admin', 'admin', 'Admin 1', 'admin1@gmail.com', '085730025729'),
(2, 'admin2', 'admin2', 'Admin 2', 'admin2@gmail.com', '087712087700');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cara_order`
--

CREATE TABLE `cara_order` (
  `id_cara` int(1) NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `cara_order`
--

INSERT INTO `cara_order` (`id_cara`, `judul`, `deskripsi`) VALUES
(1, 'Pilih Produk', 'Pilih produk yang anda inginkan kemudian lihat detailnya dengan cara mengklik button detail, untuk melihat detail produk dan stok produk.'),
(2, 'Cara Pesan', 'Silahkan datang ke Toko Trubus Sari Alam dengan alamat yang tertera atau dengan bantuan Google Maps');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(100) NOT NULL,
  `id_produk` varchar(20) NOT NULL,
  `gambar_produk` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `id_produk`, `gambar_produk`) VALUES
(3, '0', 'IMG_20190421_140957.jpg'),
(4, '0', 'IMG_20190421_140433.jpg'),
(9, '7', 'IMG_20190421_141420.jpg'),
(10, '8', '3385944_ac39b51b-0578-4ed9-8b04-91f15dc1d3ef_1436_1436.jpg'),
(11, '9', 'IMG_20190421_140103.jpg'),
(12, '10', 'IMG_20190421_140433.jpg'),
(13, '11', 'IMG_20190421_141703.jpg'),
(14, '12', 'IMG_20190421_140352.jpg'),
(15, '13', 'IMG_20190421_140402.jpg'),
(16, '14', 'IMG_20190421_140510.jpg'),
(17, '15', 'IMG_20190421_140957.jpg'),
(18, '16', 'IMG_20190421_140147.jpg'),
(19, '17', 'IMG_20190421_141139.jpg'),
(20, '20', 'yokohama.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(1) NOT NULL,
  `nama_kategori` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Pupuk Tanaman'),
(3, 'Pestisida'),
(4, 'Benih Unggul'),
(5, 'Alat Pertanian');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(1) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `no_wa` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `no_telp`, `no_wa`, `alamat`) VALUES
(1, '0812-2603-963', '0823-2206-9988', 'Pasar Bendungan Wates, Jl. Nagung-Toyan, Sanggarahan Kidul, Kulon Progo, Yogyakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(1) NOT NULL,
  `kategori_produk` varchar(100) NOT NULL,
  `kode_produk` varchar(50) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `merk_produk` varchar(100) NOT NULL,
  `netto_produk` varchar(100) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `stok_produk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `kategori_produk`, `kode_produk`, `nama_produk`, `deskripsi`, `merk_produk`, `netto_produk`, `harga_produk`, `stok_produk`) VALUES
(7, '5', 'AP02', 'Sprayer Pompa KYOKAN 1,5 Liter', 'Alat semprot atau sprayer tanaman merk KYOKAN menampung 2 liter air sistem pompa dulu sebelum di pakai. Warna kuning cocok untuk area sedang cocok untuk kebutuhan hobi berkebun di area rumah. Ada pengatur besar kecil kekuatan semprotan jadi bisa di pilih sesuai kebutuhan. Daya sebar air lebih lembut dan merata bisa juga untuk semprot jauh terbuat dari bahan berkualitas baik.', 'KYOKAN', '-', 40000, '7'),
(8, '5', 'AP03', 'DGW Semprot Sprayer Hama 16 Liter Electrik', 'Jenis Barang : DGW16ECO. Kapasitas Tangki : 16 LiterDaya Baterai : 12V8AH. Tekanan Pompa : 5.5 Bar / 80 PSI. Ukuran Kemasan : 38x20.5x50CM. Berat Bersih : 5.25 Kg. Berat Kotor : 5.65 Kg\r\n', 'DGW', '-', 650000, '2'),
(9, '3', 'PH01', 'Roundup Biosorb 486 SL', 'Roundup Biosorb 486 SL adalah herbisida purna tumbuhan dengan bahan aktif glisofat yang diproduksi dengan Teknologi Biosorb serta menggunakan surfaktan yang dipantenkan. 3 kali lebih banyak dan lebih cepat masuk kedalam gulma sehingga tahan hujan 1-2 jam setelah semprot', 'Monsan', '200 ml', 18000, '20'),
(10, '3', 'PH02', 'Herbisida Elang Gold 480SL 200 ml', 'Herbisida sistemik purna tumbuh berbentuk larutan dalam air untuk mengendalikan Gulma secara total sampai ke akar.\r\nBahan aktif isopropil amina glifosat (setara dengan glifosat: 356 g/l): 480 g/l', 'MKD', '200 ml', 20000, '14'),
(11, '3', 'PH03', 'MARATHON 500 SL', 'MARATHON 500 SL dengan bahan aktif dimehipo 500 g/l yang dapat diserap dan diangkut ke seluruh bagian tanaman, sehingga serangga hama yang memakan setiap bagian tanaman yang telah disemprot akan mati. Serangga hama juga akan mati apabila terkena langsung cairan semprotan atau bersentuhan dengan permukaan daun atau bagian lain dari tanaman yang di semprot.', 'MKD', '900 ml', 75000, '17'),
(12, '4', 'BB01', 'Benih Semangka Kuning Inden F1 Bintang Asia', 'Semangka berbiji, oval, kulit kuning gelap, daging orange. Bobot buah 2.5-4 Kg. Manis 14.0 Brix. Panen 56-60 Hst. Potensi Hasil 25-30 ton/ha. Cocok di dataran rendah - menengah. Toleran terhadap Fw, GSB , DM', 'Benih Citra Asia', '20 gram', 105000, '13'),
(13, '4', 'BB02', 'Benih Semangka Non Biji Hibrida F1 Benih Pertiwi Platini 20gr', 'Cocok ditanam pada dataran rendah 114-165 mdpl. Umur panen 61 – 64 HST. Buah oval hijau tua lurik hitam. Warna daging buah merah, tekstur renyah. Rasa manis (kadar gula 10-12 % brix). Berat per buah 5.2 – 6.2 kg dengan potensi hasil 62 – 65 ton/ha.', 'Benih Pertiwi', '20 gram', 175000, '6'),
(14, '4', 'BS01', 'Benih Selada Kriebo 10 Gr Bintang Asia', 'Selada Keriting Hijau Kriebo, Daun Keriting bergelombang, kompak dan daun hijau segar agak terang, rasanya masnis dan genjah dapat dipanen 45 hst. Toleran penyakit layu, soft rot dan black rot. Produksi 10 ton per Ha, jumlah benih 2000 2500 per gram', 'Benih Citra Asia', '10 gram', 20000, '19'),
(15, '1', 'PT01', 'Pupuk MKP Cap Pak Tani – 1 Kg', 'Pupuk MKP (Mono Kalium Phosphate) merupakan pupuk dengan komposisi Difosfor Pentaoksida (P2O5) sebanyak 52% dan Kalium oksida (K2O) sebanyak 34%.', 'Saprotan Utama', '1 kg', 35000, '10'),
(16, '1', 'PT02', 'FORSIL Pupuk Silika', 'Pupuk silika cair + mikro majemuk, forsil merupakan pupuk an-organik yang dapat terlarut sempurna dalam air. Forsil yang diperkaya silika dapat meningkatkan kwalitas dan hasil panen, selain itu juga berfungsi sebagai Biostimulat yang dapat melindungi tanaman dari serangan hama dan penyakit, kekeringan, serta perubahan cuaca.\r\nBahan aktif : Silika (SiO2) 20% + Seng (Zn) 0,25% + Molibdenum (Mo) 0,001%', 'MKD', '500 ml', 125000, '12'),
(17, '1', 'PT03', 'Pupuk KNO3 Meroke KALINITRA', 'Pupuk KNO3 berupa butiran halus, sangat mudah larut didalam air, cocok digunakan untuk aplikasi foliar ataupun hidroponik. Kandungan Kalium yang tinggi, sangat baik untuk meningkatkan kualitas tanaman pada saat berbuah. Kandungan Nitrogen yang berupa Nitrat, sangat bagus untuk pertumbuhan tanaman dan memperkuat dinding sel, sehingga tanaman sehat tidak mudah terserang penyakit Jamur.', 'Yara', '1 kg', 35000, '6'),
(20, '5', 'AP01', 'Yokohama Alat Semprot Hama Otomatis', 'Alat penyemprot (Sprayer) digunakan untuk mengaplikasikan sejumlah tertentu bahan kimia aktif pemberantas hama penyakit yang terlarut dalam air ke objek semprot (daun, tangkai, buah) dan sasaran semprot (hama-penyakit).\r\nEfesiensi dan efektivitas alat semprot ini ditentukan oleh kualitas dan kuantitas bahan aktif tersebut yang terkandung di dalam setiap butiran larutan tersemprot (droplet) yang melekat pada objek dan sasaran semprot.\r\nSprayer adalah alat/mesin yang berfungsi untuk memecah suatu cairan, larutan atau suspensi menjadi butiran cairan (droplets) atau spray. Sprayer merupakan alat aplikator pestisida yang sangat diperlukan dalam rangka pemberantasan dan pengendalian hama & penyakit tumbuhan.\r\nSprayer juga didefinisikan sebagai alat aplikator pestisida yang sangat diperlukan dalam rangka pemberantasan dan pengendalian hama & penyakit tumbuhan. Kinerja sprayer sangat ditentukan kesesuaian ukuran droplet aplikasi yang dapat dikeluarkan dalam satuan waktu tertentu sehingga sesuai dengan ketentuan penggunaan dosis pestisida yang akan disemprotkan.', 'Yokohama', '-', 645000, '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `profil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `profil`) VALUES
(1, '						Toko Trubus Sari Alam merupakan Usaha Mikro Kecil dan Menengah (UMKM) di bidang agrobisnis yang menjual tanaman hortikultura seperti benih atau bibit dari tanaman buah, sayuran maupun tanaman hias. Selain menjual bibit atau benih tanaman hortikultura, Toko Trubus Sari Alam juga menjual bahan-bahan pertanian seperti pupuk, obat-obatan pertanian, dan sarana pertanian lainnya. Toko Trubus Sari Alam, mulai merintis usahanya di tahun 1963 yang berlokasi di Pasar Bendungan Wates, Jl. Nagung-Toyan, Sanggarahan Kidul, Kulon Progo, Yogyakarta. Toko Trubus Sari Alam didirikan oleh Ibu Sri Safrudi Lestari dan sekarang Toko Trubus Sari Alam memiliki 4 pegawai yang membantu penjualan di toko. Toko Trubus Sari Alam buka setiap hari pukul 07:00 - 17:00 WIB						\r\n											\r\n					');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `cara_order`
--
ALTER TABLE `cara_order`
  ADD PRIMARY KEY (`id_cara`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`),
  ADD UNIQUE KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cara_order`
--
ALTER TABLE `cara_order`
  MODIFY `id_cara` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
