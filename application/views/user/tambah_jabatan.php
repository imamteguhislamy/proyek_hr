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
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Nama Jabatan</h4>
                    </div>
                    <div class="card-body">
                        <!-- <div class="table-responsive"> -->
                        <input type="text" class="form-control" placeholder="nama-sop" value="Jabatan"/>
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
                            <textarea rows="4" cols="220" type="text" style="resize: none; border-color: #E3E3E3" placeholder="Fungsi Utama Jabatan" value="Fungsi Utama Jabatan">Fungsi Saya Adalah xxxx</textarea>
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
                            <textarea rows="4" cols="102" type="text" style="resize: none; border-color: #E3E3E3" placeholder="Fungsi Utama Jabatan" value="Fungsi Utama Jabatan">Tanggung Jawab Saya Adalah xxxx</textarea>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
                <div class="card">
                    <div class="card-header ">
                        <h4 class="card-title">Sepsifikasi Jabatan</h4>
                    </div>
                    <div class="card-body ">
                        <!-- <div class="table-full-width table-responsive"> -->
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th style="width: 200px">Pendidikan</th>
                                    <td><input type="text" class="form-control" placeholder="nama-sop" value="Pendidikan"/></td>
                                </tr>
                                <tr>
                                    <th>Usia</th>
                                    <td><input type="text" class="form-control" placeholder="nama-sop" value="Usia"/></td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td><input type="text" class="form-control" placeholder="nama-sop" value="Jenis Kelamin"/></td>
                                </tr>
                                <tr>
                                    <th>Pengalaman Kerja</th>
                                    <td><input type="text" class="form-control" placeholder="nama-sop" value="Pengalaman Kerja"/></td>
                                </tr>
                                <tr>
                                    <th>Pelatihan</th>
                                    <td><input type="text" class="form-control" placeholder="nama-sop" value="Pelatihan"/></td>
                                </tr>
                                <tr>
                                    <th>Sertifikasi</th>
                                    <td><input type="text" class="form-control" placeholder="nama-sop" value="Sertifikasi"/></td>
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
                                    <th style="width: 550px"><input type="text" class="form-control" placeholder="nama-sop" value="Judul Target"/></th>
                                    <td><input type="text" class="form-control" placeholder="nama-sop" value="Rencana Target"/></td>
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
                            <textarea rows="4" cols="102" type="text" style="resize: none; border-color: #E3E3E3" placeholder="Fungsi Utama Jabatan" value="Fungsi Utama Jabatan">Wewenang Saya Adalah xxxx</textarea>
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
                    <a href="<?php echo base_url()?>user/detail_jabatan" class="btn btn-round btn-primary">Tambah Jabatan</a>
                </div>
            </div>
        </div>
    </div>
      
