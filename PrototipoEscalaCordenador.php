<?php 
// FAZ A CONEXÃO COM O BANCO 
    include_once 'conexao.php';
// ================================= MISSA DO DIA 1 =======================================//
// REALIZA A CONSULTA DA MISSA DAS 7 SOBRE O GRUPO DE CERMONIARIOS 11
    $id_um_um = "11";
    $sql = "SELECT NomeCerimoniario FROM escala WHERE idTipoMissa = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id_um_um);
    $stmt->execute();
    $listas_um_um = $stmt->fetchAll(PDO::FETCH_ASSOC);
// REALIZA A CONSULTA DA MISSA DAS 7 SOBRE O GRUPO DE COROINHAS 11
    $sql = "SELECT 	NomeCoroinha FROM escalacoroinha WHERE idTipoMissa = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id_um_um);
    $stmt->execute();
    $listas_um_um_coroinha = $stmt->fetchAll(PDO::FETCH_ASSOC);
// REALIZA A CONSULTA DA MISSA DAS 10 SOBRE O GRUPO DE CERMONIARIOS 12
    $id_um_DOIS = "12";
    $sql = "SELECT NomeCerimoniario FROM escala WHERE idTipoMissa = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id_um_DOIS);
    $stmt->execute();
    $listas_um_DOIS = $stmt->fetchAll(PDO::FETCH_ASSOC);
// REALIZA A CONSULTA DA MISSA DAS 10 SOBRE O GRUPO DE COROINHAS 12
    $sql = "SELECT 	NomeCoroinha FROM escalacoroinha WHERE idTipoMissa = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id_um_DOIS);
    $stmt->execute();
    $listas_um_DOIS_coroinha = $stmt->fetchAll(PDO::FETCH_ASSOC);
// REALIZA A CONSULTA DA MISSA DAS 10 SOBRE O GRUPO DE CERMONIARIOS 13
    $id_um_TRES = "13";
    $sql = "SELECT NomeCerimoniario FROM escala WHERE idTipoMissa = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id_um_TRES);
    $stmt->execute();
    $listas_um_TRES = $stmt->fetchAll(PDO::FETCH_ASSOC);
// REALIZA A CONSULTA DA MISSA DAS 10 SOBRE O GRUPO DE COROINHAS 13
    $sql = "SELECT 	NomeCoroinha FROM escalacoroinha WHERE idTipoMissa = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id_um_TRES);
    $stmt->execute();
    $listas_um_TRES_coroinha = $stmt->fetchAll(PDO::FETCH_ASSOC);
// ================================= MISSA DO DIA 2 =======================================//
// REALIZA A CONSULTA DA MISSA DAS 7 SOBRE O GRUPO DE CERMONIARIOS 21
    $id_dois_UM = "21";
    $sql = "SELECT NomeCerimoniario FROM escala WHERE idTipoMissa = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id_dois_UM);
    $stmt->execute();
    $listas_dois_UM = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // REALIZA A CONSULTA DA MISSA DAS 7 SOBRE O GRUPO DE COROINHAS 21
    $sql = "SELECT 	NomeCoroinha FROM escalacoroinha WHERE idTipoMissa = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id_dois_UM);
    $stmt->execute();
    $listas_dois_UM_coroinha = $stmt->fetchAll(PDO::FETCH_ASSOC);
// REALIZA A CONSULTA DA MISSA DAS 10 SOBRE O GRUPO DE CERMONIARIOS 22
    $id_dois_DOIS = "22";
    $sql = "SELECT NomeCerimoniario FROM escala WHERE idTipoMissa = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id_dois_DOIS);
    $stmt->execute();
    $listas_dois_DOIS = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // REALIZA A CONSULTA DA MISSA DAS 10 SOBRE O GRUPO DE COROINHAS 22
    $sql = "SELECT 	NomeCoroinha FROM escalacoroinha WHERE idTipoMissa = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id_dois_DOIS);
    $stmt->execute();
    $listas_dois_DOIS_coroinha = $stmt->fetchAll(PDO::FETCH_ASSOC);
