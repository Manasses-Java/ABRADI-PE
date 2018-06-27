<?php include("./cabecalho.php");
      include("./conecta.php");
      include("./banco-usuario.php");

$id = $_POST['id'];
removeUsuario($conexao, $id);

header("Location: usuario-lista?removido=true");
die();
?>
