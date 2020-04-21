<?php  if (count($errors) > 0) : ?>
	<!DOCTYPE html>
	<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/register.css">
		<title></title>
	</head>
	<body>
	<div class="errorregister">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>
	</body>
	</html>
  