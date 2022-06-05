<?php 
  require_once 'views/shared/admindashboard.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>form</title>
</head>

<style>
.table {
    padding: 10px;
    border: 2px solid black;
}
</style>

<body>


    <div class="container w-10 bg-light table">
        <form action="projectadd.php" method="POST">
            <h2 class="text-center mt-3 bg-primary" style="font-weight: bold;">Add Freelancer</h2>

            <div class="form-group">
                <label for="freelancerId">Id :</label>
                <input type="text" class="form-control" id="freelancerId" placeholder="Freelancer Id">
            </div>

            <div class="form-group">
                <label for="freelancerName">Name :</label>
                <input type="text" class="form-control" id="freelancerName" placeholder="Freelancer Name">
            </div>

            <div class="form-group">
                <label for="freelancerEmail">Email :</label>
                <input type="text" class="form-control" id="freelancerEmail" placeholder="Freelancer Email">
            </div>

            <div class="form-group">
                <label for="freelancerPassword">Password :</label>
                <input type="password" class="form-control" id="freelancerPassword" placeholder="Password">
            </div>

            <div class="form-group">
                <label for="freelancerSkill">Skill Requirement :</label>
                <input type="text" class="form-control" id="freelancerSkill" placeholder="Skills">
            </div>



            <div class="form-group">
                <label for="freelancerAddress">Address :</label>
                <input type="text" class="form-control" id="freelancerAddress" placeholder="Address">
            </div>

            <div class="form-group">
                <label for="freelancerPhone">Phone No.</label>
                <input type="text" class="form-control" placeholder="Phone No." id="freelancerPhone">
            </div><br>

            <center> <button type="submit" class="btn btn-primary w-50">Submit</button></center>
        </form>
    </div>

</body>

</html>