<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required',
        'description' => 'required',
    ]);

    Item::create($validatedData);

    return redirect()->route('items.create')->with('success', 'Item created successfully');
}


    public function getRandom()
    {
        $item = Item::getRandomItem();

        return response()->json($item);
    }

    public function create()
    {
        return view('items.create');
    }

}
