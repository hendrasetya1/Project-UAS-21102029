-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2023 at 12:21 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mylaraveltwo`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbkomponens`
--

CREATE TABLE `tbkomponens` (
  `ID` int(10) UNSIGNED NOT NULL,
  `komponens` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis` enum('Komponen','Board','Project') COLLATE utf8mb4_unicode_ci NOT NULL,
  `fungsi` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'noPicture.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbkomponens`
--

INSERT INTO `tbkomponens` (`ID`, `komponens`, `jenis`, `fungsi`, `flname`, `created_at`, `updated_at`) VALUES
(17, 'Sensor Analog Hall', 'Komponen', 'Hall effect sensor atau sensor efek hall adalah komponen jenis transducer yang bisa mengubah informasi magnetik menjadi sinyal listrik untuk pemrosesan rangkaian elektronik selanjutnya. Hall effect sensor ini sering digunakan sebagai sensor untuk mendeteksi kedekatan (proximity), posisi (positioning), kecepatan (speed), pergerakan arah (directional) dan arus listrik (current sensing). Efek hall ini ditemukan oleh Dr. Edwin Hall pada tahun 1879. Untuk dapat menghasilkan perbedaan potensial diseluruh perangkat, garis fluks magnetik harus tegak lurus (90 derajat) terhadap aliran listrik dengan kutub yang benar. Nama ini diambil dari nama penemu efek ini yaitu Dr. Edwin Hall. Dasar dari prinsip kerja efek hall ini adalah gaya Lorentz yakni gaya yang ditimbulkan oleh muatan listrik yang bergerak dalam suatu medan magnet (B). Sensor ini bekerja ketika didekatkan dengan medan magnet atau ditempatkan pada lokasi yang bermedan magnet, garis fluks magnetik akan menggunakan gaya pada semikonduktor tersebut untuk mengalihkan muatan ke kedua sisi pelat semikonduktor.', 'magnetsensor.jpg', '2023-01-22 00:23:17', '2023-01-22 00:23:17'),
(18, 'LED 2 Color', 'Komponen', 'LED merupakan kependekan dari Light Emitting Diode, yakni salah satu dari banyak jenis perangkat semikonduktor yang mengeluarkan cahaya ketika arus listrik melewatinya. LED 2 color sama halnya dengan LED pada umumnya, hanya saja LED 2 color memiliki 2 warna pada satu LED nya.', 'led.jpg', '2023-01-22 00:25:01', '2023-01-22 00:25:01'),
(19, 'LCD 16x2 dengan I2c module', 'Komponen', 'LCD (Liquid Crystal Display) 16x2 adalah salah satu media penampil yang sangat populer digunakan sebagai interface antara mikrokontroler dengan user nya. Dengan penampil LCD 16x2 ini user dapat melihat/memantau keadaan sensor ataupun keadaan jalanya program. Inter Integrated Circuit atau sering disebut I2C adalah standar komunikasi serial dua arah menggunakan dua saluran yang didisain khusus untuk mengirim maupun menerima data. Sistem I2C terdiri dari saluran SCL (Serial Clock) dan SDA (Serial Data) yang membawa informasi data antara I2C dengan pengontrolnya. Jika tidak memakai I2C Juga bisa untuk menampilkan text pada LCD akan tetapi harus merangkai semua pin yang berada pada LCD ke Arduino. Jadi disarankan lebih baik menggunakan I2C saja.', 'lcd.jpg', '2023-01-22 00:25:44', '2023-01-22 00:25:44'),
(20, 'Breadboard', 'Komponen', 'Breadboard adalah sejenis papan yang biasanya digunakan untuk membuat prototype rangkaian elektronik. Beberapa orang kadang menyebutnya project board atau bahkan protoboard (prototype board). Pada dasarnya breadboard adalah board yang digunakan untuk membuat rangkaian elektronik tanpa harus merepotkan pengguna untuk menyolder. Biasanya papan breadboard ini digunakan untuk membuat rangkaian elektronik sementara untuk tujuan uji coba atau prototype.', 'bb.jpg', '2023-01-22 00:30:19', '2023-01-22 00:30:56'),
(21, 'Kabel Jumper', 'Komponen', 'Kabel jumper adalah kabel elektrik yang memiliki pin konektor di setiap ujungnya dan memungkinkanmu untuk menghubungkan dua komponen yang melibatkan Arduino tanpa memerlukan solder. Kabel Jumper memiliki beberapa jenis, diantaranya male to male, male to female, dan female to female. Pada projek ini hanya menggunakan 2 jenis kabel jumper, yaitu male to male dan male to female.', 'kabel.jpg', '2023-01-22 00:30:44', '2023-01-22 00:30:44'),
(22, 'Arduino', 'Board', 'Arduino merupakan sebuah perangkat elektronik yang bersifat open source dan sering digunakan untuk merancang dan membuat perangkat elektronik serta software yang mudah untuk digunakan. Arduino ini dirancang sedemikian rupa untuk mempermudah penggunaan perangkat elektronik di berbagai bidang. Arduino ini memiliki beberapa komponen penting di dalamnya, seperti pin, mikrokontroler, dan konektor yang nanti akan dibahas lebih dalam selanjutnya. Selain itu, Arduino juga sudah menggunakan bahasa pemrograman Arduino Language yang sedikit mirip dengan bahasa pemrograman C++. Pada projek ini, arduino digunakan sebagai mikrokontoller dari alat pendeteksi polaritas magnet.', 'ardu.jpg', '2023-01-22 00:50:36', '2023-01-22 00:50:36'),
(23, 'Alat Pendeteksi Polaritas Magnet', 'Project', '<p>Magnet merupakan salah satu jenis logam yang mampu menarik benda tertentu. Magnet diambil dari bahasa yunani yang berarti batu magnesian. Pada kesempatan kali ini akan membuat sebuah alat untuk mendeteksi polaritas dari sebuah magnet. Pada dasarnya, magnet memiliki kutub-kutub atau polaritas yaitu kutub utara dan kutub selatan. Namun tidak semua magnet dapat diketahui polaritasnya. Ada beberapa cara sederhana untuk mengetahui kutub magnet, akan tetapi tidak bisa diterapkan pada semua magnet. Alat yang dibuat saya berikan nama yaitu ALAT PENDETEKSI POLARITAS MAGNET MENGGUNAKAN ANALOG HALL SENSOR. Untuk mengetahui polaritas dari sebuah magnet, tentu diperlukan sebuah sensor untuk mendeteksinya. Salah satu sensor tersebut adalah KY035 analog hall sensor. Sensor jenis ini dapat mengetahui jenis dari polaritas magnet. Selain itu, diperlukan LED sebagai indikator polaritas magnet. LED yang saya gunakan adalah LED 2 color karena outputan dari sensor analog hall akan mengluarkan 2 hasil yaitu kutub utara dan selatan. LED akan menyala kuning jika terdeteksi kutub utara dan menyala merah pada kutub sebaliknya. Alat ini bekerja ketika magnet didekatkan dengan sensor. Pada gambar tersebut, letak sensor ada pada titik hitam tengah. Ketika magnet didekatkan atau ditempatkan pada titik tersebut, sensor akan mendeteksi kutub magnet dan akan menampilkan jenis kutubnya ke LCD juga. Jadi Selain LED 2 color,terdapat juga LCD untuk menampilkan hasil.</p>', 'myprojek1.jpg', '2023-01-22 01:09:29', '2023-01-22 02:20:51');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tbkomponens`
--
ALTER TABLE `tbkomponens`
  ADD PRIMARY KEY (`ID`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbkomponens`
--
ALTER TABLE `tbkomponens`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
