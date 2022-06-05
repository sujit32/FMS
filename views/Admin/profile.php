<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <?php 
  require_once 'views/shared/admin/sidenav.php';
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
                    <h2>ADMIN</h2> <br><br>


                </div>
            </div>

        </div>
    </div>

    <div class="d-flex justify-content-between mb-3">
        <button type="button" class="btn btn-warning">Change Password</button>
        <button type="button" class="btn btn-danger">Logout</button>
    </div>



</body>
<?php 
		require_once 'views/shared/linksbottom.php';
	?>

</html>
