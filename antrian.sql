-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2019 at 02:56 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `antrian`
--

-- --------------------------------------------------------

--
-- Table structure for table `antres`
--

CREATE TABLE `antres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iduser` int(11) NOT NULL,
  `idantre` int(11) NOT NULL,
  `noantre` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `merchants`
--

CREATE TABLE `merchants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `iduser` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `merchants`
--

INSERT INTO `merchants` (`id`, `nama`, `alamat`, `deskripsi`, `gambar`, `iduser`, `created_at`, `updated_at`) VALUES
(1, 'Menjadi dan Memberi', ';ogs;sg;tr gt;rg;kgmtr;g r;gtrgljgrlg trjlgkljfhsfkjerf erfjjdksfnrlkgntgnrigunergklerf r fegjegnerkgnerlkgnerkg rekgj ejfnerjvndfkjv fdsjksngnrgner. grewkjegjelrj', 'fegjegnerkgnerlkgnerkg rekgj ejfnerjvndfkjv fdsjksngnrgner. grewkjegjelrj', '1906465259.jpg', 3, '2019-10-16 20:36:44', '2019-10-16 20:36:44'),
(2, 'Menjadi dan Memberi', ';ogs;sg;tr gt;rg;kgmtr;g r;gtrgljgrlg trjlgkljfhsfkjerf erfjjdksfnrlkgntgnrigunergklerf r fegjegnerkgnerlkgnerkg rekgj ejfnerjvndfkjv fdsjksngnrgner. grewkjegjelrj', 'fegjegnerkgnerlkgnerkg rekgj ejfnerjvndfkjv fdsjksngnrgner. grewkjegjelrj', 'abc.jpg', 3, '2019-10-16 20:36:56', '2019-10-16 20:36:56'),
(3, 'Menjadi dan Memberi', ';ogs;sg;tr gt;rg;kgmtr;g r;gtrgljgrlg trjlgkljfhsfkjerf erfjjdksfnrlkgntgnrigunergklerf r fegjegnerkgnerlkgnerkg rekgj ejfnerjvndfkjv fdsjksngnrgner. grewkjegjelrj', 'fegjegnerkgnerlkgnerkg rekgj ejfnerjvndfkjv fdsjksngnrgner. grewkjegjelrj', 'abc.jpg', 3, '2019-10-16 20:45:15', '2019-10-16 20:45:15'),
(4, 'Menjadi dan Memberi', ';ogs;sg;tr gt;rg;kgmtr;g r;gtrgljgrlg trjlgkljfhsfkjerf erfjjdksfnrlkgntgnrigunergklerf r fegjegnerkgnerlkgnerkg rekgj ejfnerjvndfkjv fdsjksngnrgner. grewkjegjelrj', 'fegjegnerkgnerlkgnerkg rekgj ejfnerjvndfkjv fdsjksngnrgner. grewkjegjelrj', 'abc.jpg', 3, '2019-10-16 20:49:40', '2019-10-16 20:49:40'),
(5, 'Menjadi dan Memberi', ';ogs;sg;tr gt;rg;kgmtr;g r;gtrgljgrlg trjlgkljfhsfkjerf erfjjdksfnrlkgntgnrigunergklerf r fegjegnerkgnerlkgnerkg rekgj ejfnerjvndfkjv fdsjksngnrgner. grewkjegjelrj', 'fegjegnerkgnerlkgnerkg rekgj ejfnerjvndfkjv fdsjksngnrgner. grewkjegjelrj', 'abc.jpg', 3, '2019-10-16 20:49:57', '2019-10-16 20:49:57'),
(6, 'Menjadi dan Memberi', ';ogs;sg;tr gt;rg;kgmtr;g r;gtrgljgrlg trjlgkljfhsfkjerf erfjjdksfnrlkgntgnrigunergklerf r fegjegnerkgnerlkgnerkg rekgj ejfnerjvndfkjv fdsjksngnrgner. grewkjegjelrj', 'fegjegnerkgnerlkgnerkg rekgj ejfnerjvndfkjv fdsjksngnrgner. grewkjegjelrj', 'abc.jpg', 3, '2019-10-16 20:50:23', '2019-10-16 20:50:23'),
(7, 'I GUSTI AGUNG DUTA MARUTI RAJENDRA', 'hgfgjhg ghjfghjgf ghfgfffhdhfd', 'jyttfjtyftjy hgjfjgfjjtdjgfj mhfgjhgftrrewgrddfxfg jtfkfugliuyuilyihj hkgvjhfgnhfggjfghgfj mhkhghjgfjfg', 'abc.jpg', 3, '2019-10-16 20:51:39', '2019-10-16 20:51:39'),
(8, 'I GUSTI AGUNG DUTA MARUTI RAJENDRA', 'hjhkgkhgkj jkhgkhjhghkj kjhgkhjghkjgkghj', 'jkhhgkhgkhg hkggghfgjhgfjgh', '1847959228.jpg', 6, '2019-10-16 20:55:52', '2019-10-16 20:55:52');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(21, '2019_10_06_140553_create_merchants_table', 2),
(22, '2019_10_06_143049_create_submerchants_table', 2),
(23, '2019_10_06_144206_create_antres_table', 2),
(24, '2019_10_16_233211_create_roles_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iduser` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `iduser`, `role`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 3, 2, '2019-10-16 20:49:40', '2019-10-16 20:49:40'),
(3, 3, 2, '2019-10-16 20:49:57', '2019-10-16 20:49:57'),
(4, 3, 2, '2019-10-16 20:50:23', '2019-10-16 20:50:23'),
(5, 3, 2, '2019-10-16 20:51:39', '2019-10-16 20:51:39'),
(6, 6, 2, '2019-10-16 20:55:52', '2019-10-16 20:55:52');

