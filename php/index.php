<?php session_start();// Starting Session ?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Document</title>
	<link href="https://fonts.googleapis.com/css?family=Lemonada|Muli" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
	<style>
		*{
			font-family: Muli, sans-serif;
            text-align: center;
		}
        h2 {
            font-family: Lemonada, cursive;
        }
        
	</style>
</head>
<body>
<!-- php inject our Navigation using the require method -->
<?php require_once "nav.php"; ?>

<!-- Continue HTML -->
<h2>Vowlie</h2>
<p>Welcome to Vowlie!  We are a site where you can connect with other people based on shared values so you will be able to create meaningful connections and stronger relationships with new people in your life.  To sign up just hit the REGISTER button above.  It only takes seconds and you can be on your way to a new adventure!</p>



</body>
</html>