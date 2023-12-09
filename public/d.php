<div class="table-responsive small pt-3 px-3">
    <?php foreach ($data['jdwl'] as $row) : ?>
        <div class="row">
            <div class="col-md-12 mb-3">
                <h5>K. Ruangan: <?= $row['kode_ruang'] ?></h5>
                <p>Nama Ruangan: <?= $row['nama_ruangan'] ?></p>
            </div>
        </div>

        <table class="table rounded" style="border-radius: 15px;">
            <thead>
                <tr>
                    <th scope="col" style="background-color: #363062; color:#fff; border-radius">K. Ruangan</th>
                    <th scope="col" style="background-color: #363062; color:#fff;">Senin</th>
                    <th scope="col" style="background-color: #363062; color:#fff;">Selasa</th>
                    <th scope="col" style="background-color: #363062; color:#fff;">Rabu</th>
                    <th scope="col" style="background-color: #363062; color:#fff;">Kamis</th>
                    <th scope="col" style="background-color: #363062; color:#fff;">Jumat</th>
                    <th scope="col" style="background-color: #363062; color:#fff;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $row['kode_ruang'] ?></td>
                    <td><?= isset($row['Senin']) ? str_replace(',', ',<br><br><br>', $row['Senin']) : '-' ?></td>
                    <td><?= isset($row['Selasa']) ? str_replace(',', ',<br><br><br>', $row['Selasa']) : '-' ?></td>
                    <td><?= isset($row['Rabu']) ? str_replace(',', ',<br><br><br>', $row['Rabu']) : '-' ?></td>
                    <td><?= isset($row['Kamis']) ? str_replace(',', ',<br><br><br>', $row['Kamis']) : '-' ?></td>
                    <td><?= isset($row['Jumat']) ? str_replace(',', ',<br><br><br>', $row['Jumat']) : '-' ?></td>
                    <td>
                        <button type="button" class="btn btn-read btn-xs" data-bs-toggle="modal"
                            data-bs-target="#readModal<?= $row['id'] ?>">
                            <img src="../assets/icon/ic-read.png" alt="" style="width: 16px; margin-bottom: 2px;"> Read
                        </button>
                        <button type="button" class="btn btn-edit btn-xs" data-bs-toggle="modal"
                            data-bs-target="#editModal<?= $row['id'] ?>">
                            <img src="../assets/icon/ic-edit-hitam.png" alt="" style="width: 16px; margin-bottom: 2px;"> Edit
                        </button>
                        <a href="<?= JADWALURL ?>/hapus/<?= $row['id'] ?>"
                            onclick="javascript:return confirm('Hapus Data Ruang ?');"
                            class="btn btn-delete btn-xs"><img src=".assets/icon/ic-delete.png" alt="" srcset=""
                                style="width: 16px; width:16px; margin-bottom: 3px;"> Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    <?php endforeach; ?>
</div>
