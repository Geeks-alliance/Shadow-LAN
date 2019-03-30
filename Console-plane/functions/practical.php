<?php

function Url_herf($url) {
    echo sprintf("<script>window.location.href='%s';</script>", $url);
}

?>