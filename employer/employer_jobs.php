<?php
session_start();
// Include config file
require_once "config.php";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width", initial-scale=1, shrink-to-fit=no">
        <!-- Scripts for Bootstrap-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Employer Home</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-md bg-primary navbar-dark fixed-top">
            <a class="navbar-brand" href="">Employer Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="employer_home.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="employer_jobs.html">Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="employer_applications.html">Applications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="employer_membership.html">Membership</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="employer_contact.html">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid" style="margin-top:75px;">
            <div class="container-fluid" style="margin-bottom:20px">
                <a class="btn btn-primary" href="employer_new_job.html" role="button">Post New Job</a>
            </div>
            <div class="container-fluid">
                <h2>Current Jobs</h2>
                <ul class="list-group">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item"><?php echo $_POST["username"]; ?></li>
                    <li class="list-group-item"><?php echo $_SESSION["username"]; ?></li>
                </ul>
            </div>
        </div>
    </body>
</html>