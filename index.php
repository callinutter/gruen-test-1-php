<?php include('server.php'); ?>
<style>
<?php require('css/index.css'); ?>
</style>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <img class="background-img" src="images/nature.jpg">
        <div class="container">        
            <div class="header">
                <h1 class="title">Welcome</h1>
                <p class="description">We are pleased that you have chosen to donate to our mission of making the earth a better place. If you would like to make a donation, please fill out this form.
                </p>
            </div>
        
<!--htmlspecialchars converts special characters to HTML entities so exploitation with script is not possible-->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
           
            <div class="form-input">
                <label for="name">Full Name : </label>
                <input type="text" name="name" required>
            </div>

            <div class="form-input">
                <label for="email">Email : </label>
                <input type="email" name="email" required>
            </div>
            
            <div class="form-input">
                <label for="selection">Donation Selection : </label>
                <select class="select-dropdown" name="selection">
                    <option>--Please make a selection--</option>
                    <option value="tree">Tree Planting</option>
                    <option value="animal">Animal Shelter</option>
                    <option value="child">Food for a child in need</option>
                </select>
            </div>
            
            <div class="form-input">
                <label for="amount">Please Specify an amount : </label>
                <input type="number" name="amount" required>
            </div>   
            <button type="submit" name="donate"> Donate </button>
        </form>
        </div>
            

    </body>
</html>
