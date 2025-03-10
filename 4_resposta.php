<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desconto no preço</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h4>Resposta do exercício 4</h4>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            try{
            $preco1 = $_POST['preco'];
            if ($preco1 > 100){
                $preco1 -= ($preco1 * 15) / 100;
                echo "Preço após desconto de 15% : R$ " . number_format($preco1,2,',','.');
            }
            else echo "Não houve reajuste! R$" . number_format($preco1,2,',','.');
            
            } catch(Exception $e){
                echo $e->getMessage();
            }
        }
    ?>
    <div class="col mt-2">
         <button type="submit" class="btn btn-primary"><a href="4_desconto.php" style="color: white; text-decoration: none;">Voltar</a></button>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>