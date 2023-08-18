<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Error;

class UsuarioController extends Controller
{
    public function index()
    {
        return Usuario::all();
    }
    public function show($id)
    {

        $usuario = Usuario::find($id);

        if (isset($usuario)) {
            return $usuario;
        } else {
            return "Bad Request";
        }
    }
}
