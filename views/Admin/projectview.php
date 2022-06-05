<?php 
  require_once 'views/shared/admindashboard.php';

?>

<div style="padding: 5px;">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myproject">
        Add Project
    </button>

    <!-- The Modal -->
    <div class="modal fade" id="myproject">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h3 class="modal-title">Add Project</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="projectadd.php" method="POST">
                        <!-- <h2 class="text-center mt-3">Add Project</h2> -->

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

<div class="table-responsive" style="padding: 5px;">

    <table class="table">
        <thead class="bg-primary">
            <tr>
                <th>Project Id</th>
                <th>Project Title</th>
                <th>Project Description</th>
                <th>Project Type</th>
                <th>Project Cost</th>
                <th>Project Deadline</th>
                <th>Action</th>


            </tr>
        </thead>
        <tbody style="background-color: rgb(217, 217, 217);">
            <tr>
                <td>1</td>
                <td>login form</td>
                <td>PHP</td>
                <td>website</td>
                <td>5000</td>
                <td>2078/5/12</td>
                <td>
                    <input type="button" value="delete" class="btn btn-danger">
                </td>

            <tr>
                <td>2</td>
                <td>logo design</td>
                <td>Photoshop</td>
                <td>Graphic Design</td>
                <td>10000</td>
                <td>2078/4/12</td>
                <td>
                    <input type="button" value="delete" class="btn btn-danger">
                </td>
        </tbody>
    </table>

</div>