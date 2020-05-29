<?php
if(isset($_POST['submit'])){
    $username = htmlentities($_POST['username']);

    setcookie('username', $username, time()+3600 );

    header('Location: newPage.php');
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Cookie</title>
</head>
<body>

<h1>User Login Form</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<input type="text" name="username" placeholder="Username">
<input type="submit" value="submit" name="submit">
</form>
    
</body>
</html>