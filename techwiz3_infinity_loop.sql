-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 13, 2022 lúc 03:11 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `techwiz3`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `self_check_symptom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `appointments`
--

INSERT INTO `appointments` (`id`, `user_id`, `department_id`, `hospital_id`, `doctor_id`, `self_check_symptom`, `date`, `time`, `status`, `created_at`, `updated_at`) VALUES
(1, '6', '3', '3', '14', 'Voluptatem iure quis dolor et omnis cupiditate quidem.', '2022-09-03', '08:05:39', 'Done', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(2, '13', '2', '3', '45', 'Rerum et atque sed atque.', '2022-10-02', '17:58:15', 'Accepted', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(3, '12', '5', '2', '46', 'Quia quia et veritatis esse est quia quia.', '2022-09-16', '04:41:17', 'Done', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(4, '7', '3', '4', '16', 'Pariatur ut vel rem dolores labore.', '2022-08-14', '00:02:17', 'Done', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(5, '12', '2', '3', '13', 'Consequatur a et odit minus atque cupiditate.', '2022-10-06', '12:29:15', 'Cancelled', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(6, '7', '2', '1', '13', 'Mollitia totam odit laboriosam ut sit id.', '2022-09-27', '00:06:09', 'Accepted', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(7, '16', '1', '4', '18', 'Blanditiis temporibus eum eius excepturi consectetur illo voluptatibus.', '2022-10-09', '22:14:22', 'Accepted', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(8, '14', '2', '4', '3', 'Et vitae id recusandae.', '2022-09-02', '12:46:01', 'Cancelled', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(9, '11', '4', '3', '48', 'Tempore nihil eum culpa.', '2022-09-20', '16:03:12', 'Done', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(10, '9', '4', '2', '44', 'Ipsam praesentium quod saepe sed eius adipisci architecto et.', '2022-08-24', '14:22:58', 'Accepted', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(11, '9', '1', '1', '23', 'Quis quia odio iste.', '2022-10-07', '18:44:54', 'Done', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(12, '6', '5', '2', '34', 'Delectus at voluptas reprehenderit ut blanditiis.', '2022-10-03', '12:03:31', 'Accepted', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(13, '11', '4', '3', '29', 'At officiis exercitationem eaque id cupiditate quia.', '2022-09-08', '09:03:39', 'Cancelled', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(14, '9', '1', '2', '14', 'Officia eos esse nostrum magni.', '2022-10-11', '06:23:44', 'Accepted', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(15, '6', '4', '4', '4', 'Enim molestiae laborum laboriosam corrupti.', '2022-09-15', '22:06:01', 'Accepted', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(16, '7', '5', '1', '42', 'Labore architecto voluptatibus sint assumenda consequatur placeat ut.', '2022-08-22', '16:47:56', 'Cancelled', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(17, '7', '2', '4', '18', 'Eos tempora voluptatibus esse alias.', '2022-08-27', '13:16:11', 'Cancelled', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(18, '12', '2', '1', '12', 'Blanditiis a quo aut.', '2022-09-23', '19:09:02', 'Accepted', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(19, '14', '5', '1', '16', 'Dicta placeat nihil vero sint dolorem dolorum soluta.', '2022-10-07', '23:40:08', 'Done', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(20, '8', '5', '1', '41', 'Eos unde ut modi libero est pariatur.', '2022-10-05', '23:29:28', 'Done', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(21, '10', '4', '2', '4', 'Et labore aliquam ut et at quidem molestiae.', '2022-09-18', '08:02:10', 'Accepted', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(22, '10', '3', '1', '6', 'Voluptate quis vel ea deleniti.', '2022-08-26', '03:12:33', 'Accepted', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(23, '15', '5', '2', '10', 'Libero quo fugit dolores sit.', '2022-08-24', '20:03:45', 'Accepted', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(24, '10', '3', '2', '48', 'Et ipsam iusto velit modi enim labore.', '2022-09-03', '05:29:59', 'Done', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(25, '13', '1', '1', '27', 'Porro repellendus quod deserunt voluptatem dolores ut.', '2022-08-27', '20:58:23', 'Done', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(26, '9', '4', '4', '25', 'Iusto cupiditate alias et quisquam officiis eos nihil.', '2022-10-03', '10:17:07', 'Accepted', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(27, '16', '1', '3', '33', 'Veniam pariatur harum sed veniam odit.', '2022-09-13', '15:33:24', 'Cancelled', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(28, '13', '1', '4', '17', 'Eaque quia sed assumenda.', '2022-09-11', '16:42:40', 'Done', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(29, '13', '1', '3', '44', 'Recusandae debitis dolores quo magnam illo aspernatur.', '2022-09-18', '18:59:15', 'Done', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(30, '15', '2', '1', '12', 'Dolore dolore alias odit eos quam.', '2022-09-16', '07:47:18', 'Cancelled', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(31, '12', '4', '2', '40', 'Aut soluta veritatis soluta quibusdam dicta enim aliquam.', '2022-10-08', '11:59:07', 'Done', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(32, '12', '5', '3', '14', 'Ipsum et quis voluptate occaecati.', '2022-10-11', '13:16:09', 'Accepted', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(33, '15', '2', '3', '37', 'Autem ipsam quos in voluptatem dolorum voluptatem.', '2022-09-02', '09:38:55', 'Done', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(34, '7', '2', '4', '19', 'Voluptatem qui voluptas laborum quos veniam provident quos.', '2022-09-21', '14:46:26', 'Cancelled', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(35, '12', '4', '2', '12', 'Consectetur qui saepe explicabo atque expedita non adipisci.', '2022-09-09', '01:25:36', 'Cancelled', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(36, '11', '1', '4', '48', 'Voluptatibus nobis ut est et qui illum.', '2022-08-18', '03:34:41', 'Done', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(37, '13', '2', '1', '21', 'Optio porro deleniti rerum earum.', '2022-10-10', '07:23:53', 'Done', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(38, '9', '5', '2', '41', 'Aliquid aut velit dolore aliquid voluptatem eos.', '2022-09-09', '20:29:00', 'Done', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(39, '14', '5', '2', '48', 'Libero et ullam corporis temporibus et.', '2022-08-21', '21:07:56', 'Accepted', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(40, '13', '3', '2', '50', 'Totam ea laborum velit.', '2022-09-28', '01:24:55', 'Accepted', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(41, '7', '4', '4', '7', 'Voluptatem quasi voluptatem reiciendis suscipit ex nam.', '2022-08-18', '19:42:42', 'Done', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(42, '16', '1', '2', '25', 'Sint facere tempora eos dolorem in.', '2022-08-23', '08:00:13', 'Done', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(43, '14', '4', '1', '47', 'Quia cum quis et ut distinctio nesciunt.', '2022-10-13', '20:58:58', 'Accepted', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(44, '15', '4', '1', '6', 'Numquam dolores deleniti neque numquam sed debitis.', '2022-09-26', '01:00:01', 'Accepted', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(45, '16', '2', '4', '27', 'Illum quia numquam nulla itaque quo voluptas dolores dolor.', '2022-09-12', '00:24:02', 'Accepted', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(46, '7', '1', '3', '35', 'Delectus culpa natus maxime est.', '2022-10-06', '06:24:50', 'Done', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(47, '6', '3', '1', '2', 'Laboriosam dolor vero debitis quasi occaecati ratione.', '2022-09-01', '17:49:10', 'Accepted', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(48, '11', '4', '2', '25', 'Repellat nobis dolore doloremque ipsam qui consequuntur animi ut.', '2022-08-22', '15:19:39', 'Accepted', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(49, '12', '4', '1', '8', 'Culpa eos repellendus perspiciatis voluptatem ullam.', '2022-10-12', '14:50:32', 'Cancelled', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(50, '11', '3', '3', '20', 'Velit et iure nihil dolore cupiditate.', '2022-08-19', '21:22:16', 'Accepted', '2022-08-13 13:10:35', '2022-08-13 13:10:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `check_out_histories`
--

CREATE TABLE `check_out_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `symptoms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conclusion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `check_out_histories`
--

INSERT INTO `check_out_histories` (`id`, `user_id`, `department_id`, `hospital_id`, `symptoms`, `conclusion`, `staff_id`, `doctor_id`, `created_at`, `updated_at`) VALUES
(1, '56', '13', '1', 'Architecto voluptas architecto explicabo qui voluptatem nisi illo velit.', 'Accusantium et consequatur quis est in veritatis maxime.', '9', '46', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(2, '50', '16', '7', 'Odit aut vel quasi.', 'Iure sint quam dolores dicta distinctio.', '7', '38', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(3, '67', '4', '6', 'Reiciendis quo commodi sunt maiores eius est.', 'Necessitatibus libero vitae qui delectus qui dolore et.', '9', '11', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(4, '97', '16', '10', 'Aut animi nam quia omnis natus et dolores.', 'At fugit sint qui qui aut architecto sapiente.', '2', '41', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(5, '16', '6', '6', 'Sed cupiditate adipisci beatae.', 'Exercitationem reprehenderit voluptatibus praesentium minima autem atque.', '3', '37', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(6, '68', '20', '2', 'Nesciunt totam eos doloribus omnis eos quaerat exercitationem veniam.', 'Velit aut ea aut nemo et reiciendis ullam.', '2', '40', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(7, '78', '12', '10', 'Consequatur nesciunt sunt id.', 'In ea sapiente eveniet vero molestiae ut vero nemo.', '4', '39', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(8, '31', '8', '8', 'Esse nemo eos nisi voluptates quos.', 'Nemo numquam quos eaque asperiores cum.', '3', '22', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(9, '86', '10', '4', 'Atque sunt doloremque cupiditate aut non.', 'Enim ad provident ea natus delectus saepe.', '8', '28', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(10, '32', '12', '1', 'Impedit vero dignissimos voluptatum veniam accusamus enim.', 'Totam quo doloribus sequi inventore non temporibus facere.', '9', '50', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(11, '68', '15', '2', 'Consectetur est modi numquam magnam id pariatur dolore.', 'Temporibus enim aut laboriosam sed recusandae sed omnis.', '8', '26', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(12, '94', '2', '1', 'Omnis modi distinctio qui dolores optio fuga.', 'Minus quia sequi est voluptatem.', '2', '7', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(13, '56', '8', '3', 'Nemo minus odio quod rerum.', 'Odio est non itaque assumenda sed id.', '9', '17', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(14, '102', '5', '10', 'Rerum aut qui qui esse.', 'Dolor incidunt consequatur provident dicta enim facilis.', '8', '22', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(15, '74', '12', '2', 'Odio quia libero modi.', 'Fugiat et iusto et eos rerum quaerat.', '7', '4', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(16, '39', '3', '8', 'Accusamus et non in sequi numquam eos voluptates dolores.', 'Voluptates inventore cum sit aut qui labore est.', '1', '7', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(17, '88', '7', '9', 'Ut ullam hic maiores aspernatur impedit ab.', 'Ut maxime qui cum.', '4', '22', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(18, '97', '6', '6', 'Rerum fugit blanditiis explicabo repellendus.', 'Sed pariatur aliquam ratione nemo rerum et in ut.', '2', '15', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(19, '102', '15', '9', 'Soluta quia cumque quasi est.', 'Corrupti dolorem distinctio ducimus dolore minima qui saepe.', '6', '12', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(20, '44', '17', '3', 'Blanditiis et beatae velit fuga et repellat non.', 'Sunt est iusto doloribus culpa quibusdam modi voluptatem.', '9', '8', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(21, '77', '15', '5', 'Eos sit qui quo ipsam et velit facilis.', 'Voluptatem voluptatem quos qui numquam et.', '5', '34', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(22, '35', '20', '4', 'Aut ab ullam cumque quia quam.', 'Hic ut ab et quo in.', '4', '7', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(23, '66', '17', '7', 'Id voluptatem ea eligendi omnis amet impedit.', 'Voluptatem quam aut numquam corrupti mollitia libero qui.', '7', '38', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(24, '33', '20', '4', 'Debitis amet enim commodi autem quisquam aut recusandae.', 'Quo corporis qui necessitatibus rerum deleniti aspernatur.', '6', '11', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(25, '44', '16', '10', 'Omnis omnis magni fuga.', 'Dolorum non optio aut asperiores aliquid vero.', '1', '22', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(26, '45', '4', '8', 'Dolorem ut recusandae et et est.', 'Et dignissimos sunt sequi sunt.', '8', '35', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(27, '71', '15', '3', 'Et sunt occaecati magnam temporibus ratione.', 'Nam nihil eaque accusamus praesentium ut dolores voluptatem suscipit.', '8', '9', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(28, '96', '4', '3', 'Soluta ducimus sed quae laudantium qui sequi.', 'Omnis sed praesentium animi adipisci omnis est.', '7', '10', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(29, '79', '7', '7', 'Cupiditate quisquam aliquid dignissimos distinctio alias numquam.', 'Corporis totam magnam neque et.', '9', '13', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(30, '43', '5', '6', 'Porro qui totam dolore adipisci minima.', 'Fugit accusantium fuga tempore sit dolore et optio.', '6', '9', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(31, '90', '16', '3', 'Et autem alias eaque qui labore veniam.', 'Laborum qui delectus sunt.', '3', '16', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(32, '15', '11', '8', 'Modi quis occaecati dolorem non totam quas.', 'Qui nihil culpa autem distinctio ipsum.', '5', '30', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(33, '79', '5', '5', 'Sed expedita illo reprehenderit.', 'Ipsa in incidunt aut dolor.', '2', '6', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(34, '61', '19', '6', 'Quaerat delectus repudiandae non soluta.', 'Voluptas non voluptate quia perferendis ipsum qui atque.', '3', '49', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(35, '55', '18', '3', 'Consequuntur exercitationem dolor quam magni omnis illum placeat.', 'Odio aut odit ea magni qui qui illum.', '5', '50', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(36, '61', '18', '9', 'Aperiam nihil similique dignissimos totam iure.', 'Nemo id eveniet quibusdam unde in sit.', '4', '18', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(37, '97', '19', '3', 'Hic a architecto est minima eos accusamus non.', 'Sunt occaecati nostrum officiis dolores aperiam corporis.', '7', '44', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(38, '99', '12', '1', 'Expedita voluptatibus et possimus repellendus placeat.', 'Totam dolorem aliquid eius velit.', '9', '8', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(39, '99', '17', '8', 'Quibusdam vel nobis similique in fugiat sint.', 'Rem laboriosam eius voluptas recusandae.', '3', '44', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(40, '57', '7', '9', 'Doloribus mollitia autem vel sed soluta ratione.', 'Sapiente magni odio aut accusamus eius aperiam cupiditate aut.', '9', '17', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(41, '44', '5', '7', 'Aperiam itaque libero ab voluptas.', 'Mollitia minima itaque natus ut tenetur recusandae.', '6', '29', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(42, '55', '16', '10', 'Quasi illum nisi sunt aut.', 'Beatae excepturi explicabo ut.', '4', '16', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(43, '9', '3', '9', 'Necessitatibus dolorem iste delectus a facilis voluptates molestiae.', 'Id dolor itaque ad sint vel facere dolorem rerum.', '1', '44', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(44, '26', '4', '6', 'Accusamus at qui quaerat rem facilis.', 'Occaecati rerum provident eligendi minus quam facilis vel.', '2', '14', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(45, '48', '4', '8', 'Perferendis laboriosam blanditiis amet quaerat voluptatibus totam.', 'Sed qui beatae architecto ducimus.', '4', '39', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(46, '104', '4', '7', 'Molestiae in voluptatum aliquam accusamus.', 'Veniam corrupti impedit nesciunt ducimus corrupti voluptatem nobis sit.', '8', '22', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(47, '53', '1', '2', 'Porro necessitatibus optio nihil ipsam.', 'Velit recusandae ut aut nisi doloribus ex facere.', '8', '8', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(48, '37', '14', '4', 'Beatae consequatur laudantium expedita excepturi quas dolor rerum.', 'Fuga ut dolore impedit.', '7', '8', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(49, '27', '5', '1', 'Est corrupti incidunt reiciendis explicabo vel quis.', 'Numquam aut velit repudiandae.', '9', '8', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(50, '82', '14', '8', 'Et dolores architecto laborum at earum nobis ut quia.', 'Vel dolorem dolores omnis autem earum dignissimos et nostrum.', '3', '49', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(51, '73', '7', '3', 'Vel nulla saepe voluptatem aut qui error reiciendis.', 'Natus eos et aperiam possimus voluptatibus ad soluta.', '4', '1', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(52, '66', '11', '6', 'Tenetur ut consequatur sapiente accusantium consequatur omnis repellat.', 'Magni voluptatem fuga accusantium quia.', '2', '29', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(53, '59', '14', '5', 'Aut sint aut omnis magnam animi est sequi.', 'Eos quaerat quaerat aut id cum.', '8', '6', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(54, '29', '3', '8', 'Incidunt non qui necessitatibus nulla.', 'Quia vel qui ut incidunt.', '2', '36', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(55, '100', '9', '2', 'Amet et maiores nulla voluptatem.', 'Ducimus in doloribus temporibus quo.', '6', '24', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(56, '36', '15', '9', 'Consequatur quasi atque praesentium minima ratione et.', 'Tenetur quia non beatae.', '7', '18', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(57, '77', '6', '3', 'Ipsam voluptatem quia a.', 'Officiis quia a voluptas et qui aut.', '8', '45', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(58, '84', '1', '2', 'Perferendis quidem quam numquam consequatur.', 'Doloribus aperiam consequatur ut ut ex.', '3', '25', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(59, '17', '12', '10', 'Fugiat quia ut molestias accusamus.', 'Natus reprehenderit placeat neque sapiente id eveniet.', '4', '48', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(60, '105', '11', '9', 'Repellat voluptate rem iure ipsam porro rerum recusandae.', 'Quo molestiae molestiae debitis incidunt delectus voluptas.', '7', '44', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(61, '70', '3', '5', 'Et quibusdam voluptatem laudantium quos esse dicta illo fugiat.', 'Aut exercitationem cum eius eius explicabo perferendis officia.', '9', '23', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(62, '106', '18', '1', 'Laborum optio aut voluptatibus ut consectetur voluptatem harum quaerat.', 'Qui cumque et modi quia consequatur et.', '2', '14', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(63, '86', '10', '7', 'Non asperiores vel cum sunt sit.', 'Porro rem possimus qui laudantium nostrum.', '7', '12', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(64, '31', '19', '9', 'A eum ipsum possimus ut quasi quae.', 'Autem eaque vitae autem in voluptates reprehenderit.', '6', '6', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(65, '105', '16', '1', 'Laudantium ea aut consequatur.', 'Quia et asperiores et voluptas vero dolores culpa.', '7', '8', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(66, '37', '8', '7', 'Praesentium minima nostrum vitae deserunt a vitae.', 'Aliquam sunt esse eum dolore ipsum aut molestiae.', '9', '47', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(67, '80', '2', '6', 'Corporis sunt in repellat rerum est qui.', 'Illum consequatur et iste minima aut sit eveniet.', '4', '2', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(68, '30', '4', '5', 'Atque est ea provident qui.', 'Asperiores accusamus temporibus mollitia.', '3', '1', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(69, '91', '16', '6', 'Ut quos amet voluptates in vel nulla eos.', 'Ea ipsam et ut exercitationem velit sunt.', '8', '23', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(70, '39', '19', '10', 'Ipsum et ut neque velit et est doloribus.', 'Rem amet aut minima necessitatibus.', '8', '13', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(71, '37', '10', '9', 'Iure unde sint voluptatem.', 'Esse dolores occaecati in ullam nobis.', '9', '6', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(72, '19', '17', '7', 'Repudiandae eligendi quaerat reprehenderit.', 'Sit voluptatem sequi non voluptas velit et ex.', '8', '41', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(73, '82', '6', '5', 'Eos minima nemo eaque quia eligendi.', 'Aut ipsa eum ea quae provident.', '3', '28', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(74, '37', '20', '7', 'Dolorem beatae quidem qui velit et.', 'Quo odit facere dolore nihil delectus corporis.', '7', '30', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(75, '67', '9', '4', 'Corrupti provident possimus ut ut sunt impedit quia est.', 'Laborum recusandae aut vel eligendi consequatur dicta autem et.', '8', '40', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(76, '63', '20', '10', 'Adipisci culpa vitae non iusto aliquid.', 'Non doloribus atque culpa est aut.', '8', '12', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(77, '17', '17', '7', 'Eveniet modi qui dolor exercitationem est doloribus dolorum.', 'Vel a magni asperiores.', '1', '27', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(78, '65', '1', '6', 'Laboriosam omnis animi alias animi.', 'Maxime pariatur vitae minima ipsum vero quidem est officiis.', '5', '33', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(79, '87', '1', '10', 'Alias voluptatem dolorum reprehenderit temporibus.', 'Voluptate ducimus est magnam ducimus minus necessitatibus.', '9', '47', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(80, '11', '1', '8', 'Voluptatum et et eius voluptate voluptas quasi.', 'Non nihil eum facere modi.', '2', '19', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(81, '61', '8', '6', 'Nesciunt quia sunt aut quisquam et.', 'Et sint et quibusdam est quis.', '7', '1', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(82, '67', '12', '6', 'Enim eius commodi magnam qui rem praesentium.', 'Maiores libero cupiditate nisi consequuntur deleniti non ex harum.', '2', '3', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(83, '61', '17', '10', 'Ducimus iste dolor autem ut et eligendi.', 'Et nam quam officia dolor id.', '5', '4', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(84, '24', '8', '8', 'Non est ut quidem pariatur aut.', 'Maxime eum iusto est quaerat a nihil qui.', '10', '6', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(85, '11', '3', '6', 'Commodi saepe rerum dignissimos est fuga.', 'Reprehenderit voluptatem esse eligendi voluptatum.', '7', '42', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(86, '25', '2', '4', 'Nostrum fugit non quia ullam.', 'Earum consequatur omnis voluptatem qui.', '1', '46', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(87, '63', '13', '1', 'Et voluptas voluptatem dignissimos.', 'Quaerat aut maiores recusandae rerum harum corrupti officia.', '7', '36', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(88, '43', '3', '8', 'Quam itaque tempore molestiae exercitationem animi ullam deleniti.', 'Vel excepturi autem magni amet rerum.', '3', '17', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(89, '48', '8', '4', 'Nesciunt aliquid aut harum minima nulla nisi.', 'Omnis accusantium necessitatibus tenetur itaque ipsa est recusandae.', '9', '37', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(90, '86', '9', '4', 'Ut sit enim adipisci commodi veritatis quaerat assumenda.', 'Vel excepturi nam exercitationem voluptatum enim qui.', '8', '17', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(91, '24', '8', '9', 'Consectetur dicta cum assumenda sit doloribus rerum.', 'Aut libero rerum et impedit quas.', '6', '36', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(92, '85', '11', '8', 'Sunt quas qui sit ut.', 'Id ratione placeat magni eum est.', '5', '42', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(93, '29', '12', '5', 'Et est illo quam placeat beatae labore.', 'Minus est architecto rerum provident est tenetur.', '2', '48', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(94, '41', '6', '3', 'Enim sunt voluptatem consequatur nesciunt rem ab.', 'Eius quae error eum tempora distinctio libero.', '4', '19', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(95, '50', '3', '5', 'Occaecati animi non dignissimos eos est.', 'Hic suscipit delectus occaecati qui.', '6', '47', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(96, '96', '9', '9', 'Eos perspiciatis qui in quis ut possimus a.', 'Expedita qui quisquam error voluptatem omnis.', '4', '28', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(97, '16', '11', '8', 'Aliquam consequatur sint dolores consequatur voluptas hic eos.', 'Et voluptates nihil reprehenderit eos vel et.', '8', '50', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(98, '39', '17', '5', 'Consequatur laboriosam molestiae accusantium rem et voluptas eos.', 'Similique voluptas accusamus totam occaecati qui cumque provident excepturi.', '2', '16', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(99, '42', '4', '8', 'Qui autem aspernatur perferendis molestiae id debitis blanditiis.', 'Natus at autem doloremque necessitatibus aut facere.', '7', '3', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(100, '89', '8', '6', 'Non amet nihil qui harum maxime impedit.', 'Ea nostrum error aliquid unde minus eos alias et.', '6', '48', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(101, '56', '18', '9', 'Corporis omnis eligendi corporis ut optio possimus.', 'Blanditiis qui sequi vel.', '1', '15', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(102, '83', '19', '4', 'Quibusdam eveniet quis aut aliquam nemo dolorem.', 'Eos itaque quia omnis repellat tempora exercitationem dolore.', '4', '5', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(103, '46', '6', '5', 'Maiores consectetur voluptatum adipisci laboriosam et delectus.', 'In voluptatem et ut aut velit architecto nobis voluptas.', '9', '38', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(104, '50', '7', '6', 'Voluptatem ea sequi at repellendus excepturi aliquid.', 'Porro ea quo sed non.', '8', '27', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(105, '16', '9', '6', 'Sunt accusamus delectus culpa accusamus et at rerum.', 'Aspernatur qui sint aspernatur.', '7', '5', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(106, '23', '10', '8', 'Dolorem iure repellendus molestiae aliquid fugit consequuntur consectetur.', 'Corrupti et et molestias harum nulla atque.', '8', '50', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(107, '84', '9', '9', 'Est libero pariatur in et cupiditate id.', 'Culpa et accusamus iusto soluta adipisci molestiae tenetur.', '2', '22', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(108, '79', '8', '5', 'Vero maxime laborum rerum reiciendis deleniti laborum quia.', 'Qui culpa incidunt ipsum harum minima et accusamus.', '2', '18', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(109, '70', '15', '3', 'Voluptatem quasi tenetur consequatur sed repellat qui suscipit.', 'Architecto assumenda quos reiciendis officiis sit id saepe.', '4', '3', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(110, '67', '7', '5', 'Ducimus aspernatur consequuntur aut non qui impedit ut.', 'Rerum provident dolores eum deleniti non possimus.', '10', '2', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(111, '97', '2', '8', 'Consectetur quia perspiciatis distinctio.', 'Unde vel excepturi sunt tenetur similique.', '9', '7', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(112, '36', '10', '2', 'Temporibus excepturi itaque eum.', 'Necessitatibus eaque voluptatum eos deleniti ipsum.', '8', '46', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(113, '59', '7', '8', 'Doloribus sint et et provident sed nulla.', 'Doloremque voluptatum consequatur rem est officiis.', '5', '15', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(114, '24', '20', '7', 'Repudiandae quia reiciendis quidem minus non et.', 'Natus itaque voluptas quo repellendus.', '10', '12', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(115, '87', '16', '9', 'Non et aspernatur nisi voluptatem architecto accusantium qui.', 'Velit ipsum voluptates iste veniam alias est fugit.', '6', '40', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(116, '92', '6', '4', 'Non sint voluptas accusamus veniam ut.', 'Dicta quis quidem velit culpa.', '2', '15', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(117, '93', '2', '9', 'Animi iure aliquam itaque dolor vitae sed aut.', 'Qui et aut ut qui praesentium ut aut consequatur.', '1', '7', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(118, '93', '11', '1', 'Aliquam non rerum adipisci ullam deleniti soluta assumenda.', 'Provident vitae dolorem esse sint consequatur.', '4', '35', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(119, '44', '19', '8', 'Nam dolorem quia in nostrum qui nobis magnam minus.', 'Quia at id recusandae nobis dolore quae.', '10', '4', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(120, '50', '3', '3', 'Earum odit pariatur libero rerum in.', 'Consequatur explicabo quam illo explicabo tenetur repudiandae.', '6', '21', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(121, '102', '13', '6', 'Culpa voluptatem dignissimos exercitationem temporibus.', 'Qui consequatur porro molestias autem aliquam doloribus et.', '2', '35', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(122, '106', '16', '5', 'Fugit hic qui similique voluptatem aut.', 'Ex corporis tenetur aut debitis voluptatem numquam.', '7', '20', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(123, '34', '10', '3', 'Amet nulla optio deserunt neque ut voluptas.', 'Deserunt nihil sed ex perferendis.', '4', '35', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(124, '73', '12', '3', 'Impedit aut nesciunt est dignissimos quidem.', 'Aut minima voluptate et consectetur temporibus dolorem aliquid.', '10', '46', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(125, '90', '10', '8', 'Tenetur voluptate veritatis tenetur dicta et.', 'Cum sed amet iusto sunt modi expedita.', '10', '40', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(126, '86', '11', '8', 'Quos est facilis sed veritatis ab nulla deserunt.', 'Qui odio vel laudantium molestiae nostrum perferendis.', '1', '20', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(127, '26', '12', '3', 'Tempora repellendus ea enim rerum reiciendis eum ratione.', 'Amet autem odio sit iure et.', '7', '39', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(128, '70', '2', '7', 'Inventore harum reiciendis sint non quaerat quam.', 'Tenetur magnam quia aspernatur possimus praesentium.', '3', '8', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(129, '15', '18', '7', 'Nihil ex doloribus quia dolores.', 'Sed rerum a aut aut.', '10', '25', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(130, '25', '7', '9', 'Error illo quae dolorem aliquam quos minus.', 'Quaerat possimus illum eum sit quod.', '10', '30', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(131, '80', '11', '7', 'Similique repellendus modi enim animi ut error.', 'Rem facilis et ut.', '10', '32', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(132, '23', '16', '9', 'Consequatur qui hic aliquid rerum totam.', 'Magnam tenetur beatae sed explicabo est quia quos eos.', '2', '46', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(133, '66', '15', '3', 'Hic ab aut laborum.', 'Ut excepturi ipsum dolores.', '6', '8', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(134, '85', '19', '6', 'Autem molestiae molestiae quas voluptatem consectetur occaecati.', 'Tempore quos expedita ut aut aut expedita.', '8', '47', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(135, '66', '14', '6', 'Deleniti et corrupti autem dolor ut beatae.', 'Autem consequatur consectetur fugiat.', '6', '8', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(136, '85', '15', '5', 'Corporis sint aut expedita rerum repudiandae qui.', 'Quis atque qui aut in consequatur nostrum eius.', '4', '8', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(137, '82', '7', '7', 'Earum ipsum natus autem totam pariatur.', 'Non et dolores quae facere.', '1', '14', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(138, '12', '12', '4', 'Vel veritatis quidem laboriosam est vel.', 'Culpa eum autem et corporis facere ea ut.', '10', '35', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(139, '37', '18', '6', 'Est esse ullam qui aut exercitationem dolore.', 'Quia voluptates ducimus maiores tenetur quaerat beatae.', '5', '27', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(140, '23', '19', '2', 'Culpa nihil sed enim amet non accusantium.', 'Est voluptas veritatis excepturi libero et.', '5', '1', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(141, '54', '10', '5', 'Eaque labore minima non.', 'Architecto et et ullam quo sequi sed ut.', '8', '3', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(142, '42', '12', '3', 'Quia ut voluptate in et sint nulla.', 'Laboriosam nesciunt adipisci neque voluptatem totam.', '5', '18', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(143, '30', '6', '1', 'Odio porro et nihil ratione voluptas.', 'Eligendi est sed voluptates placeat quis fuga.', '10', '8', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(144, '37', '6', '10', 'Laudantium voluptates dolores eum error odit ullam.', 'Officia architecto hic expedita animi rem consequatur.', '9', '35', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(145, '49', '3', '4', 'Repudiandae minus ipsum assumenda nostrum quis error omnis.', 'Nihil non libero enim nostrum nemo animi animi.', '7', '49', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(146, '65', '2', '7', 'Non at dignissimos sunt perspiciatis.', 'Voluptatem ipsum illo necessitatibus soluta quo alias ex.', '8', '6', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(147, '38', '13', '1', 'Delectus accusamus dolor laudantium quae labore nam dolorum.', 'Veritatis enim sequi eum cupiditate expedita impedit aut quisquam.', '5', '12', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(148, '98', '16', '10', 'Quas libero non similique et et nostrum quo.', 'Dolore aut vitae quo est adipisci.', '5', '8', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(149, '34', '8', '8', 'Veritatis vel praesentium vitae vitae.', 'Qui a consequuntur est perferendis explicabo.', '1', '23', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(150, '19', '19', '9', 'Vel repellendus sit est consequatur natus nihil aut.', 'Laudantium labore sint doloremque in similique.', '7', '48', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(151, '48', '2', '9', 'Odio vel error mollitia omnis.', 'Fugiat fugit aliquam qui.', '4', '30', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(152, '29', '18', '3', 'Perspiciatis nostrum sit mollitia ut autem adipisci in.', 'Eos alias velit harum ut et voluptatem maiores.', '5', '48', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(153, '85', '2', '5', 'Fugit consequatur numquam excepturi laboriosam occaecati.', 'Rerum labore ipsam ratione sed in nostrum.', '1', '28', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(154, '80', '14', '1', 'Veniam nam iusto et commodi.', 'Qui molestiae odit dolores et porro.', '10', '3', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(155, '70', '7', '10', 'Voluptatem ut alias ut at nihil qui nostrum.', 'Corporis libero aut eligendi tempora eum ipsam.', '7', '44', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(156, '65', '1', '8', 'Fuga qui minima ipsum ipsa.', 'Sit delectus et est quis ratione minus.', '8', '29', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(157, '69', '1', '9', 'Corporis earum possimus sed assumenda laboriosam.', 'Perferendis ut suscipit quod praesentium ut asperiores.', '1', '43', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(158, '42', '4', '7', 'Nemo debitis et in tempora ut consequuntur hic.', 'Sed non quo est blanditiis.', '1', '45', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(159, '60', '17', '6', 'Praesentium facilis distinctio autem qui quos.', 'At aut placeat sunt autem sunt aliquid.', '7', '22', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(160, '72', '7', '4', 'Aut recusandae officia non eveniet nihil aut nulla.', 'Unde ducimus minima totam tempora quia.', '7', '6', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(161, '30', '4', '10', 'Odio mollitia quaerat consequatur tenetur iure.', 'Tempora iure ut enim omnis porro.', '9', '49', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(162, '80', '19', '10', 'Dolore nemo nihil ad.', 'Voluptatem asperiores excepturi unde autem.', '3', '40', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(163, '73', '7', '4', 'Voluptas eius culpa voluptatum nemo cum.', 'Omnis sint dolores et.', '5', '27', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(164, '64', '2', '10', 'Numquam delectus doloremque velit deleniti architecto ullam.', 'Laborum odio error quibusdam et recusandae necessitatibus.', '10', '29', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(165, '71', '12', '9', 'Perspiciatis sequi optio consectetur enim enim.', 'Eum et vel quaerat aliquid autem.', '1', '8', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(166, '103', '4', '1', 'Cupiditate doloribus eos aut nulla voluptatum at.', 'Ex quas ut soluta culpa voluptatem est.', '2', '49', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(167, '90', '7', '4', 'Doloribus quis perspiciatis molestiae quo dolorem sit.', 'Ut atque accusamus temporibus saepe nihil est suscipit.', '2', '16', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(168, '27', '12', '7', 'Eum libero rem ipsam nemo doloremque deleniti quis.', 'Vel nesciunt voluptates dolorum quae illum impedit.', '10', '36', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(169, '70', '20', '8', 'Sint animi et animi sunt eum minima doloribus.', 'Sunt ut veritatis ducimus in itaque optio unde.', '1', '16', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(170, '60', '17', '3', 'Nam vel dolor et dolores voluptate incidunt in animi.', 'Assumenda aspernatur est aut non ex.', '8', '24', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(171, '101', '18', '1', 'Quos hic reprehenderit vel et eos autem et.', 'Deserunt eius ut hic omnis.', '5', '24', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(172, '38', '14', '10', 'Sit dolor et alias in.', 'Occaecati aspernatur autem quis sed ut.', '4', '47', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(173, '55', '14', '2', 'Amet voluptatem enim odio eveniet.', 'Nostrum ipsum soluta quaerat quia a.', '1', '10', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(174, '24', '1', '2', 'Et culpa aut minima ut et.', 'Culpa rerum incidunt molestiae aut adipisci nihil.', '5', '1', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(175, '14', '8', '10', 'Ducimus voluptas expedita deserunt quisquam molestiae aut ab.', 'Culpa nemo quis dolores accusamus inventore dolorum velit.', '3', '46', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(176, '25', '4', '10', 'Sint eum mollitia dolores excepturi minima corrupti voluptatem.', 'Quo voluptatem dolor quia nobis reprehenderit similique.', '10', '44', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(177, '95', '8', '4', 'Eum autem sit veniam nobis fugiat enim inventore.', 'Quibusdam et cupiditate quia ducimus vero.', '9', '45', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(178, '46', '3', '7', 'Odit dolorem facere adipisci.', 'Tempora laudantium repellat deleniti expedita animi accusamus.', '6', '27', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(179, '52', '20', '9', 'Doloribus qui quos excepturi et.', 'Esse qui rerum et accusantium ad voluptatem et.', '7', '44', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(180, '49', '12', '7', 'Est nulla quia aut illum expedita.', 'Aut dignissimos odio ut reiciendis quo quibusdam.', '3', '34', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(181, '35', '19', '8', 'Ut placeat at similique officiis sit.', 'Beatae quia laboriosam autem sapiente laborum blanditiis.', '9', '22', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(182, '57', '4', '5', 'Asperiores ea dolor a aliquid eum ut voluptates qui.', 'Nulla voluptatum quia voluptates.', '8', '23', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(183, '19', '6', '4', 'Quod dolore nemo accusamus quam.', 'Eum ea pariatur fuga.', '4', '36', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(184, '46', '8', '3', 'Cum illum adipisci numquam voluptatum error quos qui voluptatibus.', 'Aut nam ratione suscipit et placeat et.', '5', '31', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(185, '71', '7', '8', 'Corporis nisi tempora praesentium amet.', 'Provident incidunt vel consequatur rerum enim numquam.', '3', '18', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(186, '94', '15', '7', 'Temporibus temporibus et officiis neque quis pariatur ratione quibusdam.', 'Nisi omnis et aut qui in velit unde.', '1', '45', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(187, '25', '7', '3', 'Numquam dolor dolore quaerat qui vel fugit quis fugit.', 'Sint vero ut at ut assumenda quisquam.', '6', '16', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(188, '19', '6', '9', 'Hic architecto aliquam tempore omnis qui qui enim.', 'Ex labore aut voluptas doloremque neque.', '3', '7', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(189, '32', '4', '3', 'Id facilis qui a quis quo expedita.', 'Itaque ut nostrum est aliquid qui nostrum amet.', '3', '10', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(190, '71', '14', '4', 'Provident iure non expedita odio tempore fugiat suscipit vero.', 'Maiores amet excepturi repudiandae ad dolore fugiat ea.', '2', '16', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(191, '25', '1', '7', 'Consectetur exercitationem quidem mollitia qui.', 'Sint est deleniti et quas voluptatibus.', '1', '10', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(192, '41', '8', '9', 'Et eum quia odit et libero laudantium.', 'At quaerat laboriosam sed rerum rerum.', '10', '14', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(193, '16', '8', '8', 'Qui provident debitis molestias.', 'Enim voluptatibus fugit earum.', '10', '21', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(194, '20', '17', '5', 'Id ut eligendi ea sed.', 'Repudiandae fugit inventore beatae nemo similique ut vel.', '6', '38', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(195, '104', '9', '7', 'Possimus ea excepturi aperiam tenetur cupiditate saepe.', 'Mollitia consequatur magnam minima.', '8', '6', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(196, '80', '2', '8', 'Perspiciatis voluptatem aut quo eius.', 'Molestiae repellendus autem autem doloribus ipsum.', '6', '9', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(197, '42', '12', '4', 'Laborum minima id nemo voluptate vero aliquid.', 'Eaque molestias itaque amet vero.', '10', '13', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(198, '73', '16', '8', 'Ipsam eius aut omnis optio.', 'Temporibus et et repudiandae odit est laudantium.', '4', '20', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(199, '6', '7', '2', 'Fugiat sint quas reiciendis consequatur impedit magni pariatur.', 'Et illo iusto in perferendis.', '4', '19', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(200, '84', '14', '1', 'Facere et delectus est est iure.', 'Harum ex nam delectus corrupti est.', '8', '7', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(201, '11', '15', '8', 'Ut facilis officia quia et in rerum totam.', 'Qui ea ea tempore totam nulla ea.', '9', '32', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(202, '63', '12', '2', 'Distinctio corrupti ut unde consequatur magnam molestiae.', 'Et maiores ipsam culpa aut iusto est consequatur.', '10', '2', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(203, '11', '9', '4', 'Dolore autem expedita id voluptatem.', 'Reiciendis delectus quod sed eveniet.', '4', '39', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(204, '48', '19', '6', 'Quibusdam ea debitis non rerum.', 'Sunt rem possimus voluptatem blanditiis.', '1', '6', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(205, '9', '17', '8', 'Eius aut cum fugit dolor consequatur deleniti aperiam.', 'Asperiores qui expedita atque aut ipsum.', '10', '11', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(206, '21', '2', '10', 'Est earum quaerat fugiat quia aut.', 'Alias vitae consequatur suscipit quia explicabo sunt et nulla.', '8', '38', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(207, '75', '1', '10', 'Molestias aut enim in veniam mollitia.', 'Aliquid provident reiciendis sit magnam ut sed.', '2', '23', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(208, '57', '9', '7', 'Officiis quos amet iusto ipsum ut.', 'Molestiae ea praesentium ea libero numquam minus omnis.', '2', '36', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(209, '13', '10', '10', 'Amet ut repellendus qui est.', 'Ut ea rerum ut animi est facere.', '9', '11', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(210, '96', '3', '2', 'Ut tenetur veniam totam est doloremque et et velit.', 'Nihil dolorum qui modi voluptas voluptas qui voluptate.', '2', '24', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(211, '90', '14', '3', 'Consectetur laboriosam quam animi accusantium.', 'Aliquid aut fuga numquam exercitationem.', '7', '1', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(212, '99', '16', '10', 'Assumenda explicabo ut est praesentium.', 'Magnam modi voluptates qui sapiente sed quaerat.', '10', '24', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(213, '6', '8', '8', 'Quia aut voluptas autem ipsum labore labore facilis et.', 'Qui aut est et molestiae in sunt omnis sed.', '9', '17', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(214, '88', '18', '1', 'Nesciunt rem illo modi impedit.', 'Rerum voluptatem corporis debitis dolores aut nemo aut.', '4', '15', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(215, '29', '11', '4', 'Dolore voluptates dolorem ex deserunt voluptates sint.', 'Est deserunt repellendus ad repellat optio.', '7', '37', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(216, '94', '2', '8', 'Sed quasi nihil non ut deserunt.', 'Fugiat amet minima alias est ut et labore.', '7', '33', '2022-08-13 13:10:36', '2022-08-13 13:10:36'),
(217, '29', '14', '7', 'Nisi aut aliquam omnis voluptas quia.', 'Totam esse dicta aut nihil consequatur.', '4', '48', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(218, '44', '5', '9', 'Quae nihil repudiandae culpa omnis veritatis in.', 'Molestiae repellat repellendus eum consectetur et voluptate non.', '6', '28', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(219, '80', '5', '5', 'Sint harum molestiae id rerum et reiciendis laudantium iure.', 'Ea cum tenetur ut omnis aut.', '8', '37', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(220, '27', '17', '10', 'Molestias rerum rerum et dignissimos itaque.', 'Nesciunt qui nobis vitae.', '4', '40', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(221, '85', '10', '3', 'Accusantium cupiditate ut provident aliquid aliquam sunt.', 'Nesciunt blanditiis amet sunt aperiam velit velit.', '3', '14', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(222, '56', '10', '6', 'Nostrum repellat corporis tempore consequatur laudantium minus.', 'Veniam ut est laborum nihil repudiandae facilis.', '7', '27', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(223, '67', '6', '1', 'Ad iste est officiis aut et dolorum.', 'Tempora debitis dolores qui nulla repudiandae.', '5', '5', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(224, '77', '2', '9', 'Eum vero rerum veniam iure.', 'Et ut voluptatem eveniet eos hic beatae ut accusamus.', '9', '41', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(225, '88', '18', '7', 'Sed sunt rerum qui repellendus.', 'Dignissimos harum accusamus quod quam.', '1', '38', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(226, '34', '7', '3', 'Asperiores reprehenderit sapiente incidunt mollitia maiores est.', 'Repudiandae ut est exercitationem ut perspiciatis velit ipsam accusamus.', '8', '11', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(227, '89', '13', '1', 'Reprehenderit rem exercitationem delectus aut.', 'Enim sunt quidem corporis deserunt quasi sed non.', '5', '50', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(228, '9', '18', '6', 'Consequatur deserunt sint illo fugit blanditiis.', 'Occaecati ut dicta hic qui autem repellat.', '3', '37', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(229, '80', '3', '9', 'Excepturi explicabo ut possimus eum ut est.', 'At et ducimus velit illo itaque ad voluptas.', '9', '16', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(230, '91', '11', '4', 'Quisquam quod voluptate consequatur sit quidem praesentium in aut.', 'Illo temporibus et minus nisi incidunt.', '1', '7', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(231, '31', '6', '3', 'Qui optio inventore eius iure sequi.', 'Quis voluptas cupiditate blanditiis doloribus.', '10', '13', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(232, '64', '4', '7', 'Magni ut blanditiis non.', 'Quidem eos voluptatem et nam accusamus vero.', '6', '34', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(233, '62', '19', '7', 'Nesciunt ipsum quod dicta eos.', 'Et quasi enim architecto et nostrum enim iste.', '10', '34', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(234, '54', '9', '7', 'Praesentium odit dolor expedita deleniti fuga.', 'Quisquam voluptate necessitatibus consequatur qui officiis accusamus magnam.', '7', '5', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(235, '47', '4', '10', 'Dicta sed deserunt ea sed adipisci.', 'Quis aut aspernatur odit sapiente voluptas sint laborum.', '10', '19', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(236, '37', '7', '6', 'Omnis doloribus pariatur velit.', 'Voluptatem ipsam ipsum sunt doloremque.', '9', '10', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(237, '96', '14', '9', 'Perspiciatis inventore magnam sit error.', 'Voluptatem laudantium inventore consectetur recusandae nulla praesentium ut.', '6', '13', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(238, '104', '15', '9', 'Aliquam autem et enim qui rem.', 'Nisi repellat quo ut ducimus placeat.', '5', '33', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(239, '12', '18', '4', 'Delectus laboriosam modi assumenda.', 'Neque recusandae enim aliquid sint quia tempore est.', '4', '41', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(240, '67', '20', '10', 'Aspernatur perferendis est consequatur quae quae.', 'Ex quis quia delectus.', '9', '32', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(241, '45', '7', '6', 'Qui facere dolore laborum ad qui velit.', 'Et quo delectus similique dolorem autem dolorum.', '2', '14', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(242, '56', '3', '5', 'Est neque libero perspiciatis laudantium earum asperiores ad.', 'Aut reiciendis beatae voluptatem debitis temporibus voluptas eaque vero.', '3', '28', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(243, '34', '9', '10', 'Omnis aliquam voluptatem ut quidem.', 'Aut aut quia voluptatibus odio.', '3', '16', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(244, '10', '19', '7', 'Et voluptatem aliquid est consequatur.', 'Quia voluptatibus voluptatem maxime praesentium.', '6', '1', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(245, '73', '2', '3', 'Odit repellendus autem dicta culpa et.', 'Natus et cupiditate quos.', '10', '25', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(246, '9', '13', '2', 'Quia qui in quisquam unde quo voluptatem.', 'Rem pariatur neque repellendus nobis sint.', '9', '20', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(247, '13', '10', '5', 'Doloremque maiores enim voluptas.', 'Quis enim aliquam molestiae tenetur harum.', '2', '32', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(248, '47', '8', '4', 'Totam ad similique deserunt officia esse.', 'Commodi voluptates quo ab consequatur non.', '4', '28', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(249, '53', '2', '5', 'Doloribus laborum omnis quasi perspiciatis aut qui.', 'Accusamus dolores necessitatibus ipsa tempore ducimus illum quo quos.', '8', '43', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(250, '52', '4', '10', 'Et et ut aliquid veniam architecto.', 'Qui autem temporibus nobis sapiente quia voluptates.', '10', '22', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(251, '62', '6', '7', 'Neque qui qui sed nihil qui nulla officia.', 'Aut expedita placeat consequatur rerum reiciendis.', '7', '38', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(252, '33', '16', '5', 'Nobis assumenda eaque ratione voluptatum.', 'Dolores at recusandae hic est.', '4', '5', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(253, '61', '20', '10', 'Incidunt est veniam cum distinctio placeat voluptatem.', 'Nobis ipsum illo eligendi qui unde dolorum molestias.', '4', '5', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(254, '74', '20', '1', 'Repellat doloremque placeat totam facere.', 'Harum quis deleniti corporis aperiam reprehenderit eveniet quae.', '7', '46', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(255, '51', '15', '1', 'Alias excepturi vel quis velit quia.', 'Autem corporis quo ab qui inventore.', '3', '33', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(256, '80', '7', '9', 'Porro rerum nisi eum nisi.', 'Eum dicta non voluptas nesciunt error est et vel.', '8', '26', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(257, '96', '12', '7', 'Est quo velit saepe libero.', 'Enim eligendi repellat nisi dolores repellendus et.', '5', '45', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(258, '60', '14', '5', 'Natus tempore expedita quam consequatur qui tempora.', 'Aspernatur dicta porro sapiente qui eum corporis ipsum ex.', '4', '19', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(259, '77', '16', '4', 'Officiis cum deserunt et et autem sed.', 'Officiis quod deleniti odit.', '10', '37', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(260, '41', '5', '5', 'Ad blanditiis enim ea aut sit dolore incidunt.', 'Nihil provident vero ut sit consectetur.', '2', '34', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(261, '43', '5', '5', 'Dolorum voluptatum omnis quo fugiat et non odit omnis.', 'Rerum odit non dolores sit.', '4', '49', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(262, '24', '13', '1', 'Minus accusamus qui quibusdam pariatur.', 'Tempore neque autem nobis recusandae repellat eos natus.', '1', '1', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(263, '28', '7', '1', 'Cumque quas et quia nam ut.', 'Ipsum porro ut voluptas eveniet et.', '1', '36', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(264, '105', '7', '1', 'Libero nobis ea aliquam.', 'Totam laborum est sit sint necessitatibus eos ipsa.', '7', '33', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(265, '63', '3', '6', 'Quia suscipit cumque nihil.', 'Eum rerum deleniti quis corporis voluptates consequatur.', '9', '27', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(266, '52', '16', '4', 'Repudiandae officiis ut accusantium.', 'Ipsa voluptas laboriosam temporibus neque quo sunt ea.', '5', '39', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(267, '44', '18', '3', 'Non iusto quia non voluptatum et alias.', 'Odio aliquid unde non reprehenderit.', '4', '44', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(268, '50', '14', '7', 'Consectetur est et non.', 'Facere voluptas ea eaque est tenetur a ea explicabo.', '9', '26', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(269, '60', '3', '4', 'Distinctio et quidem non hic quidem et accusantium.', 'Harum corrupti ad quidem voluptatem itaque magni repellendus.', '9', '35', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(270, '91', '6', '7', 'Consectetur ut occaecati qui quia minus explicabo.', 'Quis dolorem ipsam ipsam exercitationem.', '10', '20', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(271, '15', '20', '7', 'Dolor occaecati eligendi facilis.', 'Enim asperiores omnis voluptas.', '5', '46', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(272, '54', '13', '10', 'Nulla enim voluptate eum dolor quae et.', 'Optio in voluptatum aut ab enim ab.', '10', '44', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(273, '43', '9', '1', 'Sunt quam perferendis est qui illo.', 'Voluptatem eveniet et corporis similique molestias.', '5', '44', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(274, '102', '8', '4', 'Voluptas esse illum assumenda minima qui ut optio.', 'Numquam quae ut et recusandae quasi ad.', '10', '36', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(275, '93', '11', '4', 'Incidunt eveniet repellendus molestiae sint totam nihil et.', 'Fugiat nostrum officiis adipisci illum dolorem et in.', '6', '12', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(276, '8', '1', '1', 'Ratione ut similique quam adipisci corrupti.', 'Sint quia sit ex magni voluptas eligendi aut.', '3', '47', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(277, '96', '15', '3', 'Delectus ut aut voluptas quo.', 'Reiciendis eos occaecati sint voluptatem dolore.', '5', '28', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(278, '86', '4', '4', 'Fugit voluptatem voluptatum soluta.', 'Vel nesciunt sit consequatur placeat.', '5', '40', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(279, '28', '6', '10', 'Aspernatur qui et deserunt sequi quis et provident.', 'Amet et sunt ea corrupti nemo.', '10', '20', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(280, '29', '19', '5', 'Sapiente velit ratione facere rerum.', 'Eos totam animi eveniet corporis amet minima non.', '6', '15', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(281, '54', '20', '6', 'Sint sed fugiat blanditiis modi aut doloribus molestiae error.', 'Quae aut eum dignissimos expedita et.', '2', '47', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(282, '81', '4', '5', 'Quia modi quas architecto.', 'Alias et eum autem natus ipsam.', '5', '43', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(283, '9', '12', '9', 'Neque fuga labore et iusto.', 'Molestias possimus placeat sunt incidunt perspiciatis modi aspernatur.', '8', '6', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(284, '41', '10', '9', 'Repellendus doloribus perferendis quasi debitis officiis.', 'Consectetur harum voluptatem corrupti accusamus tenetur voluptates.', '5', '15', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(285, '77', '14', '7', 'Quia ut occaecati enim et ut nemo voluptatum rerum.', 'Provident corrupti error omnis quibusdam pariatur illum exercitationem minima.', '8', '29', '2022-08-13 13:10:37', '2022-08-13 13:10:37');
INSERT INTO `check_out_histories` (`id`, `user_id`, `department_id`, `hospital_id`, `symptoms`, `conclusion`, `staff_id`, `doctor_id`, `created_at`, `updated_at`) VALUES
(286, '8', '4', '7', 'Quia corporis impedit voluptatum mollitia ut.', 'Consequuntur consequuntur iure corrupti vitae maxime.', '9', '44', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(287, '31', '16', '10', 'Est quia sed ut id adipisci blanditiis.', 'Laudantium in est enim.', '5', '49', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(288, '94', '6', '10', 'Molestias blanditiis nihil eligendi dolor.', 'Doloribus accusantium saepe esse aut fugit sit nam.', '9', '33', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(289, '80', '15', '8', 'Ut et ipsum atque incidunt odio.', 'Temporibus qui occaecati provident iure ut.', '10', '38', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(290, '98', '9', '8', 'Provident aut praesentium eaque.', 'At nihil dolores dicta quis qui.', '5', '31', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(291, '43', '11', '7', 'Voluptatem quia expedita at autem blanditiis consequuntur ut.', 'Ut aut exercitationem velit aperiam in aut.', '9', '42', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(292, '69', '7', '4', 'Consectetur quae eos dolorem earum nostrum.', 'Culpa hic dicta eos eius aspernatur aut soluta qui.', '8', '28', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(293, '38', '14', '8', 'Qui ratione sint et.', 'Iusto sint ducimus et amet qui.', '7', '33', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(294, '98', '3', '1', 'Ut inventore eaque vitae neque mollitia.', 'Dolore aliquid rerum eos eos dolores molestiae aut voluptates.', '10', '21', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(295, '103', '4', '9', 'Qui dolores facilis illum iure minima beatae voluptas.', 'Ipsam magni possimus amet.', '3', '4', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(296, '23', '5', '7', 'Ea quos vel omnis dolor officiis sapiente accusamus.', 'Doloribus quod fuga ut incidunt.', '5', '48', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(297, '94', '5', '8', 'Itaque eveniet ab quis quod facilis.', 'Molestiae nam aperiam iusto nostrum asperiores.', '9', '1', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(298, '94', '4', '3', 'Iste odio deserunt aspernatur repudiandae et iure atque cupiditate.', 'Ipsa unde in aliquam qui et vel.', '8', '40', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(299, '43', '20', '4', 'Repudiandae voluptatem dolor aut omnis dolorem id.', 'Adipisci quae explicabo quia unde aperiam vitae autem.', '7', '23', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(300, '66', '7', '8', 'Ducimus nemo modi voluptatem quas aut.', 'Odio illo iste quo praesentium atque.', '9', '15', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(301, '103', '11', '6', 'Provident facere fugit est consequuntur expedita porro exercitationem.', 'Quia iusto eligendi quibusdam corrupti.', '2', '1', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(302, '53', '6', '3', 'Exercitationem praesentium reprehenderit distinctio eos iste nihil temporibus fugiat.', 'Et enim officiis omnis hic vel in beatae.', '5', '3', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(303, '88', '7', '3', 'Aut sit fugiat temporibus asperiores qui eum.', 'Dolores temporibus magni nam architecto maiores molestiae at.', '6', '39', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(304, '32', '13', '7', 'Vel aliquid nam aliquid exercitationem.', 'Consequuntur optio aut aliquid sit non.', '8', '15', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(305, '26', '5', '10', 'Quia veritatis alias ad quod.', 'Id sint rerum illo asperiores.', '7', '33', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(306, '26', '14', '8', 'Placeat quo et perspiciatis enim beatae.', 'Laudantium sint sit corporis aut eligendi.', '5', '12', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(307, '14', '20', '9', 'Placeat tenetur quo deserunt in.', 'Quam ea rerum quos porro et aut.', '6', '33', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(308, '16', '8', '1', 'Labore odit qui ab alias et cumque.', 'Aut laborum incidunt qui vero qui sapiente.', '1', '35', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(309, '41', '12', '1', 'Cumque sed similique ex atque cupiditate.', 'Porro rem dolor saepe aspernatur quia aut ut.', '5', '36', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(310, '44', '4', '2', 'Corrupti quo dicta aliquid minima sunt quibusdam.', 'Adipisci veniam doloribus nisi in optio pariatur voluptas.', '2', '31', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(311, '24', '14', '10', 'Est nostrum laborum ad tempore ea.', 'Aut facilis nemo incidunt voluptatum.', '8', '36', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(312, '95', '17', '5', 'Esse nemo nesciunt qui voluptatem et officia.', 'Aliquam officia eius odit nostrum.', '4', '48', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(313, '106', '18', '5', 'Voluptas quo rerum dolores quisquam.', 'Inventore voluptatum ea quae facilis.', '1', '14', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(314, '30', '8', '9', 'Sint et nostrum esse voluptatem.', 'Aut ducimus eligendi veritatis non accusantium at dolorum.', '3', '4', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(315, '103', '1', '8', 'Maiores perspiciatis autem error et accusantium.', 'Vero unde quo qui eos ut.', '9', '24', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(316, '52', '6', '3', 'Impedit eligendi error sit ut.', 'Eum velit velit doloremque sunt nam eligendi.', '6', '44', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(317, '80', '18', '8', 'Iste perferendis provident aut nesciunt.', 'Sed quas assumenda ducimus ipsum est ex voluptate est.', '8', '45', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(318, '75', '14', '3', 'Laborum et perferendis ratione sed placeat consequatur.', 'Modi dolore id sit repellendus ea modi.', '2', '28', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(319, '55', '7', '6', 'Suscipit ut ut beatae exercitationem modi ut.', 'Aut voluptatum et totam dolores quaerat accusamus.', '2', '3', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(320, '20', '6', '8', 'Ullam fuga voluptatum et asperiores rerum.', 'Et quisquam doloremque dolores iste.', '5', '39', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(321, '15', '7', '9', 'Numquam provident et a qui veritatis aut.', 'Odit blanditiis debitis facere earum non est doloremque nihil.', '9', '47', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(322, '33', '12', '5', 'Neque alias illum ea corrupti iusto omnis omnis deleniti.', 'Adipisci rerum qui tempora beatae voluptas et.', '5', '8', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(323, '50', '15', '9', 'Aspernatur qui velit occaecati earum.', 'Iusto ut ab magni sint illum laudantium.', '10', '5', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(324, '36', '10', '7', 'Officia inventore reiciendis non iure.', 'Tenetur quasi omnis voluptatem tenetur officiis amet eaque.', '10', '2', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(325, '101', '5', '9', 'Saepe quod nulla id illum ea iusto ut nam.', 'Saepe unde facilis assumenda consectetur.', '9', '7', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(326, '18', '10', '5', 'Ipsa sint possimus minima rerum et.', 'Eos minima itaque nostrum non enim consequatur.', '9', '39', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(327, '10', '16', '8', 'Maiores ut aliquam sapiente.', 'Asperiores maxime et dolor quae dicta.', '5', '10', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(328, '96', '13', '7', 'Minus qui eaque quasi voluptates.', 'Explicabo ea repellendus facilis qui quis quia.', '1', '42', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(329, '98', '5', '6', 'Aut consequatur cum magni ut debitis vel.', 'Perferendis asperiores in nesciunt est numquam omnis assumenda.', '7', '44', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(330, '67', '6', '2', 'Aspernatur vitae assumenda impedit ipsa et.', 'Et molestiae possimus numquam neque error qui quia praesentium.', '7', '2', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(331, '36', '16', '7', 'Quibusdam qui eius minus quia necessitatibus.', 'Aut voluptatum possimus ipsam vel a quas.', '5', '16', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(332, '13', '4', '5', 'Sed praesentium porro quibusdam et recusandae omnis mollitia cumque.', 'Est mollitia ex vitae placeat omnis.', '6', '18', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(333, '75', '17', '2', 'Et sunt pariatur adipisci inventore et est et impedit.', 'Earum culpa autem iure.', '8', '19', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(334, '57', '15', '5', 'Dolor error quaerat ea consectetur animi veritatis unde quis.', 'Quisquam saepe nemo inventore.', '5', '25', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(335, '71', '20', '6', 'Omnis corporis sunt nisi est sapiente.', 'Suscipit esse esse exercitationem vitae qui itaque et.', '3', '12', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(336, '36', '9', '2', 'Voluptas voluptatem sapiente aliquam expedita laborum ex aut quis.', 'Molestiae enim in delectus est corrupti rem.', '8', '18', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(337, '11', '7', '8', 'Alias temporibus iure enim quis.', 'Autem impedit quo id quia eum.', '1', '8', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(338, '15', '4', '3', 'Aut illum alias dolor sit fuga molestiae.', 'Voluptas omnis ut quas repellat.', '6', '9', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(339, '88', '10', '6', 'Et dolores assumenda esse enim dolor.', 'Quam deleniti temporibus repudiandae culpa ea.', '3', '8', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(340, '53', '13', '4', 'Et et ipsum totam laboriosam nemo rerum.', 'In vel et est velit laboriosam et ullam.', '10', '42', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(341, '39', '1', '10', 'In expedita iure nobis nostrum inventore et voluptate sint.', 'Velit esse enim quidem reprehenderit et vitae unde rerum.', '3', '40', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(342, '11', '14', '3', 'Quasi illo minus vel vel dolore quibusdam quo.', 'Magni et dolore eveniet eaque molestias nam.', '3', '10', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(343, '60', '6', '6', 'Iste et fugit deserunt ab ut nulla.', 'Unde tenetur culpa iusto est esse et deserunt.', '10', '34', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(344, '55', '3', '1', 'Culpa deserunt id quo quae temporibus quasi.', 'Reiciendis quaerat vel ut voluptas ullam nihil.', '9', '42', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(345, '102', '14', '8', 'Hic aut qui reprehenderit.', 'Tenetur magni earum vitae voluptas.', '10', '1', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(346, '55', '10', '10', 'Voluptas fugit non qui eos hic nisi nesciunt quam.', 'Praesentium quae necessitatibus quae et doloremque.', '2', '30', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(347, '87', '15', '8', 'Reiciendis est quia optio doloribus qui sed ea.', 'Hic recusandae minus expedita iste doloremque in.', '8', '34', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(348, '42', '7', '9', 'Illum cupiditate quia et sapiente.', 'Molestiae nisi error ab officiis ab.', '1', '12', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(349, '27', '14', '1', 'Est autem fuga sit iste.', 'Commodi assumenda vel et quis non non est.', '5', '7', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(350, '52', '2', '2', 'Enim rerum adipisci optio ipsum earum est.', 'Illum vitae fugit totam in ut quidem.', '9', '43', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(351, '18', '12', '3', 'Voluptatibus nesciunt eos exercitationem enim ut.', 'Qui qui vel rerum et hic.', '7', '47', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(352, '64', '13', '3', 'Nostrum illo voluptates qui animi neque adipisci dicta.', 'Aliquid ullam dolorem inventore architecto.', '7', '4', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(353, '96', '9', '4', 'Hic nulla non tempora corporis asperiores.', 'Velit rem accusamus neque non officiis aliquam.', '8', '24', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(354, '102', '14', '7', 'Consequatur ut aspernatur qui possimus consequuntur blanditiis.', 'Ipsam omnis numquam illo quia hic possimus eveniet.', '4', '27', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(355, '82', '2', '6', 'Fugit fuga veniam eos.', 'Cum soluta tempora officiis non earum qui.', '3', '16', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(356, '12', '3', '1', 'Sit saepe magni harum aut.', 'Deleniti distinctio qui vel.', '2', '4', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(357, '97', '11', '1', 'Asperiores ut aut molestiae officia officia omnis id quidem.', 'Reprehenderit eos alias dolore quia necessitatibus doloremque numquam.', '1', '35', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(358, '66', '4', '7', 'Soluta possimus sit ipsum nulla ut.', 'Consequuntur qui error sapiente ullam reiciendis et.', '9', '16', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(359, '12', '19', '7', 'Perspiciatis a aperiam rerum eum tempore possimus.', 'Aut omnis ad doloremque voluptatibus magni voluptatem.', '5', '27', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(360, '75', '13', '10', 'Voluptas recusandae quia expedita qui quia consequatur.', 'Laboriosam nulla pariatur at rem molestiae.', '4', '44', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(361, '89', '1', '10', 'Veniam soluta voluptas est doloribus est vel.', 'Dolor non doloremque dolor ipsum.', '9', '4', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(362, '64', '14', '4', 'Voluptatem maxime quas iusto enim ut officia nostrum.', 'Ipsam corporis veniam architecto quisquam itaque amet saepe.', '2', '18', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(363, '105', '19', '6', 'Dicta voluptatibus velit soluta ipsum.', 'Sit assumenda temporibus aliquam aut magnam.', '5', '6', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(364, '97', '7', '1', 'Qui corrupti fugiat ut.', 'Blanditiis adipisci beatae omnis adipisci eum est.', '6', '16', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(365, '43', '14', '5', 'Nisi eos et quaerat molestiae harum minima.', 'Nostrum officiis cupiditate ea dolores.', '6', '45', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(366, '60', '14', '7', 'Iusto exercitationem possimus neque quisquam rerum facere quo aut.', 'Eum aut adipisci tempora dolor quidem et.', '6', '37', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(367, '66', '13', '3', 'Eos id non magni deserunt.', 'Nisi ipsam aut quis id sit eum quos et.', '3', '46', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(368, '95', '17', '4', 'Voluptatem numquam magni officia porro.', 'Dolores voluptatum modi hic suscipit.', '3', '32', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(369, '56', '6', '9', 'Blanditiis expedita quibusdam iure eum error consequatur corrupti.', 'Cumque ut molestiae alias nam in iure.', '2', '26', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(370, '31', '14', '2', 'Inventore quis dolor vitae eligendi similique.', 'Omnis velit nisi expedita iusto est quia id.', '7', '7', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(371, '96', '13', '7', 'Dolore magni qui velit quasi.', 'Assumenda saepe quas enim est deserunt iusto nihil.', '7', '20', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(372, '103', '11', '4', 'Exercitationem iste ipsam pariatur tempora quasi unde.', 'Sed officia similique eius error aperiam aspernatur deserunt.', '3', '19', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(373, '27', '20', '8', 'Ratione rem aut quod.', 'Inventore in aut commodi et.', '9', '43', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(374, '16', '1', '7', 'Repellendus maxime et laborum vel esse.', 'Minima ut aut aspernatur eos et.', '4', '24', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(375, '37', '1', '5', 'Quia sed laudantium fuga.', 'Autem ipsam laboriosam explicabo doloribus.', '4', '39', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(376, '28', '6', '1', 'Nobis maiores quia excepturi commodi et voluptatem.', 'Sit sequi et praesentium id sed sed aliquam esse.', '4', '37', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(377, '56', '13', '2', 'Quisquam qui aliquam accusantium reiciendis iste aut.', 'Omnis et molestiae et sequi corporis.', '5', '48', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(378, '73', '10', '4', 'Numquam in ipsam aperiam perferendis.', 'Non eligendi veniam molestiae molestias enim explicabo.', '5', '1', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(379, '34', '11', '9', 'Sed corrupti ut est totam ratione atque et.', 'Laboriosam non ullam iusto sint ratione.', '4', '40', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(380, '73', '16', '7', 'Vel et autem praesentium vitae doloremque.', 'Sit vel dolorum cum ullam ex est quis sint.', '2', '18', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(381, '84', '3', '4', 'Veniam deleniti dolor molestias iure.', 'Sed porro vero quis.', '2', '11', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(382, '92', '14', '6', 'Odio esse quis velit aut aspernatur atque.', 'Iure alias illo ipsam.', '10', '46', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(383, '37', '8', '4', 'Voluptatem ea non sunt hic.', 'Non iste non doloribus nobis.', '4', '25', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(384, '89', '6', '3', 'Quos debitis aut unde labore aut quibusdam.', 'Iure id ducimus quia distinctio molestias ex.', '8', '7', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(385, '22', '19', '7', 'Aut error officia placeat consectetur.', 'Saepe vel deleniti quis et sit.', '2', '8', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(386, '91', '2', '7', 'Pariatur aspernatur consequuntur iure optio qui dolorem.', 'Sed porro repellat et voluptatem atque mollitia.', '1', '49', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(387, '69', '13', '5', 'Cum eius itaque ut laboriosam.', 'Ea quas laudantium culpa est fugit exercitationem molestias.', '9', '16', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(388, '13', '17', '4', 'Dolore velit suscipit et quas temporibus quaerat sint.', 'Reiciendis aut dignissimos dolore et voluptas incidunt aut.', '1', '24', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(389, '60', '20', '2', 'Nihil voluptatum ratione quod rerum iure.', 'Optio incidunt amet corrupti mollitia.', '8', '22', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(390, '33', '9', '9', 'Sint quibusdam vitae adipisci accusamus est et sequi.', 'Corrupti excepturi et sunt modi distinctio.', '2', '41', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(391, '51', '20', '5', 'Assumenda enim itaque autem quo corrupti cumque ea.', 'Quibusdam quia dolores voluptatem et error consequatur eum.', '9', '36', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(392, '62', '10', '10', 'Tempore minima est vel est in fugiat.', 'Omnis tempora est qui laudantium alias unde commodi ad.', '3', '38', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(393, '100', '9', '9', 'Velit ullam vitae corporis impedit voluptas.', 'Excepturi maxime deleniti aut expedita libero et sit.', '5', '47', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(394, '91', '11', '4', 'Corrupti quia quas pariatur voluptate enim.', 'Et omnis error culpa est in sint deleniti.', '6', '27', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(395, '105', '17', '8', 'Labore dolorem enim culpa culpa et error rerum.', 'Recusandae atque nostrum vero similique numquam.', '4', '46', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(396, '33', '19', '8', 'Error consequatur perspiciatis consequatur sequi molestiae omnis.', 'Vel id corrupti odio exercitationem enim exercitationem.', '3', '7', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(397, '8', '20', '3', 'Necessitatibus illo et voluptas consequatur.', 'Quos dolorem fugiat voluptatibus itaque aliquam.', '4', '23', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(398, '86', '3', '6', 'Quam velit eos labore fugit.', 'Asperiores temporibus velit maxime tenetur aut nostrum.', '6', '50', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(399, '56', '17', '2', 'Mollitia incidunt fuga sit nihil.', 'Non aut hic eveniet amet impedit.', '9', '50', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(400, '56', '18', '4', 'At neque aut quo ut similique voluptate deserunt nihil.', 'Rerum laudantium iusto similique accusantium qui facere recusandae ea.', '3', '8', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(401, '81', '12', '3', 'Quia explicabo sint repellendus eaque et.', 'Consequatur sit nemo sint ut aut et sapiente.', '8', '19', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(402, '14', '3', '7', 'Officiis consectetur consequuntur id aut possimus.', 'Perspiciatis expedita est rerum ipsum sint.', '2', '8', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(403, '66', '9', '2', 'Similique ullam molestias aut eaque.', 'Minima unde tenetur enim dolore incidunt tempore et.', '6', '50', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(404, '79', '19', '6', 'Est commodi sit sunt accusamus omnis.', 'Dolor sunt vel voluptates eveniet mollitia ducimus porro.', '10', '13', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(405, '32', '7', '2', 'Amet natus cumque ut eum velit eos.', 'Eum eius quis non quibusdam qui nam ad.', '5', '30', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(406, '30', '10', '4', 'Assumenda eos in hic ut.', 'Et facilis nam veritatis eius.', '3', '11', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(407, '27', '1', '1', 'Praesentium in et nobis voluptatum aut aut.', 'Suscipit facilis laboriosam et eos corrupti.', '1', '40', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(408, '90', '9', '6', 'Recusandae vitae voluptatum earum voluptas beatae sunt voluptas.', 'Necessitatibus vel itaque molestiae amet cumque.', '3', '38', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(409, '53', '5', '8', 'Aut placeat rem sunt consectetur et quis dignissimos recusandae.', 'Enim quos dolorem soluta aspernatur aperiam est similique corporis.', '1', '41', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(410, '74', '16', '4', 'Quia optio ut debitis aut quidem nam sint.', 'Assumenda nobis omnis distinctio omnis veniam cum.', '10', '5', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(411, '25', '19', '5', 'Sit enim numquam incidunt rerum.', 'Unde et et est necessitatibus natus et reiciendis.', '2', '2', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(412, '30', '16', '9', 'Et soluta hic sed ad.', 'Aspernatur mollitia facilis praesentium sed.', '7', '34', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(413, '29', '7', '7', 'Quod in blanditiis sit itaque qui dolor beatae laborum.', 'Qui et architecto vitae vel velit recusandae ducimus.', '9', '33', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(414, '30', '11', '8', 'Nulla at voluptas hic sed distinctio laboriosam facilis saepe.', 'Id quas ratione temporibus impedit at.', '9', '46', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(415, '58', '5', '6', 'Nam cumque autem omnis quae dicta error.', 'Odio quasi repellendus eos ut eaque.', '3', '25', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(416, '79', '18', '10', 'Nobis eaque molestiae velit velit saepe vitae dolores architecto.', 'Sed autem dolorem eum rerum ut sequi alias.', '5', '19', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(417, '20', '11', '9', 'Odit atque et corrupti veniam.', 'Dolor ea dolor nihil in amet consequatur nostrum.', '5', '47', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(418, '75', '9', '10', 'Cupiditate id perferendis eveniet amet.', 'Officiis non nobis esse natus labore maxime qui quaerat.', '4', '46', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(419, '77', '4', '1', 'Rerum sunt distinctio impedit.', 'Quae est est ea totam quis.', '10', '25', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(420, '88', '15', '10', 'Nesciunt non magni numquam iste.', 'Eum autem fuga temporibus voluptas voluptate id.', '4', '20', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(421, '20', '17', '2', 'Veritatis nesciunt cupiditate dignissimos.', 'Ad mollitia qui rerum porro occaecati iure molestias.', '10', '36', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(422, '13', '12', '3', 'Rerum sed quasi deleniti perferendis aut.', 'Ut et molestiae aliquam tempore dolore officiis.', '8', '5', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(423, '88', '12', '4', 'Ipsa illo consectetur libero consequatur.', 'Iste id quia esse alias quis et consequatur.', '6', '31', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(424, '51', '16', '1', 'Nihil qui rerum ut rerum cum voluptatem.', 'Incidunt eos aut deserunt in corporis.', '4', '12', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(425, '93', '1', '9', 'Molestias sed sequi ut molestias eligendi laborum.', 'Voluptas reprehenderit voluptatem repellendus blanditiis laudantium.', '3', '18', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(426, '32', '4', '10', 'Optio ad iste non sed assumenda.', 'Ullam voluptatibus laudantium ex dolor.', '7', '46', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(427, '89', '4', '7', 'Veniam corrupti nesciunt amet corporis incidunt.', 'Voluptatem expedita et autem unde.', '6', '40', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(428, '57', '1', '4', 'Voluptate aperiam rem non et cum voluptate.', 'Saepe vel unde qui deserunt est dolorem velit.', '9', '21', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(429, '95', '11', '1', 'Aut dolores est culpa quas.', 'Ut officiis in deleniti non ut vel cumque possimus.', '3', '7', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(430, '57', '2', '8', 'Debitis officia molestiae debitis qui.', 'Ad quisquam ut alias qui dolorem.', '6', '48', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(431, '47', '11', '3', 'Qui nihil perspiciatis voluptas repellat esse necessitatibus nobis.', 'Asperiores sapiente ipsum dolor deleniti facilis vel.', '10', '3', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(432, '31', '20', '8', 'In magni reprehenderit sequi et dicta.', 'Mollitia culpa quisquam debitis eligendi harum vel vel voluptatum.', '8', '39', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(433, '29', '20', '10', 'Voluptatibus quisquam maiores aperiam molestias et.', 'Quod est officia culpa labore a vitae nulla distinctio.', '8', '18', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(434, '53', '4', '1', 'Et eius fuga ea et eos.', 'Repudiandae enim sed reiciendis aut molestias amet.', '4', '35', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(435, '35', '17', '7', 'Sapiente dolor cumque eos voluptas voluptatem incidunt itaque.', 'Illum dolore asperiores neque deleniti libero.', '2', '30', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(436, '17', '10', '9', 'Cupiditate officiis sint quo doloremque eum impedit.', 'Inventore minus aut est accusamus eum voluptate dolore fuga.', '8', '10', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(437, '90', '10', '6', 'Architecto alias a et soluta illum debitis rerum.', 'Atque occaecati atque odit.', '4', '9', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(438, '103', '6', '1', 'Nisi iure unde doloribus fugiat.', 'Non delectus accusantium et officia.', '1', '26', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(439, '84', '15', '1', 'Magni illum consequatur odio maiores libero harum ipsum eius.', 'Neque dolor voluptatum similique qui deleniti voluptatibus.', '1', '1', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(440, '21', '16', '2', 'Non quo at autem fugiat ut.', 'Et beatae mollitia officiis.', '9', '33', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(441, '57', '16', '1', 'Voluptates quas expedita suscipit iusto et.', 'Recusandae numquam nostrum dolorum rerum minus quis possimus.', '4', '27', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(442, '81', '5', '6', 'Autem non molestiae ut ipsa eum dolores eius.', 'Autem cupiditate dolor asperiores pariatur sint ut illum sit.', '3', '47', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(443, '25', '11', '4', 'Reiciendis id atque sapiente vitae ipsam iste.', 'Et et dolorum sit qui provident harum vel.', '6', '48', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(444, '58', '4', '6', 'Voluptas doloribus perspiciatis explicabo.', 'Inventore molestiae quia error.', '6', '1', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(445, '92', '18', '8', 'Qui ipsa blanditiis omnis facilis dolorem minus ea.', 'Qui officia dignissimos iusto beatae.', '5', '10', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(446, '16', '5', '5', 'Quis atque cupiditate nihil tenetur esse.', 'Non eum dolores dignissimos.', '4', '10', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(447, '18', '2', '1', 'Praesentium quis maiores quae animi.', 'Accusamus harum at accusantium eligendi blanditiis dolores.', '3', '20', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(448, '97', '10', '1', 'Neque animi ut quia perferendis.', 'Quos pariatur molestias quisquam.', '4', '49', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(449, '68', '20', '3', 'Doloribus recusandae reprehenderit nostrum eum rerum.', 'Aliquid repellendus dolorem libero ea qui vitae facilis.', '4', '27', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(450, '101', '13', '10', 'Aut eveniet atque sequi eos autem qui ex.', 'Earum ullam est quae repudiandae.', '2', '38', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(451, '85', '14', '10', 'Velit enim blanditiis ut ipsam veniam aliquid.', 'Magnam voluptates reiciendis mollitia placeat repudiandae.', '10', '22', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(452, '86', '15', '6', 'Sed autem et sit autem.', 'Soluta quia quisquam odit sapiente omnis dolorem quas.', '2', '9', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(453, '24', '3', '10', 'Sapiente ipsum vel rerum quae autem porro doloribus.', 'Aut facere quis nobis facilis.', '7', '29', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(454, '62', '4', '1', 'Aliquam voluptatem nulla magni eligendi enim.', 'Repellat autem dolorem quo quia nihil.', '3', '33', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(455, '21', '11', '2', 'Impedit et ullam est explicabo.', 'Voluptates est libero est.', '9', '26', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(456, '52', '20', '1', 'Magni ipsa qui aut quo quia quos rem quo.', 'Perspiciatis qui nihil dolorum reiciendis quas molestiae repellendus.', '8', '33', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(457, '9', '18', '7', 'Illum voluptatem dolor porro voluptatem.', 'Repudiandae ut dolor in laborum.', '6', '14', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(458, '70', '2', '3', 'Quia totam reiciendis eaque nulla.', 'Ut nam voluptatum quam reiciendis ducimus est.', '4', '31', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(459, '95', '19', '3', 'Rerum quae cumque non omnis repellat voluptas et voluptatibus.', 'Ea quasi vel odit quod facilis laborum quia.', '4', '34', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(460, '9', '8', '8', 'Dolore aspernatur consequatur quo ut.', 'Quae ut qui et atque aut.', '1', '27', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(461, '91', '2', '7', 'A eum consequuntur sit quia velit tempore.', 'Voluptas natus voluptatem est beatae in.', '3', '19', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(462, '39', '18', '7', 'Iure sapiente illum est quos.', 'Vitae at commodi nulla reiciendis hic sunt ut.', '10', '41', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(463, '90', '8', '4', 'Quia quaerat at corrupti dicta eos blanditiis voluptas.', 'Dolorem aut aut eius vero saepe.', '4', '2', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(464, '91', '4', '7', 'Maxime ipsa reprehenderit eligendi itaque dolore dolores excepturi.', 'Asperiores quos id beatae illo porro sequi.', '2', '46', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(465, '16', '19', '9', 'Id vel vel inventore ipsum exercitationem vel.', 'Ea cum aut beatae laborum.', '6', '49', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(466, '76', '19', '10', 'Quia quaerat minus impedit quia quaerat temporibus.', 'Asperiores odit laboriosam ut necessitatibus.', '10', '38', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(467, '46', '2', '10', 'Excepturi temporibus quia laborum.', 'Fugit perspiciatis reiciendis consequatur quaerat vero eum placeat.', '8', '46', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(468, '56', '11', '6', 'Ipsam dolor reiciendis quis commodi nemo officia.', 'Ex dolor omnis fugit nemo omnis praesentium.', '4', '3', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(469, '78', '16', '3', 'Quae fugit non accusamus possimus.', 'In nihil fuga doloremque illo aliquam voluptatem laudantium pariatur.', '8', '33', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(470, '14', '7', '5', 'Omnis voluptatem ducimus non quia consequuntur aut.', 'Animi omnis vel consectetur eos.', '1', '41', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(471, '97', '7', '4', 'Necessitatibus ipsum odit fugiat in.', 'Esse suscipit neque delectus temporibus.', '10', '5', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(472, '20', '7', '6', 'Non quas et ipsa.', 'Quisquam optio ut magnam beatae nisi.', '8', '29', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(473, '8', '2', '4', 'Voluptatem aspernatur eos voluptatem perspiciatis et aut sapiente.', 'Eius fugit rerum accusamus assumenda iure tenetur.', '5', '7', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(474, '56', '15', '5', 'Quia quidem consequatur molestiae cum.', 'Soluta in autem sit asperiores.', '6', '21', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(475, '10', '19', '2', 'Voluptatem eius facilis nobis.', 'Nobis suscipit in fuga minus et.', '6', '9', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(476, '14', '2', '6', 'Et voluptatem molestiae occaecati est.', 'Consequatur vero labore autem tenetur harum enim.', '5', '42', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(477, '65', '16', '5', 'Deserunt voluptas accusamus et cumque dolores.', 'Quibusdam numquam et aut cupiditate facere illum rem non.', '3', '45', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(478, '46', '18', '3', 'Et labore tempora molestiae qui.', 'Possimus est sit aut modi culpa dolores.', '3', '18', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(479, '69', '8', '8', 'Tempora mollitia enim porro qui.', 'Impedit laborum nihil nobis eaque molestiae eos quis.', '7', '20', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(480, '74', '8', '9', 'Nobis perferendis qui quidem quasi cum.', 'Hic doloremque consequatur sed illum non nihil sequi.', '3', '15', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(481, '79', '10', '1', 'Officia voluptas voluptates illum.', 'Doloremque delectus ratione eligendi sapiente ut.', '3', '31', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(482, '106', '7', '8', 'Delectus odio ex id accusamus ducimus est.', 'Facilis quam id quod architecto voluptates.', '1', '27', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(483, '57', '8', '5', 'Fugit eaque dolorum rerum dolores delectus non.', 'Ipsam animi dolor quis facere aut possimus.', '8', '2', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(484, '102', '20', '1', 'Veniam adipisci ut sunt optio.', 'Facere ab deserunt aperiam fugit aliquam.', '10', '15', '2022-08-13 13:10:37', '2022-08-13 13:10:37'),
(485, '36', '5', '7', 'Molestias et voluptas tempore est maiores odio.', 'Beatae consequatur sed fugit voluptas.', '6', '14', '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(486, '97', '8', '7', 'Doloremque veniam amet velit officiis.', 'Amet veniam dolorem consectetur quia.', '9', '22', '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(487, '88', '4', '7', 'Numquam et est qui quo quae consequatur alias.', 'Officiis soluta expedita sunt tempora.', '2', '16', '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(488, '16', '1', '3', 'Atque id et autem beatae odit.', 'Dignissimos est eius nostrum.', '7', '31', '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(489, '26', '14', '6', 'Velit reprehenderit assumenda natus.', 'Distinctio qui eligendi quas earum rerum sequi ad.', '4', '6', '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(490, '92', '2', '10', 'Nulla quo facere nulla voluptatem quidem.', 'Rerum consequatur accusamus minima in.', '3', '14', '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(491, '45', '13', '4', 'Culpa modi architecto molestias aut voluptas.', 'Nesciunt non quos repudiandae animi animi.', '10', '47', '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(492, '28', '4', '1', 'Voluptatem sequi occaecati excepturi veniam molestias exercitationem quis.', 'Soluta sed deserunt ut non in quibusdam modi.', '9', '29', '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(493, '91', '19', '6', 'Cupiditate non voluptate neque sed deleniti explicabo.', 'Voluptates rem asperiores vel est natus.', '6', '15', '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(494, '13', '15', '3', 'Reprehenderit voluptas porro alias illo voluptas modi.', 'Vero dolorem hic quasi illum.', '7', '31', '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(495, '102', '19', '4', 'Et voluptatem quod quia.', 'Libero et error quis libero.', '1', '38', '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(496, '22', '9', '2', 'Velit ut assumenda ut ipsa deserunt eius ut.', 'Provident nostrum aperiam soluta voluptatem.', '1', '40', '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(497, '15', '17', '5', 'Et aut necessitatibus quia magni aut.', 'Quis ut ut dicta eius eligendi libero.', '6', '24', '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(498, '9', '14', '6', 'Sunt est qui id.', 'Et aliquam est accusamus molestiae pariatur laboriosam omnis.', '6', '6', '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(499, '26', '10', '1', 'Suscipit neque cumque voluptatem qui libero.', 'Placeat esse modi consequatur rerum et.', '2', '27', '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(500, '46', '20', '1', 'Esse non necessitatibus sunt odit rerum.', 'Aperiam ad nostrum est sed possimus consectetur.', '5', '28', '2022-08-13 13:10:38', '2022-08-13 13:10:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `hospital_id` bigint(20) NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `departments`
--

INSERT INTO `departments` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Anesthetics', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(2, 'Breast Screening', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(3, 'Cardiology', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(4, 'Ear, nose and throat (ENT)', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(5, 'Elderly services department', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(6, 'Gastroenterology', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(7, 'General Surgery', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(8, 'Gynecology', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(9, 'Hematology', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(10, 'Neonatal Unit', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(11, 'Neurology', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(12, 'Nutrition and dietetics', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(13, 'Obstetrics and gynecology units', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(14, 'Oncology', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(15, 'Ophthalmology', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(16, 'Orthopedics', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(17, 'Physiotherapy', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(18, 'Renal Unit', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(19, 'Sexual Health', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(20, 'Urology', '2022-08-13 13:10:34', '2022-08-13 13:10:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `doctors`
--

INSERT INTO `doctors` (`id`, `first_name`, `last_name`, `image`, `position`, `department_id`, `created_at`, `updated_at`) VALUES
(1, 'Eliezer', 'Wehner', NULL, 'Pharmacist', 20, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(2, 'Earnest', 'Yundt', NULL, 'Pharmacist', 19, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(3, 'Gayle', 'Rau', NULL, 'Laboratory', 20, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(4, 'Salma', 'Sipes', NULL, 'Nurse', 6, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(5, 'Kayla', 'Turner', NULL, 'Receptionist', 6, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(6, 'Katlynn', 'Schaden', NULL, 'Nurse', 14, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(7, 'Kevon', 'Harris', NULL, 'Doctor', 10, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(8, 'Leonie', 'Kozey', NULL, 'Pharmacist', 9, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(9, 'Evelyn', 'Stark', NULL, 'Doctor', 5, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(10, 'Betsy', 'Gutkowski', NULL, 'Doctor', 1, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(11, 'Cara', 'Heathcote', NULL, 'Pharmacist', 7, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(12, 'Darien', 'Lesch', NULL, 'Receptionist', 19, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(13, 'Magali', 'Beatty', NULL, 'Doctor', 15, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(14, 'Cassie', 'Smitham', NULL, 'Receptionist', 14, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(15, 'Timmothy', 'Walker', NULL, 'Nurse', 20, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(16, 'Soledad', 'Gulgowski', NULL, 'Laboratory', 9, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(17, 'Estevan', 'Hettinger', NULL, 'Pharmacist', 15, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(18, 'Charlie', 'Goyette', NULL, 'Receptionist', 2, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(19, 'Dane', 'Smith', NULL, 'Pharmacist', 12, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(20, 'Zaria', 'Graham', NULL, 'Doctor', 20, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(21, 'Jerod', 'Kihn', NULL, 'Pharmacist', 4, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(22, 'Trever', 'Schoen', NULL, 'Nurse', 12, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(23, 'Barrett', 'Considine', NULL, 'Laboratory', 8, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(24, 'Brendon', 'Kessler', NULL, 'Laboratory', 20, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(25, 'Fredrick', 'Howell', NULL, 'Laboratory', 20, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(26, 'Juliana', 'Armstrong', NULL, 'Nurse', 1, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(27, 'Betsy', 'Hintz', NULL, 'Nurse', 3, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(28, 'Camylle', 'Braun', NULL, 'Receptionist', 2, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(29, 'Leonardo', 'Cummings', NULL, 'Receptionist', 20, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(30, 'Maxine', 'Skiles', NULL, 'Doctor', 16, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(31, 'Thad', 'Johnson', NULL, 'Receptionist', 9, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(32, 'Janie', 'Jones', NULL, 'Nurse', 18, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(33, 'Angela', 'McLaughlin', NULL, 'Nurse', 4, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(34, 'Elijah', 'Lebsack', NULL, 'Doctor', 8, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(35, 'Eulah', 'Wiegand', NULL, 'Receptionist', 3, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(36, 'Melyna', 'Rice', NULL, 'Doctor', 7, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(37, 'Katarina', 'Parker', NULL, 'Receptionist', 3, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(38, 'Kris', 'Johns', NULL, 'Doctor', 18, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(39, 'Mary', 'Hill', NULL, 'Pharmacist', 19, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(40, 'Lindsay', 'Herman', NULL, 'Receptionist', 6, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(41, 'Janice', 'Johnson', NULL, 'Receptionist', 6, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(42, 'Reid', 'Mueller', NULL, 'Pharmacist', 10, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(43, 'Giles', 'Bradtke', NULL, 'Laboratory', 16, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(44, 'Vesta', 'Feil', NULL, 'Pharmacist', 12, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(45, 'Elisha', 'Lesch', NULL, 'Receptionist', 2, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(46, 'Kendall', 'Denesik', NULL, 'Doctor', 12, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(47, 'Abbigail', 'Morissette', NULL, 'Doctor', 7, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(48, 'Newton', 'D\'Amore', NULL, 'Pharmacist', 12, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(49, 'Jaqueline', 'O\'Kon', NULL, 'Laboratory', 9, '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(50, 'Michael', 'Eichmann', NULL, 'Doctor', 20, '2022-08-13 13:10:35', '2022-08-13 13:10:35');

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
-- Cấu trúc bảng cho bảng `health_indices`
--

CREATE TABLE `health_indices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` double(8,2) NOT NULL,
  `weight` double(8,2) NOT NULL,
  `heart_rate` double(8,2) DEFAULT NULL,
  `blood_pressure` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `health_indices`
--

INSERT INTO `health_indices` (`id`, `users_id`, `height`, `weight`, `heart_rate`, `blood_pressure`, `created_at`, `updated_at`) VALUES
(1, '1', 195.00, 77.00, 90.00, 50.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(2, '2', 175.00, 74.00, 78.00, 58.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(3, '3', 195.00, 99.00, 93.00, 63.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(4, '4', 166.00, 75.00, 63.00, 60.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(5, '5', 154.00, 90.00, 71.00, 71.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(6, '6', 168.00, 85.00, 78.00, 92.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(7, '7', 178.00, 84.00, 95.00, 98.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(8, '8', 194.00, 59.00, 91.00, 74.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(9, '9', 172.00, 50.00, 79.00, 53.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(10, '10', 191.00, 51.00, 84.00, 56.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(11, '11', 199.00, 90.00, 70.00, 78.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(12, '12', 159.00, 66.00, 92.00, 79.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(13, '13', 185.00, 63.00, 86.00, 94.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(14, '14', 174.00, 85.00, 83.00, 80.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(15, '15', 170.00, 68.00, 67.00, 96.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(16, '16', 156.00, 78.00, 95.00, 87.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(17, '17', 177.00, 82.00, 86.00, 78.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(18, '18', 168.00, 95.00, 68.00, 87.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(19, '19', 184.00, 96.00, 67.00, 66.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(20, '20', 151.00, 60.00, 88.00, 76.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(21, '21', 155.00, 78.00, 53.00, 66.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(22, '22', 172.00, 74.00, 52.00, 71.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(23, '23', 191.00, 64.00, 95.00, 93.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(24, '24', 183.00, 83.00, 73.00, 96.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(25, '25', 170.00, 78.00, 83.00, 75.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(26, '26', 159.00, 97.00, 60.00, 59.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(27, '27', 191.00, 81.00, 58.00, 52.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(28, '28', 169.00, 83.00, 65.00, 55.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(29, '29', 189.00, 76.00, 90.00, 54.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(30, '30', 196.00, 71.00, 99.00, 96.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(31, '31', 156.00, 71.00, 76.00, 54.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(32, '32', 155.00, 87.00, 65.00, 72.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(33, '33', 198.00, 87.00, 99.00, 53.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(34, '34', 179.00, 56.00, 61.00, 61.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(35, '35', 159.00, 64.00, 62.00, 97.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(36, '36', 188.00, 58.00, 65.00, 86.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(37, '37', 171.00, 98.00, 81.00, 66.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(38, '38', 167.00, 65.00, 87.00, 80.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(39, '39', 174.00, 83.00, 50.00, 93.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(40, '40', 177.00, 56.00, 64.00, 66.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(41, '41', 200.00, 62.00, 92.00, 75.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(42, '42', 194.00, 65.00, 92.00, 68.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(43, '43', 157.00, 79.00, 88.00, 58.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(44, '44', 151.00, 86.00, 74.00, 91.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(45, '45', 175.00, 74.00, 67.00, 91.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(46, '46', 169.00, 69.00, 55.00, 85.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(47, '47', 175.00, 77.00, 78.00, 75.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(48, '48', 150.00, 80.00, 67.00, 73.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(49, '49', 185.00, 58.00, 87.00, 73.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(50, '50', 166.00, 71.00, 56.00, 61.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(51, '51', 183.00, 85.00, 86.00, 70.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(52, '52', 162.00, 83.00, 74.00, 83.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(53, '53', 192.00, 74.00, 65.00, 62.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(54, '54', 155.00, 86.00, 78.00, 65.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(55, '55', 189.00, 81.00, 82.00, 93.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(56, '56', 157.00, 52.00, 54.00, 82.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(57, '57', 186.00, 99.00, 80.00, 86.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(58, '58', 197.00, 76.00, 97.00, 65.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(59, '59', 179.00, 51.00, 88.00, 92.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(60, '60', 154.00, 53.00, 90.00, 66.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(61, '61', 173.00, 57.00, 95.00, 91.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(62, '62', 176.00, 65.00, 93.00, 53.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(63, '63', 175.00, 67.00, 86.00, 89.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(64, '64', 181.00, 92.00, 82.00, 73.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(65, '65', 155.00, 95.00, 65.00, 64.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(66, '66', 166.00, 69.00, 79.00, 59.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(67, '67', 159.00, 55.00, 54.00, 81.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(68, '68', 170.00, 90.00, 53.00, 89.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(69, '69', 189.00, 74.00, 71.00, 57.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(70, '70', 184.00, 89.00, 99.00, 77.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(71, '71', 171.00, 92.00, 56.00, 72.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(72, '72', 192.00, 66.00, 96.00, 99.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(73, '73', 187.00, 68.00, 76.00, 70.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(74, '74', 161.00, 67.00, 68.00, 70.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(75, '75', 172.00, 82.00, 83.00, 76.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(76, '76', 154.00, 92.00, 72.00, 71.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(77, '77', 163.00, 65.00, 95.00, 58.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(78, '78', 184.00, 62.00, 86.00, 56.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(79, '79', 158.00, 87.00, 70.00, 55.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(80, '80', 172.00, 90.00, 50.00, 65.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(81, '81', 197.00, 85.00, 67.00, 52.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(82, '82', 172.00, 92.00, 75.00, 95.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(83, '83', 167.00, 61.00, 89.00, 60.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(84, '84', 197.00, 91.00, 68.00, 59.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(85, '85', 158.00, 57.00, 56.00, 83.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(86, '86', 181.00, 52.00, 87.00, 68.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(87, '87', 178.00, 50.00, 75.00, 64.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(88, '88', 159.00, 76.00, 93.00, 82.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(89, '89', 150.00, 88.00, 81.00, 70.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(90, '90', 167.00, 93.00, 63.00, 83.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(91, '91', 192.00, 81.00, 57.00, 80.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(92, '92', 166.00, 78.00, 53.00, 90.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(93, '93', 155.00, 67.00, 50.00, 54.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(94, '94', 181.00, 74.00, 73.00, 66.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(95, '95', 174.00, 95.00, 55.00, 77.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(96, '96', 191.00, 71.00, 61.00, 81.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(97, '97', 159.00, 66.00, 100.00, 76.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(98, '98', 151.00, 88.00, 56.00, 91.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(99, '99', 178.00, 66.00, 93.00, 98.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(100, '100', 178.00, 87.00, 67.00, 66.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(101, '101', 183.00, 70.00, 68.00, 50.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(102, '102', 164.00, 88.00, 52.00, 93.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(103, '103', 155.00, 69.00, 100.00, 59.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(104, '104', 154.00, 96.00, 67.00, 82.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38'),
(105, '105', 160.00, 86.00, 69.00, 82.00, '2022-08-13 13:10:38', '2022-08-13 13:10:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hospitals`
--

