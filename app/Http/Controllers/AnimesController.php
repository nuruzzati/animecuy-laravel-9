<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;

class AnimesController extends Controller
{
    public function index()
    {
        $animes = Anime::latest() ;
    
        if(request('search')) {
            $animes->where('judul', 'like', '%' . request('search') . '%')
            ->orWhere('genre', 'like', '%' . request('search') . '%');
        }
    
        $animes = $animes->get(); // Ambil hasil query
    
        return view('user.animes.index', compact('animes'));
        
        
    }
    



     /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anime $anime
     * @return \Illuminate\Http\Response
     */
    public function show(Anime $anime)
    {
        return view('user.animes.show', compact('anime'));
    }
}
