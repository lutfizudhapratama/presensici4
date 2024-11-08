<?= $this->extend('pegawai/layout.php') ?>

<?= $this->section('content') ?>




<style>
  .parent-clock {
 display: grid;
 grid-template-columns: auto auto auto auto auto;
 font-size: 35px;
 font-weight: bold;
 justify-content: center;
  }

</style>





<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-header">Presensi Masuk</div>
      <div class="card-body">
        <!-- Tabel untuk Menampilkan Tanggal dan Jam Masuk -->
        <div class="text-center mb-4">
          <!-- Tanggal Sekarang -->
          <p class="mb-1" style="font-size: 1.2rem; font-weight: bold;">
            <?= date('d F Y') ?>
          </p>
          <!-- Jam Masuk -->
          <div class="parent-clock" style="font-size: 2rem; font-weight: bold;">
            <span id="jam-masuk"></span>&nbsp;:&nbsp;<span id="menit-masuk"></span>&nbsp;:&nbsp;<span id="detik-masuk"></span>
          </div>
        </div>
        <!-- Tombol Masuk -->
        <form action="" class="d-grid">
          <button type="submit" class="btn btn-primary btn-lg">Masuk</button>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-4">
  <div class="card">
      <div class="card-header">Presensi keluar</div>
      <div class="card-body">
        <!-- Tabel untuk Menampilkan Tanggal dan Jam Masuk -->
        <div class="text-center mb-4">
          <!-- Tanggal Sekarang -->
          <p class="mb-1" style="font-size: 1.2rem; font-weight: bold;">
            <?= date('d F Y') ?>
          </p>
          <!-- Jam Masuk -->
          <div class="parent-clock" style="font-size: 2rem; font-weight: bold;">
            <span id="jam-keluar"></span>&nbsp;:&nbsp;<span id="menit-keluar"></span>&nbsp;:&nbsp;<span id="detik-keluar"></span>
          </div>
        </div>
        <!-- Tombol Masuk -->
        <form action="" class="d-grid">
          <button type="submit" class="btn btn-danger btn-lg">Keluar</button>
        </form>
      </div>
    </div>

<script>
window.setInterval("waktuMasuk()", 1000);

function waktuMasuk(){
  const waktu = new Date();
  document.getElementById("jam-masuk").innerHTML = formatWaktu(waktu.getHours());
  document.getElementById("menit-masuk").innerHTML = formatWaktu(waktu.getMinutes());
  document.getElementById("detik-masuk").innerHTML = formatWaktu(waktu.getSeconds());
}

window.setInterval("waktuKeluar()", 1000);

function waktuKeluar(){
  const waktu = new Date();
  document.getElementById("jam-keluar").innerHTML = formatWaktu(waktu.getHours());
  document.getElementById("menit-keluar").innerHTML = formatWaktu(waktu.getMinutes());
  document.getElementById("detik-keluar").innerHTML = formatWaktu(waktu.getSeconds());
}

function formatWaktu(waktu){
  if(waktu < 10) {
    return "0" + waktu;
  } else {
    return waktu;
  }
}
</script>

<?= $this->endSection() ?>