CREATE TABLE `hospitals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `director` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hospitals`
--

INSERT INTO `hospitals` (`id`, `name`, `image`, `location`, `description`, `phone`, `director`, `created_at`, `updated_at`) VALUES
(1, 'Hamill, Christiansen and Hagenes', NULL, 'New Kavon', NULL, '+18572077939', 'Jeremie Graham', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(2, 'Cruickshank-Dickens', NULL, 'Brauntown', NULL, '+1-402-969-5980', 'Shyann Ebert', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(3, 'Barrows and Sons', NULL, 'Port Jeanberg', NULL, '+18725040760', 'Guadalupe Lemke', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(4, 'Harvey-Bauch', NULL, 'New Markshire', NULL, '+1-330-408-2165', 'Prof. Nels Pfeffer PhD', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(5, 'Senger-Goodwin', NULL, 'East Hassie', NULL, '+1 (307) 270-6204', 'Fabian Schoen', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(6, 'Baumbach, Reichel and Lowe', NULL, 'Karianefurt', NULL, '312.434.6089', 'Adrienne Kertzmann', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(7, 'Sporer-Reilly', NULL, 'Rippinville', NULL, '484-780-5783', 'Gennaro Hegmann', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(8, 'Nikolaus, Larson and Okuneva', NULL, 'Edwinfurt', NULL, '1-417-799-4479', 'Albina Franecki', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(9, 'Bogisich-Kunze', NULL, 'North Anita', NULL, '1-731-720-7246', 'Alycia Kutch', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(10, 'Runte-Gottlieb', NULL, 'Helenamouth', NULL, '+1.727.317.4052', 'Mr. Greg Zieme Sr.', '2022-08-13 13:10:34', '2022-08-13 13:10:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hospital_departments`
--

CREATE TABLE `hospital_departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hospital_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hospital_departments`
--

INSERT INTO `hospital_departments` (`id`, `hospital_id`, `department_id`, `created_at`, `updated_at`) VALUES
(1, '4', '7', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(2, '1', '3', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(3, '5', '10', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(4, '8', '10', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(5, '7', '6', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(6, '9', '1', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(7, '1', '10', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(8, '3', '2', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(9, '1', '6', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(10, '7', '7', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(11, '5', '2', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(12, '6', '3', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(13, '10', '7', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(14, '3', '5', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(15, '10', '8', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(16, '4', '10', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(17, '5', '10', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(18, '2', '5', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(19, '3', '3', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(20, '2', '10', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(21, '9', '4', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(22, '1', '3', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(23, '7', '2', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(24, '1', '3', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(25, '8', '6', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(26, '9', '8', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(27, '7', '2', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(28, '2', '5', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(29, '2', '7', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(30, '5', '10', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(31, '6', '1', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(32, '7', '6', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(33, '2', '1', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(34, '6', '2', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(35, '4', '6', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(36, '7', '1', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(37, '3', '3', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(38, '7', '3', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(39, '8', '9', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(40, '7', '3', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(41, '9', '9', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(42, '1', '1', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(43, '4', '8', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(44, '7', '6', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(45, '2', '2', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(46, '5', '10', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(47, '5', '7', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(48, '3', '5', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(49, '1', '5', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(50, '4', '4', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(51, '1', '2', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(52, '6', '10', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(53, '7', '6', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(54, '6', '3', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(55, '2', '4', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(56, '3', '9', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(57, '4', '10', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(58, '9', '8', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(59, '4', '6', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(60, '9', '10', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(61, '10', '5', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(62, '4', '1', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(63, '1', '7', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(64, '2', '10', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(65, '2', '10', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(66, '6', '7', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(67, '10', '2', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(68, '8', '5', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(69, '7', '8', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(70, '4', '6', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(71, '5', '10', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(72, '7', '1', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(73, '9', '5', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(74, '8', '7', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(75, '7', '5', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(76, '6', '3', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(77, '3', '5', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(78, '8', '3', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(79, '6', '7', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(80, '10', '1', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(81, '2', '5', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(82, '5', '9', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(83, '7', '1', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(84, '2', '6', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(85, '9', '6', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(86, '9', '5', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(87, '9', '4', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(88, '6', '9', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(89, '4', '9', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(90, '1', '8', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(91, '3', '5', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(92, '5', '4', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(93, '7', '10', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(94, '8', '1', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(95, '8', '10', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(96, '10', '1', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(97, '6', '7', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(98, '6', '8', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(99, '5', '1', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(100, '4', '9', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(101, '1', '4', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(102, '3', '6', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(103, '6', '7', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(104, '3', '2', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(105, '4', '6', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(106, '5', '9', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(107, '5', '10', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(108, '8', '5', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(109, '4', '10', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(110, '2', '7', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(111, '3', '6', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(112, '7', '8', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(113, '1', '2', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(114, '9', '4', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(115, '1', '1', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(116, '5', '4', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(117, '7', '4', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(118, '5', '5', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(119, '4', '6', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(120, '8', '6', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(121, '2', '5', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(122, '1', '10', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(123, '3', '9', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(124, '7', '9', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(125, '2', '4', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(126, '7', '6', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(127, '10', '7', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(128, '10', '5', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(129, '2', '9', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(130, '7', '9', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(131, '4', '6', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(132, '6', '6', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(133, '1', '5', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(134, '4', '9', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(135, '9', '7', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(136, '10', '2', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(137, '1', '3', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(138, '8', '6', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(139, '3', '9', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(140, '10', '9', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(141, '1', '4', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(142, '4', '4', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(143, '7', '5', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(144, '3', '8', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(145, '7', '10', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(146, '10', '1', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(147, '2', '8', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(148, '10', '6', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(149, '2', '3', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(150, '3', '6', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(151, '4', '1', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(152, '2', '1', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(153, '9', '10', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(154, '1', '10', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(155, '4', '10', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(156, '3', '3', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(157, '6', '8', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(158, '4', '1', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(159, '3', '8', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(160, '6', '2', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(161, '4', '4', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(162, '3', '3', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(163, '10', '3', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(164, '1', '6', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(165, '2', '1', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(166, '1', '10', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(167, '7', '1', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(168, '6', '5', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(169, '5', '8', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(170, '7', '6', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(171, '1', '10', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(172, '8', '6', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(173, '6', '8', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(174, '3', '2', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(175, '8', '3', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(176, '3', '10', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(177, '3', '3', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(178, '10', '9', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(179, '7', '10', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(180, '1', '6', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(181, '1', '1', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(182, '3', '10', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(183, '1', '6', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(184, '8', '8', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(185, '5', '9', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(186, '5', '8', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(187, '2', '1', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(188, '6', '6', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(189, '6', '7', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(190, '1', '8', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(191, '6', '10', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(192, '4', '5', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(193, '2', '3', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(194, '9', '7', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(195, '3', '5', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(196, '8', '5', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(197, '5', '5', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(198, '7', '5', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(199, '10', '4', '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(200, '3', '3', '2022-08-13 13:10:34', '2022-08-13 13:10:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `medicine`
--

CREATE TABLE `medicine` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `check_out_history_id` bigint(20) NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conclusion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(5, '2022_08_09_061239_create_permission_tables', 1),
(6, '2022_08_10_085249_create_health_index_table', 1),
(7, '2022_08_10_090141_create_check_out_history_table', 1),
(8, '2022_08_10_090717_create_staff_table', 1),
(9, '2022_08_10_090932_create_doctor_table', 1),
(10, '2022_08_10_091312_create_appointment_table', 1),
(11, '2022_08_10_091657_create_comment_table', 1),
(12, '2022_08_10_092022_create_hospital_table', 1),
(13, '2022_08_10_092303_create_department_table', 1),
(14, '2022_08_10_100744_create_medicine_table', 1),
(15, '2022_08_12_092402_create_hospital_department_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4),
(3, 'App\\Models\\User', 5),
(3, 'App\\Models\\User', 6),
(3, 'App\\Models\\User', 7),
(3, 'App\\Models\\User', 8),
(3, 'App\\Models\\User', 9),
(3, 'App\\Models\\User', 10),
(3, 'App\\Models\\User', 11),
(3, 'App\\Models\\User', 12),
(3, 'App\\Models\\User', 13),
(3, 'App\\Models\\User', 14),
(3, 'App\\Models\\User', 15),
(3, 'App\\Models\\User', 16),
(3, 'App\\Models\\User', 17),
(3, 'App\\Models\\User', 18),
(3, 'App\\Models\\User', 19),
(3, 'App\\Models\\User', 20),
(3, 'App\\Models\\User', 21),
(3, 'App\\Models\\User', 22),
(3, 'App\\Models\\User', 23),
(3, 'App\\Models\\User', 24),
(3, 'App\\Models\\User', 25),
(3, 'App\\Models\\User', 26),
(3, 'App\\Models\\User', 27),
(3, 'App\\Models\\User', 28),
(3, 'App\\Models\\User', 29),
(3, 'App\\Models\\User', 30),
(3, 'App\\Models\\User', 31),
(3, 'App\\Models\\User', 32),
(3, 'App\\Models\\User', 33),
(3, 'App\\Models\\User', 34),
(3, 'App\\Models\\User', 35),
(3, 'App\\Models\\User', 36),
(3, 'App\\Models\\User', 37),
(3, 'App\\Models\\User', 38),
(3, 'App\\Models\\User', 39),
(3, 'App\\Models\\User', 40),
(3, 'App\\Models\\User', 41),
(3, 'App\\Models\\User', 42),
(3, 'App\\Models\\User', 43),
(3, 'App\\Models\\User', 44),
(3, 'App\\Models\\User', 45),
(3, 'App\\Models\\User', 46),
(3, 'App\\Models\\User', 47),
(3, 'App\\Models\\User', 48),
(3, 'App\\Models\\User', 49),
(3, 'App\\Models\\User', 50),
(3, 'App\\Models\\User', 51),
(3, 'App\\Models\\User', 52),
(3, 'App\\Models\\User', 53),
(3, 'App\\Models\\User', 54),
(3, 'App\\Models\\User', 55),
(3, 'App\\Models\\User', 56),
(3, 'App\\Models\\User', 57),
(3, 'App\\Models\\User', 58),
(3, 'App\\Models\\User', 59),
(3, 'App\\Models\\User', 60),
(3, 'App\\Models\\User', 61),
(3, 'App\\Models\\User', 62),
(3, 'App\\Models\\User', 63),
(3, 'App\\Models\\User', 64),
(3, 'App\\Models\\User', 65),
(3, 'App\\Models\\User', 66),
(3, 'App\\Models\\User', 67),
(3, 'App\\Models\\User', 68),
(3, 'App\\Models\\User', 69),
(3, 'App\\Models\\User', 70),
(3, 'App\\Models\\User', 71),
(3, 'App\\Models\\User', 72),
(3, 'App\\Models\\User', 73),
(3, 'App\\Models\\User', 74),
(3, 'App\\Models\\User', 75),
(3, 'App\\Models\\User', 76),
(3, 'App\\Models\\User', 77),
(3, 'App\\Models\\User', 78),
(3, 'App\\Models\\User', 79),
(3, 'App\\Models\\User', 80),
(3, 'App\\Models\\User', 81),
(3, 'App\\Models\\User', 82),
(3, 'App\\Models\\User', 83),
(3, 'App\\Models\\User', 84),
(3, 'App\\Models\\User', 85),
(3, 'App\\Models\\User', 86),
(3, 'App\\Models\\User', 87),
(3, 'App\\Models\\User', 88),
(3, 'App\\Models\\User', 89),
(3, 'App\\Models\\User', 90),
(3, 'App\\Models\\User', 91),
(3, 'App\\Models\\User', 92),
(3, 'App\\Models\\User', 93),
(3, 'App\\Models\\User', 94),
(3, 'App\\Models\\User', 95),
(3, 'App\\Models\\User', 96),
(3, 'App\\Models\\User', 97),
(3, 'App\\Models\\User', 98),
(3, 'App\\Models\\User', 99),
(3, 'App\\Models\\User', 100),
(3, 'App\\Models\\User', 101),
(3, 'App\\Models\\User', 102),
(3, 'App\\Models\\User', 103),
(3, 'App\\Models\\User', 104),
(3, 'App\\Models\\User', 105);

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
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'user-menu', 'web', '2022-08-13 13:10:27', '2022-08-13 13:10:27'),
(2, 'user-list', 'web', '2022-08-13 13:10:27', '2022-08-13 13:10:27'),
(3, 'user-create', 'web', '2022-08-13 13:10:27', '2022-08-13 13:10:27'),
(4, 'user-edit', 'web', '2022-08-13 13:10:27', '2022-08-13 13:10:27'),
(5, 'user-delete', 'web', '2022-08-13 13:10:27', '2022-08-13 13:10:27'),
(6, 'role-menu', 'web', '2022-08-13 13:10:27', '2022-08-13 13:10:27'),
(7, 'role-list', 'web', '2022-08-13 13:10:27', '2022-08-13 13:10:27'),
(8, 'role-create', 'web', '2022-08-13 13:10:27', '2022-08-13 13:10:27'),
(9, 'role-edit', 'web', '2022-08-13 13:10:27', '2022-08-13 13:10:27'),
(10, 'role-delete', 'web', '2022-08-13 13:10:27', '2022-08-13 13:10:27'),
(11, 'permission-menu', 'web', '2022-08-13 13:10:27', '2022-08-13 13:10:27'),
(12, 'permission-list', 'web', '2022-08-13 13:10:27', '2022-08-13 13:10:27'),
(13, 'permission-create', 'web', '2022-08-13 13:10:27', '2022-08-13 13:10:27'),
(14, 'permission-edit', 'web', '2022-08-13 13:10:27', '2022-08-13 13:10:27'),
(15, 'permission-delete', 'web', '2022-08-13 13:10:27', '2022-08-13 13:10:27'),
(16, 'appointment-menu', 'web', '2022-08-13 13:10:27', '2022-08-13 13:10:27'),
(17, 'appointment-list', 'web', '2022-08-13 13:10:27', '2022-08-13 13:10:27'),
(18, 'appointment-create', 'web', '2022-08-13 13:10:27', '2022-08-13 13:10:27'),
(19, 'appointment-edit', 'web', '2022-08-13 13:10:27', '2022-08-13 13:10:27'),
(20, 'appointment-delete', 'web', '2022-08-13 13:10:27', '2022-08-13 13:10:27'),
(21, 'doctor-menu', 'web', '2022-08-13 13:10:27', '2022-08-13 13:10:27'),
(22, 'doctor-list', 'web', '2022-08-13 13:10:27', '2022-08-13 13:10:27'),
(23, 'doctor-create', 'web', '2022-08-13 13:10:27', '2022-08-13 13:10:27'),
(24, 'doctor-edit', 'web', '2022-08-13 13:10:27', '2022-08-13 13:10:27'),
(25, 'doctor-delete', 'web', '2022-08-13 13:10:27', '2022-08-13 13:10:27');

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Super-Admin', 'web', '2022-08-13 13:10:28', '2022-08-13 13:10:28'),
(2, 'Admin', 'web', '2022-08-13 13:10:28', '2022-08-13 13:10:28'),
(3, 'User', 'web', '2022-08-13 13:10:28', '2022-08-13 13:10:28'),
(4, 'Staff', 'web', '2022-08-13 13:10:28', '2022-08-13 13:10:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `staff`
--

INSERT INTO `staff` (`id`, `first_name`, `last_name`, `hospital_id`, `gender`, `date_of_birth`, `username`, `email`, `phone`, `address`, `email_verified_at`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Monte', 'Cassin', '6', 'Male', '2003-11-14 05:31:29', 'pjakubowski', 'lue71@gmail.com', '+1-949-328-6792', 'North Carlibury', NULL, '$2y$10$WhwZXtQlfJHEKy4wiFrm..VIl5XpZMLH0tq8Zc9.vYDNhZ01uqAZ6', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(2, 'Axel', 'Feest', '10', 'Male', '2003-07-10 02:51:44', 'greenfelder.quinn', 'graham.rashad@gmail.com', '432.894.7217', 'Dickinsontown', NULL, '$2y$10$6gbhq.1gDFnO7pFQ22wHLunzMvXxRywIADoINrWqzrKM1/dtW0wG6', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(3, 'Burley', 'Robel', '2', 'Female', '2002-12-14 07:15:41', 'zmetz', 'pschultz@hotmail.com', '+1.985.869.9554', 'East Frederique', NULL, '$2y$10$Ra3cft1ptblW6hqvnjbfQ.Dn8.SEmsE2O6NQ8f6m02/5s1PJrXEje', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(4, 'Edna', 'Bartoletti', '3', 'Male', '2003-11-01 23:03:39', 'kkshlerin', 'sporer.bradford@yahoo.com', '1-346-541-9700', 'East Shanelfurt', NULL, '$2y$10$Rg6d5xnbjKPw4UtbBw3bKe5wYG/XlDN41GgpMLIDfkOL2xM7IO1Eu', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(5, 'Carter', 'Crist', '1', 'Male', '2004-01-17 23:06:18', 'rose44', 'sidney.trantow@gmail.com', '1-765-221-5859', 'Justentown', NULL, '$2y$10$HQX8pe3gXkNNZhxsT3qusu7tEgFQGXy1V6FOq1NB6VuN6VjiqB6Nm', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(6, 'Daisha', 'Schmidt', '9', 'Female', '2003-10-26 11:09:23', 'kschiller', 'delilah04@skiles.biz', '(920) 397-3282', 'West Jessyland', NULL, '$2y$10$scwKzMh6FQyOSMrxDynKEuE.gT7BTxPUXCdaMF219qyzcdnkRDpf.', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(7, 'Cydney', 'Ziemann', '5', 'Male', '2003-08-30 18:39:41', 'waino.pagac', 'petra.deckow@ankunding.net', '251-209-0168', 'Laylaland', NULL, '$2y$10$f7hGA7SMcs6xNX9G4v7gA.f6pTFGkLQmvRAuUml2L42ItxDYhoeVO', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(8, 'Irwin', 'Dooley', '3', 'Male', '2003-11-02 12:25:55', 'ynienow', 'kutch.ila@keebler.net', '+1.971.641.3603', 'Oberbrunnerland', NULL, '$2y$10$EivNF/9m.PjCnU5uZvA4BO.mTHk6Q5htIVds5EngsGtY9KrZH01we', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(9, 'Reuben', 'Bashirian', '7', 'Male', '2003-11-24 21:46:26', 'mohr.bill', 'santino06@hotmail.com', '+1.564.607.5545', 'North Francis', NULL, '$2y$10$b0bTK36nItIBBI4QdVmX4OXrEIbv/7dkjCw5My/Nkf3yC8mCwAfeq', '2022-08-13 13:10:35', '2022-08-13 13:10:35'),
(10, 'Mitchell', 'Thompson', '4', 'Male', '2003-07-18 06:17:05', 'noelia34', 'corkery.ayla@gmail.com', '(318) 931-7197', 'South Adellaburgh', NULL, '$2y$10$l3NRQGU7PocH53Iuv69nuOzMsMqXhQqmDxeiu8oqDUjbqjdndhA8i', '2022-08-13 13:10:35', '2022-08-13 13:10:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `gender`, `date_of_birth`, `blood_group`, `username`, `email`, `phone`, `address`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Super', 'Male', '1991-11-02 22:56:10', 'O', 'superadmin', 'superadmin@email.com', '1-801-289-0585', 'Tylerport', NULL, '$2y$10$0duE/GjIYIZqsfnCq8oTtO7xxgfJHMDaQdhLkc4lbSJhosmqCQfr6', NULL, '2022-08-13 13:10:28', '2022-08-13 13:10:28'),
(2, 'Ngan', 'Ga', 'Male', '1980-03-18 01:01:27', 'A', 'ngan', 'nganha@email.com', '(781) 216-2790', 'Metzview', NULL, '$2y$10$hXMs2G46EzA.8.R3sAEUx.O/N5hOmlEpZW72gZlvkxNKuWrSYf5he', NULL, '2022-08-13 13:10:28', '2022-08-13 13:10:28'),
(3, 'Giang', 'Ga', 'Female', '1990-09-17 10:35:43', 'AB', 'giang', 'hagiang@email.com', '205-794-2870', 'Lake Albertha', NULL, '$2y$10$28vCar8XnM9RJiprautUNullCz4yh2.l1xc.mBqSqih24nBZUGyC.', NULL, '2022-08-13 13:10:28', '2022-08-13 13:10:28'),
(4, 'Hiep', 'Ga', 'Male', '1972-11-10 04:30:27', 'O', 'hiep', 'hiepga@email.com', '+15517018956', 'New Elysefurt', NULL, '$2y$10$XxktVEzqylKbJPTnDl12CujV0B/1yX27n6Ri.Wy9x7GNMv.Zu2ASe', NULL, '2022-08-13 13:10:28', '2022-08-13 13:10:28'),
(5, 'Huan', 'Ga', 'Male', '1990-08-03 22:32:44', 'A', 'huan', 'huanhoahong@email.com', '947.253.4960', 'East Aurelieburgh', NULL, '$2y$10$lh9qf./r2cOoxXO/G8ikiODYn74ACvRyO/3L2Mx5uhOWFpOUvBVS.', NULL, '2022-08-13 13:10:28', '2022-08-13 13:10:28'),
(6, 'Winifred', 'Davis', 'Female', '1990-10-12 04:14:52', 'A', 'vprice', 'mgislason@block.net', '251.318.6410', 'Port David', NULL, '$2y$10$iLAmYGmheKtIbGXRzqF78empx98fnJ8syeXqU3sB4ZtZKEGqWjble', NULL, '2022-08-13 13:10:28', '2022-08-13 13:10:28'),
(7, 'Candida', 'Braun', 'Female', '1996-10-18 23:03:14', 'A', 'mkoepp', 'stephen.rempel@balistreri.com', '206.332.8003', 'Kleinshire', NULL, '$2y$10$5bWMXFad1QaSD.1bjxqozuheHYPMou68FJ74q3H071.wT.gxyragW', NULL, '2022-08-13 13:10:28', '2022-08-13 13:10:28'),
(8, 'Mohammad', 'Medhurst', 'Male', '1996-05-08 05:19:42', 'O', 'jayson48', 'edd.cremin@kerluke.com', '336.319.9832', 'South Reneeview', NULL, '$2y$10$LaeuiD.I0bg/wQGzubiGDOdfjFgDjys11AqyFtbv6..sQCgbvZJaW', NULL, '2022-08-13 13:10:28', '2022-08-13 13:10:28'),
(9, 'Jailyn', 'Johns', 'Male', '2003-01-18 16:15:56', 'AB', 'karli.gleason', 'larry.wolff@yahoo.com', '915-812-3775', 'Lake Nedrachester', NULL, '$2y$10$WdkickpJajABacUbEXELDOjblYl0PIENokvFv8PbOdvhBV5lBjKce', NULL, '2022-08-13 13:10:28', '2022-08-13 13:10:28'),
(10, 'Joana', 'McKenzie', 'Male', '1983-04-11 11:06:02', 'O', 'vparisian', 'juston75@yahoo.com', '763-802-5121', 'Brooksport', NULL, '$2y$10$iey.aNZOH.2nhXGljIR4vOH0RJTLhBgJrjEIwivKlz62B4OX01vW2', NULL, '2022-08-13 13:10:28', '2022-08-13 13:10:28'),
(11, 'Holly', 'Hodkiewicz', 'Male', '1993-04-07 18:48:52', 'O', 'ratke.cassie', 'felipa63@emmerich.biz', '283-489-6627', 'Christafort', NULL, '$2y$10$NNa0ecSOirxqVeFeF71uPOi1inXRYUtCxBF7UMLjrYGtL8ZJNMmJ.', NULL, '2022-08-13 13:10:28', '2022-08-13 13:10:28'),
(12, 'Adrain', 'Hills', 'Female', '1995-10-04 09:46:06', 'B', 'bradtke.erica', 'emard.cassidy@rath.com', '+1 (857) 254-1096', 'Lynchchester', NULL, '$2y$10$SwV8hxJpl0VsoWTY.Hv28eZ7VcrDPAzEWy3MViehe1eClFZv9EmxC', NULL, '2022-08-13 13:10:28', '2022-08-13 13:10:28'),
(13, 'Florencio', 'Monahan', 'Female', '1973-07-22 20:01:38', 'A', 'friesen.mitchell', 'oconnell.adrien@bednar.com', '334-399-6855', 'Heleneshire', NULL, '$2y$10$yfqVloqCN06MsA4q5zhGJeC1DkHX2EEMqEh6eV6Bvc10nhZ2Vjb/q', NULL, '2022-08-13 13:10:28', '2022-08-13 13:10:28'),
(14, 'Kailee', 'Torp', 'Female', '1988-07-17 15:47:23', 'A', 'dconroy', 'glittel@stiedemann.biz', '775-797-7617', 'East Zariamouth', NULL, '$2y$10$QtKI/QmgXZaLaPyzUzZ1lOkWS5FTN5ga2Wq5Yq0.owvi6ATtVSrpC', NULL, '2022-08-13 13:10:28', '2022-08-13 13:10:28'),
(15, 'Mike', 'Toy', 'Male', '1996-08-24 03:42:23', 'A', 'vwalker', 'bergnaum.kiley@gmail.com', '270.280.4319', 'Tiashire', NULL, '$2y$10$wOSIsPYLgJXYIQNmzks2u.KGWckzmUr.2PmWFQWe3ooaI.tm2K/Uy', NULL, '2022-08-13 13:10:28', '2022-08-13 13:10:28'),
(16, 'Amelia', 'Treutel', 'Male', '1978-12-31 07:40:15', 'A', 'unique.feil', 'marianne.mcglynn@yahoo.com', '+1.505.410.7052', 'Makenziefort', NULL, '$2y$10$ZOTFwMSGJERc4546FIWfxumb4ThDDqyaguqvxat0B6sQ3pHTpas7m', NULL, '2022-08-13 13:10:29', '2022-08-13 13:10:29'),
(17, 'Carissa', 'Green', 'Male', '1994-06-14 04:29:39', 'B', 'dfranecki', 'uokuneva@gorczany.com', '+1.913.272.5734', 'Emardmouth', NULL, '$2y$10$Us5yveTbqbXUFdNVRHYZcebG22ueLWiEYRV3.8AVuuo6DkycbCURW', NULL, '2022-08-13 13:10:29', '2022-08-13 13:10:29'),
(18, 'Vickie', 'Lowe', 'Male', '1982-01-13 21:51:49', 'AB', 'qgerlach', 'breana.king@beier.info', '641.409.1224', 'New Cortney', NULL, '$2y$10$l5UDedKvs27FKCICmJBxQ.qGS.68WVh/k/HPt2wsYEgHsCSGvT0OO', NULL, '2022-08-13 13:10:29', '2022-08-13 13:10:29'),
(19, 'Arnulfo', 'Fadel', 'Male', '1987-10-05 12:38:15', 'A', 'marguerite.stehr', 'marvin.maeve@kiehn.com', '+19378100279', 'New Othoton', NULL, '$2y$10$ygqQ5N.z57llad9dNPDAle38MvFfXM4vcbg7RhW7KX5ZdGkLyAEA6', NULL, '2022-08-13 13:10:29', '2022-08-13 13:10:29'),
(20, 'Makenna', 'Denesik', 'Female', '1999-07-13 12:13:09', 'AB', 'xmaggio', 'lisandro.goldner@haag.biz', '(206) 940-3991', 'Lake Ladarius', NULL, '$2y$10$FpPQLer2TNwfRlQy1PQoPOWcyYUN5MXF0.NDjhJfNrppkTmouBzr2', NULL, '2022-08-13 13:10:29', '2022-08-13 13:10:29'),
(21, 'Nicklaus', 'Conn', 'Female', '1980-03-30 08:28:42', 'O', 'nienow.percival', 'krajcik.sterling@corwin.com', '+18162287978', 'East Nyatown', NULL, '$2y$10$Y0KKySFTxe8wTd.51MUId.3dH4/iaSlkbekPTFGFRflZyf8mD5SF2', NULL, '2022-08-13 13:10:29', '2022-08-13 13:10:29'),
(22, 'Bettye', 'McCullough', 'Male', '1978-08-04 05:59:14', 'B', 'quigley.jessica', 'oberbrunner.destinee@gmail.com', '1-803-463-7283', 'Toyhaven', NULL, '$2y$10$//T2QpAExzgjPOD72bS.8OWE/zzJiT3H55Fmy4K1Rcgn/zw6t4iiq', NULL, '2022-08-13 13:10:29', '2022-08-13 13:10:29'),
(23, 'Eric', 'Rosenbaum', 'Male', '1974-11-14 02:02:45', 'O', 'keven.stracke', 'alana.stroman@breitenberg.com', '+13233087398', 'South Jovany', NULL, '$2y$10$uppngS6uq1vKzfYyXNkEqeKUZ7iVlOGvelZUGFPJlK4jmQPiu7xT.', NULL, '2022-08-13 13:10:29', '2022-08-13 13:10:29'),
(24, 'Robb', 'Borer', 'Female', '1996-05-13 23:02:34', 'B', 'walsh.breanne', 'omer.schumm@koch.info', '+1.283.254.3681', 'Lake Yazminbury', NULL, '$2y$10$ofkZI40vZJyhHo9KyDQGYuducbJZYvJy//i0bJ0aTqYvDHZqUy5ni', NULL, '2022-08-13 13:10:29', '2022-08-13 13:10:29'),
(25, 'Dante', 'Feest', 'Male', '2002-01-29 14:16:53', 'A', 'davonte.kutch', 'mstiedemann@hotmail.com', '+1.906.709.4885', 'Hansenville', NULL, '$2y$10$TZDrHce5S4zm4KZ8dr.fluQlfE.4SXFsRfRZtZpQJyTZ8Ph6cbdwy', NULL, '2022-08-13 13:10:29', '2022-08-13 13:10:29'),
(26, 'Alden', 'Botsford', 'Male', '1976-01-28 23:54:04', 'B', 'hermiston.maxwell', 'fritz32@yahoo.com', '(434) 347-2078', 'Torpmouth', NULL, '$2y$10$R27xwWBON9RcpmakcoTTMewnqHBT52DHe50lzoaZSjpy71xbjxP9C', NULL, '2022-08-13 13:10:29', '2022-08-13 13:10:29'),
(27, 'Elsa', 'Sauer', 'Male', '1984-09-02 18:30:58', 'AB', 'selena21', 'abby61@goyette.com', '515-436-3450', 'Crooksborough', NULL, '$2y$10$Q8PEWQ8GItUhnMZi3p21p.0OVZqWOI7Df5dhJ22pki9UfJg12nYoC', NULL, '2022-08-13 13:10:29', '2022-08-13 13:10:29'),
(28, 'Bud', 'Toy', 'Male', '2002-05-12 18:04:18', 'O', 'lillie66', 'greenfelder.loy@boyer.com', '+1-347-414-4564', 'North Brenden', NULL, '$2y$10$W0DZNW/WdUeq.vx2Qdf.2ebMnTG7cecLiyJDWwBj8oHbGHDDiNF6m', NULL, '2022-08-13 13:10:29', '2022-08-13 13:10:29'),
(29, 'Antone', 'O\'Connell', 'Male', '1991-03-18 01:07:17', 'A', 'mhammes', 'phyllis.grady@ward.org', '+15047423435', 'West Anastasia', NULL, '$2y$10$v4UwMVuwkXmgWknXV7h8GOmv5AZOKBde/13gCxR2vtDGpkof6TnzW', NULL, '2022-08-13 13:10:29', '2022-08-13 13:10:29'),
(30, 'Delbert', 'Blanda', 'Female', '1990-10-10 12:10:29', 'B', 'boberbrunner', 'carlee.rath@waelchi.com', '+1.513.768.6426', 'Winfieldberg', NULL, '$2y$10$6oJIFKOR5BtFpF9EqOgVi.k69uNPDuAihhkQ6oEqpcFzcitA7m2cy', NULL, '2022-08-13 13:10:29', '2022-08-13 13:10:29'),
(31, 'Elda', 'Murphy', 'Male', '1977-02-07 14:14:59', 'AB', 'nicolette29', 'htillman@hauck.info', '830-496-2606', 'Lake Johnnyberg', NULL, '$2y$10$AkS9OHpnUSsePhEV/rVh.upzm5kzxcZIs4R/.omEj368vXvfT9CvK', NULL, '2022-08-13 13:10:29', '2022-08-13 13:10:29'),
(32, 'Bryce', 'Littel', 'Male', '1977-12-06 04:29:03', 'O', 'lind.linda', 'rubie83@yahoo.com', '908.678.4812', 'Grahamhaven', NULL, '$2y$10$gmYpTnECOSbGKhkDQ8Ag2uBnhS5g9y2IsdtlYJkF1GL0FkYMI5.1i', NULL, '2022-08-13 13:10:30', '2022-08-13 13:10:30'),
(33, 'Jayde', 'Nolan', 'Male', '1986-02-12 22:08:44', 'O', 'michale52', 'rubye.kerluke@gmail.com', '(936) 626-2038', 'Port Ignacio', NULL, '$2y$10$htZz.//rJ3EIVRi1uGGiHuYwjBUF7Zv43APK0BT36YOuiZCulrTqu', NULL, '2022-08-13 13:10:30', '2022-08-13 13:10:30'),
(34, 'Hardy', 'Dooley', 'Female', '1988-12-09 06:54:36', 'O', 'clair72', 'bartoletti.angeline@yahoo.com', '559.364.6669', 'Pourosshire', NULL, '$2y$10$yThte06oN15r8UW.Y7wphuXWylzmB3uYeupTcnoC24GqDPz8FhEbW', NULL, '2022-08-13 13:10:30', '2022-08-13 13:10:30'),
(35, 'Cleo', 'Mitchell', 'Female', '1999-10-27 12:38:06', 'B', 'roslyn02', 'kurt44@hansen.com', '1-785-337-6122', 'Port Leanna', NULL, '$2y$10$yj3pgWGc86l1vdwU2ztbH.a.LrOQsWTVBVN8spldfOl9rN3unp.6G', NULL, '2022-08-13 13:10:30', '2022-08-13 13:10:30'),
(36, 'Torrance', 'Mayert', 'Female', '1981-06-25 22:00:22', 'A', 'giovani63', 'antoinette72@hotmail.com', '+1.347.427.8854', 'West Landen', NULL, '$2y$10$TbCQuxOTHiy.Yw5eIwB75e6wB02wTeHAMXsITqHnL.UVhyv7mxLDS', NULL, '2022-08-13 13:10:30', '2022-08-13 13:10:30'),
(37, 'Felipe', 'Dickens', 'Male', '1987-05-30 22:15:21', 'B', 'ebogisich', 'wadams@ratke.com', '1-405-500-1183', 'East Randi', NULL, '$2y$10$ZlcQJUjcjq6qAxBMt7Qs3u7FqsUGUMWI4NwMVyJ.51a.Fkv7dQB8m', NULL, '2022-08-13 13:10:30', '2022-08-13 13:10:30'),
(38, 'Rick', 'Blick', 'Female', '1977-01-03 08:52:21', 'A', 'tzboncak', 'cordelia.kub@bernhard.com', '+1 (619) 693-2901', 'West Dahliaport', NULL, '$2y$10$YksytS140aLUVjdQ928JKe6h5E2Y1ZWEbAjiTCh.WqsLfxSrSOVNy', NULL, '2022-08-13 13:10:30', '2022-08-13 13:10:30'),
(39, 'Seth', 'Paucek', 'Male', '1975-05-22 13:06:09', 'B', 'rschmitt', 'brook.upton@hotmail.com', '458.917.7665', 'Pfannerstillberg', NULL, '$2y$10$c7LJF8DOj9um9H36TzWOwOP1Wus1zqmztnlHIhYfJwbnmmfBwm5V6', NULL, '2022-08-13 13:10:30', '2022-08-13 13:10:30'),
(40, 'Enrique', 'Wuckert', 'Female', '1984-05-06 01:37:11', 'B', 'ricky81', 'leo70@ziemann.net', '+1-475-856-5183', 'East Frederique', NULL, '$2y$10$iSKL1onOXDKTlDvRxDWmCeHfjoBFdU.MX2HQFIWzQ/hXDdcwjiRQ.', NULL, '2022-08-13 13:10:30', '2022-08-13 13:10:30'),
(41, 'Marty', 'Keebler', 'Male', '1992-05-25 00:13:21', 'O', 'ayla17', 'glover.bradly@hotmail.com', '+1.530.983.2217', 'Serenityberg', NULL, '$2y$10$dLtXQpgsVJNaJdLR/7c3WOazE7GX0D9DkLMEua6.QbWgRvDItrYRy', NULL, '2022-08-13 13:10:30', '2022-08-13 13:10:30'),
(42, 'Judge', 'Schmitt', 'Male', '1974-11-11 10:47:04', 'B', 'opowlowski', 'zraynor@schowalter.info', '(863) 806-8819', 'New Lilyanburgh', NULL, '$2y$10$4/0KlW76stS/8/ZYg6SpbOTyD6ssUM4x7u.8z97iiSsH9qrYm6id6', NULL, '2022-08-13 13:10:30', '2022-08-13 13:10:30'),
(43, 'Delores', 'Keeling', 'Female', '1980-10-25 02:54:37', 'A', 'ypagac', 'cleveland.wyman@sporer.net', '(878) 932-1525', 'Antoniomouth', NULL, '$2y$10$fFQV1iysFMzyJPFMxXjF4.1tt/sht7Z6Qxf2fjAHVIOmup0O/2ZLm', NULL, '2022-08-13 13:10:30', '2022-08-13 13:10:30'),
(44, 'Gregg', 'Wiza', 'Male', '2004-03-31 18:02:47', 'O', 'eugenia.hill', 'cole.alvah@hotmail.com', '614.924.9207', 'West Dock', NULL, '$2y$10$Yltvh0lVg2YsB5b2FEB1eOyHiKe/3vBDjiCyGRKk5mfTuuuVGgYDG', NULL, '2022-08-13 13:10:30', '2022-08-13 13:10:30'),
(45, 'Juanita', 'Dach', 'Male', '1975-03-30 11:46:06', 'A', 'martine31', 'aimee46@murazik.com', '+1 (503) 919-8048', 'Hartmannmouth', NULL, '$2y$10$HWfpWJAx.6yw45jL0At7TeyN7x14FIF5QW8QzrIG7fHRG7ApBFAHK', NULL, '2022-08-13 13:10:30', '2022-08-13 13:10:30'),
(46, 'Alejandra', 'Ferry', 'Male', '1991-11-16 11:44:33', 'A', 'schmidt.icie', 'aric97@yahoo.com', '+1.414.686.7215', 'Giovanniborough', NULL, '$2y$10$6xRzGYybSAA4axhlcmXvJuhY3qjqBYALDSXHkMtG3oPUPaHgzbLUK', NULL, '2022-08-13 13:10:30', '2022-08-13 13:10:30'),
(47, 'Ronaldo', 'Harber', 'Male', '1982-05-04 22:35:27', 'B', 'hahn.deon', 'kayley36@nolan.biz', '(731) 844-6538', 'Windlermouth', NULL, '$2y$10$8yTEEwyt88nfCjglvkAfRO2iQpadIPjtQUf6y6m.FOfVI9qXrbR0O', NULL, '2022-08-13 13:10:30', '2022-08-13 13:10:30'),
(48, 'Jayda', 'Green', 'Female', '1974-04-29 08:12:23', 'O', 'deondre.torphy', 'schowalter.calista@hotmail.com', '1-219-786-1291', 'North Romanberg', NULL, '$2y$10$K0WD5gwU2CNUaFRDSijUU.yGodQUvvEoF/lYmTSYsb.rElgGBy.q.', NULL, '2022-08-13 13:10:30', '2022-08-13 13:10:30'),
(49, 'Savannah', 'Boyer', 'Female', '1985-06-20 04:48:45', 'O', 'hane.alberto', 'cvonrueden@kiehn.info', '+1.715.456.4521', 'East Bernadine', NULL, '$2y$10$FsLBuHuu5sr0FRRazZA2yOK.SZG0aKGx8vEDj.YPivDtEWoMeIQme', NULL, '2022-08-13 13:10:31', '2022-08-13 13:10:31'),
(50, 'Allison', 'Zulauf', 'Female', '2002-08-31 18:55:19', 'B', 'ardith08', 'rafaela.wuckert@yahoo.com', '469-750-8138', 'Christiansenview', NULL, '$2y$10$3nQRWTL/CL9zZtCrF91XKu0YAN7Y4PU2zpeGFdO/L9GOqbxs71cci', NULL, '2022-08-13 13:10:31', '2022-08-13 13:10:31'),
(51, 'Ricky', 'Rohan', 'Female', '1981-07-24 07:26:50', 'AB', 'lila84', 'rickie.aufderhar@hotmail.com', '517.809.5785', 'West Lurlineland', NULL, '$2y$10$9a3iGlcWWtacz2J5qQ.32.siErNFh3XmNX8AU7D9RNxnKC4V0uDci', NULL, '2022-08-13 13:10:31', '2022-08-13 13:10:31'),
(52, 'Elyssa', 'Wilkinson', 'Male', '1981-10-11 12:23:26', 'AB', 'vkuhic', 'oheaney@oconner.com', '475-366-5683', 'Koeppmouth', NULL, '$2y$10$7wMP.248omnzyXc5gVIYrexv9sKvugYi1QCYEqldDSLK8D69NcXLu', NULL, '2022-08-13 13:10:31', '2022-08-13 13:10:31'),
(53, 'Renee', 'Raynor', 'Male', '1976-02-20 18:23:35', 'O', 'rory49', 'uhoppe@gmail.com', '+14134893421', 'Brentfort', NULL, '$2y$10$r2U4rPsWiONuMhJaqqhm8utlioJ/GPPX69TF8I.az4qiHcNlDeGqu', NULL, '2022-08-13 13:10:31', '2022-08-13 13:10:31'),
(54, 'Mortimer', 'Dietrich', 'Male', '1995-12-14 13:34:47', 'AB', 'skirlin', 'elissa.wintheiser@reinger.org', '341-471-3431', 'South Rebekahtown', NULL, '$2y$10$eNXJfnPmr5V4Dx2Da7qUOuhDSQqalBgMs0dTYVME90TTmfn1Iu.8i', NULL, '2022-08-13 13:10:31', '2022-08-13 13:10:31'),
(55, 'Isobel', 'Hyatt', 'Male', '1988-09-02 01:06:37', 'O', 'pfannerstill.ursula', 'percy20@yahoo.com', '+1-314-591-7191', 'New Tyrique', NULL, '$2y$10$AXHDV20gtU0TLRfbOjGFhuDA3UVvQsf/iKFmhCcFv8zZTFQMgPu9y', NULL, '2022-08-13 13:10:31', '2022-08-13 13:10:31'),
(56, 'Milo', 'Cassin', 'Male', '2003-12-19 09:20:04', 'AB', 'jonas.wilderman', 'natalia.larson@zemlak.net', '+1-870-259-8594', 'Barneyport', NULL, '$2y$10$LrVvOeMMrBLUdtl4TEsSyOFLW9brosZ2KlGuGiAAJEwqoDKB1O7/W', NULL, '2022-08-13 13:10:31', '2022-08-13 13:10:31'),
(57, 'Dulce', 'Schuppe', 'Female', '1996-12-02 10:51:13', 'AB', 'rbeatty', 'isac.conn@kertzmann.info', '(628) 374-0100', 'Lake Landenfurt', NULL, '$2y$10$44yssX1XgjXQEc8msKinfeNVNn/r6soRUIg9hv.vqAq3zThgsPGCu', NULL, '2022-08-13 13:10:31', '2022-08-13 13:10:31'),
(58, 'Jazmyne', 'Kub', 'Male', '1998-03-08 19:49:45', 'AB', 'william.halvorson', 'wconnelly@yahoo.com', '+1-959-290-6806', 'North Omariton', NULL, '$2y$10$x4/dFkAxawc0N1PBBRobGeDfWgLncAK1huF77J1EHkxMnKnTTRZDC', NULL, '2022-08-13 13:10:31', '2022-08-13 13:10:31'),
(59, 'Kirsten', 'Cole', 'Male', '1992-08-17 07:07:53', 'AB', 'schneider.ollie', 'carolyne.dubuque@gmail.com', '+1.458.664.6631', 'Paucekview', NULL, '$2y$10$SjUjAAqp3T8eRsZyyAzzAub7AU3OwuAoLoUPWuKGZ/qm40vVLfu2e', NULL, '2022-08-13 13:10:31', '2022-08-13 13:10:31'),
(60, 'Kyra', 'Gibson', 'Male', '1990-04-03 23:22:35', 'B', 'zmarvin', 'mmcclure@jakubowski.net', '804-873-1977', 'East Waldo', NULL, '$2y$10$aSSMx9NoGJWfJvZ/klSe9eANweaLadMTaOfQOraq4KycdN5b3gDz.', NULL, '2022-08-13 13:10:31', '2022-08-13 13:10:31'),
(61, 'Ignatius', 'Glover', 'Male', '1987-05-15 18:00:08', 'B', 'mia.champlin', 'sarah04@hotmail.com', '+1 (689) 838-8854', 'Port Branttown', NULL, '$2y$10$8EF4xPYmNffIn.WDKnxP4uIcP8kfD8go7Sm1ffk52m2wwHSsaEf5m', NULL, '2022-08-13 13:10:31', '2022-08-13 13:10:31'),
(62, 'Gus', 'Graham', 'Female', '1978-03-09 14:25:36', 'B', 'hartmann.gino', 'wernser@runte.biz', '+13602215707', 'Beerland', NULL, '$2y$10$vbPGlI5Auxa13y1sz24bKuyzKTjetgKtiJ5ae9IKv3FLqxxlXYvAC', NULL, '2022-08-13 13:10:31', '2022-08-13 13:10:31'),
(63, 'Weston', 'Bechtelar', 'Female', '1978-11-10 14:11:10', 'A', 'baby.cummerata', 'lconn@gmail.com', '+1 (763) 440-3920', 'Johnpaulberg', NULL, '$2y$10$NQ3w0JIpM.D5AqdALkGt0.X7zqS9PyjwDKoi/DntioPdiPKfzlG.y', NULL, '2022-08-13 13:10:31', '2022-08-13 13:10:31'),
(64, 'Prince', 'Hudson', 'Female', '1976-02-05 17:54:50', 'B', 'shermann', 'vandervort.vicky@hotmail.com', '1-959-488-8084', 'Lake Halle', NULL, '$2y$10$v9v3aP10tXey9h0CqnXB7eXcMVxsMbWxaJjsXm.x0.Mw8eq0jIOPS', NULL, '2022-08-13 13:10:31', '2022-08-13 13:10:31'),
(65, 'Westley', 'Smitham', 'Male', '1989-07-01 13:40:11', 'A', 'yhowell', 'katharina90@yahoo.com', '+1-724-951-5221', 'Jaylonbury', NULL, '$2y$10$XHLLKUV4ZPxqvfylHcutOOWGNqURHlqD3XjCVtrgYXVMdeLfX66pW', NULL, '2022-08-13 13:10:32', '2022-08-13 13:10:32'),
(66, 'Gunnar', 'Nienow', 'Female', '1977-12-13 08:46:58', 'O', 'ybuckridge', 'zpacocha@sporer.com', '1-253-900-1181', 'West Moshechester', NULL, '$2y$10$H.hlil2U1.dys/tn1nurD.p4P.YUAo6w0ysjY3OYP4kKgOLH2kEnC', NULL, '2022-08-13 13:10:32', '2022-08-13 13:10:32'),
(67, 'Lazaro', 'Hane', 'Female', '1998-02-22 01:34:18', 'O', 'scarlett22', 'marianna.yost@heathcote.org', '(845) 960-6671', 'Vidalshire', NULL, '$2y$10$w9Qmtxnc8EGJI4e.82uHu.OKfLLaWE5FXiPvh4KazIbe0iNjKx1a6', NULL, '2022-08-13 13:10:32', '2022-08-13 13:10:32'),
(68, 'Mozell', 'Aufderhar', 'Female', '1983-01-28 23:21:18', 'B', 'ian05', 'oheaney@yahoo.com', '(443) 263-2852', 'Port Kamrynland', NULL, '$2y$10$1i.YYVr0SD3goqUeIIk/6O2aq6AO1Zm3TWKnMEszpd8eI1R.F9JR.', NULL, '2022-08-13 13:10:32', '2022-08-13 13:10:32'),
(69, 'Tatyana', 'Smith', 'Female', '1993-08-05 15:14:35', 'A', 'reynolds.laura', 'skiehn@mante.com', '+1-559-715-5689', 'Lake Tony', NULL, '$2y$10$OCpgh8H.4vXcWt0.G2IXoOmqC3U900klJ1CMCE2jVppdfx2ovmrly', NULL, '2022-08-13 13:10:32', '2022-08-13 13:10:32'),
(70, 'Caesar', 'Hauck', 'Female', '2000-09-01 20:02:20', 'B', 'lpacocha', 'ebba.hand@yahoo.com', '+1 (445) 829-4796', 'Adonismouth', NULL, '$2y$10$YVn1tgLWYpr.jQAEIEsj/uPIw1FJOrV/2OVv0NGbM07otDX3My9mm', NULL, '2022-08-13 13:10:32', '2022-08-13 13:10:32'),
(71, 'Hailie', 'Veum', 'Male', '1974-07-29 15:08:21', 'B', 'vincenzo.runte', 'sanford82@huels.biz', '805.658.7138', 'North Jermaine', NULL, '$2y$10$KhNpc9m9H/6DM4UM86e0seopKPff8zldxw4Gxb50RBgtwBL/bjkNG', NULL, '2022-08-13 13:10:32', '2022-08-13 13:10:32'),
(72, 'Autumn', 'O\'Conner', 'Female', '1974-12-29 19:37:23', 'B', 'eden.reichert', 'gerlach.noah@gmail.com', '1-731-370-5930', 'Natfurt', NULL, '$2y$10$uPnQnBcKwckgSpSmHJpVueADlryP4yTdqCB0Afe7GP6DMegEzZ9Mq', NULL, '2022-08-13 13:10:32', '2022-08-13 13:10:32'),
(73, 'Billie', 'Monahan', 'Male', '1998-02-14 05:34:22', 'A', 'ckihn', 'omer66@gmail.com', '641.273.5704', 'West Jaylanborough', NULL, '$2y$10$ki.WvlWecbNONtsG4PHSkeLwcqAKJ/a6rQmbfkxxZocDJNbr54UQy', NULL, '2022-08-13 13:10:32', '2022-08-13 13:10:32'),
(74, 'Arno', 'Halvorson', 'Female', '1977-11-20 00:50:30', 'A', 'koelpin.royal', 'shegmann@franecki.info', '+1.229.580.5687', 'New Elizabeth', NULL, '$2y$10$IP3zKlyYBwxuQN3R1Pd7pu9ORXZ2.6SqOVct33VInvGpNhMuY0.jW', NULL, '2022-08-13 13:10:32', '2022-08-13 13:10:32'),
(75, 'Cindy', 'Schultz', 'Female', '2002-10-27 13:23:29', 'AB', 'lehner.talon', 'astiedemann@damore.com', '+1.714.449.0096', 'East Danielle', NULL, '$2y$10$9bxPC2qVr70GMK8GE7vWY.zF5UFZhA6nw2nzDSRenxwy4hcaaTpX6', NULL, '2022-08-13 13:10:32', '2022-08-13 13:10:32'),
(76, 'Kelvin', 'Haag', 'Male', '1989-05-05 20:51:49', 'O', 'sshanahan', 'turner.sigmund@klocko.com', '+1.865.408.4978', 'South Lucas', NULL, '$2y$10$APvhrZQy03X1f23/H01VAea5o1TgjsWoSshjvZrU05mwQ9jXTrAYu', NULL, '2022-08-13 13:10:32', '2022-08-13 13:10:32'),
(77, 'Alexandra', 'Langosh', 'Female', '1981-09-04 05:01:02', 'AB', 'justice.swift', 'urutherford@gmail.com', '+1.234.204.1040', 'Grimestown', NULL, '$2y$10$1Z4WgZfplEiT7QzAaV4PWu/R.ydhwcgNJxqstxLPgwhuLfgyaV7bu', NULL, '2022-08-13 13:10:32', '2022-08-13 13:10:32'),
(78, 'Rogelio', 'Heaney', 'Male', '1991-12-16 10:06:57', 'O', 'fadel.kian', 'emanuel.kovacek@monahan.com', '+18543560950', 'Nicolettefort', NULL, '$2y$10$EmgOSZa16fd0hY8DGYS8AOzgRIAfm9V.u0GiEx.vegUqxhozm8Ch2', NULL, '2022-08-13 13:10:32', '2022-08-13 13:10:32'),
(79, 'Hudson', 'Tromp', 'Female', '2001-03-08 04:01:43', 'O', 'odessa.wiegand', 'fahey.celine@cartwright.com', '+1 (980) 937-9672', 'Eldridgeport', NULL, '$2y$10$Cyo2/NpslzrPN6pk6O9DGuqUGyHBoNoCk5MGUdjwP3madzeMttLom', NULL, '2022-08-13 13:10:32', '2022-08-13 13:10:32'),
(80, 'Sydney', 'Smitham', 'Male', '1985-08-29 19:13:19', 'AB', 'hassie87', 'yundt.aletha@yahoo.com', '872.487.1018', 'Maribelfurt', NULL, '$2y$10$m4ABoK4VRJpBVWYFvMXdJOh2rhGPUmBrrGPhghOf/6KfdTSRHd1p6', NULL, '2022-08-13 13:10:32', '2022-08-13 13:10:32'),
(81, 'Emmy', 'Auer', 'Female', '1990-11-30 07:45:06', 'AB', 'green.palma', 'lempi07@gmail.com', '972.702.3935', 'South Johan', NULL, '$2y$10$VjWGCecq4L5lN5m6JzqCa.KXx.SLkgOQq62sU0xqzTirEeXW26AxK', NULL, '2022-08-13 13:10:33', '2022-08-13 13:10:33'),
(82, 'Gia', 'Dooley', 'Female', '1999-01-08 07:48:56', 'B', 'kristin79', 'marian02@hotmail.com', '954.697.9960', 'Judgeville', NULL, '$2y$10$9sp5ieUfijW0u91d0XNt3uy1wEasg8vtiX7TqdlB75hy/KfBOd5vq', NULL, '2022-08-13 13:10:33', '2022-08-13 13:10:33'),
(83, 'Sylvia', 'Pfannerstill', 'Female', '1987-05-30 12:53:54', 'B', 'selina.satterfield', 'josh.barton@gmail.com', '947.821.3940', 'Purdyport', NULL, '$2y$10$ew35daP9/jMR5UlU9Pv8nu9/el7ZF8bA3KcStaV/bCIzxfMPso8qq', NULL, '2022-08-13 13:10:33', '2022-08-13 13:10:33'),
(84, 'Anita', 'O\'Hara', 'Female', '1986-05-01 03:32:12', 'AB', 'nkonopelski', 'gussie48@yahoo.com', '1-212-582-7018', 'Paolofurt', NULL, '$2y$10$dzuPS9QhELLt1WTZfEii4udt/WCTy3gIs/mIh2tZrqPN.KjAo8pwS', NULL, '2022-08-13 13:10:33', '2022-08-13 13:10:33'),
(85, 'Allison', 'Baumbach', 'Female', '1986-05-13 08:58:54', 'AB', 'deron.rempel', 'alison74@fadel.com', '(231) 459-8468', 'Zoeyland', NULL, '$2y$10$UrT1Iaj1RmDUu1zTdS9eYuPuO6YeV/kIAJesU1QWCuXr3aQdU0/Sy', NULL, '2022-08-13 13:10:33', '2022-08-13 13:10:33'),
(86, 'Harley', 'Murphy', 'Female', '1985-06-24 06:07:01', 'B', 'jessie.hackett', 'camren.howe@hartmann.net', '762-510-1859', 'New Geovany', NULL, '$2y$10$1tdGjk.7.f6yrOQVfKIVzOrSdEDEMUIgoMtShD9t7OL69AEeLdFmq', NULL, '2022-08-13 13:10:33', '2022-08-13 13:10:33'),
(87, 'Alec', 'Carroll', 'Female', '1998-08-11 06:22:20', 'B', 'lynch.margaretta', 'bdeckow@yahoo.com', '1-940-487-9660', 'North Orinstad', NULL, '$2y$10$gHV/SJmVY.yefNvl4ad6zOV6iSVFlLne1s3cseR50bn3QH4PWEhE2', NULL, '2022-08-13 13:10:33', '2022-08-13 13:10:33'),
(88, 'Lionel', 'Herzog', 'Male', '1997-09-03 23:00:58', 'AB', 'lockman.jeanne', 'hettie.macejkovic@schmidt.com', '321.610.8992', 'Magnusborough', NULL, '$2y$10$gAc7R4r2pumLb5Crtiis9.qryQbTXXutjG2Dqq24nV8Ii.UqVFZym', NULL, '2022-08-13 13:10:33', '2022-08-13 13:10:33'),
(89, 'Earlene', 'Tremblay', 'Male', '1977-10-03 15:48:07', 'O', 'crist.bradford', 'mariah.zboncak@monahan.com', '607-408-7338', 'Beierfort', NULL, '$2y$10$F1HwDzUXJJVheCpUMHtzOeYk1NapzPZ0xzL/x4v9NgWFMq2Dur5Ea', NULL, '2022-08-13 13:10:33', '2022-08-13 13:10:33'),
(90, 'Isaias', 'Gorczany', 'Male', '1977-04-06 14:11:06', 'AB', 'darby95', 'amber11@gmail.com', '1-432-414-3351', 'South Nick', NULL, '$2y$10$MS5ywnqpQSyyyU6bFwKWXeb1d74nFV2Lgw9DLPZiMrVHMS0BAAho6', NULL, '2022-08-13 13:10:33', '2022-08-13 13:10:33'),
(91, 'Rosie', 'Pouros', 'Male', '1993-12-06 09:57:25', 'B', 'raleigh75', 'june89@quitzon.com', '+1-253-593-6047', 'New Kristaview', NULL, '$2y$10$J/CABN3DkJ0dBtuM24jhQeaw.nlhUqT31oYfQBPxYbbL92uQyKSUy', NULL, '2022-08-13 13:10:33', '2022-08-13 13:10:33'),
(92, 'Era', 'Williamson', 'Female', '1981-04-28 11:17:03', 'O', 'jaskolski.dewayne', 'itzel.stokes@rice.org', '+13365062976', 'South Jennyfermouth', NULL, '$2y$10$23cWxfAoPOY.rk1m4KyQCOGfQW.Os5joKiEfMnwJ3p0aE4LuOAgny', NULL, '2022-08-13 13:10:33', '2022-08-13 13:10:33'),
(93, 'Major', 'Gutkowski', 'Female', '1992-08-23 01:35:30', 'A', 'abbott.bryon', 'rklocko@gmail.com', '361-491-8612', 'New Marlene', NULL, '$2y$10$zE9eKt8gldx5K08m5mn9iuJHvhGJhiYvCYDHpmoNKqG2pdo5PMONK', NULL, '2022-08-13 13:10:33', '2022-08-13 13:10:33'),
(94, 'Harold', 'Brakus', 'Male', '1991-04-12 22:11:46', 'O', 'mueller.kirk', 'kenny56@stiedemann.com', '903-213-0550', 'East Gilbertton', NULL, '$2y$10$SpuM0kHcFMPo7nfCwTVrDOb1vvZnSTblmjOg39e.32CtnxXlQzZNS', NULL, '2022-08-13 13:10:33', '2022-08-13 13:10:33'),
(95, 'Zena', 'Cormier', 'Male', '1993-02-02 01:50:26', 'AB', 'eddie89', 'tillman.lacey@yahoo.com', '(501) 274-7661', 'Charleyview', NULL, '$2y$10$KrJRyFaQyCsIFw4cnotOBezLemhokTI2JII32SbXpVYenQnOjT9.m', NULL, '2022-08-13 13:10:33', '2022-08-13 13:10:33'),
(96, 'Cassandre', 'Bins', 'Male', '1992-09-12 13:43:17', 'A', 'mae.shields', 'jakayla.kautzer@hotmail.com', '+1-731-605-8252', 'Bryanaport', NULL, '$2y$10$EwS4VKaSLt8OUaddY1n2mOtNfxwwR0Nh72Gm0Du2udTEpyl8qfjHq', NULL, '2022-08-13 13:10:33', '2022-08-13 13:10:33'),
(97, 'Casper', 'Hand', 'Female', '1983-04-16 14:49:59', 'B', 'ortiz.aletha', 'bogan.lyda@price.info', '+1-931-229-1151', 'Pfannerstillchester', NULL, '$2y$10$5CEDOU9fE9aDdVJZm.hd4OwkULdwdMDxVDx/g3OsQkusEj2B60YsS', NULL, '2022-08-13 13:10:33', '2022-08-13 13:10:33'),
(98, 'Theresia', 'Moen', 'Female', '1978-10-10 06:20:27', 'O', 'lisandro.trantow', 'jfeeney@carter.net', '484.816.3023', 'Oscarshire', NULL, '$2y$10$8gKMYPc/p4.Zie4wF.M7i.cphVTaTpMuUWz349TGJVPA.zy.LotTS', NULL, '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(99, 'Raina', 'Boehm', 'Female', '1991-03-08 16:45:58', 'B', 'benjamin09', 'douglas.charlotte@orn.info', '754-812-4009', 'South Libby', NULL, '$2y$10$aQY7fIKHbK.6/hWMazTfbODqB2UiBdWPNkW/UHZSrt0H.6865DX/2', NULL, '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(100, 'Cletus', 'Runte', 'Male', '1989-11-30 21:04:26', 'O', 'odietrich', 'ideckow@bartell.info', '+1 (318) 534-4583', 'Jermainville', NULL, '$2y$10$UKBiiGjC1glxVPbxxADrj.AFlTTtG1tEU1JDTlEd1Q6x4ru2mvcYy', NULL, '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(101, 'Precious', 'Bradtke', 'Male', '1986-03-23 14:43:04', 'A', 'kemmer.lonny', 'claud61@gmail.com', '864.250.6369', 'Wuckertshire', NULL, '$2y$10$DoBoByGVH5EJwwgkK7znz.0m5tCKP60Gu5RligM8Jd3EP02or298q', NULL, '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(102, 'Beulah', 'Kirlin', 'Male', '1993-09-13 02:11:27', 'A', 'kuhlman.dell', 'rose17@gmail.com', '+1-607-491-2754', 'Devenville', NULL, '$2y$10$VtCYg.m/i8N6niNcoeX5y.f7aVuRpYg9FZ7sx0vcbLS4OIp2xyX82', NULL, '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(103, 'Devyn', 'Torp', 'Male', '1987-12-26 08:13:13', 'B', 'dsauer', 'konopelski.travis@gmail.com', '(661) 263-9654', 'Port Tayaview', NULL, '$2y$10$RePWEuGzSWhgpKDpQEeRRuBHR4H3oHlHGu.eafdab1dK3lfSqV2pW', NULL, '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(104, 'Larue', 'Heaney', 'Male', '2000-07-26 15:57:40', 'B', 'evelyn78', 'hyman83@gmail.com', '+1.567.854.8383', 'New Raphaellehaven', NULL, '$2y$10$Gb0M.Ou9pvCuxKG3XQ7sOudrRpx42FPZnNX91x6pxJ1vEwAzsLKKK', NULL, '2022-08-13 13:10:34', '2022-08-13 13:10:34'),
(105, 'Antone', 'Rohan', 'Female', '2001-05-22 09:41:39', 'AB', 'rglover', 'arnulfo00@friesen.com', '1-223-951-4295', 'North Cale', NULL, '$2y$10$PTVNk73uHcmmTQinPH1WGuTzCaLGraCIldLyeVAyOeClInscXndPu', NULL, '2022-08-13 13:10:34', '2022-08-13 13:10:34');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `check_out_histories`
--
ALTER TABLE `check_out_histories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `health_indices`
--
ALTER TABLE `health_indices`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hospital_departments`
--
ALTER TABLE `hospital_departments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Chỉ mục cho bảng `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Chỉ mục cho bảng `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `staff_username_unique` (`username`),
  ADD UNIQUE KEY `staff_email_unique` (`email`),
  ADD UNIQUE KEY `staff_phone_unique` (`phone`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `check_out_histories`
--
ALTER TABLE `check_out_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=501;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `health_indices`
--
ALTER TABLE `health_indices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT cho bảng `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `hospital_departments`
--
ALTER TABLE `hospital_departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT cho bảng `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
