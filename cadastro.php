<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="sex">
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $cliente = $_POST["cad_nome"];
        $numeroTel = $_POST["tel"];
        $aparelho = $_POST["aprl"];
        $data = $_POST["agenda"];
        $problem = $_POST["def"];

        $dataForm = DateTime::createFromFormat('Y-m-d', $data);

        echo"O cliente $cliente <br>";
        echo"Número de contato: $numeroTel <br>";
        echo "Deixou um $aparelho agendado para o dia ", $dataForm->format('d/m/Y'), "<br>";
        echo "Alegando que: <br>";
        echo"$problem";
    }
    ?>
    </div>
</body>
</html>