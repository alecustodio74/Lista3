<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Soma de 2 valores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h4>Resposta do exercício 2</h4>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            try{
            $n1 = $_POST['valor1'];
            $n2 = $_POST['valor2'];
            if ($n1 == $n2){
                $soma = ($n1 + $n2) * 3;
                echo "Números iguais = Triplo da soma: " . number_format($soma,2,',','.');
            }else{
                $soma = $n1 + $n2;
                echo "Números diferentes = Soma: " . number_format($soma,2,',','.');
            }
            
            } catch(Exception $e){
                echo $e->getMessage();
            }
        }
    ?>
    <div class="col mt-2">
         <button type="submit" class="btn btn-primary"><a href="2_triplo.php" style="color: white; text-decoration: none;">Voltar</a></button>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>