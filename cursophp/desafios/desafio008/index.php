<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $_numero = $_GET['num'] ?? 1;

    ?>
    <main>
        <h1>Informe um Número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?=$_numero?>">
            <input type="submit" value="Calcular Raizes">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <?php
           $_rq = $_numero ** (1/2);
           $_rc = $_numero ** (1/3);

           echo "<p>Analisando o número $_numero, temos:";
           echo "<ul><li>A sua raiz quadrada é ".number_format($_rq, 2, ",", ".")."</li>";
           echo "<li>A sua raiz cúbica é ".number_format($_rc, 2, ",", ".")."</li></ul>"

        ?>
    </section>
</body>
</html>