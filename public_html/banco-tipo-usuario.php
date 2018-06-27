<?php

function listaTipoUsuario($conexao) {
    $tipoUsuarios = array();
    $query = "select * from tipo_usuario";
    $resultado = mysqli_query($conexao, $query);
    while($tipoUsuario = mysqli_fetch_assoc($resultado)) {
        array_push($tipoUsuarios, $tipoUsuario);
    }
    return $tipoUsuarios;
}
