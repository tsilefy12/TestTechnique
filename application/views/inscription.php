<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link type="text/css" href="<?=base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<title>Page d'inscription</title>
	<style type="text/css">
		.container{
			display: flex;
			flex-direction: column;
			margin-top: 3%;
			width: 500px;
		}
		input{
			margin-bottom: 8px;
		}
		.row{
			margin-top: 4%
		}
		.tous{
		     display: flex;
			flex-direction: row;
		}
		legend{
			background-color: #2F4F4F;
			color: white;
			width: 100%
		}
		.btn:hover{
			transform: scale(1.04);
			margin-left: 4px;
		}
		.btn{
			font-size: 1.2em;
			margin: 4px;
		}
	</style>
</head>
<body style="border-left: 50px solid #2F4F4F">
   <div>
   	<div class="container">
   		<form method="post" action="<?=base_url('ajout')?>">
   			<legend class="text-center">
	   		   NOUVELLE INSCRIPTION 
	   	    </legend>
	   	    <div class="tous">
	   	    	<div class="row">
	   			<label for="matricule">Matriclue</label>
	   			<label for="nom">Nom</label>
	   			<label for="prenoms">Prénoms</label>
	   			<label for="dateEmbauche">Date d'embauche</label>
	   			<label for="poste">Poste</label> 
	   			<label for="email">Adresse mail</label>
	   			<label for="typeuser">Type d'utilisateur</label>
	   		</div>
	   		<div class="row">
	   			<input type="text" name="matricule" class="form-control" placeholder="votre matricule"
	   			autocomplete="off">
	   			<input type="text" name="nom" class="form-control" placeholder="votre nom"
	   			autocomplete="off">
	   			<input type="text" name="prenoms" class="form-control" placeholder="votre prénoms"
	   			autocomplete="off">
	   			<input type="date" name="dateEmbauche" class="form-control" placeholder="jj/mm/aaaa"
	   			autocomplete="off">
	   			<input type="text" name="poste" class="form-control" placeholder="votre poste ou emploi"
	   			autocomplete="off">
	   			<input type="email" name="email" class="form-control" placeholder="adresse mail"
	   			autocomplete="off">
	   			<select name="typeuser" class="form-control">
	   				<option value="Admin">Admin</option>
	   				<option value="Simpel utilisateur">Simpel utilisateur</option>
	   			</select>
	   		</div>
	   	    </div>
	        <button class="btn btn-success w-150" onclick="return confirm('Vous êtes sûr?')">S'inscrire</button>
	        <a class="btn btn-primary w-150" href="<?=base_url('login')?>">Annuler</a>
	          <?php if ($this->session->flashdata('success')) {?>
   				<label class="text-success f-20"><?=$this->session->flashdata('success')?></label>
   			<?php } else if($this->session->flashdata('error')){?>
   				<label class="text-danger f-20"><?=$this->session->flashdata('error')?></label>
   			<?php } else { ?>
   				<label class="text-danger f-20"><?=$this->session->flashdata('erreur')?></label>
   			<?php } ?>
   		</form>
   	</div>
   </div>
</body>
</html>