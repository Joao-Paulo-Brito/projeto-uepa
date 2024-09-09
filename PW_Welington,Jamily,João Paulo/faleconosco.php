<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UEPA</title>
    <link rel="stylesheet" href="css/faleconosco.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="valida-campo.js"></script>
</head>
<body>
    <header>
        <div class="container col-md-4">
            <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
                <img src="img/uepa-logo.png" alt="uepa-logo" id="logo">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle-navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                    <div class="navbar-nav">
                        <a href="index.html">Página inicial</a>
                        <a href="curso.html">Estrutura do curso</a>
                        <a href="avaliacao.html">Sistema de avaliação</a>
                        <a href="docentes.html">Corpo docente</a>
                        <a href="estrutura.html">Estrutura física do campus</a>
                        <a href="colegiado.html">Colegiado do curso</a>
                        <a href="nde.html">Núcleo docente estruturante</a>
                        <a href="faleconosco.php">Fale conosco</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>
            <div class="container">
              <div class="from">
                <br>
                <br>
                <h2>Fale Conosco</h2>
                <?php
                  include 'conexao.php';

                  if($_SERVER['REQUEST_METHOD'] === 'POST'){
                      $email = $_POST['email'];
                      $assunto = $_POST['assunto'];
                      $mensagem = $_POST['mensagem'];

                      // Verifica se todos os campos estão preenchidos
                        if (empty($email) || empty($assunto) || empty($mensagem)) {
                          echo "<br><br>Por favor, preencha todos os campos.";
                        } else {
                          // Executa a inserção no banco de dados
                          $sql = "INSERT INTO contato (email, assunto, mensagem) VALUES ('$email', '$assunto', '$mensagem')";

                          if ($conn->query($sql) === TRUE) {
                              echo "";
                          } else {
                              echo "" . $conn->error;
                          }
                      }

                      $conn->close();

                  }

                ?>
                <form class="login" method="POST" action="faleconosco.php">
                  <select class="form-control inputBox" id="assunto" name="assunto">
                    <option selected disabled>--Selecione um assunto--</option>
                    <option>Dúvidas</option>
                    <option>Sugestões</option>
                    <option>Problemas</option>
                  </select>
                  <div class="inputBox">
                    <input type="text" placeholder="Email" name="email">
                  </div>
                  <div class="inputBox">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Digite uma mensagem" name="mensagem"></textarea>
                  </div>
                  <div class="inputBox">
                    <input type="submit" value="Enviar">
                  </div>
                </form>
              </div>
            </div>
          </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <footer>
      <p>Site desenvolvido por João Paulo Brito, Jamilly Gonçalves Batista e Welington Morais Ferreira Júnior</p>
  </footer>
</body>
</html>
