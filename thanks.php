<?php session_start(); ?>
<style>
<?php require('css/index.css'); ?>
</style>

<!DOCTYPE html>
<html>
    <head>
        <title>Thanks</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
           <img class="background-img" src="images/success.jpg">
        <div class="container">
        <h1>Donation Successful!</h1>
        
        <?php if(isset($_SESSION['name'])) : ?>
        <h3>Thank you <strong><?php echo $_SESSION['name']; ?> ❤️ </strong></h3>
        <?php endif ?>
        <p class="description">We are pleased that you have chosen to donate to our mission of making the earth a better place.</p>
        
        <button class="button"><a href="index.php">Donate More</a></button>
        
        </div>
    </body>
</html>