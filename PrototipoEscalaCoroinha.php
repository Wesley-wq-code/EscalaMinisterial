<?php 
// CONEXÃO COM O BANCO //
    include_once 'conexao.php';
    // INSERÇÃO DOS DIAS PARA //
$sql = "SELECT primeiro_domingo, segundo_domingo, terceiro_domingo, quarto_domingo FROM configdias";
$stmt = $conn->prepare($sql);
$stmt->execute();
$config = $stmt->fetch(PDO::FETCH_ASSOC);

//==========================================================================================================//  
            //                  MISSA DO DIA 1                                                           //        

// VERFICA SE O FORMULARIO DOS COROINHAS FOI SUBMETIDO 11
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['formCoroinha_um_UM'])) {
        $nome = $_POST['nomeCoroinha'];
        $dia = "dia1";
        $hora = "7horas";
        $tipo = "11";
          // SQL de inserção
        $sql = "INSERT INTO escalacoroinha (NomeCoroinha, DiaMissa, Hora, idTipoMissa) 
        VALUES (:nome, :dia, :Hora, :tipo)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':dia', $dia);
        $stmt->bindParam(':Hora', $hora);
        $stmt->bindParam(':tipo', $tipo);
        if ($stmt->execute()) {
            echo"inserido Com Sucesso";
        } else {
        echo "Erro ao inserir";
        }
    }

// VERIFICA SE O FORMULARIO DOS COROINHAS FOI SUBMETIDO 12
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['formCoroinha_um_DOIS'])) {
    $nome = $_POST['nomeCoroinha'];
    $dia = "dia1";
    $hora = "10horas";
    $tipo = "12";
      // SQL de inserção
    $sql = "INSERT INTO escalacoroinha (NomeCoroinha, DiaMissa, Hora, idTipoMissa) 
    VALUES (:nome, :dia, :Hora, :tipo)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':dia', $dia);
    $stmt->bindParam(':Hora', $hora);
    $stmt->bindParam(':tipo', $tipo);
    if ($stmt->execute()) {
        echo"inserido Com Sucesso";
    } else {
    echo "Erro ao inserir";
    }
}
// VERIFICA SE O FORMULARIO DOS COROINHAS FOI SUBMETIDO 13
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['formCoroinha_um_TRES'])) {
    $nome = $_POST['nomeCoroinha'];
    $dia = "dia1";
    $hora = "18horas";
    $tipo = "13";
      // SQL de inserção
    $sql = "INSERT INTO escalacoroinha (NomeCoroinha, DiaMissa, Hora, idTipoMissa) 
    VALUES (:nome, :dia, :Hora, :tipo)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':dia', $dia);
    $stmt->bindParam(':Hora', $hora);
    $stmt->bindParam(':tipo', $tipo);
    if ($stmt->execute()) {
        echo"inserido Com Sucesso";
    } else {
    echo "Erro ao inserir";
    }
}
//==========================================================================================================//  
            //                  MISSA DO DIA  2                                             //        

// VERFICA SE O FORMULARIO DOS COROINHAS FOI SUBMETIDO 21
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['formCoroinha_dois_UM'])) {
    $nome = $_POST['nomeCoroinha'];
    $dia = "dia2";
    $hora = "7horas";
    $tipo = "21";
      // SQL de inserção
    $sql = "INSERT INTO escalacoroinha (NomeCoroinha, DiaMissa, Hora, idTipoMissa) 
    VALUES (:nome, :dia, :Hora, :tipo)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':dia', $dia);
    $stmt->bindParam(':Hora', $hora);
    $stmt->bindParam(':tipo', $tipo);
    if ($stmt->execute()) {
        echo"inserido Com Sucesso";
    } else {
    echo "Erro ao inserir";
    }
}
// VERFICA SE O FORMULARIO DOS COROINHAS FOI SUBMETIDO 22
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['formCoroinha_dois_DOIS'])) {
    $nome = $_POST['nomeCoroinha'];
    $dia = "dia2";
    $hora = "10horas";
    $tipo = "22";
      // SQL de inserção
    $sql = "INSERT INTO escalacoroinha (NomeCoroinha, DiaMissa, Hora, idTipoMissa) 
    VALUES (:nome, :dia, :Hora, :tipo)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':dia', $dia);
    $stmt->bindParam(':Hora', $hora);
    $stmt->bindParam(':tipo', $tipo);
    if ($stmt->execute()) {
        echo"inserido Com Sucesso";
    } else {
    echo "Erro ao inserir";
    }
}
// VERFICA SE O FORMULARIO DOS COROINHAS FOI SUBMETIDO 23
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['formCoroinha_dois_TRES'])) {
    $nome = $_POST['nomeCoroinha'];
    $dia = "dia2";
    $hora = "18horas";
    $tipo = "23";
      // SQL de inserção
    $sql = "INSERT INTO escalacoroinha (NomeCoroinha, DiaMissa, Hora, idTipoMissa) 
    VALUES (:nome, :dia, :Hora, :tipo)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':dia', $dia);
    $stmt->bindParam(':Hora', $hora);
    $stmt->bindParam(':tipo', $tipo);
    if ($stmt->execute()) {
        echo"inserido Com Sucesso";
    } else {
    echo "Erro ao inserir";
    }
}
//==========================================================================================================//  
            //                  MISSA DO DIA  3                                 //  
