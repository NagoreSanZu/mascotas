<?php
 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MascotaModelo;
use Illuminate\Http\Request;
 
class MascotaController extends Controller
{
    //para mostrar la tabla mascotas
    public function index()
    {
        $mascotas = MascotaModelo::all();


        return view('index', ['mascotas' => $mascotas]);
    }

   
    public function create()
{
    return view('create');
}

//funcion de update

//editar
public function edit(MascotaModelo $mascotas)
{
    return view('modificar', compact('mascotas'));
}


//actualizar los datos 
public function update(Request $request, MascotaModelo $mascotas)
{

    $request->validate([
        'nombre' => 'required|string|max:255',
        'raza' => 'required|string|max:255',
        'edad' => 'required|int',
        'peso' => 'required|int',// Otras reglas de validación según sea necesario
    ]);

    $mascotas->update([
        'nombre'=> $request->input('nombre'),
        'raza'=> $request->input('raza'),
        'edad'=> $request->input('edad'),
        'peso'=> $request->input('peso'),

    ]);

    return redirect()->route('index');
}
//fin  de uptade

//funcion eliminar
    public function destroy(MascotaModelo $mascotas)
    {
        $mascotas->delete();

        return redirect()->route('index');
    }
//fin funcion eliminar

//insertar una mascota
    public function insertarMascota(Request $request)
{
    // Validación de los campos
    $request->validate([
        'nombre' => 'required|string|max:255',
        'raza' => 'required|string|max:255',
        'edad' => 'required|int',
        'peso' => 'required|int',
    ]);



    $mascota = new MascotaModelo;
    //Variable local ->CampoEnLaBBDD = Variable ->input("nombre del name del formulario")
    $mascota->nombre = $request->input('nombre');
    $mascota->raza = $request->input('raza');
    $mascota->edad = $request->input('edad');
    $mascota->peso = $request->input('peso');
    // Guardar el usuario
    $mascota->save();


    // Redireccionar a la página de inicio u otra vista después de guardar
    return redirect('/index');
}
//fin insertar 

}
