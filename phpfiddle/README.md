<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<title>Home</title>
</head>
<body style="background-image: url('assets/images/background.png'); background-size: 100%;">
	<div class="container">
		<div class="card-panel" style="padding-top: 20px;!important" >
			<h3 class="blue-text text-darken-2">Phpfiddle</h3>
		</div>

		<form class="card-panel white" id="form" method="post" action="/exec" >
		  <div class="row">

		        <div class="input-field col s6">
	 			 <i class="material-icons prefix">code</i>
		          <textarea spellcheck="false" id="textarea1" name="code" class="materialize-textarea" style="height: 300px;color: rgb(0,0,100);"></textarea>
		        </div>
		        <div class="col s2">
		  			<button type="submit" class="btn-floating blue pull-6"><i class="material-icons">play_circle_outline</i></button> 
		  		</div>
		  		<div class="col s6">
		  			<div class="card white" style="height: 250px;">
			  			<hr>
						<h6 id="result" class="card-content"></h6>
						<hr>
		  			</div>
		  		</div>
		  </div>
		</form>

		<footer>
			<div class="card-panel white">
				<div class="row">
					<div class="col"><a href="https://www.php.net/">documentation</a></div>
					<div class="col"><a href="https://github.com/Fernando-Linhares">github</a></div>
					<div class="col"><a href="https://github.com/Fernando-Linhares/portifolio-backend-dev">portifolio</a></div>
				</div>
			</div>
		</footer>
	</div>

	<script src="assets/js/app.js"></script>
</body>
</html>
