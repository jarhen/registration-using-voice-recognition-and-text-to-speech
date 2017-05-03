<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/jquery.dataTables.min.css">
		<script src="<?=base_url();?>assets/js/jquery-3.2.0.min.js"></script>
		<script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
		<script src="<?=base_url();?>assets/js/jquery.dataTables.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row"><br><br>
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div class="panel-title">
							 <a href="<?=base_url();?>index.php/export/mygrade" class="btn btn-success " id="export">Export as EXCEL file</a>
						</div>
					</div>
					<div class="panel-body table-responsive">
						<table id="table" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th class="warning"></th>
										<th colspan="5" class="warning">Class Standing</th>
										<th colspan="5" class="warning">Major Exams</th>
										<th colspan="2" class="warning"></th>
										
									</tr>
									<tr>
										<th class="info">Name</th>
										
										<th class="info">PL</th>
										<th class="info">MT</th>
										<th class="info">PF</th>
										<th class="info">F</th>
										
										<th class="info">AVE</th>
										
										<th class="info">PL</th>
										<th class="info">MT</th>
										<th class="info">PF</th>
										<th class="info">F</th>
										
										<th class="info">AVE</th>
										
										
										<th class="info">Final Grade</th>
										<th class="info">Remarks</th>
										
										
									</tr>
								</thead>
								<tbody>    
									
									<?php foreach ($record as $key) {?>
										<tr>
											<td><?=$key->name?></td>
											
											<td><?=number_format($key->cs_pl,2)?></td>
											<td><?=number_format($key->cs_mt,2)?></td>
											<td><?=number_format($key->cs_pf,2)?></td>
											<td><?=number_format($key->cs_f,2)?></td>
											
											<td class="success"><?=$cs =  number_format(($key->cs_f + $key->cs_mt + $key->cs_pf + $key->cs_f)/4,2) ?></td>
											
											<td><?=number_format($key->me_pl,2)?></td>
											<td><?=number_format($key->me_mt,2)?></td>
											<td><?=number_format($key->me_pf,2)?></td>
											<td><?=number_format($key->me_f,2)?></td>
											       
											<td class="success"><?= $me = number_format(($key->me_f + $key->me_mt + $key->me_pf + $key->me_f)/4,2)?></td>
											
											<td class="danger"><?= $ave = number_format(($cs + $me)/2,2)?></td>
											
											<td class="danger"><?php
												if ($ave>100){
													echo 'OUT OF RANGE';
												}else if ($ave >74){
													echo 'PASSED';
												}else{
													echo '<span class="text-danger">FAILED</span>';
												}
											?></td>
											
											
											
										</tr>
									
									<?php  } ?>
										
								</tbody>
						</table>
					</div>
					<div class="panel-footer">
						<small>jaimeframosjr 2017 </small>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
<script>
	$(document).ready(function(){
		$('#table').dataTable({
			  responsive: true
		});

	});
</script>