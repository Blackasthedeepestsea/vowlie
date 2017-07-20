<?php session_start();// Starting Session ?>
<!--start our HTML -->
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="Cache-Control" content="no-store" />
	<title>Vowlie</title>
	<link href="https://fonts.googleapis.com/css?family=Lemonada|Muli" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css">
</head>
    <style>
        * {
            font-family: Muli, sans-serif;
            text-align: center;
            background: black;
            color: mediumpurple;
        }
        
        h2 { 
            font-family: Lemonada, cursive;
            color: rebeccapurple;
        }
    </style>
<body>

<!-- php inject our Navigation using the require method -->
<?php require_once "nav.php"; ?>

<!-- Continue HTML -->
<h2>REGISTRATION</h2>
<p><span class="error">* required field.</span></p>

<!--
3 new attributes needed to process user inputs.
METHOD accepts either 'post' or 'get.' We use post to store data privately.
ACTION tells the form where to send the data. This will be where the user lands when submit is clicked.
ENCTYPE specifies how form data should be encoded. We specify Multipart to carry media from the file field.
Pay attention to the INPUT NAME ATTRIBUTES, 'name', 'email', 'user', 'pw', and 'photo.' This is how we identify the bits of data in the next file.
-->
<form method="post" action="postprocess.php" enctype ='multipart/form-data'>
<label>Name
	<input type="text" name="name" required><span class="error">*</span><br>
</label>
<br>
<label>E-mail
	<input type="email" name="email" required><span class="error">*</span><br>
</label>
<br>
<label>User Name
	<input type="text" name="user" required><span class="error">*</span><br>
</label>
<br>
<label>Password
	<input type="password" name="pw" required><span class="error">*</span><br>
</label>
<br>
<label>Value 1
    <input type="radio" name="value" value="health">Health: fitness, going to the gym, working out, yoga, pilates, healthy eating, if you value the body choose this.<br>
    <input type="radio" name="value" value="spirituality">Spirituality/Religion: going to a place of worship, daily rituals of worship, prayer, mantra, meditation, if you value the world of spirit choose this.<br>
    <input type="radio" name="value" value="creativity">Creativity: creating visual art, playing an instrument, going to see live music, going to museums, going to theatre or films, creative writing, if you value expression choose this.<br>
    <input type="radio" name="value" value="excitement">Excitement: bungee jumping, rockclimbing, racing cars, competing in sports, jumping out of airplanes, if you value activities that give you a rush choose this.<br>
    <input type="radio" name="value" value="relationship">Relationship:
    family, friends, community activism, if you put much time and effort into establishing connections with the people around you choose this.<br>
    <input type="radio" name="value" value="construction">Construction: building houses, making furniture, computer programming, robotics, if you value putting things together to create useful things choose this.<br>
<br>
</label>
<label>Value 2
    <input type="radio" name="value2" value="health">Health<br>
    <input type="radio" name="value2" value="spirituality">Spirituality/Religion<br>
    <input type="radio" name="value2" value="creativity">Creativity<br>
    <input type="radio" name="value2" value="excitement">Excitement<br>
    <input type="radio" name="value2" value="relationship">Relationship<br>
    <input type="radio" name="value2" value="construction">Construction<br>
<br>
</label>
<label>Value 3
    <input type="radio" name="value3" value="health">Health<br>
    <input type="radio" name="value3" value="spirituality">Spirituality/Religion<br>
    <input type="radio" name="value3" value="creativity">Creativity<br>
    <input type="radio" name="value3" value="excitement">Excitement<br>
    <input type="radio" name="value3" value="relationship">Relationship<br>
    <input type="radio" name="value3" value="construction">Construction<br>
<br>
</label>
<br>
<label>Photo:
	<input type="file" name="photo"><br>
</label>
<br>
<input type="submit" name="submit" value="Submit">
</form>

</body>
</html>