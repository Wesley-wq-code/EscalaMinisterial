<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fc;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h1 {
            color: #4A90E2;
            font-size: 24px;
            margin-bottom: 20px;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        li {
            margin: 15px 0;
        }

        a {
            text-decoration: none;
            color: #fff;
            background-color: #4A90E2;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease, transform 0.2s ease;
            display: inline-block;
        }

        a:hover {
            background-color: #357ABD;
            transform: scale(1.05);
        }

        a:active {
            background-color: #285A8F;
        }

        @media (max-width: 480px) {
            .container {
                width: 90%;
            }
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Gerenciar Escalas</h1>
        <ul>
            <li><a href="visaoCordenador.php">DEFINIR NOVA ESCALA</a></li>
            <li><a href="PrototipoEscalaCordenador.php">VISUALIZAR ESCALA</a></li>
            <li><a href="PrototipoEscala.php">VISUALIZAR FORMULARIO DOS CERIMONIARIOS</a></li>
            <li><a href="PrototipoEscalaCoroinha.php">VISUALIZAR FORMULARIO DOS COROINHAS</a></li>
        </ul>
    </div>
</body>
</html>
