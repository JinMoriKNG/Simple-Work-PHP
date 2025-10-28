<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilinho.css">
</head>
<body>
    <div class="flex items-center justify-center h-screen">
        <div class="p-4">
            <h1>Venda Nova Eletrônicos</h1>
            <h3>Cadastro</h3>

            <form action="cadastro.php" method="post">
                <label>Nome do Cliente</label><br>
                <input type="text" name="cad_nome" required><br><br>
                <label>Telefone Para Contato</label><br>
                <input type="tel" name="tel" oninput="phoneMask(this)" required><br><br>
                
                <script>
                    function phoneMask(input){
                        let value = input.value.replace(/\D/g, '');
                        if (value.length <= 10) {
                            input.value = value.replace(/(\d{2})(\d{4})(\d+)/, '($1) $2-$3');
                        } 
                        else {
                            input.value = value.replace(/(\d{2})(\d{5})(\d+)/, '($1) $2-$3');
                        }
                    }
                </script>

                <label>Tipo Do Aparelho</label><br>
                <input type="text" name="aprl" required><br><br>
                <label>Agendamento</label><br>
                <input type="date" name="agenda" onchange="formDate()" required><br><br>
                <label>Problema/Reclamação</label><br>
                <input type="text" name="def" required><br><br>

                <input type="submit" value="Cadastrar">
            </form>
        </div>
    </div>
</body>
</html>