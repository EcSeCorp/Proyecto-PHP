<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Conexion MySQL-PHP prueba</h1>
        <form action="db/conexion.php" method = "POST">
        <input type ="submit" value= "Conectar">
        </form> <br>
<form action="close.php" method="POST">
<input type ="submit" value= "Desconectar">
        </form> <br>
<form action="consulta.php" method="POST">
<input type ="submit" value= "Consultar">
        </form> <br>
</body>
</html>