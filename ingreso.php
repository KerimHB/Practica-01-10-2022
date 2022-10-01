<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>
    <header>
        <div class="container-fluid text-center text-white bg-dark">
            <div class="row">
                <div class="col-md-8">
                    <h3>Perfil</h3>
                </div>
                <div class="col-md-4">
                    <a class="text-white" href="logout.php">Cerrar session</a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container text-center">
            <?php
            session_start();
            $usuario = $_SESSION['username'];
            echo '<h1>Bienvenido ' . $usuario . '</h1>';
            if ($usuario == "KerimHB") {
                echo '<img src="img/kerim.png" height="300" width="300">';
                echo '<br><br>';
                echo '<h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi dignissimos harum similique totam minima consectetur autem, aspernatur in, saepe commodi officiis exercitationem sequi quidem accusantium velit maxime reprehenderit expedita voluptatum?</h3>';
            } elseif ($usuario == "JassM10") {
                echo '<img src="img/jass.jpg" height="300" width="300">';
                echo '<h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi dignissimos harum similique totam minima consectetur autem, aspernatur in, saepe commodi officiis exercitationem sequi quidem accusantium velit maxime reprehenderit expedita voluptatum?</h3>';
            } elseif ($usuario == "ReaperBorja") {
                echo '<img src="img/reaper.jpg" height="300" width="300">';
                echo '<h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi dignissimos harum similique totam minima consectetur autem, aspernatur in, saepe commodi officiis exercitationem sequi quidem accusantium velit maxime reprehenderit expedita voluptatum?</h3>';
            }


            ?>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
</body>

</html>