DELIMITER //
CREATE TRIGGER before_delete_ruangan
BEFORE DELETE ON ruangan
FOR EACH ROW
BEGIN
    DECLARE jumlah_peminjaman INT;

    SELECT COUNT(*) INTO jumlah_peminjaman
    FROM peminjaman
    WHERE kode_ruangan = OLD.kode;

    IF jumlah_peminjaman > 0 THEN
        SIGNAL SQLSTATE '45000'
    END IF;
END //
DELIMITER ;
