<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
class Upload{
    // database connection and table name
    private $conn;
    private $table_name="admin_upload";
 
    // object properties
    public $subject;
    public $filename;
    public $description;
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    // signup user
    function insertrec(){
    
       
        // query to insert record
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    subject=:subject,filename=:filename,description=:description";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->subject=htmlspecialchars(strip_tags($this->subject));
        $this->filename=htmlspecialchars(strip_tags($this->filename));
        $this->description=htmlspecialchars(strip_tags($this->description));
    
        // bind values
        $stmt->bindParam(":subject", $this->subject);
        $stmt->bindParam(":filename", $this->filename);
        $stmt->bindParam(":description", $this->description);
    
        // execute query
        if($stmt->execute()){
            $this->id = $this->conn->lastInsertId();
            return true;
        }
    
        return false;
        
    }
    // login user
}
?>
    </body>
</html>
