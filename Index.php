<!DOCTYPE html>
<html>

<head>
    <title>Formulario de Contacto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>


    <div class="container">
        <div class="row justify-content-center mt-5 pt-5">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://th.bing.com/th/id/OIP.bKllzOWH-iWNPlms0r_Q3wAAAA?pid=ImgDet&rs=1" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Formulario de Contacto</h5>
                        <form method="post" action="guardar.php">
                            <div class="row form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required><br><br>
                            </div>
                            <div class="row form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required><br><br>
                            </div>
                            <div class="row form-group">
                                <label for="telefono">Telefono:</label>
                                <input type="number" class="form-control" id="email" name="telefono" required><br><br>
                            </div>
                            <div class="row form-group">
                            <label for="mensaje">Mensaje:</label><br>
                            <textarea id="mensaje" class="form-control" name="mensaje" required></textarea><br><br>
                            </div>
                            <hr>
                            <div class="row form-group">

                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>