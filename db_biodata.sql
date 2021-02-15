# Host: localhost  (Version 5.5.5-10.4.17-MariaDB)
# Date: 2021-02-15 11:08:48
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "tb_job"
#

DROP TABLE IF EXISTS `tb_job`;
CREATE TABLE `tb_job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job` varchar(100) DEFAULT NULL,
  `qualification` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

#
# Data for table "tb_job"
#

INSERT INTO `tb_job` VALUES (1,'UI & UX Designer','- memahami Design System\r\n- menguasai software Design seperti Figma, Illustrator dan Adobe XD'),(2,'Software Engineer','- memahami bahasa pemrogramman PHP, Laravel, Jquery, NodeJs\r\n- memahami flow sistem');

#
# Structure for table "tb_user"
#

DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` enum('admin','user') DEFAULT NULL,
  `time` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

#
# Data for table "tb_user"
#

INSERT INTO `tb_user` VALUES (1,'hendrawan@adminapk.com','hendrawan@adminapk.com','$2y$10$ZdDi6zejX72Q2D2ONIXvLenX.XZtFIWtJHAzdztwLM.ft/4hYmieC','admin','2021-02-06'),(2,'bams','bams@gmail.com','$2y$10$9cd9Kn.oowmzjKB1ewMZtuCM91EL0yh6HkiSOUhl0ARyqhUjMjfkG','user','2021-02-06'),(4,'Ahmad','ahmad@yahoo.com','$2y$10$4TDfSwxbilokXwqxFvYLCO9AvFt2mQxvzNsyGgIY01iaWCfyZzDYS','user','2021-02-07'),(5,'Kamsya','kamsya@drak.com','$2y$10$GOZp4jeDRc/SDfGnQrRsrO4.VBjtz59uA68nEgXJq0nHyHdlVeZXG','user','2021-02-07'),(6,'Maulana','maulana@mail.com','$2y$10$1kIrQTleSkbaod48ZjBKPu0hgnUC3xByXo0ucnoKDNh1xEuFYGeva','user','2021-02-07'),(7,'manusia biasa','manusia@manusia.com','$2y$10$F8W5GwxiPMu.P3E1uIm6lOQAmUccZy2DeWgxqKRkp9qA0vi6HosbK','user','2021-02-09'),(8,'berta','berta@mail.com','$2y$10$Rh1uSwuJFSZoTdnaZPmk9e0nTBUr5eJWRpFtSyVK6MfVDAC6jkdna','user','2021-02-09'),(9,'human','human@mail.com','$2y$10$pYKXJ2lwlzdql6DMNYjpr.CsH1j8LwVn5MyvCUaRQZrG/NCP4iigO','user','2021-02-09'),(10,'asdasdasd','asdasds@mail.com','$2y$10$sd5.56FM.wYIfHDBCAW32uvigU/ihpwM4ZM3Q5USk.nEqnEtl.Fqe','user','2021-02-09');

#
# Structure for table "tb_training_experience"
#

DROP TABLE IF EXISTS `tb_training_experience`;
CREATE TABLE `tb_training_experience` (
  `id_training` int(11) NOT NULL AUTO_INCREMENT,
  `agencyName` varchar(100) DEFAULT NULL,
  `yearsTraining` char(4) DEFAULT NULL,
  `descTraining` text DEFAULT NULL,
  `certificate` varchar(100) DEFAULT NULL,
  `agencyName2` varchar(100) DEFAULT NULL,
  `yearsTraining2` char(4) DEFAULT NULL,
  `descTraining2` text DEFAULT NULL,
  `certificate2` varchar(100) DEFAULT NULL,
  `id_regist` int(11) DEFAULT NULL,
  `timeAdd` date DEFAULT NULL,
  PRIMARY KEY (`id_training`),
  KEY `regist id` (`id_regist`),
  CONSTRAINT `regist id` FOREIGN KEY (`id_regist`) REFERENCES `tb_user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

#
# Data for table "tb_training_experience"
#

INSERT INTO `tb_training_experience` VALUES (1,'Dicoding','2018','3D Illustration','','','','','',2,'2021-02-06'),(12,'Dicoding','2019','Backend Web developmet','','','','','',4,'2021-02-09'),(15,'Dicoding','2018','Web development','','','','','',6,'2021-02-09'),(16,'Math International Academy','2019','Math And Statistics','','','','','',5,'2021-02-09'),(23,'Dicoding','2019','Web Development','','','','','',7,'2021-02-11');

#
# Structure for table "tb_personal_bio"
#

