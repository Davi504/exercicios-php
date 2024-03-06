<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de número real</h1>
        <?php 
            $num = $_POST["n"] ?? 0;
            
            echo"<p> analisando o número ".number_format($num, 3, ",", ".")." informado pelo usuario:</p>";

            $int = (int) $num;
            $fra = $num - $int;

            echo "<ul> <li> a parte inteira do número é $int </li>";
            echo "<li> a parte fracionaria do número é $fra </li> </ul>";
        
        
        ?>
        <button onclick="javascript:history.go(-1)">voltar</button>

    </main>
    
</body>
</html>