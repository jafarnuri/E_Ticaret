-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Hazırlanma Vaxtı: 23 Fev, 2023 saat 21:47
-- Server versiyası: 10.4.27-MariaDB
-- PHP Versiyası: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Verilənlər Bazası: `eticaret`
--

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `ayarlar`
--

CREATE TABLE `ayarlar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ayar_title` varchar(255) NOT NULL,
  `ayar_resim` varchar(255) NOT NULL,
  `ayar_logo` varchar(255) NOT NULL,
  `ayar_description` varchar(255) NOT NULL,
  `ayar_keyword` varchar(255) NOT NULL,
  `ayar_author` varchar(255) NOT NULL,
  `ayar_analystic` varchar(255) NOT NULL,
  `ayar_zopim` varchar(255) NOT NULL,
  `ayar_maps` varchar(255) NOT NULL,
  `ayar_tel` varchar(255) NOT NULL,
  `ayar_gsm` varchar(255) NOT NULL,
  `ayar_faks` varchar(255) NOT NULL,
  `ayar_mail` varchar(255) NOT NULL,
  `ayar_ilce` varchar(255) NOT NULL,
  `ayar_il` varchar(255) NOT NULL,
  `ayar_adres` varchar(255) NOT NULL,
  `ayar_mesai` varchar(255) NOT NULL,
  `ayar_facebook` varchar(255) NOT NULL,
  `ayar_twitter` varchar(255) NOT NULL,
  `ayar_google` varchar(255) NOT NULL,
  `ayar_youtube` varchar(255) NOT NULL,
  `ayar_smtphost` varchar(255) NOT NULL,
  `ayar_smtpuser` varchar(255) NOT NULL,
  `ayar_smtppassword` varchar(255) NOT NULL,
  `ayar_smtpport` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sxemi çıxarılan cedvel `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `ayar_title`, `ayar_resim`, `ayar_logo`, `ayar_description`, `ayar_keyword`, `ayar_author`, `ayar_analystic`, `ayar_zopim`, `ayar_maps`, `ayar_tel`, `ayar_gsm`, `ayar_faks`, `ayar_mail`, `ayar_ilce`, `ayar_il`, `ayar_adres`, `ayar_mesai`, `ayar_facebook`, `ayar_twitter`, `ayar_google`, `ayar_youtube`, `ayar_smtphost`, `ayar_smtpuser`, `ayar_smtppassword`, `ayar_smtpport`, `created_at`, `updated_at`) VALUES
(1, 'BazarAz', '1676295254_63ea3c5618eb6.jpg', '1677004710_63f50fa63a043.png', 'salam', 'drftghjdv', 'ty', 'd', 'bizimle iletisimdx', '+99477549612', '0933197995', '+989010293369f', '+989010293369r', 'jafarnuri1994@gmail.co', 'Azerbaycanxx', 'Celilabadc', 'Celilabad Astanabadt', '7*24 aciq ewe', 'Facebook.com', 'Twitter.com', 'Google.com', 'Youtube.com', 'mail.alanadiniz.co', 'sadfg', 'passworddfg', '555d', NULL, '2023-02-21 14:38:30');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `bank`
--

CREATE TABLE `bank` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banka_ad` varchar(255) NOT NULL,
  `banka_iban` varchar(255) NOT NULL,
  `banka_hesapadsoyad` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sxemi çıxarılan cedvel `bank`
--

INSERT INTO `bank` (`id`, `banka_ad`, `banka_iban`, `banka_hesapadsoyad`, `created_at`, `updated_at`) VALUES
(5, 'jafar', 'Nuri', 'ne var ne yox', '2023-02-03 01:02:18', '2023-02-03 01:02:18'),
(6, 'rftg', 'gfhdsfdghn', 'gfhg', '2023-02-04 09:52:59', '2023-02-04 09:53:25');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `failed_jobs`
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
-- Cədvəl üçün cədvəl strukturu `haqqimizda`
--

