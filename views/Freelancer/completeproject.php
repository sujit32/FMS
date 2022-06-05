<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Completed Project</title>
    <?php 
  require_once 'views/shared/sidenav.php';
?>
</head>

<body>
    <b>Complected Project</b><br><br>


    <table class="table">
        <thead class="thead-light">
            <tr>
                <th>S.N</th>
                <th>Deleivered Date</th>
                <th>Discription</th>
                <th>Amount</th>
                <th>Rating</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2021-8-20</td>
                <td>wordpress</td>
                <td>$1000</td>
                <td>
                    100% </td>
            </tr>
            <tr>
                <td>1</td>
                <td>2021-8-20</td>
                <td>wordpress</td>
                <td>$1000</td>
                <td>
                    100%
                </td>
            </tr>
        </tbody>
    </table>
    <br><br>
    <div class="d-flex justify-content-between mb-3">
        <a href="freelancer/assignproject" class="btn btn-info" role="button" aria-pressed="true">Assign Project</a>
        <a href="freelancer/currentproject" class="btn btn-info" role="button" aria-pressed="true">Current
            Project</a>
    </div>
    <br><br>
</body>
<?php 
		require_once 'views/shared/linksbottom.php';
	?>

</html>
