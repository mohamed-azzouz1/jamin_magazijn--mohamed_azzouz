use jamin_mohamed_azzouz;

DROP PROCEDURE IF EXISTS spReadJaminById;

DELIMITER //

CREATE PROCEDURE spReadJaminById(
    IN productNaam VARCHAR(255)
)
BEGIN

    SELECT 
    l.naam AS LeverancierNaam
    ,l.ContactPersoon
    ,l.LeverancierNummer
    ,l.Mobiel 
    ,ppl.DatumLevering
    ,ppl.Aantal
    ,ppl.DatumEerstVolgendeLevering
FROM 
    Product p
JOIN 
    ProductPerLeverancier ppl ON p.Id = ppl.ProductId
JOIN 
    Leverancier l ON ppl.LeverancierId = l.Id
WHERE 
    p.naam = productNaam
ORDER BY 
    ppl.DatumLevering ASC;

END //

DELIMITER ;

