<?php
// Include your database connection
include 'db_connect.php'; // Ensure this file path is correct

$allStories = array();

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT slide, file_path, heading FROM slide_uploads";
$result = $conn->query($sql);

if ($result === false) {
    die("Error fetching data: " . $conn->error);
}

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $allStories[] = array(
            "id" => $row["slide"],
            "author" => $row["heading"],
            "imageUrl" => "/dist/php/" . $row["file_path"]
            
        );
    }
} else {
    echo "0 results";
}

$conn->close();

// Output the data as JSON
header('Content-Type: application/json');
echo json_encode($allStories);
?>
