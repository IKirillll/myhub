<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>quest 1</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
	<h3>Проверка високосного года</h1>
	<form  id="data" method="POST">

		<input type="text" name="year">
		<input type="submit" name="send">
		<p id="data_p"></p>
	</form>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#data').submit(function(event) 
		{
			event.preventDefault();
			$.ajax(
			{
				type: $(this).attr('method'),
				url: 'quest1_work.php',
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData: false,
				success: function(html)
				{
				$('#data_p').html(html);
				}
			})
		})
		})
	</script>
</body>
</html>