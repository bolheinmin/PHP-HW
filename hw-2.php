<!doctype html>
<html lang="en">
<head>
    <title>hw-2</title>
</head>
<body>
<?php

$cities = array(
    'New York ( NY )'     => 8175133,
    'Los Angeles ( CA )'  => 3792621,
    'Chicago ( IL )'      => 2695598,
    'Houston ( TX )'      => 2100263,
    'Philadelphia ( PA )' => 1526006,
    'Phoenix ( AZ )'      => 1445632,
    'San Antonio ( TX )'  => 1327407,
    'San Diego ( CA )'    => 1307402,
    'Dallas ( TX )'       => 1197816,
    'San Jose ( CA )'     => 945942,
);
?>
<h1>HW-2</h1>
    <div>
        <table border="1" cellspacing="0" cellpadding="5">
            <?php
echo "<thead> <th colspan=2> Total population in all 10 largest cities </th></thead>";
foreach ($cities as $key => $value) {
    echo "<tr><td>$key<td>$value</tr>";
}

?>
        </table>
    </div>
<br><br>
    <div>
        <table border="1" cellspacing="0" cellpadding="5">
            <?php
$population = asort($cities);
echo "<thead> <th colspan=2> 10 largest cities sort by  by population </th></thead>";
foreach ($cities as $key => $value) {
    echo "<tr><td>$key<td>$value</tr>";
}

?>
        </table>
    </div>
    <br><br>

    <div>
        <table border="1" cellspacing="0" cellpadding="5">
            <?php
$city_name = ksort($cities);
echo "<thead> <th colspan=2> 10 largest cities sort by by name </th></thead>";
foreach ($cities as $key => $value) {
    echo "<tr><td>$key<td>$value</tr>";
}

?>
        </table>
    </div>
</body>
</html>