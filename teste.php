<?php
$lista = ["igor", "ana", "bia", "gui"];
for ($i = 0; $i < count($lista); $i++) {
    if ($lista[$i] == "bia") {
        continue;
    }
    echo $lista[$i];
}

?>