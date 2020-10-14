<?php
include_once('./includes/header.php');
?>

<div class="container">
    <kbd class="assinatura">Oscar-CRUD-PHP<span class="dolar">~$ </span><span class="dir">./</span><span class="dirname">MyPHP</span></kbd> 
    <form action="./action/create.php" method="POST">
        <div class="form-group">
            <div class="col">
                <input type="text" name="nome" for="nome" class="form-control" placeholder="Primeiro Nome">
            </div>
            <div class="col">
                <input type="text" name="sobrenome" for="sobrenome" class="form-control" placeholder="Sobrenome">
            </div>
            <div class="col">
                <input type="email" name="email" for="email" class="form-control" placeholder="E-mail">
            </div>
            <div class="col">
                <input type="number" name="idade" for="idade" class="form-control" placeholder="Idade">
            </div>
        </div>
        <button type="submit" name="cadastrar" class="btn btn-primary">Enviar</button>
    </form>
</div>

<?php
include_once('./includes/footer.php');
?>