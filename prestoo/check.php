<?php 
if(isset($_POST['submit'])){

    // recherche des varibles
      
    require 'config/config.php';
    $error =null;

   $name =  htmlspecialchars($_POST['name']); 
    $username = htmlspecialchars($_POST['username']); 
    $password =htmlspecialchars( $_POST['password']);
   $confirmPassword =  htmlspecialchars($_POST['Confirmpassword']);
    $email = htmlspecialchars($_POST['email']);
            

    // verification des inputs et leur valeurs;
        
    if (empty($username) && empty($name) && empty($password) && empty($confirmPassword)) 
    {
        echo  $error = "<div><p>fields invalide</p></div>";
        header("Location: ../private/login.php?error=emptyfield&username=".$username);
        exit();         
    } else if(strlen($name) < 2){
         header("Location: ../private/login.php?error=nameShouldBeLOnger&username=".$username);
         exit();

     }else if (strlen($username) < 2){
         header("Location: ../private/login.php?error=UsernameShouldBeLOnger&username=".$username);
         exit();
     } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
         header("Location: ../private/login.php?error=WrongEmail&username=".$username);
         exit();
     } elseif($password != $confirmPassword){
         header("Location: ../private/login.php?error=PasswordDoesNotMatch&username=".$username);
         exit();
     }
     
        elseif (!preg_match('/^[a-zA-Z0-9]*/', $username)) {
            header("Location: ../private/login.php?error=invalidusername&username=".$username);
            exit();
        } 
     else {
        $stmt = $pdo->prepare('SELECT * FROM users WHERE email = ?');
         $stmt->execute([$email]);
         if($stmt->rowCount() != 0){
             header("Location: ../private/login.php?error=WrognEmail=".$username);
              exit();
         }else {
             $hashedPassword = password_hash($password, PASSWORD_ARGON2ID);
             $sql = "INSERT INTO users(name, username, email, password) VALUES(?, ?, ?, ?)";
             $stmt= $pdo->prepare($sql);
             $stmt->execute([$name, $username,$email,  $hashedPassword]);
             $error = "Votre compte à été créer";
             header("Location: ../private/login.php?succes=YourAcountHaveBeenCreated");
             exit();
 
         }
      

} 

}