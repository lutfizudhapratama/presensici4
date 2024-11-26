<?= $this->extend('admin/layout.php') ?>

<?= $this->section('content') ?>

<style>
    .table th {
    background-color:#d6d8db; /* Warna gelap */
}
</style>

<table class="table" id="datatables">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Keterangan</th>
            <th>Deskripsi</th>
            <th>File</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <?php if ($ketidakhadiran) : ?>
    <tbody>
        <?php $no = 1; foreach ($ketidakhadiran as $ketidakhadiran) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= esc($ketidakhadiran['tanggal']) ?></td>
                <td><?= esc($ketidakhadiran['keterangan']) ?></td>
                <td><?= esc($ketidakhadiran['deskripsi']) ?></td>
                <td>
                    <a class="badge bg-success mb-2" href="<?= base_url('file_ketidakhadiran/' . $ketidakhadiran['file']) ?>">Download</a>
                </td>
                <td>
                    <?php if ($ketidakhadiran['status'] == 'Pending') : ?>
                        <span class="text-danger"><?= esc($ketidakhadiran['status']) ?></span>
                    <?php else : ?>
                        <span class="text-success"><?= esc($ketidakhadiran['status']) ?></span>
                    <?php endif; ?>
                </td>
                <td>
                    <a class="badge bg-primary mb-2" href="<?= base_url('admin/approved_ketidakhadiran/' . $ketidakhadiran['id']) ?>">Approved</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
    <?php else : ?>
        <tbody>
            <tr>
                <td colspan="7">Data masih kosong</td>
            </tr>
        </tbody>
    <?php endif; ?>
</table>

<?= $this->endSection() ?>