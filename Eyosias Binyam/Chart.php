<?php
include 'database.php';

// Fetch data for Paid Amount chart (Tr_Type = 'Deposit')
$queryPaid = "SELECT DATE_FORMAT(Tr_Date, '%d') AS Tr_Date, Tr_Amount FROM Lessee_Finance WHERE lessee_id = 2234 AND Tr_Type = 'Deposit'";
$resultPaid = mysqli_query($conn, $queryPaid);

// Fetch data for Pending Amount chart (Tr_Type = 'Withdraw')
$queryPending = "SELECT DATE_FORMAT(Tr_Date, '%d') AS Tr_Date, Tr_Amount FROM Lessee_Finance WHERE lessee_id = 2234 AND Tr_Type = 'Withdraw'";
$resultPending = mysqli_query($conn, $queryPending);

// Fetch data for Paid Amount chart into arrays
$datesPaid = array();
$amountsPaid = array();
while ($rowPaid = mysqli_fetch_assoc($resultPaid)) {
  $datesPaid[] = $rowPaid['Tr_Date'];
  $amountsPaid[] = $rowPaid['Tr_Amount'];
}

// Fetch data for Pending Amount chart into arrays
$datesPending = array();
$amountsPending = array();
while ($rowPending = mysqli_fetch_assoc($resultPending)) {
  $datesPending[] = $rowPending['Tr_Date'];
  $amountsPending[] = $rowPending['Tr_Amount'];
}

$conn->close();
?>

<script>
  // Data for the Paid Amount chart
  const datesPaid = <?php echo '[' . implode(',', $datesPaid) . ']'; ?>;
  const amountsPaid = <?php echo '[' . implode(',', $amountsPaid) . ']'; ?>;

  // Data for the Pending Amount chart
  const datesPending = <?php echo '[' . implode(',', $datesPending) . ']'; ?>;
  const amountsPending = <?php echo '[' . implode(',', $amountsPending) . ']'; ?>;

  // Get the canvas elements
  const paidChartCanvas = document.getElementById('paid-chart');
  const pendingChartCanvas = document.getElementById('pending-chart');

  const paidChart = new Chart(paidChartCanvas, {
    type: 'bar',
    data: {
      labels: datesPaid,
      datasets: [{
        label: 'Paid Amount',
        data: amountsPaid,
        backgroundColor: 'rgba(75, 192, 192, 0.2)',
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

  const pendingChart = new Chart(pendingChartCanvas, {
    type: 'bar',
    data: {
      labels: datesPending,
      datasets: [{
        label: 'Pending Amount',
        data: amountsPending,
        backgroundColor: 'rgba(255, 99, 132, 0.2)',
        borderColor: 'rgba(255, 99, 132, 1)',
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
