<?php 
	class AdminController {
		function dashboard() {
			require_once 'views/admin/Adashboard.php';
		}

function projectadd() {
			require_once 'views/admin/projectadd.php';
		}
function login() {
			require_once "views/admin/index.php";
		}
		function projectview() {
			require_once 'views/admin/projectview.php';
		}
		function useradd() {
			require_once 'views/admin/useradd.php';
		}
		function userview() {
			require_once 'views/admin/userview.php';
		}
		function freelancer() {
			require_once 'views/admin/freelancer.php';
		}
		function projects() {
			require_once 'views/admin/projects.php';
		}	
		function AddFreelancer() {
			require_once 'views/admin/addfreelancer.php';
		}
			function AddProject() {
			require_once 'views/admin/addproject.php';
		}
		function CompleteProject() {
			require_once 'views/admin/completeproject.php';
		}
			function Profile() {
			require_once 'views/admin/profile.php';
		}
}
 ?>
