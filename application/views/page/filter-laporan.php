<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header" style="margin-bottom: 20px;">
    <h1 class="text-center">
      LAPORAN PASIEN
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-offset-2 text-center col-md-8 laporan-pasien" style="margin-bottom: 20px;">
        <h4>Cek Kunjungan Pasien</h4>
        <form action="<?php echo base_url('pendaftaran/laporan_pasien'); ?>" method="post">
          <div class="form-group">
            <label>Dari Tanggal : </label>
            <input class="form-control" type="date" name="tanggal1">
          </div>
          <div class="form-group">
            <label>Sampai Tanggal : </label>
            <input class="form-control" type="date" name="tanggal2">
          </div>
          <div class="submit">
            <button type="submit" class="btn btn-primary">Cek</button>
          </div>
        </form>
      </div>

      <div class="col-md-offset-2 text-center col-md-8 laporan-pasien">
        <h4>Cek Medis Pasien</h4>
        <form action="<?php echo base_url('pendaftaran/laporan_medis'); ?>" method="post">
          <div class="form-group">
            <label>Dari Tanggal : </label>
            <input class="form-control" type="date" name="tgl1">
          </div>
          <div class="form-group">
            <label>Sampai Tanggal : </label>
            <input class="form-control" type="date" name="tgl2">
          </div>
          <div class="submit">
            <button type="submit" class="btn btn-primary">Cek</button>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>
