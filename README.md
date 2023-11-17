# PHP_CRUD_PDO-AJAX
Second iteration of my CRUD, now with AJAX, for finding 'names' and 'email' and better modularity 


# Tecnologies

# AJAX
Adding ajax via hhtp on the code, just paste it on HTML code, on the hearders:
````
<script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
</h1>
````
If you dont have this library already installed, your IDE will highlight it for you, just follow the procedure. 

At the end of the Html code, after the end of `</forms>`, we add: 
```
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
```
this scrips will scan all the code insde the forms an find the objects `id=`, as for example:
```
        Nome: <input type="text" name="nome" id="nome" value="<?= $usuario['nome'] ?? ''; ?>"/>
```
In this line we have ``id="nome"``, which is the ``id`` we are searching for, that id's will be sent to script defined in `url:"path_of_your_script"`.

before using AJAX we needed to define a method in the forms, and setup an action that redirects the data to a script, using AJAX we define it on URL and we get the data in that way:
```
$id = $_POST['id'];
$input_name = $_POST['nome'];
$input_email = $_POST['email'];
```
Just by declaring their ID, were before we need to use `input_filter()`. 
