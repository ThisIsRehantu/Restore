-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 21 Jan 2025 pada 22.15
-- Versi server: 8.0.40-cll-lve
-- Versi PHP: 8.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `becraft_topup`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint UNSIGNED NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `beritas`
--

INSERT INTO `beritas` (`id`, `path`, `tipe`, `deskripsi`, `created_at`, `updated_at`) VALUES
(120, '/assets/banner/Banner.png', 'banner', 'banner', '2025-01-21 13:18:19', '2025-01-21 13:18:19'),
(121, '/assets/banner/Banner.png', 'banner', 'banner', '2025-01-21 13:18:25', '2025-01-21 13:18:25'),
(122, '/assets/banner/Banner.png', 'banner', 'ben', '2025-01-21 13:19:08', '2025-01-21 13:19:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_joki`
--

CREATE TABLE `data_joki` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` text NOT NULL,
  `email_joki` text NOT NULL,
  `password_joki` text NOT NULL,
  `loginvia_joki` text NOT NULL,
  `nickname_joki` text NOT NULL,
  `request_joki` text NOT NULL,
  `catatan_joki` text NOT NULL,
  `status_joki` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `deposits`
--

CREATE TABLE `deposits` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` bigint NOT NULL,
  `status` enum('Success','Pending') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gojeks`
--

CREATE TABLE `gojeks` (
  `id` bigint UNSIGNED NOT NULL,
  `auth_token` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `history__gojeks`
--

CREATE TABLE `history__gojeks` (
  `id` bigint UNSIGNED NOT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `history__ovos`
--

CREATE TABLE `history__ovos` (
  `id` bigint UNSIGNED NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `jumlah_transaksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe_transaksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_nama` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `server_id` tinyint(1) NOT NULL DEFAULT '0',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'game',
  `petunjuk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi_game` text COLLATE utf8mb4_unicode_ci,
  `deskripsi_field` text COLLATE utf8mb4_unicode_ci,
  `placeholder_id` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `placeholder_server` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama`, `sub_nama`, `kode`, `brand`, `server_id`, `status`, `thumbnail`, `banner`, `tipe`, `petunjuk`, `deskripsi_game`, `deskripsi_field`, `placeholder_id`, `placeholder_server`, `created_at`, `updated_at`) VALUES
