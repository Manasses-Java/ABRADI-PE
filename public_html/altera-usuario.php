<?php include("./cabecalho.php");
      include("./conecta.php");
      include("./banco-usuario.php"); ?>

<?php

$id = $_POST["id"];
$nome = $_POST["nome"];
$idade = $_POST["idade"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$id_tipo_usuario = $_POST["id_tipo_usuario"];
$foto = $_POST["foto"];

if(alteraUsuario($conexao, $id, $nome, $idade, $email, $senha, $id_tipo_usuario, $foto)) { ?>
    <p class="text-success">O usuário <?= $nome; ?> alterado com sucesso!</p>
<?php } else {
    $msg = mysqli_error($conexao);
?>
    <p class="text-danger">O usuário <?= $nome; ?> não foi alterado: <?= $msg ?></p>
<?php
}
?>

<?php include("./rodape.php"); ?>
