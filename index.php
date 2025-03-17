<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Anatomia de uma Divisão</title>
</head>

<body>


    <?php


    $valor01 = $_POST['v1'] ?? 0;
    $valor02 = $_POST['v2'] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="v1">Dividendo</label>
            <input type="number" name="v1" id="v1" min ="0" value="<?= $valor01 ?>">
            <label for="v2">Divisor</label>
            <input type="number" name="v2" id="v2" min="1" value="<?= $valor02 ?>">
            <input type="submit" value="Somar">

        </form>



    </main>



    <section>
        <h2>Resultado</h2>
        <?php


        $divisao = intdiv($valor01, $valor02);
        $resto = $valor01 % $valor02;

     /*   echo "<p>O valor do dividendo é <strong>$valor01</strong>.</p>"; //(o que será dividido)
        echo "<p>O valor do divisor é <strong>$valor02</strong>.</p>"; // (quem faz a divisão)
        echo "<p>O valor do quociente é <strong>$divisao</strong>.</p>"; //(o resultado da divisão)
        echo "<p>O resto da divisão é <strong>$resto</strong>.</p>"; // (o que sobra da divisão)


        
        ?>
 <!--<p>       
<pre>
   
    <?=  $valor01 ?> | <?= $valor02 ?>
 
      <?= $divisao ?>
   <?= $resto*/ ?>
<!-- </pre>
</p>
    </section> -->



    <table class="divisao">
    <tr>
        <td><?=$valor01?></td>
        <td><?=$valor02?></td>
    </tr>
    <tr>
        <td><?=$resto?></td>
        <td><?=$divisao?></td>
    </tr>



    </table>
</body>

</html>