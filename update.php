<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro do Curso</title>
    </head>
    <body>
        <?php
            require 'config.php';

            $info=[];
            $id = filter_input(INPUT_GET, 'id');
            if($id){

                $sql = $pdo->prepare("SELECT * FROM curso WHERE id = :id");
                $sql->bindValue(':id', $id);
                $sql->execute();

                if($sql->rowCount() > 0){
                    $info = $sql->fetch( PDO::FETCH_ASSOC );
                }else{
                    header("Location: paginas/cursos.php");
                    exit;
                }

            }else{
                header("Location: paginas/cursos.php");
                exit;
            }
        ?>

        <form method="POST" action="dados_update.php">
            <input type="hidden" name="id" value="<?=$info['id'];?>" />
            <label>
                Nome do Curso:
                <br/>
                <input type="text" name="nome_curso" value="<?=$info['nomeCurso'];?>" />
            </label>
            <br/>

            <label>
                Professores:
                <br/>
                <input type="text" name="professor" value="<?=$info['nomeProfessor'];?>" />
            </label>
            <br/>
            <br/>

            <label>
                Salas:
                <br/>
                <input type="text" name="sala" value="<?=$info['sala'];?>" />
            </label>
            <br/>

            <label>
                Inicio:
                <br/>
                <input type="text" name="inicio" value="<?=$info['horaInicio'];?>" />
            </label>
            <br/>

            <label>
                Fim:
                <br/>
                <input type="text" name="fim" value="<?=$info['horaFim'];?>" />
            </label>
            <br/>

            <input type="submit" value="Salvar" />

        </form>
    </body>
</html>