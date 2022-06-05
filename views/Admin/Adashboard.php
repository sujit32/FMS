<?php 
require_once 'views/shared/admin/sidenav.php';
?>


<style>
.container {
    margin-top: 10vh;
}

.card-body {
    color: black;
    font-weight: bold;
    text-align: center;
}

</style>
</head>

<body>
    <div class="card-columns">
        <div class="card" style="width:400px">
            <img class="card-img-top" src="images/freelancer.webp" alt="Card image"
                style="width:100%; max-height:300px; min-height:300px;">
            <div class="card-body">
                <h4 class="card-title">Total Freelancers</h4>
                <p class="card-text text-dark">There are currently <b>8</b> Freelancers</p>
                <a href="admin/freelancer" class="btn btn-primary stretched-link">Read More ....</a>
            </div>
        </div>

        <div class="card" style="width:400px">
            <img class="card-img-top" src="images/waiting.jpg" alt="Card image"
                style="width:100%; max-height:300px; min-height:300px;">
            <div class="card-body">
                <h4 class="card-title">Waiting Projects</h4>
                <p class="card-text text-dark">There are currently <b>8</b> waiting projects</p>
                <a href="admin/projects" class="btn btn-primary stretched-link">Read More ....</a>
            </div>
        </div>
        <div class="card" style="width:400px">
            <img class="card-img-top" src="images/assign.png" alt="Card image"
                style="width:100%; max-height:300px; min-height:300px;">
            <div class="card-body">
                <h4 class="card-title">Projects</h4>
                <p class="card-text text-dark">There are currently <b>8</b> projects</p>
                <a href="admin/projects" class="btn btn-primary stretched-link">Read More ....</a>
            </div>
        </div>

        <div class="card" style="width:400px">
            <img class="card-img-top" src="images/complete.jpg" alt="Card image"
                style="width:100%; max-height:300px; min-height:300px;">
            <div class="card-body">
                <h4 class="card-title">Completed Projects</h4>
                <p class="card-text text-dark">There are currently <b>8</b> projects</p>
                <a href="admin/completeproject" class="btn btn-primary stretched-link">Read More ....</a>
            </div>
        </div>
        <div class="card" style="width:400px">
            <img class="card-img-top" src="images/progess.png" alt="Card image"
                style="width:100%; max-height:300px; min-height:300px;">
            <div class="card-body">
                <h4 class="card-title">Projects On Progess</h4>
                <p class="card-text text-dark">There are currently <b>8</b> projects on progess</p>
                <a href="admin/projects" class="btn btn-primary stretched-link">Read More ....</a>
            </div>
        </div>
    </div>
    <?php 
require_once 'views/shared/admin/linksbottom.php';
?>
