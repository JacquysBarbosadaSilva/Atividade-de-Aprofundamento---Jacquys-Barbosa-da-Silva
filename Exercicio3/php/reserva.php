<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="../../css/style.css">
        <title>Document</title>
    </head>
    <body>
        <div class="pos-f-t">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-dark p-4">
                    <a href="../../index.php"><h6 class="text-white h6">Home</h6></a>
                    <a href="../../Exercicio1/php/formulario.php"><h6 class="text-white h6">Formulário</h6></a>
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
            <h1 class="text-center">Reserva de Sala de Reunião</h1>
            <form action="processar_reserva.php" method="POST" class="mt-4">
                <div class="form-group">
                    <label for="nomeSolicitante">Nome do Solicitante:</label>
                    <input type="text" class="form-control" id="nomeSolicitante" name="nomeSolicitante" required>
                </div>
                <div class="form-group">
                    <label for="dataReuniao">Data da Reunião:</label>
                    <input type="date" class="form-control" id="dataReuniao" name="dataReuniao" required>
                </div>
                <div class="form-group">
                    <label for="horaReuniao">Horário da Reunião:</label>
                    <input type="time" class="form-control" id="horaReuniao" name="horaReuniao" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block" id="btn-submit">Reservar</button>
            </form>
        </div>
        <canvas></canvas>
    </body>

    <script src="../../js/main.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>