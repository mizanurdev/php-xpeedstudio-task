<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
</head>
<body>
    <h2>Submit Form</h2>
    <form action="submit.php" method="post">
        <label>Amount:</label>
        <input type="text" name="amount" required><br><br>

        <label>Buyer:</label>
        <input type="text" name="buyer" required><br><br>

        <label>Receipt ID:</label>
        <input type="text" name="receipt_id" required><br><br>

        <label>Items:</label>
        <input type="text" name="items" required><br><br>

        <label>Buyer Email:</label>
        <input type="email" name="buyer_email" required><br><br>

        <label>Note:</label>
        <textarea name="note" rows="4" required></textarea><br><br>

        <label>City:</label>
        <input type="text" name="city" required><br><br>

        <label>Phone:</label>
        <input type="text" name="phone" required><br><br>

        <input type="hidden" name="entry_by" value="1">

        <button type="submit">Submit</button>
    </form>
</body>
</html>