// REALIZA A CONSULTA DA MISSA DAS 18 SOBRE O GRUPO DE CERMONIARIOS 23
    $id_dois_TRES = "23";
    $sql = "SELECT NomeCerimoniario FROM escala WHERE idTipoMissa = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id_dois_TRES);
    $stmt->execute();
    $listas_dois_TRES = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // REALIZA A CONSULTA DA MISSA DAS 18 SOBRE O GRUPO DE COROINHAS 23
    $sql = "SELECT 	NomeCoroinha FROM escalacoroinha WHERE idTipoMissa = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id_dois_TRES);
    $stmt->execute();
    $listas_dois_TRES_coroinha = $stmt->fetchAll(PDO::FETCH_ASSOC);
// ================================= MISSA DO DIA 3 =======================================//
// REALIZA A CONSULTA DA MISSA DAS 7 SOBRE O GRUPO DE CERMONIARIOS 31
$id_tres_UM = "31";
$sql = "SELECT NomeCerimoniario FROM escala WHERE idTipoMissa = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id_tres_UM);
$stmt->execute();
$listas_tres_UM = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // REALIZA A CONSULTA DA MISSA DAS 7 SOBRE O GRUPO DE COROINHAS 31
    $sql = "SELECT 	NomeCoroinha FROM escalacoroinha WHERE idTipoMissa = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id_tres_UM);
    $stmt->execute();
    $listas_tres_UM_coroinha = $stmt->fetchAll(PDO::FETCH_ASSOC);
// REALIZA A CONSULTA DA MISSA DAS 10 SOBRE O GRUPO DE CERMONIARIOS 32
$id_tres_DOIS = "32";
$sql = "SELECT NomeCerimoniario FROM escala WHERE idTipoMissa = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id_tres_DOIS);
$stmt->execute();
$listas_tres_DOIS = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // REALIZA A CONSULTA DA MISSA DAS 10 SOBRE O GRUPO DE COROINHAS 32
    $sql = "SELECT 	NomeCoroinha FROM escalacoroinha WHERE idTipoMissa = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id_tres_DOIS);
    $stmt->execute();
    $listas_tres_DOIS_coroinha = $stmt->fetchAll(PDO::FETCH_ASSOC);
// REALIZA A CONSULTA DA MISSA DAS 18 SOBRE O GRUPO DE CERMONIARIOS 33
$id_tres_TRES = "33";
$sql = "SELECT NomeCerimoniario FROM escala WHERE idTipoMissa = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id_tres_TRES);
$stmt->execute();
$listas_tres_TRES = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // REALIZA A CONSULTA DA MISSA DAS 18 SOBRE O GRUPO DE COROINHAS 33
    $sql = "SELECT 	NomeCoroinha FROM escalacoroinha WHERE idTipoMissa = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id_tres_TRES);
    $stmt->execute();
    $listas_tres_TRES_coroinha = $stmt->fetchAll(PDO::FETCH_ASSOC);
// ================================= MISSA DO DIA 4 =======================================//
// REALIZA A CONSULTA DA MISSA DAS 7 SOBRE O GRUPO DE CERMONIARIOS 41
$id_quatro_UM = "41";
$sql = "SELECT NomeCerimoniario FROM escala WHERE idTipoMissa = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id_quatro_UM);
$stmt->execute();
$listas_quatro_UM = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // REALIZA A CONSULTA DA MISSA DAS 7 SOBRE O GRUPO DE COROINHAS 41
    $sql = "SELECT 	NomeCoroinha FROM escalacoroinha WHERE idTipoMissa = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id_quatro_UM);
    $stmt->execute();
    $listas_quatro_UM_coroinha = $stmt->fetchAll(PDO::FETCH_ASSOC);
