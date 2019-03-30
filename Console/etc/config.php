<?php
$conf = array(
    'User' => '', //Decode from Sha1
    'Password' => '', //Decode from Sha1
);

function Session_check() {
    global $conf;
    if ($_COOKIE['INFOCK'] != $conf['Password'] or ! isset($_COOKIE['INFOCK'])) {
        exit();
    }
}
?>
