<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<?php include 'links/links.php'; ?>

	<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.topnav a:hover {
  background-color: olive;
  color: white;
}



</style>

</head>
<body>
	<div class="topnav" id="myTopnav">
  <a href="admin.php" class="active">Admin</a>


</div>
<br>
<br>

<div class="container register">
	<div class="row">
		
		<div class="col-md-9 register-right">
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					<h3 class="register-heading">Fill Up the Form</h3>

					<form action="upload.php" method="POST" enctype="multipart/form-data">
						<div class="row register-form">
							<div class="col-md-6">

								<div class="form-group">
									<input type="text" class="form-control" placeholder="enter your name" name="name" value="" style="width: 200px;height: 40px;border-radius: 20px;" required/>

								</div>
							

								<div class="form-group">
									<input type="email" class="form-control" placeholder="enter your email" name="email" value="" style="width: 200px;height: 40px;border-radius: 20px;" required/>

								</div>

								<div class="form-group">
									<input type="text" class="form-control" placeholder="enter your number" name="number" value="" style="width: 200px;height: 40px;border-radius: 20px;" required/>

								</div>




								<div class="form-group">
									<input type="file" class="form-control" name="photo" value="" style="width: 250px;height: 40px;border-radius: 20px;" required/>

								</div>


								<div class="form-group">
									<input type="submit" class="btnRegister" name="submit" value="Register" style="width: 200px;height: 40px;border-radius: 20px;"/>

								</div>
							





							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>




</body>
</html>