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

        <div class="col-md-8 col-md-offset-1">
          <form id="data_pasien" action="<?php echo base_url('pendaftaran/daftar');?>" method="post" >
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Isi Dengan Lengkap Form Dibawah ini</h3>
              </div>
              <div class="box-body">

                <!-- <div class="form-group">
                  <label>Alergi</label>
                  <input class="form-control" type="text" placeholder="Masukan Jenis Alergi" name="alergi">
                </div> -->

                <div class="form-group">
                  <label>No. RM</label>
                  <input class="form-control" type="text" value="<?php echo $rm; ?>" name="no_RM" readonly>
                </div>

                <div class="form-group">
                  <label>Dokter Pemeriksa</label>
                  <select class="form-control" name="pemeriksa" >
                    <?php foreach ($dokter as $pemeriksa) {?>
                      <option value="<?php echo $pemeriksa->nama; ?>"><?php echo $pemeriksa->nama; ?> <span> - <?php echo $pemeriksa->spesialis; ?> </span> </option>
                    <?php } ?>
                  </select>
                </div>

                <div class="form-group">
                  <label>No. BPJS</label>
                  <input class="form-control" type="text" placeholder="Masukan Nomor BPJS" name="no_BPJS">
                </div>

                <div class="form-group">
                  <label>No. KTP</label>
                  <input class="form-control" type="text" placeholder="Masukan No KTP" name="no_KTP">
                </div>

                <div class="form-group">
                  <label>No. Telp</label>
                  <input class="form-control" type="text" placeholder="Masukan No Telphone" name="hp">
                </div>

                <!-- <div class="form-group">
                  <label>Prolanis</label>
                  <input class="form-control" type="text" placeholder="Masukan Prolanis" name="prolanis">
                </div> -->

                <div class="form-group">
                  <label>Nama Pasien</label>
                  <input class="form-control" type="text" placeholder="Nama Pasien" name="nama_pasien">
                </div>

                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select class="form-control" name="jenis_kelamin" >
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Tanggal Lahir</label>

                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="datepicker" name="tanggal_lahir" autocomplete="off" >
                  </div>
                </div>

                <div class="form-inline">
                  <div class="row">
                    <!-- <div class="form-group col-xs-6">
                      <label>Umur</label> <br>
                      <input class="form-control" type="number" min="1" max="200" placeholder="Masukan Umur" name="umur" style="width:100%;">
                    </div> -->
                    <!-- <div class="form-group col-xs-12">
                      <label>Bin/Binti</label> <br>
                      <input class="form-control" type="text" placeholder="Bin/Binti" name="binti" style="width:100%;">
                    </div> -->
                  </div>
                </div>
                <br>

                <div class="form-inline">
                  <div class="row">
                    <div class="form-group col-xs-6">
                      <label>Pekerjaan</label> <br>
                      <input class="form-control" type="text" placeholder="Masukan Pekerjaan" name="pekerjaan" style="width:100%;">
                    </div>
                    <div class="form-group col-xs-6">
                      <label>Agama</label> <br>
                      <select class="form-control" style="width:100%;" name="agama" >
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Khonghucu</option>
                        <option>Katholik</option>
                        <option>Budha</option>
                        <option>Hindu</option>
                        <option>Ateis</option>
                      </select>
                    </div>
                  </div>
                </div>
                <br>

                <div class="form-inline">
                  <div class="row_s">
                    <div class="form-group">
                      <label>Alamat</label><br>
                      <br>
                      <div class="row_s">
                        <div class="col-xs-4">
                          <input class="form-control" type="text" placeholder="Masukan Dusun" name="dusun" style="width:100%;">
                        </div>
                        <div class="col-xs-2">
                          <input class="form-control" type="number" placeholder="RT" name="RT" style="width:100%;">
                        </div>
                        <div class="col-xs-2">
                          <input class="form-control" type="number" placeholder="RW" name="RW" style="width:100%;">
                        </div>
                        <div class="col-xs-4">
                          <input class="form-control" type="text" placeholder="Masukan Desa" name="desa" style="width:100%;">
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="col-xs-4">
                          <input class="form-control" type="text" placeholder="Masukan Kec." name="kecamatan" style="width:100%;">
                        </div>
                        <div class="col-xs-4">
                          <input class="form-control" type="text" placeholder="Masukan Kab." name="kabupaten" style="width:100%;">
                        </div>
                        <div class="col-xs-4">
                          <input class="form-control" type="text" placeholder="Masukan Prov." name="provinsi" style="width:100%;">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <br>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" style="width: 30%;">Submit</button>
                  <span>
                    <a href="#" id="print_v" class="btn btn-info"><i class="fa fa-print"></i> Print</a>
                  </span>

                </div>
                <br>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </form>
        </div>

        <div class="col-md-3">

          <div class="info-box" style="margin-bottom: 25px;">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Nomor Antrian</span>
              <span class="info-box-number"> <?php echo $antrian;?></span>
              <input form="data_pasien" type="text" name="nomor_antrian" value="<?php  echo $antrian;?>" style="display:none" >
            </div>
          </div>

          <!-- <div class="wrp">
            <img src="<?php echo base_url('assets/');?>dist/img/logo.jpg" style="width: 100%; height: auto;" alt="User Image">
          </div> -->
        </div>
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
