<?php 
    if(isset($_POST['submit'])){
        $to = "jed34@njit.edu";
        $from = $_POST['email'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $subject = "Jed34 Website Form Submission";
        $subject2 = "Jed34 Website: Copy of your form submission";
        $message = $first_name . " " . $last_name . " wrote the following on your website:\n\n" . $_POST['message'];
        $message2 = "Here is a copy of your message to John:\n\n" . $_POST['message'];

        $headers = "From:" . $from;
        $headers2 = "From:" . $to;
        mail($to,$subject,$message,$headers);
        mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender

        echo '<script language="javascript">';
        echo 'alert("Mail Sent. Thank you ' . $first_name . '")';
        echo '</script>';
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>John Daudelin</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/one-page-wonder.css" rel="stylesheet">
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">John Daudelin</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#experience">Experience</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Full Width Image Header -->
    <header class="header-image">
        <div class="headline">
            <div class="container">
                <h1>Get to Know</h1>
                <h2>John Daudelin</h2>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <hr class="featurette-divider">

        <!-- About Featurette -->
        <div class="featurette" id="about">
            <img class="featurette-image img-circle img-responsive pull-right" src="pictures/headshot3.png">
            <h2 class="featurette-heading">I am a Junior
                <span class="text-muted">majoring in Computer Science</span>
            </h2>
            <p class="lead"></br>I come from a big family, and I'm super competitive. During my time at NJIT, I've had the opportunity to serve as treasure
	    of NJIT's nationally recognized ACM chapter. I'm also a classrom assistant for CS107.
	    </br></br>
	    Besides coding, my favorite hobbies include guitar, ping pong, Spikeball,  pig latin, and Agar.io.</p>
        </div>

        <hr class="featurette-divider">

        <!-- Experience Featurette -->
        <div class="featurette" id="experience">
            <img class="featurette-image img-circle img-responsive pull-left" src="pictures/Splash.png">
            <h2 class="featurette-heading">My Coding Experience
                <span class="text-muted">Includes...</span>
            </h2>
	  
            <p class="lead">
                </br>
	        Java </br>
	        JavaScript/TypeScript/React, HTML, CSS/Sass </br>
		PHP </br> 
	        C/C++ </br>
	        Python </br>
	    	Linux Shell Scripting (Bash, Zsh) </br>
		XML/JSON </br>
		SQL </br>
		Git </br>
            </p>
        </div>

        <hr class="featurette-divider">

       <!-- Contact Featurette -->
        <div class="featurette" id="contact">
            <img class="featurette-image img-circle img-responsive pull-right" src="pictures/contact.jpg">
            <h2 class="featurette-heading">To contact me...
            </h2>
			</br></br>
			<form method="post" action="index.php">
				<table width="485px">
					<tr>
						<td valign="top">
							<label for="first_name">First Name</label>
						</td>
						<td valign="top">
							<input  type="text" name="first_name" maxlength="50" size="30">
						</td>
					</tr>
					 
					<tr>
						<td valign="top">
							<label for="last_name" style="margin-top:10px;">Last Name</label>
						</td>
						<td valign="top">
							<input  type="text" name="last_name" maxlength="50" size="30" style="margin-top:10px;">
						</td>
					</tr>
					
					<tr>
						<td valign="top">
							<label for="email" style="margin:10px 10px 0px 0px;">Email Address</label>
						</td>
						<td valign="top">
							<input  type="text" name="email" maxlength="80" size="30" style="margin-top:10px;">
						</td>
					</tr>
					
					<tr>
						<td valign="top">
							<label for="message" style="margin-top:10px;">Message</label>
						</td>
						<td valign="top">
							<textarea  name="message" maxlength="1000" cols="50" rows="6" style="margin-top:10px"></textarea>
						</td>
					</tr>
					
					<tr>
						<td colspan="2" style="text-align:right">
							<input type="submit" name="submit" value="Submit">
						</td>
					</tr>
					
				</table>
			</form>
			
        </div>

        <hr class="featurette-divider">

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

