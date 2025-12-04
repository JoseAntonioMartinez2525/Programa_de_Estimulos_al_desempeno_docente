<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index() 
    { $items = Item::paginate(10); // Obtener 10 elementos por página 
<<<<<<< HEAD
        return view('comision_dictaminadora', compact('items'));
=======
        return view('docentes_list', compact('items'));
>>>>>>> b94b5bcd4ffc7e2f8aefcef6e4f8e8061b88ffa4
    }
}


