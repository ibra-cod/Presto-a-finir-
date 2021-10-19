<?php 
    require 'config/config.php';

if(isset($_POST['submit'])){

    // recherche des varibles
      
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
        header("Location: ../register.php?error=emptyfield&username=".$username);
        exit();         
    } else if(strlen($name) < 2){
         header("Location: ../register.php?error=nameShouldBeLOnger&username=".$username);
         exit();

     }else if (strlen($username) < 2){
         header("Location: ../register.php?error=UsernameShouldBeLOnger&username=".$username);
         exit();
     } elseif(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE){
         header("Location: ../register.php?error=WrongEmail=".$username);
         exit();
     } elseif($password != $confirmPassword){
         header("Location: ../register.php?error=PasswordDoesNotMatch&username=".$username);
         exit();
     }
        elseif (!preg_match('/^[a-zA-Z0-9]*/', $username)) {
            header("Location: ../egister.php?error=invalidusername&username=".$username);
            exit();
        } 
     else {
        $stmt = $pdo->prepare('SELECT * FROM users WHERE email = ?');
         $stmt->execute([$email]);
         if($stmt->rowCount() != 0){
             header("location: ../register.php.php?error=sql=".$username);
              exit();
         }else {
             $hashedPassword = password_hash($password, PASSWORD_ARGON2ID);
             $sql = "INSERT INTO users(`name`, `username`, `email`, `password`) VALUES(':name', ':username, :'email',`:password`', ?)";
             $stmt= $pdo->prepare($sql);
             $stmt->execute(['name' => $name, $username,$email,  $hashedPassword]);
             $error = "Votre compte à été créer";
             header("location: ../register.php?succes=YourAcountHaveBeenCreated");
             exit();
 
         }
      

} 

}