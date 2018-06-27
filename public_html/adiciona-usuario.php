<?php include("./cabecalho.php");
      include("./conecta.php");
      include("./banco-usuario.php"); ?>
<?php

$nome = $_POST["nome"];
$idade = $_POST["idade"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$id_tipo_usuario = $_POST["id_tipo_usuario"];
$foto = $_POST["foto"];

if(cadastrarUsuario($conexao, $nome, $idade, $email, $senha, $id_tipo_usuario, $foto)) { ?>
    <p class="text-success">O usuário <?= $nome; ?> cadastrado com sucesso!</p>
<?php } else {
    $msg = mysqli_error($conexao);
?>
    <p class="text-danger">O usuário <?= $nome; ?> não foi possivel cadastrar <?= $msg ?></p>
<?php
}
?>

<?php include("./rodape.php"); ?>
