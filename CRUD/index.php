<?php
include_once('./includes/header.php');
require_once('./databases.php');
?>

<div class="container">
    <kbd class="assinatura">Oscar-CRUD-PHP<span class="dolar">~$ </span><span class="dir">./</span><span class="dirname">MyPHP</span></kbd> 
    <table class="table table-dark align-baseline" id="tabela-cliente">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Sobrenome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Idade</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM clientes";
                $result = mysqli_query($connect, $sql);
                while($dados = mysqli_fetch_array($result)) :

                
            ?>
            <tr>
                <td><?php echo $dados['nome'] ?></td>
                <td><?php echo $dados['sobrenome'] ?></td>
                <td><?php echo $dados['email'] ?></td>
                <td><?php echo $dados['idade'] ?></td>
                <td class="ud-link">
                    <a href="#">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
                    <a href="#" data-toggle="modal" data-target="#changeModal">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <a class="btn btn-primary" id="add-cliente-btn" href="add.php" role="button">Add Cliente</a>
</div>

<?php
include_once('./includes/modal.php');
include_once('./includes/footer.php');
?>