<?php
$conf = array(
    'User' => 'b83e3fa184b5d84b968d84cba77e8a6eb8691234', //Decode from Sha1
    'Password' => '3e2eb50fd69630f1a663d148188145fcd0fce85c', //Decode from Sha1
);

function Session_check() {
    global $conf;
    if ($_COOKIE['INFOCK'] != $conf['Password'] or ! isset($_COOKIE['INFOCK'])) {
        exit();
    }
}
?>