<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Anatomia da Divisão</title>
</head>
<body>
    <?php 
        $dividendo = $_GET["d1"] ?? 1;
        $divisor = $_GET["d2"] ?? 1;
    ?>
    <main>
        <h1>Anatomia da Divisão</h1>
        <form action="" method="get">
            <label for="d1">Dividendo</label>
            <input type="number" name="d1" id="d1 " value="<?=$divisor?>">
            <label for="d2">Divisor</label>
            <input type="number" name="d2" id="d2" value="<?=$dividendo?>">
            <button type="submit">Calcular!</button>
        </form>
    </main>

    <section>
        <h1>Estrutura da Divisão</h1>
        <?php 
            //Calculos
            $quociente = intdiv($dividendo, $divisor);
            $resto = $divisor % $dividendo;

            echo "<ul>";
            echo "<li>Dividendo: <strong>$dividendo</strong></li>";
            echo "<li>Divisor: <strong>$divisor</strong></li>";
            echo "<li>Quociente: <strong>$quociente</strong></li>";
            echo "<li>Resto: <strong>$resto</strong></li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>