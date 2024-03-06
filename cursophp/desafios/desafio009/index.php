<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>media PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['v1'] ??'';
        $peso1 = $_GET['p1'] ??'';
        $valor2 = $_GET['v2'] ??'';
        $peso2 = $_GET['p2'] ??'';
    ?>
    <main>
        <h1>medias aritiméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="v1">1° valor</label>
        <input type="number" name="v1" id="v1" required value = "<?=$valor1 ?>">
        <label for="p1">1° peso</label>
        <input type="number" name="p1" id="p1" min ="1" required value= "<?=$peso1 ?>">
        <label for="v2">2° valor</label>
        <input type="number" name="v2" id="21" required value = "<?=$valor2 ?>">
        <label for="p2">2° peso</label>
        <input type="number" name="p2" id="p2" min ="1" required value = "<?=$peso2 ?>">
        <input type="submit" value="Calcular média">
        </form>
    </main>
    <section>
        <?php 
            $ma = ($valor1 + $valor2) /2;
            $mp = ($valor1 * $peso1 + $valor2 * $peso2)/($peso1 + $peso2);
        ?>
        <h2>Calculo de médias</h2>
        <p>Analisando os valores <?=$valor1?> e <?=$valor2?>:</p>
        <ul>
            <li>A media aritmetica simples entre os valores é igual a <?=$ma?></li>
            <li>a media aritmetica ponderada com os pesos <?$peso1?> e <?=$peso2?> é igual a <?=number_format($mp, 2)?>.</li>
        </ul>
    </section>
</body>
</html>