<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>AJAX - BASIC</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#btnSubmit').on('click',function(){
				var a = $('#a').val();
				var b = $('#b').val();
				$.get('a.php',{a,b},function(data){
					$('#result').html(data);
				})	
			});
		})
			
	</script>
</head>
<body>
	<!-- <div class="container">
		<form action="" method="post" role="form">
		<legend>Form title</legend>
	
		<div class="form-group">
			<label for="">A</label>
			<input type="text" class="form-control" id="a" name="a" placeholder="Nhập a">
		</div>
	
		<div class="form-group">
			<label for="">B</label>
			<input type="text" class="form-control" id="b" name="b" placeholder="Nhập b">
		</div>
	
		<button type="submit" id="btnSubmit" class="btn btn-primary">Submit</button>
		<br><br>
		
	</div>
	</form>
	<label for="">Kết Quả</label>
		<h2 id="result"></h2> -->
		<input type="text" name="a" id="a"><br>
		<input type="text" name="b" id="b"><br>
		<input type="button" value="Send" id="btnSubmit"><br>
		<h2 id="result"></h2>

</body>
	
</html>