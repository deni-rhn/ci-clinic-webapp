<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header" style="margin-bottom: 20px;">
    <h1 class="text-center">
      Data Laporan Medis
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Medis dan Administrasi Pasien</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
              <table class="table table-striped">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Tanggal</th>
                          <th>Pasien</th>
                          <th>Dokter</th>
                          <th>Subyektif Objectif</th>
                          <th>Assesment</th>
                          <th>Pemeriksaan Penunjang</th>
                          <th>Planning</th>
                          <th>Obat</th>
                          <th>Biaya</th>
                      </tr>
                  </thead>
                  <tbody>
                  <?php $i = 1;?>
                  <?php foreach ($medis as $data) { ?>
                      <tr>
                          <td><?php echo $i;?></td>
                          <td><?php echo $data['tanggal'] ?></td>
                          <td><?php echo $data['nama_pasien'] ?></td>
                          <td><?php echo $data['pemeriksa'] ?></td>
                          <td><?php echo $data['subyektif_objectif'] ?></td>
                          <td><?php echo $data['assesment'] ?></td>
                          <td><?php echo $data['Pemeriksaan_penunjang'] ?></td>
                          <td><?php echo $data['planning'] ?></td>
                          <td><?php echo $data['kode_obat'] ?></td>
                          <td><?php echo $data['total'] ?></td>
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
