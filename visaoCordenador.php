<?php 
// FAZENDO CONEXÃO COM O BANCO 
include_once 'conexao.php';

// FAZENDO INSERÇÕES NO BANCO 
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['formDomingo'])) {
    $dia_um = $_POST['dia_um_definicao'];
    $cor_um = $_POST['corLiturgica_dia_um'];
    $dia_dois = $_POST['dia_dois_definicao'];
    $cor_dois = $_POST['corLiturgica_dia_dois'];
    $dia_tres = $_POST['dia_tres_definicao'];
    $cor_tres = $_POST['corLiturgica_dia_tres'];
    $dia_quatro = $_POST['dia_quatro_definicao'];
    $cor_quatro = $_POST['corLiturgica_dia_quatro'];

    // SQL de inserção
    $sql = "INSERT INTO configdias (primeiro_domingo, segundo_domingo, terceiro_domingo, quarto_domingo, 
    primeira_corLiturgica, segunda_corLiturgica, terceira_corLiturgica, quarta_corLiturgica) 
    VALUES (:dia_um, :dia_dois, :dia_tres, :dia_quatro, :cor_um, :cor_dois, :cor_tres, :cor_quatro)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':dia_um', $dia_um);
    $stmt->bindParam(':dia_dois',$dia_dois);
    $stmt->bindParam(':dia_tres', $dia_tres);
    $stmt->bindParam(':dia_quatro', $dia_quatro);
    $stmt->bindParam(':cor_um', $cor_um);
    $stmt->bindParam(':cor_dois', $cor_dois);
    $stmt->bindParam(':cor_tres', $cor_tres);
    $stmt->bindParam(':cor_quatro', $cor_quatro);
    if ($stmt->execute()) {
        echo "Inserido com Sucesso";
    } else {
        echo "Erro ao inserir";
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['formApagar'])) {
    $sql = "DELETE FROM configdias";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute()) {
        echo "Apagado com Sucesso";
    } else {
        echo "Erro ao apagar";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuração de Escalas</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #333;
        }

        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 950px;
            text-align: center;
            margin-top: 20px;
        }

        h1 {
            font-size: 36px;
            color: #4CAF50;
            margin-bottom: 30px;
            font-weight: bold;
        }

        form {
            display: grid;
            gap: 20px;
            margin-bottom: 30px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        label {
            font-size: 18px;
            color: #555;
            margin-bottom: 5px;
            font-weight: 600;
        }

        input[type="text"], select {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border-radius: 8px;
            border: 1px solid #ddd;
            box-sizing: border-box;
            margin-top: 8px;
            transition: all 0.3s ease;
        }

        input[type="text"]:focus, select:focus {
            border-color: #4CAF50;
            outline: none;
        }

        input[type="submit"], button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
            width: 100%;
            transition: background-color 0.3s ease;
            box-sizing: border-box;
        }

        input[type="submit"]:hover, button:hover {
            background-color: #45a049;
        }

        input[type="submit"]:active, button:active {
            background-color: #388e3c;
        }

        .form-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .form-actions form {
            margin: 0;
            width: 48%;
        }

        .form-actions button {
            width: 100%;
            background-color: #007bff;
            border-radius: 8px;
        }

        .form-actions button:hover {
            background-color: #0056b3;
        }

        .form-actions button:active {
            background-color: #004080;
        }

        .footer {
            text-align: center;
            margin-top: 40px;
        }

        .footer button {
            background-color: #e91e63;
            color: white;
            padding: 12px;
            border-radius: 8px;
            cursor: pointer;
            border: none;
            font-size: 18px;
            width: 100%;
            max-width: 250px;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .footer button:hover {
            background-color: #c2185b;
        }

        .footer button:active {
            background-color: #880e4f;
        }

        .error {
            color: #f44336;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Configuração de Escalas e Cores Litúrgicas</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="dia_um_definicao">INSIRA A DATA PARA O PRIMEIRO DIA:</label>
                <input type="text" name="dia_um_definicao" placeholder="Insira a data aqui">
                <select name="corLiturgica_dia_um">
                    <option value="opcao1">ESCOLHA COR LITÚRGICA</option>
                    <option value="branco">BRANCO</option>
                    <option value="vermelho">VERMELHO</option>
                    <option value="verde">VERDE</option>
                    <option value="roxo">ROXO</option>
                    <option value="rosseo">RÓSSEO</option>
                    <option value="preto">PRETO</option>
                </select>
            </div>

            <div class="form-group">
                <label for="dia_dois_definicao">INSIRA A DATA PARA O SEGUNDO DIA:</label>
                <input type="text" name="dia_dois_definicao" placeholder="Insira a data aqui">
                <select name="corLiturgica_dia_dois">
                    <option value="opcao1">ESCOLHA COR LITÚRGICA</option>
                    <option value="branco">BRANCO</option>
                    <option value="vermelho">VERMELHO</option>
                    <option value="verde">VERDE</option>
                    <option value="roxo">ROXO</option>
                    <option value="rosseo">RÓSSEO</option>
                    <option value="preto">PRETO</option>
                </select>
            </div>

            <div class="form-group">
                <label for="dia_tres_definicao">INSIRA A DATA PARA O TERCEIRO DIA:</label>
                <input type="text" name="dia_tres_definicao" placeholder="Insira a data aqui">
                <select name="corLiturgica_dia_tres">
                    <option value="opcao1">ESCOLHA COR LITÚRGICA</option>
                    <option value="branco">BRANCO</option>
                    <option value="vermelho">VERMELHO</option>
                    <option value="verde">VERDE</option>
                    <option value="roxo">ROXO</option>
                    <option value="rosseo">RÓSSEO</option>
                    <option value="preto">PRETO</option>
                </select>
            </div>

            <div class="form-group">
                <label for="dia_quatro_definicao">INSIRA A DATA PARA O QUARTO DIA:</label>
                <input type="text" name="dia_quatro_definicao" placeholder="Insira a data aqui">
                <select name="corLiturgica_dia_quatro">
                    <option value="opcao1">ESCOLHA COR LITÚRGICA</option>
                    <option value="branco">BRANCO</option>
                    <option value="vermelho">VERMELHO</option>
                    <option value="verde">VERDE</option>
                    <option value="roxo">ROXO</option>
                    <option value="rosseo">RÓSSEO</option>
                    <option value="preto">PRETO</option>
                </select>
            </div>

            <div class="form-actions">
                <form action="" method="post">
                    <input type="submit" value="Enviar" name="formDomingo">
                </form>

                <form action="visaoCordenador.php" method="post">
                    <input type="submit" value="Apagar" name="formApagar">
                </form>
            </div>
        </form>

        <div class="footer">
            <button onclick="window.location.href='PrototipoEscalaCordenador.php'">Ir para a página da escala</button>
        </div>
    </div>
</body>
</html>
 