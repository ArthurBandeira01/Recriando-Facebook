<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Login Face</title>
		<link rel="shortcut icon" type="image-x/png" href="face2.ico"/>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css">
		<script src="https://kit.fontawesome.com/a7cf753026.js"></script>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0"/>
		<meta name="author" content="Arthur">
		<meta name="keywords" content="Facebook,login,usuário"/>
		<meta name="description" content="Login do Facebook"/>
	</head>

	<body>

	<!----- Menu ----->	
		<header>
			<div class="center">
				<div class="logo">
				<h2>Facebook</h2>
				</div><!--logo-->

				<form method="post" class="form-login">

					<div class="form-element">
						<p>E-mail ou telefone:</p>
						<input type="e-mail">
					</div><!--form-element-->

					<div class="form-element">
						<p>Senha:</p>
						<input type="password">
					</div><!--form-element-->

					<div class="form-element">
						<input type="submit" name="acao" value="Entrar">
					</div><!--form-element-->
					
				</form><!--form-login-->
				<div class="clear"></div>
			</div><!--center-->

		</header>

	<!----- Fim menu ---->
		
	<!----- Section main ------>
		
		<section class="main">
			<div class="center">
				<div class="imagens-pessoas">
					<img src="images/face.png">
				</div><!--imagens-pessoas-->

			<div class="abrir-conta">
				<h2>Abra uma conta</h2>
				<h3>É gratuito e sempre será.</h3>

				<form class="criar-conta">
					<div class="w50">
						<input placeholder="Nome" type="text">
					</div><!--w50-->

					<div class="w50">
						<input placeholder="Sobrenome" type="text">
					</div><!--w50-->

					<div class="w100">
						<input placeholder="E-mail" type="email">
					</div><!--w100-->

					<div class="w100">
						<input placeholder="Senha" type="password">
					</div><!--w100-->

					<div class="w100">
						<h2>Data de nascimento</h2>
						<select name="nascimento-dia"  class="nascimento">
							<?php
								for($i = 1; $i <= 31; $i++){
							?>
							<option value="php echo $i; ?>"><?php echo $i; ?></option>
							<?php } ?>
						</select>
						<select name="nascimento-mês"  class="nascimento">
							<option value="0">Junho</option>
						</select>
						<select name="nascimento-ano"  class="nascimento">
							<?php
								for($i = 1960; $i <= 2019; $i++){
							?>
							<option value="php echo $i; ?>"><?php echo $i; ?></option>
							<?php } ?>	
						</select>
						<div class="clear"></div>
					</div><!--w100-->

					<div class="w100">
						<div class="input-radio">
							<input type="radio" name="sexo" value="masculino"/>
							<h2>Masculino</h2>
						</div><!--input-radio-->

						<div class="input-radio">
							<input type="radio" name="sexo" value="feminino"/>
							<h2>Feminino</h2>
						</div><!--input-radio-->
						<div class="clear"></div>
					</div><!--w100-->

					<div class="w100">
						<input type="submit" name="acao" value="Cadastrar!">
					</div><!--w100-->

					<div class="clear"></div>
				</form><!--criar-conta-->

			</div><!--abrir-conta-->	
				
				<div class="clear"></div>
			</div><!--center-->
		</section><!--main-->

	<!----- Fim main ----->
	
	<!----- Rodapé ------> 	
		
		<section class="linguas">
			<div class="center">
				<a class="selected-lingua" href="#">Português (BR)</a>
				<a href="#">English (US)</a>
				<a href="#">Español</a>
				<a href="#">Français (France)</a>
				<a href="#">Italiano</a>
				<a href="#">Deutsch</a>
			</div><!--center-->

			<div style="border:0;padding-top: 20px;"  class="center">
				<a href="#">Português (BR)</a>
				<a href="#">English (US)</a>
				<a href="#">Español</a>
				<a href="#">Français (France)</a>
				<a href="#">Italiano</a>
				<a href="#">Deutsch</a>
			</div><!--center-->
		</section><!--linguas-->

	<!---- Fim rodapé ----->	

	</body>
</html>