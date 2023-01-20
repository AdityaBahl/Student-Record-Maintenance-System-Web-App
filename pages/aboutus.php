<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>ACADEMIA - About Us</title>
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

    <h1><br>About Us (^_^)</h1><br>

    <div class="card col-5">
        <img src="/srms/images/geu.svg" class="card-img-left " alt="..." width="350" height="100">
        <div class="card-body col-12">
            <h5 class="card-title ">Aditya Bahl</h5>
            <p class="card-text ">A student of Graphic Era University pursuing B.tech CSE, currently in my 2nd Year. <br>The only member in this group.¯\_(ツ)_/¯<br>This is my Mini-Project</p>
            <a href="https://www.geu.ac.in/content/geu/en.html" class="btn btn-primary ">Graphic Era University</a>
            <button type="button" class="btn btn-primary" id="liveToastBtn">Ssshh... Secret 🤐</button>
            <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <img src="/srms/images/rabbit.png" class="rounded me-2" width="30" height="40" alt="...">
                        <strong class="me-auto">Achivement Unlocked!</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        You Have Earned a ⭐ for your curiosity.
                    </div>
                </div>
            </div>
            <script>
                var toastTrigger = document.getElementById('liveToastBtn')
                var toastLiveExample = document.getElementById('liveToast')
                if (toastTrigger) {
                    toastTrigger.addEventListener('click', function() {
                        var toast = new bootstrap.Toast(toastLiveExample)

                        toast.show()
                    })
                }
            </script>
        </div>
    </div>
    <div class="card col-3">
        <img src="/srms/images/github.png" class="card-img-top " alt="...">

        <div class="card-body col-12">
            <h5 class="card-title ">Github Profile</h5>
            <p class="card-text ">A coder is incomplete without one! ╰(*°▽°*)╯</p>
            <a href="https://github.com/AdityaBahl" class="btn btn-primary ">Into The Github World!</a>
        </div>
    </div>
    <div class="card-col-3">
        <img src="/srms/images/linkedin.jpg" class="card-img-top " alt="...">

        <div class="card-body col-12">
            <h5 class="card-title ">Linkedin</h5>
            <p class="card-text ">For times when Job prospects worry (⊙_⊙;)</p>
            <a href="https://www.linkedin.com/in/aditya-bahl-22334819b/" class="btn btn-primary ">Linkedin Here We Go!</a>
        </div>
    </div>
    <div class="card-col-3">
        <img src="/srms/images/gmail.png" class="card-img-top " alt="...">

        <div class="card-body col-12">
            <h5 class="card-title ">Gmail</h5>
            <p class="card-text ">Post Office is open (•_•)<br>Mail me at adityabahl12345@gmail.com!</p>
            <a href="https://mail.google.com/mail/u/0/#inbox?compose=new" class="btn btn-primary ">Mail it Up!</a>
        </div>
    </div>
    <div class="card-col-3">
        <img src="/srms/images/instagram.png" class="card-img-top " alt="..." width="108" height="350">

        <div class="card-body col-12">
            <h5 class="card-title ">Instagram Profile</h5>
            <p class="card-text ">Umhmm the admin is a rapper by hobby (^///^)</p>
            <a href="https://www.instagram.com/ogideology/" class="btn btn-primary ">Instagram Lesgoo</a>
        </div>
    </div>
	<styles>
		.card-col-3{
			display:inline-block;
		}
	</styles>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>