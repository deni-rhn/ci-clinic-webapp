  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="margin-bottom: 20px;">
      <h1 class="text-center">
        Pendapatan
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
                            <th>Nama Pasien</th>
                            <th>Pembayaran</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1;?>
                    <?php foreach($pendapatan['data'] as $pend ){?>
                        <tr>
                            <td><?php echo $i;?></td>
                            <td><?php echo $pend->Nama_pasien;?></td>
                            <td><?php echo $pend->total;?></td>
                        </tr>
                    <?php $i += 1; } ?>
                    </tbody>
                </table>
                <hr>
                <div class="semua">
                    <div class="col-md-12">
                        <h5><b>Total : <?php echo $pendapatan['total'];?></b></h5>
                    </div>
                </div>
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

