<?php

namespace App\Http\Controllers\Menus;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AllergenController extends Controller
{
    public function index()
    {
        return view('menu.allergen.index',[

        ]);
    }
}
