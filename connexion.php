<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/connexion1.css">
</head>

<body>
	<div class="login-container">
		<form action="" class="form-login">
			<ul class="login-nav">
				<li class="login-nav__item active">
					<a href="connexion.php">Connexion</a>
				</li>
				<li class="login-nav__item">
					<a href="creercompte.php">S'enregistrer</a>
				</li>
			</ul>
			<label for="login-input-user" class="login__label">
				Identifiant
			</label>
			<input id="login-input-user" class="login__input" type="text" />
			<label for="login-input-password" class="login__label">
				Mot de passe
			</label>
			<input id="login-input-password" class="login__input" type="password" />
			<!-- <label for="login-sign-up" class="login__label--checkbox">
			<input id="login-sign-up" type="checkbox" class="login__input--checkbox" />
			Keep me Signed in
		</label> -->
			<br> <br>
			<button class="login__submit" disabled>Se connecter</button>
		</form>
		<a href="#" class="login__forgot">Mot de passe oublié?</a>
	</div>
</body>

</html>