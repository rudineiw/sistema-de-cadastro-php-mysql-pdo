CREATE TABLE `ultimatephp`.`users` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `status` CHAR(1) NOT NULL,
    `birthdate` DATE NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;