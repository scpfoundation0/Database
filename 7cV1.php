<?php
session_start(); 
if (isset($_SESSION['count']) && ($_SESSION['count'] > 300)) {
	header('Location: https://www.google.com/search?q=access+denied+to+the+database');
} else {
?> 
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Texte</title>
<style>
body {
  
  background-image: url(https://media.discordapp.net/attachments/974398728251269190/1026098916787224626/wp5238065.jpg);
  text-shadow: white 0px 0px 2px;
  font-size: 16px;
  background-size: 1370px;}
 div {
  	padding-left: 550px;
  	padding-top: 250px;
  	padding-right: 0px;
  }

p{
color: grey;
}
</style>
</head>
<body>
	<?php
	$password = 'ESAkYpUhByrsxSwfIyhBcVdqePHx2QqpIyV';
	if ((isset($_POST['password']) && ($_POST['password'])) != $password) {
		if (!isset($_SESSION['count'])) {
			$_SESSION['count'] = 0;
		} else {
			$_SESSION['count']++;
		}
	?> 

<div><form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
<p><label for="password">	Key :</label> <input type="password" title="Key" name="password" /></p> 
<p><input type="submit" name="submit" value="Access" /></p> 
</form></div>
	<?php
	} else { ?> 
<p>Voici le texte.</p>
<?php 
	}
} 
?>
</body>
</html>