<?php
// INSERT INTO `notes` (`sno`, `title`, `description`, `tstamp`) VALUES (NULL, 'But Books', 'Please buy books from Store', current_timestamp());
$insert = false;
$update = false;
$delete = false;
// Connect to the Database 
$servername = "localhost";
$username = "root";
$password = "";
$database = "srms";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn)
    die("Sorry we failed to connect: " . mysqli_connect_error());
else
    // echo "Connection was successful<br>";

    if (isset($_GET['delete'])) {
        $sno = $_GET['delete'];
        $delete = true;
        $sql = "DELETE FROM `details` WHERE `sno` = $sno";
        $result = mysqli_query($conn, $sql);
    }
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['snoEdit'])) {
        // Update the record
        $name = $_POST["snoEdit"];
        $name = $_POST["nameEdit"];
        $gname = $_POST["gnameEdit"];
        $course = $_POST["courseEdit"];
        $year = $_POST["yearEdit"];
        $section = $_POST["sectionEdit"];
        $roll = $_POST["rollEdit"];
        $regnum = $_POST["regnumEdit"];
        $age = $_POST["ageEdit"];
        $m1 = $_POST["m1Edit"];
        $m2 = $_POST["m2Edit"];
        $m3 = $_POST["m3Edit"];
        $m4 = $_POST["m4Edit"];
        $m5 = $_POST["m5Edit"];
        $attperc = $_POST["attpercEdit"];
        $email = $_POST["emailEdit"];

        // Sql query to be executed
        // $sql = "UPDATE `details` SET `title` = '$title' , `description` = '$description' `title` = '$title' , `description` = '$description'
        //`title` = '$title' , `description` = '$description' `title` = '$title' , `description` = '$description' `title` = '$title' , `description` = '$description'
        // `title` = '$title' , `description` = '$description' WHERE `notes`.`sno` = $sno";
        // $result = mysqli_query($conn, $sql);

        $sql = "UPDATE INTO `details` ( `name`, `gname`, `course`, `year`, `section`, `roll`, `regnum`, `age`, `m1`, `m2`, `m3`, `m4`, `m5`, 
	    `attperc`, `email`)  VALUES ('$name', '$gname','$course', '$year','$section', '$roll','$regnum', '$age','$m1', '$m2','$m3', '$m4','$m5',
        '$attperc','$email')WHERE `notes`.`sno` = $sno";
        $result = mysqli_query($conn, $sql);


        if ($result) {
            $update = true;
        } else {
            echo "We could not update the record successfully";
        }
    } else {
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
        $sql = "INSERT INTO INTO `details` ( `name`, `gname`, `course`, `year`, `section`, `roll`, `regnum`, `age`, `m1`, `m2`, `m3`, `m4`, `m5`, 
	    `attperc`, `email`)  VALUES ('$name', '$gname','$course', '$year','$section', '$roll','$regnum', '$age','$m1', '$m2','$m3', '$m4','$m5',
        '$attperc','$email')";
        $result = mysqli_query($conn, $sql);


        if ($result) {
            $insert = true;
        } else {
            echo "The record was not inserted successfully because of this error ---> " . mysqli_error($conn);
        }
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">


    <title>ACADEMIA - Edit/Delete Details</title>

</head>

