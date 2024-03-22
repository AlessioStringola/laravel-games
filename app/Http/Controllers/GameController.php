<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Console;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\GameRequest;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games=Game::all();
        return view('game.index',compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::all();
        $consoles=Console::all();
        return view('game.create',compact('categories','consoles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GameRequest $request)
    {
        $file=$request->file('img');
        $game=Game::create([
            "title"=>$request->title,
            "description"=>$request->description,
            "category_id"=>$request->category,
            "price"=>$request->price,
            "img"=>$file?$file->store('public/images'):'public/images/default.jpg'
        ]);
        $game->consoles()->attach($request->console);
        return redirect()->route('game.index')->with('success','game created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        return view('game.show',compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        $categories=Category::all();
        $consoles=Console::all();
        return view('game.edit',compact('game','categories','consoles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GameRequest $request, Game $game)
    {
        $file=$request->file('img');
        $game->update([
            "title"=>$request->title,
            "description"=>$request->description,
            "category_id"=>$request->category,
            "price"=>$request->price,
            "img"=>$file?$file->store('public/images'):$game->img
        ]);
        $game->consoles()->detach();
        $game->consoles()->attach($request->console);
        return redirect()->route('game.index')->with('success','game updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route('game.index')->with('success','game destroyed');
    }

    /**
     * Filter by category
     */

     public function filterbycategory(Category $category){
        return view('game.filterbycategory',compact('category'));
     }
}
