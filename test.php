<html>
  <head>
    <title>test</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>
  <body>
  <?php
	 echo '<p>Hello !</p>';
	 $email = "bob.dupont@france.com";
	//test l’e-mail avec la constante FILTER_VALIDATE_EMAIL
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo("$email est une adresse e-mail valide");
	} else {
		echo("$email n’est pas une adresse e-mail valide ");
	}

  ?>
   
  </body>
</html>

