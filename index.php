<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php
function saludo($nombre,$ciudad,$nacimiento) {
echo "<div> $nombre nacio en $ciudad en el año $nacimiento  </div>";
}
saludo("Alejandro","madrid","2014");
saludo("patricia","granada","1567");
?>

    </body>
</html>
