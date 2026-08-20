-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 20, 2026 at 09:14 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resep_masakann`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` smallint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_08_06_122212_create_recipes_table', 1),
(5, '2026_08_07_095747_add_role_to_users_table', 1),
(6, '2026_08_20_065642_create_personal_access_tokens_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'thunder-client', '7af1cd3aab1783eecb37e404e81628832487f03609ed499240bcc58f96c2844a', '[\"*\"]', NULL, NULL, '2026-08-20 00:16:21', '2026-08-20 00:16:21');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingredients` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `steps` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `user_id`, `title`, `slug`, `ingredients`, `steps`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Nasi Goreng Spesial', 'nasi-goreng-spesial', '2 piring nasi putih\r\n2 butir telur\r\n3 siung bawang putih\r\n2 siung bawang merah\r\n2 sdm kecap manis\r\n1 sdm saus tiram\r\n1 batang daun bawang\r\nGaram secukupnya\r\nLada secukupnya\r\nMinyak untuk menumis', '1. Panaskan minyak lalu tumis bawang putih dan bawang merah.\r\n2. Masukkan telur dan orak-arik hingga matang.\r\n3. Masukkan nasi putih lalu aduk rata.\r\n4. Tambahkan kecap manis, saus tiram, garam, dan lada.\r\n5. Masukkan daun bawang.\r\n6. Aduk hingga semua bahan tercampur rata.\r\n7. Sajikan selagi hangat..', 'recipes/Mp5QzIADnQKGrdQsaJ3MqpSydROCb2pCXpN5ROhS.jpg', '2026-08-13 00:37:27', '2026-08-17 21:22:13'),
(2, 1, 'Pasta Carbonara Creamy', 'pasta-carbonara-creamy', '200 gram spaghetti\r\n100 ml susu cair\r\n50 gram keju parmesan\r\n2 butir telur\r\n2 siung bawang putih\r\n50 gram smoked beef\r\n1 sdm mentega\r\nLada hitam secukupnya\r\nGaram secukupnya', '1. Rebus spaghetti hingga al dente.\r\n2. Tumis bawang putih dan smoked beef dengan mentega.\r\n3. Campurkan telur, susu, dan keju parmesan dalam mangkuk.\r\n4. Masukkan spaghetti ke dalam tumisan.\r\n5. Matikan api lalu tuangkan campuran saus.\r\n6. Aduk cepat hingga saus menjadi creamy.\r\n7. Tambahkan lada hitam dan sajikan.', 'recipes/9UQtFudYhMU90O0LXkbWnnldpEdq1QaDrAaMYLAC.jpg', '2026-08-13 00:37:27', '2026-08-13 08:20:06'),
(3, 2, 'Chicken Katsu Curry', 'chicken-katsu-curry', '1 dada ayam\r\n100 gram tepung terigu\r\n100 gram tepung panir\r\n1 butir telur\r\n2 buah kentang\r\n1 buah wortel\r\n1/2 buah bawang bombai\r\n2 sdm bumbu kari\r\n300 ml air\r\nGaram secukupnya\r\nMinyak untuk menggoreng', '1. Pipihkan dada ayam lalu bumbui dengan garam.\r\n2. Balurkan ayam ke tepung terigu, telur, lalu tepung panir.\r\n3. Goreng ayam hingga berwarna keemasan.\r\n4. Tumis bawang bombai hingga harum.\r\n5. Masukkan kentang dan wortel.\r\n6. Tambahkan air dan bumbu kari.\r\n7. Masak hingga sayuran empuk dan kuah mengental.\r\n8. Potong chicken katsu lalu sajikan bersama nasi dan curry.', 'recipes/IT7MGx8nDCmcMHXzJSXuSLuOjuciDijY2st40zcC.jpg', '2026-08-13 00:37:27', '2026-08-13 08:27:35'),
(4, 2, 'Beef Teriyaki Rice Bowl', 'beef-teriyaki-rice-bowl', '200 gram daging sapi iris tipis\r\n2 sdm saus teriyaki\r\n1 sdm kecap manis\r\n1/2 buah bawang bombai\r\n1 siung bawang putih\r\n1 sdt minyak wijen\r\n1 batang daun bawang\r\n1 mangkuk nasi putih\r\nWijen secukupnya', '1. Tumis bawang putih dan bawang bombai hingga harum.\r\n2. Masukkan irisan daging sapi.\r\n3. Masak hingga daging berubah warna.\r\n4. Tambahkan saus teriyaki dan kecap manis.\r\n5. Masukkan minyak wijen.\r\n6. Masak hingga bumbu meresap.\r\n7. Sajikan di atas nasi putih.\r\n8. Tambahkan daun bawang dan wijen.', 'recipes/dELV5QHeytd35osSyZPl88i64I0gP5A7q8DW6pJ7.jpg', '2026-08-13 00:37:27', '2026-08-13 08:32:01'),
(5, 1, 'Avocado Egg Toast', 'avocado-egg-toast', '2 lembar roti gandum\r\n1 buah alpukat matang\r\n2 butir telur\r\n1 sdt air lemon\r\nGaram secukupnya\r\nLada hitam secukupnya\r\nChili flakes secukupnya\r\n1 sdt mentega', '1. Panggang roti hingga kecokelatan.\r\n2. Haluskan alpukat bersama air lemon.\r\n3. Tambahkan garam dan lada.\r\n4. Masak telur sesuai selera.\r\n5. Oleskan alpukat di atas roti.\r\n6. Letakkan telur di atas alpukat.\r\n7. Taburkan chili flakes.\r\n8. Sajikan selagi hangat.', 'recipes/N952udgSQxugg8PKnrQICHIswmu53XRirkGg9W8y.jpg', '2026-08-13 00:37:27', '2026-08-13 08:34:00'),
(6, 2, 'Creamy Mie Chili Oil', 'creamy-mie-chili-oil', '1 bungkus mie\r\n1 butir telur\r\n2 sdm chili oil\r\n2 sdm susu cair\r\n1 siung bawang putih\r\n1 sdm kecap asin\r\n1 sdt minyak wijen\r\nDaun bawang secukupnya\r\nWijen secukupnya', '1. Rebus mie hingga matang lalu tiriskan.\r\n2. Tumis bawang putih hingga harum.\r\n3. Masukkan chili oil dan kecap asin.\r\n4. Tambahkan susu cair dan minyak wijen.\r\n5. Masukkan mie lalu aduk hingga rata.\r\n6. Tambahkan telur dan masak hingga matang.\r\n7. Sajikan dengan daun bawang dan wijen.', 'recipes/qfSASHuDgQLe39ybNHcXoDmel0RGdqAfpS4PcF2O.png', '2026-08-13 00:37:27', '2026-08-14 01:53:35'),
(7, 1, 'Ayam Geprek Sambal Matah', 'ayam-geprek-sambal-matah', '1 potong ayam crispy\r\n5 buah cabai rawit\r\n3 siung bawang merah\r\n1 batang serai\r\n2 lembar daun jeruk\r\n1 buah jeruk limau\r\n1 sdm minyak panas\r\nGaram secukupnya\r\nNasi putih secukupnya', '1. Iris tipis bawang merah, cabai, serai, dan daun jeruk.\r\n2. Campurkan semua bahan sambal.\r\n3. Tambahkan garam dan perasan jeruk limau.\r\n4. Panaskan minyak lalu siram ke sambal.\r\n5. Letakkan ayam crispy di atas sambal.\r\n6. Geprek ayam hingga sedikit hancur.\r\n7. Sajikan bersama nasi putih.', 'recipes/vITLRhKxn4qkiJK4bw8rAtctVFAErJmWhaPjCEed.jpg', '2026-08-13 00:37:27', '2026-08-14 01:54:39'),
(9, 4, 'Korean Spicy Chicken Rice Bowl', 'korean-spicy-chicken-rice-bowl', '250 gram ayam fillet\r\n1 porsi nasi putih\r\n2 sdm gochujang\r\n1 sdm kecap asin\r\n1 sdm madu\r\n2 siung bawang putih\r\n1 sdt minyak wijen\r\n1 butir telur\r\nWijen secukupnya\r\nDaun bawang secukupnya', 'Potong ayam menjadi ukuran kecil.\r\nTumis bawang putih hingga harum.\r\nMasukkan ayam dan masak hingga matang.\r\nTambahkan gochujang, kecap asin, madu, dan minyak wijen.\r\nAduk hingga ayam terlapisi saus secara merata.\r\nSajikan ayam di atas nasi bersama telur.\r\nTambahkan wijen dan daun bawang sebagai topping \r\ndan makanan siap disajikan', 'https://i.pinimg.com/736x/6a/3d/c4/6a3dc4c03b2c0f5f7760471434390a84.jpg', '2026-08-13 02:52:10', '2026-08-17 22:45:50'),
(10, 4, 'Spicy Tuna Onigiri', 'spicy-tuna-onigiri', '2 porsi nasi hangat\r\n1 kaleng tuna\r\n2 sdm mayones\r\n1 sdm saus sambal\r\n1 lembar nori\r\n1 sdt kecap asin\r\nWijen secukupnya', 'Campurkan tuna, mayones, saus sambal, dan kecap asin.\r\nAmbil nasi secukupnya.\r\nBeri isian tuna di bagian tengah.\r\nBentuk nasi menjadi segitiga.\r\nBungkus bagian bawah dengan nori.\r\nTaburkan wijen.\r\nSajikan.', 'https://i.pinimg.com/736x/cd/44/40/cd444072bd6307140fcbbca17f336f01.jpg', '2026-08-17 22:43:10', '2026-08-17 22:43:10'),
(11, 4, 'Ayam Popcorn BBQ', 'ayam-popcorn-bbq', '250 gram dada ayam\r\n100 gram tepung bumbu\r\n1 butir telur\r\n3 sdm saus BBQ\r\n1 sdm madu\r\n1 sdm saus sambal\r\n1 siung bawang putih\r\nWijen secukupnya', 'Potong ayam menjadi ukuran kecil.\r\nCelupkan ayam ke telur.\r\nBalurkan dengan tepung bumbu.\r\nGoreng sampai crispy.\r\nTumis bawang putih sampai harum.\r\nMasukkan saus BBQ, madu, dan saus sambal.\r\nMasak sampai saus mengental.\r\nMasukkan ayam popcorn.\r\nAduk sampai semua bagian terlapisi saus.\r\nTaburkan wijen.', 'https://i.pinimg.com/736x/f2/67/be/f267be8d7d3a02f04eb4c64dd51b27aa.jpg', '2026-08-17 22:44:56', '2026-08-17 22:44:56');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('cW2yIZ71DqldZFLN0PqW3gwCW1J5vwJEMdw6GEfW', NULL, '127.0.0.1', 'Thunder Client (https://www.thunderclient.com)', 'eyJfdG9rZW4iOiJJaThDaHdkNWxRYjVNeWE1aVAzV0psN0dwM0puRFVNVFNJNkFqYmNOIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwXC9sb2dpbiIsInJvdXRlIjoibG9naW4ifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1787210259),
('n0uK9vpO4ew334vBaCCaNjm0T7FY3S8vV1E58IAG', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/151.0.0.0 Safari/537.36 Edg/151.0.0.0', 'eyJfdG9rZW4iOiJkWTF0cDRtWExCd2g3U25lTWJDOUo2ckdsZG9tSVlobGVtSzNHWndQIiwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119LCJfcHJldmlvdXMiOnsidXJsIjoiaHR0cDpcL1wvMTI3LjAuMC4xOjgwMDBcL3VzZXJcL2Rhc2hib2FyZCIsInJvdXRlIjoidXNlci5kYXNoYm9hcmQifSwibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiOjR9', 1787217203);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Novani Alefniar', 'novanialefniar12@gmail.com', 'admin', NULL, '$2y$12$ZJxP9hmg9EY2rMh4Pj6LqetBs9Br6/gBofvnLrDtcdszAxSs/r2wy', NULL, '2026-08-13 00:37:26', '2026-08-13 00:37:26'),
(2, 'User', 'user@gmail.com', 'user', NULL, '$2y$12$EdLGn8HEGdyQmaqIAEn.DeVGOk0/EwqNYpstyVg10qmSnHN5HSyVe', NULL, '2026-08-13 00:37:27', '2026-08-13 00:37:27'),
(3, 'novani', 'vani@gmail.com', 'user', NULL, '$2y$12$.Eq/BYvksbb6Z/FEVuzM5es99ptUvI65YLGSerwTEsDjdr/kjTFU.', NULL, '2026-08-13 01:53:31', '2026-08-13 01:53:31'),
(4, 'bunga', 'bunga@gmail.com', 'user', NULL, '$2y$12$ZQzdTXy5Hf/V.8jAnWZ4xuJCpFVzsWUFqFxJhXQxL8fo/W9p/dgjK', NULL, '2026-08-13 01:54:09', '2026-08-13 01:54:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`),
  ADD KEY `failed_jobs_connection_queue_failed_at_index` (`connection`,`queue`,`failed_at`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`),
  ADD KEY `personal_access_tokens_expires_at_index` (`expires_at`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `recipes_slug_unique` (`slug`),
  ADD KEY `recipes_user_id_foreign` (`user_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `recipes`
--
ALTER TABLE `recipes`
  ADD CONSTRAINT `recipes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
