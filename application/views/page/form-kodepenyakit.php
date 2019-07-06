  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="margin-bottom: 20px;">
      <h1 class="text-center">
        Form Pendaftaran Pasien
      </h1>
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- /.col (left) -->

        <div class="col-md-offset-1 col-md-8">
        <form  action="<?php echo base_url('kodeobat/kirimdata');?>" method="post" >
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Isi Dengan Lengkap Form Dibawah ini</h3>
              </div>
              <div class="box-body">

                <div class="form-group">
                  <label>Code</label>
                  <input class="form-control" type="text" placeholder="Masukan Code Penyakit" name="kode">
                </div>

                <div class="form-group">
                  <label>Nama Obat</label>
                  <input class="form-control" type="text" placeholder="Masukan Nama Obat" name="nama_obat">
                </div>

                <div class="form-group">
                  <label>Harga Obat</label>
                  <input class="form-control" type="text" placeholder="Masukan Nama Obat" name="harga" id="rupiah">
                </div>

                <div class="form-group">
                  <label>Stok Obat</label>
                  <input class="form-control" type="text" placeholder="Masukan Stok Obat" name="stok" id="stok">
                </div>

                <div class="form-group">
                  <label>Status Persediaan</label>
                  <select class="form-control" name="status_persediaan" id="status_persediaan">
                    <option value="TERSEDIA">TERSEDIA</option>
                    <option value="KOSONG">KOSONG</option>
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

          <!-- <div class="info-box" style="margin-bottom: 25px;">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Nomor Antrian</span>
              <span class="info-box-number"> <?php echo $antrian;?></span>
              <input form="data_pasien" type="text" name="nomor_antrian" value="<?php  echo $antrian;?>" style="display:none" >
            </div>
          </div> -->

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
