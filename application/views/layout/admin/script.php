 <!-- Modal -->
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title nameF">Form</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input placeholder="Tanggal" type="text" class="form-control pull-right tanggal" id="datepicker" autocomplete="off" >
            </div>
          </div>
          <div class="form-group">
            <input class="form-control" type="text" placeholder="Subyektif & Obyektif" id="subyekobj">
          </div>
          <div class="form-group">
            <input class="form-control" type="text" placeholder="Pemeriksaan Penunjang" id="pemeriksaan">
          </div>
          <div class="form-group">
            <input class="form-control" type="text" placeholder="Assesment" id="assesment">
          </div>
          <div class="form-group">
            <input class="form-control" type="text" placeholder="planning" id="plan">
          </div>
          <button type="button" class="btn btn-success push">add</button>
          <hr>
          <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center" >Tanggal</th>
                    <th class="text-center" >Subyektif & Objectif</th>
                    <th class="text-center" >Pemeriksaan Penunjang</th>
                    <th class="text-center" >Assesment (ICD X )</th>
                    <th class="text-center" >Planning (Terapi Rujukan) </th>
                    <th class="text-center" >action</th>
                </tr>
            </thead>
            <tbody class="mytb" >
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button id="save" type="button" class="btn btn-success">Save</button>
        </div>
      </div>

    </div>
 </div>

<!-- Modal -->
<div class="modal fade" id="showMore" role="dialog">
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title nameF">Form</h4>
        </div>
        <div class="modal-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No.BPJS</th>
                    <th>No.KTP</th>
                    <th>Prolanis</th>
                    <th>Bin/Binti</th>
                    <th>Agama</th>
                    <th>Terdaftar Tanggal</th>
                </tr>
            </thead>
            <tbody class="mores" >
            </tbody>
        </table>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

  <!-- Modal -->
<div class="modal fade" id="edit" role="dialog">
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title nameF">Edit</h4>
        </div>
        <div class="modal-body">
        <form >
          <div class="form-group">
            <label>Code</label>
            <input class="form-control" type="text" placeholder="Masukan Code Penyakit" name="kode" id="kode">
          </div>
          <div class="form-group">
            <label>Nama Obat</label>
            <input class="form-control" type="text" placeholder="Masukan Nama Obat" name="nama_obat" id="nama_obat">
          </div>
          <div class="form-group">
            <label>Harga Obat</label>
            <input class="form-control" type="text" placeholder="Masukan Harga Obat" name="harga" id="rupiah">
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
          </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal" id="editdt" >Save</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal" id="delete">Delete</button>
        </div>
      </div>

    </div>
  </div>

    <!-- Modal -->
<div class="modal fade" id="editpas" role="dialog">
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title nameF">Edit</h4>
        </div>
        <div class="modal-body">
        <form >
          <div class="form-group">
                  <label>Alergi</label>
                  <input class="form-control" type="text" placeholder="Masukan Jenis Alergi" name="alergi" id="alergi">
                </div>

                <div class="form-group">
                  <label>No. RM</label>
                  <input class="form-control" type="text" placeholder="Masukan Nomor Rm" name="no_RM" id="no_rm">
                </div>

                <div class="form-group">
                  <label>No. Bpjs</label>
                  <input class="form-control" type="text" placeholder="Masukan Nomor BPJS" name="no_BPJS" id="no_bpjs">
                </div>

                <div class="form-group">
                  <label>No. Ktp</label>
                  <input class="form-control" type="text" placeholder="Masukan No KTP" name="no_KTP" id="no_ktp">
                </div>

                <div class="form-group">
                  <label>No. Telp</label>
                  <input class="form-control" type="text" placeholder="Masukan No Telphone" name="hp" id="hp">
                </div>

                <div class="form-group">
                  <label>Prolanis</label>
                  <input class="form-control" type="text" placeholder="Masukan Prolanis" name="prolanis" id="prolanis">
                </div>

                <div class="form-group">
                  <label>Nama Pasien</label>
                  <input class="form-control" type="text" placeholder="Nama Pasien" name="nama_pasien" id="nama_pasien">
                </div>

                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select class="form-control" name="jenis_kelamin" id="isjenis_kelamin">
                  </select>
                </div>

                <div class="form-group">
                  <label>Tanggal Lahir</label>

                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right tanggal_lahir" id="datepicker1" name="tanggal_lahir" autocomplete="off">
                  </div>
                </div>

                <div class="form-inline">
                  <div class="row">
                    <div class="form-group col-xs-12">
                      <label>Bin/Binti</label> <br>
                      <input class="form-control" type="text" placeholder="Bin/Binti" name="binti" style="width:100%;" id="binti">
                    </div>
                  </div>
                </div>
                <br>

                <div class="form-inline">
                  <div class="row">
                    <div class="form-group col-xs-6">
                      <label>Pekerjaan</label> <br>
                      <input class="form-control" type="text" placeholder="Masukan Pekerjaan" name="pekerjaan" style="width:100%;" id="pekerjaan">
                    </div>
                    <div class="form-group col-xs-6">
                      <label>Agama</label> <br>
                      <select class="form-control" id="agama" style="width:100%;" name="agama" >
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
                          <input class="form-control" type="text" placeholder="Masukan Dusun" name="dusun" style="width:100%;" id="dusun">
                        </div>
                        <div class="col-xs-2">
                          <input class="form-control" type="number" placeholder="RT" name="RT" style="width:100%;" id="rt">
                        </div>
                        <div class="col-xs-2">
                          <input class="form-control" type="number" placeholder="RW" name="RW" style="width:100%;" id="rw">
                        </div>
                        <div class="col-xs-4">
                          <input class="form-control" type="text" placeholder="Masukan Desa" name="desa" style="width:100%;" id="desa">
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="col-xs-4">
                          <input class="form-control" type="text" placeholder="Masukan Kec." name="kecamatan" style="width:100%;" id="kecamatan">
                        </div>
                        <div class="col-xs-4">
                          <input class="form-control" type="text" placeholder="Masukan Kab." name="kabupaten" style="width:100%;" id="kabupaten" >
                        </div>
                        <div class="col-xs-4">
                          <input class="form-control" type="text" placeholder="Masukan Prov." name="provinsi" style="width:100%;" id="provinsi" >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
          </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success"  id="savef">save</button>
            <button type="button" class="btn btn-danger"  id="dtps">Delete</button>
        </div>
      </div>

    </div>
  </div>