DROP TABLE IF EXISTS `tb_personal_bio`;
CREATE TABLE `tb_personal_bio` (
  `id_person` int(11) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(80) DEFAULT NULL,
  `selfDesc` text DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` char(13) DEFAULT NULL,
  `skills` text DEFAULT NULL,
  `personalFoto` varchar(100) DEFAULT NULL,
  `id_regist` int(11) DEFAULT NULL,
  `timeAdd` date DEFAULT NULL,
  `appOptions` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_person`),
  KEY `id regist` (`id_regist`),
  CONSTRAINT `id regist` FOREIGN KEY (`id_regist`) REFERENCES `tb_user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

#
# Data for table "tb_personal_bio"
#

INSERT INTO `tb_personal_bio` VALUES (1,'Bams Muhammad','iam a super human','Male','1998-08-09','bams@gmail.com','08765432345','Illustrator | Expert, Photoshop | Expert','1613041102_logo_user.png',2,'2021-02-06','Software Engineer'),(12,'Ahmad Maulana','manusia biasa tapi kuat','Laki - Laki','1999-09-09','ahmad@yahoo.com','087653345678','PHP | Expert, Laravel | Expert, SQL | Expert','',4,'2021-02-09','Software Engineer'),(15,'Maulana','manusia biasa','Laki - Laki','2002-09-09','maulana@mail.com','08765434567','no skills','',6,'2021-02-09','Software Engineer'),(16,'Kamsya','Manusia penyuka matematika','Laki - Laki','1998-08-09','kamsya@drak.com','087654332234','Matematika | Expert, Biology | Expert','',5,'2021-02-09','Software Engineer'),(23,'Manusia biasa','manusia biasa tapi kuat','Perempuan','1998-09-09','manusia@manusia.com','08764567898','tidur pulas','1613276142_resume.png',7,'2021-02-11','Software Engineer');

#
# Structure for table "tb_education"
#

DROP TABLE IF EXISTS `tb_education`;
CREATE TABLE `tb_education` (
  `id_edu` int(11) NOT NULL AUTO_INCREMENT,
  `nameUniv` varchar(100) DEFAULT NULL,
  `degree` varchar(100) DEFAULT NULL,
  `yearEdu` varchar(20) DEFAULT NULL,
  `highSchool` varchar(100) DEFAULT NULL,
  `yearsEduHigh` varchar(20) DEFAULT NULL,
  `id_regist` int(11) DEFAULT NULL,
  `timeAdd` date DEFAULT NULL,
  PRIMARY KEY (`id_edu`),
  KEY `id` (`id_regist`),
  CONSTRAINT `id` FOREIGN KEY (`id_regist`) REFERENCES `tb_user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

#
# Data for table "tb_education"
#

INSERT INTO `tb_education` VALUES (1,'University of Wuhan','Computer Sience','2010 - 2014','Jakarta International High School','2007 - 2010',2,'2021-02-06'),(12,'University of london','Computer science','2010 - 2014','SMA N 0 JKT','2007 - 2010',4,'2021-02-09'),(15,'University of hongkong','DKV','2020 - 2024','JIS','2017 - 2020',6,'2021-02-09'),(16,'University of india','Math','2010 - 2014','SMA N 00 Bandung','2007 - 2010',5,'2021-02-09'),(23,'University of punbambu','Computer science','2010 - 2014','SMA N 987 Jakarta tenggara','2007 - 2010',7,'2021-02-11');

#
# Structure for table "tb_work_experience"
#

DROP TABLE IF EXISTS `tb_work_experience`;
CREATE TABLE `tb_work_experience` (
  `id_work` int(11) NOT NULL AUTO_INCREMENT,
  `companyName` varchar(100) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `yearsWork` varchar(20) DEFAULT NULL,
  `descWork` text DEFAULT NULL,
  `companyName2` varchar(100) DEFAULT NULL,
  `position2` varchar(100) DEFAULT NULL,
  `yearsWork2` varchar(20) DEFAULT NULL,
  `descWork2` text DEFAULT NULL,
  `id_regist` int(255) DEFAULT NULL,
  `timeAdd` date DEFAULT NULL,
  PRIMARY KEY (`id_work`),
  KEY `regist` (`id_regist`),
  CONSTRAINT `regist` FOREIGN KEY (`id_regist`) REFERENCES `tb_user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

#
# Data for table "tb_work_experience"
#

INSERT INTO `tb_work_experience` VALUES (1,'Google','Illustrator','2014 - 2016','Create flat illustration','','','','',2,'2021-02-06'),(12,'PT. Kemajuan info','backend developer','2014 - 2019','Create security backend','','','','',4,'2021-02-09'),(15,'PT. Karya bangsa','Web Developer','2020','create web designer','','','','',6,'2021-02-09'),(16,'Sekolah tinggi Ilmu Ekonomi','Dosen Matematika Disktrit','2014 - 2019','mengajar','','','','',5,'2021-02-09'),(23,'PT. Kemajuan indonesia','Web planner','2014 - 2019','Create agile','','','','',7,'2021-02-11');
