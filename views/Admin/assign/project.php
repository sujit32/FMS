<?php 
  require_once 'views/shared/admindashboard.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="table-responsive" style="padding: 5px;">

        <table class="table">
            <thead class="bg-primary">
                <tr>

                    <th>Name</th>
                    <th>Email</th>
                    <th>Project</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="bg-secondary">
                <tr>

                    <td>Sujit Shrestha</td>
                    <td>nischal@gmail.com</td>
                    <td>html</td>
                    <td>
                        <input type="button" name="delete" value="Accept" class="btn btn-success">
                    </td>
                </tr>

                <tr>

                    <td>Sujit Shrestha</td>
                    <td>nischal@gmail.com</td>
                    <td>php</td>
                    <td>
                        <input type="button" name="delete" value="Accept" class="btn btn-success">
                    </td>
                </tr>
            </tbody>
        </table>

    </div>

</body>

</html>