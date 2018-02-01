<h1>Helloworld</h1>




<?php
$currentDate = time();
$yesterday = $currentDate - 60*60*24;

echo $currentDate . "<br />";
echo date('d.m.Y H:i:s') ."<br />";
echo date('d.m.Y H:i:s', $yesterday);

require_once ('template.php')
?>

<p>some text  <?= $currentDate ?></p>
