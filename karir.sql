-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Sep 2019 pada 06.26
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
  `Nama` varchar(100) NOT NULL,
  `Email_admin` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(100) NOT NULL DEFAULT 'avatar.svg',
  `ref` int(11) NOT NULL,
  `time_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `Nama`, `Email_admin`, `password`, `foto`, `ref`, `time_reg`) VALUES
(1, 'Taufik Agung Santoso', 'admin@admin', '2199a8069abaeb5679eca44782df7578ed4e83f8960785699ec43331f7b77ef553c0111c2e823a4e70d273e53e9c626dac0bdd220c5e63163d5f2f159d3d0a76', 'avatar.svg', 0, '2019-08-05 03:30:56');

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
(86, 'career day', 'career day adalah ...', '#FF8C00', '2019-08-12', '2019-09-07', '2019-08-12 14:10:12', NULL, '2019-08-29 10:53:19', NULL),
(96, 'PEMBAYARAN UKT', '', '', '2019-08-12', '2019-08-21', '2019-08-15 09:43:57', NULL, NULL, NULL),
(98, 'SELESAI MAGANG', '', '', '2019-09-11', '2019-09-30', '2019-08-15 09:45:07', NULL, NULL, NULL),
(101, 'Pengumuman Seleksi', 'seleksi masuk perguruan tinggi', '', '2019-08-25', '2019-08-25', '2019-08-16 11:15:39', NULL, NULL, NULL),
(102, 'snmptn', 'snmptn', '', '2019-09-01', '2019-09-10', '2019-09-02 14:11:18', NULL, NULL, NULL),
(103, 'GSDFG', 'SFG', '', '2019-09-05', '2019-09-10', '2019-09-02 14:18:25', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `company`
--

CREATE TABLE `company` (
  `Id_perusahaan` int(8) NOT NULL,
  `Nama_perusahaan` varchar(100) NOT NULL,
  `Nama_officer` varchar(50) NOT NULL,
  `Email_officer` varchar(100) NOT NULL,
  `Email_perusahaan` varchar(100) NOT NULL,
  `deskripsi_perusahaan` text NOT NULL,
  `id_industri` int(8) NOT NULL,
  `id_provinsi` varchar(2) NOT NULL,
  `id_kabupaten_kota` varchar(4) NOT NULL,
  `Password_perusahaan` varchar(255) NOT NULL,
  `Logo_perusahaan` varchar(100) NOT NULL DEFAULT 'default.png',
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

INSERT INTO `company` (`Id_perusahaan`, `Nama_perusahaan`, `Nama_officer`, `Email_officer`, `Email_perusahaan`, `deskripsi_perusahaan`, `id_industri`, `id_provinsi`, `id_kabupaten_kota`, `Password_perusahaan`, `Logo_perusahaan`, `Website`, `telp_perusahaan`, `telp_officer`, `hp_officer`, `Alamat`, `kode_pos`, `waktu_pendaftaran`) VALUES
(4, 'ITERA', 'taufik agung santoso', 'taufikagungsantoso17@gmail.com', 'icc@itera.ac.id', 'ini deskripsi perusahaan ITERA', 33, '18', '1803', 'fa5c7a530e42271e741f057614ad91621f120682f6289c5f28b57f3d6754ea7f62ac0386f68d84dbb752ba665a5db780d69ade4f213cc30e222a0e6e300e0ead', 'default.png', 'itera.ac.id', '039239402', '3204809380', '30284039493', 'desa umbul natim\r\nway hui', '35365', '2019-08-16 08:02:59'),
(5, 'PT warung kopi', 'taufik agung santoso', 'taufikagungsantoso07@gmail.com', 'warungkopi@gmail.com', 'ini deskripsi perusahaan warung kopi', 34, '16', '1605', 'fa5c7a530e42271e741f057614ad91621f120682f6289c5f28b57f3d6754ea7f62ac0386f68d84dbb752ba665a5db780d69ade4f213cc30e222a0e6e300e0ead', 'quick.png', 'warungkopi.com', '085356764787', '08535735468', '08764675876', 'jajaran baru', '31657', '2019-09-03 07:52:49');

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
(32, 'geofisika'),
(33, 'perkantoran'),
(34, 'accounting'),
(35, 'developer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `joblist`
--

CREATE TABLE `joblist` (
  `id_joblist` int(100) NOT NULL,
  `Nama_joblist` varchar(150) NOT NULL,
  `perusahaan` int(8) NOT NULL,
  `deadline` date NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '<span class="label label-warning">Pending</span>'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `joblist`
--

INSERT INTO `joblist` (`id_joblist`, `Nama_joblist`, `perusahaan`, `deadline`, `status`) VALUES
(8, 'bismillah', 4, '2019-08-29', '<span class=\"label label-success\">Telah tayang</span>'),
(20, 'dosen informatika', 4, '2019-08-24', '<span class=\"label label-success\">Telah tayang</span>'),
(21, 'accounting', 4, '2019-10-19', '<span class=\"label label-success\">Telah tayang</span>'),
(22, 'programmer', 5, '2019-08-31', '<span class=\"label label-success\">Telah tayang</span>'),
(23, 'hrd', 5, '2019-12-10', '<span class=\"label label-success\">Telah tayang</span>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobseeker_alumni`
--

