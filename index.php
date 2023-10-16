<?php
    $db = new PDO("sqlite:./Quimilaus3.db");
    foreach ($db->query("SELECT id, nome FROM Clientes") as $row) 
    {
       print($row);       
       echo "<br>";
    }   
?>