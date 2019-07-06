<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="margin-bottom: 20px;">
      <h1 class="text-center">
        Form Rujukan Pasien
      </h1>
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- /.col (left) -->

        <div class="col-md-8 col-md-offset-1">
            <button class="btn btn-primary" onclick="rujukanAdd()">Tambah Data</button>
            <div class="box">
                <div class="box-body">
                    <table id="tblRujukan" class="table table-bordered table-striped" style="width:100%;" >

                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-3">
          <div class="wrp">
            <img src="<?php echo base_url('assets/');?>dist/img/logo.jpg" style="width: 100%; height: auto;" alt="User Image">
          </div>
        </div>
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>