DELIMITER $$

USE `eliano`$$

DROP PROCEDURE IF EXISTS `getHighlights`$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getHighlights`()
BEGIN
	SELECT * FROM evidenzas 
	INNER JOIN immobiles ON immobiles.id = evidenzas.`immobile_id`
	LEFT OUTER JOIN images ON images.`immobile_id` = immobiles.`id`
	LEFT OUTER JOIN features ON features.id = immobiles.`id`
	INNER JOIN details ON details.id = immobiles.detail_id
	GROUP BY immobiles.id
	ORDER BY evidenzas.id DESC;
    END$$

DELIMITER ;

DELIMITER $$

USE `eliano`$$

DROP PROCEDURE IF EXISTS `getOffers`$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getOffers`()
BEGIN
	SELECT * FROM immobiles 
	INNER JOIN offers ON offers.immobile_id = immobiles.id
	INNER JOIN details ON details.`id` = immobiles.`detail_id`;
    END$$

DELIMITER ;

DELIMITER $$

USE `eliano`$$

DROP PROCEDURE IF EXISTS `getAvailCities`$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getAvailCities`()
BEGIN
	SELECT cities.id, cities.`name` FROM immobiles 
	INNER JOIN cities ON cities.id = immobiles.`city_id`
	GROUP BY cities.id, cities.name;
    END$$

DELIMITER ;