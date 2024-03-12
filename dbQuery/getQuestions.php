<?php 
include('../config/config.php'); 

try {
    $stmt = $conn->prepare("SELECT id, question FROM question");
    $stmt->execute();
    $questions = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Close connection
    $conn = null;

    // Return students as JSON
    echo json_encode($questions);
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
