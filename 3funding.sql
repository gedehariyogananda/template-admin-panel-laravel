-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Okt 2023 pada 12.34
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3funding`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `campains`
--

CREATE TABLE `campains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title_campains` varchar(255) NOT NULL,
  `banner_campains` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `start_date_camp` date NOT NULL,
  `end_date_camp` date NOT NULL,
  `status_campains` enum('Open','Close') NOT NULL DEFAULT 'Open',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `campains`
--

INSERT INTO `campains` (`id`, `user_id`, `title_campains`, `banner_campains`, `deskripsi`, `start_date_camp`, `end_date_camp`, `status_campains`, `created_at`, `updated_at`) VALUES
(2, 4, 'sepeda baru', 'img-banner-campains/kySLYRHfhce5jAoK4igmnG0gZB0SX88Svn86GFYV.png', 'deskirpis nya ini bagus banget anjas', '2023-11-01', '2023-11-02', 'Open', '2023-10-09 02:30:23', '2023-10-09 02:42:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `history_campains`
--

CREATE TABLE `history_campains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `campain_id` bigint(20) UNSIGNED NOT NULL,
  `nama_donatur` varchar(255) NOT NULL DEFAULT 'annonymous',
  `nominal_donatur` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `status_payment` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `history_campains`
--

INSERT INTO `history_campains` (`id`, `campain_id`, `nama_donatur`, `nominal_donatur`, `payment_method`, `status_payment`, `created_at`, `updated_at`) VALUES
(1, 2, 'annonymous', '50000', 'Dana', 'Success', '2023-10-09 10:00:49', NULL),
(2, 2, 'sandy', '60000', 'Ovo', 'Success', '2023-10-09 10:00:53', NULL),
(3, 2, 'areyyy', '50000', 'dana', 'Success', '2023-10-09 10:31:01', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_07_050658_create_req_camps_table', 1),
(6, '2023_10_07_050752_create_campains_table', 1),
(7, '2023_10_07_050811_create_history_campains_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `req_camps`
--

CREATE TABLE `req_camps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `judul_campain` varchar(255) NOT NULL,
  `proposal` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` enum('Pending','Verifikasi Berkas','Lolos Seleksi Pemberkasan','Lolos Seleksi Wawancara','Pengajuan Disetujui','Proses Published Campain','Start Published Campain','End Published Campain','Proses Pencairan','Pencairan Telah Dikirim','Campain Selesai') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `req_camps`
--

INSERT INTO `req_camps` (`id`, `user_id`, `judul_campain`, `proposal`, `target`, `deskripsi`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 'motor listrik, tenaga surya', 'filedumy', 'Rp 150.000.000', 'kami dari tim robotik pens ingin membuat suatu product motor listrik tenaga surya dimana nantinya akan bermanfaat unuk banyak orang didunia, dengan itu kami ingin mengajukan campains bantuan ke website 3funding unutk mensukseskan product kami', 'Proses Published Campain', '2023-10-09 01:41:24', '2023-10-09 01:41:41'),
(2, 5, 'motor listrik, tenaga kunya', 'filedumy', 'Rp 170.000.000', 'kami dari tim robotik pens ingin membuat suatu product motor listrik tenaga kunya dimana nantinya akan bermanfaat unuk banyak orang didunia, dengan itu kami ingin mengajukan campains bantuan ke website 3funding unutk mensukseskan product kami', 'Pending', '2023-10-09 01:41:24', '2023-10-09 01:41:24'),
(3, 6, 'motor listrik, tenaga batre', 'filedumy', 'Rp 160.000.000', 'kami dari tim robotik pens ingin membuat suatu product motor listrik tenaga batre dimana nantinya akan bermanfaat unuk banyak orang didunia, dengan itu kami ingin mengajukan campains bantuan ke website 3funding unutk mensukseskan product kami', 'Pending', '2023-10-09 01:41:24', '2023-10-09 01:41:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `roles` enum('admin','user') NOT NULL,
  `password` varchar(255) NOT NULL,
  `institusi` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `roles`, `password`, `institusi`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Gede Hari Yoga Nanda', 'gede@gmail.com', NULL, 'admin', '$2y$10$57OPk7cBlyBJ8SEq406euOO9ebOYK/zVrMHAmcppuxOGkjsEFoq6i', 'PENS', NULL, '2023-10-09 01:41:23', '2023-10-09 01:41:23'),
(2, 'Handaru Dwiking', 'handaru@gmail.com', NULL, 'admin', '$2y$10$qUNQdBV4cPakoUHfKYw5VuMc3EJe1cD.kPkfD1d1HlCoyeqtHUftq', 'PENS', NULL, '2023-10-09 01:41:24', '2023-10-09 01:41:24'),
(3, 'Iqbal', 'iqbal@gmail.com', NULL, 'admin', '$2y$10$ikWvOE8RsbY6yi7zCHej4e7x2oUadLiG6fh48yn38NdxUrLFDWpRO', 'PENS', NULL, '2023-10-09 01:41:24', '2023-10-09 01:41:24'),
(4, 'Suroto', 'suroto@gmail.com', NULL, 'user', '$2y$10$8U26E/UWGK7fCRln1LToMesci6cqM253jOZZb2xkqihVdIlgaSUci', 'PENS', NULL, '2023-10-09 01:41:24', '2023-10-09 01:41:24'),
(5, 'Marga', 'marga@gmail.com', NULL, 'user', '$2y$10$LMy2oaXNqZG6mBz6e6winOo/5WfPO3e2Af1f9ILJjheBFGl2loWM6', 'PENS', NULL, '2023-10-09 01:41:24', '2023-10-09 01:41:24'),
(6, 'Satwa', 'satwa@gmail.com', NULL, 'user', '$2y$10$/Wea67KDujHdCGiAAByUOe4QwzJzEaeg6h1IneIr3Fcv1ffylNx.2', 'PENS', NULL, '2023-10-09 01:41:24', '2023-10-09 01:41:24');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `campains`
--
ALTER TABLE `campains`
  ADD PRIMARY KEY (`id`),
  ADD KEY `campains_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `history_campains`
--
ALTER TABLE `history_campains`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `req_camps`
--
ALTER TABLE `req_camps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `req_camps_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT untuk tabel `campains`
--
ALTER TABLE `campains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `history_campains`
--
ALTER TABLE `history_campains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `req_camps`
--
ALTER TABLE `req_camps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `campains`
--
ALTER TABLE `campains`
  ADD CONSTRAINT `campains_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `req_camps`
--
ALTER TABLE `req_camps`
  ADD CONSTRAINT `req_camps_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
