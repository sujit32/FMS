<?php 
  require_once 'views/Freelancer/Freelancerdashboard.php';

?>

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

                    <form action="#">
                        <input type="file" placeholder="file">
                        <input type="button" value="submit" class="btn btn-primary">
                    </form>
                    <!-- <input type="button" value="submit" class="btn btn-primary"> -->
                </td>

            <tr>
                <td>2</td>
                <td>logo design</td>
                <td>Photoshop</td>
                <td>Graphic Design</td>
                <td>10000</td>
                <td>2078/4/12</td>
                <td>
                    <form action="#">
                        <input type="file" placeholder="file">
                        <input type="button" value="submit" class="btn btn-primary">
                    </form>
                </td>
        </tbody>
    </table>

</div>