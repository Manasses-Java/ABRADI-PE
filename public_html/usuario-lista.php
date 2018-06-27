<?php include("./cabecalho.php");
      include("./conecta.php");
      include("./banco-tipo-usuario.php");
      include("./banco-usuario.php"); ?>

<?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
    <p class="alert-success">Usuário apagado com sucesso.</p>
<?php } ?>

<table class="table table-striped table-bordered">

    <?php
        $usuarios = listaUsuario($conexao);
        foreach($usuarios as $usuario) :
    ?>
    <tr>
        <td>Nome</td>
        <td>Idade</td>
        <td>E-Mail</td>
        <td>Tipo Usuário</td>
    </tr>
    <tr>
        <td><?= $usuario['nome'] ?></td>
        <td><?= $usuario['idade'] ?></td>
        <td><?= $usuario['email'] ?></td>
        <td><?= $usuario['descricao'] ?></td>
        <td><a class="btn btn-primary" href="usuario-altera-formulario.php?id=<?=$usuario['id']?>">alterar</a></td>
        <td>
            <form action="remove-usuario.php" method="post">
                <input type="hidden" name="id" value="<?=$usuario['id']?>" />
                <button class="btn btn-danger">remover</button>
            </form>
        </td>
    </tr>
    <?php
        endforeach
    ?>
</table>

<?php include("./rodape.php"); ?>