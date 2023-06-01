<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TransactionHome</title>
    <link rel="stylesheet" href="TrasactionHome.css">
  
   
    
</head>
<body>
  
    <div class="contentWrapper">
      <header class="main_header">
        <div class="hmenu" id="hmenu">
          <div class="barOne bar"></div>
          <div class="barTwo bar"></div>
          <div class="barThree bar"></div>
        </div>
        <p class="autoOasis">
          <a href="#" class="autoLink">Auto Oasis</a>
        </p>
        <nav class="navBar_links" id="navLinks">
          <a class="deposit" onclick="Deposit()">Deposit</a>
          <a class="withdrawal" onclick="Withdrawal()" >Withdrawal</a>
          <a href="#">Account Overview</a>
        </nav>
      </header>

   <div class="main-body">

   <div class="deposit-card">
      <div class="card-front">
    <div class="card-header">
      <h2>Deposit</h2>
    </div>
    <div class="card-body">
      <div class="deposit-screen">
        $0
      </div>
      <h3>Amount</h3>
      <form action="execute_deposit.php" method="POST"> <!-- Replace "process_deposit.php" with your PHP file name -->
        <div class="input-group">
          <span class="input-group-addon">$</span>
          <input type="number" name="deposit-amount" id="deposit-amount" class="form-control" placeholder="Enter deposit amount">
        </div>
        <select id="currency-selector" onchange="updateCurrencySymbol()">
          <option value="USD">USD</option>
          <option value="EUR">EUR</option>
          <option value="GBP">GBP</option>
          <option value="Birr">Br</option>
        </select>
        <button type="submit" id="enter-btn" class="btn btn-primary">Enter</button>
      </form>
    </div>
  </div>
  <div class="card-back" id="card-back-section">
    <img src="success-icon.png" alt="Success Icon">
    <h2>Deposit Successful</h2>
    <p>Thank you for your deposit!</p>
    
    <button id="go-back-btn" class="btn btn-primary">Go Back</button>
  </div>
</div>






<div class="withdrawal-card">
  <div class="front">
    <h3>Withdrawal methods</h3>
    <form action="execute_withdrawal.php" method="POST">
      <div class="withdrawal-method" id="bank-transfer">
       
        <img src="dropdown1.png" alt="" class="dropDown-withdrawal">
        <div class="additional-info" id="bank-transfer-additional-info" style="display: none;">
          <div class="logo-container">
            <img src="Awashlogo.jpeg" alt="" class="AwashLogo" onclick="showOptions('awash-options')"/>
            <div class="options-container" id="awash-options">
              <label for="awash-amount">Amount:</label>
              <input type="radio" name="withdrawal-method" value="awash" />
              <input type="number" id="awash-amount" name="awash-amount" onchange="updateAmount('awash')">

              <select id="awash-currency" name="awash-currency">
                <option value="Br">Birr</option>
                <option value="USD">USD</option>
                <option value="EUR">EUR</option>
                <option value="GBP">GBP</option>
              </select>
            </div>
          </div>
          <div class="logo-container">
            <img src="DashenLogo.jpeg" alt="" class="DashenLogo" onclick="showOptions('dashen-options')"/>
            <div class="options-container" id="dashen-options">
              <label for="dashen-amount">Amount:</label>
              <input type="radio" name="withdrawal-method" value="dashen" />
              <input type="number" id="dashen-amount" name="dashen-amount" onchange="updateAmount('dashen')">

              <label for="dashen-currency">Currency:</label>
              <select id="dashen-currency" name="dashen-currency">
                <option value="Br">Birr</option>
                <option value="USD">USD</option>
                <option value="EUR">EUR</option>
                <option value="GBP">GBP</option>
              </select>
            </div>
          </div>
          <div class="logo-container">
            <img src="CBElogo.jpeg" alt="" class="CbeLogo" onclick="showOptions('cbe-options')"/>
            <div class="options-container" id="cbe-options">

              <label for="cbe-amount">Amount:</label>
             
              <input type="radio" name="withdrawal-method" value="cbe" />

              <input type="number" id="cbe-amount" name="cbe-amount" onchange="updateAmount('cbe')">

              <label for="cbe-currency">Currency:</label>
              <select id="cbe-currency" name="cbe-currency">
                <option value="Br">Birr</option>
                <option value="USD">USD</option>
                <option value="EUR">EUR</option>
                <option value="GBP">GBP</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <button id="continue" type="submit">Continue</button>
    </form>
  </div>
</div>


<?php
// Assuming you have already established a database connection
  include 'database.php';

// Get the customer ID
$customerId = 2234; // Replace with the desired customer ID

// Fetch the available balance, initial amount, and end amount from the BalanceView view
$query = "SELECT Amount
          FROM BalanceTable
          WHERE ID = $customerId";
$result = mysqli_query($conn, $query);

// Check if the query was successful and retrieve the balance value
if ($result) {
    $row = mysqli_fetch_assoc($result);
    $balance = $row['Amount'];
} else {
    echo "Failed to retrieve balance.";
}

$conn->close();

?>



<div class="CurrentBalanceCard">
    <div class="CardBody">
    <p class="balance-amount" id="available-balance">$ <?php echo $balance; ?></p>

        <a href="#">View Transactions</a>
    </div>
</div>

  
    

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <div class="PayOutCard">
    <div class="CardHeader">
      <!-- Header content -->
    </div>
    <div class="CardBody">
      <div class="Money">
        <div class="graph-container">
          <canvas id="paid-chart"></canvas>
        </div>
        <p class="paid">Deposited</p>
        <p class="PaidMoney" id="paid-amount"></p>
      </div>
      <div class="Money">
        <div class="graph-container">
          <canvas id="pending-chart"></canvas>
        </div>
        <p class="pending">Withdrawed</p>
        <p class="PendingMoney" id="pending-amount"></p>
      </div>
      
    </div>
  </div>
 <?php include 'chart.php' ; ?> 

     

  <div class="transaction-history-card">
    <div class="card-header">
        <h3>Transaction History</h3>
        <div class="dropdown">
        <button class="dropbtn" onclick="toggleDropdown()">Sort by Date</button>
            <div class="dropdown-content" id="dropdown">
               <a href="?order=asc">Ascending</a>
                <a href="?order=desc">Descending</a>
                </div>


    </div>
</div>
    <div class="card-body">
        <table class="transaction-table">
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Transaction ID</th>
                    <th>Amount</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody class="list">
          
            <?php
            include 'SortTransaction.php';
            ?>

            </tbody>
        </table>
    </div>
</div>








  </div>  
   
   
     

</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  const navBtn = document.getElementById("hmenu");
  const navList = document.getElementById("navLinks");
  navBtn.addEventListener("click", () => {
    navList.classList.toggle("list_activate");
    navBtn.classList.toggle("btn_Change");
  });

    function toggleDropdown() {
        var dropdown = document.getElementById("dropdown");
        dropdown.style.display = dropdown.style.display === "none" ? "block" : "none";
    }

  </script>

  <script src="TransactionHome.js" ></script>


</html>