CREATE TABLE `jobseeker_alumni` (
  `id_jobseeker_alumni` int(8) NOT NULL,
  `Nama_jobseeker` varchar(50) NOT NULL,
  `NIM_jobseeker` int(20) NOT NULL,
  `Email_jobseeker` varchar(50) NOT NULL,
  `nohp_jobseeker` varchar(15) NOT NULL,
  `Password_jobseeker` varchar(255) NOT NULL,
  `foto` varchar(150) NOT NULL DEFAULT 'profil_default.png',
  `sampul` varchar(150) NOT NULL DEFAULT 'sampul_default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jobseeker_alumni`
--

INSERT INTO `jobseeker_alumni` (`id_jobseeker_alumni`, `Nama_jobseeker`, `NIM_jobseeker`, `Email_jobseeker`, `nohp_jobseeker`, `Password_jobseeker`, `foto`, `sampul`) VALUES
(1, 'Taufik Agung Santoso', 0, 'taufik.14116007@student.itera.ac.id', '+6285357037093', 'caf95e9fb3df134411fe6ba6a51dc0bd25c51def721983a4c4a6a4ef763ea3ad569461c0ad8f61bbaf21b0ff477a9c67c6b5426f19977decc59d7fd3fd3a91db', 'profil_default.png', 'sampul_default.png'),
(3, 'yohanes eloi pardamean', 14116059, 'yohanes.14116059@student.itera.ac.id', '08535703709', 'de8ad6f029e922ddabfbd982ef4bc2924d8662cf7dd036aadc652b59320ad1d8da099dd09bed2eab80a2ec5d812fb33883a14e67d122bc286fb5ed38e93e009f', 'profil_default.png', 'sampul_default.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobseeker_mahasiswa`
--

CREATE TABLE `jobseeker_mahasiswa` (
  `id_jobseeker_mhs` int(8) NOT NULL,
  `Nama_jobseeker` varchar(50) NOT NULL,
  `NIM_jobseeker` varchar(50) NOT NULL,
  `Email_jobseeker` varchar(50) NOT NULL,
  `nohp_jobseeker` varchar(50) NOT NULL,
  `Password_jobseeker` varchar(255) NOT NULL,
  `status` enum('Mahasiswa ITERA','Mahasiswa Non ITERA','','') NOT NULL,
  `foto` varchar(150) NOT NULL DEFAULT 'profil_default.png',
  `sampul` varchar(150) NOT NULL DEFAULT 'sampul_default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jobseeker_mahasiswa`
--

INSERT INTO `jobseeker_mahasiswa` (`id_jobseeker_mhs`, `Nama_jobseeker`, `NIM_jobseeker`, `Email_jobseeker`, `nohp_jobseeker`, `Password_jobseeker`, `status`, `foto`, `sampul`) VALUES
(2, 'mahasiswa itera', '14116007', 'mhsitera@gmail.com', '084938493849', 'a992e85d192c8bc4cb7e152ec98a5c42a32243730becaa511bba949ce5fa92d17a49032d999686082ae65469cdd5b3a2c2dac8aa27ab0846cfaf23b4b976c2c4', 'Mahasiswa ITERA', 'profil_default.png', 'sampul_default.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobseeker_nonalumni`
--

CREATE TABLE `jobseeker_nonalumni` (
  `id_jobseeker_nonalumni` int(8) NOT NULL,
  `Nama_jobseeker` varchar(50) NOT NULL,
  `Email_jobseeker` varchar(50) NOT NULL,
  `nohp_jobseeker` varchar(15) NOT NULL,
  `Password_jobseeker` varchar(255) NOT NULL,
  `foto` varchar(150) NOT NULL DEFAULT 'profil_default.png',
  `sampul` varchar(150) NOT NULL DEFAULT 'sampul_default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jobseeker_nonalumni`
--

INSERT INTO `jobseeker_nonalumni` (`id_jobseeker_nonalumni`, `Nama_jobseeker`, `Email_jobseeker`, `nohp_jobseeker`, `Password_jobseeker`, `foto`, `sampul`) VALUES
(1, 'ilman', 'ilman@gmail.com', '085367232946', 'caf95e9fb3df134411fe6ba6a51dc0bd25c51def721983a4c4a6a4ef763ea3ad569461c0ad8f61bbaf21b0ff477a9c67c6b5426f19977decc59d7fd3fd3a91db', 'profil_default.png', 'sampul_default.png'),
(2, 'sunarno', 'sunarno@gmail.com', '085356763564', '3203424970496d3a13f55b0c7f7f01261d41d073691a228f448f11e2930e3cca5a5bd89cc3d5b7fb8ede46092bee7b36f6c19ebba67cd8b2de916a261fefd0d5', 'profil_default.png', 'sampul_default.png');

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
  `alumni` int(8) DEFAULT NULL,
  `nonalumni` int(8) DEFAULT NULL,
  `mahasiswa` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lamaran`
--

INSERT INTO `lamaran` (`id_lamaran`, `pekerjaan`, `alumni`, `nonalumni`, `mahasiswa`) VALUES
(7, 20, NULL, 1, NULL),
(8, 8, 3, NULL, NULL),
(9, 8, 1, NULL, NULL),
(10, 22, 3, NULL, NULL);

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
(3, 'Apakah Anda Melakukan 9 Kesalahan ini Dalam Percakapan?', '<p>Cara kita berkomunikasi dengan orang lain adalah sebuah kebiasaan. Karenanya, seringkali kita tidak mengetahui apakah pola percakapan yang kita lakukan sudah baik atau belum baik.</p>\r\n\r\n<p>Dalam kehidupan sehari-hari pasti anda sering berkata dalam hati : &rdquo;ah tidak enak mengobrol dengan si A, lebih enak saya mencari si B dan mengobrol dengannya.&rdquo;</p>\r\n\r\n<p>Saya tidak tahu anda sendiri masuk ke dalam kategori mana : si A ataukah si B, mudah-mudahan bukan si A karena si A biasanya selalu dijauhi oleh teman-temannya.</p>\r\n\r\n<p>Andai saja anda masuk dalam kategori si A, anda tidak perlu khawatir karena pola percakapan yang kurang baik tentu saja dapat diperbaiki. Di bawah ini adalah beberapa kesalahan yang umum dilakukan oleh orang-orang dalam percakapan beserta beberapa solusi untuk memperbaikinya.</p>\r\n\r\n<p><strong>1. Tidak Mendengarkan</strong></p>\r\n\r\n<p>Sebagian besar orang bukanlah tipekal pendengar yang baik. Ini tentu saja berhubungan dengan ego mereka yang tinggi, yang justru ingin lebih didengarkan dibanding mendengarkan. Dalam setiap percakapan mereka sepertinya tidak tahan menunggu giliran untuk berbicara.</p>\r\n\r\n<p>Belajarlah menekan ego anda untuk <a href=\"http://www.akuinginsukses.com/belajar-mendengar/\">mendengarkan</a> secara sungguh-sungguh apa yang orang lain katakan.</p>\r\n\r\n<p>Ketika anda mengambil sikap untuk mulai mendengarkan, anda sedang membuka jalan untuk terciptanya suatu hubungan (apapun) yang sangat potensial. Namun tetap hindari jawaban singkat &ldquo;ya&rdquo; atau &ldquo;tidak&rdquo;, karena jika anda seperti itu lawan bicara anda akan memberikan informasi setengah-setengah kepada anda. Antusiaslah terhadap topik yang sedang mereka bicarakan, sebagai contoh, jika lawan bicara anda sedang bercerita tentang pengalamannya mendaki gunung pada akhir minggu lalu, anda dapat bertanya kepadanya :</p>\r\n\r\n<ul>\r\n	<li>gunung apa yang anda daki?</li>\r\n	<li>apa yang ada sukai dari mendaki gunung?</li>\r\n	<li>apa saja yang anda lakukan di atas gunung?</li>\r\n</ul>\r\n\r\n<p>Pertanyaan-pertanyaan semacam itu akan membuat topik percakapan menjadi lebih mendalam, lebih menarik, serta memancing lebih banyak lagi topik untuk didiskusikan. Dan yang tak kalah pentingnya lawan bicara anda mengetahui bahwa anda sungguh-sungguh sedang mendengarkannya. Hal ini tentu saja akan membuat tingkat respek lawan bicara anda bertambah pada anda.</p>\r\n\r\n<p><strong>2. Terlalu Banyak Bertanya</strong></p>\r\n\r\n<p>Beberapa pertanyaan dapat berarti anda antusias dengan lawan bicara anda, namun terlalu banyak bertanya pun akhirnya menjadi tidak baik karena sepertinya anda sedang menginterogerasi lawan bicara anda, dan dapat membuat mereka menjadi tidak nyaman.</p>\r\n\r\n<p>Cobalah gabungkan antara pernyataan dan pertanyaan, misalkan :</p>\r\n\r\n<ul>\r\n	<li>saya pun minggu lalu berakhir pekan dengan memancing bersama teman-teman kerja saya. Apakah anda suka memancing?</li>\r\n</ul>\r\n\r\n<p><strong>3. Kehabisan Topik Untuk Dibicarakan</strong></p>\r\n\r\n<p>Dalam percakapan mungkin anda sering merasa kehabisan topik untuk dibicarakan dengan lawan bicara anda, terutama jika anda berbicara dengan seseorang yang baru saja anda kenal. Untuk mencegah hal ini terjadi, ada beberapa saran mengenai topik yang bisa anda bicarakan :</p>\r\n\r\n<ul>\r\n	<li>Seorang bijak pernah berkata &ldquo;Jangan tinggalkan rumah tanpa membaca surat kabar terlebih dahulu. Jika anda kehabisan topik untuk dibicarakan, anda bisa memulai berbicara tentang berita yang sedang hangat saat ini.&rdquo;</li>\r\n	<li>Bicarakan tentang sesuatu yang berada disekeliling anda. Mungkin tentang aquarium yang berada dibelakang anda, anak-anak yang sedang bermain di samping anda, atau apapun saja yang memungkinkan untuk dibicarakan di sekeliling anda.</li>\r\n</ul>\r\n\r\n<p><strong>4. Penyampaian yang Buruk</strong></p>\r\n\r\n<p>Salah satu hal yang paling penting dalam percakapan bukanlah apa yang anda katakan, melainkan bagaimana anda menyampaikannya. Perubahan dalam kebiasaan ini akan membuat perbedaan besar, karena suara dan bahasa tubuh adalah bagian yang sangat vital dalam percakapan. Beberapa hal dibawah ini untuk anda pertimbangkan :</p>\r\n\r\n<ul>\r\n	<li>Sampaikan dengan perlahan. Ketika anda berbicara tentang suatu hal yang sangat menyenangkan, mudah sekali bagi anda untuk memulai percakapan tersebut dan bahkan anda dapat berbicara dengan sangat cepat. Usahakan anda memperlambat kecepatan bicara anda, karena akan lebih mudah bagi lawan bicara anda untuk mendengarkan dan menangkap maksud yang ingin anda sampaikan.</li>\r\n	<li>Bicaralah dengan suara lantang. Tidak perlu ragu, karena lawan bicara anda memang ingin mendengarkan anda.</li>\r\n	<li>Bicaralah dengan jelas. Jangan seperti bergumam.</li>\r\n	<li>Bicaralah dengan suara yang tidak monoton. Libatkan emosi dalam suara anda.</li>\r\n	<li>Gunakan jeda. Penyampaian dengan perlahan ditambah dengan jeda akan membuat lawan bicara anda lebih perhatian dalam mendengarkan dan suasana pun menjadi lebih rileks.</li>\r\n	<li>Gunakan bahasa tubuh yang baik. Dalam artikel mendatang, saya akan membahas bagaimana menggunakan <a href=\"http://www.akuinginsukses.com/16-cara-menggunakan-bahasa-tubuh-yang-baik/\">bahasa tubuh</a> yang baik.</li>\r\n</ul>\r\n\r\n<p><strong>5. Menginterupsi</strong></p>\r\n\r\n<p>Apakah yang anda rasakan jika pembicaraan anda dipotong oleh lawan bicara anda? &hellip; Ya, lawan bicara anda pun akan merasakan hal yang sama jika anda memotong pembicaraannya. Biarkan lawan bicara anda menghabiskan terlebih dahulu apa yang ingin disampaikan. Itu adalah salah satu bentuk penghargaan anda pada lawan bicara anda. Carilah keseimbangan antara mendengarkan dan berbicara.</p>\r\n\r\n<p><strong>6. Keinginan &ldquo;Selalu Benar&rdquo;</strong></p>\r\n\r\n<p>Orang tidak akan terkesan kepada anda jika anda selalu ingin merasa benar dalam setiap percakapan. Seringkali pembicaraan bukan betul-betul sebuah diskusi. Kadang-kadang kita ingin menjaga mood tetap baik dengan berbicara dengan seseorang. Sebagai contoh : salah satu teman anda ingin bercerita kepada anda mengenai serunya pengalaman berarung jeram sampai-sampai perahu karetnya terbalik. Namun anda malah berbicara bagaimana berarung jeram yang baik. Saya yakin mood teman anda akan langsung berubah.</p>\r\n\r\n<p>Duduklah santai, berbicara dan tidak berdebat.</p>\r\n\r\n<p><strong>7. Berbicara Tentang Hal-Hal Aneh atau Negatif</strong></p>\r\n\r\n<p>Pernahkan anda berkenalan dengan seseorang dan setelah itu ia berbicara tentang hal-hal aneh atau negatif, seperti kesehatannya yang memburuk, cerita pembunuhan, atasannya yang menyebalkan, atau menggunakan bahasa aneh yang hanya ia dan temannya yang mengetahui artinya.</p>\r\n\r\n<p>Saya rasa tidak ada manfaatnya berbicara hal-hal aneh atau negatif seperti itu. Orang-orang akan senang berbicara kepada anda jika anda selalu memberikan <a href=\"http://www.akuinginsukses.com/9-langkah-menuju-sikap-mental-positif/\">energi positif</a> dalam setiap kata-kata yang anda keluarkan.</p>\r\n\r\n<p><strong>8. Membosankan</strong></p>\r\n\r\n<p>Jangan bercerita panjang-panjang tentang mobil anda yang baru saja anda beli atau rumah anda yang baru saja selesai dibangun. Rata-rata orang tidak terlalu tertarik dengan cerita semacam itu, yang terlalu mengekspose kemampuan diri. Carilah topik yang mengarah pada hal-hal yang bergairah atau hal-hal yang lucu misalkan. Bisa juga anda menceritakan tentang pengalaman anda berakhir pekan di puncak kemarin atau rencana anda pada liburan Lebaran mendatang. Intinya adalah sesuatu yang positif. Bukan juga mengeluh tentang atasan atau pekerjaan anda.</p>\r\n\r\n<p>Dale Carnegie pernah berkata :<br />\r\n<em>&rdquo;Dalam 2 bulan anda akan mempunyai lebih banyak teman dengan cara antusias terhadap cerita-cerita mereka dibandingkan 2 tahun anda mencari teman dengan cara berusaha memancing mereka tertarik pada cerita-cerita anda.&rdquo;</em></p>\r\n\r\n<p>Cobalah memberi peran lebih dalam berbicara untuk lawan bicara anda. Kelak anda akan membangun sebuah hubungan yang berkualitas.</p>\r\n\r\n<p>Mungkin anda sudah sering mendengar istilah &ldquo;mengapa Tuhan menciptakan 2 telinga dan 1 mulut? &hellip; agar kita lebih banyak mendengarkan dibanding berbicara.</p>\r\n\r\n<p><strong>9. Tidak Merespon Dengan Baik</strong></p>\r\n\r\n<p>Jika seseorang bercerita tentang pengalamannya, jangan sekedar mengangguk atau menjawab dengan kalimat singkat. Terbukalah dan katakan apa yang anda pikirkan. Ekspresikan perasaan anda.</p>\r\n\r\n<p>Sebagai penutup, anda tidak harus memperbaiki ke-9 langkah diatas secara sekaligus. Pilihlah kira-kira 3 hal terpenting yang menurut anda perlu diperbaiki dan selama 3-4 minggu anda berusaha melakukan hal tersebut secara terus menerus sampai akhirnya menjadi suatu kebiasaan.</p>\r\n\r\n<p>Mudah-mudahan tips percakapan ini bermanfaat bagi anda sehingga kelak anda dapat menjadi teman bicara yang baik bagi teman-teman atau pasangan anda.</p>\r\n', '96fae720b6e9116690337b605b8cc78f.jpg', '2017-07-24 04:11:46'),
(4, 'Bagaimana Membebaskan Diri Anda dari Gosip', '<p><strong>Bahaya Gosip</strong></p>\r\n\r\n<p>Gosip merupakan salah satu masalah paling umum baik di tempat kerja maupun dalam hubungan. Masalah terbesar dari gosip adalah kebanyakan orang tidak menyadari ketika sebuah diskusi berubah menjadi gosip dan lebih parahnya lagi mereka tidak menyadari dampak dari gosip tersebut. Gosip adalah pembunuh sebuah hubungan dan hal ini terjadi lebih sering dari yang anda percayai. Gosip pada dasarnya adalah apapun yang dapat dianggap sebagai hal negatif tentang seseorang yang dibicarakan dengan orang lain dimana mereka tidak mendengarnya langsung dari pihak yang bersangkutan. Gosip bisa berupa sesuatu yang sangat sederhana tanpa adanya niat untuk menyakiti orang tersebut dan bisa pula sesuatu yang membunuh karakter seseorang.</p>\r\n\r\n<p>Tidak ada satu hal pun yang positif dari gosip dan gosip cenderung menyukai orang yang dibicarakan dan orang-orang yang terlibat ketika membicarakan gosip tersebut. Ada pula risiko yang timbul jika orang yang dibicarakan mengetahui orang yang menyabarkan gosip tersebut, juga rasa sakit yang muncul akibat informasi negatif yang tersebar. Beberapa bahaya lain yang muncul akibat gosip:</p>\r\n\r\n<p>&bull; <a href=\"http://www.akuinginsukses.com/7-cara-mengurangi-stress-hari-ini/\">Stress</a> bagi mereka yang terlibat dalam gosip<br />\r\n&bull; Menyakiti perasaan<br />\r\n&bull; Menghancurkan kerja sama tim<br />\r\n&bull; Membuat orang enggan membagikan kerapuhan mereka<br />\r\n&bull; Menghambat komunikasi yang membutuhkan rasa percaya dengan memberi dorongan bagi orang untuk menjaga mulut mereka<br />\r\n&bull; Menciptakan reputasi yang negatif</p>\r\n\r\n<p><strong>Pilihan-pilihan Anda Terhadap Gosip</strong></p>\r\n\r\n<p>Dampak-dampak negatif tersebut seharusnya cukup untuk meyakinkan siapapun untuk menghindari gosip, sayangnya, mereka tetap melakukannya. Gosip sangatlah menggoda dan sering terjadi karena terdorong perilaku orang-orang sekitar. Dunia gosip membuka pintu lebar bagi semua gosip baru dan mereka cenderung menjadikan orang-orang yang tidak terlibat dalam gosip yang bersangkutan untuk menjadi korban dari gosip yang lebih baru. Terkadang lebih mudah untuk ikut terlibat dalam gosip daripada mengambil risiko menjadi korban dan bagi kebanyakan orang, dengan berbagai alasan, gosip memiliki daya tarik yang membuat orang tertarik untuk terlibat. Gosip adalah sebuah hal yang egois dan berbahaya karena merendahkan dan menghancurkan seseorang (baik secara langsung maupun tak langsung) untuk membuat gosip tersebut terdengar lebih baik. Inilah alasannya mengapa gosip sangatlah merusak, terutama bagi orang yang digosipkan.</p>\r\n\r\n<p>Hal terbaik dari gosip adalah anda bisa dengan mudah menjauhkan diri darinya jika anda memutuskan untuk menghindarinya dan mempelajari beberapa teknik untuk mengenalinya, menanganinya, dan menjaga jarak dari masalah yang ditimbulkan. Jadi bagaimana kita bisa melakukannya?</p>\r\n\r\n<p><strong>Kenali Gosip</strong></p>\r\n\r\n<p>Seringkali gosip merupakan sesuatu yang jelas dan tidak ditutup-tutupi. Kadang gosip bisa merupakan sebuah pertanyaan sederhana yang diajukan seseorang tentang apa yang anda dengar atau ketahui atau pikirkan mengenai orang lain atau tindakan mereka. Hal tersebut bisa terdengar seperti:</p>\r\n\r\n<p>&bull; Apakah kau dengar apa yang Frank katakan mengenai Sally?<br />\r\n&bull; Kau tak akan menyangka apa John lakukan minggu ini?<br />\r\n&bull; Aku dengar Gerry &hellip;<br />\r\n&bull; Apakah kau sudah melihat pacar baru Lisa?</p>\r\n\r\n<p>Kata-kata tersebut tidak selalu berakhir dengan gossip negatif namun mereka merupakan pembicaraan mengenai orang lain dan cukup mudah untuk dikenali dalam sebuah percakapan atau awal sebuah gosip. Sayangnya, tidak semua gosip bisa dikenali dengan mudah, dan kadang gosip lebih tersamar. Gosip kadang berawal dari pembicaraan dengan seorang teman atau rekan kerja; diawali dengan pembicaraan yang positif hingga akhirnya berujung pada pembicaraan negatif. Jika anda tidak membicarakan cara untuk membantu orang yang sedang anda bicarakan, mendukung mereka untuk <a href=\"http://www.akuinginsukses.com/teknik-pemecahan-masalah/\">menyelesaikan masalah</a> atau melakukan tindakan positif lain ketika membicarakan orang lain; kemungkinan besar pembicaraan itu akan berakhir menjadi gosip. Pada dasarnya, jika anda sedang membicarakan orang lain, anda perlu berhenti dan memikirkan jika pembicaraan tersebut akan membantu orang tersebut atau tidak. Jika tidak, maka pembicaraan itu adalah gosip dan tidak perlu anda lanjutkan.</p>\r\n\r\n<p><strong>Mempengaruhi Gosip</strong></p>\r\n\r\n<p>&ldquo;Lidah mempunyai kuasa untuk menyelamatkan hidup atau merusaknya; orang harus menanggung akibat ucapannya.&rdquo;</p>\r\n\r\n<p>Karena gosip sangatlah kuat, gosip memiliki pengaruh yang besar dan harus dilawan melalui pengaruh positif dalam meresponnya. Terdapat beberapa tindakan yang bisa anda lakukan untuk melawan gosip.</p>\r\n\r\n<p><strong>Acuhkan gosip:</strong></p>\r\n\r\n<p>&bull; Hindari orang-orang yang bergosip dan jangan beri mereka kesempatan untuk menyebarkannya<br />\r\n&bull; Tinggalkan ruangan atau pembicaraan saat gosip dimulai<br />\r\n&bull; Jangan merespon pertanyaan yang menanyakan opini mengenai orang lain atau jebakan gosip lainnya<br />\r\n&bull; Acuhkan gosip dan jangan memulai sebuah percakapan yang berujung menjadi gosip</p>\r\n\r\n<p><strong>Cegah gosip:</strong></p>\r\n\r\n<p>&bull; Jangan pernah memulai gosip dari diri anda<br />\r\n&bull; Ubah topik pembicaraan jika sebuah pembicaraan berubah menjadi gosip<br />\r\n&bull; Tolaklah untuk mendengar atau merespon setiap gosip<br />\r\n&bull; Sembunyikan perasaan sakit atau reaksi dramatis terhadap gosip. Hal tersebut merupakan makanan bagi gosip untuk berlanjut.</p>\r\n\r\n<p><strong>Lawan gosip:</strong></p>\r\n\r\n<p>&bull; Katakan dengan sopan bahwa lebih baik membicarakan hal tersebut dengan orang yang bersangkutan<br />\r\n&bull; Jika anda tahu darimana gosip tersebut bersumber, temui orang tersebut dan katakan kepada mereka bahwa anda tidak suka dengan gosip tersebut dan hal itu menyebabkan rasa sakit; terlepas dari gosip tersebut disengaja atau tidak<br />\r\n&bull; Jika anda mendengar seseorang memulai sebuah gosip, ajukan diri untuk menemui orang yang dibicarakan dengan orang yang memulai gosip untuk mendiskusikannya<br />\r\n&bull; Jawab gosip dengan, &ldquo;Maukah hal tersebut dibicarakan oleh orang lain tanpa sepengetahuan-mu?&rdquo; lalu pergilah<br />\r\n&bull; Katakan bahwa saya tidak suka membicarakan orang lain karena saya tidak suka orang lain membicarakan saya<br />\r\n&bull; Katakan bahwa anda tidak suka membicarakan orang lain kecuali pembicaraan tersebut dapat membantu atau mendukung mereka<br />\r\n&bull; Katakan bahwa anda tidak mau membicarakan hal-hal negatif mengenai orang lain kecuali orang tersebut terlibat dalam percakapan</p>\r\n', '2eaeb05c33ac25cd35ba692bf0d840a2.jpg', '2017-07-24 04:41:34'),
(6, 'dari karir', '<p>tes dari karir</p>\r\n', '050608262c71a0ae71f0630fba55fc39.png', '2019-08-29 03:28:21'),
(7, 'tes lagi dari karir', '<p>tes semoga bisa</p>\r\n', '88a7e24974e806789da466472e546fd5.png', '2019-08-29 03:36:37'),
(8, 'tes 3 x', '<p>tes ketiga kali dari karir</p>\r\n', 'testing.png', '2019-08-29 03:37:25'),
(9, 'KKN', '<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><strong><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">SURAT PERNYATAAN</span></span></strong></span></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Saya yang bertanda tangan di bawah ini:</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">NIM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Tempat/Tanggal Lahir&nbsp;&nbsp; :</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Program Studi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">No Telepon/Hp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Dengan ini menyatakan bahwa saya sanggup:</span></span></span></span></p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Menetap di lokasi KKN selama pelaksanaan KKN, mulai tanggal &hellip;.. Juni 2018 sampai tanggal &hellip;.. Juli 2018.</span></span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Tidak meninggalkan lokasi atau melalui jalan-jalan utama menggunakan kendaraan sepeda motor selama di lokasi. </span></span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Mengikuti dan patuh kepada segala peraturan yang ada selama pelaksanaan KKN.</span></span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Melaksanakan tanggung jawab sebagai peserta KKN selama pelaksanaan KKN.</span></span></span></span></li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Jika terjadi sesuatu dan lain hal akibat ketidakpatuhan terhadap pernyataan ini</span></span><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">,</span></span><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\"> maka akibat yang ditimbulkan tersebut merupakan di</span></span> <span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">luar tanggung jawab </span></span><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">pihak</span></span> <span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Institut Teknologi Sumatera.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Demikian pernyataan ini saya buat untuk dipergunakan sebagaimana mestinya.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<table cellspacing=\"0\" class=\"MsoTableGrid\" style=\"border-collapse:collapse; border:none\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:300px\">\r\n			<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Mengetahui,</span></span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Orang Tua/Wali</span></span></span></span></p>\r\n\r\n			<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n			<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n			<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n			<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n			<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n			<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n			<p style=\"margin-left:2px\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">______________________________</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:300px\">\r\n			<p style=\"margin-left:2px; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Lampung Selatan, </span></span><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">... Maret </span></span><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">2018</span></span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Yang membuat pernyataan,</span></span></span></span></p>\r\n\r\n			<p style=\"margin-left:1px\">&nbsp;</p>\r\n\r\n			<p style=\"margin-left:1px\">&nbsp;</p>\r\n\r\n			<p style=\"margin-left:1px\">&nbsp;</p>\r\n\r\n			<p style=\"margin-left:1px\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">&nbsp;&nbsp; <span style=\"font-size:9.0pt\"><span style=\"color:gray\">Materai </span></span></span></span></p>\r\n\r\n			<p style=\"margin-left:1px\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">&nbsp;&nbsp; <span style=\"font-size:9.0pt\"><span style=\"color:gray\">6000</span></span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n			<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n			<p style=\"margin-left:2px; text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">_________________________________</span></span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">&nbsp;&nbsp; NIM</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n', 'f9e7ce9ac1416047fe7364fd581cd1af.png', '2019-08-30 03:16:39'),
(10, 'mencoba form', '<form enctype=\"multipart/form-data\" method=\"post\" name=\"Pendaftaran Careerday\">\r\n<p><input name=\"Nama\" required=\"required\" type=\"text\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n</form>\r\n\r\n<p>&nbsp;</p>\r\n', '8c8349606141fd3523992c562bb0bb0b.jpg', '2019-08-30 04:08:05');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

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
  ADD KEY `id_kabupaten_kota` (`id_kabupaten_kota`);

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
-- Indeks untuk tabel `jobseeker_alumni`
--
ALTER TABLE `jobseeker_alumni`
  ADD PRIMARY KEY (`id_jobseeker_alumni`);

--
-- Indeks untuk tabel `jobseeker_mahasiswa`
--
ALTER TABLE `jobseeker_mahasiswa`
  ADD PRIMARY KEY (`id_jobseeker_mhs`);

--
-- Indeks untuk tabel `jobseeker_nonalumni`
--
ALTER TABLE `jobseeker_nonalumni`
  ADD PRIMARY KEY (`id_jobseeker_nonalumni`);

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
  ADD KEY `lamaran_ibfk_1` (`alumni`),
  ADD KEY `lamaran_ibfk_2` (`mahasiswa`),
  ADD KEY `lamaran_ibfk_3` (`nonalumni`),
  ADD KEY `lamaran_ibfk_4` (`pekerjaan`);

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
-- Indeks untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT untuk tabel `company`
--
ALTER TABLE `company`
  MODIFY `Id_perusahaan` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `industri`
--
ALTER TABLE `industri`
  MODIFY `id_industri` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `joblist`
--
ALTER TABLE `joblist`
  MODIFY `id_joblist` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `jobseeker_alumni`
--
ALTER TABLE `jobseeker_alumni`
  MODIFY `id_jobseeker_alumni` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `jobseeker_mahasiswa`
--
ALTER TABLE `jobseeker_mahasiswa`
  MODIFY `id_jobseeker_mhs` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jobseeker_nonalumni`
--
ALTER TABLE `jobseeker_nonalumni`
  MODIFY `id_jobseeker_nonalumni` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `lamaran`
--
ALTER TABLE `lamaran`
  MODIFY `id_lamaran` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `peserta_careerday`
--
ALTER TABLE `peserta_careerday`
  MODIFY `id_pendaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `berita_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_ibfk_1` FOREIGN KEY (`id_industri`) REFERENCES `industri` (`id_industri`) ON UPDATE CASCADE,
  ADD CONSTRAINT `company_ibfk_2` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsi` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `company_ibfk_3` FOREIGN KEY (`id_kabupaten_kota`) REFERENCES `kabupaten` (`id`);

--
-- Ketidakleluasaan untuk tabel `joblist`
--
ALTER TABLE `joblist`
  ADD CONSTRAINT `joblist_ibfk_1` FOREIGN KEY (`perusahaan`) REFERENCES `company` (`Id_perusahaan`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `lamaran`
--
ALTER TABLE `lamaran`
  ADD CONSTRAINT `lamaran_ibfk_1` FOREIGN KEY (`alumni`) REFERENCES `jobseeker_alumni` (`id_jobseeker_alumni`) ON UPDATE CASCADE,
  ADD CONSTRAINT `lamaran_ibfk_2` FOREIGN KEY (`mahasiswa`) REFERENCES `jobseeker_mahasiswa` (`id_jobseeker_mhs`) ON UPDATE CASCADE,
  ADD CONSTRAINT `lamaran_ibfk_3` FOREIGN KEY (`nonalumni`) REFERENCES `jobseeker_nonalumni` (`id_jobseeker_nonalumni`) ON UPDATE CASCADE,
  ADD CONSTRAINT `lamaran_ibfk_4` FOREIGN KEY (`pekerjaan`) REFERENCES `joblist` (`id_joblist`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `peserta_careerday`
--
ALTER TABLE `peserta_careerday`
  ADD CONSTRAINT `peserta_careerday_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `calendar` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
