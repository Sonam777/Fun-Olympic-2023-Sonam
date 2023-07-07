-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2023 at 08:10 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sonam_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `description`, `image`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(4, 'TV HOST’S HAND IMPALED ON NAIL IN FAILED MAGIC TRICK', 'tv-hosts-hand-impaled-on-nail-in-failed-magic-trick', '<p><span style=\"color: rgba(0, 0, 0, 0.8); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16.2px; letter-spacing: -0.0486px; text-align: justify;\">Lorem ipsum dolor sit amet consectetur adipiscing elit tellus hendrerit, mollis potenti taciti vivamus aptent nullam lectus congue pulvinar, mattis auctor dictum cum facilisi vestibulum euismod id. Augue fermentum est mus a dignissim lacinia maecenas dictumst, dictum ultrices iaculis placerat rutrum vitae libero faucibus hac, proin fusce elementum nostra at lobortis nisi. Nunc sociosqu aliquet per venenatis sociis maecenas magnis non id malesuada, metus senectus laoreet magna posuere eros lectus blandit nibh netus, mollis vel elementum ultricies scelerisque eu ante nisl morbi. Per nibh ligula nostra augue sem facilisi, justo hendrerit sapien nullam maecenas, euismod vehicula pretium tristique porttitor. Urna luctus ultricies facilisi nec ante hac lectus lobortis malesuada posuere, risus dictumst euismod cursus cubilia ornare aliquam hendrerit auctor, eu sodales quis platea tortor orci nisl ut dapibus.</span><br></p>', '1682940984.png', 1, 'on', '2023-05-01 06:40:47', '2023-05-01 05:51:24'),
(5, 'INCREDIBLE CLAIMS COULD SICKLY MAN BE WORST SERIAL KILLER?', 'incredible-claims-could-sickly-man-be-worst-serial-killer', '<div style=\"text-align: justify;\"><span style=\"background-color: var(--bs-card-bg); color: var(--bs-card-color); font-family: var(--bs-body-font-family); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Lorem ipsum dolor sit amet consectetur adipiscing elit primis orci natoque senectus mi, tincidunt himenaeos fusce sodales faucibus lectus libero nullam hac pretium. Porta dignissim porttitor fames tempor ut laoreet ridiculus, facilisi fringilla lacus malesuada curae mauris posuere varius, arcu curabitur donec potenti enim venenatis. Nibh scelerisque ac volutpat lectus nascetur phasellus nec, ad luctus urna a porta vestibulum tortor sociosqu, praesent fusce ridiculus quis montes habitasse. Mus iaculis diam hac class nostra torquent pulvinar ullamcorper curabitur fames sodales, cum neque ultrices lacinia dictumst elementum vestibulum lacus dignissim nisi. Iaculis magna in facilisis tincidunt massa fames tristique parturient, morbi orci fermentum pellentesque arcu dui eleifend, himenaeos cubilia velit curabitur ante molestie lobortis. Commodo sollicitudin diam dignissim primis cras ornare nisl sociis, quam augue aliquet auctor convallis nam duis, aenean gravida taciti ligula ante imperdiet cubilia.</span></div>', '1682940958.png', 1, 'on', '2023-05-01 06:42:52', '2023-05-01 06:10:12'),
(6, 'TV HOST’S HAND IMPALED', 'tv-hosts-hand-impaled', '<div style=\"text-align: justify;\"><span style=\"background-color: var(--bs-card-bg); color: var(--bs-card-color); font-family: var(--bs-body-font-family); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Lorem ipsum dolor sit amet consectetur adipiscing elit integer habitasse at fermentum, risus cursus lacus orci senectus feugiat iaculis ultrices hendrerit eu. Magna sollicitudin malesuada non scelerisque duis dapibus ullamcorper est, netus libero purus cum gravida tempor ante vitae, id nisi vivamus sed lectus risus tristique. Pretium ultricies velit dis nisi porttitor proin hendrerit sapien, volutpat sociosqu taciti conubia viverra mi morbi porta, bibendum orci penatibus luctus nisl quam diam, curae aliquam nunc facilisis faucibus turpis nascetur.</span></div>', '1682942589.png', 1, 'on', '2023-05-01 06:18:09', '2023-05-01 06:18:09'),
(7, 'ONE MORE TIME? FEDERER', 'one-more-time-federer', '<p style=\"text-align: justify; \"><span style=\"font-size: 14.4px;\">Lorem ipsum dolor sit amet consectetur adipiscing elit integer habitasse at fermentum, risus cursus lacus orci senectus feugiat iaculis ultrices hendrerit eu. Magna sollicitudin malesuada non scelerisque duis dapibus ullamcorper est, netus libero purus cum gravida tempor ante vitae, id nisi vivamus sed lectus risus tristique. Pretium ultricies velit dis nisi porttitor proin hendrerit sapien, volutpat sociosqu taciti conubia viverra mi morbi porta, bibendum orci penatibus luctus nisl quam diam, curae aliquam nunc facilisis faucibus turpis nascetur.</span><br></p>', '1682942649.png', 1, 'on', '2023-05-01 06:19:09', '2023-05-01 06:19:09'),
(8, 'FEDERER GOLDEN OPPORTUNITY', 'federer-golden-opportunity', '<p style=\"text-align: justify; \"><span style=\"font-size: 14.4px;\">Lorem ipsum dolor sit amet consectetur adipiscing elit integer habitasse at fermentum, risus cursus lacus orci senectus feugiat iaculis ultrices hendrerit eu. Magna sollicitudin malesuada non scelerisque duis dapibus ullamcorper est, netus libero purus cum gravida tempor ante vitae, id nisi vivamus sed lectus risus tristique. Pretium ultricies velit dis nisi porttitor proin hendrerit sapien, volutpat sociosqu taciti conubia viverra mi morbi porta, bibendum orci penatibus luctus nisl quam diam, curae aliquam nunc facilisis faucibus turpis nascetur.</span><br></p>', '1682942710.png', 1, 'on', '2023-05-01 06:20:10', '2023-05-01 06:20:10'),
(9, 'TV HOST’S HAND IMPALED', 'tv-hosts-hand-impaled', '<p style=\"text-align: justify; \"><span style=\"font-size: 14.4px;\">Lorem ipsum dolor sit amet consectetur adipiscing elit integer habitasse at fermentum, risus cursus lacus orci senectus feugiat iaculis ultrices hendrerit eu. Magna sollicitudin malesuada non scelerisque duis dapibus ullamcorper est, netus libero purus cum gravida tempor ante vitae, id nisi vivamus sed lectus risus tristique. Pretium ultricies velit dis nisi porttitor proin hendrerit sapien, volutpat sociosqu taciti conubia viverra mi morbi porta, bibendum orci penatibus luctus nisl quam diam, curae aliquam nunc facilisis faucibus turpis nascetur.</span><br></p>', '1682942756.png', 1, 'on', '2023-05-01 06:20:56', '2023-05-01 06:20:56');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `comment`, `created_at`, `updated_at`) VALUES
(4, 9, 'hello', '2023-07-07 07:12:21', '2023-07-07 07:12:21'),
(5, 9, 'comment test', '2023-07-07 07:12:29', '2023-07-07 07:12:29'),
(9, 14, 'hello this is test 1', '2023-07-07 10:08:17', '2023-07-07 10:08:17'),
(10, 15, 'hello test 2', '2023-07-07 10:11:38', '2023-07-07 10:11:38');

