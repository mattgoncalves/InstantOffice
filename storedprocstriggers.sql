/*TRIGGERS*/

/*a)*/
drop trigger if exists datasobrepostas;

delimiter //
CREATE TRIGGER datasobrepostas BEFORE INSERT ON oferta
FOR EACH ROW 
BEGIN

    IF EXISTS(
        SELECT data_inicio, data_fim FROM oferta WHERE
          oferta.data_inicio <= NEW.data_fim AND oferta.data_fim >= NEW.data_inicio) THEN
        call errodedatas;
     
    END IF;
END //
delimiter ;

/*b)*/
DROP TRIGGER if exists data_de_pagamento;

delimiter //
CREATE TRIGGER data_de_pagamento before INSERT ON paga
FOR EACH ROW 
BEGIN
    IF EXISTS (
    SELECT time_stamp FROM estado e WHERE
	e.time_stamp > NEW.data) THEN
        call erropdata;      		
    END IF;
END //
delimiter ;


