<html>

    <head>
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    </head>

    <body>
        <form method="post">
            <input type="text" id="nome" name="nome" placeholder="Nome do cliente" />
            <br/>
            <input type="email" id="email" name="email" placeholder="Email do cliente" />
            <br/>
            <input type="submit" id="btn_gravar" value="Adicionar" />
        </form>
        <script>
            $(document). ready(function(){
                console.log("page ready");

                $("#btn_gravar").on("click", function(event){
                    event.preventDefault();
                    $.ajax({
                        url: "/crudphpAJAX/Include/clientsingup.php",
                        method:"post",
                        data: $('form').serialize(),
                        dataType: "text"
                    })
                })
            })
        </script>
        <a href="/crudphpAJAX/">Voltar</a>
    </body>
</html>