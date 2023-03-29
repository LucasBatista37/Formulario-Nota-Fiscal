<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Caixa</title>
</head>
<body>
    <h1>Sistema de Caixa</h1>
    <form method="post" action="">
        <label>Nome do cliente:</label>
        <input type="text" name="nome_cliente"><br><br>

        <label>Primeiro produto:</label>
        <input type="text" name="produto1"><br>
        <label>Valor do primeiro produto:</label>
        <input type="number" name="valor1"><br><br>

        <label>Segundo produto:</label>
        <input type="text" name="produto2"><br>
        <label>Valor do segundo produto:</label>
        <input type="number" name="valor2"><br><br>

        <label>Valor pago pelo cliente:</label>
        <input type="number" name="valor_pago"><br><br>

        <input type="submit" name="submit" value="Resultado">
    </form>

    <?php
    $nome = $_POST['nome_cliente'];

    $produto1 = $_POST['produto1'];
    $valor1 = $_POST['valor1'];

    $produto2 = $_POST['produto2'];
    $valor2 = $_POST['valor2'];

    $valor_pago = $_POST['valor_pago'];

    $valor_total = $valor1 + $valor2;

    echo "Nome do cliente: $nome <br>";

    echo "Nome do primeiro produto: $produto1 <br>";

    echo "Valor do primeiro produto: $valor1 <br>";

    echo "Nome do segundo produto: $produto2 <br>";

    echo "Valor do segundo produto: $valor2 <br>";

    echo "Valor total: $valor_total <br>";

    if($valor_total <= $valor_pago){

    $troco = $valor_pago - $valor_total;
    echo "Valor pago: $valor_pago <br>";
    echo "Troco: $troco <br>";
    }
    else 
    {
    $falta = $valor_total - $valor_pago;
    echo "Valor pago: $valor_pago <br>";
    echo "Falta: $falta <br>";
    }
    ?>
    
</body>
</html>