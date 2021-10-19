
<?php require 'includes/head.php'; ?>
<section class="main-section">
        <div class="form-container">
            <h1 class="login-h2"> PRESTO</h1>
            <form  class="form" action="check.php" method="POST">
                <input class="input-login" type="text" name="name" placeholder="name" value="">
                <input class="input-login" type="text" name="username" placeholder="Username" value="">
                <input class="input-login" type="password" name="password" placeholder="Password" value="">
                <div>
                    <input type="submit" name="submit" class="btn" value="Connection" />
                    <li>
                        <a class="lili-login" href="register.php">You don't have any account yet?</a>
                    </li>
                </div>
            </form>
        </div>
        
</section>

<?php require '../private/includes/footer.php'; ?>