CREATE TABLE `haqqimizda` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `haqqimizda_baslik` varchar(255) NOT NULL,
  `haqqimizda_icerik` text NOT NULL,
  `haqqimizda_logo` varchar(255) NOT NULL,
  `haqqimizda_vidio` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sxemi çıxarılan cedvel `haqqimizda`
--

INSERT INTO `haqqimizda` (`id`, `haqqimizda_baslik`, `haqqimizda_icerik`, `haqqimizda_logo`, `haqqimizda_vidio`, `created_at`, `updated_at`) VALUES
(1, 'Bizim haqqda bilmek istediklerniz ffff', 'Portmanat gündəlik ödəmələri rahat həyata keçirmək üçün nəzərdə tutulan elektron pulqabıdır.Portmanat - kompyuter və ya mobil telefon vasitəsilə İnternet ödənişlərinin tez və təhlükəsiz yoludur.Portmanat vasitəsilə mövcud olan ödəmə xidmətləri:  Kommunal ödənişlər - qaz, işıq, su, istilik Mobil operatorlar - Azercell, Bakcell Nar Mobile İnternet provayderlər Kabel TV Onlayn oyunlar, sosial şəbəkələr və s.Portmanat gündəlik mikro ödənişlər üçündür.Şəxsi elektron pul qabı açmaq üçün sadəcə www.portmanat.az saytında mobil telefon nömrəsi ilə qeydiyyatdan keçmək kifayətdir.', '1676402191_63ebde0f48dd3.jpg', 'https://www.youtube.com/watch?v=qAdU0NHANJY', NULL, '2023-02-15 17:24:07');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_ad` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sxemi çıxarılan cedvel `kategori`
--

INSERT INTO `kategori` (`id`, `kategori_ad`, `created_at`, `updated_at`) VALUES
(6, 'Telefon', '2023-02-15 20:40:56', '2023-02-15 20:40:56'),
(7, 'Planshet', '2023-02-15 20:41:44', '2023-02-15 20:41:44'),
(8, 'Kompyuter', '2023-02-15 20:59:02', '2023-02-15 20:59:02');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `kullanici`
--

CREATE TABLE `kullanici` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kullanici_adsoyad` varchar(255) NOT NULL,
  `kullanici_resim` varchar(255) NOT NULL,
  `kullanici_mail` varchar(255) NOT NULL,
  `kullanici_tel` varchar(255) NOT NULL,
  `kullanici_tc` varchar(255) NOT NULL,
  `kullanici_ad` varchar(255) NOT NULL,
  `kullanici_gsm` varchar(255) NOT NULL,
  `kullanici_adres` varchar(255) NOT NULL,
  `kullanici_il` varchar(255) NOT NULL,
  `kullanici_ilce` varchar(255) NOT NULL,
  `kullanici_yetki` varchar(255) NOT NULL,
  `kullanici_password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `menu`
--

CREATE TABLE `menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_ust` varchar(255) NOT NULL,
  `menu_ad` varchar(255) NOT NULL,
  `menu_detay` text NOT NULL,
  `menu_url` varchar(255) NOT NULL,
  `menu_sira` int(11) NOT NULL,
  `menu_seourl` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sxemi çıxarılan cedvel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_29_015242_create_ayarlar', 2),
(6, '2023_01_29_015454_create_haqqimizda', 2),
(7, '2023_01_29_015612_create_kullanici', 2),
(8, '2023_01_29_165226_create_ayarlars_table', 3),
(9, '2023_01_30_092704_create_ayarlar', 4),
(10, '2023_02_01_035942_create_bank', 5),
(11, '2023_02_01_040242_create_urunler', 6),
(12, '2023_02_01_041428_create_urunfoto', 6),
(13, '2023_02_01_041742_create_kategori', 7),
(14, '2023_02_01_042017_create_menu', 8),
(15, '2023_02_01_042305_create_slider', 8),
(16, '2023_02_01_042552_create_yorumlar', 8),
(17, '2023_02_01_043033_create_kullanici', 8),
(18, '2023_02_01_043149_create_ayarlar', 8),
(19, '2023_02_01_043250_create_haqqimizda', 8),
(20, '2023_02_03_060200_create_urunler', 9),
(21, '2023_02_04_143502_create_urunler', 10),
(22, '2023_02_08_192358_create_urun', 11),
(23, '2023_02_13_135740_create_haqqimizda', 12),
(24, '2023_02_14_191358_create_haqqimizda', 13),
(25, '2023_02_14_204539_create_urun', 14),
(26, '2023_02_14_205205_create_urun', 15),
(27, '2023_02_16_000147_create_urun', 16),
(28, '2023_02_16_174523_create_urun', 17),
(29, '2023_02_19_210811_create_user', 18),
(30, '2023_02_21_002111_create_urun', 19);

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `personal_access_tokens`
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
-- Cədvəl üçün cədvəl strukturu `slider`
--

CREATE TABLE `slider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_ad` varchar(255) NOT NULL,
  `slider_resimyol` varchar(255) NOT NULL,
  `slider_sira` int(11) NOT NULL,
  `slider_link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `urun`
