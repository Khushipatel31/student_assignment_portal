<?php include('../config/config.php'); 


$name = $_POST["name"];
$deadline = $_POST["deadline"];
$batch = $_POST["batch"];
$questions=$_POST["question"];
print_r($_POST);

$query =$conn->prepare( "INSERT INTO assignment (name, teacher_id,batch_id,deadline, is_active) VALUES (?,1,?,?,1)");

$query->bindParam(1,$name);
$query->bindParam(2,$batch);
$query->bindParam(3,$deadline);
$query->execute();

$assignmentId = $conn->lastInsertId();
//echo($batchId); 

foreach ($questions as $questionId) {
            $stmt = $conn->prepare("INSERT INTO assignment_question (assignment_id, question_id) VALUES (:assignmentId, :questionId)");
            $stmt->bindParam(':assignmentId', $assignmentId);
            $stmt->bindParam(':questionId', $questionId);
           $stmt->execute();
        }

    echo "<script>window.open('../assignments.php','_self')</script>";

?>
