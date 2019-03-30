<?php

$i = popen("sudo top -bn 1 -i -c | grep 'KiB Mem' > /tmp/2.cache && awk '{print $4 / $6}' /tmp/2.cache", "r");
$ou = fread($i, 1000);
echo substr($ou,0,strlen($a)-1).'%';
pclose($i);
?>