<?php
        include 'database.php';
               $order = $_GET['order'] ?? 'desc';
               $lessor_id = $_GET['lessee_id'] ?? '';
               // Validate the sort order
               $validOrders = ['asc', 'desc'];
               if (!in_array($order, $validOrders)) {
                   // Invalid sort order, set default to 'asc'
                   $order = 'desc';
               }
               
               $sql = "CALL GetSortedTransactions('$order', '2234')";
               $result = $conn->query($sql);
               
               if ($result->num_rows > 0) {
                   while ($row = $result->fetch_assoc()) {
                       echo '<tr>';
                       echo '<td class="type">' . $row['Tr_Type'] . '</td>';
                       echo '<td class="date">' . $row['Tr_date'] . '</td>';
                       echo '<td class="trasId">' . $row['Tr_id'] . '</td>';
                       echo '<td class="amount">$' . $row['Tr_Amount'] . '</td>';
                       echo '<td class="' . strtolower($row['Tr_Status']) . '">' . $row['Tr_Status'] . '</td>';
                       echo '</tr>';
                   }
               } else {
                   echo '<tr><td colspan="5">No transactions found.</td></tr>';
               }
               $conn->close();
                ?> 