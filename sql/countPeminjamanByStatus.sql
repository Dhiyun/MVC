CREATE FUNCTION peminjaman_by_status(status_param enum ('Proses', 'Selesai')) RETURNS INT
BEGIN
    DECLARE jumlah INT;
    SELECT COUNT(*) INTO jumlah FROM peminjaman WHERE status = status_param;
    RETURN jumlah;
END;