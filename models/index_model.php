<?php
	/*establish the relation and manage the data*/
	/*test if the it can connect to the BDD*/
    function dbconnect()
    {
        $servername = "iteam-s.mg";
        $username = "USER";
        $password = "";
        $pdb="mysql:host=$servername;dbname=iteams;utf8mb4";

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
    

        