-- --------------------------------------------------------

--
-- Table structure for table `company_profiles`
--

CREATE TABLE `company_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_email` varchar(255) DEFAULT NULL,
  `company_phone` varchar(255) DEFAULT NULL,
  `company_fax` varchar(255) DEFAULT NULL,
  `company_address` text DEFAULT NULL,
  `logo` varchar(255) NOT NULL,
  `footer_logo` varchar(255) NOT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `footer_text` text DEFAULT NULL,
  `introduction` longtext DEFAULT NULL,
  `vision` longtext DEFAULT NULL,
  `mission` longtext DEFAULT NULL,
  `map` text DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_profiles`
--

INSERT INTO `company_profiles` (`id`, `company_name`, `company_email`, `company_phone`, `company_fax`, `company_address`, `logo`, `footer_logo`, `favicon`, `image`, `footer_text`, `introduction`, `vision`, `mission`, `map`, `facebook`, `instagram`, `twitter`, `youtube`, `meta_title`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(4, 'Fun Olympic Game', 'info@example.com', '+977-9999999999', NULL, 'Yokyo', '1688437449images.jpg', '1688437449images.jpg', '1688437449images.jpg', '1688656780Drones_durante_a_abertura_das_Olimpíadas_de_Tóquio.jpg', 'Lorem ipsum dolor sit amet consectetur, adipiscing elit orci venenatis. At tempor aliquet tortor eleifend class convallis fames, libero primis dui rhoncus lectus montes fringilla curabitur, nunc aptent neque proin est nam.', '<p style=\"margin: 0.5em 0px;\"><font color=\"#202122\" face=\"sans-serif\"><span style=\"font-size: 14px;\">The modern Olympic Games or Olympics (French: Jeux olympiques)[a][1] are the leading international sporting events featuring summer and winter sports competitions in which thousands of athletes from around the world participate in a variety of competitions. The Olympic Games are considered the world\'s foremost sports competition with more than 200 teams, representing sovereign states and territories, participating.[2] The Olympic Games are normally held every four years, and since 1994, have alternated between the Summer and Winter Olympics every two years during the four-year period.</span></font></p><p style=\"margin: 0.5em 0px;\"><font color=\"#202122\" face=\"sans-serif\"><span style=\"font-size: 14px;\"><br></span></font></p><p style=\"margin: 0.5em 0px;\"><font color=\"#202122\" face=\"sans-serif\"><span style=\"font-size: 14px;\">Their creation was inspired by the ancient Olympic Games (Ancient Greek: Ὀλυμπιακοί Ἀγῶνες), held in Olympia, Greece from the 8th century BC to the 4th century AD. Baron Pierre de Coubertin founded the International Olympic Committee (IOC) in 1894, leading to the first modern Games in Athens in 1896. The IOC is the governing body of the Olympic Movement (which encompasses all entities and individuals involved in the Olympic Games) with the Olympic Charter defining its structure and authority.</span></font></p><p style=\"margin: 0.5em 0px;\"><font color=\"#202122\" face=\"sans-serif\"><span style=\"font-size: 14px;\"><br></span></font></p><p style=\"margin: 0.5em 0px;\"><font color=\"#202122\" face=\"sans-serif\"><span style=\"font-size: 14px;\">The evolution of the Olympic Movement during the 20th and 21st centuries has resulted in several changes to the Olympic Games. Some of these adjustments include the creation of the Winter Olympic Games for snow and ice sports, the Paralympic Games for athletes with disabilities, the Youth Olympic Games for athletes aged 14 to 18, the five Continental games (Pan American, African, Asian, European, and Pacific), and the World Games for sports that are not contested in the Olympic Games. The IOC also endorses the Deaflympics and the Special Olympics. The IOC has needed to adapt to a variety of economic, political, and technological advancements. The abuse of amateur rules by the Eastern Bloc nations prompted the IOC to shift away from pure amateurism, as envisioned by Coubertin, to the acceptance of professional athletes participating at the Games. The growing importance of mass media has created the issue of corporate sponsorship and general commercialisation of the Games. World wars led to the cancellation of the 1916, 1940, and 1944 Olympics; large-scale boycotts during the Cold War limited participation in the 1980 and 1984 Olympics;[3] and the 2020 Olympics were postponed until 2021 as a result of the COVID-19 pandemic.</span></font></p><p style=\"margin: 0.5em 0px;\"><font color=\"#202122\" face=\"sans-serif\"><span style=\"font-size: 14px;\"><br></span></font></p><p style=\"margin: 0.5em 0px;\"><font color=\"#202122\" face=\"sans-serif\"><span style=\"font-size: 14px;\">The Olympic Movement consists of international sports federations (IFs), National Olympic Committees (NOCs), and organising committees for each specific Olympic Games. As the decision-making body, the IOC is responsible for choosing the host city for each Games, and organises and funds the Games according to the Olympic Charter. The IOC also determines the Olympic programme, consisting of the sports to be contested at the Games. There are several Olympic rituals and symbols, such as the Olympic flag and torch, as well as the opening and closing ceremonies. Over 14,000 athletes competed at the 2020 Summer Olympics and 2022 Winter Olympics combined, in 40 different sports and 448 events.[4][5] The first-, second-, and third-place finishers in each event receive Olympic medals: gold, silver, and bronze, respectively.</span></font></p><p style=\"margin: 0.5em 0px;\"><font color=\"#202122\" face=\"sans-serif\"><span style=\"font-size: 14px;\"><br></span></font></p><p style=\"margin: 0.5em 0px;\"><font color=\"#202122\" face=\"sans-serif\"><span style=\"font-size: 14px;\">The Games have grown so much that nearly every nation is now represented; colonies and overseas territories are allowed to field their own teams. This growth has created numerous challenges and controversies, including boycotts, doping, bribery, and terrorism. Every two years, the Olympics and its media exposure provide athletes with the chance to attain national and sometimes international fame. The Games also provide an opportunity for the host city and country to showcase themselves to the world.</span></font></p>', '<ul><li style=\"text-align: justify; \">Cras ultricies ligula sed magna dictum porta. Donec rutrum congue leo eget malesuada.</li><li style=\"text-align: justify; \">Cras ultricies ligula sed magna dictum porta. Donec rutrum congue leo eget malesuada.</li><li style=\"text-align: justify; \">Cras ultricies ligula sed magna dictum porta. Donec rutrum congue leo eget malesuada.</li><li style=\"text-align: justify; \">Cras ultricies ligula sed magna dictum porta. Donec rutrum congue leo eget malesuada.</li></ul>', '<div style=\"text-align: justify; \">Proin eget tortor risus. Nulla quis lorem ut libero malesuada feugiat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur aliquet quam id dui posuere blandit. Nulla porttitor accumsan tincidunt.</div><div style=\"text-align: justify; \"><br></div><div style=\"text-align: justify; \">Nulla quis lorem ut libero malesuada feugiat. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Donec rutrum congue leo eget malesuada.</div>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14129.739631285205!2d85.28440833091734!3d27.703855263766055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1975e721ba41%3A0xc4baeeca0944ed69!2sNepal%20Karate%20Association!5e0!3m2!1sen!2snp!4v1683014286927!5m2!1sen!2snp\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.twitter.com', 'https://www.youtube.com/', 'Fun Olympic Game', 'Fun Olympic Game', '[{\"value\":\"fun\"},{\"value\":\"olympic\"},{\"value\":\"games\"}]', '2022-03-12 23:57:31', '2023-07-06 15:19:40');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'on',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'New Website Launching Soon....', '2023-05-01', 'on', '2023-04-30 00:01:12', '2023-04-30 00:37:14'),
(2, 'Karate UFC Cup 2023', '2023-06-30', 'on', '2023-05-02 06:22:13', '2023-05-02 06:22:13'),
(3, 'Nepal Karate Federation Launching New Website', '2023-05-05', 'on', '2023-05-02 06:23:02', '2023-05-02 06:23:02');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'on',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `name`, `slug`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'AFC Karate Cup 2020', 'afc-karate-cup-2020', '1682926525.jpg', 'on', '2023-05-01 01:50:25', '2023-05-07 07:09:01'),
(3, 'Asian Karate Tournament 2023', 'asian-karate-tournament-2023', '1683013530.png', 'on', '2023-05-02 07:45:30', '2023-05-02 07:45:30'),
(4, 'World Tournament 2020', 'world-tournament-2020', '1683013545.png', 'on', '2023-05-02 07:45:45', '2023-05-02 07:45:45');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

CREATE TABLE `gallery_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gallery_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'on',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_images`
--

INSERT INTO `gallery_images` (`id`, `gallery_id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(6, 2, 'f8.jpg', 'on', '2023-05-01 01:50:43', '2023-05-01 01:50:43'),
(7, 2, 'WhatsApp-Image-2023-03-30-at-2.18.22-PM.jpeg', 'on', '2023-05-01 01:50:43', '2023-05-01 01:50:43'),
(8, 2, 'WhatsApp-Image-2023-03-30-at-2.18.22-PM-1.jpeg', 'on', '2023-05-01 01:50:43', '2023-05-01 01:50:43'),
(9, 2, 'WhatsApp-Image-2023-04-06-at-11.25.27-AM.jpeg', 'on', '2023-05-01 01:50:43', '2023-05-01 01:50:43'),
(11, 2, 'WhatsApp-Image-2023-04-06-at-11.25.27-AM-1.jpeg', 'on', '2023-05-01 01:51:15', '2023-05-01 01:51:15');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_videos`
--

CREATE TABLE `gallery_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `main` varchar(255) NOT NULL DEFAULT 'off',
  `status` varchar(255) NOT NULL DEFAULT 'on',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_videos`
--

INSERT INTO `gallery_videos` (`id`, `title`, `link`, `code`, `main`, `status`, `created_at`, `updated_at`) VALUES
(1, 'MUSTANG NEPAL IN 4K | VISIT NEPAL 2020 | NEPAL IN 4K', 'https://www.youtube.com/watch?v=csaQc_qpn8U', 'csaQc_qpn8U', 'off', 'on', '2023-05-03 07:32:12', '2023-05-03 07:48:19'),
(2, 'Olympic Games - World\'s Biggest Sporting Event!', 'https://www.youtube.com/watch?v=QWQIar5RgmU', 'QWQIar5RgmU', 'off', 'on', '2023-05-03 09:13:35', '2023-07-07 09:36:44'),
(4, 'asdfgh', 'https://www.youtube.com/watch?v=NuTmKwkxqwU', 'NuTmKwkxqwU', 'on', 'on', '2023-07-07 09:38:19', '2023-07-07 10:12:17');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_08_18_164334_create_blogs_table', 1),
(7, '2022_08_19_114056_create_advertisemments_table', 2),
(8, '2022_08_18_112449_create_faqs_table', 3),
(9, '2022_08_21_143255_create_sliders_table', 4),
(10, '2022_08_18_132042_create_teams_table', 5),
(11, '2022_08_19_102600_create_testimonials_table', 6),
(12, '2023_03_20_111716_create_permission_tables', 7),
(13, '2022_08_19_160037_create_vacancies_table', 8),
(14, '2023_03_21_080104_create_company_profiles_table', 9),
(15, '2023_04_27_072530_create_pages_table', 10),
(16, '2023_04_27_073010_create_pages_table', 11),
(17, '2023_04_27_072533_create_menus_table', 12),
(18, '2023_04_30_050949_create_events_table', 13),
(19, '2023_04_30_063639_create_players_table', 14),
(20, '2023_04_30_073954_create_matches_table', 15),
(21, '2023_04_30_074938_create_upcomming_matches_table', 16),
(22, '2023_04_30_114105_create_subscriptions_table', 17),
(23, '2023_05_01_053810_create_galleries_table', 18),
(24, '2023_05_01_060617_create_gallery_images_table', 19),
(25, '2023_05_02_141357_create_contacts_table', 20),
(26, '2023_05_03_123529_create_gallery_videos_table', 21),
(27, '2023_05_03_163037_create_streams_table', 22),
(28, '2023_05_04_115812_create_tournaments_table', 23),
(29, '2023_05_04_162912_create_player_participations_table', 24),
(30, '2023_06_28_183409_create_comments_table', 25);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(4, 'App\\Models\\User', 5),
(4, 'App\\Models\\User', 6),
(4, 'App\\Models\\User', 13),
(4, 'App\\Models\\User', 15),
(6, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'on',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `image`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'test', '1682667170.jpg', 'Test', 'on', '2023-04-28 01:47:50', '2023-04-28 01:52:36');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('rabibirbal40@gmail.com', '$2y$10$UhOvycSe9UctTSHLGSm5r.iSyUsnni8OtG/QlyH3ePRVP3sCNdDUG', '2023-06-28 13:22:05');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'edit_own_profile', 'web', '2022-08-04 03:34:28', '2022-08-04 03:34:28'),
(2, 'access_user_management', 'web', '2022-08-04 03:34:28', '2022-08-04 03:34:28'),
(72, 'access_settings', 'web', '2022-08-04 03:34:29', '2022-08-04 03:34:29'),
(94, 'access_sliders', 'web', '2023-03-21 05:28:39', '2023-03-21 05:28:43'),
(95, 'show_sliders', 'web', NULL, NULL),
(96, 'create_sliders', 'web', NULL, NULL),
(97, 'edit_sliders', 'web', NULL, NULL),
(98, 'delete_sliders', 'web', NULL, NULL),
(104, 'access_blogs', 'web', NULL, NULL),
(105, 'show_blogs', 'web', NULL, NULL),
(106, 'create_blogs', 'web', NULL, NULL),
(107, 'edit_blogs', 'web', NULL, NULL),
(108, 'delete_blogs', 'web', NULL, NULL),
(109, 'access_advertisements', 'web', NULL, NULL),
(110, 'show_advertisements', 'web', NULL, NULL),
(111, 'create_advertisements', 'web', NULL, NULL),
(112, 'edit_advertisements', 'web', NULL, NULL),
(113, 'delete_advertisements', 'web', NULL, NULL),
(114, 'access_teams', 'web', NULL, NULL),
(115, 'show_teams', 'web', NULL, NULL),
(116, 'create_teams', 'web', NULL, NULL),
(117, 'edit_teams', 'web', NULL, NULL),
(118, 'delete_teams', 'web', NULL, NULL),
(119, 'access_faqs', 'web', NULL, NULL),
(120, 'show_faqs', 'web', NULL, NULL),
(121, 'create_faqs', 'web', NULL, NULL),
(122, 'edit_faqs', 'web', NULL, NULL),
(123, 'delete_faqs', 'web', NULL, NULL),
(124, 'access_testimonials', 'web', NULL, NULL),
(125, 'show_testimonials', 'web', NULL, NULL),
(126, 'create_testimonials', 'web', NULL, NULL),
(127, 'edit_testimonials', 'web', NULL, NULL),
(128, 'delete_testimonials', 'web', NULL, NULL),
(129, 'access_vacancies', 'web', NULL, NULL),
(130, 'show_vacancies', 'web', NULL, NULL),
(131, 'create_vacancies', 'web', NULL, NULL),
(132, 'edit_vacancies', 'web', NULL, NULL),
(133, 'delete_vacancies', 'web', NULL, NULL),
(134, 'access_events', 'web', NULL, NULL),
(135, 'show_events', 'web', NULL, NULL),
(136, 'create_events', 'web', NULL, NULL),
(137, 'edit_events', 'web', NULL, NULL),
(138, 'delete_events', 'web', NULL, NULL),
(139, 'access_players', 'web', NULL, NULL),
(140, 'show_players', 'web', NULL, NULL),
(141, 'create_players', 'web', NULL, NULL),
(142, 'edit_players', 'web', NULL, NULL),
(143, 'delete_players', 'web', NULL, NULL),
(144, 'access_match', 'web', NULL, NULL),
(145, 'show_match', 'web', NULL, NULL),
(146, 'create_match', 'web', NULL, NULL),
(147, 'edit_match', 'web', NULL, NULL),
(148, 'delete_match', 'web', NULL, NULL),
(149, 'access_subscriptions', 'web', NULL, NULL),
(150, 'show_subscriptions', 'web', NULL, NULL),
(151, 'delete_subscriptions', 'web', NULL, NULL),
(152, 'send_mail', 'web', NULL, NULL),
(153, 'access_gallery', 'web', NULL, NULL),
(154, 'show_gallery', 'web', NULL, NULL),
(155, 'create_gallery', 'web', NULL, NULL),
(156, 'edit_gallery', 'web', NULL, NULL),
(157, 'delete_gallery', 'web', NULL, NULL),
(158, 'access_contact', 'web', NULL, NULL),
(159, 'show_contact', 'web', NULL, NULL),
(160, 'delete_contact', 'web', NULL, NULL),
(161, 'access_tournaments', 'web', NULL, NULL),
(162, 'show_tournaments', 'web', NULL, NULL),
(163, 'create_tournaments', 'web', NULL, NULL),
(164, 'edit_tournaments', 'web', NULL, NULL),
(165, 'delete_tournaments', 'web', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `biography` longtext DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `played` int(11) DEFAULT NULL,
  `wins` int(11) DEFAULT NULL,
  `loss` int(11) DEFAULT NULL,
  `joined_date` date DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `legends` varchar(255) NOT NULL DEFAULT 'off',
  `official` varchar(255) NOT NULL DEFAULT 'off',
  `refree` varchar(255) NOT NULL DEFAULT 'off',
  `show_in_home` varchar(255) NOT NULL DEFAULT 'off',
  `status` varchar(255) NOT NULL DEFAULT 'on',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `name`, `image`, `biography`, `email`, `dob`, `gender`, `province`, `address`, `played`, `wins`, `loss`, `joined_date`, `facebook`, `twitter`, `instagram`, `youtube`, `legends`, `official`, `refree`, `show_in_home`, `status`, `created_at`, `updated_at`) VALUES
(2, 'JECY DEOKO', '1682934639.png', '<div style=\"text-align: justify;\"><span style=\"background-color: var(--bs-card-bg); color: var(--bs-card-color); font-family: var(--bs-body-font-family); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Lorem ipsum dolor sit amet consectetur adipiscing elit quis, cubilia parturient vivamus elementum magnis nunc netus pharetra enim, eget sodales turpis per habitant varius litora. Habitant ante dui tincidunt sapien magnis mattis fringilla vehicula, lacus sagittis sodales vivamus malesuada eros montes laoreet suspendisse, netus nisi suscipit eu condimentum venenatis torquent. Natoque faucibus bibendum curae sed quam fringilla aliquet nullam, commodo ullamcorper litora cum volutpat magnis pellentesque leo, parturient nisl cursus arcu nam erat at. Justo mollis leo litora cum malesuada morbi vitae aliquet dictum, quis risus parturient nulla sem velit pharetra rhoncus vivamus integer, vehicula iaculis quisque ornare eros non maecenas conubia. Blandit penatibus auctor sollicitudin porta habitant iaculis in, metus eros pulvinar velit massa vehicula, vitae netus litora felis interdum at. Vitae ad lectus gravida aptent donec volutpat lobortis enim phasellus condimentum a, est litora platea sed nisl taciti inceptos aenean nec curabitur, sodales congue nullam netus molestie tempor ac fusce penatibus dictumst.</span></div>', 'jecydeco@gmail.com', '2000-12-01', 'Women', 'Province 3 / Bagmati', 'New Baneshwor, Kathmandu', 10, 10, -1, '2022-01-20', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.instagram.com', 'https://www.youtube.com', 'off', 'on', 'off', 'on', 'on', '2023-05-01 04:05:39', '2023-05-05 10:23:05'),
(3, 'JESSICA', '1683003797.png', '<p style=\"text-align: justify; \"><span style=\"font-size: 14.4px;\">Lorem ipsum dolor sit amet consectetur adipiscing elit quis, cubilia parturient vivamus elementum magnis nunc netus pharetra enim, eget sodales turpis per habitant varius litora. Habitant ante dui tincidunt sapien magnis mattis fringilla vehicula, lacus sagittis sodales vivamus malesuada eros montes laoreet suspendisse, netus nisi suscipit eu condimentum venenatis torquent. Natoque faucibus bibendum curae sed quam fringilla aliquet nullam, commodo ullamcorper litora cum volutpat magnis pellentesque leo, parturient nisl cursus arcu nam erat at. Justo mollis leo litora cum malesuada morbi vitae aliquet dictum, quis risus parturient nulla sem velit pharetra rhoncus vivamus integer, vehicula iaculis quisque ornare eros non maecenas conubia. Blandit penatibus auctor sollicitudin porta habitant iaculis in, metus eros pulvinar velit massa vehicula, vitae netus litora felis interdum at. Vitae ad lectus gravida aptent donec volutpat lobortis enim phasellus condimentum a, est litora platea sed nisl taciti inceptos aenean nec curabitur, sodales congue nullam netus molestie tempor ac fusce penatibus dictumst.</span><br></p>', 'jessica@gmail.com', '2007-03-15', 'Women', 'Province 3 / Bagmati', 'Lalitapur - 5, Nepal', 15, 14, 1, '2022-07-08', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.instagram.com', 'https://www.youtube.com', 'on', 'off', 'off', 'on', 'on', '2023-05-02 05:03:17', '2023-05-05 10:23:54'),
(4, 'JENNY SMITH', '1683004178.png', '<div style=\"text-align: justify;\"><span style=\"background-color: var(--bs-card-bg); color: var(--bs-card-color); font-family: var(--bs-body-font-family); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Lorem ipsum dolor sit amet consectetur adipiscing elit quis, cubilia parturient vivamus elementum magnis nunc netus pharetra enim, eget sodales turpis per habitant varius litora. Habitant ante dui tincidunt sapien magnis mattis fringilla vehicula, lacus sagittis sodales vivamus malesuada eros montes laoreet suspendisse, netus nisi suscipit eu condimentum venenatis torquent. Natoque faucibus bibendum curae sed quam fringilla aliquet nullam, commodo ullamcorper litora cum volutpat magnis pellentesque leo, parturient nisl cursus arcu nam erat at. Justo mollis leo litora cum malesuada morbi vitae aliquet dictum, quis risus parturient nulla sem velit pharetra rhoncus vivamus integer, vehicula iaculis quisque ornare eros non maecenas conubia. Blandit penatibus auctor sollicitudin porta habitant iaculis in, metus eros pulvinar velit massa vehicula, vitae netus litora felis interdum at. Vitae ad lectus gravida aptent donec volutpat lobortis enim phasellus condimentum a, est litora platea sed nisl taciti inceptos aenean nec curabitur, sodales congue nullam netus molestie tempor ac fusce penatibus dictumst.</span></div>', 'jennysmith@gmail.com', '1996-03-02', 'Women', 'Province 3 / Bagmati', 'Kathmandu, Nepal', 20, 10, 10, '2015-05-02', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.instagram.com', 'https://www.youtube.com', 'off', 'off', 'off', 'on', 'on', '2023-05-02 05:09:38', '2023-05-05 10:24:28'),
(5, 'Florence Rush', '1683200598.jpg', '<p style=\"text-align: justify; \"><span style=\"font-size: 14.4px;\">Lorem ipsum dolor sit amet consectetur adipiscing elit a, nascetur quisque sociis malesuada dapibus turpis primis, praesent elementum quis nulla habitasse maecenas condimentum. Velit tincidunt sem ad sollicitudin fames aliquam morbi euismod, nec metus nostra senectus cum interdum consequat ac, pretium eu primis ridiculus porttitor ligula conubia. Primis ornare blandit ac lectus cubilia congue faucibus phasellus imperdiet, posuere nunc nam interdum metus libero morbi rutrum. Euismod ante ultrices metus ullamcorper non pulvinar erat mattis, imperdiet aliquet maecenas posuere vulputate varius cursus orci, per auctor sociosqu gravida velit tristique quisque. Curae sociosqu tortor volutpat quam tincidunt viverra phasellus dictum maecenas, quisque at nibh eleifend odio tristique et suspendisse penatibus sollicitudin, mauris est nostra sapien nascetur ornare semper orci. Auctor ante dictum curae varius turpis gravida pharetra ridiculus fermentum, integer magna facilisis nostra dis pellentesque himenaeos senectus dapibus quis, libero hac habitasse accumsan odio luctus augue a. Auctor fringilla tristique dui primis tellus cursus turpis conubia vulputate sagittis, litora etiam nostra imperdiet faucibus aliquam diam pulvinar nec, malesuada vel odio duis taciti convallis habitant feugiat inceptos.</span><br></p>', 'xuxynuz@mailinator.com', '1995-02-01', 'Women', 'Province 1 / Koshi', 'Sed irure vel in fac', 30, 20, 10, '2001-07-31', 'Et aliquip consequat', 'Officia est quaerat', 'Iste dolore do volup', 'Aperiam eaque aliqui', 'off', 'on', 'off', 'off', 'on', '2023-05-04 11:43:18', '2023-05-05 10:09:03');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2023-03-20 05:48:05', '2023-03-20 06:35:42'),
(4, 'User', 'web', '2023-03-20 23:36:55', '2023-06-28 12:38:36'),
(6, 'Super Admin', 'web', '2023-03-21 00:20:34', '2023-03-21 00:20:34');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 6),
(2, 1),
(2, 6),
(72, 1),
(72, 6),
(94, 1),
(94, 4),
(94, 6),
(95, 1),
(95, 4),
(95, 6),
(96, 1),
(96, 4),
(96, 6),
(97, 1),
(97, 4),
(97, 6),
(98, 1),
(98, 4),
(98, 6),
(104, 1),
(104, 6),
(105, 1),
(105, 6),
(106, 1),
(106, 6),
(107, 1),
(107, 6),
(108, 1),
(108, 6),
(109, 1),
(109, 6),
(110, 1),
(110, 6),
(111, 1),
(111, 6),
(112, 1),
(112, 6),
(113, 1),
(113, 6),
(114, 1),
(114, 6),
(115, 1),
(115, 6),
(116, 1),
(116, 6),
(117, 1),
(117, 6),
(118, 1),
(118, 6),
(119, 1),
(119, 6),
(120, 1),
(120, 6),
(121, 1),
(121, 6),
(122, 1),
(122, 6),
(123, 1),
(123, 6),
(124, 1),
(124, 6),
(125, 1),
(125, 6),
(126, 1),
(126, 6),
(127, 1),
(127, 6),
(128, 1),
(128, 6),
(129, 1),
(129, 6),
(130, 1),
(130, 6),
(131, 1),
(131, 6),
(132, 1),
(132, 6),
(133, 1),
(133, 6),
(134, 6),
(135, 6),
(136, 6),
(137, 6),
(138, 6),
(139, 6),
(140, 6),
(141, 6),
(142, 6),
(143, 6),
(144, 6),
(145, 6),
(146, 6),
(147, 6),
(148, 6),
(149, 6),
(150, 6),
(151, 6),
(152, 6),
(153, 6),
(154, 6),
(155, 6),
(156, 6),
(157, 6),
(158, 6),
(159, 6),
(160, 6),
(161, 6),
(162, 6),
(163, 6),
(164, 6),
(165, 6);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `link`, `image`, `status`, `short_description`, `description`, `created_at`, `updated_at`) VALUES
(5, 'Fun Olympic Game', NULL, '1682938429.png', 'on', NULL, NULL, '2023-05-01 05:01:15', '2023-06-28 11:57:07');

-- --------------------------------------------------------

--
-- Table structure for table `tournaments`
--

CREATE TABLE `tournaments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'on',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tournaments`
--

INSERT INTO `tournaments` (`id`, `title`, `slug`, `image`, `description`, `file`, `status`, `created_at`, `updated_at`) VALUES
(3, 'archery', 'archery', '1688656343.jpg', '<p><span style=\"color: rgb(62, 62, 62); font-family: ubuntu, Arial, Helvetica, sans-serif; font-size: 16px;\">Archery first appeared at the 1900 Olympics in Paris. There were archery events for the next few Olympics, but then it disappeared from the Olympic program for more than 50 years. It reappeared at Munich in 1972 and has remained a fixture of the Olympics ever since. Early archery competitions varied in format. Since 1988, there have been men\'s and women\'s individual and team events. The current Olympic archery competition consists of four medal events: men\'s individual, women\'s individual, men\'s team, and women\'s team. In all four events, the distance from the archer to the target is 70 meters.</span><br></p>', '', 'on', '2023-07-06 15:12:23', '2023-07-06 15:12:23'),
(4, 'Badminton', 'badminton', '1688656431.jpg', '<p><span style=\"color: rgb(62, 62, 62); font-family: ubuntu, Arial, Helvetica, sans-serif; font-size: 16px;\">Badminton premiered as a full-medal Olympic sport at the 1992 Olympic Games in Barcelona, Spain, and has continued as a full-medal sport since then. There are tournaments for men and women, singles and doubles. A Mixed Doubles event was added to the Olympic Games for the first time in Atlanta in 1996.</span><br></p>', '', 'on', '2023-07-06 15:13:51', '2023-07-06 15:13:51'),
(5, 'Basketball', 'basketball', '1688656478.jpg', '<p><span style=\"color: rgb(62, 62, 62); font-family: ubuntu, Arial, Helvetica, sans-serif; font-size: 16px;\">Basketball was admitted as an Olympic sport for the first time in 1936 in Berlin, and has been on the program ever since. A women\'s basketball tournament was added in 1976. For the Tokyo 2020 Olympics, a&nbsp;</span><a href=\"https://www.topendsports.com/events/summer/sports/basketball-3x3.htm\" style=\"color: rgb(38, 38, 203); text-decoration-line: none; font-family: ubuntu, Arial, Helvetica, sans-serif; font-size: 16px; background-color: rgb(255, 255, 255);\">3x3 basketball</a><span style=\"color: rgb(62, 62, 62); font-family: ubuntu, Arial, Helvetica, sans-serif; font-size: 16px;\">&nbsp;event for men and women was added to the program.</span><br></p>', '', 'on', '2023-07-06 15:14:38', '2023-07-06 15:14:38'),
(6, 'Gymnastics', 'gymnastics', '1688656528.jpg', '<p><span style=\"color: rgb(62, 62, 62); font-family: ubuntu, Arial, Helvetica, sans-serif; font-size: 16px;\">Gymnastics is one of five sports that have been contested at every summer Olympic Games since 1896.</span><br></p>', '', 'on', '2023-07-06 15:15:28', '2023-07-06 15:15:28'),
(7, 'Football', 'football', '1688656599.jpg', '<p style=\"font-family: ubuntu, Arial, Helvetica, sans-serif; font-size: medium; line-height: 1.6em; color: rgb(62, 62, 62);\">Football (known as soccer in the USA) was the first team sport added to the Olympics, way back at the second Olympic Games in 1900. There is also evidence that&nbsp;<a href=\"https://www.topendsports.com/events/demonstration/football.htm\" style=\"color: rgb(38, 38, 203); text-decoration-line: none;\">football was demonstrated in 1896</a>.</p><p style=\"font-family: ubuntu, Arial, Helvetica, sans-serif; font-size: medium; line-height: 1.6em; color: rgb(62, 62, 62);\">At first, only a men\'s competition was included. A women\'s Olympic football event was added in 1996. The men\'s teams are restricted to including only under-23 players, with a maximum of three over-age players allowed, while there are no age restrictions for the women\'s teams.</p>', '', 'on', '2023-07-06 15:16:39', '2023-07-06 15:16:39');

-- --------------------------------------------------------

--
-- Table structure for table `upcomming_matches`
--

CREATE TABLE `upcomming_matches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) DEFAULT NULL,
  `stadium` varchar(255) DEFAULT NULL,
  `team1` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `team2` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'on',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upcomming_matches`
--

INSERT INTO `upcomming_matches` (`id`, `title`, `date`, `time`, `stadium`, `team1`, `image1`, `team2`, `image2`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Asian Karate Cup 2023', '2023-05-06', '12:10', 'Dashrath Stadium', 'Lee\'s Kenpo Karate', '16831792411.png', 'Nepal Karate Association', '16830105132.png', 'off', '2023-04-30 02:29:31', '2023-07-06 15:26:56'),
(2, 'Olympic 2023', '2023-06-30', '18:01', 'Dashrath Stadium', 'Lee\'s Kenpo Karate', '16879580471.jpg', 'Nepal Karate Association', '16879580472.png', 'off', '2023-06-28 13:14:07', '2023-07-06 15:26:47'),
(3, 'Footbal match day 1', '2023-12-12', '00:45', 'Wembly', 'Nepal', '16886571901.jpg', 'UK', '16886571902.jpeg', 'on', '2023-07-06 15:26:30', '2023-07-06 15:26:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'on',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `role_id`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'super@super.com', NULL, '$2y$10$ku6zpVY.tztIOhSWhYr97eKLzA0CiQch8AAYINhs8v1VWauOr.6OK', '1679394077.jpg', 6, 'on', NULL, '2023-03-18 23:58:14', '2023-03-21 04:36:17'),
(5, 'Rabi Birbal', 'rabibirbal450@gmail.com', NULL, '$2y$10$txpOYh8q8SaP8gqpQww6me4VAqtdFXEoohDBBLB3gqe6HOqNFm1Xi', '1679393181.jpg', 4, 'on', NULL, '2023-03-21 00:14:59', '2023-03-22 02:07:28'),
(6, 'Sonam Tamang', 'sonamtamang@gmail.com', NULL, '$2y$10$XZZsEU0ZwaKNpto2wQjCTORz9JQoF7R0tmI8/3pG3gJnpFbaW94Nm', '1687957042.png', 4, 'on', NULL, '2023-06-28 12:38:45', '2023-06-28 12:57:22'),
(7, 'Rabi Birbal', 'rabibirbal40@gmail.com', NULL, '$2y$10$S5oENSAdcPBiS7Xdok66H.TA7yj5UyJaT4RJoLZKBDrNT2Ejz2Dp6', NULL, 4, 'on', NULL, '2023-06-28 13:07:44', '2023-06-28 13:07:44'),
(8, 'Sonam Tamang', 'Sonam@gmail.com', NULL, '$2y$10$P0qeTwXh2BfYevlJyZqHH.fwaUEDY9/ZuT.VuIAL9IdhMJtZYH47S', NULL, 4, 'on', NULL, '2023-07-04 02:29:04', '2023-07-04 02:29:04'),
(9, 'ISMT', 'ISMT@gmail.com', NULL, '$2y$10$OTiAXZnptV0DLt/dq/3fnuZ88cgtFaHBQb3erhtKqOrTgDVQq2ZjK', NULL, 4, 'on', NULL, '2023-07-07 06:49:29', '2023-07-07 06:49:29'),
(13, 'Test', 'test@gmail.com', NULL, '$2y$10$tJvs6k..0/VqTIIX0oAGaeoKCkenwdF1ADDQ3VMNoxGwozVyRXMki', '', 4, 'on', NULL, '2023-07-07 09:55:47', '2023-07-07 09:55:47'),
(14, 'test1', 'test1@gmail.com', NULL, '$2y$10$8lX8Zk5ye3VteztxnPKQWOVx8Ro/6a2Pw1krupLd6/wZ5lG93rhkW', NULL, 4, 'on', NULL, '2023-07-07 10:07:36', '2023-07-07 10:07:36'),
(15, 'test 2', 'test2@gmail.com', NULL, '$2y$10$S/890vaen3QrHA6y0MXTA.lV6FwRF0CXNhIrfy0SKjl3R3f/6hSQe', '', 4, 'on', NULL, '2023-07-07 10:10:54', '2023-07-07 10:10:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `company_profiles`
--
ALTER TABLE `company_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gallery_images_gallery_id_foreign` (`gallery_id`);

--
-- Indexes for table `gallery_videos`
--
ALTER TABLE `gallery_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tournaments`
--
ALTER TABLE `tournaments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upcomming_matches`
--
ALTER TABLE `upcomming_matches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `company_profiles`
--
ALTER TABLE `company_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery_images`
--
ALTER TABLE `gallery_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `gallery_videos`
--
ALTER TABLE `gallery_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tournaments`
--
ALTER TABLE `tournaments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `upcomming_matches`
--
ALTER TABLE `upcomming_matches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD CONSTRAINT `gallery_images_gallery_id_foreign` FOREIGN KEY (`gallery_id`) REFERENCES `galleries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
