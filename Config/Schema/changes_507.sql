ALTER TABLE `personals`
ADD COLUMN `phone`  varchar(255) NOT NULL AFTER `observations`,
ADD COLUMN `email_personal`  varchar(255) NOT NULL AFTER `phone`,
ADD COLUMN `email_company`  varchar(255) NOT NULL AFTER `email_personal`,
ADD COLUMN `rif`  varchar(255) NOT NULL AFTER `email_company`;

ALTER TABLE `clients`
ADD COLUMN `manager`  varchar(255) NOT NULL AFTER `observation`;

ALTER TABLE `projects`
ADD COLUMN `currency`  varchar(255) NOT NULL AFTER `client_id`;