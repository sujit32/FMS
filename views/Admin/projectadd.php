<?php 
  require_once 'views/shared/admindashboard.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .table {
        padding: 10px;
        border: 2px solid black;
    }
    </style>
</head>

<body>

    <div class="container w-50 bg-light table">
        <form action="projectadd.php" method="POST">
            <h2 class="text-center mt-3">Add Project</h2>

            <div class="form-group bg-light">
                <label for="projectId">Project ID :</label>
                <input type="text" class="form-control" id="projectId" placeholder="Project Id">
            </div>

            <div class="form-group">
                <label for="projectTitle">Project Title :</label>
                <input type="text" class="form-control" id="projectTitle" placeholder="Project Title">
            </div>

            <div class="form-group">
                <label for="projectType">Project Type :</label>
                <input type="text" class="form-control" id="projectType" placeholder="Project Type">
            </div>

            <div class="form-group">
                <label for="projectDescription">Project Description :</label>
                <textarea class="form-control" placeholder="Project Description" id="projectDescription"
                    rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="projectCost">Project Cost :</label>
                <input type="text" class="form-control" id="projectCost" placeholder="Project Cost">
            </div>

            <div class="form-group">
                <label for="projectDeadline">Project Deadline :</label>
                <input type="text" class="form-control" id="projectDeadline" placeholder="Project Deadline">
            </div>

            <center> <button type="submit" class="btn btn-primary w-50">Submit</button></center>
        </form>
    </div>

</body>

</html>