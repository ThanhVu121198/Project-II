-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 23, 2022 lúc 06:51 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Cơ sở dữ liệu: `proniadb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs_comments`
--

CREATE TABLE `blogs_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `buy_price` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `quantity`, `buy_price`, `customer_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 45, 3, NULL, NULL),
(2, 2, 1, 50, 3, NULL, NULL),
(3, 1, 1, 45, 4, NULL, NULL),
(4, 1, 1, 45, 5, NULL, NULL),
(5, 1, 1, 45, 6, NULL, NULL),
(6, 1, 1, 45, 7, NULL, NULL),
(7, 1, 1, 45, 8, NULL, NULL),
(8, 1, 1, 45, 9, NULL, NULL),
(9, 1, 1, 45, 10, NULL, NULL),
(10, 1, 1, 45, 11, NULL, NULL),
(11, 1, 1, 45, 12, NULL, NULL),
(12, 2, 1, 50, 12, NULL, NULL),
(13, 1, 2, 45, 13, NULL, NULL),
(14, 6, 1, 45, 14, NULL, NULL),
(15, 1, 1, 45, 15, NULL, NULL),
(16, 2, 5, 50, 15, NULL, NULL),
(17, 5, 1, 30, 15, NULL, NULL),
(18, 8, 1, 30, 19, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mess` text COLLATE utf8_unicode_ci NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checkout-mess` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `company_name`, `address`, `town`, `phone`, `email`, `checkout-mess`, `status`, `updated_at`, `created_at`) VALUES
(1, 'Duc Hung', 'Nguyen', 'Dai hoc cong nghiep  Ha Noi', 'HaNoi', 'HaNoi', '0365109267', 'hnguyenduchung014@gmail.com', 'dcsdcs', NULL, '2022-06-19 20:07:50', '2022-06-19 20:07:50'),
(3, 'Duc Hung', 'Nguyen', 'Dai hoc cong nghiep  Ha Noi', 'HaNoi', 'HaNoi', '0365109267', 'hnguyenduchung014@gmail.com', 'dcsdcs', NULL, '2022-06-19 20:09:03', '2022-06-19 20:09:03'),
(4, 'Duc Hung', 'Nguyen', 'Dai hoc cong nghiep  Ha Noi', 'America', 'HaNoi', '0365109267', 'hnguyenduchung014@gmail.com', 'axsdc', NULL, '2022-06-19 20:12:32', '2022-06-19 20:12:32'),
(5, 'Duc Hung', 'Nguyen', 'Dai hoc cong nghiep  Ha Noi', 'HaNoi', 'HaNoi', '0365109267', 'hnguyenduchung014@gmail.com', 'ghjg', NULL, '2022-06-19 20:52:50', '2022-06-19 20:52:50'),
(6, 'Duc Hung', 'Nguyen', 'Dai hoc cong nghiep  Ha Noi', 'HaNoi', 'HaNoi', '0365109267', 'hnguyenduchung014@gmail.com', 'fhg', NULL, '2022-06-19 20:54:51', '2022-06-19 20:54:51'),
(7, 'Duc Hung', 'Nguyen', 'Dai hoc cong nghiep  Ha Noi', 'HaNoi', 'HaNoi', '0365109267', 'hnguyenduchung014@gmail.com', 'hfgh', NULL, '2022-06-19 21:00:45', '2022-06-19 21:00:45'),
(8, 'Duc Hung', 'Nguyen', 'Dai hoc cong nghiep  Ha Noi', 'HaNoi', 'HaNoi', '0365109267', 'hnguyenduchung014@gmail.com', 'jhkhjkh', NULL, '2022-06-19 21:06:46', '2022-06-19 21:06:46'),
(9, 'Duc Hung', 'Nguyen', 'Dai hoc cong nghiep  Ha Noi', 'HaNoi', 'HaNoi', '0365109267', 'hnguyenduchung014@gmail.com', 'ertet', NULL, '2022-06-19 21:09:33', '2022-06-19 21:09:33'),
(10, 'Duc Hung', 'Nguyen', 'Dai hoc cong nghiep  Ha Noi', 'HaNoi', 'HaNoi', '0365109267', 'hnguyenduchung014@gmail.com', 'weqwe', NULL, '2022-06-19 21:11:29', '2022-06-19 21:11:29'),
(11, 'Duc Hung', 'Nguyen', 'Dai hoc cong nghiep  Ha Noi', 'HaNoi', 'HaNoi', '0365109267', 'hnguyenduchung014@gmail.com', 'sdfs', NULL, '2022-06-19 21:14:13', '2022-06-19 21:14:13'),
(12, 'Duc Hung1', 'Nguyen', 'Dai hoc cong nghiep  Ha Noi', 'HaNoiAmerica', 'HaNoi', '0365109267', 'hnguyenduchung014@gmail.com', 'dhgchjd', NULL, '2022-06-20 06:14:57', '2022-06-20 06:14:57'),
(13, 'Duc Hung', 'Nguyen', 'Dai hoc cong nghiep  Ha Noi', 'HaNoi', 'HaNoi', '0365109267', 'hnguyenduchung014@gmail.com', 'test status', NULL, '2022-06-20 06:27:48', '2022-06-20 06:27:48'),
(14, 'Duc Hung', 'Nguyen', 'Dai hoc cong nghiep  Ha Noi', 'HaNoi', 'HaNoi', '0365109267', 'hnguyenduchung014@gmail.com', 'test status lan 2', 0, '2022-06-20 06:34:09', '2022-06-20 06:34:09'),
(15, 'Duc Hung', 'Nguyen', 'Dai hoc cong nghiep  Ha Noi', 'HaNoi', 'HaNoi', '0365109267', 'hnguyenduchung014@gmail.com', 'zsczcd', 0, '2022-06-21 07:43:59', '2022-06-21 07:43:59'),
(19, 'Vũ', 'Thanh', 'phuong chi', '12', '11', '0358054499', 'thanhvdth2103023@fpt.edu.vn', 'fvfvfvfv', 0, '2022-06-22 20:23:41', '2022-06-22 20:23:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_24_085410_create_orders_table', 1),
(6, '2022_05_24_091136_create_order_details__table', 1),
(7, '2022_05_25_071117_create_products__table', 1),
(8, '2022_05_25_142856_create_products_categories_table', 1),
(9, '2022_05_25_143200_create_product_images_table', 1),
(10, '2022_05_25_143533_create_product_details_table', 1),
(11, '2022_05_25_144512_create_product_comments_table', 1),
(12, '2022_05_25_145845_create_blogs_table', 1),
(13, '2022_05_25_150554_create_blogs_comments_table', 1),
(14, '2022_05_25_151539_create_shopping_cart_table', 1),
(16, '2022_05_25_152549_create_payment_details_table', 1),
(17, '2022_05_25_152844_create_admin_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payment_details`
--

CREATE TABLE `payment_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double NOT NULL,
  `qty` int(11) NOT NULL,
  `discount` double DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` tinyint(1) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `best_seller` int(10) DEFAULT NULL,
  `latest` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `product_category_id`, `name`, `description`, `content`, `price`, `qty`, `discount`, `weight`, `sku`, `tag`, `featured`, `status`, `created_at`, `updated_at`, `best_seller`, `latest`) VALUES
