<head>
    <title>Daftar Jabatan - Human Resource</title>
</head>

    <div class="panel-header panel-header-xs">
        
    </div>

    <div class="content">
        <div class="row">
            <div class="card">
              	<div class="card-header">
                	<h4 class="card-title"> Daftar Jabatan</h4>
              	</div>
              	<div class="card-body">
                	<!-- <div class="table-responsive"> -->
	                  	<table class="table">
		                    <thead class=" text-primary">
		                      	<th>Nama Jabatan</th>
		                      	<th>Bagian</th>
		                      	<th>Unit</th>
		                      	<th>Kode Bagian</th>
		                    </thead>
		                    <tbody>
		                      <?php foreach ($data as $m) { ?>

		                      	<tr>
		                        	<!-- <td><a href="<?php echo base_url()?>user/detail_jabatan"><?php echo $m['jabatan']?></a></td> -->
		                        	
 									<td><a href="<?php echo base_url()?>user/detail_jabatan/<?php echo $m['jabatan']?>"<b><?php echo $m['jabatan'];?></b></a></td>
		                        	<td><?php echo $m['bagian']?></td>
		                        	<td><?php echo $m['unit']?></td>
		                        	<td><?php echo $m['kodebagian']?></td>
		                      	</tr>
		                       <?php } ?>
		                    </tbody>
	                 	</table>
                	<!-- </div> -->
              	</div>
            </div>
        </div>
    </div>
      
