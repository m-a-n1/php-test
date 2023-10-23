<form action="array.php" method="GET">
    <input type="text" name="xname">
    <input type="submit">
</form>

<?php
$xname = $_GET["xname"];
echo $xname;

$family = [
    "Designer" => "Nour",
    "programmer" => "Majed",
    "Gamer" => "Anas"
];

echo $family[$xname];

/*$family = array("father", "mother", "brother");
$family[1] = "love";
$family[3] = "sister";
echo $family[1];
echo $family[3];
echo count($family);
*/
?>