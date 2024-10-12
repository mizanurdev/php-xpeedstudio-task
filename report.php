<?php
require_once 'classes/Submission.php';

$submission = new Submission();
$submissions = $submission->getAllSubmissions();

if ($submissions) {
    echo "<h2>Submissions</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Amount</th><th>Buyer</th><th>Receipt ID</th><th>Items</th><th>Buyer Email</th><th>Note</th><th>City</th><th>Phone</th><th>Entry At</th><th>Entry By</th></tr>";
    foreach ($submissions as $row) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['amount'] . "</td>";
        echo "<td>" . $row['buyer'] . "</td>";
        echo "<td>" . $row['receipt_id'] . "</td>";
        echo "<td>" . $row['items'] . "</td>";
        echo "<td>" . $row['buyer_email'] . "</td>";
        echo "<td>" . $row['note'] . "</td>";
        echo "<td>" . $row['city'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
        echo "<td>" . $row['entry_at'] . "</td>";
        echo "<td>" . $row['entry_by'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No submissions found.";
}
?>
