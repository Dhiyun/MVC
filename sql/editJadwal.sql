DELIMITER //
CREATE PROCEDURE editJadwal(
    IN kode_ruang_param CHAR(5),
    IN nama_kelas_param VARCHAR(10),
    IN prodi_param VARCHAR(3),
    IN nama_dosen_param VARCHAR(50),
    IN hari_param VARCHAR(7),
    IN waktu_mulai_param TIME,
    IN waktu_selesai_param TIME,
    IN matkul_param VARCHAR(59),
    IN id_param INT
)
BEGIN
    DECLARE id_kelas_result INT;
    DECLARE kode_dosen_result VARCHAR(3);

    SELECT id INTO id_kelas_result FROM kelas WHERE nama_kelas = nama_kelas_param AND prodi = prodi_param;

    SELECT kode INTO kode_dosen_result FROM dosen WHERE nama_dosen = nama_dosen_param;

    UPDATE jadwal SET
        kode_ruang = kode_ruang_param,
        id_kelas = id_kelas_result,
        kode_dosen = kode_dosen_result,
        hari = hari_param,
        waktu_mulai = waktu_mulai_param,
        waktu_selesai = waktu_selesai_param,
        matkul = matkul_param
    WHERE id = id_param;
END //
DELIMITER ;
