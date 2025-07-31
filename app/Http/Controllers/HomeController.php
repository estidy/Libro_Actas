<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
   public function index()
    {
        // Si ya está autenticado, redirige al dashboard u otra sección
        if (auth()->check()) {
            return redirect()->route('visits.index');
        }

        // Mostrar la vista de login
        return view('home');
    }
}
