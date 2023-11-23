<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>INSERTAR MASCOTA</H1>
<form method="POST" action="/mascotas">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br>


        <label for="raza">Raza:</label>
        <input type="text" id="raza" name="raza"><br>


        <label for="edad">Edad:</label>
        <input type="text" id="edad" name="edad"><br>

        <label for="Peso">Peso:</label>
        <input type="number" id="Peso" name="peso"><br>


        <button type="submit">Guardar</button>
</form>

</body>
</html>