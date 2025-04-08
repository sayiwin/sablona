<?php
error_reporting(error_level: E_ALL); 
ini_set(option: "display_errors", value: "0n");
require_once(__ROOT__.'/classes/Database.php');

class Kontakt extends Database {
    protected $connection;
    
    public function __construct() {
        $this->connect();

        $this->connection = $this->getConnection();
    }
    
    public function vlozitSpravv($meno, $email, $sprava) {
        $sql = "INSERT INTO kontakt_formular (meno, email, sprava)
        VALUES(:meno, :email, :sprava)";
        $statement = $this->connection->prepare($sql);
        
        try {
            $insert = $statement->execute(array(':meno' => $meno,
            ':email' => $email, ':sprava' => $sprava));
            http_response_code(response_code: 200);
            return $insert;
        } catch (\Exception $exception) {
            http_response_code(response_code: 500);
            return false;
        }
    }
}
?>