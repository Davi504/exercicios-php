<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>caixa eletrônico</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 75px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $saque = $_REQUEST['saque'] ?? 0;
    ?>
    <main>
        <h1>caixa eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque"> qual valor deseja sacar ? (R$) <sup>*</sup></label>
            <input type="number" name="saque" id="saque" step = "5" required value = "<?=$saque?>">
            <p style="font-size: 0.7em"><sup>*</sup>notas disponiveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="SACAR">
        </form>
    </main>
    <?php 
        $resto = $saque;
        // saque de 100
        $tot100 = floor($resto /100);
        $resto %= 100;
        //saque de 50
        $tot50 = floor($resto /50);
        $resto %= 50;
        //saque de 10
        $tot10 = floor($resto /10);
        $resto %= 10;
        //saque de 5
        $tot5 = floor($resto /5);
        $resto %= 5;    
    ?>
    <section>
        <h2> Saque de R$ <?=$saque?> realizado</h2>
        <p>o caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="nota de 100" class="nota"> x <?=$tot100?></li>
            <li><img src="imagens/50-reais.jpg" alt="nota de 50" class="nota"> x <?=$tot50?></li>
            <li><img src="imagens/10-reais.jpg" alt="nota de 10" class="nota"> x <?=$tot10?></li>
            <li><img src="imagens/5-reais.jpg" alt="nota de 5" class="nota"> x <?=$tot5?></li>
        </ul>
    </section>
</body>
</html>