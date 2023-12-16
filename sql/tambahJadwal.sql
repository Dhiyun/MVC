create
    definer = root@localhost procedure tambahJadwal(IN p_kode_ruang char(5), IN p_nama_kelas varchar(50),
                                                    IN p_prodi enum ('TI', 'SIB', 'PLS'), IN p_nama_dosen varchar(50),
                                                    IN p_hari varchar(7), IN p_waktu_mulai time,
                                                    IN p_waktu_selesai time, IN p_matkul varchar(59))
BEGIN
    DECLARE v_id_kelas INT;
    DECLARE v_kode_dosen VARCHAR(3);

    -- Dapatkan ID kelas berdasarkan nama_kelas dan prodi
    SELECT id INTO v_id_kelas FROM kelas WHERE nama_kelas = p_nama_kelas AND prodi = p_prodi;

    -- Dapatkan kode dosen berdasarkan nama_dosen
    SELECT kode INTO v_kode_dosen FROM dosen WHERE nama_dosen = p_nama_dosen;

    -- Tambahkan jadwal baru
    INSERT INTO jadwal (kode_ruang, id_kelas, kode_dosen, hari, waktu_mulai, waktu_selesai, matkul)
    VALUES (p_kode_ruang, v_id_kelas, v_kode_dosen, p_hari, p_waktu_mulai, p_waktu_selesai, p_matkul);
END;

