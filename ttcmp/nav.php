<?php
// informations d'identification
define('DB_SERVER','localhost');
define('DB_Username','root');
define('DB_Password',"");
define('Blog','registration');
// connexion à la base de données Mysql
$conn=mysqli_connect(DB_SERVER,DB_Username,DB_Password,Blog);
//verifier la connexion
if($conn===false){
    die("ERREUR : impossible de se connecter.".mysqli_connect_error());
}
if (isset($_POST['submit'])) {
    if (empty($_POST['email'])) {
        $error_message = "Email cannot be empty !!";
        header("Location: form.php?error=" . urlencode($error_message));
        exit();
    } else if (empty($_POST['name'])) {
        $error_message = "Name cannot be empty !!";
        header("Location: form.php?error=" . urlencode($error_message));
        exit();
    }
}
?>

?>