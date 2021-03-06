<?php
    require_once("cabecalho.php");
    require_once("banco-produto.php");
    require_once("class/Produto.php");
    require_once("class/Categoria.php");
    
    $categoria = new Categoria();
    $categoria->setId($_POST['categoria_id']);
           
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];
   
    if(array_key_exists('usado', $_POST)){
        $usado = "true";
    }else{
        $usado = "false";
    }
    
    $produto = new Produto($nome, $preco, $descricao, $categoria, $usado);
    $produto->setId($_POST['id']);
    
    if (alteraProduto($conexao, $produto)){?>
        <p class="text-success">Produto <?= $produto->getNome()?> alterado com sucesso.</p>
    <?php
    }else{
        $msg = mysqli_error($conexao);
    ?>
        <p class="text-danger">Erro ao alterar <?= $produto->getNome()?>. Erro: <?=$msg?></p>
    <?php
    }
    mysqli_close($conexao);
    ?>
    
   <?php
    require_once("rodape.php");
    ?>