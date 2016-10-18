<!DOCTYPE html>
<html>
<head>
	<title>Siteweb Home</title>
	<meta charset="utf-8"/>
	<meta name="description" content="description de 255 caractères"/>
	<script type="text/javascript" src="js/jquery-2.0.0.min.js"></script>

	<style type="text/css" src="css/styles.css"></style>
</head>
<body>
	<h1>Home</h1>
	<p>Paragraphe 1, du texte pour commencer la journée</p>
	<br/>
	<br/>
	<ul id="list">
		<li>Ligne 1</li>
		<li>Ligne 2</li>
		<li>Ligne 3</li>
	</ul>
	<br/>
	<br/>	
	<form method="post">
		<label>Username:</label>
		<input type="text" id="username" name="username" value=""/>
		<br/>
		<label>Password:</label>
		<input type="password" id="password" name="password" value=""/>
		<br/>
		<input type="button" value="submit" onclick="loginAjax()"/>
	</form>
	
	<script type="text/javascript" src="js/scripts.js"></script>
	
</body>
</html>

