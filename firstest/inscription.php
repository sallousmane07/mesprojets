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
         <form action="traitementInscription.php" method="POST">
         		 <div class="form-group">
            <label class="control-label">Nom</label>
            <input type="text" name="nom" class="form-control">
          </div>

          <div class="form-group">
            <label class="control-label">Prenom</label>
            <input type="text" name="prenom" class="form-control">
          </div>

          <div class="form-group">
            <labe class="control-label">Email</label>
            <input type="text" name="email" class="form-control">
          </div>

            
            <div class="form-group">
            <label class="control-label">Tel</label>
            <input type="text" name="tel" class="form-control">
          </div>
          
          
          <div class="form-group">
            <label class="control-label">Login</label>
            <input type="text" name="login" class="form-control">
          </div>

          <div class="form-group">
            <label class="control-label">Mot de passe</label>
            <input type="password" name="mdp" class="form-control" required="true">
          </div>
          <div class="form-group">
            <label class="control-label">PROFIL</label>
            <select name="profil" class="form-control">
              <option>UTILISATEUR SIMPLE</option>
               <option>ADMINISTRATEUR</option>
              >

            </select>
          </div>

          <button type="submit" class="btn btn-primary">Inscription</button>
          <a href="connexion.php" class="btn btn-warning">Connexion</a>
         </form>
        </div>
	</div>
</body>
</html>