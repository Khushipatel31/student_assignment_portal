<?php include 'includes/header.php'; ?>
<!-- <?php include 'assets/css/style_temp.css'; ?> -->
<div class="grid-container">
	<!-- Header -->
	<?php include 'includes/facultyHeader.php'; ?>
	<!-- End Header -->

	<!-- Sidebar -->
	<?php include 'includes/sidebar.php'; ?>
	<!-- End Sidebar -->

	<!-- Main -->
	<main class="main-container">
		<div class="main-title">
			<div class="h1 ps-5 pe-5 dboard">Dashboard</div>
		</div>
		<div class="box-container ps-5 pe-5">
			<div class="row margin">
				<div onclick="window.open('/classes','_self')" class="col-md-3 m-1 box dashboard-tile">
					<div class="dashboard-tile-header h4">Classes</div>
				</div>
				<div class="col-md-1 extraBox"></div>
				<div onclick="window.open('batches.php','_self')" class="col-md-3 m-1 box dashboard-tile">
					<!-- <i class="fa-regular fa-building"></i> -->
					<div class="dashboard-tile-header h4">Batches</div>
				</div>
				<div class="col-md-1 extraBox"></div>
				<div onclick="window.open('students.php','_self')" class="col-md-3 m-1 box dashboard-tile">
					<!-- <i class="fa-regular fa-building"></i> -->
					<div class="dashboard-tile-header h4">Students</div>
				</div>
			</div>

			<div class="row margin">
				<div class="col-md-2 extraBox"></div>
				<div onclick="window.open('questions.php','_self')" class="col-md-3 m-1 box">
					<!-- <i class="fa-regular fa-building"></i> -->
					<div class="dashboard-tile-header h4">Questions</div>
				</div>
				<div class="col-md-2 extraBox"></div>

				<div onclick="window.open('assignment.php','_self')" class="col-md-3 m-1 box">
				<!-- <i class="fa-regular fa-building"></i> -->
				<div class="dashboard-tile-header h4">Assignments</div>
				
				
			</div>
		</div>
	</main>
	<!-- End Main -->
    <?php include 'includes/footer.php'; ?>
</div>
<script>
	const allSideMenu = document.querySelectorAll(
		"#sidebar .side-menu.top li a"
	);

	allSideMenu.forEach((item) => {
		const li = item.parentElement;

		item.addEventListener("click", function () {
			allSideMenu.forEach((i) => {
				i.parentElement.classList.remove("active");
			});
			li.classList.add("active");
		});
	});
</script>
</body></html>



