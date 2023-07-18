<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link type="text/css" href="<?=base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<title>Page d'accueil</title>
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
		.informations{
			display: flex;
			flex-direction: column;
			align-items: center;
			font-size: 1.3em;
			margin-top: 
		}
		.deconnexion{
			float: end;
			margin-left: 80%;
			height: 6vh
		}
	</style>
</head>
<body>
	<div>
		<form method="post" action="<?=base_url('deconnexion')?>">
			<nav class="nav bg-dark text-light" style="height: 6vh">
				<img src="<?=base_url('images/menu_50px.png'); ?>">
				<label class="text" style="margin-left: 10px">ACCUEIL</label>
				<button class="btn btn-success deconnexion">Déconnexion</button>
		    </nav>
		</form>
		<h1 class="text text-success text-center" style="font-size: 2em; margin-top: 8px">BIENVENUE A LA PAGE D'ACCUEIL, VOUS ETES CONNECTE(E)</h1>
		<div class="contenair">
			<div class="informations">
				<?php 
					$utilisateurs=$this->session->userdata('login');
					extract($utilisateurs);
				?>
				<div class="form-group">	
					<label class="row">Code d'accès : <?php echo  $codeAccess?></label>	
				</div>		
			 </div>
		</div>
	</div>
</body>
</html>