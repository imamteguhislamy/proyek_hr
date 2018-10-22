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

            <!-- Identitas Pegawai -->
            <div class="col-md-12">
                <div class="card">
                  	<div class="card-header">
                    	<h4 class="card-title"> Fungsi Utama Jabatan</h4>
                  	</div>
                  	<div class="card-body">
                    	<!-- <div class="table-responsive"> -->
                        <p>Fungsi Utama Jabatan saya Adalah xxxxxxx...........</p>
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
                        <h4 class="card-title">Nama SOP</h4>
                    </div>
                    <div class="card-body ">
                        <!-- <div class="table-full-width table-responsive"> -->
                            <p>Nama SOP saya Adalah......................</p>
                        <!-- </div> -->
                        <div style="margin-bottom: 5px; margin-right: 25px" align="right">
                            <a href="<?php echo base_url()?>user/edit_namasop" class="btn btn-round btn-primary">Edit Nama SOP</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header ">
                        <h4 class="card-title">Tujuan SOP</h4>
                    </div>
                    <div class="card-body ">
                        <!-- <div class="table-full-width table-responsive"> -->
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="text-left">Tujuan SOP 1</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Tujuan SOP 2</td>
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
                        <h4 class="card-title">Uraian Singkat Prosedur</h4>
                    </div>
                    <div class="card-body ">
                        <!-- <div class="table-full-width table-responsive"> -->
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="text-left">Uraian Singkat Prosedur ...............</td>
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
                        <h4 class="card-title">Lampiran SOP</h4>
                    </div>
                    <div class="card-body ">
                        <!-- <div class="table-full-width table-responsive"> -->
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>No</th>
                                        <th>Lampiran</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Lampiran 1</td>
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
        
        </div>
    </div>
      
