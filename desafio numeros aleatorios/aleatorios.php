<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>trabalhando com numeros aleatórios</h1>
        <?php 
        $min=0;
        $max=100;
        $num = mt_rand($min, $max);
        echo "<p>Gerando um número aleatório entre $min e $max.. 
        O valor gerado foi: <br><strong>$num</stron>";
        ?>
      <button onclick="javascript:document.location.reload()";>Gerar numero</button>
    </main>
    
</body>
</html>