<body>


    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit this Note</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="/SRMS/pages/display.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="snoEdit" id="snoEdit">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="nameEdit" name="nameEdit" aria-describedby="emailHelp">
                        </div>

                        <div class="form-group">
                            <label for="gname">Guardian's Name</label>
                            <textarea class="form-control" id="gnameEdit" name="gnameEdit" rows="1"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="course">Course</label>
                            <input type="text" class="form-control" id="courseEdit" name="courseEdit" aria-describedby="emailHelp">
                        </div>

                        <div class="form-group">
                            <label for="year">Year</label>
                            <textarea class="form-control" id="yearEdit" name="yearEdit" rows="1"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="section">Section</label>
                            <input type="text" class="form-control" id="sectionEdit" name="sectionEdit" aria-describedby="emailHelp">
                        </div>

                        <div class="form-group">
                            <label for="roll">Roll Number</label>
                            <textarea class="form-control" id="rollEdit" name="rollEdit" rows="1"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="regnum">Registration Number</label>
                            <input type="text" class="form-control" id="regnumEdit" name="regnumEdit" aria-describedby="emailHelp">
                        </div>

                        <div class="form-group">
                            <label for="age">Age</label>
                            <textarea class="form-control" id="ageEdit" name="ageEdit" rows="1"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="m1">Subject 1 Marks</label>
                            <input type="text" class="form-control" id="m1Edit" name="m1Edit" aria-describedby="emailHelp">
                        </div>

                        <div class="form-group">
                            <label for="m2">Subject 2 Marks</label>
                            <textarea class="form-control" id="m2Edit" name="m2Edit" rows="1"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="m3">Subject 3 Marks</label>
                            <input type="text" class="form-control" id="m3Edit" name="m3Edit" aria-describedby="emailHelp">
                        </div>

                        <div class="form-group">
                            <label for="m4">Subject 4 Marks</label>
                            <textarea class="form-control" id="m4Edit" name="m4Edit" rows="1"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="m5">Subject 5 Marks</label>
                            <input type="text" class="form-control" id="m5Edit" name="m5Edit" aria-describedby="emailHelp">
                        </div>

                        <div class="form-group">
                            <label for="attperc">Attendance Percentage</label>
                            <textarea class="form-control" id="attpercEdit" name="attpercEdit" rows="1"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="emailEdit" name="emailEdit" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="modal-footer d-block mr-auto">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand center" href="#"><img src="/SRMS/images/white.svg" height="48px" alt=""></a>
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
                        <a class="nav-link active" href="https://github.com/AdityaBahl">Report</a>
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

    <?php
    if ($delete) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been deleted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
    }
    ?>
    <?php
    if ($update) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been updated successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
    }
    ?>

    <div class="container my-1">

        <table class="table left" id="myTable">
            <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Guardian's Name</th>
                    <th scope="col">Course</th>
                    <th scope="col">Year</th>
                    <th scope="col">Section</th>
                    <th scope="col">Roll Number</th>
                    <th scope="col">Registration Number</th>
                    <th scope="col">Age</th>
                    <th scope="col">Marks Percentage </th>
                    <th scope="col">Attendance percentage</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `details`";
                $result = mysqli_query($conn, $sql);
                $sno = 0;
                $calc = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $sno = $sno + 1;
                    $calc = $row['m1'] + $row['m2'] + $row['m3'] + $row['m4'] + $row['m5'];
                    $calc = $calc / 5;
                    echo "<tr>
            <th scope='row'>" . $sno . "</th>
            <td>" . $row['name'] . "</td>
            <td>" . $row['gname'] . "</td>
            <td>" . $row['course'] . "</td>
            <td>" . $row['year'] . "</td>
            <td>" . $row['section'] . "</td>
            <td>" . $row['roll'] . "</td>
            <td>" . $row['regnum'] . "</td>
            <td>" . $row['age'] . "</td>
            <td>" . $calc . "</td>
            <td>" . $row['attperc'] . "</td>
            <td> <button class='edit btn btn-sm btn-primary' id=" . $row['sno'] . ">Edit</button> <button class='delete btn btn-sm btn-primary' id=d" . $row['sno'] . ">Delete</button>  </td>
          </tr>";
                    $calc = 0;
                }
                ?>


            </tbody>
        </table>
    </div>
    <hr>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();

        });
    </script>
    <script>
        edits = document.getElementsByClassName('edit');
        Array.from(edits).forEach((element) => {
            element.addEventListener("click", (e) => {
                console.log("edit ");
                tr = e.target.parentNode.parentNode;
                name = tr.getElementsByTagName("td")[0].innerText;
                gname = tr.getElementsByTagName("td")[1].innerText;
                course = tr.getElementsByTagName("td")[2].innerText;
                year = tr.getElementsByTagName("td")[3].innerText;
                section = tr.getElementsByTagName("td")[4].innerText;
                roll = tr.getElementsByTagName("td")[5].innerText;
                regnum = tr.getElementsByTagName("td")[6].innerText;
                age = tr.getElementsByTagName("td")[7].innerText;
                m1 = tr.getElementsByTagName("td")[8].innerText;
                m2 = tr.getElementsByTagName("td")[9].innerText;
                m3 = tr.getElementsByTagName("td")[10].innerText;
                m4 = tr.getElementsByTagName("td")[11].innerText;
                m5 = tr.getElementsByTagName("td")[12].innerText;
                attperc = tr.getElementsByTagName("td")[13].innerText;
                email = tr.getElementsByTagName("td")[14].innerText;
                console.log(name, gname, course, year, section, roll, regnum, age, m1, m2, m3, m4, m5, attperc, email);
                nameEdit.value = name;
                gnameEdit.value = gname;
                courseEdit.value = course;
                yearEdit.value = year;
                sectionEdit.value = section;
                rollEdit.value = roll;
                regnumEdit.value = regnum;
                ageEdit.value = age;
                m1Edit.value = m1;
                m2Edit.value = m2;
                m3Edit.value = m3;
                m4Edit.value = m4;
                m5Edit.value = m5;
                attpercEdit.value = attperc;
                emailEdit.value = email;
                console.log(e.target.id)
                $('#editModal').modal('toggle');
            })
        })
        //
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
        //
        deletes = document.getElementsByClassName('delete');
        Array.from(deletes).forEach((element) => {
            element.addEventListener("click", (e) => {
                console.log("edit ");
                sno = e.target.id.substr(1);

                if (confirm("Are you sure you want to delete this note!")) {
                    console.log("yes");
                    window.location = `/SRMS/pages/display.php?delete=${sno}`;
                    // TODO: Create a form and use post request to submit a form
                } else {
                    console.log("no");
                }
            })
        })
    </script>
</body>

</html>