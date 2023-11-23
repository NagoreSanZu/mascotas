<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>LISTA DE MASCOTAS INSERTADAS</h1>


        <table class="table" border="1">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Raza</th>
                    <th>Edad (años)</th>
                    <th>Peso</th>
                    
                    <!-- Agregar más columnas según la estructura de tu tabla de usuarios -->
                </tr>
            </thead>
            <tbody>
                @foreach($mascotas as $mascota)
                    <tr>
                        <td>{{ $mascota->nombre }}</td>
                        <td>{{ $mascota->raza }}</td>
                        <td>{{ $mascota->edad }}</td>
                        <td>{{ $mascota->peso }}</td>
                        <td><a href="{{ route('mascotas.editar', ['mascotas' => $mascota]) }}"
                                       class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded">
                                        Editar
                                    </a></td>
                        <td>   <form action="{{ route('mascotas.eliminar', ['mascotas' => $mascota]) }}" method="post" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded">
                                            Eliminar </button>
                        </form></td>
                     

                        <!-- Agregar más columnas según la estructura de tu tabla de usuarios -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>