<?php

namespace App\Http\Controllers;
use App\Http\Controllers\PorductoController;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function getHome()
    {
        return redirect()->action([ProductoController::class, 'getIndex']);
    }
}
