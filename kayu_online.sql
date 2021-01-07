-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 07, 2021 at 03:12 AM
-- Server version: 5.6.39-83.1
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kayuoine_id`
--

-- --------------------------------------------------------

--
-- Table structure for table `fb_users`
--

CREATE TABLE `fb_users` (
  `id` int(11) NOT NULL,
  `oauth_provider` enum('facebook','google','twitter','') COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `oauth_uid` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fb_users`
--

INSERT INTO `fb_users` (`id`, `oauth_provider`, `oauth_uid`, `first_name`, `last_name`, `email`, `gender`, `picture`, `link`, `created`, `modified`) VALUES
(1, 'facebook', '10220097663966858', 'Andi', 'Lukman', 'superpsychoband@yahoo.com', NULL, 'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=10220097663966858&width=300&ext=1607526863&hash=AeQ0uusUnYsp_DcSyow', NULL, '2020-11-09 10:14:23', '2020-11-09 10:14:23'),
(2, 'google', '100516732423405215841', 'Soni Ayi Purnama', 'Soni Ayi Purnama', 'soni.mkom@gmail.com', NULL, 'https://lh3.googleusercontent.com/a-/AOh14GiNjLPNXfOLUEiWyGGLT-bbXi7gQnPHfglCo2Fj=s96-c', NULL, '2020-11-10 08:55:27', '2020-11-10 08:55:27'),
(3, 'facebook', '100712615182564', 'Jayden', 'Ricesky', 'xfltwecvmj_1603961478@tfb', 'male', 'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=100712615182564&width=300&ext=1606614756&hash=AeTbtPqcdkLiY3E0_GI', NULL, '2020-10-30 01:52:36', '2020-10-30 01:52:36'),
(4, 'google', '111692835073024361290', 'Andi Digital', 'Andi Digital', 'andigital@qmail.id', NULL, 'https://lh6.googleusercontent.com/-9hbgOuaum08/AAAAAAAAAAI/AAAAAAAAAAA/AMZuuclOaNn2SM9o8YZLlA294o73AovYvw/s96-c/photo.jpg', NULL, '2020-10-31 09:09:44', '2020-10-31 09:09:44'),
(5, 'facebook', '349702236322807', 'MI', 'Unpi', 'informatika.unpi@gmail.co', NULL, 'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=349702236322807&width=300&ext=1606876529&hash=AeQQFOmMEsujkb88mjo', NULL, '2020-11-02 09:35:29', '2020-11-02 09:35:29'),
(6, 'facebook', '105062754744457', 'Hirakarya', 'Abadi', 'kayuonline2020@gmail.com', NULL, 'https://scontent-iad3-1.xx.fbcdn.net/v/t1.30497-1/p200x200/84628273_176159830277856_972693363922829312_n.jpg?_nc_cat=1&ccb=2&_nc_sid=12b3be&_nc_ohc=HuadhmtccTIAX-tH7bh&_nc_ht=scontent-iad3-1.xx&tp=6&o', NULL, '2020-11-10 10:17:19', '2020-11-10 10:17:19'),
(8, 'facebook', '3318654994856714', 'Armansyah', 'Hakim', 'kirigakure_hime@yahoo.com', NULL, 'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=3318654994856714&width=300&ext=1607678373&hash=AeQFuoLTj71eaZ2g-Wo', NULL, '2020-11-11 04:19:33', '2020-11-11 04:19:33'),
(9, 'google', '107171355917691006199', 'Armansyah Hakim', 'Armansyah Hakim', 'armansyahhakim263@gmail.c', NULL, 'https://lh3.googleusercontent.com/a-/AOh14Gjm1769hLV6jjMTwyiZyMYY9U87azWubuz-B-uasQ=s96-c', NULL, '2020-11-18 03:14:32', '2020-11-18 03:14:32'),
(11, 'google', '108293010694596594930', 'Dedy Kurnia', 'Dedy Kurnia', 'dedykurnia@gmail.com', NULL, 'https://lh3.googleusercontent.com/a-/AOh14GiFKX2vg3Itl4xrhycqxxJxMr_UwVXEzwf3jpKlCA=s96-c', NULL, '2020-12-15 07:59:58', '2020-12-15 07:59:58');

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE `notifikasi` (
  `id` bigint(20) NOT NULL,
  `admin_reg` int(11) DEFAULT NULL,
  `stok_barang` int(11) DEFAULT NULL,
  `bukti_transfer` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifikasi`
--

INSERT INTO `notifikasi` (`id`, `admin_reg`, `stok_barang`, `bukti_transfer`) VALUES
(1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) NOT NULL,
  `id_pemesan` text,
  `sku_product` char(20) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `nama_product` varchar(255) DEFAULT NULL,
  `ukuran` char(100) DEFAULT NULL,
  `gambar_product` char(100) DEFAULT NULL,
  `id_product` bigint(50) DEFAULT NULL,
  `jumlah` int(20) DEFAULT NULL,
  `harga` decimal(10,0) DEFAULT NULL,
  `total` decimal(10,0) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `product_size_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `id_pemesan`, `sku_product`, `tanggal`, `nama_product`, `ukuran`, `gambar_product`, `id_product`, `jumlah`, `harga`, `total`, `status`, `product_size_id`) VALUES
