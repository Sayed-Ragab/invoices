-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2025 at 06:31 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invoices`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `email_verified_at`, `status`, `password`) VALUES
(1, 'sayed', 'sayed@gmail.com', NULL, 'active', '123456789'),
(2, 'Admin', 'Admin@Test.Com', '2025-12-12 17:15:07', 'active', '$2y$10$y0z8gyVxMzNeTxn.NZ2BVu2X71k5iAh.Lo2eK3L6zdY40SxqNaKnq'),
(8, 'x', 'x@Test.Com', NULL, 'active', '$2y$10$MSqdILXxQCY5OXfcYv2NpebSloIqFBx9I4I.zsgiYu05gXxMQBUra'),
(9, 'ahmed', 'ahmed@Test.Com', NULL, 'active', '$2y$10$dcC.4DIfua92qz3OY5K1/uoZyrMTh4eTN6LgdxrSij4g7O0WgTV/.'),
(10, 'sayed', 'sayed12@gmail.com', NULL, 'active', '$2y$10$z7lVOrDTes3SGei85BmGdOo7xe0qnGzf8Z89zkasDZ5Xb6c/l4Tq6'),
(11, 'sayedRagab', 'sayed1@gmai.com', '2025-12-13 19:19:48', 'active', '$2y$10$ANbYGNe1jhUbSDOdEt2/XuxudXX4o2RpLH1o47MBDFiq8aanzkdE2'),
(12, 'sayedRagab', 'sayedRagab@gmai.com', '2025-12-13 19:21:16', 'active', '$2y$10$FjEPPucGSpP2879cphx6hOenCZQs9AfNIke3JUkV8C6PUoRBhcxBq'),
(13, 'x', 'sayedx@gmai.com', NULL, '', '$2y$10$SFcPu4ACJxk.pMy7qrBAG.Ua/8Tde1SbOiAOKdAOIH2sdT9kEbve.'),
(14, 'test', 'test@gmail.com', NULL, 'active', '$2y$10$YRVLBcnhNlL4zqeLy6qz5eO8qdLuMCsbeypiaIbSrvWzHG3OKHEru'),
(15, 'admin_1', 'Admin_1@Test.Com', NULL, 'active', '$2y$10$J0HdviwlwH8SGtorwhiF/ufRceFofs/T6X9gJJuUpzTyFT4FUN69G'),
(16, 'sayedRagab', 'sayedRagab@Test.Com', NULL, 'active', '$2y$10$PmO4Cos0RnKROukwt05aKOZFHEHJxZ3icBsw1GjUrKZx/RB8lMR3y'),
(17, 'ss', 'ss@Test.Com', NULL, 'active', '$2y$10$KzlNvp8GUHlrhYEYEC3zkuZ5YL5PpsB6TcQ5z4n58iuCaQuhauWuC'),
(18, 'test1', 'n@Test.Com', NULL, 'active', '$2y$10$RPl9yqHOBO5qqvAEM7GapO0hZDW2Lo0Bo3FCG8S3MI7PkjOdIFIe6'),
(19, 'x', 'x@x', NULL, 'active', '$2y$10$VeLaKiRfr0OnPqLudH/M7uaitcYLU.F/Vzu7rDV3ASQf3nvrg0S4q'),
(20, 'sayedRagab', 'sayed@gmail.com', NULL, 'active', '$2y$10$R3N4mS3zlCiNLfoUT5NDyeO6f2ixeRVATn0CLAJMEARMZIEPuQe5m');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `invoice_number` varchar(255) DEFAULT NULL,
  `invoice_date` date DEFAULT NULL,
  `Due_date` date DEFAULT NULL,
  `product` varchar(255) DEFAULT NULL,
  `section_id` int(11) NOT NULL,
  `Amount_collection` decimal(8,2) DEFAULT NULL,
  `Amount_Commission` decimal(8,2) DEFAULT NULL,
  `Discount` decimal(8,2) DEFAULT NULL,
  `Value_VAT` decimal(8,2) DEFAULT NULL,
  `Rate_VAT` varchar(255) DEFAULT NULL,
  `Total` decimal(8,2) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `Value_Status` int(11) DEFAULT NULL,
  `Note` text DEFAULT NULL,
  `Payment_Date` date DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `invoice_number`, `invoice_date`, `Due_date`, `product`, `section_id`, `Amount_collection`, `Amount_Commission`, `Discount`, `Value_VAT`, `Rate_VAT`, `Total`, `Status`, `Value_Status`, `Note`, `Payment_Date`, `deleted_at`) VALUES
(1, '1001', '2025-12-21', '2025-12-30', 'القروض العقاريه', 1, 999999.99, 25000.00, 1000.00, 1200.00, '5%', 25200.00, 'غير مدفوعه', 2, 'فاتوره رقم 1001', NULL, NULL),
(2, '1002', '2025-12-23', '2025-12-30', 'بطاقات الائتمان', 1, 999999.99, 25000.00, 1000.00, 1200.00, '5%', 25200.00, 'غير مدفوعه', 2, 'فاتوره رقم 1002', NULL, NULL),
(3, '1003', '2025-12-23', '2025-12-30', 'شهادات الاستسمار', 2, 100000.00, 2500.00, 1000.00, 150.00, '10%', 1650.00, 'مدفوعة جزئيا', 3, 'فاتوره رقم 1003', '2025-12-30', NULL),
(4, '1004', '2025-12-23', '2025-12-30', 'التحويل خارج البلاد', 2, 999999.99, 25000.00, 1000.00, 2400.00, '10%', 26400.00, 'مدفوعة جزئيا', 3, 'فاتوره رقم 1004', '2025-12-30', NULL),
(5, '1005', '2025-12-23', '2025-11-01', 'ادارة العملات الاجنبيه', 3, 10000.00, 2500.00, 1000.00, 150.00, '10%', 1650.00, 'مدفوعة', 1, 'فاتوره رقم 1005', '2025-11-01', NULL),
(6, '1006', '2025-12-23', '2025-12-30', 'ادارة العملات الاجنبيه', 3, 100000.00, 25000.00, 1000.00, 2400.00, '10%', 26400.00, 'مدفوعة', 1, 'فاتوره رقم 1006', '2025-11-01', NULL),
(7, '1007', '2025-12-24', '2025-12-28', 'بطاقات الائتمان', 1, 999999.99, 50000.00, 1000.00, 2450.00, '5%', 51450.00, 'مدفوعة', 1, '', '2025-12-30', NULL),
(8, '1005', '2025-12-25', '2025-12-30', '1', 1, 100000.00, 25000.00, 1000.00, 1200.00, '5%', 25200.00, 'مدفوعة', 1, '', '2025-12-30', NULL),
(9, '1009', '2025-12-25', '2025-12-28', '1', 1, 100000.00, 25000.00, 1000.00, 1200.00, '5%', 25200.00, 'غير مدفوعه', 2, '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `invoices_details`
--

CREATE TABLE `invoices_details` (
  `id` int(11) NOT NULL,
  `invoice_number` varchar(255) DEFAULT NULL,
  `invoices_id` int(11) NOT NULL,
  `product` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  `value_status` int(11) DEFAULT NULL,
  `Note` text DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `Payment_Date` date DEFAULT NULL,
  `users` varchar(255) DEFAULT NULL,
  `Created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `invoices_details`
