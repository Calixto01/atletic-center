ALTER TABLE `employees` ADD `email` VARCHAR(255) NULL AFTER `pass`, ADD `phone` VARCHAR(255) NOT NULL AFTER `email`;

UPDATE `employees` SET `email` = 'admin@admin.com', `phone` = '3141234567' WHERE `employees`.`idEmployees` = 1



