 <?php include('partials/_header.php');?>

		<div class="container well col-md-6 col-md-offset-3">
			<div class="panel panel-info">
				<div class="panel-heading text-center">Formulaire d'ajout d'un publication</div>
				<div class="panel-body">
					<form method="post" action="index.php?Page=publication">
						<label class="form_col" for="sujet">Sujet :</label>
						<input name="sujet" id="sujet" type="text" />
						<br /><br />
						
						<div class="form-group">
						  <label for="exampleFormControlTextarea3">Texte:</label>
						  <textarea name="texte" class="form-control" id="exampleFormControlTextarea3" rows="7"></textarea>
						</div>
						<span class="form_col"></span>	
						<span class="form_col"></span>
						<input type="submit" name="add_publication" value="Ajouter" class="btn btn-info">
					</form>
				</div>
			</div>
		</div>
<?php include('partials/_footer.php'); ?>
