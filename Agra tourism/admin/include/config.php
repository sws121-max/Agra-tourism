<?php
class db_controller
{
 
    private $servername = "localhost";
    
    private $username =  "thepubli_agra";
    
    private $password = "agra@123";
    
    private $dbname = "thepubli_agra_tour";
    
    public $conn;
    
    private $msg;
    
    function __construct()
    {
        $c=$this->connect();
    }
    
    function connect()
    {
        $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
        
        if(!$this->conn)
        {
            die("Conection Failed".$this->conn->connect_error);
        }
        
        
    }
   function insert($query)
   {
     $result = $this->conn->query($query); 
       if($result)
       {
          return $this->msg= "Registration Successfully";
            
       }
       else
       {
           echo "Error: " . $query . "<br>" . $this->conn->error;
       }
       
       
   }
    
    function select($query)
    {
       $result = $this->conn->query($query); 
           while($row = $result->fetch_array())
           {
              $resultset[]= $row;
           }
        if(!empty($resultset))
        {
        return $resultset;
        }
    }
    
function rowcount($query)
{
    $result = $this->conn->query($query);
    $count = $result->num_rows;
    return $count;
}

function delete($query)
{
   $result= $this->conn->query($query);
    
    if($result)
       {
          return $this->msg= "Deleted Successfully";
            
       }
}
    function update($query)
    {
        $result = $this->conn->query($query);
        
       if($result)
       {
          return $this->msg= "Update Successfully";
            
       }
       else
       {
           echo "Error: " . $query . "<br>" . $this->conn->error;
       }
    }
}
?>