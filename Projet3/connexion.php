<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-cerulean.min.css">
</head>
<body>
	<div class="row container">
		<div class="col-md-4"></div>
		<div class="col-md-4">
         <form action="traitement.php" method="POST">
         		<div class="form-group">
  					<label class="control-label">Login</label>
  					<input type="text" name="login" class="form-control" required="true">
  				</div>

  				<div class="form-group">
  					<label class="control-label">Mot de passe:</label>
  					<input type="password" name="mdp" class="form-control" required="true">
  				</div>
  				 <button type="submit" class="btn btn-success" name ="connexion">Connexion</button>
          <a href="inscription.php" class="btn btn-primary">Inscription</button>
         </form>
        </div>
	</div>
</body>
</html>
<?php
