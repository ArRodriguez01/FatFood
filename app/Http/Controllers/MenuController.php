<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('gmenu.index',[
            'menus'=>Menu::all(),

         ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Menu $item)
    {
        $this->authorize('create',$item);
        $validated=$request->validate([
            'name'=>'required|string|max:50',
            'ingredientes'=>'required|string|max:255',
            'section'=>'required|string|max:50',
            'allergens'=>'boolean',
            'price'=>'required|numeric',
            'url'=>'required|string|max:255'

        ]);
        $menu=new Menu;
        $menu->name=$validated['name'];
        $menu->ingredientes=$validated['ingredientes'];
        $menu->section=$validated['section'];
        if (isset($validated['allergens'])) {
            $menu->allergens = true;
        } else {
            $menu->allergens = false;
        }
        $menu->price=$validated['price'];
        $menu->url=$validated['url'];
        $menu->save();

        return redirect('/menu');

    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $item)
    {
        $this->authorize('update', $item);

       $menu=Menu::find($item);
       dd($menu);

        $validatedData = $request->validate([
            'name' => 'required|string|max:50',
            'ingredientes' => 'required|string|max:255',
            'section' => 'required|string|max:50',
            'allergens' => 'boolean',
            'price' => 'required|numeric',
            'url' => 'required|string|max:255'
        ]);

        $item->name = $validatedData['name'];
        $item->ingredientes = $validatedData['ingredientes'];
        $item->section = $validatedData['section'];
        $item->allergens = isset($validatedData['allergens']) ? true : false;
        $item->price = $validatedData['price'];
        $item->url = $validatedData['url'];
        $item->save();

        return redirect('/menu');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($item)
    {

        $menu = Menu::find($item);
        if ($menu) {
            $menu->delete();
        }
        return redirect('/menu');
    }

}
