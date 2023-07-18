<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link type="text/css" href="<?=base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<title>Login</title>
	<style type="text/css">
		.containere{
			width: 400px;
			margin: 5% 30% 10px 35%
		}
		img{
			width: 100px;
			height: 60px;
			float:right;
		}
		a{
			float: right;
		}
	</style>
</head>
<body>
	<div class="containere">
		<form method="POST" action="<?=base_url('authentification')?>">
			<div class='card  width-200'>
	         <div class="card-header c-blue">
	         	<h1 class="text-info glyphicon glyphicon-lock">
	         		<label>Login</label>
	         		<img src="<?=base_url('images/logotype-letter-login-logo-design-graphic-symbol-icon-sign-illustration-creative-idea-vector.jpg'); ?>">

	         	</h1>
			 </div>
			 <div class="card-body">
			 	<div class="for-group">
			 		<label for="matri">Matricule</label>
			 		<input type="text" name="matri" class="form-control" 
			 		placeholder="Saisir votre matricule" autocomplete="off">
			 	</div>
	      		<div class="for-group">
			 		<label for="codeAcce">Code d'accès</label>
			 		<input type="text" name="codeAcce" class="form-control"
			 		 placeholder="Entrez le code d'accès" autocomplete="off">
			 	</div>
			 </div>
			 <div class="card-footer">
			 		<button class="btn btn-primary">Login</button>
			 		<a href="<?= base_url('inscription') ?>" class="text-info">Créer un compte</a>
			 </div>
		</div>
		
		   <?php if ($this->session->flashdata('errorVide')) {?>
   				<label class="text-danger f-20"><?=$this->session->flashdata('errorVide')?></label>
   			<?php } else if($this->session->flashdata('errors')){?>
   				<label class="text-danger f-20"><?=$this->session->flashdata('errors')?></label>
   			<?php } else {?>
   				<label class="text-danger f-20"><?=$this->session->flashdata('errorIm')?></label>
   			<?php } ?>
		</form>
	</div>
</body>
</html>
