<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="row">
       <div class="col-md-12 mt-4">
         <h1 class="text-center">Sistema de Cadastro</h1>
       </div>
    </div>
        <div class="row">
            <div class="col-md-6 mx-auto">

                <?php 
                    include 'model.php';
                    $model = new Model();
                    echo $id = $_REQUEST['id'];
                ?>

                <div class="card-hearder">
                    Nome
           </div>
           <div class="card-body">
            Dados
          </div>
     </div>
  </div>
</div>

        

</body>
</html>
