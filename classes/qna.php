<?php
namespace sablona\classes;

require_once __DIR__ . '/Database.php';

class QnA extends Database {
    private $table = 'gna';

    public function getAllQuestions() {
        $conn = $this->getConnection();
        try {
            $stmt = $conn->query("SELECT * FROM {$this->table}");
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            error_log("Error loading questions: ".$e->getMessage());
            return [];
        }
    }
}
?>