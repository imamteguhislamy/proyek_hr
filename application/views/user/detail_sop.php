<head>
    <title>Detail SOP - Human Resource</title>
    <style type="text/css">
        th, td {
            padding: 5px;
            /*text-align: left;*/    
        }
    </style>
</head>

    <div class="panel-header panel-header-xs">
        <h1 align="center" style="color: white">Detail SOP</h1>
    </div>

    <div class="content">
        <div class="row">
            <!-- Nama SOP -->
            <div class="col-md-12">
                <div class="card">
                  	<div class="card-header">
                    	<h4 class="card-title"> Nama SOP</h4>
                  	</div>
                  	<div class="card-body">
                    	<!-- <div class="table-responsive"> -->
                        <p>Nama SOP ini adalah ......</p>
                    	<!-- </div> -->
                  	</div>
                </div>
            </div>
            <!-- End Nama SOP -->
        </div>
        <div class="row">
            <!-- Tujuan SOP -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Tujuan SOP</h4>
                    </div>
                    <div class="card-body">
                        <!-- <div class="table-responsive"> -->
                        <table class="table">
                            <tr>
                                <td>Tujuan SOP 1</td>
                            </tr>
                            <tr>
                                <td>Tujuan SOP 2</td>
                            </tr>
                        </table>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
            <!-- End Tujuan SOP -->
            
            <!-- Deskripsi Singkat Prosedur -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Deskripsi Singkat Prosedur</h4>
                    </div>
                    <div class="card-body">
                        <!-- <div class="table-responsive"> -->
                        <table class="table">
                            <tr>
                                <td>Deskripsi 1</td>
                            </tr>
                            <tr>
                                <td>Deskripsi 2</td>
                            </tr>
                        </table>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
            <!-- End Deskripsi Singkat Prosedur -->
        </div>

        <div class="row">
            <!-- Tujuan SOP -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Lampiran SOP</h4>
                    </div>
                    <div class="card-body">
                        <!-- <div class="table-responsive"> -->
                        <table class="table">
                            <thead class=" text-primary">
                                <th>Nama Lampiran</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Lampiran 1</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
            <!-- End Tujuan SOP -->
            
            <!-- Deskripsi Singkat Prosedur -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Upload Lampiran SOP</h4>
                    </div>
                    <div class="card-body">
                        <!-- <div class="table-responsive"> -->
                        <div>
                            <input type="file" value="Nama SOP"/>
                        </div>
                        <div align="right">
                            <button type="submit" class="btn btn-round btn-primary">Upload</button>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
            <!-- End Deskripsi Singkat Prosedur -->
        </div>

        <div class="row">
            <div class="col-md-12" align="center">
                <div style="margin-bottom: 5px; margin-right: 25px">
                    <a href="<?php echo base_url()?>user/edit_sop" class="btn btn-round btn-primary">Edit Detail SOP</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" align="center">
                <div style="margin-bottom: 5px; margin-right: 25px">
                    <a class="btn btn-round btn-danger" data-toggle="modal" data-target="#myModalSOP" style="color: white">Hapus SOP</a>  <!-- Atur modal di footer bagian "Mini Modal" -->
                </div>
            </div>
        </div>
    </div>
      
