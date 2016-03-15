-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Mar 2016 pada 10.49
-- Versi Server: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_module`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `app_agama`
--

CREATE TABLE `app_agama` (
  `id_agama` int(11) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `app_agama`
--

INSERT INTO `app_agama` (`id_agama`, `agama`, `keterangan`, `status`) VALUES
(1, 'Islam', 'Islam', '1'),
(2, 'Kristen', 'Kristen', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `app_eskul`
--

CREATE TABLE `app_eskul` (
  `id_eskul` int(11) NOT NULL,
  `nama_eskul` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `hari_eskul` varchar(20) NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_selesai` time NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `app_eskul`
--

INSERT INTO `app_eskul` (`id_eskul`, `nama_eskul`, `deskripsi`, `hari_eskul`, `waktu_mulai`, `waktu_selesai`, `status`) VALUES
(1, 'Taekwondo', 'Bela diri', 'Minggu', '09:00:00', '10:00:00', '1'),
(2, 'MIPA', 'Matematika dan Ilmu Pengetahuan Alam', 'Jumat', '08:00:00', '10:00:00', '1'),
(3, 'Futsal', 'Futsal', 'Senin', '15:00:00', '17:00:00', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `app_jurusan`
--

CREATE TABLE `app_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `jurusan` varchar(200) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `app_jurusan`
--

INSERT INTO `app_jurusan` (`id_jurusan`, `jurusan`, `keterangan`, `deskripsi`, `status`) VALUES
(1, 'TKJ', 'Teknik Komputer dan Jaringan', 'Teknik Komputer dan Jaringan', '1'),
(2, 'IPA', 'Ilmu Pengetahuan Alam', 'Ilmu Pengetahuan Alam', '1'),
(5, 'AP', 'Administrasi Perkantoran', 'Administrasi Perkantoran', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `app_kelas`
--

CREATE TABLE `app_kelas` (
  `id_kelas` int(11) NOT NULL,
  `kelas` varchar(200) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `app_kelas`
--

INSERT INTO `app_kelas` (`id_kelas`, `kelas`, `id_jurusan`, `status`) VALUES
(1, 'X', 1, '1'),
(2, 'XI', 1, '1'),
(3, 'XII', 1, '1'),
(4, 'X', 2, '1'),
(5, 'XI', 2, '1'),
(6, 'XII', 2, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `app_pekerjaan`
--

CREATE TABLE `app_pekerjaan` (
  `id_pekerjaan` int(11) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `app_pekerjaan`
--

INSERT INTO `app_pekerjaan` (`id_pekerjaan`, `pekerjaan`, `deskripsi`, `status`) VALUES
(1, 'Petani', 'Petani', '1'),
(2, 'Pedagang', 'Pedagang', '1'),
(4, 'Guru', 'Honorer', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `app_siswa`
--

CREATE TABLE `app_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nisn` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `tpt_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('1','2') NOT NULL,
  `agama` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `kelas` int(11) NOT NULL,
  `jurusan` int(11) NOT NULL,
  `eskul` int(11) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `status_dlm_keluarga` varchar(20) NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `jlh_saudara` int(11) NOT NULL,
  `pendidikan_sebelumnya` varchar(50) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `alamat_ortu` text NOT NULL,
  `pekerjaan_ayah` int(11) NOT NULL,
  `pekerjaan_ibu` int(11) NOT NULL,
  `penghasilan_ayah` int(11) NOT NULL,
  `penghasilan_ibu` int(11) NOT NULL,
  `telp_ortu` varchar(12) NOT NULL,
  `nama_wali` varchar(50) NOT NULL,
  `alamat_wali` text NOT NULL,
  `telp_wali` varchar(12) NOT NULL,
  `pekerjaan_wali` int(11) NOT NULL,
  `status_siswa` enum('1','2','3') NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `app_siswa`
--

INSERT INTO `app_siswa` (`id_siswa`, `nisn`, `nis`, `nama_lengkap`, `foto`, `tpt_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `alamat`, `no_hp`, `kelas`, `jurusan`, `eskul`, `semester`, `tgl_masuk`, `status_dlm_keluarga`, `anak_ke`, `jlh_saudara`, `pendidikan_sebelumnya`, `nama_ayah`, `nama_ibu`, `alamat_ortu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `penghasilan_ayah`, `penghasilan_ibu`, `telp_ortu`, `nama_wali`, `alamat_wali`, `telp_wali`, `pekerjaan_wali`, `status_siswa`, `status`) VALUES
(14, 123456789, 517367876, 'Sandi Winata', 'SANDI-WINATA-SISFOKOL.jpg', 'Bogor', '1997-06-20', '1', 1, 'Bogor', '085693138131', 1, 1, 1, '1', '2012-06-20', 'Anak', 1, 2, 'SMP', 'Jai Abdullah', 'Sari', 'Bogor', 2, 2, 3000000, 2000000, '085693138131', 'Jai Abdullah', 'Bogor', '085693138131', 2, '2', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `app_user`
--

CREATE TABLE `app_user` (
  `id_user` int(2) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `re_password` varchar(30) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0=Tidak Aktif 1=Aktif',
  `nama_lengkap` varchar(30) NOT NULL,
  `level` enum('3','2','5','4','1') NOT NULL COMMENT '1=Administrator, 2=Wali Kelas, 3=Guru, 4=Staff, 5=Kepala Sekolah',
  `tanggal_input` datetime NOT NULL,
  `last_visited` datetime NOT NULL,
  `email` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status_online` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `app_user`
--

INSERT INTO `app_user` (`id_user`, `username`, `password`, `re_password`, `status`, `nama_lengkap`, `level`, `tanggal_input`, `last_visited`, `email`, `photo`, `status_online`) VALUES
(10, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', '1', 'Administrator', '1', '2015-11-22 10:54:58', '2015-11-22 10:55:03', '', '', '0'),
(20, 'sandi', '4b1e2554cf51dcfb19cae120c8fdc037655b2f5c', 'sandi', '1', 'Sandi Winata', '1', '2015-12-19 00:20:53', '2015-12-19 00:20:53', '', '', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_agama`
--
ALTER TABLE `app_agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indexes for table `app_eskul`
--
ALTER TABLE `app_eskul`
  ADD PRIMARY KEY (`id_eskul`);

--
-- Indexes for table `app_jurusan`
--
ALTER TABLE `app_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `app_kelas`
--
ALTER TABLE `app_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `app_pekerjaan`
--
ALTER TABLE `app_pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indexes for table `app_siswa`
--
ALTER TABLE `app_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `app_user`
--
ALTER TABLE `app_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_agama`
--
ALTER TABLE `app_agama`
  MODIFY `id_agama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `app_eskul`
--
ALTER TABLE `app_eskul`
  MODIFY `id_eskul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `app_jurusan`
--
ALTER TABLE `app_jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `app_kelas`
--
ALTER TABLE `app_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `app_pekerjaan`
--
ALTER TABLE `app_pekerjaan`
  MODIFY `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `app_siswa`
--
ALTER TABLE `app_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `app_user`
--
ALTER TABLE `app_user`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
