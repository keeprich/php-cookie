<?php


if(isset($_COOKIE['username'])) {
    echo 'user '. $_COOKIE['username'] .' is set <br> ';
}else {
    echo 'user is not set';
}

?>