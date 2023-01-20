<?php
session_start();
if (!(isset($_SESSION['login']))) {
	header('location:../index.php');
}
if (isset($_POST['submit'])) {
	include('../config/DbFunction.php');
	$obj = new DbFunction();
	$obj->create_course($_POST['course-short'], $_POST['course-full'], $_POST['cdate']);
}
$servername = "localhost";
$username = "root";
$password = "";
$database = "srms";
// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn) {
	die("Sorry we failed to connect: " . mysqli_connect_error());
}
//echo $_SERVER['REQUEST_METHOD'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	//if (isset($_POST['sno'])) {
	// Update the record
	//$sno = $_POST["snoEdit"];
	$name = $_POST["name"];
	$gname = $_POST["gname"];
	$course = $_POST["course"];
	$year = $_POST["year"];
	$section = $_POST["section"];
	$roll = $_POST["roll"];
	$regnum = $_POST["regnum"];
	$age = $_POST["age"];
	$m1 = $_POST["m1"];
	$m2 = $_POST["m2"];
	$m3 = $_POST["m3"];
	$m4 = $_POST["m4"];
	$m5 = $_POST["m5"];
	$attperc = $_POST["attperc"];
	$email = $_POST["email"];
	// Sql query to be executed
	$sql = "INSERT INTO `details` ( `name`, `gname`, `course`, `year`, `section`, `roll`, `regnum`, `age`, `m1`, `m2`, `m3`, `m4`, `m5`, 
	`attperc`, `email`)  VALUES ('$name', '$gname','$course', '$year','$section', '$roll','$regnum', '$age','$m1', '$m2','$m3', 
	'$m4','$m5', '$attperc','$email')";
	$result = mysqli_query($conn, $sql);
	/*
	echo $result;
	if ($result) {
		$insert = true;
		echo "Successful!";
	} else {
		echo "Technical Error! Try Again Later... ---> " . mysqli_error($conn);
	}
	*/
	//}
	// Add a new trip to the trip table in the database
	if ($result) {
		echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
	<strong>Success!</strong> Your entry has been submitted successfully!
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	  <span aria-hidden="true">×</span>
	</button>
  </div>';
	} else {
		echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
	<strong>Technical Issue!</strong> Your entry was not submitted successfully!
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	  <span aria-hidden="true">×</span>
	</button>
  </div>';
	}
}
//}
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style>
		.img-container {
			text-align: center;
			display: block;
		}
	</style>
	<title>ACADEMIA - Add Details</title>
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<li> </li>
		<a class="navbar-brand center" href="/srms/pages/home.php"><img src="/SRMS/images/white.svg" height="48px" alt=""></a>
		<div class="container-fluid">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="/srms/pages/home.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="/srms/pages/add-course.php">Add Details</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="/srms/pages/display.php">Display/Delete Details</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="/srms/pages/report.pdf">Report</a>
					</li>
					<li class="nav-item dropdown active">
						<a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							More Actions
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="/srms/pages/aboutus.php">About Us</a></li>
							<li>
								<hr class="dropdown-divider">
							</li>
							<li><a class="dropdown-item" href="/SRMS/pages/contactus.php">Contact Us</a></li>
							<li>
								<hr class="dropdown-divider">
							</li>
							<li><a class="dropdown-item" href="/SRMS/pages/suggestions.php">Suggestions</a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="/SRMS/index.php">Log Out</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container my-4">
		<h2>Add Details</h2>
		<form action="/SRMS/pages/add-course.php" method="POST">
			<div class="form-group col-5">
				<label for="name">Full Name</label>
				<input type="text" class="form-control col-2" placeholder="Eg - Aditya Bahl" id="name" name="name">
			</div>
			<div class="form-group col-5">
				<label for="gname">Guardian's Name</label>
				<input type="text" class="form-control col-3" placeholder="Eg - Shipra Bahl" id="gname" name="gname">
			</div>
			<div class="form-group col-4">
				<label for="course">Course</label>
				<input type="text" class="form-control " placeholder="Eg - B.tech" id="course" name="course">
				<label for="class">Year And Section</label>
			</div>
			<div class="form-group col-3">
				<div class="input-group">
					<input type="text" class="form-control col -2" placeholder="Eg - 2" id="year" name="year" aria-label="Class">
					<input type="text" class="form-control col -2" placeholder="Eg - B" id="section" name="section" aria-label="Section">
				</div>
			</div>
			<div class="form-group col-4">
				<label for="roll">Class Roll Number</label>
				<input type="text" class="form-control col-3" placeholder="Eg - 25" id="roll" name="roll">
			</div>
			<div class="form-group col-4">
				<label for="regnum">Registration Number(Unique)</label>
				<input type="text" class="form-control col-3" placeholder="Eg - 20021038" id="regnum" name="regnum">
			</div>
			<div class="form-group col-3">
				<label for="age">Age</label>
				<input type="text" class="form-control col-3" placeholder="Eg - 20" id="age" name="age">
			</div>
			<div class="form-group col-3">
				<label for="m1">Marks in Subject 1</label>
				<input type="text" class="form-control col-3" placeholder="Eg - 98" id="m1" name="m1">
			</div>
			<div class="form-group col-3">
				<label for="m2">Marks in Subject 2</label>
				<input type="text" class="form-control col-3" placeholder="Eg - 98" id="m2" name="m2">
			</div>
			<div class="form-group col-3">
				<label for="m3">Marks in Subject 3</label>
				<input type="text" class="form-control col-3" placeholder="Eg - 98" id="m3" name="m3">
			</div>
			<div class="form-group col-3">
				<label for="m4">Marks in Subject 4</label>
				<input type="text" class="form-control col-3" placeholder="Eg - 98" id="m4" name="m4">
			</div>
			<div class="form-group col-3">
				<label for="m5">Marks in Subject 5</label>
				<input type="text" class="form-control col-3" placeholder="Eg - 98" id="m5" name="m5">
			</div>
			<div class="form-group col-3">
				<label for="attperc">Attendance Percenatage</label>
				<input type="text" class="form-control col-3" placeholder="Eg - 98" id="attperc" name="attperc">
			</div>
			<div class="form-group col-6">
				<label for="email">Email Address</label>
				<input type="email" class="form-control col-4" id="email" placeholder="Eg - adityabahl12345@gmail.com" name="email" aria-describedby="emailHelp">
				<div id="emailhelp" class="form-text test-muted">For Sharing of Information Regarding the Activities and Events of Graphic Era University only</div>
			</div>

			<div class="mb-3 form-check ">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1">I have checked all the details prior to the submission of the form</label>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>

	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script>
	</script>
	<!-- Option 2: Separate Popper and Bootstrap JS -->
	<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>