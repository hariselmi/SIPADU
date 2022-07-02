/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100421
 Source Host           : localhost:3306
 Source Schema         : smmam_sikadu

 Target Server Type    : MySQL
 Target Server Version : 100421
 File Encoding         : 65001

 Date: 02/07/2022 17:49:30
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for articles
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of articles
-- ----------------------------
BEGIN;
INSERT INTO `articles` VALUES (1, 'Placeat saepe ea possimus provident quos est molestiae reiciendis.', NULL, NULL);
INSERT INTO `articles` VALUES (2, 'Totam laudantium molestiae similique sit.', NULL, NULL);
INSERT INTO `articles` VALUES (3, 'Aut consequatur ducimus ut non voluptatem voluptas.', NULL, NULL);
INSERT INTO `articles` VALUES (4, 'Ad sit voluptatem qui ut dolorem.', NULL, NULL);
INSERT INTO `articles` VALUES (5, 'Qui consequatur eum fuga corrupti.', NULL, NULL);
INSERT INTO `articles` VALUES (6, 'Quos nesciunt blanditiis amet odio.', NULL, NULL);
INSERT INTO `articles` VALUES (7, 'Ex doloremque consequuntur velit alias repellendus ullam.', NULL, NULL);
INSERT INTO `articles` VALUES (8, 'Perspiciatis a quo beatae nobis et suscipit illo.', NULL, NULL);
INSERT INTO `articles` VALUES (9, 'Maiores voluptate animi est enim totam.', NULL, NULL);
INSERT INTO `articles` VALUES (10, 'Rerum expedita inventore nulla voluptates perferendis placeat.', NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for guru
-- ----------------------------
DROP TABLE IF EXISTS `guru`;
CREATE TABLE `guru` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `NIG` bigint(20) DEFAULT NULL,
  `Nama_Lengkap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nama_Mandarin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tempat_Lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tanggal_Lahir` date DEFAULT NULL,
  `Jenis_Kelamin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Agama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `No_Whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Memohon_Ketuhanan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Vegetarian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tempat_Memohon_Ketuhanan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tanggal_Memohon_Ketuhanan` date DEFAULT NULL,
  `Foto_Guru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of guru
-- ----------------------------
BEGIN;
INSERT INTO `guru` VALUES (1, 221008, 'Bodhi', '王照良', 'Batam', '2022-04-10', 'Laki-Laki', 'Guru', 'Buddha Maitreya', '08123456781', 'Komplek Perumahan Kintamani Blok D.3', 'Iya', 'Iya', 'Maha Vihara Duta Maitreya', '2022-04-10', 'Bodhi.jpg', NULL, NULL);
INSERT INTO `guru` VALUES (2, 221009, 'Rian Eka Pratama', '黄家伟', 'Pekanbaru', '2022-03-20', 'Laki-Laki', 'Guru', 'Buddha Umum', '08123456871', 'Mediterania blok k.21', 'Iya', 'Iya', 'Maha Vihara Duta Maitreya', '2022-03-02', 'Rian Eka Pratama.jpg', NULL, NULL);
INSERT INTO `guru` VALUES (3, 221010, 'Desy Widya Permata', '钟佩意', 'Tanjung Pinang', '2022-03-20', 'Perempuan', 'Guru', 'Buddha Maitreya', '08123465781', 'Raja ampat blok k.21', 'Iya', 'Iya', 'Maha Vihara Duta Maitreya', '2022-03-02', 'Desy Widya Permata', NULL, NULL);
INSERT INTO `guru` VALUES (4, 221011, 'Gisalle', 'mei li', 'Medan', '2022-04-10', 'Perempuan', 'Guru', 'Buddha Maitreya', '08123456781', 'Komplek Perumahan Kintamani Blok D.3', 'Iya', 'Iya', 'Maha Vihara Duta Maitreya', '2022-04-10', 'Bodhi.jpg', NULL, NULL);
INSERT INTO `guru` VALUES (5, 221001, 'Roy Kyoshi', '王照良', 'Medan', '2022-04-25', 'Perempuan', 'Guru', 'Buddha Maitreya', '08123456781', 'Perumahan Kintamani C.9', NULL, 'Tidak', NULL, NULL, 'Roy Kioshi.jpg', NULL, NULL);
INSERT INTO `guru` VALUES (6, 221002, 'Loria', '罗珠珠', 'Medan', '2022-04-25', NULL, 'Guru', 'Kong Hu Cu', '08123456781', 'Perum Pallazo', NULL, 'Tidak', NULL, NULL, 'loria.jpg', NULL, NULL);
INSERT INTO `guru` VALUES (8, 221004, 'Chindy', 'Jia Ling', 'fasfasf', '2022-04-25', NULL, 'Guru', 'Buddha Umum', '0812345671', 'Jakarta', NULL, 'Iya', 'fasfasdfas', '2022-04-25', '.jpg', '2022-04-25 01:03:13', NULL);
INSERT INTO `guru` VALUES (15, 221006, 'Indrian Chen', 'Indrian Tan', 'Medan', '2022-04-27', 'Perempuan', 'Guru', 'Buddha Maitreya', '081234581', 'Komplek Perumahan Palm Spring Blok H-16', NULL, 'Tidak', NULL, NULL, '.jpg', '2022-04-27 17:12:02', NULL);
INSERT INTO `guru` VALUES (16, 221007, 'Steven', 'Indrian 保人', 'sdfasfasd', '2022-04-27', 'Laki-laki', 'Guru', 'Buddha Maitreya', '08123465781', 'Perumahan Kintamani', NULL, 'Iya', 'MVDM', '2022-04-27', '.jpg', '2022-04-27 18:46:35', NULL);
COMMIT;

-- ----------------------------
-- Table structure for kelas
-- ----------------------------
DROP TABLE IF EXISTS `kelas`;
CREATE TABLE `kelas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Nama_Kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guru_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kelas_nama_kelas_unique` (`Nama_Kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of kelas
-- ----------------------------
BEGIN;
INSERT INTO `kelas` VALUES (1, 'PG 1', 3, NULL, NULL);
INSERT INTO `kelas` VALUES (2, 'PG 2', 1, NULL, NULL);
INSERT INTO `kelas` VALUES (3, 'PG 3', 2, NULL, NULL);
INSERT INTO `kelas` VALUES (4, '1', 4, NULL, NULL);
INSERT INTO `kelas` VALUES (5, 'TK 1', 1, '2022-04-25 02:26:44', NULL);
INSERT INTO `kelas` VALUES (8, 'TK 2', 6, '2022-04-25 02:30:25', NULL);
INSERT INTO `kelas` VALUES (9, 'TK 3', 2, '2022-04-25 02:31:13', NULL);
COMMIT;

-- ----------------------------
-- Table structure for mapel
-- ----------------------------
DROP TABLE IF EXISTS `mapel`;
CREATE TABLE `mapel` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Nama_Mapel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of mapel
-- ----------------------------
BEGIN;
INSERT INTO `mapel` VALUES (1, 'Bahasa Indonesia', '2022-05-28 17:02:36', NULL);
INSERT INTO `mapel` VALUES (2, 'Matematika', '2022-05-29 01:40:38', NULL);
COMMIT;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
BEGIN;
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (5, '2022_04_09_170147_create_kelas_table', 1);
INSERT INTO `migrations` VALUES (6, '2022_04_09_174455_create_guru_table', 1);
INSERT INTO `migrations` VALUES (7, '2022_04_09_190137_create_gurus_table', 2);
INSERT INTO `migrations` VALUES (8, '2022_04_09_195912_create_guru_table', 3);
INSERT INTO `migrations` VALUES (9, '2022_04_09_200615_create_pesertadidiks_table', 4);
INSERT INTO `migrations` VALUES (10, '2022_04_10_110554_create_pendaftaranonline_table', 5);
INSERT INTO `migrations` VALUES (11, '2022_05_22_153829_mapel_table', 6);
COMMIT;

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for pendaftaranonline
-- ----------------------------
DROP TABLE IF EXISTS `pendaftaranonline`;
CREATE TABLE `pendaftaranonline` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NIS` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `No_Form` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nama_Lengkap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nama_Mandarin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tempat_Lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tanggal_Lahir` date DEFAULT NULL,
  `Jenis_Kelamin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Kelas_ID` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `Agama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Sekolah_Asal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Kelas_Asal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Memohon_Ketuhanan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Vegetarian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tempat_Memohon_Ketuhanan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tanggal_Memohon_Ketuhanan` date DEFAULT NULL,
  `Nama_Ayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Agama_Ayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `No_HP_Ayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nama_Ibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `No_HP_Ibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Agama_Ibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nama_Ortu_Aktif` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `No_Whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Foto_Siswa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of pendaftaranonline
-- ----------------------------
BEGIN;
INSERT INTO `pendaftaranonline` VALUES (5, '2260003', '35', 'yodi', '邮递', 'Batam', '2022-03-08', 'Laki-Laki', '1', 'Buddha Umum', 'SD Maitreyawira', '1C', 'Batam', 'Tidak', NULL, NULL, NULL, 'Indrian 1', NULL, '085364048184', 'Indrian 2', '085364048184', NULL, NULL, '123456782345', 'yodi.jpg', 'AKTIF', NULL, '2022-06-27 14:20:35');
INSERT INTO `pendaftaranonline` VALUES (9, '2260001', '39', 'Indrian Tan', '陈保仁 Chen Bao Ren', 'Batam', '2022-03-23', 'Laki-Laki', '1', 'Buddha Maitreya', 'SD Maitreyawira', '2A', 'Batam', 'Iya', 'Iya', 'Batam', '2022-03-01', 'Harianto Andispart', 'Buddha Maitreyawira', '085364048184', 'Irmayani', '0812345678', 'Buddha Maitreyawira', 'Irmayani', '089876543210', 'indriantan39.jpg', 'AKTIF', NULL, '2022-06-27 01:26:13');
INSERT INTO `pendaftaranonline` VALUES (11, '2260003', '41', 'Indrian Tan', 'Indrian Tan', 'Batam', '2022-03-11', 'Laki-Laki', '1', 'Buddha Maitreya', 'SD Maitreyawira', '1B', 'Batam', 'Iya', '', 'Maha Vihara Duta Maitreya - Batam', '2022-03-04', 'Indrian', NULL, '085364048184', 'Indrian 2', '085364048184', NULL, NULL, '12455346262', '', '0', NULL, '2022-06-27 01:26:10');
INSERT INTO `pendaftaranonline` VALUES (12, '2260002', '42', 'Bodhi', '王照亮', 'Batam', '2022-03-11', 'Laki-Laki', '1', 'Kong Hu Cu', 'SD Maitreyawira', '2B', 'Batam', 'Iya', '', 'Maha Vihara Duta Maitreya - Batam', '2022-03-11', 'Indrian 1', NULL, '085364048184', 'Indrian 2', '085364048184', NULL, NULL, '12432433434', 'bodhi42.jpg', 'AKTIF', NULL, '2022-06-25 20:32:52');
INSERT INTO `pendaftaranonline` VALUES (13, '2260005', '43', 'Indrian Tan', '王照亮', 'Medan', '2022-03-11', 'Laki-Laki', '1', 'Buddha Umum', 'SD Maitreyawira', '', 'Batam', 'Iya', '', 'Maha Vihara Duta Maitreya - Batam', '2022-03-11', 'Indrian 1', NULL, '085364048184', 'Indrian 2', '085364048184', NULL, NULL, '081234567812', '', 'AKTIF', NULL, '2022-06-25 20:32:32');
INSERT INTO `pendaftaranonline` VALUES (14, '22600010', '44', 'Yanto', '道孟 -  Dao Meng', 'Batam', '2022-03-11', 'Laki-Laki', '1', 'Buddha Maitreya', '', '', 'Kintamani', 'Iya', '', 'MVDM - Batam', '2022-03-11', 'Indrian 1', NULL, '085364048184', 'Indrian 2', '085364048184', NULL, NULL, '081234567123', '', '0', NULL, '2022-06-27 01:27:07');
INSERT INTO `pendaftaranonline` VALUES (15, '2260006', '45', 'Raymond', '王照亮', 'Batam', '2022-03-12', 'Laki-Laki', '0', 'Buddha Umum', 'SMP Maitreyawira', '2A', 'Batam', 'Tidak', 'Maha Vihara Duta Maitreya - Batam', 'Iya', '2022-03-12', 'Indrian 1', 'Buddha Maitreya', '085364048184', 'Indriani', '085364048184', 'Buddha Maitreya', NULL, '081234567891', '', 'AKTIF', NULL, '2022-06-25 20:29:38');
INSERT INTO `pendaftaranonline` VALUES (16, '2260007', '47', 'Candra', '文豪', 'Medan', '2022-03-09', 'Perempuan', '2', 'Buddha Umum', 'SMP Maitreyawira', '2A', 'Perumahan Kintamani Blok H-9', 'Iya', 'MVDM', 'Iya', '2022-04-08', 'Indrian 1', 'Buddha Maitreya', '085364048184', 'Indrian 2', '085364048184', 'Buddha Maitreya', NULL, '081345679812', 'D:\\website-aplikasi\\SIPADU\\public\\foto_siswa\\foto1jpg', 'AKTIF', '2022-02-28 10:00:00', '2022-06-25 20:29:43');
INSERT INTO `pendaftaranonline` VALUES (17, '2260008', '48', 'Indrian Tan', '王照亮', 'Batam', '2022-03-21', 'Laki-Laki', '3', 'Buddha Umum', 'SMP Maitreyawira', '2A', 'Batam', 'Iya', 'Iya', 'MVDM', '2022-03-21', 'Indrian 1', 'Buddha Maitreya', '085364048184', 'Indriani', '085364048184', 'Buddha Maitreya', NULL, '081234515154', NULL, 'AKTIF', NULL, '2022-06-25 20:29:47');
INSERT INTO `pendaftaranonline` VALUES (18, '0', '49', 'Indrian Tan', '王照亮', 'Batam', '2022-03-21', 'Laki-Laki', '2', 'Buddha Umum', 'SMP Maitreyawira', '2A', 'Batam', 'Iya', 'Tidak', 'MVDM', '2022-03-21', 'Indrian 1', 'Buddha Maitreya', '085364048184', 'Indrian 2', '085364048184', 'Buddha Maitreya', NULL, '081234657891', NULL, '0', NULL, '2022-06-27 01:26:18');
INSERT INTO `pendaftaranonline` VALUES (19, '0', '50', 'Indrian Tan', '王照亮', 'Batam', '2022-03-04', 'Laki-Laki', '2', 'Kong Hu Cu', 'SMP Maitreyawira', '2A', 'Batam', 'Iya', 'Tidak', 'MVDM', '2022-03-21', 'Indrian', 'Buddha Maitreya', '085364048184', 'Indrian 2', '085364048184', 'Buddha Maitreya', NULL, '081234567891', NULL, '0', NULL, '2022-06-27 01:26:27');
INSERT INTO `pendaftaranonline` VALUES (20, '0', '51', 'Indrian Tan', '文豪', 'Medan', '2022-03-21', 'Laki-Laki', '3', 'Buddha Umum', 'SMP Maitreyawira', '2A', 'Batam', 'Iya', 'Tidak', 'Maha Vihara Duta Maitreya - Batam', '2022-03-21', 'Indrian', 'Islam', '085364048184', 'Indrian 2', '085364048184', 'Kong Hu Cu', NULL, '08134658142', NULL, '0', NULL, NULL);
INSERT INTO `pendaftaranonline` VALUES (21, '0', '52', 'Indrian Tan', '家伟', 'Batam', '2022-03-21', 'Laki-Laki', '3', 'Buddha Umum', 'SMP Maitreyawira', '2A', 'Batam', 'Iya', 'Tidak', 'MVDM', '2022-03-21', 'Indrian', 'Buddha Umum', '085364048184', 'Indrian 2', '085364048184', 'Buddha Maitreya', NULL, '08134665165', NULL, '0', NULL, NULL);
INSERT INTO `pendaftaranonline` VALUES (22, '0', '53', 'Indrian Tan', '王照亮', 'Batam', '2022-03-21', 'Laki-Laki', '2', 'Buddha Maitreya', 'SMP Maitreyawira', '2A', 'Batam', 'Tidak', 'Iya', 'MVDM', '2022-03-21', 'Indrian 1', 'Buddha Umum', '085364048184', 'Indrian 2', '085364048184', 'Buddha Umum', NULL, '08102346154', NULL, '0', NULL, NULL);
INSERT INTO `pendaftaranonline` VALUES (23, '0', '55', 'Rian Eka Pratama', '文豪', 'Batam', '2022-03-22', 'Laki-Laki', '4', 'Islam', 'SD Maitreyawira', '2A', 'Batam', 'Iya', 'Iya', 'Maha Vihara Duta Maitreya - Batam', '2022-03-22', 'Indrian 1', 'Buddha Umum', '085364048184', 'Indrian 2', '085364048184', 'Buddha Maitreya', NULL, '081234651230', NULL, '0', NULL, NULL);
INSERT INTO `pendaftaranonline` VALUES (24, '0', '57', 'Bodhi', '王照亮', 'Batam', '2022-03-22', 'Laki-Laki', '4', 'Buddha Umum', 'SMP Maitreyawira', '2A', 'Batam', 'Tidak', 'Iya', 'Maha Vihara Duta Maitreya - Batam', '2022-03-22', 'Indrian', 'Buddha Maitreya', '085364048184', 'Indriani', '085364048184', 'Buddha Maitreya', NULL, '081234567981', 'Bodhi.png', '0', NULL, NULL);
INSERT INTO `pendaftaranonline` VALUES (25, '0', '58', 'Indrian Tan', 'Indrian Tan', 'Batam', '2022-03-22', 'Laki-Laki', '3', 'Buddha Umum', 'SMP Maitreyawira', '2A', 'Batam', 'Iya', 'Iya', 'Maha Vihara Duta Maitreya - Batam', '2022-03-22', 'Indrian', 'Kong Hu Cu', '085364048184', 'Indriani', '085364048184', 'Buddha Maitreya', NULL, '0812345615458', NULL, '0', '2022-03-21 10:00:00', NULL);
INSERT INTO `pendaftaranonline` VALUES (26, '0', '59', 'Indrian Tan', 'Indrian Tan', 'Medan', '2022-03-22', 'Perempuan', '2', 'Buddha Umum', 'SMP Maitreyawira', '2A', 'Batam', 'Iya', 'Iya', 'MVDM', '2022-03-22', 'Indrian', 'Kong Hu Cu', '085364048184', 'Indrian 2', '085364048184', 'Buddha Umum', NULL, '08132456121', NULL, '0', '2022-03-21 10:00:00', NULL);
INSERT INTO `pendaftaranonline` VALUES (27, '0', '60', 'Indrian Tan', '王照亮', 'Medan', '2022-03-22', 'Laki-Laki', '2', 'Buddha Maitreya', 'SMP Maitreyawira', '2A', 'Batam', 'Iya', 'Iya', 'MVDM', '2022-03-22', 'Indrian 1', 'Buddha Maitreya', '085364048184', 'Indrian 2', '085364048184', 'Buddha Umum', NULL, '081249156544', NULL, '0', '2022-03-21 10:00:00', '2022-06-27 01:26:32');
INSERT INTO `pendaftaranonline` VALUES (28, '0', '61', 'bryan', '王照亮', 'Batam', '2022-03-22', 'Laki-Laki', '4', 'Buddha Maitreya', 'SMP Maitreyawira', '2A', 'Batam', 'Iya', 'Iya', 'MVDM', '2022-03-22', 'Indrian 1', 'Buddha Maitreya', '085364048184', 'Indrian 2', '085364048184', 'Buddha Maitreya', NULL, '081324657891', 'bryan.jpg', '0', '2022-03-21 10:00:00', NULL);
INSERT INTO `pendaftaranonline` VALUES (29, '0', '62', 'Indrian Tan', '王照亮', 'Batam', '2022-03-22', 'Laki-Laki', '3', 'Buddha Umum', 'SMP Maitreyawira', '2A', 'Batam', 'Iya', 'Iya', 'MVDM', '2022-03-22', 'Indrian 1', 'Buddha Maitreya', '085364048184', 'Indriani', '085364048184', 'Buddha Maitreya', NULL, '08123455678', NULL, '0', '2022-03-21 10:00:00', NULL);
INSERT INTO `pendaftaranonline` VALUES (30, '0', '63', 'Indrian Tan', '王照亮', 'Batam', '2022-03-22', 'Laki-Laki', '2', 'Buddha Umum', 'SMP Maitreyawira', '2A', 'Batam', 'Iya', 'Iya', 'Maha Vihara Duta Maitreya - Batam', '2022-03-22', 'Indrian', 'Buddha Maitreya', '085364048184', 'Indriani', '085364048184', 'Buddha Umum', NULL, '081234567891', 'Indrian Tan.jpg', '0', '2022-03-21 10:00:00', NULL);
INSERT INTO `pendaftaranonline` VALUES (31, '0', '64', 'Rian Eka Pratama', '王照亮', 'Batam', '2022-03-23', 'Laki-Laki', '2', 'Buddha Maitreya', 'SMP Maitreyawira', '2A', 'Batam', 'Iya', 'Iya', 'MVDM', '2022-03-23', 'Indrian', 'Buddha Maitreya', '085364048184', 'Indrian 2', '085364048184', 'Buddha Umum', NULL, '081234567812', 'Rian Eka Pratama.jpg', '0', '2022-03-22 10:00:00', '2022-06-27 01:26:35');
INSERT INTO `pendaftaranonline` VALUES (32, '0', '65', 'Indrian Tan', 'Indrian Tan', 'Batam', '2022-04-13', 'Laki-Laki', '0', 'Buddha Maitreya', 'SMP Maitreyawira', '2A', 'Batam', NULL, 'Iya', NULL, NULL, 'Indrian 1', 'Buddha Maitreya', '085364048184', 'Indriani', '085364048184', 'Buddha Maitreya', NULL, '082314567981', '.png', '0', '2022-04-13 00:20:43', '2022-05-18 00:17:43');
INSERT INTO `pendaftaranonline` VALUES (33, '0', '66', 'Bodhi', '文豪', 'Medan', '2022-04-13', 'Laki-Laki', '0', 'Buddha Maitreya', 'SDN 005', '2A', 'Batam', NULL, 'Iya', NULL, NULL, 'Indrian 1', 'Buddha Umum', '085364048184', 'Indriani', '085364048184', 'Buddha Maitreya', 'Harianti', '08123456781', 'Bodhi.jpg', '0', '2022-04-13 00:32:57', '2022-05-18 00:17:46');
INSERT INTO `pendaftaranonline` VALUES (35, '0', '20228067', 'Indrian Tan', 'Indrian Tan', 'Batam', '2022-04-16', 'Laki-Laki', '0', 'Buddha Maitreya', 'SD Maitreyawira', '2A', 'Batam', NULL, 'Tidak', 'MVDM - Batam', '2022-04-16', 'Brandon', 'Buddha Maitreya', '085364048184', 'fasfs', '085364048184', 'Kong Hu Cu', 'Harianti', '08123456981', 'Indrian Tan.jpg', '0', '2022-04-16 16:48:41', '2022-05-18 00:17:48');
INSERT INTO `pendaftaranonline` VALUES (36, '0', '202280023', 'Indrian Tan', 'Indrian Tan', 'Batam', '2022-04-16', 'Laki-Laki', '0', 'Buddha Umum', 'SMP Maitreyawira', '2A', 'Batam', NULL, 'Tidak', NULL, NULL, 'Indrian', 'Buddha Umum', '085364048184', 'Test', '085364048184', 'Kong Hu Cu', 'Harianti', '08123456155', 'Indrian Tan.jpg', '0', '2022-04-16 16:52:05', '2022-05-18 00:17:50');
INSERT INTO `pendaftaranonline` VALUES (37, '0', '202280522', 'Indrian Tan', 'Indrian Tan', 'Medan', '2022-04-16', 'Laki-Laki', '0', 'Buddha Maitreya', 'SMP Maitreyawira', '2A', 'Batam', NULL, 'Iya', 'MVDM', '2022-04-16', 'Brandon', 'Buddha Umum', '085364048184', 'Indriani', '085364048184', 'Buddha Maitreya', 'Jwjwjwj', '08123145616541', 'Indrian Tan.jpg', '0', '2022-04-16 16:55:09', '2022-05-18 00:17:54');
INSERT INTO `pendaftaranonline` VALUES (38, '0', '202280523', 'Indrian Tan', 'Indrian Tan', 'Medan', '2022-04-16', 'Laki-Laki', '0', 'Buddha Umum', 'SMP Maitreyawira', '2A', 'Batam', NULL, 'Iya', 'Maha Vihara Duta Maitreya - Batam', '2022-04-16', 'Indrian', 'Buddha Maitreya', '085364048184', 'Indriani', '085364048184', 'Buddha Maitreya', 'Harianti', '081234569841', 'Indrian Tan.jpg', '0', '2022-04-16 22:38:20', '2022-05-18 00:17:59');
INSERT INTO `pendaftaranonline` VALUES (39, '0', '202280524', 'Indrian Tan', 'Indrian Tan', 'fasfasf', '2022-04-16', 'Perempuan', '0', 'Buddha Maitreya', 'SMP Maitreyawira', '3A', 'Batam', NULL, 'Iya', 'MVDM', '2022-04-16', 'Brandon', 'Buddha Maitreya', '085364048184', 'fasfs', '085364048184', 'Buddha Maitreya', 'Harianti', '081234561241', '202280524.jpg', '0', '2022-04-16 22:41:51', '2022-05-18 00:17:57');
INSERT INTO `pendaftaranonline` VALUES (40, '0', '202280525', 'Indrian Tan', 'Indrian Tan', 'Batam', '2022-04-16', 'Perempuan', '0', 'Buddha Umum', 'SMP Maitreyawira', '2A', 'Batam', NULL, 'Tidak', NULL, NULL, 'Brandon', 'Buddha Umum', '085364048184', 'Jessica', '085364048184', 'Buddha Maitreya', 'Harianti', '08412345614', '202280525.jpg', '0', '2022-04-16 22:55:58', '2022-05-18 00:18:01');
INSERT INTO `pendaftaranonline` VALUES (41, '0', '202280525', 'Indrian Tan', 'Indrian Tan', 'Batam', '2022-04-16', 'Perempuan', '0', 'Buddha Umum', 'SMP Maitreyawira', '2A', 'Batam', NULL, 'Tidak', NULL, NULL, 'Brandon', 'Buddha Umum', '085364048184', 'Jessica', '085364048184', 'Buddha Maitreya', 'Harianti', '08412345614', '202280525.jpg', '0', '2022-04-16 22:56:22', '2022-05-18 00:18:07');
INSERT INTO `pendaftaranonline` VALUES (42, '0', '202280525', 'Indrian Tan', 'Indrian Tan', 'Batam', '2022-04-16', 'Perempuan', '0', 'Buddha Umum', 'SMP Maitreyawira', '2A', 'Batam', NULL, 'Tidak', NULL, NULL, 'Brandon', 'Buddha Umum', '085364048184', 'Jessica', '085364048184', 'Buddha Maitreya', 'Harianti', '08412345614', '202280525.jpg', '0', '2022-04-16 22:56:56', '2022-05-18 00:18:04');
INSERT INTO `pendaftaranonline` VALUES (43, '0', '202280526', 'Indrian Tan', '文豪', 'Batam', '2022-04-17', 'Perempuan', '0', 'Kong Hu Cu', 'SMP Maitreyawira', '3A', 'Batam', NULL, 'Tidak', NULL, NULL, 'Indrian', 'Buddha Umum', '085364048184', 'Indriani', '085364048184', 'Buddha Maitreya', 'Kdkenenen', '081234657891', '202280526.jpg', '0', '2022-04-17 01:01:24', '2022-05-18 00:18:09');
INSERT INTO `pendaftaranonline` VALUES (46, '0', '202280527', 'Indrian Tan', '文豪', 'fasfasf', '2022-04-24', 'Perempuan', '0', 'Buddha Umum', 'SDN 005', '3D', 'Batam', NULL, 'Tidak', 'MVDM', '2022-04-24', 'Indrian', 'Buddha Umum', '085364048184', 'Indriani', '085364048184', 'Buddha Umum', 'Harianti', '08123456789', '202280527.png', '0', '2022-04-24 18:15:48', '2022-05-18 00:18:15');
INSERT INTO `pendaftaranonline` VALUES (47, '2260009', '202280528', 'Indrian Tan', '文豪', 'Medan', '2022-04-24', 'Laki-laki', '0', 'Buddha Maitreya', 'SDN 005', '3A', 'Batam', NULL, 'Tidak', 'MVDM - Batam', '2022-04-24', 'Indrian', 'Kong Hu Cu', '085364048184', 'Jessica', '085364048184', 'Buddha Maitreya', 'Harianti', '0812346578', '202280528.jpg', 'AKTIF', '2022-04-24 20:19:49', '2022-06-25 20:29:54');
INSERT INTO `pendaftaranonline` VALUES (48, '2260010', '202280529', 'Indrian Tan', 'Indrian 保人', 'fasfasf', '2022-04-24', 'Laki-laki', '0', 'Buddha Umum', 'SMP Maitreyawira', '2A', 'Batam', NULL, 'Tidak', NULL, NULL, 'Herryono', 'Buddha Umum', '085364048184', NULL, NULL, NULL, 'Jwjwjwj', '08123465781', '202280529.png', '0', '2022-04-24 21:05:53', '2022-06-25 20:29:59');
INSERT INTO `pendaftaranonline` VALUES (49, '0', '2280002', 'Indrian Tan', 'Indrian 保人', 'fasfasf', '2022-04-24', 'Laki-laki', '0', 'Buddha Umum', 'SD Maitreyawira', '3D', 'Batam', NULL, 'Iya', 'MVDM - Batam', '2022-04-24', 'Indrian', 'Buddha Umum', '085364048184', 'Indriani', '085364048184', 'Kong Hu Cu', 'Jwjwjwj', '08123465781', '2280002.png', '0', '2022-04-24 22:39:28', '2022-05-18 00:18:23');
INSERT INTO `pendaftaranonline` VALUES (50, '2260011', '202280003', 'Indrian Tan', 'Indrian 保人', 'asfasfasdf', '2022-04-27', 'Perempuan', '0', 'Buddha Umum', 'SD Maitreyawira', '3D', 'Batam', NULL, 'Tidak', NULL, NULL, 'Indrian', 'Buddha Umum', '085364048184', 'Indriani', '085364048184', 'Kong Hu Cu', 'Jwjwjwj', '08123456781', '202280003.jpg', '0', '2022-04-27 16:25:44', '2022-06-25 20:30:04');
COMMIT;

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for pesertadidiks
-- ----------------------------
DROP TABLE IF EXISTS `pesertadidiks`;
CREATE TABLE `pesertadidiks` (
  `NIS` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `No_Form` int(255) DEFAULT NULL,
  `Nama_Lengkap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nama_Mandarin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tempat_Lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tanggal_Lahir` date DEFAULT NULL,
  `Jenis_Kelamin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelas_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Agama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Sekolah_Asal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Kelas_Asal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Memohon_Ketuhanan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Vegetarian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tempat_Memohon_Ketuhanan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tanggal_Memohon_Ketuhanan` date DEFAULT NULL,
  `Nama_Ayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Agama_Ayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `No_HP_Ayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nama_Ibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `No_HP_Ibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Agama_Ibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nama_Ortu_Aktif` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `No_Whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Foto_Siswa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`NIS`)
) ENGINE=InnoDB AUTO_INCREMENT=2280003 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of pesertadidiks
-- ----------------------------
BEGIN;
INSERT INTO `pesertadidiks` VALUES (3, 33, 'Indrian Tan', '王照亮', 'Batam', '2022-03-08', 'Laki-Laki', '1', 'Kong Hu Cu', 'SMP Maitreyawira', '', 'Batam', 'Iya', 'Iya', 'MVDM', '2022-03-12', 'Indrian 1', 'Buddha Maitreya', '085364048184', 'Indrian 2', '085364048184', 'Buddha Maitreya', '', '081234567811', '3.jpg', NULL, NULL, NULL);
INSERT INTO `pesertadidiks` VALUES (5, 35, 'yodi', '邮递', 'Batam', '2022-03-08', 'Laki-Laki', '2', 'Buddha Umum', NULL, '', 'Batam', 'Tidak', NULL, NULL, NULL, 'Indrian 1', NULL, '085364048184', 'Indrian 2', '085364048184', NULL, '', '123456782345', 'yodi.jpg', NULL, NULL, NULL);
INSERT INTO `pesertadidiks` VALUES (8, 38, 'Kopi', '文豪', 'Batam', '2022-03-11', 'Perempuan', '4', 'Buddha Umum', NULL, '', 'Batam', 'Iya', NULL, 'MVDM', '2022-03-11', 'Indrian 1', NULL, '085364048184', 'Indriani', '085364048184', NULL, '', '08112345623', '', NULL, NULL, NULL);
INSERT INTO `pesertadidiks` VALUES (9, 39, 'Indrian Tan', '陈保仁 Chen Bao Ren', 'Batam', '2022-03-23', 'Laki-Laki', '4', 'Buddha Maitreya', 'SD Maitreyawira', '2A', 'Batam', 'Iya', 'Iya', 'Batam', '2022-03-01', 'Indrian 1', 'Buddha Maitreyawira', '085364048184', 'Indrian 2', '0812345678', 'Buddha Maitreyawira', '', '089876543210', '', NULL, NULL, NULL);
INSERT INTO `pesertadidiks` VALUES (10, 40, 'Indrian Tan', '文豪', 'Batam', '2022-03-11', 'Perempuan', '4', 'Buddha Umum', '', '', 'Batam', 'Iya', '', 'MVDM', '2022-03-11', 'Indrian 1', NULL, '085364048184', 'Indriani', '085364048184', NULL, '', '08112345623', '', NULL, NULL, NULL);
INSERT INTO `pesertadidiks` VALUES (11, 41, 'Indrian Tan', 'Indrian Tan', 'Batam', '2022-03-11', 'Laki-Laki', '3', 'Buddha Maitreya', '', '', 'Batam', 'Iya', '', 'Maha Vihara Duta Maitreya - Batam', '2022-03-04', 'Indrian', NULL, '085364048184', 'Indrian 2', '085364048184', NULL, '', '12455346262', '', NULL, NULL, NULL);
INSERT INTO `pesertadidiks` VALUES (12, 42, 'Bodhi', '王照亮', 'Batam', '2022-03-11', 'Laki-Laki', '1', 'Kong Hu Cu', '', '', 'Batam', 'Iya', '', 'Maha Vihara Duta Maitreya - Batam', '2022-03-11', 'Indrian 1', NULL, '085364048184', 'Indrian 2', '085364048184', NULL, '', '12432433434', '', NULL, NULL, NULL);
INSERT INTO `pesertadidiks` VALUES (13, 43, 'Indrian Tan', '王照亮', 'Medan', '2022-03-11', 'Laki-Laki', '1', 'Buddha Umum', '', '', 'Batam', 'Iya', '', 'Maha Vihara Duta Maitreya - Batam', '2022-03-11', 'Indrian 1', NULL, '085364048184', 'Indrian 2', '085364048184', NULL, '', '081234567812', '', NULL, NULL, NULL);
INSERT INTO `pesertadidiks` VALUES (14, 44, 'Yanto', '道孟 -  Dao Meng', 'Batam', '2022-03-11', 'Laki-Laki', '1', 'Buddha Maitreya', '', '', 'Kintamani', 'Iya', '', 'MVDM - Batam', '2022-03-11', 'Indrian 1', NULL, '085364048184', 'Indrian 2', '085364048184', NULL, '', '081234567123', '', NULL, NULL, NULL);
INSERT INTO `pesertadidiks` VALUES (17, 47, 'Candra', '文豪', 'Medan', '2022-03-09', 'Perempuan', '2', 'Buddha Umum', 'SMP Maitreyawira', '2A', 'Perumahan Kintamani Blok H-9', 'Iya', 'MVDM', 'Iya', '2022-04-08', 'Indrian 1', 'Buddha Maitreya', '085364048184', 'Indrian 2', '085364048184', 'Buddha Maitreya', '', '081345679812', 'D:\\website-aplikasi\\SIPADU\\public\\foto_siswa\\foto1jpg', NULL, '2022-02-28 17:00:00', NULL);
INSERT INTO `pesertadidiks` VALUES (18, 48, 'Indrian Tan', '王照亮', 'Batam', '2022-03-21', 'Laki-Laki', '3', 'Buddha Umum', 'SMP Maitreyawira', '2A', 'Batam', 'Iya', 'Iya', 'MVDM', '2022-03-21', 'Indrian 1', 'Buddha Maitreya', '085364048184', 'Indriani', '085364048184', 'Buddha Maitreya', '', '081234515154', NULL, NULL, NULL, NULL);
INSERT INTO `pesertadidiks` VALUES (19, 49, 'Indrian Tan', '王照亮', 'Batam', '2022-03-21', 'Laki-Laki', '1', 'Buddha Umum', 'SMP Maitreyawira', '2A', 'Batam', 'Iya', 'Tidak', 'MVDM', '2022-03-21', 'Indrian 1', 'Buddha Maitreya', '085364048184', 'Indrian 2', '085364048184', 'Buddha Maitreya', '', '081234657891', NULL, NULL, NULL, NULL);
INSERT INTO `pesertadidiks` VALUES (20, 50, 'Indrian Tan', '王照亮', 'Batam', '2022-03-04', 'Laki-Laki', '1', 'Kong Hu Cu', 'SMP Maitreyawira', '2A', 'Batam', 'Iya', 'Tidak', 'MVDM', '2022-03-21', 'Indrian', 'Buddha Maitreya', '085364048184', 'Indrian 2', '085364048184', 'Buddha Maitreya', '', '081234567891', NULL, NULL, NULL, NULL);
INSERT INTO `pesertadidiks` VALUES (21, 51, 'Indrian Tan', '文豪', 'Medan', '2022-03-21', 'Laki-Laki', '3', 'Buddha Umum', 'SMP Maitreyawira', '2A', 'Batam', 'Iya', 'Tidak', 'Maha Vihara Duta Maitreya - Batam', '2022-03-21', 'Indrian', 'Islam', '085364048184', 'Indrian 2', '085364048184', 'Kong Hu Cu', '', '08134658142', NULL, NULL, NULL, NULL);
INSERT INTO `pesertadidiks` VALUES (22, 52, 'Indrian Tan', '家伟', 'Batam', '2022-03-21', 'Laki-Laki', '3', 'Buddha Umum', 'SMP Maitreyawira', '2A', 'Batam', 'Iya', 'Tidak', 'MVDM', '2022-03-21', 'Indrian', 'Buddha Umum', '085364048184', 'Indrian 2', '085364048184', 'Buddha Maitreya', '', '08134665165', NULL, NULL, NULL, NULL);
INSERT INTO `pesertadidiks` VALUES (23, 53, 'Indrian Tan', '王照亮', 'Batam', '2022-03-21', 'Laki-Laki', '2', 'Buddha Maitreya', 'SMP Maitreyawira', '2A', 'Batam', 'Tidak', 'Iya', 'MVDM', '2022-03-21', 'Indrian 1', 'Buddha Umum', '085364048184', 'Indrian 2', '085364048184', 'Buddha Umum', '', '08102346154', NULL, NULL, NULL, NULL);
INSERT INTO `pesertadidiks` VALUES (24, 54, 'Indrian Tan', '王照亮', 'Batam', '2022-03-22', 'Perempuan', '1', 'Buddha Umum', 'SMP Maitreyawira', '2A', 'Batam', 'Iya', 'Iya', 'Maha Vihara Duta Maitreya - Batam', '2022-03-22', 'Indrian 1', 'Buddha Maitreya', '085364048184', 'Indriani', '085364048184', 'Buddha Maitreya', '', '081234657891', NULL, NULL, NULL, NULL);
INSERT INTO `pesertadidiks` VALUES (25, 55, 'Rian Eka Pratama', '文豪', 'Batam', '2022-03-22', 'Laki-Laki', '4', 'Islam', 'SD Maitreyawira', '2A', 'Batam', 'Iya', 'Iya', 'Maha Vihara Duta Maitreya - Batam', '2022-03-22', 'Indrian 1', 'Buddha Umum', '085364048184', 'Indrian 2', '085364048184', 'Buddha Maitreya', '', '081234651230', NULL, NULL, NULL, NULL);
INSERT INTO `pesertadidiks` VALUES (27, 57, 'Bodhi', '王照亮', 'Batam', '2022-03-22', 'Laki-Laki', '4', 'Buddha Umum', 'SMP Maitreyawira', '2A', 'Batam', 'Tidak', 'Iya', 'Maha Vihara Duta Maitreya - Batam', '2022-03-22', 'Indrian', 'Buddha Maitreya', '085364048184', 'Indriani', '085364048184', 'Buddha Maitreya', '', '081234567981', 'Bodhi.png', NULL, NULL, NULL);
INSERT INTO `pesertadidiks` VALUES (28, 58, 'Indrian Tan', 'Indrian Tan', 'Batam', '2022-03-22', 'Laki-Laki', '3', 'Buddha Umum', 'SMP Maitreyawira', '2A', 'Batam', 'Iya', 'Iya', 'Maha Vihara Duta Maitreya - Batam', '2022-03-22', 'Indrian', 'Kong Hu Cu', '085364048184', 'Indriani', '085364048184', 'Buddha Maitreya', '', '0812345615458', NULL, NULL, '2022-03-21 17:00:00', NULL);
INSERT INTO `pesertadidiks` VALUES (29, 59, 'Indrian Tan', 'Indrian Tan', 'Medan', '2022-03-22', 'Perempuan', '2', 'Buddha Umum', 'SMP Maitreyawira', '2A', 'Batam', 'Iya', 'Iya', 'MVDM', '2022-03-22', 'Indrian', 'Kong Hu Cu', '085364048184', 'Indrian 2', '085364048184', 'Buddha Umum', '', '08132456121', NULL, NULL, '2022-03-21 17:00:00', NULL);
INSERT INTO `pesertadidiks` VALUES (30, 60, 'Indrian Tan', '王照亮', 'Medan', '2022-03-22', 'Laki-Laki', '1', 'Buddha Maitreya', 'SMP Maitreyawira', '2A', 'Batam', 'Iya', 'Iya', 'MVDM', '2022-03-22', 'Indrian 1', 'Buddha Maitreya', '085364048184', 'Indrian 2', '085364048184', 'Buddha Umum', '', '081249156544', NULL, NULL, '2022-03-21 17:00:00', NULL);
INSERT INTO `pesertadidiks` VALUES (31, 61, 'bryan', '王照亮', 'Batam', '2022-03-22', 'Laki-Laki', '4', 'Buddha Maitreya', 'SMP Maitreyawira', '2A', 'Batam', 'Iya', 'Iya', 'MVDM', '2022-03-22', 'Indrian 1', 'Buddha Maitreya', '085364048184', 'Indrian 2', '085364048184', 'Buddha Maitreya', '', '081324657891', 'bryan.jpg', NULL, '2022-03-21 17:00:00', NULL);
INSERT INTO `pesertadidiks` VALUES (32, 62, 'Indrian Tan', '王照亮', 'Batam', '2022-03-22', 'Laki-Laki', '3', 'Buddha Umum', 'SMP Maitreyawira', '2A', 'Batam', 'Iya', 'Iya', 'MVDM', '2022-03-22', 'Indrian 1', 'Buddha Maitreya', '085364048184', 'Indriani', '085364048184', 'Buddha Maitreya', '', '08123455678', NULL, NULL, '2022-03-21 17:00:00', NULL);
INSERT INTO `pesertadidiks` VALUES (33, 63, 'Indrian Tan', '王照亮', 'Batam', '2022-03-22', 'Laki-Laki', '2', 'Buddha Umum', 'SMP Maitreyawira', '2A', 'Batam', 'Iya', 'Iya', 'Maha Vihara Duta Maitreya - Batam', '2022-03-22', 'Indrian', 'Buddha Maitreya', '085364048184', 'Indriani', '085364048184', 'Buddha Umum', '', '081234567891', 'Indrian Tan.jpg', 'AKTIF', '2022-03-21 17:00:00', NULL);
INSERT INTO `pesertadidiks` VALUES (2280001, 64, 'Rian Eka Pratama', '王照亮', 'Batam', '2022-03-23', 'Laki-Laki', '1', 'Buddha Maitreya', 'SMP Maitreyawira', '2A', 'Batam', 'Iya', 'Iya', 'MVDM', '2022-03-23', 'Indrian', 'Buddha Maitreya', '085364048184', 'Indrian 2', '085364048184', 'Buddha Umum', '', '081234567812', 'Rian Eka Pratama.jpg', 'AKTIF', '2022-03-22 17:00:00', NULL);
INSERT INTO `pesertadidiks` VALUES (2280002, 2280002, 'Indrian Tan', 'Indrian 保人', 'Medan', '2022-04-24', 'Laki-Laki', NULL, 'Buddha Maitreya', 'SD Maitreyawira', '2A', 'Batam', NULL, 'Tidak', NULL, NULL, 'Brandon', 'Buddha Umum', '085364048184', 'Indriani', '085364048184', 'Buddha Maitreya', 'Jwjwjwj', '081234657891', '2280002.png', 'AKTIF', NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for rapor
-- ----------------------------
DROP TABLE IF EXISTS `rapor`;
CREATE TABLE `rapor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tahun_pelajaran_id` int(11) DEFAULT NULL,
  `kelas_id` int(11) DEFAULT NULL,
  `siswa_id` int(11) DEFAULT NULL,
  `membaca` int(11) DEFAULT NULL,
  `mendengar` int(11) DEFAULT NULL,
  `menulis` int(11) DEFAULT NULL,
  `nilai_ujian` int(11) DEFAULT NULL,
  `kebaktian` varchar(1) DEFAULT NULL,
  `kesopanan` varchar(1) DEFAULT NULL,
  `kerapian` varchar(1) DEFAULT NULL,
  `kerajinan` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of rapor
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for tags
-- ----------------------------
DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tags
-- ----------------------------
BEGIN;
INSERT INTO `tags` VALUES (1, 'dolores', 2, NULL, NULL);
INSERT INTO `tags` VALUES (2, 'culpa', 3, NULL, NULL);
INSERT INTO `tags` VALUES (3, 'sit', 4, NULL, NULL);
INSERT INTO `tags` VALUES (4, 'quasi', 3, NULL, NULL);
INSERT INTO `tags` VALUES (5, 'inventore', 5, NULL, NULL);
INSERT INTO `tags` VALUES (6, 'ut', 7, NULL, NULL);
INSERT INTO `tags` VALUES (7, 'quisquam', 5, NULL, NULL);
INSERT INTO `tags` VALUES (8, 'fugiat', 7, NULL, NULL);
INSERT INTO `tags` VALUES (9, 'perspiciatis', 5, NULL, NULL);
INSERT INTO `tags` VALUES (10, 'voluptatem', 3, NULL, NULL);
INSERT INTO `tags` VALUES (11, 'non', 2, NULL, NULL);
INSERT INTO `tags` VALUES (12, 'ducimus', 5, NULL, NULL);
INSERT INTO `tags` VALUES (13, 'tempora', 4, NULL, NULL);
INSERT INTO `tags` VALUES (14, 'voluptatem', 10, NULL, NULL);
INSERT INTO `tags` VALUES (15, 'nisi', 3, NULL, NULL);
INSERT INTO `tags` VALUES (16, 'exercitationem', 10, NULL, NULL);
INSERT INTO `tags` VALUES (17, 'sed', 2, NULL, NULL);
INSERT INTO `tags` VALUES (18, 'tempora', 6, NULL, NULL);
INSERT INTO `tags` VALUES (19, 'laudantium', 7, NULL, NULL);
INSERT INTO `tags` VALUES (20, 'a', 6, NULL, NULL);
INSERT INTO `tags` VALUES (21, 'consequuntur', 9, NULL, NULL);
INSERT INTO `tags` VALUES (22, 'omnis', 1, NULL, NULL);
INSERT INTO `tags` VALUES (23, 'rerum', 9, NULL, NULL);
INSERT INTO `tags` VALUES (24, 'ut', 1, NULL, NULL);
INSERT INTO `tags` VALUES (25, 'amet', 10, NULL, NULL);
INSERT INTO `tags` VALUES (26, 'atque', 9, NULL, NULL);
INSERT INTO `tags` VALUES (27, 'at', 4, NULL, NULL);
INSERT INTO `tags` VALUES (28, 'hic', 3, NULL, NULL);
INSERT INTO `tags` VALUES (29, 'itaque', 1, NULL, NULL);
INSERT INTO `tags` VALUES (30, 'quia', 9, NULL, NULL);
INSERT INTO `tags` VALUES (31, 'consequatur', 8, NULL, NULL);
INSERT INTO `tags` VALUES (32, 'non', 9, NULL, NULL);
INSERT INTO `tags` VALUES (33, 'explicabo', 10, NULL, NULL);
INSERT INTO `tags` VALUES (34, 'eos', 6, NULL, NULL);
INSERT INTO `tags` VALUES (35, 'eveniet', 5, NULL, NULL);
INSERT INTO `tags` VALUES (36, 'dolor', 10, NULL, NULL);
INSERT INTO `tags` VALUES (37, 'magnam', 10, NULL, NULL);
INSERT INTO `tags` VALUES (38, 'aut', 1, NULL, NULL);
INSERT INTO `tags` VALUES (39, 'et', 6, NULL, NULL);
INSERT INTO `tags` VALUES (40, 'ut', 10, NULL, NULL);
INSERT INTO `tags` VALUES (41, 'kucing', 1, NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for tahun_pelajaran
-- ----------------------------
DROP TABLE IF EXISTS `tahun_pelajaran`;
CREATE TABLE `tahun_pelajaran` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_awal` date NOT NULL,
  `tanggal_akhir` date DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tahun_pelajaran
-- ----------------------------
BEGIN;
INSERT INTO `tahun_pelajaran` VALUES (1, '2021/2022 GANJIL', '2021-07-01', '2021-12-31');
INSERT INTO `tahun_pelajaran` VALUES (2, '2021/2022 GENAP', '2022-01-01', '2022-06-30');
INSERT INTO `tahun_pelajaran` VALUES (3, '2022/2023 GANJIL', '2022-07-01', '2022-12-31');
INSERT INTO `tahun_pelajaran` VALUES (4, '2022/2023 GENAP', '2023-01-01', '2023-06-30');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES (1, 'Indrian Tan', 'Indriantan@gmail.com', NULL, '$2y$10$3GN9ySRxKYeZwpasXR0Fxun2O00HUU6bMBQLVlQMxAqnaG3zSoP3a', NULL, '2022-04-11 16:48:47', '2022-04-11 16:48:47');
INSERT INTO `users` VALUES (2, 'Bodhi', 'bodhi@gmail.com', NULL, '$2y$10$CePS1Alp2aM/Id0ELxKR2uaNQWBkyj0cQ1HTgYzbY755PZUCIVakm', NULL, '2022-04-11 18:37:50', '2022-04-11 18:37:50');
INSERT INTO `users` VALUES (3, 'SMMAM', 'smmam@gmail.com', NULL, '12345678', NULL, '2022-04-27 11:50:09', '2022-04-27 11:50:09');
INSERT INTO `users` VALUES (4, 'Admin', 'admin@gmail.com', NULL, '$2y$10$jCLvZQAy4xaSjI7SilbHsuZLCWRckVkXuD5jSY8e8mNxrMSCnC4kC', NULL, '2022-06-26 20:14:25', '2022-06-26 20:14:25');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