--

CREATE TABLE `urun` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategoriad` varchar(255) NOT NULL,
  `urun_ad` varchar(255) NOT NULL,
  `urun_model` varchar(255) NOT NULL,
  `urun_firma` varchar(255) NOT NULL,
  `urun_resm` varchar(255) NOT NULL,
  `urun_detay` text NOT NULL,
  `urun_endirimfyat` double(8,2) NOT NULL,
  `urun_fiyat` double(8,2) NOT NULL,
  `urun_video` varchar(255) NOT NULL,
  `urun_keyword` varchar(255) NOT NULL,
  `urun_stok` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sxemi çıxarılan cedvel `urun`
--

INSERT INTO `urun` (`id`, `kategoriad`, `urun_ad`, `urun_model`, `urun_firma`, `urun_resm`, `urun_detay`, `urun_endirimfyat`, `urun_fiyat`, `urun_video`, `urun_keyword`, `urun_stok`, `created_at`, `updated_at`) VALUES
(1, 'Telefon', 'Samsung', 'A52', 'Samsung', '1676939024_63f40f10884b6.jpg', 'Mısır, binlerce yıldan beri tarımı yapılan birkaç ender bitkiden biridir. Anavatanı Amerika kıtası olup buradan Dünya’nın her yerine yayıldığı bilinmektedir. A.B.D’ nin New Mexico eyaletinde yapılan arkeolojik kazılarda, kayalardan oluşmuş barınaklarda ve mağaralarda bulunan mısır taneleri ve mısır koçanı parçalarının yaklaşık 5000 yıllık oldukları tespit edilmiştir. Öte yandan 1954 yılında, Meksika’nın başkenti Mexico City’ de yapılan arkeolojik kazılarda ise, toprağın 50-60 m derinliğinde, yaklaşık 7000 yıllık olduğu belirlenen mısır çiçek tozlarına rastlanmıştır. Yabani mısır bugüne kadar bulunamadığı için, mısırın orijini ve tarihine ilişkin kesin bir bilgi elde edilememiş, bu konuda çeşitli teoriler üretilmiş ve hepsi de günümüzde hala tartışılmaktadır. Ancak, yapılan tüm arkeolojik kazılardan elde edilen bulgular, mısır bitkisinin 8.000 ile 10.000 yıllık bir geçmişi olduğunu göstermektedir.', 750.00, 699.00, 'https://www.youtube.com/watch?v=ZDCJ0pWC1pA', '------', 3, '2023-02-20 20:23:44', '2023-02-20 20:23:44'),
(2, 'Telefon', 'Huawe', 'Honor8x', 'Huawe', '1676940842_63f4162a894f5.jpg', 'Yeni dünyanın keşfedildiği yıllarda, Amerika kıtasının pek çok bölgesinde mısır tarımı yapılmaktaydı. At dişi mısır, sert mısır, unlu mısır, şeker mısır ve cin mısır türleri o dönemlerde de yetiştirilmekteydi. Özellikle, Meksika’nın yüksek bölgelerinde, Orta Amerika ve Güney Amerika’da yaşayan yerli halkın günlük beslenmesinde kullandığı en önemli bitkiydi. Şu an Meksika’nın olduğu bölgede eski dönemlerde yaşayan Aztekler, pek çok mısır tanrısına tapmışlar ve daha fazla verim için, ayinlerinde insanları bile onlara kurban olarak sunmuşlardır. Kuzey ve Güney Amerika kızıl derililerinin mitolojilerinde, mısır, tanrıların bir armağanı olarak görülürdü. Amerikanın keşfinden sonra, o bölgeye yerleşen İspanyol ve İngiliz yerleşimciler, mısır tarımının nasıl yapılacağını ve mısırın kullanım alanlarını kızıl derili yerli halktan öğrenmişlerdir.', 655.00, 499.00, 'https://www.youtube.com/watch?v=ZDCJ0pWC1pA', '------', 1, '2023-02-20 20:27:10', '2023-02-20 20:54:02'),
(3, 'Telefon', 'Samsung', 'A72', 'Samsung', '1676940858_63f4163a55d9b.jpg', 'Yeni dünyanın keşfedildiği yıllarda, Amerika kıtasının pek çok bölgesinde mısır tarımı yapılmaktaydı. At dişi mısır, sert mısır, unlu mısır, şeker mısır ve cin mısır türleri o dönemlerde de yetiştirilmekteydi. Özellikle, Meksika’nın yüksek bölgelerinde, Orta Amerika ve Güney Amerika’da yaşayan yerli halkın günlük beslenmesinde kullandığı en önemli bitkiydi. Şu an Meksika’nın olduğu bölgede eski dönemlerde yaşayan Aztekler, pek çok mısır tanrısına tapmışlar ve daha fazla verim için, ayinlerinde insanları bile onlara kurban olarak sunmuşlardır. Kuzey ve Güney Amerika kızıl derililerinin mitolojilerinde, mısır, tanrıların bir armağanı olarak görülürdü. Amerikanın keşfinden sonra, o bölgeye yerleşen İspanyol ve İngiliz yerleşimciler, mısır tarımının nasıl yapılacağını ve mısırın kullanım alanlarını kızıl derili yerli halktan öğrenmişlerdir.', 0.00, 850.00, 'https://www.youtube.com/watch?v=ZDCJ0pWC1pA', '------', 1, '2023-02-20 20:28:29', '2023-02-20 20:56:50'),
(4, 'Telefon', 'Huawe', 'S8', 'Huawe', '1676940872_63f41648d2cbd.jpg', 'Yeni dünyanın keşfedildiği yıllarda, Amerika kıtasının pek çok bölgesinde mısır tarımı yapılmaktaydı. At dişi mısır, sert mısır, unlu mısır, şeker mısır ve cin mısır türleri o dönemlerde de yetiştirilmekteydi. Özellikle, Meksika’nın yüksek bölgelerinde, Orta Amerika ve Güney Amerika’da yaşayan yerli halkın günlük beslenmesinde kullandığı en önemli bitkiydi. Şu an Meksika’nın olduğu bölgede eski dönemlerde yaşayan Aztekler, pek çok mısır tanrısına tapmışlar ve daha fazla verim için, ayinlerinde insanları bile onlara kurban olarak sunmuşlardır. Kuzey ve Güney Amerika kızıl derililerinin mitolojilerinde, mısır, tanrıların bir armağanı olarak görülürdü. Amerikanın keşfinden sonra, o bölgeye yerleşen İspanyol ve İngiliz yerleşimciler, mısır tarımının nasıl yapılacağını ve mısırın kullanım alanlarını kızıl derili yerli halktan öğrenmişlerdir.', 1500.00, 1399.00, 'https://www.youtube.com/watch?v=ZDCJ0pWC1pA', '------', 11, '2023-02-20 20:29:34', '2023-02-20 20:57:05'),
(5, 'Kompyuter', 'Aspire 3', 'A315-55G-71BP', 'Acer', '1676939523_63f411030ac7f.jpg', 'Yeni dünyanın keşfedildiği yıllarda, Amerika kıtasının pek çok bölgesinde mısır tarımı yapılmaktaydı. At dişi mısır, sert mısır, unlu mısır, şeker mısır ve cin mısır türleri o dönemlerde de yetiştirilmekteydi. Özellikle, Meksika’nın yüksek bölgelerinde, Orta Amerika ve Güney Amerika’da yaşayan yerli halkın günlük beslenmesinde kullandığı en önemli bitkiydi. Şu an Meksika’nın olduğu bölgede eski dönemlerde yaşayan Aztekler, pek çok mısır tanrısına tapmışlar ve daha fazla verim için, ayinlerinde insanları bile onlara kurban olarak sunmuşlardır. Kuzey ve Güney Amerika kızıl derililerinin mitolojilerinde, mısır, tanrıların bir armağanı olarak görülürdü. Amerikanın keşfinden sonra, o bölgeye yerleşen İspanyol ve İngiliz yerleşimciler, mısır tarımının nasıl yapılacağını ve mısırın kullanım alanlarını kızıl derili yerli halktan öğrenmişlerdir.', 3000.00, 2500.00, 'https://www.youtube.com/watch?v=ZDCJ0pWC1pA', '------', 1, '2023-02-20 20:32:03', '2023-02-20 20:32:03'),
(6, 'Kompyuter', 'Lenova', 'A315-55G-71BP', 'Lenova', '1676940910_63f4166e37f0c.jpg', 'Yeni dünyanın keşfedildiği yıllarda, Amerika kıtasının pek çok bölgesinde mısır tarımı yapılmaktaydı. At dişi mısır, sert mısır, unlu mısır, şeker mısır ve cin mısır türleri o dönemlerde de yetiştirilmekteydi. Özellikle, Meksika’nın yüksek bölgelerinde, Orta Amerika ve Güney Amerika’da yaşayan yerli halkın günlük beslenmesinde kullandığı en önemli bitkiydi. Şu an Meksika’nın olduğu bölgede eski dönemlerde yaşayan Aztekler, pek çok mısır tanrısına tapmışlar ve daha fazla verim için, ayinlerinde insanları bile onlara kurban olarak sunmuşlardır. Kuzey ve Güney Amerika kızıl derililerinin mitolojilerinde, mısır, tanrıların bir armağanı olarak görülürdü. Amerikanın keşfinden sonra, o bölgeye yerleşen İspanyol ve İngiliz yerleşimciler, mısır tarımının nasıl yapılacağını ve mısırın kullanım alanlarını kızıl derili yerli halktan öğrenmişlerdir.', 1500.00, 1399.00, 'https://www.youtube.com/watch?v=ZDCJ0pWC1pA', '------', 1, '2023-02-20 20:34:39', '2023-02-20 20:57:22'),
(7, 'Kompyuter', 'Isus', 'A315-55G-71BP', 'Isus', '1676940924_63f4167cf0212.jpg', 'Yeni dünyanın keşfedildiği yıllarda, Amerika kıtasının pek çok bölgesinde mısır tarımı yapılmaktaydı. At dişi mısır, sert mısır, unlu mısır, şeker mısır ve cin mısır türleri o dönemlerde de yetiştirilmekteydi. Özellikle, Meksika’nın yüksek bölgelerinde, Orta Amerika ve Güney Amerika’da yaşayan yerli halkın günlük beslenmesinde kullandığı en önemli bitkiydi. Şu an Meksika’nın olduğu bölgede eski dönemlerde yaşayan Aztekler, pek çok mısır tanrısına tapmışlar ve daha fazla verim için, ayinlerinde insanları bile onlara kurban olarak sunmuşlardır. Kuzey ve Güney Amerika kızıl derililerinin mitolojilerinde, mısır, tanrıların bir armağanı olarak görülürdü. Amerikanın keşfinden sonra, o bölgeye yerleşen İspanyol ve İngiliz yerleşimciler, mısır tarımının nasıl yapılacağını ve mısırın kullanım alanlarını kızıl derili yerli halktan öğrenmişlerdir.', 2000.00, 1899.00, 'https://www.youtube.com/watch?v=ZDCJ0pWC1pA', '------', 3, '2023-02-20 20:35:39', '2023-02-20 20:57:36'),
(8, 'Kompyuter', 'HP', 'A315-55G-71BP', 'HP', '1676940939_63f4168b294f9.jpg', 'Yeni dünyanın keşfedildiği yıllarda, Amerika kıtasının pek çok bölgesinde mısır tarımı yapılmaktaydı. At dişi mısır, sert mısır, unlu mısır, şeker mısır ve cin mısır türleri o dönemlerde de yetiştirilmekteydi. Özellikle, Meksika’nın yüksek bölgelerinde, Orta Amerika ve Güney Amerika’da yaşayan yerli halkın günlük beslenmesinde kullandığı en önemli bitkiydi. Şu an Meksika’nın olduğu bölgede eski dönemlerde yaşayan Aztekler, pek çok mısır tanrısına tapmışlar ve daha fazla verim için, ayinlerinde insanları bile onlara kurban olarak sunmuşlardır. Kuzey ve Güney Amerika kızıl derililerinin mitolojilerinde, mısır, tanrıların bir armağanı olarak görülürdü. Amerikanın keşfinden sonra, o bölgeye yerleşen İspanyol ve İngiliz yerleşimciler, mısır tarımının nasıl yapılacağını ve mısırın kullanım alanlarını kızıl derili yerli halktan öğrenmişlerdir.', 1300.00, 1250.00, 'https://www.youtube.com/watch?v=ZDCJ0pWC1pA', '------', 1, '2023-02-20 20:36:56', '2023-02-20 21:04:07'),
(9, 'Planshet', 'Samsung', 'S8', 'Samsung', '1676939881_63f41269f3d68.jpg', 'Yeni dünyanın keşfedildiği yıllarda, Amerika kıtasının pek çok bölgesinde mısır tarımı yapılmaktaydı. At dişi mısır, sert mısır, unlu mısır, şeker mısır ve cin mısır türleri o dönemlerde de yetiştirilmekteydi. Özellikle, Meksika’nın yüksek bölgelerinde, Orta Amerika ve Güney Amerika’da yaşayan yerli halkın günlük beslenmesinde kullandığı en önemli bitkiydi. Şu an Meksika’nın olduğu bölgede eski dönemlerde yaşayan Aztekler, pek çok mısır tanrısına tapmışlar ve daha fazla verim için, ayinlerinde insanları bile onlara kurban olarak sunmuşlardır. Kuzey ve Güney Amerika kızıl derililerinin mitolojilerinde, mısır, tanrıların bir armağanı olarak görülürdü. Amerikanın keşfinden sonra, o bölgeye yerleşen İspanyol ve İngiliz yerleşimciler, mısır tarımının nasıl yapılacağını ve mısırın kullanım alanlarını kızıl derili yerli halktan öğrenmişlerdir.', 1000.00, 670.00, 'https://www.youtube.com/watch?v=ZDCJ0pWC1pA', '------', 11, '2023-02-20 20:38:02', '2023-02-20 20:38:02'),
(10, 'Planshet', 'Huawe', 'Tap-S7', 'Huawe', '1676940959_63f4169f3fbb3.jpg', 'Yeni dünyanın keşfedildiği yıllarda, Amerika kıtasının pek çok bölgesinde mısır tarımı yapılmaktaydı. At dişi mısır, sert mısır, unlu mısır, şeker mısır ve cin mısır türleri o dönemlerde de yetiştirilmekteydi. Özellikle, Meksika’nın yüksek bölgelerinde, Orta Amerika ve Güney Amerika’da yaşayan yerli halkın günlük beslenmesinde kullandığı en önemli bitkiydi. Şu an Meksika’nın olduğu bölgede eski dönemlerde yaşayan Aztekler, pek çok mısır tanrısına tapmışlar ve daha fazla verim için, ayinlerinde insanları bile onlara kurban olarak sunmuşlardır. Kuzey ve Güney Amerika kızıl derililerinin mitolojilerinde, mısır, tanrıların bir armağanı olarak görülürdü. Amerikanın keşfinden sonra, o bölgeye yerleşen İspanyol ve İngiliz yerleşimciler, mısır tarımının nasıl yapılacağını ve mısırın kullanım alanlarını kızıl derili yerli halktan öğrenmişlerdir.', 1500.00, 1399.00, 'https://www.youtube.com/watch?v=ZDCJ0pWC1pA', '------', 1, '2023-02-20 20:39:05', '2023-02-20 21:04:52');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `urunfoto`
--

CREATE TABLE `urunfoto` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `urun_id` int(11) NOT NULL,
  `urunfoto_resimyol` varchar(255) NOT NULL,
  `urunfoto_sira` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad` varchar(255) NOT NULL,
  `user_ad` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sxemi çıxarılan cedvel `user`
