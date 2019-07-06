<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header" style="margin-bottom: 20px;">
    <h1 class="text-center">
      Data Pengguna
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
            <!-- <h3 class="box-title">Pendapatan Anda</h3> -->
          </div>
          <!-- /.box-header -->
          <div class="box-body">
              <table class="table table-striped">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Nama User</th>
                          <th>Akses</th>
                      </tr>
                  </thead>
                  <tbody>
                  <?php $i = 1;?>
                  <?php foreach ($user as $usr) {
                          if($usr->role_id === '1'){
                            $xx = 'Admin';
                          }elseif ($usr->role_id === '2') {
                            $xx = 'Dokter';
                          }elseif ($usr->role_id === '3') {
                            $xx = 'Kasir';
                          } ?>
                      <tr>
                          <td><?php echo $i;?></td>
                          <td><?php echo $usr->username ?></td>
                          <td><?php echo $xx ?></td>
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
