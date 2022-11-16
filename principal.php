<?php
require 'db/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Bom de Garfo - Restaurante</title>
    <link href="css/styles.css" rel="stylesheet" />

    <link rel="icon" type="image/x-icon" href="Images/icon.png">

    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    
</head>

<body id="page-top">
    <!-- Navigation-->
    <?php
    include 'includes/navbar.php';
    ?>

    <header class="masthead">
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center">
                <h1 class="mx-auto my-0 text-uppercase">Principal</h1>
                <br><br>
                <!--<h2 class="text-white-50 mx-auto mt-2 mb-5">A free, responsive, one page Bootstrap theme created by Start Bootstrap.</h2>
                    <a class="btn btn-primary js-scroll-trigger" href="#about">Get Started</a>-->
            </div>
        </div>
    </header>

    <section class="projects-section bg-light" id="projects">
        <?php


        $q = 'SELECT p.nome, t.tipo, p.descricao, p.img FROM pratos p inner join tipo t on p.tipo=t.id where t.id = 2';
        $result = mysqli_query($conn, $q);


        ?>
        <div class="container">
            <div class="row">
                <?php while ($dados = mysqli_fetch_array($result)) {
                ?>
                    <div class="col-lg-4 col-md-6 mb-4">

                        <div class="card h-100">

                            <a href="product.php"><img class="card-img-top" src="Images/<?php echo $dados['img'] ?>" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="product.php?id=<?php echo $dados['id']; ?>"><?php echo $dados['nome']; ?></a>
                                </h4>
                                <p class="card-text p1" maxlength="40"><?php echo $dados['descricao']; ?></p>
                            </div>
                            <div class="card-footer">
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- footer-->
    <?php
    include 'includes/footer.php';
    ?>

    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>