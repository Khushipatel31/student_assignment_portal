
<?php include 'includes/header.php'; 
	$student_data=[];
?>

<div class="grid-container">
	<?php include 'includes/facultyHeader.php'; ?>
	<?php include 'includes/sidebar.php'; ?>

	<main class="main-container">
		<div class="row  pe-5 align-items-center d-flex mb-5">
			<div class="col h1">
				Students
			</div>
			<div class="col text-end">
				<button style="height: min-content" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#studentModal">
					<i class="fa-regular fa-square-plus"></i>&nbsp;&nbsp;ADD STUDENT
				</button>
			</div>
		</div>
		<table
      class="uk-table uk-table-hover uk-table-striped text-center mt-6"
      id="datatable"
    >
      <thead style="background-color: #35013F;">
        <th class="text-center text-white" >Sr no.</th>
        <th class="text-center text-white">Student username</th>
        <th class="text-center text-white">Full name</th>
        <th class="text-center text-white">Email</th>
        <th class="text-center text-white">Semester</th>
        <th class="text-center text-white">Department</th>
      
      </thead>
      <tbody>
	  <?php foreach ($student_data as $index => $student): ?>
                    <tr >
                        <td>1</td>
                        <td class="studentName"><?= $student['username'] ?></td>
                        <td class="disc"><?= $student['fullname'] ?></td>
                        <td class="username"><?= $student['email'] ?></td>
                        <td class="email"><?= $student['semester'] ?></td>
                        <td class="phone"><?= $student['department'] ?></td>
                    </tr>
                <?php endforeach; ?>
      </tbody>
    </table>
	</main>
	<?php include 'includes/footer.php'; ?>
	<?php include 'addStudentModal.php'; ?>

</div>
<script>
	 async function fetchStudents() {
        console.log("hi");
        const response = await fetch('dbQuery/getStudents.php');
        const student_data = await response.json();
        //console.log(students);
        return student_data;
}

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

  $(document).ready(async() => {
	const student_data = await fetchStudents();
   // console.log("hello");
    var myTable;

    myTable = $("#datatable").DataTable({
		data: student_data.map((student, index) => [
        index + 1,
        student.username,
        student.fullname,
        student.email,
        student.semester,
        student.department
      ]),
      pagingType: "simple_numbers",
      language: {
        paginate: {
          previous: "<",
          next: ">",
        },
      },
      columnDefs: [
        // Center align the header content of column 1
        { className: "dt-head-center", targets: [0, 1] },
      ],
	
    });
   
  });
     

  
</script>
</body>

</html>