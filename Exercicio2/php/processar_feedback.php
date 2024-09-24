<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura dos dados do formulário
    $nomeProduto = htmlspecialchars($_POST["nomeProduto"]);
    $notaProduto = htmlspecialchars($_POST["notaProduto"]);
    $comentario = htmlspecialchars($_POST["comentario"]);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Feedback Recebido</title>
</head>
<body>
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <a href="../../index.php"><h6 class="text-white h6">Home</h6></a>
                <a href="../../Exercicio1/php/formulario.php"><h6 class="text-white h6">Cadastro</h6></a>
                <a href="../../Exercicio2/php/feedback.php"><h6 class="text-white h6">Feedback</h6></a>
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
        <h1 class="h1-formulario text-center">Feedback Recebido</h1>
            <div class="feedback-final">
                <div class="container-feedback-finalizado">
                    <div id="titulo-feedback">
                        <h4>Obrigado pelo seu feedback!</h4>
                    </div>
                    <div class="form-group">
                        <label><strong id="titulo-info-feedback">Nome do Produto:</strong></label>
                        <p class="form-control"><?php echo $nomeProduto; ?></p>
                    </div>
                    <div class="form-group">
                        <label><strong>Nota:</strong></label>
                        <p class="form-control"><?php echo $notaProduto; ?></p>
                    </div>
                    <div class="form-group">
                        <label><strong>Comentário:</strong></label>
                        <p class="form-control"><?php echo $comentario; ?></p>
                    </div>
                    <div class="text-center">
                        <a href="feedback.php" class="btn btn-primary" id="btn-submit">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <canvas></canvas>

</body>
<script src="../../js/main.js" defer></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</html>
