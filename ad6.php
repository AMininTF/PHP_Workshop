<?php
$fm = $_SERVER['HTTP_REFERER'];
echo "You are refered from: ".$fm."<br>";

$ip = $_SERVER['REMOTE_ADDR'];
echo "Your IP address is ".$ip."<br>";

$bd = $_SERVER['HTTP_USER_AGENT'];
echo "Your browser details: ".$bd."<br>";

$cid = $_POST['cid'];
$cust = $_POST['cust'];
$age = $_POST['age'];
$ad = $_POST['ad'];
$amt = $_POST['amt'];
$tax = $_POST['tax'];

//Total calculation
$total = $amt + ($tax * 0.01) * $amt;

//Display form details
echo "Welcome to the test site ".$cust;
echo "<br>";
echo "Below is your details: <br><br>";
echo "Customer ID: ".$cid;
echo "<br>";
echo "Customer Name: ".$cust;
echo "<br>";
echo "Age: ".$age;
echo "<br>";
echo "Address: ".$ad;
echo "<br>";
echo "Amount Paid: ".$amt;
echo "<br>";
echo "Tax Charged: ".$tax;
echo "<br>";
echo "Total: ".$total;
echo "<br>";
?>