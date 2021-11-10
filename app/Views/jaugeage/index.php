<!DOCTYPE html>
<html>
<head>
	<title>How to Import CSV file data to MySQL in CodeIgniter 4</title>

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

	<div class="container">

	    <div class="row">
	      	<div class="col-md-12">
	        	<?php 
	        	// Display Response
	        	if(session()->has('message')){
	        	?>
	        	<div class="alert <?= session()->getFlashdata('alert-class') ?>">
	           		<?= session()->getFlashdata('message') ?>
	        	</div>
	        	<?php
	        	}
	        	?>
				 
	        	<?php $validation = \Config\Services::validation(); ?>

		        <form method="post" action="<?=site_url('jaugeages/importFile')?>" enctype="multipart/form-data">

		           	<?= csrf_field(); ?>
		           	<div class="form-group">
		              	<label for="file">File:</label>

		              	<input type="file" class="form-control" id="file" name="file" />
		              	<!-- Error -->
		              	<?php if( $validation->getError('file') ) {?>
		                <div class='alert alert-danger mt-2'>
		                    <?= $validation->getError('file'); ?>
		                </div>
		              	<?php }?>

		           	</div>

		           	<input type="submit" class="btn btn-success" name="submit" value="Import CSV">
		        </form>
	      	</div>
	    </div>

	    <div class="row">

	    	<!-- Users list -->
			<div class="col-md-12 mt-4" >

				<h3 class="mb-4">Jauge List</h3>
				<table width="100%">
					<thead>
						<tr>
							<th>CUVE</th>
                          <th>DATE/HEURE</th>
                          <th>PRODUIT</th>
                          <th>DEBUT COMPTEUR </th>
                          <th>SORTI</th>
                          <th>ENTRE</th>
                          <th>ETAT ACTUEL COMPTEUR </th>
						</tr>
					</thead>
					<tbody>
						<?php 
						if(isset($jaugeage) && count($jaugeage) > 0){
							foreach($jaugeage as $jaugeage){
								?>
								<tr>
									<td><?= $jaugeage['cuve'] ?></td>
									<td><?= $jaugeage['date'] ?></td>
									<td><?= $jaugeage['produit'] ?></td>
									<td><?= $jaugeage['debut_compteur'] ?></td>
									<td><?= $jaugeage['sorti'] ?></td>
									<td><?= $jaugeage['entre'] ?></td>
									<td><?= $jaugeage['fin_compteur'] ?></td>
								</tr>  
								<?php
							}
						}else{
							?>
							<tr>
								<td colspan="6">No record found.</td>
							</tr>
							<?php
						}
						?>
					</tbody>
				</table>
			</div>

	    </div>
  	</div>

</body>
</html>