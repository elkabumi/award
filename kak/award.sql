-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2014 at 02:49 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `award`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`cat_id` int(11) NOT NULL,
  `cat_name` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(1, 'BIDANG KELEMBAGAAN'),
(2, 'PROMOSI INVESTASI'),
(3, 'PELAYANAN PENANAMAN MODAL'),
(4, 'KINERJA INVESTASI');

-- --------------------------------------------------------

--
-- Table structure for table `questions1`
--

CREATE TABLE IF NOT EXISTS `questions1` (
`q1_id` int(11) NOT NULL,
  `q1_name` text NOT NULL,
  `q1_get_child` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `questions1`
--

INSERT INTO `questions1` (`q1_id`, `q1_name`, `q1_get_child`) VALUES
(1, 'Nama Kabupaten / Kota', 0),
(2, 'Luas wilayah', 0),
(3, 'Jumlah penduduk', 0),
(4, 'Alamat website', 1),
(5, 'PDRB perkapita', 1);

-- --------------------------------------------------------

--
-- Table structure for table `questions1_details`
--

CREATE TABLE IF NOT EXISTS `questions1_details` (
`q1d_id` int(11) NOT NULL,
  `q1_id` int(11) NOT NULL,
  `q1d_name` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `questions1_details`
--

INSERT INTO `questions1_details` (`q1d_id`, `q1_id`, `q1d_name`) VALUES
(1, 4, 'Pemerintah Kabupaten/ Kota'),
(3, 4, 'Instansi Penanaman Modal'),
(4, 4, 'Instansi PTSP'),
(5, 5, 'Tahun 2013'),
(6, 5, 'Tahun 2014 (SM I & SM II)');

-- --------------------------------------------------------

--
-- Table structure for table `questions2`
--

CREATE TABLE IF NOT EXISTS `questions2` (
`q2_id` int(11) NOT NULL,
  `q2_number` varchar(10) NOT NULL,
  `q2_name` text NOT NULL,
  `q2_sub_cat_id` int(11) NOT NULL,
  `q2_weight` int(11) NOT NULL,
  `q2_description` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `questions2`
--

INSERT INTO `questions2` (`q2_id`, `q2_number`, `q2_name`, `q2_sub_cat_id`, `q2_weight`, `q2_description`) VALUES
(4, '', 'Apakah Pemerintah Kabupaten/ Kota mempunyai Dinas/ Badan/ Kantor yang menangani bidang penanaman modal ?', 1, 50, ''),
(5, '', 'Apakah lembaga Penanaman Modal & PTSP berada dalam satu gedung?', 1, 20, ''),
(6, '', 'Apakah lembaga yang menangani Penanaman Modal & PTSP mempunyai gedung yang representatif ?', 1, 40, ''),
(7, '', 'Apakah lembaga yang menangani bidang penanaman modal di Kabupaten/ Kota anda mempunyai struktur organisasi yang mandiri, ramping dan efektif (lean) jelas tupoksinya ?', 2, 0, ''),
(8, '', 'Kompetensi Sumber Daya Manusia (SDM) di lembaga yang menangani bidang penanaman modal adalah :', 2, 0, '<b>1. Skala penilaian : </b><br>4 orang / lebih <b>poin 100</b> <br>3 orang <b>poin 75</b> <br>2 orang <b>poin 50</b> <br>1 orang <b>poin 25</b><br><br><b>2. Sertifikat diklat PM dan Ijazah dilampirkan (copy)</b>'),
(10, '', 'Apakah Pemerintah Kabupaten/ Kota mempunyai kebijakan yang mendukung iklim penanaman modal?', 3, 0, ''),
(11, '', 'Berkaitan dengan alokasi dana APBD, berapakah prosentase dana APBD yang dialokasikan dalam kegiatan Penanaman Modal (PM) di Kabupaten / Kota saudara?', 3, 0, '<b>pertumbuhan</b> : <br>- 1 - 4% nilai 25<br>- 5 - 9% nilai 50<br>- 10 - 14% nilai 75<br>- diatas 14% nilai 100'),
(12, '', 'Dalam dua tahun terakhir,sebutkan sasaran,program, kegiatan dan indikator capaian dalam bidang penanaman modal yang dapat direalisasikan?', 3, 0, '- 1 sd 2 program nilai 33<br>- 3 sd 4 program nilai 67<br>- diatas 5 program nilai 100'),
(13, '', 'Apakah Kabupaten/ Kota telah menetapkan Standar Pelayanan Minimal (SPM) bidang penanaman modal sebagaimana Perka Kepala BKPM RI Nomor 14 Tahun 2011?', 3, 0, ''),
(14, '', 'Apakah ada lembaga/organisasi Pendukung Penanaman Modal di Kabupaten/ Kota anda untuk mendukung kegiatan usaha dan penanaman modal?', 4, 0, 'Ada, semuanya poin 100\r\n<br>\r\nHanya ada 2 lembaga/organisasi poin 67\r\n<br>\r\nHanya ada 1 lembaga/organisasi poin \r\n33\r\n<br>\r\nTidak ada sama sekali poin \r\n5'),
(15, '', 'Fasilitas apa sajakah yang disediakan oleh pengelola (Luas Kawasan/ Zona/ Sentra, Unit Pengolahan Limbah, Ruang Terbuka Hijau, Daftar Infrastruktur yang dimiliki)', 4, 0, 'Penilaiannya di ranking oleh <b>Tim Penilai Investment Award</b>'),
(16, '', 'Sebutkan terobosan yang telah dilakukan oleh Instansi Penanaman Modal (IPMK)/ Perizinan Terpadu dalam rangka menarik calon investor dalam 2 (dua) tahun terakhir (Tahun 2013 & 2014), harap melampirkan bukti laporan & foto-foto terkait program / seminar / publikasi / cetak dan lain-lainnya ?', 5, 0, '<b>I. Program/ Kegiatan Promosi Penanaman Modal bersama Dinas/ Instansi Lain.</b><br>\r\n  \r\n- Lebih dari 20 kegiatan, terlampir dokumen kegiatan <strong>poin 25<br>\r\n</strong>- Antara 15-20 kegiatan, terlampir dokumen pendukungnya <strong>poin\r\n50</strong><br>\r\n- Antara 10-14 kegiatan, terlampir dokumen kegiatan\r\n<strong>poin 75</strong><br>\r\n- Kurang dari 10 kegiatan, terlampir data pendukungnya, terlampir dokumen kegiatan <strong>poin 100</strong><br><br>\r\n\r\n<strong>\r\nII. Program/ Kegiatan Promosi Penanaman Modal mandiri dilaksanakan Instansi Penanaman Modal Kabupaten/ Kota &amp; PTSP.</strong><br>\r\n- Lebih dari 20 kegiatan, terlampir dokumen kegiatan <strong>poin 100<br>\r\n</strong>- Antara 15-20 kegiatan, terlampir dokumen pendukungnya <strong>poin\r\n75</strong><br>\r\n- Antara 10-14 kegiatan, terlampir dokumen kegiatan <strong>poin 50</strong><br>\r\n- Kurang dari 10 kegiatan, terlampir data pendukungnya, terlampir dokumen kegiatan <strong>poin 25</strong>'),
(17, '', 'Sebutkan upaya-upaya promosi yang dilakukan oleh Instansi Penanaman Modal (IPMK)/ Perizinan Terpadu dalam mendukung program peluang investasi dalam bentuk pameran, dengan memberi tanda silang (X) pada pilihan jawaban ada atau tidak di tabel berikut ini:', 5, 0, 'Ada, tingkat internasional, nasional, provinsi dan Kabupaten/ Kota, terlampir dokumen kegiatan\r\n<strong>poin 100</strong>\r\n<br>\r\nAda, tingkat nasional, provinsi dan Kabupaten/ Kota, terlampir dokumen kegiatan<strong> poin 75 </strong><br>\r\nAda, tingkat provinsi dan Kabupaten/ Kota, terlampir dokumen kegiatan <strong>poin\r\n50 </strong><br>\r\nAda, tingkat Kabupaten/ Kota, terlampir dokumen kegiatan<strong> poin 25 </strong><br>\r\nTidak ada sama sekali <strong>poin 5</strong>'),
(18, '', 'Berapakah anggaran promosi penanaman modal (anggaran yang hanya dikelola oleh Instansi Penanaman Modal (IPMK)/ Perizinan Terpadu) tahun 2013 & 2014 (SM I & SM II) ? lampirkan buktinya', 5, 0, ''),
(19, '', 'Ruang Display/ Pamer Potensi (yang hanya dikelola oleh Instansi Penanaman Modal (IPMK) / Perizinan Terpadu).<br>Sebutkan ketersediaan ruang display/pamer potensi di Kabupaten/ Kota dalam mendukung program penanaman modal dengan memberi tanda silang (X) pada pilihan jawaban dalam tabel berikut ini:', 5, 0, ''),
(20, '', 'Mengadakan Business Gathering/ Business Friendly.<br> Sebutkan kegiatan bussiness gathering atau bussiness friendly dalam 2 tahun terakhir di Kabupaten/ Kota dalam mendukung program penanaman modal dengan memberi tanda silang (X) pada pilihan jawaban dalam tabel berikut ini:', 5, 0, 'Ada dan sering, lebih dari 5 kali dan terlampir dokumen pendukungnya\r\n<strong>poin 100</strong>\r\n<br>\r\nKadang-kadang, kurang dari 5 kali dan terlampir dokumen pendukungnya\r\n<strong>poin 55</strong>\r\n<br>\r\nTidak ada\r\n<strong>poin 5</strong>'),
(21, '', 'Apakah Instansi Penanaman Modal (IPMK)/ Perizinan Terpadu telah melakukan sosialisasi kesempatan berusaha yang dilakukan kepada para pelaku usaha/investor selama 2 Tahun (2013 & 2014)?', 5, 0, ''),
(22, '', 'Sebutkan sarana-sarana promosi yang digunakan oleh Pemerintah Kabupaten/ Kota dalam mendukung program investasi dengan memberi tanda silang (X) pada pilihan jawaban pada tabel berikut ini:', 6, 0, ''),
(23, '', 'Apakah Pemerintah Kabupaten/ Kota mempunyai program unggulan promosi penanaman modal dalam mendukung iklim usaha ?', 7, 0, ''),
(24, '', 'Apakah Pemerintah Kabupaten/ Kota sudah melimpahkan wewenang terkait dengan pelayanan perizinan penanaman modal?', 8, 0, ''),
(25, '', 'Dari Pelimpahan kewenangan tersebut diatas ada berapa sektor yang sudah dilimpahkan', 8, 0, ''),
(26, '', 'Pelimpahan wewenang yang telah diterima oleh SKPD yang menangani perizinan penanaman modal, ada berapa jenis izin/non izin yang dikelola', 8, 0, ''),
(27, '', 'Dalam perka BKPM nomor 5 tahun 2013 yang telah diubah dengan perka BKPM nomor 12 tahun 2013, tentang pedoman dan tatacara perizinan dan nonperizinan penanaman modal, ada pembatasan minimal investasi sebesar lima ratus juta rupiah yang dapat dimasukkan ke prgram SPIPISE, apakah Saudara sudah memproses Izin Prinsip (IP)/Izin Usaha (IU) dan berapa banyak dalam dua tahun terakhir?', 8, 0, ''),
(28, '', 'Apakah lembaga penanaman modal di Kabupaten/ Kota Saudara telah melaksanakan Pelayanan Pra Perizinan ?', 9, 0, ''),
(29, '', 'Apakah lembaga pelayanan perizinan sudah mempunyai Standard Pelayanan (SP) dan Standard Operating Procedure (SOP) dalam pelayanan perizinan penanaman modal?', 10, 0, ''),
(30, '', 'Apakah lembaga pelayanan perizinan penanaman modal telah melaksanakan pelayanan perizinan dengan menggunakan aplikasi SPIPISE?', 10, 0, ''),
(31, '', 'Apakah lembaga pelayanan perizinan penanaman modal dalam melakukan pelayanan sudah mengukur Indeks Kepuasan Masyarakat (IKM)?', 10, 0, ''),
(32, '', 'Apakah lembaga pelayanan perizinan penanaman modal sudah memiliki media yang menampung keluhan/pengaduan/kritik/masukan dari masyarakat?', 10, 0, ''),
(33, '', 'Apakah ada insentif terhadap perizinan penanaman modal?', 10, 0, ''),
(34, '', 'Apakah Pemerintah Kabupaten/ Kota mempunyai program unggulan pelayanan perizinan penanaman modal dalam mendukung iklim penanaman modal?', 12, 0, ''),
(35, '', 'Apakah Kabupaten/ Kota melakukan monitoring pasca perizinan?', 13, 0, ''),
(36, '', 'Apakah Pemerintah Kabupaten/ Kota telah menyusun buku kajian investasi daerah dalam tahun anggaran 2013 ?', 14, 0, ''),
(37, '', 'Apakah Pemerintah Kabupaten/ Kota telah melakukan kerjasama dengan Pemerintah daerah lain dibidang penanaman modal ?', 14, 0, ''),
(38, '', 'Apakah Pemerintah Kabupaten/ Kota telah menyusun peta potensi investasi untuk menarik minat investor?', 14, 0, ''),
(39, '', 'Apakah Pemerintah Kabupaten/ Kota telah memfasilitasi pengusaha besar untuk melakukan kemitraan dengan pengusaha kecil?', 14, 0, ''),
(40, '', 'Berapakah pertumbuhan rata-rata realisasi investasi Kabupaten / Kota dari Tahun 2013 sampai dengan Tahun 2014?', 15, 0, ''),
(41, '', 'Sebutkan target dan realisasi nilai investasi yang akan diperoleh Pemerintah Kabupaten/ Kota Tahun 2013 - 2014.dengan mengisi tabel berikut:', 16, 0, 'Rasio perbandingan antara target dan realisasi investasi <br>Lebih dari 70%  <b>poin100</b><br>Antara 35%-70% <b>poin 55</b><br>Kurang dari 35% <b>poin 5</b>'),
(42, '', 'Apakah ketersediaan tenaga kerja di Kabupaten/ Kota sebagai penunjang usaha memadai?', 17, 0, ''),
(43, '', 'Apakah kualitas tenaga kerja yang tersedia, sebagai penunjang kegiatan usaha memadai?', 17, 0, ''),
(44, '', 'Apakah Pemerintah Kabupaten/ Kota mempunyai program unggulan kinerja Penanaman Modal ?', 18, 0, ''),
(45, '', 'Dukungan apakah yang diberikan Pemerintah Daerah agar keamanan berinvestasi terwujud?', 19, 0, ''),
(46, '', 'Apakah ketersediaaan dan kualitas sambungan listrik sebagai penunjang kegiatan usaha memadai?', 20, 0, ''),
(47, '', 'Berapakah kapasitas terpasang Instalansi Pengolahan Air Bersih (IPAB) yang mendukung penanaman modal ?', 20, 0, ''),
(48, '', 'Apakah ketersediaan dan kualitas akses terhadap jalan darat sebagai penunjang kegiatan usaha antar wilayah memadai?', 20, 0, ''),
(49, '', 'Apakah ketersediaan dan kualitas sambungan telepon sebagai penunjang kegiatan usaha memadai?', 20, 0, ''),
(50, '', 'Apakah ketersediaan transportasi umum sebagai penunjang kegiatan penanaman modal di sekitar wilayah usaha memadai?', 20, 0, ''),
(51, '', 'Apakah kemudahan memperoleh lahan usaha sebagai penunjang kegiatan usaha dan penanaman modal sangat memadai ?', 20, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `questions2_details`
--

CREATE TABLE IF NOT EXISTS `questions2_details` (
`q2d_id` int(11) NOT NULL,
  `q2_id` int(11) NOT NULL,
  `q2d_number` varchar(10) NOT NULL,
  `q2d_name` text NOT NULL,
  `q2d_point` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=106 ;

--
-- Dumping data for table `questions2_details`
--

INSERT INTO `questions2_details` (`q2d_id`, `q2_id`, `q2d_number`, `q2d_name`, `q2d_point`) VALUES
(1, 4, 'a', 'Ya, ada dinas/ badan yang menangani penanaman modal sebagaimana Perda/ Perbup/ Perwali terlampir.', 100),
(4, 4, 'b', 'Ya, ada dalam bentuk kantor yang menangani penanaman modal sebagaimana Perda/ Perbup/ Perwali terlampir.', 67),
(5, 4, 'c', 'Ya, ada dalam bentuk sub bagian yang menangani penanaman modal sebagaimana Perda/ Perbup/ Perwali terlampir.', 33),
(6, 4, 'd', 'Tidak punya badan/ dinas/ kantor sama sekali.', 0),
(7, 5, 'a', 'Ya, dalam satu gedung.', 100),
(8, 5, 'b', 'Tidak berada dalam satu gedung.', 5),
(9, 6, 'a', 'Memiliki gedung tersendiri dengan fasilitas yang memadai yaitu:', 0),
(10, 6, 'b', 'Belum memiliki gedung tersendiri.', 5),
(11, 7, 'a', 'Ya, bidang penanaman modal mempunyai struktur organisasi yang mandiri, ramping dan efektif (lean) jelas tupoksinya dan lampirkan struktur organisasinya', 100),
(12, 7, 'b', 'Ya, bidang penanaman modal tidak mempunyai struktur organisasi yang mandiri, ramping dan efektif (lean) jelas tupoksinya karena menyatu dengan lembaga lain.', 55),
(13, 7, 'c', 'Tidak mempunyai struktur organisasi sama sekali', 5),
(14, 8, 'I', 'Pengetahuan PTSP Di Bidang Penanaman Modal Tingkat Pertama', 0),
(15, 8, 'II', 'Pengetahuan PTSP Di Bidang Penanaman Modal Tingkat Lanjutan', 0),
(16, 8, 'III', 'Pengetahuan PTSP Di Bidang Penanaman Modal Sektoral', 0),
(17, 8, 'IV', 'Kompetensi PTSP Di Bidang Penanaman Modal', 0),
(18, 10, 'a', 'Ya, mempunyai kebijakan yang mendukung iklim penanaman modal dalam bentuk Perda/ Perbup/ Perwali Penanaman Modal/RUPM dan sudah dilaksanakan, terlampir.', 100),
(19, 10, 'b', 'Ya, mempunyai draft kebijakan yang mendukung iklim penanaman modal dalam bentuk Perda/ Perbup/ Perwali Penanaman Modal/ RUPM terlampir.', 55),
(20, 10, 'c', 'Belum mempunyai kebijakan dalam bentuk Perda/ Perbup/ Perwali Penanaman Modal/ RUPM.', 5),
(21, 13, 'a', 'Ya, telah ditetapkan SPM bidang penanaman modal sebagaimana terlampir.', 100),
(22, 13, 'b', 'Ya, masih dalam bentuk rancangan/draf sebagaimana terlampir.', 55),
(23, 13, 'c', 'Belum membuat SPM.', 5),
(24, 18, '', 'Diatas 20% dari anggaran penanaman modal', 100),
(25, 18, '', '10% - 20% dari anggaran penanaman modal', 55),
(26, 18, '', 'Kurang dari 10% dari anggaran penanaman modal', 5),
(27, 21, '', 'Ya, Pemerintah Kabupaten/ Kota sering melakukan sosialisasi kesempatan berusaha yang dilakukan kepada para pelaku usaha/investor >5 kali dan terlampir dokumen pendukungnya', 100),
(28, 21, '', 'Ya, Pemerintah Kabupaten/ Kota sering melakukan sosialisasi kesempatan berusaha yang dilakukan kepada para pelaku usaha/investor 1-5 kali, dan terlampir dokumen pendukungnya', 67),
(29, 21, '', 'Tidak sama sekali.', 33),
(30, 23, '', 'Ya, Pemerintah Kabupaten/ Kota mempunyai program unggulan promosi investasi, dan ada Perda/Perbup/ Perwali menaunginya serta program tersebut dilaksanakan, terlampir dokumen pendukungnya.', 100),
(31, 23, '', 'Ya, Pemerintah Kabupaten/ Kota mempunyai program unggulan promosi investasi, dan ada Perda/ Perbup/ Perwali menaunginya, tetapi program tersebut belum dilaksanakan, terlampir dokumen pendukungnya.', 55),
(32, 23, '', 'Tidak mempunyai program unggulan maupun Perda/ Perbup/ Perwali.', 5),
(33, 24, '', 'Ya, Pemerintah Kabupaten/ Kota sudah melimpahkan wewenang perizinan penanaman modal (terlampir dokumen pendukungnya berupa perbup/ perwali)', 100),
(34, 24, '', 'Ya, Pemerintah Kabupaten/ Kota belum melimpahkan wewenang perizinan penanaman modal (terlampir dokumen pendukungnya berupa draf perbup/ perwali)', 55),
(35, 24, '', 'Ya, Pemerintah Kabupaten/ Kota belum melimpahkan wewenang perizinan.', 5),
(36, 25, '', '1 sd. 5 sektor (sebutkan dan lampirkan)', 5),
(37, 25, '', '6 sd 10 sektor (sebutkan dan lampirkan)', 55),
(38, 25, '', 'Lebih dari 10 sektor (sebutkan dan lampirkan)', 100),
(39, 26, '', '1 sd. 25 izin/ non izin sebagaimana terlampir', 5),
(40, 26, '', '26 sd. 50 izn/ non izin sebagaimana terlampir', 55),
(41, 26, '', 'lebih dari 50 izin/ non izin sebagaimana terlampir', 100),
(42, 27, '', 'sudah, diatas 6 IP/ IU, bukti terlampir', 100),
(43, 27, '', 'sudah, 1-5 IP/ IU, bukti terlampir', 55),
(44, 27, '', 'belum pernah memproses IP/ IU.', 5),
(45, 29, '', 'Ya, lembaga pelayanan perizinan mempunyai SP dan SOP yang sudah disosialisasikan sebagaimana terlampir.', 100),
(46, 29, '', 'Ya, lembaga pelayanan perizinan mempunyai SP dan SOP tetapi belum disosialisasikan.', 55),
(47, 29, '', 'Belum memiliki SP dan SOP.', 5),
(48, 30, '', 'Ya, aplikasi SPIPISE telah dimiliki beserta Hak Akses dan telah dioperasionalkan, dokumen terlampir.', 100),
(49, 30, '', 'Ya, SPIPISE telah dimiliki beserta hak aksesnya tetapi belum dioperasionalkan.', 55),
(50, 30, '', 'Belum melaksanakan SPIPISE dan belum memiliki hak akses.', 5),
(51, 31, '', 'Ya, hasil IKM meningkat setiap tahun, dokumen terlampir', 100),
(52, 31, '', 'Ya, hasil IKM mengalami penurunan, dokumen terlampir.', 55),
(53, 31, '', 'Belum dilakukan pengukuran IKM.', 5),
(54, 32, '', 'Ya, pengaduan itu terdokumentasikan dan telah diselesaikan, dokumen terlampir', 100),
(55, 32, '', 'Ya, pengaduan itu terdokumentasikan tetapi belum terselesaikan.', 55),
(56, 32, '', 'Belum terdokumentasikan.', 5),
(57, 33, '', 'Ya, ada insentif terhadap perizinan penanaman modal dan terlampir dokumen pendukungnya.', 100),
(58, 33, '', 'Ya, ada insentif terhadap perizinan penanaman modal tapi belum dilaksanakan.', 55),
(59, 33, '', 'Tidak ada insentif', 5),
(60, 34, '', 'Ya, Pemerintah Kabupaten/ Kota mempunyai program unggulan pelayanan perizinan penanaman modal, dan ada Perda/ Perbup/ Perwali menaunginya, program tersebut dilaksanakan, ada hasilnya dan dokumen terlampir', 100),
(61, 34, '', 'Ya, Pemerintah Kabupaten/ Kota mempunyai program unggulan pelayanan perizinan penanaman modal, dan ada Perda/ Perbup/ Perwali menaunginya, tetapi program tersebut belum dilaksanakan, dokumen terlampir', 55),
(62, 34, '', 'Belum mempunyai program unggulan maupun Perda/ Perbup/ Perwali.', 5),
(63, 36, '', 'Ya, telah menyusun buku kajian penanaman modal sekali dalam satu tahun,dokumen terlampir', 100),
(64, 36, '', 'Sedang dalam proses penyusunan, dokumen terlampir', 55),
(65, 36, '', 'Belum melakukan sama sekali', 5),
(66, 37, '', 'Ya, ada kerjasama,sebagaimana dokumen terlampir (MOU, Perjanjian Kerjasama dll).', 100),
(67, 37, '', 'Sedang dalam proses penjajagan kerjasama, sebagaimana dokumen terlampir', 55),
(68, 37, '', 'Belum ada kerjasama.', 5),
(69, 38, '', 'Ya, telah menyusun peta potensi investasi,sebagaimana dokumen terlampir', 100),
(70, 38, '', 'Sedang dalam proses penyusunan, sebagaimana dokumen terlampir', 55),
(71, 38, '', 'Belum menyusun sama sekali', 5),
(72, 39, '', 'Ya, telah memfasilitasi kemitraan,sebagaimana dokumen terlampir', 100),
(73, 39, '', 'Sedang dalam proses negosiasi, dokumen terlampir', 55),
(74, 39, '', 'Belum melakukan sama sekali.', 5),
(75, 40, '', 'Diatas 100%', 100),
(76, 40, '', 'Antara 50% - 100%', 55),
(77, 40, '', 'Dibawah 50%', 5),
(78, 42, '', 'Ya, ketersediaan tenaga kerja sebagai penunjang usaha di kota/ kabupaten sesuai bidang usaha dominan tersedia/memadai, dokumen terlampir', 100),
(79, 42, '', 'Ya, ketersediaan tenaga kerjasebagai penunjang usaha di kota/ kabupaten sesuai bidang usaha dominan tersedia/memadai namun jumlahnya terbatas, dokumen terlampir', 55),
(80, 42, '', 'Belum tersedia tenaga kerjasebagai penunjang usaha di kota/kabupaten sesuai bidang usaha dominan tersedia/memadai, dokumen terlampir.', 5),
(81, 43, '', 'Ya, kualitas tenaga kerja sangat memadai, dokumen terlampir', 100),
(82, 43, '', 'Ya, namun terbatas kualitasnya, dokumen terlampir', 55),
(83, 43, '', 'Tidak berkualitas.', 5),
(85, 44, '', 'Ya, Pemerintah mempunyai program unggulan kinerja investasi, dan ada Perda/ Perbup/ Perwali menaunginya, dilaksanakandan terlihat hasilnya, dokumen terlampir', 100),
(86, 44, '', 'Ya, Pemerintah mempunyai program unggulan kinerja investasi, dan ada Perda/ Perbup/ Perwali menaunginya, tetapi belum dilaksanakandan dokumen terlampir', 55),
(87, 44, '', 'Belum mempunyai program unggulan maupun Perda/ Perbup/Perwali.', 5),
(88, 45, '', 'Ya, ada dukungan, bukti terlampir.', 100),
(89, 45, '', 'Ya, ada dukungan, bukti tidak ada', 55),
(90, 45, '', 'Belum ada dukungan.', 5),
(91, 46, '', 'Ya,ketersediaaan dan kualitas sambungan listrik sebagai penunjang kegiatan usaha sangat memadai, dokumen terlampir.', 100),
(92, 46, '', 'Ya,tersedia tetapi terbatas, dokumen terlampir', 55),
(93, 46, '', 'Belum tersedia (dalam proses).', 5),
(94, 48, '', 'Ya, tersedia dan kualitas akses terhadap jalan darat kondisi baik (Nasional, Provinsi dan Kabupaten), dokumen terlampir', 100),
(95, 48, '', 'Ya, tersedia dan kualitas akses terhadap jalan darat kondisi sedang (Nasional, Provinsi dan Kabupaten), dokumen terlampir', 55),
(96, 48, '', 'Akses jalan darat rusak berat/ belum dapat menunjang kegiatan.', 5),
(97, 49, '', 'Ya, tersedia dan kualitas sambungan telepon sebagai penunjang kegiatan usaha sangat memadai, dokumen terlampir', 100),
(98, 49, '', 'Ya, tersedia tetapi terbatas, dokumen terlampir', 55),
(99, 49, '', 'Belum tersedia (dalam proses).', 5),
(100, 50, '', 'Ya, tersedia transportasi umum sebagai penunjang kegiatan penanaman modal di sekitar wilayah usaha sangat memadai.terlampir dokumen terlampirnya', 100),
(101, 50, '', 'Ya, tersedia tetapi terbatas, dokumen terlampir', 55),
(102, 50, '', 'Belum tersedia (dalam proses).', 5),
(103, 51, '', 'Ya, kemudahan memperoleh lahan usaha sebagai penunjang kegiatan usaha dan penanaman modal sangat memadai dan terlampir dokumen pendukungnya.', 100),
(104, 51, '', 'Ya, tetapi luasannya dibatasi, dokumen terlampir', 55),
(105, 51, '', 'Belum tersedia (dalam proses).', 5);

-- --------------------------------------------------------

--
-- Table structure for table `questions3`
--

CREATE TABLE IF NOT EXISTS `questions3` (
`q_id` int(11) NOT NULL,
  `q_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `q_1_1_3`
--

CREATE TABLE IF NOT EXISTS `q_1_1_3` (
`q_id` int(11) NOT NULL,
  `q_name` text NOT NULL,
  `q_point1` int(11) NOT NULL,
  `q_point2` int(11) NOT NULL,
  `q_point3` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `q_1_1_3`
--

INSERT INTO `q_1_1_3` (`q_id`, `q_name`, `q_point1`, `q_point2`, `q_point3`) VALUES
(1, 'Lahan parkir yang luas dan tertata rapi', 100, 67, 33),
(2, 'Ruang tunggu bersih ber AC dan nyaman', 100, 67, 33),
(3, 'Help Desk (pusat informasi) tersedia', 100, 67, 33),
(4, 'Ruang rapat yang representative', 100, 67, 33),
(5, 'Ruang kerja yang representative', 100, 67, 33),
(6, 'Pos jaga/ security yg memadai', 100, 67, 33),
(7, 'Tempat ibadah', 100, 67, 33),
(8, 'Tempat bermain anak', 100, 67, 33),
(9, 'Metode Antrian', 100, 67, 33),
(10, 'Toilet yg bersih dan rapi', 100, 67, 33);

-- --------------------------------------------------------

--
-- Table structure for table `q_1_2_2`
--

CREATE TABLE IF NOT EXISTS `q_1_2_2` (
`q_id` int(11) NOT NULL,
  `q_name` text NOT NULL,
  `q_position` text NOT NULL,
  `q_age` varchar(50) NOT NULL,
  `q_education` text NOT NULL,
  `q_certificate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `q_1_3_2`
--

CREATE TABLE IF NOT EXISTS `q_1_3_2` (
`q_id` int(11) NOT NULL,
  `q_name` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `q_1_3_2`
--

INSERT INTO `q_1_3_2` (`q_id`, `q_name`) VALUES
(1, 'APBD Kabupaten / Kota'),
(2, 'Anggaran PM'),
(3, 'Prosentase APBD PM terhadap APBD Kabupaten/ Kota'),
(4, 'Pertumbuhan Anggaran PM');

-- --------------------------------------------------------

--
-- Table structure for table `q_1_3_3`
--

CREATE TABLE IF NOT EXISTS `q_1_3_3` (
`q_id` int(11) NOT NULL,
  `q_name` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `q_1_3_3`
--

INSERT INTO `q_1_3_3` (`q_id`, `q_name`) VALUES
(1, 'Sasaran'),
(2, 'Program'),
(3, 'Kegiatan'),
(4, 'Indikator');

-- --------------------------------------------------------

--
-- Table structure for table `q_1_4_1`
--

CREATE TABLE IF NOT EXISTS `q_1_4_1` (
`q_id` int(11) NOT NULL,
  `q_name` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `q_1_4_1`
--

INSERT INTO `q_1_4_1` (`q_id`, `q_name`) VALUES
(1, 'Kawasan Industri'),
(2, 'Kawasan Berikat'),
(3, 'Zona Industri'),
(4, 'Sentra Industri');

-- --------------------------------------------------------

--
-- Table structure for table `q_1_4_2`
--

CREATE TABLE IF NOT EXISTS `q_1_4_2` (
`q_id` int(11) NOT NULL,
  `q_name` text NOT NULL,
  `q_kriteria_penilaian` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `q_1_4_2`
--

INSERT INTO `q_1_4_2` (`q_id`, `q_name`, `q_kriteria_penilaian`) VALUES
(1, 'Luas', '> 50 Hektar'),
(2, 'Unit Pengolahan Limbah', '1 Unit'),
(3, 'Ruang Terbuka Hijau', '> 30%'),
(4, 'Infrastruktur :', '');

-- --------------------------------------------------------

--
-- Table structure for table `q_1_4_2_details`
--

CREATE TABLE IF NOT EXISTS `q_1_4_2_details` (
`q_id` int(11) NOT NULL,
  `q_parent_id` int(11) NOT NULL,
  `q_name` text NOT NULL,
  `q_kriteria_penilaian` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `q_1_4_2_details`
--

INSERT INTO `q_1_4_2_details` (`q_id`, `q_parent_id`, `q_name`, `q_kriteria_penilaian`) VALUES
(1, 4, 'Jalan', 'Kapasitas Jalan (20% dari luas area).'),
(2, 4, 'Listrik', 'Kwh.'),
(3, 4, 'Gas', 'Ada / Tidak.'),
(4, 4, 'Telepon', 'Ada / Tidak.'),
(5, 4, 'Sampah (Depo/ TPS*)', 'Ada / Tidak.'),
(6, 4, 'Keamanan', 'Ada / Tidak.'),
(7, 4, 'Instalansi Pengolahan\r\nAir Bersih (IPAB)', 'Ada / Tidak.');

-- --------------------------------------------------------

--
-- Table structure for table `q_2_1_1`
--

CREATE TABLE IF NOT EXISTS `q_2_1_1` (
`q_id` int(11) NOT NULL,
  `q_name` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `q_2_1_1`
--

INSERT INTO `q_2_1_1` (`q_id`, `q_name`) VALUES
(1, 'Program/ Kegiatan Promosi Penanaman Modal bersama Dinas/ Instansi Lain.'),
(2, 'Program/ Kegiatan Promosi Penanaman Modal mandiri dilaksanakan Instansi Penanaman Modal Kabupaten / Kota & PTSP.');

-- --------------------------------------------------------

--
-- Table structure for table `q_2_1_2`
--

CREATE TABLE IF NOT EXISTS `q_2_1_2` (
`q_id` int(11) NOT NULL,
  `q_name` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `q_2_1_2`
--

INSERT INTO `q_2_1_2` (`q_id`, `q_name`) VALUES
(1, 'Pameran Peluang Penanaman Modal'),
(2, 'Materi yang dipamerkan (terlampir)'),
(3, 'Realisasi hasil pameran (Laporan terlampir)');

-- --------------------------------------------------------

--
-- Table structure for table `q_2_1_2_details`
--

CREATE TABLE IF NOT EXISTS `q_2_1_2_details` (
`q_id` int(11) NOT NULL,
  `q_parent_id` int(11) NOT NULL,
  `q_name` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `q_2_1_2_details`
--

INSERT INTO `q_2_1_2_details` (`q_id`, `q_parent_id`, `q_name`) VALUES
(1, 1, 'Internasional'),
(2, 1, 'Nasional'),
(3, 1, 'Provinsi'),
(4, 1, 'Kabupaten / Kota');

-- --------------------------------------------------------

--
-- Table structure for table `q_2_1_4`
--

CREATE TABLE IF NOT EXISTS `q_2_1_4` (
`q_id` int(11) NOT NULL,
  `q_name` text NOT NULL,
  `q_point1` int(11) NOT NULL,
  `q_point2` int(11) NOT NULL,
  `q_point3` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `q_2_1_4`
--

INSERT INTO `q_2_1_4` (`q_id`, `q_name`, `q_point1`, `q_point2`, `q_point3`) VALUES
(1, 'Ruang Display/ Pamer Potensi dimiliki SKPD lain', 5, 55, 100),
(2, 'Ruang Display/ Pamer Potensi milik IPMK/ PTSP', 100, 55, 5),
(3, 'Produk yang dipamerkan', 100, 55, 5),
(4, 'Rata-rata jumlah pengunjung.', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `q_2_1_5`
--

CREATE TABLE IF NOT EXISTS `q_2_1_5` (
`q_id` int(11) NOT NULL,
  `q_name` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `q_2_1_5`
--

INSERT INTO `q_2_1_5` (`q_id`, `q_name`) VALUES
(1, 'Kegiatan bussiness gathering atau bussiness friendly *');

-- --------------------------------------------------------

--
-- Table structure for table `q_2_2`
--

CREATE TABLE IF NOT EXISTS `q_2_2` (
`q_id` int(11) NOT NULL,
  `q_name` text NOT NULL,
  `q_point1` int(11) NOT NULL,
  `q_point2` int(11) NOT NULL,
  `q_point3` int(11) NOT NULL,
  `q_point4` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `q_2_2`
--

INSERT INTO `q_2_2` (`q_id`, `q_name`, `q_point1`, `q_point2`, `q_point3`, `q_point4`) VALUES
(1, 'Leaflet/ brosur/ profil potensi Penanaman Modal *', 100, 75, 50, 25),
(2, 'Iklan di koran/ televisi maupun media lain *', 100, 75, 50, 25),
(3, 'Buku profil potensi dan peluang investasi *', 100, 75, 50, 25),
(4, 'VCD peluang/ potensi investasi daerah *', 100, 75, 50, 25),
(5, 'Web-site Kabupaten/ Kota *', 100, 75, 50, 25),
(6, 'Web-site IPMK/ PTSP *', 100, 75, 50, 25),
(7, 'Telepon hot-line/ call center *', 100, 75, 50, 25),
(8, 'Kerja sama regional antar Kabupaten/ Kota *', 100, 75, 50, 25),
(9, 'Kerja sama dengan luar negeri *', 100, 75, 50, 25);

-- --------------------------------------------------------

--
-- Table structure for table `q_3_2_1`
--

CREATE TABLE IF NOT EXISTS `q_3_2_1` (
`q_id` int(11) NOT NULL,
  `q_name` text NOT NULL,
  `q_point1` int(11) NOT NULL,
  `q_point2` int(11) NOT NULL,
  `q_point3` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `q_3_2_1`
--

INSERT INTO `q_3_2_1` (`q_id`, `q_name`, `q_point1`, `q_point2`, `q_point3`) VALUES
(1, 'Membantu memberikan informasi terkait ketersediaan lahan, listrik, peraturan dan informasi lain yang dibutuhkan', 100, 67, 33),
(2, 'Melakukan korespondensi surat maupun komunikasi langsung dengan calon investor', 100, 67, 33),
(3, 'Mendampingi calon investor ke lapangan', 100, 67, 33),
(4, 'Mengadakan pertemuan dengan Instansi Pemerintah terkait untuk membahas rencana investasi', 100, 67, 33);

-- --------------------------------------------------------

--
-- Table structure for table `q_3_4_2_2`
--

CREATE TABLE IF NOT EXISTS `q_3_4_2_2` (
`q_id` int(11) NOT NULL,
  `q_name` text NOT NULL,
  `q_weight` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `q_3_4_2_2`
--

INSERT INTO `q_3_4_2_2` (`q_id`, `q_name`, `q_weight`) VALUES
(1, 'Daerah Metro (berdasarkan jumlah penduduk > 1 juta penduduk)', 0),
(2, 'Daerah Besar (berdasarkan jumlah penduduk 500 ribu - 1 juta penduduk)', 0),
(3, 'Daerah Sedang (berdasarkan jumlah penduduk 100 ribu - 500 ribu penduduk)', 0),
(4, 'Daerah Kecil (berdasarkan jumlah penduduk 20 ribu - 100 ribu penduduk)', 0);

-- --------------------------------------------------------

--
-- Table structure for table `q_3_4_2_2_detail`
--

CREATE TABLE IF NOT EXISTS `q_3_4_2_2_detail` (
`q_id` int(11) NOT NULL,
  `q_parent_id` int(11) NOT NULL,
  `q_name` text NOT NULL,
  `q_point` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `q_3_4_2_2_detail`
--

INSERT INTO `q_3_4_2_2_detail` (`q_id`, `q_parent_id`, `q_name`, `q_point`) VALUES
(1, 1, '> 3.000 liter/detik', 100),
(2, 1, '1.000 - 3.000 liter/detik', 55),
(3, 1, '< 1.000 liter/detik', 5),
(4, 2, '> 1.500 liter/detik', 100),
(5, 2, '750 - 1.500 liter/detik', 55),
(6, 2, '< 750 liter/detik', 5),
(7, 3, '> 1.000 liter/detik', 100),
(8, 3, '500 - 1.000 liter/detik', 55),
(9, 3, '< 500 liter/detik', 5),
(10, 4, '> 300 liter/detik', 100),
(11, 4, '100 - 300 liter/detik', 55),
(12, 4, '< 100 liter/detik', 5);

-- --------------------------------------------------------

--
-- Table structure for table `q_3_6`
--

CREATE TABLE IF NOT EXISTS `q_3_6` (
`q_id` int(11) NOT NULL,
  `q_name` text NOT NULL,
  `q_point1` int(11) NOT NULL,
  `q_point2` int(11) NOT NULL,
  `q_point3` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `q_3_6`
--

INSERT INTO `q_3_6` (`q_id`, `q_name`, `q_point1`, `q_point2`, `q_point3`) VALUES
(1, 'Melakukan kunjungan lapangan meninjau perusahaan', 100, 67, 33),
(2, 'Melakukan evaluasi pelaksanaan kegiatan realisasi investasi', 100, 67, 33),
(3, 'Membantu perusahaan menyelesaikan masalah (konseling, surat, dll)', 100, 67, 33);

-- --------------------------------------------------------

--
-- Table structure for table `q_4_3`
--

CREATE TABLE IF NOT EXISTS `q_4_3` (
`q_id` int(11) NOT NULL,
  `q_name` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `q_4_3`
--

INSERT INTO `q_4_3` (`q_id`, `q_name`) VALUES
(1, '2012'),
(2, '2013'),
(3, '2014 / SM I & SM II');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE IF NOT EXISTS `sub_categories` (
`sub_cat_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_cat_parent_id` int(11) NOT NULL,
  `sub_cat_number` varchar(10) NOT NULL,
  `sub_cat_name` text NOT NULL,
  `sub_cat_description` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`sub_cat_id`, `cat_id`, `sub_cat_parent_id`, `sub_cat_number`, `sub_cat_name`, `sub_cat_description`) VALUES
(1, 1, 0, 'a', 'Lembaga yang Menangani Penanaman Modal', ''),
(2, 1, 0, 'b', 'Struktur Organisasi', ''),
(3, 1, 0, 'c', 'Kebijakan Penanaman Modal', ''),
(4, 1, 0, 'd', 'Lembaga/Organisasi Pendukung Penanaman Modal', ''),
(5, 2, 0, 'a', 'Upaya Promosi Penanaman Modal', ''),
(6, 2, 0, 'b', 'Sarana Promosi Penanaman Modal', ''),
(7, 2, 0, 'c', 'Program Unggulan Promosi Penanaman Modal ', ''),
(8, 3, 0, 'a', 'Peraturan Pelayanan Perizinan', ''),
(9, 3, 0, 'b', 'Pelayanan Pra Perizinan', ''),
(10, 3, 0, 'c', 'Pelayanan Perizinan', ''),
(11, 3, 0, 'd', 'Dukungan Pelayanan Penanaman Modal', ''),
(12, 3, 0, 'e', 'Program Unggulan Pelayanan Penanaman Modal', '(Program unggulan adalah Inovasi dalam program baru yang tidak ada di daerah lain dan sudah dilaksanakan dan dirasakan / dikenal / bermanfaat oleh masyarakat/ pengusaha).'),
(13, 3, 0, 'f', 'Pelayanan Pasca Perizinan', ''),
(14, 4, 0, 'a', 'Upaya Penggalian Investasi', ''),
(15, 4, 0, 'b', 'Pertumbuhan rata-rata realisasi investasi Kabupaten / Kota', ''),
(16, 4, 0, 'c', 'Target dan Realisasi Investasi', ''),
(17, 4, 0, 'd', 'Tenaga Kerja', ''),
(18, 4, 0, 'e', 'Program Unggulan Kinerja Investasi', '(Program unggulan adalah Inovasi dalam program baru yang tidak ada di daerah lain dan sudah dilaksanakan dan dirasakan / dikenal / bermanfaat oleh masyarakat/ pengusaha).'),
(19, 3, 11, 'd.1', 'Keamanan Usaha', ''),
(20, 3, 11, 'd.2', 'Dukungan Infrastruktur', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `user_type_id` int(11) DEFAULT NULL,
  `user_login` varchar(100) DEFAULT NULL,
  `user_password` varchar(100) DEFAULT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_code` varchar(100) DEFAULT NULL,
  `user_phone` varchar(100) DEFAULT NULL,
  `user_img` text NOT NULL,
  `user_active_status` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_type_id`, `user_login`, `user_password`, `user_name`, `user_code`, `user_phone`, `user_img`, `user_active_status`) VALUES
(11, 1, 'melon', '3a2cf27458c9aa3e358f8fc0f002bff6', 'melon', 'A0001', '03125435432', '', 1),
(14, 2, 'erma', '81dc9bdb52d04dc20036dbd8313ed055', 'Erma Diah', '', '-', 'titologo smkn2d.jpg', 1),
(15, 3, 'mei', '81dc9bdb52d04dc20036dbd8313ed055', 'Mei', '', '-', 'Frozen-image-frozen-36312536-515-718.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `questions1`
--
ALTER TABLE `questions1`
 ADD PRIMARY KEY (`q1_id`);

--
-- Indexes for table `questions1_details`
--
ALTER TABLE `questions1_details`
 ADD PRIMARY KEY (`q1d_id`);

--
-- Indexes for table `questions2`
--
ALTER TABLE `questions2`
 ADD PRIMARY KEY (`q2_id`);

--
-- Indexes for table `questions2_details`
--
ALTER TABLE `questions2_details`
 ADD PRIMARY KEY (`q2d_id`);

--
-- Indexes for table `questions3`
--
ALTER TABLE `questions3`
 ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `q_1_1_3`
--
ALTER TABLE `q_1_1_3`
 ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `q_1_2_2`
--
ALTER TABLE `q_1_2_2`
 ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `q_1_3_2`
--
ALTER TABLE `q_1_3_2`
 ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `q_1_3_3`
--
ALTER TABLE `q_1_3_3`
 ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `q_1_4_1`
--
ALTER TABLE `q_1_4_1`
 ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `q_1_4_2`
--
ALTER TABLE `q_1_4_2`
 ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `q_1_4_2_details`
--
ALTER TABLE `q_1_4_2_details`
 ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `q_2_1_1`
--
ALTER TABLE `q_2_1_1`
 ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `q_2_1_2`
--
ALTER TABLE `q_2_1_2`
 ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `q_2_1_2_details`
--
ALTER TABLE `q_2_1_2_details`
 ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `q_2_1_4`
--
ALTER TABLE `q_2_1_4`
 ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `q_2_1_5`
--
ALTER TABLE `q_2_1_5`
 ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `q_2_2`
--
ALTER TABLE `q_2_2`
 ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `q_3_2_1`
--
ALTER TABLE `q_3_2_1`
 ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `q_3_4_2_2`
--
ALTER TABLE `q_3_4_2_2`
 ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `q_3_4_2_2_detail`
--
ALTER TABLE `q_3_4_2_2_detail`
 ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `q_3_6`
--
ALTER TABLE `q_3_6`
 ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `q_4_3`
--
ALTER TABLE `q_4_3`
 ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
 ADD PRIMARY KEY (`sub_cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `questions1`
--
ALTER TABLE `questions1`
MODIFY `q1_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `questions1_details`
--
ALTER TABLE `questions1_details`
MODIFY `q1d_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `questions2`
--
ALTER TABLE `questions2`
MODIFY `q2_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `questions2_details`
--
ALTER TABLE `questions2_details`
MODIFY `q2d_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=106;
--
-- AUTO_INCREMENT for table `questions3`
--
ALTER TABLE `questions3`
MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `q_1_1_3`
--
ALTER TABLE `q_1_1_3`
MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `q_1_2_2`
--
ALTER TABLE `q_1_2_2`
MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `q_1_3_2`
--
ALTER TABLE `q_1_3_2`
MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `q_1_3_3`
--
ALTER TABLE `q_1_3_3`
MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `q_1_4_1`
--
ALTER TABLE `q_1_4_1`
MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `q_1_4_2`
--
ALTER TABLE `q_1_4_2`
MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `q_1_4_2_details`
--
ALTER TABLE `q_1_4_2_details`
MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `q_2_1_1`
--
ALTER TABLE `q_2_1_1`
MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `q_2_1_2`
--
ALTER TABLE `q_2_1_2`
MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `q_2_1_2_details`
--
ALTER TABLE `q_2_1_2_details`
MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `q_2_1_4`
--
ALTER TABLE `q_2_1_4`
MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `q_2_1_5`
--
ALTER TABLE `q_2_1_5`
MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `q_2_2`
--
ALTER TABLE `q_2_2`
MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `q_3_2_1`
--
ALTER TABLE `q_3_2_1`
MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `q_3_4_2_2`
--
ALTER TABLE `q_3_4_2_2`
MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `q_3_4_2_2_detail`
--
ALTER TABLE `q_3_4_2_2_detail`
MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `q_3_6`
--
ALTER TABLE `q_3_6`
MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `q_4_3`
--
ALTER TABLE `q_4_3`
MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
MODIFY `sub_cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
