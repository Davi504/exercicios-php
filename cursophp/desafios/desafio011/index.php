<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porcentagem php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $preco = $_REQUEST['preco'] ?? 0;
        $reaj = $_REQUEST['reaj'] ?? 0;
    ?>
    <main>
        <h1>Reajustador de preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do produto (R$)</label>
            <input type="number" name="preco" id="preco" min = "0.10" step = "0.01" value = "<?=$preco?>">

            <label for="reaj">qual sera o percentual de reajuste ?<strong><span id = "p"> ? </span>%</strong></label>
            <input type="range" name="reaj" id="reaj" min = "0" max = "100" step = "1" oninput="mudavalor()" value = "<?=$reaj?>">

            <input type="submit" value="Reajustar">
        </form>
    </main>
        <?php 
            $aumento = $preco * $reaj / 100;
            $novopreco = $preco + $aumento;
        ?>
    <section>
        <h2>resultado do reajuste</h2>
        <p>o produto que custava R$ <?=$preco?> com <?$reaj?>% de aumento vai custar R$ <?=$novopreco?></p>
    </section>
    <script>
        mudavalor()
        function mudavalor () {
            p.innerText = reaj.value;
        }
    </script>
</body>
</html>