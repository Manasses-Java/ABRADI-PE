<?php include("./cabecalho.php");
      include("./conecta.php");
      include("./banco-tipo-usuario.php");
      include("./banco-usuario.php");

$id = $_GET['id'];
$produto = buscaUsuario($conexao, $id);

$categorias = listaTipoUsuario($conexao);

?>

<h1>Alterar Usuário</h1>
<form action="altera-usuario.php" method="post">
    <input type="hidden" name="id" value="<?=$usuario['id']?>" />
    <table class="table">
        <tr>
            <td>Foto</td>
            <td><input class="form-control" type="file" name="foto" value="<?=$usuario['foto']?>" /></td>
        </tr>
        <tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="nome" value="<?=$usuario['nome']?>" /></td>
        </tr>
        <tr>
            <td>idade</td>
            <td><input class="form-control" type="number" name="idade" value="<?=$usuario['idade']?>" /></td>
        </tr>
        <tr>
            <td>email</td>
            <td><input class="form-control" type="email" name="email" value="<?=$usuario['email']?>" /></td>
        </tr>
        <tr>
            <td>senha</td>
            <td><input class="form-control" type="password" name="senha" value="<?=$usuario['senha']?>" /></td>
        </tr>
        <tr>
            <td>Tipo Usuário</td>
            <td>
                <select class="form-control" name="id_tipo_usuario">
                    <?php foreach($tipoUsuarios as $tipoUsuario) :
                        $essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
                        $selecao = $essaEhACategoria ? "selected='selected'" : "";
                    ?>
                        <option value="<?=$categoria['id']?>" <?=$selecao?>>
                            <?=$categoria['nome']?>
                        </option>
                    <?php endforeach ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><button class="btn btn-primary" type="submit">Alterar</button></td>
        </tr>
    </table>
</form>

<?php include("./rodape.php"); ?>