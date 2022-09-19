<?php

// $question=$_REQUEST['question'];
if(isset($_POST['idQuestion'])){

    $name = $_POST['idQuestion'];
    echo'Prueba:'.$name;
    
    }else{
    $fallo="Falla";
    echo'Prueba:'.$fallo;
    
    }
$emotion=$_REQUEST['idEmotion'];
$resp=$_REQUEST['reponse'];
date_default_timezone_set('America/Mexico_City');
$datetime1=date('Y-m-d H:i:s');

try {

    $conexion = new PDO("mysql:host=localhost;port=33065;dbname=encuesta", "root", '');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    $pdo = $conexion->prepare('INSERT INTO tbl_answers(idAnswer, idQuestion, idEmotion, reponse, Date) VALUES(?, ?, ?, ?)');
    $pdo->bindParam(4, $question);
    $pdo->bindParam(3, $emotion);
    $pdo->bindParam(5, $reponse);
    $pdo->bindParam(1, $datetime1);
    $pdo->execute() or die(print($pdo->errorInfo()));
    
    echo json_encode('true');

} catch(PDOException $error) {
    echo $error->getMessage();
    die();
}
?>