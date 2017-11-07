<?php
    require_once("cabecalho.php");
    require_once("banco-categoria.php");
    require_once("banco-produto.php");
    require_once("class/Produto.php");
    
    
    $id = $_GET['id'];
    
    $produto = buscaProduto($conexao, $id);
    $categorias = listaCategorias($conexao);
    $usado = $produto->getUsado() ? "checked='checked'" : "";
?>
    <h1>Alterando produto</h1>
    <form action="altera-produto.php" method="post">
        <table class="table">
            <?php include("produto-formulario-base.php");?>
                <td>
                    <button class="btn btn-primary" type="submit" >Alterar</button>
                </td>
            </tr>
        </table>
    </form>
<?php
    require_once("rodape.php");
?>