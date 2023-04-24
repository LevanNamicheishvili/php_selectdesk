<?php

$moqmedeba = $_POST["moqmedeba"];

if ($moqmedeba == "magidisSheqmna")
{

    $qula = $_POST["qula"];
    $pc = $_POST["pc"];
    $davi = $_POST["davi"];
    echo $qula; echo " " ;
    echo $pc; echo " " ;
    echo $davi; echo " " ;

    $mysqli = new mysqli("localhost","root","","test_db");

    // Check connection
  


$sql = "INSERT INTO test_table(id, qula, pc, davi)
VALUES(null,'$qula', '$pc', '$davi')";
// Insert a row of information into the table "example"
echo $sql;
echo "<br />";
$mysqli->query($sql) ;



}

?>