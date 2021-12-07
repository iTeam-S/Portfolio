<?php
     /* ALL THE DATA AND VARIABLES*/

    require("./models/index_model.php");

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
        $sql3 = "SELECT competences.*, categorie_competence.* FROM competences, categorie_competence WHERE id_membre = :id AND competences.id_categorie = categorie_competence.id ORDER BY ordre DESC;";
        $result3 = $db->prepare($sql3);
        $result3->execute(["id" => $id]);
        
        /* Checking the experiences infos */
        $sql4 = "SELECT * FROM experiences WHERE id_membre = :id ORDER BY ordre DESC ;";
        $result4 = $db->prepare($sql4);
        $result4->execute(["id" => $id]);
        
        /* Checking the formations infos */
        $sql5 = "SELECT * FROM formations WHERE id_membre = :id ORDER BY ordre DESC;";
        $result5 = $db->prepare($sql5);
        $result5->execute(["id" => $id]);

        /* Checking the distinction infos */
        $sql6 = "SELECT * FROM distinctions WHERE id_membre = :id ORDER BY ordre DESC;";
        $result6 = $db->prepare($sql6);
        $result6->execute(["id" => $id]);
        /*Checking projets*/
        $sql7= "SELECT * FROM projets WHERE id_membre = :id ORDER BY ordre DESC;";
        $result7 = $db->prepare($sql7);
        $result7->execute(["id" => $id]);

         /*Checking widget*/
         $sql8= "SELECT * FROM autres WHERE id_membre = :id;";
         $result8 = $db->prepare($sql8);
         $result8->execute(["id" => $id]);


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
        $dark_mode = $membre_info["dark"];

        /* mailing */
        $mail_username = "";
        $mail_password = "";
        $client_email  = $_POST['email']   ?? NULL;
        $client_name   = $_POST['name']    ?? NULL;
        $subject       = $_POST['subject'] ?? NULL;
        $message       = $_POST['message'] ?? NULL;


?>