(107, '103', 'KO JT01', '2020-12-15 11:03:01', 'Jati', ' 1 meter', 'assets/img/default.png', 3, 1, 120000, 120000, 'done', 5);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_code`, `name`, `description`, `detail`, `created_at`, `updated_at`) VALUES
(1, 1, 'DK MB01', 'Merbau', 'Merbau terutama dimanfaatkan kayunya, yang biasa digunakan dalam konstruksi berat seperti balok-balok, tiang dan bantalan, di bangunan rumah maupun jembatan.Oleh karena kekuatan, keawetan dan penampilannya yang menarik, sekarang kayu merbau juga dimanfaats', 'ini Detail Merbau Decking testing saja', '2020-09-02 13:49:41', '2020-09-02 13:49:45'),
(2, 2, 'KO MB01', 'Merbau ', 'Merbau terutama dimanfaatkan kayunya, yang biasa digunakan dalam konstruksi berat seperti balok-balok, tiang dan bantalan, di bangunan rumah maupun jembatan.Oleh karena kekuatan, keawetan dan penampilannya yang menarik, sekarang kayu merbau juga dimanfaat', 'Ini adalah detail merbau kayu olahan saja', '2020-09-02 13:49:41', '2020-09-02 14:05:39'),
(3, 2, 'KO JT01', 'Jati', 'Ini merupakan Deskripsi dari kayu olahan jenis jati', 'Detail kayu olahan Jenis Jati', NULL, NULL),
(4, 2, 'KO EKS-MG', 'Eksotik-MG', 'ini merupakan deskripsi dari kayu olahan jenis eksotik-mg', 'ini merupakan detail kayu olahan jenis eksotik-mg', NULL, NULL),
(5, 2, 'KO EKS-BR', 'Eksotik-BR', 'Ini Kayu Eksotik BR', 'Ini Merupakan Kayu Olahan Jenis Eksotik-BR', NULL, NULL),
(11, 2, 'KO EKS-GSL', 'Eksotik-GSL', 'Ini Merupakan Deskripsi Kayu GSL', 'Ini Merupakan Detail Kayu Olahan ', NULL, NULL),
(14, 2, 'KO NYT01', 'Nyatoh', 'Ini Merupakan Deskripsi Kayu Nyatoh testing', 'Ini Merupakan Detail Kayu Olahan tes tes', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_categories` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `category_code`, `category_name`, `description_categories`, `created_at`, `updated_at`) VALUES
(1, 'DK', 'Deking', 'this is Deking', NULL, NULL),
(2, 'KO', 'Kayu Olahan', 'this is kayu olahan', NULL, NULL),
(3, 'PT', 'Pintu', 'this is pintu', NULL, NULL),
(4, 'TG', 'Tangga', 'this is tangga', NULL, NULL),
(5, 'KS', 'Kusen', 'this is kusen', NULL, NULL),
(6, 'LP', 'Lis Profil', 'this is LP', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_has_sizes`
--

CREATE TABLE `product_has_sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_size_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sold` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_has_sizes`
--

INSERT INTO `product_has_sizes` (`id`, `product_id`, `product_size_id`, `price`, `stock`, `created_at`, `updated_at`, `sold`) VALUES
(1, 1, 1, 10000, 100, NULL, NULL, 1),
(2, 1, 2, 20000, 100, NULL, NULL, 2),
(4, 2, 1, 85000, 100, NULL, NULL, 0),
(5, 3, 1, 120000, 100, NULL, NULL, 3),
(6, 3, 5, 150000, 99, NULL, NULL, 2),
(7, 2, 1, 100000, 100, NULL, NULL, 2),
(9, 4, 1, 20000, 100, NULL, NULL, NULL),
(10, 5, 6, 123000, 100, NULL, NULL, NULL),
(13, 2, 9, 20000, 100, NULL, NULL, NULL),
(16, 11, 2, 8000000, 100, NULL, NULL, NULL),
(19, 14, 1, 20000, 100, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `first`, `created_at`, `updated_at`) VALUES
(1, 1, 'assets/img/product/merbau-decking.png', 1, NULL, NULL),
(3, 3, 'assets/img/default.png', 1, NULL, NULL),
(4, 2, 'assets/img/product/merbau.png', 1, NULL, NULL),
(6, 4, 'assets/img/product/eksotik mg 1.png', 0, NULL, NULL),
(7, 5, 'assets/img/product/eksotik br 1.png', 0, NULL, NULL),
(12, 11, 'assets/img/product/Eksotik-GSL.jpeg', 0, NULL, NULL),
(15, 14, 'assets/img/product/nyatoh.png', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_sizes`
--

CREATE TABLE `product_sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_size` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_sizes`
--

INSERT INTO `product_sizes` (`id`, `size`, `description_size`, `created_at`, `updated_at`) VALUES
(1, '1 meter', '1 m', NULL, NULL),
(2, '2 meter', '2 m', NULL, NULL),
(3, '90x15x20', '90x15x20', NULL, NULL),
(4, '78x20x30', '78x20x30', NULL, NULL),
(5, '3 meter', '3 meter kubik', NULL, NULL),
(6, '4 meter', '', NULL, NULL),
(9, '20 meter', '', NULL, NULL),
(10, '34 meter', '', NULL, NULL),
(12, '5 meter', '', NULL, NULL),
(13, '12x12x12', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_thumbnail`
--

CREATE TABLE `product_thumbnail` (
  `id` bigint(20) NOT NULL,
  `product_id` char(50) DEFAULT NULL,
  `kode_product` char(50) DEFAULT NULL,
  `kode_kayu` char(50) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_thumbnail`
--

INSERT INTO `product_thumbnail` (`id`, `product_id`, `kode_product`, `kode_kayu`, `thumbnail`, `name`) VALUES
(1, '5', 'KO', 'KO EKS-BR', NULL, NULL),
(2, '2', 'KO', 'KO EKS-MG', 'assets/img/product/eksotik mg 2.png', 'Eksotik-MG'),
(3, '2', 'KO', 'KO EKS-MG', 'assets/img/product/eksotik mg 3.png', 'Eksotik-MG'),
(4, '2', 'KO', 'KO EKS-MG', 'assets/img/product/eksotik mg 4.png', 'Eksotik-MG'),
(5, '1', 'DK', 'DK MB01', 'assets/img/product/merbau-decking 2.png', 'Merbau'),
(6, '1', 'DK', 'DK MB01', 'assets/img/product/merbau-decking 3.png', 'Merbau'),
(7, '5', 'KO', 'KO EKS-BR', 'assets/img/product/eksotik br 3.png', 'Eksotik-BR');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id` bigint(20) NOT NULL,
  `id_pemesan` text,
  `nama_pemesan` varchar(255) DEFAULT NULL,
  `alamat_pemesan` varchar(255) DEFAULT NULL,
  `kode_pos` char(50) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `kontak` char(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `note` text,
  `bukti_transaksi` char(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `bank` varchar(100) DEFAULT NULL,
  `verifikasi` text,
  `tanggal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id`, `id_pemesan`, `nama_pemesan`, `alamat_pemesan`, `kode_pos`, `kota`, `kontak`, `email`, `note`, `bukti_transaksi`, `status`, `bank`, `verifikasi`, `tanggal`) VALUES
(186, '103', 'ziafadhilah', 'coba', '1', 'coba', '081212151324', 'ziafadhilah98@gmail.com', ' ', 'assets/img/bukti_tf/DSC02171.JPG', 'done', 'Mandiri', NULL, '2020-12-15 11:03:32'),
(277, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'proses_3', NULL, NULL, NULL),
(278, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'proses_3', NULL, NULL, NULL),
(279, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'proses_3', NULL, NULL, NULL),
(280, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'proses_3', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `no_hp` char(50) DEFAULT NULL,
  `role` varbinary(255) DEFAULT NULL,
  `status` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `username`, `password`, `no_hp`, `role`, `status`) VALUES
(31, 'Admin', 'kayuonline.id@gmail.com', 'leaq6vp2yph3', 'c2tnWjg0UUZxakROamNyVjRZMDdpdz09', '081241632727', 0x61646d696e, 'active'),
(113, 'Andi Lukman ', 'andilukmanx@gmail.com', 'andipsycho', 'WXM4SzdtcTRFSXI4Z3JlaW1mcW9DZz09', '07272682', 0x75736572, NULL),
(155, NULL, NULL, NULL, 'V3dVaGhmdFUrREY0ajBRK3pNbFNNdz09', NULL, 0x75736572, NULL),
(156, NULL, NULL, NULL, 'V3dVaGhmdFUrREY0ajBRK3pNbFNNdz09', NULL, 0x75736572, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` bigint(20) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `date_created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(63, 'soni.mkom@gmail.com', '6x6lxdU3szrqpKh5HB74cgNivKRcOO8RpwUoxCn6DTQ=', '2020-12-19'),
(64, 'soni.mkom@gmail.com', 'CR7DMn8S+77UkZ1MCb+K0bBOgyDisLp+QRaGhbBYhuw=', '2020-12-19'),
(65, 'soni.mkom@gmail.com', 'kBH2Ex8eHa4gV4Wz3HKHY+TXIfk1+v6B+ZRqAzQJa8g=', '2020-12-19'),
(66, 'soni.mkom@gmail.com', '09pMepmkjmRgQ31xuVDnfNBFj7ZrBE2PlMxgS4pekGU=', '2020-12-19'),
(67, 'soni.mkom@gmail.com', 'wIbGnzbaWF9KYOkOoJd9h6Rn6g3u6sbmY5qzJWswsyU=', '2020-12-19'),
(68, 'andilukmanx@gmail.com', 'zPl3hrXDV8O8N06MTOb1lLFbY0tast9Wig3fuYvUZRE=', '2020-12-19'),
(75, 'andilukmanx@gmail.com', 'wHJ/b+1pgQUF4K9EQP8QhpV4KOtrgIX7f0Fj3KOk5Ho=', '2020-12-21'),
(76, 'andilukmanx@gmail.com', 'lrhj5qmZTw5+ViZnclwuOyZsFGNcKRwJB+SC601RBiI=', '2020-12-22'),
(77, 'soni.mkom@gmail.com', 'WeBiDazSVSI+PVfJEHnxqAGCrRSRGfz74IBNy2m4bEI=', '2020-12-22'),
(78, 'soni.mkom@gmail.com', 'f9gD0iy+0mKaxoPD/zw6xDJlyBy6WwW/zHMc7MRRubY=', '2020-12-22'),
(79, 'soni.mkom@gmail.com', '9jdKOnEHrI8+GKd8QIvha+zpDJxiElnrSsLoV0SpVPM=', '2020-12-22'),
(80, 'soni.mkom@gmail.com', 'rerndZW3Xke4gAR+avo6ml5Y8C2nijqvA/5C5cvEoCQ=', '2020-12-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fb_users`
--
ALTER TABLE `fb_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_has_sizes`
--
ALTER TABLE `product_has_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_thumbnail`
--
ALTER TABLE `product_thumbnail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fb_users`
--
ALTER TABLE `fb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_has_sizes`
--
ALTER TABLE `product_has_sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `product_sizes`
--
ALTER TABLE `product_sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product_thumbnail`
--
ALTER TABLE `product_thumbnail`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=281;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
