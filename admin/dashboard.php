<?php
require '../db/dbh.inc.php';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.80.0">
  <title>Bom de Garfo - Restaurante</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/dashboard/">



  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">



  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="dashboard.css" rel="stylesheet">
</head>

<body>

  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Bom de garfo - Dashboard</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>-->
  </nav>

  <div class="container-fluid" id="table">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="sidebar-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#table">
                <span data-feather="home"></span>
                Ementa - Produtos <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#add_product">Adicionar Produto</a>
            </li>
          </ul>
        </div>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <form method="post" action="" class="w-100">
            <input class="form-control form-control-dark w-100" type="search" placeholder="Search" aria-label="Search" style="margin-right: 30px;" name="search">
          </form>
          <div class="btn-toolbar mb-2 mb-md-0">
          </div>
        </div>
        <?php
        if ($_POST) {
          $name = $_POST['search'];
          $sql = "SELECT * FROM pratos WHERE nome like '%$name%'";
          $result = mysqli_query($conn, $sql);
        } else {
          $sql = "SELECT * FROM pratos";
          $result = mysqli_query($conn, $sql);
        }
        ?>

        <h2>Ementa</h2>
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th>#ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Tipo</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php while ($dados = mysqli_fetch_array($result)) {
              ?>
                <tr>
                  <td><?php echo $dados['id'] ?></td>
                  <td><?php echo $dados['nome'] ?></td>
                  <td><?php echo $dados['descricao'] ?></td>
                  <td><?php echo $dados['tipo'] ?></td>
                  <td>
                    <form method="POST" action="dashboard.php">
                      <input type="hidden" value="<?php echo $dados['id'] ?>" name="id">
                      <input class="btn btn-secondary" type="submit" name="delete" value="X">
                    </form>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <hr>
        <div id="add_product">
          <h5 class="text-center">Adicionar Produto</h5>
          <form method="post" action="dashboard.php">
            <div class="form-group">
              <label for="exampleFormControlInput1">Nome</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nome" name="nome">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Descrição</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descricao"></textarea>
            </div>
            <div class="form-group" style="display: inli;">
              <label for="exampleFormControlSelect1">Tipo</label>
              <select class="form-control" id="exampleFormControlSelect1" name="tipo">
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlFile1">Imagem</label>
              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img">
              <div class="float-right">
                <button class="btn btn-primary" type="submit" name="submit">Adicionar</button>
              </div>
            </div>
          </form>
          <?php
          if (isset($_POST['submit'])) {
            $sql = "INSERT into pratos (nome, descricao, tipo, img) 
                VALUES ('" . $_POST['nome'] . "',' " . $_POST['descricao'] . "', '" . $_POST['tipo'] . "', '" . $_POST['img'] . "')";

            $result = mysqli_query($conn, $sql);
            ?>
            <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
                <div class="toast" style="position: absolute; top: 0; right: 0;">
                  <div class="toast-header">
                    <img src="..." class="rounded mr-2" alt="...">
                    <strong class="mr-auto">Dashboard</strong>
                    <small>11 mins ago</small>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="toast-body">
                    Produto adicionado com sucesso.
                  </div>
                </div>
              </div>
              <?php
          }
          if (isset($_POST['delete'])) {
            $id = $_POST['id'];
            $sql = "DELETE FROM pratos Where id = $id";
            $result = mysqli_query($conn, $sql);
            ?><div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
                <div class="toast" style="position: absolute; top: 0; right: 0;">
                  <div class="toast-header">
                    <img src="..." class="rounded mr-2" alt="...">
                    <strong class="mr-auto">Dashboard</strong>
                    <small>11 mins ago</small>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="toast-body">
                    Produto eliminado com sucesso.
                  </div>
                </div>
              </div>
          <?php
          }
          ?>
        </div>
      </main>
    </div>
  </div>
  <hr>



  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')
  </script>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
  <script src="dashboard.js"></script>
</body>

</html>