<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura dos dados do formulário
    $nomeSolicitante = htmlspecialchars($_POST["nomeSolicitante"]);
    $dataReuniao = htmlspecialchars($_POST["dataReuniao"]);
    $horaReuniao = htmlspecialchars($_POST["horaReuniao"]);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reserva</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/style.css"> <!-- Substitua pelo seu arquivo CSS -->
    </head>
    <body>
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-dark p-4">
                    <a href="../../index.php"><h6 class="text-white h6">Home</h6></a>
                    <a href="../../Exercicio1/php/formulario.php"><h6 class="text-white h6">Cadastro</h6></a>
                    <a href="../../Exercicio2/php/feedback.php"><h6 class="text-white h6">Feedback</h6></a>
                    <a href="#"><h6 class="text-white h6">Reserva</h6></a>
                </div>
            </div>
            <nav class="navbar navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div>
        <div class="container mt-5">
            <h1 class="text-center">Reserva Confirmada</h1>
            <div class="alert alert-success mt-4">
                <p><strong>Nome do Solicitante:</strong> <?php echo $nomeSolicitante; ?></p>
                <p><strong>Data da Reunião:</strong> <?php echo $dataReuniao; ?></p>
                <p><strong>Horário da Reunião:</strong> <?php echo $horaReuniao; ?></p>
            </div>
            <div class="text-center">
                <a href="reserva.php" class="btn btn-primary" id="btn-submit">Voltar para Reserva</a>
            </div>
        </div>
        <canvas></canvas>

        <script src="../../js/main.js" defer></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>
