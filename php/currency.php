<?php
include 'db_connect.php'; // Include your database connection script

// Your new API key
$apiKey = 'cur_live_TUKq5TfxhIrc4ISZfFMhi4Uf0vmBJcggfjPlHLU0';
$baseCurrency = 'AED';
$currencies = 'EUR,USD,GBP,SAR,KWD,RUB,INR,PKR,OMR';

$apiUrl = "https://api.currencyapi.com/v3/latest?apikey=$apiKey&currencies=$currencies&base_currency=$baseCurrency";

try {
    $response = file_get_contents($apiUrl);
    $data = json_decode($response, true);

    if ($data && isset($data['data'])) {
        $rates = $data['data'];
        // Initialize an array to store the new rates
        $currencyRates = [
            'USD' => null,
            'GBP' => null,
            'EUR' => null,
            'SAR' => null,
            'KWD' => null,
            'RUB' => null,
            'INR' => null,
            'PKR' => null,
            'OMR' => null
        ];

        // Populate the array with the fetched rates
        foreach ($currencyRates as $currency => &$value) {
            if (isset($rates[$currency]['value'])) {
                $value = $rates[$currency]['value'];
            }
        }

        // Debug: Output the fetched rates for verification
        echo "<pre>";
        print_r($currencyRates);
        echo "</pre>";

        // Ensure all currency values are set before constructing the SQL query
        foreach ($currencyRates as $currency => $value) {
            if ($value === null) {
                echo "Failed to fetch the rate for $currency.";
                exit;
            }
        }

        // Create the SQL update statement
        $sqlUpdate = "UPDATE `currency` SET 
            `USD` = {$currencyRates['USD']},
            `GBP` = {$currencyRates['GBP']},
            `EUR` = {$currencyRates['EUR']},
            `SAR` = {$currencyRates['SAR']},
            `KWD` = {$currencyRates['KWD']},
            `RUB` = {$currencyRates['RUB']},
            `INR` = {$currencyRates['INR']},
            `PKR` = {$currencyRates['PKR']},
            `OMR` = {$currencyRates['OMR']}
            WHERE `id` = 1"; // Update the row where id = 1

        // Execute the update query
        if ($conn->query($sqlUpdate) === TRUE) {
            echo "Currency rates updated successfully.";
        } else {
            echo "Error updating currency rates: " . $conn->error;
        }
    } else {
        echo "Failed to fetch currency rates.";
    }
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}

$conn->close();
?>
