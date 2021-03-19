<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;
use App\Models\PokeDex;

class PokeDexController extends Controller
{
    /**
     * Returnt the pokedex home page view.
     */
    public function index(){

        $types = Type::all();
        $pokemons = PokeDex::all();
        // $colours = Type::join('poke_dexes', 'poke_dexes.type 1', 'types.type')
        //             ->select('types.colours')
        //             ->get();
        return view('pokedex.index', [
            'types'=>$types,
            'pokemons'=>$pokemons,
        ]);
    }

    public function show($id){
        
        $pokemon = PokeDex::findOrFail($id);

        return view('pokedex.show',[
            'pokemon' => $pokemon,
        ]);
    }

    // public function store(){
    //     $types = Type::all();
    //     if(request('type') == 'all') {
    //         $pokemons = PokeDex::all();
    //     } else {
    //         $pokemons = PokeDex::where('type 1', request('type'))->orWhere('type 2', request('type'))->get();
    //     }
    //     return view('pokedex.index', [
    //         'types'=>$types,
    //         'pokemons'=>$pokemons,
    //         // 'colors' =>$colours,
    //     ]);
    // }
}