<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./../css/style.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Cartelera</title>

</head>

<body>
    <?php

    if (file_exists('./xml/encartelera.xml')) {
        $films = simplexml_load_file('./xml/encartelera.xml');
    }else {
        exit('Error abriendo encartelera.xml');
    }

    ?>
    <nav class="navbar bg-dark border-bottom border-body navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CineManiaASIX1</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <?php
                        $aux=[];
                        foreach($films->film as $fila){
                            if(!in_array((string)$fila['cine'],$aux)){
                                echo '<li class="nav-item">';
                                if(isset($_GET['cine']) && $_GET['cine']==(string)$fila['cine']){
                                    echo '<a class="nav-link active" aria-current="page" href="?cine='.$fila['cine'].'">'.$fila['cine'].'</a>';
                                }else{
                                    echo '<a class="nav-link" aria-current="page" href="?cine='.$fila['cine'].'">'.$fila['cine'].'</a>';
                                }
                                echo '</li>';
                                array_push($aux,(string)$fila['cine']);
                            }
                        }
                    ?>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Cines</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Ocine</a></li>
                            <li><a class="dropdown-item" href="#">SensaCine</a></li>
                            <li><a class="dropdown-item" href="#">CineComedia</a></li>
                        </ul>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/img1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="./img/img2.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="./img/img3.jpg" class="d-block w-100">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Título</th>
                <th scope="col" class="hidden">Descripción</th>
                <th scope="col">Tema</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(isset($_GET['cine'])){
                    foreach($films->film as $fila){
                        if($_GET['cine']==$fila['cine']){
                            echo "<tr>";
                            echo "<td>".$fila->title."</td>";
                            echo "<td class=hidden>".$fila->description."</td>";
                            echo "<td>".$fila->description['tema']."</td>";
                            echo "</tr>";
                        } 
                    }
                }else{
                    foreach($films->film as $fila){
                        echo "<tr>";
                        echo "<td>".$fila->title."</td>";
                        echo "<td class=hidden>".$fila->description."</td>";
                        echo "<td>".$fila->description['tema']."</td>";
                        echo "</tr>";
                    }
                }
            ?>
        </tbody>
    </table>
</body>