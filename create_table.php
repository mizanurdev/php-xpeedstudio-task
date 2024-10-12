<?php
class Database {
    private $host = 'localhost';  // Your database host
    private $db_name = 'php_xpeedstudio_task';  // Your database name
    private $username = 'root';  // Your database username
    private $password = '';  // Your database password (leave blank for XAMPP default)
    private $conn;

    // Connect to the database
    public function connect() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
        }
        return $this->conn;
    }

    // Create table function
    public function createTable() {
        $sql = "
            CREATE TABLE IF NOT EXISTS submissions (
                id BIGINT(20) PRIMARY KEY AUTO_INCREMENT,
                amount INT(10),
                buyer VARCHAR(255),
                receipt_id VARCHAR(20),
                items VARCHAR(255),
                buyer_email VARCHAR(50),
                buyer_ip VARCHAR(20),
                note TEXT,
                city VARCHAR(20),
                phone VARCHAR(20),
                entry_at DATE,
                entry_by INT(10)
            );
        ";

        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            echo "Table 'submissions' created successfully.";
        } catch (PDOException $e) {
            echo "Error creating table: " . $e->getMessage();
        }
    }
}

// Instantiate the Database class and create the table
$database = new Database();
$database->connect();
$database->createTable();
?>
