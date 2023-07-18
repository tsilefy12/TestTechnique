<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link type="text/css" href="<?=base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<title>Admin page</title>
	<style type="text/css">
		img{
			width: 30px;
			height: 30px;
			margin-left: 10px;
			cursor: pointer;
		}
		.nav{
			display: flex;
			flex-direction: row;
		}
		.deconnexion{
			float: end;
			margin-left: 80%;
			height: 6vh
		}
		.tous{
		     display: flex;
			flex-direction: row;
		}
	    input{
			margin-bottom: 8px;
		}
		.tableau{
			border: 1px solid grey;
			width: 800px;
			margin-left: 33.5%;
			margin-top: -30px;
			height: 30vh;
			overflow: auto;
		}
		.list{
			background-color:  #2F4F4F;
		}
		.btn{
			height: 33px
		}
	</style>
</head>
<body>

	<form method="post" action="<?=base_url('deconnexion')?>">
		<nav class="nav bg-dark text-light" style="height: 6vh">
			<img src="<?=base_url('images/menu_50px.png'); ?>">
			<label class="text" style="margin-left: 10px">Administrateur</label>
			<button class="btn btn-success deconnexion">Déconnexion</button>
    	</nav>
	</form>
   	<div class="container">
   		<form method="post" action="<?=base_url('ajoutempl')?>">
   			<legend class="text-center text-info">
	   		   <label style="margin-left: 8%"> AJOUTER UN EMPLOYE</label>
	   		   <a href="<?=base_url('employeActif')?>" class="text-info" style="text-decoration: none;margin-left: 5%;">Voir les emplyés actifs</a>
	   		   <?php 
					$utilisateurs=$this->session->userdata('login');
					extract($utilisateurs);
				?>
				<div class="form-group">	
					<label class="row">Code d'accès : <?php echo  $codeAccess?></label>	
				</div>	
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
	   		</div>
	   	    </div>
	        <button class="btn btn-success w-150" onclick="return confirm('Vous êtes sûr?')">ENREGISTRER</button>
	        <a class="btn btn-primary w-150" href="<?=base_url('login')?>">Annuler</a><br>
	          <?php if ($this->session->flashdata('success')) {?>
   				<label class="text-success f-20"><?=$this->session->flashdata('success')?></label>
   			<?php } else if($this->session->flashdata('successe')) {?>
   				<label class="text-success f-20"><?=$this->session->flashdata('successe')?></label>
   			<?php } else if($this->session->flashdata('error')){?>
   				<label class="text-danger f-20"><?=$this->session->flashdata('error')?></label>
   			<?php } else { ?>
   				<label class="text-danger f-20"><?=$this->session->flashdata('erreure')?></label>
   			<?php } ?>
   		</form>
   	</div>
   	<div class="tableau">
   		<div class="list"><label class="text text-light">Liste des employes</label></div>
   		<table class="table table-bordered">
   			<thead>
					<tr>
   					<th>MATRICULE</th>
   					<th>NOM</th>
   					<th>PRENOM</th>
   					<th>POSTE</th>
   					<th>DATE D'EMBAUCHE</th>
   					<th>ADRESSE MAIL</th>
   					<th>OPTIONS</th>
   				</tr>
   				
   			</thead>
   			<tbody>
   				<?php  foreach ($h->result() as $row) {  ?>
		         	<tr>  
		            <td><?php echo $row->matr;?></td>  
		            <td><?php echo $row->nomEmploye;?></td>
		            <td><?php echo $row->prenomEmploye;?></td>
		            <td><?php echo $row->posteEpmloye;?></td>    
		            <td><?php echo $row->dateEmbch;?></td>
		            <td><?php echo $row->mail;?></td> 
		            <td>
		            	<a href="<?=base_url()?>edit/<?php echo $row->matr?>">Editer</a>
		            	<a href="<?=base_url()?>supprimer/<?php echo $row->matr?>" onclick="return confirm('Voulez-vous supprimer cette ligne?')">supp</a>
		            	
		            </td>
		            </tr>  
		         <?php }  ?>  
   			</tbody>
   		</table>
   	</div>
</body>
</html>