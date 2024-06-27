<?php
// Your database connection and other necessary includes
include 'db_connect.php';

// Handle form data and apply filters
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['categories'])) {
    // Process form data and apply filters
    $categories = $_POST['categories'];
    $categoryList = implode("','", $categories);
    $query = "SELECT * FROM car_listings WHERE category IN ('$categoryList')";

    // Execute the query and fetch the filtered data
    $result = mysqli_query($conn, $query);
    $filteredData = [];

    while ($roow = mysqli_fetch_assoc($result)) {
        $filteredData[] = [
            'id' => $roow['id'],
            'car_model' => $roow['car_model'],
            'car_brand' => $roow['car_brand'],
            // Add other fields as needed
        ];
    }

    // Output the filtered data as JSON
    echo json_encode($filteredData);
    exit(); // Stop further execution
} else {
    // Handle invalid requests or direct access to the script
    http_response_code(400); // Bad request status code
    echo json_encode(['error' => 'Invalid request']);
    exit();
}
?>
