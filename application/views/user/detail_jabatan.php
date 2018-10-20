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
            <div class="col-md-6">
                <div class="card">
                  	<div class="card-header">
                    	<h4 class="card-title"> Identitas Pegawai</h4>
                  	</div>
                  	<div class="card-body">
                    	<!-- <div class="table-responsive"> -->
                        <table>
                            <tr>
                                <th>Nama Pegawai</th>
                                <td>:</td>
                                <td>Imam Teguh Islamy</td>
                            </tr>
                            <tr>
                                <th>Nama Jabatan</th>
                                <td>:</td>
                                <td>Front-End Developer</td>
                            </tr>
                            <tr>
                                <th>Unit Kerja</th>
                                <td>:</td>
                                <td>Surabaya</td>
                            </tr>
                        </table>
                        <div style="margin-bottom: 5px; margin-right: 25px" align="right">
                            <a href="<?php echo base_url()?>user/edit_identitas" class="btn btn-round btn-primary">Edit Identitas Pegawai</a>
                        </div>
                    	<!-- </div> -->
                  	</div>
                </div>
            </div>
            <!-- End Identitas Pegawai -->

            <!-- Job Description -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header ">
                        <h4 class="card-title">Job Description</h4>
                    </div>
                    <div class="card-body ">
                        <!-- <div class="table-full-width table-responsive"> -->
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="text-left">Jobdesk 1</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Jobdesk 2</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Jobdesk 3</td>
                                    </tr>
                                </tbody>
                            </table>
                        <!-- </div> -->
                        <div style="margin-bottom: 5px; margin-right: 25px" align="right">
                            <a href="<?php echo base_url()?>user/edit_jobdesk" class="btn btn-round btn-primary">Edit Job Description</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Job Description -->
        
        </div>
    </div>
      
