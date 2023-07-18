<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link type="text/css" href="<?=base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<title></title>
	<style type="text/css">
		.tableau{
			max-width: 80%;
			margin-left: 10%;
		}
	</style>
</head>
<body>
  <div>
  	<div>
  		<p class="text text-info text-center" style="font-size: 2em">LISTE DES EMPLOYE ECTIFS</p>
  	</div>
  	<div class="tableau">
  		<table class="table table-bordered  text-center">
  			<thead>
  				<tr>
  					<th>MATRICULE</th>
  					<th>NOM</th>
  					<th>PRENOMS</th>
  					<th>POSTE OU EMPLOI</th>
  					<th>DATE D'EMBAUCHE</th>
  				</tr>
  			</thead>
  			<tbody>
  				<?php foreach ($actifs->result() as  $value) { ?>
  					<tr>
  					<td><?=$value->mat?></td>
  					<td><?=$value->name?></td>
  					<td><?=$value->lastname?></td>
  					<td><?=$value->emploi?></td>
  					<td><?=$value->embauchedate?></td>
  				</tr>
  			<?php	} ?>
  				
  			</tbody>
  		</table>
  	</div>
  </div>
</body>
</html>