<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header" style="margin-bottom: 20px;">
    <h1 class="text-center">
      Data Laporan Kunjungan
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Kunjungan Pasien</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
              <table class="table table-striped">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>No. RM</th>
                          <th>Nama</th>
                          <th>Kelamin</th>
                          <th>Agama</th>
                          <th>No. BPJS</th>
                          <th>No. KTP</th>
                          <th>No. HP</th>
                          <th>Umur</th>
                          <th>Alamat</th>
                          <th>Waktu Kunjung</th>
                          <th>Pemeriksa</th>
                      </tr>
                  </thead>
                  <tbody>
                  <?php $i = 1;?>
                  <?php foreach ($filter as $pasien) { ?>
                      <tr>
                          <td><?php echo $i;?></td>
                          <td><?php echo $pasien["No_Rm"] ?></td>
                          <td><?php echo $pasien["Nama_pasien"]; ?></td>
                          <td><?php echo $pasien["Jenis_kelamin"]; ?></td>
                          <td><?php echo $pasien["Agama"]; ?></td>
                          <td><?php echo $pasien["No_BPJS"]; ?></td>
                          <td><?php echo $pasien["No_KTP"]; ?></td>
                          <td><?php echo $pasien["No_HP"]; ?></td>
                          <td><?php echo $pasien["umur"]; ?></td>
                          <td><?php echo $pasien["Dusun"];?>
                              <span>RT. <?php echo $pasien["Rt"];?> </span>
                              <span>RW. <?php echo $pasien["Rw"];?>, </span>
                              <span><?php echo $pasien["Desa"];?>, </span>
                              <span><?php echo $pasien["Kecamatan"];?>, </span>
                              <span><?php echo $pasien["Kabupaten"];?></span>
                          </td>
                          <td><?php echo $pasien["waktu_daftar"]; ?></td>
                          <td><?php echo $pasien["pemeriksa"]; ?></td>
                      </tr>
                  <?php $i += 1; } ?>
                  </tbody>
              </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
