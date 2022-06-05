<!-- You should use these code for every page bacuse every page has different title -->
<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <?php 
		require_once 'views/shared/sidenav.php';
	?>
</head>

<body>

    <div class="card-columns">
        <div class="card" style="width:400px">
            <img class="card-img-top" src="images/current.png" alt="Card image"
                style="width:100%; max-height:300px; min-height:300px;">
            <div class="card-body">
                <h4 class="card-title">Current Projects</h4>
                <p class="card-text text-dark">There are currently <b>8</b> projects</p>
                <a href="freelancer/currentproject" class="btn btn-primary stretched-link">Read More ....</a>
            </div>
        </div>
        <div class="card" style="width:400px">
            <img class="card-img-top" src="images/assign.png" alt="Card image"
                style="width:100%; max-height:300px; min-height:300px;">
            <div class="card-body">
                <h4 class="card-title">Assign Projects</h4>
                <p class="card-text text-dark">There are currently <b>8</b> projects</p>
                <a href="freelancer/assignproject" class="btn btn-primary stretched-link">Read More ....</a>
            </div>
        </div>
        <div class="card" style="width:400px">
            <img class="card-img-top" src="images/complete.jpg" alt="Card image"
                style="width:100%; max-height:300px; min-height:300px;">
            <div class="card-body">
                <h4 class="card-title">Completed Projects</h4>
                <p class="card-text text-dark">There are currently <b>8</b> projects</p>
                <a href="freelancer/completeproject" class="btn btn-primary stretched-link">Read More ....</a>
            </div>
        </div>

    </div>

</body>
<?php 
		require_once 'views/shared/linksbottom.php';
	?>

</html>
