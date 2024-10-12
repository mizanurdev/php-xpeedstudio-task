<?php
require_once 'Database.php';

class Submission
{
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function createSubmission($data)
    {
        $query = 'INSERT INTO submissions (amount, buyer, receipt_id, items, buyer_email, buyer_ip, note, city, phone, entry_at, entry_by) 
                  VALUES (:amount, :buyer, :receipt_id, :items, :buyer_email, :buyer_ip, :note, :city, :phone, :entry_at, :entry_by)';

        $stmt = $this->conn->prepare($query);

        // Bind data
        $stmt->bindParam(':amount', $data['amount']);
        $stmt->bindParam(':buyer', $data['buyer']);
        $stmt->bindParam(':receipt_id', $data['receipt_id']);
        $stmt->bindParam(':items', $data['items']);
        $stmt->bindParam(':buyer_email', $data['buyer_email']);
        $stmt->bindParam(':buyer_ip', $data['buyer_ip']);
        $stmt->bindParam(':note', $data['note']);
        $stmt->bindParam(':city', $data['city']);
        $stmt->bindParam(':phone', $data['phone']);
        $stmt->bindParam(':entry_at', $data['entry_at']);
        $stmt->bindParam(':entry_by', $data['entry_by']);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    public function getAllSubmissions()
    {
        $query = 'SELECT * FROM submissions';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
