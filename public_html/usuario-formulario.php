<?php include("./cabecalho.php");
      include("./conecta.php");
      include("./banco-tipo-usuario.php");

$categorias = listaTipoUsuario($conexao);
?>

<h1>Formulário de cadastro</h1>
<form action="adiciona-usuario.php" method="post">
    <table class="table">
        <tr>
            <td>Foto</td>
            <td><input class="form-control" type="file" name="foto"></td>
        </tr>
        <tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="nome" /></td>
        </tr>
        <tr>
            <td>Idade</td>
            <td><input class="form-control" type="number" name="idade" /></td>
        </tr>
        <tr>
            <td>E-Mail</td>
            <td><input class="form-control" type="email" name="email" /></td>
        </tr>
        <tr>
            <td>Senha</td>
            <td><input class="form-control" type="password" name="senha" /></td>
        </tr>
        <tr>
            <td>Tipo Usuário</td>
            <td>
                <select class="form-control" name="id_tipo_usuario">
                    <?php foreach($categorias as $categoria) : ?>
                        <option value="<?=$categoria['id']?>"><?=$categoria['descricao']?></option>
                    <?php endforeach ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
        </tr>
    </table>
</form>

<?php include("rodape.php"); ?>
