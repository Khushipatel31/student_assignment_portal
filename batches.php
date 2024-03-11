<?php include 'includes/header.php'; ?>

<div class="grid-container">
	<?php include 'includes/facultyHeader.php'; ?>
	<?php include 'includes/sidebar.php'; ?>

	<main class="main-container">
		<div class="row ps-5 pe-5 align-items-center d-flex">
			<div class="col h1">
				Batches
			</div>
			<div class="col text-end">
				<button style="height: min-content" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#batchModal">
					<i class="fa-regular fa-square-plus"></i>&nbsp;&nbsp;ADD BATCH
				</button>
			</div>
		</div>
	</main>
	<?php include 'includes/footer.php'; ?>
	<?php include 'addBatchModal.php'; ?>

</div>
<script>
	const allSideMenu = document.querySelectorAll(
		"#sidebar .side-menu.top li a"
	);
	allSideMenu.forEach((item) => {
		const li = item.parentElement;
		item.addEventListener("click", function() {
			allSideMenu.forEach((i) => {
				i.parentElement.classList.remove("active");
			});
			li.classList.add("active");
		});
	});
</script>
</body>

</html>