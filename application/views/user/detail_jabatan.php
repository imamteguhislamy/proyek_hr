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
        <h1 align="center" style="color: white">Detail Jabatan</h1>
    </div>

    <div class="content">
        <div class="row">
          <?php foreach ($GetJobSpes as $g) { ?>

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
                        <div style="margin-bottom: 5px; margin-right: 25px" align="right">
                            <a href="<?php echo base_url()?>user/edit_fungsijabatan" class="btn btn-round btn-primary">Edit Fungsi Utama Jabatan</a>
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
                            <p><?php echo $g->tanggungjawab; ?></p>
                        <!-- </div> -->
                        <div style="margin-bottom: 5px; margin-right: 25px" align="right">
                            <a href="<?php echo base_url()?>user/edit_namasop" class="btn btn-round btn-primary">Edit Nama SOP</a>
                        </div>
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
                                        <td class="text-left">Pendidikan: <?php echo $g->spespendidikan; ?></td>

                                    </tr>
                                    <tr>
                                        <td class="text-left">Usia: <?php echo $g->spesusia; ?></td>

                                    </tr>
                                    <tr>
                                        <td class="text-left">Jenis Kelamin: <?php echo $g->speskelamin; ?></td>

                                    </tr>
                                    <tr>
                                        <td class="text-left">Pengalaman Kerja: <?php echo $g->spespengalaman; ?></td>

                                    </tr>
                                    <tr>
                                        <td class="text-left">Pelatihan: <?php echo $g->spespelatihan; ?></td>

                                    </tr>
                                    <tr>
                                        <td class="text-left">Sertifikasi: <?php echo $g->spessertifikasi; ?></td>

                                    </tr>
                                </tbody>
                            </table>
                        <!-- </div> -->
                        <div style="margin-bottom: 5px; margin-right: 25px" align="right">
                            <a href="<?php echo base_url()?>user/edit_tujuansop" class="btn btn-round btn-primary">Edit Tujuan SOP</a>
                        </div>
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
                                        <td class="text-left"><?php echo $g->targetpekerjaan; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        <!-- </div> -->
                        <div style="margin-bottom: 5px; margin-right: 25px" align="right">
                            <a href="<?php echo base_url()?>user/edit_uraiansop" class="btn btn-round btn-primary">Edit Uraian Singkat Prosedur</a>
                        </div>
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
                                        <th><?php echo $g->wewenang; ?></th>
                                    </tr>
                                </tbody>
                            </table>   
                        <!-- </div> -->
                        <div style="margin-bottom: 5px; margin-right: 25px" align="right">
                            <a href="#" class="btn btn-round btn-primary">Tambah Lampiran SOP</a>
                        </div>
                    </div>
                </div>                
            </div>
            <!-- End Job Description -->
            <?php } ?>
        </div>
    </div>
      
