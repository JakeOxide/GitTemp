<?php
include 'database.php';

$query = "SELECT DATE_FORMAT(Tr_Date, '%d') AS Tr_Date, Tr_Amount FROM Lessee_Finance WHERE lessee_id = 2234";

// Execute the query
$result = mysqli_query($conn, $query);

// Fetch the data into arrays
$dates = array();
$amounts = array();
while ($row = mysqli_fetch_assoc($result)) {
  $dates[] = $row['Tr_Date'];
  $amounts[] = $row['Tr_Amount'];
}
$conn->close();
?>


<script>
  // Data for the bar graph
const dates = <?php echo '[' . implode(',', $dates) . ']'; ?>;
const amounts = <?php echo '[' . implode(',', $amounts) . ']'; ?>;


  // Get the canvas elements
  const paidChartCanvas = document.getElementById('paid-chart');
  const pendingChartCanvas = document.getElementById('pending-chart');

  const paidChart = new Chart(paidChartCanvas, {
    type: 'bar',
    data: {
      labels: dates,
      datasets: [{
        label: 'Paid Amount',
        data: amounts,
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

  // Create the bar graph for pending amounts
  const pendingChart = new Chart(pendingChartCanvas, {
    type: 'bar',
    data: {
      labels: dates,
      datasets: [{
        label: 'Pending Amount',
        data: amounts,
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