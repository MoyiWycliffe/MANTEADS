<?php
include 'php/Database.php';
session_start();

$user_id = $_SESSION['user_id'] ?? 0;

if (!$user_id) {
    die("Please log in.");
}

$stmt = $conn->prepare("SELECT type, amount, description, created_at FROM transactions WHERE user_id = ? ORDER BY created_at DESC");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Your Transactions</title>
</head>
<body>
  <h2>Transaction History</h2>
  <table border="1">
    <tr>
      <th>Date</th>
      <th>Type</th>
      <th>Amount</th>
      <th>Description</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
      <tr>
        <td><?= htmlspecialchars($row['created_at']) ?></td>
        <td><?= htmlspecialchars($row['type']) ?></td>
        <td>$<?= number_format($row['amount'], 2) ?></td>
        <td><?= htmlspecialchars($row['description']) ?></td>
      </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>
