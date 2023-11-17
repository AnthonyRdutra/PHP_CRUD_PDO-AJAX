<?php
include "CRUD_logic.php";

$update = new \Include\CRUD_logic();
$id = filter_input(INPUT_GET, 'id');
$usuario = $update->Update_client($id);

?>

<h1>Editar Usuário
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
</h1>

<form method="post" action="applychanges.php">
    <input type="hidden" name="id" value="<?= $usuario['id'] ?? ''; ?>"/>
    <label>
        Nome: <input type="text" name="nome" id="nome" value="<?= $usuario['nome'] ?? ''; ?>"/>
    </label>
    <label>
        E-mail: <input type="email" id="email" name="email" value="<?= $usuario['email'] ?? ''; ?>"/>
    </label>
    <input type="submit" id="btn_update" value="Atualizar"/>
</form>
<script>
    $(document). ready(function(){
        console.log("page ready");

        $("#btn_update").on("click", function(event){
            // event.preventDefault();
            $.ajax({
                url: "/crudphpAJAX/Include/applychanges.php",
                method:"post",
                data: $('form').serialize(),
                dataType: "text"
            })
        })
    })
</script>