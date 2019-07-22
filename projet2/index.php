
<?php
    require "formulaire.php";
    $formulaire = new Formulaire();
?>
<body>
<div id="main-content">
    <div class="container">
    <form action="" method="post" class="well col-md-6 col-md-offset-3>
        <h1 class="text-center"  style=" font-size: 40px; margin-top: -20px;">Connexion</h1>
        <?php
            echo '<div class="form-group">'
                        .'<label class="control-label"> Nom :</label>'
                        .$formulaire->input('nom')
                 .'</div>';

            echo '<div class="form-group">'
                        .'<label class="control-label" >Mot de passe</label>'.'<br>'
                            .$formulaire->input_password('mdp')
                            
                .'</div>';
            echo $formulaire->submit();   
            echo $formulaire->reset();
        ?>
    </form>
    </div>
</div>

</body>