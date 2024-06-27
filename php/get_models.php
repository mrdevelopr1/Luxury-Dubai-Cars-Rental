<?php
include 'db_connect.php';

if ($_GET['brand']) {
    $brand = $_GET['brand'];
    $modal = mysqli_query($conn, "SELECT * FROM `car_modal` WHERE brand_name = '$brand'");
    $options = '<option disabled selected>select</option>';
    while ($modal_row = mysqli_fetch_assoc($modal)) {
        $options .= '<option value="' . $modal_row['modal_name'] . '">' . $modal_row['modal_name'] . '</option>';
    }
    echo $options;
}
?>