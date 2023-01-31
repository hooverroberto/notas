<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Tabla de datos</title>
</head>

<body>
    <?php include 'navbar.php' ?>

    <div class="container justify-content-center align-items-center mt-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Email</th>
                   
                    <th scope="col">Address</th>
                    <th scope="col">Address2</th>
                    <th scope="col">City</th>
                    <th scope="col">State</th>
                    <th scope="col">Imagen</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("conexion.php");
                $query = "SELECT * FROM applogueo";
                $resultado = $conexion->query($query);
                while ($row = $resultado->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['address2']; ?></td>
                        <td><?php echo $row['city']; ?></td>
                        <td><?php echo $row['state']; ?></td>
                        <td><img height="80" src="data:image/png;base64, <?php echo base64_encode(($row['imagen'])); ?>" /></td>
                        <!-- <!-- <td><a href="modificar.php?id=<?php echo $row['id']; ?>">Modificar</a></td> -->
                        <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Insertar Notas
                        </button>
                        </a></td> -->
                    </tr>
                <?php
                }

                ?>
            </tbody>
            </tbody>
        </table>        
    </div>

    <!-- <a href="insertar.php?id=<?php echo $row['id']; ?>"> -->
    
</body>

</html>