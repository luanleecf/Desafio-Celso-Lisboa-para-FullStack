<?php
    require 'config.php';

    $id = filter_input(INPUT_POST, 'id');
    $nomeCurso = filter_input(INPUT_POST, 'nome_curso');
    $professor = filter_input(INPUT_POST, 'professor');
    $sala = filter_input(INPUT_POST, 'sala');
    $inicio = filter_input(INPUT_POST, 'inicio');
    $fim = filter_input(INPUT_POST, 'fim');

    if($id && $nomeCurso && $professor && $sala && $inicio && $fim){

        $sql = $pdo->prepare("UPDATE curso SET nomeCurso = :nome_curso, nomeProfessor = :professor, sala = :sala, horaInicio = :inicio, horaFim = :fim WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->bindValue(':nome_curso', $nomeCurso);
        $sql->bindValue(':professor', $professor);
        $sql->bindValue(':sala', $sala);
        $sql->bindValue(':inicio', $inicio);
        $sql->bindValue(':fim', $fim);
        $sql->execute();

        header("Location: paginas/cursos.php");
        exit;

    }else{
        header("Location: update.php");
        exit;
    }