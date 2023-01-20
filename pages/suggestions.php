<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>ACADEMIA - Suggestions</title>
</head>

<body>
    <style>
        body {
            background-image: url('https://wallpapercave.com/wp/j77l1TC.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            color: #FFFFFF;
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
                        <a class="nav-link active style= color:red" href="/SRMS/index.php">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $desc = $_POST['desc'];


        // Connecting to the Database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "contacts";


        // Create a connection
        $conn = mysqli_connect($servername, $username, $password, $database);


        // Die if connection was not successful
        //if (!$conn)
        //    die("Sorry we failed to connect: " . mysqli_connect_error());
        //else
        //    echo "Connection was successful<br>";
        // Submit these to a database
        //sql query to be executed  
        // earlier--> $sql = "INSERT INTO `phptrip` (`name`, `dest`) VALUES ('$name', '$destination')";
        $sql = "INSERT INTO `contacts` ( `sno`,`name`, `email`, `concern`, `date`) VALUES (NULL,'$name', '$email', '$desc', current_timestamp())";
        $result = mysqli_query($conn, $sql);

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


    ?>

    <div class="container mt-3">
        <h1 style="color:black">Thank you for your Suggestions (●'◡'●)</h1>
        <form action="/srms/pages/suggestions.php" method="post">
            <div class="form-group col-3">
                <label for="name" style="color:black">Name</label>
                <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
            </div>
            <div class="form-group col-4">
                <label for="email" style="color:black">Email Address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                <small id="emailHelp" style="color:black" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group col-8">
                <label for="pass" style="color:black">Your Suggestions (max 500 words)</label>
                <textarea class="form-control" name="desc" id="" cols="30" rows="10"></textarea>
                <small id="emailHelp" style="color:black" class="form-text text-muted">Your Valuable Inputs will help us improve</small>
            </div>

            <button type="submit" class="btn btn-primary"> Submit</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
</body>

</html>