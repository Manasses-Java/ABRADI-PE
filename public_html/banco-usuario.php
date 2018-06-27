<?php

function listaUsuario($conexao) {
    $usuarios = array();
    $resultado = mysqli_query($conexao, "select nome, idade, email, descricao from usuario as u join tipo_usuario as t on t.id = u.id");

    while($usuario = mysqli_fetch_assoc($resultado)) {
        array_push($usuarios, $usuario);
    }

    return $usuarios;
}

function cadastrarUsuario($conexao, $nome, $idade, $email, $senha, $id_tipo_usuario, $foto) {
    $query = "insert into usuario (nome, idade, email, senha, id_tipo_usuario)
        values ('{$nome}', {$idade}, '{$email}', '{$senha}', {$id_tipo_usuario})";
    return mysqli_query($conexao, $query);
}

function alteraUsuario($conexao, $id, $nome, $idade, $email, $senha, $id_tipo_usuario, $foto) {
    $query = "update usuario set nome = '{$nome}', idade = {$idade}, email = '{$email}',
        senha= '{$senha}', id_tipo_usuario = {$id_tipo_usuario} where id = '{$id}'";
    return mysqli_query($conexao, $query);
}

function removeUsuario($conexao, $id) {
    $query = "delete from usuario where id = {$id}";
    return mysqli_query($conexao, $query);
}

function buscaUsuario($conexao, $id) {
    $query = "select * from usuario as u join tipo_usuario as t on t.id = u.id where u.id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}
