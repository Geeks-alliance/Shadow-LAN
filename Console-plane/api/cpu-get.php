<?php

$i = popen("sudo top -bn 1 -i -c | grep '%Cpu' > /tmp/1.cache && awk '{print $3 + $5}' /tmp/1.cache", "r");
$hh = fread($i, 1000);
$hharray = (explode(substr($hh, -1), $hh, 2));

for ($ii=0; $ii < count($hharray); $ii++) { 
    $h += $hharray[$ii];
}

$ou = $h/count($hharray);
echo $ou.'%';
pclose($i);
?>