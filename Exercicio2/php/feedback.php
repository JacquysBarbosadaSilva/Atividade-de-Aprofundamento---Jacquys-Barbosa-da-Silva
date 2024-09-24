<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Feedback do Produto</title>
</head>
<body>
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <a href="../../index.php"><h6 class="text-white h6">Home</h6></a>
                <a href="../../Exercicio1/php/formulario.php"><h6 class="text-white h6">Cadastro</h6></a>
                <a href="#"><h6 class="text-white h6">Feedback</h6></a>
                <a href="../../Exercicio3/php/reserva.php"><h6 class="text-white h6">Reserva</h6></a>
            </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>

    <main>
        <div class="container">
            <h1 class="h1-formulario">Deixe seu Feedback</h1>
            <form action="processar_feedback.php" method="POST">
                <div class="form-group">
                    <label for="nomeProduto">Nome do Produto</label>
                    <input type="text" name="nomeProduto" id="nomeProduto" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="notaProduto">Nota (1 a 5)</label>
                    <input type="number" name="notaProduto" id="notaProduto" class="form-control" min="1" max="5" required>
                </div>
                <div class="form-group">
                    <label for="comentario">Comentário</label>
                    <textarea name="comentario" id="comentario" class="form-control" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary" id="btn-submit">Enviar Feedback</button>
            </form>
        </div>
    </main>

    <canvas></canvas>
</body>
<script src="../../js/main.js" defer></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</html>
