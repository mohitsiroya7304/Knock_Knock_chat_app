<?php 

    session_start();

    if(isset($_SESSION['unique_id'])){
        header("location: users.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knock-Knock Chat App</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>
<?php include_once "header.php" ?>
<body>
    
<div class="wrapper">
    <section class="form signup">
        <header>Knock-Knock</header>
        <form action="#" method="post" enctype="multipart/form-data" autocomplete="off">
            <div class="error-text"></div>

            <div class="name-details">
                <div class="field input">
                    <label> First Name</label>
                    <input type="text" name="fname"
                    placeholder="First Name" required>
                </div>
                <div class="field input">
                    <label> Last Name</label>
                    <input type="text" name="lname"
                    placeholder="Last Name" required>
                </div>
            </div>

            <div class="field input">
                <label> Email Address</label>
                <input type="text" name="email" placeholder="Enter Your Email" required>
            </div>

            <div class="field input">
                <label> Password</label>
                <input type="password" name="password" placeholder="Enter Your Password" required>
            </div>

            <div class="field image">
                <label>Profile Image</label>
                <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
            </div>
            <div class="field button">
                <input type="submit" name="submit" value="Continue to Chat">
            </div>

        </form>

        <div class="link">Already signup? <a href="login.php">Login now</a></div>
    </section>

</div>

<script type="text/javascript" src="js/signup.js"></script>

</body>
</html>