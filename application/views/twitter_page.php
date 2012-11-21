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
						<h1>Twitter Feeds</h1>
					</div>
					<p>Enter valid twitter username to see their latest tweets!</p>

					<div id="alert" class="alert">
						<strong>Alert:</strong> <p id="alert">test</p>
					</div>
					<form id="twitter" method="post" action="/index.php/twitter/twitter">
						<div class="input-prepend">
							<span class="add-on">@</span>
							<input type="text" name="handle" id="handle" class="span3" placeholder="Twitter Username"></input>
						</div>
						<button class="btn" type="submit">Get Tweets</button>
					</form>
					<div id="tweets"></div>
				</div>
			</div>
		</div>

		<script type='text/javascript' src='/site/assets/js/jquery.min.js'></script>
		<script type='text/javascript' src='/site/assets/js/script.js'></script>
		<script type='text/javascript' src='/site/assets/js/bootstrap.min.js'></script>
	</body>
</html>
