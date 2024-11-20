<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h6><b>FORMULARIO</b></h6>
        <hr>

        -----LUDWING ALDAIR MAMANI YUCRA----
        <form method="POST" action="">

            <div class="mb-3">
                <label for="numero" class="form-label">ingresar Numero</label>
                <input type="numero" name="numero" class="form-control" id="numero" placeholder="Insertar número">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            <hr>
        </form>
        <?php












        // codigo php
        //echo $_GET ["fruta"]."</br>";
        
        // echo $_GET ["precio"]."</br>";
        

        if (isset($_GET["fruta"])) {
            echo $_GET["fruta"] . "</br>";

        }
        if (isset($_GET["precio"])) {
            echo $_GET["precio"] . "</br>";
        }

        echo $_POST["numero"];
        ?>
    </div>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>