--

INSERT INTO `invoices_details` (`id`, `invoice_number`, `invoices_id`, `product`, `section`, `value_status`, `Note`, `status`, `Payment_Date`, `users`, `Created_at`) VALUES
(11, '10012', 8, 'تغير الاوراق الماليه', '6', 2, '', 'غير مدفوعه', NULL, 'sayedRagab', '2025-12-02 11:32:39'),
(28, '10012', 8, 'تغير الاوراق الماليه', '', 1, '', 'مدفوعة', '2025-12-24', 'sayedRagab', '2025-12-02 11:49:05'),
(32, '1005', 13, 'القروض الشخصيه', '3', 2, '', 'غير مدفوعه', NULL, 'Admin', '2025-12-08 20:06:48'),
(33, '1005', 13, 'القروض الشخصيه', '', 3, '', 'مدفوعة جزئيا', '2025-12-23', 'Admin', '2025-12-08 20:08:46'),
(34, '1009', 14, 'بطاقات الائتمان', '4', 2, '', 'غير مدفوعه', NULL, 'Admin', '2025-12-08 20:23:12'),
(35, '1005', 13, 'القروض الشخصيه', '', 3, '', 'مدفوعة جزئيا', '2025-12-30', 'Admin', '2025-12-08 20:23:51'),
(36, '1009', 14, 'بطاقات الائتمان', '', 3, '', 'مدفوعة جزئيا', '2025-12-03', 'Admin', '2025-12-08 20:29:18'),
(41, 'MR2020', 15, 'القروض الشخصيه', '3', 2, '', 'غير مدفوعه', NULL, 'Admin', '2025-12-09 15:36:16'),
(42, 'R22001', 16, 'بطاقات الائتمان', '4', 2, '', 'غير مدفوعه', NULL, 'Admin', '2025-12-09 15:40:18'),
(43, 'MR2020', 15, 'القروض الشخصيه', '', 1, '', 'مدفوعة', '2025-12-11', 'Admin', '2025-12-12 19:47:09'),
(44, '1005', 13, 'القروض الشخصيه', '', 1, '', 'مدفوعة', '2025-12-18', 'Admin', '2025-12-12 19:47:43'),
(45, '10056', 17, 'ادارة الخدمات النقديه', '8', 2, 'thjk./', 'غير مدفوعه', NULL, 'Admin', '2025-12-12 20:44:15'),
(46, 'c4', 18, 'القروض الشخصيه', '3', 2, '', 'غير مدفوعه', NULL, 'sayed', '2025-12-18 23:22:10'),
(47, 'cd45', 19, 'القروض الشخصيه', '3', 2, '', 'غير مدفوعه', NULL, 'Admin', '2025-12-21 13:31:26'),
(48, 'سس', 20, 'القروض الشخصيه', '3', 2, '', 'غير مدفوعه', NULL, 'Admin', '2025-12-21 14:07:05'),
(49, 'c5', 21, 'بطاقات الائتمان', '4', 2, '', 'غير مدفوعه', NULL, 'sayedRagab', '2025-12-21 14:18:51'),
(50, '1001', 22, 'فتح حسابات ', '7', 2, '', 'غير مدفوعه', NULL, 'sayedRagab', '2025-12-21 14:31:48'),
(51, '50', 23, 'فتح حسابات ', '7', 2, '', 'غير مدفوعه', NULL, 'sayedRagab', '2025-12-21 14:33:07'),
(52, '504', 24, 'ادارة الخدمات النقديه', '8', 2, '', 'غير مدفوعه', NULL, 'sayedRagab', '2025-12-21 15:03:52'),
(53, 'ؤؤ', 25, 'قروض للمشروعات الصغيره', '6', 2, '', 'غير مدفوعه', NULL, 'sayedRagab', '2025-12-21 15:13:16'),
(54, '1023c', 26, 'ff', '14', 2, '', 'غير مدفوعه', NULL, 'sayedRagab', '2025-12-21 19:32:42'),
(55, '1001', 1, 'القروض العقاريه', '1', 2, 'فاتوره رقم 1001', 'غير مدفوعه', NULL, 'sayedRagab', '2025-12-21 19:55:34'),
(56, '1002', 2, 'بطاقات الائتمان', '1', 2, 'فاتوره رقم 1002', 'غير مدفوعه', NULL, 'sayedRagab', '2025-12-23 22:03:07'),
(57, '1003', 3, 'شهادات الاستسمار', '2', 2, 'فاتوره رقم 1003', 'غير مدفوعه', NULL, 'sayedRagab', '2025-12-23 22:18:23'),
(58, '1003', 3, 'شهادات الاستسمار', '', 3, 'فاتوره رقم 1003', 'مدفوعة جزئيا', '2025-12-30', 'sayedRagab', '2025-12-23 22:18:36'),
(59, '1004', 4, 'التحويل خارج البلاد', '2', 2, 'فاتوره رقم 1004', 'غير مدفوعه', NULL, 'sayedRagab', '2025-12-23 22:19:23'),
(60, '1004', 4, 'التحويل خارج البلاد', '', 3, 'فاتوره رقم 1004', 'مدفوعة جزئيا', '2025-12-30', 'sayedRagab', '2025-12-23 22:19:39'),
(61, '1005', 5, 'ادارة العملات الاجنبيه', '3', 2, 'فاتوره رقم 1005', 'غير مدفوعه', NULL, 'sayedRagab', '2025-12-23 22:20:54'),
(62, '1005', 5, 'ادارة العملات الاجنبيه', '', 1, 'فاتوره رقم 1005', 'مدفوعة', '2025-11-01', 'sayedRagab', '2025-12-23 22:21:10'),
(63, '1006', 6, 'ادارة العملات الاجنبيه', '3', 2, 'فاتوره رقم 1006', 'غير مدفوعه', NULL, 'sayedRagab', '2025-12-23 22:57:16'),
(64, '1006', 6, 'ادارة العملات الاجنبيه', '', 1, 'فاتوره رقم 1006', 'مدفوعة', '2025-11-01', 'sayedRagab', '2025-12-23 22:57:39'),
(65, '1007', 7, 'بطاقات الائتمان', '1', 2, '', 'غير مدفوعه', NULL, 'sayedRagab', '2025-12-24 01:19:31'),
(66, '1005', 8, '1', '1', 2, '', 'غير مدفوعه', NULL, 'sayedRagab', '2025-12-25 18:12:24'),
(67, '1005', 8, '1', '', 1, '', 'مدفوعة', '2025-12-30', 'sayedRagab', '2025-12-25 18:19:00'),
(68, '1007', 7, 'بطاقات الائتمان', '', 1, '', 'مدفوعة', '2025-12-30', 'sayedRagab', '2025-12-25 18:20:00'),
(69, '1009', 9, '1', '1', 2, '', 'غير مدفوعه', NULL, 'sayedRagab', '2025-12-25 20:11:52');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_attachments`
--

CREATE TABLE `invoice_attachments` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `invoice_number` varchar(255) DEFAULT NULL,
  `create_by` varchar(255) DEFAULT NULL,
  `invoices_id` int(11) DEFAULT NULL,
  `Created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `invoice_attachments`