--

INSERT INTO `user` (`id`, `ad`, `user_ad`, `password`, `email`, `created_at`, `updated_at`) VALUES
(1, 'JAFAR', 'jafarnuri', '$2y$10$bO7lBFLH8HK.5RrdB7UsKuEfparr1OoHdPRncPtfSVBZL58j2oX26', 'jafarnuri1994@gmail.com', '2023-02-19 18:45:21', '2023-02-19 18:45:21'),
(2, 'JAFAR', 'jafarnur', '$2y$10$xI9yZ.ww9KQFqras6lY9Ou3YZJEHCqUogch3nR1PSD56YxE4HDMyq', 'jafarnuri1994@gmail.com', '2023-02-19 22:00:52', '2023-02-19 22:00:52'),
(3, 'JAFAR', 'jafarn', '$2y$10$BoKMhjHzJoEZZhmWGKNcPeHcjgwmf95QoNy1U7VfRjJmKZXL3CKb.', 'jafarnuri1994@gmail.com', '2023-02-19 22:39:28', '2023-02-19 22:39:28'),
(4, 'asef', 'asiiii', '$2y$10$/KGZPLZbVaHv1nm0kxVwo.oH3PwSsezZeUaqF6nyhzI4Am1D.QFI.', 'ayazibrahmov.official@gmail.com', '2023-02-19 23:06:50', '2023-02-19 23:06:50');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `users`
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

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `yorumlar`
--

