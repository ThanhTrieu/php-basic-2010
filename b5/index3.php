<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ajax-PHP</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
				<h3 class="text-center">Tim kiem thong tin ca sy</h3>
				<div class="form-group">
					<input  class="form-control" id="keyword" />
					<button type="button" class="btn btn-primary btn-block mt-2" id="btnSearch">
						Tim kiem
					</button>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col text-center">
				<img id="loading" style="display:none;" src="img/loading.gif" />
				<div id="results"></div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>

	<script type="text/javascript">
		$(function(){
			$('#btnSearch').click(function(){
				let key = $('#keyword').val().trim();
				//alert(keyword);
				if(key !== ''){
					// xu ly ajax search
					$.ajax({
						url: "server/search.php",
						type: "POST",
						data: {keyword: key},
						beforeSend: function(){
							$('#loading').show();
						},
						success: function(data){
							$('#loading').hide();
							// bien data trong ham success chinh la du lieu ma ben server da response ve
							$('#results').html(data);
						}
					});
				}
				return false;
			});
		});
	</script>
</body>
</html>	