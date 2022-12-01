<!-- La vista és epecífica per cada acció -->

<?php //var_dump($tots) ?>

<ul>
    <?php
    foreach ($tots as $fila) {
        echo "<li><ul>";
        foreach ($fila as $key => $camp) {
            echo "<li><b>$key:</b> $camp</li>";
        }
        echo "</ul></li><br>";
    }
    ?>
</ul>