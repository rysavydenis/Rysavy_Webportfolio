<?php 

//Message Variables
$msg = '';
$msgClass = '';


//Check for submit
if(filter_has_var(INPUT_POST, 'submit')) {
   //Get Form data 
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);


    //Check Required Fields 
    if(!empty($name) && !empty($email) && !empty($message)){
        //Passed
        //Check Email
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){


            //Failed
            echo "<h2 style='background-color:red;color:white;padding:20px;text-align:center;'>*Error: Please use a valid email*</h2>";
          
        }else {
            //Passed
            //Recipient Email
            $toEmail = 'contact@rysavyweb.de';
            $subject = ' Kontaktanfrage von :' .$name;
            $body = '<h2>Kontaktanfrage</h2>
                    <h4>Name</h4><p>' .$name .'</p>
                    <h4>Email</h4><p>' .$email . '</p>
                    <h4>Message</h4><p>' .$message.'</p>
                    ';

        //Email Headers 

            $headers = "MIME-Version:1.0" . "\r\n";
            $headers .="Content-Type:text/html;charset=UTF-8" ."\r\n";

        //Additional Headers
            $headers .= "From: " .$name. "<" .$email.">"."\r\n";

            if(mail($toEmail, $subject, $body, $headers)){

                //email Sent



                echo"<h2 style='background-color:green;color:white;padding:20px;text-align:center;'>Thank you $name, your Email has been sent!</h2>";
               


            } else {

                    // Failed

                echo"<h2 style='background-color:red;color:white;padding:20px;text-align:center;'>*Error : Your email was not sent!*</h2>";
          
            }






        }

        } else {  
            // Failed
            echo"<h2 style='background-color:red;color:white;text-align:center;padding:20px;'>*Error : Please fill out the Form*</h2>";
            
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="contact.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="icon" href="images/finalSketchsmaller.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Rysavy_Web||Contact</title>
</head>
<body>



<div class="topnav" id="myTopnav">
        <a href="index.html">Home</a>
        <a href="projects.html">Projects</a>
        <a href="about.html">About</a>
        <a href="contact.php" id="rightside">Contact</a>
        <a href="javascript:void(0);" class="icon" onclick=myFunction()>
            <i class="fa fa-bars"></i>
        </a>
</div>

       
 
    <main>


            <h1>Contact</h1>

            <div class="container">
            

                <?php if($msg != ''): ?>
                    <div style=" width:47vw;padding:20px;height:20px;font-weight:bold;color:white;background-color:red;"class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>

                <?php endif; ?>


          

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
              
              
                  <input value="<?php echo isset($_POST['name']) ? $name : '';?>" type="text" id="fname" name="name" placeholder="Your Name..">
                  
                  <input value="<?php echo isset($_POST['email']) ? $email : '';?>"type="text" id="femail" name="email" placeholder="Your Email">
              
                  <textarea id="subject" name="message" placeholder="Your Message.." style="height:200px"><?php echo isset($_POST['message']) ? $message : '';?></textarea>
              
                  <input type="submit" name="submit" value="Submit">
              
                </form>
              </div>

          

    </main>



  
    <div id="icons">
        <a target="_blank" href="https://www.facebook.com/denis.rysavy.140" class="fa fa-facebook"></a>
        <a target="_blank" href="https://github.com/rysavydenis?tab=repositories" class="fa fa-github"> </a>
        <a target="_blank" href="https://www.linkedin.com/in/denis-rysavy-3b1b9b193/" class="fa fa-linkedin"></a>
        <a target="_blank" href="https://www.youtube.com/channel/UC4vKqfzD2jUiUL7QaNr_-Ag?view_as=subscriber" class="fa fa-youtube"></a>
    </div>

    <footer id="footer">
            <p>&copy; 2019 Denis Rysavy<p>
        </footer>


<script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
            x.className += " responsive";
            } else {
            x.className = "topnav";
            }
        }

var button = document.querySelector("button");
var isColored = false;

button.addEventListener("click", function(){
if(isColored){
        document.body.style.background = "#cef6f5";
        document.body.style.color = 'black';
        isColored = false;
    } else{
        document.body.style.background = "#343434";
        document.body.style.color = '#cef6f5';
        isColored = true;
    }
});


</script>  
</body>
</html>