<script>

    var Publicdata,idpasien,PasieneditDT;

    function deleteTb(i){
        $('.mytb').html("");
        Publicdata[0]['data_pasien'][i]['status'] = 2;
        refreshtbl(Publicdata[0]['data_pasien']);
    }

    function data_save(dts,id){
        $.post( "<?php echo base_url('datapasien/save_data_pasien')?>", { dataPasien: dts,id:id})
        .done(function(data){
            window.location.href = "<?php echo base_url('datapasien/antrian')?>";
        });
    }

    function delete_dt(url,path,id){
        $.post( url,{'id':id})
        .done(function(data){
            window.location.href = '<?php echo base_url();?>'+path;
        });
    }

    function edit_dt(url,path,dts){
        $.post( url,dts)
        .done(function(data){
            window.location.href = '<?php echo base_url();?>'+path;
        });
    }

    function refreshtbl(toloop){
        $i = 0;
        $.each(toloop,function(k,v){
          if(v['status'] != 2 ){
              $('.mytb').append(
                                    `<tr>
                                      <td> ${v['tanggal']}</td>
                                      <td> ${v['subyektif_objectif']}</td>
                                      <td> ${v['pemeriksaan']}</td>
                                      <td> ${v['assesment']}</td>
                                      <td> ${v['planing']}</td>
                                      <td class="text-center" ><a href="#" onclick="deleteTb(${$i});return false;"  ><span class="glyphicon glyphicon-remove"></span></a></td>
                                    </tr>`
                            );
          }
            $i++;
        });
    }

    // start open modal

    function openmodal(id){
        $('.mytb').html("");
        var datais;
        $.post( "<?php echo base_url('datapasien/get_user')?>", { id: id})
        .done(function( data ) {
            var tojsn = JSON.parse(data);
            Publicdata = tojsn;
            $('.nameF').text(tojsn[0]['nama']);

            //inserttotbl
            refreshtbl(tojsn[0]['data_pasien']);

            //showmodal
            $('#myModal').modal('show');

            $('.push').click(function(){
                var tanggal     = $('.tanggal').val();
                var sub         = $('#subyekobj').val();
                var pemeriksaan = $('#pemeriksaan').val();
                var assesment   = $('#assesment').val();
                var plan        = $('#plan').val();
                if(tanggal !="" && sub !=="" && pemeriksaan !="" && assesment !="" && plan !="" ){
                  var pushdt = {'tanggal':tanggal,'subyektif_objectif':sub,'pemeriksaan':pemeriksaan,'assesment':assesment,'planing':plan,'status':1};
                  tojsn[0]['data_pasien'].push(pushdt);
                  //refresh tbl
                  $('.mytb').html("");
                  refreshtbl(tojsn[0]['data_pasien']);

                  // remove text input
                  $('.tanggal').val("");
                  $('#subyekobj').val("");
                  $('#pemeriksaan').val("");
                  $('#assesment').val("");
                  $('#plan').val("");
                }else{
                  alert("data harus lengkap");
                }
            });

            $('#save').click(function(){
                data_save(Publicdata,id);
            });

        });

        // $('#myModal').modal('show');
    }

    function showmore(id){
        $('.mores').html("");
        $.post( "<?php echo base_url('datapasien/get_one')?>", { id: id})
        .done(function(data){
            $.each(JSON.parse(data),function(k,v){
                $('.mores').append(
                                    `<tr>
                                      <td> ${v['No_BPJS']}</td>
                                      <td> ${v['No_KTP']}</td>
                                      <td> ${v['prolanis']}</td>
                                      <td> ${v['Bin_binti']}</td>
                                      <td> ${v['Agama']}</td>
                                      <td> ${v['waktu_daftar']}</td>
                                    </tr>`
                                );
            });
        });
        $('#showMore').modal('show');
    }

    function editoption(id){
        $.post( "<?php echo base_url('datapasien/get_one')?>", { id: id})
        .done(function(data){
            parse = JSON.parse(data);
          var isdate = new Date(parse[0]['Tanggal_lahir']);
          var dateStr = (isdate.getMonth()+1)+ "/" + isdate.getDate() + "/" + isdate.getFullYear();
           $('#alergi').val(parse[0]['alergi']);
           $('#no_rm').val(parse[0]['No_Rm']);
           $('#no_bpjs').val(parse[0]['No_BPJS']);
           $('#no_ktp').val(parse[0]['No_KTP']);
           $('#hp').val(parse[0]['No_HP']);
           $('#prolanis').val(parse[0]['prolanis']);
           $('#nama_pasien').val(parse[0]['Nama_pasien']);
           $('.tanggal_lahir').val(dateStr);
           $('#umur').val(parse[0]['umur']);
           $('#binti').val(parse[0]['Bin_binti']);
           $('#pekerjaan').val(parse[0]['Pekerjaan']);
           $('#agama').val(parse[0]['Agama']);
           $('#dusun').val(parse[0]['Dusun']);
           $('#rt').val(parse[0]['Rt']);
           $('#rw').val(parse[0]['Rw']);
           $('#desa').val(parse[0]['Desa']);
           $('#kecamatan').val(parse[0]['Kecamatan']);
           $('#kabupaten').val(parse[0]['Kabupaten']);
           $('#provinsi').val(parse[0]['Provinsi']);
          //  jenis kelamin
           if(parse[0]['Jenis_kelamin'] == "Laki-laki"){
              $('#isjenis_kelamin').html(`<option selected >Laki-laki</option><option>Perempuan</option>`);
           }else if(parse[0]['Jenis_kelamin'] == "Perempuan"){
              $('#isjenis_kelamin').html(`<option>Laki-laki</option><option selected >Perempuan</option>`);
           }
           idpasien = parse[0]['id'];
        });

        // acttion #pasienform

       $('#editpas').modal('show');
    }

        //===#pasienform=====
        $('#savef').click(function(){
          var tanggalLhr = new Date($('.tanggal_lahir').val());
          var toStr = tanggalLhr.getFullYear() + "/" + (tanggalLhr.getMonth()+1)+ "/" + tanggalLhr.getDate();
          console.log(toStr);
          PasieneditDT = { 'alergi':$('#alergi').val(),
                            'No_Rm':$('#no_rm').val(),
                            'No_BPJS':$('#no_bpjs').val(),
                            'No_KTP':$('#no_ktp').val(),
                            'No_HP':$('#hp').val(),
                            'prolanis':$('#prolanis').val(),
                            'Nama_pasien':$('#nama_pasien').val(),
                            'Tanggal_lahir':toStr,
                            'Bin_binti':$('#binti').val(),
                            'Pekerjaan':$('#pekerjaan').val(),
                            'Agama':$('#agama').val(),
                            'Dusun':$('#dusun').val(),
                            'Rt':$('#rt').val(),
                            'Rw':$('#rw').val(),
                            'Desa':$('#desa').val(),
                            'Kecamatan':$('#kecamatan').val(),
                            'Kabupaten':$('#kabupaten').val(),
                            'Provinsi':$('#provinsi').val()
                          }
          $.post( "<?php echo base_url('datapasien/update_data')?>", { d_pasien: PasieneditDT,id:idpasien})
          .done(function( data ) {
            window.location.href = "<?php echo base_url('datapasien/terdaftar')?>";
          });
        })

        $('#dtps').click(function(){
            delete_dt('<?php echo base_url('datapasien/delete_data');?>','datapasien/terdaftar',idpasien);
        });

    function showedit(id){
        $.post( "<?php echo base_url('/kodeobat/get_edit');?>", { id: id})
        .done(function( data ) {
            var eddt = JSON.parse(data);
            $('#kode').val(eddt[0]['kode']);
            $('#nama_obat').val(eddt[0]['nama_obat']);
            $('#rupiah').val(eddt[0]['harga']);
            $('#stok').val(eddt[0]['stok']);
            $('#status_persediaan').val(eddt[0]['status_persediaan']);
        });
        $('#delete').click(function(){
            delete_dt('<?php echo base_url('/kodeobat/delete');?>','kodeobat/daftar',id);
        });

        $('#editdt').click(function(){
            var url_d = '<?php echo base_url('/kodeobat/edit');?>';
            var path_d = 'kodeobat/daftar';
            var data_d = { 'id':id,'kode':$('#kode').val(),'nama_obat':$('#nama_obat').val(), 'harga':$('#rupiah').val(), 'stok':$('#stok').val(),'status_persediaan':$('#status_persediaan').val()};
            edit_dt(url_d,path_d,data_d);
        });

        $('#edit').modal('show');
    }

    $(document).ready(function(){
            console.log(window.location.pathname);
            // antrian pasien page
            if( window.location.pathname == "/datapasien/antrian"){
                $.get( "<?php echo base_url('datapasien/data_antrian') ?>", function( data ) {
                $('#ismytable').DataTable( {
                    data: JSON.parse(data),
                    columns: [
                        { title: "No. Antrian" },
                        { title: "No.Rm" },
                        { title: "Nama" },
                        { title: "Jenis Kelamin" },
                        { title: "umur" },
                        { title: "Alergi" },
                        { title: "Alamat" },
                        { title: "No. Telephon" },
                        { title: "Pekerjaan" },
                        { title: "Agama" },
                        { title: "action" }
                    ],

                    });
                });
            }

            if( window.location.pathname == "/pendaftaran/laporan_pasien"){
                $.get( "<?php echo base_url('pendaftaran/get_filter') ?>", function( data ) {
                $('#laporanPasien').DataTable( {
                    data: JSON.parse(data),
                    columns: [
                        { title: "Nama Pasien" }
                    ],

                    });
                });
            }

            if(window.location.pathname == "/datapasien/terdaftar" ){
                $.get( "<?php echo base_url('datapasien/pasien_terdaftar')?>", function( data ) {
                var t = $('#isantrian').DataTable( {
                    data: JSON.parse(data),
                    columns: [
                        { title: "No" },
                        { title: "No.Rm" },
                        { title: "Nama" },
                        { title: "Jenis Kelamin" },
                        { title: "umur" },
                        { title: "Alergi" },
                        { title: "Alamat" },
                        { title: "No. Telephon" },
                        { title: "Pekerjaan" },
                        { title: "action" }
                    ],
                    "columnDefs": [   ////define column 1
                        {
                            "searchable": false,
                            "orderable": false,
                            "targets": 0
                        }],
                    "order": [[ 1, 'asc' ]]
                    });

                    t.on( 'order.dt search.dt', function () {
                        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                            cell.innerHTML = i+1;
                        } );
                    } ).draw();

                });
            };

            if(window.location.pathname == "/kodeobat/daftar"){
                $.get( '<?php echo base_url('/kodeobat/get');?>' ,function(data){
                    var t = $('#iskodeobat').DataTable( {
                    data: JSON.parse(data),
                    columns: [
                        { title: "No" },
                        { title: "Kode" },
                        { title: "Nama Obat" },
                        { title: "Harga Obat" },
                        { title: "Stok Obat" },
                        { title: "Status Persediaan" },
                        { title: "action" }
                    ],
                    "columnDefs": [   ////define column 1
                        {
                            "searchable": false,
                            "orderable": false,
                            "targets": 0
                        }],
                    "order": [[ 1, 'asc' ]]
                    });

                    t.on( 'order.dt search.dt', function () {
                        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                            cell.innerHTML = i+1;
                        } );
                    } ).draw();
                });
            }

        // convert rupiah
        var rupiah = document.getElementById('rupiah');
		rupiah.addEventListener('keyup', function(e){
			rupiah.value = formatRupiah(this.value, 'Rp. ');
		});

		/* formatRupiah */
		function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}

			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
		}


    // print

    $('#print_v').click(function(){
      var curURL = window.location.href;
      history.replaceState(history.state, '', '/');
      window.print();
      history.replaceState(history.state, '', curURL);
    });

    });

    $('#save_in').click(function(){
      var id    = $(this).data('id');
      var total = $(this).data('total');
      var send = {'id_pasien':id,'total':total}

      $.post( "<?php echo base_url('/pendapatan/data');?>", { data: send})
        .done(function( data ) {
            if(data == 1){
              window.location.href = "<?php echo base_url('/kasir')?>";
            }
        });


    });

</script>
