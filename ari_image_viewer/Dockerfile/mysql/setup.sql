CREATE DATABASE `image_db` DEFAULT CHARACTER SET `utf8` COLLATE `utf8_general_ci`;
CREATE TABLE `image_db`.`image_data` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `img_name` VARCHAR(100) NOT NULL,
    `img` MEDIUMBLOB NOT NULL
) ENGINE = InnoDB;
USE image_db;
INSERT INTO `image_data`(`img_name`, `img`) VALUES('sea.jpg',LOAD_FILE('/var/lib/mysql-files/sea.jpg'));
INSERT INTO `image_data`(`img_name`, `img`) VALUES('sunset.jpg',LOAD_FILE('/var/lib/mysql-files/sunset.jpg'));
