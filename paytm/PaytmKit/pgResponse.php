<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if ($isValidChecksum == "TRUE") {
	include "../../config.php";
	// echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	// if (isset($_SESSION['hotel_id'])) {
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<b>Transaction status is success</b>" . "<br/>";
		session_start();
		// print_r($_SESSION);
		if (isset($_SESSION['hotel_id'])) {
			$sql1 = "SELECT * FROM hotel_details WHERE hotel_id ={$_SESSION['hotel_id']}";
			$result = mysqli_query($conn, $sql1) or die("Query1 Failed");
			$row1 = mysqli_fetch_assoc($result);
			$total_rooms = $row1['total_rooms'];
			$booke_hotel = "booked";
			// order_id	amount	check_in	check_out	status1	room_no	hotel_id	u_id	email
			$sql2 = "INSERT INTO booked_hotel (order_id,amount,check_in,check_out,status1,room_no,hotel_id,u_id,email) VALUES ('{$_POST['ORDERID']}',{$_POST['TXNAMOUNT']},'{$_SESSION['check_in']}','{$_SESSION['check_out']}','booked',{$total_rooms},{$_SESSION['hotel_id']},{$_SESSION['user_id']},'{$_SESSION['email']}')";
			$result2 = mysqli_query($conn, $sql2) or die("Query Failed");
			// echo mysqli_error($conn);
			$total_rooms -= 1;
			$sql3 = "UPDATE hotel_details SET total_rooms = {$total_rooms} WHERE hotel_id = {$_SESSION['hotel_id']}";
			$result3 = mysqli_query($conn, $sql3) or die("Query Falied 3");
			unset($_SESSION['hotel_id']);
			unset($_SESSION['check_in']);
			unset($_SESSION['check_out']);
			// print_r($_SESSION);
		} elseif (isset($_SESSION['package_id'])) {
			//echo "<b>Transaction status is success</b>" . "<br/>";
			//session_start();
			//print_r($_SESSION);
			$sql3 = "INSERT INTO booked_package (order_id, amount, status1, package_id, uid, email, starting_date) VALUES ('{$_POST['ORDERID']}',{$_POST['TXNAMOUNT']},'booked',{$_SESSION['package_id']},{$_SESSION['user_id']},'{$_SESSION['email']}','{$_SESSION['starting_date']}')";
			$result4 = mysqli_query($conn, $sql3) or die("Query Package Failed" + mysqli_error($conn));
			unset($_SESSION['package_id']);
			unset($_SESSION['starting_date']);
			// print_r($_SESSION);
		}
		// unset($_SESSION['hotel_id']);
		// unset($_SESSION['check_in']);
		// unset($_SESSION['check_out']);
		echo "<a class='btn btn-primary' href='../../index.php'>Click Here To Go Back </a>";
		// }
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
	} else {
		echo "<b>Transaction status is failure</b>" . "<br/>";
	}

	// if (isset($_POST) && count($_POST) > 0) {
	// 	foreach ($_POST as $paramName => $paramValue) {
	// 		echo "<br/>" . $paramName . " = " . $paramValue;
	// 	}
	// }
} else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}
