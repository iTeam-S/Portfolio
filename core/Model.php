<?php
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


    $db=dbconnect();

        if (isset($_GET["id"]) && !empty($_GET["id"])){ 
            $id = $_GET["id"];
        } else if (isset($_GET["u"]) && !empty($_GET["u"])){
            $u = $_GET["u"];
            $req = "SELECT id FROM membre WHERE prenom_usuel = :u";
            $res = $db->prepare($req);
            $res->execute(["u" => $u]);
            $mbr= $res->fetch();
            $id = $mbr["id"];

        }


        /* Checking the about infos */

            $sql1 = "SELECT * FROM membre WHERE id = :id AND actif = 1;";
            $result1 = $db->prepare($sql1);
            $result1->execute(["id" => $id]);
            $membre_info = $result1->fetch();        

        /* Checking the skills infos */
        $sql3 = "SELECT competences.*, categorie_competence.* FROM competences, categorie_competence WHERE id_membre = :id AND competences.id_categorie = categorie_competence.id;";
        $result3 = $db->prepare($sql3);
        $result3->execute(["id" => $id]);
        
        /* Checking the experiences infos */
        $sql4 = "SELECT * FROM experiences WHERE id_membre = :id;";
        $result4 = $db->prepare($sql4);
        $result4->execute(["id" => $id]);
        
        /* Checking the formations infos */
        $sql5 = "SELECT * FROM formations WHERE id_membre = :id;";
        $result5 = $db->prepare($sql5);
        $result5->execute(["id" => $id]);

    /* Variables */
    
        $fullname = $membre_info["prenom"] . " " . $membre_info["nom"];
     
        $fonction_pers = explode(",", $membre_info["fonction"]);
        $cv = $membre_info["cv"];
        $description_pers = $membre_info["description"];
        $photo_pers = $membre_info["user_github_pic"];
        $photo_couverture_pers = $membre_info["pdc"];

        $tel = $membre_info["tel1"];
        $email = $membre_info["mail"];
        $adresse = $membre_info["adresse"];
        $facebook = $membre_info["facebook"];
        $github = $membre_info["user_github"];
        $linkedin = $membre_info["linkedin"];


?>