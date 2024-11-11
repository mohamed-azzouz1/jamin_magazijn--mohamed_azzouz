use jamin_mohamed_azzouz;

-- Verwijder de bestaande stored procedure
DROP PROCEDURE IF EXISTS spReadLeverancier;

DELIMITER //

CREATE PROCEDURE spReadLeverancier()
BEGIN
    SELECT 
        ,PROD.Id                    AS      ProductId
        ,PROD.Naam
        
        ,DatumLevering
        ,Aantal
        ,DatumEerstVolgendeLevering
        	


END //
DELIMITER ;