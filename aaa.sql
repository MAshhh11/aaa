-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 05, 2020 at 07:54 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `aaa`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `rank` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `website_link`, `author`, `website`, `created_at`, `updated_at`, `rank`) VALUES
(1, 'Les métiers des jeux vidéo et du cinéma d’animation', 'https://www.cidj.com/', 'Actuel cidj', 'https://www.cidj.com/', '2020-09-29 08:07:56', '2020-09-29 09:38:16', 1),
(2, 'Annecy 2019 : Angoulême conforte sa place de territoire fertile pour les studios d\'animation !', 'https://mediakwest.com/', 'Nathalie Klimberg', 'https://mediakwest.com/', '2020-09-29 08:09:57', '2020-09-29 09:38:28', 2),
(3, 'Depuis 3 ans, l’accélération des recrutements dans l’animation est très nette', '#', 'Julie Mleczko', '#', '2020-09-29 08:14:21', '2020-09-29 09:38:44', 3),
(4, '4 studios d’animation français qui recrutent en 2019-2020', '#', 'Marine Richard', '#', '2020-09-29 08:16:24', '2020-09-29 09:38:56', 4),
(5, 'Le cinéma d’animation recrute à fond !', 'https://start.lesechos.fr/', 'Florent Vairet', 'https://start.lesechos.fr/', '2020-09-29 08:18:26', '2020-09-29 09:39:08', 5);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `title`, `description`, `created_at`, `updated_at`, `duration`) VALUES
(1, 'Cours Bidon', NULL, '2020-09-25 08:51:36', '2020-09-25 08:51:36', '1'),
(2, 'Cours Bidon2', NULL, '2020-09-29 11:32:55', '2020-09-29 11:32:55', '4');

-- --------------------------------------------------------

--
-- Table structure for table `course_exercice`
--

