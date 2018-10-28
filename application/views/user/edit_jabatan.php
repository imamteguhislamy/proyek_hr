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
        <h1 align="center" style="color: white">Edit Jabatan</h1>
    </div>

    <div class="content">
        <div class="row">
            <!-- Identitas Pegawai -->
            <div class="col-md-12">
                <?php echo form_open_multipart('admin/job_edit');?>
                <?php foreach ($GetJobSpes as $g) { ?>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> ID Jabatan</h4>
                    </div>
                    <div class="card-body">
                        <!-- <div class="table-responsive"> -->
                        <input type="text" class="form-control" required="" value="<?php echo $g->idjab; ?>" name="idjab" readonly>
                        <!-- </div> -->
                    </div>
                    <br>
                    <div class="card-header">
                        <h4 class="card-title"> Nama Jabatan</h4>
                    </div>
                    <div class="card-body">
                        <!-- <div class="table-responsive"> -->
                        <input type="text" class="form-control" required="" value="<?php echo $g->jabatan; ?>" name="jabatan">
                        <!-- </div> -->
                    </div>
                    <br>
                    <div class="card-header">
                        <h4 class="card-title"> Bagian</h4>
                    </div>
                    <div class="card-body">
                        <!-- <div class="table-responsive"> -->
                        <input type="text" class="form-control" required="" value="<?php echo $g->bagian; ?>" name="bagian">
                        <!-- </div> -->
                    </div>
                    <br>
                    <div class="card-header">
                        <h4 class="card-title"> Unit</h4>
                    </div>
                    <div class="card-body">
                        <!-- <div class="table-responsive"> -->
                        <input type="text" class="form-control" required="" value="<?php echo $g->unit; ?>" name="unit">
                        <!-- </div> -->
                    </div>
                    <br>
                    <div class="card-header">
                        <h4 class="card-title"> Kode Bagian</h4>
                    </div>
                    <div class="card-body">
                        <!-- <div class="table-responsive"> -->
                        <input type="text" class="form-control" required="" value="<?php echo $g->kodebagian; ?>" name="kodebagian">
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
                            <textarea rows="4" cols="220" type="text" style="resize: none; border-color: #E3E3E3" required=""  name="fungsiutama" ><?php echo $g->fungsiutama; ?></textarea>
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
                            <textarea rows="4" cols="102" type="text" style="resize: none; border-color: #E3E3E3" required=""  name="tanggungjawab"><?php echo $g->tanggungjawab; ?></textarea>
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
                                    <td><input type="text" class="form-control" required="" value="<?php echo $g->spespendidikan; ?>" name="spespendidikan"/></td>
                                </tr>
                                <tr>
                                    <th>Usia</th>
                                    <td><input type="text" class="form-control" required="" value="<?php echo $g->spesusia; ?>" name="spesusia"/></td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td><input type="text" class="form-control" required="" value="<?php echo $g->speskelamin; ?>" name="speskelamin"/></td>
                                </tr>
                                <tr>
                                    <th>Pengalaman Kerja</th>
                                    <td><input type="text" class="form-control" required="" value="<?php echo $g->spespengalaman; ?>" name="spespengalaman"/></td>
                                </tr>
                                <tr>
                                    <th>Pelatihan</th>
                                    <td><input type="text" class="form-control" required="" value="<?php echo $g->spespelatihan; ?>" name="spespelatihan"/></td>
                                </tr>
                                <tr>
                                    <th>Sertifikasi</th>
                                    <td><input type="text" class="form-control" required="" value="<?php echo $g->spessertifikasi; ?>" name="spessertifikasi"/></td>
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
                                    <th style="width: 550px"><input type="text" class="form-control" required="" value="<?php echo $g->targetpekerjaan; ?>" name="targetpekerjaan"/></th>
                                    <!-- <td><input type="text" class="form-control" value="Target Pekerjaan" value="Rencana Target"/></td> -->
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
                            <textarea rows="4" cols="102" type="text" style="resize: none; border-color: #E3E3E3" required="" name="wewenang"><?php echo $g->wewenang; ?></textarea>
                        </div>
                        <!-- </div> -->
                        <?php } ?>
                    </div>
                </div>                
            </div>
            <!-- End Job Description -->
           
        </div>
        <div class="row">
            <div class="col-md-12" align="center">
                <div style="margin-bottom: 5px; margin-right: 25px">
                    <input type="submit" class="btn btn-primary" name="Edit" value="Simpan Perubahan">
                </div>
            </div>
        </div>
    </div>
      
