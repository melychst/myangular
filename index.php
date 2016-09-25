<?php 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js_"></script>
	<script src="angular/angular.js"></script>	
</head>
<body ng-app="">
	<?php echo "Hello World" ?>
	<p>Name : <input type="text" ng-model="name"></p>
 	<h1>Hello {{name}}</h1>
</body>
</html>