(8507, 'Mobile Legend: Bang Bang', 'MOONTON', 'mobile-legends', 'MOBILE LEGENDS', 1, 'active', '/assets/thumbnail/ML-64f6 (1).jpeg', '/assets/banner_game/mlbb_miliyan.id.jpg', 'game', '/assets/petunjuk/16759351881649738625ML.jpg', 'Mobile Legends	Moonton	mlbb	mlbb	Moonton<br>TOP UP DIAMOND MOBILE LEGENDS<br>Proses cepat 3 detik setelah pembayaran<br>Open 24 hours<br><br>Cara order :<br>1. Masukkan ID + (server)<br>2. Pilih nominal diamond<br>3. Pilih metode pembayaran<br>4. Masukkan nomor Whatsapp dengan benar!<br>5. Klik beli sekarang dan lakukan pembayaran<br>6. Diamond akan masuk otomatis ke akun anda<br><br>UANG TRANSFER SESUAI TOTAL TAGIHAN !!!', 'Untuk mengetahui User ID Anda, silakan klik menu profile dibagian kiri atas pada menu utama game. User ID akan terlihat dibagian bawah Nama Karakter Game Anda. Silakan masukkan User ID Anda untuk menyelesaikan transaksi. Contoh : 12345678(1234).', 'Masukan UserID', 'ZoneID', '2023-03-22 08:39:08', '2023-03-30 17:39:51'),
(8509, 'Free Fire', 'GARENA', 'free-fire', 'FREE FIRE', 0, 'active', '/assets/thumbnail/FF-6958.jpeg', '/assets/banner_game/freefire_miliyan.id.jpg', 'game', NULL, 'Proses Otomatis', 'Untuk menemukan ID Anda, klik pada ikon karakter. User ID tercantum di bawah nama karakter Anda. Contoh: 5363287064.', 'Masukan UserID', '-', '2023-03-23 13:55:05', '2023-03-31 12:53:28'),
(8510, 'Genshin Impact', 'GENSHIN', 'genshin-impact', 'GENSHIN IMPACT', 1, 'active', '/assets/thumbnail/GenshinImpact-6c4f.jpeg', '/assets/banner_game/GENSHIN-miliyan.png', 'game', NULL, 'Proses Otomatis', 'Untuk menemukan UID Anda, masuk pakai akun Anda. Klik pada tombol profile di pojok kiri atas layar. Temukan UID dibawah avatar. Masukan UID Anda di sini. Selain itu, Anda juga dapat temukan UID Anda di pojok bawah kanan layar.', NULL, NULL, '2023-03-23 13:56:41', '2023-03-30 18:23:13'),
(8511, 'Pubg Mobile Indonesia', 'TENCENT', 'pubg-mobile-indonesia', 'PUBG MOBILE', 0, 'active', '/assets/thumbnail/PUBGindo-ab6f.jpeg', '/assets/banner_game/pubgmobile_miliyan.id.jpg', 'game', NULL, 'Proses Otomatis', 'Untuk menemukan ID Anda, klik pada ikon karakter. User ID tercantum di bawah nama karakter Anda. Contoh: 5330659921', NULL, NULL, '2023-03-23 13:59:49', '2023-03-30 17:41:36'),
(8512, 'Point Blank', 'ZEPETTO', 'point-blank', 'POINT BLANK', 0, 'active', '/assets/thumbnail/PB-c8c8.jpeg', '/assets/banner_game/PBID_Coda_Asset_Product_640X241.jpg', 'game', NULL, 'Proses Otomatis', 'Untuk menemukan Zepetto ID Anda, silakan kunjungi Halaman Beranda kami dan log-in, Kemudian Anda dapat lihat Zepetto ID Anda tercantum di pojok atas kanan layar atau menggunakan ID Log-in Anda.', NULL, NULL, '2023-03-23 14:01:23', '2023-03-30 17:57:45'),
(8513, 'Arena of Valor', 'AOV', 'arena-of-valor', 'Arena of Valor', 0, 'active', '/assets/thumbnail/AOV-6db2.jpeg', '/assets/banner_game/aov_miliyan.id.png', 'game', NULL, 'Proses Otomatis', 'Untuk menemukan User ID Anda, Ketuk ikon pengaturan, scroll ke bawah, temukan bagian \"Umum\", lalu Klik \"Player ID\". Contoh: \"888347346994333\".', NULL, NULL, '2023-03-23 14:02:44', '2023-03-30 18:24:28'),
(8514, 'Valorant', 'Riot Games', 'valorant', 'VALORANT', 0, 'active', '/assets/thumbnail/Valorant-c85f.jpeg', '/assets/banner_game/valorant.jpg', 'game', NULL, 'Proses Otomatis', 'Untuk menemukan Riot ID Anda, buka halaman profil akun dan salin Riot ID+Tag menggunakan tombol yang tersedia disamping Riot ID. (Contoh: Westbourne#SEA)', NULL, NULL, '2023-03-23 14:05:11', '2023-03-30 18:26:29'),
(8515, 'ONE PUCH MAN: The Strongers', 'OPM', 'one-puch-man', 'One Punch Man', 1, 'active', '/assets/thumbnail/OnePunchMan-f1fb.jpeg', '/assets/banner_game/onepuchman.jpg', 'game', NULL, 'Proses Otomatis', 'Cara memeriksa info pemain: Masuk ke game, klik \"Mall\" di area Kota Utama, lalu ketuk tombol \"Top up\". Di jendela \"Top up\" kamu dapat menemukan SID dan UID di sudut kiri bawah.', NULL, NULL, '2023-03-23 14:06:23', '2023-03-30 18:30:59'),
(8516, 'Ragnarok M', 'RAGNAROK', 'ragnarok-m', 'Ragnarok M: Eternal Love', 1, 'active', '/assets/thumbnail/ROXM-24b7.jpeg', '/assets/banner_game/ragnarok.jpg', 'game', NULL, 'Proses Otomatis', 'Untuk menemukan ID Anda, tap pada gambar karakter Anda. ID Anda akan terdaftar dibawah nama karakter Anda. Mohon masukan nomor ID Anda disini. Contoh: 4295037856', NULL, NULL, '2023-03-23 14:07:38', '2023-03-30 18:33:56'),
(8517, 'Lords Mobile', 'Games', 'lords-mobile', 'Lords Mobile', 0, 'active', '/assets/thumbnail/LordsMobile-4cc4.jpeg', '/assets/banner_game/lordmobile.jpeg', 'game', NULL, 'Proses Otomatis', 'Untuk menemukan ID Anda, tap pada gambar karakter Anda. ID Anda akan terdaftar dibawah nama karakter Anda. Mohon masukan nomor ID Anda disini. Contoh: 4295037856', NULL, NULL, '2023-03-23 14:08:40', '2023-03-30 18:34:31'),
(8518, 'Sausage Man', 'Games', 'sausage-man', 'Sausage Man', 0, 'active', '/assets/thumbnail/SausageMan-54d5.jpeg', '/assets/banner_game/sausage.jpg', 'game', NULL, 'Proses Otomatis', 'Untuk menemukan ID Anda, tap pada gambar karakter Anda. ID Anda akan terdaftar dibawah nama karakter Anda. Mohon masukan nomor ID Anda disini. Contoh: 4295037856', NULL, NULL, '2023-03-23 14:09:32', '2023-03-30 18:34:58'),
(8519, '8 Ball Pool', '8 BALL POOL', '8-ball-pool', '8 BALL POOL', 0, 'active', '/assets/thumbnail/8Ball-1edd.jpeg', '/assets/banner_game/8-Ball-Pool_ID.jpg', 'game', NULL, 'Proses Otomatis', 'Untuk menemukan ID Anda, tap pada gambar karakter Anda. ID Anda akan terdaftar dibawah nama karakter Anda. Mohon masukan nomor ID Anda disini. Contoh: 4295037856', NULL, NULL, '2023-03-23 14:10:46', '2023-03-30 18:35:37'),
(8520, 'MARVEL Super War', 'Games', 'marvel-super-war', 'MARVEL Super War', 0, 'active', '/assets/thumbnail/MarvelSuperWar-1d2a.jpeg', '/assets/banner_game/MSW_640x241.png', 'game', NULL, 'Proses Otomatis', 'Untuk menemukan ID Anda, tap pada gambar karakter Anda. ID Anda akan terdaftar dibawah nama karakter Anda. Mohon masukan nomor ID Anda disini. Contoh: 4295037856', NULL, NULL, '2023-03-23 14:11:56', '2023-03-30 18:36:07'),
(8521, 'Joki Rank Eceran', 'JASA JOKI', 'joki-rank-eceran', 'JASA JOKI', 0, 'active', '/assets/thumbnail/jokiml1.png', '/assets/banner_game/ML-BANER-bfa2.png', 'joki', NULL, 'Orderan Joki di cek admin jam 10:00-21:00 WIB<br><br>Jasa Joki Rank Mobile Legend Eceran Auto Win Streak<br><br>Lengkapi Data Joki dengan Teliti<br>Pilih Paket Joki<br>Pilih Metode Pembayaran<br>Tulis nomor WhatsApp yg benar!<br>Klik ORDER NOW & lakukan Pembayaran<br>Admin akan menginformasikan melalui Whatsapp saat jokian dikerjakan/selesai<br>Perhatikan<br>-Matikan centang verify/verikasi akun di pengaturan ML<br>-Jika akun dilogin 3x selama proses joki berlangsung maka dianggap selesai dan uang hangus<br><br><br>Estimasi Proses Jasa Joki Kita Usahakan Secepatnya (akan diinfokan oleh admin)<br><br>Minimal 12 Jam - Maksimal 2x24 Jam', '•HARAP INPUT DATA DENGAN BENAR<br>•CEK TERLEBIH DAHULU SEBELUM ORDER', NULL, NULL, '2023-02-26 07:38:00', '2023-04-01 18:04:50'),
(8522, 'Joki Rank Paketan', 'JASA JOKI', 'joki-rank-paketan', 'JASA JOKI', 0, 'active', '/assets/thumbnail/jokiml2.png', '/assets/banner_game/ML-BANER-bfa2.png', 'joki', NULL, 'Orderan Joki di cek admin jam 10:00-21:00 WIB<br><br>Jasa Joki Rank Mobile Legend Eceran Auto Win Streak<br><br>Lengkapi Data Joki dengan Teliti<br>Pilih Paket Joki<br>Pilih Metode Pembayaran<br>Tulis nomor WhatsApp yg benar!<br>Klik ORDER NOW & lakukan Pembayaran<br>Admin akan menginformasikan melalui Whatsapp saat jokian dikerjakan/selesai<br>Perhatikan<br>-Matikan centang verify/verikasi akun di pengaturan ML<br>-Jika akun dilogin 3x selama proses joki berlangsung maka dianggap selesai dan uang hangus<br><br><br>Estimasi Proses Jasa Joki Kita Usahakan Secepatnya (akan diinfokan oleh admin)<br><br>Minimal 12 Jam - Maksimal 2x24 Jam', '', NULL, NULL, '2023-02-26 07:42:50', '2023-04-01 18:05:25'),
(8523, 'Joki Classic', 'JASA JOKI', 'joki-classic', 'JASA JOKI', 0, 'active', '/assets/thumbnail/jokiml3.png', '/assets/banner_game/ML-BANER-bfa2.png', 'joki', NULL, 'Orderan Joki di cek admin jam 10:00-21:00 WIB<br><br>Jasa Joki Rank Mobile Legend Eceran Auto Win Streak<br><br>Lengkapi Data Joki dengan Teliti<br>Pilih Paket Joki<br>Pilih Metode Pembayaran<br>Tulis nomor WhatsApp yg benar!<br>Klik ORDER NOW & lakukan Pembayaran<br>Admin akan menginformasikan melalui Whatsapp saat jokian dikerjakan/selesai<br>Perhatikan<br>-Matikan centang verify/verikasi akun di pengaturan ML<br>-Jika akun dilogin 3x selama proses joki berlangsung maka dianggap selesai dan uang hangus<br><br><br>Estimasi Proses Jasa Joki Kita Usahakan Secepatnya (akan diinfokan oleh admin)<br><br>Minimal 12 Jam - Maksimal 2x24 Jam', '', NULL, NULL, '2023-02-26 07:44:05', '2023-04-01 18:02:44'),
(8524, 'Telkomsel', 'PULSA', 'telkomsel', 'PULSA', 0, 'unactive', '/assets/thumbnail/telkomsel.jpeg', '/assets/banner_game/20230316_141710_0000.png', 'game', NULL, 'Proses : Otomatis', 'Masukkan Nomor Hp dengan benar, kesalahan input Nomor bukan tanggung jawab kami.', NULL, NULL, '2023-02-26 07:45:43', '2023-03-30 17:02:02'),
(8525, 'Indosat', 'PULSA', 'indosat', 'PULSA', 0, 'unactive', '/assets/thumbnail/im3.jpeg', '/assets/banner_game/20230316_141710_0000.png', 'game', NULL, 'Proses : Otomatis', 'Masukkan Nomor Hp dengan benar, kesalahan input Nomor bukan tanggung jawab kami.', NULL, NULL, '2023-02-26 07:48:33', '2023-03-30 17:02:16'),
(8526, 'Smartfren', 'PULSA', 'smartfren', 'PULSA', 0, 'unactive', '/assets/thumbnail/smartfren.jpg', '/assets/banner_game/20230316_141710_0000.png', 'game', NULL, 'Proses : Otomatis', 'Masukkan Nomor Hp dengan benar, kesalahan input Nomor bukan tanggung jawab kami.', NULL, NULL, '2023-02-26 07:49:36', '2023-03-30 17:02:29'),
(8527, 'Dana', 'DANA', 'dana', 'DANA', 0, 'unactive', '/assets/thumbnail/dana.jpg', '/assets/banner_game/20230316_141710_0000.png', 'game', NULL, 'Proses : Otomatis', 'Masukkan Nomor Hp dengan benar, kesalahan input Nomor bukan tanggung jawab kami.', NULL, NULL, '2023-02-26 07:50:58', '2023-03-30 17:02:44'),
(8528, 'Ovo', 'OVO', 'ovo', 'OVO', 0, 'unactive', '/assets/thumbnail/ovo.jpg', '/assets/banner_game/20230316_141710_0000.png', 'game', NULL, 'Proses : Otomatis', 'Masukkan Nomor Hp dengan benar, kesalahan input Nomor bukan tanggung jawab kami.', NULL, NULL, '2023-02-26 07:52:00', '2023-03-30 17:02:54'),
(8529, 'Shopee Pay', 'shopeepay', 'shopeepay', 'shopeepay', 0, 'unactive', '/assets/thumbnail/shopeepay.jpg', '/assets/banner_game/png_20230305_075128_0000.png', 'game', NULL, 'Proses Otomatis', 'Masukkan Nomor Hp dengan benar, kesalahan input Nomor bukan tanggung jawab kami.', NULL, NULL, '2023-03-22 08:37:06', '2023-03-30 17:03:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanans`
--

CREATE TABLE `layanans` (
  `id` bigint UNSIGNED NOT NULL,
  `kategori_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `layanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` bigint NOT NULL,
  `harga_member` bigint NOT NULL,
  `harga_platinum` bigint NOT NULL,
  `harga_gold` bigint NOT NULL,
  `profit` int NOT NULL,
  `profit_member` int NOT NULL,
  `profit_platinum` int NOT NULL,
  `profit_gold` int NOT NULL,
  `catatan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `layanans`
--

INSERT INTO `layanans` (`id`, `kategori_id`, `layanan`, `provider_id`, `harga`, `harga_member`, `harga_platinum`, `harga_gold`, `profit`, `profit_member`, `profit_platinum`, `profit_gold`, `catatan`, `status`, `provider`, `product_logo`, `created_at`, `updated_at`) VALUES
(1866, '8496', 'MITIK - GLORI', 'jokiml', 10500, 10400, 10300, 10200, 5, 4, 3, 2, '', 'available', 'joki', NULL, '2023-03-23 20:05:46', '2023-03-23 20:05:46'),
(1867, '8509', 'Garena 33 Shell', 'G33', 8900, 8900, 8900, 8900, 0, 0, 0, 0, 'Tujuan = ID garena', 'available', 'digiflazz', NULL, '2023-03-24 20:25:06', '2023-03-24 20:25:06'),
(1868, '8509', 'Garena 165 Shell', 'G165', 44500, 44500, 44500, 44500, 0, 0, 0, 0, 'Tujuan = ID garena', 'available', 'digiflazz', NULL, '2023-03-24 20:25:06', '2023-03-24 20:25:06'),
(1869, '8509', 'Garena 66 Shell', 'G66', 17800, 17800, 17800, 17800, 0, 0, 0, 0, 'Tujuan = ID garena', 'available', 'digiflazz', NULL, '2023-03-24 20:25:06', '2023-03-24 20:25:06'),
(1870, '8509', 'Garena 330 Shell', 'G330', 92025, 92025, 92025, 92025, 0, 0, 0, 0, 'Tujuan = ID garena', 'available', 'digiflazz', NULL, '2023-03-24 20:25:06', '2023-03-24 20:25:06'),
(1871, '8527', 'DANA 10.000', 'D10', 10105, 10105, 10105, 10105, 0, 0, 0, 0, '-', 'available', 'digiflazz', NULL, '2023-03-24 20:25:06', '2023-03-24 20:25:06'),
(1872, '8527', 'DANA 50.000', 'D50', 49675, 49675, 49675, 49675, 0, 0, 0, 0, '-', 'available', 'digiflazz', NULL, '2023-03-24 20:25:06', '2023-03-24 20:25:06'),
(1873, '8527', 'DANA 100.000', 'D100', 100085, 100085, 100085, 100085, 0, 0, 0, 0, '-', 'available', 'digiflazz', NULL, '2023-03-24 20:25:06', '2023-03-24 20:25:06'),
(1874, '8527', 'DANA 25.000', 'D25', 24660, 24660, 24660, 24660, 0, 0, 0, 0, '-', 'available', 'digiflazz', NULL, '2023-03-24 20:25:06', '2023-03-24 20:25:06'),
(1875, '8528', 'OVO 10.000', 'o10', 9220, 9220, 9220, 9220, 0, 0, 0, 0, 'OVO 10.000', 'available', 'digiflazz', NULL, '2023-03-24 20:25:06', '2023-03-24 20:25:06'),
(1876, '8528', 'OVO 20.000', 'O20', 19000, 19000, 19000, 19000, 0, 0, 0, 0, 'OVO 20.000', 'available', 'digiflazz', NULL, '2023-03-24 20:25:06', '2023-03-24 20:25:06'),
(1877, '8528', 'OVO 30.000', 'O30', 29000, 29000, 29000, 29000, 0, 0, 0, 0, 'OVO 30.000', 'unavailable', 'digiflazz', NULL, '2023-03-24 20:25:06', '2023-03-24 20:25:06'),
(1878, '8528', 'OVO 40.000', 'O40', 39000, 39000, 39000, 39000, 0, 0, 0, 0, 'OVO 40.000', 'unavailable', 'digiflazz', NULL, '2023-03-24 20:25:06', '2023-03-24 20:25:06'),
(1879, '8528', 'OVO 50.000', 'O50', 49000, 49000, 49000, 49000, 0, 0, 0, 0, 'OVO 50.000', 'available', 'digiflazz', NULL, '2023-03-24 20:25:06', '2023-03-24 20:25:06'),
(1880, '8528', 'OVO 60.000', 'O60', 59000, 59000, 59000, 59000, 0, 0, 0, 0, 'OVO 60.000', 'available', 'digiflazz', NULL, '2023-03-24 20:25:06', '2023-03-24 20:25:06'),
(1881, '8528', 'OVO 70.000', 'O70', 69000, 69000, 69000, 69000, 0, 0, 0, 0, 'OVO 70.000', 'available', 'digiflazz', NULL, '2023-03-24 20:25:06', '2023-03-24 20:25:06'),
(1882, '8528', 'OVO 80.000', 'O80', 79000, 79000, 79000, 79000, 0, 0, 0, 0, 'OVO 80.000', 'available', 'digiflazz', NULL, '2023-03-24 20:25:06', '2023-03-24 20:25:06'),
(1883, '8528', 'OVO 90.000', 'O90', 89000, 89000, 89000, 89000, 0, 0, 0, 0, 'OVO 90.000', 'available', 'digiflazz', NULL, '2023-03-24 20:25:06', '2023-03-24 20:25:06'),
(1884, '8528', 'OVO 100.000', 'O100', 99000, 99000, 99000, 99000, 0, 0, 0, 0, 'OVO 100.000', 'available', 'digiflazz', NULL, '2023-03-24 20:25:06', '2023-03-24 20:25:06'),
(1885, '8528', 'OVO 15.000', 'o15', 15000, 15000, 15000, 15000, 0, 0, 0, 0, 'OVO 15.000', 'unavailable', 'digiflazz', NULL, '2023-03-24 20:25:06', '2023-03-24 20:25:06'),
(1886, '8528', 'OVO 25.000', 'o25', 24000, 24000, 24000, 24000, 0, 0, 0, 0, 'OVO 25.000', 'available', 'digiflazz', NULL, '2023-03-24 20:25:06', '2023-03-24 20:25:06'),
(1887, '8528', 'OVO 35.000', 'o35', 34000, 34000, 34000, 34000, 0, 0, 0, 0, 'OVO 35.000', 'available', 'digiflazz', NULL, '2023-03-24 20:25:06', '2023-03-24 20:25:06'),
(1888, '8528', 'OVO 45.000', 'o45', 44000, 44000, 44000, 44000, 0, 0, 0, 0, 'OVO 45.000', 'available', 'digiflazz', NULL, '2023-03-24 20:25:06', '2023-03-24 20:25:06'),
(1889, '8528', 'OVO 55.000', 'o55', 54000, 54000, 54000, 54000, 0, 0, 0, 0, 'OVO 55.000', 'available', 'digiflazz', NULL, '2023-03-24 20:25:06', '2023-03-24 20:25:06'),
(1890, '8528', 'OVO 65.000', 'o65', 64000, 64000, 64000, 64000, 0, 0, 0, 0, 'OVO 65.000', 'available', 'digiflazz', NULL, '2023-03-24 20:25:06', '2023-03-24 20:25:06'),
(1891, '8528', 'OVO 75.000', 'o75', 74000, 74000, 74000, 74000, 0, 0, 0, 0, 'OVO 75.000', 'available', 'digiflazz', NULL, '2023-03-24 20:25:06', '2023-03-24 20:25:06'),
(1892, '8528', 'OVO 85.000', 'o85', 84000, 84000, 84000, 84000, 0, 0, 0, 0, 'OVO 85.000', 'available', 'digiflazz', NULL, '2023-03-24 20:25:06', '2023-03-24 20:25:06'),
(1893, '8528', 'OVO 95.000', 'o95', 94000, 94000, 94000, 94000, 0, 0, 0, 0, 'OVO 95.000', 'available', 'digiflazz', NULL, '2023-03-24 20:25:06', '2023-03-24 20:25:06'),
(1894, '8527', 'DANA 10.000', 'DANA10', 10150, 10150, 10150, 10150, 0, 0, 0, 0, '-', 'available', 'digiflazz', NULL, '2023-03-30 17:19:36', '2023-03-30 17:19:36'),
(1895, '8527', 'DANA 15.000', 'DANA15', 15350, 15350, 15350, 15350, 0, 0, 0, 0, '-', 'available', 'digiflazz', NULL, '2023-03-30 17:19:36', '2023-03-30 17:19:36'),
(1896, '8527', 'DANA 20.000', 'DANA20', 20150, 20150, 20150, 20150, 0, 0, 0, 0, '-', 'available', 'digiflazz', NULL, '2023-03-30 17:19:36', '2023-03-30 17:19:36'),
(1897, '8527', 'DANA 25.000', 'DANA25', 25150, 25150, 25150, 25150, 0, 0, 0, 0, '-', 'available', 'digiflazz', NULL, '2023-03-30 17:19:36', '2023-03-30 17:19:36'),
(1898, '8527', 'DANA 30.000', 'DANA30', 30350, 30350, 30350, 30350, 0, 0, 0, 0, '-', 'available', 'digiflazz', NULL, '2023-03-30 17:19:36', '2023-03-30 17:19:36'),
(1899, '8527', 'DANA 35.000', 'DANA35', 35350, 35350, 35350, 35350, 0, 0, 0, 0, '-', 'available', 'digiflazz', NULL, '2023-03-30 17:19:36', '2023-03-30 17:19:36'),
(1900, '8527', 'DANA 40.000', 'DANA40', 40350, 40350, 40350, 40350, 0, 0, 0, 0, '-', 'available', 'digiflazz', NULL, '2023-03-30 17:19:36', '2023-03-30 17:19:36'),
(1901, '8527', 'DANA 45.000', 'DANA45', 45350, 45350, 45350, 45350, 0, 0, 0, 0, '-', 'available', 'digiflazz', NULL, '2023-03-30 17:19:36', '2023-03-30 17:19:36'),
(1902, '8527', 'DANA 50.000', 'DANA50', 50150, 50150, 50150, 50150, 0, 0, 0, 0, '-', 'available', 'digiflazz', NULL, '2023-03-30 17:19:36', '2023-03-30 17:19:36'),
(1903, '8528', 'OVO 10.000', 'OVO10', 9255, 9255, 9255, 9255, 0, 0, 0, 0, 'OVO 10.000', 'available', 'digiflazz', NULL, '2023-03-30 17:19:37', '2023-03-30 17:19:37'),
(1904, '8528', 'OVO 15.000', 'OVO15', 15750, 15750, 15750, 15750, 0, 0, 0, 0, 'OVO 15.000', 'available', 'digiflazz', NULL, '2023-03-30 17:19:37', '2023-03-30 17:19:37'),
(1905, '8528', 'OVO 20.000', 'OVO20', 19260, 19260, 19260, 19260, 0, 0, 0, 0, 'OVO 20.000', 'available', 'digiflazz', NULL, '2023-03-30 17:19:37', '2023-03-30 17:19:37'),
(1906, '8528', 'OVO 25.000', 'OVO25', 24260, 24260, 24260, 24260, 0, 0, 0, 0, 'OVO 25.000', 'available', 'digiflazz', NULL, '2023-03-30 17:19:37', '2023-03-30 17:19:37'),
(1907, '8528', 'OVO 30.000', 'OVO30', 29275, 29275, 29275, 29275, 0, 0, 0, 0, 'OVO 30.000', 'available', 'digiflazz', NULL, '2023-03-30 17:19:37', '2023-03-30 17:19:37'),
(1908, '8528', 'OVO 35.000', 'OVO35', 34775, 34775, 34775, 34775, 0, 0, 0, 0, 'OVO 35.000', 'available', 'digiflazz', NULL, '2023-03-30 17:19:37', '2023-03-30 17:19:37'),
(1909, '8528', 'OVO 40.000', 'OVO40', 39275, 39275, 39275, 39275, 0, 0, 0, 0, 'OVO 40.000', 'available', 'digiflazz', NULL, '2023-03-30 17:19:37', '2023-03-30 17:19:37'),
(1910, '8528', 'OVO 45.000', 'OVO45', 45575, 45575, 45575, 45575, 0, 0, 0, 0, 'OVO 45.000', 'available', 'digiflazz', NULL, '2023-03-30 17:19:37', '2023-03-30 17:19:37'),
(1911, '8528', 'OVO 50.000', 'OVO50', 49275, 49275, 49275, 49275, 0, 0, 0, 0, 'OVO 50.000', 'available', 'digiflazz', NULL, '2023-03-30 17:19:37', '2023-03-30 17:19:37'),
(1912, '8528', 'OVO 55.000', 'OVO55', 54575, 54575, 54575, 54575, 0, 0, 0, 0, 'OVO 55.000', 'available', 'digiflazz', NULL, '2023-03-30 17:19:37', '2023-03-30 17:19:37'),
(1913, '8528', 'OVO 60.000', 'OVO60', 59275, 59275, 59275, 59275, 0, 0, 0, 0, 'OVO 60.000', 'available', 'digiflazz', NULL, '2023-03-30 17:19:37', '2023-03-30 17:19:37'),
(1914, '8528', 'OVO 65.000', 'OVO65', 65575, 65575, 65575, 65575, 0, 0, 0, 0, 'OVO 65.000', 'available', 'digiflazz', NULL, '2023-03-30 17:19:37', '2023-03-30 17:19:37'),
(1915, '8528', 'OVO 70.000', 'OVO70', 69275, 69275, 69275, 69275, 0, 0, 0, 0, 'OVO 70.000', 'available', 'digiflazz', NULL, '2023-03-30 17:19:37', '2023-03-30 17:19:37'),
(1916, '8528', 'OVO 75.000', 'OVO75', 74275, 74275, 74275, 74275, 0, 0, 0, 0, 'OVO 75.000', 'available', 'digiflazz', NULL, '2023-03-30 17:19:37', '2023-03-30 17:19:37'),
(1917, '8528', 'OVO 80.000', 'OVO80', 79275, 79275, 79275, 79275, 0, 0, 0, 0, 'OVO 80.000', 'available', 'digiflazz', NULL, '2023-03-30 17:19:37', '2023-03-30 17:19:37'),
(1918, '8528', 'OVO 85.000', 'OVO85', 84625, 84625, 84625, 84625, 0, 0, 0, 0, 'OVO 85.000', 'available', 'digiflazz', NULL, '2023-03-30 17:19:37', '2023-03-30 17:19:37'),
(1919, '8528', 'OVO 90.000', 'OVO90', 89275, 89275, 89275, 89275, 0, 0, 0, 0, 'OVO 90.000', 'available', 'digiflazz', NULL, '2023-03-30 17:19:37', '2023-03-30 17:19:37'),
(1920, '8528', 'OVO 95.000', 'OVO95', 94575, 94575, 94575, 94575, 0, 0, 0, 0, 'OVO 95.000', 'available', 'digiflazz', NULL, '2023-03-30 17:19:37', '2023-03-30 17:19:37'),
(1921, '8528', 'OVO 100.000', 'OVO100', 99275, 99275, 99275, 99275, 0, 0, 0, 0, 'OVO 100.000', 'available', 'digiflazz', NULL, '2023-03-30 17:19:37', '2023-03-30 17:19:37'),
(1922, '8507', 'MOBILELEGEND - 65 Diamond', 'ML65', 16900, 16900, 16900, 16900, 0, 0, 0, 0, 'no pelanggan = gabungan antara user_id dan zone_id', 'available', 'digiflazz', NULL, '2023-03-30 17:40:03', '2023-04-08 09:45:06'),
(1923, '8507', 'MOBILELEGEND - 5 Diamond', 'ML5', 1555, 1555, 1555, 1555, 0, 0, 0, 0, 'no pelanggan = gabungan antara user_id dan zone_id', 'available', 'digiflazz', NULL, '2023-03-30 17:40:03', '2023-03-30 17:40:03'),
(1924, '8507', 'MOBILELEGEND - 12 Diamond', 'ML12', 3775, 3775, 3775, 3775, 0, 0, 0, 0, 'no pelanggan = gabungan antara user_id dan zone_id', 'available', 'digiflazz', NULL, '2023-03-30 17:40:03', '2023-03-30 17:40:03'),
(1925, '8507', 'MOBILELEGEND - 14 Diamond', 'ML14', 3500, 3500, 3500, 3500, 0, 0, 0, 0, 'no pelanggan = gabungan antara user_id dan zone_id', 'available', 'digiflazz', NULL, '2023-03-30 17:40:03', '2023-04-09 11:35:04'),
(1926, '8507', 'MOBILELEGEND - 19 Diamond', 'ML19', 5950, 5950, 5950, 5950, 0, 0, 0, 0, 'no pelanggan = gabungan antara user_id dan zone_id', 'available', 'digiflazz', NULL, '2023-03-30 17:40:03', '2023-03-30 17:40:03'),
(1927, '8507', 'MOBILELEGEND - 28 Diamond', 'ML28', 8625, 8625, 8625, 8625, 0, 0, 0, 0, 'no pelanggan = gabungan antara user_id dan zone_id', 'available', 'digiflazz', NULL, '2023-03-30 17:40:03', '2023-03-30 17:40:03'),
(1928, '8507', 'MOBILELEGEND - 36 Diamond', 'ML36', 10775, 10775, 10775, 10775, 0, 0, 0, 0, 'no pelanggan = gabungan antara user_id dan zone_id', 'available', 'digiflazz', NULL, '2023-03-30 17:40:03', '2023-03-30 17:40:03'),
(1929, '8507', 'MOBILELEGEND - 42 Diamond', 'ML42', 9705, 9705, 9705, 9705, 0, 0, 0, 0, 'no pelanggan = gabungan antara user_id dan zone_id', 'available', 'digiflazz', NULL, '2023-03-30 17:40:03', '2023-04-09 11:35:04'),
(1930, '8507', 'MOBILELEGEND - 44 Diamond', 'ML44', 11600, 11600, 11600, 11600, 0, 0, 0, 0, 'no pelanggan = gabungan antara user_id dan zone_id', 'available', 'digiflazz', NULL, '2023-03-30 17:40:03', '2023-04-08 09:45:06'),
(1931, '8507', 'MOBILELEGEND - 59 Diamond', 'ML59', 17072, 17072, 17072, 17072, 0, 0, 0, 0, 'no pelanggan = gabungan antara user_id dan zone_id', 'available', 'digiflazz', NULL, '2023-03-30 17:40:03', '2023-03-30 17:40:03'),
(1932, '8507', 'MOBILELEGEND - 74 Diamond', 'ML74', 21550, 21550, 21550, 21550, 0, 0, 0, 0, 'no pelanggan = gabungan antara user_id dan zone_id', 'available', 'digiflazz', NULL, '2023-03-30 17:40:03', '2023-03-30 17:40:03'),
(1933, '8507', 'MOBILELEGEND - 85 Diamond', 'ML85', 24780, 24780, 24780, 24780, 0, 0, 0, 0, 'no pelanggan = gabungan antara user_id dan zone_id', 'available', 'digiflazz', NULL, '2023-03-30 17:40:03', '2023-03-30 17:40:03'),
(1934, '8507', 'MOBILELEGEND - 112 Diamond', 'ML112', 26200, 26200, 26200, 26200, 0, 0, 0, 0, 'no pelanggan = gabungan antara user_id dan zone_id', 'available', 'digiflazz', NULL, '2023-03-30 17:40:03', '2023-04-09 11:45:04'),
(1935, '8507', 'MOBILELEGEND - 140 Diamond', 'ML140', 32525, 32525, 32525, 32525, 0, 0, 0, 0, 'no pelanggan = gabungan antara user_id dan zone_id', 'available', 'digiflazz', NULL, '2023-03-30 17:40:03', '2023-04-09 11:35:04'),
(1936, '8507', 'MOBILELEGEND - 170 Diamond', 'ML170', 48576, 48576, 48576, 48576, 0, 0, 0, 0, 'no pelanggan = gabungan antara user_id dan zone_id', 'available', 'digiflazz', NULL, '2023-03-30 17:40:03', '2023-03-30 17:40:03'),
(1937, '8507', 'MOBILELEGEND - 172 Diamond', 'ML172', 38400, 38400, 38400, 38400, 0, 0, 0, 0, 'no pelanggan = gabungan antara user_id dan zone_id', 'available', 'digiflazz', NULL, '2023-03-30 17:40:03', '2023-04-08 09:45:06'),
(1938, '8507', 'MOBILELEGEND - 222 Diamond', 'ML222', 56000, 56000, 56000, 56000, 0, 0, 0, 0, 'no pelanggan = gabungan antara user_id dan zone_id', 'available', 'digiflazz', NULL, '2023-03-30 17:40:03', '2023-04-08 09:45:06'),
(1939, '8507', 'MOBILELEGEND - 240 Diamond', 'ML240', 58500, 58500, 58500, 58500, 0, 0, 0, 0, 'no pelanggan = gabungan antara user_id dan zone_id', 'available', 'digiflazz', NULL, '2023-03-30 17:40:03', '2023-04-08 09:45:06'),
(1940, '8507', 'MOBILELEGEND - 257 Diamond', 'ML257', 57500, 57500, 57500, 57500, 0, 0, 0, 0, 'no pelanggan = gabungan antara user_id dan zone_id', 'available', 'digiflazz', NULL, '2023-03-30 17:40:03', '2023-04-08 09:45:06'),
(1941, '8511', 'PUBG MOBILE 25 UC', 'PUBG25', 4614, 4614, 4614, 4614, 0, 0, 0, 0, 'PUBG MOBILE 25 UC', 'available', 'digiflazz', NULL, '2023-03-30 17:43:07', '2023-04-08 09:45:06'),
(1942, '8511', 'PUBG MOBILE 26 UC', 'PUBG26', 4600, 4600, 4600, 4600, 0, 0, 0, 0, 'PUBG MOBILE 26 UC', 'available', 'digiflazz', NULL, '2023-03-30 17:43:07', '2023-03-30 17:43:07'),
(1943, '8511', 'PUBG MOBILE 35 UC', 'PUBG35', 7550, 7550, 7550, 7550, 0, 0, 0, 0, 'PUBG MOBILE 35 UC', 'available', 'digiflazz', NULL, '2023-03-30 17:43:07', '2023-04-04 17:05:04'),
(1944, '8511', 'PUBG MOBILE 50 UC', 'PUBG50', 9240, 9240, 9240, 9240, 0, 0, 0, 0, 'PUBG MOBILE 50 UC', 'available', 'digiflazz', NULL, '2023-03-30 17:43:07', '2023-03-30 17:43:07'),
(1945, '8511', 'PUBG MOBILE 52 UC', 'PUBG52', 9250, 9250, 9250, 9250, 0, 0, 0, 0, 'PUBG MOBILE 52 UC', 'available', 'digiflazz', NULL, '2023-03-30 17:43:07', '2023-03-30 17:43:07'),
(1946, '8511', 'PUBG MOBILE 70 UC', 'PUBG70', 13360, 13360, 13360, 13360, 0, 0, 0, 0, 'PUBG MOBILE 70 UC', 'unavailable', 'digiflazz', NULL, '2023-03-30 17:43:07', '2023-04-10 13:50:03'),
(1947, '8511', 'PUBG MOBILE 100 UC', 'PUBG100', 18010, 18010, 18010, 18010, 0, 0, 0, 0, 'PUBG MOBILE 100 UC', 'available', 'digiflazz', NULL, '2023-03-30 17:43:07', '2023-04-07 14:40:09'),
(1948, '8511', 'PUBG MOBILE 125 UC', 'PUBG125', 23080, 23080, 23080, 23080, 0, 0, 0, 0, 'PUBG MOBILE 125 UC', 'available', 'digiflazz', NULL, '2023-03-30 17:43:07', '2023-04-08 09:45:06'),
(1949, '8511', 'PUBG MOBILE 131 UC', 'PUBG131', 23085, 23085, 23085, 23085, 0, 0, 0, 0, 'PUBG MOBILE 131 UC', 'available', 'digiflazz', NULL, '2023-03-30 17:43:07', '2023-04-08 09:45:06'),
(1950, '8511', 'PUBG MOBILE 150 UC', 'PUBG150', 31500, 31500, 31500, 31500, 0, 0, 0, 0, 'PUBG MOBILE 150 UC', 'available', 'digiflazz', NULL, '2023-03-30 17:43:07', '2023-03-30 17:43:07'),
(1951, '8511', 'PUBG MOBILE 156 UC', 'PUBG156', 27050, 27050, 27050, 27050, 0, 0, 0, 0, 'PUBG MOBILE 156 UC', 'available', 'digiflazz', NULL, '2023-03-30 17:43:07', '2023-04-07 14:40:09'),
(1952, '8511', 'PUBG MOBILE 175 UC', 'PUBG175', 31525, 31525, 31525, 31525, 0, 0, 0, 0, 'PUBG MOBILE 175 UC', 'available', 'digiflazz', NULL, '2023-03-30 17:43:07', '2023-04-07 14:40:09'),
(1953, '8511', 'PUBG MOBILE 186 UC', 'PUBG185', 32325, 32325, 32325, 32325, 0, 0, 0, 0, 'PUBG MOBILE 186 UC', 'available', 'digiflazz', NULL, '2023-03-30 17:43:07', '2023-04-08 09:45:06'),
(1954, '8511', 'PUBG MOBILE 200 UC', 'PUBG200', 36025, 36025, 36025, 36025, 0, 0, 0, 0, 'PUBG MOBILE 200 UC', 'available', 'digiflazz', NULL, '2023-03-30 17:43:07', '2023-04-07 14:40:09'),
(1955, '8512', '1200 PB Cash', 'PB1200', 9700, 9700, 9700, 9700, 0, 0, 0, 0, '1200 Point Blank Cash', 'available', 'digiflazz', NULL, '2023-03-30 17:57:59', '2023-03-30 17:57:59'),
(1956, '8512', '2400 PB Cash', 'PB2400', 19400, 19400, 19400, 19400, 0, 0, 0, 0, '2400 PB Cash', 'available', 'digiflazz', NULL, '2023-03-30 17:57:59', '2023-03-30 17:57:59'),
(1957, '8512', '6000 PB Cash', 'PB6000', 48500, 48500, 48500, 48500, 0, 0, 0, 0, '6000 PB Cash', 'available', 'digiflazz', NULL, '2023-03-30 17:57:59', '2023-03-30 17:57:59'),
(1958, '8512', '12000 PB Cash', 'PB12000', 97000, 97000, 97000, 97000, 0, 0, 0, 0, '12000 PB Cash', 'available', 'digiflazz', NULL, '2023-03-30 17:57:59', '2023-03-30 17:57:59'),
(1959, '8512', '24000 PB Cash', 'PB24000', 179999, 179999, 179999, 179999, 0, 0, 0, 0, '24000 PB Cash', 'available', 'digiflazz', NULL, '2023-03-30 17:57:59', '2023-04-10 15:50:03'),
(1960, '8512', '36000 PB Cash', 'PB36000', 291000, 291000, 291000, 291000, 0, 0, 0, 0, '-', 'available', 'digiflazz', NULL, '2023-03-30 17:57:59', '2023-03-30 17:57:59'),
(1961, '8512', '60000 PB Cash', 'PB60000', 485000, 485000, 485000, 485000, 0, 0, 0, 0, '-', 'available', 'digiflazz', NULL, '2023-03-30 17:57:59', '2023-03-30 17:57:59'),
(1962, '8514', 'Valorant 300 Points', 'Valorant300', 30020, 30020, 30020, 30020, 0, 0, 0, 0, 'masukkan username akun game anda.', 'available', 'digiflazz', NULL, '2023-03-30 17:57:59', '2023-04-08 10:00:12'),
(1963, '8514', 'Valorant 420 Points', 'Valorant420', 48500, 48500, 48500, 48500, 0, 0, 0, 0, 'masukkan username akun game anda.', 'available', 'digiflazz', NULL, '2023-03-30 17:57:59', '2023-04-08 09:45:06'),
(1964, '8514', 'Valorant 625 Points', 'Valorant625', 59915, 59915, 59915, 59915, 0, 0, 0, 0, 'masukkan username akun game anda.', 'available', 'digiflazz', NULL, '2023-03-30 17:57:59', '2023-04-08 10:00:12'),
(1965, '8514', 'Valorant 700 Points', 'Valorant700', 77600, 77600, 77600, 77600, 0, 0, 0, 0, 'masukkan username akun game anda.', 'available', 'digiflazz', NULL, '2023-03-30 17:57:59', '2023-04-08 09:45:06'),
(1966, '8514', 'Valorant 1125 Points', 'Valorant1125', 104860, 104860, 104860, 104860, 0, 0, 0, 0, 'masukkan username akun game anda.', 'available', 'digiflazz', NULL, '2023-03-30 17:57:59', '2023-04-08 10:00:12'),
(1967, '8514', 'Valorant 1375 Points', 'Valorant1375', 145500, 145500, 145500, 145500, 0, 0, 0, 0, 'masukkan username akun game anda.', 'available', 'digiflazz', NULL, '2023-03-30 17:57:59', '2023-04-08 09:45:06'),
(1968, '8514', 'Valorant 1650 Points', 'Valorant1650', 152000, 152000, 152000, 152000, 0, 0, 0, 0, 'masukkan username akun game anda.', 'available', 'digiflazz', NULL, '2023-03-30 17:57:59', '2023-04-08 10:00:12'),
(1969, '8514', 'Valorant 2400 Points', 'Valorant2400', 242500, 242500, 242500, 242500, 0, 0, 0, 0, 'masukkan username akun game anda.', 'available', 'digiflazz', NULL, '2023-03-30 17:57:59', '2023-04-08 09:45:06'),
(1970, '8518', 'Sausage Man 60 Candies', 'Sausage60', 13910, 13910, 13910, 13910, 0, 0, 0, 0, 'Sausage Man 60 Candies', 'available', 'digiflazz', NULL, '2023-03-30 18:02:13', '2023-04-08 09:45:06'),
(1971, '8518', 'Sausage Man 180 Candies', 'Sausage180', 40025, 40025, 40025, 40025, 0, 0, 0, 0, 'Sausage Man 180 Candies', 'available', 'digiflazz', NULL, '2023-03-30 18:02:13', '2023-04-08 09:45:06'),
(1972, '8518', 'Sausage Man 316 Candies', 'Sausage316', 75300, 75300, 75300, 75300, 0, 0, 0, 0, 'Sausage Man 316 Candies', 'available', 'digiflazz', NULL, '2023-03-30 18:02:13', '2023-04-06 01:50:10'),
(1973, '8518', 'Sausage Man 718 Candies', 'Sausage718', 141500, 141500, 141500, 141500, 0, 0, 0, 0, 'Sausage Man 718 Candies', 'available', 'digiflazz', NULL, '2023-03-30 18:02:13', '2023-04-06 01:50:10'),
(1974, '8518', 'Sausage Man 1368 Candies', 'Sausage1368', 299000, 299000, 299000, 299000, 0, 0, 0, 0, 'Sausage Man 1368 Candies', 'available', 'digiflazz', NULL, '2023-03-30 18:02:13', '2023-04-06 01:50:10'),
(1975, '8518', 'Sausage Man 2118 Candies', 'Sausage2118', 456500, 456500, 456500, 456500, 0, 0, 0, 0, 'Sausage Man 2118 Candies', 'available', 'digiflazz', NULL, '2023-03-30 18:02:13', '2023-04-06 01:50:10'),
(1976, '8520', 'Marvel Super War 55 Star Credits', 'Marvel55', 14550, 14550, 14550, 14550, 0, 0, 0, 0, 'Marvel Super War 55 Star Credits', 'available', 'digiflazz', NULL, '2023-03-30 18:05:04', '2023-03-30 18:05:04'),
(1977, '8520', 'Marvel Super War 275 Star Credits', 'Marvel275', 68500, 68500, 68500, 68500, 0, 0, 0, 0, 'Marvel Super War 275 Star Credits', 'available', 'digiflazz', NULL, '2023-03-30 18:05:04', '2023-04-08 09:45:06'),
(1978, '8520', 'Marvel Super War 565 Star Credits', 'Marvel565', 137000, 137000, 137000, 137000, 0, 0, 0, 0, 'Marvel Super War 565 Star Credits', 'available', 'digiflazz', NULL, '2023-03-30 18:05:04', '2023-04-08 09:45:06'),
(1979, '8520', 'Marvel Super War 1155 Star Credits', 'Marvel1155', 275000, 275000, 275000, 275000, 0, 0, 0, 0, 'Marvel Super War 1155 Star Credits', 'available', 'digiflazz', NULL, '2023-03-30 18:05:04', '2023-04-08 09:45:06'),
(1980, '8520', 'Marvel Super War 1765 Star Credits', 'Marvel1765', 425830, 425830, 425830, 425830, 0, 0, 0, 0, 'Marvel Super War 1765 Star Credits', 'available', 'digiflazz', NULL, '2023-03-30 18:05:04', '2023-03-30 18:05:04'),
(1981, '8520', 'Marvel Super War 2950 Star Credits', 'Marvel2950', 685000, 685000, 685000, 685000, 0, 0, 0, 0, 'Marvel Super War 2950 Star Credits', 'available', 'digiflazz', NULL, '2023-03-30 18:05:04', '2023-04-08 09:45:06'),
(1982, '8516', '4 Big Cat Coins', 'RE4', 9630, 9630, 9630, 9630, 0, 0, 0, 0, '4 Big Cat Coins', 'available', 'digiflazz', NULL, '2023-03-30 18:13:25', '2023-03-30 18:13:25'),
(1983, '8516', '5 Big Cat Coins', 'RE5', 12010, 12010, 12010, 12010, 0, 0, 0, 0, '5 Big Cat Coins', 'available', 'digiflazz', NULL, '2023-03-30 18:13:25', '2023-03-30 18:13:25'),
(1984, '8516', '6 Big Cat Coins', 'RE6', 15057, 15057, 15057, 15057, 0, 0, 0, 0, '6 Big Cat Coins', 'available', 'digiflazz', NULL, '2023-03-30 18:13:25', '2023-04-08 09:45:06'),
(1985, '8516', '8 Big Cat Coins', 'RE8', 19210, 19210, 19210, 19210, 0, 0, 0, 0, '8 Big Cat Coins', 'available', 'digiflazz', NULL, '2023-03-30 18:13:25', '2023-03-30 18:13:25'),
(1986, '8516', '12 Big Cat Coins', 'RE12', 30115, 30115, 30115, 30115, 0, 0, 0, 0, '12 Big Cat Coins', 'available', 'digiflazz', NULL, '2023-03-30 18:13:25', '2023-04-08 09:45:06'),
(1987, '8516', '18 Big Cat Coins', 'RE18', 45172, 45172, 45172, 45172, 0, 0, 0, 0, '18 Big Cat Coins', 'available', 'digiflazz', NULL, '2023-03-30 18:13:25', '2023-04-08 09:45:06'),
(1988, '8516', '24 Big Cat Coins', 'RE24', 60230, 60230, 60230, 60230, 0, 0, 0, 0, '24 Big Cat Coins', 'available', 'digiflazz', NULL, '2023-03-30 18:13:25', '2023-04-08 09:45:06'),
(1989, '8516', '36 Big Cat Coins', 'RE36', 72500, 72500, 72500, 72500, 0, 0, 0, 0, '36 Big Cat Coins', 'available', 'digiflazz', NULL, '2023-03-30 18:13:25', '2023-04-08 09:45:06'),
(1990, '8516', '145 Big Cat Coins', 'RE145', 286092, 286092, 286092, 286092, 0, 0, 0, 0, '145 Big Cat Coins', 'available', 'digiflazz', NULL, '2023-03-30 18:13:25', '2023-04-08 09:45:06'),
(1991, '8510', 'Genshin Impact 60 Genesis Crystals', 'GI60', 15310, 15310, 15310, 15310, 0, 0, 0, 0, 'Gabungan id server dan UID', 'available', 'digiflazz', NULL, '2023-03-30 18:23:27', '2023-03-30 18:23:27'),
(1992, '8510', 'Genshin Impact 300+30 Genesis Crystals', 'GI300', 62525, 62525, 62525, 62525, 0, 0, 0, 0, 'Gabungan id server dan UID', 'available', 'digiflazz', NULL, '2023-03-30 18:23:27', '2023-04-08 09:45:06'),
(1993, '8517', 'Lords Mobile 67 Diamonds', 'LM67', 9700, 9700, 9700, 9700, 0, 0, 0, 0, 'Lords Mobile 67 Diamonds', 'available', 'digiflazz', NULL, '2023-03-30 18:23:27', '2023-03-30 18:23:27'),
(1994, '8517', 'Lords Mobile 100 Diamonds', 'LM100', 15750, 15750, 15750, 15750, 0, 0, 0, 0, 'Lords Mobile 100 Diamonds', 'available', 'digiflazz', NULL, '2023-03-30 18:23:27', '2023-04-06 01:50:10'),
(1995, '8517', 'Lords Mobile 134 Diamonds', 'LM134', 19400, 19400, 19400, 19400, 0, 0, 0, 0, 'Lords Mobile 134 Diamonds', 'available', 'digiflazz', NULL, '2023-03-30 18:23:27', '2023-03-30 18:23:27'),
(1996, '8517', 'Lords Mobile 200 Diamonds', 'LM200', 31500, 31500, 31500, 31500, 0, 0, 0, 0, 'Lords Mobile 200 Diamonds', 'available', 'digiflazz', NULL, '2023-03-30 18:23:27', '2023-04-06 01:50:10'),
(1997, '8517', 'Lords Mobile 335 Diamonds', 'LM335', 48500, 48500, 48500, 48500, 0, 0, 0, 0, 'Lords Mobile 335 Diamonds', 'available', 'digiflazz', NULL, '2023-03-30 18:23:27', '2023-03-30 18:23:27'),
(1998, '8517', 'Lords Mobile 670 Diamonds', 'LM670', 97000, 97000, 97000, 97000, 0, 0, 0, 0, 'Lords Mobile 670 Diamonds', 'available', 'digiflazz', NULL, '2023-03-30 18:23:27', '2023-03-30 18:23:27'),
(1999, '8513', 'AOV 40 Vouchers', 'AOV40', 10210, 10210, 10210, 10210, 0, 0, 0, 0, 'AOV 40 Vouchers', 'available', 'digiflazz', NULL, '2023-03-30 18:24:45', '2023-04-04 17:05:04'),
(2000, '8513', 'AOV 90 Vouchers', 'AOV90', 19400, 19400, 19400, 19400, 0, 0, 0, 0, 'AOV 90 Vouchers', 'available', 'digiflazz', NULL, '2023-03-30 18:24:45', '2023-03-30 18:24:45'),
(2001, '8513', 'AOV 230 Vouchers', 'AOV230', 50250, 50250, 50250, 50250, 0, 0, 0, 0, 'AOV 230 Vouchers', 'available', 'digiflazz', NULL, '2023-03-30 18:24:45', '2023-04-04 17:05:04'),
(2002, '8513', 'AOV 18 Vouchers', 'AOV18', 5210, 5210, 5210, 5210, 0, 0, 0, 0, 'AOV 18 Vouchers', 'available', 'digiflazz', NULL, '2023-03-30 18:24:45', '2023-04-04 17:05:04'),
(2003, '8513', 'AOV 470 Vouchers', 'AOV470', 95200, 95200, 95200, 95200, 0, 0, 0, 0, 'AOV 470 Vouchers', 'available', 'digiflazz', NULL, '2023-03-30 18:24:45', '2023-03-30 18:24:45'),
(2004, '8515', 'One Punch Man 6 Dana', 'OPM6', 9500, 9500, 9500, 9500, 0, 0, 0, 0, '-', 'available', 'digiflazz', NULL, '2023-03-30 18:35:03', '2023-04-06 01:50:10'),
(2005, '8515', 'One Punch Man 37 Dana', 'OPM37', 64500, 64500, 64500, 64500, 0, 0, 0, 0, '-', 'available', 'digiflazz', NULL, '2023-03-30 18:35:03', '2023-04-06 01:50:10'),
(2006, '8515', 'One Punch Man 109 Dana', 'OPM109', 192500, 192500, 192500, 192500, 0, 0, 0, 0, '-', 'available', 'digiflazz', NULL, '2023-03-30 18:35:03', '2023-04-06 01:50:10'),
(2007, '8515', 'One Punch Man 17 Dana', 'OPM17', 28650, 28650, 28650, 28650, 0, 0, 0, 0, '-', 'unavailable', 'digiflazz', NULL, '2023-03-30 18:35:03', '2023-03-30 18:35:03'),
(2008, '8515', 'One Punch Man 27 Dana', 'OPM27', 47650, 47650, 47650, 47650, 0, 0, 0, 0, '-', 'unavailable', 'digiflazz', NULL, '2023-03-30 18:35:03', '2023-03-30 18:35:03'),
(2009, '8509', 'Free Fire 50 Diamond', 'FF50', 7605, 7605, 7605, 7605, 0, 0, 0, 0, 'Free Fire 50 Diamond', 'available', 'digiflazz', NULL, '2023-03-31 12:55:04', '2023-03-31 12:55:04'),
(2010, '8509', 'Free Fire 100 Diamond', 'FF100', 13043, 13043, 13043, 13043, 0, 0, 0, 0, 'Free Fire 100 Diamond', 'available', 'digiflazz', NULL, '2023-03-31 12:55:04', '2023-04-09 08:45:07'),
(2011, '8509', 'Free Fire 5 Diamond', 'FF5', 955, 955, 955, 955, 0, 0, 0, 0, 'Free Fire 5 Diamond', 'available', 'digiflazz', NULL, '2023-03-31 12:55:04', '2023-03-31 12:55:04'),
(2012, '8509', 'Free Fire 10 Diamond', 'FF10', 1900, 1900, 1900, 1900, 0, 0, 0, 0, 'Free Fire 10 Diamond', 'available', 'digiflazz', NULL, '2023-03-31 12:55:04', '2023-04-08 09:45:06'),
(2013, '8509', 'Free Fire 12 Diamond', 'FF12', 1905, 1905, 1905, 1905, 0, 0, 0, 0, 'Free Fire 12 Diamond', 'available', 'digiflazz', NULL, '2023-03-31 12:55:04', '2023-03-31 12:55:04'),
(2014, '8509', 'Free Fire 15 Diamond', 'FF15', 2480, 2480, 2480, 2480, 0, 0, 0, 0, 'Free Fire 15 Diamond', 'available', 'digiflazz', NULL, '2023-03-31 12:55:04', '2023-03-31 12:55:04'),
(2015, '8509', 'Free Fire 20 Diamond', 'FF20', 4000, 4000, 4000, 4000, 0, 0, 0, 0, 'Free Fire 20 Diamond', 'available', 'digiflazz', NULL, '2023-03-31 12:55:04', '2023-04-04 17:05:04'),
(2016, '8509', 'Free Fire 25 Diamond', 'FF25', 4182, 4182, 4182, 4182, 0, 0, 0, 0, 'Free Fire 25 Diamond', 'available', 'digiflazz', NULL, '2023-03-31 12:55:04', '2023-04-08 09:45:06'),
(2017, '8509', 'Free Fire 30 Diamond', 'FF30', 4900, 4900, 4900, 4900, 0, 0, 0, 0, 'Free Fire 30 Diamond', 'available', 'digiflazz', NULL, '2023-03-31 12:55:04', '2023-04-04 07:10:05'),
(2018, '8509', 'Free Fire 40 Diamond', 'FF40', 6691, 6691, 6691, 6691, 0, 0, 0, 0, 'Free Fire 40 Diamond', 'available', 'digiflazz', NULL, '2023-03-31 12:55:04', '2023-04-08 09:45:06'),
(2019, '8509', 'Free Fire 55 Diamond', 'FF55', 7527, 7527, 7527, 7527, 0, 0, 0, 0, 'Free Fire 55 Diamond', 'available', 'digiflazz', NULL, '2023-03-31 12:55:04', '2023-04-08 09:45:06'),
(2020, '8509', 'Free Fire 60 Diamond', 'FF60', 8190, 8190, 8190, 8190, 0, 0, 0, 0, 'Free Fire 60 Diamond', 'available', 'digiflazz', NULL, '2023-03-31 12:55:04', '2023-03-31 12:55:04'),
(2021, '8509', 'Free Fire 70 Diamond', 'FF70', 9605, 9605, 9605, 9605, 0, 0, 0, 0, 'Free Fire 70 Diamond', 'available', 'digiflazz', NULL, '2023-03-31 12:55:04', '2023-03-31 12:55:04'),
(2022, '8509', 'Free Fire 75 Diamond', 'FF75', 9636, 9636, 9636, 9636, 0, 0, 0, 0, 'Free Fire 75 Diamond', 'available', 'digiflazz', NULL, '2023-03-31 12:55:04', '2023-04-05 08:40:11'),
(2023, '8509', 'Free Fire 80 Diamond', 'FF80', 10965, 10965, 10965, 10965, 0, 0, 0, 0, 'Free Fire 80 Diamond', 'available', 'digiflazz', NULL, '2023-03-31 12:55:04', '2023-03-31 12:55:04'),
(2024, '8509', 'Free Fire 90 Diamond', 'FF90', 12550, 12550, 12550, 12550, 0, 0, 0, 0, 'Free Fire 90 Diamond', 'available', 'digiflazz', NULL, '2023-03-31 12:55:04', '2023-04-04 05:55:03'),
(2025, '8509', 'Free Fire 95 Diamond', 'FF95', 13500, 13500, 13500, 13500, 0, 0, 0, 0, 'Free Fire 95 Diamond', 'available', 'digiflazz', NULL, '2023-03-31 12:55:04', '2023-04-08 09:45:06'),
(2026, '8509', 'Free Fire 120 Diamond', 'FF120', 16010, 16010, 16010, 16010, 0, 0, 0, 0, 'Free Fire 120 Diamond', 'available', 'digiflazz', NULL, '2023-03-31 12:55:04', '2023-03-31 12:55:04'),
(2027, '8509', 'Free Fire 130 Diamond', 'FF130', 18400, 18400, 18400, 18400, 0, 0, 0, 0, 'Free Fire 130 Diamond', 'available', 'digiflazz', NULL, '2023-03-31 12:55:04', '2023-04-08 09:45:06'),
(2028, '8509', 'Free Fire 140 Diamond', 'FF140', 19510, 19510, 19510, 19510, 0, 0, 0, 0, 'Free Fire 140 Diamond', 'available', 'digiflazz', NULL, '2023-03-31 12:55:04', '2023-03-31 12:55:04'),
(2029, '8509', 'Free Fire 145 Diamond', 'FF145', 18818, 18818, 18818, 18818, 0, 0, 0, 0, 'Free Fire 145 Diamond', 'available', 'digiflazz', NULL, '2023-03-31 12:55:04', '2023-03-31 12:55:04'),
(2030, '8509', 'Free Fire 160 Diamond', 'FF160', 21400, 21400, 21400, 21400, 0, 0, 0, 0, 'Free Fire 160 Diamond', 'available', 'digiflazz', NULL, '2023-03-31 12:55:04', '2023-03-31 12:55:04'),
(2031, '8509', 'Free Fire 180 Diamond', 'FF180', 24469, 24469, 24469, 24469, 0, 0, 0, 0, 'Free Fire 180 Diamond', 'available', 'digiflazz', NULL, '2023-03-31 12:55:04', '2023-04-05 14:50:05'),
(2032, '8509', 'Free Fire 190 Diamond', 'FF190', 24951, 24951, 24951, 24951, 0, 0, 0, 0, 'Free Fire 190 Diamond', 'available', 'digiflazz', NULL, '2023-03-31 12:55:04', '2023-03-31 12:55:04'),
(2033, '8509', 'Free Fire 200 Diamond', 'FF200', 26610, 26610, 26610, 26610, 0, 0, 0, 0, 'Free Fire 200 Diamond', 'available', 'digiflazz', NULL, '2023-03-31 12:55:04', '2023-03-31 12:55:04'),
(2034, '8509', 'Free Fire 210 Diamond', 'FF210', 28390, 28390, 28390, 28390, 0, 0, 0, 0, 'Free Fire 210 Diamond', 'available', 'digiflazz', NULL, '2023-03-31 12:55:04', '2023-04-08 09:45:06'),
(2035, '8509', 'Free Fire 250 Diamond', 'FF250', 31939, 31939, 31939, 31939, 0, 0, 0, 0, 'Free Fire 250 Diamond', 'unavailable', 'digiflazz', NULL, '2023-03-31 12:55:04', '2023-04-05 22:35:04'),
(2036, '8509', 'Free Fire 280 Diamond', 'FF280', 37636, 37636, 37636, 37636, 0, 0, 0, 0, 'Free Fire 280 Diamond', 'available', 'digiflazz', NULL, '2023-03-31 12:55:04', '2023-04-08 09:45:06'),
(2037, '8509', 'Free Fire 300 Diamond', 'FF300', 39797, 39797, 39797, 39797, 0, 0, 0, 0, 'Free Fire 300 Diamond', 'available', 'digiflazz', NULL, '2023-03-31 12:55:04', '2023-04-08 00:40:06'),
(2038, '8509', 'Free Fire 350 Diamond', 'FF350', 44875, 44875, 44875, 44875, 0, 0, 0, 0, 'Free Fire 350 Diamond', 'available', 'digiflazz', NULL, '2023-03-31 12:55:04', '2023-04-04 06:05:05'),
(2039, '8509', 'Free Fire 355 Diamond', 'FF355', 47025, 47025, 47025, 47025, 0, 0, 0, 0, 'Free Fire 355 Diamond', 'available', 'digiflazz', NULL, '2023-03-31 12:55:04', '2023-03-31 12:55:04'),
(2040, '8509', 'Free Fire 375 Diamond', 'FF357', 47539, 47539, 47539, 47539, 0, 0, 0, 0, 'Free Fire 375 Diamond', 'available', 'digiflazz', NULL, '2023-03-31 12:55:04', '2023-04-10 01:00:10'),
(2041, '8509', 'Free Fire 400 Diamond', 'FF400', 55000, 55000, 55000, 55000, 0, 0, 0, 0, 'Free Fire 400 Diamond', 'available', 'digiflazz', NULL, '2023-03-31 12:55:04', '2023-04-08 09:45:06'),
(2043, '8522', 'JOKI CLASSIC 30 MATCH', '1', 156000, 156000, 156000, 156000, 0, 0, 0, 0, '', 'available', 'joki', NULL, '2023-03-31 18:38:10', '2023-03-31 18:38:10'),
(2044, '8521', 'EPIC', 'jokiecer1', 40000, 40000, 40000, 40000, 0, 0, 0, 0, '', 'available', 'digiflazz', NULL, '2023-03-31 18:38:40', '2023-03-31 18:38:40'),
(2045, '8521', 'Master 3 Bintang', 'jokiecer', 18000, 18000, 18000, 18000, 0, 0, 0, 0, '', 'available', 'joki', NULL, '2023-03-31 18:39:34', '2023-03-31 18:39:34'),
(2046, '8523', 'JOKI CLASSIC 30 MATCH', 'JOKICLASSIC', 300000, 300000, 300000, 300000, 0, 0, 0, 0, '', 'available', 'joki', NULL, '2023-03-31 18:43:13', '2023-03-31 18:43:13'),
(2047, '8519', '8 Ball Pool 20.000 Coins Powered by Google Play', '8ball1', 29435, 29435, 29435, 29435, 0, 0, 0, 0, 'Dalam bentuk Voucher yang diredeem pada Google Play, lalu silahkan beli 8 Ball Pool Coins di Google Play. Hanya untuk pengguna Android.', 'available', 'digiflazz', NULL, '2023-03-31 19:10:04', '2023-03-31 19:10:04'),
(2048, '8519', '8 Ball Pool 52.000 Coins Powered by Google Play', '8ball2', 81705, 81705, 81705, 81705, 0, 0, 0, 0, 'Dalam bentuk Voucher yang diredeem pada Google Play, lalu silahkan beli 8 Ball Pool Coins di Google Play. Hanya untuk pengguna Android.', 'available', 'digiflazz', NULL, '2023-03-31 19:10:04', '2023-03-31 19:10:04'),
(2049, '8519', '8 Ball Pool 112.000 Coins Powered by Google Play', '8ball3', 162295, 162295, 162295, 162295, 0, 0, 0, 0, 'Dalam bentuk Voucher yang diredeem pada Google Play, lalu silahkan beli 8 Ball Pool Coins di Google Play. Hanya untuk pengguna Android.', 'available', 'digiflazz', NULL, '2023-03-31 19:10:04', '2023-03-31 19:10:04'),
(2050, '8519', '8 Ball Pool 256.000 Coins Powered by Google Play', '8ball4', 325645, 325645, 325645, 325645, 0, 0, 0, 0, 'Dalam bentuk Voucher yang diredeem pada Google Play, lalu silahkan beli 8 Ball Pool Coins di Google Play. Hanya untuk pengguna Android.', 'available', 'digiflazz', NULL, '2023-03-31 19:10:04', '2023-03-31 19:10:04'),
(2051, '8519', '8 Ball Pool 800.000 Coins Powered by Google Play', '8ball5', 804805, 804805, 804805, 804805, 0, 0, 0, 0, 'Dalam bentuk Voucher yang diredeem pada Google Play, lalu silahkan beli 8 Ball Pool Coins di Google Play. Hanya untuk pengguna Android.', 'available', 'digiflazz', NULL, '2023-03-31 19:10:04', '2023-03-31 19:10:04'),
(2052, '8507', 'MOBILELEGEND - 4 Diamond + Starlight Member', 'ML4STARLIGH', 158275, 158275, 158275, 158275, 0, 0, 0, 0, 'MOBILELEGEND - 4 Diamond + Starlight Member', 'available', 'digiflazz', NULL, '2023-04-03 19:35:03', '2023-04-03 19:35:03'),
(2053, '8507', 'MOBILELEGEND - 3 Diamond', 'ML3', 1825, 1825, 1825, 1825, 0, 0, 0, 0, 'no pelanggan = gabungan antara user_id dan zone_id', 'available', 'digiflazz', NULL, '2023-04-03 19:35:03', '2023-04-03 19:35:03'),
(2054, '8507', 'MOBILELEGEND - 67 Diamond', 'ML67', 17500, 17500, 17500, 17500, 0, 0, 0, 0, 'no pelanggan = gabungan antara user_id dan zone_id', 'available', 'digiflazz', NULL, '2023-04-03 19:35:03', '2023-04-08 09:45:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan_ppobs`
--

CREATE TABLE `layanan_ppobs` (
  `id` bigint UNSIGNED NOT NULL,
  `kategori_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `layanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe_layanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` bigint NOT NULL,
  `harga_reseller` bigint NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `methods`
--

CREATE TABLE `methods` (
  `id` int NOT NULL,
  `name` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `images` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `code` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tipe` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `methods`
--

INSERT INTO `methods` (`id`, `name`, `images`, `code`, `keterangan`, `tipe`, `created_at`, `updated_at`) VALUES
(50, 'OVO', '/assets/thumbnail/OVO.webp', 'OVO', 'Konfirmasi Manual', 'qris', '2023-02-07 09:33:53', '2023-05-08 10:33:01'),
(43, 'CIMB Niaga Virtual Account', '/assets/thumbnail/cimbva.webp', 'CIMBVA', 'Proses Otomatis', 'virtual-account', '2023-02-07 09:18:54', '2023-02-25 12:59:55'),
(44, 'BNI Virtual Account', '/assets/thumbnail/bni.webp', 'BNIVA', 'Proses Otomatis', 'virtual-account', '2023-02-07 09:19:54', '2023-02-25 13:00:05'),
(45, 'ALFAMART', '/assets/thumbnail/alfamart.webp', 'ALFAMART', 'Proses Otomatis', 'convenience-store', '2023-02-07 09:21:07', '2023-02-25 13:00:17'),
(46, 'INDOMARET', '/assets/thumbnail/indomaret.webp', 'INDOMARET', 'Proses Otomatis', 'convenience-store', '2023-02-07 09:21:46', '2023-02-25 13:00:26'),
(51, 'QRIS', '/assets/thumbnail/Screenshot (87)-3dfa.png', 'QRIS', 'Proses Otomatis', 'qris', '2023-03-06 06:59:32', '2023-03-30 18:42:30'),
(52, 'GOPAY', '/assets/thumbnail/Logo GoPay (PNG-480p) - FileVector69.png', 'GOPAY', 'Konfirmasi Manual', 'qris', '2023-03-16 21:11:36', '2023-05-08 10:32:57'),
(54, 'QRIS 2', '/assets/thumbnail/1620711373-WhatsApp Image 2021-05-10 at 5.webp', 'QRIS2', 'Di cek otomatis', 'qris', '2023-03-30 18:43:18', '2023-03-30 18:43:18'),
(55, 'ShopeePay', '/assets/thumbnail/gsi shopee-81028.png', 'SHOPEEPAY', 'Di cek otomatis', 'e-walet', '2023-03-30 18:45:05', '2023-03-30 18:45:05'),
(56, 'Alfamidi', '/assets/thumbnail/alfamidi-11096.png', 'ALFAMIDI', 'Di cek otomatis', 'convenience-store', '2023-03-30 18:47:05', '2023-03-30 18:47:05'),
(57, 'Sampoerna Virtual Account', '/assets/thumbnail/sampoerna-c2f1.png', 'SAMPOERNAVA', 'Di cek otomatis', 'virtual-account', '2023-03-30 18:49:41', '2023-03-30 18:53:11'),
(58, 'Muamalat Virtual Account', '/assets/thumbnail/muamalat-3711.png', 'MUAMALATVA', 'Di cek otomatis', 'virtual-account', '2023-03-30 18:50:39', '2023-03-30 18:50:39'),
(59, 'Sinarmas Virtual Account', '/assets/thumbnail/sinarmas-c108b.png', 'SMSVA', 'Di cek otomatis', 'virtual-account', '2023-03-30 18:52:01', '2023-03-30 18:52:01'),
(60, 'Mandiri Virtual Account', '/assets/thumbnail/mandiri-410a10.png', 'MANDIRIVA', 'Di cek otomatis', 'virtual-account', '2023-03-30 18:52:28', '2023-03-30 18:52:28'),
(61, 'BRI Virtual Account', '/assets/thumbnail/bri-0dd9.png', 'BRIVA', 'Di cek otomatis', 'virtual-account', '2023-03-30 18:53:36', '2023-03-30 18:53:36'),
(62, 'Permata Virtual Account', '/assets/thumbnail/permata-94d10.png', 'PERMATAVA', 'Di cek otomatis', 'virtual-account', '2023-03-30 18:54:26', '2023-03-30 18:54:26'),
(63, 'Maybank Virtual Account', '/assets/thumbnail/maybank-3043.png', 'MYBVA', 'Di cek otomatis', 'virtual-account', '2023-03-30 18:55:00', '2023-03-30 18:55:00'),
(64, 'BSI Virtual Account', '/assets/thumbnail/bsi-min-7108.png', 'BSIVA', 'Di cek otomatis', 'virtual-account', '2023-03-30 18:55:39', '2023-03-30 18:55:39'),
(65, 'BCA Virtual Account', '/assets/thumbnail/bca-5e57.png', 'BCAVA', 'Proses Otomatis', 'virtual-account', '2023-03-30 18:57:37', '2023-03-30 18:57:37'),
(66, 'DANA', '/assets/thumbnail/dana-418f.png', 'QRIS2', 'Di cek otomatis', 'e-walet', '2023-03-30 19:03:06', '2023-03-30 19:04:09'),
(67, 'LinkAja', '/assets/thumbnail/linkaja-min-3919.png', 'QRIS2', 'Di cek otomatis', 'e-walet', '2023-03-30 19:03:41', '2023-03-30 19:04:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_26_082220_create_kategoris_table', 1),
(6, '2022_01_26_102949_create_layanans_table', 1),
(11, '2022_01_29_111105_create_pembelians_table', 2),
(12, '2022_01_29_111703_create_pembayarans_table', 2),
(13, '2022_02_01_152716_create_ovos_table', 3),
(14, '2022_02_01_152824_create_history__ovos_table', 3),
(15, '2022_02_01_155618_create_gojeks_table', 4),
(16, '2022_02_01_155927_create_history__gojeks_table', 4),
(17, '2022_02_02_081840_create_methode_pembayarans_table', 5),
(18, '2022_02_02_084003_create_beritas_table', 6),
(19, '2022_04_08_133307_create_layanan_ppobs_table', 7),
(20, '2022_04_27_141044_create_deposits_table', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ovos`
--

CREATE TABLE `ovos` (
  `id` bigint UNSIGNED NOT NULL,
  `RefId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UpdateAccessToken` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AuthToken` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayarans`
--

CREATE TABLE `pembayarans` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_pembayaran` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_pembeli` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelians`
--

CREATE TABLE `pembelians` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nickname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `layanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int NOT NULL,
  `profit` int NOT NULL,
  `provider_order_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `log` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipe_transaksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'game',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting_webs`
--

CREATE TABLE `setting_webs` (
  `id` bigint UNSIGNED NOT NULL,
  `judul_web` text NOT NULL,
  `deskripsi_web` text NOT NULL,
  `logo_header` text,
  `logo_footer` text,
  `logo_favicon` text,
  `url_wa` text NOT NULL,
  `url_ig` text NOT NULL,
  `url_tiktok` text NOT NULL,
  `url_youtube` text NOT NULL,
  `url_fb` text NOT NULL,
  `topupindo_api` text NOT NULL,
  `warna1` text NOT NULL,
  `warna2` text NOT NULL,
  `warna3` text NOT NULL,
  `warna4` text NOT NULL,
  `tripay_api` text,
  `tripay_merchant_code` text,
  `tripay_private_key` text,
  `username_digi` text,
  `api_key_digi` text,
  `apigames_secret` text,
  `apigames_merchant` text,
  `vip_apiid` text,
  `vip_apikey` text,
  `nomor_admin` text,
  `wa_key` text,
  `wa_number` text,
  `ovo_admin` text,
  `ovo1_admin` text,
  `gopay_admin` text,
  `gopay1_admin` text,
  `dana_admin` text,
  `shopeepay_admin` text,
  `bca_admin` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `setting_webs`
--

INSERT INTO `setting_webs` (`id`, `judul_web`, `deskripsi_web`, `logo_header`, `logo_footer`, `logo_favicon`, `url_wa`, `url_ig`, `url_tiktok`, `url_youtube`, `url_fb`, `topupindo_api`, `warna1`, `warna2`, `warna3`, `warna4`, `tripay_api`, `tripay_merchant_code`, `tripay_private_key`, `username_digi`, `api_key_digi`, `apigames_secret`, `apigames_merchant`, `vip_apiid`, `vip_apikey`, `nomor_admin`, `wa_key`, `wa_number`, `ovo_admin`, `ovo1_admin`, `gopay_admin`, `gopay1_admin`, `dana_admin`, `shopeepay_admin`, `bca_admin`, `created_at`, `updated_at`) VALUES
(1, 'Becraft Topup', 'Top Up Games, Voucher & PPOB Online 24 Jam', '/assets/logo/logoo.png', '/assets/logo/logoo.png', '/assets/logo/pack_icon.png', 'https://wa.me/6281390898046', 'https://instagram.com/kodenstore', 'https://tiktok.com', 'https://youtube.com/', 'https://facebook.com/', '-', '#141414', '#141414', '#212121', '#E7E7E7', NULL, NULL, NULL, NULL, NULL, '-', '-', '-', '-', NULL, NULL, NULL, '-', '-', '-', '-', '-', '-', '-', '2025-01-21 14:04:58', '2025-01-21 14:04:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_wa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `balance` bigint NOT NULL,
  `role` enum('Admin','Member','Gold','Platinum') COLLATE utf8mb4_unicode_ci NOT NULL,
  `otp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `no_wa`, `balance`, `role`, `otp`, `created_at`, `updated_at`) VALUES
(1, 'Becraft Topup', 'becraft', '$2y$10$NCw2mRkdak.Nl4ggx8anMuJb6IHSQmy0j0xbmDRChYldUfyOQX4yy', '6281390898046', 0, 'Admin', NULL, '2025-01-21 12:31:51', '2025-01-21 12:31:57'),
(3, 'Becraft indo', 'becraftindo', '$2y$10$EMFNx4yzdksTkYrDDJNo1uy2w/Vin5Vyv6.96DTMqF87X3LpuFoWy', '628139628986246', 0, 'Member', NULL, '2025-01-21 14:02:02', '2025-01-21 14:02:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vouchers`
--

CREATE TABLE `vouchers` (
  `id` int NOT NULL,
  `kode` varchar(255) NOT NULL,
  `promo` int NOT NULL,
  `stock` int NOT NULL,
  `max_potongan` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `vouchers`
--

INSERT INTO `vouchers` (`id`, `kode`, `promo`, `stock`, `max_potongan`, `created_at`, `updated_at`) VALUES
(1, 'honor-of-kings', 1, 1, 1000, '2025-01-20 11:56:45', '2025-01-20 11:56:45');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_joki`
--
ALTER TABLE `data_joki`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `gojeks`
--
ALTER TABLE `gojeks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `history__gojeks`
--
ALTER TABLE `history__gojeks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `history__ovos`
--
ALTER TABLE `history__ovos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `layanans`
--
ALTER TABLE `layanans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `layanan_ppobs`
--
ALTER TABLE `layanan_ppobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `methods`
--
ALTER TABLE `methods`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ovos`
--
ALTER TABLE `ovos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembayarans`
--
ALTER TABLE `pembayarans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembelians`
--
ALTER TABLE `pembelians`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `setting_webs`
--
ALTER TABLE `setting_webs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `vouchers`
--
ALTER TABLE `vouchers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT untuk tabel `data_joki`
--
ALTER TABLE `data_joki`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gojeks`
--
ALTER TABLE `gojeks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `history__gojeks`
--
ALTER TABLE `history__gojeks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `history__ovos`
--
ALTER TABLE `history__ovos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8530;

--
-- AUTO_INCREMENT untuk tabel `layanans`
--
ALTER TABLE `layanans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2055;

--
-- AUTO_INCREMENT untuk tabel `layanan_ppobs`
--
ALTER TABLE `layanan_ppobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `methods`
--
ALTER TABLE `methods`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `ovos`
--
ALTER TABLE `ovos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pembayarans`
--
ALTER TABLE `pembayarans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pembelians`
--
ALTER TABLE `pembelians`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `setting_webs`
--
ALTER TABLE `setting_webs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `vouchers`
--
ALTER TABLE `vouchers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