// VERFICA SE O FORMULARIO DOS COROINHAS FOI SUBMETIDO 31
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['formCoroinha_tres_UM'])) {
    $nome = $_POST['nomeCoroinha'];
    $dia = "dia3";
    $hora = "7horas";
    $tipo = "31";
      // SQL de inserção
    $sql = "INSERT INTO escalacoroinha (NomeCoroinha, DiaMissa, Hora, idTipoMissa) 
    VALUES (:nome, :dia, :Hora, :tipo)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':dia', $dia);
    $stmt->bindParam(':Hora', $hora);
    $stmt->bindParam(':tipo', $tipo);
    if ($stmt->execute()) {
        echo"inserido Com Sucesso";
    } else {
    echo "Erro ao inserir";
    }
}
// VERFICA SE O FORMULARIO DOS COROINHAS FOI SUBMETIDO 32
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['formCoroinha_tres_DOIS'])) {
    $nome = $_POST['nomeCoroinha'];
    $dia = "dia3";
    $hora = "10horas";
    $tipo = "32";
      // SQL de inserção
    $sql = "INSERT INTO escalacoroinha (NomeCoroinha, DiaMissa, Hora, idTipoMissa) 
    VALUES (:nome, :dia, :Hora, :tipo)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':dia', $dia);
    $stmt->bindParam(':Hora', $hora);
    $stmt->bindParam(':tipo', $tipo);
    if ($stmt->execute()) {
        echo"inserido Com Sucesso";
    } else {
    echo "Erro ao inserir";
    }
}
// VERFICA SE O FORMULARIO DOS COROINHAS FOI SUBMETIDO 33
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['formCoroinha_tres_TRES'])) {
    $nome = $_POST['nomeCoroinha'];
    $dia = "dia3";
    $hora = "18horas";
    $tipo = "33";
      // SQL de inserção
    $sql = "INSERT INTO escalacoroinha (NomeCoroinha, DiaMissa, Hora, idTipoMissa) 
    VALUES (:nome, :dia, :Hora, :tipo)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':dia', $dia);
    $stmt->bindParam(':Hora', $hora);
    $stmt->bindParam(':tipo', $tipo);
    if ($stmt->execute()) {
        echo"inserido Com Sucesso";
    } else {
    echo "Erro ao inserir";
    }
}
//==========================================================================================================//  
            //                  MISSA DO DIA  4                             //  
