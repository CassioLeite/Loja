<?php 
    require_once("cabecalho.php");
    require_once("banco-categoria.php");
    require_once("logica-usuario.php");
    require_once("class/Produto.php");
    require_once("class/Categoria.php");
    
    verificaUsuario();
    
    $categoria = new Categoria();
    $categoria->setId(1);
    
    $produto = new Produto("", "", "", $categoria, "");
    
    $categorias = listaCategorias($conexao);
    
?>
    <h1>Formulario de produtos</h1>
    <form action="adiciona-produto.php" method="post">
        <table class="table">
            <?php include("produto-formulario-base.php"); ?>
            <tr>
                <td><input class="btn btn-primary" type="submit" value="Cadastrar"></td>
            </tr>
        </table>
    </form>
<?php require_once("rodape.php");?>