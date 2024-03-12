<?php include('../config/config.php'); 


$question = $_POST["question"];
$answer = $_POST["answer"]; 



$query =$conn->prepare( "INSERT INTO question (question, answer, is_active) VALUES (?,?,1)");

$query->bindParam(1,$question);
$query->bindParam(2,$answer);


if ($query->execute()) {
    echo "<script>window.open('../questions.php','_self')</script>";
    
} else {
    echo "Error: "  . $query->errorInfo();
}

?>