CREATE TABLE `yorumlar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `yorum_detay` text NOT NULL,
  `yorum_onay` enum('1','0') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Cədvəl üçün indekslər `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Cədvəl üçün indekslər `haqqimizda`
--
ALTER TABLE `haqqimizda`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Cədvəl üçün indekslər `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Cədvəl üçün indekslər `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `urun`
--
ALTER TABLE `urun`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `urunfoto`
--
ALTER TABLE `urunfoto`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_user_ad_unique` (`user_ad`);

--
-- Cədvəl üçün indekslər `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Cədvəl üçün indekslər `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- Cədvəl üçün AUTO_INCREMENT `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Cədvəl üçün AUTO_INCREMENT `bank`
--
ALTER TABLE `bank`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Cədvəl üçün AUTO_INCREMENT `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Cədvəl üçün AUTO_INCREMENT `haqqimizda`
--
ALTER TABLE `haqqimizda`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Cədvəl üçün AUTO_INCREMENT `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Cədvəl üçün AUTO_INCREMENT `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Cədvəl üçün AUTO_INCREMENT `menu`
--
ALTER TABLE `menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Cədvəl üçün AUTO_INCREMENT `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Cədvəl üçün AUTO_INCREMENT `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Cədvəl üçün AUTO_INCREMENT `slider`
--
ALTER TABLE `slider`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Cədvəl üçün AUTO_INCREMENT `urun`
--
ALTER TABLE `urun`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Cədvəl üçün AUTO_INCREMENT `urunfoto`
--
ALTER TABLE `urunfoto`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Cədvəl üçün AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Cədvəl üçün AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Cədvəl üçün AUTO_INCREMENT `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
