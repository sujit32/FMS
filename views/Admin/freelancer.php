<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>freelancer</title>
    <?php 
require_once 'views/shared/admin/sidenav.php';
?>
</head>

<body>
    <b>Freelancers</b><br><br>


    <table class="table">
        <thead class="thead-light">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>contact No.</th>
                <th>Skills</th>
                <th>Rating</th>
                <th>Image</th>
                <th>Action</th>


            </tr>
        </thead>
        <tbody>
            <tr>
                <td>10021</td>
                <td>Sujit Shrestha</td>
                <td>adc@gmail.com</td>
                <td>jhapa NEpal</td>
                <td>9802214524</td>
                <td>Full Stack Developer</td>
                <td>100%</td>
                <td><img src="images/it.png" alt="" srcset="" width="100"></td>
                <td>
                    <button type="button" class="btn btn-warning">Update</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <td>10021</td>
                <td>Sujit Shrestha</td>
                <td>adc@gmail.com</td>
                <td>jhapa NEpal</td>
                <td>9802214524</td>
                <td>Full Stack Developer</td>
                <td>100%</td>
                <td><img src="images/it.png" alt="" srcset="" width="100"></td>
                <td>
                    <button type="button" class="btn btn-warning">Update</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>

    <br><br>
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
        Add Freelancer
    </button>
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
                            <label for="exampleInputName1">Name</label>
                            <input type="Name" class="form-control" id="exampleInputName1" aria-describedby="NameHelp"
                                placeholder="Enter Name">
                            <small id="NameHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputAddress1">Address</label>
                            <input type="Address" class="form-control" id="exampleInputAddress1"
                                aria-describedby="AddressHelp" placeholder="Enter Address">
                            <small id="AddressHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputContact1">Contact</label>
                            <input type="Contact" class="form-control" id="exampleInputContact1"
                                aria-describedby="ContactHelp" placeholder="Enter Contact">
                            <small id="ContactHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputSkills1">Skills</label>
                            <input type="Skills" class="form-control" id="exampleInputSkills1"
                                aria-describedby="SkillsHelp" placeholder="Enter Skills">
                            <small id="SkillsHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCPassword1">Conform Password</label>
                            <input type="Cpassword" class="form-control" id="exampleInputCPassword1"
                                placeholder="Conform Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputImage1">Image</label>
                            <input type="file" class="form-control" id="exampleInputImage1"
                                aria-describedby="ImageHelp">
                            <small id="ImageHelp" class="form-text text-muted"></small>
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
