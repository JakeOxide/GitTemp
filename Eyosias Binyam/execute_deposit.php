<?php
include 'database.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the deposit amount from the form
    $depositAmount = $_POST["deposit-amount"];

    // Execute the stored procedure
    $result = $conn->query("CALL AddDeposit($depositAmount, 2234)"); // Replace 1 with the appropriate lessee ID

    // Check if the procedure was executed successfully
    
    $query = "UPDATE BalanceTable SET Amount = Amount + $depositAmount WHERE id = 2234"; // Replace 2234 with the appropriate lessee ID

    $result = $conn->query($query);
    header("Location: TransactionHome.php"); // Replace "card_back.php" with the actual filename of your card back page
    exit;
}
?>
