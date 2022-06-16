-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Sep 2019 pada 17.16
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(18) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `password`) VALUES
('198611252004121005', 'Mochamad Rizal', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kk`
--

CREATE TABLE `data_kk` (
  `no_kk` varchar(19) NOT NULL,
  `kepala_keluarga` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `rtrw` varchar(7) NOT NULL,
  `kelurahan` varchar(14) NOT NULL,
  `kecamatan` varchar(8) NOT NULL,
  `kota` varchar(5) NOT NULL,
  `pos` varchar(5) NOT NULL,
  `provinsi` varchar(10) NOT NULL,
  `file_kk` varchar(100) NOT NULL,
  `ukuran` int(10) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_kk`
--

INSERT INTO `data_kk` (`no_kk`, `kepala_keluarga`, `alamat`, `rtrw`, `kelurahan`, `kecamatan`, `kota`, `pos`, `provinsi`, `file_kk`, `ukuran`, `tipe`, `email`) VALUES
('1111-1111-1111-1111', 'Somat', 'Cibinong', '111-111', 'Pabuaran Mekar', 'Cibinong', 'Bogor', '16916', 'Jawa Barat', 'KK_ADE.jpeg', 112927, 'image/jpeg', 'lisa@gmail.com'),
('3276-0504-1207-0552', 'Ade Susanto', 'Cibinong', '002-002', 'Pabuaran Mekar', 'Cibinong', 'Bogor', '16916', 'Jawa Barat', 'KK_ADE.jpeg', 112927, 'image/jpeg', 'dheamonica@gmail.com'),
('3310-0407-0204-4406', 'Suratman', 'Cibinong', '002-002', 'Pabuaran Mekar', 'Cibinong', 'Bogor', '16916', 'Jawa Barat', 'KK.jpeg', 191385, 'image/jpeg', 'lisaaryanti22@gmail.com'),
('3371-0258-1288-0009', 'Selamet', 'Cicengka', '002-001', 'Pabuaran Mekar', 'Cibinong', 'Bogor', '16916', 'Jawa Barat', 'KTP_SELAMAT.jpg', 51483, 'image/jpeg', 'selamet@gmail.com'),
('3525-1724-0410-0010', 'Kanjut', 'Cibinong', '002-000', 'Pabuaran Mekar', 'Cibinong', 'Bogor', '16916', 'Jawa Barat', 'KK.jpg', 34693, 'image/jpeg', 'aisyah@gmail.com'),
('7307-0503-0212-0002', 'Satria', 'Cibinong', '003-002', 'Pabuaran Mekar', 'Cibinong', 'Bogor', '16916', 'Jawa Barat', 'KK.jpg', 34693, 'image/jpeg', 'satria@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_ktp`
--

CREATE TABLE `data_ktp` (
  `nik` varchar(19) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` varchar(10) NOT NULL,
  `agama` varchar(12) NOT NULL,
  `pendidikan` varchar(33) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `status_nkh` varchar(11) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `no_kk` varchar(19) NOT NULL,
  `file_ktp` varchar(100) NOT NULL,
  `ukuran` int(10) NOT NULL,
  `tipe` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_ktp`
--

INSERT INTO `data_ktp` (`nik`, `nama`, `gender`, `tempat_lahir`, `tgl_lahir`, `agama`, `pendidikan`, `pekerjaan`, `status_nkh`, `nama_ayah`, `nama_ibu`, `no_kk`, `file_ktp`, `ukuran`, `tipe`) VALUES
('0000-0000-0000-0000', 'Lisa Aryanti', 'Perempuan', 'Cibinong', '11/11/2011', 'Islam', 'SLTA/Sederajat', 'Wiraswasta', 'Kawin', 'Sugono', 'Sumikah', '1111-1111-1111-1111', 'KTP_DHEA.jpeg', 132108, 'image/jpeg'),
('1105-0350-1091-0001', 'Armida', 'Perempuan', 'Jakarta', '05/06/1992', 'Islam', 'SLTA/Sederajat', 'Ibu Rumah Tangga', 'Kawin', 'Kanjut', 'Sartika', '3525-1724-0410-0010', 'KTP_ARMIDA.jpg', 63941, 'image/jpeg'),
('1271-0258-1288-0009', 'Dede', 'Laki-laki', 'Jakarta', '03/03/1988', 'Islam', 'SLTA/Sederajat', 'Karyawan Swasta', 'Kawin', 'Yayan', 'Yuyun', '3371-0258-1288-0009', 'KTP_DEDS.JPG', 65580, 'image/jpeg'),
('1801-0703-1093-0001', 'Rudi', 'Laki-laki', 'Jakarta', '01/01/1990', 'Islam', 'SLTA/Sederajat', 'Karyawan Swasta', 'Kawin', 'Rudi', 'Ninah', '3371-0258-1288-0009', 'KTP_RUDI.JPG', 22519, 'image/jpeg'),
('1801-0703-1093-0002', 'Nana', 'Laki-laki', 'Jakarta', '01/01/1981', 'Islam', 'SLTA/Sederajat', 'Wiraswasta', 'Kawin', 'Rudi', 'Ninah', '3371-0258-1288-0009', 'KTP_NANA.JPG', 27742, 'image/jpeg'),
('1801-0703-1093-0003', 'Lela', 'Perempuan', 'Jakarta', '01/01/1998', 'Islam', 'SLTA/Sederajat', 'Wiraswasta', 'Kawin', 'Rudi', 'Nina', '3371-0258-1288-0009', 'KTP_LELA.JPG', 27450, 'image/jpeg'),
('1801-0703-1093-0005', 'Kira', 'Perempuan', 'Cibinong', '03/10/1988', 'Islam', 'SLTA/Sederajat', 'Ibu Rumah Tangga', 'Kawin', 'Hasan', 'Hasyiro', '7307-0503-0212-0002', 'KTP_KUKIRA.jpg', 35189, 'image/jpeg'),
('1801-0703-1093-0009', 'Ujang', 'Laki-laki', 'Jakarta', '01/01/1990', 'Islam', 'SLTA/Sederajat', 'Wiraswasta', 'Kawin', 'Sukarjo', 'Sutiyem', '3371-0258-1288-0009', 'KTP_UJANG.jpeg', 142219, 'image/jpeg'),
('2222-2222-2222-2222', 'Bambang', 'Laki-laki', 'Jakarta', '11/11/2011', 'Islam', 'SLTA/Sederajat', 'Wiraswasta', 'Kawin', 'Sugono', 'Yuyun', '1111-1111-1111-1111', 'KTP_ELLY.jpeg', 53368, 'image/jpeg'),
('3215-0717-0545-0001', 'Kanjut', 'Laki-laki', 'Jakarta', '27/06/2045', 'Islam', 'SLTA/Sederajat', 'Petani', 'Kawin', 'Sukinem', 'Sutijem', '3525-1724-0410-0010', 'KTP_KANJUT.jpg', 26048, 'image/jpeg'),
('3276-0530-0575-0005', 'Ade Susanto', 'Laki-laki', 'Jakarta', '30/05/1975', 'Islam', 'SLTA/Sederajat', 'Wiraswasta', 'Kawin', 'Sugono', 'Sumikah', '3276-0504-1207-0552', 'KTP_ADE.jpeg', 66488, 'image/jpeg'),
('3276-0567-1274-0003', 'Dwi Elly Priastuti', 'Perempuan', 'Purbalingga', '27/12/1974', 'Islam', 'SLTA/Sederajat', 'Ibu Rumah Tangga', 'Kawin', 'Ach Sumaryo', 'Cholifah', '3276-0504-1207-0552', 'KTP_ELLY.jpeg', 53368, 'image/jpeg'),
('3276-0846-1097-0004', 'Dhea Monica', 'Perempuan', 'Jakarta', '06/10/1997', 'Islam', 'SLTA/Sederajat', 'Mahasiswi', 'Belum Kawin', 'Ade Susanto', 'Dwi Elly Priastuti', '3276-0504-1207-0552', 'KTP_DHEA.jpeg', 132108, 'image/jpeg'),
('3310-0410-1063-0003', 'Suratman', 'Laki-laki', 'Klaten', '10/10/1963', 'Islam', 'SLTA/Sederajat', 'Wiraswasta', 'Kawin', 'Sumarkon', 'Yasmin', '3310-0407-0204-4406', 'KTP_SURATMAN.jpeg', 73722, 'image/jpeg'),
('3310-0446-0275-0002', 'Yanti Rahayu', 'Perempuan', 'Klaten', '06/02/1975', 'Islam', 'SLTA/Sederajat', 'Ibu Rumah Tangga', 'Kawin', 'Jajang Miharja', 'Hasmin', '3310-0407-0204-4406', 'KTP_YANTI.jpeg', 131862, 'image/jpeg'),
('3329-0910-0378-0012', 'Amat Faozi', 'Laki-laki', 'Pekalongan', '10/03/1978', 'Islam', 'SLTA/Sederajat', 'Pedagang', 'Kawin', 'Jajang', 'Yuyun', '3276-0504-1207-0552', 'KTP_AMAT.JPG', 44985, 'image/jpeg'),
('3331-0258-1288-0009', 'Menta', 'Laki-laki', 'Jakarta', '04/05/1978', 'Islam', 'SLTA/Sederajat', 'Karyawan Swasta', 'Kawin', 'Yayan', 'Yuyun', '3371-0258-1288-0009', 'KTP_MENTA.JPG', 53862, 'image/jpeg'),
('3371-0258-1288-0001', 'Satria', 'Laki-laki', 'Cibinong', '13/12/1988', 'Islam', 'SLTA/Sederajat', 'Wiraswasta', 'Kawin', 'Yayan', 'Yuyun', '7307-0503-0212-0002', 'KTP_SATRIA.JPG', 22992, 'image/jpeg'),
('3371-0258-1288-0099', 'Selamet', 'Laki-laki', 'Jakarta', '01/01/1978', 'Islam', 'Tidak/Belum Sekolah', 'Karyawan Swasta', 'Kawin', 'Bageng', 'Siti', '3371-0258-1288-0009', 'KTP_SELAMAT.jpg', 51483, 'image/jpeg'),
('3372-0301-1185-0001', 'Nur Rohman', 'Laki-laki', 'Jakarta', '01/11/1985', 'Islam', 'SLTA/Sederajat', 'Pedagang', 'Kawin', 'Jajang', 'Jujung', '3525-1724-0410-0010', 'KTP_NUR.jpg', 87335, 'image/jpeg'),
('9371-0258-1288-0009', 'Berto', 'Laki-laki', 'Jakarta', '02/01/1987', 'Islam', 'SLTA/Sederajat', 'Karyawan Swasta', 'Kawin', 'Yayan', 'Yuyun', '3371-0258-1288-0009', 'KTP_BERTO.JPG', 48233, 'image/jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelahiran`
--

CREATE TABLE `kelahiran` (
  `id_kel` int(5) NOT NULL,
  `id_syarat` varchar(10) NOT NULL,
  `tgl_ajuan` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` varchar(10) NOT NULL,
  `jam` varchar(8) NOT NULL,
  `kwn` varchar(3) NOT NULL,
  `no_kk` varchar(19) NOT NULL,
  `nik_ibu` varchar(19) NOT NULL,
  `nik_ayah` varchar(19) NOT NULL,
  `status` enum('0','1','2') NOT NULL,
  `ket` varchar(50) NOT NULL,
  `id_admin` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelahiran`
--

INSERT INTO `kelahiran` (`id_kel`, `id_syarat`, `tgl_ajuan`, `nama`, `gender`, `tempat_lahir`, `tgl_lahir`, `jam`, `kwn`, `no_kk`, `nik_ibu`, `nik_ayah`, `status`, `ket`, `id_admin`) VALUES
(1, 'Kelahiran', '29-06-2019', 'Aisyah', 'Perempuan', 'Cibinong', '29/06/2019', '10:00', 'WNI', '3276-0504-1207-0552', '3276-0567-1274-0003', '3276-0530-0575-0005', '1', 'Mohon masukan nomor kenal lahir dengan benar', '198611252004121005'),
(2, 'Kelahiran', '04-07-2019', 'Siti Aminah', 'Perempuan', 'Cibinong', '01/06/2010', '01:00', 'WNI', '3525-1724-0410-0010', '1105-0350-1091-0001', '3215-0717-0545-0001', '2', '', ''),
(3, 'Kelahiran', '04-07-2019', 'Siti Fatimah', 'Perempuan', 'Cibinong', '01/06/2019', '01:00', 'WNI', '3525-1724-0410-0010', '1105-0350-1091-0001', '3372-0301-1185-0001', '2', '', ''),
(4, 'Kelahiran', '04-07-2019', 'Aisyah', 'Perempuan', 'Cibinong', '01/06/2019', '10:00', 'WNI', '7307-0503-0212-0002', '1801-0703-1093-0005', '3371-0258-1288-0001', '2', '', ''),
(5, 'Kelahiran', '04-07-2019', 'Neneng', 'Perempuan', 'Cilangkap', '02/06/2019', '01:01', 'WNI', '3371-0258-1288-0009', '1801-0703-1093-0003', '1801-0703-1093-0001', '2', '', ''),
(6, 'Kelahiran', '06-07-2019', 'Maryam', 'Perempuan', 'Jakarta', '01/07/2019', '14:00', 'WNI', '3371-0258-1288-0009', '1801-0703-1093-0003', '1271-0258-1288-0009', '2', '', ''),
(7, 'Kelahiran', '06-07-2019', 'Firda', 'Perempuan', 'Jakarta', '01/09/2019', '14:00', 'WNI', '3371-0258-1288-0009', '1801-0703-1093-0003', '1801-0703-1093-0001', '2', '', ''),
(8, 'Kelahiran', '07-07-2019', 'Qonita', 'Perempuan', 'Jakarta', '01/07/2019', '14:00', 'WNI', '3371-0258-1288-0009', '1801-0703-1093-0003', '9371-0258-1288-0009', '2', '', ''),
(9, 'Kelahiran', '07-07-2019', 'Furqon', 'Laki-laki', 'Jakarta', '01/07/2019', '14:00', 'WNI', '3371-0258-1288-0009', '1801-0703-1093-0003', '1801-0703-1093-0002', '2', '', ''),
(10, 'Kelahiran', '07-07-2019', 'Galih', 'Laki-laki', 'Jakarta', '01/07/2019', '13:00', 'WNI', '3371-0258-1288-0009', '1801-0703-1093-0003', '1801-0703-1093-0009', '2', '', '198611252004121005'),
(11, 'Kelahiran', '10-07-2019', 'Junen', 'Laki-laki', 'Cibinong', '10/07/2010', '10:00', 'WNI', '1111-1111-1111-1111', '0000-0000-0000-0000', '2222-2222-2222-2222', '2', '', ''),
(12, 'Kelahiran', '21-08-2019', 'Rahayu', 'Perempuan', 'Cibinong', '21/08/2019', '09:00', 'WNI', '3310-0407-0204-4406', '3310-0446-0275-0002', '3310-0410-1063-0003', '2', '', '198611252004121005'),
(13, 'Kelahiran', '21-08-2019', 'Kia', 'Perempuan', 'Bogor', '23/08/2018', '10:00', 'WNI', '3276-0504-1207-0552', '3276-0567-1274-0003', '3276-0530-0575-0005', '1', 'Mohon upload surat pengantar RT/RW', '198611252004121005');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kematian`
--

CREATE TABLE `kematian` (
  `id_kem` int(5) NOT NULL,
  `id_syarat` varchar(10) NOT NULL,
  `tgl_ajuan` varchar(10) NOT NULL,
  `nama_alm` varchar(50) NOT NULL,
  `tmp_men` varchar(20) NOT NULL,
  `tgl_men` varchar(10) NOT NULL,
  `jam` varchar(8) NOT NULL,
  `sebab` varchar(50) NOT NULL,
  `no_kk` varchar(19) NOT NULL,
  `nik_pelapor` varchar(20) NOT NULL,
  `hubungan` varchar(20) NOT NULL,
  `status` enum('0','1','2') NOT NULL,
  `ket` varchar(50) NOT NULL,
  `id_admin` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kematian`
--

INSERT INTO `kematian` (`id_kem`, `id_syarat`, `tgl_ajuan`, `nama_alm`, `tmp_men`, `tgl_men`, `jam`, `sebab`, `no_kk`, `nik_pelapor`, `hubungan`, `status`, `ket`, `id_admin`) VALUES
(1, 'Kematian', '29-06-2019', 'Amat Faozi', 'Cibinong', '29/06/2019', '13:00', 'Kecelakaan', '3276-0504-1207-0552', '3276-0530-0575-0005', 'Keluarga', '1', 'Mohon upload surat pengantar RT/RW', '198611252004121005'),
(2, 'Kematian', '04-07-2019', 'Kanjut', 'Cibinong', '04/06/2019', '16:00', 'Sakit', '3525-1724-0410-0010', '3215-0717-0545-0001', 'Keluarga', '2', '', ''),
(3, 'Kematian', '04-07-2019', 'Satria', 'Cibinong', '04/06/2019', '16:00', 'Sakit', '7307-0503-0212-0002', '1801-0703-1093-0005', 'Keluarga', '2', '', ''),
(4, 'Kematian', '04-07-2019', 'Rudi', 'Cibinong', '04/07/2019', '10:00', 'Kecelakaan', '3371-0258-1288-0009', '3371-0258-1288-0099', 'Keluarga', '2', '', ''),
(5, 'Kematian', '04-07-2019', 'Lela', 'Cibinong', '04/07/2019', '16:00', 'Kecelakaan', '3371-0258-1288-0009', '3371-0258-1288-0099', 'Keluarga', '2', '', ''),
(6, 'Kematian', '04-07-2019', 'Nana', 'Cibinong', '04/07/2019', '16:00', 'Kecelakaan', '3371-0258-1288-0009', '3371-0258-1288-0099', 'Keluarga', '2', '', ''),
(7, 'Kematian', '04-07-2019', 'Ujang', 'Cibinong', '04/07/2019', '16:00', 'Kecelakaan', '3371-0258-1288-0009', '3371-0258-1288-0099', 'Keluarga', '2', '', ''),
(8, 'Kematian', '05-07-2019', 'Berto', 'Cibinong', '03/07/2019', '19:00', 'Kecelakaan', '3371-0258-1288-0009', '9371-0258-1288-0009', 'Keluarga', '2', '', ''),
(9, 'Kematian', '05-07-2019', 'Menta', 'Cibinong', '03/07/2019', '19:00', 'Kecelakaan', '3371-0258-1288-0009', '9371-0258-1288-0009', 'Keluarga', '2', '', ''),
(10, 'Kematian', '06-07-2019', 'Dede', 'Cibinong', '01/06/2019', '19:00', 'Kecelakaan', '3371-0258-1288-0009', '9371-0258-1288-0009', 'Keluarga', '2', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reg`
--

CREATE TABLE `reg` (
  `email` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` varchar(10) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reg`
--

INSERT INTO `reg` (`email`, `nama`, `tgl_lahir`, `no_hp`, `password`) VALUES
('aisyah@gmail.com', 'Aisyah Nabila', '01/01/2000', '0818-1000-0000', '123'),
('caca@gmail.com', 'Caca', '01/01/2010', '0800-0000-0000', '123'),
('dheamonica@gmail.com', 'Dhea Monica', '06/10/1997', '0896-7143-3923', '123'),
('lisa@gmail.com', 'Lisa Aryanti', '01/01/1998', '0811-0000-0000', '123'),
('lisaaryanti22@gmail.com', 'Lisa Aryanti Sartika', '01/01/1998', '0800-1000-0000', '123'),
('satria@gmail.com', 'Satria', '01/01/1980', '0818-1000-1000', '123'),
('selamet@gmail.com', 'Selamet', '01/01/1981', '0897-1000-1000', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `syarat_kel`
--

CREATE TABLE `syarat_kel` (
  `id_syarat` varchar(10) NOT NULL,
  `id_kel` int(5) NOT NULL,
  `nama_dok` varchar(45) NOT NULL,
  `nmr_dok` varchar(30) NOT NULL,
  `file_dok` varchar(100) NOT NULL,
  `ukuran` int(10) NOT NULL,
  `tipe` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `syarat_kel`
--

INSERT INTO `syarat_kel` (`id_syarat`, `id_kel`, `nama_dok`, `nmr_dok`, `file_dok`, `ukuran`, `tipe`) VALUES
('Kelahiran', 13, 'Fotokopi Surat Ket.Kelahiran dari Rumah Sakit', '008/Keb/BBH/RM/XII/2018', 'KENAL_LAHIR.jpg', 170969, 'image/jpeg'),
('Kelahiran', 12, 'Fotokopi Surat Ket.Kelahiran dari Rumah Sakit', '008/Keb/BBH/RM/XII/2019', 'KENAL_LAHIR.jpg', 170969, 'image/jpeg'),
('Kelahiran', 2, 'Surat Pengantar RTRW', '01/01/SP/RT02RW03/2019', 'SURATPENGANTAR_RTRW.jpg', 65099, 'image/jpeg'),
('Kelahiran', 3, 'Surat Pengantar RTRW', '01/11/SP/RT02RW03/2019', 'SURATPENGANTAR_RTRW.jpg', 65099, 'image/jpeg'),
('Kelahiran', 2, 'Fotokopi Surat Ket.Kelahiran dari Rumah Sakit', '015/Keb/BBH/RM/XII/2015', 'KENALLAHIR_HAZNAN.jpg', 170969, 'image/jpeg'),
('Kelahiran', 11, 'Surat Pengantar RTRW', '02/08/SP/RT02.RW03/2018', 'SURATPENGANTAR_RTRW.jpg', 65099, 'image/jpeg'),
('Kelahiran', 1, 'Surat Pengantar RTRW', '02/08/SP/RT02RW03/2018', 'SURATPENGANTAR_RTRW.jpg', 65099, 'image/jpeg'),
('Kelahiran', 4, 'Surat Pengantar RTRW', '02/32/SP/RT02RW03/2019', 'SURATPENGANTAR_RTRW.jpg', 65099, 'image/jpeg'),
('Kelahiran', 11, 'Fotokopi Surat Ket.Kelahiran dari Rumah Sakit', '021/Keb/BBH/RM/XXI/2015', 'KET_LAHIRRS.jpg', 205290, 'image/jpeg'),
('Kelahiran', 4, 'Fotokopi Surat Ket.Kelahiran dari Rumah Sakit', '022/Keb/BBH/RM/XII/2015', 'KEL.jpg', 77013, 'image/jpeg'),
('Kelahiran', 1, 'Fotokopi Surat Ket.Kelahiran dari Rumah Sakit', '025/Keb/BBH/RM/XII/2015', 'KET_LAHIRRS.jpg', 205290, 'image/jpeg'),
('Kelahiran', 5, 'Surat Pengantar RTRW', '03/08/SP/RT02RW03/2018', 'SURATPENGANTAR_RTRW.jpg', 65099, 'image/jpeg'),
('Kelahiran', 2, 'Fotokopi Kutipan Akta Nikah', '100/43/XII/1996', 'AKTANIKAH.jpeg', 102300, 'image/jpeg'),
('Kelahiran', 3, 'Fotokopi Kutipan Akta Nikah', '110/43/XII/1996', 'AKTANIKAH.jpeg', 102300, 'image/jpeg'),
('Kelahiran', 3, 'Fotokopi Surat Ket.Kelahiran dari Rumah Sakit', '115/Keb/BBH/RM/XII/2015', 'KENALLAHIR_HAZNAN.jpg', 170969, 'image/jpeg'),
('Kelahiran', 12, 'Surat Pengantar RTRW', '20/08/SP/RT02RW03/2019', 'SURAT_PENGANTAR_RTRW.jpg', 65099, 'image/jpeg'),
('Kelahiran', 4, 'Fotokopi Kutipan Akta Nikah', '200/43/XII/1996', 'NIKAH.jpg', 12918, 'image/jpeg'),
('Kelahiran', 13, 'Surat Pengantar RTRW', '23/08/SP/RT02RW03/2019', 'SURAT_PENGANTAR_RTRW.jpg', 65099, 'image/jpeg'),
('Kelahiran', 11, 'Fotokopi Kutipan Akta Nikah', '300/00/XII/1996', 'AKTANIKAH.jpeg', 102300, 'image/jpeg'),
('Kelahiran', 5, 'Fotokopi Kutipan Akta Nikah', '300/33/XII/1996', 'NIKAH.jpg', 12918, 'image/jpeg'),
('Kelahiran', 1, 'Fotokopi Kutipan Akta Nikah', '300/43/XII/1996', 'AKTANIKAH.jpeg', 102300, 'image/jpeg'),
('Kelahiran', 5, 'Fotokopi Surat Ket.Kelahiran dari Rumah Sakit', '345/08475/RSAM/IX/Sekr-TU/2019', 'NIKAH.jpg', 12918, 'image/jpeg'),
('Kelahiran', 13, 'Fotokopi Kutipan Akta Nikah', '402/24/XII/1995', 'AKTA_NIKAH.jpeg', 134456, 'image/jpeg'),
('Kelahiran', 12, 'Fotokopi Kutipan Akta Nikah', '402/24/XII/1996', 'AKTA_NIKAH.jpeg', 134456, 'image/jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `syarat_kem`
--

CREATE TABLE `syarat_kem` (
  `id_syarat` varchar(10) NOT NULL,
  `id_kem` int(5) NOT NULL,
  `nama_dok` varchar(45) NOT NULL,
  `nmr_dok` varchar(30) NOT NULL,
  `file_dok` varchar(100) NOT NULL,
  `ukuran` int(10) NOT NULL,
  `tipe` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `syarat_kem`
--

INSERT INTO `syarat_kem` (`id_syarat`, `id_kem`, `nama_dok`, `nmr_dok`, `file_dok`, `ukuran`, `tipe`) VALUES
('Kematian', 2, 'Fotokopi Surat Ket.Kelahiran dari Rumah Sakit', ' 145/08475/RSAM/IX/Sekr-TU/201', 'KEMATIAN_KANJUT.jpg', 77947, 'image/jpeg'),
('Kematian', 2, 'Surat Pengantar RTRW', '01/12/SP/RT02RW03/2019', 'SURATPENGANTAR_RTRW.jpg', 65099, 'image/jpeg'),
('Kematian', 3, 'Surat Pengantar RTRW', '02/02/SP/RT02RW03/2019', 'SURATPENGANTAR_RTRW.jpg', 65099, 'image/jpeg'),
('Kematian', 5, 'Surat Pengantar RTRW', '02/22/SP/RT02.RW03/2018', 'SURATPENGANTAR_RTRW.jpg', 65099, 'image/jpeg'),
('Kematian', 1, 'Surat Pengantar RTRW', '03/08/SP/RT02.RW03/2018', 'SURATPENGANTAR_RTRW.jpg', 65099, 'image/jpeg'),
('Kematian', 6, 'Surat Pengantar RTRW', '08/08/SP/RT02.RW03/2018', 'SURATPENGANTAR_RTRW.jpg', 65099, 'image/jpeg'),
('Kematian', 4, 'Surat Pengantar RTRW', '10/08/SP/RT02.RW03/2018', 'SURATPENGANTAR_RTRW.jpg', 65099, 'image/jpeg'),
('Kematian', 7, 'Surat Pengantar RTRW', '12/18/SP/RT02.RW03/2018', 'SURATPENGANTAR_RTRW.jpg', 65099, 'image/jpeg'),
('Kematian', 5, 'Fotokopi Surat Ket.Kelahiran dari Rumah Sakit', '145/08475/RSAM/Sekr-TU/2015', 'surat-keterangan-kematian-1-638.jpg', 65748, 'image/jpeg'),
('Kematian', 3, 'Fotokopi Surat Ket.Kelahiran dari Rumah Sakit', '245/08475/RSAM/IX/Sekr-TU/2019', 'KEMATIAN.jpg', 77947, 'image/jpeg'),
('Kematian', 4, 'Fotokopi Surat Ket.Kelahiran dari Rumah Sakit', '301/08475/RSAM/IX/Sekr-TU/2019', 'surat-keterangan-kematian-1-638.jpg', 65748, 'image/jpeg'),
('Kematian', 6, 'Fotokopi Surat Ket.Kelahiran dari Rumah Sakit', '445/08415/RSAM/Sekr-TU/2015', 'surat-keterangan-kematian-1-638.jpg', 65748, 'image/jpeg'),
('Kematian', 1, 'Fotokopi Surat Ket.Kelahiran dari Rumah Sakit', '445/08475/RSAM/IX/Sekr-TU/2019', 'KET_KEMATIANRS.jpg', 55259, 'image/jpeg'),
('Kematian', 7, 'Fotokopi Surat Ket.Kelahiran dari Rumah Sakit', '445/18475/RSAM/Sekr-TU/2015', 'surat-keterangan-kematian-1-638.jpg', 65748, 'image/jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `data_kk`
--
ALTER TABLE `data_kk`
  ADD PRIMARY KEY (`no_kk`);

--
-- Indeks untuk tabel `data_ktp`
--
ALTER TABLE `data_ktp`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD PRIMARY KEY (`id_kel`);

--
-- Indeks untuk tabel `kematian`
--
ALTER TABLE `kematian`
  ADD PRIMARY KEY (`id_kem`);

--
-- Indeks untuk tabel `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `syarat_kel`
--
ALTER TABLE `syarat_kel`
  ADD PRIMARY KEY (`nmr_dok`);

--
-- Indeks untuk tabel `syarat_kem`
--
ALTER TABLE `syarat_kem`
  ADD PRIMARY KEY (`nmr_dok`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kelahiran`
--
ALTER TABLE `kelahiran`
  MODIFY `id_kel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `kematian`
--
ALTER TABLE `kematian`
  MODIFY `id_kem` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
