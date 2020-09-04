-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Sep 2020 pada 06.09
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(8) NOT NULL,
  `id_akun` int(10) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Email_admin` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL DEFAULT 'avatar.svg',
  `ref` int(11) NOT NULL,
  `time_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `id_akun`, `Nama`, `Email_admin`, `foto`, `ref`, `time_reg`) VALUES
(2, 1, 'Taufik Agung Santoso', 'admin@admin', 'avatar.svg', 0, '2019-09-11 03:42:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `calendar`
--

CREATE TABLE `calendar` (
  `id` int(11) NOT NULL,
  `title` varchar(126) DEFAULT NULL,
  `description` text,
  `color` varchar(24) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `create_by` varchar(64) DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `modified_by` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calendar`
--

INSERT INTO `calendar` (`id`, `title`, `description`, `color`, `start_date`, `end_date`, `create_at`, `create_by`, `modified_at`, `modified_by`) VALUES
(86, 'Career Day', 'career day adalah ...', '#FF8C00', '2019-08-25', '2019-09-26', '2019-08-12 14:10:12', NULL, '2019-08-29 10:53:19', NULL),
(96, 'PEMBAYARAN UKT', '', '', '2019-08-12', '2019-08-21', '2019-08-15 09:43:57', NULL, NULL, NULL),
(101, 'Pengumuman Seleksi', 'seleksi masuk perguruan tinggi', '', '2019-08-25', '2019-08-25', '2019-08-16 11:15:39', NULL, NULL, NULL),
(102, 'snmptn', 'snmptn', '', '2019-09-01', '2019-09-10', '2019-09-02 14:11:18', NULL, NULL, NULL),
(103, 'GSDFG', 'SFG', '', '2019-09-05', '2019-09-10', '2019-09-02 14:18:25', NULL, NULL, NULL),
(104, 'tes', 'tes', '#FFD700', '2019-10-01', '2019-09-05', '2019-09-12 11:57:28', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `company`
--

CREATE TABLE `company` (
  `Id_perusahaan` int(8) NOT NULL,
  `id_akun` int(10) NOT NULL,
  `Nama_perusahaan` varchar(100) NOT NULL,
  `Nama_officer` varchar(50) NOT NULL,
  `Email_officer` varchar(100) NOT NULL,
  `Email_perusahaan` varchar(100) NOT NULL,
  `deskripsi_perusahaan` text NOT NULL,
  `id_industri` int(8) NOT NULL,
  `id_provinsi` varchar(2) NOT NULL,
  `id_kabupaten_kota` varchar(4) NOT NULL,
  `Logo_perusahaan` varchar(100) NOT NULL DEFAULT 'default.png',
  `sampul` varchar(100) NOT NULL DEFAULT 'sampul_default.png',
  `Website` varchar(200) NOT NULL,
  `telp_perusahaan` varchar(20) NOT NULL,
  `telp_officer` varchar(15) NOT NULL,
  `hp_officer` varchar(15) NOT NULL,
  `Alamat` text NOT NULL,
  `kode_pos` varchar(8) NOT NULL,
  `waktu_pendaftaran` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `company`
--

INSERT INTO `company` (`Id_perusahaan`, `id_akun`, `Nama_perusahaan`, `Nama_officer`, `Email_officer`, `Email_perusahaan`, `deskripsi_perusahaan`, `id_industri`, `id_provinsi`, `id_kabupaten_kota`, `Logo_perusahaan`, `sampul`, `Website`, `telp_perusahaan`, `telp_officer`, `hp_officer`, `Alamat`, `kode_pos`, `waktu_pendaftaran`) VALUES
(1, 2, 'ITERA', 'Taufik Agung Santoso', 'taufikagungsantoso17@gmail.com', 'mail@itera.ac.id', 'Institut Teknologi Sumatera (ITERA) merupakan perguruan tinggi negeri baru yang berdiri sejak 6 Oktober 2014 dan berlokasi di Lampung.', 35, '18', '1803', 'itera.png', 'sampul_itera.png', 'http://itera.ac.id', '085357037094', '085364759837', '082345763098', 'jl ryacudu lampung selatan', '35365', '2019-09-25 23:11:32'),
(2, 11, 'PGN', 'taufik', 'taufik@gmail.com', 'surya@gmail.com', 'PT Perusahaan Gas Negara Tbk, is an Indonesian natural gas transportation and distribution company. The total length of distribution pipelines of the company is 3,187 km that serve around 84 million customers.', 33, '18', '1803', 'pgn.png', 'sampul_default.png', 'surya.com', '083749408283', '0849239472739', '94829371939', 'jl 2 korpri jaya', '35365', '2019-09-25 23:10:01'),
(3, 22, 'taufiksan', 'taufik agung santoso', 'taufikagungsantoso17@gmail.com', 'taufiksan@gmail.com', 'perusahaan teknologi', 36, '71', '1117', 'default.png', 'sampul_default.png', 'taufiksan.com', '086382938', '083749232', '083872839', 'jajaran baru', '', '2020-04-18 19:51:13'),
(5, 23, 'ilman', 'ilman', 'ilman@ilman', 'ilman@gmail.com', 'ilman industri', 33, '36', '1114', 'default.png', 'sampul_default.png', 'ilman.com', '0987654', '0987654', '09876', 'jajaran', '31657', '2020-04-22 10:09:22'),
(6, 24, 'purwati', 'purwati', 'purwati@purwati', 'purwati@gmail.com', 'deskripsi', 33, '52', '1171', 'default.png', 'sampul_default.png', 'purwati.com', '098765', '098765', '098765', 'jajran baru', '31657', '2020-04-22 10:12:32'),
(7, 13, 'nocturnal', 'mhd yudi', 'mhd@nocturnal', 'mhd@gmail.com', 'nocturnal production', 36, '64', '1101', 'default.png', 'sampul_default.png', 'nocturnal.com', '098765', '0987654', '0987654', 'lampung', '2344', '2020-04-22 10:33:18'),
(8, 26, 'Musi Rawas', 'Musi Rawas', 'musirawas@gmail.com', 'musirawas@gmail.com', '', 33, '16', '1606', 'default.png', 'sampul_default.png', 'muisrawas.com', '085357037093', '085357037093', '085357037093', 'beliti', '31657', '2020-09-03 07:02:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `industri`
--

CREATE TABLE `industri` (
  `id_industri` int(8) NOT NULL,
  `jenis_industri` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `industri`
--

INSERT INTO `industri` (`id_industri`, `jenis_industri`) VALUES
(33, 'perkantoran'),
(34, 'accounting'),
(35, 'Perguruan Tinggi'),
(36, 'android developer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `joblist`
--

CREATE TABLE `joblist` (
  `id_joblist` int(100) NOT NULL,
  `Nama_joblist` varchar(150) NOT NULL,
  `Tipe_pekerjaan` enum('1','2','3','') NOT NULL COMMENT '1. full time 2. part time 3. intern',
  `perusahaan` int(8) NOT NULL,
  `deadline` date NOT NULL,
  `dibutuhkan` int(8) DEFAULT NULL,
  `deskripsi_pekerjaan` text NOT NULL,
  `min_lulus` int(1) NOT NULL DEFAULT '0' COMMENT '0.apa aja 1.sma/smk 2.diploma 3.s1 4.s2',
  `syarat_khusus` text,
  `status` varchar(255) NOT NULL DEFAULT '<span class="label label-warning">Pending</span>',
  `tanggal_buat` date NOT NULL,
  `tanggal_verif` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `joblist`
--

INSERT INTO `joblist` (`id_joblist`, `Nama_joblist`, `Tipe_pekerjaan`, `perusahaan`, `deadline`, `dibutuhkan`, `deskripsi_pekerjaan`, `min_lulus`, `syarat_khusus`, `status`, `tanggal_buat`, `tanggal_verif`) VALUES
(5, 'Content Creator', '1', 2, '2020-08-28', 50, '<p>membuat content youtube</p>\r\n', 0, '<ul>\r\n	<li>sanggup bekerja dalam tekanan.</li>\r\n	<li>bersedia ditempatkan di jakarta</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', '<span class=\"label label-success\">Telah tayang</span>', '0000-00-00', NULL),
(6, 'Web Developer', '1', 2, '2021-08-27', 7, '<p>memahami html, css dan javascript</p>\r\n', 0, '<p>sanggup bekerja secara tim</p>\r\n', '<span class=\"label label-success\">Telah tayang</span>', '0000-00-00', NULL),
(7, 'Content Creator ', '2', 2, '2020-09-30', 10, '<p>membuat konten instagram</p>\r\n', 0, '<p>ditempatkan dijakarta</p>\r\n', '<span class=\"label label-success\">Telah tayang</span>', '0000-00-00', NULL),
(23, 'Dosen Teknik Industri', '1', 1, '2020-08-29', 10, '<p>menjadi dosen teknik industri di itera</p>\r\n', 4, '<p>dapat menjadi dosen yang baik</p>\r\n', '<span class=\"label label-success\">Telah tayang</span>', '0000-00-00', NULL),
(24, 'Dosen Teknik Sipil', '1', 1, '2020-09-30', 10, '<p>menjadi dosen teknik sipil ITERA</p>\r\n', 4, '<p>dapat menjadi dosen yang baik</p>\r\n', '<span class=\"label label-success\">Telah tayang</span>', '0000-00-00', NULL),
(25, 'Dosen Teknik Elektro', '1', 1, '2020-04-25', 10, '<p>menjadi dosen teknik Elektro di ITERA</p>\r\n', 4, '<p>dapat menjadi dosen yang baik</p>\r\n', '<span class=\"label label-success\">Telah tayang</span>', '0000-00-00', NULL),
(26, 'penulis', '1', 1, '2020-08-26', 10, '<p>dapat menulis</p>\r\n', 3, '<p>style ok</p>\r\n', '<span class=\"label label-success\">Telah tayang</span>', '0000-00-00', NULL),
(29, 'Dosen Teknik Mesin', '1', 1, '2020-04-30', 5, '<p>Dosen Teknik Mesin Institut Teknologi Sumatera</p>\r\n', 4, '<ul style=\"margin-left:0px; margin-right:0px\">\r\n	<li>Laki-laki/perempuan, usia maksimal 35 tahun</li>\r\n	<li>Sehat jasmani, rohani dan bebas narkoba</li>\r\n	<li>Pendidikan S-1 Teknik Mesin, IPK minimal 3.25, pendidikan S-2 Teknik Mesin, IPK minimal 3.25</li>\r\n	<li>Menguasai bahasa Inggris aktif dan pasif</li>\r\n</ul>\r\n', '<span class=\"label label-success\">Telah tayang</span>', '2020-07-27', NULL),
(30, 'web developer', '2', 3, '2020-04-30', 100, 'mampu codeigniter', 2, 'tidak ada', '<span class=\"label label-success\">Telah tayang</span>', '2020-04-19', '2020-04-19'),
(31, 'kasir', '3', 6, '2020-04-30', 4, 'kasir', 3, 'tidak ada', '<span class=\"label label-success\">Telah tayang</span>', '2020-04-22', '2020-04-22'),
(32, 'kasir', '1', 5, '2020-04-30', 5, 'kasir', 2, 'tidak ada', '<span class=\"label label-success\">Telah tayang</span>', '2020-04-21', '2020-04-22'),
(33, 'UI Android', '', 7, '2020-04-29', 10, 'membuat UI Android', 1, 'menguasai desain', '<span class=\"label label-success\">Telah tayang</span>', '2020-04-21', '2020-04-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobseeker`
--

CREATE TABLE `jobseeker` (
  `id_jobseeker` int(15) NOT NULL,
  `id_akun` int(10) NOT NULL,
  `nama_jobseeker` varchar(50) NOT NULL,
  `nim_jobseeker` int(20) DEFAULT NULL,
  `email_jobseeker` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `foto` varchar(150) NOT NULL DEFAULT 'profil_default.png',
  `sampul` varchar(150) NOT NULL DEFAULT 'sampul_default.png',
  `status_mhs` enum('1','2','','') DEFAULT NULL COMMENT '1 untuk itera, 2 untuk mhs luar itera',
  `role_jobseeker` enum('1','2','','') NOT NULL COMMENT '1. untuk mahasiswa 2. untuk umum',
  `perguruan_tinggi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jobseeker`
--

INSERT INTO `jobseeker` (`id_jobseeker`, `id_akun`, `nama_jobseeker`, `nim_jobseeker`, `email_jobseeker`, `no_hp`, `foto`, `sampul`, `status_mhs`, `role_jobseeker`, `perguruan_tinggi`) VALUES
(1, 3, 'sunarno', NULL, 'sunarno@gmail.com', '085367232946', 'profil_default.png', 'sampul_default.png', '1', '1', 'Institut Teknologi Sumatera'),
(2, 19, 'okta pilopa', NULL, 'okta@gmail.com', '092384932', 'profil_default.png', 'sampul_default.png', NULL, '1', NULL),
(3, 20, 'taufik agung santoso', NULL, 'taufik@gmail.com', '083728392739', 'profil_default.png', 'sampul_default.png', NULL, '2', 'institut teknologi sumatera'),
(4, 23, 'ilman nugroho', NULL, 'ilmannugroho@gmail.com', '085357635234', 'profil_default.png', 'sampul_default.png', NULL, '2', 'smp negeri megang sakti'),
(5, 24, 'purwati', NULL, 'purwati@gmail.com', '085367232946', 'profil_default.png', 'sampul_default.png', NULL, '2', 'Institut Teknologi Sumatera'),
(6, 27, 'ringgom tri saputra', NULL, 'ringgom@gmail.com', '0987654', 'profil_default.png', 'sampul_default.png', NULL, '2', 'institut teknologi sumatera');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id` varchar(4) NOT NULL,
  `id_prov` varchar(2) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kabupaten`
--

INSERT INTO `kabupaten` (`id`, `id_prov`, `nama`) VALUES
('1101', '11', 'Kab. Simeulue'),
('1102', '11', 'Kab. Aceh Singkil'),
('1103', '11', 'Kab. Aceh Selatan'),
('1104', '11', 'Kab. Aceh Tenggara'),
('1105', '11', 'Kab. Aceh Timur'),
('1106', '11', 'Kab. Aceh Tengah'),
('1107', '11', 'Kab. Aceh Barat'),
('1108', '11', 'Kab. Aceh Besar'),
('1109', '11', 'Kab. Pidie'),
('1110', '11', 'Kab. Bireuen'),
('1111', '11', 'Kab. Aceh Utara'),
('1112', '11', 'Kab. Aceh Barat Daya'),
('1113', '11', 'Kab. Gayo Lues'),
('1114', '11', 'Kab. Aceh Tamiang'),
('1115', '11', 'Kab. Nagan Raya'),
('1116', '11', 'Kab. Aceh Jaya'),
('1117', '11', 'Kab. Bener Meriah'),
('1118', '11', 'Kab. Pidie Jaya'),
('1171', '11', 'Kota Banda Aceh'),
('1172', '11', 'Kota Sabang'),
('1173', '11', 'Kota Langsa'),
('1174', '11', 'Kota Lhokseumawe'),
('1175', '11', 'Kota Subulussalam'),
('1201', '12', 'Kab. Nias'),
('1202', '12', 'Kab. Mandailing Natal'),
('1203', '12', 'Kab. Tapanuli Selatan'),
('1204', '12', 'Kab. Tapanuli Tengah'),
('1205', '12', 'Kab. Tapanuli Utara'),
('1206', '12', 'Kab. Toba Samosir'),
('1207', '12', 'Kab. Labuhan Batu'),
('1208', '12', 'Kab. Asahan'),
('1209', '12', 'Kab. Simalungun'),
('1210', '12', 'Kab. Dairi'),
('1211', '12', 'Kab. Karo'),
('1212', '12', 'Kab. Deli Serdang'),
('1213', '12', 'Kab. Langkat'),
('1214', '12', 'Kab. Nias Selatan'),
('1215', '12', 'Kab. Humbang Hasundutan'),
('1216', '12', 'Kab. Pakpak Bharat'),
('1217', '12', 'Kab. Samosir'),
('1218', '12', 'Kab. Serdang Bedagai'),
('1219', '12', 'Kab. Batu Bara'),
('1220', '12', 'Kab. Padang Lawas Utara'),
('1221', '12', 'Kab. Padang Lawas'),
('1222', '12', 'Kab. Labuhan Batu Selatan'),
('1223', '12', 'Kab. Labuhan Batu Utara'),
('1224', '12', 'Kab. Nias Utara'),
('1225', '12', 'Kab. Nias Barat'),
('1271', '12', 'Kota Sibolga'),
('1272', '12', 'Kota Tanjung Balai'),
('1273', '12', 'Kota Pematang Siantar'),
('1274', '12', 'Kota Tebing Tinggi'),
('1275', '12', 'Kota Medan'),
('1276', '12', 'Kota Binjai'),
('1277', '12', 'Kota Padangsidimpuan'),
('1278', '12', 'Kota Gunungsitoli'),
('1301', '13', 'Kab. Kepulauan Mentawai'),
('1302', '13', 'Kab. Pesisir Selatan'),
('1303', '13', 'Kab. Solok'),
('1304', '13', 'Kab. Sijunjung'),
('1305', '13', 'Kab. Tanah Datar'),
('1306', '13', 'Kab. Padang Pariaman'),
('1307', '13', 'Kab. Agam'),
('1308', '13', 'Kab. Lima Puluh Kota'),
('1309', '13', 'Kab. Pasaman'),
('1310', '13', 'Kab. Solok Selatan'),
('1311', '13', 'Kab. Dharmasraya'),
('1312', '13', 'Kab. Pasaman Barat'),
('1371', '13', 'Kota Padang'),
('1372', '13', 'Kota Solok'),
('1373', '13', 'Kota Sawah Lunto'),
('1374', '13', 'Kota Padang Panjang'),
('1375', '13', 'Kota Bukittinggi'),
('1376', '13', 'Kota Payakumbuh'),
('1377', '13', 'Kota Pariaman'),
('1401', '14', 'Kab. Kuantan Singingi'),
('1402', '14', 'Kab. Indragiri Hulu'),
('1403', '14', 'Kab. Indragiri Hilir'),
('1404', '14', 'Kab. Pelalawan'),
('1405', '14', 'Kab. S I A K'),
('1406', '14', 'Kab. Kampar'),
('1407', '14', 'Kab. Rokan Hulu'),
('1408', '14', 'Kab. Bengkalis'),
('1409', '14', 'Kab. Rokan Hilir'),
('1410', '14', 'Kab. Kepulauan Meranti'),
('1471', '14', 'Kota Pekanbaru'),
('1473', '14', 'Kota D U M A I'),
('1501', '15', 'Kab. Kerinci'),
('1502', '15', 'Kab. Merangin'),
('1503', '15', 'Kab. Sarolangun'),
('1504', '15', 'Kab. Batang Hari'),
('1505', '15', 'Kab. Muaro Jambi'),
('1506', '15', 'Kab. Tanjung Jabung Timur'),
('1507', '15', 'Kab. Tanjung Jabung Barat'),
('1508', '15', 'Kab. Tebo'),
('1509', '15', 'Kab. Bungo'),
('1571', '15', 'Kota Jambi'),
('1572', '15', 'Kota Sungai Penuh'),
('1601', '16', 'Kab. Ogan Komering Ulu'),
('1602', '16', 'Kab. Ogan Komering Ilir'),
('1603', '16', 'Kab. Muara Enim'),
('1604', '16', 'Kab. Lahat'),
('1605', '16', 'Kab. Musi Rawas'),
('1606', '16', 'Kab. Musi Banyuasin'),
('1607', '16', 'Kab. Banyu Asin'),
('1608', '16', 'Kab. Ogan Komering Ulu Selatan'),
('1609', '16', 'Kab. Ogan Komering Ulu Timur'),
('1610', '16', 'Kab. Ogan Ilir'),
('1611', '16', 'Kab. Empat Lawang'),
('1671', '16', 'Kota Palembang'),
('1672', '16', 'Kota Prabumulih'),
('1673', '16', 'Kota Pagar Alam'),
('1674', '16', 'Kota Lubuklinggau'),
('1701', '17', 'Kab. Bengkulu Selatan'),
('1702', '17', 'Kab. Rejang Lebong'),
('1703', '17', 'Kab. Bengkulu Utara'),
('1704', '17', 'Kab. Kaur'),
('1705', '17', 'Kab. Seluma'),
('1706', '17', 'Kab. Mukomuko'),
('1707', '17', 'Kab. Lebong'),
('1708', '17', 'Kab. Kepahiang'),
('1709', '17', 'Kab. Bengkulu Tengah'),
('1771', '17', 'Kota Bengkulu'),
('1801', '18', 'Kab. Lampung Barat'),
('1802', '18', 'Kab. Tanggamus'),
('1803', '18', 'Kab. Lampung Selatan'),
('1804', '18', 'Kab. Lampung Timur'),
('1805', '18', 'Kab. Lampung Tengah'),
('1806', '18', 'Kab. Lampung Utara'),
('1807', '18', 'Kab. Way Kanan'),
('1808', '18', 'Kab. Tulangbawang'),
('1809', '18', 'Kab. Pesawaran'),
('1810', '18', 'Kab. Pringsewu'),
('1811', '18', 'Kab. Mesuji'),
('1812', '18', 'Kab. Tulang Bawang Barat'),
('1813', '18', 'Kab. Pesisir Barat'),
('1871', '18', 'Kota Bandar Lampung'),
('1872', '18', 'Kota Metro'),
('1901', '19', 'Kab. Bangka'),
('1902', '19', 'Kab. Belitung'),
('1903', '19', 'Kab. Bangka Barat'),
('1904', '19', 'Kab. Bangka Tengah'),
('1905', '19', 'Kab. Bangka Selatan'),
('1906', '19', 'Kab. Belitung Timur'),
('1971', '19', 'Kota Pangkal Pinang'),
('2101', '21', 'Kab. Karimun'),
('2102', '21', 'Kab. Bintan'),
('2103', '21', 'Kab. Natuna'),
('2104', '21', 'Kab. Lingga'),
('2105', '21', 'Kab. Kepulauan Anambas'),
('2171', '21', 'Kota B A T A M'),
('2172', '21', 'Kota Tanjung Pinang'),
('3101', '31', 'Kab. Kepulauan Seribu'),
('3171', '31', 'Kota Jakarta Selatan'),
('3172', '31', 'Kota Jakarta Timur'),
('3173', '31', 'Kota Jakarta Pusat'),
('3174', '31', 'Kota Jakarta Barat'),
('3175', '31', 'Kota Jakarta Utara'),
('3201', '32', 'Kab. Bogor'),
('3202', '32', 'Kab. Sukabumi'),
('3203', '32', 'Kab. Cianjur'),
('3204', '32', 'Kab. Bandung'),
('3205', '32', 'Kab. Garut'),
('3206', '32', 'Kab. Tasikmalaya'),
('3207', '32', 'Kab. Ciamis'),
('3208', '32', 'Kab. Kuningan'),
('3209', '32', 'Kab. Cirebon'),
('3210', '32', 'Kab. Majalengka'),
('3211', '32', 'Kab. Sumedang'),
('3212', '32', 'Kab. Indramayu'),
('3213', '32', 'Kab. Subang'),
('3214', '32', 'Kab. Purwakarta'),
('3215', '32', 'Kab. Karawang'),
('3216', '32', 'Kab. Bekasi'),
('3217', '32', 'Kab. Bandung Barat'),
('3218', '32', 'Kab. Pangandaran'),
('3271', '32', 'Kota Bogor'),
('3272', '32', 'Kota Sukabumi'),
('3273', '32', 'Kota Bandung'),
('3274', '32', 'Kota Cirebon'),
('3275', '32', 'Kota Bekasi'),
('3276', '32', 'Kota Depok'),
('3277', '32', 'Kota Cimahi'),
('3278', '32', 'Kota Tasikmalaya'),
('3279', '32', 'Kota Banjar'),
('3301', '33', 'Kab. Cilacap'),
('3302', '33', 'Kab. Banyumas'),
('3303', '33', 'Kab. Purbalingga'),
('3304', '33', 'Kab. Banjarnegara'),
('3305', '33', 'Kab. Kebumen'),
('3306', '33', 'Kab. Purworejo'),
('3307', '33', 'Kab. Wonosobo'),
('3308', '33', 'Kab. Magelang'),
('3309', '33', 'Kab. Boyolali'),
('3310', '33', 'Kab. Klaten'),
('3311', '33', 'Kab. Sukoharjo'),
('3312', '33', 'Kab. Wonogiri'),
('3313', '33', 'Kab. Karanganyar'),
('3314', '33', 'Kab. Sragen'),
('3315', '33', 'Kab. Grobogan'),
('3316', '33', 'Kab. Blora'),
('3317', '33', 'Kab. Rembang'),
('3318', '33', 'Kab. Pati'),
('3319', '33', 'Kab. Kudus'),
('3320', '33', 'Kab. Jepara'),
('3321', '33', 'Kab. Demak'),
('3322', '33', 'Kab. Semarang'),
('3323', '33', 'Kab. Temanggung'),
('3324', '33', 'Kab. Kendal'),
('3325', '33', 'Kab. Batang'),
('3326', '33', 'Kab. Pekalongan'),
('3327', '33', 'Kab. Pemalang'),
('3328', '33', 'Kab. Tegal'),
('3329', '33', 'Kab. Brebes'),
('3371', '33', 'Kota Magelang'),
('3372', '33', 'Kota Surakarta'),
('3373', '33', 'Kota Salatiga'),
('3374', '33', 'Kota Semarang'),
('3375', '33', 'Kota Pekalongan'),
('3376', '33', 'Kota Tegal'),
('3401', '34', 'Kab. Kulon Progo'),
('3402', '34', 'Kab. Bantul'),
('3403', '34', 'Kab. Gunung Kidul'),
('3404', '34', 'Kab. Sleman'),
('3471', '34', 'Kota Yogyakarta'),
('3501', '35', 'Kab. Pacitan'),
('3502', '35', 'Kab. Ponorogo'),
('3503', '35', 'Kab. Trenggalek'),
('3504', '35', 'Kab. Tulungagung'),
('3505', '35', 'Kab. Blitar'),
('3506', '35', 'Kab. Kediri'),
('3507', '35', 'Kab. Malang'),
('3508', '35', 'Kab. Lumajang'),
('3509', '35', 'Kab. Jember'),
('3510', '35', 'Kab. Banyuwangi'),
('3511', '35', 'Kab. Bondowoso'),
('3512', '35', 'Kab. Situbondo'),
('3513', '35', 'Kab. Probolinggo'),
('3514', '35', 'Kab. Pasuruan'),
('3515', '35', 'Kab. Sidoarjo'),
('3516', '35', 'Kab. Mojokerto'),
('3517', '35', 'Kab. Jombang'),
('3518', '35', 'Kab. Nganjuk'),
('3519', '35', 'Kab. Madiun'),
('3520', '35', 'Kab. Magetan'),
('3521', '35', 'Kab. Ngawi'),
('3522', '35', 'Kab. Bojonegoro'),
('3523', '35', 'Kab. Tuban'),
('3524', '35', 'Kab. Lamongan'),
('3525', '35', 'Kab. Gresik'),
('3526', '35', 'Kab. Bangkalan'),
('3527', '35', 'Kab. Sampang'),
('3528', '35', 'Kab. Pamekasan'),
('3529', '35', 'Kab. Sumenep'),
('3571', '35', 'Kota Kediri'),
('3572', '35', 'Kota Blitar'),
('3573', '35', 'Kota Malang'),
('3574', '35', 'Kota Probolinggo'),
('3575', '35', 'Kota Pasuruan'),
('3576', '35', 'Kota Mojokerto'),
('3577', '35', 'Kota Madiun'),
('3578', '35', 'Kota Surabaya'),
('3579', '35', 'Kota Batu'),
('3601', '36', 'Kab. Pandeglang'),
('3602', '36', 'Kab. Lebak'),
('3603', '36', 'Kab. Tangerang'),
('3604', '36', 'Kab. Serang'),
('3671', '36', 'Kota Tangerang'),
('3672', '36', 'Kota Cilegon'),
('3673', '36', 'Kota Serang'),
('3674', '36', 'Kota Tangerang Selatan'),
('5101', '51', 'Kab. Jembrana'),
('5102', '51', 'Kab. Tabanan'),
('5103', '51', 'Kab. Badung'),
('5104', '51', 'Kab. Gianyar'),
('5105', '51', 'Kab. Klungkung'),
('5106', '51', 'Kab. Bangli'),
('5107', '51', 'Kab. Karang Asem'),
('5108', '51', 'Kab. Buleleng'),
('5171', '51', 'Kota Denpasar'),
('5201', '52', 'Kab. Lombok Barat'),
('5202', '52', 'Kab. Lombok Tengah'),
('5203', '52', 'Kab. Lombok Timur'),
('5204', '52', 'Kab. Sumbawa'),
('5205', '52', 'Kab. Dompu'),
('5206', '52', 'Kab. Bima'),
('5207', '52', 'Kab. Sumbawa Barat'),
('5208', '52', 'Kab. Lombok Utara'),
('5271', '52', 'Kota Mataram'),
('5272', '52', 'Kota Bima'),
('5301', '53', 'Kab. Sumba Barat'),
('5302', '53', 'Kab. Sumba Timur'),
('5303', '53', 'Kab. Kupang'),
('5304', '53', 'Kab. Timor Tengah Selatan'),
('5305', '53', 'Kab. Timor Tengah Utara'),
('5306', '53', 'Kab. Belu'),
('5307', '53', 'Kab. Alor'),
('5308', '53', 'Kab. Lembata'),
('5309', '53', 'Kab. Flores Timur'),
('5310', '53', 'Kab. Sikka'),
('5311', '53', 'Kab. Ende'),
('5312', '53', 'Kab. Ngada'),
('5313', '53', 'Kab. Manggarai'),
('5314', '53', 'Kab. Rote Ndao'),
('5315', '53', 'Kab. Manggarai Barat'),
('5316', '53', 'Kab. Sumba Tengah'),
('5317', '53', 'Kab. Sumba Barat Daya'),
('5318', '53', 'Kab. Nagekeo'),
('5319', '53', 'Kab. Manggarai Timur'),
('5320', '53', 'Kab. Sabu Raijua'),
('5371', '53', 'Kota Kupang'),
('6101', '61', 'Kab. Sambas'),
('6102', '61', 'Kab. Bengkayang'),
('6103', '61', 'Kab. Landak'),
('6104', '61', 'Kab. Pontianak'),
('6105', '61', 'Kab. Sanggau'),
('6106', '61', 'Kab. Ketapang'),
('6107', '61', 'Kab. Sintang'),
('6108', '61', 'Kab. Kapuas Hulu'),
('6109', '61', 'Kab. Sekadau'),
('6110', '61', 'Kab. Melawi'),
('6111', '61', 'Kab. Kayong Utara'),
('6112', '61', 'Kab. Kubu Raya'),
('6171', '61', 'Kota Pontianak'),
('6172', '61', 'Kota Singkawang'),
('6201', '62', 'Kab. Kotawaringin Barat'),
('6202', '62', 'Kab. Kotawaringin Timur'),
('6203', '62', 'Kab. Kapuas'),
('6204', '62', 'Kab. Barito Selatan'),
('6205', '62', 'Kab. Barito Utara'),
('6206', '62', 'Kab. Sukamara'),
('6207', '62', 'Kab. Lamandau'),
('6208', '62', 'Kab. Seruyan'),
('6209', '62', 'Kab. Katingan'),
('6210', '62', 'Kab. Pulang Pisau'),
('6211', '62', 'Kab. Gunung Mas'),
('6212', '62', 'Kab. Barito Timur'),
('6213', '62', 'Kab. Murung Raya'),
('6271', '62', 'Kota Palangka Raya'),
('6301', '63', 'Kab. Tanah Laut'),
('6302', '63', 'Kab. Kota Baru'),
('6303', '63', 'Kab. Banjar'),
('6304', '63', 'Kab. Barito Kuala'),
('6305', '63', 'Kab. Tapin'),
('6306', '63', 'Kab. Hulu Sungai Selatan'),
('6307', '63', 'Kab. Hulu Sungai Tengah'),
('6308', '63', 'Kab. Hulu Sungai Utara'),
('6309', '63', 'Kab. Tabalong'),
('6310', '63', 'Kab. Tanah Bumbu'),
('6311', '63', 'Kab. Balangan'),
('6371', '63', 'Kota Banjarmasin'),
('6372', '63', 'Kota Banjar Baru'),
('6401', '64', 'Kab. Paser'),
('6402', '64', 'Kab. Kutai Barat'),
('6403', '64', 'Kab. Kutai Kartanegara'),
('6404', '64', 'Kab. Kutai Timur'),
('6405', '64', 'Kab. Berau'),
('6409', '64', 'Kab. Penajam Paser Utara'),
('6471', '64', 'Kota Balikpapan'),
('6472', '64', 'Kota Samarinda'),
('6474', '64', 'Kota Bontang'),
('6501', '65', 'Kab. Malinau'),
('6502', '65', 'Kab. Bulungan'),
('6503', '65', 'Kab. Tana Tidung'),
('6504', '65', 'Kab. Nunukan'),
('6571', '65', 'Kota Tarakan'),
('7101', '71', 'Kab. Bolaang Mongondow'),
('7102', '71', 'Kab. Minahasa'),
('7103', '71', 'Kab. Kepulauan Sangihe'),
('7104', '71', 'Kab. Kepulauan Talaud'),
('7105', '71', 'Kab. Minahasa Selatan'),
('7106', '71', 'Kab. Minahasa Utara'),
('7107', '71', 'Kab. Bolaang Mongondow Utara'),
('7108', '71', 'Kab. Siau Tagulandang Biaro'),
('7109', '71', 'Kab. Minahasa Tenggara'),
('7110', '71', 'Kab. Bolaang Mongondow Selatan'),
('7111', '71', 'Kab. Bolaang Mongondow Timur'),
('7171', '71', 'Kota Manado'),
('7172', '71', 'Kota Bitung'),
('7173', '71', 'Kota Tomohon'),
('7174', '71', 'Kota Kotamobagu'),
('7201', '72', 'Kab. Banggai Kepulauan'),
('7202', '72', 'Kab. Banggai'),
('7203', '72', 'Kab. Morowali'),
('7204', '72', 'Kab. Poso'),
('7205', '72', 'Kab. Donggala'),
('7206', '72', 'Kab. Toli-toli'),
('7207', '72', 'Kab. Buol'),
('7208', '72', 'Kab. Parigi Moutong'),
('7209', '72', 'Kab. Tojo Una-una'),
('7210', '72', 'Kab. Sigi'),
('7271', '72', 'Kota Palu'),
('7301', '73', 'Kab. Kepulauan Selayar'),
('7302', '73', 'Kab. Bulukumba'),
('7303', '73', 'Kab. Bantaeng'),
('7304', '73', 'Kab. Jeneponto'),
('7305', '73', 'Kab. Takalar'),
('7306', '73', 'Kab. Gowa'),
('7307', '73', 'Kab. Sinjai'),
('7308', '73', 'Kab. Maros'),
('7309', '73', 'Kab. Pangkajene Dan Kepulauan'),
('7310', '73', 'Kab. Barru'),
('7311', '73', 'Kab. Bone'),
('7312', '73', 'Kab. Soppeng'),
('7313', '73', 'Kab. Wajo'),
('7314', '73', 'Kab. Sidenreng Rappang'),
('7315', '73', 'Kab. Pinrang'),
('7316', '73', 'Kab. Enrekang'),
('7317', '73', 'Kab. Luwu'),
('7318', '73', 'Kab. Tana Toraja'),
('7322', '73', 'Kab. Luwu Utara'),
('7325', '73', 'Kab. Luwu Timur'),
('7326', '73', 'Kab. Toraja Utara'),
('7371', '73', 'Kota Makassar'),
('7372', '73', 'Kota Parepare'),
('7373', '73', 'Kota Palopo'),
('7401', '74', 'Kab. Buton'),
('7402', '74', 'Kab. Muna'),
('7403', '74', 'Kab. Konawe'),
('7404', '74', 'Kab. Kolaka'),
('7405', '74', 'Kab. Konawe Selatan'),
('7406', '74', 'Kab. Bombana'),
('7407', '74', 'Kab. Wakatobi'),
('7408', '74', 'Kab. Kolaka Utara'),
('7409', '74', 'Kab. Buton Utara'),
('7410', '74', 'Kab. Konawe Utara'),
('7471', '74', 'Kota Kendari'),
('7472', '74', 'Kota Baubau'),
('7501', '75', 'Kab. Boalemo'),
('7502', '75', 'Kab. Gorontalo'),
('7503', '75', 'Kab. Pohuwato'),
('7504', '75', 'Kab. Bone Bolango'),
('7505', '75', 'Kab. Gorontalo Utara'),
('7571', '75', 'Kota Gorontalo'),
('7601', '76', 'Kab. Majene'),
('7602', '76', 'Kab. Polewali Mandar'),
('7603', '76', 'Kab. Mamasa'),
('7604', '76', 'Kab. Mamuju'),
('7605', '76', 'Kab. Mamuju Utara'),
('8101', '81', 'Kab. Maluku Tenggara Barat'),
('8102', '81', 'Kab. Maluku Tenggara'),
('8103', '81', 'Kab. Maluku Tengah'),
('8104', '81', 'Kab. Buru'),
('8105', '81', 'Kab. Kepulauan Aru'),
('8106', '81', 'Kab. Seram Bagian Barat'),
('8107', '81', 'Kab. Seram Bagian Timur'),
('8108', '81', 'Kab. Maluku Barat Daya'),
('8109', '81', 'Kab. Buru Selatan'),
('8171', '81', 'Kota Ambon'),
('8172', '81', 'Kota Tual'),
('8201', '82', 'Kab. Halmahera Barat'),
('8202', '82', 'Kab. Halmahera Tengah'),
('8203', '82', 'Kab. Kepulauan Sula'),
('8204', '82', 'Kab. Halmahera Selatan'),
('8205', '82', 'Kab. Halmahera Utara'),
('8206', '82', 'Kab. Halmahera Timur'),
('8207', '82', 'Kab. Pulau Morotai'),
('8271', '82', 'Kota Ternate'),
('8272', '82', 'Kota Tidore Kepulauan'),
('9101', '91', 'Kab. Fakfak'),
('9102', '91', 'Kab. Kaimana'),
('9103', '91', 'Kab. Teluk Wondama'),
('9104', '91', 'Kab. Teluk Bintuni'),
('9105', '91', 'Kab. Manokwari'),
('9106', '91', 'Kab. Sorong Selatan'),
('9107', '91', 'Kab. Sorong'),
('9108', '91', 'Kab. Raja Ampat'),
('9109', '91', 'Kab. Tambrauw'),
('9110', '91', 'Kab. Maybrat'),
('9171', '91', 'Kota Sorong'),
('9401', '94', 'Kab. Merauke'),
('9402', '94', 'Kab. Jayawijaya'),
('9403', '94', 'Kab. Jayapura'),
('9404', '94', 'Kab. Nabire'),
('9408', '94', 'Kab. Kepulauan Yapen'),
('9409', '94', 'Kab. Biak Numfor'),
('9410', '94', 'Kab. Paniai'),
('9411', '94', 'Kab. Puncak Jaya'),
('9412', '94', 'Kab. Mimika'),
('9413', '94', 'Kab. Boven Digoel'),
('9414', '94', 'Kab. Mappi'),
('9415', '94', 'Kab. Asmat'),
('9416', '94', 'Kab. Yahukimo'),
('9417', '94', 'Kab. Pegunungan Bintang'),
('9418', '94', 'Kab. Tolikara'),
('9419', '94', 'Kab. Sarmi'),
('9420', '94', 'Kab. Keerom'),
('9426', '94', 'Kab. Waropen'),
('9427', '94', 'Kab. Supiori'),
('9428', '94', 'Kab. Mamberamo Raya'),
('9429', '94', 'Kab. Nduga'),
('9430', '94', 'Kab. Lanny Jaya'),
('9431', '94', 'Kab. Mamberamo Tengah'),
('9432', '94', 'Kab. Yalimo'),
('9433', '94', 'Kab. Puncak'),
('9434', '94', 'Kab. Dogiyai'),
('9435', '94', 'Kab. Intan Jaya'),
('9436', '94', 'Kab. Deiyai'),
('9471', '94', 'Kota Jayapura');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lamaran`
--

CREATE TABLE `lamaran` (
  `id_lamaran` int(8) NOT NULL,
  `pekerjaan` int(100) DEFAULT NULL,
  `id_jobseeker` int(15) NOT NULL,
  `aktif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lamaran`
--

INSERT INTO `lamaran` (`id_lamaran`, `pekerjaan`, `id_jobseeker`, `aktif`) VALUES
(1, 23, 1, 1),
(2, 6, 2, 0),
(3, 23, 2, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta_careerday`
--

CREATE TABLE `peserta_careerday` (
  `id_pendaftar` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `jk` enum('Laki - Laki','Perempuan','','') NOT NULL,
  `asal_sekolah_pt` varchar(150) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `email` varchar(150) NOT NULL,
  `tahun_lulus_terakhir` year(4) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `alasan_ikut` text NOT NULL,
  `tanggal_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peserta_careerday`
--

INSERT INTO `peserta_careerday` (`id_pendaftar`, `id_event`, `nama`, `jk`, `asal_sekolah_pt`, `tgl_lahir`, `alamat`, `nohp`, `email`, `tahun_lulus_terakhir`, `foto`, `alasan_ikut`, `tanggal_daftar`) VALUES
(6, 86, 'bismillah', 'Laki - Laki', 'itera', '2019-08-27', 'jajaran baru', '085357037093', 'bismil@gmail.com', 2014, 'b7e819366aa1095bd652f1251d919d13.jpg', 'bismillah', '2019-08-12 07:23:27'),
(7, 86, 'purwati', 'Perempuan', 'sdn 2 jajaran baru', '2019-08-01', 'jatinegara', '085357037093', 'purwati@gmail.com', 2010, 'e52d24f829ef7578f9e53dcc80f3453a.jpg', 'karena disini saya ingin mencari kerja', '2019-08-12 08:11:16'),
(8, 86, 'mas dirga', 'Laki - Laki', 'itera', '2019-08-01', 'itera', '085357037093', 'dirga@gmail.com', 2019, '056e8e2c6e85464979bd3e3f146605db.jpg', 'ingin mendapatkan pekerjaan', '2019-08-15 01:44:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id` varchar(2) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id`, `nama`) VALUES
('11', 'Aceh'),
('12', 'Sumatera Utara'),
('13', 'Sumatera Barat'),
('14', 'Riau'),
('15', 'Jambi'),
('16', 'Sumatera Selatan'),
('17', 'Bengkulu'),
('18', 'Lampung'),
('19', 'Kepulauan Bangka Belitung'),
('21', 'Kepulauan Riau'),
('31', 'Dki Jakarta'),
('32', 'Jawa Barat'),
('33', 'Jawa Tengah'),
('34', 'Di Yogyakarta'),
('35', 'Jawa Timur'),
('36', 'Banten'),
('51', 'Bali'),
('52', 'Nusa Tenggara Barat'),
('53', 'Nusa Tenggara Timur'),
('61', 'Kalimantan Barat'),
('62', 'Kalimantan Tengah'),
('63', 'Kalimantan Selatan'),
('64', 'Kalimantan Timur'),
('65', 'Kalimantan Utara'),
('71', 'Sulawesi Utara'),
('72', 'Sulawesi Tengah'),
('73', 'Sulawesi Selatan'),
('74', 'Sulawesi Tenggara'),
('75', 'Gorontalo'),
('76', 'Sulawesi Barat'),
('81', 'Maluku'),
('82', 'Maluku Utara'),
('91', 'Papua Barat'),
('94', 'Papua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `requirement_berkas`
--

CREATE TABLE `requirement_berkas` (
  `id_requirement` int(8) NOT NULL,
  `nama_requirement` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `requirement_berkas`
--

INSERT INTO `requirement_berkas` (`id_requirement`, `nama_requirement`) VALUES
(2, 'tes'),
(5, 'SKCK'),
(7, 'Ijazah sma'),
(8, 'Bebas Narkoba');

-- --------------------------------------------------------

--
-- Struktur dari tabel `requirement_jurusan`
--

CREATE TABLE `requirement_jurusan` (
  `id_requirement` int(8) NOT NULL,
  `nama_jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `requirement_jurusan`
--

INSERT INTO `requirement_jurusan` (`id_requirement`, `nama_jurusan`) VALUES
(2, 'Teknik Informatika'),
(3, 'Teknik Sipil'),
(4, 'Teknik Industri'),
(5, 'teknik pertambangan'),
(6, 'Semua Jurusan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `berita_id` int(11) NOT NULL,
  `berita_judul` varchar(150) DEFAULT NULL,
  `berita_isi` text,
  `berita_image` varchar(40) DEFAULT NULL,
  `berita_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_berita`
--

INSERT INTO `tbl_berita` (`berita_id`, `berita_judul`, `berita_isi`, `berita_image`, `berita_tanggal`) VALUES
(12, 'Pengumuman Hasil Test & Interview 11 September 2019 (Majalengka)', '<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Dear Pelamar,</span></span></p>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-lg-9 col-md-8\">\r\n<div class=\"blog-content\">\r\n<p style=\"text-align:justify\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Terima kasih telah berpartisipasi dalam proses seleksi masuk di&nbsp;<strong>PT Kaldu Sari Nabati Indonesia</strong>, pada&nbsp;<strong> Rabu 11 September 2019 di Plant Majalengka</strong>, dengan ini kami umumkan hasilnya : </span></span></p>\r\n\r\n<table class=\"Table\" style=\"width:5.75in\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color:#95b3d7; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; height:17px; vertical-align:bottom; width:47px\">\r\n			<p style=\"text-align:center\"><a name=\"RANGE!A1:E1\"><span style=\"font-size:9.0pt\"><span style=\"color:black\">NO</span></span></a></p>\r\n			</td>\r\n			<td style=\"background-color:#95b3d7; border-bottom:none; border-left:none; border-right:1px solid black; border-top:1px solid black; height:17px; vertical-align:bottom; width:219px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:9pt\">NAMA</span></p>\r\n			</td>\r\n			<td style=\"background-color:#95b3d7; border-bottom:1px solid black; border-left:none; border-right:none; border-top:1px solid black; height:17px; vertical-align:bottom; width:80px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:9pt\">BAGIAN</span></p>\r\n			</td>\r\n			<td style=\"background-color:#95b3d7; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; height:17px; vertical-align:bottom; width:72px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:9pt\">JK</span></p>\r\n			</td>\r\n			<td style=\"background-color:#95b3d7; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:17px; vertical-align:bottom; width:135px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:9pt\">NO. KTP</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; height:17px; vertical-align:bottom; width:47px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:9.0pt\">1</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; height:17px; width:219px\">\r\n			<p><span style=\"font-size:8pt\"><span style=\"font-family:Arial,sans-serif\">ACHMAD SIDIK</span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:80px\">\r\n			<p><span style=\"font-size:8pt\">FORMULASI</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:72px\">\r\n			<p><span style=\"font-size:8pt\">Laki Laki</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:135px\">\r\n			<p><span style=\"font-size:8pt\">3209232101010006</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; height:17px; vertical-align:bottom; width:47px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:9.0pt\">2</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:17px; width:219px\">\r\n			<p><span style=\"font-size:8pt\"><span style=\"font-family:Arial,sans-serif\">AI QODARIYAH </span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:80px\">\r\n			<p><span style=\"font-size:8pt\">FORMULASI</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:72px\">\r\n			<p><span style=\"font-size:8pt\">Perempuan</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:135px\">\r\n			<p><span style=\"font-size:8pt\">3208184301000002</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; height:17px; vertical-align:bottom; width:47px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:9.0pt\">3</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:17px; width:219px\">\r\n			<p><span style=\"font-size:8pt\"><span style=\"font-family:Arial,sans-serif\">ASEP MAULANA</span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:80px\">\r\n			<p><span style=\"font-size:8pt\">FORMULASI</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:72px\">\r\n			<p><span style=\"font-size:8pt\">Laki Laki</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:135px\">\r\n			<p><span style=\"font-size:8pt\">3209232205980003</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; height:17px; vertical-align:bottom; width:47px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:9.0pt\">4</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:17px; width:219px\">\r\n			<p><span style=\"font-size:8pt\"><span style=\"font-family:Arial,sans-serif\">ERIKA LUSIANA WULANDARI </span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:80px\">\r\n			<p><span style=\"font-size:8pt\">FORMULASI</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:72px\">\r\n			<p><span style=\"font-size:8pt\">Perempuan</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:135px\">\r\n			<p><span style=\"font-size:8pt\">3208075804990003</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; height:17px; vertical-align:bottom; width:47px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:9.0pt\">5</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:17px; width:219px\">\r\n			<p><span style=\"font-size:8pt\"><span style=\"font-family:Arial,sans-serif\">DIMAS ISMAWAN</span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:80px\">\r\n			<p><span style=\"font-size:8pt\">QC</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:72px\">\r\n			<p><span style=\"font-size:8pt\">Laki Laki</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:135px\">\r\n			<p><span style=\"font-size:8pt\">3207102807950001</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; height:17px; vertical-align:bottom; width:47px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:9.0pt\">6</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:17px; width:219px\">\r\n			<p><span style=\"font-size:8pt\"><span style=\"font-family:Arial,sans-serif\">SUMANTO</span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:80px\">\r\n			<p><span style=\"font-size:8pt\">QC</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:72px\">\r\n			<p><span style=\"font-size:8pt\">Laki Laki</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:135px\">\r\n			<p><span style=\"font-size:8pt\">3210150109950021</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; height:17px; vertical-align:bottom; width:47px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:9.0pt\">7</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:17px; width:219px\">\r\n			<p><span style=\"font-size:8pt\"><span style=\"font-family:Arial,sans-serif\">YULIKHA</span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:80px\">\r\n			<p><span style=\"font-size:8pt\">QC</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:72px\">\r\n			<p><span style=\"font-size:8pt\">Perempuan</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:135px\">\r\n			<p><span style=\"font-size:8pt\">3209264904960007</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; height:17px; vertical-align:bottom; width:47px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:9.0pt\">8</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:17px; width:219px\">\r\n			<p><span style=\"font-size:8pt\"><span style=\"font-family:Arial,sans-serif\">ALDA RIAN</span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:80px\">\r\n			<p><span style=\"font-size:8pt\">SUPPORTING</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:72px\">\r\n			<p><span style=\"font-size:8pt\">Laki Laki</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:135px\">\r\n			<p><span style=\"font-size:8pt\">3210231402980021</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; height:17px; vertical-align:bottom; width:47px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:9.0pt\">9</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:17px; width:219px\">\r\n			<p><span style=\"font-size:8pt\"><span style=\"font-family:Arial,sans-serif\">BUDIAWAN</span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:80px\">\r\n			<p><span style=\"font-size:8pt\">SUPPORTING</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:72px\">\r\n			<p><span style=\"font-size:8pt\">Laki Laki</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:135px\">\r\n			<p><span style=\"font-size:8pt\">3210100801950021</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; height:17px; vertical-align:bottom; width:47px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:9.0pt\">10</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:17px; width:219px\">\r\n			<p><span style=\"font-size:8pt\"><span style=\"font-family:Arial,sans-serif\">DEDE ABDUL AZIZ</span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:80px\">\r\n			<p><span style=\"font-size:8pt\">SUPPORTING</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:72px\">\r\n			<p><span style=\"font-size:8pt\">Laki Laki</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:135px\">\r\n			<p><span style=\"font-size:8pt\">3207102512970002</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; height:17px; vertical-align:bottom; width:47px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:9.0pt\">11</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:17px; width:219px\">\r\n			<p><span style=\"font-size:8pt\"><span style=\"font-family:Arial,sans-serif\">DIAN HERDIANSAH NUGRAHA</span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:80px\">\r\n			<p><span style=\"font-size:8pt\">SUPPORTING</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:72px\">\r\n			<p><span style=\"font-size:8pt\">Laki Laki</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:135px\">\r\n			<p><span style=\"font-size:8pt\">3210022206010001</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; height:17px; vertical-align:bottom; width:47px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:9.0pt\">12</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:17px; width:219px\">\r\n			<p><span style=\"font-size:8pt\"><span style=\"font-family:Arial,sans-serif\">DIMAS BUDIANA</span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:80px\">\r\n			<p><span style=\"font-size:8pt\">SUPPORTING</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:72px\">\r\n			<p><span style=\"font-size:8pt\">Laki Laki</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:135px\">\r\n			<p><span style=\"font-size:8pt\">3210172203000001</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; height:17px; vertical-align:bottom; width:47px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:9.0pt\">13</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:17px; width:219px\">\r\n			<p><span style=\"font-size:8pt\"><span style=\"font-family:Arial,sans-serif\">EDI SANTOSO</span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:80px\">\r\n			<p><span style=\"font-size:8pt\">SUPPORTING</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:72px\">\r\n			<p><span style=\"font-size:8pt\">Laki Laki</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:135px\">\r\n			<p><span style=\"font-size:8pt\">3209171703930007</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:none; border-top:none; height:17px; vertical-align:bottom; width:47px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:9.0pt\">14</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:17px; width:219px\">\r\n			<p><span style=\"font-size:8pt\"><span style=\"font-family:Arial,sans-serif\">MUHAMAD SAEFULLOH</span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:80px\">\r\n			<p><span style=\"font-size:8pt\">SUPPORTING</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:72px\">\r\n			<p><span style=\"font-size:8pt\">Laki Laki</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; vertical-align:bottom; width:135px\">\r\n			<p><span style=\"font-size:8pt\">3209330609990001</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Selamat untuk yang lolos seleksi untuk bagian di atas</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Diharapkan datang untuk <strong>Medical Check Up (MCU)</strong>&nbsp;dihari <strong>Kamis 12 September 2019 </strong>&nbsp;<strong>Pukul 08.00 WIB</strong>&nbsp;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">di&nbsp;RS. SUMBER WARAS, JL. URIP SUMOHARJO NO. 5 CIWARINGIN KAB. CIREBON</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Berpakaian Bebas &amp; Rapih dan membawa biaya Medical Checkup Sebesar Rp 120.000,- dan KTP asli</span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Setelah medical check up selesai boleh kembali pulang dan datang kembali ke &nbsp;<strong>PT Kaldu Sari Nabati Indonesia Plant Majalengka</strong>&nbsp;di hari&nbsp;<strong> Jumat 13 September 2019 pukul 07.30 WIB</strong>&nbsp;dengan agenda&nbsp;<strong>Pengumuman Hasil MCU</strong>. Persyaratan yang harus di bawa diantaranya :</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">1. Fc KTP 2 Lembar</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">2. Fc Kartu Keluarga 2 Lembar</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">3. Materai 6000 sebanyak 2 Lembar</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">4. Pulpen warna hitam 2 Pcs</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">5. Pakaian Hitam Putih</span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Terimakasih.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Hormat Kami,</span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><strong><u><span style=\"font-size:12pt\"><span style=\"font-family:Arial,sans-serif\">Recruitment Team</span></span></u></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><strong><span style=\"font-size:12pt\"><span style=\"font-family:Arial,sans-serif\">PT Kaldu Sari Nabati Indonesia - Majalengka</span></span></strong></p>\r\n</div>\r\n</div>\r\n</div>\r\n', '7d44766f975eba47815fb8de3036665c.png', '2019-09-25 18:48:11'),
(13, 'Pengumuman Penerimaan Dosen Tetap Non PNS ITERA 16 Program Studi Baru Tahun 2019', '<div><!-- Custom Tabs -->\r\n<div class=\"nav-tabs-custom\">\r\n<ul>\r\n	<li><a href=\"#tab_1\">SOP Tugas Akhir dan Kelulusan</a></li>\r\n	<li><a href=\"#tab_2\">Diagram Alir Tugas Akhir</a></li>\r\n	<li><a href=\"#tab_3\">Hak dan Kewajiban Pelaku Tugas Akhir</a></li>\r\n</ul>\r\n\r\n<div class=\"tab-content\">\r\n<div class=\"active tab-pane\" id=\"tab_1\">\r\n<div>\r\n<p style=\"text-align:center\"><iframe class=\"gde-frame\" scrolling=\"no\" src=\"//docs.google.com/viewer?url=http%3A%2F%2Ftg.itera.ac.id%2Fwp-content%2Fuploads%2F2017%2F12%2FDiagram-Alir-Tugas-Akhir.pdf&amp;hl=en_US&amp;embedded=true\" style=\"width:900px; height:400px; border: none;\"></iframe></p>\r\n\r\n<p><a class=\"gde-link\" href=\"http://tg.itera.ac.id/wp-content/uploads/2017/12/Diagram-Alir-Tugas-Akhir.pdf\">Download (PDF, 14KB) </a></p>\r\n</div>\r\n</div>\r\n<!-- /.tab-pane -->\r\n\r\n<div class=\"tab-pane\" id=\"tab_2\">\r\n<div>\r\n<p style=\"text-align:center\"><iframe class=\"gde-frame\" scrolling=\"no\" src=\"//docs.google.com/viewer?url=http%3A%2F%2Ftg.itera.ac.id%2Fwp-content%2Fuploads%2F2017%2F12%2FDiagram-Alir-Tugas-Akhir.pdf&amp;hl=en_US&amp;embedded=true\" style=\"width:900px; height:400px; border: none;\"></iframe></p>\r\n\r\n<p><a class=\"gde-link\" href=\"http://tg.itera.ac.id/wp-content/uploads/2017/12/Diagram-Alir-Tugas-Akhir.pdf\">Download (PDF, 14KB) </a></p>\r\n</div>\r\n</div>\r\n<!-- /.tab-pane -->\r\n\r\n<div class=\"tab-pane\" id=\"tab_3\">\r\n<div>\r\n<p style=\"text-align:center\"><iframe class=\"gde-frame\" scrolling=\"no\" src=\"//docs.google.com/viewer?url=http%3A%2F%2Ftg.itera.ac.id%2Fwp-content%2Fuploads%2F2017%2F12%2FHak-dan-Kewajiban-Pelaku-Tugas-Akhir.pdf&amp;hl=en_US&amp;embedded=true\" style=\"width:900px; height:400px; border: none;\"></iframe></p>\r\n\r\n<p><a class=\"gde-link\" href=\"http://tg.itera.ac.id/wp-content/uploads/2017/12/Hak-dan-Kewajiban-Pelaku-Tugas-Akhir.pdf\">Download (PDF, 218KB) </a></p>\r\n</div>\r\n</div>\r\n<!-- /.tab-pane --></div>\r\n<!-- /.tab-content --></div>\r\n<!-- nav-tabs-custom --></div>\r\n', '8203c002786096b70d9cf5a7332560ed.png', '2019-09-25 22:45:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_req_brks`
--

CREATE TABLE `tb_detail_req_brks` (
  `id_detail_req` int(11) NOT NULL,
  `id_requirement` int(8) NOT NULL,
  `id_joblist` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_detail_req_brks`
--

INSERT INTO `tb_detail_req_brks` (`id_detail_req`, `id_requirement`, `id_joblist`) VALUES
(32, 2, 23),
(33, 5, 23),
(34, 7, 23),
(35, 8, 23),
(36, 2, 24),
(37, 5, 24),
(38, 7, 24),
(39, 8, 24),
(40, 2, 25),
(41, 5, 25),
(42, 7, 25),
(43, 8, 25),
(44, 2, 26),
(45, 5, 26),
(46, 7, 26),
(47, 8, 26),
(48, 2, 29),
(49, 5, 29),
(50, 7, 29),
(51, 8, 29);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_req_jrsn`
--

CREATE TABLE `tb_detail_req_jrsn` (
  `id_detail_req` int(8) NOT NULL,
  `id_requirement` int(8) NOT NULL,
  `id_joblist` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_detail_req_jrsn`
--

INSERT INTO `tb_detail_req_jrsn` (`id_detail_req`, `id_requirement`, `id_joblist`) VALUES
(1, 4, 23),
(2, 3, 24),
(3, 5, 25),
(4, 2, 26),
(5, 3, 26),
(6, 4, 26),
(7, 5, 26),
(8, 4, 29),
(9, 2, 29),
(10, 5, 29);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_akun` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_user` enum('1','2','3','') DEFAULT NULL COMMENT '1. untuk company 2. untuk jobseeker 3. untuk admin',
  `status` int(1) DEFAULT '0' COMMENT '0. nonaktif 1. aktif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_akun`, `username`, `password`, `role_user`, `status`) VALUES
(1, 'admin', '2199a8069abaeb5679eca44782df7578ed4e83f8960785699ec43331f7b77ef553c0111c2e823a4e70d273e53e9c626dac0bdd220c5e63163d5f2f159d3d0a76', '3', 1),
(2, 'company', 'fa5c7a530e42271e741f057614ad91621f120682f6289c5f28b57f3d6754ea7f62ac0386f68d84dbb752ba665a5db780d69ade4f213cc30e222a0e6e300e0ead', '1', 1),
(3, 'jobseeker', 'fa5c7a530e42271e741f057614ad91621f120682f6289c5f28b57f3d6754ea7f62ac0386f68d84dbb752ba665a5db780d69ade4f213cc30e222a0e6e300e0ead', '2', 1),
(11, 'surya', 'ca4ea13f7fa615b25ab6605322c4ad875a296b978bdacc4d3951b40735292a282edd2229b7f2ecb42971171da75c82fef01595c817084fd438c868144578b3bf', '1', 1),
(12, 'bismillah', '1e140057670f42e762730c0e16e9cdc40c4b4f30808592052a832fefed63aea934b31afea2e15dcd066f5f678ad5df2fe46882275399eb5e27b52c8668a48446', '1', 1),
(13, 'nocturnal', '520816f038f9462e7fb7a68788f62758f10898a241058a6a7af564ebe672f879766f800cadef2b8e4a619c9baf8be3aadc8b624346ea857cd7f8e2d78ba94a94', '1', 1),
(19, 'pak okata', 'fa5c7a530e42271e741f057614ad91621f120682f6289c5f28b57f3d6754ea7f62ac0386f68d84dbb752ba665a5db780d69ade4f213cc30e222a0e6e300e0ead', '2', 0),
(20, 'taufiksan', 'fa5c7a530e42271e741f057614ad91621f120682f6289c5f28b57f3d6754ea7f62ac0386f68d84dbb752ba665a5db780d69ade4f213cc30e222a0e6e300e0ead', '2', 1),
(21, 'dicky', '2bd6f308842c3d035e00310bb2ef6c363f3c2d96641c56c5f3a824e1f37ce344c80e17fd569e6fbd0643cf3239063a1056c373b7e06f386a07d907356327b285', '1', 1),
(22, 'taufik', 'fa5c7a530e42271e741f057614ad91621f120682f6289c5f28b57f3d6754ea7f62ac0386f68d84dbb752ba665a5db780d69ade4f213cc30e222a0e6e300e0ead', '1', 0),
(23, 'ilman', 'e67106f20e7f7014e3ab9efb24b6e200bab662b97af05b00bd9aa47fca64af0c954075d1b4d9689104b3108aeeceed2c5804c3975a0e0a5c36715cd4eb1f4b33', '2', 1),
(24, 'purwati', 'cd8f3611aeac97018a328925557cc75a089bc2cbcf735320640dc7975c8fd1c08495a1a2997ecf2aa646dc5928b846f0b40a3e9e9d5e258ddcccc77924632985', '2', 1),
(25, 'nugraha', 'a737efa71b3616598918732733d36899fd79e65aef65fda710eb0a34a23c48348d96b6b3e23cf6cec7d3f98cca504e5ba7e43d6c25a25b3df561eb5e996bd32d', '1', 0),
(26, 'musirawas', '40a1ea4482c936cb519387248f4628a018983e8ca5bcf4b6151226daa38bc923b8f36d3f55a2de66fe740a31c90e6791b281279ef60e9dd9cfb53fc4b3901ba8', '1', 1),
(27, 'ringgom', 'bc049b26822f34db8c04b75885b4bfbd4cfc199b1c9554c214657f23a3c20aca93aeb594c5de52217a09bea644dc93ec1a641c5613ac31022ac3cd8e4a68640a', '2', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_akun` (`id_akun`);

--
-- Indeks untuk tabel `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`Id_perusahaan`),
  ADD KEY `id_industri` (`id_industri`),
  ADD KEY `id_provinsi` (`id_provinsi`),
  ADD KEY `id_kabupaten_kota` (`id_kabupaten_kota`),
  ADD KEY `id_akun` (`id_akun`);

--
-- Indeks untuk tabel `industri`
--
ALTER TABLE `industri`
  ADD PRIMARY KEY (`id_industri`);

--
-- Indeks untuk tabel `joblist`
--
ALTER TABLE `joblist`
  ADD PRIMARY KEY (`id_joblist`),
  ADD KEY `perusahaan` (`perusahaan`);

--
-- Indeks untuk tabel `jobseeker`
--
ALTER TABLE `jobseeker`
  ADD PRIMARY KEY (`id_jobseeker`),
  ADD KEY `id_akun` (`id_akun`);

--
-- Indeks untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lamaran`
--
ALTER TABLE `lamaran`
  ADD PRIMARY KEY (`id_lamaran`),
  ADD KEY `lamaran_ibfk_4` (`pekerjaan`),
  ADD KEY `id_jobseeker` (`id_jobseeker`);

--
-- Indeks untuk tabel `peserta_careerday`
--
ALTER TABLE `peserta_careerday`
  ADD PRIMARY KEY (`id_pendaftar`),
  ADD KEY `id_event` (`id_event`);

--
-- Indeks untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `requirement_berkas`
--
ALTER TABLE `requirement_berkas`
  ADD PRIMARY KEY (`id_requirement`);

--
-- Indeks untuk tabel `requirement_jurusan`
--
ALTER TABLE `requirement_jurusan`
  ADD PRIMARY KEY (`id_requirement`);

--
-- Indeks untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indeks untuk tabel `tb_detail_req_brks`
--
ALTER TABLE `tb_detail_req_brks`
  ADD PRIMARY KEY (`id_detail_req`),
  ADD KEY `id_requirement` (`id_requirement`),
  ADD KEY `id_joblist` (`id_joblist`);

--
-- Indeks untuk tabel `tb_detail_req_jrsn`
--
ALTER TABLE `tb_detail_req_jrsn`
  ADD PRIMARY KEY (`id_detail_req`),
  ADD KEY `tb_detail_req_jrsn_ibfk_1` (`id_joblist`),
  ADD KEY `id_requirement` (`id_requirement`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_akun`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT untuk tabel `company`
--
ALTER TABLE `company`
  MODIFY `Id_perusahaan` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `industri`
--
ALTER TABLE `industri`
  MODIFY `id_industri` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `joblist`
--
ALTER TABLE `joblist`
  MODIFY `id_joblist` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `jobseeker`
--
ALTER TABLE `jobseeker`
  MODIFY `id_jobseeker` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `lamaran`
--
ALTER TABLE `lamaran`
  MODIFY `id_lamaran` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `peserta_careerday`
--
ALTER TABLE `peserta_careerday`
  MODIFY `id_pendaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `requirement_berkas`
--
ALTER TABLE `requirement_berkas`
  MODIFY `id_requirement` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `requirement_jurusan`
--
ALTER TABLE `requirement_jurusan`
  MODIFY `id_requirement` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `berita_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_detail_req_brks`
--
ALTER TABLE `tb_detail_req_brks`
  MODIFY `id_detail_req` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `tb_detail_req_jrsn`
--
ALTER TABLE `tb_detail_req_jrsn`
  MODIFY `id_detail_req` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_akun` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `user` (`id_akun`);

--
-- Ketidakleluasaan untuk tabel `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_ibfk_1` FOREIGN KEY (`id_industri`) REFERENCES `industri` (`id_industri`) ON UPDATE CASCADE,
  ADD CONSTRAINT `company_ibfk_2` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsi` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `company_ibfk_3` FOREIGN KEY (`id_kabupaten_kota`) REFERENCES `kabupaten` (`id`),
  ADD CONSTRAINT `company_ibfk_4` FOREIGN KEY (`id_akun`) REFERENCES `user` (`id_akun`);

--
-- Ketidakleluasaan untuk tabel `joblist`
--
ALTER TABLE `joblist`
  ADD CONSTRAINT `joblist_ibfk_1` FOREIGN KEY (`perusahaan`) REFERENCES `company` (`Id_perusahaan`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jobseeker`
--
ALTER TABLE `jobseeker`
  ADD CONSTRAINT `jobseeker_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `user` (`id_akun`);

--
-- Ketidakleluasaan untuk tabel `lamaran`
--
ALTER TABLE `lamaran`
  ADD CONSTRAINT `lamaran_ibfk_4` FOREIGN KEY (`pekerjaan`) REFERENCES `joblist` (`id_joblist`) ON UPDATE CASCADE,
  ADD CONSTRAINT `lamaran_ibfk_5` FOREIGN KEY (`id_jobseeker`) REFERENCES `jobseeker` (`id_jobseeker`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `peserta_careerday`
--
ALTER TABLE `peserta_careerday`
  ADD CONSTRAINT `peserta_careerday_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `calendar` (`id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_detail_req_brks`
--
ALTER TABLE `tb_detail_req_brks`
  ADD CONSTRAINT `tb_detail_req_brks_ibfk_2` FOREIGN KEY (`id_requirement`) REFERENCES `requirement_berkas` (`id_requirement`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_detail_req_brks_ibfk_3` FOREIGN KEY (`id_joblist`) REFERENCES `joblist` (`id_joblist`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_detail_req_jrsn`
--
ALTER TABLE `tb_detail_req_jrsn`
  ADD CONSTRAINT `tb_detail_req_jrsn_ibfk_1` FOREIGN KEY (`id_joblist`) REFERENCES `joblist` (`id_joblist`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_detail_req_jrsn_ibfk_2` FOREIGN KEY (`id_requirement`) REFERENCES `requirement_jurusan` (`id_requirement`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
