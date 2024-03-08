<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\PanelTemperatura;

class DashboardController extends Controller
{
    public function index()
    {   
        $current_user = auth()->user();

        $cad_usuario = Usuario::where('login', $current_user->email)->first();
        $employees = PanelTemperatura::where('cad_cliente_id', $cad_usuario->cad_cliente_id)->first();

        return view('dashboard')
        ->with(compact('cad_usuario', 'employees'));
    }
}
