<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-cerulean.min.css">
</head>
<body>
	<div class="row container" >
		<div class="col-md-4"></div>
		<div class="col-md-4">
         <form action="traitement.php" method="POST">
         		 <div class="form-group">
            <label class="control-label">Nom</label>
            <input type="text" name="nom" class="form-control"required="true">
          </div>

          <div class="form-group">
            <label class="control-label">Prenom</label>
            <input type="text" name="prenom" class="form-control"required="true">
          </div>

          <div class="form-group">
            <labe class="control-label">Email</label>
            <input type="text" name="email" class="form-control"required="true">
          </div>

            
            <div class="form-group">
            <label class="control-label">Tel</label>
            <input type="text" name="tel" class="form-control" required="true">
          </div>
          
          
          <div class="form-group">
            <label class="control-label">Login</label>
            <input type="text" name="login" class="form-control" required="true">
          </div>

          <div class="form-group">
            <label class="control-label">Mot de passe</label>
            <input type="password" name="mdp" class="form-control" required="true">
          </div>

          <button type="submit" class="btn btn-primary" name ="ins">Inscription</button>
          <a href="connexion.php" class="btn btn-warning">Connexion</a>
         </form>
        </div>
	</div>
</body>
</html>