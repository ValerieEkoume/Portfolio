<?php
include 'header.php' ;
include 'footer.php';
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
    <title>Contact</title>
</head>



<body>


<h1 class="h1form">ENVOYEZ NOUS UN P'TIT MESSAGE</h1>
<div class="msg">

</div>

<div class="container">
<form method="POST" action="fichier.php">
    <div class="row">
        <div class="col-25">
            <label for="name" class="form-label">Nom</label>
        </div>
        <div class="col-75">
            <input type="text" class="form-control" name="name" id="name"><br>
        </div>
    </div>

    <div class="row">
        <div class="col-25">
            <label for="email" class="form-label">Adresse email </label>
        </div>
        <div class="col-75">
            <input type="email" class="form-control" name="email" id="email">
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for="message">Message</label>
        </div>
        <div class="col-75">
            <textarea id="message" class="form-control" name="message" placeholder="Write something.." style="height:200px"></textarea>
        </div>
    </div>

    <div class="row">
        <input type="submit" value="Submit">
    </div>
</form>
</div>


</body>
</html>
