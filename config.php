<?php
const DB_NAME = "hotel";
const DB_HOST_NAME = "localhost";
const DB_USERNAME = "root";
const DB_PASSWORD = "";
$conn = mysqli_connect(DB_HOST_NAME, DB_USERNAME, DB_PASSWORD, DB_NAME);
if ($conn) {
    // echo "Connected";
} else {
    echo "Failed";
}
