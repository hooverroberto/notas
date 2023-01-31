<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repaso</title>

</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <title>Registro</title>
    </head>

    <body>

        <?php include 'navbar.php' ?>
        <div class="container-fluid">
           
            <div class="container justify-content-center align-items-center mt-5">

                <div class="card p-5">
                    <h1>Register</h1>
                    <form action="enviar.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class=" col-6 form-group mb-3">
                                <label>Email</label>
                                <input type="email" required class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="col-6 form-group mb-3">
                                <label>Password</label>
                                <input type="password" required class="form-control" name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Address</label>
                            <input type="text" required class="form-control" name="address" placeholder="1234 Main St">
                        </div>                       
                        <div class="form-group mb-3">
                            <label>Address 2</label>
                            <input type="text" required class="form-control" name="address2" placeholder="Apartament, studio, or floor">
                        </div>
                        <div class="row">
                            <div class="col-6 form-group mb-3">
                                <label>City</label>
                                <input type="text" required class="form-control" name="city" placeholder="City">
                            </div>
                            <div class="col-6 form-group mb-3">
                                <label>State</label>
                                <input type="text" required class="form-control" name="state" placeholder="State">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label class="mb-1">Imagen</label>
                            <input type="file" required class="form-control" name="imagen">
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" checked>
                            <label class="form-check-label">Check me out</label>
                        </div>

                        <button class="btn btn-primary mt-5" type="submit" name="registrar"> Registrar</button>
                    </form>

                </div>
            </div>
        </div>
    </body>

    </html>
</body>

</html>