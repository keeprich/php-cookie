<?php 

$userData = [ 'name' => 'kenneth', 'email' => 'kenneth@email.com', 'age' => '23' ];

// converting the userdata Array to string

$userData = serialize($userData);

setcookie('user', $userData, time() + (86400 + 30));

// getting all cookie variables

$userData = unserialize( $_COOKIE[$userData] );

// echo $userData['name'];
print_r($userData['name']);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   mq
</body>
</html>