ALTER TABLE `personals` ADD `bio_esp` TEXT NOT NULL AFTER `bio`;

ALTER TABLE `quotes` ADD `text_esp` TEXT NOT NULL AFTER `text`;

ALTER TABLE `work` ADD `orden` INT NOT NULL AFTER `name`;