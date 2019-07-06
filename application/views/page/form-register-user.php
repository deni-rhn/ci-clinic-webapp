  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="margin-bottom: 20px;">
      <h1 class="text-center">
        Form Pendaftaran User
      </h1>
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- /.col (left) -->

        <div class="col-md-8 col-md-offset-1">
          <form id="data_pasien" action="<?php echo base_url('auth/daftar');?>" method="post" >
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Isi Dengan Lengkap Form Dibawah ini</h3>
              </div>
              <div class="box-body">

                <div class="form-group">
                  <label>Username</label>
                  <input class="form-control" type="text" placeholder="Masukan Username" name="username">
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input class="form-control" type="email" placeholder="Masukan Email" name="email">
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input class="form-control" type="password" placeholder="Masukan Password" name="password">
                </div>

                <div class="form-group">
                  <label>Hak Akses</label>
                  <select class="form-control" name="role" >
                    <option value='1'>Admin</option>
                    <option value='2'>Dokter</option>
                  </select>
                </div>

                <br>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" style="width: 30%;">Submit</button>
                </div>
                <br>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </form>
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