(1, 1, 'Betel nut milk', 'Hanging potted betel nut tree is often used to decorate cafes, small skylights, rooftop trusses, office decoration, etc. The color of the betel leaves looks fancy, the shape of the tree is very suitable for hanging pots.', NULL, 45, 50, 13, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 0),
(2, 1, 'Wan Loc Tree', 'Help purify the air, absorb pathogens, suitable for desks, restaurant decoration', NULL, 50, 50, 13, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 0),
(3, 1, 'Phat Loc', 'Phat fortune in feng shui is a tree that brings good luck and happiness for your family. In addition, Phat Loc tree is also known as Pha Filter tree, Truc Phat Loc .. The popular bonsai is used in the office and home decoration.', NULL, 33, 12, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(4, 1, 'Mau Don', 'The peony tree belongs to the trees for miraculous flowers. This is not only a tree that symbolizes wealth, prosperity and beauty, but it also symbolizes happy life.', NULL, 30, 14, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(5, 1, 'La Burn', 'Burns or burns of burns are called life plants (two -part nomenclature: Kalanto Pinnata, SYN. ​​Bryophyllum Calycinum, Bryophyllum Pinnatum) is a native tree of Madagascar. According to Oriental medicine, the burning leaves have a light taste, slightly sour, cool, non -toxic, have the effect of eliminating inflammation, pain relief, poisoning, helping the wound quickly on the skin ... Many regions of Asia, Pacific and Caribbean.', NULL, 30, 22, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL),
(6, 2, 'Kim Phat Tai', 'This is a wooden orchid (a talented or fragrant tree) is a woody bonsai, many leaves originating from West Africa, a family of Dracaenaceae. The unique feature of this tree is that when crossed, young shoots will grow more around the cut.', NULL, 45, 50, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL),
(7, 2, 'Hong Mon', 'Hong Mon is a perennial tree, often grows in dust and has very healthy vitality. Petulin is cylindrical, height from 30 - 60 cm. Large leaves and dark green heart shape, young leaves will be lighter color spread throughout the bush. Hong Mon tree flowering all year round, the flowers of the tree grow in a long cluster and attached on the flower trailer. Flower mo is usually pink, red and heart -shaped.', NULL, 35, 50, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL),
(8, 2, 'Tiger tree', 'With another name tiger tongue, also known as tiger tongue and tiger, its scientific name Sansevieria trifasciata, belongs to the asparagus family, has a height of 50 to 60cm.', NULL, 30, 50, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL),
(9, 2, 'Set of Mulan', 'Mulan tree (talented or fragrant tree) is a woody bonsai, many leaves originating from West Africa, belonging to the Dracaenaceae family. The unique feature of this tree is that when crossed, young shoots will grow more around the cut.', NULL, 63, 50, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(10, 2, 'Kim Tien', 'Kim Tien Kim, also known as a needle, is a meaningful tree that brings fortune and good luck if you know how to plant, take care and place the money properly. In this article, KHBVPTr will share how to take care of the money to grow well with less pests and bring fortune, luck to the family, the meaning of feng shui and how to grow this favorite bonsai.', NULL, 45, 34, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL),
(11, 2, 'Phu Quy Singapore', 'The rich tree also has the English name Agraonema Red, which is an easy -to -grow and developed tree. It can live in both soil and water environments. In the form of shrubs, spreading spreads very quickly, can propagate by separating the dust.', NULL, 35, 50, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(12, 2, 'Mold chrysanthemum', 'This is a very suitable tree to make ornamental garden decoration very well. Unique trees to decorate the living space more vivid and more beautiful.', NULL, 30, 0, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(13, 2, 'Dai Phu Gia', 'As the name implies the rich or rich, rich and rich tree. Dai Phu Gia tree is a shade tree, cool climate, suitable for growing indoors, offices, lobby ...', NULL, 63, 50, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(14, 2, 'Van Loc', 'Help purify the air, absorb pathogenic substances, suitable for desks, decorate the shop', NULL, 30, 50, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(15, 2, 'Happy tree', 'Happiness tree has a scientific name of Radermachera Sinica, of Heteropanax. They are derived from subtropical regions in southern China ...', NULL, 35, 50, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(16, 3, 'Minii brush', 'Bringing peace and protection: large brush canopy, pointed leaves that imply the meaning of protection. Bringing durability: The intense vitality of mini ornamental palm plants', NULL, 45, 50, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(17, 3, 'Jackfruit Taiwan', 'Taiwanese jackfruit trees are new ornamental plants shaped like the fruit trees of our country. But this bonsai grows slowly, and gives you green space.', NULL, 63, 42, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(18, 3, 'Prince on a white horse', 'The prince or white horse tree has a scientific name Agraonema pseudobreatum. This tree is derived from Asian countries, often growing in dust. In nature, the tree can be about 1m5 tall, white stems, white veins. The prince\'s white horse used in decoration and garden design is usually only 40cm average.', NULL, 20, 44, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(19, 3, 'Nhat Huong Huong', 'Nhat Mat Huong is a beautiful, small ornamental tree that many people love to plant decoration. Not only has many useful effects but also means symbolizing luck and fortune. Find out detailed information about the characteristics, meaning, how to plant and care for the most incense tree in the article below!', NULL, 26, 43, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, 0),
(20, 3, 'Ngoc Ngan', 'Ngoc Ngan tree, also known as Valentine tree, has the name of the French name Dieffenbachia Picta, belongs to the rodium, originating in the tropical American America, Central America, Brazil, ... and in Southeast Asia, the tree is grown in many China, Vietnam, ...', NULL, 30, 34, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, 0),
(21, 3, 'Japanese embankment', 'Japanese embankments have the meaning of their talent. Therefore, Japanese embankments put on the desk, indoors contributing to bringing wealth to homeowners. The office green tree is very popular.', NULL, 63, 16, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, 0),
(22, 3, 'She takes jackfruit leaves', 'According to the five elements, the best ornamental plants in the South or South are the best - where there is a lot of light shining on. The better light and temperature conditions make the color of the leaves more bright. You can place the tree in the position such as: entrance, apartment, office area, ...', NULL, 33, 0, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, 0),
(23, 3, 'Florida Beauty Alba', 'Japanese embankments have the meaning of their talent. Therefore, Japanese embankments put on the desk, indoors contributing to bringing wealth to homeowners. The office green tree is very popular.', NULL, 35, 42, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(24, 3, 'Da Ngoc Minh Chau', 'Ngoc Minh Chau is not only a beautiful ornamental tree but also a feng shui tree with a very profound meaning. The type of flower is a symbol of fortune, luck', NULL, 33, 34, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, 0),
(25, 3, 'Betel lady climbing column\r\n\r\n\r\n', 'Betel tree, also known as Ba Vang betel nut or perennial, climbed by many people playing aquatic plants thanks to the ability to purify the air, bringing feng shui fortune. Betel is an easy -to -grow ornamental tree variety, does not need to spend too much care and have many types. It can be mentioned that the betel nuts she often meets such as the betel nut tree, the betel nut, the red king, the green king, recently appeared the betel of her betel.', NULL, 26, 50, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(26, 4, 'Bach Thuy Tien', 'Bach Thuy Tien belongs to aquatic plants with good feng shui meaning, so it is not only popular but also becomes a delicate gift given.', NULL, 46, 50, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, 0),
(27, 4, 'Van Loc grows water', 'Walk of aquaticians (scientific name: Aglaonema Rotundum Pink) has a fast growth rate, easy to care for, suitable for interior decoration, office, symbolizing luck, full energy and carrying the prosperity, full for homeowners ...', NULL, 33, 50, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(28, 4, 'Kim Ngan', 'In the name Kim Ngan, \"Ngan\" means Ngan Luong and money, so the honeysuckle is often associated with luck, wishing to be rich in life. The English name of the tree is Pachira Money Tree also related to money. The scientific name is Parachi Aquatica. Kim Ngan is said to originate from Central - South America.', NULL, 20, 34, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(29, 4, 'Emperor', 'Among the popular feng shui trees today, it is impossible not to mention the emperor. In this article, Duc Khang Furniture (DKF) will send you information about: origin, characteristics, effects, how to care, ... this tree. Especially the age and destiny with the Great Emperor.', NULL, 63, 50, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(30, 4, 'Thanh Tam', 'Among the popular feng shui trees today, it is impossible not to mention the emperor. In this article, Duc Khang Furniture (DKF) will send you information about: origin, characteristics, effects, how to care, ... this tree. Especially the age and destiny with the Great Emperor.', NULL, 20, 12, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, 0, NULL),
(31, 4, 'Trau Ba Emperor Vuong', 'Betel of the Emperor is a tree with a scientific name Philodendron. This is a suitable species to decorate in interior design, especially for luck in money and power for the host family. The betel nut tree is native to Solomon Island. This plant has two main colors: blue and red', NULL, 35, 16, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(32, 4, 'Van Nien Thanh', 'The perpetual tree is a favorite ornamental tree thanks to the ability to filter good air and bring good luck to the family. Besides, the tree also has many other benefits such as medicinal plants and feng shui plants for the family.', NULL, 33, 0, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, 0, NULL),
(33, 4, 'Tongue tree', 'Cat tongue is a small size bonsai. When mature trees can only reach 10cm to 15cm. Therefore, they are very suitable for desktops, decoration ...', NULL, 33, 50, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(34, 4, 'Hong Mon', 'Hong Mon is a perennial tree, often grows in dust and has very healthy vitality. Petulin is cylindrical, height from 30 - 60 cm. Large leaves and heart shaped ..', NULL, 45, 14, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(35, 4, 'Co Dong Tien', 'Have you ever heard this name? It sounds strange, right? In fact, the coin tree is another name of that coin plants that you probably feel more familiar. Currently, the plants and plants are the most popular interior tree, the young people because of the beautiful, fancy tree design and especially it looks cute.', NULL, 63, 42, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, 0, NULL),
(36, 5, 'Phalaenopsis orchids', 'According to Oriental Feng Shui, Phalaenopsis orchids represent the luck, fortune, elegance and prosperity. As for European countries, Phalaenopsis orchids are considered a symbol of intense love. In addition, Phalaenopsis also represents the beauty of a woman, towards perfection and charm.', NULL, 30, 50, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(37, 5, 'Phalaenopsis orchids (Kq.lhd.044)', 'According to Oriental Feng Shui, Phalaenopsis orchids represent the luck, fortune, elegance and prosperity. As for European countries, Phalaenopsis orchids are considered a symbol of intense love. In addition, Phalaenopsis also represents the beauty of a woman, towards perfection and charm.', NULL, 35, 43, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(38, 5, 'Phalaenopsis orchids (Kq.lhd.039)', 'According to Oriental Feng Shui, Phalaenopsis orchids represent the luck, fortune, elegance and prosperity. As for European countries, Phalaenopsis orchids are considered a symbol of intense love. In addition, Phalaenopsis also represents the beauty of a woman, towards perfection and charm.', NULL, 45, 50, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(39, 5, 'Phalaenopsis orchids (Kq.lhd.037)', 'According to Oriental Feng Shui, Phalaenopsis orchids represent the luck, fortune, elegance and prosperity. As for European countries, Phalaenopsis orchids are considered a symbol of intense love. In addition, Phalaenopsis also represents the beauty of a woman, towards perfection and charm.', NULL, 26, 50, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, 0, NULL),
(40, 5, 'Phalaenopsis orchids (Kq.lhd.033)', 'According to Oriental Feng Shui, Phalaenopsis orchids represent the luck, fortune, elegance and prosperity. As for European countries, Phalaenopsis orchids are considered a symbol of intense love. In addition, Phalaenopsis also represents the beauty of a woman, towards perfection and charm.', NULL, 45, 14, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, 0, NULL),
(41, 5, 'Phalaenopsis orchids (Kq.lhd.032)', 'According to Oriental Feng Shui, Phalaenopsis orchids represent the luck, fortune, elegance and prosperity. As for European countries, Phalaenopsis orchids are considered a symbol of intense love. In addition, Phalaenopsis also represents the beauty of a woman, towards perfection and charm.', NULL, 26, 50, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(42, 5, 'Phalaenopsis orchids (KQ.LHD.031)', 'According to Oriental Feng Shui, Phalaenopsis orchids represent the luck, fortune, elegance and prosperity. As for European countries, Phalaenopsis orchids are considered a symbol of intense love. In addition, Phalaenopsis also represents the beauty of a woman, towards perfection and charm.', NULL, 41, 50, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, 0, NULL),
(43, 5, 'Phalaenopsis orchids (Kq.lhd.038)', 'According to Oriental Feng Shui, Phalaenopsis orchids represent the luck, fortune, elegance and prosperity. As for European countries, Phalaenopsis orchids are considered a symbol of intense love. In addition, Phalaenopsis also represents the beauty of a woman, towards perfection and charm.', NULL, 63, 48, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(44, 5, 'Phalaenopsis orchids (Kq.lhd.036)', 'According to Oriental Feng Shui, Phalaenopsis orchids represent the luck, fortune, elegance and prosperity. As for European countries, Phalaenopsis orchids are considered a symbol of intense love. In addition, Phalaenopsis also represents the beauty of a woman, towards perfection and charm.', NULL, 59, 50, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(45, 5, 'Phalaenopsis orchids (Kq.lhd.043)', 'According to Oriental Feng Shui, Phalaenopsis orchids represent the luck, fortune, elegance and prosperity. As for European countries, Phalaenopsis orchids are considered a symbol of intense love. In addition, Phalaenopsis also represents the beauty of a woman, towards perfection and charm.', NULL, 35, 50, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(46, 6, 'Women\'s hair tree', 'Air purification', NULL, 45, 34, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(47, 6, 'Sam flower tree, ten o\'clock', 'This tree is easy to grow, easy to take care of and can withstand external influences. The tree has a small shape, grown in pots and grows well without having to take much care.', NULL, 26, 16, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(48, 6, 'Dollar', 'This tree has nothing special. However, the tree also has simple and elegant beauty. This tree means feng shui to bring wealth and wealth to the homeowner.', NULL, 45, 44, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, 0, NULL),
(49, 6, 'Bamboo tree', 'This tree usually appears in townhouses but can also be used for balconies to have good feng shui as well as good meanings.', NULL, 63, 42, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, 0, NULL),
(50, 6, 'Kale', 'The tree has long canopy and many small leaves, the green stems are very solid but also quite supple. Trees can live well in the outdoor environment and are easy to take care of, without much fertilization. However, people need to trim the branches to avoid long -standing trees.', NULL, 0, 14, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(51, 6, 'Japanese palm tree', 'This is a woody tree, grows into dust, leaves spread into a fan shape. The tree grows slowly but grows well in many different environments. The tree is easy to take care of and withstand good heat, living well in outdoor lighting environments.', NULL, 33, 43, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(52, 6, 'Aloe', 'This plant is grown on the apartment balcony, not only beauty but also with many benefits such as beauty, clean food for good use. Planting this type of tree does not need much effort to take care of, the tree is easy to live.', NULL, 33, 12, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL),
(53, 6, 'Ivy', 'The ivy tree is also a favorite ornamental tree for many people. This plant only needs a little water to grow strongly. The tree can have long foliage quickly so people can trim the tree more compact and beautify the space.', NULL, 35, 16, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(54, 6, 'Fern', 'The tree has been existed for many years in the rocky mountains, tropical forests, where wet can grow well. This is a vines, with rolls, very beautiful comb, easy to live, so many people prefer to grow on their balconies, in addition to ferns also have the ability to filter dust very well Also create beautiful landscapes with cool green water', NULL, 20, 44, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(55, 6, 'Coconut flower', 'There is flowers all year round, withstand sunshine, harsh wind', NULL, 35, 48, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(56, 7, 'Rose', 'Roses are a popular tree ever because of their beautiful petals. Roses are often grown in the West but today they are bred many types of colorful roses are widely grown in Vietnam.', NULL, 30, 34, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(57, 7, 'Cotton tree', 'The cotton tree has many different colors such as red pages, pink pages, yellow pages, white pages they are planted to make landscapes or create a beautiful flower fence', NULL, 63, 16, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(58, 7, 'Paper flowers', 'Paper flower plants are easy to grow, drought well and flower all year round. Paper flowers are diverse in type as well as color. There are 2 common types of confetti: climbing body and column body, climbing body is often used to grow fences, make climbing trusses ,. .. The body of the column is usually grown as a flowerpot decoration of park, garden, ...', NULL, 45, 44, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(59, 7, 'Huynh Lien tree', 'Hanh Lien is a flowering tree all year round, easy to care for, yellow flowers and wipe. Trees are often used in the garden of villas, parks ...', NULL, 35, 16, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(60, 7, 'Morality tree ', 'Mai lady is a small white flower tree, flowering all year round, they grow into clusters and are trimmed into circles, cylinders, ...', NULL, 20, 0, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(61, 7, 'Hibiscus', 'As a popular plant today, they have been bred into many different types and have very large and colorful flowers.', NULL, 26, 43, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(62, 7, 'Banana tree', 'Banana tree is a colorful plant with colorful flowers often grown near the lake, pond bank, ...', NULL, 20, 44, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(63, 7, 'Thien Dieu flower tree', 'Thien Dieu flower tree, also known as the beak, is very water -like banana tree.', NULL, 33, 42, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(64, 7, 'Jasmine', 'Laurel is a small woody tree, white and fragrant flowers are very pleasant.', NULL, 20, 12, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(65, 7, 'Laurel', 'The jasmine tree is a tree with a faint white and fragrant flower. Western jasmine can live well in the shade but will at least flowers than in the sun.', NULL, 26, 43, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(66, 7, 'Lan Y', 'Lan Y is a shade -loving tree, they have white flowers and wipe away. Orchids are often planted in places that hide in sunlight, can be planted as a beautiful flower bed.', NULL, 46, 22, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(67, 7, 'Coconut flower shallow', 'Coconut is a tree grown in the parks and garden today, they are easy to grow and give flowers all year round, shallow coconut flowers have many different colorful colors.', NULL, 26, 43, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(68, 7, 'Portulaca grandiflora', 'There are many types of flowers such as: ten hours, ten o\'clock, ten hours, ... They have many diverse colors and are often grown into a carpet to create a beautiful carpet or grown as a highlight for small landscape, ...', NULL, 45, 14, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(69, 7, 'Cam Tu Mai', 'Cam Tu is a small shrub with purple flowers and year round. Cam Tu is often used to decorate the garden landscape, garden walkway. Sam Tu is often used to decorate the garden landscape, garden walkway. Cam Tu is easy to take care of as well as easy to grow.', NULL, 33, 16, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(70, 7, 'Tiger tree', 'Also known as the tiger tongue, it stands out with the ability to live intensely, heat resistance, drought tolerance, and harsh tolerance. The color of the tiger tongue is also quite impressive with the yellow border on the outside, the inside is dark green. In addition to decoration purposes, tiger tongue can also be used as acne medicine, hemostasis, coughing up blood, difficulty urinating, poor digestion ...', NULL, 33, 0, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(71, 7, 'Her betel tree', 'Her betel tree belongs to the vines family with soft stems, easy to live, without too much care. Her betel leaf has a pretty heart shape. In particular, betel nuts bring quite large health benefits: absorbing toxins in the air and electromagnetic waves such as computers, wifi, induction cookers ... This tree grows fast, good green leaves, so it makes sense Feng shui helps to multiply, convenient about the children and bring prosperous fortune.', NULL, 33, 16, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(72, 7, 'Cam Tu Mai', 'The plants are green all year round, with purple pink flowers quite eye -catching. This tree is easy to grow, easy to care for and often used to make borders for the garden.', NULL, 30, 12, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(73, 7, 'Purple', 'Purple afternoon tree is a light -loving tree, often used to make borders for flower beds, under large trees. This tree helps the garden more colorful, cool, faithful and attached. In particular, purple afternoon trees have the effect of preventing dust, filtering air, helping to protect the fresh living space for the family.', NULL, 63, 43, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(74, 7, 'Barringtonia acutangula', 'This is a woody tree, wide but not too high, blooming in the summer, red flowers and very beautiful. The tree grows and produces green leaves all year round, has good drought tolerance, does not need to take care of or water, fertilize too much. A few years ago, sesame buds belong to the hot bonsai group with the price of up to hundreds of millions if the tree was beautiful.', NULL, 66, 49, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(75, 7, 'Purple', 'Purple afternoon tree is a light -loving tree, often used to make borders for flower beds, under large trees. This tree helps the garden more colorful, cool, faithful and attached. In particular, purple afternoon trees have the effect of preventing dust, filtering air, helping to protect the fresh living space for the family.', NULL, 45, 50, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(76, 7, 'Barringtonia acutangula', 'This is a woody tree, wide but not too high, blooming in the summer, red flowers and very beautiful. The tree grows and produces green leaves all year round, has good drought tolerance, does not need to take care of or water, fertilize too much. A few years ago, sesame buds belong to the hot bonsai group with the price of up to hundreds of millions if the tree was beautiful.', NULL, 63, 50, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products_categories`
--

CREATE TABLE `products_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products_categories`
--

INSERT INTO `products_categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Desktop Bonsai', 0, NULL, NULL),
(2, 'Feng Shui Tree', 0, NULL, NULL),
(3, 'Office Tree', 0, NULL, NULL),
(4, 'Hydroponic Plants', 0, NULL, NULL),
(5, 'Lan Ho Diep', 0, NULL, NULL),
(6, 'Balcony Tree', 0, NULL, NULL),
(7, 'Outdoor flowers', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_comments`
--

CREATE TABLE `product_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_comments`
--

INSERT INTO `product_comments` (`id`, `product_id`, `user_id`, `email`, `name`, `messages`, `rating`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Thanhvu121198@gmail.com', 'Vu Duc Thanh', 'Nice!!!', 5, NULL, NULL),
(2, 1, 2, 'Quanganh1234@gmail.com', 'Le Quang Anh', 'Very Good:3', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `path`, `created_at`, `updated_at`) VALUES
(1, 1, 'small-size\\cay-trau-ba-sua.jpg', NULL, NULL),
(2, 1, 'small-size\\cay-trau-ba-sua-2.jpg', NULL, NULL),
(3, 1, 'small-size\\cay-trau-ba-sua-3.jpg', NULL, NULL),
(4, 2, 'small-size\\cay-van-loc.jpg', NULL, NULL),
(5, 2, 'small-size\\cay-van-loc-2.jpg', NULL, NULL),
(6, 2, 'small-size\\cay-van-loc-3.jpg', NULL, NULL),
(7, 3, 'small-size\\cay-phat-loc.jpg', NULL, NULL),
(8, 3, 'small-size\\cay-phat-loc-2.jpg', NULL, NULL),
(9, 3, 'small-size\\cay-phat-loc-3.jpg', NULL, NULL),
(10, 4, 'small-size\\cay-mau-don.jpg', NULL, NULL),
(11, 4, 'small-size\\cay-mau-don-2.jpg', NULL, NULL),
(12, 4, 'small-size\\cay-mau-don-3.jpg', NULL, NULL),
(13, 5, 'small-size\\cay-la-bong.jpg', NULL, NULL),
(14, 5, 'small-size\\cay-la-bong-2.jpg', NULL, NULL),
(15, 5, 'small-size\\cay-la-bong-3.jpg', NULL, NULL),
(16, 6, 'small-size\\cay-thiet-moc-lan.jpg', NULL, NULL),
(17, 6, 'small-size\\cay-thiet-moc-lan-2.jpg', NULL, NULL),
(18, 6, 'small-size\\cay-thiet-moc-lan-3.jpg', NULL, NULL),
(19, 7, 'small-size\\cay-kim-phat-tai.jpg', NULL, NULL),
(20, 7, 'small-size\\cay-kim-phat-tai-2.jpg', NULL, NULL),
(21, 7, 'small-size\\cay-kim-phat-tai-3.jpg', NULL, NULL),
(22, 8, 'small-size\\cay-hong-mon.jpg', NULL, NULL),
(23, 8, 'small-size\\cay-hong-mon-2.jpg', NULL, NULL),
(24, 8, 'small-size\\cay-hong-mon-3.jpg', NULL, NULL),
(25, 3, 'small-size\\cay-trau-ba-leo-cot.jpg', NULL, NULL),
(26, 9, 'small-size\\cay-luoi-ho.jpg', NULL, NULL),
(27, 9, 'small-size\\cay-luoi-ho-2.jpg', NULL, NULL),
(28, 9, 'small-size\\cay-luoi-ho-3.jpg', NULL, NULL),
(29, 10, 'small-size\\cay-thiet-moc-lan.jpg', NULL, NULL),
(30, 10, 'small-size\\cay-thiet-moc-lan-2.jpg', NULL, NULL),
(31, 10, 'small-size\\cay-thiet-moc-lan-3.jpg', NULL, NULL),
(32, 11, 'small-size\\cay-kim-tien.jpg', NULL, NULL),
(33, 11, 'small-size\\Cay-kim-tien-2.jpg', NULL, NULL),
(34, 11, 'small-size\\Cay-kim-tien-3.jpg', NULL, NULL),
(35, 12, 'small-size\\cay-phu-quy-singapore.png', NULL, NULL),
(36, 12, 'small-size\\cay-phu-quy-singapore-2.jpg', NULL, NULL),
(37, 12, 'small-size\\cay-phu-quy-singapore-3.jpg', NULL, NULL),
(38, 13, 'small-size\\cay-cuc-moc.jpg', NULL, NULL),
(39, 13, 'small-size\\cay-cuc-moc-2.jpg', NULL, NULL),
(40, 13, 'small-size\\cay-cuc-moc-2.jpg', NULL, NULL),
(41, 14, 'small-size\\cay-dai-phu-gia.jpg', NULL, NULL),
(42, 14, 'small-size\\cay-dai-phu-gia-2.jpg', NULL, NULL),
(43, 14, 'small-size\\cay-dai-phu-gia-3.jpg', NULL, NULL),
(44, 15, 'small-size\\cay-van-loc.jpg', NULL, NULL),
(45, 15, 'small-size\\cay-van-loc-2.jpg', NULL, NULL),
(46, 15, 'small-size\\cay-van-loc-3.jpg', NULL, NULL),
(47, 16, 'small-size\\cay-hanh-phuc.jpg', NULL, NULL),
(48, 16, 'small-size\\cay-hanh-phuc-2.jpg', NULL, NULL),
(49, 16, 'small-size\\cay-hanh-phuc-3.jpg', NULL, NULL),
(50, 17, 'small-size\\cay-co-mini.jpg', NULL, NULL),
(51, 17, 'small-size\\cay-co-mini-2.jpg', NULL, NULL),
(52, 17, 'small-size\\cay-co-mini-3.jpg', NULL, NULL),
(53, 18, 'small-size\\cay-mit-canh-dai-loan-2.jpg', NULL, NULL),
(54, 18, 'small-size\\cay-mit-canh-dai-loan-3.jpg', NULL, NULL),
(55, 18, 'small-size\\cay-mit-canh-dai-loan.jpg', NULL, NULL),
(56, 19, 'small-size\\cay-bach-ma-hoang-tu.jpg', NULL, NULL),
(57, 19, 'small-size\\cay-bach-ma-hoang-tu-3.jpg', NULL, NULL),
(58, 19, 'small-size\\cay-bach-ma-hoang-tu-2.jpg', NULL, NULL),
(59, 20, 'small-size\\cay-nhat-mat-huong.jpg', NULL, NULL),
(60, 20, 'small-size\\cay-nhat-mat-huong-2.jpg', NULL, NULL),
(61, 20, 'small-size\\cay-nhat-mat-huong-3.jpg', NULL, NULL),
(62, 21, 'small-size\\cay-ngoc-ngan.jpg', NULL, NULL),
(63, 21, 'small-size\\cay-ngoc-ngan-2.jpg', NULL, NULL),
(64, 21, 'small-size\\cay-ngoc-ngan-3.jpg', NULL, NULL),
(65, 22, 'small-size\\cay ke nhat.jpg', NULL, NULL),
(66, 22, 'small-size\\cay-ke-nhat-2.jpg', NULL, NULL),
(67, 22, 'small-size\\cay-ke-nhat-3.jpg', NULL, NULL),
(68, 23, 'small-size\\Cô-Tòng-Lá-Mít.jpg', NULL, NULL),
(69, 23, 'small-size\\cay-co-tong-la-mit-2.jpg', NULL, NULL),
(70, 23, 'small-size\\cay-co-tong-la-mit-3.jpg', NULL, NULL),
(71, 24, 'small-size\\cây Florida beauty Alba.jpg', NULL, NULL),
(72, 24, 'small-size\\cay-Florida-beauty-Alba-2.jpg', NULL, NULL),
(73, 24, 'small-size\\cay-Florida-beauty-Alba-3.jpg', NULL, NULL),
(74, 25, 'small-size\\cay-da-ngoc-minh-chau-.jpg', NULL, NULL),
(75, 25, 'small-size\\cay-da-ngoc-minh-chau-2.jpg', NULL, NULL),
(76, 25, 'small-size\\cay-da-ngoc-minh-chau-3.jpg', NULL, NULL),
(77, 26, 'small-size\\cay-trau-ba-leo-cot.jpg', NULL, NULL),
(78, 26, 'small-size\\cay-trau-ba-leo-cot-2.jpg', '0000-00-00 00:00:00', NULL),
(79, 26, 'small-size\\cay-trau-ba-leo-cot-3.jpg', NULL, NULL),
(80, 27, 'small-size\\cay-bach-thuy-tien.jpg', NULL, NULL),
(81, 27, 'small-size\\cay-bach-thuy-tien-2.jpg', NULL, NULL),
(82, 27, 'small-size\\cay-bach-thuy-tien-3.jpg', NULL, NULL),
(83, 28, 'small-size\\vạn-lộc-thủy-sinh.jpg', NULL, NULL),
(84, 28, 'small-size\\cay-van-loc-thuy-sinh-2.jpg', NULL, NULL),
(85, 28, 'small-size\\cay-van-loc-thuy-sinh-3.jpg', NULL, NULL),
(86, 29, 'small-size\\cay-kim-ngan.jpg', NULL, NULL),
(87, 29, 'small-size\\cay-kim-ngan-2.jpg', NULL, NULL),
(88, 29, 'small-size\\cay-kim-ngan-3.jpg', NULL, NULL),
(89, 30, 'small-size\\cay-luoi-meo.jpg', NULL, NULL),
(90, 30, 'small-size\\cay-luoi-meo-2.jpg', NULL, NULL),
(91, 30, 'small-size\\cay-luoi-meo-3.jpg', NULL, NULL),
(92, 31, 'small-size\\cay-dai-de.jpg', NULL, NULL),
(93, 31, 'small-size\\cay-dai-de-2.jpg', NULL, NULL),
(94, 31, 'small-size\\cay-dai-de-3.jpg', NULL, NULL),
(95, 35, 'small-size\\cay-hong-mon.jpg', NULL, NULL),
(96, 35, 'small-size\\cay-hong-mon-2.jpg', NULL, NULL),
(97, 35, 'small-size\\cay-hong-mon-3.jpg', NULL, NULL),
(98, 32, 'small-size\\cay-thanh-tam.jpg', NULL, NULL),
(99, 32, 'small-size\\cay-thanh-tam-2.jpg', NULL, NULL),
(100, 32, 'small-size\\cay-thanh-tam-3.jpg', NULL, NULL),
(101, 38, 'small-size\\cay-co-dong-tien.jpg', NULL, NULL),
(102, 38, 'small-size\\cay-co-dong-tien-2.jpg', NULL, NULL),
(103, 38, 'small-size\\cay-co-dong-tien-3.jpg', NULL, NULL),
(104, 33, 'small-size\\cay-trau-ba-de-vuong.jpg', NULL, NULL),
(105, 33, 'small-size\\cay-trau-ba-de-vuong-2.jpg', NULL, NULL),
(106, 33, 'small-size\\cay-trau-ba-de-vuong-3.jpg', NULL, NULL),
(107, 39, 'small-sizecay-hoa-lan-ho-diep-1.jpg', NULL, NULL),
(108, 39, 'small-size\\cay-hoa-lan-ho-diep-1.2.jpg', NULL, NULL),
(109, 39, 'small-size\\cay-hoa-lan-ho-diep-1.3.jpg', NULL, NULL),
(110, 34, 'small-size\\cay-van-nien-thanh.jpg', NULL, NULL),
(111, 34, 'small-size\\cay-van-nien-thanh-2.jpg', NULL, NULL),
(112, 34, 'small-size\\cay-van-nien-thanh-3.jpg', NULL, NULL),
(113, 40, 'small-size\\cay-hoa-lan-ho-diep-2.jpg', NULL, NULL),
(114, 40, 'small-size\\cay-hoa-lan-ho-diep-2.2.jpg', NULL, NULL),
(115, 40, 'small-size\\cay-hoa-lan-ho-diep-2.3.jpg', NULL, NULL),
(116, 41, 'small-size\\cay-hoa-lan-ho-diep-3.jpg', NULL, NULL),
(117, 41, 'small-size\\cay-hoa-lan-ho-diep-3.2.jpg', NULL, NULL),
(118, 41, 'small-size\\cay-hoa-lan-ho-diep-3.3.jpg', NULL, NULL),
(119, 42, 'small-size\\cay-hoa-lan-ho-diep-5.jpg', NULL, NULL),
(120, 42, 'small-size\\cay-hoa-lan-ho-diep-5.2.jpg', NULL, NULL),
(121, 42, 'small-size\\cay-hoa-lan-ho-diep-5.3.jpg', NULL, NULL),
(122, 43, 'small-size\\cay-hoa-lan-ho-diep-6.jpg', NULL, NULL),
(123, 43, 'small-size\\cay-hoa-lan-ho-diep-6.2.jpg', NULL, NULL),
(124, 43, 'small-size\\cay-hoa-lan-ho-diep-6.3.jpg', NULL, NULL),
(125, 44, 'small-size\\cay-hoa-lan-ho-diep-7.jpg', NULL, NULL),
(126, 44, 'small-size\\cay-hoa-lan-ho-diep-7.2.jpg', NULL, NULL),
(127, 44, 'small-size\\cay-hoa-lan-ho-diep-7.3.jpg', NULL, NULL),
(128, 45, 'small-size\\cay-hoa-lan-ho-diep-8.jpg', NULL, NULL),
(129, 45, 'small-size\\cay-hoa-lan-ho-diep-8.2.jpg', NULL, NULL),
(130, 45, 'small-size\\cay-hoa-lan-ho-diep-8.2.jpg', NULL, NULL),
(131, 46, 'small-size\\cay-hoa-lan-ho-diep-9.jpg', NULL, NULL),
(132, 46, 'small-size\\cay-hoa-lan-ho-diep-9.2.jpg', NULL, NULL),
(133, 46, 'small-size\\cay-hoa-lan-ho-diep-9.2.jpg', NULL, NULL),
(134, 47, 'small-size\\cay-hoa-lan-ho-diep-10.jpg', NULL, NULL),
(135, 47, 'small-size\\cay-hoa-lan-ho-diep-10.2.jpg', NULL, NULL),
(136, 47, 'small-size\\cay-hoa-lan-ho-diep-10.3.jpg', NULL, NULL),
(137, 48, 'small-size\\cay-toc-than-ve-nu.jpg', NULL, NULL),
(138, 48, 'small-size\\cay-toc-than-ve-nu-2.jpg', NULL, NULL),
(139, 48, 'small-size\\cay-toc-than-ve-nu-3.jpg', NULL, NULL),
(140, 49, 'small-size\\cay-hoa-sam.jpg', NULL, NULL),
(141, 49, 'small-size\\cay-hoa-sam-2.jpg', NULL, NULL),
(142, 49, 'small-size\\cay-hoa-sam-3.jpg', NULL, NULL),
(143, 50, 'small-size\\cay-do-la.jpg', NULL, NULL),
(144, 50, 'small-size\\cay-do-la-2.jpg', NULL, NULL),
(145, 50, 'small-size\\cay-do-la-3.jpg', NULL, NULL),
(146, 51, 'small-size\\cay-truc-quan-tu-.jpg', NULL, NULL),
(147, 51, 'small-size\\cay-truc-quan-tu-2.jpg', NULL, NULL),
(148, 51, 'small-size\\cay-truc-quan-tu-3.jpg', NULL, NULL),
(149, 52, 'small-size\\cay-van-tue.jpg', NULL, NULL),
(150, 52, 'small-size\\cay-van-tue-2.jpg', NULL, NULL),
(151, 52, 'small-size\\cay-van-tue-3.jpg', NULL, NULL),
(152, 36, 'small-size\\cay-co-nhat.jpg', NULL, NULL),
(153, 36, 'small-size\\cay-co-nhat-2.jpg', NULL, NULL),
(154, 36, 'small-size\\cay-co-nhat-3.jpg', NULL, NULL),
(155, 37, 'small-size\\cay-lo-hoi.jpg', NULL, NULL),
(156, 37, 'small-size\\cay-lo-hoi-2.jpg', NULL, NULL),
(157, 37, 'small-size\\cay-lo-hoi-3.jpg', NULL, NULL),
(158, 53, 'small-size\\cay-thuong-xuan.jpg', NULL, NULL),
(159, 53, 'small-size\\cay-thuong-xuan-2.jpg', NULL, NULL),
(160, 53, 'small-size\\cay-thuong-xuan-3.jpg', NULL, NULL),
(161, 54, 'small-size\\cay-duong-xi.jpg', NULL, NULL),
(162, 54, 'small-size\\cay-duong-xi-2.jpg', NULL, NULL),
(163, 54, 'small-size\\cay-duong-xi-3.jpg', NULL, NULL),
(164, 55, 'small-size\\cây-hoa-dừa-cạn.jpg', NULL, NULL),
(165, 55, 'small-size\\cay-hoa-dua-can-2.jpg', NULL, NULL),
(166, 55, 'small-size\\cay-hoa-dua-can-3.jpg', NULL, NULL),
(167, 57, 'small-size\\cay-bong-trang.jpg', NULL, NULL),
(168, 57, 'small-size\\cay-bong-trang-2.jpg', NULL, NULL),
(169, 57, 'small-size\\cay-bong-trang-3.jpg', NULL, NULL),
(170, 56, 'small-size\\cay-hoa-hong.jpg', NULL, NULL),
(171, 56, 'small-size\\cay-hoa-hong-2.jpg', NULL, NULL),
(172, 56, 'small-size\\cay-hoa-hong-3.jpg', NULL, NULL),
(173, 58, 'small-size\\cay-hoa-giay.jpg', NULL, NULL),
(174, 58, 'small-size\\cay-hoa-giay-2.jpg', NULL, NULL),
(175, 58, 'small-size\\cay-hoa-giay-3.jpg', NULL, NULL),
(176, 59, 'small-size\\cay-huynh-lien.jpg', NULL, NULL),
(177, 59, 'small-size\\cay-huynh-lien-2.jpg', NULL, NULL),
(178, 59, 'small-size\\cay-huynh-lien-3.jpg', NULL, NULL),
(179, 60, 'small-size\\cay-mai-tieu-thu.jpg', NULL, NULL),
(180, 60, 'small-size\\cay-mai-tieu-thu-2.jpg', NULL, NULL),
(181, 60, 'small-size\\cay-mai-tieu-thu-3.jpg', NULL, NULL),
(182, 61, 'small-size\\cay-ram-but.jpg', NULL, NULL),
(183, 61, 'small-size\\cay-ram-but-2.jpg', NULL, NULL),
(184, 61, 'small-size\\cay-ram-but-3.jpg', NULL, NULL),
(185, 62, 'small-size\\cay-chuoi-hoa.jpg', NULL, NULL),
(186, 62, 'small-size\\cay-chuoi-hoa-2.jpg', NULL, NULL),
(187, 62, 'small-size\\cay-chuoi-hoa-3.jpg', NULL, NULL),
(188, 63, 'small-size\\cay-hoa-thien-dieu-3.jpg', NULL, NULL),
(189, 63, 'small-size\\cay-hoa-thien-dieu-2.jpg', NULL, NULL),
(190, 63, 'small-size\\cay-hoa-thien-dieu.jpg', NULL, NULL),
(191, 64, 'small-size\\cay-lai-tay-3.jpg  ', NULL, NULL),
(192, 64, 'small-size\\cay-lai-tay.jpg', NULL, NULL),
(193, 64, 'small-size\\cay-lai-tay-2.jpg', NULL, NULL),
(194, 65, 'small-size\\cay-nguyet-que-3.jpg', NULL, NULL),
(195, 65, 'small-size\\cay-nguyet-que-2.jpg', NULL, NULL),
(196, 65, 'small-size\\cay-nguyet-que.jpg', NULL, NULL),
(197, 66, 'small-size\\cay-lai-tay.jpg', NULL, NULL),
(198, 66, 'small-size\\cay-lai-tay-2.jpg', NULL, NULL),
(199, 66, 'small-size\\cay-lai-tay-3.jpg', NULL, NULL),
(200, 67, 'small-size\\cay-lan-y-3.jpg', NULL, NULL),
(201, 67, 'small-size\\cay-lan-y-2.jpg', NULL, NULL),
(202, 67, 'small-size\\cay-lan-y.jpg', NULL, NULL),
(203, 68, 'small-size\\cây-hoa-dừa-cạn.jpg', NULL, NULL),
(204, 68, 'small-size\\cây-hoa-dừa-cạn-2.jpg', NULL, NULL),
(205, 68, 'small-size\\cây-hoa-dừa-cạn-3.jpg', NULL, NULL),
(206, 69, 'small-size\\cay-hoa-muoi-gio.jpg', NULL, NULL),
(207, 69, 'small-size\\cay-hoa-muoi-gio-2.jpg', NULL, NULL),
(208, 69, 'small-size\\cay-hoa-muoi-gio-3.jpg', NULL, NULL),
(209, 70, 'small-size\\cay-hoa-cam-tu-mai-3.jpg', NULL, NULL),
(210, 70, 'small-size\\cay-hoa-cam-tu-mai-2.jpg', NULL, NULL),
(211, 70, 'small-size\\cay-hoa-cam-tu-mai.jpg', NULL, NULL),
(212, 71, 'small-size\\cay-luoi-ho.jpg', NULL, NULL),
(213, 71, 'small-size\\cay-luoi-ho-2.jpg', NULL, NULL),
(214, 71, 'small-size\\cay-luoi-ho-3.jpg', NULL, NULL),
(215, 72, 'small-size\\cay-trau-ba-3.jpg', NULL, NULL),
(216, 72, 'small-size\\cay-trau-ba.jpg', NULL, NULL),
(217, 72, 'small-size\\cay-trau-ba-2.jpg', NULL, NULL),
(218, 73, 'small-size\\cay-hoa-cam-tu-3.jpg', NULL, NULL),
(219, 73, 'small-size\\cay-hoa-cam-tu-2.jpg', NULL, NULL),
(220, 73, 'small-size\\cay-hoa-cam-tu.jpg', NULL, NULL),
(221, 74, 'small-size\\cay-chieu-tim.jpg', NULL, NULL),
(222, 74, 'small-size\\cay-chieu-tim-2.jpg', NULL, NULL),
(223, 74, 'small-size\\cay-chieu-tim-3.jpg', NULL, NULL),
(224, 75, 'small-size\\cay-loc-vung.jpg', NULL, NULL),
(225, 75, 'small-size\\cay-loc-vung-2.jpg', NULL, NULL),
(226, 75, 'small-size\\cay-loc-vung-3.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shopping_cart_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` tinyint(4) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `shopping_cart_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `avatar`, `level`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Vu Duc Thanh', 'Thanhvu121198@gmail.com', NULL, 'thanh121198', NULL, 'Thanh', 0, NULL, 0, NULL, NULL),
(2, 2, 'Le Quang Anh', 'Quanganh1234@gmail.com', NULL, '$2y$10$hm64mD40sVuf90D5vBUXiuXgAP20JvyB79QYd8d0OHQCRdxYISEmu', NULL, 'Quanganh', 1, NULL, 0, NULL, NULL),
(3, 0, 'Thanh', 'thanh1211@gmail.com', NULL, '$2y$10$g2Sw/exAMjZqV94gLEnog.0iESS6o5BggAryDa7eN51lOQEvgNZpe', NULL, 'z3332598289948_4e131761e783798217fd3254e5846fd9.jpg', 1, 'êfef', 0, '2022-06-22 01:19:06', '2022-06-22 01:19:06');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `blogs_comments`
--
ALTER TABLE `blogs_comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products_categories`
--
ALTER TABLE `products_categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_comments`
--
ALTER TABLE `product_comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `blogs_comments`
--
ALTER TABLE `blogs_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT cho bảng `products_categories`
--
ALTER TABLE `products_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `product_comments`
--
ALTER TABLE `product_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=227;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);
COMMIT;