-- --------------------------------------------------------

--
-- Table structure for table `submerchants`
--

CREATE TABLE `submerchants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idmerchant` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@mail.com', NULL, '$2y$10$kMiyEp6CWm.fnOnMdEHA6OEl1N84G7QjJtmCqBfQTbGpg7AQ0Pn1O', NULL, '2019-10-16 15:43:27', '2019-10-16 15:43:27'),
(5, 'PigHero', 'wiryatama@gmail.com', NULL, '$2y$10$WHNomFmskPufhlk5y5IPPeOMBYxe717PvYnkAW3Tem.MkFGGNZWlq', NULL, '2019-10-16 20:51:39', '2019-10-16 20:51:39'),
(6, 'PigHer', 'wiryatam9@gmail.com', NULL, '$2y$10$ZktPNwX7mCRWPatn0DC80u7HQHgZ.2gbgUOgj4//AoyQo6UCAieMm', NULL, '2019-10-16 20:55:52', '2019-10-16 20:55:52'),
(7, 'submerchant', 'submerchant@mail.com', NULL, '$2y$10$/yjQ7gSClv5i0H3K7wvNF.O0eL0UUkvhZCCtFZafwqPFG81i9KpLi', NULL, '2019-10-17 05:44:36', '2019-10-17 05:44:36'),
(9, 'submerchant2', 'submerchant2@mail.com', NULL, '$2y$10$EHj10lyfDKm26toZCu4aWe2FTVJ9FGBJ8xIGvL1KfdnyExpqXbVJy', NULL, '2019-10-17 05:48:04', '2019-10-17 05:48:04'),
(10, 'submerchant3', 'submerchant3@mail.com', NULL, '$2y$10$o1C08i/6.dyInL.oBmxhMul4K8v.ZwD3uLqnR3twgwUPJsRF8X0re', NULL, '2019-10-17 05:56:25', '2019-10-17 05:56:25'),
(11, 'sekarwangibusana', 'sekarwangibusana@mail.com', NULL, '$2y$10$Sp2lSpQ3nkFGsAP3a9qhmew67OKlgD/TUIPAyAUfz2jaaELpe2b6y', NULL, '2019-10-17 05:58:12', '2019-10-17 05:58:12'),
(12, 'sekarwangibusana1', 'sekarwangibusana1@mail.com', NULL, '$2y$10$aLpn/Ka4dkpC6PLl3/P9PO/aM.pexBAaf4yq2Vi96Whz7rJ9m1K46', NULL, '2019-10-17 06:00:45', '2019-10-17 06:00:45'),
(13, 'abc', 'abc@mail.com', NULL, '$2y$10$e8P1zpRGzaU981sBB1LOBOc61.XjORsxN4obVq6ZwFZ0/n250EMR.', NULL, '2019-10-17 06:01:35', '2019-10-17 06:01:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antres`
--
ALTER TABLE `antres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchants`
--
ALTER TABLE `merchants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submerchants`
--
ALTER TABLE `submerchants`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `antres`
--
ALTER TABLE `antres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `merchants`
--
ALTER TABLE `merchants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `submerchants`
--
ALTER TABLE `submerchants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
