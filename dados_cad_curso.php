<?php
    require 'config.php';

    $nomeCurso = filter_input(INPUT_POST, 'nome_curso');
    $professor = filter_input(INPUT_POST, 'professor');
    $sala = filter_input(INPUT_POST, 'sala');
    $inicio = filter_input(INPUT_POST, 'inicio');
    $fim = filter_input(INPUT_POST, 'fim');

    if($nomeCurso && $professor && $sala && $inicio && $fim){

        $sql = $pdo->prepare("INSERT INTO curso (nomeCurso, nomeProfessor, sala, horaInicio, horaFim) VALUES (:nome_curso, :professor, :sala, :inicio, :fim)");
        $sql->bindValue(':nome_curso', $nomeCurso);
        $sql->bindValue(':professor', $professor);
        $sql->bindValue(':sala', $sala);
        $sql->bindValue(':inicio', $inicio);
        $sql->bindValue(':fim', $fim);
        $sql->execute();

        header("Location: paginas/cursos.php");
        exit;

    }else{
        header("Location: paginas/cad_curso.php");
        exit;
    }