<?php
$array_colors=['red', 'blue', 'green', 'yellow'];
shuffle($array_colors);
//print_r($array_colors);

foreach ($array_colors as $value)
    echo "<div style='background: $value; height: 40px; width: 100px'></div>";


