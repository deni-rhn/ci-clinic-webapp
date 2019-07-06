<?php

$akses = $this->session->userdata('role_id');

?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/');?>dist/img/logo.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>ALMUBAROK</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Terpercaya Di Semanu GK</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
      <?php if ($akses == 1) { ?>
        <li class="header">MENU UTAMA</li>

        <li><a href="<?php echo base_url('pendaftaran/pasien');?>"><i class="fa fa-circle-o"></i> Pendaftaran Pasien Baru</a></li>

        <?php } ?>

        <?php if ($akses != 3) { ?>
        <li><a href="<?php echo base_url('rujukan/pasien');?>"><i class="fa fa-circle-o"></i> Data Rujukan</a></li>
        <?php } ?>

        <?php if ($akses != 3) { ?>
        <li><a href="<?php echo base_url('datapasien/terdaftar');?>"><i class="fa fa-circle-o"></i> Data Pasien Terdaftar</a></li>
        <?php } ?>
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Daftar Poli</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../tables/data-poli.html"><i class="fa fa-circle-o"></i> Data Poli</a></li>
          </ul>
        </li> -->
      <?php if ($akses == 1) {?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Data Obat</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('kodeobat/form');?>"><i class="fa fa-circle-o"></i> Masukan kode Obat</a></li>
            <li><a href="<?php echo base_url('kodeobat/daftar');?>"><i class="fa fa-circle-o"></i> Data Kode Obat</a></li>
          </ul>
        </li>
      <?php }?>

        <?php if ($akses == 2) { ?>
        <li><a href="<?php echo base_url('dokter');?>"><i class="fa fa-circle-o"></i> Data Dokter</a></li>
        <?php } ?>

        <li><a href="<?php echo base_url('datapasien/antrian');?>"><i class="fa fa-circle-o"></i> Data Antrian Pasien</a></li>

        <?php if ($akses == 1 | $akses == 3) { ?>
        <li><a href="<?php echo base_url('kasir');?>"><i class="fa fa-circle-o"></i>Data Kasir</a></li>
        <?php } ?>

        <?php if ($akses == 1 ) { ?>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-table"></i> <span>Data Laporan</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url('pendaftaran/laporan_data');?>"><i class="fa fa-circle-o"></i> Laporan Pasien</a></li>
              <li><a href="<?php echo base_url('datapasien/laporanMedis');?>"><i class="fa fa-circle-o"></i> Laporan Medis Pasien</a></li>
            </ul>
          </li>
        <?php } ?>
        <?php if ($akses == 1 ) { ?>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-table"></i> <span>Manajemen Pengguna</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url('pendaftaran/register');?>"><i class="fa fa-circle-o"></i> Buat Akun</a></li>
              <li><a href="<?php echo base_url('pendaftaran/daftar_user');?>"><i class="fa fa-circle-o"></i> Daftar Pengguna</a></li>
            </ul>
          </li>
        <?php } ?>

        <?php if($akses == 2) {?>
          <li><a href="<?php echo base_url('kodeobat/daftar');?>"><i class="fa fa-circle-o"></i> Cek Ketersediaan Obat</a></li>
        <?php }?>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
