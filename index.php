<?php

$numbers = [7, 9, 8, 9, 8, 8, 6];

include "functions.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pair Program 1</title>
</head>
<body>
<?php
printArray($numbers);
echo "<br>";
largest($numbers);
echo "<br>";
average($numbers);
echo "<br>";
removeDups($numbers);
echo "<br>";

?>

</body>
</html>