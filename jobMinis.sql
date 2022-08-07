-- -------------------------------------------------------------
-- TablePlus 4.6.2(410)
--
-- https://tableplus.com/
--
-- Database: jobMinis
-- Generation Time: 2022-08-07 2:58:11.1820 PM
-- -------------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `is_active` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `account_profiles`;
CREATE TABLE `account_profiles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `account_id` int NOT NULL,
  `profile_id` int NOT NULL,
  `is_active` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `addresses`;
CREATE TABLE `addresses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `state` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `is_active` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `is_active` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `credentials`;
CREATE TABLE `credentials` (
  `id` int NOT NULL AUTO_INCREMENT,
  `credentials_type` varchar(255) NOT NULL,
  `user_id` int NOT NULL,
  `k` varchar(255) NOT NULL,
  `e` varchar(255) NOT NULL,
  `v` varchar(255) NOT NULL,
  `is_active` varchar(255) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `files`;
CREATE TABLE `files` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `filelink` varchar(255) NOT NULL,
  `ext` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `job_category`;
CREATE TABLE `job_category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT NULL,
  `is_active` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `job_details`;
CREATE TABLE `job_details` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `job_category_id` int DEFAULT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `description` text,
  `skill` text,
  `experience` text,
  `availability` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `salary` int DEFAULT NULL,
  `is_active` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `job_type_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `job_type`;
CREATE TABLE `job_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL,
  `is_active` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `login_sessions`;
CREATE TABLE `login_sessions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `k` varchar(255) NOT NULL,
  `v` varchar(255) NOT NULL,
  `remember_me` tinyint(1) NOT NULL,
  `is_active` varchar(255) NOT NULL,
  `cretaed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `p_type` varchar(255) NOT NULL,
  `v0` varchar(255) NOT NULL,
  `v1` varchar(255) NOT NULL,
  `v2` varchar(255) NOT NULL,
  `is_active` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `profile`;
CREATE TABLE `profile` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified` varchar(255) NOT NULL,
  `is_active` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `profile_addresses`;
CREATE TABLE `profile_addresses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `profile_id` int NOT NULL,
  `account_id` int NOT NULL,
  `address_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `is_active` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `siteconfig`;
CREATE TABLE `siteconfig` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `site_key` varchar(255) NOT NULL,
  `site_value` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE `sliders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `h1` varchar(255) DEFAULT NULL,
  `p` varchar(255) DEFAULT NULL,
  `btn_txt` varchar(255) DEFAULT NULL,
  `btn_link` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `account` (`id`, `user_name`, `slug`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'astha123', 'astha123', 'false', '2022-06-23 19:02:51', '2022-06-23 19:02:51', '2022-06-23 19:02:51'),
(2, 'sapna', 'sapna', 'false', '2022-06-24 06:46:11', '2022-06-24 06:46:11', '2022-06-24 06:46:11'),
(3, 'sapnabaniya', 'sapnabaniya', 'false', '2022-06-26 07:16:12', '2022-06-26 07:16:12', '2022-06-26 07:16:12'),
(4, 'astha', 'astha', 'false', '2022-08-06 17:03:56', '2022-08-06 17:03:56', '2022-08-06 17:03:56'),
(5, 'simran', 'simran', 'false', '2022-08-06 17:19:10', '2022-08-06 17:19:10', '2022-08-06 17:19:10'),
(6, 'simran1', 'simran1', 'false', '2022-08-06 17:20:21', '2022-08-06 17:20:21', '2022-08-06 17:20:21');

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'sapna', 'sapna123@gmail.com', '374267365742', 'this is the testing message', NULL, '2022-06-24 07:14:56', '2022-06-24 07:14:56', '2022-06-24 07:14:56'),
(2, 'sejal baniya', 'baniyasapna4@gmail.com', '9827190713', 'can you please help me to find me a job?', NULL, '2022-06-25 20:40:25', '2022-06-25 20:40:25', '2022-06-25 20:40:25'),
(3, 'sejal baniya', 'baniyasapna4@gmail.com', '9827190713', 'can you please help me to find me a job?', NULL, '2022-06-25 20:42:47', '2022-06-25 20:42:47', '2022-06-25 20:42:47'),
(4, 'sejal baniya', 'baniyasapna4@gmail.com', '9827190713', 'can you please help me to find me a job?', NULL, '2022-06-25 20:43:05', '2022-06-25 20:43:05', '2022-06-25 20:43:05'),
(5, 'sejal baniya', 'baniyasapna4@gmail.com', '9827190713', 'can you please help me to find me a job?', NULL, '2022-06-25 20:43:15', '2022-06-25 20:43:15', '2022-06-25 20:43:15'),
(6, 'sejal baniya', 'baniyasapna4@gmail.com', '9827190713', 'can you please help me to find me a job?', NULL, '2022-06-25 20:43:27', '2022-06-25 20:43:27', '2022-06-25 20:43:27'),
(7, 'sejal baniya', 'baniyasapna4@gmail.com', '9827190713', 'can you please help me to find me a job?', NULL, '2022-06-25 20:43:43', '2022-06-25 20:43:43', '2022-06-25 20:43:43'),
(8, 'sejal baniya', 'baniyasapna4@gmail.com', '9827190713', 'can you please help me to find me a job?', NULL, '2022-06-25 20:50:16', '2022-06-25 20:50:16', '2022-06-25 20:50:16'),
(9, 'sejal baniya', 'baniyasapna4@gmail.com', '9827190713', 'can you please help me to find me a job?', NULL, '2022-06-25 20:51:12', '2022-06-25 20:51:12', '2022-06-25 20:51:12'),
(10, 'sejal baniya', 'baniyasapna4@gmail.com', '9827190713', 'can you please help me to find me a job?', NULL, '2022-06-25 20:51:25', '2022-06-25 20:51:25', '2022-06-25 20:51:25'),
(11, 'sejal baniya', 'baniyasapna4@gmail.com', '9827190713', 'can you please help me to find me a job?', NULL, '2022-06-25 21:03:49', '2022-06-25 21:03:49', '2022-06-25 21:03:49'),
(12, 'sejal baniya', 'baniyasapna4@gmail.com', '9827190713', 'can you please help me to find me a job?', NULL, '2022-06-25 21:05:13', '2022-06-25 21:05:13', '2022-06-25 21:05:13'),
(13, 'sejal baniya', 'baniyasapna4@gmail.com', '9827190713', 'can you please help me to find me a job?', NULL, '2022-06-25 21:05:53', '2022-06-25 21:05:53', '2022-06-25 21:05:53'),
(14, 'sejal baniya', 'baniyasapna4@gmail.com', '9827190713', 'can you please help me to find me a job?', NULL, '2022-06-25 21:06:08', '2022-06-25 21:06:08', '2022-06-25 21:06:08'),
(15, 'sejal baniya', 'baniyasapna4@gmail.com', '9827190713', 'can you please help me to find me a job?', NULL, '2022-06-25 21:06:53', '2022-06-25 21:06:53', '2022-06-25 21:06:53'),
(16, 'sejal baniya', 'baniyasapna4@gmail.com', '9827190713', 'sdfc', NULL, '2022-06-25 21:07:32', '2022-06-25 21:07:32', '2022-06-25 21:07:32'),
(17, 'sejal baniya', 'baniyasapna4@gmail.com', '9827190713', 'sdfc', NULL, '2022-06-25 21:42:55', '2022-06-25 21:42:55', '2022-06-25 21:42:55');

INSERT INTO `credentials` (`id`, `credentials_type`, `user_id`, `k`, `e`, `v`, `is_active`, `created_at`, `deleted_at`, `updated_at`) VALUES
(1, 'password', 10, '10', '098f6bcd4621d373cade4e832627b4f6', 'null', 'false', '2022-06-23 17:01:14', '2022-06-23 17:01:14', '2022-06-23 17:01:14'),
(2, 'password', 21, '21', 'af4e5834b08749e4351722895ad14f5a', 'null', 'false', '2022-06-23 17:02:56', '2022-06-23 17:02:56', '2022-06-23 17:02:56'),
(3, 'password', 21, '21', 'af4e5834b08749e4351722895ad14f5a', 'null', 'false', '2022-06-23 17:04:07', '2022-06-23 17:04:07', '2022-06-23 17:04:07'),
(4, 'password', 21, '21', 'af4e5834b08749e4351722895ad14f5a', 'null', 'false', '2022-06-23 17:06:13', '2022-06-23 17:06:13', '2022-06-23 17:06:13'),
(5, 'password', 24, '24', '907175e69298b3b6ce23e929159a7728', 'null', 'false', '2022-06-23 17:49:48', '2022-06-23 17:49:48', '2022-06-23 17:49:48'),
(6, 'password', 25, '25', '91bbc32e8590ecc8765d88330bea92b6', 'null', 'false', '2022-06-23 19:01:37', '2022-06-23 19:01:37', '2022-06-23 19:01:37'),
(7, 'password', 26, '26', '0f3d1ff7fe53fa572e455d4275e02f4b', 'null', 'false', '2022-06-24 06:46:04', '2022-06-24 06:46:04', '2022-06-24 06:46:04'),
(8, 'password', 27, '27', '7d6a5c1eeca24942a5a4987a1998dc3f', 'null', 'false', '2022-06-26 07:16:04', '2022-06-26 07:16:04', '2022-06-26 07:16:04'),
(9, 'password', 28, '28', 'b1eb4d0b383339a26c16c5a9253c1188', 'null', 'false', '2022-08-06 17:03:22', '2022-08-06 17:03:22', '2022-08-06 17:03:22'),
(10, 'password', 30, '30', '9b16eb2704cead43ecf04dd665908205', 'null', 'false', '2022-08-06 17:19:02', '2022-08-06 17:19:02', '2022-08-06 17:19:02'),
(11, 'password', 31, '31', '1a044483e26e3ae95e7c853e05daac5b', 'null', 'false', '2022-08-06 17:20:13', '2022-08-06 17:20:13', '2022-08-06 17:20:13');

INSERT INTO `files` (`id`, `name`, `filelink`, `ext`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Photo', '21655969402.png', 'png', 'Active', '2022-06-23 13:15:02', '2022-06-23 13:15:02'),
(3, 'frontpage', 'image-removebg-preview(5)1656035304.png', 'png', 'Active', '2022-06-24 07:33:24', '2022-06-24 07:33:24');

INSERT INTO `job_details` (`id`, `user_id`, `title`, `job_category_id`, `contact_person`, `email`, `phone`, `date`, `description`, `skill`, `experience`, `availability`, `language`, `salary`, `is_active`, `status`, `created_at`, `job_type_id`) VALUES
(1, 31, 'Et consectetur expl', 2, 'Nostrud voluptatem s', 'lakovi@mailinator.com', '+1 (707) 349-4602', '1973-11-01', 'Enim quo et est sit', 'Ut ullamco modi quia', 'Aliquam cumque eos a', 'Perferendis reprehen', 'Sunt labore et in co', 54, 'true', 'true', NULL, 1),
(2, 31, 'software developer', 2, 'Sapna baniya', 'baniyasapna4@gmail.com', '+1 (743) 543-5731', '2022-08-11', 'I am hiring a software developer for my project', 'Laravel, nodejs', 'minimum 1 yrs', 'available', '', 10000, 'true', 'true', NULL, 2);

INSERT INTO `permissions` (`id`, `p_type`, `v0`, `v1`, `v2`, `is_active`, `created_at`, `deleted_at`, `updated_at`) VALUES
(1, 'g', '0', 'job-provider', 'job-provider', 'false', '2022-06-23 18:52:56', '2022-06-23 18:52:56', '2022-06-23 18:52:56'),
(2, 'g', '0', 'job-provider', 'job-provider', 'false', '2022-06-23 18:53:20', '2022-06-23 18:53:20', '2022-06-23 18:53:20'),
(3, 'g', '12', 'job-provider', 'job-provider', 'false', '2022-06-23 19:03:37', '2022-06-23 19:03:37', '2022-06-23 19:03:37'),
(4, 'g', '12', 'job-provider', 'job-provider', 'false', '2022-06-23 19:24:57', '2022-06-23 19:24:57', '2022-06-23 19:24:57'),
(5, 'g', '12', 'job-provider', 'job-provider', 'false', '2022-06-23 19:24:58', '2022-06-23 19:24:58', '2022-06-23 19:24:58'),
(6, 'g', '12', 'job-seeker', 'job-seeker', 'false', '2022-06-24 06:46:13', '2022-06-24 06:46:13', '2022-06-24 06:46:13'),
(7, 'g', '12', 'job-seeker', 'job-seeker', 'false', '2022-06-26 07:16:15', '2022-06-26 07:16:15', '2022-06-26 07:16:15'),
(8, 'g', '12', 'job-provider', 'job-provider', 'false', '2022-06-26 07:16:28', '2022-06-26 07:16:28', '2022-06-26 07:16:28'),
(9, 'g', '12', 'job-provider', 'job-provider', 'false', '2022-08-06 17:10:39', '2022-08-06 17:10:39', '2022-08-06 17:10:39'),
(10, 'g', 'Array', 'job-seeker', 'job-seeker', 'false', '2022-08-06 17:19:12', '2022-08-06 17:19:12', '2022-08-06 17:19:12'),
(11, 'g', '31', 'job-seeker', 'job-seeker', 'false', '2022-08-06 17:20:22', '2022-08-06 17:20:22', '2022-08-06 17:20:22');

INSERT INTO `siteconfig` (`id`, `name`, `site_key`, `site_value`, `status`, `created_at`, `updated_at`) VALUES
(2, 'sahigi@mailinator.com', 'norek@mailinator.com', 'wiqew@mailinator.com', 'Active', '2022-06-23 16:17:53', '2022-06-23 16:17:53'),
(3, 'location', 'Our Location ', 'NP: Pokhara, Gandaki, Nepal', 'Active', '2022-06-23 21:48:53', '2022-06-23 21:48:53'),
(4, 'email', 'How Can We Help???', 'jobminis@gmail.com', 'Active', '2022-06-23 21:55:57', '2022-06-23 21:55:57'),
(6, 'questions', 'Frequently Asked Questions(FAQs)', 'The most common questions about how our application works .', 'Active', '2022-06-23 22:09:01', '2022-06-23 22:09:01'),
(7, 'questions1', 'How does this site work?', 'We provide a portal to use your services to create run such flow.', 'Active', '2022-06-23 22:13:10', '2022-06-23 22:13:10'),
(8, 'questions2', 'Can I send email or sms from this site?', 'Yes, Of course, we provide you the flexibility send email or sms.', 'Active', '2022-06-23 22:29:48', '2022-06-23 22:29:48');

INSERT INTO `sliders` (`id`, `name`, `h1`, `p`, `btn_txt`, `btn_link`, `img`, `status`, `created_at`, `updated_at`) VALUES
(3, 'slider2', 'Find the perfect Job for you', 'Find and search your career opportunity here', 'hellofg nvbsfmgv', 'hellobdvcbadc', 'image-removebg-preview(5)1655989739.png', 'active', '2022-06-23 20:00:09', '2022-06-23 20:00:09');

INSERT INTO `user` (`id`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ziwubuke@mailinator.com', '0', '2022-06-17 07:19:40', '2022-06-17 07:19:40'),
(2, 'pizap@mailinator.com', '0', '2022-06-17 07:19:53', '2022-06-17 07:19:53'),
(3, 'shresthaastha848@gmail.com', '0', '2022-06-19 06:43:01', '2022-06-19 06:43:01'),
(4, 'sangu@gmail.com', '1', '2022-06-20 12:10:46', '2022-06-20 12:10:46'),
(5, 'anmol@gmail.com', '1', '2022-06-20 12:32:36', '2022-06-20 12:32:36'),
(6, 'anmol@gmail.com', '1', '2022-06-20 12:33:18', '2022-06-20 12:33:18'),
(7, 'anmol@gmail.com', '1', '2022-06-20 12:33:22', '2022-06-20 12:33:22'),
(8, 'simran848@gmail.com', '1', '2022-06-20 12:57:05', '2022-06-20 12:57:05'),
(9, 'sumi@gmail.com', '0', '2022-06-22 13:44:41', '2022-06-22 13:44:41'),
(10, 'sapnabaniya.xdezo@gmail.com', 'inactive', '2022-06-23 16:50:50', '2022-06-23 16:50:50'),
(11, 'sapnabaniya.xdezo@gmail.com', 'inactive', '2022-06-23 16:51:13', '2022-06-23 16:51:13'),
(12, 'sapnabaniya.xdezo@gmail.com', 'inactive', '2022-06-23 16:51:36', '2022-06-23 16:51:36'),
(13, 'sapnabaniya.xdezo@gmail.com', 'inactive', '2022-06-23 16:52:26', '2022-06-23 16:52:26'),
(14, 'sapnabaniya.xdezo@gmail.com', 'inactive', '2022-06-23 16:53:46', '2022-06-23 16:53:46'),
(15, 'sapnabaniya.xdezo@gmail.com', 'inactive', '2022-06-23 16:54:33', '2022-06-23 16:54:33'),
(16, 'sapnabaniya.xdezo@gmail.com', 'inactive', '2022-06-23 16:55:19', '2022-06-23 16:55:19'),
(17, 'sapnabaniya.xdezo@gmail.com', 'inactive', '2022-06-23 16:55:47', '2022-06-23 16:55:47'),
(18, 'sapnabaniya.xdezo@gmail.com', 'inactive', '2022-06-23 16:57:59', '2022-06-23 16:57:59'),
(19, 'sapnabaniya.xdezo@gmail.com', 'inactive', '2022-06-23 17:00:12', '2022-06-23 17:00:12'),
(20, 'sapnabaniya.xdezo@gmail.com', 'inactive', '2022-06-23 17:01:14', '2022-06-23 17:01:14'),
(21, 'baniyasapna4@gmail.com', 'inactive', '2022-06-23 17:02:56', '2022-06-23 17:02:56'),
(22, 'baniyasapna4@gmail.com', 'inactive', '2022-06-23 17:04:07', '2022-06-23 17:04:07'),
(23, 'baniyasapna4@gmail.com', 'inactive', '2022-06-23 17:06:13', '2022-06-23 17:06:13'),
(24, 'sapna@gmail.com', 'inactive', '2022-06-23 17:49:48', '2022-06-23 17:49:48'),
(25, 'astha@gmail.com', 'inactive', '2022-06-23 19:01:37', '2022-06-23 19:01:37'),
(26, 'sapna123@gmail.com', 'inactive', '2022-06-24 06:46:04', '2022-06-24 06:46:04'),
(27, 'sapna2@gmail.com', 'inactive', '2022-06-26 07:16:04', '2022-06-26 07:16:04'),
(28, 'astha@gmail.com', 'inactive', '2022-08-06 17:03:22', '2022-08-06 17:03:22'),
(29, 'simran@gmail.com', 'inactive', '2022-08-06 17:18:28', '2022-08-06 17:18:28'),
(30, 'simran@gmail.com', 'inactive', '2022-08-06 17:19:02', '2022-08-06 17:19:02'),
(31, 'simran1@gmail.com', 'inactive', '2022-08-06 17:20:13', '2022-08-06 17:20:13');



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;