// REALIZA A CONSULTA DA MISSA DAS 10 SOBRE O GRUPO DE CERMONIARIOS 42
$id_quatro_DOIS = "42";
$sql = "SELECT NomeCerimoniario FROM escala WHERE idTipoMissa = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id_quatro_DOIS);
$stmt->execute();
$listas_quatro_DOIS = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // REALIZA A CONSULTA DA MISSA DAS 10 SOBRE O GRUPO DE COROINHAS 42
    $sql = "SELECT 	NomeCoroinha FROM escalacoroinha WHERE idTipoMissa = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id_quatro_DOIS);
    $stmt->execute();
    $listas_quatro_DOIS_coroinha = $stmt->fetchAll(PDO::FETCH_ASSOC);
// REALIZA A CONSULTA DA MISSA DAS 18 SOBRE O GRUPO DE CERMONIARIOS 43
$id_quatro_TRES = "43";
$sql = "SELECT NomeCerimoniario FROM escala WHERE idTipoMissa = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id_quatro_TRES);
$stmt->execute();
$listas_quatro_TRES = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // REALIZA A CONSULTA DA MISSA DAS 18 SOBRE O GRUPO DE COROINHAS 43
    $sql = "SELECT 	NomeCoroinha FROM escalacoroinha WHERE idTipoMissa = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id_quatro_TRES);
    $stmt->execute();
    $listas_quatro_TRES_coroinha = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escala</title>
</head>

<body>
    <div  style="border-style:double; border-color: black;height: 50px; background: white; width:15%; float: right; margin-top:250px;  margin-right:785px;">DIA 1</div> 
    <div  style="border-style:double; border-color: black;height: 50px; background: white; width:10%; float: right; margin-top:-56px;  margin-right:1000px;">DATAS</div> 
    <div  style="border-style:double; border-color: black;height: 250px; background: white; width:10%; float: right; margin-top:20px;  margin-right:1000px;">MISSA DAS 7</div>
    <div style="border-style:double; border-color: black;height: 250px; background: white; width:10%; float: right; margin-top:20px; margin-right:1000px;">BATIZADO</div>
    <div style="border-style:double; border-color: black;height: 250px; background: white; width:10%; float: right; margin-top:20px; margin-right:1000px;">MISSA DAS 10</div>
    <div style="border-style:double; border-color: black;height: 250px; background: white; width:10%; float: right; margin-top:20px; margin-right:1000px;">MISSA DAS 18</div>
    <div  style="border-style:double; border-color: black;height: 250px; background: white; width:15%; float: right; margin-top:-1084px;  margin-right:785px;">DATA E HORA 7 </br>  
    <?php foreach ($listas_um_um as $lista): ?>
                <?php  
                    echo $lista['NomeCerimoniario']. "<br>";

                ?>
        
        <?php endforeach; ?>
        <?php echo".<br>" ?>
        <?php foreach ($listas_um_um_coroinha as $lista_coro): ?>
                <?php  
                    echo $lista_coro['NomeCoroinha']. "<br>";
                ?>
        
        <?php endforeach; ?>
    </div>
    <div  style="border-style:double; border-color: black;height: 250px; background: white; width:15%; float: right; margin-top:-808px;  margin-right:785px;">BATIZADO</div>
    <div  style="border-style:double; border-color: black;height: 250px; background: white; width:15%; float: right; margin-top:-532px;  margin-right:785px;">DATA E HORA 10 </br>
    <?php foreach ($listas_um_DOIS as $lista): ?>
                <?php  
                    echo $lista['NomeCerimoniario']. "<br>";

                ?>
        
        <?php endforeach; ?>
        <?php echo".<br>" ?>
        <?php foreach ($listas_um_DOIS_coroinha as $lista_coro): ?>
                <?php  
                    echo $lista_coro['NomeCoroinha']. "<br>";
                ?>
        
        <?php endforeach; ?>
