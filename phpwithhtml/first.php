<?php

if ($_SERVER["REQUEST_METHOD"]== "POST") {
$Number = htmlspecialchars($_POST["Number"]);
$Address = htmlspecialchars($_POST["Address"]);
$Email = htmlspecialchars($_POST["Email"]);
$Pass = htmlspecialchars($_POST["Pass"]);

if (empty($Number) || empty($Address))
    {
 header("Location: first.html");
 exit();   
 }
echo $Number;
echo "<br>";
echo $Address;
echo "<br>";
echo $Email;
echo "<br>";
echo $Pass;
echo "<br>";
}
?>

<?php
echo $_SERVER["SERVER_NAME"];
echo $_SERVER["DOCUMENT_ROOT"];
?>

<?php

echo "name";
echo "Atif Arman";
?>