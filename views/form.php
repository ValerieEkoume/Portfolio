<?php
include 'header.php' ;
include 'footer.php';
require 'fichier.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap?family=Heebo:wght@100&family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <script>
        var email = document.querySelector('input.exemple');
        email.oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                if (e.target.value.length == 0) {
                    e.target.setCustomValidity("Ce champ est obligatoire");
                } else {
                    e.target.setCustomValidity("Entrez une adresse valide. Exemple : contact@nom.com");
                }
            }
        };

    </script>


    <title>Contact</title>
</head>



<body>


<h1 class="h1form">ENVOYEZ NOUS UN P'TIT MESSAGE</h1>




<div class="container">
<form name="myForm" class="msgError form-group" onsubmit="return validateForm()" method="POST" action="">
    <div class="mb-4">
        <label for="name" class="form-label">Nom</label>
        <input type=text pattern="^[a-zA-Z" required class="form-control" name="name" id="name"><span class="error" id="errorname"></span><br>
        <span title="Veuillez entrer uniquement des lettres"></span>
    </div>

    <div class="mb-4">
        <label for="email" class="form-label">Email</label>
        <input type="email" required class="form-control" name="mail" id="mail"><br>
    </div>
    <div class="mb-4">
        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
        <textarea class="form-control" required  rows="15"></textarea>
    </div>
    <div class="col-12">
        <button type="submit"  value="send" class="btn">Envoyer</button>
    </div>
</form>


</div>


</body>
</html>
