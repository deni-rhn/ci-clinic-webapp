<div class="modal fade" id="addModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <form action="<?php echo base_url('/dokter/submitDokter'); ?>" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Dokter</label> <br>
                        <input class="form-control" type="text" placeholder="Masukan Nama" name="nama" style="width:100%;">
                    </div>
                    <div class="form-group">
                        <label>SIP Dokter</label> <br>
                        <input class="form-control" type="number" placeholder="SIP Dokter" name="sip" style="width:100%;">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>

    </div>
</div>

<div class="modal fade" id="dokterEdit" role="dialog">
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
                        <th>Nama Dokter</th>
                        <th>SIP Dokter</th>
                    </tr>
                    </thead>
                    <tbody class="edit" >
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>


<div class="modal fade" id="formRujukan" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title nameF">Form</h4>
            </div>
            <div class="modal-body">
                <form id="rujukan_pasien" action="<?php echo base_url('rujukan/submitRujukan');?>" method="post" >
                    <div class="contain">
                        <div class="head-section text-center">
                            <h1 class="blt">KLINIK ALMUBAROK</h1>
                            <p class="ngaglik">Ngaglik, Ngeposari, Semanu, Gunugkidul, DIY</p>
                            <p class="bhn">Telp. 0877 3973 1439</p>
                            <p class="bhn">SURAT IJIN No. : 503/2329/39.KPRJ/VIII/2015</p>
                        </div>
                        <div class="content-section">
                            <h3 class="text-center">SURAT RUJUKAN</h3>
                            <div style="display: flex;">
                                <p class="blt hjk">Kepada yang terhormat : </p>
                                <span class="spd"><input class="blt k" name="yth" type="text" class="form-control" placeholder="........................................"></span>
                            </div>
                            <div style="display: flex;">
                                <p class="blt hlk">di : </p>
                                <span class="jui"><input class="blt" name="tempat" type="text" class="form-control" placeholder="........................................" style="border: 0 !important;"></span>
                            </div>
                            <div class="data-pasien">
                                <p class="blt">Dengan hormat,</p>
                                <p class="blt kio">Bersama ini kami kirimkan pasien,</p>
                                <table class="blt">
                                    <tr class="mb">
                                        <td width="50%">Nama :</td>
                                        <td width="50%"><input type="text" name="nama-pasien"></td>
                                    </tr>
                                    <tr>
                                        <td>Umur / Jenis Kelamin :</td>
                                        <td><input type="text" name="umur"> <span>
                                        <select name="kelamin">
                                            <option value="laki-laki">Laki-laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        </select></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Alamat :</td>
                                        <td><textarea name="alamat" cols="30" rows="3"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>Diagnosa :</td>
                                        <td>
                                            <textarea name="diagnosa" cols="30" rows="3"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tindakan / Terapi Sementara :</td>
                                        <td>
                                            <textarea name="tindakan" cols="30" rows="3"></textarea>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="permohonan blt">
                                <label class="cnt">Mohon konsultasi / penanganan lanjut / alih rawat
                                    <input type="radio" checked="checked" name="permohonan" value="Mohon konsultasi / penanganan lanjut / alih rawat">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="cnt">Mohon pemeriksaan Laboratorium / Rontgent
                                    <input type="radio" name="permohonan" value="Mohon pemeriksaan Laboratorium / Rontgent">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="tambahan blt">
                                <input class="kjl" type="text" name="catatan-tambahan" placeholder="..................................................................">
                            </div>
                            <div class="end blt">
                                <p>Demikian atas perhatian dan bantuannya kami ucapkan terimakasih.</p>
                            </div>
                            <div class="row blt">
                                <div class="col-md-6 catatan">
                                    <p class="blt">Catatan</p>
                                    <textarea name="catatan" cols="30" rows="5"></textarea>
                                </div>
                                <div class="col-md-6 ttd text-center">
                                    <span>Gunungkidul :</span> <span><input class="yui" type="date" name="validasi"></span>
                                    <p class="ghy">Dokter Pemeriksa</p>
                                    <span>dr.</span> <span>
<!--                                <select name="dokter" id="dokter">-->
                                        <!--                                    <option value="">dokter siapa</option>-->
                                        <!--                                </select>-->
                                <input type="text" name="dokter" placeholder="Dokter Pemeriksa">
                            </span>
                                    <br>
                                    <span>SIP.</span> <span><input type="text" name="sip-dokter"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" style="width: 30%;">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="detailRujukan" role="dialog">
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
                            <th>Nama</th>
                            <th>Kelamin</th>
                            <th>Umur</th>
                            <th>Alamat</th>
                            <th>Diagnosa</th>
                            <th>Tindakan</th>
                            <th>Permohonan</th>
                            <th>Keterangan</th>
                            <th>Catatan</th>
                            <th>Validasi</th>
                            <th>Pemeriksa</th>
                        </tr>
                    </thead>
                    <tbody class="look" >

                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<!--Resep obat-->
<div class="modal fade" id="resepModal" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title nameF">Form</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Pro" id="pro">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="No. RM" id="pemeriksaan">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Assesment" id="assesment">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="planning" id="plan">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="paraf" id="paraf">
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
                        <th class="text-center" >Paraf</th>
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

<script>
    function modalDokter(id) {
        $('.edit').html("");
        $.post("<?php echo base_url('/dokter/dokterId')?>", {id: id})
            .done(function (data) {
                $.each(JSON.parse(data), function(l,k){
                    $('.edit').append(
                        `<tr>
                            <td>${k['nama']}</td>
                            <td>${k['sip']}</td>
                        </tr>`
                    );
                });
            });
        $('#dokterEdit').modal('show');
    }

    $(document).ready(function(){

        $.get( "<?php echo base_url('dokter/getDokter')?>", function( data ) {
            $('#tblDokter').DataTable( {
                data: JSON.parse(data),
                columns: [
                    { title: "Nama Dokter" },
                    { title: "SIP Dokter" },
                    { title: "action" }
                ],

            });


        });
    });

    function modalAdd()
    {
        $('#addModal').modal('show');
    }

    function rujukanAdd()
    {
        $('#formRujukan').modal('show');
    }

    $(document).ready(function(){

        $.get( "<?php echo base_url('rujukan/allRujukan')?>", function( data ) {
            $('#tblRujukan').DataTable( {
                data: JSON.parse(data),
                columns: [
                    { title: "No" },
                    { title: "Nama" },
                    { title: "Jenis Kelamin" },
                    { title: "Umur" },
                    { title: "Alamat" },
                    { title: "Diagnosa" },
                    { title: "Tindakan" },
                    { title: "action" }
                ],

            });


        });
    });

    function detail(id) {
        $('.look').html("");
        $.post("<?php echo base_url('/rujukan/rujukanById')?>", {id: id})
            .done(function (data) {
                $.each(JSON.parse(data), function(l,k){
                    $('.look').append(
                        `<tr>
                            <td>${k['nama']}</td>
                            <td>${k['jenis_kelamin']}</td>
                            <td>${k['umur']}</td>
                            <td>${k['alamat']}</td>
                            <td>${k['diagnosa']}</td>
                            <td>${k['tindakan']}</td>
                            <td>${k['permohonan']}</td>
                            <td>${k['tambahan']}</td>
                            <td>${k['catatan']}</td>
                            <td>${k['validasi']}</td>
                            <td>${k['dokter_pemeriksa']}</td>
                        </tr>`
                    );
                });
            });
        $('#detailRujukan').modal('show');
    }

    function pasienResep(id){
        alert(id);
    }

</script>
