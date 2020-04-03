<!DOCTYPE html>
<html>
<head>
	<title>Log In </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>

<div class="container ">
	<form class="form" id="form-login" action="controllers/requestController.php" method="post">
<div class="card">
	<div class="card-header">
		<h6 class="card-title text-center text-success">Registration Form</h6>
	</div>
	<div class="card-body">
		
		<input type="hidden" name="pageRequest" value="login">
		

		<div class="form-group">
				<input type="text" name="USER_NAME" id="user-name" placeholder="Enter User Name" class="form-control" required>
		</div>
		<div class="form-group">
				<input type="password" name="PASSWORD" id="password" placeholder="Enter User Name" class="form-control" required>
		</div>
		

		<div class="form-group mt-2">
			<button class="form-control btn-success" type="submit"> Log In</button>
		</div>
	</div>
</div>
</form>


</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>