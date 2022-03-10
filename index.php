<?php

$paragrafo = "Lorem ipsum dolor sit amet, consectetur adipisci elit, sed do eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullamco laboriosam, nisi ut aliquid ex ea commodi consequatur. Duis aute irure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum";
$lunghezzaParagrafo = strlen($paragrafo);

$parolaCensurata = $_GET['censura'];

$paragrafoCensurato = str_ireplace($parolaCensurata, '***', $paragrafo);

$lunghezzaParagrafoCensurato = strlen($paragrafoCensurato);

?>

<p>
    <?php echo $paragrafo; ?>
</p>

<p>
<?php
    
    echo $lunghezzaParagrafo;
?>
</p>

<p>
    <?php echo $paragrafoCensurato; ?>
</p>

<p>
<?php
    
    echo $lunghezzaParagrafoCensurato;
?>
</p>