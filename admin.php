<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <title>ADMIN</title>

    <style>
        form {
            width: 600px;
            margin: 50px auto;
            text-align: center;
        }

        div {
            width: 100%;
            margin: 15px auto;
        }

        label {
            display: block;
        }
    </style>
</head>

<body>
    <form action="./admin/dashboard.php" method="POST">
        <div>
            <label for="username">Utilizador</label>
            <input type="text" name="username" placeholder="username">
            <span></span>
        </div>
        <div>
            <label for="username">Palavra-passe</label>
            <input type="password" name="password" placeholder="password">
            <span></span>
        </div>
        <button id="log-in">Iniciar sessão</button>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="js/login.js"></script>
</body>

</html>