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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Edit Identitas</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-12 pr-1">
                                    <div class="form-group">
                                        <label>Nama Pegawai</label>
                                        <input type="text" class="form-control" placeholder="nama_pegawai" value="Imam Teguh Islamy">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Jabatan</label>
                                        <input type="text" class="form-control" placeholder="nama_jabatan" value="Front-End Developer">
                                    </div>
                                    <div class="form-group">
                                        <label>Unit Kerja</label>
                                        <input type="text" class="form-control" placeholder="unit_kerja" value="Surabaya">
                                    </div>
                                    <div style="margin-bottom: 5px; margin-right: 25px" align="right">
                                        <a href="<?php echo base_url()?>user/detail_jabatan" class="btn btn-round btn-primary">Simpan</a>
                                    </div>
                                </div>
                            </div>           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
      
