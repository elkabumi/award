-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 29, 2014 at 10:27 
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `award`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers_pma`
--

CREATE TABLE IF NOT EXISTS `answers_pma` (
  `answer_pma_id` int(11) NOT NULL AUTO_INCREMENT,
  `data_id` int(11) NOT NULL,
  `participant_id` int(11) NOT NULL,
  `participant_name` text NOT NULL,
  `assessor_name` varchar(100) NOT NULL,
  `answer_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `phase_id` int(11) NOT NULL,
  PRIMARY KEY (`answer_pma_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `answers_pma`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--


CREATE TABLE IF NOT EXISTS `answers_pma1` (
  `answer_pma1_id` int(11) NOT NULL AUTO_INCREMENT,
  `answer_pma_id` int(11) NOT NULL,
  `qp1_id` int(11) NOT NULL,
  `answer_pma1_question` varchar(200) NOT NULL,
  `answer_pma1_answer` text NOT NULL,
  PRIMARY KEY (`answer_pma1_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `answers_pma1`
--


-- --------------------------------------------------------

--
-- Table structure for table `answers_pma2`
--

CREATE TABLE IF NOT EXISTS `answers_pma2` (
  `answer_pma2_id` int(11) NOT NULL AUTO_INCREMENT,
  `answer_pma_id` int(11) NOT NULL,
  `qp2_id` int(11) NOT NULL,
  `qp2_weight` int(11) NOT NULL,
  `qp2d_id` int(11) NOT NULL,
  `answer_pma2_point` int(11) NOT NULL,
  `answer_pma2_point_value` int(11) NOT NULL,
  `answer_pma2_attachment` int(11) NOT NULL,
  PRIMARY KEY (`answer_pma2_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `answers_pma2`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers_pma3`
--

CREATE TABLE IF NOT EXISTS `answers_pma3` (
  `answer_pma3_id` int(11) NOT NULL AUTO_INCREMENT,
  `answer_pma_id` int(11) NOT NULL,
  `qp3_id` int(11) NOT NULL,
  `answer_pma3_question` varchar(200) NOT NULL,
  `answer_pma3_answer` text NOT NULL,
  PRIMARY KEY (`answer_pma3_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18446744073709551615 ;

--
-- Dumping data for table `answers_pma3`
--


-- --------------------------------------------------------

--
-- Table structure for table `answers_qp_132`
--

CREATE TABLE IF NOT EXISTS `answers_qp_132` (
  `answer_qp_132_id` int(11) NOT NULL AUTO_INCREMENT,
  `answer_pma_id` int(11) NOT NULL,
  `qp2_id` int(11) NOT NULL,
  `qp2_weight` int(11) NOT NULL,
  `answer_qp_132_answer` int(11) NOT NULL,
  `answer_qp_132_point` int(11) NOT NULL,
  `answer_qp_132_point_value` int(11) NOT NULL,
  `answer_pma2_attachment` int(11) NOT NULL,
  PRIMARY KEY (`answer_qp_132_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `answers_qp_132`
--


-- --------------------------------------------------------

--
-- Table structure for table `answers_qp_132_details`
--

CREATE TABLE IF NOT EXISTS `answers_qp_132_details` (
  `answer_qp_132_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `answer_qp_132_id` int(11) NOT NULL,
  `qp_id` int(11) NOT NULL,
  `answer_number` int(11) NOT NULL,
  `answer_qp_132_detail_type` int(11) NOT NULL,
  `answer_qp_132_detail_answer` int(11) NOT NULL,
  PRIMARY KEY (`answer_qp_132_detail_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `answers_qp_132_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `answers_qp_133`
--

CREATE TABLE IF NOT EXISTS `answers_qp_133` (
  `answer_qp_133_id` int(11) NOT NULL AUTO_INCREMENT,
  `answer_pma_id` int(11) NOT NULL,
  `qp2_id` int(11) NOT NULL,
  `qp2_weight` int(11) NOT NULL,
  `answer_qp_133_answer` int(11) NOT NULL,
  `answer_qp_133_point` int(11) NOT NULL,
  `answer_qp_133_point_value` int(11) NOT NULL,
  `answer_pma2_attachment` int(11) NOT NULL,
  PRIMARY KEY (`answer_qp_133_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `answers_qp_133`
--


-- --------------------------------------------------------

--
-- Table structure for table `answers_qp_133_details`
--

CREATE TABLE IF NOT EXISTS `answers_qp_133_details` (
  `answers_qp_133_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `answer_qp_133_id` int(11) NOT NULL,
  `qp_id` int(11) NOT NULL,
  `answer_number` int(11) NOT NULL,
  `answer_qp_133_detail_type` int(11) NOT NULL,
  `answer_qp_133_detail_answer` int(11) NOT NULL,
  PRIMARY KEY (`answers_qp_133_detail_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `answers_qp_133_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `answers_qp_211`
--

CREATE TABLE IF NOT EXISTS `answers_qp_211` (
  `answer_qp_211_id` int(11) NOT NULL AUTO_INCREMENT,
  `answer_pma_id` int(11) NOT NULL,
  `qp2_id` int(11) NOT NULL,
  `qp2_weight` int(11) NOT NULL,
  `answer_qp_211_answer` int(11) NOT NULL,
  `answer_qp_211_point` int(11) NOT NULL,
  `answer_qp_211_point_value` int(11) NOT NULL,
  `answer_pma2_attachment` int(11) NOT NULL,
  PRIMARY KEY (`answer_qp_211_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `answers_qp_211`
--


-- --------------------------------------------------------

--
-- Table structure for table `answers_qp_211_details`
--

CREATE TABLE IF NOT EXISTS `answers_qp_211_details` (
  `answer_qp_211_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `answer_qp_211_id` int(11) NOT NULL,
  `answer_qp_211_detail_question` varchar(200) NOT NULL,
  `answer_qp_211_detail_answer` int(11) NOT NULL,
  PRIMARY KEY (`answer_qp_211_detail_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `answers_qp_211_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `answers_qp_311`
--

CREATE TABLE IF NOT EXISTS `answers_qp_311` (
  `answer_qp_311_id` int(11) NOT NULL AUTO_INCREMENT,
  `answer_pma_id` int(11) NOT NULL,
  `qp2_id` int(11) NOT NULL,
  `qp2_weight` int(11) NOT NULL,
  `answer_qp_311_answer` int(11) NOT NULL,
  `answer_qp_311_point` int(11) NOT NULL,
  `answer_qp_311_point_value` int(11) NOT NULL,
  `answer_pma2_attachment` int(11) NOT NULL,
  PRIMARY KEY (`answer_qp_311_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `answers_qp_311`
--


-- --------------------------------------------------------

--
-- Table structure for table `answers_qp_311_details`
--

CREATE TABLE IF NOT EXISTS `answers_qp_311_details` (
  `answer_qp_311_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `answer_qp_311_id` int(11) NOT NULL,
  `qp_id` int(11) NOT NULL,
  `answer_qp_311_detail_type` int(11) NOT NULL,
  `answer_qp_311_detail_answer` int(11) NOT NULL,
  PRIMARY KEY (`answer_qp_311_detail_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `answers_qp_311_details`
--
-- --------------------------------------------------------

--
-- Table structure for table `categories_pma`
--

CREATE TABLE IF NOT EXISTS `categories_pma` (
  `cat_pma_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_pma_number` varchar(50) NOT NULL,
  `cat_pma_name` varchar(200) NOT NULL,
  PRIMARY KEY (`cat_pma_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `categories_pma`
--

INSERT INTO `categories_pma` (`cat_pma_id`, `cat_pma_number`, `cat_pma_name`) VALUES
(1, 'B', 'kinerja pelaporan kegiatan penanaman modal (LKPM)'),
(2, 'C', 'pelaksanaan corporate social responsibility (CSR)'),
(3, 'D', 'pengelolaan lingkungan hidup');

-- --------------------------------------------------------
--
-- Table structure for table `participants`
--

CREATE TABLE IF NOT EXISTS `participants` (
  `participant_id` int(11) NOT NULL AUTO_INCREMENT,
  `participant_name` varchar(100) NOT NULL,
  `participant_date` date NOT NULL,
  `participant_description` text NOT NULL,
  `participant_type` int(11) NOT NULL,
  PRIMARY KEY (`participant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`participant_id`, `participant_name`, `participant_date`, `participant_description`, `participant_type`) VALUES
(1, 'pt anugrah', '2014-12-07', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `participants_pma1`
--

CREATE TABLE IF NOT EXISTS `participants_pma1` (
  `participant_pma1_id` int(11) NOT NULL AUTO_INCREMENT,
  `qp1_id` int(11) NOT NULL,
  `participant_pma1_question` text NOT NULL,
  `participant_pma1_answer` text NOT NULL,
  `participant_id` int(11) NOT NULL,
  PRIMARY KEY (`participant_pma1_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `participants_pma1`
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
CREATE TABLE IF NOT EXISTS `qp_1_3_2` (
  `qp_id` int(11) NOT NULL AUTO_INCREMENT,
  `qp_name` text NOT NULL,
  `qp_type` int(11) NOT NULL,
  `data_id` int(11) NOT NULL,
  PRIMARY KEY (`qp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `qp_1_3_2`
--

INSERT INTO `qp_1_3_2` (`qp_id`, `qp_name`, `qp_type`, `data_id`) VALUES
(1, 'Tahun', 0, 0),
(2, 'Omzet Perusahaan (Rp. Netto)', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `qp_1_3_3`
--

CREATE TABLE IF NOT EXISTS `qp_1_3_3` (
  `qp_id` int(11) NOT NULL AUTO_INCREMENT,
  `qp_name` varchar(200) NOT NULL,
  `qp_type` int(11) NOT NULL,
  `data_id` int(11) NOT NULL,
  PRIMARY KEY (`qp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `qp_1_3_3`
--

INSERT INTO `qp_1_3_3` (`qp_id`, `qp_name`, `qp_type`, `data_id`) VALUES
(1, 'Tahun', 0, 0),
(2, 'Asset Tetap Perusahaan (Rp)', 1, 0),
(5, 'Asset Tidak Tetap Perusahaan (Rp)', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `qp_2_1_1`
--

CREATE TABLE IF NOT EXISTS `qp_2_1_1` (
  `qp_id` int(11) NOT NULL AUTO_INCREMENT,
  `qp_name` text NOT NULL,
  `data_id` int(11) NOT NULL,
  PRIMARY KEY (`qp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `qp_2_1_1`
--

INSERT INTO `qp_2_1_1` (`qp_id`, `qp_name`, `data_id`) VALUES
(1, 'Kemitraan dengan UMKM', 0),
(2, 'Kegiatan Pendidikan (sesuai dgn kompetensi perusahaan).', 0),
(3, 'Kegiatan bantuan sosial', 0),
(4, 'Kegiatan Penghijauan Lingkungan', 0);

-- --------------------------------------------------------

--
-- Table structure for table `qp_3_1_1`
--

CREATE TABLE IF NOT EXISTS `qp_3_1_1` (
  `qp_id` int(11) NOT NULL AUTO_INCREMENT,
  `qp_name` text NOT NULL,
  `data_id` int(11) NOT NULL,
  PRIMARY KEY (`qp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `qp_3_1_1`
--

INSERT INTO `qp_3_1_1` (`qp_id`, `qp_name`, `data_id`) VALUES
(1, 'Program Pengelolaan Lingkungan Hidup', 0);

-- --------------------------------------------------------
-- --------------------------------------------------------

--
-- Table structure for table `questions_pma1`
--

CREATE TABLE IF NOT EXISTS `questions_pma1` (
  `qp1_id` int(11) NOT NULL AUTO_INCREMENT,
  `qp1_name` varchar(100) NOT NULL,
  `qp1_get_child` int(11) NOT NULL,
  `data_id` int(11) NOT NULL,
  PRIMARY KEY (`qp1_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=88 ;

--
-- Dumping data for table `questions_pma1`
--

INSERT INTO `questions_pma1` (`qp1_id`, `qp1_name`, `qp1_get_child`, `data_id`) VALUES
(1, 'Nama perusahaan', 0, 0),
(2, 'sektor usaha', 0, 0),
(3, 'status perusahaan', 1, 0),
(7, 'Berdiri/Beroperasi Sejak', 0, 0),
(8, 'Alamat Kantor/Perusahaan', 0, 0),
(9, 'Telp/Fax/E-mail', 0, 0),
(10, 'Orientasi Produk', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `questions_pma1_details`
--

CREATE TABLE IF NOT EXISTS `questions_pma1_details` (
  `qp1d_id` int(11) NOT NULL AUTO_INCREMENT,
  `qp1_id` int(11) NOT NULL,
  `qp1d_name` text NOT NULL,
  PRIMARY KEY (`qp1d_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `questions_pma1_details`
--

INSERT INTO `questions_pma1_details` (`qp1d_id`, `qp1_id`, `qp1d_name`) VALUES
(13, 3, 'PMA'),
(14, 3, 'PMDN');

-- --------------------------------------------------------

--
-- Table structure for table `questions_pma2`
--

CREATE TABLE IF NOT EXISTS `questions_pma2` (
  `qp2_id` int(11) NOT NULL AUTO_INCREMENT,
  `qp2_type` int(11) NOT NULL,
  `qp2_number` varchar(10) NOT NULL,
  `qp2_name` text NOT NULL,
  `qp2_cat_pma_id` int(11) NOT NULL,
  `qp2_weight` int(11) NOT NULL,
  `qp2_description` text NOT NULL,
  `data_id` int(11) NOT NULL,
  PRIMARY KEY (`qp2_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `questions_pma2`
--

INSERT INTO `questions_pma2` (`qp2_id`, `qp2_type`, `qp2_number`, `qp2_name`, `qp2_cat_pma_id`, `qp2_weight`, `qp2_description`, `data_id`) VALUES
(1, 0, '', 'Apakah perusahaan anda setiap tahun menyusun Laporan Kinerja Kegiatan Penanaman Modal (LKPM)?', 1, 0, '', 0),
(2, 0, '', 'Apakah perusahaan anda setiap tahun menyerahkan Kinerja Pelaporan Kegiatan Penanaman Modal (LKPM) ke Instansi Penanaman Modal/ Perizinan Terpadu di mana perusahaan beroperasi?', 1, 0, '', 0),
(3, 1, '', 'Berapakah perkembangan omzet perusahaan*) dalam tiga tahun terakhir dengan mengisi tabel berikut ini:', 1, 0, '<b>perkembangan</b> : <br>- Lebih dari 10%  nilai 100<br>- Antara 5%-10%  nilai 55<br>- Kurang dari 5% nilai 5<br>', 0),
(4, 2, '', 'Berapakah perkembangan asset perusahaan*) dalam tiga tahun terakhir dengan mengisi tabel berikut ini:(croscek LKPM 2 tahun)', 1, 0, '<b>perkembangan</b> : <br>- Lebih dari 10%  nilai 100<br>- Antara 5%-10%  nilai 55<br>- Kurang dari 5% nilai 5<br>', 0),
(5, 0, '', 'Dalam perencanaan perusahaan anda, berapa lama proses untuk mendapatkan Izin Prinsip Penanaman Modal dari Instansi Pemerintah ?', 1, 0, '', 0),
(6, 0, '', 'Apakah perusahaan anda setelah mendapatkan izin memperoleh fasilitas barang modal, bahan baku dari Pemerintah dan melaporkan realisasi kepada instansi terkait ?', 1, 0, '', 0),
(7, 0, '', 'Apakah pada akhir-akhir ini perusahaan Saudara telah melakukan perluasan usaha baik fisik konstruksi maupun bidang usaha yang kapasitas izin produksinya lebih dari 30% ?', 1, 0, '', 0),
(9, 0, '', 'Pada era teknologi maju saat ini apakah perusahaan Saudara masih menggunakan tenaga asing ?', 1, 0, '', 0),
(10, 0, '', 'Apakah perusahaan saudara telah melakukan kemitraan dengan usaha mikro, kecil, menengah dan koperasi (UMKM-K),', 1, 0, '', 0),
(11, 0, '', 'Apakah perusahaan memiliki program Corporate Social Responsibility (CSR)?', 2, 0, '', 0),
(12, 0, '', 'Apakah perusahaan memiliki anggaran khusus untuk melaksanakan program Corporate Social Responsibility (CSR)?', 2, 0, '', 0),
(13, 0, '', 'Apakah perusahaan, untuk melaksanakan program Corporate Social Responsibility (CSR) membentuk divisi atau bagian tersendiri?', 2, 0, '', 0),
(14, 3, '', 'Apa sajakah bentuk program/ kegiatan Corporate Social Responsibility (CSR) yang direalisasikan perusahaan secara berkelanjutan, dengan cara memberi tanda silang (X) pada pilihan jawaban â€œYa dan Tidakâ€ setiap program CSR di tabel berikut ini:', 2, 0, '<b>kegiatan</b> : <br>- lebih dari 10 kegiatan nilai 100<br>- 5 - 10 kegiatan  nilai 55 <br>- kurang dari  5  kegiatan nilai 5  ', 0),
(15, 0, '', 'Bagaimana perkembangan program Corporate Social Responsibility (CSR) yang telah dilaksanakan perusahaan dikaitkan dengan kebutuhan masyarakat?', 2, 0, '', 0),
(16, 0, '', 'Apakah perusahaan dalam melaksanakan program Corporate Social Responsibility (CSR), melakukan koordinasi dengan lembaga terkait ?', 2, 0, '', 0),
(17, 0, '', 'Dalam pelaksanaan program Corporate Social Responsibility (CSR), apakah perusahaan memiliki wilayah sasaran atau binaan?', 2, 0, '', 0),
(18, 0, '', 'Apakah perusahaan dalam melaksanakan program Corporate Social Responsibility (CSR), melakukan kerjasama dengan instansi terkait?', 2, 0, '', 0),
(19, 0, '', 'Apakah saat ini perusahaan anda mempunyai program pengelolaan lingkungan hidup?', 3, 0, '', 0),
(20, 0, '', 'Apakah perusahaan memiliki anggaran khusus untuk melaksanakan program pengelolaan lingkungan hidup?', 3, 0, '', 0),
(21, 0, '', 'Apakah perusahaan melakukan pelembagaan untuk melaksanakan program pengelolaan lingkungan hidup?', 3, 0, '', 0),
(22, 4, '', 'Apa sajakah jenis program pengelolaan lingkungan hidup yang dilaksanakan oleh perusahaan secara berkelanjutan? Sebutkan dan terlampir data pendukungnya:', 3, 0, '<b>I. Program/ Kegiatan Promosi Penanaman Modal bersama Dinas/ Instansi Lain.</b><br>\r\n  \r\n- Lebih dari 5 kegiatan,  terlampir data pendukungnya<strong>poin 100<br>\r\n</strong>- Antara 2-4kegiatan,strong>poin\r\n55  terlampir data pendukungnya</strong><br>\r\n- Kurang dari 2 kegiatan, terlampir data pendukungnya<strong>poin 5</strong><br><br>\r\n\r\n<strong>', 0),
(23, 0, '', 'Selama 1 tahun terakhir bagaimana perkembangan program pengelolaan lingkungan hidup yang telah dilaksanakan perusahaan?', 3, 0, '', 0),
(24, 0, '', 'Dalam pelaksanaan program pengelolaan lingkungan hidup, apakah perusahaan memiliki wilayah sasaran atau binaan?', 3, 0, '', 0),
(25, 0, '', 'Dalam rangka menciptakan lingkungan hidup yang bersih dan nyaman terutama di sekitar lingkungan perusahaan saudara, apakah perusahaan anda melakukan pengolahan limbah serta mempunyai unit pengolah limbah ?', 3, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `questions_pma2_details`
--

CREATE TABLE IF NOT EXISTS `questions_pma2_details` (
  `qp2d_id` int(11) NOT NULL AUTO_INCREMENT,
  `qp2d_type` int(11) NOT NULL,
  `qp2_id` int(11) NOT NULL,
  `qp2d_number` varchar(10) NOT NULL,
  `qp2d_name` text NOT NULL,
  `qp2d_point` int(11) NOT NULL,
  PRIMARY KEY (`qp2d_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `questions_pma2_details`
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
(26, 0, 11, '', 'Ya, perusahaan memiliki program Corporate Social Responsibility (CSR), dan terlampir data pendukungnya', 100),
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
(63, 0, 24, '', 'Tidak memiliki wilayah sasaran sama sekali', 5);

-- --------------------------------------------------------

--
-- Table structure for table `questions_pma3`
--

CREATE TABLE IF NOT EXISTS `questions_pma3` (
  `qp3_id` int(11) NOT NULL AUTO_INCREMENT,
  `data_id` int(11) NOT NULL,
  `qp3_name` text NOT NULL,
  PRIMARY KEY (`qp3_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `questions_pma3`
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
(9, 0, 'No HP Penjabat Pengisi');

-- --------------------------------------------------------
