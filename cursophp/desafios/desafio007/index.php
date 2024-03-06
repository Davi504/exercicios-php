<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>salario minimo PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $minimo = 1412;
        $salario = $_GET['sal'] ?? 0;
    ?>
    <main>
        <h1>Informe seu sálario</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>">
        <label for="sal">Salário (R$)</label>
        <input type="number" name="sal" id="sal"value = "<?$salario?>" step ="0.01">
        <p>Considerando o salário mínimo de <strong>R$ <?=number_format($minimo, 1, ",", ".")?></strong></p>
        <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <?php 
            $tot = intdiv($salario, $minimo);
            $dif = $salario % $minimo;

            echo"<p>Ganha $tot salários minimos + R\$ ". number_format($dif, 2, ",", ".")."</p>";
        ?>
    </section>
</body>
</html>