<?php 

$to = "rysavydenis@gmail.com";
$Subject ="Message from rysavyweb.com";

$name = $_POST['name'];
$email = $_POST['email']; 
$message = $_POST['message'];

$headers .= "Content-type: text/html;\r\n";
$headers .= "From: $email";

mail ($to, $Subject, $message, $headers);
echo "Thank you $name, Your Message has been sent !";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="icon" href="images/finalSketchsmaller.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <title>Rysavy_Web Contact</title>
</head>
<body>



<div class="topnav" id="myTopnav">
        <a href="index.html">Home</a>
        <a href="projects.html">Projects</a>
        <a href="about.html">About</a>
        <a href="contact.html" id="rightside">Contact</a>
        <a href="javascript:void(0);" class="icon" onclick=myFunction()>
            <i class="fa fa-bars"></i>
        </a>
</div>
</body>
</html>


  
