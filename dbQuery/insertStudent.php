<?php include('../config/config.php'); 


$username = $_POST["username"];
$password = $_POST["password"]; 
$semester = $_POST["semester"];
$email = $_POST["email"];
$academicYear = $_POST["academicYear"];
$fullname = $_POST["fullname"];
$department = $_POST["department"];


$query =$conn->prepare( "INSERT INTO student (username, password, semester, email, academic_year, fullname, department, is_active) VALUES (?,?,?,?,?,?,?,1)");

$query->bindParam(1,$username);
$query->bindParam(2,$password);
$query->bindParam(3,$semester);
$query->bindParam(4,$email);
$query->bindParam(5,$academicYear);
$query->bindParam(6,$fullname);
$query->bindParam(7,$department);

if ($query->execute()) {
    echo "<script>window.open('../students.php','_self')</script>";
    
} else {
    echo "Error: "  . $query->errorInfo();
}

?>