</div>
    <div  style="border-style:double; border-color: black;height: 250px; background: white; width:15%; float: right; margin-top:-255px;  margin-right:785px;">DATA E HORA 18 </br>
      <?php foreach ($listas_um_TRES as $lista): ?>
                <?php  
                    echo $lista['NomeCerimoniario']. "<br>";

                ?>
        
        <?php endforeach; ?>
        <?php echo".<br>" ?>
        <?php foreach ($listas_um_TRES_coroinha as $lista_coro): ?>
                <?php  
                    echo $lista_coro['NomeCoroinha']. "<br>";
                ?>
        
        <?php endforeach; ?>
    </div>
    <div  style="border-style:double; border-color: black;height: 50px; background: white; width:15%; float: right; margin-top:-1161px;  margin-right:570px;">DIA 2</div> 
    <div  style="border-style:double; border-color: black;height: 250px; background: white; width:15%; float: right; margin-top:-1085px;  margin-right:570px;">DATA E HORA 7 </br>
    <?php foreach ($listas_dois_UM as $lista): ?>
                <?php  
                    echo $lista['NomeCerimoniario']. "<br>";

                ?>
        
        <?php endforeach; ?>
        <?php echo".<br>" ?>
        <?php foreach ($listas_dois_UM_coroinha as $lista_coro): ?>
                <?php  
                    echo $lista_coro['NomeCoroinha']. "<br>";
                ?>
        
        <?php endforeach; ?>
    </div>
    <div  style="border-style:double; border-color: black;height: 250px; background: white; width:15%; float: right; margin-top:-808px;  margin-right:570px;">BATIZADO</div>
    <div  style="border-style:double; border-color: black;height: 250px; background: white; width:15%; float: right; margin-top:-532px;  margin-right:570px;">DATA E HORA 10 </br>
    <?php foreach ($listas_dois_DOIS as $lista): ?>
                <?php  
                    echo $lista['NomeCerimoniario']. "<br>";

                ?>
        
        <?php endforeach; ?>
        <?php echo".<br>" ?>
        <?php foreach ($listas_dois_DOIS_coroinha as $lista_coro): ?>
                <?php  
                    echo $lista_coro['NomeCoroinha']. "<br>";
                ?>
        
        <?php endforeach; ?>
</div>
    <div  style="border-style:double; border-color: black;height: 250px; background: white; width:15%; float: right; margin-top:-255px;  margin-right:570px;">DATA E HORA 18 <br>
    <?php foreach ($listas_dois_TRES as $lista): ?>
                <?php  
                    echo $lista['NomeCerimoniario']. "<br>";

                ?>
        
        <?php endforeach; ?>
        <?php echo".<br>" ?>
        <?php foreach ($listas_dois_TRES_coroinha as $lista_coro): ?>
                <?php  
                    echo $lista_coro['NomeCoroinha']. "<br>";
                ?>
        
        <?php endforeach; ?>
    </div>
    <div  style="border-style:double; border-color: black;height: 50px; background: white; width:15%; float: right; margin-top:-1161px;  margin-right:-420px;">DIA 3</div> 
    <div  style="border-style:double; border-color: black;height: 250px; background: white; width:15%; float: right; margin-top:-1085px;  margin-right:-420px;">DATA E HORA 7 </br>
    <?php foreach ($listas_tres_UM as $lista): ?>
                <?php  
                    echo $lista['NomeCerimoniario']. "<br>";

                ?>
        
        <?php endforeach; ?>
        <?php echo".<br>" ?>
        <?php foreach ($listas_tres_UM_coroinha as $lista_coro): ?>
                <?php  
                    echo $lista_coro['NomeCoroinha']. "<br>";
                ?>
        
        <?php endforeach; ?>
</div>
    <div  style="border-style:double; border-color: black;height: 250px; background: white; width:15%; float: right; margin-top:-808px;  margin-right:-420px;">BATIZADO</div>
    <div  style="border-style:double; border-color: black;height: 250px; background: white; width:15%; float: right; margin-top:-532px;  margin-right:-420px;">DATA E HORA 10 </br>
    <?php foreach ($listas_tres_DOIS as $lista): ?>
                <?php  
                    echo $lista['NomeCerimoniario']. "<br>";

                ?>
        
        <?php endforeach; ?>
        <?php echo".<br>" ?>
        <?php foreach ($listas_tres_DOIS_coroinha as $lista_coro): ?>
                <?php  
                    echo $lista_coro['NomeCoroinha']. "<br>";
                ?>
        
        <?php endforeach; ?>