// VERFICA SE O FORMULARIO DOS COROINHAS FOI SUBMETIDO 41
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['formCoroinha_quatro_UM'])) {
    $nome = $_POST['nomeCoroinha'];
    $dia = "dia4";
    $hora = "7horas";
    $tipo = "41";
      // SQL de inserção
    $sql = "INSERT INTO escalacoroinha (NomeCoroinha, DiaMissa, Hora, idTipoMissa) 
    VALUES (:nome, :dia, :Hora, :tipo)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':dia', $dia);
    $stmt->bindParam(':Hora', $hora);
    $stmt->bindParam(':tipo', $tipo);
    if ($stmt->execute()) {
        echo"inserido Com Sucesso";
    } else {
    echo "Erro ao inserir";
    }
}
// VERFICA SE O FORMULARIO DOS COROINHAS FOI SUBMETIDO 42
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['formCoroinha_quatro_DOIS'])) {
    $nome = $_POST['nomeCoroinha'];
    $dia = "dia4";
    $hora = "10horas";
    $tipo = "42";
      // SQL de inserção
    $sql = "INSERT INTO escalacoroinha (NomeCoroinha, DiaMissa, Hora, idTipoMissa) 
    VALUES (:nome, :dia, :Hora, :tipo)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':dia', $dia);
    $stmt->bindParam(':Hora', $hora);
    $stmt->bindParam(':tipo', $tipo);
    if ($stmt->execute()) {
        echo"inserido Com Sucesso";
    } else {
    echo "Erro ao inserir";
    }
}
// VERFICA SE O FORMULARIO DOS COROINHAS FOI SUBMETIDO 43
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['formCoroinha_quatro_TRES'])) {
    $nome = $_POST['nomeCoroinha'];
    $dia = "dia4";
    $hora = "18horas";
    $tipo = "43";
      // SQL de inserção
    $sql = "INSERT INTO escalacoroinha (NomeCoroinha, DiaMissa, Hora, idTipoMissa) 
    VALUES (:nome, :dia, :Hora, :tipo)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':dia', $dia);
    $stmt->bindParam(':Hora', $hora);
    $stmt->bindParam(':tipo', $tipo);
    if ($stmt->execute()) {
        echo"inserido Com Sucesso";
    } else {
    echo "Erro ao inserir";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escala</title>
</head>

<body>
    <div  style="border-style:double; border-color: black;height: 50px; background: white; width:15%; float: right; margin-top:250px;  margin-right:785px;"><?php echo $config['primeiro_domingo']; ?></div> 
    <div  style="border-style:double; border-color: black;height: 50px; background: white; width:10%; float: right; margin-top:-56px;  margin-right:1000px;">DATAS</div> 
    <div  style="border-style:double; border-color: black;height: 250px; background: white; width:10%; float: right; margin-top:20px;  margin-right:1000px;">MISSA DAS 7</div>
    <div style="border-style:double; border-color: black;height: 250px; background: white; width:10%; float: right; margin-top:20px; margin-right:1000px;">BATIZADO</div>
    <div style="border-style:double; border-color: black;height: 250px; background: white; width:10%; float: right; margin-top:20px; margin-right:1000px;">MISSA DAS 10</div>
    <div style="border-style:double; border-color: black;height: 250px; background: white; width:10%; float: right; margin-top:20px; margin-right:1000px;">MISSA DAS 18</div>
    <div  style="border-style:double; border-color: black;height: 250px; background: white; width:15%; float: right; margin-top:-1084px;  margin-right:785px;"> 
    <!-- RECEBER DA MISSSA DAS 7 HORAS-->
    <form action="PrototipoEscalaCoroinha.php" method="POST">
        <label for="">Coroinhas</label>
        <input type="text" name="nomeCoroinha">
        <input type="submit" value="enviar" name="formCoroinha_um_UM">
    </form></div>
    <div  style="border-style:double; border-color: black;height: 250px; background: white; width:15%; float: right; margin-top:-808px;  margin-right:785px;">BATIZADO</div>
    <div  style="border-style:double; border-color: black;height: 250px; background: white; width:15%; float: right; margin-top:-532px;  margin-right:785px;">
    <!--RECEBIDOR DA MISSA DAS 10 HORAS-->
    <form action="PrototipoEscalaCoroinha.php" method="POST">
        <label for="">Coroinhas</label>
        <input type="text" name="nomeCoroinha">
        <input type="submit" value="enviar" name="formCoroinha_um_DOIS">
    </form>
    </div>
    <div  style="border-style:double; border-color: black;height: 250px; background: white; width:15%; float: right; margin-top:-255px;  margin-right:785px;">
    <!--RECEBIDOR DA MISSA DAS 18 HORAS-->
    <form action="PrototipoEscalaCoroinha.php" method="POST">
        <label for="">Coroinhas</label>
        <input type="text" name="nomeCoroinha">
        <input type="submit" value="enviar" name="formCoroinha_um_TRES">
    </form>
    </div>
    <div  style="border-style:double; border-color: black;height: 50px; background: white; width:15%; float: right; margin-top:-1161px;  margin-right:570px;"><?php echo $config['segundo_domingo']; ?></div> 
    <div  style="border-style:double; border-color: black;height: 250px; background: white; width:15%; float: right; margin-top:-1085px;  margin-right:570px;">
    <!-- RECEBER DA MISSSA DAS 7 HORAS DIA 2-->
    <form action="PrototipoEscalaCoroinha.php" method="POST">
        <label for="">Coroinhas</label>
        <input type="text" name="nomeCoroinha">
        <input type="submit" value="enviar" name="formCoroinha_dois_UM">
    </form>
    </div>
    <div  style="border-style:double; border-color: black;height: 250px; background: white; width:15%; float: right; margin-top:-808px;  margin-right:570px;">BATIZADO</div>
    <div  style="border-style:double; border-color: black;height: 250px; background: white; width:15%; float: right; margin-top:-532px;  margin-right:570px;">
    <!--RECEBIDOR DA MISSA DAS 10 HORAS DIA 2-->
    <form action="PrototipoEscalaCoroinha.php" method="POST">
        <label for="">Coroinhas</label>
        <input type="text" name="nomeCoroinha">
        <input type="submit" value="enviar" name="formCoroinha_dois_DOIS">
    </form>
    </div>
    <div  style="border-style:double; border-color: black;height: 250px; background: white; width:15%; float: right; margin-top:-255px;  margin-right:570px;">
       <!--RECEBIDOR DA MISSA DAS 18 HORAS DIA 2-->
       <form action="PrototipoEscalaCoroinha.php" method="POST">
        <label for="">Coroinhas</label>
        <input type="text" name="nomeCoroinha">
        <input type="submit" value="enviar" name="formCoroinha_dois_TRES">
    </form>
    </div>
    <div  style="border-style:double; border-color: black;height: 50px; background: white; width:15%; float: right; margin-top:-1161px;  margin-right:-420px;"><?php echo $config['terceiro_domingo']; ?></div> 
    <div  style="border-style:double; border-color: black;height: 250px; background: white; width:15%; float: right; margin-top:-1085px;  margin-right:-420px;">
    <!-- RECEBER DA MISSSA DAS 7 HORAS DIA 3-->
    <form action="PrototipoEscalaCoroinha.php" method="POST">
        <label for="">Coroinhas</label>
        <input type="text" name="nomeCoroinha">
        <input type="submit" value="enviar" name="formCoroinha_tres_UM">
    </form>
</div>
    <div  style="border-style:double; border-color: black;height: 250px; background: white; width:15%; float: right; margin-top:-808px;  margin-right:-420px;">BATIZADO</div>
    <div  style="border-style:double; border-color: black;height: 250px; background: white; width:15%; float: right; margin-top:-532px;  margin-right:-420px;">
  <!-- RECEBER DA MISSSA DAS 10 HORAS DIA 3-->
  <form action="PrototipoEscalaCoroinha.php" method="POST">
        <label for="">Coroinhas</label>
        <input type="text" name="nomeCoroinha">
        <input type="submit" value="enviar" name="formCoroinha_tres_DOIS">
    </form>
</div>
    <div  style="border-style:double; border-color: black;height: 250px; background: white; width:15%; float: right; margin-top:-255px;  margin-right:-420px;">
 <!-- RECEBER DA MISSSA DAS 18 HORAS DIA 3-->
 <form action="PrototipoEscalaCoroinha.php" method="POST">
        <label for="">Coroinhas</label>
        <input type="text" name="nomeCoroinha">
        <input type="submit" value="enviar" name="formCoroinha_tres_TRES">
    </form>
</div>
    <div  style="border-style:double; border-color: black;height: 50px; background: white; width:15%; float: right; margin-top:-1161px;  margin-right:-635px;"><?php echo $config['quarto_domingo']; ?></div> 
    <div  style="border-style:double; border-color: black;height: 250px; background: white; width:15%; float: right; margin-top:-1085px;  margin-right:-635px;">
   <!-- RECEBER DA MISSSA DAS 7 HORAS DIA 4-->
   <form action="PrototipoEscalaCoroinha.php" method="POST">
        <label for="">Coroinhas</label>
        <input type="text" name="nomeCoroinha">
        <input type="submit" value="enviar" name="formCoroinha_quatro_UM">
    </form>
</div>
    <div  style="border-style:double; border-color: black;height: 250px; background: white; width:15%; float: right; margin-top:-808px;  margin-right:-635px;">BATIZADO</div>
    <div  style="border-style:double; border-color: black;height: 250px; background: white; width:15%; float: right; margin-top:-532px;  margin-right:-635px;">
  <!-- RECEBER DA MISSSA DAS 10 HORAS DIA 4-->
  <form action="PrototipoEscalaCoroinha.php" method="POST">
        <label for="">Coroinhas</label>
        <input type="text" name="nomeCoroinha">
        <input type="submit" value="enviar" name="formCoroinha_quatro_DOIS">
    </form>
</div>
    <div  style="border-style:double; border-color: black;height: 250px; background: white; width:15%; float: right; margin-top:-255px;  margin-right:-635px;">
    <!-- RECEBER DA MISSSA DAS 18 HORAS DIA 4-->
  <form action="PrototipoEscalaCoroinha.php" method="POST">
        <label for="">Coroinhas</label>
        <input type="text" name="nomeCoroinha">
        <input type="submit" value="enviar" name="formCoroinha_quatro_TRES">
    </form>
</div>
</body>
</html>