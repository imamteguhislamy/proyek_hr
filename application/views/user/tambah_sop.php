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
        <h1 align="center" style="color: white">Tambah SOP</h1>
    </div>

    <div class="content">
        <div class="row">
            <!-- Nama SOP -->
            <div class="col-md-12">
                <?php echo form_open_multipart('admin/sob_add');?>
                <div class="card">
                  	<div class="card-header">
                    	<h4 class="card-title"> Nama SOP</h4>
                  	</div>
                  	<div class="card-body">
                    	<!-- <div class="table-responsive"> -->
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="nama-sop" required="" name="namasop"/>
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
                            <textarea rows="3" cols="104" type="text" style="resize: none; border-color: #E3E3E3" placeholder="Tujuan SOP" required="" name="tujuansop1"></textarea>
                            <textarea rows="3" cols="104" type="text" style="resize: none; border-color: #E3E3E3" placeholder="Tujuan SOP" required="" name="tujuansop2"></textarea>
                            <textarea rows="3" cols="104" type="text" style="resize: none; border-color: #E3E3E3" placeholder="Tujuan SOP" required="" name="tujuansop3"></textarea>
                            <textarea rows="3" cols="104" type="text" style="resize: none; border-color: #E3E3E3" placeholder="Tujuan SOP" required="" name="tujuansop4"></textarea>
                            <textarea rows="3" cols="104" type="text" style="resize: none; border-color: #E3E3E3" placeholder="Tujuan SOP" required="" name="tujuansop5"></textarea>
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
                            <textarea rows="3" cols="104" type="text" style="resize: none; border-color: #E3E3E3" placeholder="Deskripsi Singkat" required="" name="uraiansop1"></textarea>
                            <textarea rows="3" cols="104" type="text" style="resize: none; border-color: #E3E3E3" placeholder="Deskripsi Singkat" required="" name="uraiansop2"></textarea>
                            <textarea rows="3" cols="104" type="text" style="resize: none; border-color: #E3E3E3" placeholder="Deskripsi Singkat" required="" name="uraiansop3"></textarea>
                            <textarea rows="3" cols="104" type="text" style="resize: none; border-color: #E3E3E3" placeholder="Deskripsi Singkat" required="" name="uraiansop4"></textarea>
                            <textarea rows="3" cols="104" type="text" style="resize: none; border-color: #E3E3E3" placeholder="Deskripsi Singkat" required="" name="uraiansop5"></textarea>
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
                   <input type="submit" class="btn btn-primary" name="Tambah" value="Tambah">
                </div>
            </div>
        </div>
    </div>
      