--

INSERT INTO `invoice_attachments` (`id`, `filename`, `invoice_number`, `create_by`, `invoices_id`, `Created_at`) VALUES
(1, 'Elsayed_Ragab_Abou_El_Fotouh_Gad.pdf', '1001', 'sayedRagab', 1, '2025-12-21 19:55:34'),
(2, 'web_project_ideas_OOP.pdf', '1002', 'sayedRagab', 2, '2025-12-23 22:03:07'),
(3, 'Black Hat Python ( PDFDrive.com ).pdf', '1003', 'sayedRagab', 3, '2025-12-23 22:18:23'),
(4, '9780789758996_SampleCh08.pdf', '1004', 'sayedRagab', 4, '2025-12-23 22:19:23'),
(5, 'CHAPTER 1 What Is Cloud Computing- ( PDFDrive.com )_2.pdf', '1005', 'sayedRagab', 5, '2025-12-23 22:20:54'),
(6, 'Cisco CCNA Routing and Switching 200-125 Official Cert Guide ( PDFDrive.com ).pdf', '1006', 'sayedRagab', 6, '2025-12-23 22:57:16'),
(7, 'CEH Official Certified Ethical Hacker Review Guide .pdf ( PDFDrive.com )_2.pdf', '1007', 'sayedRagab', 7, '2025-12-24 01:19:31'),
(8, 'CCNA Wireless Study Guide- IUWNE Exam 640-721   ( PDFDrive.com ).pdf', '1005', 'sayedRagab', 8, '2025-12-25 18:12:24'),
(9, 'CCNA Routing شرح عربي .pdf', '1009', 'sayedRagab', 9, '2025-12-25 20:11:52');

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(11) NOT NULL,
  `module_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `module_name`) VALUES
(1, 'الفواتير'),
(2, 'قائمة الفواتير'),
(3, 'الفواتير المدفوعة'),
(4, 'الفواتير المدفوعة جزئيا'),
(5, 'الفواتير الغير مدفوعة'),
(6, 'ارشيف الفواتير'),
(7, 'التقارير'),
(8, 'تقرير الفواتير'),
(9, 'تقرير العملاء'),
(10, 'المستخدمين'),
(11, 'قائمة المستخدمين'),
(12, 'صلاحيات المستخدمين'),
(13, 'الاعدادات'),
(14, 'المنتجات'),
(15, 'الاقسام'),
(16, 'اضافة فاتورة'),
(17, 'حذف الفاتورة'),
(18, 'تصدير EXCEL'),
(19, 'تغير حالة الدفع'),
(20, 'تعديل الفاتورة'),
(21, 'ارشفة الفاتورة'),
(22, 'طباعةالفاتورة'),
(23, 'اضافة مرفق'),
(24, 'حذف المرفق'),
(25, 'اضافة مستخدم'),
(26, 'تعديل مستخدم'),
(27, 'حذف مستخدم'),
(28, 'عرض صلاحية'),
(29, 'اضافة صلاحية'),
(30, 'تعديل صلاحية'),
(31, 'حذف صلاحية'),
(32, 'اضافة منتج'),
(33, 'تعديل منتج'),
(34, 'حذف منتج'),
(35, 'اضافة قسم'),
(36, 'تعديل قسم'),
(37, 'حذف قسم');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `data` text NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `type_key` enum('section','product','invoice') DEFAULT NULL,
  `create_by` varchar(255) DEFAULT NULL,
  `role` enum('admin','user') NOT NULL,
  `read_at` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `message`, `data`, `item_id`, `type_key`, `create_by`, `role`, `read_at`, `created_at`, `updated_at`) VALUES
(1, 'InvoiceAdded', 'تم إضافة فاتورة جديده بواسطة sayedRagab', '{\"model\":\"invoice\",\"model_id\":9}', 9, 'invoice', 'sayedRagab', 'admin', '2025-12-25 20:11:52', '2025-12-25 20:11:52', '2025-12-25 20:11:52');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `Note` varchar(255) DEFAULT NULL,
  `section_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `Note`, `section_id`) VALUES
