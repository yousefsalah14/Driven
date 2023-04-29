<?php
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $location = isset($_POST["location"]) ? $_POST["location"] : "";
    $destination = isset($_POST["destination"]) ? $_POST["destination"] : "";
    $payment = isset($_POST["payment"]) ? $_POST["payment"] : "";
    $type = isset($_POST["type"]) ? $_POST["type"] : ""; 

    if ($type != "ride" && $type != "ship"&& $type != "order") {
        echo "Invalid  type";
        exit;
    }
    if ($payment != "cash" && $payment != "visa") {
        echo "Invalid payment type";
        exit;
    }

    // Construct the SQL query to insert the data into the database
    $sql = "INSERT INTO request (name, location, destination, payment, type)
            VALUES ('$name', '$location', '$destination', '$payment', '$type')";

$result = $conn->query($sql);
    $conn->close();
    exit;
}