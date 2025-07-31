<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Visit;
use Illuminate\Support\Facades\Auth;

class VisitController extends Controller
{
   public function index(Request $request)
    {
        $orden = $request->input('orden', 'desc');
        $visits = Visit::with('user')->get();
        $visits = Visit::orderBy('created_at', $orden)->get();
        return view('visits.index', compact('visits', 'orden'));
    }

    public function create()
    {
        return view('visits.create');
    }

    public function store(Request $request)
    {
        $validator= Validator::make($request->all(),[
            'description' => 'required|string',
        ]);
        if($validator->fails()){
            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }

        Visit::create([
            'user_id' => Auth::id(),
            'description' => $request->description,
        ]);

        return redirect()->route('visits.index')->with('success', 'visita creada correctamente.');
    }
}
