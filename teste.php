<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menor Valor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form method="post">
        <div class="col-3">
        <div class="mb-3" >
        <?php for ($i = 0; $i < 7; $i++): ?>
            <label>Digite o número <?= $i + 1 ?>:</label>
            <input type="number" name="numeros[]" required style="margin-bottom: 2%;"><br>
        <?php endfor; ?>
        </div>
        <div class="col-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numeros = array_map('intval', $_POST['numeros']);
        
        if (count(array_unique($numeros)) < 7) {
            echo "<p>Os números devem ser diferentes.</p>";
        } else {
            $menor_valor = min($numeros);
            $posicao = array_search($menor_valor, $numeros) + 1;
            echo "<p>Menor valor: $menor_valor</p>";
            echo "<p>Posição: $posicao</p>";
        }
    }
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>