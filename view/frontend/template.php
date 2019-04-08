<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
	
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
    </head>
        
    <body>
    <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand">Blog</a>
    <form class="form-inline">
        <a href="index.php?action=connexion" class="btn btn-info m-2 my-sm-0">Se connecter</a>
        <a href="index.php?action=subscription" class="btn btn-info m-2 my-sm-0">S'inscrire</a>
    </form>
    </nav>
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
            <!--img src="public\images\30254540476_77fd4e92b5_k.jpg" class="img-fluid"  alt="Responsive image"-->
                <div class="container">
                    <h1 class="display-4">Blog de Jean</h1>
                    <p class="lead">Billet pour l'Alaska</p>
                </div>
            </div>
        </div>

        <?= $content ?>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>