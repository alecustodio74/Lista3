<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Alexandre Ricardo Custódio de Souza">
    <title>Soma de dois valores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h4>2 - Soma de dois valores</h4>
    <p>Se os valores forem iguais, retorna o triplo da soma.</p>
    <form method="post" action="2_resposta.php"> <!-- action vai para outra página -->
            <div class="col-3">
            <div class="mb-3">
                <label for="valor1" class="form-label">Digite o 1º Valor</label>
                <input type="float" id="valor1" name="valor1" class="form-control" required="">
            </div>
        
            <div class="mb-3">
                <label for="valor2" class="form-label">Digite o 2º valor</label>
                <input type="float" id="valor2" name="valor2" class="form-control" required="">
            </div>

        <button type="submit" class="btn btn-primary">Calcular</button>
    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>