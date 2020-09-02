<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<?php include 'links/links.php'; ?>

<style>
	
</style>
</head>
<body>

<div class="container">
	<div class="row d-flex justify-content-center">
		<div class="col-lg-11 col-12">
			<div class="table-responsive">
				<table class="table-striped text-center table-bordered"   width="1000" height="100">
					<thead class="bg-dark text-white">
						<tr>
							<th class="py-3 text-white ">ID</th>
							<th class="py-3 text-white ">Name</th>
							<th class="py-3 text-white ">Email Id</th>
							<th class="py-3 text-white ">Number</th>
							<th class="py-3 text-white ">Photo</th>
							
						</tr>
					</thead>
			<tbody>
				<?php

				include 'dbcon.php';
				$selectquery = "select * from registration";
				$query = mysqli_query($con,$selectquery);

				while ($result = mysqli_fetch_array($query)) {
					?>
					<tr>
						<td><?php echo $result['id']; ?></td>
							<td><?php echo $result['name']; ?></td>
								<td><?php echo $result['email']; ?></td>
									<td><?php echo $result['number']; ?></td>
										<td><img src="<?php echo $result['pic']; ?>" width="100" height="50"></td>
										
					</tr>
					<?php
				}

				
?>

			</tbody>
				</table>
			</div>
		</div>
	</div>
</div>




</body>
</html>