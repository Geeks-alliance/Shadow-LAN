<?php
include '../api/config.php';
include 'practical.php';

if (hash('sha1', $_POST['User']) === $conf['User'] and hash('sha1', $_POST['Password']) === $conf['Password']) {
    setcookie("INFOCK", hash('sha1', $_POST['Password']),time()+3600, '/');
    echo 1;
} else {
    echo 2;
}
?>