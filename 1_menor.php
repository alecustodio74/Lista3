<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Alexandre Ricardo Custódio de Souza">
    <title>Menor valor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h4>1 - Menor valor e posição</h4>
    <p>Digite 7 números diferentes.</p>
    <form method="post" action="1_resposta.php"> <!-- action vai para outra página -->
            <div class="col-3">
            <div class="mb-3">
                <label for="valor1" class="form-label">Digite o 1º número</label>
                <input type="number" id="valor1" name="valor1" class="form-control" required="">
            </div>
        
            <div class="mb-3">
                <label for="valor2" class="form-label">Digite o 2º número</label>
                <input type="number" id="valor2" name="valor2" class="form-control" required="">
            </div>

            <div class="mb-3">
                <label for="valor3" class="form-label">Digite o 3º número</label>
                <input type="number" id="valor3" name="valor3" class="form-control" required="">
            </div>

            <div class="mb-3">
                <label for="valor4" class="form-label">Digite o 4º número</label>
                <input type="number" id="valor4" name="valor4" class="form-control" required="">
            </div>

            <div class="mb-3">
                <label for="valor5" class="form-label">Digite o 5º número</label>
                <input type="number" id="valor5" name="valor5" class="form-control" required="">
            </div>

            <div class="mb-3">
                <label for="valor6" class="form-label">Digite o 6º número</label>
                <input type="number" id="valor6" name="valor6" class="form-control" required="">
            </div>

            <div class="mb-3">
                <label for="valor7" class="form-label">Digite o 7º número</label>
                <input type="number" id="valor7" name="valor7" class="form-control" required="">
            </div>

        <button type="submit" class="btn btn-primary">Verificar</button>
    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>