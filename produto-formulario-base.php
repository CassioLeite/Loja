<input type="hidden" name="id" value="<?= $produto['id'] ?>">
            <tr>
                <td>Nome: </td>
                <td><input class="form-control" name="nome" type="text" value="<?= $produto['nome']?>"></td>
            </tr>
            <tr>
                <td>Preço: </td>
                <td><input class="form-control" name="preco" type="number" value="<?= $produto['preco']?>"></td>
            </tr>
            <tr>
                <td>Descrição: </td>
                <td>
                    <textarea class="form-control" name="descricao"><?= $produto['descricao']?></textarea>
                </td>
            </tr>
            <tr>
                <td>Categoria: </td>
                <td>
                    <select name="categoria_id" class="form-control">
                        <?php
                        foreach($categorias as $categoria):    
                            $essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
                            $selecao = $essaEhACategoria ? "selected='selected'" : "";
                            
                        ?>
                        <option value="<?= $categoria['id']?>" <?= $selecao?>><?= $categoria['nome']?></option>
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
