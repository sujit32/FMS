<?php
require_once "views/shared/link.php";
?>


<!-- JQuery (JavaScript base library)-->
<script src="libraries/jquery/jquery.min.js"></script>

<!-- JS file of bootstrap -->
<script src="libraries/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('#sidebarCollapse').on('click', function() {
        $('#sidebar').toggleClass('active');
        $(this).toggleClass('active');
    });
});
</script>
