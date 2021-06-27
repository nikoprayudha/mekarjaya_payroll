-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jun 2021 pada 18.10
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mekarjaya_payroll`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_26_153511_create_tbl_divisi_table', 1),
(5, '2021_06_26_154628_create_tbl_jabatan_table', 2),
(6, '2021_06_26_155919_create_tbl_jabatan_table', 3),
(7, '2021_06_26_160431_create_tbl_karyawan_table', 4),
(8, '2021_06_26_160905_create_tbl_absensi_table', 5),
(9, '2021_06_26_162536_create_tbl_gaji_table', 6),
(10, '2021_06_26_163253_create_tbl_pengesahan_gaji', 7),
(11, '2021_06_27_133956_create_tbl_absensi_table', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_absensi`
--

CREATE TABLE `tbl_absensi` (
  `id_absensi` bigint(20) UNSIGNED NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `jml_kerja` int(11) NOT NULL,
  `jml_sakit` int(11) NOT NULL,
  `jml_izin` int(11) NOT NULL,
  `jml_alfa` int(11) NOT NULL,
  `jml_cuti` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_absensi`
--

INSERT INTO `tbl_absensi` (`id_absensi`, `id_karyawan`, `jml_kerja`, `jml_sakit`, `jml_izin`, `jml_alfa`, `jml_cuti`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 20, 0, 0, 0, 0, '2021-06-27 07:21:08', NULL, '2021-06-27 07:21:08'),
(2, 2, 18, 1, 1, 0, 0, NULL, NULL, NULL),
(3, 4, 20, 0, 0, 0, 0, NULL, '2021-06-27 07:19:17', '2021-06-27 07:19:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_divisi`
--

CREATE TABLE `tbl_divisi` (
  `id_divisi` bigint(20) UNSIGNED NOT NULL,
  `nama_divisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_divisi`
--

INSERT INTO `tbl_divisi` (`id_divisi`, `nama_divisi`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'HRD (Human Resource Departement)', '2021-06-26 23:12:18', '2021-06-27 03:24:54', '2021-06-26 23:12:18'),
(2, 'IT (Information & Technology)', '2021-06-26 23:50:48', '2021-06-26 22:22:39', '2021-06-26 23:50:48'),
(3, 'Sales & Marketing', NULL, '2021-06-26 22:22:54', '2021-06-26 22:22:54'),
(4, 'QA (Quality Assurance)', NULL, '2021-06-26 22:26:23', '2021-06-26 23:25:24'),
(5, 'HRD (Human Resource Departement)', NULL, '2021-06-26 23:12:35', '2021-06-26 23:12:35'),
(6, 'GA (General Affairs)', NULL, '2021-06-26 23:20:30', '2021-06-26 23:20:30'),
(7, 'PPIC (Product Planning Inventory Control)', NULL, '2021-06-26 23:25:42', '2021-06-26 23:25:42'),
(8, 'Warehouse', NULL, '2021-06-26 23:30:38', '2021-06-26 23:30:38'),
(9, 'Accounting', NULL, '2021-06-26 23:36:41', '2021-06-26 23:36:41'),
(10, 'Production', NULL, '2021-06-26 23:37:53', '2021-06-26 23:37:53'),
(11, 'Purchasing', NULL, '2021-06-26 23:41:38', '2021-06-26 23:41:38'),
(12, 'IT (Information & Technology)', NULL, '2021-06-26 23:53:59', '2021-06-26 23:53:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gaji`
--

CREATE TABLE `tbl_gaji` (
  `id_gaji` bigint(20) UNSIGNED NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `id_absensi` int(11) NOT NULL,
  `tgl_gaji` date NOT NULL,
  `total_gaji_pokok` int(11) NOT NULL,
  `total_tunjangan` int(11) NOT NULL,
  `total_lembur` int(11) NOT NULL,
  `bpjs` int(11) NOT NULL,
  `nwnp` int(11) NOT NULL,
  `total_penerimaan` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `id_jabatan` bigint(20) UNSIGNED NOT NULL,
  `nama_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gaji_pokok` int(11) NOT NULL,
  `tunjangan` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id_jabatan`, `nama_jabatan`, `gaji_pokok`, `tunjangan`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Fullstack Developer', 4200000, 1000000, '2021-06-27 01:05:09', '2021-06-27 07:22:36', '2021-06-27 01:05:09'),
(2, 'Network Engginer', 4000000, 1000000, NULL, '2021-06-27 00:53:49', '2021-06-27 00:53:49'),
(3, 'Fullstack Web Developer', 4200000, 1000000, NULL, '2021-06-27 01:05:40', '2021-06-27 01:09:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `id_karyawan` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`id_karyawan`, `nama`, `tgl_lahir`, `jenis_kelamin`, `id_divisi`, `id_jabatan`, `tgl_masuk`, `foto`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Andini Violeta', '1997-11-07', 'perempuan', 12, 2, '2021-06-27', 'assets/foto/andini.jpg', '2021-06-27 06:21:57', NULL, '2021-06-27 06:21:57'),
(2, 'Soni Kurniawan', '1998-06-16', 'laki-laki', 12, 3, '2021-06-26', 'assets/foto/5HTk3vIRlr0HCaF4zoR4BKvY56I2xtgTNEjnr6pG.jpg', NULL, '2021-06-27 04:56:37', '2021-06-27 06:19:11'),
(3, 'Bela Safira', '1996-06-02', 'perempuan', 12, 2, '2020-06-01', 'assets/foto/N2BrLiCddgnYugRHtyeVpd60lNh7AB0Z2fvY1kB3.jpg', NULL, '2021-06-27 05:57:43', '2021-06-27 05:57:43'),
(4, 'Dewi Ratna', '1996-01-14', 'perempuan', 12, 3, '2020-01-08', 'assets/foto/K5b9crzhIQ7pUM6v7eBWChEF6fwE5Uf7nj2so4cQ.jpg', NULL, '2021-06-27 06:58:56', '2021-06-27 06:58:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengesahan_gaji`
--

CREATE TABLE `tbl_pengesahan_gaji` (
  `id_gaji` bigint(20) UNSIGNED NOT NULL,
  `status_stf_payroll` int(11) NOT NULL,
  `status_spv_payroll` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `tbl_absensi`
--
ALTER TABLE `tbl_absensi`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indeks untuk tabel `tbl_divisi`
--
ALTER TABLE `tbl_divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indeks untuk tabel `tbl_gaji`
--
ALTER TABLE `tbl_gaji`
  ADD PRIMARY KEY (`id_gaji`);

--
-- Indeks untuk tabel `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indeks untuk tabel `tbl_pengesahan_gaji`
--
ALTER TABLE `tbl_pengesahan_gaji`
  ADD PRIMARY KEY (`id_gaji`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbl_absensi`
--
ALTER TABLE `tbl_absensi`
  MODIFY `id_absensi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_divisi`
--
ALTER TABLE `tbl_divisi`
  MODIFY `id_divisi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_gaji`
--
ALTER TABLE `tbl_gaji`
  MODIFY `id_gaji` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id_jabatan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  MODIFY `id_karyawan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengesahan_gaji`
--
ALTER TABLE `tbl_pengesahan_gaji`
  MODIFY `id_gaji` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
