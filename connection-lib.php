<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "javatpoint";  
      
    $con = new mysqli('localhost', 'root','', 'login');  
    if($conn->connect_error) {  
        die("Failed to connect with MySQL: ". $conn->connect_error);  
        echo "Error";
    }else{
        echo "success";
    }  
?>  