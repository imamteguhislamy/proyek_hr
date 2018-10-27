<head>
    <title>Detail Jabatan - Human Resource</title>
    <style type="text/css">
        th, td {
            padding: 5px;
            /*text-align: left;*/    
        }
    </style>
</head>

    <div class="panel-header panel-header-xs">
        <h1 align="center" style="color: white">Tambah Jabatan</h1>
    </div>

    <div class="content">
        <div class="row">
            <!-- Identitas Pegawai -->
            <div class="col-md-12">
                <?php echo form_open_multipart('admin/job_add');?>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Nama Jabatan</h4>
                    </div>
                    <div class="card-body">
                        <!-- <div class="table-responsive"> -->
                        <input type="text" class="form-control" required="" placeholder="nama jabatan" name="jabatan">
                        <!-- </div> -->
                    </div>
                    <br>
                    <div class="card-header">
                        <h4 class="card-title"> Bagian</h4>
                    </div>
                    <div class="card-body">
                        <!-- <div class="table-responsive"> -->
                        <input type="text" class="form-control" required="" placeholder="nama Bagian" name="bagian">
                        <!-- </div> -->
                    </div>
                    <br>
                    <div class="card-header">
                        <h4 class="card-title"> Unit</h4>
                    </div>
                    <div class="card-body">
                        <!-- <div class="table-responsive"> -->
                        <input type="text" class="form-control" required="" placeholder="Unit" name="unit">
                        <!-- </div> -->
                    </div>
                    <br>
                    <div class="card-header">
                        <h4 class="card-title"> Kode Bagian</h4>
                    </div>
                    <div class="card-body">
                        <!-- <div class="table-responsive"> -->
                        <input type="text" class="form-control" required="" placeholder="Kode Bagian" name="kodebagian">
                        <!-- </div> -->
                    </div>
                    <br>
                </div>
            </div>
            <!-- End Identitas Pegawai -->

            <!-- Identitas Pegawai -->
            <div class="col-md-12">
                <div class="card">
                  	<div class="card-header">
                    	<h4 class="card-title"> Fungsi Utama Jabatan</h4>
                  	</div>
                  	<div class="card-body">
                    	<!-- <div class="table-responsive"> -->
                        <div class="form-group" align="left">
                            <textarea rows="4" cols="220" type="text" style="resize: none; border-color: #E3E3E3" required="" placeholder="fungsi utama" name="fungsiutama" ></textarea>
                        </div>
                    	<!-- </div> -->
                  	</div>
                </div>
            </div>
            <!-- End Identitas Pegawai -->
        </div>
        <div class="row">
            <!-- Job Description -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header ">
                        <h4 class="card-title">Tanggung Jawab</h4>
                    </div>
                    <div class="card-body ">
                        <!-- <div class="table-full-width table-responsive"> -->
                        <div class="form-group" align="left">
                            <textarea rows="4" cols="102" type="text" style="resize: none; border-color: #E3E3E3" required="" placeholder="tanggung jawab" name="tanggungjawab"></textarea>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
                <div class="card">
                    <div class="card-header ">
                        <h4 class="card-title">Spesifikasi Jabatan</h4>
                    </div>
                    <div class="card-body ">
                        <!-- <div class="table-full-width table-responsive"> -->
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th style="width: 200px">Pendidikan</th>
                                    <td><input type="text" class="form-control" required="" placeholder="Sepsifikasi Pendidikan" name="spespendidikan"/></td>
                                </tr>
                                <tr>
                                    <th>Usia</th>
                                    <td><input type="text" class="form-control" required="" placeholder="Sepsifikasi Usia" name="spesusia"/></td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td><input type="text" class="form-control" required="" placeholder="Sepsifikasi Jenis Kelamin" name="speskelamin"/></td>
                                </tr>
                                <tr>
                                    <th>Pengalaman Kerja</th>
                                    <td><input type="text" class="form-control" required="" placeholder="Sepsifikasi Pengalaman Kerja" name="spespengalaman"/></td>
                                </tr>
                                <tr>
                                    <th>Pelatihan</th>
                                    <td><input type="text" class="form-control" required="" placeholder="Sepsifikasi Pelatihan" name="spespelatihan"/></td>
                                </tr>
                                <tr>
                                    <th>Sertifikasi</th>
                                    <td><input type="text" class="form-control" required="" placeholder="Sepsifikasi Sertifikasi" name="spessertifikasi"/></td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- </div> -->
                        
                    </div>
                </div>
            </div>
            <!-- End Job Description -->

            <!-- Job Description -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header ">
                        <h4 class="card-title">Target Pekerjaan</h4>
                    </div>
                    <div class="card-body ">
                        <!-- <div class="table-full-width table-responsive"> -->
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th style="width: 550px"><input type="text" class="form-control" required="" placeholder="Target Pekerjaan" name="targetpekerjaan"/></th>
                                    <!-- <td><input type="text" class="form-control" placeholder="Target Pekerjaan" value="Rencana Target"/></td> -->
                                </tr>
                            </tbody>
                        </table>  
                        <!-- </div> -->
                        
                    </div>
                </div>
                <div class="card">
                    <div class="card-header ">
                        <h4 class="card-title">Wewenang</h4>
                    </div>
                    <div class="card-body ">
                        <!-- <div class="table-full-width table-responsive"> -->
                        <div class="form-group" align="left">
                            <textarea rows="4" cols="102" type="text" style="resize: none; border-color: #E3E3E3" required="" placeholder="Wewenang" name="wewenang"></textarea>
                        </div>
                        <!-- </div> -->
                        
                    </div>
                </div>                
            </div>
            <!-- End Job Description -->
           
        </div>
        <div class="row">
            <div class="col-md-12" align="center">
                <div style="margin-bottom: 5px; margin-right: 25px">
                    <!-- <a href="<?php echo base_url()?>user/detail_jabatan" class="btn btn-round btn-primary">Tambah Jabatan</a> -->
                     <input type="submit" class="btn btn-primary" name="Tambah" value="Tambah">
                </div>
            </div>
        </div>
    </div>
      
