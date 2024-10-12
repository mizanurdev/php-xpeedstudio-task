<?php
require_once 'classes/Submission.php';
require_once 'classes/Validation.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'amount' => $_POST['amount'],
        'buyer' => $_POST['buyer'],
        'receipt_id' => $_POST['receipt_id'],
        'items' => $_POST['items'],
        'buyer_email' => $_POST['buyer_email'],
        'buyer_ip' => $_SERVER['REMOTE_ADDR'], // Get the user's IP address
        'note' => $_POST['note'],
        'city' => $_POST['city'],
        'phone' => $_POST['phone'],
        'entry_at' => date('Y-m-d'), // Submission date
        'entry_by' => $_POST['entry_by'],
    ];

    // Initialize validation class
    $validation = new Validation();
    $errors = $validation->validateSubmission($data);

    if (empty($errors)) {
        $submission = new Submission();

        if ($submission->createSubmission($data)) {
            echo "Submission successful!";
        } else {
            echo "Submission failed!";
        }
    } else {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>
