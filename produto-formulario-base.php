<input type="hidden" name="id" value="<?= $produto->getId() ?>">
            <tr>
                <td>Nome: </td>
                <td><input class="form-control" name="nome" type="text" value="<?= $produto->getNome() ?>"></td>
            </tr>
            <tr>
                <td>Preço: </td>
                <td><input class="form-control" name="preco" type="number" value="<?= $produto->getPreco() ?>"></td>
            </tr>
            <tr>
                <td>Descrição: </td>
                <td>
                    <textarea class="form-control" name="descricao"><?= $produto->getDescricao() ?></textarea>
                </td>
            </tr>
            <tr>
                <td>Categoria: </td>
                <td>
                    <select name="categoria_id" class="form-control">
                        <?php
                        foreach($categorias as $categoria):    
                            $essaEhACategoria = $produto->getCategoria()->getId() == $categoria->getId();
                            $selecao = $essaEhACategoria ? "selected='selected'" : "";
                            
                        ?>
                        <option value="<?= $categoria->getId()?>" <?= $selecao?>><?= $categoria->getNome()?></option>
                        <?php
                        endforeach;    
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="checkbox" name="usado" <?= $usado?>>Usado</td>
            </tr>
            <tr>
