<head>
    <title>Detail SOP - Human Resource</title>
    <style type="text/css">
        th, td {
            padding: 5px;
            /*text-align: left;*/    
        }
    </style>
</head>
    <?php foreach ($GetSopSpes as $g) { ?>
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
                        <p><?php echo $g->namasop; ?></p>
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
                                <td><?php echo $g->tujuansop1; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $g->tujuansop2; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $g->tujuansop3; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $g->tujuansop4; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $g->tujuansop5; ?></td>
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
                                <td><?php echo $g->uraiansop1; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $g->uraiansop2; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $g->uraiansop3; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $g->uraiansop4; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $g->uraiansop5; ?></td>
                            </tr>
                        </table>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
            <!-- End Deskripsi Singkat Prosedur -->
        </div>

       <!--  <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Lampiran SOP</h4>
                    </div>
                    <div class="card-body">
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
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Upload Lampiran SOP</h4>
                    </div>
                    <div class="card-body">
                        <div>
                            <input type="file" value="Nama SOP"/>
                        </div>
                        <div align="right">
                            <button type="submit" class="btn btn-round btn-primary">Upload</button>
                        </div>
                    </div>
                </div>
            </div> -->

          <?php } ?>
        
        <div class="row">
            <div class="col-md-12" align="center">
                <div style="margin-bottom: 5px; margin-right: 25px">
                    <a href="<?php echo base_url()?>user/edit_sop/<?php echo $g->namasop?>" class="btn btn-round btn-primary">Edit Detail SOP</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" align="center">
                <div style="margin-bottom: 5px; margin-right: 25px">
                    <!-- <a class="btn btn-round btn-danger" data-toggle="modal" data-target="#myModalSOP" style="color: white">Hapus SOP</a> -->  <!-- Atur modal di footer bagian "Mini Modal" -->
                    <a href="<?php echo base_url().'admin/sop_del/'.$g->namasop?>">
                        <button type="button" class="btn btn-round btn-danger" ata-toggle="modal" data-target="#myModalJabatan" style="color: white">Hapus Jabatan</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>

