<?php
// Check for empty fields
if(empty($_POST['article_title'])  ||   empty($_POST['article_author'])  || empty($_POST['article_message']) || $_FILES['article_photos']['size'] > 2097152 ){
    
   return false;
       
   }

$name_file = $_FILES['article_photos']['name'];
$content_dir = '../../photos'; // dossier où sera déplacé le fichier
$tmp_file = $_FILES['article_photos']['tmp_name'];
move_uploaded_file($tmp_file, "$content_dir/$name_file");

$name = strip_tags(htmlspecialchars($_POST['article_title']));
$email_address = strip_tags(htmlspecialchars($_POST['article_author']));
$message = strip_tags(htmlspecialchars($_POST['article_message']));
$photo = "photos/".$_FILES['article_photos']['name'];

$servername = "localhost";
$username = "";
$password = "";


try {
    $conn = new PDO("mysql:host=$servername;dbname=santhony", $username, $password);
    // set the PDO error mode to exception
    
    // empêcher de charger les mêmes images
        // on leur crée un ID unique avec l'Id de l'article
        $stmt = $conn->prepare("SELECT MAX(id) as id FROM blog");
        $stmt->execute();

       $result = $stmt->fetch();
        $idFuturPost =$result ["id"]+1;
    
    $sql = "INSERT INTO blog (auteur, titre, message, photo) VALUES(:auteur, :titre, :message, :photo)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":titre", $name);
    $stmt->bindParam(":auteur", $email_address);
    $stmt->bindParam(":message", $message);
    $stmt->bindParam(":photo", $photo);
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->fetchAll();
    
    }

catch(PDOException $e)
    {
    /*echo "Connection failed: " . $e->getMessage();*/
    }

$phototable = array($_FILES['article_photos']['name'], $_FILES['article_photos']['tmp_name'], $_FILES['article_photos']['type'], $_FILES['article_photos']['size'], $_FILES['article_photos']['error']);
$table = array($name, $message, $email_address, $phototable);

echo json_encode($table);

?>