<?php 
  require_once 'views/shared/admindashboard.php';

?>
<div style="padding: 5px;">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Add Freelencer
    </button>

    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h3 class="modal-title">Add Freelencer</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="projectadd.php" method="POST">
                        <!-- <h2 class="text-center mt-3 bg-primary" style="font-weight: bold;">Add Freelancer</h2> -->

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

                        <!-- <center> <button type="submit" class="btn btn-primary w-50">Submit</button></center> -->
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Add</button>

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

</div>

</div>
<div class="table-responsive" style="padding: 5px;">

    <table class="table">
        <thead class="bg-primary">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone No.</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody style="background-color: rgb(217, 217, 217);">
            <tr>
                <td>1</td>
                <td>Sujit Shrestha</td>
                <td>sujitshrestha665@gmail.com</td>
                <td>Chandragadhi</td>
                <td>9815048657</td>
                <td>
                    <input type="button" name="delete" value="delete" class="btn btn-danger">
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Ashim Rai</td>
                <td>ashimrai777@gmail.com</td>
                <td>kakarvitta</td>
                <td>9842637888</td>
                <td>
                    <input type="button" name="delete" value="delete" class="btn btn-danger">
                </td>
            </tr>
        </tbody>
    </table>

</div>