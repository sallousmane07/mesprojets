<!DOCTYPE html>
<html>
<head>
    <title>menu</title>
<meta charset="utf-8">
<link rel="stylesheet" href="style/bootstrap-cerulean.min.css">
<link rel="stylesheet" href="style/style.css">
</head>
<body>

<?php
    class Formulaire{
        public function input($nom){
            return(
                '<input type="text" class="form-control" name="' .$nom .'>'
            );
        }

        public function input_password($mdp){
            return(
                '<input type="password" id="password" class="form-control" name="' .$mdp.'">'
            );
        }   

        public function submit(){
            return('<button type="submit" id="ENVOYER" class="btn btn-success">Envoyer</button>');
        }
        public function reset(){
            return('<button type="reset" id="EFFACER" class="btn btn-danger">Effacer</button>');
        }
}
