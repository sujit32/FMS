<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
</head>
<?php 
require_once 'views/shared/admin/sidenav.php';
?>

<body>
    <b>Assign Project</b><br><br>


    <table class="table">
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Deadline</th>
                <th>Discription</th>
                <th>Amount</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2021-8-20</td>
                <td>2021-8-25</td>
                <td>wordpress</td>
                <td>$1000</td>
                <td>
                    Not Assigned
                </td>

            </tr>
            <tr>
                <td>1</td>
                <td>2021-8-20</td>
                <td>2021-8-25</td>
                <td>wordpress</td>
                <td>$1000</td>
                <td>
                    Assigned
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>2021-8-20</td>
                <td>2021-8-25</td>
                <td>wordpress</td>
                <td>$1000</td>
                <td>
                    Waiting For Response
                </td>
            </tr>
        </tbody>
    </table>
    <br><br>
    <div class="d-flex justify-content-between mb-3">
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
            Add Project
        </button>
        <a href="admin/completeproject" class="btn btn-info" role="button" aria-pressed="true">Complected
            Project</a>
    </div>
    <br><br>

    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Login</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputDiscription1">Project Discription</label>
                            <input type="Discription" class="form-control" id="exampleInputDiscription1"
                                aria-describedby="DiscriptionHelp" placeholder="Enter Project Discription">
                            <small id="DiscriptionHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputDeadline1">Deadline</label>
                            <input type="Deadline" class="form-control" id="exampleInputDeadline1"
                                aria-describedby="DeadlineHelp" placeholder="Enter Deadline">
                            <small id="DeadlineHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputAmount1">Amount</label>
                            <input type="Amount" class="form-control" id="exampleInputAmount1"
                                aria-describedby="AmountHelp" placeholder="Enter Amount">
                            <small id="AmountHelp" class="form-text text-muted"></small>
                        </div>


                    </form>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <input type="submit" value="Add" class="btn btn-info">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
</body>
<?php 
require_once 'views/shared/admin/linksbottom.php';
?>

</html>
