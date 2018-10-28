<head>
    <title>Daftar SOP - Human Resource</title>
</head>

    <div class="panel-header panel-header-xs">
        
    </div>

    <div class="content">
        <div class="row">
            <div class="card">
              	<div class="card-header">
                	<h4 class="card-title"> Daftar SOP</h4>
              	</div>
              	<div class="card-body">
                	<!-- <div class="table-responsive"> -->
	                  	<table class="table">
		                    <thead class=" text-primary">
		                      	<th>Nama SOP</th>
		                    </thead>
		                    <tbody>
		                    	<?php 
		                    	$i = 0;
		                    	foreach ($data as $m)  { $i++; ?>
		                    		
		                     	<tr>
		                     		
		                     		<td><a href="<?php echo base_url()?>user/detail_sop/<?php echo $m['idsop']?>"<b>SOP <?php echo $i;?></b></a></td>
		                     		<td><a href="<?php echo base_url()?>user/detail_sop/<?php echo $m['idsop']?>"<b><?php echo $m['namasop'];?></b></a></td>
		                     	</tr>
		                     <?php } ?>
		                    </tbody>
	                 	</table>
	                 	<div class="row">
				            <div class="col-md-12" align="center">
				                <div style="margin-bottom: 5px; margin-right: 25px">
				                    <a href="<?php echo base_url()?>user/tambah_sop" class="btn btn-round btn-primary">Tambah SOP Baru</a>
				                </div>
				            </div>
				        </div>
                	<!-- </div> -->
              	</div>
            </div>
        </div>
    </div>
      
