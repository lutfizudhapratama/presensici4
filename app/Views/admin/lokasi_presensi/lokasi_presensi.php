<?= $this->extend('admin/layout.php') ?>

<?= $this->section('content') ?>
    
<a href="<?= base_url('admin/lokasi_presensi/create') ?>" class="btn btn-primary"><svg width="40" height="40" viewBox="0 0 24 24" fill="#343C54" xmlns="http://www.w3.org/2000/svg">
<path d="M11.2502 6C11.2502 5.58579 11.586 5.25 12.0002 5.25C12.4145 5.25 12.7502 5.58579 12.7502 6V11.2502H18.0007C18.4149 11.2502 18.7507 11.586 18.7507 12.0002C18.7507 12.4145 18.4149 12.7502 18.0007 12.7502H12.7502V18.0007C12.7502 18.4149 12.4145 18.7507 12.0002 18.7507C11.586 18.7507 11.2502 18.4149 11.2502 18.0007V12.7502H6C5.58579 12.7502 5.25 12.4145 5.25 12.0002C5.25 11.586 5.58579 11.2502 6 11.2502H11.2502V6Z" fill="#343C54"/>
</svg>
Tambah Data</a>

<table class="table table-striped" id="datatables">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Lokasi</th>
            <th>Alamat Lokasi</th>
            <th>Tipe Lokasi</th>
            <th>Aksi</th>
</tr>
</thead>
<tbody>
<?php $no = 1; foreach($lokasi_presensi as $lok) : ?>
   
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $lok['nama_lokasi'] ?></td>
            <td><?= $lok['alamat_lokasi'] ?></td>
            <td><?= $lok['tipe_lokasi'] ?></td>
            <td>
            <a href="<?= base_url('admin/lokasi_presensi/detail/'.$lok['id'])?>"
            class="badge bg-primary">Detail</a>

                <a href="<?= base_url('admin/lokasi_presensi/edit/'.$lok['id'])?>"
                 class="badge bg-primary">Edit</a>

                 <a href="<?= base_url('admin/lokasi_presensi/delete/'.$lok['id'])?>"
                 class="badge bg-danger tombol-hapus">Delete</a>
            </td>
        </tr>
    
    <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection() ?>