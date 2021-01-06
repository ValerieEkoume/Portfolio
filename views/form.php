<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;

$msg = '';

if (array_key_exists('email', $_POST)) {
    date_default_timezone_set('Etc/UTC');

    // Load Composer's autoloader
    require '../vendor/autoload.php';

    //Create a new PHPMailer instance
    $mail = new PHPMailer();
    //send using SMTP to localhost (faster and safer than usin mail()) - require a local mail server
    $mail->isSMTP();
    $mail->Host = 'localhost';
    $mail->Port = 25;

    //Use a fixed address in your own domain as the for adress
    //Do not use the submitter's adress here as it will be forgery
    // and wil cause your message to fail SPF checks
    $mail->setFrom('from@example.com', 'First Last');
    //Choose who the message should be send to
    //The important thing is not to trust an email adress submitted from the form directly,
    //as an attacker can subtitute their own and try to use your form to send spam
    $adresse = [
            'val' =>'val2valprod@gmail.com'
    ];

    //validate adress selection before trying to use it
    if (array_key_exists('dept', $_POST) && array_key_exists($_POST['dept'], $adresse)) {
        $mail->addAddress($adresse[$_POST['dept']]);
    } else {
        //fall back to a fixed adress if dept selection is invalid or missing
        $mail->addAddress('valerie_ekoume@val2valprod.com');
    }

    //Put the submitter's adress in a reply-to header
    //this will failed if the adress provided is invalid
    // in which case we should ignore the whole request
    if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
        $mail->Subject = 'PHPMailer contact form';
        //Keep it simple don't use HTML
        $mail->isHTML(false);
        //Build a simple message body
        $mail->Body = <<<EOT
Email: {$_POST['email']}
Name: {$_POST['name']}
Message: {$_POST['message']}
EOT;
        //Send the message, check for errors
        if ($mail->send()) {
            //The reason for failing to send will be in $mail->ErrorIfo
            //but it is unsafe to display errors directly to users -process the errors, log it on your server
            $msg = 'Désolé, une erreur est apparue. Veuillez essayer à nouveau un peu plus tard.';
        }else {
            $msg = 'Message envoyé! Merci de nous avoir contacté.';
        }

    } else {
        $msg = 'Invalid email adress, message ignored.';
    }
}

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
    <link rel="stylesheet" href="../assets/styles/style.css">
    <title>Contact</title>
</head>

<?php include 'header.php' ?>

<body>


<h1 class="h1form">ENVOYEZ NOUS UN P'TIT MESSAGE</h1>
<div class="msg">
<?php if (!empty($msg)) {
    echo "<h2>$msg</h2>";
} ?>
</div>
<form method="POST">
    <div class="md-3">
    <label for="name" class="form-label">Nom</label>
    <input type="text" class="form-control" name="name" id="name"><br>
    </div>
    <div class="md-3">
    <label for="email" class="form-label">Adresse email </label>
        <input type="email" class="form-control" name="email" id="email">
        <br>
    </div>
    <div class="md-3">
    <label for="message" class="form-label">Message</textarea></label>
        <textarea name="message" class="form-control" id="message" rows="8" cols="20"></textarea>
        <br>
    <label for="dept"></label>
       <br>
    </div>

    <div class="d-grid gap-2 col-6 mx-auto">
        <input class="btn " type="submit" value="envoyer"></input>
    </div>



</form>

</body>
</html>

<?php include 'footer.php'; ?>