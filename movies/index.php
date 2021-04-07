<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Search movies</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row my-3">
			<div class="col-12 col-sm-12 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
				<div class="input-group mb-3">
				  <input type="text" class="form-control" placeholder=" movie's name " id="movieName">
				  <div class="input-group-append">
				    <button class="btn btn-primary" id="searchMovie">Search</button>
				  </div>
				</div>
			</div>
		</div>
		<div class="row my-3">
			<div class="col text-center">
				<img id="loading" style="display:none;" src="images/loading.gif" />
			</div>
		</div>
		<div id="result"></div>
	</div>

	<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$('#searchMovie').click(function(){
				let movieName = $('#movieName').val().trim();
				if(movieName !== ''){
					$.ajax({
						url: 'search.php',
						type: 'post',
						data: { name: movieName },
						beforeSend: function(){
							$('#loading').show();
							$('#result').html('');
						},
						success: function(data) {
							$('#loading').hide();
							$('#result').html(data);
						}
					});
				}
			});
		});
	</script>
</body>
</html>