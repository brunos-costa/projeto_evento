<?php
session_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>Projeto Gerenciamento de eventos</title>
</head>
<body>
    <header class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">Gerenciador de Eventos</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Logout</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>
   
    <main class="container-fluid mt-5">
        <?php
            // isset() verifica se alguma variável existe
            if(isset($_SESSION["mensagem"])){
                if($_SESSION["mensagem"]["status"]){ 
                    echo"
                        <div class='alert alert-success alert-dismissible fade show'> 
                        
                        </div>
                    ";
                }
                else{

                }
            }
        ?>
        <h1 class="text-center fw-bold">Cadastre um novo evento</h1>
        <hr>
        <form action="../controller/EventoController.php" method="post" class="mt-5" enctype="multipart/form-data">        
            <section class="container col-md-6">
                <div class="row mb-3">
                    <label for="nomeEvento" class="form-label">
                        Nome <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="nomeEvento" id="nomeEvento" class="form-control">
                </div>

                <div class="row mb-3">
                    <label for="dataEvento" class="form-label">
                        Data do evento <span class="text-danger">*</span>
                    </label>
                    <input type="date" name="dataEvento" id="dataEvento" class="form-control">
                </div>

                <div class="row mb-3">
                    <label for="banner" class="form-label">
                        Banner do evento <span class="text-danger">*</span>
                    </label>
                    <input type="file" name="banner" id="banner" class="form-control" accept="image/*">
                </div>

                <button type="submit" class="btn btn-primary my-3 col-12">Cadastrar</button>
            </section>
        </form>
    </main>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>