</div>
    <div  style="border-style:double; border-color: black;height: 250px; background: white; width:15%; float: right; margin-top:-255px;  margin-right:-420px;">DATA E HORA 18 </br>
    <?php foreach ($listas_tres_TRES as $lista): ?>
                <?php  
                    echo $lista['NomeCerimoniario']. "<br>";

                ?>
        
        <?php endforeach; ?>
        <?php echo".<br>" ?>
        <?php foreach ($listas_tres_TRES_coroinha as $lista_coro): ?>
                <?php  
                    echo $lista_coro['NomeCoroinha']. "<br>";
                ?>
        
        <?php endforeach; ?>
</div>
    <div  style="border-style:double; border-color: black;height: 50px; background: white; width:15%; float: right; margin-top:-1161px;  margin-right:-635px;">DIA 4</div> 
    <div  style="border-style:double; border-color: black;height: 250px; background: white; width:15%; float: right; margin-top:-1085px;  margin-right:-635px;">DATA E HORA 7 </br>
    <?php foreach ($listas_quatro_UM as $lista): ?>
                <?php  
                    echo $lista['NomeCerimoniario']. "<br>";

                ?>
        
        <?php endforeach; ?>
        <?php echo".<br>" ?>
        <?php foreach ($listas_quatro_UM_coroinha as $lista_coro): ?>
                <?php  
                    echo $lista_coro['NomeCoroinha']. "<br>";
                ?>
        
        <?php endforeach; ?>
</div>
    <div  style="border-style:double; border-color: black;height: 250px; background: white; width:15%; float: right; margin-top:-808px;  margin-right:-635px;">BATIZADO</div>
    <div  style="border-style:double; border-color: black;height: 250px; background: white; width:15%; float: right; margin-top:-532px;  margin-right:-635px;">DATA E HORA 10 </br>
    <?php foreach ($listas_quatro_DOIS as $lista): ?>
                <?php  
                    echo $lista['NomeCerimoniario']. "<br>";

                ?>
        
        <?php endforeach; ?>
        <?php echo".<br>" ?>
        <?php foreach ($listas_quatro_DOIS_coroinha as $lista_coro): ?>
                <?php  
                    echo $lista_coro['NomeCoroinha']. "<br>";
                ?>
        
        <?php endforeach; ?></div>
    <div  style="border-style:double; border-color: black;height: 250px; background: white; width:15%; float: right; margin-top:-255px;  margin-right:-635px;">DATA E HORA 18 </br>
    <?php foreach ($listas_quatro_TRES as $lista): ?>
                <?php  
                    echo $lista['NomeCerimoniario']. "<br>";

                ?>
        
        <?php endforeach; ?>
        <?php echo".<br>" ?>
        <?php foreach ($listas_quatro_TRES_coroinha as $lista_coro): ?>
                <?php  
                    echo $lista_coro['NomeCoroinha']. "<br>";
                ?>
        
        <?php endforeach; ?></div>
</div>
<div  style="border-style:double; border-color: black;height: 50px; background: white; width:15%; float: right; margin-top:-1218px;  margin-right:-635px;">COR</div> 
<div  style="border-style:double; border-color: black;height: 50px; background: white; width:15%; float: right; margin-top:-1218px;  margin-right:-420px;">COR</div>
<div  style="border-style:double; border-color: black;height: 50px; background: white; width:15%; float: right; margin-top:-1218px;  margin-right:570px;">COR</div> 
<div  style="border-style:double; border-color: black;height: 50px; background: white; width:15%; float: right; margin-top:-1218px;  margin-right:785px;">COR</div> 
<div  style="border-style:double; border-color: black;height: 50px; background: white; width:10%; float: right; margin-top:-1218px;  margin-right:1000px;">COR</div> 




</body>
</html>