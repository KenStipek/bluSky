<html>
	<head>
	</head>
	<body>
		<form method="post" action="/index.php/login/login">
			<input type="text" name="email"></input><br />
			<input type="password" name="password"></input><br />
			<button type="submit">Login</button>
		</form>
		<p><?php echo $post_data ?></p>
	</body>
</html>
