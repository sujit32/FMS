<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <?php 
  require_once 'views/shared/sidenav.php';
?>

    <style>
    .profile {
        margin: 15px;
    }

    .rounded-circle {
        width: 150px;
    }

    </style>
</head>

<body>


    <div class="card bg-light text-dark profile">
        <div class="card-body">
            <div class="row">
                <div class="col-md-2">
                    <img src="images/it.png" class="rounded-circle" alt="Cinque Terre">
                </div>
                <div class="col-md-10 mr-auto">
                    <b>Sujit Shrestha</b> <br><br>

                    <i class="fas fa-map-marker-alt"></i> Chandragadi, Jhapa Nepal <br>
                    100% <br>
                    <div class="progress" style="height: 4px; width: 80px">
                        <div class="progress-bar w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>

                    Job Success
                </div>
            </div>

        </div>
    </div>

    <div class="card bg-light text-dark">
        <div class="card-body">
            <b>Full Stack Developer</b> <br><br>
            <p class="col-md-10 text-dark">Hello everyone, <br>

                I am a passionate learner and programmer with a proven background in working as a Full Stack Development
                and E-commerce platform.</p>
        </div>
    </div>

    <div class="card bg-light text-dark">
        <div class="card-body">
            <b>Potfolio</b> <br><br>
            <div class="card-columns">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <p class="card-text">Some text inside the first card</p>
                    </div>
                </div>
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <p class="card-text">Some text inside the first card</p>
                    </div>
                </div>
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <p class="card-text">Some text inside the first card</p>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
    <div class="d-flex justify-content-between mb-3">
        <button type="button" class="btn btn-warning">Change Password</button>
        <button type="button" class="btn btn-danger">Logout</button>
    </div>



</body>
<?php 
		require_once 'views/shared/linksbottom.php';
	?>

</html>
