-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Feb 2015 pada 12.02
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

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
-- Struktur dari tabel `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
`answer_id` int(11) NOT NULL,
  `data_id` int(11) NOT NULL,
  `participant_id` int(11) NOT NULL,
  `participant_name` text NOT NULL,
  `assessor_name` varchar(100) NOT NULL,
  `answer_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `phase_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `answers1`
--

CREATE TABLE IF NOT EXISTS `answers1` (
`answer1_id` int(11) NOT NULL,
  `q1_id` int(11) NOT NULL,
  `answer1_question` text NOT NULL,
  `answer1_answer` text NOT NULL,
  `answer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `answers1_details`
--

CREATE TABLE IF NOT EXISTS `answers1_details` (
`answer1_detail_id` int(11) NOT NULL,
  `answer1_id` int(11) NOT NULL,
  `answer1_detail_question` text NOT NULL,
  `answer1_detail_answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `answers2`
--

CREATE TABLE IF NOT EXISTS `answers2` (
`answer2_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL,
  `answer2_type` int(11) NOT NULL,
  `answer2_number` varchar(10) NOT NULL,
  `answer2_question` text NOT NULL,
  `answer2_answer` text NOT NULL,
  `answer2_sub_cat_id` int(11) NOT NULL,
  `answer2_weight` int(11) NOT NULL,
  `answer2_description` text NOT NULL,
  `answer2_point` int(11) NOT NULL,
  `answer2_point_value` int(11) NOT NULL,
  `answer2_attachment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `answers2_details`
--

CREATE TABLE IF NOT EXISTS `answers2_details` (
`answer2_detail_id` int(11) NOT NULL,
  `answer2_id` int(11) NOT NULL,
  `answer2_detail_type` int(11) NOT NULL,
  `answer2_detail_number` varchar(10) NOT NULL,
  `answer_detail_question` text NOT NULL,
  `answer_detail_point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `answers3`
--

CREATE TABLE IF NOT EXISTS `answers3` (
`answer3_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL,
  `answer3_question` text NOT NULL,
  `answer3_answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `answers_pma`
--

CREATE TABLE IF NOT EXISTS `answers_pma` (
`answer_pma_id` int(11) NOT NULL,
  `data_id` int(11) NOT NULL,
  `participant_id` int(11) NOT NULL,
  `participant_name` text NOT NULL,
  `assessor_name` varchar(100) NOT NULL,
  `answer_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `phase_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `answers_pma`
--

INSERT INTO `answers_pma` (`answer_pma_id`, `data_id`, `participant_id`, `participant_name`, `assessor_name`, `answer_date`, `user_id`, `phase_id`) VALUES
(3, 6, 1, 'pt anugrah', 'Yulianto Setiawan', '2015-02-24', 11, 1),
(4, 6, 1, 'pt anugrah', 'Ahmad Nuruddin', '2015-02-24', 11, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `answers_pma1`
--

CREATE TABLE IF NOT EXISTS `answers_pma1` (
`answer_pma1_id` int(11) NOT NULL,
  `answer_pma_id` int(11) NOT NULL,
  `qp1_id` int(11) NOT NULL,
  `answer_pma1_question` varchar(200) NOT NULL,
  `answer_pma1_answer` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `answers_pma1`
--

INSERT INTO `answers_pma1` (`answer_pma1_id`, `answer_pma_id`, `qp1_id`, `answer_pma1_question`, `answer_pma1_answer`) VALUES
(15, 3, 1, 'Nama perusahaan', 'pt anugrah'),
(16, 3, 2, 'sektor usaha', 'migaas'),
(17, 3, 3, 'status perusahaan', 'PMA'),
(18, 3, 7, 'Berdiri/Beroperasi Sejak', '1991'),
(19, 3, 8, 'Alamat Kantor/Perusahaan', 'indnesia'),
(20, 3, 9, 'Telp/Fax/E-mail', '00000'),
(21, 3, 10, 'Orientasi Produk', 'minyak'),
(22, 4, 1, 'Nama perusahaan', 'pt anugrah'),
(23, 4, 2, 'sektor usaha', 'migaas'),
(24, 4, 3, 'status perusahaan', 'PMA'),
(25, 4, 7, 'Berdiri/Beroperasi Sejak', '1991'),
(26, 4, 8, 'Alamat Kantor/Perusahaan', 'indnesia'),
(27, 4, 9, 'Telp/Fax/E-mail', '00000'),
(28, 4, 10, 'Orientasi Produk', 'minyak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `answers_pma2`
--

CREATE TABLE IF NOT EXISTS `answers_pma2` (
`answer_pma2_id` int(11) NOT NULL,
  `answer_pma_id` int(11) NOT NULL,
  `qp2_id` int(11) NOT NULL,
  `qp2_weight` int(11) NOT NULL,
  `qp2d_id` int(11) NOT NULL,
  `answer_pma2_point` int(11) NOT NULL,
  `answer_pma2_point_value` int(11) NOT NULL,
  `answer_pma2_attachment` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=141 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `answers_pma2`
--

INSERT INTO `answers_pma2` (`answer_pma2_id`, `answer_pma_id`, `qp2_id`, `qp2_weight`, `qp2d_id`, `answer_pma2_point`, `answer_pma2_point_value`, `answer_pma2_attachment`) VALUES
(101, 3, 51, 10, 131, 100, 1000, 1),
(102, 3, 52, 10, 135, 100, 1000, 1),
(103, 3, 55, 10, 139, 100, 1000, 0),
(104, 3, 56, 10, 143, 100, 1000, 1),
(105, 3, 57, 10, 147, 100, 1000, 0),
(106, 3, 58, 10, 150, 5, 50, 0),
(107, 3, 59, 10, 153, 100, 1000, 1),
(108, 3, 60, 20, 156, 55, 275, 0),
(109, 3, 61, 20, 158, 100, 500, 1),
(110, 3, 62, 10, 162, 55, 550, 1),
(111, 3, 64, 10, 164, 100, 1000, 1),
(112, 3, 65, 10, 169, 55, 550, 0),
(113, 3, 66, 10, 171, 100, 1000, 1),
(114, 3, 67, 10, 173, 100, 1000, 0),
(115, 3, 68, 20, 176, 100, 500, 1),
(116, 3, 69, 20, 179, 100, 500, 0),
(117, 3, 70, 20, 182, 100, 500, 1),
(118, 3, 72, 10, 185, 100, 1000, 1),
(119, 3, 73, 10, 190, 67, 670, 0),
(120, 3, 74, 10, 193, 100, 1000, 1),
(121, 4, 51, 10, 134, 5, 50, 1),
(122, 4, 52, 10, 138, 5, 50, 1),
(123, 4, 55, 10, 141, 33, 330, 1),
(124, 4, 56, 10, 144, 67, 670, 0),
(125, 4, 57, 10, 148, 55, 550, 1),
(126, 4, 58, 10, 150, 5, 50, 0),
(127, 4, 59, 10, 155, 5, 50, 1),
(128, 4, 60, 20, 156, 55, 275, 1),
(129, 4, 61, 20, 159, 55, 275, 0),
(130, 4, 62, 10, 162, 55, 550, 1),
(131, 4, 64, 10, 165, 67, 670, 1),
(132, 4, 65, 10, 169, 55, 550, 0),
(133, 4, 66, 10, 172, 5, 50, 1),
(134, 4, 67, 10, 174, 55, 550, 0),
(135, 4, 68, 20, 176, 100, 500, 0),
(136, 4, 69, 20, 180, 55, 275, 1),
(137, 4, 70, 20, 183, 55, 275, 1),
(138, 4, 72, 10, 187, 33, 330, 0),
(139, 4, 73, 10, 191, 33, 330, 0),
(140, 4, 74, 10, 194, 55, 550, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `answers_pma3`
--

CREATE TABLE IF NOT EXISTS `answers_pma3` (
`answer_pma3_id` int(11) NOT NULL,
  `answer_pma_id` int(11) NOT NULL,
  `qp3_id` int(11) NOT NULL,
  `answer_pma3_question` varchar(200) NOT NULL,
  `answer_pma3_answer` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `answers_pma3`
--

INSERT INTO `answers_pma3` (`answer_pma3_id`, `answer_pma_id`, `qp3_id`, `answer_pma3_question`, `answer_pma3_answer`) VALUES
(19, 3, 19, 'Nama Instansi', 'PMA Anugerah 1'),
(20, 3, 20, 'Nama Pejabat Pengisi', 'Yulianto Setiawan'),
(21, 3, 21, 'Jabatan', 'Kepala Bidang SI'),
(22, 3, 22, 'Lama Menduduki Jabatan', '3 tahun'),
(23, 3, 23, 'Alamat Instansi', '-'),
(24, 3, 24, 'No Telp Instansi', '-'),
(25, 3, 25, 'No Fax Instansi', '-'),
(26, 3, 26, 'E-mail Instansi', '-'),
(27, 3, 27, 'No HP Penjabat Pengisi', '-'),
(28, 4, 19, 'Nama Instansi', 'PT Anugerah 1'),
(29, 4, 20, 'Nama Pejabat Pengisi', 'Ahmad Nuruddin'),
(30, 4, 21, 'Jabatan', 'Kepala Bidang Keamanan'),
(31, 4, 22, 'Lama Menduduki Jabatan', '3 tahun'),
(32, 4, 23, 'Alamat Instansi', '-'),
(33, 4, 24, 'No Telp Instansi', '-'),
(34, 4, 25, 'No Fax Instansi', '-'),
(35, 4, 26, 'E-mail Instansi', '-'),
(36, 4, 27, 'No HP Penjabat Pengisi', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `answers_qp_132`
--

CREATE TABLE IF NOT EXISTS `answers_qp_132` (
`answer_qp_132_id` int(11) NOT NULL,
  `answer_pma_id` int(11) NOT NULL,
  `qp2_id` int(11) NOT NULL,
  `qp2_weight` int(11) NOT NULL,
  `answer_qp_132_answer` int(11) NOT NULL,
  `answer_qp_132_point` int(11) NOT NULL,
  `answer_qp_132_point_value` int(11) NOT NULL,
  `answer_pma2_attachment` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `answers_qp_132`
--

INSERT INTO `answers_qp_132` (`answer_qp_132_id`, `answer_pma_id`, `qp2_id`, `qp2_weight`, `answer_qp_132_answer`, `answer_qp_132_point`, `answer_qp_132_point_value`, `answer_pma2_attachment`) VALUES
(3, 3, 53, 20, 75, 100, 500, 1),
(4, 4, 53, 20, 75, 100, 500, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `answers_qp_132_details`
--

CREATE TABLE IF NOT EXISTS `answers_qp_132_details` (
`answer_qp_132_detail_id` int(11) NOT NULL,
  `answer_qp_132_id` int(11) NOT NULL,
  `qp_id` int(11) NOT NULL,
  `answer_number` int(11) NOT NULL,
  `answer_qp_132_detail_type` int(11) NOT NULL,
  `answer_qp_132_detail_answer` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `answers_qp_132_details`
--

INSERT INTO `answers_qp_132_details` (`answer_qp_132_detail_id`, `answer_qp_132_id`, `qp_id`, `answer_number`, `answer_qp_132_detail_type`, `answer_qp_132_detail_answer`) VALUES
(13, 3, 5, 1, 0, 2013),
(14, 3, 6, 1, 1, 100000000),
(15, 3, 5, 2, 0, 2014),
(16, 3, 6, 2, 1, 200000000),
(17, 3, 5, 3, 0, 2015),
(18, 3, 6, 3, 1, 300000000),
(19, 4, 5, 1, 0, 2013),
(20, 4, 6, 1, 1, 100000000),
(21, 4, 5, 2, 0, 2014),
(22, 4, 6, 2, 1, 200000000),
(23, 4, 5, 3, 0, 2015),
(24, 4, 6, 3, 1, 300000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `answers_qp_133`
--

CREATE TABLE IF NOT EXISTS `answers_qp_133` (
`answer_qp_133_id` int(11) NOT NULL,
  `answer_pma_id` int(11) NOT NULL,
  `qp2_id` int(11) NOT NULL,
  `qp2_weight` int(11) NOT NULL,
  `answer_qp_133_answer` int(11) NOT NULL,
  `answer_qp_133_point` int(11) NOT NULL,
  `answer_qp_133_point_value` int(11) NOT NULL,
  `answer_pma2_attachment` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `answers_qp_133`
--

INSERT INTO `answers_qp_133` (`answer_qp_133_id`, `answer_pma_id`, `qp2_id`, `qp2_weight`, `answer_qp_133_answer`, `answer_qp_133_point`, `answer_qp_133_point_value`, `answer_pma2_attachment`) VALUES
(3, 3, 54, 10, 29, 100, 1000, 1),
(4, 4, 54, 10, 29, 100, 1000, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `answers_qp_133_details`
--

CREATE TABLE IF NOT EXISTS `answers_qp_133_details` (
`answers_qp_133_detail_id` int(11) NOT NULL,
  `answer_qp_133_id` int(11) NOT NULL,
  `qp_id` int(11) NOT NULL,
  `answer_number` int(11) NOT NULL,
  `answer_qp_133_detail_type` int(11) NOT NULL,
  `answer_qp_133_detail_answer` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `answers_qp_133_details`
--

INSERT INTO `answers_qp_133_details` (`answers_qp_133_detail_id`, `answer_qp_133_id`, `qp_id`, `answer_number`, `answer_qp_133_detail_type`, `answer_qp_133_detail_answer`) VALUES
(19, 3, 9, 1, 0, 2013),
(20, 3, 10, 1, 1, 500000000),
(21, 3, 11, 1, 1, 100000000),
(22, 3, 9, 2, 0, 2014),
(23, 3, 10, 2, 1, 600000000),
(24, 3, 11, 2, 1, 200000000),
(25, 3, 9, 3, 0, 2015),
(26, 3, 10, 3, 1, 700000000),
(27, 3, 11, 3, 1, 300000000),
(28, 4, 9, 1, 0, 2013),
(29, 4, 10, 1, 1, 500000000),
(30, 4, 11, 1, 1, 100000000),
(31, 4, 9, 2, 0, 2014),
(32, 4, 10, 2, 1, 600000000),
(33, 4, 11, 2, 1, 200000000),
(34, 4, 9, 3, 0, 2015),
(35, 4, 10, 3, 1, 700000000),
(36, 4, 11, 3, 1, 300000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `answers_qp_211`
--

CREATE TABLE IF NOT EXISTS `answers_qp_211` (
`answer_qp_211_id` int(11) NOT NULL,
  `answer_pma_id` int(11) NOT NULL,
  `qp2_id` int(11) NOT NULL,
  `qp2_weight` int(11) NOT NULL,
  `answer_qp_211_answer` int(11) NOT NULL,
  `answer_qp_211_point` int(11) NOT NULL,
  `answer_qp_211_point_value` int(11) NOT NULL,
  `answer_pma2_attachment` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `answers_qp_211`
--

INSERT INTO `answers_qp_211` (`answer_qp_211_id`, `answer_pma_id`, `qp2_id`, `qp2_weight`, `answer_qp_211_answer`, `answer_qp_211_point`, `answer_qp_211_point_value`, `answer_pma2_attachment`) VALUES
(3, 3, 63, 10, 2, 5, 50, 1),
(4, 4, 63, 10, 3, 5, 50, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `answers_qp_211_details`
--

CREATE TABLE IF NOT EXISTS `answers_qp_211_details` (
`answer_qp_211_detail_id` int(11) NOT NULL,
  `answer_qp_211_id` int(11) NOT NULL,
  `answer_qp_211_detail_question` varchar(200) NOT NULL,
  `answer_qp_211_detail_answer` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `answers_qp_211_details`
--

INSERT INTO `answers_qp_211_details` (`answer_qp_211_detail_id`, `answer_qp_211_id`, `answer_qp_211_detail_question`, `answer_qp_211_detail_answer`) VALUES
(9, 3, 'Kemitraan dengan UMKM', 1),
(10, 3, 'Kegiatan Pendidikan (sesuai dgn kompetensi perusahaan).', 0),
(11, 3, 'Kegiatan bantuan sosial', 1),
(12, 3, 'Kegiatan Penghijauan Lingkungan', 0),
(13, 4, 'Kemitraan dengan UMKM', 1),
(14, 4, 'Kegiatan Pendidikan (sesuai dgn kompetensi perusahaan).', 1),
(15, 4, 'Kegiatan bantuan sosial', 1),
(16, 4, 'Kegiatan Penghijauan Lingkungan', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `answers_qp_311`
--

CREATE TABLE IF NOT EXISTS `answers_qp_311` (
`answer_qp_311_id` int(11) NOT NULL,
  `answer_pma_id` int(11) NOT NULL,
  `qp2_id` int(11) NOT NULL,
  `qp2_weight` int(11) NOT NULL,
  `answer_qp_311_answer` int(11) NOT NULL,
  `answer_qp_311_point` int(11) NOT NULL,
  `answer_qp_311_point_value` int(11) NOT NULL,
  `answer_pma2_attachment` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `answers_qp_311`
--

INSERT INTO `answers_qp_311` (`answer_qp_311_id`, `answer_pma_id`, `qp2_id`, `qp2_weight`, `answer_qp_311_answer`, `answer_qp_311_point`, `answer_qp_311_point_value`, `answer_pma2_attachment`) VALUES
(3, 3, 71, 10, 0, 5, 50, 0),
(4, 4, 71, 10, 0, 5, 50, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `answers_qp_311_details`
--

CREATE TABLE IF NOT EXISTS `answers_qp_311_details` (
`answer_qp_311_detail_id` int(11) NOT NULL,
  `answer_qp_311_id` int(11) NOT NULL,
  `qp_id` int(11) NOT NULL,
  `answer_qp_311_detail_type` int(11) NOT NULL,
  `answer_qp_311_detail_answer` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `a_1_4_2`
--

CREATE TABLE IF NOT EXISTS `a_1_4_2` (
`a_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL,
  `q_id` int(11) NOT NULL,
  `q_type` int(11) NOT NULL,
  `a_answer1` text NOT NULL,
  `a_answer2` text NOT NULL,
  `a_answer3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `a_1_4_2_details`
--

CREATE TABLE IF NOT EXISTS `a_1_4_2_details` (
`a_detail_id` int(11) NOT NULL,
  `a_id` int(11) NOT NULL,
  `q_detail_id` int(11) NOT NULL,
  `a_answer1` text NOT NULL,
  `a_answer2` text NOT NULL,
  `a_answer3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `a_2_1_1`
--

CREATE TABLE IF NOT EXISTS `a_2_1_1` (
`a_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL,
  `q_id` int(11) NOT NULL,
  `a_total_answer` int(11) NOT NULL,
  `a_point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `a_2_1_1_details`
--

CREATE TABLE IF NOT EXISTS `a_2_1_1_details` (
`a_detail_id` int(11) NOT NULL,
  `a_id` int(11) NOT NULL,
  `a_answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `a_2_1_4`
--

CREATE TABLE IF NOT EXISTS `a_2_1_4` (
`a_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL,
  `q_id` int(11) NOT NULL,
  `q_type` int(11) NOT NULL,
  `q_answer` int(11) NOT NULL,
  `q_point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `a_2_1_5`
--

CREATE TABLE IF NOT EXISTS `a_2_1_5` (
`a_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL,
  `q_id` int(11) NOT NULL,
  `a_answer` int(11) NOT NULL,
  `a_point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `a_2_2`
--

CREATE TABLE IF NOT EXISTS `a_2_2` (
`a_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL,
  `q_id` int(11) NOT NULL,
  `a_answer` int(11) NOT NULL,
  `a_point` int(11) NOT NULL,
  `a_answer_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `a_3_2_1`
--

CREATE TABLE IF NOT EXISTS `a_3_2_1` (
`a_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL,
  `q_id` int(11) NOT NULL,
  `a_answer` int(11) NOT NULL,
  `a_point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `a_3_4_2_2`
--

CREATE TABLE IF NOT EXISTS `a_3_4_2_2` (
`a_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL,
  `q_id` int(11) NOT NULL,
  `a_answer` int(11) NOT NULL,
  `a_point` int(11) NOT NULL,
  `a_point_value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `a_3_6`
--

CREATE TABLE IF NOT EXISTS `a_3_6` (
`a_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL,
  `q_id` int(11) NOT NULL,
  `a_answer` int(11) NOT NULL,
  `a_point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`cat_id` int(11) NOT NULL,
  `cat_name` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(1, 'BIDANG KELEMBAGAAN'),
(2, 'PROMOSI INVESTASI'),
(3, 'PELAYANAN PENANAMAN MODAL'),
(4, 'KINERJA INVESTASI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories_pma`
--

CREATE TABLE IF NOT EXISTS `categories_pma` (
`cat_pma_id` int(11) NOT NULL,
  `cat_pma_number` varchar(50) NOT NULL,
  `cat_pma_name` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `categories_pma`
--

INSERT INTO `categories_pma` (`cat_pma_id`, `cat_pma_number`, `cat_pma_name`) VALUES
(1, 'B', 'kinerja pelaporan kegiatan penanaman modal (LKPM)'),
(2, 'C', 'pelaksanaan corporate social responsibility (CSR)'),
(3, 'D', 'pengelolaan lingkungan hidup');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuisioner`
--

CREATE TABLE IF NOT EXISTS `kuisioner` (
`kuisioner_id` int(11) NOT NULL,
  `kuisioner_name` text NOT NULL,
  `kuisioner_description` text NOT NULL,
  `kuisioner_date` date NOT NULL,
  `kuisioner_type` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kuisioner`
--

INSERT INTO `kuisioner` (`kuisioner_id`, `kuisioner_name`, `kuisioner_description`, `kuisioner_date`, `kuisioner_type`) VALUES
(4, 'Kuisioner Kabupaten Kota Tahun 2014/2015', '', '2014-11-26', 1),
(6, 'PMA/PMDN Tahun 2014-2015', '', '2014-12-30', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `participants`
--

CREATE TABLE IF NOT EXISTS `participants` (
`participant_id` int(11) NOT NULL,
  `participant_name` varchar(100) NOT NULL,
  `participant_date` date NOT NULL,
  `participant_description` text NOT NULL,
  `participant_type` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `participants`
--

INSERT INTO `participants` (`participant_id`, `participant_name`, `participant_date`, `participant_description`, `participant_type`) VALUES
(1, 'pt anugrah', '2014-12-07', '', 2),
(4, 'Trenggalek2', '2014-12-02', '', 1),
(5, 'Madiun', '2014-12-02', '', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `participants1`
--

CREATE TABLE IF NOT EXISTS `participants1` (
`participant1_id` int(11) NOT NULL,
  `q1_id` int(11) NOT NULL,
  `participant1_question` text NOT NULL,
  `participant1_answer` text NOT NULL,
  `participant_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `participants1`
--

INSERT INTO `participants1` (`participant1_id`, `q1_id`, `participant1_question`, `participant1_answer`, `participant_id`) VALUES
(16, 1, 'Nama Kabupaten / Kota', 'Trenggalek2', 4),
(17, 2, 'Luas wilayah', '22', 4),
(18, 3, 'Jumlah penduduk', '32', 4),
(19, 4, 'Alamat website', '', 4),
(20, 5, 'PDRB perkapita', '', 4),
(21, 1, 'Nama Kabupaten / Kota', 'Madiun', 5),
(22, 2, 'Luas wilayah', '2', 5),
(23, 3, 'Jumlah penduduk', '3', 5),
(24, 4, 'Alamat website', '', 5),
(25, 5, 'PDRB perkapita', '', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `participants1_details`
--

CREATE TABLE IF NOT EXISTS `participants1_details` (
`participant1_detail_id` int(11) NOT NULL,
  `participant1_id` int(11) NOT NULL,
  `q1d_id` int(11) NOT NULL,
  `participant1_detail_question` text NOT NULL,
  `participant1_detail_answer` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `participants1_details`
--

INSERT INTO `participants1_details` (`participant1_detail_id`, `participant1_id`, `q1d_id`, `participant1_detail_question`, `participant1_detail_answer`) VALUES
(16, 19, 1, 'Pemerintah Kabupaten/ Kota', '42'),
(17, 19, 3, 'Instansi Penanaman Modal', '52'),
(18, 19, 4, 'Instansi PTSP', '62'),
(19, 20, 5, 'Tahun 2013', '72'),
(20, 20, 6, 'Tahun 2014 (SM I & SM II)', '82'),
(21, 24, 1, 'Pemerintah Kabupaten/ Kota', '4'),
(22, 24, 3, 'Instansi Penanaman Modal', '5'),
(23, 24, 4, 'Instansi PTSP', '6'),
(24, 25, 5, 'Tahun 2013', '7'),
(25, 25, 6, 'Tahun 2014 (SM I & SM II)', '8');

-- --------------------------------------------------------

--
-- Struktur dari tabel `participants_pma1`
--

CREATE TABLE IF NOT EXISTS `participants_pma1` (
`participant_pma1_id` int(11) NOT NULL,
  `qp1_id` int(11) NOT NULL,
  `participant_pma1_question` text NOT NULL,
  `participant_pma1_answer` text NOT NULL,
  `participant_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `participants_pma1`
--

INSERT INTO `participants_pma1` (`participant_pma1_id`, `qp1_id`, `participant_pma1_question`, `participant_pma1_answer`, `participant_id`) VALUES
(1, 1, 'Nama perusahaan', 'pt anugrah', 1),
(2, 2, 'sektor usaha', 'migaas', 1),
(3, 3, 'status perusahaan', 'PMA', 1),
(4, 7, 'Berdiri/Beroperasi Sejak', '1991', 1),
(5, 8, 'Alamat Kantor/Perusahaan', 'indnesia', 1),
(6, 9, 'Telp/Fax/E-mail', '00000', 1),
(7, 10, 'Orientasi Produk', 'minyak', 1),
(8, 1, 'Nama perusahaan', 'sektor', 2),
(9, 2, 'sektor usaha', '1', 2),
(10, 3, 'status perusahaan', 'PMA', 2),
(11, 7, 'Berdiri/Beroperasi Sejak', '19991', 2),
(12, 8, 'Alamat Kantor/Perusahaan', '1', 2),
(13, 9, 'Telp/Fax/E-mail', '1', 2),
(14, 10, 'Orientasi Produk', '1', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `phase`
--

CREATE TABLE IF NOT EXISTS `phase` (
`phase_id` int(11) NOT NULL,
  `phase_name` text NOT NULL,
  `phase_description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `phase`
--

INSERT INTO `phase` (`phase_id`, `phase_name`, `phase_description`) VALUES
(1, 'Analisis Non Fisik', ''),
(2, 'Analisis Fisik (Kunjungan Lapangan I)', ''),
(3, 'Analisis Fisik (Kunjungan Lapangan II)', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `qp_1_3_2`
--

CREATE TABLE IF NOT EXISTS `qp_1_3_2` (
`qp_id` int(11) NOT NULL,
  `qp_name` text NOT NULL,
  `qp_type` int(11) NOT NULL,
  `data_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `qp_1_3_2`
--

INSERT INTO `qp_1_3_2` (`qp_id`, `qp_name`, `qp_type`, `data_id`) VALUES
(1, 'Tahun', 0, 0),
(2, 'Omzet Perusahaan (Rp. Netto)', 1, 0),
(3, 'Tahun', 0, 5),
(4, 'Omzet Perusahaan (Rp. Netto)', 1, 5),
(5, 'Tahun', 0, 6),
(6, 'Omzet Perusahaan (Rp. Netto)', 1, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `qp_1_3_3`
--

CREATE TABLE IF NOT EXISTS `qp_1_3_3` (
`qp_id` int(11) NOT NULL,
  `qp_name` varchar(200) NOT NULL,
  `qp_type` int(11) NOT NULL,
  `data_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `qp_1_3_3`
--

INSERT INTO `qp_1_3_3` (`qp_id`, `qp_name`, `qp_type`, `data_id`) VALUES
(1, 'Tahun', 0, 0),
(2, 'Asset Tetap Perusahaan (Rp)', 1, 0),
(5, 'Asset Tidak Tetap Perusahaan (Rp)', 1, 0),
(6, 'Tahun', 0, 5),
(7, 'Asset Tetap Perusahaan (Rp)', 1, 5),
(8, 'Asset Tidak Tetap Perusahaan (Rp)', 1, 5),
(9, 'Tahun', 0, 6),
(10, 'Asset Tetap Perusahaan (Rp)', 1, 6),
(11, 'Asset Tidak Tetap Perusahaan (Rp)', 1, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `qp_2_1_1`
--

CREATE TABLE IF NOT EXISTS `qp_2_1_1` (
`qp_id` int(11) NOT NULL,
  `qp_name` text NOT NULL,
  `data_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `qp_2_1_1`
--

INSERT INTO `qp_2_1_1` (`qp_id`, `qp_name`, `data_id`) VALUES
(1, 'Kemitraan dengan UMKM', 0),
(2, 'Kegiatan Pendidikan (sesuai dgn kompetensi perusahaan).', 0),
(3, 'Kegiatan bantuan sosial', 0),
(4, 'Kegiatan Penghijauan Lingkungan', 0),
(5, 'Kemitraan dengan UMKM', 5),
(6, 'Kegiatan Pendidikan (sesuai dgn kompetensi perusahaan).', 5),
(7, 'Kegiatan bantuan sosial', 5),
(8, 'Kegiatan Penghijauan Lingkungan', 5),
(9, 'Kemitraan dengan UMKM', 6),
(10, 'Kegiatan Pendidikan (sesuai dgn kompetensi perusahaan).', 6),
(11, 'Kegiatan bantuan sosial', 6),
(12, 'Kegiatan Penghijauan Lingkungan', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `qp_3_1_1`
--

CREATE TABLE IF NOT EXISTS `qp_3_1_1` (
`qp_id` int(11) NOT NULL,
  `qp_name` text NOT NULL,
  `data_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `qp_3_1_1`
--

INSERT INTO `qp_3_1_1` (`qp_id`, `qp_name`, `data_id`) VALUES
(1, 'Program Pengelolaan Lingkungan Hidup', 0),
(2, 'Program Pengelolaan Lingkungan Hidup', 5),
(3, 'Program Pengelolaan Lingkungan Hidup', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `questions1`
--

CREATE TABLE IF NOT EXISTS `questions1` (
`q1_id` int(11) NOT NULL,
  `q1_name` text NOT NULL,
  `q1_get_child` int(11) NOT NULL,
  `data_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `questions1`
--

INSERT INTO `questions1` (`q1_id`, `q1_name`, `q1_get_child`, `data_id`) VALUES
(1, 'Nama Kabupaten / Kota', 0, 0),
(2, 'Luas wilayah', 0, 0),
(3, 'Jumlah penduduk', 0, 0),
(4, 'Alamat website', 1, 0),
(5, 'PDRB perkapita', 1, 0),
(12, 'Nama Kabupaten / Kota', 0, 4),
(13, 'Luas wilayah', 0, 4),
(14, 'Jumlah penduduk', 0, 4),
(15, 'Alamat website', 1, 4),
(16, 'PDRB perkapita', 1, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `questions1_details`
--

CREATE TABLE IF NOT EXISTS `questions1_details` (
`q1d_id` int(11) NOT NULL,
  `q1_id` int(11) NOT NULL,
  `q1d_name` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `questions1_details`
--

INSERT INTO `questions1_details` (`q1d_id`, `q1_id`, `q1d_name`) VALUES
(1, 4, 'Pemerintah Kabupaten/ Kota'),
(3, 4, 'Instansi Penanaman Modal'),
(4, 4, 'Instansi PTSP'),
(5, 5, 'Tahun 2013'),
(6, 5, 'Tahun 2014 (SM I & SM II)'),
(13, 15, 'Pemerintah Kabupaten/ Kota'),
(14, 15, 'Instansi Penanaman Modal'),
(15, 15, 'Instansi PTSP'),
(16, 16, 'Tahun 2013'),
(17, 16, 'Tahun 2014 (SM I & SM II)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `questions2`
--

CREATE TABLE IF NOT EXISTS `questions2` (
`q2_id` int(11) NOT NULL,
  `q2_type` int(11) NOT NULL,
  `q2_number` varchar(10) NOT NULL,
  `q2_name` text NOT NULL,
  `q2_sub_cat_id` int(11) NOT NULL,
  `q2_weight` int(11) NOT NULL,
  `q2_description` text NOT NULL,
  `data_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `questions2`
--

INSERT INTO `questions2` (`q2_id`, `q2_type`, `q2_number`, `q2_name`, `q2_sub_cat_id`, `q2_weight`, `q2_description`, `data_id`) VALUES
(4, 0, '', 'Apakah Pemerintah Kabupaten/ Kota mempunyai Dinas/ Badan/ Kantor yang menangani bidang penanaman modal ?', 1, 50, '', 0),
(5, 0, '', 'Apakah lembaga Penanaman Modal & PTSP berada dalam satu gedung?', 1, 20, '', 0),
(6, 0, '', 'Apakah lembaga yang menangani Penanaman Modal & PTSP mempunyai gedung yang representatif ?', 1, 40, '', 0),
(7, 0, '', 'Apakah lembaga yang menangani bidang penanaman modal di Kabupaten/ Kota anda mempunyai struktur organisasi yang mandiri, ramping dan efektif (lean) jelas tupoksinya ?', 2, 0, '', 0),
(8, 0, '', 'Kompetensi Sumber Daya Manusia (SDM) di lembaga yang menangani bidang penanaman modal adalah :', 2, 0, '<b>1. Skala penilaian : </b><br>4 orang / lebih <b>poin 100</b> <br>3 orang <b>poin 75</b> <br>2 orang <b>poin 50</b> <br>1 orang <b>poin 25</b><br><br><b>2. Sertifikat diklat PM dan Ijazah dilampirkan (copy)</b>', 0),
(10, 0, '', 'Apakah Pemerintah Kabupaten/ Kota mempunyai kebijakan yang mendukung iklim penanaman modal?', 3, 0, '', 0),
(11, 1, '', 'Berkaitan dengan alokasi dana APBD, berapakah prosentase dana APBD yang dialokasikan dalam kegiatan Penanaman Modal (PM) di Kabupaten / Kota saudara?', 3, 0, '<b>pertumbuhan</b> : <br>- 1 - 4% nilai 25<br>- 5 - 9% nilai 50<br>- 10 - 14% nilai 75<br>- diatas 14% nilai 100', 0),
(12, 2, '', 'Dalam dua tahun terakhir,sebutkan sasaran,program, kegiatan dan indikator capaian dalam bidang penanaman modal yang dapat direalisasikan?', 3, 0, '- 1 sd 2 program nilai 33<br>- 3 sd 4 program nilai 67<br>- diatas 5 program nilai 100', 0),
(13, 0, '', 'Apakah Kabupaten/ Kota telah menetapkan Standar Pelayanan Minimal (SPM) bidang penanaman modal sebagaimana Perka Kepala BKPM RI Nomor 14 Tahun 2011?', 3, 0, '', 0),
(14, 3, '', 'Apakah ada lembaga/organisasi Pendukung Penanaman Modal di Kabupaten/ Kota anda untuk mendukung kegiatan usaha dan penanaman modal?', 4, 0, 'Ada, semuanya poin 100\r\n<br>\r\nHanya ada 2 lembaga/organisasi poin 67\r\n<br>\r\nHanya ada 1 lembaga/organisasi poin \r\n33\r\n<br>\r\nTidak ada sama sekali poin \r\n5', 0),
(15, 4, '', 'Fasilitas apa sajakah yang disediakan oleh pengelola (Luas Kawasan/ Zona/ Sentra, Unit Pengolahan Limbah, Ruang Terbuka Hijau, Daftar Infrastruktur yang dimiliki)', 4, 0, 'Penilaiannya di ranking oleh <b>Tim Penilai Investment Award</b>', 0),
(16, 5, '', 'Sebutkan terobosan yang telah dilakukan oleh Instansi Penanaman Modal (IPMK)/ Perizinan Terpadu dalam rangka menarik calon investor dalam 2 (dua) tahun terakhir (Tahun 2013 & 2014), harap melampirkan bukti laporan & foto-foto terkait program / seminar / publikasi / cetak dan lain-lainnya ?', 5, 0, '<b>I. Program/ Kegiatan Promosi Penanaman Modal bersama Dinas/ Instansi Lain.</b><br>\r\n  \r\n- Lebih dari 20 kegiatan, terlampir dokumen kegiatan <strong>poin 25<br>\r\n</strong>- Antara 15-20 kegiatan, terlampir dokumen pendukungnya <strong>poin\r\n50</strong><br>\r\n- Antara 10-14 kegiatan, terlampir dokumen kegiatan\r\n<strong>poin 75</strong><br>\r\n- Kurang dari 10 kegiatan, terlampir data pendukungnya, terlampir dokumen kegiatan <strong>poin 100</strong><br><br>\r\n\r\n<strong>\r\nII. Program/ Kegiatan Promosi Penanaman Modal mandiri dilaksanakan Instansi Penanaman Modal Kabupaten/ Kota &amp; PTSP.</strong><br>\r\n- Lebih dari 20 kegiatan, terlampir dokumen kegiatan <strong>poin 100<br>\r\n</strong>- Antara 15-20 kegiatan, terlampir dokumen pendukungnya <strong>poin\r\n75</strong><br>\r\n- Antara 10-14 kegiatan, terlampir dokumen kegiatan <strong>poin 50</strong><br>\r\n- Kurang dari 10 kegiatan, terlampir data pendukungnya, terlampir dokumen kegiatan <strong>poin 25</strong>', 0),
(17, 6, '', 'Sebutkan upaya-upaya promosi yang dilakukan oleh Instansi Penanaman Modal (IPMK)/ Perizinan Terpadu dalam mendukung program peluang investasi dalam bentuk pameran, dengan memberi tanda silang (X) pada pilihan jawaban ada atau tidak di tabel berikut ini:', 5, 0, 'Ada, tingkat internasional, nasional, provinsi dan Kabupaten/ Kota, terlampir dokumen kegiatan\r\n<strong>poin 100</strong>\r\n<br>\r\nAda, tingkat nasional, provinsi dan Kabupaten/ Kota, terlampir dokumen kegiatan<strong> poin 75 </strong><br>\r\nAda, tingkat provinsi dan Kabupaten/ Kota, terlampir dokumen kegiatan <strong>poin\r\n50 </strong><br>\r\nAda, tingkat Kabupaten/ Kota, terlampir dokumen kegiatan<strong> poin 25 </strong><br>\r\nTidak ada sama sekali <strong>poin 5</strong>', 0),
(18, 0, '', 'Berapakah anggaran promosi penanaman modal (anggaran yang hanya dikelola oleh Instansi Penanaman Modal (IPMK)/ Perizinan Terpadu) tahun 2013 & 2014 (SM I & SM II) ? lampirkan buktinya', 5, 0, '', 0),
(19, 7, '', 'Ruang Display/ Pamer Potensi (yang hanya dikelola oleh Instansi Penanaman Modal (IPMK) / Perizinan Terpadu).<br>Sebutkan ketersediaan ruang display/pamer potensi di Kabupaten/ Kota dalam mendukung program penanaman modal dengan memberi tanda silang (X) pada pilihan jawaban dalam tabel berikut ini:', 5, 0, '', 0),
(20, 8, '', 'Mengadakan Business Gathering/ Business Friendly.<br> Sebutkan kegiatan bussiness gathering atau bussiness friendly dalam 2 tahun terakhir di Kabupaten/ Kota dalam mendukung program penanaman modal dengan memberi tanda silang (X) pada pilihan jawaban dalam tabel berikut ini:', 5, 0, 'Ada dan sering, lebih dari 5 kali dan terlampir dokumen pendukungnya\r\n<strong>poin 100</strong>\r\n<br>\r\nKadang-kadang, kurang dari 5 kali dan terlampir dokumen pendukungnya\r\n<strong>poin 55</strong>\r\n<br>\r\nTidak ada\r\n<strong>poin 5</strong>', 0),
(21, 0, '', 'Apakah Instansi Penanaman Modal (IPMK)/ Perizinan Terpadu telah melakukan sosialisasi kesempatan berusaha yang dilakukan kepada para pelaku usaha/investor selama 2 Tahun (2013 & 2014)?', 5, 0, '', 0),
(22, 9, '', 'Sebutkan sarana-sarana promosi yang digunakan oleh Pemerintah Kabupaten/ Kota dalam mendukung program investasi dengan memberi tanda silang (X) pada pilihan jawaban pada tabel berikut ini:', 6, 0, '', 0),
(23, 0, '', 'Apakah Pemerintah Kabupaten/ Kota mempunyai program unggulan promosi penanaman modal dalam mendukung iklim usaha ?', 7, 0, '', 0),
(24, 0, '', 'Apakah Pemerintah Kabupaten/ Kota sudah melimpahkan wewenang terkait dengan pelayanan perizinan penanaman modal?', 8, 0, '', 0),
(25, 0, '', 'Dari Pelimpahan kewenangan tersebut diatas ada berapa sektor yang sudah dilimpahkan', 8, 0, '', 0),
(26, 0, '', 'Pelimpahan wewenang yang telah diterima oleh SKPD yang menangani perizinan penanaman modal, ada berapa jenis izin/non izin yang dikelola', 8, 0, '', 0),
(27, 0, '', 'Dalam perka BKPM nomor 5 tahun 2013 yang telah diubah dengan perka BKPM nomor 12 tahun 2013, tentang pedoman dan tatacara perizinan dan nonperizinan penanaman modal, ada pembatasan minimal investasi sebesar lima ratus juta rupiah yang dapat dimasukkan ke prgram SPIPISE, apakah Saudara sudah memproses Izin Prinsip (IP)/Izin Usaha (IU) dan berapa banyak dalam dua tahun terakhir?', 8, 0, '', 0),
(28, 10, '', 'Apakah lembaga penanaman modal di Kabupaten/ Kota Saudara telah melaksanakan Pelayanan Pra Perizinan ?', 9, 0, '', 0),
(29, 0, '', 'Apakah lembaga pelayanan perizinan sudah mempunyai Standard Pelayanan (SP) dan Standard Operating Procedure (SOP) dalam pelayanan perizinan penanaman modal?', 10, 0, '', 0),
(30, 0, '', 'Apakah lembaga pelayanan perizinan penanaman modal telah melaksanakan pelayanan perizinan dengan menggunakan aplikasi SPIPISE?', 10, 0, '', 0),
(31, 0, '', 'Apakah lembaga pelayanan perizinan penanaman modal dalam melakukan pelayanan sudah mengukur Indeks Kepuasan Masyarakat (IKM)?', 10, 0, '', 0),
(32, 0, '', 'Apakah lembaga pelayanan perizinan penanaman modal sudah memiliki media yang menampung keluhan/pengaduan/kritik/masukan dari masyarakat?', 10, 0, '', 0),
(33, 0, '', 'Apakah ada insentif terhadap perizinan penanaman modal?', 10, 0, '', 0),
(34, 0, '', 'Apakah Pemerintah Kabupaten/ Kota mempunyai program unggulan pelayanan perizinan penanaman modal dalam mendukung iklim penanaman modal?', 12, 0, '', 0),
(35, 11, '', 'Apakah Kabupaten/ Kota melakukan monitoring pasca perizinan?', 13, 0, '', 0),
(36, 0, '', 'Apakah Pemerintah Kabupaten/ Kota telah menyusun buku kajian investasi daerah dalam tahun anggaran 2013 ?', 14, 0, '', 0),
(37, 0, '', 'Apakah Pemerintah Kabupaten/ Kota telah melakukan kerjasama dengan Pemerintah daerah lain dibidang penanaman modal ?', 14, 0, '', 0),
(38, 0, '', 'Apakah Pemerintah Kabupaten/ Kota telah menyusun peta potensi investasi untuk menarik minat investor?', 14, 0, '', 0),
(39, 0, '', 'Apakah Pemerintah Kabupaten/ Kota telah memfasilitasi pengusaha besar untuk melakukan kemitraan dengan pengusaha kecil?', 14, 0, '', 0),
(40, 0, '', 'Berapakah pertumbuhan rata-rata realisasi investasi Kabupaten / Kota dari Tahun 2013 sampai dengan Tahun 2014?', 15, 0, '', 0),
(41, 12, '', 'Sebutkan target dan realisasi nilai investasi yang akan diperoleh Pemerintah Kabupaten/ Kota Tahun 2013 - 2014.dengan mengisi tabel berikut:', 16, 0, 'Rasio perbandingan antara target dan realisasi investasi <br>Lebih dari 70%  <b>poin100</b><br>Antara 35%-70% <b>poin 55</b><br>Kurang dari 35% <b>poin 5</b>', 0),
(42, 0, '', 'Apakah ketersediaan tenaga kerja di Kabupaten/ Kota sebagai penunjang usaha memadai?', 17, 0, '', 0),
(43, 0, '', 'Apakah kualitas tenaga kerja yang tersedia, sebagai penunjang kegiatan usaha memadai?', 17, 0, '', 0),
(44, 0, '', 'Apakah Pemerintah Kabupaten/ Kota mempunyai program unggulan kinerja Penanaman Modal ?', 18, 0, '', 0),
(45, 0, '', 'Dukungan apakah yang diberikan Pemerintah Daerah agar keamanan berinvestasi terwujud?', 19, 0, '', 0),
(46, 0, '', 'Apakah ketersediaaan dan kualitas sambungan listrik sebagai penunjang kegiatan usaha memadai?', 20, 0, '', 0),
(47, 13, '', 'Berapakah kapasitas terpasang Instalansi Pengolahan Air Bersih (IPAB) yang mendukung penanaman modal ?', 20, 0, '', 0),
(48, 0, '', 'Apakah ketersediaan dan kualitas akses terhadap jalan darat sebagai penunjang kegiatan usaha antar wilayah memadai?', 20, 0, '', 0),
(49, 0, '', 'Apakah ketersediaan dan kualitas sambungan telepon sebagai penunjang kegiatan usaha memadai?', 20, 0, '', 0),
(50, 0, '', 'Apakah ketersediaan transportasi umum sebagai penunjang kegiatan penanaman modal di sekitar wilayah usaha memadai?', 20, 0, '', 0),
(51, 0, '', 'Apakah kemudahan memperoleh lahan usaha sebagai penunjang kegiatan usaha dan penanaman modal sangat memadai ?', 20, 0, '', 0),
(53, 0, '', 'Apakah Pemerintah Kabupaten/ Kota mempunyai Dinas/ Badan/ Kantor yang menangani bidang penanaman modal ?', 1, 50, '', 4),
(54, 0, '', 'Apakah lembaga Penanaman Modal & PTSP berada dalam satu gedung?', 1, 20, '', 4),
(55, 0, '', 'Apakah lembaga yang menangani Penanaman Modal & PTSP mempunyai gedung yang representatif ?', 1, 40, '', 4),
(56, 0, '', 'Apakah lembaga yang menangani bidang penanaman modal di Kabupaten/ Kota anda mempunyai struktur organisasi yang mandiri, ramping dan efektif (lean) jelas tupoksinya ?', 2, 0, '', 4),
(57, 0, '', 'Kompetensi Sumber Daya Manusia (SDM) di lembaga yang menangani bidang penanaman modal adalah :', 2, 0, '<b>1. Skala penilaian : </b><br>4 orang / lebih <b>poin 100</b> <br>3 orang <b>poin 75</b> <br>2 orang <b>poin 50</b> <br>1 orang <b>poin 25</b><br><br><b>2. Sertifikat diklat PM dan Ijazah dilampirkan (copy)</b>', 4),
(58, 0, '', 'Apakah Pemerintah Kabupaten/ Kota mempunyai kebijakan yang mendukung iklim penanaman modal?', 3, 0, '', 4),
(59, 1, '', 'Berkaitan dengan alokasi dana APBD, berapakah prosentase dana APBD yang dialokasikan dalam kegiatan Penanaman Modal (PM) di Kabupaten / Kota saudara?', 3, 0, '<b>pertumbuhan</b> : <br>- 1 - 4% nilai 25<br>- 5 - 9% nilai 50<br>- 10 - 14% nilai 75<br>- diatas 14% nilai 100', 4),
(60, 2, '', 'Dalam dua tahun terakhir,sebutkan sasaran,program, kegiatan dan indikator capaian dalam bidang penanaman modal yang dapat direalisasikan?', 3, 0, '- 1 sd 2 program nilai 33<br>- 3 sd 4 program nilai 67<br>- diatas 5 program nilai 100', 4),
(61, 0, '', 'Apakah Kabupaten/ Kota telah menetapkan Standar Pelayanan Minimal (SPM) bidang penanaman modal sebagaimana Perka Kepala BKPM RI Nomor 14 Tahun 2011?', 3, 0, '', 4),
(62, 3, '', 'Apakah ada lembaga/organisasi Pendukung Penanaman Modal di Kabupaten/ Kota anda untuk mendukung kegiatan usaha dan penanaman modal?', 4, 0, 'Ada, semuanya poin 100\r\n<br>\r\nHanya ada 2 lembaga/organisasi poin 67\r\n<br>\r\nHanya ada 1 lembaga/organisasi poin \r\n33\r\n<br>\r\nTidak ada sama sekali poin \r\n5', 4),
(63, 4, '', 'Fasilitas apa sajakah yang disediakan oleh pengelola (Luas Kawasan/ Zona/ Sentra, Unit Pengolahan Limbah, Ruang Terbuka Hijau, Daftar Infrastruktur yang dimiliki)', 4, 0, 'Penilaiannya di ranking oleh <b>Tim Penilai Investment Award</b>', 4),
(64, 5, '', 'Sebutkan terobosan yang telah dilakukan oleh Instansi Penanaman Modal (IPMK)/ Perizinan Terpadu dalam rangka menarik calon investor dalam 2 (dua) tahun terakhir (Tahun 2013 & 2014), harap melampirkan bukti laporan & foto-foto terkait program / seminar / publikasi / cetak dan lain-lainnya ?', 5, 0, '<b>I. Program/ Kegiatan Promosi Penanaman Modal bersama Dinas/ Instansi Lain.</b><br>\r\n  \r\n- Lebih dari 20 kegiatan, terlampir dokumen kegiatan <strong>poin 25<br>\r\n</strong>- Antara 15-20 kegiatan, terlampir dokumen pendukungnya <strong>poin\r\n50</strong><br>\r\n- Antara 10-14 kegiatan, terlampir dokumen kegiatan\r\n<strong>poin 75</strong><br>\r\n- Kurang dari 10 kegiatan, terlampir data pendukungnya, terlampir dokumen kegiatan <strong>poin 100</strong><br><br>\r\n\r\n<strong>\r\nII. Program/ Kegiatan Promosi Penanaman Modal mandiri dilaksanakan Instansi Penanaman Modal Kabupaten/ Kota &amp; PTSP.</strong><br>\r\n- Lebih dari 20 kegiatan, terlampir dokumen kegiatan <strong>poin 100<br>\r\n</strong>- Antara 15-20 kegiatan, terlampir dokumen pendukungnya <strong>poin\r\n75</strong><br>\r\n- Antara 10-14 kegiatan, terlampir dokumen kegiatan <strong>poin 50</strong><br>\r\n- Kurang dari 10 kegiatan, terlampir data pendukungnya, terlampir dokumen kegiatan <strong>poin 25</strong>', 4),
(65, 6, '', 'Sebutkan upaya-upaya promosi yang dilakukan oleh Instansi Penanaman Modal (IPMK)/ Perizinan Terpadu dalam mendukung program peluang investasi dalam bentuk pameran, dengan memberi tanda silang (X) pada pilihan jawaban ada atau tidak di tabel berikut ini:', 5, 0, 'Ada, tingkat internasional, nasional, provinsi dan Kabupaten/ Kota, terlampir dokumen kegiatan\r\n<strong>poin 100</strong>\r\n<br>\r\nAda, tingkat nasional, provinsi dan Kabupaten/ Kota, terlampir dokumen kegiatan<strong> poin 75 </strong><br>\r\nAda, tingkat provinsi dan Kabupaten/ Kota, terlampir dokumen kegiatan <strong>poin\r\n50 </strong><br>\r\nAda, tingkat Kabupaten/ Kota, terlampir dokumen kegiatan<strong> poin 25 </strong><br>\r\nTidak ada sama sekali <strong>poin 5</strong>', 4),
(66, 0, '', 'Berapakah anggaran promosi penanaman modal (anggaran yang hanya dikelola oleh Instansi Penanaman Modal (IPMK)/ Perizinan Terpadu) tahun 2013 & 2014 (SM I & SM II) ? lampirkan buktinya', 5, 0, '', 4),
(67, 7, '', 'Ruang Display/ Pamer Potensi (yang hanya dikelola oleh Instansi Penanaman Modal (IPMK) / Perizinan Terpadu).<br>Sebutkan ketersediaan ruang display/pamer potensi di Kabupaten/ Kota dalam mendukung program penanaman modal dengan memberi tanda silang (X) pada pilihan jawaban dalam tabel berikut ini:', 5, 0, '', 4),
(68, 8, '', 'Mengadakan Business Gathering/ Business Friendly.<br> Sebutkan kegiatan bussiness gathering atau bussiness friendly dalam 2 tahun terakhir di Kabupaten/ Kota dalam mendukung program penanaman modal dengan memberi tanda silang (X) pada pilihan jawaban dalam tabel berikut ini:', 5, 0, 'Ada dan sering, lebih dari 5 kali dan terlampir dokumen pendukungnya\r\n<strong>poin 100</strong>\r\n<br>\r\nKadang-kadang, kurang dari 5 kali dan terlampir dokumen pendukungnya\r\n<strong>poin 55</strong>\r\n<br>\r\nTidak ada\r\n<strong>poin 5</strong>', 4),
(69, 0, '', 'Apakah Instansi Penanaman Modal (IPMK)/ Perizinan Terpadu telah melakukan sosialisasi kesempatan berusaha yang dilakukan kepada para pelaku usaha/investor selama 2 Tahun (2013 & 2014)?', 5, 0, '', 4),
(70, 9, '', 'Sebutkan sarana-sarana promosi yang digunakan oleh Pemerintah Kabupaten/ Kota dalam mendukung program investasi dengan memberi tanda silang (X) pada pilihan jawaban pada tabel berikut ini:', 6, 0, '', 4),
(71, 0, '', 'Apakah Pemerintah Kabupaten/ Kota mempunyai program unggulan promosi penanaman modal dalam mendukung iklim usaha ?', 7, 0, '', 4),
(72, 0, '', 'Apakah Pemerintah Kabupaten/ Kota sudah melimpahkan wewenang terkait dengan pelayanan perizinan penanaman modal?', 8, 0, '', 4),
(73, 0, '', 'Dari Pelimpahan kewenangan tersebut diatas ada berapa sektor yang sudah dilimpahkan', 8, 0, '', 4),
(74, 0, '', 'Pelimpahan wewenang yang telah diterima oleh SKPD yang menangani perizinan penanaman modal, ada berapa jenis izin/non izin yang dikelola', 8, 0, '', 4),
(75, 0, '', 'Dalam perka BKPM nomor 5 tahun 2013 yang telah diubah dengan perka BKPM nomor 12 tahun 2013, tentang pedoman dan tatacara perizinan dan nonperizinan penanaman modal, ada pembatasan minimal investasi sebesar lima ratus juta rupiah yang dapat dimasukkan ke prgram SPIPISE, apakah Saudara sudah memproses Izin Prinsip (IP)/Izin Usaha (IU) dan berapa banyak dalam dua tahun terakhir?', 8, 0, '', 4),
(76, 10, '', 'Apakah lembaga penanaman modal di Kabupaten/ Kota Saudara telah melaksanakan Pelayanan Pra Perizinan ?', 9, 0, '', 4),
(77, 0, '', 'Apakah lembaga pelayanan perizinan sudah mempunyai Standard Pelayanan (SP) dan Standard Operating Procedure (SOP) dalam pelayanan perizinan penanaman modal?', 10, 0, '', 4),
(78, 0, '', 'Apakah lembaga pelayanan perizinan penanaman modal telah melaksanakan pelayanan perizinan dengan menggunakan aplikasi SPIPISE?', 10, 0, '', 4),
(79, 0, '', 'Apakah lembaga pelayanan perizinan penanaman modal dalam melakukan pelayanan sudah mengukur Indeks Kepuasan Masyarakat (IKM)?', 10, 0, '', 4),
(80, 0, '', 'Apakah lembaga pelayanan perizinan penanaman modal sudah memiliki media yang menampung keluhan/pengaduan/kritik/masukan dari masyarakat?', 10, 0, '', 4),
(81, 0, '', 'Apakah ada insentif terhadap perizinan penanaman modal?', 10, 0, '', 4),
(82, 0, '', 'Apakah Pemerintah Kabupaten/ Kota mempunyai program unggulan pelayanan perizinan penanaman modal dalam mendukung iklim penanaman modal?', 12, 0, '', 4),
(83, 11, '', 'Apakah Kabupaten/ Kota melakukan monitoring pasca perizinan?', 13, 0, '', 4),
(84, 0, '', 'Apakah Pemerintah Kabupaten/ Kota telah menyusun buku kajian investasi daerah dalam tahun anggaran 2013 ?', 14, 0, '', 4),
(85, 0, '', 'Apakah Pemerintah Kabupaten/ Kota telah melakukan kerjasama dengan Pemerintah daerah lain dibidang penanaman modal ?', 14, 0, '', 4),
(86, 0, '', 'Apakah Pemerintah Kabupaten/ Kota telah menyusun peta potensi investasi untuk menarik minat investor?', 14, 0, '', 4),
(87, 0, '', 'Apakah Pemerintah Kabupaten/ Kota telah memfasilitasi pengusaha besar untuk melakukan kemitraan dengan pengusaha kecil?', 14, 0, '', 4),
(88, 0, '', 'Berapakah pertumbuhan rata-rata realisasi investasi Kabupaten / Kota dari Tahun 2013 sampai dengan Tahun 2014?', 15, 0, '', 4),
(89, 12, '', 'Sebutkan target dan realisasi nilai investasi yang akan diperoleh Pemerintah Kabupaten/ Kota Tahun 2013 - 2014.dengan mengisi tabel berikut:', 16, 0, 'Rasio perbandingan antara target dan realisasi investasi <br>Lebih dari 70%  <b>poin100</b><br>Antara 35%-70% <b>poin 55</b><br>Kurang dari 35% <b>poin 5</b>', 4),
(90, 0, '', 'Apakah ketersediaan tenaga kerja di Kabupaten/ Kota sebagai penunjang usaha memadai?', 17, 0, '', 4),
(91, 0, '', 'Apakah kualitas tenaga kerja yang tersedia, sebagai penunjang kegiatan usaha memadai?', 17, 0, '', 4),
(92, 0, '', 'Apakah Pemerintah Kabupaten/ Kota mempunyai program unggulan kinerja Penanaman Modal ?', 18, 0, '', 4),
(93, 0, '', 'Dukungan apakah yang diberikan Pemerintah Daerah agar keamanan berinvestasi terwujud?', 19, 0, '', 4),
(94, 0, '', 'Apakah ketersediaaan dan kualitas sambungan listrik sebagai penunjang kegiatan usaha memadai?', 20, 0, '', 4),
(95, 13, '', 'Berapakah kapasitas terpasang Instalansi Pengolahan Air Bersih (IPAB) yang mendukung penanaman modal ?', 20, 0, '', 4),
(96, 0, '', 'Apakah ketersediaan dan kualitas akses terhadap jalan darat sebagai penunjang kegiatan usaha antar wilayah memadai?', 20, 0, '', 4),
(97, 0, '', 'Apakah ketersediaan dan kualitas sambungan telepon sebagai penunjang kegiatan usaha memadai?', 20, 0, '', 4),
(98, 0, '', 'Apakah ketersediaan transportasi umum sebagai penunjang kegiatan penanaman modal di sekitar wilayah usaha memadai?', 20, 0, '', 4),
(99, 0, '', 'Apakah kemudahan memperoleh lahan usaha sebagai penunjang kegiatan usaha dan penanaman modal sangat memadai ?', 20, 0, '', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `questions2_details`
--

CREATE TABLE IF NOT EXISTS `questions2_details` (
`q2d_id` int(11) NOT NULL,
  `q2d_type` int(11) NOT NULL,
  `q2_id` int(11) NOT NULL,
  `q2d_number` varchar(10) NOT NULL,
  `q2d_name` text NOT NULL,
  `q2d_point` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=209 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `questions2_details`
--

INSERT INTO `questions2_details` (`q2d_id`, `q2d_type`, `q2_id`, `q2d_number`, `q2d_name`, `q2d_point`) VALUES
(1, 0, 4, 'a', 'Ya, ada dinas/ badan yang menangani penanaman modal sebagaimana Perda/ Perbup/ Perwali terlampir.', 100),
(4, 0, 4, 'b', 'Ya, ada dalam bentuk kantor yang menangani penanaman modal sebagaimana Perda/ Perbup/ Perwali terlampir.', 67),
(5, 0, 4, 'c', 'Ya, ada dalam bentuk sub bagian yang menangani penanaman modal sebagaimana Perda/ Perbup/ Perwali terlampir.', 33),
(6, 0, 4, 'd', 'Tidak punya badan/ dinas/ kantor sama sekali.', 0),
(7, 0, 5, 'a', 'Ya, dalam satu gedung.', 100),
(8, 0, 5, 'b', 'Tidak berada dalam satu gedung.', 5),
(9, 1, 6, 'a', 'Memiliki gedung tersendiri dengan fasilitas yang memadai yaitu:', 0),
(10, 0, 6, 'b', 'Belum memiliki gedung tersendiri.', 5),
(11, 0, 7, 'a', 'Ya, bidang penanaman modal mempunyai struktur organisasi yang mandiri, ramping dan efektif (lean) jelas tupoksinya dan lampirkan struktur organisasinya', 100),
(12, 0, 7, 'b', 'Ya, bidang penanaman modal tidak mempunyai struktur organisasi yang mandiri, ramping dan efektif (lean) jelas tupoksinya karena menyatu dengan lembaga lain.', 55),
(13, 0, 7, 'c', 'Tidak mempunyai struktur organisasi sama sekali', 5),
(14, 2, 8, 'I', 'Pengetahuan PTSP Di Bidang Penanaman Modal Tingkat Pertama', 0),
(15, 2, 8, 'II', 'Pengetahuan PTSP Di Bidang Penanaman Modal Tingkat Lanjutan', 0),
(16, 2, 8, 'III', 'Pengetahuan PTSP Di Bidang Penanaman Modal Sektoral', 0),
(17, 2, 8, 'IV', 'Kompetensi PTSP Di Bidang Penanaman Modal', 0),
(18, 0, 10, 'a', 'Ya, mempunyai kebijakan yang mendukung iklim penanaman modal dalam bentuk Perda/ Perbup/ Perwali Penanaman Modal/RUPM dan sudah dilaksanakan, terlampir.', 100),
(19, 0, 10, 'b', 'Ya, mempunyai draft kebijakan yang mendukung iklim penanaman modal dalam bentuk Perda/ Perbup/ Perwali Penanaman Modal/ RUPM terlampir.', 55),
(20, 0, 10, 'c', 'Belum mempunyai kebijakan dalam bentuk Perda/ Perbup/ Perwali Penanaman Modal/ RUPM.', 5),
(21, 0, 13, 'a', 'Ya, telah ditetapkan SPM bidang penanaman modal sebagaimana terlampir.', 100),
(22, 0, 13, 'b', 'Ya, masih dalam bentuk rancangan/draf sebagaimana terlampir.', 55),
(23, 0, 13, 'c', 'Belum membuat SPM.', 5),
(24, 0, 18, '', 'Diatas 20% dari anggaran penanaman modal', 100),
(25, 0, 18, '', '10% - 20% dari anggaran penanaman modal', 55),
(26, 0, 18, '', 'Kurang dari 10% dari anggaran penanaman modal', 5),
(27, 0, 21, '', 'Ya, Pemerintah Kabupaten/ Kota sering melakukan sosialisasi kesempatan berusaha yang dilakukan kepada para pelaku usaha/investor >5 kali dan terlampir dokumen pendukungnya', 100),
(28, 0, 21, '', 'Ya, Pemerintah Kabupaten/ Kota sering melakukan sosialisasi kesempatan berusaha yang dilakukan kepada para pelaku usaha/investor 1-5 kali, dan terlampir dokumen pendukungnya', 67),
(29, 0, 21, '', 'Tidak sama sekali.', 33),
(30, 0, 23, '', 'Ya, Pemerintah Kabupaten/ Kota mempunyai program unggulan promosi investasi, dan ada Perda/Perbup/ Perwali menaunginya serta program tersebut dilaksanakan, terlampir dokumen pendukungnya.', 100),
(31, 0, 23, '', 'Ya, Pemerintah Kabupaten/ Kota mempunyai program unggulan promosi investasi, dan ada Perda/ Perbup/ Perwali menaunginya, tetapi program tersebut belum dilaksanakan, terlampir dokumen pendukungnya.', 55),
(32, 0, 23, '', 'Tidak mempunyai program unggulan maupun Perda/ Perbup/ Perwali.', 5),
(33, 0, 24, '', 'Ya, Pemerintah Kabupaten/ Kota sudah melimpahkan wewenang perizinan penanaman modal (terlampir dokumen pendukungnya berupa perbup/ perwali)', 100),
(34, 0, 24, '', 'Ya, Pemerintah Kabupaten/ Kota belum melimpahkan wewenang perizinan penanaman modal (terlampir dokumen pendukungnya berupa draf perbup/ perwali)', 55),
(35, 0, 24, '', 'Ya, Pemerintah Kabupaten/ Kota belum melimpahkan wewenang perizinan.', 5),
(36, 0, 25, '', '1 sd. 5 sektor (sebutkan dan lampirkan)', 5),
(37, 0, 25, '', '6 sd 10 sektor (sebutkan dan lampirkan)', 55),
(38, 0, 25, '', 'Lebih dari 10 sektor (sebutkan dan lampirkan)', 100),
(39, 0, 26, '', '1 sd. 25 izin/ non izin sebagaimana terlampir', 5),
(40, 0, 26, '', '26 sd. 50 izn/ non izin sebagaimana terlampir', 55),
(41, 0, 26, '', 'lebih dari 50 izin/ non izin sebagaimana terlampir', 100),
(42, 0, 27, '', 'sudah, diatas 6 IP/ IU, bukti terlampir', 100),
(43, 0, 27, '', 'sudah, 1-5 IP/ IU, bukti terlampir', 55),
(44, 0, 27, '', 'belum pernah memproses IP/ IU.', 5),
(45, 0, 29, '', 'Ya, lembaga pelayanan perizinan mempunyai SP dan SOP yang sudah disosialisasikan sebagaimana terlampir.', 100),
(46, 0, 29, '', 'Ya, lembaga pelayanan perizinan mempunyai SP dan SOP tetapi belum disosialisasikan.', 55),
(47, 0, 29, '', 'Belum memiliki SP dan SOP.', 5),
(48, 0, 30, '', 'Ya, aplikasi SPIPISE telah dimiliki beserta Hak Akses dan telah dioperasionalkan, dokumen terlampir.', 100),
(49, 0, 30, '', 'Ya, SPIPISE telah dimiliki beserta hak aksesnya tetapi belum dioperasionalkan.', 55),
(50, 0, 30, '', 'Belum melaksanakan SPIPISE dan belum memiliki hak akses.', 5),
(51, 0, 31, '', 'Ya, hasil IKM meningkat setiap tahun, dokumen terlampir', 100),
(52, 0, 31, '', 'Ya, hasil IKM mengalami penurunan, dokumen terlampir.', 55),
(53, 0, 31, '', 'Belum dilakukan pengukuran IKM.', 5),
(54, 0, 32, '', 'Ya, pengaduan itu terdokumentasikan dan telah diselesaikan, dokumen terlampir', 100),
(55, 0, 32, '', 'Ya, pengaduan itu terdokumentasikan tetapi belum terselesaikan.', 55),
(56, 0, 32, '', 'Belum terdokumentasikan.', 5),
(57, 0, 33, '', 'Ya, ada insentif terhadap perizinan penanaman modal dan terlampir dokumen pendukungnya.', 100),
(58, 0, 33, '', 'Ya, ada insentif terhadap perizinan penanaman modal tapi belum dilaksanakan.', 55),
(59, 0, 33, '', 'Tidak ada insentif', 5),
(60, 0, 34, '', 'Ya, Pemerintah Kabupaten/ Kota mempunyai program unggulan pelayanan perizinan penanaman modal, dan ada Perda/ Perbup/ Perwali menaunginya, program tersebut dilaksanakan, ada hasilnya dan dokumen terlampir', 100),
(61, 0, 34, '', 'Ya, Pemerintah Kabupaten/ Kota mempunyai program unggulan pelayanan perizinan penanaman modal, dan ada Perda/ Perbup/ Perwali menaunginya, tetapi program tersebut belum dilaksanakan, dokumen terlampir', 55),
(62, 0, 34, '', 'Belum mempunyai program unggulan maupun Perda/ Perbup/ Perwali.', 5),
(63, 0, 36, '', 'Ya, telah menyusun buku kajian penanaman modal sekali dalam satu tahun,dokumen terlampir', 100),
(64, 0, 36, '', 'Sedang dalam proses penyusunan, dokumen terlampir', 55),
(65, 0, 36, '', 'Belum melakukan sama sekali', 5),
(66, 0, 37, '', 'Ya, ada kerjasama,sebagaimana dokumen terlampir (MOU, Perjanjian Kerjasama dll).', 100),
(67, 0, 37, '', 'Sedang dalam proses penjajagan kerjasama, sebagaimana dokumen terlampir', 55),
(68, 0, 37, '', 'Belum ada kerjasama.', 5),
(69, 0, 38, '', 'Ya, telah menyusun peta potensi investasi,sebagaimana dokumen terlampir', 100),
(70, 0, 38, '', 'Sedang dalam proses penyusunan, sebagaimana dokumen terlampir', 55),
(71, 0, 38, '', 'Belum menyusun sama sekali', 5),
(72, 0, 39, '', 'Ya, telah memfasilitasi kemitraan,sebagaimana dokumen terlampir', 100),
(73, 0, 39, '', 'Sedang dalam proses negosiasi, dokumen terlampir', 55),
(74, 0, 39, '', 'Belum melakukan sama sekali.', 5),
(75, 0, 40, '', 'Diatas 100%', 100),
(76, 0, 40, '', 'Antara 50% - 100%', 55),
(77, 0, 40, '', 'Dibawah 50%', 5),
(78, 0, 42, '', 'Ya, ketersediaan tenaga kerja sebagai penunjang usaha di kota/ kabupaten sesuai bidang usaha dominan tersedia/memadai, dokumen terlampir', 100),
(79, 0, 42, '', 'Ya, ketersediaan tenaga kerjasebagai penunjang usaha di kota/ kabupaten sesuai bidang usaha dominan tersedia/memadai namun jumlahnya terbatas, dokumen terlampir', 55),
(80, 0, 42, '', 'Belum tersedia tenaga kerjasebagai penunjang usaha di kota/kabupaten sesuai bidang usaha dominan tersedia/memadai, dokumen terlampir.', 5),
(81, 0, 43, '', 'Ya, kualitas tenaga kerja sangat memadai, dokumen terlampir', 100),
(82, 0, 43, '', 'Ya, namun terbatas kualitasnya, dokumen terlampir', 55),
(83, 0, 43, '', 'Tidak berkualitas.', 5),
(85, 0, 44, '', 'Ya, Pemerintah mempunyai program unggulan kinerja investasi, dan ada Perda/ Perbup/ Perwali menaunginya, dilaksanakandan terlihat hasilnya, dokumen terlampir', 100),
(86, 0, 44, '', 'Ya, Pemerintah mempunyai program unggulan kinerja investasi, dan ada Perda/ Perbup/ Perwali menaunginya, tetapi belum dilaksanakandan dokumen terlampir', 55),
(87, 0, 44, '', 'Belum mempunyai program unggulan maupun Perda/ Perbup/Perwali.', 5),
(88, 0, 45, '', 'Ya, ada dukungan, bukti terlampir.', 100),
(89, 0, 45, '', 'Ya, ada dukungan, bukti tidak ada', 55),
(90, 0, 45, '', 'Belum ada dukungan.', 5),
(91, 0, 46, '', 'Ya,ketersediaaan dan kualitas sambungan listrik sebagai penunjang kegiatan usaha sangat memadai, dokumen terlampir.', 100),
(92, 0, 46, '', 'Ya,tersedia tetapi terbatas, dokumen terlampir', 55),
(93, 0, 46, '', 'Belum tersedia (dalam proses).', 5),
(94, 0, 48, '', 'Ya, tersedia dan kualitas akses terhadap jalan darat kondisi baik (Nasional, Provinsi dan Kabupaten), dokumen terlampir', 100),
(95, 0, 48, '', 'Ya, tersedia dan kualitas akses terhadap jalan darat kondisi sedang (Nasional, Provinsi dan Kabupaten), dokumen terlampir', 55),
(96, 0, 48, '', 'Akses jalan darat rusak berat/ belum dapat menunjang kegiatan.', 5),
(97, 0, 49, '', 'Ya, tersedia dan kualitas sambungan telepon sebagai penunjang kegiatan usaha sangat memadai, dokumen terlampir', 100),
(98, 0, 49, '', 'Ya, tersedia tetapi terbatas, dokumen terlampir', 55),
(99, 0, 49, '', 'Belum tersedia (dalam proses).', 5),
(100, 0, 50, '', 'Ya, tersedia transportasi umum sebagai penunjang kegiatan penanaman modal di sekitar wilayah usaha sangat memadai.terlampir dokumen terlampirnya', 100),
(101, 0, 50, '', 'Ya, tersedia tetapi terbatas, dokumen terlampir', 55),
(102, 0, 50, '', 'Belum tersedia (dalam proses).', 5),
(103, 0, 51, '', 'Ya, kemudahan memperoleh lahan usaha sebagai penunjang kegiatan usaha dan penanaman modal sangat memadai dan terlampir dokumen pendukungnya.', 100),
(104, 0, 51, '', 'Ya, tetapi luasannya dibatasi, dokumen terlampir', 55),
(105, 0, 51, '', 'Belum tersedia (dalam proses).', 5),
(107, 0, 53, 'a', 'Ya, ada dinas/ badan yang menangani penanaman modal sebagaimana Perda/ Perbup/ Perwali terlampir.', 100),
(108, 0, 53, 'b', 'Ya, ada dalam bentuk kantor yang menangani penanaman modal sebagaimana Perda/ Perbup/ Perwali terlampir.', 67),
(109, 0, 53, 'c', 'Ya, ada dalam bentuk sub bagian yang menangani penanaman modal sebagaimana Perda/ Perbup/ Perwali terlampir.', 33),
(110, 0, 53, 'd', 'Tidak punya badan/ dinas/ kantor sama sekali.', 0),
(111, 0, 54, 'a', 'Ya, dalam satu gedung.', 100),
(112, 0, 54, 'b', 'Tidak berada dalam satu gedung.', 5),
(113, 1, 55, 'a', 'Memiliki gedung tersendiri dengan fasilitas yang memadai yaitu:', 0),
(114, 0, 55, 'b', 'Belum memiliki gedung tersendiri.', 5),
(115, 0, 56, 'a', 'Ya, bidang penanaman modal mempunyai struktur organisasi yang mandiri, ramping dan efektif (lean) jelas tupoksinya dan lampirkan struktur organisasinya', 100),
(116, 0, 56, 'b', 'Ya, bidang penanaman modal tidak mempunyai struktur organisasi yang mandiri, ramping dan efektif (lean) jelas tupoksinya karena menyatu dengan lembaga lain.', 55),
(117, 0, 56, 'c', 'Tidak mempunyai struktur organisasi sama sekali', 5),
(118, 2, 57, 'I', 'Pengetahuan PTSP Di Bidang Penanaman Modal Tingkat Pertama', 0),
(119, 2, 57, 'II', 'Pengetahuan PTSP Di Bidang Penanaman Modal Tingkat Lanjutan', 0),
(120, 2, 57, 'III', 'Pengetahuan PTSP Di Bidang Penanaman Modal Sektoral', 0),
(121, 2, 57, 'IV', 'Kompetensi PTSP Di Bidang Penanaman Modal', 0),
(122, 0, 58, 'a', 'Ya, mempunyai kebijakan yang mendukung iklim penanaman modal dalam bentuk Perda/ Perbup/ Perwali Penanaman Modal/RUPM dan sudah dilaksanakan, terlampir.', 100),
(123, 0, 58, 'b', 'Ya, mempunyai draft kebijakan yang mendukung iklim penanaman modal dalam bentuk Perda/ Perbup/ Perwali Penanaman Modal/ RUPM terlampir.', 55),
(124, 0, 58, 'c', 'Belum mempunyai kebijakan dalam bentuk Perda/ Perbup/ Perwali Penanaman Modal/ RUPM.', 5),
(125, 0, 61, 'a', 'Ya, telah ditetapkan SPM bidang penanaman modal sebagaimana terlampir.', 100),
(126, 0, 61, 'b', 'Ya, masih dalam bentuk rancangan/draf sebagaimana terlampir.', 55),
(127, 0, 61, 'c', 'Belum membuat SPM.', 5),
(128, 0, 66, '', 'Diatas 20% dari anggaran penanaman modal', 100),
(129, 0, 66, '', '10% - 20% dari anggaran penanaman modal', 55),
(130, 0, 66, '', 'Kurang dari 10% dari anggaran penanaman modal', 5),
(131, 0, 69, '', 'Ya, Pemerintah Kabupaten/ Kota sering melakukan sosialisasi kesempatan berusaha yang dilakukan kepada para pelaku usaha/investor >5 kali dan terlampir dokumen pendukungnya', 100),
(132, 0, 69, '', 'Ya, Pemerintah Kabupaten/ Kota sering melakukan sosialisasi kesempatan berusaha yang dilakukan kepada para pelaku usaha/investor 1-5 kali, dan terlampir dokumen pendukungnya', 67),
(133, 0, 69, '', 'Tidak sama sekali.', 33),
(134, 0, 71, '', 'Ya, Pemerintah Kabupaten/ Kota mempunyai program unggulan promosi investasi, dan ada Perda/Perbup/ Perwali menaunginya serta program tersebut dilaksanakan, terlampir dokumen pendukungnya.', 100),
(135, 0, 71, '', 'Ya, Pemerintah Kabupaten/ Kota mempunyai program unggulan promosi investasi, dan ada Perda/ Perbup/ Perwali menaunginya, tetapi program tersebut belum dilaksanakan, terlampir dokumen pendukungnya.', 55),
(136, 0, 71, '', 'Tidak mempunyai program unggulan maupun Perda/ Perbup/ Perwali.', 5),
(137, 0, 72, '', 'Ya, Pemerintah Kabupaten/ Kota sudah melimpahkan wewenang perizinan penanaman modal (terlampir dokumen pendukungnya berupa perbup/ perwali)', 100),
(138, 0, 72, '', 'Ya, Pemerintah Kabupaten/ Kota belum melimpahkan wewenang perizinan penanaman modal (terlampir dokumen pendukungnya berupa draf perbup/ perwali)', 55),
(139, 0, 72, '', 'Ya, Pemerintah Kabupaten/ Kota belum melimpahkan wewenang perizinan.', 5),
(140, 0, 73, '', '1 sd. 5 sektor (sebutkan dan lampirkan)', 5),
(141, 0, 73, '', '6 sd 10 sektor (sebutkan dan lampirkan)', 55),
(142, 0, 73, '', 'Lebih dari 10 sektor (sebutkan dan lampirkan)', 100),
(143, 0, 74, '', '1 sd. 25 izin/ non izin sebagaimana terlampir', 5),
(144, 0, 74, '', '26 sd. 50 izn/ non izin sebagaimana terlampir', 55),
(145, 0, 74, '', 'lebih dari 50 izin/ non izin sebagaimana terlampir', 100),
(146, 0, 75, '', 'sudah, diatas 6 IP/ IU, bukti terlampir', 100),
(147, 0, 75, '', 'sudah, 1-5 IP/ IU, bukti terlampir', 55),
(148, 0, 75, '', 'belum pernah memproses IP/ IU.', 5),
(149, 0, 77, '', 'Ya, lembaga pelayanan perizinan mempunyai SP dan SOP yang sudah disosialisasikan sebagaimana terlampir.', 100),
(150, 0, 77, '', 'Ya, lembaga pelayanan perizinan mempunyai SP dan SOP tetapi belum disosialisasikan.', 55),
(151, 0, 77, '', 'Belum memiliki SP dan SOP.', 5),
(152, 0, 78, '', 'Ya, aplikasi SPIPISE telah dimiliki beserta Hak Akses dan telah dioperasionalkan, dokumen terlampir.', 100),
(153, 0, 78, '', 'Ya, SPIPISE telah dimiliki beserta hak aksesnya tetapi belum dioperasionalkan.', 55),
(154, 0, 78, '', 'Belum melaksanakan SPIPISE dan belum memiliki hak akses.', 5),
(155, 0, 79, '', 'Ya, hasil IKM meningkat setiap tahun, dokumen terlampir', 100),
(156, 0, 79, '', 'Ya, hasil IKM mengalami penurunan, dokumen terlampir.', 55),
(157, 0, 79, '', 'Belum dilakukan pengukuran IKM.', 5),
(158, 0, 80, '', 'Ya, pengaduan itu terdokumentasikan dan telah diselesaikan, dokumen terlampir', 100),
(159, 0, 80, '', 'Ya, pengaduan itu terdokumentasikan tetapi belum terselesaikan.', 55),
(160, 0, 80, '', 'Belum terdokumentasikan.', 5),
(161, 0, 81, '', 'Ya, ada insentif terhadap perizinan penanaman modal dan terlampir dokumen pendukungnya.', 100),
(162, 0, 81, '', 'Ya, ada insentif terhadap perizinan penanaman modal tapi belum dilaksanakan.', 55),
(163, 0, 81, '', 'Tidak ada insentif', 5),
(164, 0, 82, '', 'Ya, Pemerintah Kabupaten/ Kota mempunyai program unggulan pelayanan perizinan penanaman modal, dan ada Perda/ Perbup/ Perwali menaunginya, program tersebut dilaksanakan, ada hasilnya dan dokumen terlampir', 100),
(165, 0, 82, '', 'Ya, Pemerintah Kabupaten/ Kota mempunyai program unggulan pelayanan perizinan penanaman modal, dan ada Perda/ Perbup/ Perwali menaunginya, tetapi program tersebut belum dilaksanakan, dokumen terlampir', 55),
(166, 0, 82, '', 'Belum mempunyai program unggulan maupun Perda/ Perbup/ Perwali.', 5),
(167, 0, 84, '', 'Ya, telah menyusun buku kajian penanaman modal sekali dalam satu tahun,dokumen terlampir', 100),
(168, 0, 84, '', 'Sedang dalam proses penyusunan, dokumen terlampir', 55),
(169, 0, 84, '', 'Belum melakukan sama sekali', 5),
(170, 0, 85, '', 'Ya, ada kerjasama,sebagaimana dokumen terlampir (MOU, Perjanjian Kerjasama dll).', 100),
(171, 0, 85, '', 'Sedang dalam proses penjajagan kerjasama, sebagaimana dokumen terlampir', 55),
(172, 0, 85, '', 'Belum ada kerjasama.', 5),
(173, 0, 86, '', 'Ya, telah menyusun peta potensi investasi,sebagaimana dokumen terlampir', 100),
(174, 0, 86, '', 'Sedang dalam proses penyusunan, sebagaimana dokumen terlampir', 55),
(175, 0, 86, '', 'Belum menyusun sama sekali', 5),
(176, 0, 87, '', 'Ya, telah memfasilitasi kemitraan,sebagaimana dokumen terlampir', 100),
(177, 0, 87, '', 'Sedang dalam proses negosiasi, dokumen terlampir', 55),
(178, 0, 87, '', 'Belum melakukan sama sekali.', 5),
(179, 0, 88, '', 'Diatas 100%', 100),
(180, 0, 88, '', 'Antara 50% - 100%', 55),
(181, 0, 88, '', 'Dibawah 50%', 5),
(182, 0, 90, '', 'Ya, ketersediaan tenaga kerja sebagai penunjang usaha di kota/ kabupaten sesuai bidang usaha dominan tersedia/memadai, dokumen terlampir', 100),
(183, 0, 90, '', 'Ya, ketersediaan tenaga kerjasebagai penunjang usaha di kota/ kabupaten sesuai bidang usaha dominan tersedia/memadai namun jumlahnya terbatas, dokumen terlampir', 55),
(184, 0, 90, '', 'Belum tersedia tenaga kerjasebagai penunjang usaha di kota/kabupaten sesuai bidang usaha dominan tersedia/memadai, dokumen terlampir.', 5),
(185, 0, 91, '', 'Ya, kualitas tenaga kerja sangat memadai, dokumen terlampir', 100),
(186, 0, 91, '', 'Ya, namun terbatas kualitasnya, dokumen terlampir', 55),
(187, 0, 91, '', 'Tidak berkualitas.', 5),
(188, 0, 92, '', 'Ya, Pemerintah mempunyai program unggulan kinerja investasi, dan ada Perda/ Perbup/ Perwali menaunginya, dilaksanakandan terlihat hasilnya, dokumen terlampir', 100),
(189, 0, 92, '', 'Ya, Pemerintah mempunyai program unggulan kinerja investasi, dan ada Perda/ Perbup/ Perwali menaunginya, tetapi belum dilaksanakandan dokumen terlampir', 55),
(190, 0, 92, '', 'Belum mempunyai program unggulan maupun Perda/ Perbup/Perwali.', 5),
(191, 0, 93, '', 'Ya, ada dukungan, bukti terlampir.', 100),
(192, 0, 93, '', 'Ya, ada dukungan, bukti tidak ada', 55),
(193, 0, 93, '', 'Belum ada dukungan.', 5),
(194, 0, 94, '', 'Ya,ketersediaaan dan kualitas sambungan listrik sebagai penunjang kegiatan usaha sangat memadai, dokumen terlampir.', 100),
(195, 0, 94, '', 'Ya,tersedia tetapi terbatas, dokumen terlampir', 55),
(196, 0, 94, '', 'Belum tersedia (dalam proses).', 5),
(197, 0, 96, '', 'Ya, tersedia dan kualitas akses terhadap jalan darat kondisi baik (Nasional, Provinsi dan Kabupaten), dokumen terlampir', 100),
(198, 0, 96, '', 'Ya, tersedia dan kualitas akses terhadap jalan darat kondisi sedang (Nasional, Provinsi dan Kabupaten), dokumen terlampir', 55),
(199, 0, 96, '', 'Akses jalan darat rusak berat/ belum dapat menunjang kegiatan.', 5),
(200, 0, 97, '', 'Ya, tersedia dan kualitas sambungan telepon sebagai penunjang kegiatan usaha sangat memadai, dokumen terlampir', 100),
(201, 0, 97, '', 'Ya, tersedia tetapi terbatas, dokumen terlampir', 55),
(202, 0, 97, '', 'Belum tersedia (dalam proses).', 5),
(203, 0, 98, '', 'Ya, tersedia transportasi umum sebagai penunjang kegiatan penanaman modal di sekitar wilayah usaha sangat memadai.terlampir dokumen terlampirnya', 100),
(204, 0, 98, '', 'Ya, tersedia tetapi terbatas, dokumen terlampir', 55),
(205, 0, 98, '', 'Belum tersedia (dalam proses).', 5),
(206, 0, 99, '', 'Ya, kemudahan memperoleh lahan usaha sebagai penunjang kegiatan usaha dan penanaman modal sangat memadai dan terlampir dokumen pendukungnya.', 100),
(207, 0, 99, '', 'Ya, tetapi luasannya dibatasi, dokumen terlampir', 55),
(208, 0, 99, '', 'Belum tersedia (dalam proses).', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `questions3`
--

CREATE TABLE IF NOT EXISTS `questions3` (
`q3_id` int(11) NOT NULL,
  `data_id` int(11) NOT NULL,
  `q3_name` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `questions3`
--

INSERT INTO `questions3` (`q3_id`, `data_id`, `q3_name`) VALUES
(1, 0, 'Nama Instansi'),
(2, 0, 'Nama Pejabat Pengisi'),
(3, 0, 'Jabatan'),
(4, 0, 'Lama Menduduki Jabatan'),
(5, 0, 'Alamat Instansi'),
(6, 0, 'No Telp Instansi'),
(7, 0, 'No Fax Instansi'),
(8, 0, 'E-mail Instansi'),
(9, 0, 'No HP Penjabat Pengisi'),
(11, 4, 'Nama Instansi'),
(12, 4, 'Nama Pejabat Pengisi'),
(13, 4, 'Jabatan'),
(14, 4, 'Lama Menduduki Jabatan'),
(15, 4, 'Alamat Instansi'),
(16, 4, 'No Telp Instansi'),
(17, 4, 'No Fax Instansi'),
(18, 4, 'E-mail Instansi'),
(19, 4, 'No HP Penjabat Pengisi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `questions_pma1`
--

CREATE TABLE IF NOT EXISTS `questions_pma1` (
`qp1_id` int(11) NOT NULL,
  `qp1_name` varchar(100) NOT NULL,
  `qp1_get_child` int(11) NOT NULL,
  `data_id` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=102 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `questions_pma1`
--

INSERT INTO `questions_pma1` (`qp1_id`, `qp1_name`, `qp1_get_child`, `data_id`) VALUES
(1, 'Nama perusahaan', 0, 0),
(2, 'sektor usaha', 0, 0),
(3, 'status perusahaan', 1, 0),
(7, 'Berdiri/Beroperasi Sejak', 0, 0),
(8, 'Alamat Kantor/Perusahaan', 0, 0),
(9, 'Telp/Fax/E-mail', 0, 0),
(10, 'Orientasi Produk', 0, 0),
(88, 'Nama perusahaan', 0, 5),
(89, 'sektor usaha', 0, 5),
(90, 'status perusahaan', 1, 5),
(91, 'Berdiri/Beroperasi Sejak', 0, 5),
(92, 'Alamat Kantor/Perusahaan', 0, 5),
(93, 'Telp/Fax/E-mail', 0, 5),
(94, 'Orientasi Produk', 0, 5),
(95, 'Nama perusahaan', 0, 6),
(96, 'sektor usaha', 0, 6),
(97, 'status perusahaan', 1, 6),
(98, 'Berdiri/Beroperasi Sejak', 0, 6),
(99, 'Alamat Kantor/Perusahaan', 0, 6),
(100, 'Telp/Fax/E-mail', 0, 6),
(101, 'Orientasi Produk', 0, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `questions_pma1_details`
--

CREATE TABLE IF NOT EXISTS `questions_pma1_details` (
`qp1d_id` int(11) NOT NULL,
  `qp1_id` int(11) NOT NULL,
  `qp1d_name` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `questions_pma1_details`
--

INSERT INTO `questions_pma1_details` (`qp1d_id`, `qp1_id`, `qp1d_name`) VALUES
(13, 3, 'PMA'),
(14, 3, 'PMDN'),
(15, 90, 'PMA'),
(16, 90, 'PMDN'),
(17, 97, 'PMA'),
(18, 97, 'PMDN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `questions_pma2`
--

CREATE TABLE IF NOT EXISTS `questions_pma2` (
`qp2_id` int(11) NOT NULL,
  `qp2_type` int(11) NOT NULL,
  `qp2_number` varchar(10) NOT NULL,
  `qp2_name` text NOT NULL,
  `qp2_cat_pma_id` int(11) NOT NULL,
  `qp2_weight` int(11) NOT NULL,
  `qp2_description` text NOT NULL,
  `data_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `questions_pma2`
--

INSERT INTO `questions_pma2` (`qp2_id`, `qp2_type`, `qp2_number`, `qp2_name`, `qp2_cat_pma_id`, `qp2_weight`, `qp2_description`, `data_id`) VALUES
(1, 0, '', 'Apakah perusahaan anda setiap tahun menyusun Laporan Kinerja Kegiatan Penanaman Modal (LKPM)?', 1, 10, '', 0),
(2, 0, '', 'Apakah perusahaan anda setiap tahun menyerahkan Kinerja Pelaporan Kegiatan Penanaman Modal (LKPM) ke Instansi Penanaman Modal/ Perizinan Terpadu di mana perusahaan beroperasi?', 1, 10, '', 0),
(3, 1, '', 'Berapakah perkembangan omzet perusahaan*) dalam tiga tahun terakhir dengan mengisi tabel berikut ini:', 1, 20, '<b>perkembangan</b> : <br>- Lebih dari 10%  nilai 100<br>- Antara 5%-10%  nilai 55<br>- Kurang dari 5% nilai 5<br>', 0),
(4, 2, '', 'Berapakah perkembangan asset perusahaan*) dalam tiga tahun terakhir dengan mengisi tabel berikut ini:(croscek LKPM 2 tahun)', 1, 10, '<b>perkembangan</b> : <br>- Lebih dari 10%  nilai 100<br>- Antara 5%-10%  nilai 55<br>- Kurang dari 5% nilai 5<br>', 0),
(5, 0, '', 'Dalam perencanaan perusahaan anda, berapa lama proses untuk mendapatkan Izin Prinsip Penanaman Modal dari Instansi Pemerintah ?', 1, 10, '', 0),
(6, 0, '', 'Apakah perusahaan anda setelah mendapatkan izin memperoleh fasilitas barang modal, bahan baku dari Pemerintah dan melaporkan realisasi kepada instansi terkait ?', 1, 10, '', 0),
(7, 0, '', 'Apakah pada akhir-akhir ini perusahaan Saudara telah melakukan perluasan usaha baik fisik konstruksi maupun bidang usaha yang kapasitas izin produksinya lebih dari 30% ?', 1, 10, '', 0),
(9, 0, '', 'Pada era teknologi maju saat ini apakah perusahaan Saudara masih menggunakan tenaga asing ?', 1, 10, '', 0),
(10, 0, '', 'Apakah perusahaan saudara telah melakukan kemitraan dengan usaha mikro, kecil, menengah dan koperasi (UMKM-K),', 1, 10, '', 0),
(11, 0, '', 'Apakah perusahaan memiliki program Corporate Social Responsibility (CSR)?', 2, 20, '', 0),
(12, 0, '', 'Apakah perusahaan memiliki anggaran khusus untuk melaksanakan program Corporate Social Responsibility (CSR)?', 2, 20, '', 0),
(13, 0, '', 'Apakah perusahaan, untuk melaksanakan program Corporate Social Responsibility (CSR) membentuk divisi atau bagian tersendiri?', 2, 10, '', 0),
(14, 3, '', 'Apa sajakah bentuk program/ kegiatan Corporate Social Responsibility (CSR) yang direalisasikan perusahaan secara berkelanjutan, dengan cara memberi tanda silang (X) pada pilihan jawaban â€œYa dan Tidakâ€ setiap program CSR di tabel berikut ini:', 2, 10, '<b>kegiatan</b> : <br>- lebih dari 10 kegiatan nilai 100<br>- 5 - 10 kegiatan  nilai 55 <br>- kurang dari  5  kegiatan nilai 5  ', 0),
(15, 0, '', 'Bagaimana perkembangan program Corporate Social Responsibility (CSR) yang telah dilaksanakan perusahaan dikaitkan dengan kebutuhan masyarakat?', 2, 10, '', 0),
(16, 0, '', 'Apakah perusahaan dalam melaksanakan program Corporate Social Responsibility (CSR), melakukan koordinasi dengan lembaga terkait ?', 2, 10, '', 0),
(17, 0, '', 'Dalam pelaksanaan program Corporate Social Responsibility (CSR), apakah perusahaan memiliki wilayah sasaran atau binaan?', 2, 10, '', 0),
(18, 0, '', 'Apakah perusahaan dalam melaksanakan program Corporate Social Responsibility (CSR), melakukan kerjasama dengan instansi terkait?', 2, 10, '', 0),
(19, 0, '', 'Apakah saat ini perusahaan anda mempunyai program pengelolaan lingkungan hidup?', 3, 20, '', 0),
(20, 0, '', 'Apakah perusahaan memiliki anggaran khusus untuk melaksanakan program pengelolaan lingkungan hidup?', 3, 20, '', 0),
(21, 0, '', 'Apakah perusahaan melakukan pelembagaan untuk melaksanakan program pengelolaan lingkungan hidup?', 3, 20, '', 0),
(22, 4, '', 'Apa sajakah jenis program pengelolaan lingkungan hidup yang dilaksanakan oleh perusahaan secara berkelanjutan? Sebutkan dan terlampir data pendukungnya:', 3, 10, '<b>I. Program/ Kegiatan Promosi Penanaman Modal bersama Dinas/ Instansi Lain.</b><br>\r\n  \r\n- Lebih dari 5 kegiatan,  terlampir data pendukungnya<strong>poin 100<br>\r\n</strong>- Antara 2-4kegiatan,strong>poin\r\n55  terlampir data pendukungnya</strong><br>\r\n- Kurang dari 2 kegiatan, terlampir data pendukungnya<strong>poin 5</strong><br><br>\r\n\r\n<strong>', 0),
(23, 0, '', 'Selama 1 tahun terakhir bagaimana perkembangan program pengelolaan lingkungan hidup yang telah dilaksanakan perusahaan?', 3, 10, '', 0),
(24, 0, '', 'Dalam pelaksanaan program pengelolaan lingkungan hidup, apakah perusahaan memiliki wilayah sasaran atau binaan?', 3, 10, '', 0),
(25, 0, '', 'Dalam rangka menciptakan lingkungan hidup yang bersih dan nyaman terutama di sekitar lingkungan perusahaan saudara, apakah perusahaan anda melakukan pengolahan limbah serta mempunyai unit pengolah limbah ?', 3, 10, '', 0),
(51, 0, '', 'Apakah perusahaan anda setiap tahun menyusun Laporan Kinerja Kegiatan Penanaman Modal (LKPM)?', 1, 10, '', 6),
(52, 0, '', 'Apakah perusahaan anda setiap tahun menyerahkan Kinerja Pelaporan Kegiatan Penanaman Modal (LKPM) ke Instansi Penanaman Modal/ Perizinan Terpadu di mana perusahaan beroperasi?', 1, 10, '', 6),
(53, 1, '', 'Berapakah perkembangan omzet perusahaan*) dalam tiga tahun terakhir dengan mengisi tabel berikut ini:', 1, 20, '<b>perkembangan</b> : <br>- Lebih dari 10%  nilai 100<br>- Antara 5%-10%  nilai 55<br>- Kurang dari 5% nilai 5<br>', 6),
(54, 2, '', 'Berapakah perkembangan asset perusahaan*) dalam tiga tahun terakhir dengan mengisi tabel berikut ini:(croscek LKPM 2 tahun)', 1, 10, '<b>perkembangan</b> : <br>- Lebih dari 10%  nilai 100<br>- Antara 5%-10%  nilai 55<br>- Kurang dari 5% nilai 5<br>', 6),
(55, 0, '', 'Dalam perencanaan perusahaan anda, berapa lama proses untuk mendapatkan Izin Prinsip Penanaman Modal dari Instansi Pemerintah ?', 1, 10, '', 6),
(56, 0, '', 'Apakah perusahaan anda setelah mendapatkan izin memperoleh fasilitas barang modal, bahan baku dari Pemerintah dan melaporkan realisasi kepada instansi terkait ?', 1, 10, '', 6),
(57, 0, '', 'Apakah pada akhir-akhir ini perusahaan Saudara telah melakukan perluasan usaha baik fisik konstruksi maupun bidang usaha yang kapasitas izin produksinya lebih dari 30% ?', 1, 10, '', 6),
(58, 0, '', 'Pada era teknologi maju saat ini apakah perusahaan Saudara masih menggunakan tenaga asing ?', 1, 10, '', 6),
(59, 0, '', 'Apakah perusahaan saudara telah melakukan kemitraan dengan usaha mikro, kecil, menengah dan koperasi (UMKM-K),', 1, 10, '', 6),
(60, 0, '', 'Apakah perusahaan memiliki program Corporate Social Responsibility (CSR)?', 2, 20, '', 6),
(61, 0, '', 'Apakah perusahaan memiliki anggaran khusus untuk melaksanakan program Corporate Social Responsibility (CSR)?', 2, 20, '', 6),
(62, 0, '', 'Apakah perusahaan, untuk melaksanakan program Corporate Social Responsibility (CSR) membentuk divisi atau bagian tersendiri?', 2, 10, '', 6),
(63, 3, '', 'Apa sajakah bentuk program/ kegiatan Corporate Social Responsibility (CSR) yang direalisasikan perusahaan secara berkelanjutan, dengan cara memberi tanda silang (X) pada pilihan jawaban â€œYa dan Tidakâ€ setiap program CSR di tabel berikut ini:', 2, 10, '<b>kegiatan</b> : <br>- lebih dari 10 kegiatan nilai 100<br>- 5 - 10 kegiatan  nilai 55 <br>- kurang dari  5  kegiatan nilai 5  ', 6),
(64, 0, '', 'Bagaimana perkembangan program Corporate Social Responsibility (CSR) yang telah dilaksanakan perusahaan dikaitkan dengan kebutuhan masyarakat?', 2, 10, '', 6),
(65, 0, '', 'Apakah perusahaan dalam melaksanakan program Corporate Social Responsibility (CSR), melakukan koordinasi dengan lembaga terkait ?', 2, 10, '', 6),
(66, 0, '', 'Dalam pelaksanaan program Corporate Social Responsibility (CSR), apakah perusahaan memiliki wilayah sasaran atau binaan?', 2, 10, '', 6),
(67, 0, '', 'Apakah perusahaan dalam melaksanakan program Corporate Social Responsibility (CSR), melakukan kerjasama dengan instansi terkait?', 2, 10, '', 6),
(68, 0, '', 'Apakah saat ini perusahaan anda mempunyai program pengelolaan lingkungan hidup?', 3, 20, '', 6),
(69, 0, '', 'Apakah perusahaan memiliki anggaran khusus untuk melaksanakan program pengelolaan lingkungan hidup?', 3, 20, '', 6),
(70, 0, '', 'Apakah perusahaan melakukan pelembagaan untuk melaksanakan program pengelolaan lingkungan hidup?', 3, 20, '', 6),
(71, 4, '', 'Apa sajakah jenis program pengelolaan lingkungan hidup yang dilaksanakan oleh perusahaan secara berkelanjutan? Sebutkan dan terlampir data pendukungnya:', 3, 10, '<b>I. Program/ Kegiatan Promosi Penanaman Modal bersama Dinas/ Instansi Lain.</b><br>\r\n  \r\n- Lebih dari 5 kegiatan,  terlampir data pendukungnya<strong>poin 100<br>\r\n</strong>- Antara 2-4kegiatan,strong>poin\r\n55  terlampir data pendukungnya</strong><br>\r\n- Kurang dari 2 kegiatan, terlampir data pendukungnya<strong>poin 5</strong><br><br>\r\n\r\n<strong>', 6),
(72, 0, '', 'Selama 1 tahun terakhir bagaimana perkembangan program pengelolaan lingkungan hidup yang telah dilaksanakan perusahaan?', 3, 10, '', 6),
(73, 0, '', 'Dalam pelaksanaan program pengelolaan lingkungan hidup, apakah perusahaan memiliki wilayah sasaran atau binaan?', 3, 10, '', 6),
(74, 0, '', 'Dalam rangka menciptakan lingkungan hidup yang bersih dan nyaman terutama di sekitar lingkungan perusahaan saudara, apakah perusahaan anda melakukan pengolahan limbah serta mempunyai unit pengolah limbah ?', 3, 10, '', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `questions_pma2_details`
--

CREATE TABLE IF NOT EXISTS `questions_pma2_details` (
`qp2d_id` int(11) NOT NULL,
  `qp2d_type` int(11) NOT NULL,
  `qp2_id` int(11) NOT NULL,
  `qp2d_number` varchar(10) NOT NULL,
  `qp2d_name` text NOT NULL,
  `qp2d_point` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=196 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `questions_pma2_details`
--

INSERT INTO `questions_pma2_details` (`qp2d_id`, `qp2d_type`, `qp2_id`, `qp2d_number`, `qp2d_name`, `qp2d_point`) VALUES
(1, 0, 1, '', 'Ya, perusahaan setiap tahun menyusun Kinerja Pelaporan Kegiatan Penanaman Modal (LKPM), terlampir data pendukungnya.', 100),
(2, 0, 1, '', 'Ya, perusahaan perusahaan setiap tahun menyusun Kinerja Pelaporan Kegiatan Penanaman Modal (LKPM), tetapi tidak terlampir data pendukungnya', 67),
(3, 0, 1, '', 'Masih dalam menyusun Kinerja Pelaporan Kegiatan Penanaman Modal (LKPM)', 33),
(4, 0, 1, '', 'Tidak menyusun sama sekali.', 5),
(5, 0, 2, '', 'Ya, perusahaan setiap tahun menyerahkan Kinerja Pelaporan Kegiatan Penanaman Modal (LKPM) ke Instansi Penanaman Modal/ Perizinan Terpadu di mana perusahaan beroperasi, dan terlampir bukti pengiriman.', 100),
(6, 0, 2, '', 'Ya, perusahaan setiap tahun menyerahkan Kinerja Pelaporan Kegiatan Penanaman Modal (LKPM) ke Instansi Penanaman Modal/ Perizinan Terpadu di mana perusahaan beroperasi, tetapi tidak terlampir data pendukungnya', 67),
(7, 0, 2, '', 'Saat ini masih menyusun dan belum diserahkan', 33),
(8, 0, 2, '', 'Tidak pernah menyerahkan ke Instansi Penanaman Modal/ Perizinan Terpadu.', 5),
(9, 0, 5, '', 'Ya, proses mendapatkan Izin Prinsip cepat (1-12 hari) dengan persyaratan dan data pendukung lengkap.', 100),
(10, 0, 5, '', 'Ya, proses aplikasi mendapatkan izin prinsip lambat, kurang persyaratan dan data pendukung terlampir', 67),
(11, 0, 5, '', 'Lebih dari 35 hari untuk mendapatkan Izin Prinsip', 33),
(12, 0, 5, '', 'Tidak pernah mengurus Izin Prinsip.', 5),
(13, 0, 6, '', 'Ya, perusahaan melaporkan setiap 3 bulan perkembangan fasilitas realisasi impor barang modal/ bahan baku, terlampir data pendukungnya', 100),
(14, 0, 6, '', 'Ya, perusahaan melaporkan setiap 3 bulan perkembangan realisasi impor barang modal/bahan baku, tetapi tidak terlampir data pendukungnya', 67),
(15, 0, 6, '', 'Menyusun laporan perkembangan fasilitas realisasi impor, tetapi tidak dilaporkan', 33),
(16, 0, 6, '', 'Tidak menyusun perkembangan realisasi impor', 5),
(17, 0, 7, '', 'Ya, perluasan lebih dari 30% sebagaimana ijin prinsip perluasan terlampir.', 100),
(18, 0, 7, '', 'Ya, melakukan perluasan tetapi kurang dari 30%', 55),
(19, 0, 7, '', 'Tidak pernah melakukan perluasan', 5),
(20, 0, 9, '', 'Ya, lebih dari 10 orang tenaga asing sebagaimana ijin penggunaan tenaga asing terlampir.', 5),
(21, 0, 9, '', 'Ya, 1 - 9 orang tenaga asing sebagaimana ijin penggunaan tenaga asing terlampir.', 55),
(22, 0, 9, '', 'Tidak menggunakan tenaga asing.', 100),
(23, 0, 10, '', 'Ya, telah melakukan kemitraan sebagaimana dokumen terlampir,', 100),
(24, 0, 10, '', 'Ya, dalam proses kemitraan, sebagaimana draf terlampir,', 55),
(25, 0, 10, '', 'Belum melakukan kemitraan.', 5),
(27, 0, 11, '', 'Ya, perusahaan memiliki program Corporate Social Responsibility (CSR), tetapi tidak terlampir data pendukungnya', 55),
(28, 0, 11, '', 'Tidak mempunyai program sama sekali', 5),
(29, 0, 12, '', 'Ya, perusahaan memiliki anggaran/ dana khusus untuk melaksanakan program Corporate Social Responsibility (CSR), dan terlampir data pendukungnya', 100),
(30, 0, 12, '', 'Ya, perusahaan memiliki anggaran/ dana khusus untuk melaksanakan program Corporate Social Responsibility (CSR), tetapi tidak terlampir data pendukungnya', 55),
(31, 0, 12, '', 'Tidak mempunyai anggaran/ dana khusus.', 5),
(32, 0, 13, '', 'Ya, perusahaan membentuk divisi atau bagian tersendiri untuk melaksanakan program Corporate Social Responsibility (CSR), dan terlampir dokumen pendukungnya', 100),
(33, 0, 13, '', 'Ya, perusahaan membentuk divisi atau bagian tersendiri untuk melaksanakan program Corporate Social Responsibility (CSR), tetapi tidak terlampir dokumen pendukungnya.', 55),
(34, 0, 13, '', 'Tidak melakukan pelembagaan sama sekali', 5),
(35, 0, 15, '', 'Sangat sesuai, masyarakat merasakan manfaatnya dan berimbas serta terlampir dokumen pelaksanaannya', 100),
(36, 0, 15, '', 'Sangat sesuai, masyarakat sekitar perusahaan merasakan manfaatnya, tetapi tidak berimbas dan terlampir dokumen pelaksanaannya', 67),
(37, 0, 15, '', 'Sangat sesuai, masyarakat sekitar perusahaan merasakan manfaatnya, tetapi tidak berimbas dan tidak terlampir dokumen pelaksanaannya', 33),
(38, 0, 15, '', 'Masih belum dievaluasi perusahaan sehingga belum mengetahui hasil dan dampaknya', 5),
(39, 0, 16, '', 'Ya, perusahaan dalam melaksanakan program Corporate Social Responsibility (CSR), melakukan koordinasi dengan lembaga terkait dan terlampir dokumen pendukungnya.', 100),
(40, 0, 16, '', 'Ya, perusahaan dalam melaksanakan program Corporate Social Responsibility (CSR), melakukan koordinasi dengan lembaga terkait tetapi tidak terlampir dokumen pendukungnya', 55),
(41, 0, 16, '', 'Tidak melakukan koordinasi.', 5),
(42, 0, 17, '', 'Ya, dalam pelaksanaan program Corporate Social Responsibility (CSR), perusahaan memiliki wilayah sasaran atau binaan, dan terlampir dokumen pendukungnya', 100),
(43, 0, 17, '', 'Tidak memiliki wilayah sasaran sama sekali', 5),
(44, 0, 18, '', 'Ya, perusahaan dalam melaksanakan program Corporate Social Responsibility (CSR), melakukan kerjasama dengan instansi terkait dan terlampir dokumen pendukungnya.', 100),
(45, 0, 18, '', 'Ya, perusahaan dalam melaksanakan program Corporate Social Responsibility (CSR), melakukan kerjasama dengan instansi terkait tetapi tidak terlampir dokumen pendukungnya', 55),
(46, 0, 18, '', 'Tidak melakukan kerjasama.', 5),
(47, 0, 19, '', 'Ya, saat ini perusahaan mempunyai program pengelolaan lingkungan hidup, dan terlampir data pendukungnya', 100),
(48, 0, 19, '', 'Ya, saat ini perusahaan mempunyai program pengelolaan lingkungan hidup, tetapi tidak terlampir data pendukungnya', 55),
(49, 0, 19, '', 'Tidak mempunyai sama sekali', 5),
(50, 0, 20, '', 'Ya, perusahaan memiliki anggaran khusus untuk melaksanakan program pengelolaan lingkungan hidup, dan terlampir data pendukungnya', 100),
(51, 0, 20, '', 'Ya, perusahaan memiliki anggaran khusus untuk melaksanakan program pengelolaan lingkungan hidup, tetapi tidak terlampir data pendukungnya', 55),
(52, 0, 20, '', 'Tidak ada anggaran khusus sama sekali', 5),
(53, 0, 21, '', 'Ya, perusahaan melakukan pelembagaan untuk melaksanakan program pengelolaan lingkungan hidup dan terlampir data pendukungnya', 100),
(54, 0, 21, '', 'Ya, perusahaan melakukan pelembagaan untuk melaksanakan program pengelolaan lingkungan hidup, tetapi tidak terlampir data pendukungnya', 55),
(55, 0, 21, '', 'Tidak melakukan pelembagaan.', 5),
(56, 0, 23, '', 'Sangat baik dan berimbas pada masyarakat luas merasakan manfaatnya serta terlampir dokumen pelaksanaannya', 100),
(57, 0, 23, '', 'Sangat baik dan masyarakat sekitar perusahaan merasakan manfaatnya, terlampir dokumen pelaksanaannya', 67),
(58, 0, 23, '', 'Sangat baik dan masyarakat sekitar perusahaan merasakan manfaatnya, tetapi tidak terlampir dokumen pelaksanaannya', 33),
(59, 0, 23, '', 'Belum ada proses evaluasi sama sekali', 5),
(60, 0, 24, '', 'Ya, dalam pelaksanaan program pengelolaan lingkungan hidup, perusahaan memiliki wilayah sasaran atau binaan sangat luas, dan terlampir dokumen pendukungnya', 100),
(61, 0, 24, '', 'Ya, dalam pelaksanaan program pengelolaan lingkungan hidup, perusahaan memiliki wilayah sasaran atau binaan di sekitar perusahaan, terlampir dokumen pendukungnya', 67),
(62, 0, 24, '', 'Ya, dalam pelaksanaan program pengelolaan lingkungan hidup, perusahaan memiliki wilayah sasaran atau binaan, tetapi terbatas sasarannya terlampir dokumen pendukungnya', 33),
(63, 0, 24, '', 'Tidak memiliki wilayah sasaran sama sekali', 5),
(128, 0, 25, '', 'Ya, perusahaan kami melakukan pengolahan limbah sesuai dengan ketentuan yang berlaku dan mempunyai sendiri unit pengolah limbahnya.', 100),
(129, 0, 25, '', 'Ya, perusahaan kami melakukan pengolahan limbah sesuai dengan ketentuan yang berlaku, tetapi unit pengolah limbahnya milik Pemerintah daerah Kabupaten / Kota.', 55),
(130, 0, 25, '', 'Tidak melakukan pengolahan limbah serta tidak memiliki unit pengolah limbah.', 5),
(131, 0, 51, '', 'Ya, perusahaan setiap tahun menyusun Kinerja Pelaporan Kegiatan Penanaman Modal (LKPM), terlampir data pendukungnya.', 100),
(132, 0, 51, '', 'Ya, perusahaan perusahaan setiap tahun menyusun Kinerja Pelaporan Kegiatan Penanaman Modal (LKPM), tetapi tidak terlampir data pendukungnya', 67),
(133, 0, 51, '', 'Masih dalam menyusun Kinerja Pelaporan Kegiatan Penanaman Modal (LKPM)', 33),
(134, 0, 51, '', 'Tidak menyusun sama sekali.', 5),
(135, 0, 52, '', 'Ya, perusahaan setiap tahun menyerahkan Kinerja Pelaporan Kegiatan Penanaman Modal (LKPM) ke Instansi Penanaman Modal/ Perizinan Terpadu di mana perusahaan beroperasi, dan terlampir bukti pengiriman.', 100),
(136, 0, 52, '', 'Ya, perusahaan setiap tahun menyerahkan Kinerja Pelaporan Kegiatan Penanaman Modal (LKPM) ke Instansi Penanaman Modal/ Perizinan Terpadu di mana perusahaan beroperasi, tetapi tidak terlampir data pendukungnya', 67),
(137, 0, 52, '', 'Saat ini masih menyusun dan belum diserahkan', 33),
(138, 0, 52, '', 'Tidak pernah menyerahkan ke Instansi Penanaman Modal/ Perizinan Terpadu.', 5),
(139, 0, 55, '', 'Ya, proses mendapatkan Izin Prinsip cepat (1-12 hari) dengan persyaratan dan data pendukung lengkap.', 100),
(140, 0, 55, '', 'Ya, proses aplikasi mendapatkan izin prinsip lambat, kurang persyaratan dan data pendukung terlampir', 67),
(141, 0, 55, '', 'Lebih dari 35 hari untuk mendapatkan Izin Prinsip', 33),
(142, 0, 55, '', 'Tidak pernah mengurus Izin Prinsip.', 5),
(143, 0, 56, '', 'Ya, perusahaan melaporkan setiap 3 bulan perkembangan fasilitas realisasi impor barang modal/ bahan baku, terlampir data pendukungnya', 100),
(144, 0, 56, '', 'Ya, perusahaan melaporkan setiap 3 bulan perkembangan realisasi impor barang modal/bahan baku, tetapi tidak terlampir data pendukungnya', 67),
(145, 0, 56, '', 'Menyusun laporan perkembangan fasilitas realisasi impor, tetapi tidak dilaporkan', 33),
(146, 0, 56, '', 'Tidak menyusun perkembangan realisasi impor', 5),
(147, 0, 57, '', 'Ya, perluasan lebih dari 30% sebagaimana ijin prinsip perluasan terlampir.', 100),
(148, 0, 57, '', 'Ya, melakukan perluasan tetapi kurang dari 30%', 55),
(149, 0, 57, '', 'Tidak pernah melakukan perluasan', 5),
(150, 0, 58, '', 'Ya, lebih dari 10 orang tenaga asing sebagaimana ijin penggunaan tenaga asing terlampir.', 5),
(151, 0, 58, '', 'Ya, 1 - 9 orang tenaga asing sebagaimana ijin penggunaan tenaga asing terlampir.', 55),
(152, 0, 58, '', 'Tidak menggunakan tenaga asing.', 100),
(153, 0, 59, '', 'Ya, telah melakukan kemitraan sebagaimana dokumen terlampir,', 100),
(154, 0, 59, '', 'Ya, dalam proses kemitraan, sebagaimana draf terlampir,', 55),
(155, 0, 59, '', 'Belum melakukan kemitraan.', 5),
(156, 0, 60, '', 'Ya, perusahaan memiliki program Corporate Social Responsibility (CSR), tetapi tidak terlampir data pendukungnya', 55),
(157, 0, 60, '', 'Tidak mempunyai program sama sekali', 5),
(158, 0, 61, '', 'Ya, perusahaan memiliki anggaran/ dana khusus untuk melaksanakan program Corporate Social Responsibility (CSR), dan terlampir data pendukungnya', 100),
(159, 0, 61, '', 'Ya, perusahaan memiliki anggaran/ dana khusus untuk melaksanakan program Corporate Social Responsibility (CSR), tetapi tidak terlampir data pendukungnya', 55),
(160, 0, 61, '', 'Tidak mempunyai anggaran/ dana khusus.', 5),
(161, 0, 62, '', 'Ya, perusahaan membentuk divisi atau bagian tersendiri untuk melaksanakan program Corporate Social Responsibility (CSR), dan terlampir dokumen pendukungnya', 100),
(162, 0, 62, '', 'Ya, perusahaan membentuk divisi atau bagian tersendiri untuk melaksanakan program Corporate Social Responsibility (CSR), tetapi tidak terlampir dokumen pendukungnya.', 55),
(163, 0, 62, '', 'Tidak melakukan pelembagaan sama sekali', 5),
(164, 0, 64, '', 'Sangat sesuai, masyarakat merasakan manfaatnya dan berimbas serta terlampir dokumen pelaksanaannya', 100),
(165, 0, 64, '', 'Sangat sesuai, masyarakat sekitar perusahaan merasakan manfaatnya, tetapi tidak berimbas dan terlampir dokumen pelaksanaannya', 67),
(166, 0, 64, '', 'Sangat sesuai, masyarakat sekitar perusahaan merasakan manfaatnya, tetapi tidak berimbas dan tidak terlampir dokumen pelaksanaannya', 33),
(167, 0, 64, '', 'Masih belum dievaluasi perusahaan sehingga belum mengetahui hasil dan dampaknya', 5),
(168, 0, 65, '', 'Ya, perusahaan dalam melaksanakan program Corporate Social Responsibility (CSR), melakukan koordinasi dengan lembaga terkait dan terlampir dokumen pendukungnya.', 100),
(169, 0, 65, '', 'Ya, perusahaan dalam melaksanakan program Corporate Social Responsibility (CSR), melakukan koordinasi dengan lembaga terkait tetapi tidak terlampir dokumen pendukungnya', 55),
(170, 0, 65, '', 'Tidak melakukan koordinasi.', 5),
(171, 0, 66, '', 'Ya, dalam pelaksanaan program Corporate Social Responsibility (CSR), perusahaan memiliki wilayah sasaran atau binaan, dan terlampir dokumen pendukungnya', 100),
(172, 0, 66, '', 'Tidak memiliki wilayah sasaran sama sekali', 5),
(173, 0, 67, '', 'Ya, perusahaan dalam melaksanakan program Corporate Social Responsibility (CSR), melakukan kerjasama dengan instansi terkait dan terlampir dokumen pendukungnya.', 100),
(174, 0, 67, '', 'Ya, perusahaan dalam melaksanakan program Corporate Social Responsibility (CSR), melakukan kerjasama dengan instansi terkait tetapi tidak terlampir dokumen pendukungnya', 55),
(175, 0, 67, '', 'Tidak melakukan kerjasama.', 5),
(176, 0, 68, '', 'Ya, saat ini perusahaan mempunyai program pengelolaan lingkungan hidup, dan terlampir data pendukungnya', 100),
(177, 0, 68, '', 'Ya, saat ini perusahaan mempunyai program pengelolaan lingkungan hidup, tetapi tidak terlampir data pendukungnya', 55),
(178, 0, 68, '', 'Tidak mempunyai sama sekali', 5),
(179, 0, 69, '', 'Ya, perusahaan memiliki anggaran khusus untuk melaksanakan program pengelolaan lingkungan hidup, dan terlampir data pendukungnya', 100),
(180, 0, 69, '', 'Ya, perusahaan memiliki anggaran khusus untuk melaksanakan program pengelolaan lingkungan hidup, tetapi tidak terlampir data pendukungnya', 55),
(181, 0, 69, '', 'Tidak ada anggaran khusus sama sekali', 5),
(182, 0, 70, '', 'Ya, perusahaan melakukan pelembagaan untuk melaksanakan program pengelolaan lingkungan hidup dan terlampir data pendukungnya', 100),
(183, 0, 70, '', 'Ya, perusahaan melakukan pelembagaan untuk melaksanakan program pengelolaan lingkungan hidup, tetapi tidak terlampir data pendukungnya', 55),
(184, 0, 70, '', 'Tidak melakukan pelembagaan.', 5),
(185, 0, 72, '', 'Sangat baik dan berimbas pada masyarakat luas merasakan manfaatnya serta terlampir dokumen pelaksanaannya', 100),
(186, 0, 72, '', 'Sangat baik dan masyarakat sekitar perusahaan merasakan manfaatnya, terlampir dokumen pelaksanaannya', 67),
(187, 0, 72, '', 'Sangat baik dan masyarakat sekitar perusahaan merasakan manfaatnya, tetapi tidak terlampir dokumen pelaksanaannya', 33),
(188, 0, 72, '', 'Belum ada proses evaluasi sama sekali', 5),
(189, 0, 73, '', 'Ya, dalam pelaksanaan program pengelolaan lingkungan hidup, perusahaan memiliki wilayah sasaran atau binaan sangat luas, dan terlampir dokumen pendukungnya', 100),
(190, 0, 73, '', 'Ya, dalam pelaksanaan program pengelolaan lingkungan hidup, perusahaan memiliki wilayah sasaran atau binaan di sekitar perusahaan, terlampir dokumen pendukungnya', 67),
(191, 0, 73, '', 'Ya, dalam pelaksanaan program pengelolaan lingkungan hidup, perusahaan memiliki wilayah sasaran atau binaan, tetapi terbatas sasarannya terlampir dokumen pendukungnya', 33),
(192, 0, 73, '', 'Tidak memiliki wilayah sasaran sama sekali', 5),
(193, 0, 74, '', 'Ya, perusahaan kami melakukan pengolahan limbah sesuai dengan ketentuan yang berlaku dan mempunyai sendiri unit pengolah limbahnya.', 100),
(194, 0, 74, '', 'Ya, perusahaan kami melakukan pengolahan limbah sesuai dengan ketentuan yang berlaku, tetapi unit pengolah limbahnya milik Pemerintah daerah Kabupaten / Kota.', 55),
(195, 0, 74, '', 'Tidak melakukan pengolahan limbah serta tidak memiliki unit pengolah limbah.', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `questions_pma3`
--

CREATE TABLE IF NOT EXISTS `questions_pma3` (
`qp3_id` int(11) NOT NULL,
  `data_id` int(11) NOT NULL,
  `qp3_name` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `questions_pma3`
--

INSERT INTO `questions_pma3` (`qp3_id`, `data_id`, `qp3_name`) VALUES
(1, 0, 'Nama Instansi'),
(2, 0, 'Nama Pejabat Pengisi'),
(3, 0, 'Jabatan'),
(4, 0, 'Lama Menduduki Jabatan'),
(5, 0, 'Alamat Instansi'),
(6, 0, 'No Telp Instansi'),
(7, 0, 'No Fax Instansi'),
(8, 0, 'E-mail Instansi'),
(9, 0, 'No HP Penjabat Pengisi'),
(10, 5, 'Nama Instansi'),
(11, 5, 'Nama Pejabat Pengisi'),
(12, 5, 'Jabatan'),
(13, 5, 'Lama Menduduki Jabatan'),
(14, 5, 'Alamat Instansi'),
(15, 5, 'No Telp Instansi'),
(16, 5, 'No Fax Instansi'),
(17, 5, 'E-mail Instansi'),
(18, 5, 'No HP Penjabat Pengisi'),
(19, 6, 'Nama Instansi'),
(20, 6, 'Nama Pejabat Pengisi'),
(21, 6, 'Jabatan'),
(22, 6, 'Lama Menduduki Jabatan'),
(23, 6, 'Alamat Instansi'),
(24, 6, 'No Telp Instansi'),
(25, 6, 'No Fax Instansi'),
(26, 6, 'E-mail Instansi'),
(27, 6, 'No HP Penjabat Pengisi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `q_1_1_3`
--

CREATE TABLE IF NOT EXISTS `q_1_1_3` (
`q_id` int(11) NOT NULL,
  `q_name` text NOT NULL,
  `q_point1` int(11) NOT NULL,
  `q_point2` int(11) NOT NULL,
  `q_point3` int(11) NOT NULL,
  `data_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `q_1_1_3`
--

INSERT INTO `q_1_1_3` (`q_id`, `q_name`, `q_point1`, `q_point2`, `q_point3`, `data_id`) VALUES
(1, 'Lahan parkir yang luas dan tertata rapi', 100, 67, 33, 0),
(2, 'Ruang tunggu bersih ber AC dan nyaman', 100, 67, 33, 0),
(3, 'Help Desk (pusat informasi) tersedia', 100, 67, 33, 0),
(4, 'Ruang rapat yang representative', 100, 67, 33, 0),
(5, 'Ruang kerja yang representative', 100, 67, 33, 0),
(6, 'Pos jaga/ security yg memadai', 100, 67, 33, 0),
(7, 'Tempat ibadah', 100, 67, 33, 0),
(8, 'Tempat bermain anak', 100, 67, 33, 0),
(9, 'Metode Antrian', 100, 67, 33, 0),
(10, 'Toilet yg bersih dan rapi', 100, 67, 33, 0),
(11, 'Lahan parkir yang luas dan tertata rapi', 100, 67, 33, 4),
(12, 'Ruang tunggu bersih ber AC dan nyaman', 100, 67, 33, 4),
(13, 'Help Desk (pusat informasi) tersedia', 100, 67, 33, 4),
(14, 'Ruang rapat yang representative', 100, 67, 33, 4),
(15, 'Ruang kerja yang representative', 100, 67, 33, 4),
(16, 'Pos jaga/ security yg memadai', 100, 67, 33, 4),
(17, 'Tempat ibadah', 100, 67, 33, 4),
(18, 'Tempat bermain anak', 100, 67, 33, 4),
(19, 'Metode Antrian', 100, 67, 33, 4),
(20, 'Toilet yg bersih dan rapi', 100, 67, 33, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `q_1_2_2`
--

CREATE TABLE IF NOT EXISTS `q_1_2_2` (
`q_id` int(11) NOT NULL,
  `q_name` text NOT NULL,
  `data_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `q_1_2_2`
--

INSERT INTO `q_1_2_2` (`q_id`, `q_name`, `data_id`) VALUES
(1, 'NAMA', 0),
(2, 'JABATAN', 0),
(3, 'UMUR', 0),
(4, 'PENDIDIKAN', 0),
(5, 'SERTIFIKAT/ PENGHARGAAN PM', 0),
(6, 'NAMA', 4),
(7, 'JABATAN', 4),
(8, 'UMUR', 4),
(9, 'PENDIDIKAN', 4),
(10, 'SERTIFIKAT/ PENGHARGAAN PM', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `q_1_3_2`
--

CREATE TABLE IF NOT EXISTS `q_1_3_2` (
`q_id` int(11) NOT NULL,
  `q_name` text NOT NULL,
  `data_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `q_1_3_2`
--

INSERT INTO `q_1_3_2` (`q_id`, `q_name`, `data_id`) VALUES
(1, 'APBD Kabupaten / Kota', 0),
(2, 'Anggaran PM', 0),
(3, 'Prosentase APBD PM terhadap APBD Kabupaten/ Kota', 0),
(4, 'Pertumbuhan Anggaran PM', 0),
(5, 'APBD Kabupaten / Kota', 4),
(6, 'Anggaran PM', 4),
(7, 'Prosentase APBD PM terhadap APBD Kabupaten/ Kota', 4),
(8, 'Pertumbuhan Anggaran PM', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `q_1_3_3`
--

CREATE TABLE IF NOT EXISTS `q_1_3_3` (
`q_id` int(11) NOT NULL,
  `q_name` text NOT NULL,
  `data_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `q_1_3_3`
--

INSERT INTO `q_1_3_3` (`q_id`, `q_name`, `data_id`) VALUES
(1, 'Sasaran', 0),
(2, 'Program', 0),
(3, 'Kegiatan', 0),
(4, 'Indikator', 0),
(5, 'Sasaran', 4),
(6, 'Program', 4),
(7, 'Kegiatan', 4),
(8, 'Indikator', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `q_1_4_1`
--

CREATE TABLE IF NOT EXISTS `q_1_4_1` (
`q_id` int(11) NOT NULL,
  `q_name` text NOT NULL,
  `data_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `q_1_4_1`
--

INSERT INTO `q_1_4_1` (`q_id`, `q_name`, `data_id`) VALUES
(1, 'Kawasan Industri', 0),
(2, 'Kawasan Berikat', 0),
(3, 'Zona Industri', 0),
(4, 'Sentra Industri', 0),
(5, 'Kawasan Industri', 4),
(6, 'Kawasan Berikat', 4),
(7, 'Zona Industri', 4),
(8, 'Sentra Industri', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `q_1_4_2`
--

CREATE TABLE IF NOT EXISTS `q_1_4_2` (
`q_id` int(11) NOT NULL,
  `q_type` int(11) NOT NULL,
  `q_name` text NOT NULL,
  `q_kriteria_penilaian` text NOT NULL,
  `data_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `q_1_4_2`
--

INSERT INTO `q_1_4_2` (`q_id`, `q_type`, `q_name`, `q_kriteria_penilaian`, `data_id`) VALUES
(1, 0, 'Luas', '> 50 Hektar', 0),
(2, 0, 'Unit Pengolahan Limbah', '1 Unit', 0),
(3, 0, 'Ruang Terbuka Hijau', '> 30%', 0),
(4, 1, 'Infrastruktur :', '', 0),
(5, 0, 'Luas', '> 50 Hektar', 4),
(6, 0, 'Unit Pengolahan Limbah', '1 Unit', 4),
(7, 0, 'Ruang Terbuka Hijau', '> 30%', 4),
(8, 1, 'Infrastruktur :', '', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `q_1_4_2_details`
--

CREATE TABLE IF NOT EXISTS `q_1_4_2_details` (
`q_id` int(11) NOT NULL,
  `q_parent_id` int(11) NOT NULL,
  `q_name` text NOT NULL,
  `q_kriteria_penilaian` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `q_1_4_2_details`
--

INSERT INTO `q_1_4_2_details` (`q_id`, `q_parent_id`, `q_name`, `q_kriteria_penilaian`) VALUES
(1, 4, 'Jalan', 'Kapasitas Jalan (20% dari luas area).'),
(2, 4, 'Listrik', 'Kwh.'),
(3, 4, 'Gas', 'Ada / Tidak.'),
(4, 4, 'Telepon', 'Ada / Tidak.'),
(5, 4, 'Sampah (Depo/ TPS*)', 'Ada / Tidak.'),
(6, 4, 'Keamanan', 'Ada / Tidak.'),
(7, 4, 'Instalansi Pengolahan\r\nAir Bersih (IPAB)', 'Ada / Tidak.'),
(8, 8, 'Jalan', 'Kapasitas Jalan (20% dari luas area).'),
(9, 8, 'Listrik', 'Kwh.'),
(10, 8, 'Gas', 'Ada / Tidak.'),
(11, 8, 'Telepon', 'Ada / Tidak.'),
(12, 8, 'Sampah (Depo/ TPS*)', 'Ada / Tidak.'),
(13, 8, 'Keamanan', 'Ada / Tidak.'),
(14, 8, 'Instalansi Pengolahan\r\nAir Bersih (IPAB)', 'Ada / Tidak.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `q_2_1_1`
--

CREATE TABLE IF NOT EXISTS `q_2_1_1` (
`q_id` int(11) NOT NULL,
  `q_name` text NOT NULL,
  `data_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `q_2_1_1`
--

INSERT INTO `q_2_1_1` (`q_id`, `q_name`, `data_id`) VALUES
(1, 'Program/ Kegiatan Promosi Penanaman Modal bersama Dinas/ Instansi Lain.', 0),
(2, 'Program/ Kegiatan Promosi Penanaman Modal mandiri dilaksanakan Instansi Penanaman Modal Kabupaten / Kota & PTSP.', 0),
(3, 'Program/ Kegiatan Promosi Penanaman Modal bersama Dinas/ Instansi Lain.', 4),
(4, 'Program/ Kegiatan Promosi Penanaman Modal mandiri dilaksanakan Instansi Penanaman Modal Kabupaten / Kota & PTSP.', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `q_2_1_2`
--

CREATE TABLE IF NOT EXISTS `q_2_1_2` (
`q_id` int(11) NOT NULL,
  `q_type` int(11) NOT NULL,
  `q_name` text NOT NULL,
  `data_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `q_2_1_2`
--

INSERT INTO `q_2_1_2` (`q_id`, `q_type`, `q_name`, `data_id`) VALUES
(1, 1, 'Pameran Peluang Penanaman Modal', 0),
(2, 0, 'Materi yang dipamerkan (terlampir)', 0),
(3, 0, 'Realisasi hasil pameran (Laporan terlampir)', 0),
(4, 1, 'Pameran Peluang Penanaman Modal', 4),
(5, 0, 'Materi yang dipamerkan (terlampir)', 4),
(6, 0, 'Realisasi hasil pameran (Laporan terlampir)', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `q_2_1_2_details`
--

CREATE TABLE IF NOT EXISTS `q_2_1_2_details` (
`q_id` int(11) NOT NULL,
  `q_type` int(11) NOT NULL,
  `q_parent_id` int(11) NOT NULL,
  `q_name` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `q_2_1_2_details`
--

INSERT INTO `q_2_1_2_details` (`q_id`, `q_type`, `q_parent_id`, `q_name`) VALUES
(1, 1, 1, 'Internasional'),
(2, 0, 1, 'Nasional'),
(3, 0, 1, 'Provinsi'),
(4, 0, 1, 'Kabupaten / Kota'),
(5, 1, 4, 'Internasional'),
(6, 0, 4, 'Nasional'),
(7, 0, 4, 'Provinsi'),
(8, 0, 4, 'Kabupaten / Kota');

-- --------------------------------------------------------

--
-- Struktur dari tabel `q_2_1_4`
--

CREATE TABLE IF NOT EXISTS `q_2_1_4` (
`q_id` int(11) NOT NULL,
  `q_name` text NOT NULL,
  `q_type` int(11) NOT NULL,
  `q_point1` int(11) NOT NULL,
  `q_point2` int(11) NOT NULL,
  `q_point3` int(11) NOT NULL,
  `data_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `q_2_1_4`
--

INSERT INTO `q_2_1_4` (`q_id`, `q_name`, `q_type`, `q_point1`, `q_point2`, `q_point3`, `data_id`) VALUES
(1, 'Ruang Display/ Pamer Potensi dimiliki SKPD lain', 0, 5, 55, 100, 0),
(2, 'Ruang Display/ Pamer Potensi milik IPMK/ PTSP', 0, 100, 55, 5, 0),
(3, 'Produk yang dipamerkan', 0, 100, 55, 5, 0),
(4, 'Rata-rata jumlah pengunjung.', 1, 0, 0, 0, 0),
(5, 'Ruang Display/ Pamer Potensi dimiliki SKPD lain', 0, 5, 55, 100, 4),
(6, 'Ruang Display/ Pamer Potensi milik IPMK/ PTSP', 0, 100, 55, 5, 4),
(7, 'Produk yang dipamerkan', 0, 100, 55, 5, 4),
(8, 'Rata-rata jumlah pengunjung.', 1, 0, 0, 0, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `q_2_1_5`
--

CREATE TABLE IF NOT EXISTS `q_2_1_5` (
`q_id` int(11) NOT NULL,
  `q_name` text NOT NULL,
  `q_point1` int(11) NOT NULL,
  `q_point2` int(11) NOT NULL,
  `q_point3` int(11) NOT NULL,
  `data_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `q_2_1_5`
--

INSERT INTO `q_2_1_5` (`q_id`, `q_name`, `q_point1`, `q_point2`, `q_point3`, `data_id`) VALUES
(1, 'Kegiatan bussiness gathering atau bussiness friendly *', 100, 55, 5, 0),
(2, 'Kegiatan bussiness gathering atau bussiness friendly *', 100, 55, 5, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `q_2_2`
--

CREATE TABLE IF NOT EXISTS `q_2_2` (
`q_id` int(11) NOT NULL,
  `q_name` text NOT NULL,
  `q_point1` int(11) NOT NULL,
  `q_point2` int(11) NOT NULL,
  `q_point3` int(11) NOT NULL,
  `q_point4` int(11) NOT NULL,
  `data_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `q_2_2`
--

INSERT INTO `q_2_2` (`q_id`, `q_name`, `q_point1`, `q_point2`, `q_point3`, `q_point4`, `data_id`) VALUES
(1, 'Leaflet/ brosur/ profil potensi Penanaman Modal*', 100, 75, 50, 25, 0),
(2, 'Iklan di koran/ televisi maupun media lain *', 100, 75, 50, 25, 0),
(3, 'Buku profil potensi dan peluang investasi *', 100, 75, 50, 25, 0),
(4, 'VCD peluang/ potensi investasi daerah *', 100, 75, 50, 25, 0),
(5, 'Web-site Kabupaten/ Kota *', 100, 75, 50, 25, 0),
(6, 'Web-site IPMK/ PTSP *', 100, 75, 50, 25, 0),
(7, 'Telepon hot-line/ call center *', 100, 75, 50, 25, 0),
(8, 'Kerja sama regional antar Kabupaten/ Kota *', 100, 75, 50, 25, 0),
(9, 'Kerja sama dengan luar negeri *', 100, 75, 50, 25, 0),
(10, 'Leaflet/ brosur/ profil potensi Penanaman Modal *', 100, 75, 50, 25, 4),
(11, 'Iklan di koran/ televisi maupun media lain *', 100, 75, 50, 25, 4),
(12, 'Buku profil potensi dan peluang investasi *', 100, 75, 50, 25, 4),
(13, 'VCD peluang/ potensi investasi daerah *', 100, 75, 50, 25, 4),
(14, 'Web-site Kabupaten/ Kota *', 100, 75, 50, 25, 4),
(15, 'Web-site IPMK/ PTSP *', 100, 75, 50, 25, 4),
(16, 'Telepon hot-line/ call center *', 100, 75, 50, 25, 4),
(17, 'Kerja sama regional antar Kabupaten/ Kota *', 100, 75, 50, 25, 4),
(18, 'Kerja sama dengan luar negeri *', 100, 75, 50, 25, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `q_3_2_1`
--

CREATE TABLE IF NOT EXISTS `q_3_2_1` (
`q_id` int(11) NOT NULL,
  `q_name` text NOT NULL,
  `q_point1` int(11) NOT NULL,
  `q_point2` int(11) NOT NULL,
  `q_point3` int(11) NOT NULL,
  `data_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `q_3_2_1`
--

INSERT INTO `q_3_2_1` (`q_id`, `q_name`, `q_point1`, `q_point2`, `q_point3`, `data_id`) VALUES
(1, 'Membantu memberikan informasi terkait ketersediaan lahan, listrik, peraturan dan informasi lain yang dibutuhkan', 100, 67, 33, 0),
(2, 'Melakukan korespondensi surat maupun komunikasi langsung dengan calon investor', 100, 67, 33, 0),
(3, 'Mendampingi calon investor ke lapangan', 100, 67, 33, 0),
(4, 'Mengadakan pertemuan dengan Instansi Pemerintah terkait untuk membahas rencana investasi', 100, 67, 33, 0),
(5, 'Membantu memberikan informasi terkait ketersediaan lahan, listrik, peraturan dan informasi lain yang dibutuhkan', 100, 67, 33, 4),
(6, 'Melakukan korespondensi surat maupun komunikasi langsung dengan calon investor', 100, 67, 33, 4),
(7, 'Mendampingi calon investor ke lapangan', 100, 67, 33, 4),
(8, 'Mengadakan pertemuan dengan Instansi Pemerintah terkait untuk membahas rencana investasi', 100, 67, 33, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `q_3_4_2_2`
--

CREATE TABLE IF NOT EXISTS `q_3_4_2_2` (
`q_id` int(11) NOT NULL,
  `q_name` text NOT NULL,
  `q_weight` int(11) NOT NULL,
  `data_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `q_3_4_2_2`
--

INSERT INTO `q_3_4_2_2` (`q_id`, `q_name`, `q_weight`, `data_id`) VALUES
(1, 'Daerah Metro (berdasarkan jumlah penduduk > 1 juta penduduk)', 0, 0),
(2, 'Daerah Besar (berdasarkan jumlah penduduk 500 ribu - 1 juta penduduk)', 0, 0),
(3, 'Daerah Sedang (berdasarkan jumlah penduduk 100 ribu - 500 ribu penduduk)', 0, 0),
(4, 'Daerah Kecil (berdasarkan jumlah penduduk 20 ribu - 100 ribu penduduk)', 0, 0),
(5, 'Daerah Metro (berdasarkan jumlah penduduk > 1 juta penduduk)', 0, 4),
(6, 'Daerah Besar (berdasarkan jumlah penduduk 500 ribu - 1 juta penduduk)', 0, 4),
(7, 'Daerah Sedang (berdasarkan jumlah penduduk 100 ribu - 500 ribu penduduk)', 0, 4),
(8, 'Daerah Kecil (berdasarkan jumlah penduduk 20 ribu - 100 ribu penduduk)', 0, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `q_3_4_2_2_details`
--

CREATE TABLE IF NOT EXISTS `q_3_4_2_2_details` (
`q_id` int(11) NOT NULL,
  `q_parent_id` int(11) NOT NULL,
  `q_name` text NOT NULL,
  `q_point` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `q_3_4_2_2_details`
--

INSERT INTO `q_3_4_2_2_details` (`q_id`, `q_parent_id`, `q_name`, `q_point`) VALUES
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
(12, 4, '< 100 liter/detik', 5),
(13, 5, '> 3.000 liter/detik', 100),
(14, 5, '1.000 - 3.000 liter/detik', 55),
(15, 5, '< 1.000 liter/detik', 5),
(16, 6, '> 1.500 liter/detik', 100),
(17, 6, '750 - 1.500 liter/detik', 55),
(18, 6, '< 750 liter/detik', 5),
(19, 7, '> 1.000 liter/detik', 100),
(20, 7, '500 - 1.000 liter/detik', 55),
(21, 7, '< 500 liter/detik', 5),
(22, 8, '> 300 liter/detik', 100),
(23, 8, '100 - 300 liter/detik', 55),
(24, 8, '< 100 liter/detik', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `q_3_6`
--

CREATE TABLE IF NOT EXISTS `q_3_6` (
`q_id` int(11) NOT NULL,
  `q_name` text NOT NULL,
  `q_point1` int(11) NOT NULL,
  `q_point2` int(11) NOT NULL,
  `q_point3` int(11) NOT NULL,
  `data_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `q_3_6`
--

INSERT INTO `q_3_6` (`q_id`, `q_name`, `q_point1`, `q_point2`, `q_point3`, `data_id`) VALUES
(1, 'Melakukan kunjungan lapangan meninjau perusahaan', 100, 67, 33, 0),
(2, 'Melakukan evaluasi pelaksanaan kegiatan realisasi investasi', 100, 67, 33, 0),
(3, 'Membantu perusahaan menyelesaikan masalah (konseling, surat, dll)', 100, 67, 33, 0),
(4, 'Melakukan kunjungan lapangan meninjau perusahaan', 100, 67, 33, 4),
(5, 'Melakukan evaluasi pelaksanaan kegiatan realisasi investasi', 100, 67, 33, 4),
(6, 'Membantu perusahaan menyelesaikan masalah (konseling, surat, dll)', 100, 67, 33, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `q_4_3`
--

CREATE TABLE IF NOT EXISTS `q_4_3` (
`q_id` int(11) NOT NULL,
  `q_name` text NOT NULL,
  `data_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `q_4_3`
--

INSERT INTO `q_4_3` (`q_id`, `q_name`, `data_id`) VALUES
(1, '2012', 0),
(2, '2013', 0),
(3, '2014 / SM I & SM II', 0),
(4, '2012', 4),
(5, '2013', 4),
(6, '2014 / SM I & SM II', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_categories`
--

CREATE TABLE IF NOT EXISTS `sub_categories` (
`sub_cat_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_cat_parent_id` int(11) NOT NULL,
  `sub_cat_number` varchar(10) NOT NULL,
  `sub_cat_name` text NOT NULL,
  `sub_cat_description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sub_categories`
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
-- Struktur dari tabel `users`
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `user_type_id`, `user_login`, `user_password`, `user_name`, `user_code`, `user_phone`, `user_img`, `user_active_status`) VALUES
(11, 1, 'melon', '3a2cf27458c9aa3e358f8fc0f002bff6', 'melon', 'A0001', '03125435432', '', 1),
(14, 2, 'erma', '81dc9bdb52d04dc20036dbd8313ed055', 'Erma Diah', '', '-', 'titologo smkn2d.jpg', 1),
(15, 3, 'mei', '81dc9bdb52d04dc20036dbd8313ed055', 'Mei', '', '-', 'Frozen-image-frozen-36312536-515-718.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
 ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `answers1`
--
ALTER TABLE `answers1`
 ADD PRIMARY KEY (`answer1_id`);

--
-- Indexes for table `answers1_details`
--
ALTER TABLE `answers1_details`
 ADD PRIMARY KEY (`answer1_detail_id`);

--
-- Indexes for table `answers2`
--
ALTER TABLE `answers2`
 ADD PRIMARY KEY (`answer2_id`);

--
-- Indexes for table `answers2_details`
--
ALTER TABLE `answers2_details`
 ADD PRIMARY KEY (`answer2_detail_id`);

--
-- Indexes for table `answers3`
--
ALTER TABLE `answers3`
 ADD PRIMARY KEY (`answer3_id`);

--
-- Indexes for table `answers_pma`
--
ALTER TABLE `answers_pma`
 ADD PRIMARY KEY (`answer_pma_id`);

--
-- Indexes for table `answers_pma1`
--
ALTER TABLE `answers_pma1`
 ADD PRIMARY KEY (`answer_pma1_id`);

--
-- Indexes for table `answers_pma2`
--
ALTER TABLE `answers_pma2`
 ADD PRIMARY KEY (`answer_pma2_id`);

--
-- Indexes for table `answers_pma3`
--
ALTER TABLE `answers_pma3`
 ADD PRIMARY KEY (`answer_pma3_id`);

--
-- Indexes for table `answers_qp_132`
--
ALTER TABLE `answers_qp_132`
 ADD PRIMARY KEY (`answer_qp_132_id`);

--
-- Indexes for table `answers_qp_132_details`
--
ALTER TABLE `answers_qp_132_details`
 ADD PRIMARY KEY (`answer_qp_132_detail_id`);

--
-- Indexes for table `answers_qp_133`
--
ALTER TABLE `answers_qp_133`
 ADD PRIMARY KEY (`answer_qp_133_id`);

--
-- Indexes for table `answers_qp_133_details`
--
ALTER TABLE `answers_qp_133_details`
 ADD PRIMARY KEY (`answers_qp_133_detail_id`);

--
-- Indexes for table `answers_qp_211`
--
ALTER TABLE `answers_qp_211`
 ADD PRIMARY KEY (`answer_qp_211_id`);

--
-- Indexes for table `answers_qp_211_details`
--
ALTER TABLE `answers_qp_211_details`
 ADD PRIMARY KEY (`answer_qp_211_detail_id`);

--
-- Indexes for table `answers_qp_311`
--
ALTER TABLE `answers_qp_311`
 ADD PRIMARY KEY (`answer_qp_311_id`);

--
-- Indexes for table `answers_qp_311_details`
--
ALTER TABLE `answers_qp_311_details`
 ADD PRIMARY KEY (`answer_qp_311_detail_id`);

--
-- Indexes for table `a_1_4_2`
--
ALTER TABLE `a_1_4_2`
 ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `a_1_4_2_details`
--
ALTER TABLE `a_1_4_2_details`
 ADD PRIMARY KEY (`a_detail_id`);

--
-- Indexes for table `a_2_1_1`
--
ALTER TABLE `a_2_1_1`
 ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `a_2_1_1_details`
--
ALTER TABLE `a_2_1_1_details`
 ADD PRIMARY KEY (`a_detail_id`);

--
-- Indexes for table `a_2_1_4`
--
ALTER TABLE `a_2_1_4`
 ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `a_2_1_5`
--
ALTER TABLE `a_2_1_5`
 ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `a_2_2`
--
ALTER TABLE `a_2_2`
 ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `a_3_2_1`
--
ALTER TABLE `a_3_2_1`
 ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `a_3_4_2_2`
--
ALTER TABLE `a_3_4_2_2`
 ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `a_3_6`
--
ALTER TABLE `a_3_6`
 ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `categories_pma`
--
ALTER TABLE `categories_pma`
 ADD PRIMARY KEY (`cat_pma_id`);

--
-- Indexes for table `kuisioner`
--
ALTER TABLE `kuisioner`
 ADD PRIMARY KEY (`kuisioner_id`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
 ADD PRIMARY KEY (`participant_id`);

--
-- Indexes for table `participants1`
--
ALTER TABLE `participants1`
 ADD PRIMARY KEY (`participant1_id`);

--
-- Indexes for table `participants1_details`
--
ALTER TABLE `participants1_details`
 ADD PRIMARY KEY (`participant1_detail_id`);

--
-- Indexes for table `participants_pma1`
--
ALTER TABLE `participants_pma1`
 ADD PRIMARY KEY (`participant_pma1_id`);

--
-- Indexes for table `phase`
--
ALTER TABLE `phase`
 ADD PRIMARY KEY (`phase_id`);

--
-- Indexes for table `qp_1_3_2`
--
ALTER TABLE `qp_1_3_2`
 ADD PRIMARY KEY (`qp_id`);

--
-- Indexes for table `qp_1_3_3`
--
ALTER TABLE `qp_1_3_3`
 ADD PRIMARY KEY (`qp_id`);

--
-- Indexes for table `qp_2_1_1`
--
ALTER TABLE `qp_2_1_1`
 ADD PRIMARY KEY (`qp_id`);

--
-- Indexes for table `qp_3_1_1`
--
ALTER TABLE `qp_3_1_1`
 ADD PRIMARY KEY (`qp_id`);

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
 ADD PRIMARY KEY (`q3_id`);

--
-- Indexes for table `questions_pma1`
--
ALTER TABLE `questions_pma1`
 ADD PRIMARY KEY (`qp1_id`);

--
-- Indexes for table `questions_pma1_details`
--
ALTER TABLE `questions_pma1_details`
 ADD PRIMARY KEY (`qp1d_id`);

--
-- Indexes for table `questions_pma2`
--
ALTER TABLE `questions_pma2`
 ADD PRIMARY KEY (`qp2_id`);

--
-- Indexes for table `questions_pma2_details`
--
ALTER TABLE `questions_pma2_details`
 ADD PRIMARY KEY (`qp2d_id`);

--
-- Indexes for table `questions_pma3`
--
ALTER TABLE `questions_pma3`
 ADD PRIMARY KEY (`qp3_id`);

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
-- Indexes for table `q_3_4_2_2_details`
--
ALTER TABLE `q_3_4_2_2_details`
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
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `answers1`
--
ALTER TABLE `answers1`
MODIFY `answer1_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `answers1_details`
--
ALTER TABLE `answers1_details`
MODIFY `answer1_detail_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `answers2`
--
ALTER TABLE `answers2`
MODIFY `answer2_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `answers2_details`
--
ALTER TABLE `answers2_details`
MODIFY `answer2_detail_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `answers3`
--
ALTER TABLE `answers3`
MODIFY `answer3_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `answers_pma`
--
ALTER TABLE `answers_pma`
MODIFY `answer_pma_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `answers_pma1`
--
ALTER TABLE `answers_pma1`
MODIFY `answer_pma1_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `answers_pma2`
--
ALTER TABLE `answers_pma2`
MODIFY `answer_pma2_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=141;
--
-- AUTO_INCREMENT for table `answers_pma3`
--
ALTER TABLE `answers_pma3`
MODIFY `answer_pma3_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `answers_qp_132`
--
ALTER TABLE `answers_qp_132`
MODIFY `answer_qp_132_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `answers_qp_132_details`
--
ALTER TABLE `answers_qp_132_details`
MODIFY `answer_qp_132_detail_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `answers_qp_133`
--
ALTER TABLE `answers_qp_133`
MODIFY `answer_qp_133_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `answers_qp_133_details`
--
ALTER TABLE `answers_qp_133_details`
MODIFY `answers_qp_133_detail_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `answers_qp_211`
--
ALTER TABLE `answers_qp_211`
MODIFY `answer_qp_211_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `answers_qp_211_details`
--
ALTER TABLE `answers_qp_211_details`
MODIFY `answer_qp_211_detail_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `answers_qp_311`
--
ALTER TABLE `answers_qp_311`
MODIFY `answer_qp_311_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `answers_qp_311_details`
--
ALTER TABLE `answers_qp_311_details`
MODIFY `answer_qp_311_detail_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `a_1_4_2`
--
ALTER TABLE `a_1_4_2`
MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `a_1_4_2_details`
--
ALTER TABLE `a_1_4_2_details`
MODIFY `a_detail_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `a_2_1_1`
--
ALTER TABLE `a_2_1_1`
MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `a_2_1_1_details`
--
ALTER TABLE `a_2_1_1_details`
MODIFY `a_detail_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `a_2_1_4`
--
ALTER TABLE `a_2_1_4`
MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `a_2_1_5`
--
ALTER TABLE `a_2_1_5`
MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `a_2_2`
--
ALTER TABLE `a_2_2`
MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `a_3_2_1`
--
ALTER TABLE `a_3_2_1`
MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `a_3_4_2_2`
--
ALTER TABLE `a_3_4_2_2`
MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `a_3_6`
--
ALTER TABLE `a_3_6`
MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `categories_pma`
--
ALTER TABLE `categories_pma`
MODIFY `cat_pma_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kuisioner`
--
ALTER TABLE `kuisioner`
MODIFY `kuisioner_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
MODIFY `participant_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `participants1`
--
ALTER TABLE `participants1`
MODIFY `participant1_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `participants1_details`
--
ALTER TABLE `participants1_details`
MODIFY `participant1_detail_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `participants_pma1`
--
ALTER TABLE `participants_pma1`
MODIFY `participant_pma1_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `phase`
--
ALTER TABLE `phase`
MODIFY `phase_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `qp_1_3_2`
--
ALTER TABLE `qp_1_3_2`
MODIFY `qp_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `qp_1_3_3`
--
ALTER TABLE `qp_1_3_3`
MODIFY `qp_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `qp_2_1_1`
--
ALTER TABLE `qp_2_1_1`
MODIFY `qp_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `qp_3_1_1`
--
ALTER TABLE `qp_3_1_1`
MODIFY `qp_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `questions1`
--
ALTER TABLE `questions1`
MODIFY `q1_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `questions1_details`
--
ALTER TABLE `questions1_details`
MODIFY `q1d_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `questions2`
--
ALTER TABLE `questions2`
MODIFY `q2_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT for table `questions2_details`
--
ALTER TABLE `questions2_details`
MODIFY `q2d_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=209;
--
-- AUTO_INCREMENT for table `questions3`
--
ALTER TABLE `questions3`
MODIFY `q3_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `questions_pma1`
--
ALTER TABLE `questions_pma1`
MODIFY `qp1_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `questions_pma1_details`
--
ALTER TABLE `questions_pma1_details`
MODIFY `qp1d_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `questions_pma2`
--
ALTER TABLE `questions_pma2`
MODIFY `qp2_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `questions_pma2_details`
--
ALTER TABLE `questions_pma2_details`
MODIFY `qp2d_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=196;
--
-- AUTO_INCREMENT for table `questions_pma3`
--
ALTER TABLE `questions_pma3`
MODIFY `qp3_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `q_1_1_3`
--
ALTER TABLE `q_1_1_3`
MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `q_1_2_2`
--
ALTER TABLE `q_1_2_2`
MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `q_1_3_2`
--
ALTER TABLE `q_1_3_2`
MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `q_1_3_3`
--
ALTER TABLE `q_1_3_3`
MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `q_1_4_1`
--
ALTER TABLE `q_1_4_1`
MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `q_1_4_2`
--
ALTER TABLE `q_1_4_2`
MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `q_1_4_2_details`
--
ALTER TABLE `q_1_4_2_details`
MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `q_2_1_1`
--
ALTER TABLE `q_2_1_1`
MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `q_2_1_2`
--
ALTER TABLE `q_2_1_2`
MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `q_2_1_2_details`
--
ALTER TABLE `q_2_1_2_details`
MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `q_2_1_4`
--
ALTER TABLE `q_2_1_4`
MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `q_2_1_5`
--
ALTER TABLE `q_2_1_5`
MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `q_2_2`
--
ALTER TABLE `q_2_2`
MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `q_3_2_1`
--
ALTER TABLE `q_3_2_1`
MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `q_3_4_2_2`
--
ALTER TABLE `q_3_4_2_2`
MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `q_3_4_2_2_details`
--
ALTER TABLE `q_3_4_2_2_details`
MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `q_3_6`
--
ALTER TABLE `q_3_6`
MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `q_4_3`
--
ALTER TABLE `q_4_3`
MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
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
