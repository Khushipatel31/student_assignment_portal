<?php include('../config/config.php'); 


$name = $_POST["name"];
$students = $_POST["student"];
//print_r($students);

$query =$conn->prepare( "INSERT INTO batch (name, teacher_id, is_active) VALUES (?,1,1)");

$query->bindParam(1,$name);
$query->execute();

$batchId = $conn->lastInsertId();
//echo($batchId); 

foreach ($students as $studentId) {
            $stmt = $conn->prepare("INSERT INTO batch_student (batch_id, student_id) VALUES (:batchId, :studentId)");
            $stmt->bindParam(':batchId', $batchId);
            $stmt->bindParam(':studentId', $studentId);
           $stmt->execute();
        }

    echo "<script>window.open('../batches.php','_self')</script>";

?>