CREATE TABLE `course_exercice` (
  `id` int(11) NOT NULL,
  `exercice_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `rank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_exercice`
--

INSERT INTO `course_exercice` (`id`, `exercice_id`, `course_id`, `rank`) VALUES
(1, 1, 1, 1),
(2, 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `course_file`
--

CREATE TABLE `course_file` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_file`
--

INSERT INTO `course_file` (`id`, `course_id`, `file`) VALUES
(1, 2, 'screenshot.png');

-- --------------------------------------------------------

--
-- Table structure for table `course_formation`
--

CREATE TABLE `course_formation` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `formation_id` int(11) NOT NULL,
  `rank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_formation`
--

INSERT INTO `course_formation` (`id`, `course_id`, `formation_id`, `rank`) VALUES
(2, 2, 2, 1),
(5, 2, 3, 1),
(6, 1, 3, 2),
(9, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_role`
--

CREATE TABLE `data_role` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_exception` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exercice`
--

CREATE TABLE `exercice` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `difficulty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exercice`
--

INSERT INTO `exercice` (`id`, `title`, `description`, `created_at`, `updated_at`, `duration`, `difficulty`) VALUES
(1, 'Exo Bidon', NULL, '2020-09-25 08:52:00', '2020-09-25 08:52:00', NULL, 5),
(2, 'Exo Bidon2', NULL, '2020-09-30 13:50:10', '2020-09-30 13:50:10', NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `exercice_file`
--

CREATE TABLE `exercice_file` (
  `id` int(11) NOT NULL,
  `exercice_id` int(11) NOT NULL,
  `is_presentation` tinyint(1) NOT NULL,
  `is_technical_document` tinyint(1) NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exercice_file`
--

INSERT INTO `exercice_file` (`id`, `exercice_id`, `is_presentation`, `is_technical_document`, `file`, `filename`) VALUES
(1, 1, 1, 0, 'template-hierarchy-1600x998.png', 'template-hierarchy-1600x998.png'),
(2, 1, 0, 0, 'charte-graphique.jpg', 'charte-graphique.jpg'),
(3, 2, 1, 0, 'comments.php', 'comments.php');

-- --------------------------------------------------------

--
-- Table structure for table `exercice_technical_document`
--

CREATE TABLE `exercice_technical_document` (
  `id` int(11) NOT NULL,
  `exercice_id` int(11) NOT NULL,
  `technical_document_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exercice_technical_document`
--

INSERT INTO `exercice_technical_document` (`id`, `exercice_id`, `technical_document_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `figure`
--

CREATE TABLE `figure` (
  `id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `rank` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `figure`
--

INSERT INTO `figure` (`id`, `amount`, `title`, `text`, `created_at`, `updated_at`, `rank`) VALUES
(4, 142, 'Studios de cinéma d’animation en France', '80 Île-de-France 25 Angoulême', '2020-09-28 10:00:03', '2020-09-28 14:27:30', 1),
(5, 2500, 'sont des ANIMATEURS', '(30%)', '2020-09-28 10:00:38', '2020-09-28 10:00:38', 3),
(6, 7500, 'Salariés dans le cinéma d’animation', '4600  Île-de-France 1000 Angoulême', '2020-09-28 10:01:30', '2020-09-28 10:01:30', 2),
(7, 380, 'sont des STORYBOARDERS', '(5%)', '2020-09-28 10:01:59', '2020-09-28 10:01:59', 4),
(8, 380, 'sont des LAYOUT men', '(5%)', '2020-09-28 10:02:31', '2020-09-28 10:02:31', 5),
(9, 322, 'heures de programmes produits par an, entre 2009 et 2018', '(259h en 2008)', '2020-09-28 10:02:56', '2020-09-28 10:02:56', 6);

-- --------------------------------------------------------

--
-- Table structure for table `formation`
--

CREATE TABLE `formation` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` int(11) DEFAULT NULL,
  `price` double NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formation`
--

INSERT INTO `formation` (`id`, `title`, `duration`, `price`, `is_active`, `created_at`, `updated_at`, `description`) VALUES
(1, 'FormationBidon', 2, 12, 1, '2020-09-25 08:51:09', '2020-09-25 08:51:09', NULL),
(2, 'FormationBidon2', 4, 35, 1, '2020-09-29 11:31:58', '2020-09-29 11:31:58', NULL),
(3, 'FormationBidon3', 6, 50, 1, '2020-09-29 11:33:51', '2020-09-29 11:34:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `formation_user`
--

CREATE TABLE `formation_user` (
  `id` int(11) NOT NULL,
  `formation_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `is_current` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `is_done` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formation_user`
--

INSERT INTO `formation_user` (`id`, `formation_id`, `user_id`, `is_current`, `created_at`, `updated_at`, `is_done`) VALUES
(3, 1, 2, 1, '2020-09-30 14:06:29', '2020-09-30 14:06:29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `free_exercice`
--

CREATE TABLE `free_exercice` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id` int(11) NOT NULL,
  `formation_id` int(11) NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rgpd_optin`
--

CREATE TABLE `rgpd_optin` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `optio_email` tinyint(1) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `technical_document`
--

CREATE TABLE `technical_document` (
  `id` int(11) NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `technical_document`
--

INSERT INTO `technical_document` (`id`, `file`, `created_at`) VALUES
(1, 'bottles.xlsx', '2020-09-25 13:41:36');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_activity` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_exception` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `lastname`, `firstname`, `birthday`, `is_active`, `avatar`, `last_activity`, `created_at`, `updated_at`, `phone`, `token`, `is_exception`) VALUES
(1, 'support@limeointeractive.com', '[\"ROLE_USER\", \"ROLE_SUPER_ADMIN\", \"ROLE_ALLOWED_TO_SWITCH\"]', '$argon2id$v=19$m=65536,t=4,p=1$T0pmIH3Tld2wEqC/wQap2w$YjTEPvkTEvJmPkGzdab75kt7ITBg2dnagX3ZnvtKgxE', 'Interactive', 'Limeo', NULL, 1, NULL, '2020-09-25 08:38:43', '2020-09-25 08:38:43', '2020-09-25 08:38:43', NULL, NULL, NULL),
(2, 'fbi@mail.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$bPeETSYkmdfN94VmYek1Yg$kRxPPhzko+hXD1oT3Gcx8yWDBk67T4hWo2i/5AlnYp4', 'Scully', 'Dana', NULL, 1, NULL, '2020-09-25 08:46:14', '2020-09-25 08:46:14', '2020-09-25 08:47:12', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_exercice`
--

CREATE TABLE `user_exercice` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `exercice_id` int(11) NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_sent` tinyint(1) NOT NULL,
  `is_correct` tinyint(1) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_exercice`
--

INSERT INTO `user_exercice` (`id`, `user_id`, `exercice_id`, `file`, `is_sent`, `is_correct`, `created_at`, `updated_at`) VALUES
(3, 2, 1, '404.php', 1, NULL, '2020-09-30 14:08:33', '2020-10-01 12:27:23');

-- --------------------------------------------------------

--
-- Table structure for table `user_exercice_comment`
--

CREATE TABLE `user_exercice_comment` (
  `id` int(11) NOT NULL,
  `user_exercice_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `is_seen` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_exercice_comment`
--

INSERT INTO `user_exercice_comment` (`id`, `user_exercice_id`, `user_id`, `comment`, `created_at`, `is_seen`) VALUES
(1, 3, 1, 'bravo Scully !', '2020-10-01 09:35:45', 1),
(2, 3, 1, 'vraiment', '2020-10-01 09:51:49', 1),
(3, 3, 1, 'dernier message', '2020-10-01 11:57:54', 1),
(4, 3, 1, 'c\'est lourd', '2020-10-01 12:27:12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_exercice`
--
ALTER TABLE `course_exercice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_4DACAA1B89D40298` (`exercice_id`),
  ADD KEY `IDX_4DACAA1B591CC992` (`course_id`);

--
-- Indexes for table `course_file`
--
ALTER TABLE `course_file`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_443DEB16591CC992` (`course_id`);

--
-- Indexes for table `course_formation`
--
ALTER TABLE `course_formation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_C2E16113591CC992` (`course_id`),
  ADD KEY `IDX_C2E161135200282E` (`formation_id`);

--
-- Indexes for table `data_role`
--
ALTER TABLE `data_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exercice`
--
ALTER TABLE `exercice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exercice_file`
--
ALTER TABLE `exercice_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exercice_technical_document`
--
ALTER TABLE `exercice_technical_document`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_B82188289D40298` (`exercice_id`),
  ADD KEY `IDX_B821882A18AE339` (`technical_document_id`);

--
-- Indexes for table `figure`
--
ALTER TABLE `figure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formation_user`
--
ALTER TABLE `formation_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_DA4C33095200282E` (`formation_id`),
  ADD KEY `IDX_DA4C3309A76ED395` (`user_id`);

--
-- Indexes for table `free_exercice`
--
ALTER TABLE `free_exercice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rgpd_optin`
--
ALTER TABLE `rgpd_optin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_3AD58EC7A76ED395` (`user_id`);

--
-- Indexes for table `technical_document`
--
ALTER TABLE `technical_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- Indexes for table `user_exercice`
--
ALTER TABLE `user_exercice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_495234DA76ED395` (`user_id`),
  ADD KEY `IDX_495234D89D40298` (`exercice_id`);

--
-- Indexes for table `user_exercice_comment`
--
ALTER TABLE `user_exercice_comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_14DA661C20CFCB0D` (`user_exercice_id`),
  ADD KEY `IDX_14DA661CA76ED395` (`user_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course_exercice`
--
ALTER TABLE `course_exercice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course_file`
--
ALTER TABLE `course_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_formation`
--
ALTER TABLE `course_formation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `data_role`
--
ALTER TABLE `data_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exercice`
--
ALTER TABLE `exercice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exercice_file`
--
ALTER TABLE `exercice_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `exercice_technical_document`
--
ALTER TABLE `exercice_technical_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `figure`
--
ALTER TABLE `figure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `formation`
--
ALTER TABLE `formation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `formation_user`
--
ALTER TABLE `formation_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `free_exercice`
--
ALTER TABLE `free_exercice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rgpd_optin`
--
ALTER TABLE `rgpd_optin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `technical_document`
--
ALTER TABLE `technical_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_exercice`
--
ALTER TABLE `user_exercice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_exercice_comment`
--
ALTER TABLE `user_exercice_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_exercice`
--
ALTER TABLE `course_exercice`
  ADD CONSTRAINT `FK_4DACAA1B591CC992` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`),
  ADD CONSTRAINT `FK_4DACAA1B89D40298` FOREIGN KEY (`exercice_id`) REFERENCES `exercice` (`id`);

--
-- Constraints for table `course_file`
--
ALTER TABLE `course_file`
  ADD CONSTRAINT `FK_443DEB16591CC992` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_formation`
--
ALTER TABLE `course_formation`
  ADD CONSTRAINT `FK_C2E161135200282E` FOREIGN KEY (`formation_id`) REFERENCES `formation` (`id`),
  ADD CONSTRAINT `FK_C2E16113591CC992` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`);

--
-- Constraints for table `exercice_technical_document`
--
ALTER TABLE `exercice_technical_document`
  ADD CONSTRAINT `FK_B82188289D40298` FOREIGN KEY (`exercice_id`) REFERENCES `exercice` (`id`),
  ADD CONSTRAINT `FK_B821882A18AE339` FOREIGN KEY (`technical_document_id`) REFERENCES `technical_document` (`id`);

--
-- Constraints for table `formation_user`
--
ALTER TABLE `formation_user`
  ADD CONSTRAINT `FK_DA4C33095200282E` FOREIGN KEY (`formation_id`) REFERENCES `formation` (`id`),
  ADD CONSTRAINT `FK_DA4C3309A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `rgpd_optin`
--
ALTER TABLE `rgpd_optin`
  ADD CONSTRAINT `FK_3AD58EC7A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user_exercice`
--
ALTER TABLE `user_exercice`
  ADD CONSTRAINT `FK_495234D89D40298` FOREIGN KEY (`exercice_id`) REFERENCES `exercice` (`id`),
  ADD CONSTRAINT `FK_495234DA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user_exercice_comment`
--
ALTER TABLE `user_exercice_comment`
  ADD CONSTRAINT `FK_14DA661C20CFCB0D` FOREIGN KEY (`user_exercice_id`) REFERENCES `user_exercice` (`id`),
  ADD CONSTRAINT `FK_14DA661CA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);