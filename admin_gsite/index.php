<?php

include 'generator_admin.php';


if (isset($_POST['generate']))
{

$ga = new GeneratorAdmin();
$ga->clean_dir();
$ga->generate();

}



?>


<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <!--  
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
  -->
</head>
<body>

  <h1> Je suis dans le dossier admin_gsite</h1>


	<form action="index.php" method="post" accept-charset="utf-8">	  		
		   <p><input name="generate" type="submit" value="Générer admin"/></p>
	</form>

</body>
</html>