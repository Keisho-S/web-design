<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Keisho G8" />
    <meta name="description" content="Project" />
    <title>Subscribe to Newsletter</title>
    <link rel="shortcut icon" href="img/icon.jpg" type="image/x-icon" />
    <!-- https://flyclipart.com/camera-classic-old-vintage-icon-old-camera-png-95019 -->
    <link rel="stylesheet" href="css/styles.css" />
  </head>
	<body class="subscribe">
		<main>
            <h3>Subscribe to Newsletter</h3>
			<h1>Thank You! Information Updated</h1>
<!-------------------------------------- php-------------------------------------------------------------------------------->
<?php
    

    $email = $_GET['emailAddress'];
    echo('<p>E-MAIL: '.$email.'</p>');
   
?>
<!-------------------------------------- php ending-------------------------------------------------------------------------------->
        <form id="" action="index.php"  method="post">
            <div class="button">
                <button type="submit">Return</button>
            </div>  
        </form>
		</main>
        <footer>
            <p><small>©G8KS. All rights reserved</small></p>
        </footer>
	</body>
</html>
