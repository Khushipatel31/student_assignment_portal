<?php 
include('../config/config.php'); 

try {
    $stmt = $conn->prepare("SELECT id, username FROM student");
    $stmt->execute();
    $students = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Close connection
    $conn = null;

    // Return students as JSON
    echo json_encode($students);
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
