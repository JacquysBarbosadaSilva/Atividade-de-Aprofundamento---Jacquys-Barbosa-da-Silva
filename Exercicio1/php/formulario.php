<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="../../css/style.css">
        <title>Cadastro</title>
    </head>
    <body>
        <div class="pos-f-t">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-dark p-4">
                    <a href="../../index.php"><h6 class="text-white h6">Home</h6></a>
                    <a href="#"><h6 class="text-white h6">Cadastro</h6></a>
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
                <h1 class="h1-formulario">Cadastrar</h1>
                <p id="paragrafo-cadastro">Para se cadastrar em nosso site preencha os campos abaixo</p>
                
                <form id="formCadastro" action="validacao_formulario.php" method="post">
                    <div class="form-group">
                        <label for="nome" id="label-nome">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="password" class="form-control" id="senha" name="senha" required>
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone:</label>
                        <input type="number"  class="form-control" id="telefone" name="telefone" required>
                    </div>

                    <button type="submit" id="btn-submit">Enviar</button>
                </form>

            </div>
        </main>
        <canvas></canvas>
    </body>
    <script src="../../js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</html>