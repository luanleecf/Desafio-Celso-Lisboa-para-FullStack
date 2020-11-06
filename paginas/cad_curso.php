<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro do Curso</title>
    </head>
    <body>
        <?php
            require '../config.php';
        ?>

        <form method="POST" action="../dados_cad_curso.php">
            <label>
                Nome do Curso:
                <br/>
                <input type="text" name="nome_curso"/>
            </label>
            <br/>

            <label>
                Professores:
                <br/>
                <input type="text" name="professor"/>
            </label>
            <br/>
            <br/>

            <label>
                Salas:
                <br/>
                <input type="text" name="sala"/>
            </label>
            <br/>

            <label>
                Inicio:
                <br/>
                <input type="text" name="inicio"/>
            </label>
            <br/>

            <label>
                Fim:
                <br/>
                <input type="text" name="fim"/>
            </label>
            <br/>

            <input type="submit" value="Salvar">


        </form>
    </body>
</html>