<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Ken Stipek's BluSky Demo App</title>

		<link rel="stylesheet" type="text/css" href="/site/assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/site/assets/css/bootstrap-responsive.min.css">
		<link rel="stylesheet" type="text/css" href="/site/assets/css/style.css">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

	</head>
	<body>
		<div id='container'>
			<div class='row'>
				<div class="span6 offset4" id="data-box">
					<div class="page-header">
						<h1>Login</h1>
					</div>
					<div id="alert" class="alert" style="display: <?php echo $show_alert ? 'block' : 'none' ?>">
						<strong>Alert:</strong> <p id="alert"><?php echo $alert_data ?></p>
					</div>
					<form class="form-horizontal" id="login" method="post" action="/index.php/login/login">
						<div class="control-group">
							<label class="control-label" for="email">Email</label>
							<div class="controls">
								<input class="span3" type="text" name="email" id="email" placeholder="Email">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="Password">Password</label>
							<div class="controls">
								<input class="span3" type="password" name="password" id="Password" placeholder="Password">
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<button type="submit" class="btn">Sign in</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

		<script type='text/javascript' src='/site/assets/js/jquery.min.js'></script>
		<script type='text/javascript' src='/site/assets/js/script.js'></script>
		<script type='text/javascript' src='/site/assets/js/bootstrap.min.js'></script>
	</body>
</html>
