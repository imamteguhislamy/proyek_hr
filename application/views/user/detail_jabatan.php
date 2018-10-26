<head>
    <title>Detail Jabatan - Human Resource</title>
    <style type="text/css">
        th, td {
            padding: 5px;
            /*text-align: left;*/    
        }
    </style>
</head>
    <?php foreach ($GetJobSpes as $g) { ?>
    <div class="panel-header panel-header-xs">
        <h1 align="center" style="color: white"><?php echo $g->jabatan; ?></h1>
    </div>

    <div class="content">
        <div class="row">


            <!-- Identitas Pegawai -->
            <div class="col-md-12">
                <div class="card">
                  	<div class="card-header">
                    	<h4 class="card-title"> Fungsi Utama Jabatan</h4>
                  	</div>
                  	<div class="card-body">
                    	<!-- <div class="table-responsive"> -->
                        <p><?php echo $g->fungsiutama; ?>
                        </p>
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
                            <p><?php echo $g->tanggungjawab; ?></p>
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
                                        <td><?php echo $g->spespendidikan; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Usia</th>
                                        <td><?php echo $g->spesusia; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td><?php echo $g->speskelamin; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Pengalaman Kerja</th>
                                        <td><?php echo $g->spespengalaman; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Pelatihan</th>
                                        <td><?php echo $g->spespelatihan; ?></td>

                                    </tr>
                                    <tr>
                                        <th>Sertifikasi</th>
                                        <td><?php echo $g->spessertifikasi; ?></td>

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
                                        <th style="width: 550px">Target 1</th>
                                        <td><?php echo $g->targetpekerjaan; ?></td>
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
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td><?php echo $g->wewenang; ?></td>
                                    </tr>
                                </tbody>
                            </table>   
                        <!-- </div> -->
                    </div>
                </div>                
            </div>
            <!-- End Job Description -->
            <?php } ?>
        </div>
        <div class="row">
            <div class="col-md-12" align="center">
                <div style="margin-bottom: 5px; margin-right: 25px">
                    <a href="<?php echo base_url()?>user/edit_jabatan" class="btn btn-round btn-primary">Edit Detail Jabatan</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" align="center">
                <div style="margin-bottom: 5px; margin-right: 25px">
                    <a class="btn btn-round btn-danger" data-toggle="modal" data-target="#myModalJabatan" style="color: white">Hapus Jabatan</a>  <!-- Atur modal di footer bagian "Mini Modal" -->
                </div>
            </div>
        </div>
    </div>
      
