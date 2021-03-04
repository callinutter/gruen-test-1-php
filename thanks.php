<?php session_start(); ?>
<style>
<?php require('css/index.css'); ?>
</style>

<!DOCTYPE html>
<html>
    <head>
        <title>Welcome</title>
    </head>
    <body>
           <img class="background-img" src="images/success.jpg">
        <div class="container">
        <h1>Donation Successful!</h1>
        
        <?php if(isset($_SESSION['username'])) : ?>
        <h3>Thank you <strong><?php echo $_SESSION['name']; ?> ❤️ </strong></h3>
        
        <p class="description">We are pleased that you have chosen to donate to our mission of making the earth a better place.</p>
        
        <button class="button"><a href="index.php">Donate More</a></button>
        <?php endif ?>
        </div>
    </body>
</html>