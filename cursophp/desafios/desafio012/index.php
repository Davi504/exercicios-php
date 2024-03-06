<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora do tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
    <?php 
        $totseg = $_REQUEST['seg'] ?? 0;

    ?>
<body>
    <main>
        <h1>calculadora do tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="seg">Qual é o total de segundos ?</label>
            <input type="number" name="seg" id="seg" min = "0" step = "1" required value = "<?$totseg?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <?php
        $sobra = $totseg;
        $semana = (int)($sobra / 604_000);
        $sobra = $sobra % 604_800;
        $dia = (int)($sobra / 86_400);
        $sobra = $sobra % 86_400;
        $hora = (int)($sobra / 3_600);
        $sobra = $sobra % 3_600;
        $minuto = (int)($sobra / 60);
        $sobra = $sobra % 60;
        $segundo = $sobra
     ?>
    <section>
        <h2>totalizando tudo</h2>
        <p> analisando o valor que você digitou de <?$totseg?> segundos temos:</p>
        <ul>
            <li><?=$semana?> semanas</li>
            <li><?=$dia?> dias</li>
            <li><?=$hora?> horas</li>
            <li><?=$minuto?> minutos</li>
            <li><?=$segundo?> segundos</li>
        </ul>
    </section>
</body>
</html>