(1, 'القروض العقاريه', '', 1),
(2, 'بطاقات الائتمان', '', 1),
(3, 'شهادات الاستسمار', '', 2),
(4, 'التحويل خارج البلاد', '', 2),
(5, 'ادارة العملات الاجنبيه', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `created_at`, `updated_at`) VALUES
(6, 'user', '2025-12-12 18:39:01', '2025-12-12 18:39:01');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `section_name` varchar(255) DEFAULT NULL,
  `Note` varchar(255) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `section_name`, `Note`, `create_at`) VALUES
(1, 'بنك الزراعي', 'اول بنك', '2025-12-21 19:53:33'),
(2, 'البك الاهلي', 'ثاني بنك', '2025-12-21 19:53:52'),
(3, 'بنك القاهره', 'ثالث', '2025-12-21 19:58:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sayed', 'sayed@gmail.com', NULL, '$2y$10$od6x6Yl1JWCRVWscRJ.EROOu0e5NUi/PkCSQ5nt2Q2EZmm0jrAf4i', 'active', '2025-12-25 14:58:45', '2025-12-25 14:58:45'),
(2, 'sayed', 'sayed@gmail.com', NULL, '$2y$10$72VTjIARZ8B2lknwTsgSQOvwX0UruXf53vXhd2jY/j4TBgKNixtzu', 'active', '2025-12-25 14:58:58', '2025-12-25 14:58:58'),
(3, 'sayed', 'sayed@gmail.com', NULL, '$2y$10$F6xPo6yoQ3T.RF3LHeAriunvtIsku05t0Wdj3F7F95OjrKjVIGMe.', 'active', '2025-12-25 15:05:50', '2025-12-25 15:05:50'),
(4, 'sayed', 'sayed@gmail.com', NULL, '$2y$10$CDib.XRBbEcP5UZiJt1yPOAjxcb5chGyyJfYRPS8YYZatdfbq9e0u', 'active', '2025-12-25 17:11:47', '2025-12-25 17:11:47'),
(5, 'sayed', 'sayed@gmail.com', NULL, '$2y$10$/CHF62n12xGSMq8jTXRhjeNZ1t72.XMHpd1wkggc5Eii.a0obbOjq', 'active', '2025-12-25 17:14:13', '2025-12-25 17:14:13'),
(6, 'sayed', 'sayed@gmail.com', NULL, '$2y$10$f9C7PppBpEr1CULHYkXee.Y3UHPGozE35sDHB/s/zu3fx8t95jZna', 'active', '2025-12-25 17:16:23', '2025-12-25 17:16:23'),
(7, 'sayed', 'sayed@gmail.com', NULL, '$2y$10$bSU26UwcdT14fIhMlsk8bOCgEjMgl7e0W4iyPwnsiCLTkw3zxFlfC', 'active', '2025-12-25 17:18:24', '2025-12-25 17:18:24'),
(8, 'sayed', 'sayed@gmail.com', NULL, '$2y$10$eq1H3P41UCSdrfcQyQu/TOpzsYAwhwmpgUEvG89ugKso9O0U6ctW.', 'active', '2025-12-25 17:28:34', '2025-12-25 17:28:34'),
(9, 'sayed', 'sayed@gmail.com', NULL, '$2y$10$LPkprFZgkhiqtvgm6voqsuU2gQu.Zgunj0OolNn8LroSZLlQGYIKu', 'active', '2025-12-25 17:28:48', '2025-12-25 17:28:48');

