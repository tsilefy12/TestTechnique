<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link type="text/css" href="<?=base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<title>Editer employé</title>
		<style type="text/css">
		.tous{
		     display: flex;
			flex-direction: row;
		}
	    input{
			margin-bottom: 8px;
		}
	</style>
</head>
<body>
  <div>
  	<div class="container">
  		  <form method="post" action="<?=base_url('modifier')?>">
   			<legend class="text-center text-info">
	   		   MODIFIER UN EMPLOYE
	   	    </legend>
	   	    <div class="tous">
	   	    	<div class="row">
	   			<label for="matricule">Matriclue</label>
	   			<label for="nom">Nom</label>
	   			<label for="prenoms">Prénoms</label>
	   			<label for="dateEmbauche">Date d'embauche</label>
	   			<label for="poste">Poste</label> 
	   			<label for="email">Adresse mail</label>
	   		</div>
	   		<div class="row">
	   			<?php foreach ($e->result() as $value) { ?>
	   			<input type="text" name="matricule" value="<?=$value->matr?>" class="form-control" placeholder="votre matricule"
	   			autocomplete="off">
	   			<input type="text" name="nom" value="<?=$value->nomEmploye?>" class="form-control" placeholder="votre nom"
	   			autocomplete="off">
	   			<input type="text" name="prenoms" value="<?=$value->prenomEmploye?>" class="form-control" placeholder="votre prénoms"
	   			autocomplete="off">
	   			<input type="date" name="dateEmbauche" value="<?=$value->dateEmbch?>" class="form-control" placeholder="jj/mm/aaaa"
	   			autocomplete="off">
	   			<input type="text" name="poste" value="<?=$value->posteEpmloye?>" class="form-control" placeholder="votre poste ou emploi"
	   			autocomplete="off">
	   			<input type="email" name="email" value="<?=$value->mail?>" class="form-control" placeholder="adresse mail"
	   			autocomplete="off">
	   		<?php } ?>
	   		</div>
	   	    </div>
	        <button class="btn btn-success w-150" onclick="return confirm('Vous êtes sûr?')">MODIFIER</button>
	        <a class="btn btn-primary w-150" href="<?=base_url('admin')?>">Annuler</a><br>
	      <!--     <?php if ($this->session->flashdata('success')) {?>
   				<label class="text-success f-20"><?=$this->session->flashdata('success')?></label>
   			<?php } else {?>
   				<label class="text-danger f-20"><?=$this->session->flashdata('error')?></label>
   			<?php } ?> -->
   		</form>
  	</div>
  </div>
</body>
</html>