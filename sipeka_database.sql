-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jan 2023 pada 09.00
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipeka_app`
--

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
-- Struktur dari tabel `hasil_konsultasi`
--

CREATE TABLE `hasil_konsultasi` (
  `id_hasil` int(11) NOT NULL,
  `deskripsi_hasil` text NOT NULL,
  `nilai_rentan_awal` float NOT NULL,
  `nilai_rentan_akhir` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hasil_konsultasi`
--

INSERT INTO `hasil_konsultasi` (`id_hasil`, `deskripsi_hasil`, `nilai_rentan_awal`, `nilai_rentan_akhir`) VALUES
(1, 'Tidak Kesepian', 20, 34),
(2, 'Kesepian Tingkat Rendah', 35, 49),
(3, 'Kesepian Tingkat Sedang', 50, 64),
(4, 'Kesepian Tingkat  Berat', 65, 80);

-- --------------------------------------------------------

--
-- Struktur dari tabel `item_diagnosa`
--

CREATE TABLE `item_diagnosa` (
  `id_item_diagnosa` int(11) NOT NULL,
  `item_diagnosa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `item_diagnosa`
--

INSERT INTO `item_diagnosa` (`id_item_diagnosa`, `item_diagnosa`) VALUES
(1, 'Seberapa sering anda merasa tidak cocok dengan orang-orang dari sekitar anda?'),
(2, 'Seberapa sering anda merasa tidak memiliki teman?'),
(3, 'Seberapa sering anda merasa tidak ada seseorang pun yang dapat anda mintai tolong?'),
(4, 'Seberapa sering anda merasa sendiri?'),
(5, 'Seberapa sering anda merasa menjadi bagian dari kelompok teman-teman anda?'),
(6, 'Seberapa sering anda merasa bahwa anda memiliki banyak persamaan dengan orangorang disekitar anda?'),
(7, 'Seberapa sering anda merasa bahwa anda tidak dekat dengan orang lain?'),
(8, 'Seberapa sering anda bahwa hobi dan ide anda tidak sama dengan orang-orang disekitar anda?'),
(9, 'Seberapa sering and anda merasa ramah dan bersahabat?'),
(10, 'Seberapa sering anda merasa dekat dengan orang lain?'),
(11, 'Seberapa sering anda merasa ditinggalkan?'),
(12, 'Seberapa sering anda merasa hubungan anda dengan orang lain tidak berarti?'),
(13, 'Seberapa sering anda merasa tak satupun orang mengenal anda dengan baik?'),
(14, 'Seberapa sering anda merasa terisolasi dari orang lain?'),
(15, 'Seberapa sering anda dapat menemukan teman ketika anda membutuhkannya?'),
(16, 'Seberapa sering anda merasa bahwa ada seseorang yang benar-benar dapat mengerti anda?'),
(17, 'Seberapa sering anda merasa malu?'),
(18, 'Seberapa sering anda merasa bahwa orangorang ada disekitar anda, tetapi tidak bersama anda? '),
(19, 'Seberapa sering anda merasa bahwa ada orang yang dapat anda ajak bicara (ngobrol)?'),
(20, 'Seberapa sering anda merasa bahwa ada orang yang dapat anda mintai tolong?');

-- --------------------------------------------------------

--
-- Struktur dari tabel `item_nilai`
--

CREATE TABLE `item_nilai` (
  `id_item_nilai` int(11) NOT NULL,
  `id_diagnosa` int(11) NOT NULL,
  `tidak` int(11) NOT NULL,
  `jarang` int(11) NOT NULL,
  `kadang` int(11) NOT NULL,
  `selalu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `item_nilai`
--

INSERT INTO `item_nilai` (`id_item_nilai`, `id_diagnosa`, `tidak`, `jarang`, `kadang`, `selalu`) VALUES
(1, 1, 1, 2, 3, 4),
(2, 2, 4, 3, 2, 1),
(3, 3, 4, 3, 2, 1),
(4, 4, 1, 2, 3, 4),
(5, 5, 1, 2, 3, 4),
(6, 6, 1, 2, 3, 4),
(7, 7, 4, 3, 2, 1),
(8, 8, 4, 3, 2, 1),
(9, 9, 1, 2, 3, 4),
(10, 10, 1, 2, 3, 4),
(11, 11, 4, 3, 2, 1),
(12, 12, 4, 3, 2, 1),
(13, 13, 4, 3, 2, 1),
(14, 14, 4, 3, 2, 1),
(15, 15, 1, 2, 3, 4),
(16, 16, 1, 2, 3, 4),
(17, 17, 4, 3, 2, 1),
(18, 18, 4, 3, 2, 1),
(19, 19, 1, 2, 3, 4),
(20, 20, 1, 2, 3, 4);

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mdyusup45@gmail.com', '$2y$10$rZ8K.JJmr88tydnAAeuBL.tuaeoD2e5EGhejM0LBlicHSiOq8zFDe', '2023-01-08 04:23:52');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekomendasi`
--

CREATE TABLE `rekomendasi` (
  `id_rekomendasi` int(11) NOT NULL,
  `id_hasil` int(11) NOT NULL,
  `deskripsi_rekomendasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `rekomendasi`
--

INSERT INTO `rekomendasi` (`id_rekomendasi`, `id_hasil`, `deskripsi_rekomendasi`) VALUES
(3, 3, '<p>Hasil tes menunjukkan bahwa kamu merasa cukup kesepian. Saat ini, kamu memiliki beberapa orang yang bisa kamu percayai dan dapat kamu andalkan, akan tetapi, kamu masih merasakan adanya kekurangan dari interaksi yang kamu lakukan. Sesekali, kamu merasakan adanya kekosongan dalam kehidupan sosialmu.&nbsp;</p>\r\n\r\n<p>Untuk mengatasi kesepian tingkat sedang, beberapa rekomendasi relaksasi yang dapat dicoba adalah:</p>\r\n\r\n<div class=\"m-lg-3\">\r\n    <ol class=\"list-group-numbered\" style=\"list-style-type: decimal\"></ol>\r\n	<li>Terapi seni: Terapi seni seperti melukis, menulis, atau menari dapat membantu Kamu untuk mengekspresikan perasaan kesepian Kamu secara kreatif dan menemukan cara untuk meredakannya.</li>\r\n	<li>Jalan-jalan di alam: Berjalan di taman atau di alam dapat membantu Kamu untuk menenangkan pikiran dan meredakan perasaan kesepian.</li>\r\n	<li>Terapi hewan: Terapi hewan dapat membantu Kamu untuk meningkatkan interaksi sosial dan meredakan perasaan kesepian. Kamu dapat mencoba terapi hewan dengan hewan peliharaan Kamu sendiri atau dengan mengunjungi tempat terapi hewan.</li>\r\n	<li>Pertemuan dukungan: Bergabung dengan kelompok dukungan dapat membantu Kamu untuk merasa lebih terhubung dengan orang lain yang mengalami kesepian yang sama.</li>\r\n	<li>Terapi kognitif: Terapi kognitif dapat membantu Kamu untuk mengidentifikasi dan mengubah pikiran negatif yang mungkin menyebabkan perasaan kesepian.</li>\r\n	<li>Mindfulness: Mindfulness adalah teknik relaksasi yang membantu untuk fokus pada saat sekarang dan meningkatkan kesadaran diri. Kamu dapat mencoba mindfulness dengan meditasi atau yoga.</li>\r\n</ol>\r\n</div>\r\n\r\n<p>Itu hanya beberapa rekomendasi relaksasi yang dapat dicoba untuk mengatasi kesepian tingkat sedang. Ingatlah untuk selalu mendengarkan tubuh Kamu dan mencari bantuan profesional jika Kamu merasa perlu.</p>\r\n'),
(2, 2, '<p>\r\n  Tampaknya belakangan ini kamu tidak begitu kesepian nih, namun untuk\r\n  menenangkan dirimu saat ini Cobalah untuk meningkatkan interaksi sosial dengan\r\n  orang lain melalui kegiatan yang menyenangkan, seperti bergabung dengan\r\n  kelompok hobi atau berpartisipasi dalam kegiatan komunitas. Juga, cobalah\r\n  untuk menjalin kontak dengan teman lama atau kerabat yang jarang ditemui.\r\n</p>\r\n\r\n<p>\r\n  Untuk mengatasi kesepian tingkat ringan, beberapa rekomendasi relaksasi yang\r\n  dapat dicoba adalah:\r\n</p>\r\n\r\n<div class=\"m-lg-3\">\r\n  <ol class=\"list-group-numbered\" style=\"list-style-type: decimal\">\r\n    <li>\r\n      Meditasi: Meditasi dapat membantu kamu untuk fokus pada saat sekarang dan\r\n      meredakan perasaan kesepian. kamu dapat mencoba berbagai jenis meditasi,\r\n      seperti meditasi pernapasan, meditasi visualisasi, atau meditasi suara.\r\n    </li>\r\n    <li>\r\n      Yoga: Yoga dapat membantu kamu untuk menenangkan pikiran dan meningkatkan\r\n      kesehatan fisik dan mental. kamu dapat mencoba berbagai jenis yoga,\r\n      seperti yoga Hatha, yoga Kundalini, atau yoga nidra.\r\n    </li>\r\n    <li>\r\n      Latihan relaksasi otot progresif: Latihan relaksasi otot progresif dapat\r\n      membantu kamu untuk meredakan tekanan dan menenangkan pikiran. kamu dapat\r\n      mencoba latihan ini dengan menegangkan dan melepaskan otot-otot tubuh\r\n      secara bergantian.\r\n    </li>\r\n    <li>\r\n      Musik relaksasi: Mendengarkan musik relaksasi dapat membantu kamu untuk\r\n      meredakan perasaan kesepian dan menenangkan pikiran. kamu dapat mencari\r\n      musik relaksasi yang sesuai dengan selera kamu .\r\n    </li>\r\n    <li>\r\n      Terapi Warna: Terapi warna adalah teknik relaksasi yang menggunakan\r\n      warna-warna untuk meningkatkan kesehatan fisik dan mental. kamu dapat\r\n      mencoba mengejar atau membuat sesuatu yang berwarna-warni yang\r\n      menyenangkan.\r\n    </li>\r\n  </ol>\r\n</div>\r\n\r\n<p>\r\n  Itu hanya beberapa rekomendasi relaksasi yang dapat dicoba untuk mengatasi\r\n  kesepian tingkat ringan. Ingatlah untuk selalu mendengarkan tubuh kamu dan\r\n  mencari bantuan profesional jika kamu merasa perlu.\r\n</p>'),
(4, 4, '<p>Dari hasil test yang kamu dapat, tampaknya kamu sedang merasa kesepian berat, tenang kamu ga sendirian kok, masih banyak orang yang memperhatikan dan peduli tentangmu. jika kamu merasa sangat kesepian kamu bisa coba untuk membuka obrolan dengan orang lain, dan mungkin kamu bisa juga meminta bantuan oleh pakar psikolog juga agar bisa menenangkan dirimu.</p>\n\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Untuk mengatasi kesepian tingkat berat, beberapa rekomendasi relaksasi yang dapat dicoba adalah:</span></span></p>\n\n<div class=\"m-lg-3\">\n    <ol class=\"list-group-numbered\" style=\"list-style-type: decimal\"></ol>\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Terapi konseling: Terapi konseling dapat membantu Kamu untuk mengatasi perasaan kesepian yang berat dan menemukan cara untuk mengatasinya. Kamu dapat mencari konselor yang dapat membantu Kamu dalam mengatasi kesepian Kamu.</span></span></li>\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Terapi kelompok: Terapi kelompok dapat membantu Kamu untuk merasa lebih terhubung dengan orang lain yang mengalami kesepian yang sama. Kamu dapat mencari kelompok dukungan atau kelompok terapi yang sesuai dengan masalah Kamu.</span></span></li>\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Terapi farmakologi: Dalam kasus kesepian yang berat, terapi farmakologi dapat dipertimbangkan, seperti obat anti-depresan yang diresepkan oleh dokter.</span></span></li>\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Pertemuan dukungan: Bergabung dengan pertemuan dukungan seperti 12 langkah atau pertemuan dukungan lainnya dapat membantu Kamu untuk merasa lebih terhubung dengan orang lain yang mengalami kesepian yang sama.</span></span></li>\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Latihan relaksasi : Latihan relaksasi seperti progressive muscle relaxation, yoga, atau mindfulness dapat membantu Kamu untuk menenangkan pikiran dan meredakan perasaan kesepian.</span></span></li>\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Pertemuan spiritual : Pertemuan spiritual seperti keagamaan dapat membantu Kamu untuk merasa lebih terhubung dengan Tuhan dan orang lain, serta menemukan arti dan tujuan dalam hidup.</span></span></li>\n</ol>\n</div>\n\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Itu hanya beberapa rekomendasi relaksasi yang dapat dicoba untuk mengatasi kesepian tingkat berat. Ingatlah untuk selalu mendengarkan tubuh Kamu dan mencari bantuan profesional jika Kamu merasa perlu. Bantuan profesional seperti psikolog atau konselor dapat memberikan dukungan yang lebih efektif dan komprehensif untuk mengatasi masalah kesepian yang berat.</span></span></p>\n\n<p><br />\n&nbsp;</p>\n'),
(1, 1, '<p>\r\n  Selamat ya kamu sekarang tidak mengalami kesepian, kamu punya banyak teman\r\n  yang kamu percayai, dan hubungan sosialmu juga baik nih. tapi kamu juga bisa\r\n  lakukan hal-hal berikut untuk menjaga kesehatan mental kamu :\r\n</p>\r\n\r\n<p>\r\n  Untuk menjaga kesehatan mental dan menghindari kesepian, beberapa rekomendasi\r\n  relaksasi yang dapat dicoba adalah:\r\n</p>\r\n\r\n<p>\r\n  Hasil tes menunjukkan bahwa kamu merasa kesepian berat. Saat ini, tenang kamu\r\n  ga sendirian kok, banyak orang di luar sana yang peduli dengan kamu.\r\n</p>\r\n\r\n<p>\r\n  Untuk mengatasi kesepian tingkat berat, beberapa rekomendasi relaksasi yang\r\n  dapat dicoba adalah:\r\n</p>\r\n<div class=\"m-lg-3\">\r\n    <ol class=\"list-group-numbered\" style=\"list-style-type: decimal\"></ol>\r\n  <li>\r\n    Terapi konseling: Terapi konseling dapat membantu Kamu untuk mengatasi\r\n    perasaan kesepian yang berat dan menemukan cara untuk mengatasinya. Kamu\r\n    dapat mencari konselor yang dapat membantu Kamu dalam mengatasi kesepian\r\n    Kamu.\r\n  </li>\r\n  <li>\r\n    Terapi kelompok: Terapi kelompok dapat membantu Kamu untuk merasa lebih\r\n    terhubung dengan orang lain yang mengalami kesepian yang sama. Kamu dapat\r\n    mencari kelompok dukungan atau kelompok terapi yang sesuai dengan masalah\r\n    Kamu.\r\n  </li>\r\n  <li>\r\n    Terapi farmakologi: Dalam kasus kesepian yang berat, terapi farmakologi\r\n    dapat dipertimbangkan, seperti obat anti-depresan yang diresepkan oleh\r\n    dokter.\r\n  </li>\r\n  <li>\r\n    Pertemuan dukungan: Bergabung dengan pertemuan dukungan seperti 12 langkah\r\n    atau pertemuan dukungan lainnya dapat membantu Kamu untuk merasa lebih\r\n    terhubung dengan orang lain yang mengalami kesepian yang sama.\r\n  </li>\r\n  <li>\r\n    Latihan relaksasi : Latihan relaksasi seperti progressive muscle relaxation,\r\n    yoga, atau mindfulness dapat membantu Kamu untuk menenangkan pikiran dan\r\n    meredakan perasaan kesepian.\r\n  </li>\r\n  <li>\r\n    Pertemuan spiritual : Pertemuan spiritual seperti keagamaan dapat membantu\r\n    Kamu untuk merasa lebih terhubung dengan Tuhan dan orang lain, serta\r\n    menemukan arti dan tujuan dalam hidup.\r\n  </li>\r\n</ol>\r\n</div>\r\n\r\n<p>\r\n  Itu hanya beberapa rekomendasi relaksasi yang dapat dicoba untuk mengatasi\r\n  kesepian tingkat berat. Ingatlah untuk selalu mendengarkan tubuh Kamu dan\r\n  mencari bantuan profesional jika Kamu merasa perlu. Bantuan profesional\r\n  seperti psikolog atau konselor dapat memberikan dukungan yang lebih efektif\r\n  dan komprehensif untuk mengatasi masalah kesepian yang berat.\r\n</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Muhamad Dedi Yusup', 'mdyusup45@gmail.com', NULL, '$2y$10$xP1A/d96Dbg8HUFT2J/RlOcUOHkppl4g0aw.8aHR503X413kWXLsy', NULL, '2023-01-08 04:23:05', '2023-01-08 04:23:05');

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
-- Indeks untuk tabel `hasil_konsultasi`
--
ALTER TABLE `hasil_konsultasi`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indeks untuk tabel `item_diagnosa`
--
ALTER TABLE `item_diagnosa`
  ADD PRIMARY KEY (`id_item_diagnosa`);

--
-- Indeks untuk tabel `item_nilai`
--
ALTER TABLE `item_nilai`
  ADD PRIMARY KEY (`id_item_nilai`);

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
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT untuk tabel `hasil_konsultasi`
--
ALTER TABLE `hasil_konsultasi`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `item_diagnosa`
--
ALTER TABLE `item_diagnosa`
  MODIFY `id_item_diagnosa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `item_nilai`
--
ALTER TABLE `item_nilai`
  MODIFY `id_item_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
