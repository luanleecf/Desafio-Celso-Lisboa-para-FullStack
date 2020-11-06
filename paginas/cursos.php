<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


        <title>Cursos</title>
    </head>

    <body>

        <?php
        require '../config.php';

        $sql = $pdo->query("SELECT * FROM curso");

        $lista = [];
        if ($sql->rowCount() > 0) {
            $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        ?>

        <div>
            <a href="cad_curso.php"><button type="button"> <span> Cadastrar <img src="../imagens/plus-square.svg"></span></button></a>

        </div>

        <?php foreach ($lista as $dadosCurso) : ?>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card-deck">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $dadosCurso['nomeCurso'] ?></h5>
                                    <a href="../delete.php?id=<?=$dadosCurso['id'];?>"><img src="../imagens/trash.png" alt=""></a>
                                    <a href="../update.php?id=<?=$dadosCurso['id'];?>"><img src="../imagens/update2.png" alt=""></a>
                                    <p><?php echo $dadosCurso['nomeProfessor'] ?></p>
                                    <p><?php echo $dadosCurso['sala'] ?></p>
                                    <p><?php echo $dadosCurso['horaInicio'] ?></p>
                                    <p><?php echo $dadosCurso['horaFim'] ?></p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>

</html>