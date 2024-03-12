<?php 
include('../config/config.php'); 

try {
    $stmt = $conn->prepare("SELECT id, name FROM batch");
    $stmt->execute();
    $batches = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Close connection
    $conn = null;

    // Return students as JSON
    echo json_encode($batches);
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
