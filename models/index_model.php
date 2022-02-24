<?php
	/*test if the it can connect to the DATABASE*/
    /*fetch the DATABASE*/
    require('/var/www/env.php');
    function dbconnect()
    {
        $servername = "iteam-s.mg";
        $username = $_ENV['ITEAMS_DB_USER'];
        $password = $_ENV["ITEAMS_DB_PASSWORD"];
        $pdb="mysql:host=$servername;dbname=ITEAMS;utf8mb4";

        try 
        {
            $db = new PDO($pdb,$username, $password);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        }catch(PDOException $e)
        {
            die("Errer".$e->getMessage());
        }
    }
    

        
