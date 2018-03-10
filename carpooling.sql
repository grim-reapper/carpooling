/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.5.5-10.1.30-MariaDB : Database - carpooling
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`carpooling` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `carpooling`;

/*Table structure for table `cars` */

DROP TABLE IF EXISTS `cars`;

CREATE TABLE `cars` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `make` varchar(55) DEFAULT NULL,
  `model` varchar(55) NOT NULL,
  `year` int(4) unsigned NOT NULL,
  `color` varchar(55) DEFAULT NULL,
  `registration_number` varchar(55) DEFAULT NULL,
  `is_air_cond` enum('y','n') NOT NULL DEFAULT 'n',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cars` */

/*Table structure for table `email` */

DROP TABLE IF EXISTS `email`;

CREATE TABLE `email` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email_type` enum('notification','common') NOT NULL DEFAULT 'common',
  `usage_description` varchar(255) NOT NULL,
  `email_reference` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `from_name` varchar(255) DEFAULT NULL,
  `from_email` varchar(255) DEFAULT NULL,
  `to_email` varchar(255) DEFAULT NULL,
  `cc_email` varchar(255) DEFAULT NULL,
  `bcc_email` varchar(255) DEFAULT NULL,
  `reply_to_email` varchar(255) DEFAULT NULL,
  `body` text NOT NULL,
  `variable_used` text NOT NULL,
  `is_active` enum('y','n') NOT NULL DEFAULT 'y',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) DEFAULT NULL,
  `last_updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_reference` (`email_reference`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `email` */

/*Table structure for table `email_logs` */

DROP TABLE IF EXISTS `email_logs`;

CREATE TABLE `email_logs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) DEFAULT NULL,
  `email_type` enum('notification','common') NOT NULL DEFAULT 'notification',
  `recipient` varchar(255) DEFAULT NULL,
  `from_name` varchar(255) DEFAULT NULL,
  `cc_email` varchar(255) DEFAULT NULL,
  `bcc_email` varchar(255) DEFAULT NULL,
  `return_path` varchar(255) DEFAULT NULL,
  `body` text,
  `email_reference` varchar(50) NOT NULL,
  `is_sent` enum('y','n') DEFAULT NULL,
  `is_blocked` enum('y','n') NOT NULL DEFAULT 'n',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `email_logs` */

/*Table structure for table `user_cars` */

DROP TABLE IF EXISTS `user_cars`;

CREATE TABLE `user_cars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user_cars` */

/*Table structure for table `user_preferences` */

DROP TABLE IF EXISTS `user_preferences`;

CREATE TABLE `user_preferences` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `is_smoking_allowed` enum('yes','maybe','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'maybe',
  `is_pet_allowed` enum('yes','maybe','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'maybe',
  `is_music_allowed` enum('yes','maybe','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'maybe',
  `is_chitchat_allowed` enum('yes','maybe','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'maybe',
  PRIMARY KEY (`id`),
  KEY `user_preferences_user_id_foreign` (`user_id`),
  CONSTRAINT `user_preferences_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `user_preferences` */

insert  into `user_preferences`(`id`,`user_id`,`is_smoking_allowed`,`is_pet_allowed`,`is_music_allowed`,`is_chitchat_allowed`) values (1,1,'maybe','maybe','maybe','maybe');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'male',
  `dob` date NOT NULL COMMENT 'dob stands date of birth',
  `driving_license_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cnic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Pic short of picture',
  `pic_verified` enum('y','n') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'n',
  `is_phone_verified` enum('y','n') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'n',
  `is_email_verified` enum('y','n') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'n',
  `about` text COLLATE utf8mb4_unicode_ci,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` enum('y','n') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'n',
  `is_deleted` enum('y','n') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'n',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_login` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`first_name`,`last_name`,`email`,`password`,`contact_number`,`gender`,`dob`,`driving_license_number`,`cnic`,`pic`,`pic_verified`,`is_phone_verified`,`is_email_verified`,`about`,`provider`,`provider_id`,`remember_token`,`is_active`,`is_deleted`,`created_at`,`updated_at`,`last_login`) values (1,'imran','ali','imran@wtwm1.com','$2a$08$YJIl8SxJGRSNhn4CYxxXJOBaM6tWwZH4TrHZpxzmj/kcDTbN55Cdy','923334793625','male','2017-10-04','234234234234','23424234242',NULL,'n','n','n','short detail about yourself',NULL,NULL,'w5zm5bZRQoh92Dnf2rvKt3KhsEYJwxB6zcci6X6lNl6aPweQUp3CwImyN7PL','y','n','2018-03-08 21:44:01','2018-03-10 08:34:47','2018-03-10 10:27:08'),(5,'Imran','Ali','imran@wtwm.com','','','male','2002-03-02',NULL,'','https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/25591672_407264719691295_7957145461084841841_n.jpg?oh=9314a55bba62e63644d700bf5e385d0e&oe=5B461B7C','y','n','y',NULL,'facebook','102563046828132',NULL,'y','n','2018-03-10 15:29:58','2018-03-10 15:29:58','2018-03-10 15:29:58');

/*Table structure for table `users_authentication` */

DROP TABLE IF EXISTS `users_authentication`;

CREATE TABLE `users_authentication` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL DEFAULT '',
  `expired_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `users_authentication` */

/*Table structure for table `vehicle_model` */

DROP TABLE IF EXISTS `vehicle_model`;

CREATE TABLE `vehicle_model` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `make` varchar(50) DEFAULT NULL,
  `model` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `U_vehicle_model_make_model` (`make`,`model`),
  KEY `I_vehicle_model_make` (`make`),
  KEY `I_vehicle_model_model` (`model`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `vehicle_model` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
