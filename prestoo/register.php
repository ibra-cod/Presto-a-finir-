<?php require 'includes/head.php'; ?>

<section class="main-section">
    <div class="container">
        <div class="form-container">
            <h1 class="presto-login">PRESTO</h1>
            <form action="../check-register.php" method="POST">
                <input class="input-login" type="text" name="name" placeholder="First name" value="">
               <?php if(isset($error)):; ?>
                <div class>
                    <p><?= $error ?></p>
                </div>  
                <?php endif; ?>
                <input class="input-login" type="text" name="username" placeholder="name" value="">
                <input class="input-login" type="text" name="email" placeholder="Email" value="">
                <input class="input-login" type="password" name="password" placeholder="Password" value="">
                <input class="input-login" type="password" name="Confirmpassword" placeholder="Confirmer votre mot de passe" value="">
                <div>
                    <button type="submit" name="submit" class="btn btn-primary">S'enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php require 'includes/footer.php'; ?>