-- --------------------------------------------------------

--
-- Table structure for table `user_module`
--

CREATE TABLE `user_module` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `role` enum('admin','users') DEFAULT NULL,
  `module_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user_module`
--

INSERT INTO `user_module` (`id`, `user_id`, `role`, `module_id`) VALUES
(12, 4, NULL, 1),
(13, 4, NULL, 2),
(14, 4, NULL, 3),
(15, 4, NULL, 4),
(16, 4, NULL, 6),
(17, 4, NULL, 9),
(18, 5, NULL, 1),
(19, 5, NULL, 2),
(20, 5, NULL, 4),
(25, 7, NULL, 1),
(26, 7, NULL, 2),
(27, 7, NULL, 4),
(28, 8, NULL, 1),
(29, 8, NULL, 2),
(30, 8, NULL, 4),
(31, 9, NULL, 1),
(32, 9, NULL, 2),
(33, 9, NULL, 3),
(34, 9, NULL, 4),
(35, 9, NULL, 6),
(50, 3, NULL, 1),
(51, 3, NULL, 2),
(52, 3, NULL, 3),
(53, 3, NULL, 4),
(54, 3, NULL, 5),
(55, 3, NULL, 6),
(56, 3, NULL, 7),
(57, 3, NULL, 8),
(58, 1, NULL, 1),
(59, 1, NULL, 2),
(60, 1, NULL, 4),
(61, 1, NULL, 5),
(62, 1, NULL, 7),
(63, 2, NULL, 1),
(64, 2, NULL, 2),
(65, 2, NULL, 3),
(66, 2, NULL, 6),
(67, 6, NULL, 1),
(68, 6, NULL, 2),
(69, 6, NULL, 3),
(70, 6, NULL, 4),
(71, 6, NULL, 5),
(72, 6, NULL, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_invoices_section` (`section_id`);

--
-- Indexes for table `invoices_details`
--
ALTER TABLE `invoices_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_invoices_detail` (`invoices_id`) USING BTREE;

--
-- Indexes for table `invoice_attachments`
--
ALTER TABLE `invoice_attachments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_invoices` (`invoices_id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `section_id` (`section_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_module`
--
ALTER TABLE `user_module`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_moule` (`module_id`),
  ADD KEY `fk_usrs` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `invoices_details`
--
ALTER TABLE `invoices_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `invoice_attachments`
--
ALTER TABLE `invoice_attachments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_module`
--
ALTER TABLE `user_module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `fk_invoices_section` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`);

--
-- Constraints for table `invoices_details`
--
ALTER TABLE `invoices_details`
  ADD CONSTRAINT `fk_invoices_detail` FOREIGN KEY (`invoices_id`) REFERENCES `invoices` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_invoices_details` FOREIGN KEY (`invoices_id`) REFERENCES `invoices` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `invoice_attachments`
--
ALTER TABLE `invoice_attachments`
  ADD CONSTRAINT `fk_invoice` FOREIGN KEY (`invoices_id`) REFERENCES `invoices` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_invoices` FOREIGN KEY (`invoices_id`) REFERENCES `invoices` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_invoices_id` FOREIGN KEY (`invoices_id`) REFERENCES `invoices` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ft_invoices_id` FOREIGN KEY (`invoices_id`) REFERENCES `invoices` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `section_id` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`);

--
-- Constraints for table `user_module`
--
ALTER TABLE `user_module`
  ADD CONSTRAINT `fk_moule` FOREIGN KEY (`module_id`) REFERENCES `modules` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_usrs` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
