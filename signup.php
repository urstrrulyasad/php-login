<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>

<div class="container ">
	<form class="form" id="form-signup" action="controllers/requestController.php" method="post">
<div class="card">
	<div class="card-header">
		<h6 class="card-title text-center text-success">Registration Form</h6>
	</div>
	<div class="card-body">
		
		<input type="hidden" name="pageRequest" value="signup">
		<div class="form-group">
			<input type="text" name="FIRST_NAME" id="first-name" placeholder="Enter First Name" class="form-control" required>
		</div>

	<div class="form-group">
				<input type="text" name="LAST_NAME" id="last-name" placeholder="Enter Last Name" class="form-control" required>
		</div>
	
	<div class="form-group">
				<input type="email" name="EMAIL" id="email" placeholder="Enter Email" class="form-control" required>
		</div>

		<div class="form-group">
				<input type="text" name="USER_NAME" id="user-name" placeholder="Enter User Name" class="form-control" required>
		</div>
		<div class="form-group">
				<input type="password" name="PASSWORD" id="password" placeholder="Enter User Name" class="form-control" required>
		</div>
		

		
		<div class="row">
			
				<div class="col-md-6 col-xs-6">
				<button class="form-control btn-warning" onclick="return fillFormData()" type="button"> Populate Data</button>
				</div>
				<div class="col-md-6 col-xs-6">
				<button class="form-control btn-warning" onclick="return clearFormData()" type="button"> Clear Data</button>
				</div>
		</div>

		<div class="form-group mt-5">
			<button class="form-control btn-success" type="submit"> Sign Up</button>
		</div>
	</div>
</div>
</form>


</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<script type="text/javascript">
	function fillFormData(){
		$("#first-name").val(getRandomString(5));
		$("#last-name").val(getRandomString(5));
		$("#email").val(getRandomEmail("@gmail.com",15));
		$("#user-name").val("");
		$("#password").val("password");
		return false;
	}
	function clearFormData(){

		$("#first-name").val("");
		$("#last-name").val("");
		$("#email").val("");
		$("#user-name").val("");
		$("#password").val("");
		return false;
	}

	function getRandomString(length) {
	   var result           = '';
	   var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
	   var charactersLength = characters.length;
	   for ( var i = 0; i < length; i++ ) {
	      result += characters.charAt(Math.floor(Math.random() * charactersLength));
	   }
	   return result;
	}

	function getRandomEmail(domain,length)
	{
	    var text = "";
	    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

	    for( var i=0; i < length; i++ )
	        text += possible.charAt(Math.floor(Math.random() * possible.length));

	    return text + domain;
	}

</script>
</body>
</html>