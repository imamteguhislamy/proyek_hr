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
        <h1 align="center" style="color: white">Edit Keterangan SOP</h1>
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
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="nama-sop" value="Nama SOP"/>
                        </div>
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
                        <div class="form-group" align="left">
                            <textarea rows="5" cols="104" type="text" style="resize: none;" placeholder="Tujuan SOP 1" value="Tujuan SOP 1"></textarea>
                            <textarea rows="5" cols="104" type="text" style="resize: none;" placeholder="Tujuan SOP 2" value="Tujuan SOP 2"></textarea>
                        </div>
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
                        <div class="form-group">
                            <textarea rows="8" cols="104" type="text" style="resize: none;" placeholder="Deskripsi 1" value="Deskripsi 1"></textarea>
                            <textarea rows="8" cols="104" type="text" style="resize: none;" placeholder="Deskripsi 2" value="Deskripsi 2"></textarea>
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
                    <a href="<?php echo base_url()?>user/detail_sop" class="btn btn-round btn-primary">Simpan Perubahan</a>
                </div>
            </div>
        </div>
    </div>
      
